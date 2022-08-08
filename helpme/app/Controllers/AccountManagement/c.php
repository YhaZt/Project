<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClientModel;
use App\Models\AddModel;


class ClientController extends BaseController
{
  protected $session;
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

public function list()
{
    $model = new ClientModel();
    $data['client_detail'] = $model->where('is_archive', 0)->orderBy('id', 'desc')->findAll();
    $data['archive'] = $model->where('is_archive', 1)->orderBy('id', 'desc')->findAll();
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
    $FirstName       = $this->request->getVar('FName');
    $MiddleName      = $this->request->getVar('MName');
    $LastName        = $this->request->getVar('LName');
    $Birthday        = $this->request->getVar('DOB');
    $Age             = $this->request->getVar('Age');
    $Gender          = $this->request->getVar('Gender');
    $MobileNumber    = $this->request->getVar('MNumber');
    $Occupation      = $this->request->getVar('Occupation');
    $Province        = $this->request->getVar('Province');
    $municipality = $this->request->getVar('municipality');
    $Town            = $this->request->getVar('Town');
    $Barangay        = $this->request->getVar('Barangay');
    $Sitio           = $this->request->getVar('Sitio');
    $House_No        = $this->request->getVar('HouseNumber');
    $Purpose         = $this->request->getVar('Purpose');

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
          $rules = [
              'MNumber'      => 'required|regex_match[/^[0-9]{4}-[0-9]{3}-[0-9]{4}$/]'
          ];
          if($this->validate($rules))
          {

            $municipality    = $this->request->getVar('municipality');
            $FirstName       = $this->request->getVar('FName');
            $MiddleName      = $this->request->getVar('MName');
            $LastName        = $this->request->getVar('LName');
            $Birthday        = $this->request->getVar('DOB');
            $Age             = $this->request->getVar('Age');
            $Gender          = $this->request->getVar('Gender');
            $MobileNumber    = $this->request->getVar('MNumber');
            $Occupation      = $this->request->getVar('Occupation');
            $province        = $this->request->getVar('Province');
            $town            = $this->request->getVar('Town');
            $barangay        = $this->request->getVar('Barangay');
            $Sitio           = $this->request->getVar('Sitio');
            $hono        = $this->request->getVar('HouseNumber');
            $Purpose         = $this->request->getVar('Purpose');
            $session = session();
            $data = [
                'FirstName'        =>   $FName,
                'MiddleName'       =>   $MName,
                'LastName'         =>   $LName,
                'Birthday'         =>   $DOB,
                'Age'              =>   $Age,
                'Gender'           =>   $Gender,
                'MobileNumber'     =>   $MNumber,
                'Occupation'       =>   $Occupation,
                'Province'         =>   $Province,
                'Town'             =>   $mun,
                'Barangay'         =>   $Barangay,
                'Sitio'            =>   $Sitio,
                'House_No'         =>   $HouseNumber,
                'Purpose'          =>   $Purpose

            ];
            // var_dump($data);
      $model = new ClientModel();
      $session->setFlashdata('msg', ' data added');
      mkdir("Client Files/".$this->request->getVar('LName') . ' ' .$this->request->getVar('FName'), "0777");
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
       'Province'         => $this->request->getVar('Province'),
       'Town'         => $this->request->getVar('Town'),
       'Barangay'         => $this->request->getVar('Barangay'),
       'Sitio'         => $this->request->getVar('Sitio'),
       'House_No'         => $this->request->getVar('HouseNumber'),
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



}

?>
