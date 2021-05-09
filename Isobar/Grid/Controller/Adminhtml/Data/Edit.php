<?php

namespace Isobar\Grid\Controller\Adminhtml\Data;

use Isobar\Grid\Controller\Adminhtml\Data;

class Edit extends Data
{
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $dataId = $this->getRequest()->getParam('id');
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Isobar_Grid::data');

        return $resultPage;
    }
}
