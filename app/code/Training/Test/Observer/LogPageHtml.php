<?php

namespace Training\Test\Observer;

use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;
use Magento\Framework\Event\Observer;

class LogPageHtml implements ObserverInterface
{
    /**
    * @var LoggerInterface
    */
    private $logger;
    
    /**
    * @param LoggerInterface $logger
    */
    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }
    
    public function execute(Observer $observer)
    {
        $response = $observer->getEvent()->getData('response');
        $this->logger->debug($response->getBody());
    }
}