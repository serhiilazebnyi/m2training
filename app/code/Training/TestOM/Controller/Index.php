<?php

namespace Training\TestOM\Controller;

use Training\TestOM\Model\Test;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index extends Action implements HttpGetActionInterface
{
    private $test;

    public function __construct(
        Test $test
    ) {
        $this->test = $test;
    }

    public function execute()
    {
        $this->test->log();
    }
}
