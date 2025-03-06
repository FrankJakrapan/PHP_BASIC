<?php
class Database {
    private $conn;

    public function __construct($host, $username, $password, $dbname) {
        $this->conn = new mysqli($host, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function fetch_all($result) {
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

$db = new Database('localhost', 'root', '', 'jobtest');
$sql = "
    SELECT *
    FROM employee;
";

$data = $db->fetch_all($db->query($sql));

$index = 0;

if (!empty($data)) {
    foreach ($data as $row) {
        if ($index == 0) {
            echo "empNum: " . $row['empNum'] . "<br>";
            echo "empName: " . $row['empName'] . "<br>";
            $index++;
        } else {
            break;
        }
    }
} else {
    echo "ไม่พบข้อมูลพนักงาน<br>";
}
?>