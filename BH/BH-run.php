<?php
//0 载入配置
require('builder/builder.php');
ini_set("error_reporting","E_ALL & ~E_NOTICE");

$builder=new \BH\builder();

//1 调用reader   做指令分析
$reader=new \BH\reader();


//2 调用sender 指令发送到指定位置
$sender==new \BH\sender();

//3 调用ponder 数据处理 输出到数据池
$ponder==new \BH\ponder();

//4 调用runner 将需求指令数据输出
$runner==new \BH\runner();

$builder->test2()->test1();