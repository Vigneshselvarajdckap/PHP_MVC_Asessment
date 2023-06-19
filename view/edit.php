<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/styleedit.css">
</head>
<body>
    <div class="container">
    <?php foreach($singleProductdata as $users):?>
    <form action="/update" method="POST" enctype="multipart/form-data">
        <div class="inp3">
        <label for="">Product Name:</label>
      <input type="hidden" name="action" value ="view">
      <input type="text" class="in1" placeholder="Product Name" name="Product_Name" value = <?php echo $users["Product_Name"]?>><br>
        </div>
        <div class="inp3">
        <label for="">Product Image</label>
      <input type="file" class="in2" placeholder="Product Image" name="Product_Image" value = <?php echo $users["Product_Image"]?>><br>
        </div>
        <div class="inp3">
        <label for="">Sku</label>
      <input type="text" class="in3" placeholder="Sku" name="Sku" value =<?php echo $users["Sku"]?>><br>
        </div>
        <div class="inp3">
        <label for="">Price</label>
      <input type="number" class="in4" placeholder="Price" name="Price" value =<?php echo $users["Price"]?>><br>
        </div>
        <div class="inp3">
        <label for="">Brand</label>
      <input type="text" class="in5" placeholder="Brand" name="Brand" value =<?php echo $users["Brand"]?>><br>
        </div>
        <div class="inp3">
        <label for="">Manufacture Date</label>
      <input type="date" class="in6" placeholder="Manufacture Date" name="Manufacture_Date" value =<?php echo $users["Manufacture_Date"]?>><br>
        </div>
        <div class="inp3">
        <label for="">Available Stock</label>
      <input type="text" class="in7" placeholder="Available Stock" name="Available_Stock" value =<?php echo $users["Available_Stock"]?>><br>
        </div>
        <button type="submit" value = "<?=$users["id"];?>" name="update">Update</button>
    </form>
    <?php endforeach;?>
    <button class="back"><a href="/list">Back</a></button>
    </div>
</body>
</html>