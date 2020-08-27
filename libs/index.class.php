<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    这bu是我的首页
    <?php foreach( $data as $v) {?>
<ul>
    <li><?php echo $name?></li>
    <li><?php echo $age?></li>
    <li><?php echo $sex?></li>
</ul>
    <?php }?>
</body>
</html>