<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="view/styleview.css">
</head>
<body>
    <div class="container">
        <h2>Add Product</h2>
        <form action="/store" method="POST" enctype="multipart/form-data">
            <div class="inp3">
                <label for="">Product Name:</label>
                <input type="text" class="in1" placeholder="ProductName" name="ProductName">
            </div>
            <div class="inp3">
                <label for="">Product Image:</label>
                <input type="file" class="in2" placeholder="ProductImage" name="ProductImage">
            </div>
            <div class="inp3">
                <label for="">SKU:</label>
                <input type="text" class="in3" name="Sku_text">
            </div>
            <div class="inp3">
                <label for="">Price:</label>
                <input type="number" class="in4" placeholder="Price" name="Prices">
            </div>
            <div class="inp3">
                <label for="">Brand:</label>
                <input type="text" class="in5" placeholder="Brand" name="Brands">
            </div>
            <div class="inp3">
                <label for="">Manufacture Date:</label>
                <input type="date" class="in6" placeholder="Manufacture Date" name="ManufactureDate">
            </div>
            <div class="inp3">
                <label for="">Available Stock:</label>
                <input type="text" class="in7" placeholder="Available Stock" name="AvailableStock">
            </div><br>
                    <button type="submit">Submit</button>
        </form>

    </div>
</body>