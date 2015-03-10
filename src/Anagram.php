<?php
    class Anagram
    {
        function checkAnagram($word, $bank)
        {
            //create blank array for output
            $output_words = array();

            if ($word == null || $bank == null) {
                array_push($output_words, "please input a word and bank");
                return $output_words;
            }

            //string to lower
            $lower_word = strtolower($word);

            //split input word into array of letters
            $word_split = str_split($lower_word);
            //sort input word letters
            sort($word_split);

            //trimming whitespace around bank
            $trimmed_bank = trim($bank);

            //explode bank of words
            $exploded_bank = explode(" ", $trimmed_bank);

            //step thru each word
            foreach ($exploded_bank as $current_word) {
                //string to lower
                $lower_current_word = strtolower($current_word);

                //split word into letters
                $current_word_split = str_split($lower_current_word);
                //sort letters
                sort($current_word_split);

                 //compare current word from bank and main input word
                 if ($lower_word == $lower_current_word) {
                     $lower_current_word .= ": INPUT";
                 }
                 elseif ($word_split == $current_word_split) {
                     $lower_current_word .= ": YES";
                 }
                 else {
                     $lower_current_word .= ": NO";
                 }
                 //add current word to output array
                 array_push($output_words, $lower_current_word);
            }

            // $imploded_output = implode($output_words, ", ");

            return $output_words;

        }
    }
    // $test = new Anagram;
    // $test->checkAnagram("rat", "tar bat");

?>
