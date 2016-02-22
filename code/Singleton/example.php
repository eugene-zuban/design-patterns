<?php

require (__DIR__ . '/../../vendor/autoload.php');

//create an object with static instance method of the Singleton class
$firstCall = \Singleton\Singleton::instance();

//doing the second call we will receive the same object of the Singleton class
//as a result we will have only one object that was created with the first call
$secondCall = \Singleton\Singleton::instance();
