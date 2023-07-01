
<?php

$string = "我用￥500充值了英雄联盟的一些至尊皮肤";

if (preg_match('/￥\d+/', $string, $matches)) {
   echo "价格为：" . $matches[0];
} else {
   echo "未匹配到价格信息";
}



?>