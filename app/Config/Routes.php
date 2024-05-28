<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'pages::index');


// Record_status
$routes->post('RecordHandle/CustomerCreate', 'RecordHandle::CustomerCreate');
$routes->get('RecordHandle/CustomerRead', 'RecordHandle::CustomerRead');
$routes->post('RecordHandle/sendEmail', 'RecordHandle::sendEmail');
$routes->get('DompdfHelper', 'DompdfHelper::generatePdf');

$routes->post('RecordHandle/CustomersCreate', 'RecordHandle::CustomersCreate');
$routes->get('RecordHandle/CustomerDelete', 'RecordHandle::CustomerDelete');


//record_spk
$routes->post('RecordHandle/SPKCreate', 'RecordHandle::SPKCreate');
$routes->get('RecordHandle/SPKRead', 'RecordHandle::SPKRead');


//record_rfq
$routes->post('RecordHandle/RFQCreate', 'RecordHandle::RFQCreate');
$routes->get('RecordHandle/RFQRead', 'RecordHandle::RFQRead');


//record_retur
$routes->post('RecordHandle/ReturCreate', 'RecordHandle::ReturCreate');
$routes->get('RecordHandle/ReturRead', 'RecordHandle::ReturRead');

//record_quotation
$routes->post('RecordHandle/QuotationCreate', 'RecordHandle::QuotationCreate');
$routes->get('RecordHandle/QuotationRead', 'RecordHandle::QuotationRead');

//record_order
$routes->post('RecordHandle/OrderCreate', 'RecordHandle::OrderCreate');
$routes->get('RecordHandle/OrderRead', 'RecordHandle::OrderRead');

//record_delivery
$routes->post('RecordHandle/DeliveryCreate', 'RecordHandle::StatusCreate');
$routes->get('RecordHandle/StatusRead', 'RecordHandle::StatusRead');

//route login
$routes->get('auth/login', 'Auth::index');
$routes->get('auth/register', 'Auth::regis');
$routes->post('auth/login', 'Auth::login');
$routes->post('auth/register', 'Auth::register');

//route manage user
$routes->get('auth/getDataById/(:num)', 'Auth::getDataById/$1');
$routes->post('pages/manage_user', 'Pages::update');
$routes->get('pages/manage_user', 'Pages::manage_user');
