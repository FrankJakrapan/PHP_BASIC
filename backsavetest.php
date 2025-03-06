<?php
// เชื่อมต่อฐานข้อมูล
function dbConnect() {
    $db = new mysqli('localhost', 'root', '', 'jobtest');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    return $db;
}

// ฟังก์ชันบันทึกข้อมูล
function saveData() {
    $db = dbConnect(); // เชื่อมต่อฐานข้อมูล

    if (!empty($_POST)) {
        // รับค่าจากฟอร์ม
        $empNum = $_POST['empNum'] ?? '';
        $empName = $_POST['empName'] ?? '';
        $position = $_POST['position'] ?? '';

        // เตรียมคำสั่ง SQL
        $stmt = $db->prepare("INSERT INTO employee (empNum, empName, position) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $empNum, $empName, $position);

        if ($stmt->execute()) {
            echo "<script>window.location.href='index.php?success=true';</script>";
        } else {
            echo "<script>window.location.href='index.php?error=" . urlencode($stmt->error) . "';</script>";
        }

        $stmt->close();
        $db->close();
    }
}

// เรียกใช้ฟังก์ชันบันทึกข้อมูล
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    saveData();
}
?>
