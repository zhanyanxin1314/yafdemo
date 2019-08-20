<?php

use Yaf\Application;
use Yaf\Controller_Abstract;

class IndexController extends Controller_Abstract
{
    public function init()
    {
        //echo $this->getRequest()->controller.'<br/>';
        //echo $this->getRequest()->action.'<br/>';
        if ($this->getRequest()->action != 'index') {
            exit('禁止访问');
        }

    }


   public function indexAction() {

        //$service = new \service\BaseService('dbName');
        //$adapter = new \adapter\BaseAdapter('testAdapter');
        //$this->getView()->content = $adapter->name;

       $config = Application::app()->getConfig()->toArray();

       echo json_encode($config);
   }
}