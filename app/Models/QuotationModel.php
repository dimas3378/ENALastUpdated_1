<?php

namespace App\Models;

use CodeIgniter\Model;

class QuotationModel extends Model
{
    protected $table      = 'quotation';
    protected $primaryKey = 'no_quotation';
    protected $allowedFields = ['date_quotation', 'no_rfq', 'up', 'name_sales', 'cc', 'tunggakan', 'est_date_start', 'est_date_end'];

    protected $useTimestamps = false;
}
