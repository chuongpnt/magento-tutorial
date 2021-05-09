<?php

namespace Isobar\DemoServiceContract\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class DeleteCommand extends Command
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
        $this->setName('isobar:grid:delete');
        $this->setDescription('Delete User');
        $this->addOption('id', null, InputOption::VALUE_OPTIONAL, 'staff id');
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
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        // todo: implement CLI command logic here
        $id = $input->getOption('id') ;
        if($id != ""){
            if($this->_hamburgerManagement->deleteUser($id)){
                $output->writeln('Delete Successful');
            }
            //$output->writeln(print_r($this->_hamburgerManagement->deleteUser($id)));
        }else{
            $output->writeln('Please Input Id ');
        }
    }
}
