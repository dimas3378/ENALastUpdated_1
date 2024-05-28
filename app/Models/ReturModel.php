<?php

namespace App\Models;

use CodeIgniter\Model;

class ReturModel extends Model
{
    protected $table      = 'retur';
    protected $primaryKey = 'no_retur';
    protected $allowedFields = ['reg_cust', 'date_retur', 'no_order'];

    protected $useTimestamps = false;
}
