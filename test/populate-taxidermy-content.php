<?php
require_once '../populate-taxidermy-content.php';
use PHPUnit\Framework\TestCase;



$mockRowOutput = '';
$mockRowOutput .= '<li class="collection_item "><div class="stats"><span class="image_wrapper">';
$mockRowOutput .= '<img src="one"';
$mockRowOutput .= ' alt="two"></span>';
$mockRowOutput .= '<h3>test</h3>';
$mockRowOutput .= '<ul><li class="origin">Origin: three</li>';
$mockRowOutput .= '<li class="family">Family: four</li>';
$mockRowOutput .= '<li class="preservation_type">five</li>';
$mockRowOutput .= '<li class="quality">Rating: six/10</li></ul></div></li>';

class PopulateTaxidermyContent extends TestCase {


    public function getMockRow() {
        $mockRow = [
            'name' => 'test',
            'image' => 'one',
            'description' => 'two',
            'origin' => 'three',
            'family' => 'four',
            'method' => 'five',
            'rating' => 'six'
        ];
        return $mockRow;
    }

    public function getMockRowOutput() {
        $mockRowOutput = '';
        $mockRowOutput .= '<li class="collection_item "><div class="stats"><span class="image_wrapper">';
        $mockRowOutput .= '<img src="one"';
        $mockRowOutput .= ' alt="two"></span>';
        $mockRowOutput .= '<h3>test</h3>';
        $mockRowOutput .= '<ul><li class="origin">Origin: three</li>';
        $mockRowOutput .= '<li class="family">Family: four</li>';
        $mockRowOutput .= '<li class="preservation_type">five</li>';
        $mockRowOutput .= '<li class="quality">Rating: six/10</li></ul></div></li>';
        return $mockRowOutput;
    }

    public function testSuccessPopulateItem() {
        $mockRow = $this->getMockRow();
        $mockRowOutput = $this->getMockRowOutput();
        $input = $mockRow;
        $expectedOutput = $mockRowOutput;
        $actualOutput = populateItem($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}
?>