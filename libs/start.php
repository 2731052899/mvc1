<?php
//定义一些常用常量
//服务器所在的根目录
if(!defined("mvc")){
    die("没有定义");
}
//
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]);
//入口文件路径
define("ENTRY_PATH",ROOT_PATH.$_SERVER["SCRIPT_NAME"]);
//框架所在路径
define("MAIN_PATH",dirname(ENTRY_PATH)."/");
//核心库所在路径
define("LIBS_PATH",MAIN_PATH."libs"."/");
//插件所在路径
define("PLU_PATH",MAIN_PATH."plugins"."/");
//模板所在路径
define("TPL_PATH",APP_NAME."compile".DIRECTORY_SEPARATOR);
//以下定义的是通过http获取的服务地址
//服务器地址
define("HOST_ADD","https//".$_SERVER["HTTP_HOST"]);
//单文件入口地址
define("ENTRY_ADD",HOST_ADD.$_SERVER["SCRIPT_NAME"]."/");
//框架入口地址
define("MAIN_ADD",dirname(HOST_ADD.$_SERVER["SCRIPT_NAME"]."/")."/");
//当前应用地址
define("APP_ADD",MAIN_ADD.APP_DIR_NAME."/");
//css地址
define("CSS_ADD",APP_ADD."css"."/");
//静态文件的地址
define("STATIC_ADD",APP_ADD."static"."/");
//js地址
define("JS_ADD",APP_ADD."js"."/");
//img地址
define("IMG_ADD",APP_ADD."img"."/");
//font地址
define("FONT_ADD",APP_ADD."font"."/");
//var_dump(LIBS_PATH);
//echo "<pre>";
//var_dump(ROOT_PATH);
//var_dump(PLU_PATH);
include_once LIBS_PATH."engin.class.php";
include_once LIBS_PATH."rooter.php";
$routr = new \libs\rooter();
$routr ->run();