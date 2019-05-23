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
        <?php
            require_once 'controller/productController.php';
            $this->productController = new productController();
            $createProd = $this->productController->collectCreateProducts();
        ?>
        
        <button><a href='products.php'>Go back to table</a></button>
    </body>
</html>