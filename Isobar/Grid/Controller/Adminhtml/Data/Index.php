<?php

namespace Isobar\Grid\Controller\Adminhtml\Data;

use Isobar\Grid\Controller\Adminhtml\Data;

class Index extends Data
{
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
