<?php  
 
class CategoryManager extends AbstractManager {  
   
   public function getAllCategories() : array  
{  
    $list = [];  
  
   $query = $this->db->prepare('SELECT * FROM categories'); // Pour accéder à la base de données utilisez $this->db  
   $query->execute();
   $categories = $query->fetchAll(PDO::FETCH_ASSOC);
   $categ = [];
   
   foreach($categories as $categorie)
   {
        $categ = new Category($categorie["id"], $categorie["name"], $categorie["slug"], $categorie["description"]);
        $categ->setId($categorie["id"]);
        $categories[] = $categorie;
   }
    return $list;  
}  
  
public function getCategoryBySlug(string $slug) : Category  
{  
    $query = $this->db->prepare('SELECT * FROM categories WHERE slug=:slug '); // Pour accéder à la base de données utilisez $this->db  
    $parameter = ["slug" =>$slug];
    $query->execute($parameter);
    $categories = $query->fetch(PDO::FETCH_ASSOC);
    $categ = new Category($categories["id"], $categories["name"], $categories["slug"], $categories["description"]);
    $categ->setID($categories["ID"]);
    return $categ;
}   
}