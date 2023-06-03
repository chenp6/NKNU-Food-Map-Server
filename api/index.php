<?php
// MongoDB 伺服器設定
$dbhost = 'mongodb+srv://test:p0hFujXoDmiZovnY@cluster0.9de8pzv.mongodb.net/?retryWrites=true&w=majority';

$dbname = 'gtwang_demo';

// 連線到 MongoDB 伺服器
$db = new MongoClient($dbhost);

?>
