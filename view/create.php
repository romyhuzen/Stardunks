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
  <title></title>
</head>

<?php
  require 'header.php';
?>

<form action="index.php?op=creating" method="post">
product_id: <input type="text" required="required"  name="product_id"><br>
product_type_code  : <input type="text" required="required"  name="product_type_code"><br>
supplier_code   : <input type="text" required="required"  name="supplier_code"><br>
product_name  : <input type="text" required="required"  name="product_name"><br>
product_price  : <input type="text" required="required"  name="product_price"><br>
other_product_details  : <input type="text" required="required"  name="other_product_details"><br>
    <input type="submit" value="add" name="add">
</form>
<a href="?">home</a>
<?php
require 'footer.php';
?>	
     </p>
   </body>
</html>