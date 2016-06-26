<?php

namespace app\controllers;
use yii\web\Controller;

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

}
