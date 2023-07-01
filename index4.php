
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>实现原神卡池角色切换</title>
    <style type="text/css">
        * {
            padding:0;
            margin:0;
        }

        .container {
            width: 100vw;
            height: 100vh;
        }

        .bg_1 {
            background: url("image/bg1.jpg") no-repeat;
            background-size: 100% 100%;
        }

        .bg_2 {
            background: url("image/bg2.jpg") no-repeat;
            background:100% 100%;
        }

        .get-counter-time {
            position: absolute;
            left: 19%;
            top: 8%;
            color: red;
            font-size: 25px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
    $getCurrenTime = time();
    $getEndTime = mktime(9,17,57,4,13,2023);
    if($getEndTime - $getCurrenTime > 0){
        counter($getCurrenTime,$getEndTime)
        echo '<div class="container bg_1">';
        echo '<div class="get-counter-time">.counter($getCurrenTime,$getEndTime).'</div>';
    }else{
        echo '<div class="get-counter-time">.counter($getCurrenTime,$getEndTime).'</div>';
    }else{
        $getEndTime = $getEndTime + (20*24*60*60);
        echo '<div class="container bg_2">';
        if($getEndTime - $getCurrenTime < 0){
            echo '<div class="get-counter-time end-time-color">抽取角色的时间已结束</div>';
        }else{
            echo '<div clss="get-counter-time">'.counter($getCurrenTime.$getEndTime).'</div>';
        }
    }

    echo '</div>';
    

?>

</body>
</html>


<?php
function counter($currenTime,$endTime){
    $remainTime = $endTime-$currenTime;

    $day = (int)($remainTime/60/60/24);
    $hour = $remainTime/60/60%24;
    $minute = $remainTime/60%60;
    $second = $remainTime%60;

    return "<span class='day'>{$day}</span>天<span class='hour'>{$hour}</span>时
    <span class='minute'>{$minute}</span>分<span calss='second'>{$second}</span>秒";
}

?>
<!-- <div class="container bg_1">
    <div class="get-counter-time">
        19天15时12分13秒
</div> -->