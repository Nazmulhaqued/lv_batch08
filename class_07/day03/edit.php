<?php
require './class/Student.php';
$obj= new Student();
if(isset($_GET['student_id'])){
    $student_id = $_GET['student_id'];
    $student_info_by_id =$obj->get_student_info($student_id);
    $output = mysqli_fetch_assoc($student_info_by_id);
}
if(isset($_POST['btn'])){
   $obj->update_student_info($_POST);
} else {
    echo 'Update post data error';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      ul{
          list-style: none;
          padding: 0px;
      }
      ul li{
          display:inline-block;
      }
  </style>
</head>
<body>

<div class="container">
    
  <h2>Edit Form </h2>
  <p>The form below contains two input elements; one of type text and one of type password:</p>
  <h3 style="color:green;text-align:center;">
      <?php if(isset($message)){
          echo $message;
          unset($message);
      }?>
  </h3>
  
  <div class="menu">
      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="view_student.php">View Student</a></li>
          <li><a href="#">Contact</a></li>
      </ul>
  </div>
  
  <form action="" method="POST">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" name="name" value="<?php echo $output['student_name'];?>" id="usr">
      <input type="hidden" class="form-control" name="student_id" value="<?php echo $output['student_id'];?>" id="usr">
    </div>
    <div class="form-group">
      <label for="Email">Email Address</label>
      <input type="email" class="form-control" name="email" value="<?php echo $output['email_address'];?>" id="Email">
    </div>
    <div class="form-group">
      <label for="Mobile">Mobile Number</label>
      <input type="text" class="form-control" name="mobile" value="<?php echo $output['mobile_number'];?>" id="Mobile">
    </div>
    <div class="form-group">
      
      <input type="submit" name='btn' class="form-control" value="Submit" id="submit">
    </div>
  </form>
</div>
<div class="footer">
    <h1 align="center">Footer</h1>
</div>    

</body>
</html>
