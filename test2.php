<?php

// 변수를 배열로
// 변수명  = array()

// 변수를 배열로 선언한다
$space = array();

// 변수 space에 첫번째 인자로 earth를 넣어주기위해 인덱스 사용
$space[0] = "earth";
// 두번째로 star
$space[1] = "star";
// 세번째로 jupiter
$space[2] = "jupiter";

echo $space[0] . " , " . $space[1] . " , " . $space[2];

// 배열에 다수의 인덱스와 값 추가하기
//array('인덱스1'=>'값','인덱스2'=>'값','인덱스3'=>'값')
$rome = array(0 => 'jupiter', 1 => 'hera', 2 => 'hepaitus');

for ($i = 0; $i < count($rome); $i++) {
    echo "<br> $rome[$i]";
}


// 배열에 배열 적용
$earth = array();
$earth['nations'] = array(); // 배열의 nations라는 인덱스(키)에 배열을 넣어주었다.

$earth['nations'][0] = 'korea'; // earth라는 배열의 nations라는 배열을 넣고, 이 배열의 0이라는 인덱스에 korea를 넣어줌.

echo "<br> {$earth['nations'][0]}";


// array_push(변수명,배열에 들어갈 값, 배열에 들어갈 값)
$fruits = array();
array_push($fruits, 'apple', 'orange', "banana", "grape", "cherry");
for ($i = 0; $i < count($fruits); $i++) {
    echo "<br> $fruits[$i] <br>";
}

// var_dump(보고자하는 변수명) 로 배열 구조보기
// 다만 var_dump만으로 는 파악하기 어렵게 표시됨.
// html의 pre태그와 함께 사용!!
echo "<h3>";
var_dump($fruits);
echo "</h3>";

// 복잡한 배열에 var_dump() 적용하기
$city = array("continent" => array("america" => array(0 => "에너하임", 1 => "올란드"), "asia" => array(0 => "우라이스", 1 => "홍콩", 2 => "상하이"), "europe" => array(0 => "파리")));
//$city["continent"] = array();
//$city["continent"]["america"] = array();
//$city["continent"]["america"][0] = "애너하임";

echo "<pre>";
var_dump($city);
echo "</pre>";


//$city["continent"]["asia"][0] = "애너하임";
//echo "<textarea>";
//echo "</textarea>";


// 배열에 인덱스 없이 값 지정하기
$fruitEx = array();
$fruitEx = ["banana", "tomato", "lemon", "lime"];

echo "fruiteEx => $fruitEx[0] , $fruitEx[3]<br>";


$fruit = array("banana", "tomato", "lemon", "lime");
echo $fruit[0] . "<br>" . $fruit[2] . "<br> -----------------------<br>";


// list 함수
list($first, $second, $third, $fourth) = $fruit;

echo $fourth;

// 특정 범위의 수를 배열로 만들기 range()
// 결과를 보기 위해 for문 사용,
// 구조 보기위해 var_dump()사용.

$numArray = range(1, 10);
echo "<pre>";
var_dump($numArray);
//echo "</pre>"

for ($i = 0; $i < count($numArray); $i++) {
    echo "<br> $numArray[$i]<br><br>";
}

// 간격주기
$num = range(1, 10,);
for ($i = 0; $i < count($num); $i++) {
    echo "<br> $num[$i]";
}

// 타입은?  gettype()
echo "<br>데이터 타입" . gettype($num);

$booleanType = true;
echo "<br><br> boolean타입: " . gettype($booleanType);


// 데이터형 변환
$str = (string)"123,dock, chick, orion";
$str = (int)$str;

echo "<br><br><br>" . $str . "<br><br>";


$double = 83.64;
echo $double = (int)$double;
?>