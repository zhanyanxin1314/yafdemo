<?php
class IndexController extends \Yaf\Controller_Abstract {

   public function indexAction() {

        //$service = new \service\BaseService('dbName');
        //$adapter = new \adapter\BaseAdapter('testAdapter');
        //$this->getView()->content = $adapter->name;

       $config = \Yaf\Application::app()->getConfig()->toArray();

       echo json_encode($config);
   }
}