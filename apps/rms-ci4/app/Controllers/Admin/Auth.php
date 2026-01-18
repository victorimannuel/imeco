<?php
namespace App\Controllers\Admin;
use App\Models\UserModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return view('admin/auth/login');
    }

    public function login()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();
        
        if ($user && password_verify($password, $user['password_hash'])) {
            session()->set([
                'user_id'    => $user['id'],
                'name'       => $user['name'],
                'isLoggedIn' => true
            ]);
            return redirect()->to('/');
        } else {
            return redirect()->to('/login')->with('error', 'Email atau Password yang Anda masukkan salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}