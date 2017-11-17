<?php

require (__DIR__ . '/../../vendor/autoload.php');

//create a new object using the static instance() method
$firstCall = \Singleton\Singleton::instance();

//with a new call, we will get the same object instead of a new one.
$secondCall = \Singleton\Singleton::instance();
