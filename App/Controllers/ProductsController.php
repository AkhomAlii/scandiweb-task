<?php


namespace App\Controllers;
use App\Models\Product;

class ProductsController{

    public function index(){
        $products = (new Product())->selectAll() ;
    
        return view('index', [
            'products' => $products
        ]);        
    }

    public function delete(){

        $products = new Product();
        $products->massDelete($_POST);
        return redirect('/');
    }

    public function add($data = []){
 
 
        return view('/add-product', $data); 
    }
    

    public function store(){
        
        $whatsPoppin = Product::add($_POST);
        if (isset($whatsPoppin['errors'])){

            return $this->add($whatsPoppin);
        }
        return redirect('/');
        
    }
    
}