<?php
  namespace App\Controllers;
  use CodeIgniter\Controller;
  use App\Models\ClientModel;

  class ChartController extends Controller

  {
  public function graph(){
  $order = new ClientModel();
  // $all = $order->findAll();
  $all = $order->select('(select count(*)) as total, town as town')->findAll();
  // echo json_encode($all);
  echo '<pre>';
  print_r($all);
    echo '</pre>';
}*
  }
