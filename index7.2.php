<?php

$data = [
    "Java8.0",
    "java8.0",
    "jjva",
    "Javv"
];

echo "数组的长度:".count($data)."<br/>";

for($a=0;$a<count($data);$a++){

    $is_math=preg_match("/^[Jj]ava\d\.\d$/",$data[$a]);

    if($is_math){

        echo "<p style='color:green;'>{$data[$a]}匹配成功<p/>";
    }else{
        echo "<p style='color:red;'>{$data[$a]}匹配失败<p/>";
    }
}

?>