<?php

   //  This function reads the form "query string"
   //  
   // This function handles both an http "get".
   $firstName = $_POST['first_name']; 
   $lastName = $_POST['last_name'];
   $address = $_POST['address'];
   $phoneNumber = $_POST['phone_number'];
   $totalCost = $_POST['costTotal'];
   $cardType = $_POST['card'];
   $expDate = $_POST['exp_date'];


?>

<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Purchase Confirmation.</title>
  <link rel="stylesheet" type="text/css" href="style1.css" />
  <body>
    <h3>Please Verify your Information.</h3><br />
        <?php
         print "<h1>Customer Information</h1> <br>";
         print "<table><tr><td>First Name: </td><td> $firstName</td></tr>";
         print "<tr><td>Last Name: </td> <td>$lastName</td></tr>";
         print "<tr><td>Address: </td> <td>$address</td></tr>";
         print "<tr><td>Phone Number: </td> <td>$phoneNumber</td></tr>";
         print "<tr><td>Credit Card Type</td> <td>$cardType</td></tr>";
         print "<tr><td>Credit Card Expiration Dare: </td> <td>$expDate</td></tr></table> <br>";

       
         
         

         if(empty($_POST['item'])) {
            print "<h1>You selected no item. Please go back and select a item.</h1>";
         }
         else {
            $items = $_POST['item'];
            $N = count($items);
            print "<h1>Purchase Details</h1>";
         

             echo "<form action='assign12_a.php' method='POST'>";
                print "<p>";
                print "You selected $N items: <br>";
                foreach($_POST['item'] as $selected) {
                    print $selected . "<br>";
                }
                print "And your total is: $totalCost";
                print "</p>";
                

         }

         
        ?>
        <br>
        <div id="container">
            <div id="buttons">
                <input type="submit" id="purchase" name="purchase" value="Purchase"/>
                <input type="submit" id="cancel" name="cancel" value="Cancel">
            </div>
        </div>
        </form>
        
        
</body>
</html>