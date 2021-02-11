<?php

///INDEX POSITION//
///SPLITS RESULTS INTO A ROW FOR EACH INNER ARRAY,
/// CREATES A LONG STRING WITH THE RESULTS BASED ON NUMBER OF ROWS
/// THIS WILL UPDATE AUTOMATICALLY AS DB GROWS
function populateItems(array $results) :string {
    $collectionString = '';
    foreach ($results as $row) {
        $collectionString .= populateItem($row);
    }
    return $collectionString;
}

//ASSOCIATIVE POSITION//
//TAKES AN ARRAY AND CONVERTS INTO CONCATENATED STRING USING ARRAY KEYS TO FILL IN THE GAPS
//THIS CAN THEN BE FED INTO THE FOREACH LOOP TO GENERATE THE HTML
function populateItem(array $row) : string {
    $rowString = '<li class="collection_item "><div class="stats"><span class="image_wrapper">';
    $rowString .= '<img src="' . $row['image'] . '"';
    $rowString .= ' alt="' . $row['description'] . '"></span>';
    $rowString .= '<h3>' . $row['name'] . '</h3>';
    $rowString .= '<ul><li class="origin">Origin: ' . $row['origin'] . '</li>';
    $rowString .= '<li class="family">Family: ' . $row['family'] . '</li>';
    $rowString .= '<li class="preservation_type">' . $row['method'] . '</li>';
    $rowString .= '<li class="quality">Rating: ' . $row['rating'] . '/10</li>' . '</ul></div></li>';
    return $rowString;
}
?>