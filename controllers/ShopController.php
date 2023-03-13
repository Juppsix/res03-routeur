<?php  
 
class ShopController extends AbstractController {  
  
    private ProductManager $pm;  
    private CategoryManager $cm;  
  
  public function __construct()  
{  
    $this->pm = new ProductManager();  
    $this->cm = new CategoryManager();  
}

    
    /* Pour la route de la home */  
public function categoriesList() : void  
{  
    $this->cm->getAllCategories();
    $categories = []; // à remplacer par un appel au manager pour récupérer la liste des catégories  

    $this->render("index", [  
        "categories" => $categories  
    ]);  
}

/* Pour la route /categories/:slug-categorie */  
public function productsInCategory(string $categorySlug) : void  
{  
    $this->pm->getProductsByCategorySlug($categorySlug);
    $products = []; // à remplacer par un appel au manager pour récupérer la liste des produits d'une catégorie  
  
    $this->render("category", [  
        "products" => $products  
    ]);  
}

/* Pour la route /categories/produits */  
public function productsList() : void  
{  
    $this->pm->getAllProducts();
    $products = []; // à remplacer par un appel au manager pour récupérer la liste de tous les produits  
  
    $this->render("products", [  
        "products" => $products  
    ]);  
}

/* Pour la route /produits/:slug-produit */  
public function productDetails(string $productSlug) : void  
{  
    
    $this->pm->getProductBySlug($productSlug);
    $product = []; // à remplacer par un appel au manager pour récupérer les informations d'un produit  
  
    $this->render("product", [  
        "product" => $product  
    ]);  
}

  
}