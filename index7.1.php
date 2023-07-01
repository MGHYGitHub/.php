<?php

$data = [
    "2010-2020年",
    "2020年1月25日",
    "2020年2月11日",
    "2020年闰四月",
    "2020年是闰年",
    "2023",
    "1998",
    "相约98",
    "2008奥运会",
    "1978"
];

echo "数组的长度:".count($data)."<br/>";

for($a=0;$a<count($data);$a++){

    $is_math=preg_match("/2020/",$data[$a]);

    if($is_math){

        echo "<p style='color:green;'>{$data[$a]}匹配成功<p/>";
    }else{
        echo "<p style='color:red;'>{$data[$a]}匹配失败<p/>";
    }
}


?>