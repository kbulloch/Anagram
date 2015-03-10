<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function testNullInput()
        {
            //Arrange
            $test_null_input = new Anagram;
            $input_word = null;
            $input_wordbank = null;

            //Act
            $result = $test_null_input->checkAnagram($input_word, $input_wordbank);

            //Assert
            $this->assertEquals("please input a word and wordbank", $result);
        }

        function testNullWordbank()
        {
            //Arrange
            $test_null_wordbank = new Anagram;
            $input_word = "rat";
            $input_wordbank = null;

            //Act
            $result = $test_null_wordbank->checkAnagram($input_word, $input_wordbank);

            //Assert
            $this->assertEquals("please input a word and wordbank", $result);
        }

        function testNotAnagram()
        {
            //Arragne
            $test_not_anagram = new Anagram;
            $input_word

            //Act

            //Assert
        }
    }
?>
