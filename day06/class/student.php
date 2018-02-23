<?php

class Student{
    
    function todays_date(){
        echo date("D-M-Y");
    }
    function add($first_number, $second_number){
        echo $first_number+$second_number;
    }
    function sub($first_number, $second_number){
        echo $first_number-$second_number;
    }
}