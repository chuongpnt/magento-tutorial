<?php

namespace Isobar\Grid\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface HamburgerSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \Isobar\Grid\Api\Data\HamburgerInterface[]
     */
    public function getItems();

    /**
     * @param \Isobar\Grid\Api\Data\HamburgerInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}
