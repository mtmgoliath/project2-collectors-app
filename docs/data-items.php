<?php
require_once 'docs/form-functions.php';
session_start();

function getDBInsert() {
    $db = new PDO('mysql:host=db; dbname=collector_project', 'root', 'password');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $insert = "INSERT INTO `taxidermy_collection`(`name`,`origin`,`family`,`method`,`rating`,`image`,`description`) VALUES (:name,:origin,:family,:method,:rating,:image,:description);";
    return $db->prepare($insert);
}
$data = gatherData($_POST);
$insertItemArray = getDBInsert();
$insertItemArray->execute([
    ':name' => $data['itemName'],
    ':origin' => $data['itemOrigin'],
    ':family' => $data['itemFamily'],
    ':method' => $data['itemMethod'],
    ':rating' => $data['itemRating'],
    ':image' => $data['itemImage'],
    ':description' => $data['itemDescription'],
]);
?>

<html lang="en-GB">
<body>
<h1>Upload Complete!</h1>
<a href="../index.php">Return to Collection?</a>
</body>
</html>
