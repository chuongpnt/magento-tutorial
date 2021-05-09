<?php

namespace Isobar\Grid\Model\ResourceModel;

class HamburgerResource extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'hamburger_resource_model';

    protected function _construct()
    {
        $this->_init('isobar_demo','id');
        $this->_useIsObjectNew = true;
    }
}
