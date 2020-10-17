<?php

namespace Training\Test\Controller\Block;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\LayoutFactory;

class Index extends \Magento\Framework\App\Action\Action implements HttpGetActionInterface
{
    /**
     * @var LayoutFactory
     */
    private $layoutFactory;

    /**
     * @param Context $context
     * @param LayoutFactory $layoutFactory
     */
    public function __construct(
        Context $context,
        LayoutFactory $layoutFactory
    ) {
        $this->layoutFactory = $layoutFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $layout = $this->layoutFactory->create();
        $block = $layout->createBlock('Training\Test\Block\Test');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
