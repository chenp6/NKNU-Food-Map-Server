<?php
require_once ' /var/task/user/vendor/autoload.php';

use MongoDB\Client;

// Replace the placeholder with your Atlas connection string
$uri = "mongodb+srv://cpr40517:Bx4QaOJfRFn0zIpR@cluster0.9de8pzv.mongodb.net/?retryWrites=true&w=majority";

// Create a new client and connect to the server
$client = new MongoDB\Client($uri);

try {
    // Send a ping to confirm a successful connection
    $client->selectDatabase('admin')->command(['ping' => 1]);
    echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}


$collection = $client->test->users;

$insertManyResult = $collection->insertMany([
    [
        'username' => 'admin',
        'email' => 'admin@example.com',
        'name' => 'Admin User',
    ],
    [
        'username' => 'test',
        'email' => 'test@example.com',
        'name' => 'Test User',
    ],
]);

printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());

var_dump($insertManyResult->getInsertedIds());

?>
