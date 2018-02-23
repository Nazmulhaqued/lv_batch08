<?php

function string_word_and_length_count($given_text)
{
        echo "Word Count: ". str_word_count($given_text);
        echo "<br/>";
        echo "Number of Latter Count: ". strlen($given_text);
}

function generate_random_string($length){
    $alpha = array('A','U','Q','R','&','5','3','+','2','1','W','A','L','I','M');
    $password = '';
    for($i=1; $i<=$length; $i++){
        $r = rand(0, 14);
        echo $r.'---------';
        $password .= $alpha[$r];
    }
    if(isset($password)){
echo "<br/>";
echo $password;
}

}
