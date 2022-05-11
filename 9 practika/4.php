<?php
//1
    function summary($arr){
        $summa = 0;
        foreach($arr as $value){
            $summa += $value;
        }
        return $summa;
    }
    $list = [5,3,7];
    echo summary($list)."<br>";
    echo summary([5,2,3])."<br>";

//2
    function info(){
        global $x;
        $x = 0;
    }
    function click(){
        static $count;
        $count++;
        echo $count.'<br>';
    }

    click();
    click();
    click();

    $x = 10;
    info();
    echo $x;

//3
    function info($word){
        echo "$word<br>";
    }

    function math($x,$y){
        return $x + $y;
    }

    $res_1 = math(5,6);
    $res_2 = math(15,6);

    info($res_1);
    info($res_2);

//samos_work
    //..............
    $age = 18;
    switch($age){
        case 18:
            echo true;
            break;
        default:
            echo "Родители разрешили?!";
            continue;
    }

    //............
    function S($time, $speed){
        return $time * $speed;
    }

    function info($res){
        echo "$res<br>";
    }

    $res_1 = S(2,4);
    $res_2 = S(22,14);

    info($res_1);
    info($res_2);

    //..........

    $func_schet;
    $j = 1;
    for($i = 0; $i <= 9; $i++){
        echo "Функция вызывалась $func_schet($j) раз.";
        $j++;
    }

    return 0;

    function func_shet($i){
        $schet = $j;
        $j++;

        return $schet;
    }
?>