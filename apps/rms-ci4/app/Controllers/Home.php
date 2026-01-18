<?php
namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\DocumentationModel;

class Home extends BaseController
{
    /**
     * Metode utama untuk URL root (/).
     * Diarahkan ke view frontend/home.
     */
    public function index(): string
    {
        // Pastikan Anda telah membuat view ini (app/Views/frontend/home.php).
        return view('frontend/home');
    }

    // Route /about
    public function about(): string
    {
        return view('frontend/about'); 
    }
    
    // Route /maritime-services
    public function maritime_services(): string
    {
        return view('frontend/maritime_services'); 
    }
    
    // Route /marine-outfitting
    public function marine_outfitting(): string
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->orderBy('sequence', 'ASC')->findAll();
        $products = $productModel->findAll();
        return view('frontend/marine_outfitting', $data);
    }
    
    // Route /services
    public function services(): string
    {
        return view('frontend/services'); 
    }
    
    // Route /customer-and-partner
    public function customer_and_partner(): string
    {
        return view('frontend/customer_and_partner'); 
    }
    
    // Route /documentation
    public function documentation(): string
    {
        $documentationModel = new DocumentationModel();
        $data['documentation'] = $documentationModel->orderBy('sequence', 'ASC')->findAll();
        $documentation = $documentationModel->findAll();
        return view('frontend/documentation', $data);
    }
    
    // Route /contact
    public function contact(): string
    {
        return view('frontend/contact');
    }
    
    // public function generateHash()
    // {
    //      echo password_hash('bob123bob123', PASSWORD_DEFAULT);
    // }
    
}