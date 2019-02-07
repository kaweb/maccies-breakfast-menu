<?php

require('./vendor/autoload.php');

$client = \Kaweb\MacciesMenu\Client::create();

$menuItems = $client->getMenu();

echo json_encode($menuItems);
