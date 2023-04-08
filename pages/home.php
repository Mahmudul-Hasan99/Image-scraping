<?php
include "simplehtmldom.php";

$html = file_get_html('https://www.google.com');

$img1 = $html->find('img',0)->src;
$img2 = $html->find('img',0)->alt;

echo $img1.'<br>'.$img2;