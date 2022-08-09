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
    'Birthday',
    'Age',
    'Gender',
    'MobileNumber',
    'Occupation',
    'province',
    'town',
    'barangay',
    'sitio',
    'hono',
    'Purpose',
    'is_archive',
    'created_at'
  ];
}
