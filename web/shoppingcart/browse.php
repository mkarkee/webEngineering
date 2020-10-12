<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>The Watch Shop</title>
</head>
<body>
    <header>
        <h1>The Watch Shop</h1>
    </header>
    
    <div id="cart">
        <a href="cart.php">Go to Cart   </a>
        <?php
            echo count($_SESSION);
        ?>
    </div>

    <br>
    

    <table id="productCost">
        <form action="session.php" method="post">
            <tr>
                
                <td>
                    <img class="watch" src="images/1.jpg" alt="watch one"><br>
                    <label id="watchOne">$199.99</label>
                    <input type="hidden" name="name" value="Watch one">
                    <input type="hidden" name="price" value="199.99"><br>
                    <input type="submit" name="addCart" value="Add to Cart">
                </td>
                
            
        </form>

        <form action="session.php" method="post">
            
                
                <td>
                    <img class="watch" src="images/2.jpg" alt="watch two"><br>
                    <label id="watchTwo">$299.99</label>   
                    <input type="hidden" name="name" value="Watch Two">
                    <input type="hidden" name="price" value="299.99"><br>
                    <input type="submit" name="addCart" value="Add to Cart">
                </td>
                
            </tr>
        </form>

        <form action="session.php" method="post">
            <tr>
                
                <td>
                    <img class="watch" src="images/3.jpg" alt="Watch Three"><br>
                    <label id="watchThree">$99.99</label>  
                    <input type="hidden" name="name" value="Watch Three"><br>
                    <input type="hidden" name="price" value="99.99">
                    <input type="submit" name="addCart" value="Add to Cart">
                </td>
                
        </form>
        
        <form action="session.php" method="post">
                
                <td>
                    <img class="watch" src="images/4.jpg" alt="watch four"><br>
                    <label id="watchFour">$249.99</label>
                    <input type="hidden" name="name" value="Watch Four">
                    <input type="hidden" name="price" value="249.99"><br>
                    <input type="submit" name="addCart" value="Add to Cart">
                </td>
                
            </tr>
        </form>
       
        
    </table>
    <br>
    
    
</form>

</body>
</html>
