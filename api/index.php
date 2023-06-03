<?php
use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;
// 建立 MongoDB 連接
$manager = new Manager("mongodb+srv://cpr40517:Bx4QaOJfRFn0zIpR@cluster0.9de8pzv.mongodb.net/?retryWrites=true&w=majority");
var_dump($manager);

$filter = ['name' => 'Hinterland'];

$query = new MongoDB\Driver\Query($filter);
$cursor = $manager->executeQuery('foodMap.restaurant', $query); // $mongo contains the connection object to MongoDB
foreach ($cursor as $document) {
    var_dump($document);
}

?>
