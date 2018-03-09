<?php
require './class/Student.php';
$obj = new Student();
$all_student_info = $obj->select_all_student();
if(isset($_POST['btn'])){
    $message=$obj->save_student($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
    
  <h2>View All Student's</h2>
  <hr/>
  <h3 style="color:green;text-align:center;">
      <?php if(isset($message)){
          echo $message;
          unset($message);
      }?>
  </h3>
  
  <div class="menu">
      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="view_student.php">View All Student's</a></li>
          <li><a href="#">Contact</a></li>
      </ul>
  </div>
  <table align="center" border="1px">
      <tr>
          <th>Student ID</th>
          <th>Name</th>
          <th>Email Address</th>
          <th>Mobile Number</th>
      </tr>
      <?php
        while($row = mysqli_fetch_assoc($all_student_info)){
        ?>
      <tr>
          <td><?php echo $row['student_id']; ?></td>
          <td><?php echo $row['student_name']; ?></td>
          <td><?php echo $row['email_address']; ?></td>
          <td><?php echo $row['mobile_number']; ?></td>
      </tr>
        <?php }?> 
  </table>
  
</div>
<div class="footer">
    <h1 align="center">Footer</h1>
</div>    

</body>
</html>
