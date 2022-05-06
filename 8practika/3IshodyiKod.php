<?php
$x = 10;
$y = 20;
echo $x + $y.'<br>';
echo $x - $y.'<br>';
echo $x * $y.'<br>';
echo $x / $y.'<br>';
echo $x % $y.'<br>';
$x += 10; // $x = $x + 10;
$y -= 10; // $y = $y - 10;
echo $x.'<br>';
echo $y.'<br>';
$x++; // $x += 1;
$x--; // $x -= 1;
echo M_PI.'<br>';
echo M_E.'<br>';
echo abs(-22).'<br>';
echo round(3.5556734, 2).'<br>';
$rand = mt_rand(1, 20);
$rand++;
echo $rand.'<br>';
echo max(2, 5, 6, 1, 8, 3, 6).'<br>';
?>