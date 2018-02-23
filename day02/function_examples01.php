<?php 
//crtl & space
  include './include/functiondefinations.php'; 

?>

<form action="" method="post">
  <table border="1" align="center">

    <tr>
        <td>Enter Text</td>
        <td><input type="text" value="<?php if( isset( $_POST['btn'])){ echo $_POST['given_text'];}?>" name="given_text"></td>
    </tr>

    <tr>
        <td><input type="submit" name="btn" value="click"></td>
    </tr>

    <tr>
        <td><strong>Result</strong></td>
        <td>
            <?php 
                if( isset( $_POST['btn'])){
 
                string_word_and_length_count($_POST['given_text']);
                }
            ?>
            
            
        </td>
    </tr>
  </table>
  
  
</form>