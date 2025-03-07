<?php

function first($A){
    if(($A / 10) % 10 == 3){
        echo"Hello world <br>";
    }else{
        echo"something wrong<br>";
    }
}

function myNumber1($A) {
    if ($A > 0) {
        myNumber1(intval($A / 2)); // ใช้ intval() ป้องกันค่าทศนิยม
        echo ($A % 2);
    } else {
        echo "0"; // Base Case และขึ้นบรรทัดใหม่
        return; // หยุด recursion
    }
}



function forLoop(){ 
    for($i = -2; $i <= 2; $i++){
        for($x = -2; $x <= 2; $x++){
            if(($x * $x)<($i * $i)){
                echo("* ");
            }else{
                echo("- ");
            }
        }
        echo"<br>";
    }
}


echo"<br>ข้อที่ 1 <br>";
first(130);
echo"<br>ข้อที่ 2 <br>";
myNumber1(6);
echo"<br>";
myNumber1(7);
echo"<br>ข้อที่ 3 <br>";
forLoop();


?>

