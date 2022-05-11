<?php
//1
    for($el = 100; $el > 10; $el /= 2){
        if($el < 15)
            break;
        if($el % 2 == 0)
            continue;

        echo $el. "<br>";
    }
//2
    $list = [5, 7, 3, 8, "some", 45.7];

    for ($i = 0; $i < count($list); $i++)
        echo "ELement $i : $list[$i]<br>";
//3
    $list = ["age" => 45; "name" => "ALex", "hobby" => "Football"];
    $arr = [5, 6, 8, 9];

    foreach($list as $item => $value){
        echo "key: $item. Value: $value.<br>";
    }

    foreach($arr as $i => $value)
        echo "Index: $i. Value: $value.<br>";

//4
    for($i = 100; $i >=20; $i -= 5)
        echo $i.'<br>';
        //While
    $isHasHouse = true;
    while($isHasHouse){
        echo "Это беск цикл, не стоит его запускать!";
    }

        //Цикл Do While
    $i = 100;
    do{
        echo $i;
    } while($i < 10);

// Самостоятельная работа

    for($a = 16; $a > 23 && $a; $a++){
        if($a == 21)
            echo "21 is incorrect!";
            continue;
    }

    $a1 = 16;
    while($a1 < 23){
        if($a1 == 21)
            echo "21 is invalid";
            continue;
    }
?>


