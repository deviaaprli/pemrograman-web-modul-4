<?php
include "Controller/ProductController.php";

use Controller\ProductController;

//Deklarasikan objek class
$productController = new ProductController;

//tampilkan hasil kembalian dari method getAll Product menggunakan echo
echo $productController -> getAllProduct();