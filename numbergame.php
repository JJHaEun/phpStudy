<?php
// 숫자 야구게임 => 랜덤한 세자리수 맞추기 게임 // 3자리수에서 숫자, 위치 다 맞아야 strike. 위치 안맞지만 숫자 맞으면 ball
// 하나도 안맞으면 out


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = (string)(rand(100, 999)); // 정답이 될 숫자
    $arr1 = str_split($num1); // 해당 숫자 배열로 만들기
    $userInput = $_POST['1'];
    $userAnswer = str_split($userInput); // 입력된 값도 배열로 변경하기
    $result = compareNumber($arr1, $userAnswer);
    echo "Random Number: $num1[0] , $num1[1] , $num1[2]<br>";
    echo "User Guess: $userInput[0] , $userInput[1] , $userInput[2]<br>";
    echo "Result: $result";
}
function compareNumber($answer, $userNum)
// 자리, 숫자 하나 일치하면  strike + 1,
// 아예 일치하지 않으면 out + 1,
// 자리만 일치하지 않으면 ball + 1
{
    $strike = 0;
    $ball = 0;
    $out = 0;
    for ($i = 0; $i < count($answer); $i++) {
        if ($answer[$i] === $userNum[$i]) {
            $strike++;

        } elseif (in_array($userNum[$i], $answer)) { // answer라는  배열에 userNum[$i]가 하나라도 존재한다면 ball(자리상관 없음)
            $ball++;
        }

    }
    return "Strike :" . $strike . ", Ball :" . $ball . "Out :" . 3 - ($strike + $ball);
}


?>




