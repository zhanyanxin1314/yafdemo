<?php

use extend\Di;
use Yaf\Application;
use Yaf\Bootstrap_Abstract;
use Yaf\Dispatcher;
use Yaf\Registry;

class Bootstrap extends Bootstrap_Abstract
{
    /**
     * @author zhang yanxin
     * @email  jhq0113@163.com
     */
	public function _initDb()
    {
        //echo __FUNCTION__.'<br/>';
    }

    /**
     * @author zhang yanxin
     * @email  jhq0113@163.com
     */
    public function _initComponents()
    {
        $config = Application::app()->getConfig();

        Registry::set('config', $config);
        Di::set('dbUser', $config->toArray()['db']);

    }

    /**
     * @author zhang yanxin
     * @email  jhq0113@163.com
     */
    public function _initTest()
    {
        //echo __FUNCTION__.'<br/>';
    }

    /**
     * @param Dispatcher $dispacher
     * @throws \Yaf\Exception\TypeError
     * @author Jiang Haiqiang
     * @email  jhq0113@163.com
     */
    public function _initRoute(Dispatcher $dispacher)
    {
        $router = $dispacher->getRouter();


        //$route = new \Yaf\Route\Simple('m','c','a');
        //$route = new \Yaf\Route\Supervar('r');
        //正则路由
        /*$route = new \Yaf\Route\Regex(
                '#regex/(\d+)/(\d+)#',
                [
                    'module'      => 'rest',
                    'controller'  => 'route',
                    'action'      => 'index',
                ],
                [
                    1 => 'param1',
                    2 => 'param2',
                ]
        );*/

        /*$route = new \Yaf\Route\Rewrite(
            'rewrite/:param1/:param2',
            [
                'module'      => 'rest',
                'controller'  => 'route',
                'action'      => 'index',
            ]
        );

        $router->addRoute('rewrite',$route);*/

        $router->addConfig(Application::app()->getConfig()->routes);
    }

    /**初始化日志组件
     * @param Dispatcher $dispatcher
     * @author zhang yanxin
     */
    public function _initLog(Dispatcher $dispatcher)
    {
        $logConfig = Application::app()->getConfig()->toArray()['log'];
        $logConfig['fileName'] = $logConfig['logPath'] . '/' . date('Y-m') . '/' . date('d') . '/yaf.log';
        unset($logConfig['logPath']);
        Di::set('log', $logConfig);

        Di::get('log')->debug('log set done!');
    }
}