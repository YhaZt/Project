<?php
namespace App\Models;
use CodeIgniter\Model;
class AmountModel extends Model{
  protected $table = 'assistancetable';
  protected $primaryKey = 'aid';
  protected $allowedFields = [
    'clientID',
    'amount',
    'status',
  ];
}
