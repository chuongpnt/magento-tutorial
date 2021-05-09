<?php
namespace Isobar\Grid\Model\ResourceModel\Hamburger;

use Isobar\Grid\Model\ResourceModel\HamburgerResource as ResourceModel;
use Isobar\Grid\Model\Hamburger as Model;

/**
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'hamburger_collection';
    protected $_idFieldName = 'id';
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(
            Model::class,
            ResourceModel::class);
    }
}
