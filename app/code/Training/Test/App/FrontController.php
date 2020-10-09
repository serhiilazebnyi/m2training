<?php

namespace Training\Test\App;

class FrontController extends \Magento\Framework\App\FrontController
{
    /**
    * @var \Magento\Framework\App\RouterListInterface
    */
    protected $routerList;
    
    /**
    * @var \Magento\Framework\App\ResponseInterface
    */
    protected $response;
    
    /**
    * @var \Psr\Log\LoggerInterface
    */
    private $logger;
    
    /**
    * @param \Magento\Framework\App\RouterListInterface $routerList
    * @param \Magento\Framework\App\ResponseInterface $response
    * @param \Psr\Log\LoggerInterface $logger
    */
    public function __construct(
        \Magento\Framework\App\RouterListInterface $routerList,
        \Magento\Framework\App\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::__construct($routerList, $response);
        $this->logger = $logger;
    }
    
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        foreach ($this->_routerList as $router) {
            $this->logger->info(get_class($router));
        }
        
//        main.INFO: Magento\Robots\Controller\Router\Interceptor [] []
//        main.INFO: Magento\Securitytxt\Controller\Router\Interceptor [] []
//        main.INFO: Magento\UrlRewrite\Controller\Router\Interceptor [] []
//        main.INFO: Magento\Framework\App\Router\Base\Interceptor [] []
//        main.INFO: Magento\Cms\Controller\Router\Interceptor [] []
//        main.INFO: Magento\Framework\App\Router\DefaultRouter\Interceptor [] []
        
        return parent::dispatch($request);
    }
}