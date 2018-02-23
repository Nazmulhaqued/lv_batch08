<?php 
//crtl & space
  include './include/functiondefinations.php'; 

?>

<form action="" method="post">
  <table border="1" align="center">

    <tr>
        <td>Enter Length</td>
        <td><input type="text" value="<?php if( isset( $_POST['btn'])){ echo $_POST['length'];}?>" name="length"></td>
    </tr>

    <tr>
        <td><input type="submit" name="btn" value="click"></td>
    </tr>

    <tr>
        <td><strong>Result</strong></td>
        <td>
            <?php 
                if( isset( $_POST['btn'])){
 
                generate_random_string($_POST['length']);
                }
            ?>
            
            
        </td>
    </tr>
  </table>
  
  
</form>