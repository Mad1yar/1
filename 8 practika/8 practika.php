<?php   //task 1
   echo 'Сегодня хорошая <br> погода';
   echo 'Баймурзинов <br> Мадияр';
   echo '<em> Всем </em> <i> Hi! </i>';

      // task 2.1
   $name = "Мадияр";
   $surname = "Баймурзинов";
   $date = 9;
   $month = 5;
   $year = 2002;
   $age = 19;
   $happy = 0.60;
   echo "Имя: $name, фамилия: $surname";
   echo "Дата рождения: $date $month $year";
   echo "Возраст: $age";
   echo "Уровень счатья: $happy";  
      //task 2.2
   $text= "false";
   $num = "-0,78902";
   echo "$text $num";
   


      //task 2.3
      defined ("NUMBER_E");
    $NUMBER_E = '2, 71828';
    echo $NUMBER_E;


  //task 2.4
  echo defined("NUMBER_E");


  //task 3.1
  $first = 5.6;
    $second = 8.9;
    $summ = $first + $second;
    $diff = $first - $second;
    $mult = $first * $second;
    $divide = $first / $second;
    $ostatok = $first % $second;
    
    echo "Сумма: $summ.<br>";
    echo "Разница: $diff.<br>";
    echo "Умножение: $mult.<br>";
    echo "Деление: $divide.<br>";
    echo "Остаток при делении: $ostatok";
  
      
  //task 3.2
      $a = -2;
      $a *= 3;
      $a++;
      
      echo "Результат: $a";
  

  //task 3.3
      echo "Максимум - " . max(9, 23, 0, -24.5, 34, 11, 41, 3, -3.2, 3);

  //task 3.4
  echo floor(sqrt(2));


  //task 4.1
      echo "\"";
      echo " ' ";
      echo "\\";
      echo "\n";
      echo "<div>Просто блок</div>";


  //task 4.2
  echo "\"" . " ' " . "\\" . "\n" . "<div>Просто блок</div>";

  //task 4.3.1
  $string = "ASDПросто текстASD";
    // task1
    $newStr = substr($string, 0, strlen($string) - 3); // Обрезаем все символы, кроме 3 последних
    echo "Обрезанная строка - $newStr.<br>"; 
    
    // task2
    $lowerCase = substr($newStr, 0, 3);

    // Обрезанную часть в нижний регистр + добавляем прежнюю строку, но без первых трех элементов
    $result = strtolower($lowerCase);
    $result .= substr($newStr, 3, strlen($newStr));
    echo "Нижний регистр - $result.<br>";
    
    // task 3
    echo "Первые три символа - " . substr($result, 0, 3);

  //task 5
  $a = 5;
    $str = "Hello";
    $isWeatherGood = false;
    if($str == "Hello" && !$isWeatherGood)
    echo 'First';
    else if($a == 5) {
    $res = "Second";
    echo $res;
    if($str == "Hello") {
    echo "<br>Yes";
    }
    }
    else if($a > 50)
    echo '$a > 50';
    else if($a <= 45)
    echo '$a <= 45';
    else
    echo 'Else';
            
  //task 5.1
  $a = 23;
  if ($a == 5)
      echo "10";
  else if ($a == 10)
      echo "15";
  else if ($a == 30)
      echo "20";
  else
      echo "Что-то не то!";

  //task 5.2    
      $x = 4.2;
      $y = 5.6;
      
      echo $x == 15;
      echo $y >= 6;
      echo $x == $y;
  
  //task 5.3
      $a = 34;
      echo ($a < 50 && $a != 37 && $a >= 32) || ($a == 0 || $a == 15);

  //task 5.4
      $x = 7;
      $y = "7";
      
      $res = $x === $y;
      echo "$x === $y = $res";

  //task 5.5
      $x = 7;
      $y = "7";
      
      $res = $x === $y;
      echo "$x === $y = $res";

  //task 5.6
      $a = 5;
      $b = -3;
      $res = $b != 0 ? ($a / $b) : 1;
      echo "Результат: $res";
