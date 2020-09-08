 <?php


//print_r($_POST);

$first = strip_tags($_POST['first']); 

$second = strip_tags($_POST['second']); 

   
if($_POST['operator'] == 'plus') { 
    
        $rezult = $first + $second ;
    }

    if($_POST['operator'] == 'minus'){ 
        
        $rezult = $first - $second ;
    }

    if($_POST['operator'] == 'multi'){ 
        
        $rezult =  $first * $second ;
                                     }

    if($_POST['operator'] == 'delit' && $second != 0){ 
        $rezult =  $first / $second ;
    } 


 if($_POST['operator'] == 'delit' && $second == 0){ 
      echo "Нельзя делить на ноль";
    die;
    } 


echo "Результат:".$rezult;