<?php

namespace App\Command;

use App\Entity\Company;
use App\Entity\InvoicingInvoice;
use App\Entity\InvoicingRecurring;
use App\Entity\LogFourzerofour;
use App\Entity\StockItem;
use App\Helper\CompanyHelper;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'test:slack')]
class TestSlackCommand extends Command
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('Test log in slack')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command clean log 404')

            ->addArgument('company', InputArgument::OPTIONAL, 'Id of the company.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->logger->info('Slack confirm');

        return Command::SUCCESS;
    }
}