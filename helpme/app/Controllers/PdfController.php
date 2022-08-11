<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClientModel;
use Mpdf\Mpdf;
require_once 'vendor/autoload.php';

class PdfController extends BaseController
{
	 function letter($id = null)
	{
		$mpdf = new \Mpdf\Mpdf();

		$mpdf->SetHTMLHeader('
<div style="text-align: center; font-weight: bold;">
    <img src="/system_image/logo.jpg" width = "50" />
		<h5 style="margin:0;">House of Representative</h5>
		<h5 style="margin:0;">House of Representative</h5>
		<h5 style="margin:0;">House of Representative</h5>
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
}
