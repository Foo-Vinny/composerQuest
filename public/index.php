<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 01/04/19
 * Time: 10:33
 */


require './vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;


$hello = new Hello();
echo $hello->talk();

echo "\n";

$helloWorld = new SayHello();
echo $helloWorld->world();

