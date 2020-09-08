<?php
     
//Задача 1

$i = 0;
while($i<=100){
    if( $i % 3 == 0) {
        echo "$i<br/>";
    }
    $i++;
}


//Задача 2

$i=0; 

do {
    if($i == 0){
        echo "$i - ноль.<br/>";

    } 
    else if ($i % 2 == 0){
        echo "$i - четное.<br/>";
    }
    else {
         echo "$i - нечетное.<br/>";
    }
    $i++;
}
while ($i <=10 );


//Задача 3

$regs = ["Московская область"  => ["Москва", "Королев", "Зеленоград"],
         "Ленинградская область" => ["Кировск", "Санкт-Петербург","Волхов"],
         "Амурская область" => ["Благовещенск","Зея","Шимановск"]];
foreach($regs as $region => $city){
    $str = implode(`, `, $city).".";
    echo "$region:<br/>$str<br/>";
}

//Задача 4

function translit($str){
    $converter = [
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
		'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
		'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
		'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
		'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
		'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
		'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
 
		'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
		'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
		'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
		'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
		'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
		'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
		'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
    ];
    return strtr ($str,$converter);
}

echo translit("Пример");

//Задача 5

function change($str) {
    return str_replace(" ", "_", $str);
}

echo change("Еще пример");


//Задача 6

$menu = ["Курсы" => 
         ["Веб-разработка" => "https://geekbrains.ru/geek_university/web", 
          "Python-разработка" => "https://geekbrains.ru/geek_university/python"],
         "Вебинары" => ["Веб-разработка" => "https://geekbrains.ru/geek_university/web", 
          "Python-разработка" => "https://geekbrains.ru/geek_university/python"],
         "Форум" => ["Веб-разработка" => "https://geekbrains.ru/geek_university/web", 
          "Python-разработка" => "https://geekbrains.ru/geek_university/python"]  ];
        $str = "<ul>";
         foreach($menu as $item => $subitem) {
             if(is_array($subitem)){
                $str .= "<li>$item</li><ul>";
                 foreach ($subitem as $i_item => $s_subitem){
                     $str .= "<a href=$s_subitem><li>$i_item</li></a>";
                 }
                 $str .= "</ul>";
             } else {
                 $str .= "<a href=$subitem><li>$item</li></a>";
             }
         }
        
        $str .= "</ul>";
echo $str;
        

?>