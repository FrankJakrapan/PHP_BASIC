<?php

function first($A){
    if(($A / 10) % 10 == 3){
        echo"Hello world <br>";
    }else{
        echo"something wrong<br>";
    }
}

function myNumber1($A){
    if($A > 0){
        echo "ข้อที่ 2 = ".($A / 2) % 2 ." <br>";
    }else{
        echo '0';
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
echo"<br>ข้อที่ 3 <br>";
forLoop();


?>

