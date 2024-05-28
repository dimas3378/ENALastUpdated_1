<?php

namespace App\Models;

use CodeIgniter\Model;
use PDO;
use PDOException;

class Monitoring extends Model
{

    public function getMonitoring()
    {
        $sql = "SELECT c.customer_id, company, product, rfq.production_type, qty, pic, date_rfq
        FROM customer c
        LEFT JOIN rfq ON c.customer_id = rfq.customer_id";
        // LEFT JOIN quotation q ON q.no_rfq = rfq.no_rfq
        // LEFT JOIN `order` o ON o.no_quotation = q.no_quotation
        // LEFT JOIN delivery_order do ON do.no_order = o.no_order";
        $query = $this->db->query($sql);
        $result = $query->getResultArray();

        return $result;
    }
}
