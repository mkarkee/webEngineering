<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Purchase Confirmation.</title>
  <link rel="stylesheet" type="text/css" href="style2.css" />
  <body>
  <h1>Purchase Confimation</h1>
    


    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['purchase'])) {
                print "<h2>Purchase Done.</h2>";
            } else {
                print "<h2>Purchase canceled.</h2>";
            }
        }

    ?>

    </body>
    </html>
