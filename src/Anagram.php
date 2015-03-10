<?php
    class Anagram
    {
        function checkAnagram($word, $bank)
        {
            if ($word == null || $bank == null) {
                return "please input a word and bank";
            }

            //split input word into array of letters
            $word_split = str_split($word);
            //sort input word letters
            sort($word_split);
            //create blank array for output
            $output_words = array();

            //explode bank of words
            $exploded_bank = explode(" ", $bank);

            //step thru each word
            foreach ($exploded_bank as $current_word) {
                //split word into letters
                $current_word_split = str_split($current_word);
                //sort letters
                sort($current_word_split);

                 //compare current word from bank and main input word
                 if ($word_split == $current_word_split) {
                     $current_word .= ": YES";
                 }
                 else {
                     $current_word .= ": NO";
                 }
                 //add current word to output array
                 array_push($output_words, $current_word);
            }

            $imploded_output = implode($output_words, ", ");

            return $imploded_output;

        }
    }
    // $test = new Anagram;
    // $test->checkAnagram("rat", "tar bat");

?>
