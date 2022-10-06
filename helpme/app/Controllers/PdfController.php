<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClientModel;
use App\Models\FileUploadModel;
use Mpdf\Mpdf;
use Dompdf\Dompdf;
require_once 'dompdf/autoload.inc.php';
require_once 'vendor/autoload.php';

class PdfController extends BaseController
{
	 function letter($id = null)
	{
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('
<div style="text-align: center; font-weight: bold;">
    <img src="/system_image/logo.jpg" width = "50" />
		<h5 style="margin:0;">Republic of the Philippines</h5>
		<h3 style="margin:0;">House of Representative</h5>
		<h5 style="margin:0;">Quezon City, Metro Manila</h5>
</div>');
$mpdf->SetHTMLFooter('
<table width="100%">
    <tr>
        <td width="33%">{DATE j-m-Y}</td>
        <td width="33%" align="center">
				    <img src="/system_image/logo.jpg" width = "30" /></td>
        <td width="33%" style="text-align: right;">Guarantee Letter</td>
    </tr>
</table>');
		ini_set('memory_limit','256M');
		$name = new ClientModel();
		$client = $name->where('id',$id)->first();
		$cname = $client['LastName'] . $client['FirstName'];
		$data=[
			'name'=> $name->where('id',$id)->first()
		];
		$html = view('Letter/GuaranteeLetter',$data);
		$mpdf->WriteHTML($html);
		$this->response->setHeader('Content-Type', 'application/pdf');
		$output = 'Guarantee Letter'.' '.$cname . ' ' . date('Y_m_d') . '_.pdf';
		$mpdf->Output($output , 'I');
	}

	 function pdfview($id = null)
	{

			// $dompdf = new \Dompdf\Dompdf();
$file = new FileUploadModel();
$files = $this->request->getFile('files');
$dompdf = new Dompdf();
     $dompdf->load_html($id);
     $dompdf->set_paper($this->paper, $this->orien);
     $dompdf->render();
     $dompdf->stream($files, array('Attachment' => false));
	}
}
