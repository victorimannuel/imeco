<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class MaintenanceFilter implements FilterInterface
{
    // Pastikan ini adalah domain UTAMA Anda (misalnya: 'radar-ms.com')
    private $mainDomain = 'site.com'; 
    private $adminSubdomain = 'admin.';

    public function before(RequestInterface $request, $arguments = null)
    {
        // Cara yang paling andal untuk mendapatkan host di filter
        $currentHost = $request->getUri()->getHost(); 
        
        // 1. Cek apakah yang diakses adalah domain UTAMA:
        $isMainDomain = strpos($currentHost, $this->mainDomain) !== false;
        
        // 2. Cek apakah ada subdomain admin:
        $hasAdminSubdomain = strpos($currentHost, $this->adminSubdomain) !== false;

        // Logika: Jika ini adalah domain utama DAN BUKAN subdomain admin
        if ($isMainDomain && !$hasAdminSubdomain) {
            
            // Tampilkan halaman maintenance dan hentikan request
            echo view('maintenance'); 
            exit(); 
        }
        
        // Jika host adalah admin.site.com atau localhost, request akan lolos.
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No action needed
    }
}