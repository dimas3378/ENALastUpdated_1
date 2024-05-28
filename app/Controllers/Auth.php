<?php

namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class Auth extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $data = [
            'tittle' => 'BPU | Log In'
        ];
        echo view('pages/login',$data);
    }
    public function regis()
    {
        $data = [
            'tittle' => 'BPU | Add New User'
        ];
        echo view('pages/signup',$data);
    }
    public function login()
    {
        $model = new AuthModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $model->getUsersByUsersid($username);
        if ($user) {
            $check = password_verify($password, $user["pwdUsers"]);
            var_dump($check);
            if ($check) {
                $session = session();
                $session->set('isLoggedIn', true);
                $session->set('username', $user['uidUsers']);
                if ($user['jabatan'] === 'Admin') {
                    $session->setFlashdata('succes', 'Berhasil Login Sebagai Admin');
                    $session->set('role','admin');
                    return redirect()->to('/');
                } elseif ($user['jabatan'] === 'Super Admin') {
                    $session->setFlashdata('succes','Berhasil Login Sebagai Super Admin');
                    $session->set('role','super admin');
                    return redirect()->to('/');
                } else {
                    $session->setFlashdata('succes', 'Berhasil Login' . ' ' . session()->get('username'));
                    $session->set('role','user');
                    return redirect()->to('/');
                }
            } else {
                session()->setFlashdata('error', 'Invalid Password');
                return redirect()->to('/auth');
            }
        } else {
            session()->setFlashdata('error', 'User not Found');
            return redirect()->to('/auth');
        }
    }
    public function register()
    {
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('emailusers');
        $password = $this->request->getPost('passwordusers');
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $model = new AuthModel();
        $user = $model->getAllUsers();
        if ($user) {
            foreach ($user as $row) {
                if ($email === $row['emailUsers']) {
                    session()->setFlashdata('error', 'Email Sudah Terdaftar');
                    return redirect()->to('/auth/register');
                }
            }
        }
        $data_users = [
            'uidUsers' => $username,
            'emailUsers' => $email,
            'pwdUsers' => $hashPassword,
            'jabatan' => 'User'
        ];
        $insert = $model->writeUserData($data_users);
        if ($insert) {
            session()->setFlashdata('succes', 'Registrasi Berhasil');
            return redirect()->to('/auth');
        } else {
            session()->setFlashdata('error', 'Registrasi Gagal');
            return redirect()->to('/auth/register');
        }
    }
    public function logout(){
        session()->remove('isLoggedIn');
        return redirect()->to('/auth');
    }
    public function getDataById($id)
    {
        $model = new AuthModel();
        $data = $model->getUsersByUsersuid($id);
        if ($data) {
            log_message('info', 'Data retrieved from database: ' . json_encode($data));
            return $this->respond($data);
        } else {
            return $this->failNotFound('User not found');
        }
    }
    // public function showModal($id)
    // {
    //     $userModel = new AuthModel();
    //     $data['user'] = $userModel->getUserById($id);

    //     if ($data['user']) {
    //         return view('manage_user', $data);
    //     } else {
    //         return redirect()->back()->with('error', 'User not found');
    //     }
    // }
}
?>