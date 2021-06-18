
<!-- 10.1を切り上げ -->
<?php
    $x = 10.1;
    echo ceil($x);
    ?><br>

<!-- // 6.3を切り捨て -->
<?php
    // index.php
    $x = 6.3;
    echo floor($x);
    ?><br>

<!-- 3.5を四捨五入 -->
<?php
    // index.php
    $x = 3.5;
    echo round($x);
    ?><br>

<!-- 半径3の円の面積 -->
<?php
echo pi();

function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
circleArea(3);
?><br>

<!-- 1から50までの乱数 -->
<?php
echo mt_rand(1, 50);
?><br>

<!-- 自分の名前の文字列の長さ -->
<?php
    $str = "kudomanaka";
    echo strlen($str);
    ?><br>

<!-- mの検索 -->
<?php
    $str = "manaka";
    echo strpos($str, "m");
    ?><br>

<!-- reの文字列の切り取り -->
<?php
    $str = "tukaretayo";
    echo substr($str, -6, 2);
    ?><br>

<!-- maの置換 -->
<?php
    $str = "maNAKA";
    echo str_replace("ma", "MA", $str);
    ?><br>

<!-- 余命のフォーマット化文字列 -->
<?php
    $name = "工藤";
    $limit_time = 70;
    printf("%sの余命はあと%d年やで", $name, $limit_time);
    ?><br>


<?php
    $hour = 7;
    $minute = 8;
    $time = sprintf("今は%d時%d分", $hour, $minute);
    echo $time;?>

