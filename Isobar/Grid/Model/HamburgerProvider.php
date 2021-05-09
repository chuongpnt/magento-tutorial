<?php

namespace Isobar\Grid\Model;

use Magento\Ui\DataProvider\AbstractDataProvider;
use Isobar\Grid\Model\ResourceModel\Hamburger\CollectionFactory;

class HamburgerProvider extends AbstractDataProvider
{
    /**
     * @var ResourceModel\Hamburger\Collection
     */
    protected $collection;


    /**
     * @var array
     */
    protected $loadedData;

    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $pageCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $pageCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection    = $pageCollectionFactory->create();
        $this->meta           = $this->prepareMeta($this->meta);
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * Prepares Meta
     *
     * @param array $meta
     * @return array
     */
    public function prepareMeta(array $meta)
    {
        return $meta;
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        foreach ($items as $page) {
            $this->loadedData[$page->getId()] = $page->getData();
        }

        return $this->loadedData;
    }
}
