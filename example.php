<?php

require('./vendor/autoload.php');

$client = \Kaweb\MacciesMenu\Client::create();

$client->getMenu();
