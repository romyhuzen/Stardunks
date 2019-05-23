<html>
<head>
    <meta charset="utf-8">
    <meta charset="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="view/assets/css.css">
    <title>Level 1</title>
  </head>
<?php
  require_once 'controller/productController.php';
  
  $controller = new productController();
  $controller->handleRequest();
?>
    <body>
        <p>
        
        </p>
    </body>
</html>

