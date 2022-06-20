<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    

    <form method="POST" action ="save" id="product_form">
        <div class="header">
                <h1>Product Add</h1>
                <div class="btndiv">
                    <button type="submit" id="save" name = "save">Save</button>
                    <button type="button" onclick="location.href='/productList'" id="cancel">Cancel</button>
                </div>
        </div>
    <hr>
    <div class = form-container>
        <label for="sku">SKU</label>
        <input type="text" id="sku" name="sku"> 
        <br><br>
        <label for="name">Name</label>
        <input type="text" id="name" name="name"> <br><br>
        <label for="price">Price ($)</label>
        <input type="number" step=0.01 id="price" name="price"><br><br>
        <label for="productType">Type Switcher</label>
        <select name="productType" id="productType">
            <option value="">Type Switcher</option>
            <option id="DVD" value="dvd">DVD</option>
            <option id="Furniture" value="furniture">Furniture</option>
            <option id="Book" value="book">Book</option>
        </select>
        <br>
    </div>
    <div id="dvd-form">
        <label for="size">Size (MB)</label>
        <input type="number" step=0.01 id="size" name="size">
        <br>
        <p class="desc">Please, provide size in MB.</p>
    </div>
    
    <div id="book-form" >
        <label for="weight">Weight (KG)</label>
        <input type="number" step=0.01 id="weight" name="weight">
        <br>
        <p class="desc">Please, provide weight in KG.</p>
    </div>

    <div id="furniture-form">
        <label for="height">Height (CM)</label>
        <input type="number" id="height" name="height">
        <br><br>
        <label for="width">Width (CM)</label>
        <input type="number" id="width" name="width">
        <br><br>
        <label for="length">Length (CM)</label>
        <input type="number" id="length" name="length">
        <br><br>
        <p class="desc">Please, provide dimensions in HxWxL format.</p>
    </div>
    </form>

    <span class="error"></span>

</body>
</html>