<?php

use Yaf\Application;
use Yaf\Controller_Abstract;
use Yaf\Dispatcher;

/**
 * Class ErrorController
 */
class ErrorController extends Controller_Abstract
{
    public function init()
    {
        Dispatcher::getInstance()->disableView();
    }

    /**
     * @param $exception
     */
    public function errorAction($exception)
    {
        var_dump($exception->getMessage());
    }
}