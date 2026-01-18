<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DocumentationModel;

class DocumentationController extends BaseController
{
    protected $documentationModel;

    public function __construct()
    {
        $this->documentationModel = new DocumentationModel();
    }

    public function index()
    {
        $documentation = $this->documentationModel->orderBy('sequence', 'ASC')->findAll();
        
        $data = [
            'title' => 'Dokumentasi',
            'documentation' => $documentation,
        ];
        
        return view('admin/documentation/index', $data);
    }

    public function upload()
    {
        // Check if the 'file' input exists
        if (!isset($_FILES['file'])) {
            // If the file exceeds PHP limits, $_FILES might not exist
            $postMax = ini_get('post_max_size');
            $uploadMax = ini_get('upload_max_filesize');
            return redirect()->back()->with('error', "No file uploaded. Current PHP limits: upload_max_filesize={$uploadMax}, post_max_size={$postMax}");
        }
    
        $files = $this->request->getFiles();
    
        foreach ($files['file'] as $file) {
            // Get file size in MB
            $sizeMB = round($file->getSize() / (1024 * 1024), 2);
    
            if ($file->isValid() && !$file->hasMoved()) {
                $type = strpos($file->getMimeType(), 'video') === 0 ? 'video' : 'image';
                $newName = $file->getRandomName();
                $file->move('uploads/documentation', $newName);
    
                $this->documentationModel->insert([
                    'type' => $type,
                    'file_path' => 'uploads/documentation/' . $newName
                ]);
            } else {
                return redirect()->back()->with('error', "File upload failed. File size: {$sizeMB} MB. Check PHP limits.");
            }
        }
    
        return redirect()->back()->with('success', 'Files uploaded successfully.');
    }

    
    // Reorder via AJAX
    public function reorder()
    {
        $order = $this->request->getJSON();

        if ($order) {
            foreach ($order as $item) {
                $this->documentationModel->update($item->id, ['sequence' => $item->position]);
            }
        }

        return $this->response->setJSON(['status' => 'success']);
    }
    
    public function delete($id)
    {
        $doc = $this->documentationModel->find($id);
    
        if ($doc) {
            // Delete file from server
            $filePath = $doc['file_path'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
    
            // Delete from database
            $this->documentationModel->delete($id);
    
            return redirect()->back()->with('success', 'File berhasil dihapus.');
        }
    
        return redirect()->back()->with('error', 'File tidak ditemukan.');
    }

}
