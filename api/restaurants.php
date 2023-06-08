<?php
require_once __DIR__ . '/../vendor/autoload.php';


use MongoDB\Client;

header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');



// Replace the placeholder with your Atlas connection string
$uri = $_ENV["MONGO_URI"];

// Create a new client and connect to the server
$client = new MongoDB\Client($uri);


$places = $_GET["place"];
$foods = $_GET["food"];
$queryString = $_GET["query"];

try {
    // Send a ping to confirm a successful connection
    $collection = $client->foodMap->restaurant;

   $restaurants =  $collection -> find(['$and' =>
        [
            [ "tags" => ['$regex'=> $queryString]],
            [ "tags" => ['$in'=> $places ]],
            [ "tags"=> ['$in'=> $foods ]]
        ]
    ]);

    $sendResult = [];
    foreach ($restaurants as $restaurant) {
        array_push($sendResult,array(
            "id" => $restaurant->id,
            "name" => $restaurant->name,
            "image" => $restaurant->image,
            'website' => $restaurant->website,
            'openingTime' => $restaurant->openingTime,
            'holiday' => $restaurant->holiday
        ));
    }
    // $sendResult = mb_convert_encoding($sendResult, 'UTF-8',);
    // $json = json_encode($data);

    echo json_encode($sendResult, JSON_UNESCAPED_UNICODE);
    // var_dump($restaurants);
    
} catch (Exception $e) {
    printf($e->getMessage());
}

?>
