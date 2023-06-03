<?php 
require 'vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client("mongodb+srv://cpr40517:Bx4QaOJfRFn0zIpR@cluster0.9de8pzv.mongodb.net/?retryWrites=true&w=majority");
$database = $client->foodMap;

$result = $database->restaurant->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

echo "Inserted with Object ID '{$result->getInsertedId()}'";
?>