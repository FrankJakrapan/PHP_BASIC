<h3>Try Catch</h3>

<?php
    try{
        $x = 10 / 'Hello';
    }catch(DivisionByZeroError $e){ // ดักตัวเลข
        echo "เกิดข้อผืดหลาด ไม่สามารถหารด้วย 0";
    // }catch(TypeError $e){ // ดักตัวอักษร
    //     echo "เกิดข้อผืดหลาด ไม่สามารถหารด้วย ตัวอักษร";
    }catch(throwable $e){ // ดักข้อผิดพลาดทั้งหมด
        echo "เกิดข้อผิดพลาด ไม่สามารถดำเนินการได้<br>" .$e -> getMessage();
    }
?>