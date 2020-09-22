<?php

namespace Training\TestOM\Controller\Index;

use Training\TestOM\Model\Test;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index extends Action implements HttpGetActionInterface
{
    private $test;

    public function __construct(
        Test $test,
        Context $context
    ) {
        $this->test = $test;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->test->log();
    }
}
