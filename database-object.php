<?php
$db = new PDO('mysql:host=db; dbname=collector_project', 'root', 'password');
$fullQuery = $db->prepare("SELECT * FROM `taxidermy_collection`;");
$fullQuery->setFetchMode(PDO::FETCH_ASSOC);
$fullQuery->execute();
$results = $fullQuery->fetchAll();
?>