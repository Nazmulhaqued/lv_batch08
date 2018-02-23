<?php
require './class/student.php';
$obj=new Student();
?>

<html>
    <head>
        <title> Calculator OOP</title>
    </head>
    <form action="" method="POST">
        <table border="1" align="center" width="500px">
            <tr>
                <td>First Number </td>
                <td><input type="text" name="first_number" /> </td>
            </tr>
            <tr>
                <td>Second Number</td>
                <td><input  type="text" name="second_number" /> </td>
            </tr>
            <tr>
                <td> </td>
                <td>
                    <input  type="submit" name="btn" value="+" />
                    <input  type="submit" name="btn" value="-" />
                </td>
            </tr>
            
            <tr>
                <td>Result</td>
                <td>
                    <?php
                    if(isset($_POST['btn'])){
                        if($_POST['btn']== '+'){
                            $obj->add($_POST['first_number'], $_POST['second_number']);
                        }
                        if($_POST['btn']== '-'){
                            $obj->sub($_POST['first_number'], $_POST['second_number']);
                        }
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</html>