<?php

namespace Training\TestOM\Controller\Adminhtml\Index;

use Training\TestOM\Model\Test;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
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
        exit;
    }
}
