<?php

use extend\Di;
use extend\log\File;
use Yaf\Application;
use Yaf\Controller_Abstract;

class IndexController extends Controller_Abstract
{
    public function init()
    {
        //echo $this->getRequest()->controller.'<br/>';
        //echo $this->getRequest()->action.'<br/>';
//        if ($this->getRequest()->action != 'index') {
//            exit('禁止访问');
//        }

        Di::get('log')->debug('init start');

        // echo $this->getRequest()->controller.'<br/>';
        // echo $this->getRequest()->action.'<br/>';
        if ($this->getRequest()->action != 'index') {
            exit('禁止访问');
        }

        Di::get('log')->debug('init end!');

    }

    public function indexAction()
    {
        //$service = new \service\BaseService('dbName');
        //$adapter = new \adapter\BaseAdapter('testAdapter');
        //$this->getView()->content = $adapter->name;
        //$config = Application::app()->getConfig()->toArray();
        //cho json_encode($config,JSON_UNESCAPED_UNICODE);

        //\extend\Di::get('log')->info('index action start run');
        //$service = new \service\BaseService('dbName');

        //$adapter = new \adapter\BaseAdapter('testAdapter');

        //$this->getView()->content = $adapter->name;

        /**
         * @var File $log
         */
        $log = Di::get('log');
        $log->info('wo shi info {level} ', [
            'level' => 'info'
        ]);

        //$config = \Yaf\Application::app()->getConfig()->toArray();

        //echo json_encode($config);

        //\extend\Di::get('log')->info('index action run end');
        die;
    }


    public function index1Action()
    {
        //$service = new \service\BaseService('dbName');
        //$adapter = new \adapter\BaseAdapter('testAdapter');
        //$this->getView()->content = $adapter->name;
        $config = Application::app()->getConfig()->toArray();
        echo json_encode($config, JSON_UNESCAPED_UNICODE);
    }

}