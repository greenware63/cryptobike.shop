<?php
require "Bike.php";
$new_bike=new Bike("Cube","Bike",1500);

$new_bike->setPrice(15000000);
echo "this bike price is  ".$new_bike->getPrice();

