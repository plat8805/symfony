<?php

use App\Kernel;
//require_once "test.php";


//class MyClass {
//
//}
//$instance = new MyClass('John Doe', 'mail', 1);
//$instance->setSex('femail');
//var_dump($instance->getSex());


//echo __DIR__;
//var_dump(__DIR__);

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
