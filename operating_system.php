<h3>Opreating System</h3>

<?php

class OperatingSystem{
    public function getDickSpace(){
        $dick_path = PHP_OS_FAMILY === 'Windows' ? 'C:' : '/';
        $total_space = disk_total_space($dick_path);
        $free_space = disk_free_space($dick_path);
        $user_space = $total_space - $free_space;

        $total_gb = round($total_space / 1024 / 1024 / 1024, 2);
        $free_gb = round($free_space / 1024 / 1024 / 1024, 2);
        $user_gb = round($user_space / 1024 / 1024 / 1024, 2);

        return [
            'total' => $total_gb,
            'free' => $free_gb,
            'user' => $user_gb
        ];
    }
}

$operatingSystem = new OperatingSystem();
$dick_info = $operatingSystem->getDickSpace();

echo "Total Dick Space: {$dick_info['total']} GB<br>";
echo "Free Dick Space: {$dick_info['free']} GB<br>";
echo "User Dick Space: {$dick_info['user']} GB<br>";

?>