<!DOCTYPE html>
<html>
<!--
  Class:    4A7A
  Name:     Romy Huzen
-->
    <head>
        <meta charset="utf-8">
        <meta charset="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css.css">
    </head>
    
    <body>
        <?php require 'header.php'; ?>
        
        <button class="blue"><a href="?op=create">Create New Product</a></button>
        
        <?php 
            require_once 'controller/productController.php';
            
            $this->productController = new productController();
            $productsTable = $this->productController->createTable($products);
            echo $productsTable;
        
            require 'footer.php'; 
        ?> 
    </body>
</html>