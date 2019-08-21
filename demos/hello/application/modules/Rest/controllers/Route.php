<?php

use Yaf\Application;
use Yaf\Controller_Abstract;

class RouteController extends Controller_Abstract
{
    public function indexAction()
    {
        $params['params'] = $this->_request->getParams();
        $params['query'] = $this->_request->getQuery();
        //$this->_request->getParam()
        exit(json_encode($params, JSON_UNESCAPED_UNICODE));
    }
}