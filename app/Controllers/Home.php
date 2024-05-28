<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function registration()
    {
        return view('table');
    }
    public function monitoring()
    {
        /* $sidebar = $this->view('template/sidebar');
        return view('monitoring',['sidebar'=>$sidebar]); */

        /* return view('sidebar').view('monitoring'); */

        return view('monitoring');
    }
    public function record()
    {

        return view('record');
    }
    public function customer_id()
    {
        return view('customer_id');
    }
    public function record_rfq()
    {
        return view('record_rfq');
    }
    public function record_quotation()
    {
        return view('record_quotation');
    }
    public function record_order()
    {
        return view('record_order');
    }
    public function record_spk()
    {
        return view('record_spk');
    }
    public function record_delivery()
    {
        return view('record_delivery');
    }
    public function record_retur()
    {
        return view('record_retur');
    }
    public function record_status()
    {
        return view('record_status');
    }
    public function rfqsubass()
    {
        return view('rfqsubass');
    }
    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
}
