<form method="POST" action="film.php">
	<table>
		<tr>
			<td> Username <input type="text" name="username"></td></tr>
		<tr>
			<td> Password <input type="text" name="password"></td></tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td></tr>
	</table>
	
</form>
<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST ['password'];
}
?>