<?php
namespace Isobar\DemoServiceContract\Model\ResourceModel\Hamburger;

use Isobar\DemoServiceContract\Model\ResourceModel\HamburgerResource as ResourceModel;
use Isobar\DemoServiceContract\Model\Hamburger as Model;

/**
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'hamburger_collection';
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
