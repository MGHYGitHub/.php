
<?php

$passwords = ['123', '12345', 'abcdefg', '1234567890abc', '123456789012'];

foreach ($passwords as $password) {
    if (preg_match('/^\d{6,12}$/', $password)) {
        echo "$password 匹配成功<br/>";
    } else {
        echo "$password 匹配失败<br/>";
    }
}


?>