<?php

require_once __DIR__."/../Helper/input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$channel = input("channel");
echo "$channel" . PHP_EOL;