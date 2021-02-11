<?php

function gatherData(array $obj) :array {
    return [
        'itemName' => $obj['item-name'],
        'itemOrigin' => $obj['item-origin'],
        'itemFamily' => $obj['item-family'],
        'itemMethod' => $obj['item-method'],
        'itemRating' => $obj['item-rating'],
        'itemImage' => $obj['item-image'],
        'itemDescription' => $obj['item-description'],
    ];
}

