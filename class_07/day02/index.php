<?php
require './class/Student.php';
$obj = new Student();
if(isset($_POST['btn'])){
    $obj->save_student($_POST);
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
</head>
<body>

<div class="container">
  <h2>Form control: input</h2>
  <p>The form below contains two input elements; one of type text and one of type password:</p>
  <form action="" method="POST">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" name="name" id="usr">
    </div>
    <div class="form-group">
      <label for="Email">Email Address</label>
      <input type="email" class="form-control" name="email" id="Email">
    </div>
    <div class="form-group">
      <label for="Mobile">Mobile Number</label>
      <input type="text" class="form-control" name="mobile" id="Mobile">
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
