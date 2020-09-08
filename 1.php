<?php

include "config.php";
$sql  = "SELECT * FROM `allphoto` ORDER BY seen DESC";
$sqlupdseen = "UPDATE `allphoto` SET seen=seen+1 WHERE id=";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
while ($data = mysqli_fetch_assoc($result)){
  $sqlres = mysqli_query($connect, $sqlupdseen.$data["id"]);
  $smallimg = $data["path"].$data["name"];
  $seen = $data["seen"];
  ?>  

<!--<a href="/<?=$smallimg?>" target="_blank"><img src="/<?=$smallimg?>" width="100"></a>-->
<a href="/showfull.php?id=<?=$data["id"]?>" target="_blank"><img src="/<?=$smallimg?>" width="100"></a>
<br>
просмотры: 
<br>
<?php 
echo $seen;
?>
<br>   
    <?php 
}}
else {
    
    echo "Картинки не найдены";
}



mysqli_close($connect);

?>
<br>





