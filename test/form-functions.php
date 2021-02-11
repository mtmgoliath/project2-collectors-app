<?php
require_once '../form-functions.php';
use PHPUnit\Framework\TestCase;

class FormFunctions extends TestCase {

    public function testSuccessFormFunctions() {
        $input = [
            'item-name' => 'test',
            'item-origin' => 'one',
            'item-family' => 'two',
            'item-method' => 'three',
            'item-rating' => 'four',
            'item-image' => 'five',
            'item-description' => 'six',
        ];
        $expectedOutput = [
            'itemName' => 'Test',
            'itemOrigin' => 'One',
            'itemFamily' => 'Two',
            'itemMethod' => 'Three',
            'itemRating' => 1,
            'itemImage' => 'five',
            'itemDescription' => 'six',
        ];
        $actualOutput = gatherData($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

}

