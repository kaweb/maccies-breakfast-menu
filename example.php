<?php

require('./vendor/autoload.php');

$client = \Kaweb\MacciesMenu\Client::create();

$menuItems = $client->getMenu();

$array = [];
foreach ($menuItems as $menuItem) {
    $array[] = [
        'name' => $menuItem->getName(),
        'calories' => $menuItem->getCalories(),
        'individual_price' => $menuItem->getIndividualPrice(),
        'meal_price' => $menuItem->getMealPrice(),
    ];
}

echo json_encode($array);
