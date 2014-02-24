<?php
/**
 * Created by PhpStorm.
 * User: yyq2
 * Date: 14-2-24
 * Time: 下午2:15
 */
// 输出设置
function E($v){
    if(BH_DEBUG)
    {   $date= date("Y/m/d h:m:s   ");
   echo($date).">>>".$v."<<<   From:".__FILE__.' LINE:'.__LINE__;
    echo "<br />";
    }
}
