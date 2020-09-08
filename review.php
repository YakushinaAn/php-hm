<?php
$z = array(
  1 => strip_tags($_POST['name']),
  2 => strip_tags($_POST['else'])
);
if($z[1] && $z[2]){
$fp = fopen("comments.txt", "a+"); // режим записи
    $mytext = "<br>Имя: ".$z[1]."<br>Отзыв:<br>".$z[2]."<br><br>" ;
    $save = fwrite($fp, $mytext); // запись в файл
    fclose($fp); // закрытие файла
    
    header("Location:".$_SERVER['PHP_SELF']); // обновить страницу; обновлённая версия содержит опубликованный комментарий
    
    exit;  
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
</head>
    
<body>
    
    
    <p><?php $a = file_get_contents("comments.txt"); echo $a; ?></p>
   
    
    
    <form action="" method="post" align="center">
    <p>Ваше имя</p>
    <input type="text" name="name" ><br><br>
    <p>Оставить отзыв</p>
    <textarea name="else" cols = "30" rows="10"></textarea><br>   
        
    <input type="submit"  value="Отправить">
    
    </form>
    
    
    
    
    
    
    
    </body>