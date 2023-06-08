<?php
require_once __DIR__ . '/../vendor/autoload.php';


use MongoDB\Client;


// Replace the placeholder with your Atlas connection string
$uri = $_ENV["MONGO_URI"];

// Create a new client and connect to the server
$client = new MongoDB\Client($uri);


$places = $_GET["placeTags"];
$foods = $_GET["foodTags"];
$queryString = $_GET["queryString"];
// $places = ["燕巢"];
// $foods = ["晚餐"];
// $queryString = "大社";
try {
    // Send a ping to confirm a successful connection
    $collection = $client->foodMap->testing;

   $result =  $collection -> find(['$and' =>
        [
            [ "tags" => ['$regex'=> $queryString]],
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
