
<?php

$pattern = "/^192\.168\.1\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/";

for ($x = 0; $x <= 300; $x++) {
    $ip = "192.168.1.$x";
    $is_match = preg_match($pattern, $ip);
    
    if ($is_match) {
        echo "<p style='color:green;'>{$ip} 符合 IP 格式要求</p>";
    } else {
        echo "<p style='color:red;'>{$ip} 不符合 IP 格式要求</p>";
    }
}


?>