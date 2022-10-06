<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClientModel;
use App\Models\RequestModel;
use App\Models\FileUploadModel;
use App\Models\AmountModel;
use App\Models\SitioModel;

class ClientController extends BaseController
{
  protected $session;

  public function postamount()
  {
    // $id = $this->request->getVar('id');
    $qty = $this->request->getVar('qty');
    $am = new ClientModel();
    $data = [
      // 'clientID' => $id,
      'amount'  => $qty,
      'is_archive'  => '1'
    ];
    // $am->save($data);
    $am->update($id, $data);
    // return $id
  }


  public function postcamount()
  {
    $id = $this->request->getVar('id');
    $qty = $this->request->getVar('qty');
    $am = new RequestModel();
    $data = [
      // 'clientID' => $id,
      'amount'  => $qty,
      'status'  => 'approve'
    ];
    // $am->save($data);
    $am->update($id, $data);
    // return $id
  }


  //di pa okay
  public function postdecline()
  {
    $id = $this->request->getVar('id');
    $qty = $this->request->getVar('qty');
    $am = new RequestModel();
    $data = [
      // 'clientID' => $id,
      'reason'  => $qty,
      'status'  => 'decline'
    ];
    $am->update($id, $data);
    return $id;
  }



  public function __construct()
  {
    $this->session = service('session');
  }
  public function archivelist()
  {
    $model = new ClientModel();
    $data['archive'] = $model->where('is_archive', 1)->orderBy('id', 'desc')->findAll();
    return view('client/clientarchive', $data);

  }
  public function single($id= null)
  {
    $file = new FileUploadModel();
    $name = new ClientModel();
    $client = $name->where('id', $id)->first();
    $cname= $client['LastName'] . $client['FirstName'];
    $data =[
      'client_files' => $file->where('clientID', $cname)->findAll(),
      'name' => $name->where('id',$id)->first(),
      'id' =>$id,
      'test' =>$client['id']
    ];
    // echo $cname;
// echo '<pre>';
// print_r($data);
// echo '<pre>';
    return view('upload-view', $data);
  }

  public function list()
  {
    $model = new ClientModel();
    $data = [
      'client_detail' => $model->where('is_archive', 0)->orderBy('id', 'desc')->findAll(),
      'archive' => $model->where('is_archive', 1)->orderBy('id', 'desc')->findAll()
    ];
    // echo '<pre>';
    // print_r($data);
    //   echo '</pre>';
    return view('client/clientlist', $data);

  }

  public function archive($id = null)
  {
    $model = new ClientModel();
    $data['archive'] = $model->update($id,['is_archive' => 1]);

    return redirect()->back()->withInput()->with('message', 'Item is archive.');
  }
  public function unarchive($id = null)
  {
    $model = new ClientModel();
    $data['archive'] = $model->update($id,['is_archive' => 0]);
    return redirect()->back()->withInput()->with('message', 'Item is unarchive.');
  }


  // public function viewadd(){
  //     return view('add');
  // }
  //
  // public function add(){
  //   $session = session();
  //   $data = [
  //     'name' => $this->request->getVar('name'),
  //     'age' =>$this->request->getVar('age'),
  //   ];
  //   $adds = new AddModel();
  //   $session->setFlashdata('msg', ' data added');
  //   $adds->save($data);
  //   return redirect()->to('/view');
  // }

  //
  // public function viewclient(){
  //   return view ('clientlist');
  // }
  public function addclient(){

    return view ('client/clientadd');
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
      'Representative'   => $this->request->getVar('Rep'),
      'FirstName'        => $this->request->getVar('FName'),
      'MiddleName'       => $this->request->getVar('MName'),
      'LastName'         => $this->request->getVar('LName'),
      'Birthday'         => $this->request->getVar('DOB'),
      'Age'              => $this->request->getVar('Age'),
      'Gender'           => $this->request->getVar('Gender'),
      'MobileNumber'     => $this->request->getVar('MNumber'),
      'Occupation'       => $this->request->getVar('Occupation'),
      'province'         => $this->request->getVar('Province'),
      'town'             => $this->request->getVar('Town'),
      'town'             => $mun,
      'barangay'         => $this->request->getVar('barangay'),
      'sitio'            => $this->request->getVar('sitio'),
      'hono'             => $this->request->getVar('HouseNumber'),
      'Diagnosis'        => $this->request->getVar('Diag'),
      'Hospital'         => $this->request->getVar('Hos'),
      'Purpose'          => $this->request->getVar('Purpose')
    ];
    // var_dump($data);
    $model = new ClientModel();
    $session->setFlashdata('msg', ' data added');
    $model->save($data);

    return redirect()->to('clientadd');
  }




  public function edit($id = null)
  {

    $model = new ClientModel();

    $data['client'] = $model->where('id', $id)->first();

    return view('client/clientedit', $data);
  }

  public function update()
  {

    $model = new ClientModel();

    $id = $this->request->getVar('id');

    $data = [
      'FirstName'       => $this->request->getVar('FName'),
      'MiddleName'      => $this->request->getVar('MName'),
      'LastName'        => $this->request->getVar('LName'),
      'Birthday'        => $this->request->getVar('DOB'),
      'Age'             => $this->request->getVar('Age'),
      'Gender'          => $this->request->getVar('Gender'),
      'MobileNumber'    => $this->request->getVar('MNumber'),
      'Occupation'      => $this->request->getVar('Occupation'),
      'province'         => $this->request->getVar('Province'),
      'town'             => $this->request->getVar('Town'),
      'barangay'         => $this->request->getVar('barangay'),
      'sitio'            => $this->request->getVar('Sitio'),
      'hono'         => $this->request->getVar('HouseNumber'),
      'Purpose'         => $this->request->getVar('Purpose')
    ];
    $model->update($id, $data);

    $session = session();
    $session->setFlashdata("success", "Client updated successfully");

    return redirect()->to( base_url('clientlist') );
  }
  //
  // public function delete($id = null){
  // $model = new ClientModel();
  // $data['user'] = $model->where('id', $id)->delete();
  // return redirect()->to( base_url('clientlist') );
  // }
  public function regam(){
  return view('client/amregistered');
  }
  public function regis()
  {
    $userModel = new RequestModel();
    $data['client_detail'] = $userModel->where('status', 'pending')->orderBy('id', 'DESC')->findAll();
    return view('client/registered',$data);
  }
  public function amregis()
  {
    $userModel = new RequestModel();
    $data['client_detail'] = $userModel->where('status', 'pending')->orderBy('id', 'DESC')->findAll();
    return view('client/amregistered',$data);
  }

  // public function decline($id = null)
  // {
  //   $model = new RequestModel();
  //   $data['client_detail'] = $model->update($id,['status' => 'decline']);
  //   return redirect()->back()->withInput()->with('message', 'Item is Declined.');
  // }

}

?>
