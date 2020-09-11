<?php
      
include "config.php";
$sql  = "SELECT * FROM `goods` ORDER BY price DESC";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
while ($data = mysqli_fetch_assoc($result)){
  $sqlres = mysqli_query($connect, $data["id"]);
  $img = $data["img_path"];
  $desc = $data["descript"];
  $name = $data["name"];
  $price = $data["price"];

}}
else {
    
    echo "Картинки не найдены";
}



mysqli_close($connect);

  
      
      
      
      
      
?>