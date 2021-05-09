<?php

namespace Isobar\Grid\Console\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;



class CreateCommand extends Command
{

    /**
     * @var \Isobar\Grid\Api\HamburgerRepositoryInterface
     */
    protected $_hamburgerManagement;


    /**
     * CreateCommand constructor.
     * @param HamburgerManagementInterface $hamburgerManagement
     */
    public function __construct(
        \Isobar\Grid\Api\HamburgerManagementInterface $hamburgerManagement
    ) {
        $this->_hamburgerManagement = $hamburgerManagement;
        parent::__construct();
    }


    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('isobar:training:create');
        $this->setDescription('Create User');
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
        $staff =    ($input->getOption('staff') !="")   ? $input->getOption('staff')    : '';
        $age =      ($input->getOption('age') !="")     ? $input->getOption('age')      : '';
        $location = ($input->getOption('location')!="") ? $input->getOption('location') : '';

        $output->writeln(print_r($this->_hamburgerManagement->createUser($staff, $age, $location)));

    }
}
