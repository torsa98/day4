
<?Php

if(isset($_POST['user_password'])&&!empty($_POST['enter_password'])){
	echo 'ok.';
} else {
	echo 'Please enter a password';
}
?>

<form action="" method="POST">
	password: <input type="password" name="user_password"><br><br>
	<input type="submit" value="submit">
</form>