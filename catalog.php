<?php
include "config.php";
include "spp.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8"/>
    <title>Магазин техники</title>
    <!--<link rel="stylesheet" href="style.css"/>-->
     
  <style>
   body { 
    margin: 0% 20%; 
   }
    nav{
          
          float: left;
      }
      
      article{
          margin: 30px 50px;
      }
      
      footer{
          background-color: aliceblue;
           margin: 50px 30px; 
      }
      div{
          text-align: center;
      }
    </style>
</head>

<body>

    <center>
    <img src="images/hd.png" alt="Техника" height="300">
    <header>Главная страница</header>

    <nav> <ul class="nav-left" align="left">
                                <li ><a href="index.html">Главная страница</a></li>
                                <li ><a style="color:#166c24" href="catalog.php">Каталог</a></li>
                                <li ><a style="color:#276abc" href="cart.html">Корзина</a></li>
                                <li ><a style="color:#3a7664" href="review.html">Отзывы</a></li>
                              
                            </ul>
    </nav>

    

    <article>
      <div> 
<p>

<br>
<?=$name?>
<br>
Цена:<?=$price?>

<br>       
<img src="<?=$img?>" width="100">
<br>

        </p></div>
    </article>

    <footer>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></footer>
</center>	
</body>

</html>
