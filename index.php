<?php 


	header("content-type:text/html;charset=utf-8");
	define('APP_NAME','Index');		//项目名称（Index一般为前端名称）
	define('APP_PATH', './Index/');	//项目路径(一般APP_PATH的名称与上面的一致，并且写完之后要加一个/，./的意思是在同一目录下
	include './ThinkPHP/ThinkPHP.php';//引入ThinkPHP核心运行文件
	define('APP_DEBUG',TRUE);		//开启调试模式
 

 ?>