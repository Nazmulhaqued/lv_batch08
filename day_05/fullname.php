<?php

class Fullname{
    public function makeFullname($data){
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $result = $first_name.$last_name;
        return $result;
        
    }
    public function myCalculator($data){
        $first_number = $_POST['first_number'];
        $last_number = $_POST['last_number'];
        $btn = $data['btn'];
        switch($btn){
            
        case'+':
        $result = $first_number+$last_number;
        break;
        
        case'-':
            $result = $first_number-$last_number;
            break;
        
        case'*':
            $result = $first_number * $last_number;
            break;
        
        case'/':
            $result = $first_number / $last_number;
            break;
        
        case'%':
            $result = $first_number % $last_number;
            break;
    }
    return $result;
    }
}