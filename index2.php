<?php
date_default_timezone_set("Asia/ShangHai");//设置上海时区
/*
string date ( 日期格式符号，可选参数（时间戳） )
时间戳的意思：1970年1月1日到现在当前时间所经过的秒数
time() 获取当前的时间戳
*/

echo "获取当前的时间戳的结果：".time()."<br/>";
/*
日期格式符号：
Y表示年份
m表示月份
d表示天数
H表示时
i表示分
s表示秒

*/

echo "获取当前的年份为：".date("Y",time())."<br/>";
echo "获取当前的月份为：".date("m",time())."<br/>";
echo "获取当前的天数为：".date("d",time())."<br/>";
echo "获取当前的小时数为：".date("H",time())."<br/>";
echo "获取当前的分钟数为：".date("i",time())."<br/>";
echo "获取当前的秒数为：".date("s",time())."<br/>";
echo "获取当前的日期为：".date("Y年m月d日 H时i分s秒",time())."<br/>";

/*

mktime(时，分，秒，月，天，年份)获取制定日期时间的时间戳,返回值秒数
*/
echo "获取2023年6月1号0时0分0秒的时间戳：".mktime(0,0,0,6,1,2023)."<br/>";
echo "获取2023年6.1的日期时间为：".date("Y年m月d日 H时i分s秒",mktime(0,0,0,6,1,2023))."<br/>";



?>
