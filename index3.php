<?php

header("refresh:1");
date_default_timezone_set("Asia/ShangHai");//设置上海时区

function counter($currenTime,$endTime){
    $remainTime = $endTime-$currenTime;

    $day = (int)($remainTime/60/60/24);
    $hour = $remainTime/60/60%24;
    $minute = $remainTime/60%60;
    $second = $remainTime%60;
    
    return "剩余{$day}天{$hour}时{$minute}分{$second}秒";
}

$getCurrenTime = time();
$getEndTime = mktime(0,0,0,5,1,2023);

echo "距离2023年5月1日".counter($getCurrenTime,$getEndTime);

?>