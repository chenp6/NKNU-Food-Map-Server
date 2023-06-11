<?php
require_once __DIR__ . '/../vendor/autoload.php';


use MongoDB\Client;

header('Content-Type: text/html; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

mb_internal_encoding('UTF-8');

// Replace the placeholder with your Atlas connection string
$uri = $_ENV["MONGO_URI"];

// Create a new client and connect to the server
$client = new MongoDB\Client($uri);

$places = $foods = [];
$queryString = '';

if (isset($_GET["place"])) {
    $places = $_GET["place"];
}

if (isset($_GET["food"])) {
    $foods = $_GET["food"];
}

if (isset($_GET["query"])) {
    $queryString = $_GET["query"];
}



try {
    // Send a ping to confirm a successful connection
    $collection = $client->foodMap->restaurant;
    $restaurants = [];

    $queryArr = [];

    if (count($places)!==0){
        array_push($queryArr,["tags" => ['$in' => $places]]);
    } 
    
    if(count($foods)!==0) {
        array_push($queryArr,["tags" => ['$in' => $foods]]);
    }
    if($queryArr !=='') {
        array_push($queryArr,["tags" => ['$regex' => $queryString]]);
    }

    $restaurants =  $collection->find([
        '$nor' =>$queryArr
    ]);
    

    $sendResult = [];
    foreach ($restaurants as $restaurant) {
        array_push($sendResult, array(
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
