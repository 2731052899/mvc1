<?php
namespace libs;
//index.php/模块/控制（类）/动作
if(!defined("mvc")){
    die("没有定义");
}
class rooter{
    //指的是模块
    private static $m;
    private static $c;
    private static $a;
    function getInfo(){
        $path = (isset($_SERVER["PATH_INFO"]))?substr($_SERVER["PATH_INFO"],1):"index/index/int";
        var_dump(explode("/",$path));
        $pathArr = (explode("/",$path));
        self::$m = empty($pathArr[0])?"idnex":$pathArr[0];
        self::$c = empty($pathArr[1])?"idnex":$pathArr[1];
        self::$a = empty($pathArr[2])?"int":$pathArr[2];
//        echo    self::$m."/".self::$c."/".self::$a;
    }
    function run(){
        $this->getInfo();
        echo APP_NAME."<br>";
        $path = str_replace('\\',"/",APP_NAME);
        $mpath = $path."/".self::$m;

        echo $mpath;
        if(is_dir($mpath)){
            $curl = $mpath."/".self::$c.".php";
            if (is_file($curl)){
                include_once $curl;
                if(class_exists(self::$c)){

                        $classname = self::$c;
                        $obj = new $classname();
                    if(method_exists($obj,self::$a)){
                        $method = self::$a;
                        $obj->$method();
                        echo "<br>这个动作存在";
                    }else{
                        echo "<br>这个动作不存在";
                    }
                    echo "<br>这个class文件存在";
                }else{
                    "这个class文件不存在";
                }
                echo "<br>这个类文件存在";
            }else{
                echo "<br>这个类文件不存在";
            }
            echo "<br>这个文件存在";
        }else{
            echo "<br>文件不存在";
        }
    }
}
//$curl = $mpath."/".self::$c.".php";
//if(is_file($curl)){
//    include_once $curl;
//}if(class_exists(self::$c)){
//    $classname = self::$c;
//    $obj = new $classname;
//    if(method_exists($obj,self::$a)){
//        $method = self::$a;
//
//    }else{
//        die("this action not exists");
//    }
//} else{
//    die("this class not exists");
//}