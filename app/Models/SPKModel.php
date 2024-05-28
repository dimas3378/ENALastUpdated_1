<?php

namespace App\Models;

use CodeIgniter\Model;

class SPKModel extends Model
{
    protected $table      = 'spk';
    protected $primaryKey = 'no_spk';
    protected $allowedFields = ['no_order', 'date_spk', 'no_quotation', 'mthd_ship_fix', 'no_po', 'date_start', 'date_end'];

    protected $useTimestamps = false;
}
