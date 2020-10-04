<?php

namespace Training\Test\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\Response\RedirectInterface;
use Magento\Framework\App\ActionFlag;
use Magento\Framework\App\ActionInterface;

class RedirectToLogin implements ObserverInterface
{
    /**
    * @var RedirectInterface
    */
    private $redirect;
    
    /**
    * @var ActionFlag
    */
    private $actionFlag;
    
    /**
    * @param RedirectInterface $redirect
    * @param ActionFlag $actionFlag
    */
    public function __construct(
        RedirectInterface $redirect,
        ActionFlag $actionFlag
    ) {
        $this->redirect = $redirect;
        $this->actionFlag = $actionFlag;
    }
    
    // Метод execute() должен быть публичным
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $request = $observer->getEvent()->getData('request');
        if ($request->getFullActionName() == 'catalog_product_view') {
            $controller = $observer->getEvent()->getData('controller_action');
            $this->actionFlag->set(
                '',
                ActionInterface::FLAG_NO_DISPATCH,
                true
            );

            $this->redirect->redirect($controller->getResponse(), 'customer/account/login');
        }
    }
}