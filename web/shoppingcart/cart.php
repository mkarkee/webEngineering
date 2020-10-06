<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkoutStyle.css">
    <title>The Watch Shop: Cart</title>
</head>
<body>
	<header>
        <h1>The Watch Shop</h1>
    </header>
    <table id="content">
            <?php 
			$total = 0;
                foreach($_SESSION as $product) {
                    echo "<tr><td>";
                    echo $product[0];
                    echo "</td>";
                    echo "<td>";
					$total = $total + $product[1];
					echo "$";
                    echo $product[1];
                    echo "</td></tr>";
                }
           
				echo "<tr id='total'><td>Total</td>";
				echo "<td>";
				echo $total;
				echo "</td></tr>";
			?>
    </table>
    <div id="buttons">
    <a href="browse.php" id="button1">Continue Shopping  </a>
    <a href="checkout.php" id="button1">Checkout</a>
            </div>
</body>
</html>