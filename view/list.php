<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product List</title>
    <link rel="stylesheet" href="view/stylelist.css">
</head>
<body>
    <div class="container">
    <table border="2px">
    <tr>
        <th colspan="10">Product Details</th>
    </tr>
     <tr>
         <th>id</th>
         <th>Product Name</th>
         <th>Product image</th>
         <th>Sku</th>
         <th>Price</th>
         <th>Brand</th>
         <th>Manufacture Date</th>
         <th>Available_Stock</th>
         <th>Delete or Edit</th>
     </tr>
     
      <tr>
            <?php foreach($Product as $key=>$userss):?>

         <td><?php echo $key+1?></td>
         <td><?php echo $userss["Product_Name"]?></td>
         <td><img src="<?php echo $userss["Product_Image"]?>"></td>
         <td><?php echo $userss["Sku"]?></td>
         <td><?php echo $userss["Price"]?></td>
         <td><?php echo $userss["Brand"]?></td>
         <td><?php echo $userss["Manufacture_Date"]?></td>
         <td><?php echo $userss["Available_Stock"]?></td>
         <td>
             <form method="post" action="/edit">
             <button type="submit" value="<?=$userss["id"];?>" name="edit">Edit</button>
             </form>

             <form method="post" action="/delete">
             <button type="submit" value="<?=$userss["id"];?>" name="delete" class="del">Delete</button>
             </form>
         </td>
     </tr>
     <?php endforeach;?>
 </table>
 <button class="back"><a href="/">Back</a></button>

    </div>
</body>
</html>