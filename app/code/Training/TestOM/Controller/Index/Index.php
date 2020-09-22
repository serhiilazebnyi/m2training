<?php

namespace Training\TestOM\Controller\Index;

use Training\TestOM\Model\PlayWithTest;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    private $test;

    public function __construct(
        PlayWithTest $test
    ) {
        $this->test = $test;
    }

    public function execute()
    {
        $this->test->run();
        exit;
    }
}
