<?php

$db = new PDO('mysql:host=db; dbname=collector_project', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$nameQuery = $db->prepare("SELECT `name` FROM `taxidermy_collection`;");
$nameQuery->execute();

$originQuery = $db->prepare("SELECT `origin` FROM `taxidermy_collection`;");
$originQuery->execute();

$familyQuery = $db->prepare("SELECT `family` FROM `taxidermy_collection`;");
$familyQuery->execute();

$methodQuery = $db->prepare("SELECT `method` FROM `taxidermy_collection`;");
$methodQuery->execute();

$ratingQuery = $db->prepare("SELECT `rating` FROM `taxidermy_collection`;");
$ratingQuery->execute();

$descriptionQuery = $db->prepare("SELECT `description` FROM `taxidermy_collection`;");
$descriptionQuery->execute();

$imageQuery = $db->prepare("SELECT `image` FROM `taxidermy_collection`;");
$imageQuery->execute();





//just the name value
$nameVariable = $nameQuery->fetch();
foreach($nameVariable as $value) {
    echo $value;
}

//origin
$originVariable = $originQuery->fetch();
foreach($originVariable as $value) {
    echo $value;
}

//family
$familyVariable = $familyQuery->fetch();
foreach($familyVariable as $value) {
    echo $value;
}

//method
$methodVariable = $methodQuery->fetch();
foreach($methodVariable as $value) {
    echo $value;
}


//rating
$ratingVariable = $ratingQuery->fetch();
foreach($ratingVariable as $value) {
    echo $value;
}

//description
$descriptionVariable = $descriptionQuery->fetch();
foreach($descriptionVariable as $value) {
    echo $value;
}

//image path
$imageVariable = $imageQuery->fetch();
foreach($imageVariable as $value) {
    echo $value;
}

