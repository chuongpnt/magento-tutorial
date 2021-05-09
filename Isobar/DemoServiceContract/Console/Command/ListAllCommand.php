<?php

namespace Isobar\DemoServiceContract\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Input\InputOption;
use Isobar\DemoServiceContract\Api\HamburgerRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class ListAllCommand extends Command
{


    /**
     * @var \Isobar\DemoServiceContract\Api\HamburgerRepositoryInterface
     */
    protected $_hamburgerManagement;


    /**
     * CreateCommand constructor.
     * @param HamburgerManagementInterface $hamburgerManagement
     */
    public function __construct(
        \Isobar\DemoServiceContract\Api\HamburgerManagementInterface $hamburgerManagement
    ) {
        $this->_hamburgerManagement = $hamburgerManagement;
        parent::__construct();
    }

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('isobar:grid:listall');
        $this->setDescription('list all');
        parent::configure();
    }

    /**
     * CLI command description
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(print_r($this->_hamburgerManagement->listAllUser()));
    }
}
