<?php

use Yaf\Application;
use Yaf\Controller_Abstract;

class UserController extends Controller_Abstract
{
    public function infoAction()
    {
        //模块和控制器名称
        //var_dump($this->_module,$this->_name);

        //获取请求方式
        //$isGet = $this->_request->isGet();
        //var_dump($isGet);

        //获取当期请求action
        //var_dump($this->_request->action);

        //获取$_SERVER中的信息
        //$ip = $this->_request->getServer('REMOTE_ADDR','');

        //var_dump($ip);

        //获取$_GET中的值
        //$userId = $this->_request->getQuery('id','0');
        //var_dump($userId);

        //获取$_POST中的值
        /**$userId = $this->_request->getPost('id','0');
         * //var_dump($userId);**/
        //_response
        /**$this->_response->setBody('Hello World!');
         * $this->_response->prependBody('Yaf<br/>');
         * $this->_response->appendBody('Thanks');
         * $this->_response->response();**/
        //内部跳转
        /**$this->forward('Index','index');**/


        //redirect
        /**$this->redirect('/');**/

        //render
        /**$result = $this->render('info',[
         * 'userName' => time(),
         * 'content'  => uniqid('content')
         * ]);
         *
         * echo $result;**/
        //display
        /**$result = $this->display('info',[
         * 'userName' => time(),
         * 'content'  => uniqid('content')
         * ]);**/


        //控制器向view传递参数
        /**$this->_view->assign([
         * 'userName' => time(),
         * 'content'  => uniqid('content')
         * ]);**/

        //设置自动渲染关闭
        /**\Yaf\Dispatcher::getInstance()->autoRender(false);**/


    }

    public function forAction()
    {
        //视图的根目录
        //$path = $this->_view->getScriptPath();
        //exit($path);

        //render渲染的是目录下的文件
        /*$result = $this->_view->render('user/info.phtml',[
            'userName' => time(),
            'content'  => uniqid('content')
        ]);

         echo $result;
        */

        /*$this->_view->display('index/info.phtml',[
            'userName' => time(),
            'content'  => uniqid('content')
        ]);*/
        echo "dd1111";
        die;
        die;
    }
}