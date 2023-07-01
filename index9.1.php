
<?php

$str = "我用￥5000充值了英雄联盟的一些至尊皮肤";

$is_match = preg_match($pattern,$str,$matchs);

if($is_match){
    
    echo $matchs[0];
}else{

    echo "匹配失败";
}


?>