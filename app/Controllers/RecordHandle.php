<?php

namespace App\Controllers;

use App\Models\DeliveryModel;
use App\Models\OrderModel;
use App\Models\QuotationModel;
use App\Models\ReturModel;
use App\Models\RFQModel;
use App\Models\SPKModel;
use App\Models\CustomerModel;
use CodeIgniter\Database\Config;
use CodeIgniter\Email\Email;


class RecordHandle extends BaseController
{
    protected $DeliveryDB, $OrderDB, $QuotationDB, $ReturDB, $RFQDB, $SPKDB, $CustomerDB;

    public function __construct()
    {
        $this->DeliveryDB = new DeliveryModel();
        $this->OrderDB = new OrderModel();
        $this->QuotationDB = new QuotationModel();
        $this->ReturDB = new ReturModel();
        $this->RFQDB = new RFQMOdel();
        $this->SPKDB = new SPKModel();
        $this->CustomerDB = new CustomerModel();
    }


    // Customer
    public function CustomerRead()
    {
        $data = '';

        if ($this->CustomerDB->findAll()) {
            foreach ($this->CustomerDB->findAll() as $tampil) {
                $data .= '<tr>
                <th><span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="option[]" value="1">
                        <label for="checkbox1"></label></th>
                <th>' . $tampil['customer_id'] . '</th>
                <th>' . $tampil['company'] . '</th>
                <th>' . $tampil['name'] . '</th>
                <th>' . $tampil['email'] . '</th>
                <th>' . $tampil['address_delivery'] . '</th>
                <th>
                    <a href="#editEmployeeModal" id="' . $tampil['customer_id'] . '"class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                    </a>
                    <a href="#deleteEmployeeModal" id="' . $tampil['customer_id'] . '"class="delete post_delete_btn">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </a>
                </th>
            </tr>';
            }
            return $this->response->setJSON([
                'error' => false,
                'message' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<div class="text-secondary text-center fw-bold my-5">No posts found in the database!</div>'
            ]);
        }
    }


    public function CustomerCreate()
    {
        $company = $this->request->getPost('company');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $address = $this->request->getPost('address_delivery');
        // $AllData = $company . $name . $email . $phone . $address;
        // $id=uniqid($AllData);
        $dataCustomer = [
            'company' => $company,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address_delivery' => $address,
        ];
        if ($this->CustomerDB->save($dataCustomer)) {
            $product = $this->request->getPost('nama_barang');
            $product_type_data = $this->request->getPost('selectedOptions');
            $product_type = explode(',', $product_type_data);
            $qty = $this->request->getPost('qty');
            $dataRFQ = [
                'product' => $product,
                'production_type' => json_encode($product_type),
                'qty' => $qty,
            ];
            if ($this->RFQDB->save($dataRFQ)) {
                session()->setFlashdata('succes', 'Data Berhasil Dimasukann');
                $tujuan = $this->request->getPost('tujuan');
                $berat = $this->request->getPost('berat');
                $nopnw = 'NPNW' . uniqid($name);
                $product_type_json = json_encode($product_type);
                $data_pdf = [
                    'company' => $company,
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'address_delivery' => $address,
                    'product' => $product,
                    'pemesan' => $name,
                    'production_type' => $product_type_json,
                    'qty' => $qty,
                    'tujuan' => $tujuan,
                    'berat' => $berat,
                    'npnw' => $nopnw
                ];
                $decode_product_type = json_decode($product_type_json, true);
                $data_pdf['decoded_product_type'] = $decode_product_type;
                echo view('pdf/registration_pdf', $data_pdf);
            } else {
                session()->setFlashdata('Error', 'Gagal Memasukan Data');
                return redirect()->to('/');
            }
        }
        // $validation = \config\Services::validation();
        // $validation->setRules([
        //     'name' => 'required|max_length[10]',
        //     'company' => 'required|max_length[30]',
        //     'email' => 'required|max_length[254]|valid_email'
        // ]);

        // if (!$validation->withRequest($this->request)->run()) {
        //     return $this->response->setJSON([
        //         'error' => true,
        //         'message' => $validation->getErrors()
        //     ]);
        // } else {


        return $this->response->setJSON([
            'error' => false,
            'message' => 'Successfully added new post!'
        ]);
        // }
    }



    public function sendEmail()
    {
        $emailTo = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');
        $email = \Config\Services::email();
        $config = new \Config\Email();
        $email->initialize($config);
        $email->setFrom($config->fromEmail, $config->fromName);
        $email->setTo($emailTo);
        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) {
            session()->setFlashdata('succes', 'Email Terkirim');
        } else {
            session()->setFlashdata('error', 'Email Gagal Terkirim: ' . $email->printDebugger(['headers']));
        }
        return redirect()->to('/');
    }

    public function CustomersCreate()
    {
        $data = [
            'customer_id' => $this->request->getPost('id_customer'),
            'company' => $this->request->getPost('company'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'address_delivery' => $this->request->getPost('address_delivery'),
        ];

        // $validation = \config\Services::validation();
        // $validation->setRules([
        //     'name' => 'required|max_length[10]',
        //     'company' => 'required|max_length[30]',
        //     'email' => 'required|max_length[254]|valid_email'
        // ]);

        // if (!$validation->withRequest($this->request)->run()) {
        //     return $this->response->setJSON([
        //         'error' => true,
        //         'message' => $validation->getErrors()
        //     ]);
        // } else {

        $this->CustomerDB->save($data);

        return $this->response->setJSON([
            'error' => false,
            'message' => 'Successfully added new post!'
        ]);
        // }
    }

    public function CustomerDelete($id = null)
    {

        $this->CustomerDB->find($id);
        $postmodel = $this->CustomerDB->delete($id);

        return $this->response->setJSON([
            'error' => false,
            'message' => 'Successfully deleted post!'

        ]);
    }

    //RFQ
    public function RFQRead()
    {
        $data = '';

        if ($this->RFQDB->findAll()) {
            foreach ($this->RFQDB->findAll() as $tampil) {
                $data .= '<tr>
                <th><span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="option[]" value="1">
                        <label for="checkbox1"></label></th>
                <th>' . $tampil['no_rfq'] . '</th>
                <th>' . $tampil['product'] . '</th>
                <th>' . $tampil['production_type'] . '</th>
                <th>' . $tampil['qty'] . '</th>
                <th>' . $tampil['customer_id'] . '</th>
                <th>' . $tampil['date_rfq'] . '</th>
                <th>' . $tampil['pic'] . '</th>
                <th>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                    </a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </a>
                </th>
            </tr>';
            }
            return $this->response->setJSON([
                'error' => false,
                'message' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<div class="text-secondary text-center fw-bold my-5">No posts found in the database!</div>'
            ]);
        }
    }

    public function RFQCreate()
    {
        $data = [
            'product' => $this->request->getPost('product'),
            'production_type' => $this->request->getPost('prodcution_type'),
            'qty' => $this->request->getPost('qty'),
            'date_rfq' => $this->request->getPost('date_rfq'),
            'pic' => $this->request->getPost('pic'),
        ];

        $this->RFQDB->save($data);

        return $this->response->setJSON([
            'error' => false,
            'message' => 'Successfully added new post!'
        ]);
    }

    // Quotation
    public function QuotationRead()
    {
        $data = '';

        if ($this->QuotationDB->findAll()) {
            foreach ($this->QuotationDB->findAll() as $tampil) {
                $data .= '<tr>
                <th><span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="option[]" value="1">
                        <label for="checkbox1"></label></th>
                <th>' . $tampil['no_quotation'] . '</th>
                <th>' . $tampil['date_quotation'] . '</th>
                <th>' . $tampil['no_rfq'] . '</th>
                <th>' . $tampil['up'] . '</th>
                <th>' . $tampil['name_sales'] . '</th>
                <th>' . $tampil['cc'] . '</th>
                <th>' . $tampil['tunggakan'] . '</th>
                <th>' . $tampil['est_date_start'] . '</th>
                <th>' . $tampil['est_date_end'] . '</th>
                <th>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                    </a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </a>
                </th>
            </tr>';
            }
            return $this->response->setJSON([
                'error' => false,
                'message' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<div class="text-secondary text-center fw-bold my-5">No posts found in the database!</div>'
            ]);
        }
    }

    //order 
    public function OrderRead()
    {
        $data = '';

        if ($this->OrderDB->findAll()) {
            foreach ($this->OrderDB->findAll() as $tampil) {
                $data .= '<tr>
                <th><span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="option[]" value="1">
                        <label for="checkbox1"></label></th>
                <th>' . $tampil['no_order'] . '</th>
                <th>' . $tampil['data_order'] . '</th>
                <th>' . $tampil['no_pnbp'] . '</th>
                <th>' . $tampil['no_quotation'] . '</th>
                <th>' . $tampil['no_po'] . '</th>
                <th>' . $tampil['mthd_ship'] . '</th>
                <th>' . $tampil['ppn'] . '</th>
                <th>' . $tampil['add_cost'] . '</th>
                <th>' . $tampil['payment'] . '</th>
                <th>' . $tampil['total'] . '</th>
                <th>' . $tampil['amount_due'] . '</th>
                <th>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                    </a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </a>
                </th>
            </tr>';
            }
            return $this->response->setJSON([
                'error' => false,
                'message' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<div class="text-secondary text-center fw-bold my-5">No posts found in the database!</div>'
            ]);
        }
    }

    // SPK 
    public function SPKRead()
    {
        $data = '';

        if ($this->SPKDB->findAll()) {
            foreach ($this->SPKDB->findAll() as $tampil) {
                $data .= '<tr>
                <th><span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="option[]" value="1">
                        <label for="checkbox1"></label></th>
                <th>' . $tampil['no_spk'] . '</th>
                <th>' . $tampil['no_order'] . '</th>
                <th>' . $tampil['date_spk'] . '</th>
                <th>' . $tampil['no_quotation'] . '</th>
                <th>' . $tampil['mthd_ship_fix'] . '</th>
                <th>' . $tampil['no_po'] . '</th>
                <th>' . $tampil['date_start'] . '</th>
                <th>' . $tampil['date_end'] . '</th>
                <th>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                    </a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </a>
                </th>
            </tr>';
            }
            return $this->response->setJSON([
                'error' => false,
                'message' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<div class="text-secondary text-center fw-bold my-5">No posts found in the database!</div>'
            ]);
        }
    }

    // Delivery
    public function DeliveryRead()
    {
        $data = '';

        if ($this->DeliveryDB->findAll()) {
            foreach ($this->DeliveryDB->findAll() as $tampil) {
                $data .= '<tr>
                <th><span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="option[]" value="1">
                        <label for="checkbox1"></label></th>
                <th>' . $tampil['no_do'] . '</th>
                <th>' . $tampil['no_dev_pnbp'] . '</th>
                <th>' . $tampil['date_delivery'] . '</th>
                <th>' . $tampil['date_acc'] . '</th>
                <th>' . $tampil['no_order'] . '</th>
                <th>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                    </a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </a>
                </th>
            </tr>';
            }
            return $this->response->setJSON([
                'error' => false,
                'message' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<div class="text-secondary text-center fw-bold my-5">No posts found in the database!</div>'
            ]);
        }
    }

    // Retur
    public function ReturRead()
    {
        $data = '';

        if ($this->ReturDB->findAll()) {
            foreach ($this->ReturDB->findAll() as $tampil) {
                $data .= '<tr>
                <th><span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="option[]" value="1">
                        <label for="checkbox1"></label></th>
                <th>' . $tampil['no_retur'] . '</th>
                <th>' . $tampil['reg_cust'] . '</th>
                <th>' . $tampil['date_retur'] . '</th>
                <th>' . $tampil['no_order'] . '</th>
                <th>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                    </a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </a>
                </th>
            </tr>';
            }
            return $this->response->setJSON([
                'error' => false,
                'message' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<div class="text-secondary text-center fw-bold my-5">No posts found in the database!</div>'
            ]);
        }
    }
}
