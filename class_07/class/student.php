<?php

require './teacher.php';

class Student extends School{ 
    public function todays_date(){
        echo date("D-M-Y");
        $t_obj = new Teacher();
   
    }
    protected function add($first_number, $second_number){
        echo $first_number+$second_number;
    }
    private function sub(){
        $this->
    }
}