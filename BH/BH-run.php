<?php
//0 载入配置
require('builder/builder.php');
$builder=new \BH\builder();

//1 调用reader   做指令分析

//2 调用sender 指令发送到指定位置

//3 调用ponder 数据处理 输出到数据池

//4 调用runner 将需求指令数据输出