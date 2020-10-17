<?php

namespace Training\Test\Controller\Block;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Index implements HttpGetActionInterface
{
    /**
     * @var RawFactory
     */
    private $rawFactory;

    /**
     * @param RawFactory $rawFactory
     */
    public function __construct(
        RawFactory $rawFactory
    ) {
        $this->rawFactory = $rawFactory;
    }
    public function execute()
    {
        $rawResult = $this->rawFactory->create();
        $rawResult->setContents('<b>Hello world from block!</b>');
        return $rawResult;
    }
}
