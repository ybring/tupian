<?php

$img = $_POST['img']; //获取过来的base64图片 ，要删除 data:image/jpeg;base64,
$img=strstr($img, ',');//删除data:image/jpeg;base64  删除逗号之前的
$img = ltrim($img, ",");//删除 逗号
// 截取
//if (preg_match('/^(data:\s*image\/\w+;base64,)/', $img, $result)){
//$img = str_replace($result[1], '', $img);
//}
// 解码		生成图片
$img = base64_decode($img);
//echo $img;
// 写入文件
file_put_contents('1.png', $img);