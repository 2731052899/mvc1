<?php
//记录一个口令
define("mvc",true);
define("APP_DIR_NAME","application");
//应用文件夹   php常用的魔术常量 魔术方法_get_set 全局的魔术方法  __autoload
define("APP_NAME",__DIR__."/"."application");
//echo __DIR__;//获取当前程序运行的目录
//echo __FILE__;//获取当前运行的程序文件//在本地文件夹的地址
//_class_获取当前类的名字
//_method_ 获取当前函数的名字
//_line_当前程序所在的行
//DIRECTORY_SEPARATOR 在当前系统中的斜杠 /
//超全局变量 $_SERVER
require_once "libs/start.php";