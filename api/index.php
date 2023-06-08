<?php
require_once __DIR__ . '/../vendor/autoload.php';


use MongoDB\Client;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__. '/../');
$dotenv->load();

// Replace the placeholder with your Atlas connection string
$uri = $_ENV["MONGO_URI"];

// Create a new client and connect to the server
$client = new MongoDB\Client($uri);


// $places = $_GET["placeTags"];
// $foods = $_GET["foodTags"];
$places = ["燕巢"];
$foods = ["晚餐"];
try {
    // Send a ping to confirm a successful connection
    $collection = $client->foodMap->restaurant;

   $result =  $collection -> find(['$and' =>
        [
            [ "tags" => ['$regex'=> "字串" ]],
            [ "tags" => ['$in'=> $places ]],
            [ "tags"=> ['$in'=> $foods ]]
        ]
    ]);


    foreach ($result as $document) {
        var_dump($document);
    }  
} catch (Exception $e) {
    printf($e->getMessage());
}




?>
