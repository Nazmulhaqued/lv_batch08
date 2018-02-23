<html>
    <head> 
    <title> PHP Examples</title>
    </head>
    
    <body>
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>First Number</td>
                    <td><input type="text" name="first_number"></td>
                </tr>
                <tr>
                    <td>Second Number</td>
                    <td><input type="text" name="second_number"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn" value="Click"></td>
                </tr>
                <tr>
                    <td>Result</td>
                    <td>
                        <?php
                        $j = 0;
                        if(isset($_POST['btn'])){
//                            echo "<pre>";
//                            print_r($_POST);
                            $first_number = $_POST['first_number'];
                            $second_number = $_POST['second_number'];
//                            echo $first_number.'--------'.$second_number;
                            for($i=$first_number; $i<=$second_number; $i++){
//                                echo 'Odd bijor Output';
                                if($i%2==0){
                                    echo $i;
                                }
                            }
                            echo 'Even Addition';
                            echo $j; 
                        }
                                
      
                        ?>
                    </td>
                </tr>
            
            </table>
        </form>
    
    </body>
    
</html>