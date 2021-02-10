<?php
$db = new PDO('mysql:host=db; dbname=collector_project', 'root', 'password');
$fullQuery = $db->prepare("SELECT * FROM `taxidermy_collection`;");
$fullQuery->setFetchMode(PDO::FETCH_ASSOC);
$fullQuery->execute();
$results = $fullQuery->fetchAll();

///INDEX POSITION//
function populateItems($results) {
    $collectionString = '';
    foreach ($results as $row) {
        $collectionString .= populateItem($row);
    }
    return $collectionString;
}

//ASSOCIATIVE POSITION//
function populateItem($row) {
    $rowString = '<li class="collection_item "><div class="stats"><span class="image_wrapper">';
    $rowString .= '<img src="' . $row['image'] . '"';
    $rowString .= ' alt="' . $row['description'] . '"></span>';
    $rowString .= '<h3>' . $row['name'] . '</h3>';
    $rowString .= '<ul><li class="origin">Origin:' . $row['origin'] . '</li>';
    $rowString .= '<li class="family">Family:' . $row['family'] . '</li>';
    $rowString .= '<li class="preservation_type">' . $row['method'] . '</li>';
    $rowString .= '<li class="quality">Rating:' . $row['rating'] . '/10</li>' . '</ul></div></li>';
    return $rowString;
}