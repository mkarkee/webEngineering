<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="css/home.css" />
</head>
<body>
<?php
	require('db_connect.php');
	session_start();
	
	        $stmt = $db->prepare('SELECT * FROM ride');
			$stmt->execute();
			echo "<table><tr><th>Origin</th><th>Destination</th><th>Time</th><th>Price</th></tr>";
			while($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$origin =  $rows['origin'];
				$destination = $rows['destination'];
				$time = $rows['time'];
				$price = $rows['price'];
				echo "<tr><td>$origin</td><td>$destination</td><td>$time</td><td>$price</td></tr>";
			}
?>
	</table>
	</body>
</html>