<?php

extract($_GET); //GET 방식으로 전송된 변수 전역변수로 등록-


$option1 = $_GET['Question'];



switch ($option1) {

    //---다중 열 알파벳
    case 0:

        if ($option1 == 1) {
            //-&#45;&#45;소문자, 5개가 한줄,한줄 후 <br>, a ~ z-->

            for ($i = chr(97); $i <= chr(122); $i++) {
                for ($j = 0; $j < 5; $j++) {
                    echo $i;
                }
                echo "<br>";

                if ($i == chr(122)) {
                    break;
                }
            }
        } else if ($option1 == 2) {
//--- 대문자

            for ($i = chr(65); $i <= chr(90); $i++) {
                for ($j = 0; $j < 5; $j++) {
                    echo $i;
                }
                echo "<br>";

                if ($i == chr(90)) {
                    break;
                }
            }
        } else {
            echo "옵션 값이 없습니다. 돌아가서 값을 입력하세요";
            break;
        }

        break;

//--- 직각 삼각형
    case 1:

        for ($i = 0; $i < 26; $i++) {
            for ($alpha = chr(65); $alpha <= chr(65 + $i); $alpha++) {
                echo $alpha;

                if ($alpha == chr(90)) {
                    break;
                }
            }
            echo "<br>";
        }//---End Of Case 1

        break;

//--- 역 직각 삼각형
    case 2:

        for ($i = 1, $j = 26; $i <= 26; $i++, $j--) {

            for ($alpha = 0; $alpha <= $i; $alpha++) {
                echo "&nbsp";
            }

            for ($alpha = chr(65), $s = 0; $s < $j; $alpha++, $s++) {
                echo $alpha;
            }
            echo "<br>";

        }

        break;

//--- 정삼각형 모양
    case 3:

        for ($i = 0; $i < 26; $i++) {
            for ($alpha = chr(65); $alpha <= chr(65 + $i); $alpha++) {
                echo $alpha;

                if ($alpha == chr(89)) {
                    break;
                }
            }
            echo "<br>";
        }

        for ($i = 26; $i >= 0; $i--) {
            for ($alpha = chr(65); $alpha < chr(65 + $i); $alpha++) {
                echo $alpha;

                if ($alpha == chr(90)) {
                    break;
                }
            }
            echo "<br>";
        }

        break;

//--- 속이 찬 방패모양 삼각형
    case 4:

        //---위쪽 삼각형
        for ($i = 1; $i <= 26; $i++) {

            for ($y = 0, $alpha = ord('A'); $y < $i; $y++, $alpha++) {
                echo chr($alpha);
            }
            for ($k = 0; $k < 52 - 2 * $i; $k++) {
                echo "&nbsp";
            }

            for ($t = 0; $t < $i; $t++) {
                $alpha--;
                echo chr($alpha);
            }
            echo "<br>";
        }

        //--- 아랫쪽 삼각형

        for ($i = 1; $i <= 26; $i++) {
            for ($y = 0, $alpha = ord('A'); $y < 26 - $i; $y++, $alpha++) {
                echo chr($alpha);
            }
            for ($k = 0; $k < 2 * $i; $k++) {
                echo "&nbsp";
            }
            for ($t = 0; $t < 26 - $i; $t++) {
                $alpha--;
                echo chr($alpha);
            }
            echo "<br>";
        }

        break;

//--- 속이 빈 방패모양 삼각형형
    case 5:

        //---위쪽 삼각형
        for ($i = 1; $i <= 26; $i++) {
            for ($y = 0, $alpha = ord('A'); $y < $i; $y++, $alpha++) {
                if ($y == 0 || $y == $i - 1 || $i == 26) { //---가장자리, 맨아래 한줄, 가장 끝 줄
                    echo chr($alpha);
                } else {
                    echo "&nbsp";
                }
            }

            for ($k = 0; $k < 52-2*$i; $k++) {
                echo "&nbsp";
            }
            for($t = 0 ; $i<$i; $t++){

                $alpha--;
                if ($t == 0 || $t == $i - 1 || $i == 26) {
                    echo chr($alpha);
                } else {
                    echo "&nbsp";
                }
            }
        }

        //---아래쪽 삼각형
        for ($i = 1; $i <= 25; $i++) {
            for ($y = 1, $alpha = ord('A'); $y <= 26; $y++, $alpha++) {
                if ($y >= 2 && $y <= 26 - $i - 1) {
                    echo "&nbsp";
                } else if ($y == 1 || $y == 26 - $i) {
                    echo chr($alpha);
                }
            }

            for ($k = 1; $k <= 51; $k++) {
                if ($k >= 27 - $i && $k <= 26 + $i) {
                    echo "&nbsp";
                }

                for($y = 1,$alpha = ord('Y'); $y<=25 ; $y++,$alpha++){
                    if($y >= $i +1 && $y <=24){
                        echo "&nbsp";
                    }
                    else if ($y == $i || $y == 25) {
                        echo chr($alpha);
                    }
                }
                echo "<br>";
            }
        }
        break;
}//---End Of Switch

?>


<!--<script>

     var myTimer;

     time = 11;

     function timer_start() {

     myTimer = setInterval(function () {

     time -= 1;

     //document.write(time);

     alert(time);

     if (time <= 1) {
     timer_stop();
     }

     }, 300)

     }

     function timer_stop() {

     if (myTimer) clearInterval(myTimer);

     window.location.assign("roof.html");
        //history.back(); //--- 이전 페이지로
     }

     timer_start();


</script>-->

