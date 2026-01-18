<?php

namespace App\Controllers\Admin; // HARUS SESUAI DENGAN NAMESPACE DI ROUTES

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard', // Digunakan untuk Judul Halaman dan Sidebar Aktif
            // Tambahkan data lain yang dibutuhkan di dashboard di sini
        ];
        // Fungsi ini akan menampilkan halaman dashboard admin
        return view('admin/dashboard', $data);
    }
}