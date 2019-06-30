<?php 
/*
初始化文件
最先运行该文件


设置报错级别



*/


//初始化当前路径
define('ROOT',dirname(__DIR__));


define('DEBUG',true);
include(ROOT.'/include/conf.class.php');
include(ROOT.'/include/db.class.php');
include(ROOT.'/include/log.class.php');
include(ROOT.'/include/lib_base.php');


if(defined('DEBUG')){
	error_reporting(E_ALL);
}else{
	error_reporting(0);
}






















?>