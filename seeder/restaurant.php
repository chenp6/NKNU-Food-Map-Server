<?php
require_once __DIR__ . '/../vendor/autoload.php';
require 'insert.php';

use MongoDB\Client;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__. '/../');
$dotenv->load();

// Replace the placeholder with your Atlas connection string
$uri = $_ENV["MONGO_URI"];

// Create a new client and connect to the server
$client = new MongoDB\Client($uri);

try {
    // Send a ping to confirm a successful connection
    $collection = $client->foodMap->testing;
    
    $arr = array (
        0 => 
        array (
          'id' => '00001',
          'name' => '丹丹',
          'image' => 
          array (
            0 => './img/丹丹2.jpg',
          ),
          'website' => './img/丹丹2.jpg',
          'openingTime' => NULL,
          'holiday' => NULL,
          'tags'=>['燕巢','大社','楠梓','早餐','午餐','晚餐','麵','吐司漢堡','炸物','丹丹'],
        ),
        1 => 
        array (
          'id' => '00002',
          'name' => 'My吐司',
          'image' => 
          array (
            0 => './img/大社1.jpg',
          ),
          'website' => 'https://goo.gl/maps/FtGGfteCaApSfuyEA',
          'openingTime' => '每日18:00～01:30',
          'holiday' => NULL,
          'tags'=>['大社','晚餐','宵夜','麵','吐司漢堡','炸物','My吐司'],
        ),
        2 => 
        array (
          'id' => '00003',
          'name' => '旺堡',
          'image' => 
          array (
            0 => './img/大社2.jpg',
            1 => './img/大社3.jpg',
          ),
          'website' => 'https://goo.gl/maps/7X53bKGvd5PJX4ba8',
          'openingTime' => '每日06:00～13:30',
          'holiday' => NULL,
          'tags'=>['大社','早餐','午餐','麵','吐司漢堡','炸物','旺堡'],
        ),
        3 => 
        array (
          'id' => '00004',
          'name' => '大亨牛排',
          'image' => 
          array (
            0 => './img/大社4.jpg',
          ),
          'website' => 'https://goo.gl/maps/2DnRc1A1F3TgKSyo6',
          'openingTime' => '週二～週五10:00～14:00、16:00～21:00 <br> 週六、週日10:00～21:00',
          'holiday' => '週一',
          'tags'=>['大社','午餐','晚餐','麵','其他','大亨牛排']
        ),
        4 => 
        array (
          'id' => '00005',
          'name' => '壹顆壽司',
          'image' => 
          array (
            0 => './img/大社5.jpg',
          ),
          'website' => 'https://goo.gl/maps/xniGMBrZD1p9qHeB9',
          'openingTime' => '週日～週五16:00～21:00',
          'holiday' => '週六',
          'tags'=>['大社','晚餐','飯','壹顆壽司']
        ),
        5 => 
        array (
          'id' => '00006',
          'name' => '日十',
          'image' => 
          array (
            0 => './img/大社6.jfif',
          ),
          'website' => 'https://goo.gl/maps/GcyUQYLDxnPygLww9',
          'openingTime' => '週二～週五06:30～13:00、週六、週日07:00～13:30',
          'holiday' => '週一',
          'tags'=>['大社','早餐','午餐','麵','飯','吐司漢堡','炸物','日十']
        ),
        6 => 
        array (
          'id' => '00007',
          'name' => '陳麻飯',
          'image' => 
          array (
            0 => './img/大社7.jpg',
          ),
          'website' => 'https://goo.gl/maps/Vzonw9Wc4gpUWD7bA',
          'openingTime' => '週一～週六10:30～14:00、16:00～20:00',
          'holiday' => '週日',
          'tags'=>['大社','楠梓','午餐','晚餐','麵','飯','陳麻飯']
        ),
        7 => 
        array (
          'id' => '00008',
          'name' => '阿帕碳烤吐司',
          'image' => 
          array (
            0 => './img/大社8.jpg',
          ),
          'website' => 'https://goo.gl/maps/GqMXc6jDAEzBUf429',
          'openingTime' => '週日～週五16:30～02:00',
          'holiday' => '週六',
          'tags'=>['大社','晚餐','宵夜','麵','吐司漢堡','炸物','阿帕碳烤土司']
        ),
        8 => 
        array (
          'id' => '00009',
          'name' => '莫尼',
          'image' => 
          array (
            0 => './img/大社9.jpg',
          ),
          'website' => 'https://goo.gl/maps/g8RjxNqxDVA996gEA',
          'openingTime' => '每日06:00～14:00',
          'holiday' => '週二',
          'tags'=>['大社','早餐','午餐','麵','飯','吐司漢堡','莫尼']
        ),
        9 => 
        array (
          'id' => '00010',
          'name' => '原塊屋',
          'image' => 
          array (
            0 => './img/大社10.jpg',
          ),
          'website' => 'https://goo.gl/maps/cycR4pekTkS54kPG7',
          'openingTime' => '每日11:00～14:30、17:00～21:00',
          'holiday' => NULL,
          'tags'=>['大社','午餐','晚餐','麵','炸物','其他','原塊屋']
        ),
        10 => 
        array (
          'id' => '00011',
          'name' => '好窩',
          'image' => 
          array (
            0 => './img/大社11.jpg',
          ),
          'website' => 'https://goo.gl/maps/j1PHPqeDtk8qjgZ19',
          'openingTime' => '週日～週五17:00～00:00',
          'holiday' => '週六',
          'tags'=>['大社','晚餐','宵夜','飯','炸物','好窩']
        ),
        11 => 
        array (
          'id' => '00012',
          'name' => '牛匠太郎',
          'image' => 
          array (
            0 => './img/大社12.jpg',
          ),
          'website' => 'https://goo.gl/maps/qTKAFdYCwnRSUweLA',
          'openingTime' => '每日11:30～21:00',
          'holiday' => NULL,
          'tags'=>['大社','午餐','晚餐','麵','飯','炸物','牛匠太郎']
        ),
        12 => 
        array (
          'id' => '00013',
          'name' => '在地人鹽水雞',
          'image' => 
          array (
            0 => './img/大社13.jpg',
          ),
          'website' => 'https://goo.gl/maps/UySfqwfyheswAEPp9',
          'openingTime' => '週一～週五16:30～23:00',
          'holiday' => '週六、週日',
          'tags'=>['大社','晚餐','宵夜','其他','在地人鹽水雞']
        ),
        13 => 
        array (
          'id' => '00014',
          'name' => '天香麵館',
          'image' => 
          array (
            0 => './img/大社14.jpg',
          ),
          'website' => 'https://goo.gl/maps/qgquuzobs5gf8vt48',
          'openingTime' => '每日10:00～21:30',
          'holiday' => NULL,
          'tags'=>['大社','午餐','晚餐','麵','其他','天香麵館']
        ),
        14 => 
        array (
          'id' => '00015',
          'name' => '大成館',
          'image' => 
          array (
            0 => './img/大社15.jpg',
          ),
          'website' => 'https://goo.gl/maps/54ee8fAqBcLbxqtL9',
          'openingTime' => '週一～週六11:00～14:00、17:00～20:30',
          'holiday' => '週日',
          'tags'=>['大社','午餐','晚餐','麵','飯','炸物','大成館']
        ),
        15 => 
        array (
          'id' => '00016',
          'name' => '心喜',
          'image' => 
          array (
            0 => './img/心喜.jpg',
          ),
          'website' => 'https://www.facebook.com/sinshitea/photos/p.1562046870855489/1562046870855489',
          'openingTime' => '每日09:00～20:00',
          'holiday' => NULL,
          'tags'=>['燕巢','大社','楠梓','飲料','心喜']
        ),
        16 => 
        array (
          'id' => '00017',
          'name' => '6吋盤',
          'image' => 
          array (
            0 => './img/楠梓1.jpg',
            1 => './img/楠梓2.jpg',
          ),
          'website' => 'https://goo.gl/maps/X6miTVc7cdJZYkr26',
          'openingTime' => '週一～週五06:30～14:00、週六、週日07:00～14:30',
          'holiday' => NULL,
          'tags'=>['楠梓','早餐','午餐','麵','飯','吐司漢堡','炸物','6吋盤']
        ),
        17 => 
        array (
          'id' => '00018',
          'name' => '卡布',
          'image' => 
          array (
            0 => './img/楠梓3.jpg',
            1 => './img/楠梓4.jpg',
          ),
          'website' => 'https://goo.gl/maps/uEkCzrkKVkBdzrap7',
          'openingTime' => '每日11:00～14:00、17:00～21:00',
          'holiday' => NULL,
          'tags'=>['楠梓','午餐','晚餐','麵','飯','炸物','卡布']
        ),
        18 => 
        array (
          'id' => '00019',
          'name' => '來伊ㄚ麵の屋',
          'image' => 
          array (
            0 => './img/燕巢1.jpg',
          ),
          'website' => 'https://goo.gl/maps/RiXAiB8VoW4AMuMZA',
          'openingTime' => '營業時間:週日~週五',
          'holiday' => '週六',
          'tags'=>['燕巢','午餐','晚餐','麵','飯','來伊ㄚ麵の屋']
        ),
        19 => 
        array (
          'id' => '00020',
          'name' => '豫園上海湯包',
          'image' => 
          array (
            0 => './img/燕巢2.jpg',
          ),
          'website' => 'https://goo.gl/maps/qdxEySPGUMACaRWX9',
          'openingTime' => '營業時間:每日11:00~19:30',
          'holiday' => NULL,
          'tags'=>['燕巢','午餐','晚餐','麵','飯','其他','豫園上海湯包']
        ),
        20 => 
        array (
          'id' => '00021',
          'name' => '深水早餐',
          'image' => 
          array (
            0 => './img/燕巢3.jpg',
          ),
          'website' => 'https://goo.gl/maps/1vNPeNX99CMRcoAV9',
          'openingTime' => '週一～週六05:00～13:30',
          'holiday' => '週日',
          'tags'=>['燕巢','早餐','午餐','麵','飯','吐司漢堡','其他','深水早餐']
        ),
        21 => 
        array (
          'id' => '00022',
          'name' => '膳串燒',
          'image' => 
          array (
            0 => './img/燕巢4.jpg',
          ),
          'website' => 'https://goo.gl/maps/1RJb5RidWk8GCVTY6',
          'openingTime' => '週三20:00～00:00',
          'holiday' => '週三以外',
          'tags'=>['燕巢','宵夜','其他','膳串燒']
        ),
        22 => 
        array (
          'id' => '00023',
          'name' => '乾媽',
          'image' => 
          array (
            0 => './img/燕巢5.jpg',
          ),
          'website' => 'https://goo.gl/maps/VVv72U2UPu7UaY3h9',
          'openingTime' => '每日09:00～19:30',
          'holiday' => NULL,
          'tags'=>['燕巢','晚餐','麵','飯','乾媽']
        ),
        23 => 
        array (
          'id' => '00024',
          'name' => '晨間廚房',
          'image' => 
          array (
            0 => './img/里港1.jpg',
          ),
          'website' => 'https://goo.gl/maps/VbPuhDU4ttEucS9v8',
          'openingTime' => '每日06:00～13:00',
          'holiday' => '週二',
          'tags'=>['里港','早餐','午餐','麵','飯','吐司漢堡','炸物','晨間廚房']
        ),
        24 => 
        array (
          'id' => '00025',
          'name' => '金禾日式鍋燒',
          'image' => 
          array (
            0 => './img/里港2.jpg',
          ),
          'website' => 'https://goo.gl/maps/6XEjoTt7jCM8hnb17',
          'openingTime' => '週日～週五10:30～14:00、16:00～19:00',
          'holiday' => '週六',
          'tags'=>['里港','午餐','晚餐','麵','飯','金禾日式鍋燒']
        ),
        25 => 
        array (
          'id' => '00026',
          'name' => '熊賀拉麺',
          'image' => 
          array (
            0 => './img/里港3.jpg',
          ),
          'website' => 'https://goo.gl/maps/pCyLmAVEZVGHh3py9',
          'openingTime' => '每日10:30～13:30、17:00～20:00',
          'holiday' => '週二',
          'tags'=>['里港','午餐','晚餐','麵','飯','炸物','熊賀拉麵']
        ),
        26 => 
        array (
          'id' => '00027',
          'name' => '麻古',
          'image' => 
          array (
            0 => './img/macu.png',
          ),
          'website' => 'https://macutea.com.tw/upload_image/carte/menu_S.jpg',
          'openingTime' => '依各分店不同',
          'holiday' => NULL,
          'tags'=>['燕巢','大社','楠梓','里港','飲料','麻古']
        ),
        27 => 
        array (
          'id' => '00028',
          'name' => '迷克夏',
          'image' => 
          array (
            0 => './img/milksha.png',
          ),
          'website' => 'https://www.milkshoptea.com/upload/price/2211020110090000002.pdf',
          'openingTime' => '依各分店不同',
          'holiday' => NULL,
          'tags'=>['燕巢','大社','楠梓','里港','飲料','迷克夏']
        ),
        28 => 
        array (
          'id' => '00029',
          'name' => '鮮茶道',
          'image' => 
          array (
            0 => './img/presotea.png',
          ),
          'website' => 'http://www.presotea.com.tw/webimages/1671011424635.jpg',
          'openingTime' => '依各分店不同',
          'holiday' => NULL,
          'tags'=>['燕巢','楠梓','里港','飲料','鮮茶道']
        ),
        29 => 
        array (
          'id' => '00030',
          'name' => '可不可',
          'image' => 
          array (
            0 => './img/kebuke.png',
          ),
          'website' => 'https://www.kebuke.com/menu/',
          'openingTime' => '依各分店不同',
          'holiday' => NULL,
          'tags'=>['大社','楠梓','飲料','可不可']
        ),
        30 => 
        array (
          'id' => '00031',
          'name' => '回憶小時候',
          'image' => 
          array (
            0 => './img/recallchildhood.jpg',
          ),
          'website' => 'https://www.recallchildhood.com.tw/userfiles/images/20210126034143481.png',
          'openingTime' => '依各分店不同',
          'holiday' => NULL,
          'tags'=>['燕巢','大社','楠梓','里港','飲料','回憶小時候']
        ),
        31 => 
        array (
          'id' => '00032',
          'name' => '水巷茶弄',
          'image' => 
          array (
            0 => './img/cha-nung.png',
          ),
          'website' => 'https://www.chanung.com.tw/products',
          'openingTime' => '依各分店不同',
          'holiday' => NULL,
          'tags'=>['大社','楠梓','里港','飲料','水巷茶弄']
        ),
        32 => 
        array (
          'id' => '00033',
          'name' => '肯德基',
          'image' => 
          array (
            0 => './img/kfc2.png',
          ),
          'website' => 'https://www.kfcclub.com.tw/menu/indivdual-meal?mid=8',
          'openingTime' => '依各分店不同',
          'holiday' => NULL,
          'tags'=>['楠梓','早餐','午餐','晚餐','宵夜','飯','吐司漢堡','炸物','肯德基']
        ),
        33 => 
        array (
          'id' => '00034',
          'name' => '麥當勞',
          'image' => 
          array (
            0 => './img/mc2.png',
          ),
          'website' => 'https://yoti.life/mcdonalds-menu/',
          'openingTime' => '依各分店不同',
          'holiday' => NULL,
          'tags'=>['楠梓','早餐','午餐','晚餐','宵夜','吐司漢堡','炸物','麥當勞']
        ),
        34 => 
        array (
          'id' => '00035',
          'name' => 'SUBWAY',
          'image' => 
          array (
            0 => './img/subway.jpeg', 
          ),
          'website' => 'https://subway.com.tw/GoWeb2/include/index.html',
          'openingTime' => '依各分店不同',
          'holiday' => NULL,
          'tags'=>['楠梓','早餐','午餐','晚餐','吐司漢堡','SUBWAY']
        ),
    );

    foreach ($arr as $obj) {
        $res = insertIntoDatabase($collection,$obj);
    }
} catch (Exception $e) {
    printf($e->getMessage());
}




?>
