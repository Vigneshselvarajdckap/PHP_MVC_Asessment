<?php

require "connection.php";

class ProductModel extends database{

    public function create($productData) 
    {
            $ProductName = $productData["ProductName"];
            $fileName = $_FILES['ProductImage']['ProductImage'];
            $fileTmpName = $_FILES['ProductImage']['tmp_name'];
            print_r($fileTmpName);
            $folder = "images/".$fileName;
            move_uploaded_file($fileTmpName,$folder);
            $Sku = $productData["Sku_text"];
            $Price = $productData["Prices"];
            $Brand = $productData["Brands"];
            $ManufactureDate = $productData["ManufactureDate"];
            $AvailableStock = $productData["AvailableStock"];
            $statement = $this->db->prepare("INSERT INTO Product_Values(Product_Name,Product_Image,Sku,Price,Brand,Manufacture_Date,Available_Stock) VALUES('$ProductName','$folder','$Sku','$Price','$Brand','$ManufactureDate','$AvailableStock')");
            $statement->execute();
            // var_dump($statement);

            header("location:/list");
    }

    public function edit($id) 
    {
        $statement = $this->db->prepare("SELECT *  from Product_Values where id =".$id);
        $statement->execute();
        $singleProductdata=$statement->fetchAll();
        // var_dump($singleProductdata);
        return $singleProductdata;
    }

    public function update($id,$productData) 
    {
        
        $ProductName = $productData["Product_Name"];
        $fileName = $_FILES['image']['Product_Image'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $folder = "images/".$fileName;
        move_uploaded_file($fileTmpName,$folder);
        $Sku = $productData["Sku"];
        $Price = $productData["Price"];
        $Brand = $productData["Brand"];
        $ManufactureDate = $productData["Manufacture_Date"];
        $AvailableStock = $productData["Available_Stock"];
        $statement = $this->db->prepare("UPDATE Product_Values SET Product_Name ='$ProductName',Product_Image='$folder',Sku='$Sku',Price='$Price',Brand='$Brand',Manufacture_Date='$ManufactureDate',Available_Stock='$AvailableStock' where id =".$id);
        $statement->execute();
        header("location:/list");
    }

    public function delete($id) 
    {
        $statement = $this->db->prepare("DELETE from Product_Values where id =".$id);
        $statement->execute();
        header("location:/list");
    }

    public function getAllProduct() 
    {

        $statement = $this->db->prepare("SELECT * from Product_Values");
        $statement->execute();
        $user=$statement->fetchAll();
        // print_r($user);
        return $user;
    }
}