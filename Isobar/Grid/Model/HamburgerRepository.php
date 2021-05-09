<?php

namespace Isobar\Grid\Model;

use Isobar\Grid\Api\Data\HamburgerInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class HamburgerRepository implements \Isobar\Grid\Api\HamburgerRepositoryInterface
{
    protected $hamburgerFactory;
    protected $hamburgerSearchResultFactory;
    protected $hamburgerCollectionFactory;
    protected $resourceModel;

    public function __construct(
        \Isobar\Grid\Model\HamburgerFactory $hamburgerFactory,
        \Isobar\Grid\Model\HamburgerSearchResultFactory $hamburgerSearchResultFactory,
        \Isobar\Grid\Model\ResourceModel\Hamburger\CollectionFactory $hamburgerCollectionFactory,
        \Isobar\Grid\Model\ResourceModel\HamburgerResource $resourceModel
    ) {
        $this->hamburgerFactory = $hamburgerFactory;
        $this->hamburgerSearchResultFactory = $hamburgerSearchResultFactory;
        $this->hamburgerCollectionFactory = $hamburgerCollectionFactory;
        $this->resourceModel = $resourceModel;
    }

    /**
     * @inheritDoc
     * @throws NoSuchEntityException
     */
    public function getById($id)
    {
        $hamburger = $this->hamburgerFactory->create();
        $this->resourceModel->load($hamburger, $id);
        if (!$hamburger->getId()) {
            throw NoSuchEntityException::singleField(HamburgerInterface::ID, $id);
        }
        return $hamburger;
    }

    /**
     * @inheritDoc
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {

        // Build Search Result
        $searchResults = $this->hamburgerSearchResultFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $collection = $this->hamburgerCollectionFactory->create();

        // Add filters to collection
        foreach ($searchCriteria->getFilterGroups() as $filterGroup) {
            $fields = [];
            $conditions = [];
            foreach ($filterGroup->getFilters() as $filter) {
                $condition = $filter->getConditionType() ? $filter->getConditionType() : 'eq';
                $fields[] = $filter->getField();
                $conditions[] = [$condition => $filter->getValue()];
            }
            if ($fields) {
                $collection->addFieldToFilter($fields, $conditions);
            }
        }

        $searchResults->setTotalCount($collection->getSize());

        // Add sort order to collection
        $sortOrders = $searchCriteria->getSortOrders();
        if ($sortOrders) {
            /** @var SortOrder $sortOrder */
            foreach ($sortOrders as $sortOrder) {
                $collection->addOrder(
                    $sortOrder->getField(),
                    ($sortOrder->getDirection() == SortOrder::SORT_ASC) ? 'ASC' : 'DESC'
                );
            }
        }

        // Add paging to collection
        $collection->setCurPage($searchCriteria->getCurrentPage());
        $collection->setPageSize($searchCriteria->getPageSize());
        $objects = [];
        foreach ($collection as $objectModel) {
            $objects[] = $objectModel;
        }

        // Build Search Result
        $searchResults->setItems($objects);

        return $searchResults;
    }

    /**
     * @inheritDoc
     * @throws CouldNotSaveException
     */
    public function save(\Isobar\Grid\Api\Data\HamburgerInterface $hamburger)
    {
        try {
            $this->resourceModel->save($hamburger);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }
        return $hamburger;
    }

    /**
     * @inheritDoc
     */
    public function delete(\Isobar\Grid\Api\Data\HamburgerInterface $hamburger)
    {
        // TODO: Implement delete() method.
        try {
            $this->resourceModel->delete($hamburger);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($id)
    {
        // TODO: Implement deleteById() method.
        return $this->delete($this->getById($id));
    }
}
