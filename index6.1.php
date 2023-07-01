<?php


/*$str1 = "php is best language in the word.";
echo "原字符串：$str1<br/>";

echo strtoupper($str1)."<br/>"; //strtoupper将字符串小写字符全部转换成大写字符

$str2 = "I LIKE APPLE";

echo "原字符串：$str2<br/>";

echo strtolower($str2)."<br/>"; //strtoupper将字符串大写字符全部转换成小写字符

$str3 = "python3 is best language";

echo "原字符串：$str3<br/>";

echo ucfirst($str3)."<br/>";//整个字符串首字母大写


echo "原字符串：$str3<br/>";

echo ucwords($str3); //整个字符串中以空格为分隔符的单词首字母大写
*/

/*
截取字符串
string substr (string $string, int $start [, int $length])

参数string为要操作的字符串。
参数start为要截取的字符串的开始位置，若start为负数时，则表示从倒数第start开始截取length个字符；若start为0，则表示从字符串的第1个字符开始。
可选参数length为要截取的字符串长度，若在使用时不指定该参数，则默认截取到字符串结尾。若length为负数，则表示从start开始向右截取到末尾倒数第length个字符的位置。

该函数的返回值返回截取成功的字符串内容
*/

$str = "python3 is best language";


echo "使用substr函数从0位置开始截取<span style='color:green;'>{$str}</span>，截取的长度是7,截取后的结果为：<span style='color:red;'>".substr($str,0,7)."</span><br/>";

echo "使用substr函数从16位置开始截取<span style='color:green;'>{$str}</span>，截取的长度是8,截取后的结果为：<span style='color:red;'>".substr($str,16)."</span><br/>";

echo "使用substr函数从0位置开始截取<span style='color:green;'>{$str}</span>，第三参数没有写入数据，默认截取最后一位,截取后的结果为：<span style='color:red;'>".substr($str,0)."</span><br/>";


echo "使用substr函数从-13位置开始截取<span style='color:green;'>{$str}</span>，截取的长度是4,截取后的结果为：<span style='color:red;'>".substr($str,-13,4)."</span><br/>";


echo "使用substr函数从-16位置开始截取<span style='color:green;'>{$str}</span>,第三个参数不写,截取后的结果为：<span style='color:red;'>".substr($str,-16)."</span><br/>";

/*
string strstr(string $haystack, mixed $needle)
参数haystack为被搜索的字符串，参数needle为要搜索的字符串（指定字符串）。

*/

$str = "I like play computer,and like apple";


/*echo strstr($str,"and")."<br/>";

echo strpos($str,"like");*/


$str = "小明很喜欢玩英雄联盟电脑游戏";

echo "原字符串：".$str."<br/>";

echo "被替换的结果：".str_replace("喜欢","不喜欢",$str);


?>
