<?php  
 
class ProductManager extends AbstractManager {  
      
      public function getAllProducts() : array  
{  
    $list = [];  
  
    return $list;  
}  
  
public function getProductBySlug(string $productSlug) : Product  
{  
    $product = new Product();  
  
    return $product;  
}  
  
public function getProductsByCategorySlug(string $categorySlug) : array  
{  
    $list = [];  
  
    return $list;  
}

}
