<?php

class Student {
  public function __construct() {
      $host_name="localhost";
      $user_name="root";
      $password="";
      $db_name="laravel_batch08";
      $this->conn= mysqli_connect($host_name, $user_name, $password, $db_name);
      
      if(!$this->conn){
          die('Server not Connected');
      }
 else {
          mysqli_select_db($this->conn, $db_name);
      }
  }
  public function save_student($data){
    $sql ="INSERT INTO tbl_student (student_name, email_address,mobile_number) VALUES ('$data[name]', '$data[email]', '$data[mobile]')";
    mysqli_query($this->conn, $sql);
  }
   
}
