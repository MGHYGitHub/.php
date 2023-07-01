<?php

$data = [
    "abc01",
    "ddd02",
    "afcf01",
    "acac11",
    "321",
    "321acef33",
    "321acef33ABCDEFG789654",
    "CODEJIAONANG",
    "ghjkloiqwtq",
    "poiuy98765",
    "msstgr4567",
    "gg88888888",
    "88888888999"
];

for ($i=0; $i < count($data) ; $i++){

    $pattern = "/^[a-f0-3]/";

    if(preg_match($pattern,$data[$i])){
        echo "<p style='color:green;'>{$email}验证通过</p>";
    }else{
        echo "<p style='color:ren;'>{$email}验证失败</p>";        
    }
}

?>