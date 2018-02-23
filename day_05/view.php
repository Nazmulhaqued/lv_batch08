
<?php
$result = '';
if(isset($_POST['btn'])){
    require_once './fullname.php';  
    $full_name = new Fullname();
    $result = $full_name->myCalculator($_POST);
    
}

?>

<form action="" method="POST">
    <table>
        <tr>
          <th>First Number</th>
          <td><input type="text" name="first_number"></td>
        </tr>
        <tr>
          <th>Last Number</th>
          <td><input type="text" name="last_number"></td>
        </tr>
        <tr>
          <th>Full Name</th>
          <td><input type="text" value="<?php echo $result; ?>"></td>
        </tr>
        <tr>
          <th>Full Name</th>
          <td>
              <input type="submit" name="btn" value="+">
              <input type="submit" name="btn" value="-">
              <input type="submit" name="btn" value="*">
              <input type="submit" name="btn" value="/">
              <input type="submit" name="btn" value="%">
          </td>
        </tr>
    </table>    
</form>
