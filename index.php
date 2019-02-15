<?php
/**
 * Created by PhpStorm.
 * User: Abdou
 * Date: 15/02/2019
 * Time: 14:01
 */

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use \App\SayHello;
var_dump(SayHello::world());