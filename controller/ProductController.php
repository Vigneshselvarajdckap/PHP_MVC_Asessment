<?php

require_once 'Model/ProductModel.php';


class ProductController {

    private $ProductModel;

    public function __construct() 
    {
        $this->ProductModel = new ProductModel();
    }

    public function view()
    {
        require "view/view.php";
    }

    public function create() 
    {
        $this->ProductModel->create($_POST);
    }

    public function read()
    {
       $Product = $this->ProductModel->getAllProduct();
        require "view/list.php";

    }

    public function edit($id) 
    {
       
       $singleProductdata = $this->ProductModel->edit($id);
       require "view/edit.php";
    }

    public function delete($id) 
    {
        $this->ProductModel->delete($id);
    }

    public function update($id) 
    {
        unset($_POST["action"]);
        $this->ProductModel->update($id,$_POST);
    }
}