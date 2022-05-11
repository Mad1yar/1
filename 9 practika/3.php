<?php
    $nums = array(4,5,7,2,0,-23,6);
    $nums[1] = 45;
    echo $nums[1]."<br>";

    $arr = [4, true, 6, "8", 0.4, "c", 24, 16];
    $arr[0] = "false";
    echo $arr[0].'<br>';
    
    $list = ["age" => 50, "name" => "Alex", "hobby" => "Football"];
    $list["name"] = "Bob";
    echo $list["name"].'<br>';

    $matrix = [
        [4, 6.4, 8],
        [3, 2],
        [1,8,9,3,"2"]
    ];

    $matrix[0][1] = 4;
    echo $matrix[0][1];
    

    // samost work
    $count = 0;

    $array_1 = array(1,2,3,5,7,9,10);
    $array_2 = array(1,4,3,5,8,9,0);
    
    for($i = 0; $i < $array_1; $i++){
        for($j = 0; $j < $array_2; $j++){
            if($array_1 == $array_2){
                $count++;
            }
        }
    }
    echo $count;


    floatval($sum) = 0;
    $float = 0;
    $elements = array(3, -2.9, -34, 23, -12, 1)
    for($i = 0; $i < $elements; $i++){
        for($j = 0; $j < $elements; $j++){
            if($elements[$i][$j] > 0){
                sum += $elements[$i][$j];
            }
        }
    }

    $max = array(1,2,3,4,5,7,8,200);
    $min = array(-1000,2,3,4,5,7,8,200);

    echo max($max);
    echo min($min);
?>