<?php


use Yaf\Controller_Abstract;
use Yaf\Registry;

class ContainerController extends Controller_Abstract
{

    public function indexAction()
    {
        if (Registry::has('config')) {
            $config = Registry::get('config');
            Registry::del('config');
            if (!Registry::has('config')) {
                exit(json_encode($config->toArray(), JSON_UNESCAPED_UNICODE));
            }
        }
    }
}