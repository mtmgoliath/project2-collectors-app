<?php

function gatherData(array $obj) :array {
    $rating = $obj['item-rating'];
    if (!is_int($rating)) {
        $rating = 1;
    } elseif ($rating > 10) {
        $rating = 10;
    } elseif ($rating < 1) {
        $rating = 1;
    }

    return [
        'itemName' => ucwords($obj['item-name']),
        'itemOrigin' => ucwords($obj['item-origin']),
        'itemFamily' => ucwords($obj['item-family']),
        'itemMethod' => ucwords($obj['item-method']),
        'itemRating' => $rating,
        'itemImage' => $obj['item-image'],
        'itemDescription' => $obj['item-description'],
    ];
}

