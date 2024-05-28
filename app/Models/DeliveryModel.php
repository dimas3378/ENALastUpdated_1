<?php

namespace App\Models;

use CodeIgniter\Model;

class DeliveryModel extends Model
{
    protected $table      = 'delivery';
    protected $primaryKey = 'no_do';
    protected $allowedFields = ['no_dev_pnbp', 'date_delivery', 'date_acc', 'ship_cost', 'no_order'];

    protected $useTimestamps = false;
}
