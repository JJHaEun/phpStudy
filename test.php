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
echo $division . "<br>";


// 대입연산자
// += 변수의 값에서 다른 값을 더해 대입
$num = 10;
$num += 34; // $num = 10 + 34

echo $num . "<br>";

// -= 변수 값에서 다른 값을 뺀 값을 대입
$minusadd = 50;
$minusadd -= $num; // $minusadd = 50 - 44
echo $minusadd . "<br><br>";
//*= 변수 값에서 다른 값을 곱해 대입
$num = 34;
$num *= 5;
echo $num . "<br>";
//    /=변수 값에서 다른 값을 나눌때
$num = 33;
$num /= 3;
echo $num . "<br>";

//%= 변수 값에서 다른 값 나누고 나온 나머지 값을 대입
$divide = 18;
$divide %= 2;

echo $divide . "<br>";
// .= 변수 값(문자열)에서 다른 문자열을 붙일때 사용.
$addString = "서울\n"; // \n은 띄어쓰기
$addString .= "특별시";

echo $addString;

?>