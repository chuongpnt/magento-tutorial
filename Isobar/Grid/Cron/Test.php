<?php
namespace Isobar\Grid\Cron;

use Psr\Log\LoggerInterface;

class Test {
    protected $logger;

    public function __construct(
        LoggerInterface $logger,
        \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory
    ) {
        $this->logger = $logger;
        $this->orderCollectionFactory = $orderCollectionFactory;
    }

    /**
     * Write to system.log
     *
     * @return void
     */
    public function execute() {

        $orderCollection = $this->orderCollectionFactory
            ->create()
            ->addAttributeToSelect('*')
            ->addAttributeToFilter('status', ['eq'=> 'pending']);

        $writer = new \Laminas\Log\Writer\Stream(BP . '/var/log/pending_order.log');
        $logger = new \Laminas\Log\Logger();
        $logger->addWriter($writer);


        $logger->info($orderCollection->getData()) ;
    }
}
