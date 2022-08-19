<?php
  namespace App\Controllers;
  use CodeIgniter\Controller;
  use App\Models\ClientModel;

  class ChartController extends Controller

  {
  public function graph(){
  $order = new ClientModel();
  // $all = $order->findAll();
  $all = $order->select('SUM total as total, town as town')->groupBy('total')->first();
  echo json_encode($all);

}
  }
