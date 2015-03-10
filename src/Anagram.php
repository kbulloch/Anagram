<?php
    class Anagram
    {
        function checkAnagram($word, $bank)
        {
            if ($word == null || $bank == null) {
                return "please input a word and bank";
            }

            //splitting strings into arrays of letters
            $bank_split = str_split($bank);
            $word_split = str_split($word);

            //sort letter arrays alphbetically
            sort($bank_split);
            sort($word_split);

            //convert letter arrays back into strings
            $imploded_bank = implode($bank_split);
            $imploded_word = implode($word_split);

            //compare the two strings
            if ($imploded_word == $imploded_bank) {
                return $bank . ": YES";
            }
            else {
                return $bank . ": NO";
            }
        }
    }
?>
