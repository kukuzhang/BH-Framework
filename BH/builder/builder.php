<?php
/**
 * Created by PhpStorm.
 * User: yyq2
 * Date: 14-2-24
 * Time: 上午11:26
 */

namespace BH;


class builder {


       function  __construct() {
           //echo __FILE__;
         require(BH_CORE_DIR.'/skill/set_config.php');
           echo $config_dir;
   }
} 