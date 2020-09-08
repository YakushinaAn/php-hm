<?php

include "config.php";

$tpl = file_get_contents('showfull.tpl');
$id = $_GET['id'];
//$db = $_GET['DB'];
$sql = "SELECT name, path, seen FROM `allphoto` WHERE id='$id'";
$result = mysqli_query($connect, $sql);
$sqlnewopened = "UPDATE `allphoto` SET seen=seen+1 WHERE id=";


if (mysqli_num_rows($result) > 0) {
    $sqlresult = mysqli_query ($connect, $sqlnewopened.$id);
    $data = mysqli_fetch_assoc($result);
    $fullimage = $data["path"].$data["name"];
    $content = '<img src ="/'.$fullimage.'" style="width:100%;"';
    $content .= "Просмотры:".($data["seen"]+1);
    $title = 'picture id='.$id;
} else {
    
    echo "Изображения недоступны";
    
}

mysqli_close($connect);

$patterns = array( '/{title}/', '/{content}/');
$replace = array ($title, $content );
echo preg_replace ($patterns, $replace, $tpl );
?>