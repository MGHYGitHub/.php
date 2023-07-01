
<?php

$pattern = "/^[0-9][0-9][0-9][0-9]-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";

for($a=0;$a<=99;$a++){
    if($a<10){
        $a="0".$a;
    }
    $data="2023-12-{$a}";
    $is_match=preg_match($pattern,$data);

    if($is_match){
        echo "<p style='color:green;'>{$data}匹配失败<p/>";
    }else{
        echo "<p style='color:red;'>{$data}匹配成功<p/>";
    }
}

?>