<?php
  require_once 'model/productLogic.php';
  
    class productController {
	   public function __construct() {
           $this->productLogic = new productLogic();
	   }
	
	   public function __destruct(){}
      
       public function handleRequest(){
            try {
            $op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
            switch ($op) {
                case 'create':
                $this->collectCreateProduct();
                break;
                case 'creating':
                $this->collectCreateNew();
                break;
                case 'read':
                $this->collectReadProduct($_REQUEST['id']);
                break;
                case 'update':
                $this->collectUpdateProduct();
                break;
                case 'delete':
                $this->collectDeleteProduct($_REQUEST['id']);
                break;
                // case 'table':
                // $this->createTable();
                // break;
                default:
                $this->collectReadProducts();
                break;
            }
        } catch (ValidationException $e) {
                $errors = $e->getErrors();

        }

    }


        public function collectCreateProduct() {
            include 'view/create.php';
        }
        
          public function collectCreateNew() {
            $creating = $_REQUEST;
            $products = $this->productLogic->createProduct($creating);
          }
        
        public function createTable($result) {
            $tableheader = false;
            $html = "";
            $html .= "<table>";

            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                if($tableheader == false) {
                    $html .= "<tr>";
                    
                    foreach($row as $key=>$value) {
                        $html .= "<th>{$key}</th>";
                    }
                    
                    $html .= "<th>actions</th>";
                    $html .= "</tr>";
                    $tableheader = true;
                }
                
                foreach($row as $value) {
                    $html .= "<td>{$value}</td>";
                }
                
                $html .= "<td>" . "<a href='index?op=productDetails&id=" . $row['product_id'] . "'>
                <button>Read</button></a>" . "<a><button>Update</button></a>" . "<a><button>Delete</button></a>" . "</td>";
                $html .= "</tr>";
            }
            
            $html .= "</table>";
            return $html;
        }
        
      /* public function collectCreateProduct() {
           //$products = $this->productLogic->createProduct();
           include 'view/create.php';
       }*/
        
       public function collectCreateProducts() {
           $newProd = $_REQUEST;
           $products = $this->productLogic->createProduct($newProd);
           include 'view/createSucces.php';
       }
        
       public function collectReadProduct($id){
           $result = $this->productLogic->readProduct($id);
           include 'view/products.php';
       }
        
       public function collectReadProducts(){
            $products = $this->productLogic->readProducts();
            include 'view/products.php';
       }
        
       public function collectUpdateProduct(){
           $update = $this->productLogic->updateProduct();
           include 'view/update.php';     
       }
        
       public function collectDeleteProduct($id) {
            $delContact = $this->productLogic->deleteProduct($id);
            include 'view/deleted.php';
       }
    }
?>