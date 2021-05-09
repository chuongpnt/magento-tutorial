<?php

namespace Isobar\Grid\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface HamburgerRepositoryInterface
{
    /**
     * @param int $id
     * @return \Isobar\Grid\Api\Data\HamburgerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($id);

    /**
     * @param \Isobar\Grid\Api\Data\HamburgerInterface $hamburger
     * @return \Isobar\Grid\Api\Data\HamburgerInterface
     */
    public function save(\Isobar\Grid\Api\Data\HamburgerInterface $hamburger);

    /**
     * @param \Isobar\Grid\Api\Data\HamburgerInterface $hamburger
     * @return void
     */
    public function delete(\Isobar\Grid\Api\Data\HamburgerInterface $hamburger);

    /**
     * @param $id
     * @return mixed
     */
    public function deleteById($id);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Isobar\Grid\Api\Data\HamburgerSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}
