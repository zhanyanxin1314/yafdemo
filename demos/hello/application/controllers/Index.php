<?php
class IndexController extends Yaf_Controller_Abstract {
   // default action name
   public function indexAction() { 
   echo YAF_VERSION; 
        $this->getView()->content = "Hello World";
   }
}
?>