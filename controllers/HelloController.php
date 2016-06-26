<?php

namespace app\controllers;
use yii\web\Controller;

use yii\web\Cookie;

class HelloController extends Controller
{

    public function actionIndex()
    {
        //请求组件
        $request = \YII::$app->request;
        //echo $request->get('id', 3);//获取get传参，id是name， 3是默认值
        echo $request->post('name', 13);//获取post传参，name是name， 13是默认值

        if($request->isGet)//判断是否是get请求
        {
          echo 'this is get method!';
        }

        if($request->isPost)//判断是否是post请求
        {
          echo 'this is post method!';
        }

        //获取用户的ip
        echo $request->userIp;
        
        //更多关于请组件的内容访问这里http://www.yiichina.com/doc/guide/2.0/runtime-requests
        //echo "hello world!";
    }

    public function actionResponse()
    {
      $res = \YII::$app->response;

      //定义返回状态码
      //$res->statusCode = '404';
      //设置响应头
      //$res->headers->set('pragma', 'no-cache');//不缓存
      //$res->headers->set('pragma', 'max-age=5');//缓存5秒钟
      //删除头信息
      //$res->headers->remove('pragma');//删除pragma头信息

      //跳转
      //$res->headers->add('Location', 'http://www.baidu.com');//不是很好使
      //$this->redirect('http://www.baidu.com', 302);//这个好使

      //下载
      //$res->headers->add('content-disposition', 'attachment; filename="a.jpg"'); 
      //$res->sendFile('./robots.txt');
      //更多响应组件 http://www.yiichina.com/doc/guide/2.0/runtime-responses
    }

    public function actionSession()
    {
      $session = \YII::$app->session;
      
      $session->open();//开启session
      //if($session->isActive) //验证session是否开启
      //{
        //echo 'session is active';
      //} 
      //$session->set('user', '张三');// 添加

      //$session->remove('user');// 删除

      // 以数组形式
      //$session['user'] = '张三';// 添加
      //unset($session['user']); 
      //echo $session->get('user');
    }

    public function actionCookie()
    {
      $cookies = \YII::$app->response->cookies;

      //$cookies_data = array('name'=>'user', 'value'=>'likdkdksi');// 如果要修改就直接改值就行了
      //$cookies->add(new Cookie($cookies_data));
      //$cookies->remove('user');// 删除

      //获取session
      //$cookies_res = \YII::$app->request->cookies;
      //echo $cookies_res->getValue('user', 20);//20是默认值
    }
}
