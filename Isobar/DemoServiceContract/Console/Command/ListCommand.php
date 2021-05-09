<?php

namespace Isobar\DemoServiceContract\Console\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Input\InputOption;

class ListCommand extends Command
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
        $this->setName('isobar:grid:list');
        $this->setDescription('list user');
        $this->addOption('id', null, InputOption::VALUE_OPTIONAL, 'Staff Id');
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
        $id = $input->getOption('id') ;
        if($id != ""){
            $output->writeln(print_r($this->_hamburgerManagement->listUser($id)));
        }else{
            $output->writeln('Please Input Id ');
        }
    }
}
