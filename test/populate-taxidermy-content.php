<?php
require_once '../populate-taxidermy-content.php';
use PHPUnit\Framework\TestCase;

class PopulateTaxidermyContent extends TestCase {

    //Mock functions for input into tests
    public function getMockRow() {
        return [
            'name' => 'test',
            'image' => 'one',
            'description' => 'two',
            'origin' => 'three',
            'family' => 'four',
            'method' => 'five',
            'rating' => 'six'
        ];
    }

    public function getMockRowOutput() {
        $mockRowOutput = '<li class="collection_item "><div class="stats"><span class="image_wrapper">';
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

    public function testMalformedPopulateItem() {
        $input = 7;
        //expecting array so will be malformed by int
        $this->expectException(TypeError::class);
        populateItem($input);
    }

    public function testSuccessPopulateItems() {
        $mockRow = $this->getMockRow();
        $mockRows = [$mockRow, $mockRow];
        $mockRowOutput = $this->getMockRowOutput();
        $mockRowsOutput = $mockRowOutput . $mockRowOutput;

        $input = $mockRows;
        $expectedOutput = $mockRowsOutput;
        $actualOutput = populateItems($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testMalformedPopulateItems() {
        $input = 7;
        //expecting array so will be malformed by int
        $this->expectException(TypeError::class);
        populateItem($input);
    }
}
?>
