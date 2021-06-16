<?php
$colors = ["red" => "赤", "blue" => "青", "green" => "緑"];

// 赤を出力
echo $colors["red"];
// 青を出力
echo $colors["blue"];
// 緑を出力
echo $colors["green"];

var_dump($colors);

echo '<br>';

$colors = ["red" => "赤", "blue" => "青", "green" => "緑"];
$colors["yellow"] = "黄色";

// 赤を出力
echo $colors["red"];
// 青を出力
echo $colors["blue"];
// 緑を出力
echo $colors["green"];
// 黄色を出力
echo $colors["yellow"];

var_dump($colors);
?>
