<?php
namespace App\Models;
use CodeIgniter\Model;

class ClientLogModel extends Model{
  protected $table = 'client';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'FirstName',
    'MiddleName',
    'LastName',
    'Age',
    'Gender',
    'MobileNumber',
    'Occupation',
    'Address',
    'Purpose',
		'created_at'
  ];
}
