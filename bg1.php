
<!--Первая часть с элементами второй -->

<table border = "1" width = 100% height = 100%>
    <tr>
    <td coldspan = "3" > 
        <center>
        <?php
$small = scandir("small");
$big = scandir("big");

for ($i=2;$i<count($small);$i++) :?>

     <a href="big/<?=$big[$i]?>"target="_blank"><img src="small/<?=$small[$i]?>" width="400" align = "middle"></a>


<?php
    endfor;
?>
    </center>
    </td>  
    </tr>
    
    
    <!--Дополнительное задание-->

<meta charset="UTF-8">
<form action = "server.php" method = "post" enctype = "multipart/form-data">
    <p>Загрузить</p>
    <input type="file" name="photo"><br><br>
    <input type="submit" value="Сохранить">
</form>


    