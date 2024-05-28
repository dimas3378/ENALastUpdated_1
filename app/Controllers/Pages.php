<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\monitoring;

class Pages extends BaseController
{
    protected $monitoring;

    public function index()
    {
        $data['title'] = 'BPU | Dashboard';
        if (session()->get('isLoggedIn') === true) {
            echo view('layout/header', $data);
            echo view('pages/dashboard');
            echo view('layout/footer');
        } else {
            session()->setFlashdata('error', 'Silahkan Login Terlebih Dahulu');
            return redirect()->to('/auth');
        }

    }
    public function registration()
    {
        $data = [
            'title' => 'BPU | Item Registration'
        ];
        echo view('layout/header', $data);
        // di yg murti bikin nama nya home/table
        echo view('pages/registration');
        echo view('layout/footer');
    }
    public function registitem()
    {
        $data = [
            'title' => 'BPU | Item Registration'
        ];
        echo view('layout/header', $data);
        echo view('pages/registitem');
        echo view('layout/footer');
    }
    public function monitoring()
    {
        $model = model(monitoring::class);
        $data = [
            'title' => 'BPU | Monitoring',
            'monitoring' => $model->getMonitoring()
        ];
        echo view('layout/header', $data);
        echo view('pages/monitoring');
    }
    public function customer_id()
    {
        $data = [
            'title' => 'Record | ID Customer'
        ];
        echo view('layout/header', $data);
        echo view('pages/customer_id');
    }
    public function record_rfq()
    {
        $data = [
            'title' => 'Record | RFQ'
        ];
        echo view('layout/header', $data);
        echo view('pages/record_rfq');
        echo view('layout/footer');
    }
    public function record_quotation()
    {
        $data = [
            'title' => 'Record | Quotation'
        ];
        echo view('layout/header', $data);
        echo view('pages/record_quotation');
    }
    public function record_order()
    {
        $data = [
            'title' => 'Record | Order'
        ];
        echo view('layout/header', $data);
        echo view('pages/record_order');
    }
    public function record_spk()
    {
        $data = [
            'title' => 'Record | SPK'
        ];
        echo view('layout/header', $data);
        echo view('pages/record_spk');
    }
    public function record_delivery()
    {
        $data = [
            'title' => 'Record | Delivery'
        ];
        echo view('layout/header', $data);
        echo view('pages/record_delivery');
    }
    public function record_retur()
    {
        $data = [
            'title' => 'Record | Retur'
        ];
        echo view('layout/header', $data);
        echo view('pages/record_retur');
    }
    public function record_status()
    {
        $data = [
            'title' => 'Record | Status'
        ];
        echo view('layout/header', $data);
        echo view('pages/record_status');
    }
    public function manage_user()
    {
        $model = new AuthModel();
        $users = $model->getAllUsers();
        $items_per_page = 10;
        $total_pages = ceil(count($users) / $items_per_page);
        $current_page = isset($_GET['page']) ? max(1, min($_GET['page'], $total_pages)) : 1;
        $offset = ($current_page - 1) * $items_per_page;
        $data['title'] = 'BPU | Manage User';
        $data['current_page'] = $current_page;
        $data['users'] = array_slice($users, $offset, $items_per_page);
        $data['total_pages'] = $total_pages;
        $data['offset']=$offset;
        echo view('layout/header', $data);
        echo view('pages/manage_user', $data);
    }

    public function update()
    {
        $model = new AuthModel();
        $id = $this->request->getPost('id');
        $email = $this->request->getPost('email');
        $jabatan = $this->request->getPost('jabatan');
        $data = [
            'email' => $email,
            'jabatan' => $jabatan
        ];
        $update = $model->updateData($id, $data);
        if($update){
            session()->setFlashdata('succes', 'Data berhasil diupdate.');
        }else{
            session()->setFlashdata('error', 'Gagal mengupdate data.');
        }
        return redirect()->to('/pages/manage_user');
    }
    public function delete($id){
        $model = new AuthModel();
        $delete = $model->deleteData($id);
        if($delete){
            session()->setFlashdata('succes', 'Data berhasil diupdate.');
        }else{
            session()->setFlashdata('error', 'Gagal mengupdate data.');
        }
        return redirect()->to('/pages/manage_user');
    }
    public function myprofile()
    {
        $data = [
            'title' => 'BPU | My Profile'
        ];
        echo view('layout/header', $data);
        echo view('pages/myprofile');
    }
    // inii mulai baru yg dibuat
    public function rfqsubass()
    {
        $data = [
            'title' => 'BPU | RFQ'
        ];
        echo view('layout/header', $data);
        echo view('pages/rfqsubass');
        echo view('layout/footer');
    }
    public function rfqmoulding()
    {
        $data = [
            'title' => 'BPU | RFQ'
        ];
        echo view('layout/header', $data);
        echo view('pages/rfqmoulding');
        echo view('layout/footer');
    }
    public function rfqelektrik()
    {
        $data = [
            'title' => 'BPU | RFQ'
        ];
        echo view('layout/header', $data);
        echo view('pages/rfqelektrik');
        echo view('layout/footer');
    }
    public function rfqfoundry()
    {
        $data = [
            'title' => 'BPU | RFQ'
        ];
        echo view('layout/header', $data);
        echo view('pages/rfqfoundry');
        echo view('layout/footer');
    }
    public function rfqcasting()
    {
        $data = [
            'title' => 'BPU | RFQ'
        ];
        echo view('layout/header', $data);
        echo view('pages/rfqcasting');
        echo view('layout/footer');
    }
    public function rfqpresstool()
    {
        $data = [
            'title' => 'BPU | RFQ'
        ];
        echo view('layout/header', $data);
        echo view('pages/rfqpresstool');
        echo view('layout/footer');
    }
}
