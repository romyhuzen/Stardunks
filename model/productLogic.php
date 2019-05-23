<?php
  require_once 'model/DataHandler.php';
  
class productLogic {
   public function __construct() {	
	  $this->DataHandler = new DataHandler("localhost","mysql","stardunks","root","geheim");
	  }
      
	  public function __destruct() {}
    
    public function createProduct($creating){
        $product_id            = $creating["product_id"];
        $product_type_code     = $creating["product_type_code"];
        $supplier_code         = $creating["supplier_code"];
        $product_name          = $creating["product_name"];
        $product_price         = $creating["product_price"];
        $other_product_details = $creating["other_product_details"];
        try {
        $sql = " INSERT INTO products(product_id, product_type_code, supplier_code, product_name, product_price, other_product_details) VALUES ('$product_id','$product_type_code','$supplier_code', '$product_name', '$product_price', '$other_product_details')";
        $result = $this->DataHandler->createData($sql);
        return $result;
    } catch (exception $e) {
        throw $e;
    }
    }
    
	  public function readProduct($id) {
        try {
             $sql = 'SELECT * FROM products WHERE id =  . $id';
             $result = $this->DataHandler->readsData($sql);
             return $result;
        } catch (exception $e) {throw $e;}
      }
      

      public function readProducts() {
          try{
              $sql = 'SELECT * FROM products';
              $results = $this->DataHandler->readsData($sql);
              return $results;
          } catch (exception $e){throw $e;} 
      }
      
	  public function updateProducts(){
          try{
              //get information from a form kl
              $sql = '';
              $result = $this->DataHandler->updateData($sql);
              return $result;
          } catch (exception $e){throw $e;} 
      }
    
    public function deleteProduct($id){
          try {
                $sql = '';
                $result = $this->DataHandler->deleteData($sql);
                return $result ? "User is verwijderd" : "Verwijderen niet gelukt (kijk of deze user nog bestaat)";
          } catch (exception $e) {throw $e;}
      }
    }	  
	    
?>