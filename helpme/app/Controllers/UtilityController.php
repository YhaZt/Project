<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SitioModel;

class UtilityController extends BaseController
{

  public function addsitio()
  {
    return view('FirstDistrict/Utility/AddSitio');
  }

  public function store()
  {
    $municipality    = $this->request->getVar('municipality');
    if($municipality == '1'){
      $mun = "Baco";
    }
    if($municipality == '2'){
      $mun = "Bansud";
    }
    if($municipality == '3'){
      $mun = "Bongabong";
    }
    if($municipality == '4'){
      $mun = "Bulalacao";
    }
    if($municipality == '5'){
      $mun = "Calapan";
    }
    if($municipality == '6'){
      $mun = "Gloria";
    }
    if($municipality == '7'){
      $mun = "Mansalay";
    }
    if($municipality == '8'){
      $mun = "Naujan";
    }
    if($municipality == '9'){
      $mun = "Pinamalayan";
    }
    if($municipality == '10'){
      $mun = "Pola";
    }
    if($municipality == '11'){
      $mun = "Puerto Galera";
    }
    if($municipality == '12'){
      $mun = "Roxas";
    }
    if($municipality == '13'){
      $mun = "San Teodoro";
    }
    if($municipality == '14'){
      $mun = "Socorro";
    }
    if($municipality == '15'){
      $mun = "Victoria";
    }


    $municipality    = $this->request->getVar('municipality');
    $session = session();
    $data = [

      'province'         => $this->request->getVar('Province'),
      'town'             => $this->request->getVar('Town'),
      'town'             => $mun,
      'barangay'         => $this->request->getVar('barangay'),
      'sitio'            => $this->request->getVar('Sitio'),
      'hono'         => $this->request->getVar('HouseNumber'),
      'Purpose'          => $this->request->getVar('Purpose')
    ];
    // var_dump($data);
    $model = new SitioModel();
    $session->setFlashdata('msg', ' data added');
    $model->save($data);
    return redirect()->to('sitioadd');

  }
  public function sitio()
  {
    $br = $this->request->getVar('brgy');
    // $br = 'Managpi';
    $sm = new SitioModel();
    $sitio = $sm->where('barangay', $br)->findAll();
    echo json_encode($sitio);
  }
}
