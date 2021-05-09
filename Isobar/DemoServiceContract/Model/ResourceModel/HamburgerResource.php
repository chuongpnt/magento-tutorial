<?php

namespace Isobar\DemoServiceContract\Model\ResourceModel;

class HamburgerResource extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'hamburger_resource_model';

    protected function _construct()
    {
        $this->_init('Isobar_Demo','id');
        $this->_useIsObjectNew = true;
    }
}
