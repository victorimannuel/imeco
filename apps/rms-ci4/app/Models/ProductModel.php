<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    
    // HILANGKAN 'price'
    protected $allowedFields = [
        'sequence',
        'name',
        'description',
        'image', 
        'specification',
        'click_count',
    ]; 

    // HILANGKAN aturan validasi untuk 'price'
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[255]',
        'description' => 'permit_empty|max_length[1000]',
        // 'image'       => 'permit_empty|max_size[image,2048]|ext_in[image,png,jpg,jpeg]',
    ];

    // HILANGKAN pesan validasi untuk 'price' (atau kosongkan jika tidak ada pesan custom lain)
    protected $validationMessages = []; 

    protected $skipValidation = false;
    protected $cleanValidationRules = true;
}