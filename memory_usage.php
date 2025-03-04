<h3>Memory Usage</h3>

<?php

class MemoryUsage {
    public function getMemoryUsage() {
        $cuuren_memory = memory_get_usage();
        $peak_memory = memory_get_peak_usage();
        $memory_limit = ini_get('memory_limit');

        $current_mb = round($cuuren_memory / 1024 / 1024, 2);
        $peak_mb = round($peak_memory / 1024 / 1024, 2);

        return [
          'current' => $current_mb,
          'peak' => $peak_mb,
          'limit' => $memory_limit
        ];
    }
}

$memoryUsage = new MemoryUsage();
$memory_info = $memoryUsage->getMemoryUsage();

echo "Current Memory Usage: " . $memory_info['current'] . " <br>";
echo "Peak Memory Usage: " . $memory_info['peak'] . " <br>";
echo "Memory Limit: " . $memory_info['limit'] . " <br>";

?>