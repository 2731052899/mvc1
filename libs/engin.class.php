<?php
// function compile($file)
// {
     $con = file_get_contents("../application/template/index.html");

     $reg = '/\{(\$[a-zA-Z]\w*)\}/';
     $one = preg_replace_callback($reg, function ($val) {
         return '<?php echo ' . $val[1] . '?>';
     }, $con);//变量解析完了
     $reg1 = '/\{foreach([^\{]*)\}/';
     $two = preg_replace_callback($reg1, function ($val) {
         return '<?php foreach(' . $val[1] . ') {?>';
     }, $one);//foreach的开始解析完

     $reg1 = '/\{\/foreach\}/';
     $three = preg_replace_callback($reg1, function ($val) {
         return '<?php }?>';
     }, $two);//foreach的开始解析完


//function display($file){
//    $result = $this->compile($file);
//    $outFileName = $this->compoleDir.basename($file,".html").".php";
//    file_put_contents($outFileName,$result);
//    foreach ($this->arr as $k=>$v){
//        $$k = $v;
//    }
//    include_once $outFileName;
//}
//function assign($attr,$val){
//    $this->arr[$attr]=$val;
//}
    $data = array(
     $name = "zhangsan",
     $sex = "man",
     $age = "16"
);
     file_put_contents("index.class.php", $three);
     include_once "index.class.php";

// }
 ?>