<?php

namespace Isobar\DemoServiceContract\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;


class UpdateCommand extends Command
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
        $this->setName('isobar:grid:update');
        $this->setDescription('update user');
        $this->addOption('id', null, InputOption::VALUE_OPTIONAL, 'id');
        $this->addOption('staff', null, InputOption::VALUE_OPTIONAL, 'staff');
        $this->addOption('age', null, InputOption::VALUE_OPTIONAL, 'age');
        $this->addOption('location', null, InputOption::VALUE_OPTIONAL, 'location');
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
        $id     =    ($input->getOption('id') !="")     ? $input->getOption('id')    : '';
        $staff =    ($input->getOption('staff') !="")   ? $input->getOption('staff')    : '';
        $age =      ($input->getOption('age') !="")     ? $input->getOption('age')      : '';
        $location = ($input->getOption('location')!="") ? $input->getOption('location') : '';

        $output->writeln(print_r($this->_hamburgerManagement->updateUser($id,$staff, $age, $location)));
    }
}
