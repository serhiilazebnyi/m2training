<?php

namespace Training\Test\Controller\Index;

class Index implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    private $resultRawFactory;
    
    public function __construct(
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
    ) {
        $this->resultRawFactory = $resultRawFactory;
    }
    
    public function execute()
    {
        $resultRaw = $this->resultRawFactory->create();
        $resultRaw->setContents('simple text');
        
        return $resultRaw;
    }
}