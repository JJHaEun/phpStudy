<?php
// 숫자 야구게임 => 랜덤한 세자리수 맞추기 게임 // 3자리수에서 숫자, 위치 다 맞아야 strike. 위치 안맞지만 숫자 맞으면 ball
// 하나도 안맞으면 out

$num1 = (string)(rand(100, 999)); // 정답이 될 숫자
$arr1 = str_split($num1); // 해당 숫자 배열
echo $_POST['1'];
echo $arr1[0] . " , " . $arr1[1] . " , " . $arr1[2];


?>




