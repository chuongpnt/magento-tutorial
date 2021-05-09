<?php

namespace Isobar\DemoServiceContract\Model;

use Isobar\DemoServiceContract\Api\HamburgerManagementInterface;
use Isobar\DemoServiceContract\Api\HamburgerRepositoryInterface;

use Magento\Framework\Api\SearchCriteriaBuilder;

class HamburgerManagement implements HamburgerManagementInterface
{
    protected $_hamburgerFactory;
    protected $_hamburgerRepository;
    protected $_searchCriteriaBuilder;

    public function __construct(
        HamburgerFactory $hamburgerFactory,
        HamburgerRepositoryInterface $hamburgerRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->_hamburgerFactory = $hamburgerFactory;
        $this->_hamburgerRepository = $hamburgerRepository;
        $this->_searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * @inheritDoc
     */
    public function createUser($staff, $age, $location)
    {
        $data = ['staff' => $staff, 'age' => $age, 'location' => $location];
        $info = $this->_hamburgerFactory->create()->addData($data);
        $this->_hamburgerRepository->save($info);
        return $info->getData();
    }

    /**
     *
     */

    public function updateUser($id,$staff, $age, $location)
    {
        $info = $this->_hamburgerRepository->getById($id);
        $info->setStaff($staff);
        $info->setAge($age);
        $info->setLocation($location);
        $this->_hamburgerRepository->save($info);
        return $info->getData();
    }

    /**
     *
     */

    public function deleteUser($id)
    {
        $result = $this->_hamburgerRepository->deleteById($id);
        return $result;
    }

    /**
     *
     */

    public function listUser($id)
    {
        $info = $this->_hamburgerRepository->getById($id);
        return $info->getData();
    }

    /**
     *
     */

    public function listAllUser()
    {
        $_filter = $this->_searchCriteriaBuilder
            ->addFilter("age", "30", "gteq")->create();
            //->addFilter("staff", '%Phan%', "like")->create();
        $list = $this->_hamburgerRepository->getList($_filter);
        $results = $list->getItems();
        $array_data = [];
        foreach ($results as $result) {
          $array_data[] = $result->getData();
        }
        return $array_data;
    }
}
