<?php

namespace Isobar\DemoServiceContract\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface HamburgerRepositoryInterface
{
    /**
     * @param int $id
     * @return \Isobar\DemoServiceContract\Api\Data\HamburgerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($id);

    /**
     * @param \Isobar\DemoServiceContract\Api\Data\HamburgerInterface $hamburger
     * @return \Isobar\DemoServiceContract\Api\Data\HamburgerInterface
     */
    public function save(\Isobar\DemoServiceContract\Api\Data\HamburgerInterface $hamburger);

    /**
     * @param \Isobar\DemoServiceContract\Api\Data\HamburgerInterface $hamburger
     * @return void
     */
    public function delete(\Isobar\DemoServiceContract\Api\Data\HamburgerInterface $hamburger);

    /**
     * @param $id
     * @return mixed
     */
    public function deleteById($id);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Isobar\DemoServiceContract\Api\Data\HamburgerSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}
