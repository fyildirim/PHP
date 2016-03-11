<!DOCTYPE html>
<html>
    <head>
        <title>Functions</title>
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            if(isset($_POST['divides'])) {
                $input = $_POST['divides'];
                
            }
            if(isset($_POST['mirrors'])) {
                $input = $_POST['mirrors'];
                
            }
        ?>
        <form name="functions.php" method="POST">
				°c = <input type="text" name="degrees">
                <?php 
                    if(isset($_POST['degrees'])) {
                        $input = $_POST['degrees'];
                        if(is_numeric($input)) {
                            $celsius = number_format(($input*9/5+32), 2, ',', ' ');
                            echo $celsius . " = °f";
                        } else {
                            echo "Invalid input";
                        }
                    }
                ?>
                <br>
                dividable by 3<input type="text" name="divides">
                <?php 
                    if(isset($_POST['divides'])) {
                        $input = $_POST['divides'];
                        if(is_numeric($input)) {
                            if($input % 3 == 0) {
                                echo "$input = dividable by 3";
                            } else {
                                echo "$input != dividable by 3";
                            }
                        } else {
                            echo "Invalid input";
                        }
                    }
                ?>
                <br>
                mirror text<input type="text" name="mirrors">
                <?php   
                    if(isset($_POST['mirrors'])) {
                        $input = $_POST['mirrors'];
                        echo strrev($input);
                    }
                ?>
                <br>
                <input type="submit" style="display:none;"> 
		</form>
    </body>
</html>