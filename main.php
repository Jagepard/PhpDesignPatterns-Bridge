<?php

namespace Structural\Bridge;

require_once "vendor/autoload.php";

$input = "String";
printf("Input data: %s \n", $input);

$service = new ServiceBridge(new Uppercase());
printf("Bridge for Uppercase: %s \n", $service->doSomething($input));

$service = new ServiceBridge(new Lowercase());
printf("Bridge for Lowercase: %s \n", $service->doSomething($input));
