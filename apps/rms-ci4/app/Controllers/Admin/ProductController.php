<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    protected $productModel;
    protected $helpers = ['form', 'url'];

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    // A. READ: Menampilkan daftar produk
    public function index()
    {
        $productModel = new ProductModel();
        $products = $productModel->orderBy('sequence', 'ASC')->findAll();
        
        $data = [
            'title' => 'Daftar Produk',
            'products' => $products,
        ];
    
        return view('admin/product/list', $data);
    }
    
    public function search()
    {
        $query = $this->request->getGet('query');
        $productModel = new ProductModel();
    
        if ($query) {
            $products = $productModel->like('name', $query)->findAll();
        } else {
            $products = $productModel->findAll();
        }
    
        return view('admin/product/table_rows', ['products' => $products]);
    }


    // B. CREATE (Form): Menampilkan form tambah produk baru
    public function new()
    {
        $data = [
            'title'      => 'Produk - Tambah',
            'product'    => [],
            'validation' => service('validation')
        ];
        
        // Perhatian: Pastikan view ini ada di app/Views/admin/product/form.php
        return view('admin/product/form', $data);
    }

    // C. CREATE (Save): Menyimpan data produk baru
    public function save()
    {
        // 1. Validasi
        // if (! $this->validate($this->productModel->validationRules)) {
        //     // Jika validasi gagal, kembalikan user ke form dengan data input lama
        //     return redirect()->back()->withInput()->with('validation', $this->validator);
        // }

        $imagePath = '';
        $file = $this->request->getFile('image');

        // 2. Proses Upload Gambar
        if ($file->isValid() && ! $file->hasMoved()) {
            $imageName = $file->getRandomName(); 
            // Direktori harus relatif dari public/
            $file->move('./uploads/product', $imageName);
            $imagePath = 'uploads/product/' . $imageName;
        }

        // 3. Simpan Data
        $this->productModel->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'specification' => $this->request->getPost('specification'),
            'image'       => $imagePath,
        ]);

        return redirect()->to(base_url('product'))->with('message', 'Produk berhasil ditambahkan. 🎉');
    }

    // D. UPDATE (Form): Menampilkan form edit produk
    public function edit($id = null)
    {
        $product = $this->productModel->find($id);

        if (empty($product)) {
            return redirect()->to(base_url('product'))->with('error', 'Produk tidak ditemukan.');
        }

        $data = [
            'title'      => 'Produk - Edit',
            'product'    => $product,
            'validation' => service('validation')
        ];
        
        // PERBAIKAN: Menggunakan path view yang konsisten
        return view('admin/product/form', $data);
    }

    // E. UPDATE (Save): Menyimpan perubahan data produk
    public function update($id = null)
    {
        // Logika tidak berubah, sudah benar.
        if (! $this->validate($this->productModel->validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $product = $this->productModel->find($id);
        $currentImage = $product['image'];
        $file = $this->request->getFile('image');
        $newImagePath = $currentImage;
        
        if ($file->isValid() && ! $file->hasMoved()) {
            if (!empty($currentImage) && file_exists($currentImage)) {
                @unlink($currentImage);
            }
            
            $imageName = $file->getRandomName();
            $file->move('./uploads/product', $imageName);
            $newImagePath = 'uploads/product/' . $imageName;
        }
        
        $this->productModel->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'specification' => $this->request->getPost('specification'),
            'image'       => $newImagePath,
        ]);

        return redirect()->to(base_url('product'))->with('message', 'Produk berhasil diperbarui. 👍');
    }
    
    public function reorder() {
        $order = $this->request->getJSON();
    
        foreach ($order as $item) {
            $this->productModel->update($item->id, ['sequence' => $item->sequence]);
        }
    
        return $this->response->setJSON(['status' => 'success']);
    }
    
    // F. DELETE: Menghapus produk
    public function delete($id = null)
    {
        $product = $this->productModel->find($id);
        // Logika hapus tidak berubah, sudah benar.
        
        if (empty($product)) {
            return redirect()->to(base_url('product'))->with('error', 'Produk tidak ditemukan.');
        }

        if (!empty($product['image']) && file_exists($product['image'])) {
            @unlink($product['image']);
        }

        $this->productModel->delete($id);

        return redirect()->to(base_url('product'))->with('message', 'Produk **' . esc($product['name']) . '** berhasil dihapus. 🗑️');
    }
    
    public function incrementClick()
    {
        $data = $this->request->getJSON(true); // decode JSON body
        $id = $data['id'] ?? null;
    
        if (!$id) {
            return $this->response->setStatusCode(400)
                                  ->setJSON(['error' => 'Product ID is required']);
        }
    
        $product = $this->productModel->find($id);
        if (!$product) {
            return $this->response->setStatusCode(404)
                                  ->setJSON(['error' => 'Product not found']);
        }
    
        $this->productModel->update($id, [
            'click_count' => ($product['click_count'] ?? 0) + 1
        ]);
    
        return $this->response->setJSON([
            'click_count' => ($product['click_count'] ?? 0) + 1
        ]);
    }

}