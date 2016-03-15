<!DOCTYPE html>
<html>
    <head>
        <title>Dynamic Website</title>
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
        <meta charset="utf-8">
        <style>span {color:red; margin:0; padding:0;}</style>
    </head>
    <body>
        <?php 
        if(!isset($_POST['submit'])) {
        ?>
        <form action="dynamic1.php" style="margin:20px auto;" method="post">
            <table style="margin:20px auto;">
                <tr>
                    <td>Naam<span>*</span></td>
                    <td><input type="text" name="forename" required></td>
                </tr>
                <tr>
                    <td>Tussenvoegsels</td>
                    <td><input type="text" name="tussenvoegsels"></td>
                </tr>
                <tr>
                    <td>Achternaam<span>*</span></td>
                    <td><input type="text" name="surname" required></td>
                </tr>
                <tr>
                    <td>Email<span>*</span></td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Password<span>*</span></td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>   
                    <td>Required fields<span>*</span></td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
<?php   } else {
            echo "<p>Naam: ".$_POST['forename'];
            if(isset($_POST['tussenvoegsels'])) {
                echo "<br>Tussenvoegsels: ".$_POST['tussenvoegsels'];
            } else {
                echo "<br>Tussenvoegsels: Geen";
            }
            echo "<br>Achternaam: ".$_POST['surname'];
            echo "<br>Email: ".$_POST['email'];
            echo "<br>Wachtwoord: ";
            for ($i = 0; $i < strlen($_POST["password"]); $i++) {
                echo "&bull;";
            };
            echo "</p>";
        } ?>
    </body>
</html>