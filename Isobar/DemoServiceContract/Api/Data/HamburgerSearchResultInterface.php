<?php

namespace Isobar\DemoServiceContract\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface HamburgerSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \Isobar\DemoServiceContract\Api\Data\HamburgerInterface[]
     */
    public function getItems();

    /**
     * @param \Isobar\DemoServiceContract\Api\Data\HamburgerInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}
