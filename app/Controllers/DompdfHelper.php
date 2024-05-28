<?php

namespace App\Controllers;

use Dompdf\Dompdf;

class DompdfHelper extends BaseController
{
    protected $dompdf;

    public function __construct()
    {
        $this->dompdf = new Dompdf();
    }

    public function generatePdf()
    {
        $html = view('pdf/registration_pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();
        $this->dompdf->stream("document.pdf", array("Attachment" => 0));
    }
}
