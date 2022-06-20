<?php

use Classes\Products;

include 'vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/list.css">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    
    <form  method="POST" action="delete">
        <div class="header">
            <h1>Product List</h1>
            <div class="btndiv">
                <button type="button" id="add" onclick="location.href='/add'">ADD</button>
                <button type="submit" id="delete-button" name="delete">MASS DELETE</button>
            </div>
        </div>
        <hr>
    <div class="container">
    <?php
        $products = new Products();
        $result = $products->get();


        foreach ($result as $row):
            echo '<div class="box">';
            echo'<input name="checkbox[]" class="delete-checkbox" type="checkbox" value="'.$row['sku'].'">'
            ?>
            <?php

            echo "<br>";
            echo $row["sku"]."<br>";
            echo $row["name"]."<br>";
            echo number_format($row["price"], 2)." $ <br>";

            $products->dvd($row["size"]);
            $products->furniture($row["height"], $row["width"], $row["length"]);
            $products->book($row["weight"]);
            ?>
        </div>
        <?php
        endforeach;

    ?>
    </div>
    </form>
    
    
</body>
</html>