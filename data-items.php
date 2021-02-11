<?php
session_start();
$db = new PDO('mysql:host=db; dbname=collector_project', 'root', 'password');

$itemName = $_POST['item-name'];
$itemOrigin = $_POST['item-origin'];
$itemFamily = $_POST['item-family'];
$itemMethod = $_POST['item-method'];
$itemRating = $_POST['item-rating'];
$itemImage = $_POST['item-image'];
echo $itemDescription = $_POST['item-description'];


$insertItemArray = $db->prepare("INSERT INTO `taxidermy_collection`(`name`, `origin`, `family`, `method`, `rating`, `image`, `description`) VALUES (:name, :origin, :family, :method, :rating, :image, :description");
$insertItemArray->execute([':name' => $itemName, ':origin' => $itemOrigin, ':family' => $itemFamily, ':method' => $itemMethod, ':rating' => $itemRating, ':image' => $itemImage, ':description' => $itemDescription]);
var_dump($insertItemArray);
?>

<html lang="en-GB">
    <body>
        <h1>Upload Complete!</h1>
        <a href="index.php">Return to Collection?</a>
    </body>
</html>
