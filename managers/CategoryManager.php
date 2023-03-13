<?php  
 
class CategoryManager extends AbstractManager {  
      
      public function getAllCategories() : array  
{  
    $list = [];  
    
    $this->db->prepare('SELECT * FROM categories');
  
    // Pour accéder à la base de données utilisez $this->db  
  
    return $list;  
}  
  
public function getCategoryBySlug() : Category  
{  
    $category = new Category();  
    
    $this->db->prepare('');
  
    // Pour accéder à la base de données utilisez $this->db  
  
    return $category;  
}
}
