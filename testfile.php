<?php

require_once __DIR__ . '/inventory.php';
require_once __DIR__ . '/strain.php';
$strain = 11;
$amount = 1.50;
$username = 'outlaw';


//$s = new \Buddy\Strain(14);
//$s->inventory = 0;
//$s->update();

$result = \Buddy\Inventory::increase($strain,-1 * abs($amount),$username);
//print_r($result);
