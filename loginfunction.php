<?php 
session_start(); 
$pswd = $_POST["password"];
$user = $_POST["username"];
$sent = $_POST["submit"];
if(!isset($user)) {$_SESSION["auth"] = "no";}
$users = array(
	"naam1" => "1234",
	"naam2" => "1234",
	"naam3" => "1234"
);

if(isset($_GET["logout"]) && checkAuth()) {
	$_SESSION["auth"] = "no";
	session_destroy();
}

if($users[$user] == $pswd && isset($user)) {
	$_SESSION["auth"] = "yes";
} else if($users[$user] != $pswd && isset($user)) {
	$_SESSION["auth"] = "no";
}

if(checkAuth()) {
	echo "Welkom admin ".$user;
	echo "<br><a href='loginfunction.php?logout'>Log out</a>";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<link rel="stylesheet" href="style.css" />
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<body>
		<?php if(!checkAuth()) {?>
		<form action="loginfunction.php" method="post">
			<table>
					<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"/></td>
					<td></td>
				</tr>
			</table>
		</form>
		<?php } ?>
	</body>
</head>
</html>

<?php function checkAuth() {
	return $_SESSION["auth"] == "yes";
}


?>