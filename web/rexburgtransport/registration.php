<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db_connect.php');
    // only if form submitted
    if (isset($_POST['username'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = md5($_POST['password']);
        $statement = $db->prepare('INSERT into user_account (firstname, lastname, email, username, password) VALUES (:firstname, :lastname, :email, :username, :password)');
        $statement->bindValue(':firstname', $firstname);
        $statement->bindValue(':lastname', $lastname);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
        ?>
        <div class="form">
        <h1>Registration</h1>
        <form name="registration" action="" method="post">
        <input type="text" name="firstname" placeholder="Firstname" required />
        <input type="text" name="lastname" placeholder="Lastname" required /><br>
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required /><br>
        <input type="password" name="password" placeholder="Password" required />
        <input type="submit" name="submit" value="Register" />
        </form>
        </div>
        <?php
     } ?>
</body>
</html>