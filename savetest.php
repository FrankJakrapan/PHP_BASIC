<?php
function dbConnect() {
    $db = new mysqli('localhost', 'root', '', 'jobtest');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    return $db;
}

function saveData() {
    $db = dbConnect();

    if (!empty($_POST)) {
        $empNum = $_POST['empNum'] ?? '';
        $empName = $_POST['empName'] ?? '';
        $position = $_POST['position'] ?? '';

        $stmt = $db->prepare("INSERT INTO employee (empNum, empName, position) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $empNum, $empName, $position);

        if ($stmt->execute()) {
            echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
        } else {
            echo "<script>alert('เกิดข้อผิดพลาด: " . $stmt->error . "');</script>";
        }

        $stmt->close();
        $db->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    saveData();
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มสมัครงาน</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        /* Popup */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .popup .close {
            background: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 50px;
            cursor: pointer;
            margin-top: 20px;
        }

        .popup .close:hover {
            background: #d32f2f;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>กรอกข้อมูลพนักงาน</h2>
    <form action="savetest.php" method="post" onsubmit="return validateForm()">
        <input type="text" name="empNum" id="empNum" placeholder="รหัสพนักงาน">
        <input type="text" name="empName" id="empName" placeholder="ชื่อพนักงาน">
        <select name="position" id="position">
            <option value="">เลือกตำแหน่ง</option>
            <option value="Manager">Manager</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Clerk">Clerk</option>
            <option value="Salesman">Salesman</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</div>

<div class="popup" id="errorPopup">
    <div class="popup-content">
        <h3>ข้อผิดพลาด</h3>
        <p id="errorMessages"></p>
        <button class="close" onclick="closePopup()">ปิด</button>
    </div>
</div>

<script>
    function validateForm() {
        document.getElementById('errorMessages').innerHTML = '';
        var empNum = document.getElementById('empNum').value;
        var empName = document.getElementById('empName').value;
        var position = document.getElementById('position').value;
        var errorMessages = [];

        if (empNum == "") {
            errorMessages.push("คุณยังไม่ได้กรอกรหัสพนักงาน");
        }
        if (empName == "") {
            errorMessages.push("คุณยังไม่ได้กรอกชื่อพนักงาน");
        }
        if (position == "") {
            errorMessages.push("คุณยังไม่ได้เลือกตำแหน่ง");
        }

        if (errorMessages.length > 0) {
            var message = errorMessages.join("<br>");
            document.getElementById('errorMessages').innerHTML = message;
            showPopup();
            return false;
        }
        return true; 
    }

    function showPopup() {
        document.getElementById('errorPopup').style.display = 'flex';
    }

    function closePopup() {
        document.getElementById('errorPopup').style.display = 'none';
    }

</script>
</body>
</html>