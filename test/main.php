<?php


require_once '../vendor/autoload.php'; // 加载自动加载文件

use GoldenPass\Hanzi\Detect;

$character = "测试";
$objHanzi = new Detect();
var_dump($objHanzi->exec($character));
