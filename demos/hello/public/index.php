<?php

use Yaf\Application;

define("APPLICATION_PATH",  dirname(dirname(__FILE__)));
$app = new Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap()->run();