<?php
namespace Isobar\Grid\Block;
class StaffList extends \Magento\Framework\View\Element\Template
{
    public function _prepareLayout()
    {
        parent::_prepareLayout();

        $this->setText('Testing Prepare Layout');

        // add Home breadcrumb
        $breadcrumbs = $this->getLayout()->getBlock('breadcrumbs');
        if ($breadcrumbs) {
            $breadcrumbs->addCrumb(
                'home',
                [
                    'label' => __('Home'),
                    'title' => __('Go to Home Page'),
                    'link' => $this->_storeManager->getStore()->getBaseUrl()
                ]
            )->addCrumb(
                'search',
                ['label' => "Sample", 'title' => "Sample"]
            );
        }

        //$this->setTemplate('list1.phtml');

        return $this;
    }

    public function getMyCustomMethod()
    {
        return '<b>Test Block StaffList</b>';
    }

    public function toHtml()
    {
        return parent::toHtml() . "isobar";
    }
//
    public function _beforeToHtml()
    {
        return '<b>Test before</b>';
    }
//
//    public function _toHtml()
//    {
//        return '<b>Test toHtml</b>';
//    }
//
//    public function _aftertoHtml($html)
//    {
//        return '<b>Test afterHtml</b>';
//    }



}
