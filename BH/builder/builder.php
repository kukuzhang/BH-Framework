<?php
/**
 * Created by PhpStorm.
 * User: yyq2
 * Date: 14-2-24
 * Time: 上午11:26
 */

//核心类加载




namespace BH;
require(BH_CORE_DIR.'/reader/reader.php');
require(BH_CORE_DIR.'/runner/runner.php');
require(BH_CORE_DIR.'/sender/sender.php');
require(BH_CORE_DIR.'/ponder/ponder.php');

require(BH_CORE_DIR.'/skill/set_config.php');
require(BH_CORE_DIR.'/skill/core_func.php');

class builder {


       function  __construct() {
           //echo __FILE__;
             E('builder');

   }
} 