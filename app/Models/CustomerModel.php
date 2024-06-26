<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table      = 'customer';
    protected $primaryKey = 'customer_id';
    protected $allowedFields = ['company', 'name', 'email', 'address_delivery'];

    protected $useTimestamps = false;
}
