<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function testNullInput()
        {
            //Arrange
            $test_null_input = new Anagram;
            $input_word = null;
            $input_bank = null;

            //Act
            $result = $test_null_input->checkAnagram($input_word, $input_bank);

            //Assert
            $this->assertEquals("please input a word and bank", $result);
        }

        function testNullBank()
        {
            //Arrange
            $test_null_bank = new Anagram;
            $input_word = "rat";
            $input_bank = null;

            //Act
            $result = $test_null_bank->checkAnagram($input_word, $input_bank);

            //Assert
            $this->assertEquals("please input a word and bank", $result);
        }

        function testNotAnagram()
        {
            //Arragne
            $test_not_anagram = new Anagram;
            $input_word = "rat";
            $input_bank = "beer";

            //Act
            $result = $test_not_anagram->checkAnagram($input_word, $input_bank);

            //Assert
            $this->assertEquals("beer: NO", $result);
        }


        function testYesAnagram()
        {
            //Arrange
            $test_yes_anagram = new Anagram;
            $input_word = "rat";
            $input_bank = "tar";

            //Act
            $result = $test_yes_anagram->checkAnagram($input_word, $input_bank);

            //Assert
            $this->assertEquals("tar: YES", $result);
        }

        function testMultipleWords()
        {
            //Arrange
            $test_multiple_words = new Anagram;
            $input_word = "rat";
            $input_bank = "tar bat";

            //Act
            $result = $test_multiple_words->checkAnagram($input_word, $input_bank);

            //Assert
            $this->assertEquals("tar: YES, bat: NO", $result);
        }

        function testMultipleConfirms()
        {
            //Arrange
            $test_multiple_confirms = new Anagram;
            $input_word = "east";
            $input_bank = "ates eats bread";

            //Act
            $result = $test_multiple_confirms->checkAnagram($input_word, $input_bank);

            //Assert
            $this->assertEquals("ates: YES, eats: YES, bread: NO", $result);
        }

        function testCapitalInputWord()
        {
            //Arrange
            $test_capital_input_word = new Anagram;
            $input_word = "Seat";
            $input_bank = "east";

            //Act
            $result = $test_capital_input_word->checkAnagram($input_word, $input_bank);

            //Assert
            $this->assertEquals("east: YES", $result);
        }

        function testCapitalBank()
        {
            //Arrange
            $test_capital_bank = new Anagram;
            $input_word = "east";
            $input_bank = "SEAT";

            //Act
            $result = $test_capital_bank->checkAnagram($input_word, $input_bank);

            //Assert
            $this->assertEquals("seat: YES", $result);
        }


    }
?>
