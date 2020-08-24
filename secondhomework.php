<?php
//часть 1
$a = 4;
$b = -7;

if ($a>=0 && $b>=0) {
  $x = $a - $b;
  }
  
  else if ($a<0 && $b<0) {
    $x = $a * $b;
    }
    
    else 
//        ($a>=0 && $b<0 || $a<0 && $b>=0) 
    {
      $x = $a + $b;
      }
      
echo $x;

//часть 2
$a = ["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
$r = $a [rand(0,16)];
 echo $r;
switch ($r){
        case "0":
        echo "<br>" .++$r;  
        
        case "1":
        echo "<br>" .++$r;  
        
        case "2":
        echo "<br>" .++$r; 
        
        case "3":
        echo "<br>" .++$r; 
        
        case "4":
        echo "<br>" .++$r; 
        
        case "5":
        echo "<br>" .++$r; 
        
        case "6":
        echo "<br>" .++$r; 
        
        case "7":
        echo "<br>" .++$r; 
        
        case "8":
        echo "<br>" .++$r; 
        
        case "9":
        echo "<br>" .++$r; 
        
        case "10":
        echo "<br>" .++$r; 
        
        case "11":
        echo "<br>" .++$r; 
        
        case "12":
        echo "<br>" .++$r; 
        
        case "13":
        echo "<br>" .++$r; 
        
        case "14":
        echo "<br>" .++$r; 
          
}

//часть 3

function sum($q, $w){
    return $q + $w;
    break;
}
//echo sum(2,5);


function sub($q, $w){
    return $q - $w;
    break;
}
//echo sub(2,5);


function mlt($q, $w){
    return $q * $w;
    break;
}
//echo mlt(2,5);


function divis($q, $w){
    return $q / $w;
    break;
}
echo divis(2,5);



//часть 4 

$operation = ["sum", "sub","mlt","divis"];

    function mathOperation($arg1, $arg2, $operation){
     switch ($operation){
       case "sum":
          return arg1 + arg2;
          break;

       case "sub";
          return $q - $w;
          break;

       case "mlt";
          return $q * $w;
          break;

       case "mlt";
          return $q / $w;
          break;

       default:
        echo "ошибка";
     
} 
    
 } 

////часть 4 (второй вариант, но не рабочий)

 function mathOperation($arg1, $arg2, $operation){
   switch ($_GET["operation"]){
       case "sum";
         $getarg1["arg1"];
         $getarg2["arg2"];
          return $getarg1 + $getarg2;
          echo mathOperation($getarg1,$getarg2,$_GET);
       case "sub";
          return function sub($arg1, $arg2)
          break;
       case "mlt";
          return function mlt($arg1, $arg2)
          break;
       case "mlt";
          return function divis($arg1, $arg2)
          break;
       default:
        echo "ошибка";
     
} 
      
 } 


//часть 6 

function power($val, $pow){
    if($val > 200){
        return;
    }
    $c = pow($val, $pow);
    echo $c;
    power($val=$c, $pow);
} 

echo power(2,2);

    

?>