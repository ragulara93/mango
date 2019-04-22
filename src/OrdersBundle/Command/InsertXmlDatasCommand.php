<?php

namespace OrdersBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Input\InputArgument;

class InsertXmlDatasCommand extends ContainerAwareCommand
{
    protected static $defaultName = 'orders:insert-data';

    protected function configure()
    {
        $this
            ->setDescription('insert datas from xml files.')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to insert datas from xml files')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // This command insert datas into database from xml file

        // get entity manager
        $em = $this->getContainer()->get('doctrine')->getManager();

        // link to xml file
        $pathOfXml = $this->getContainer()->get('kernel')->getRootDir() . '/../xmlApi/';
        $fileName = "orders-test.xml";
        $fileNamePath = $pathOfXml . $fileName;

        // xml to object
        $datas = simplexml_load_file($fileNamePath);

        if(file_exists($fileNamePath)) {
            foreach($datas->orders->order as $key => $order) {
                $command = new \OrdersBundle\Entity\Command();

                $command->setMarketplace($order->marketplace);
                $command->setIdFlux($order->idFlux);
                $command->setOrderMrid($order->order_mrid);
                $command->setAmount($order->order_amount);

                $purchaseDate = new \DateTime($order->order_purchase_date);
                $command->setPurchaseDate($purchaseDate);

                $em->persist($command);
            }
        }
        $em->flush();

        $output->writeln('Insertion successful!');

    }
}