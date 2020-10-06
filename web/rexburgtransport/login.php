<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db_connect.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

	//Checking is user existing in the database or not
        $stmt = $db->prepare('SELECT * FROM user_account WHERE username=:username and password=:password');
        $stmt->bindvalue(':username', $username);
        $stmt->bindvalue(':password', $password);
        $stmt->execute();
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($rows)==1){
			$_SESSION['username'] = $username;
			header("Location: home.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a> with a different info.</div>";
				}
    }else{
?>
<div class="form">
<h1>Rexburg Transport</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required /><br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>
