<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'order';
    protected $primaryKey = 'no_order';
    protected $allowedFields = ['date_order', 'no_pnbp', 'no_quotation', 'no_po', 'mthd_ship', 'ship_cost', 'ppn', 'add_cost', 'payment', 'total', 'amount_due'];

    protected $useTimestamps = false;
}
