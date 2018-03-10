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
    if($data['name']==NULL){
       $exception="Please Enter Name";
       return $exception; 
    }
    $sql ="INSERT INTO tbl_student (student_name, email_address,mobile_number) VALUES ('$data[name]', '$data[email]', '$data[mobile]')";
    mysqli_query($this->conn, $sql);
    $message = "Save Student Information Successfully";
    return $message;
  }
  
  public function select_all_student(){
     $sql = "SELECT * FROM tbl_student";
     $result = mysqli_query($this->conn, $sql);
     return $result;
     
  }
  public function delete_student($student_id){
     $sql = "DELETE FROM tbl_student WHERE student_id='$student_id'";
     mysqli_query($this->conn, $sql);
  }
  public function get_student_info($student_id){
     $sql="SELECT *FROM tbl_student WHERE student_id='$student_id' ";
     $result = mysqli_query($this->conn, $sql);
     return $result;
  }
  public function update_student_info($data){
     $sql="UPDATE tbl_student SET student_name ='$data[name]', email_address='$data[email]',mobile_number='$data[mobile]' WHERE student_id='$data[student_id]'";
     mysqli_query($this->conn, $sql);
  }
   
}
