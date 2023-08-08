<?php
echo '안녕하세요';
echo '<br>';
echo '반갑습니다';
echo 1234;
echo '<br>';
//php주우ㅠ성!!
print 'php세계 <br>';
// 주석
$strHi = '안녕';
$strSay = "반가워요";

echo $strHi . '하세요' . $strSay;
define("FAVORITE_DOLL", "gelatoni");

echo '<br> 상수 FAVORITE_DOLL은' . FAVORITE_DOLL;
define("FAVORITE_DOLL", "gablielle");
echo '<br> 상수 FAVORITE_DOLL은' . FAVORITE_DOLL . "<br><br>";

// 더하기
$sum = 5 + 5;
echo "{$sum}<br>";

// 연산
echo 5 * 5 + 3 - 1;


// 나머지
$rest = 5 % 3;
echo "<br>" . $rest . "<br>";


// 나누기
$division = 8 / 3;
echo $division;
?>