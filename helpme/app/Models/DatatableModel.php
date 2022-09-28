<?php
namespace App\Models;
use CodeIgniter\Model;

class DatatableModel extends Model{
  protected $table = 'client';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'Representative',
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
    'Diagnosis',
    'Hospital',
    'Purpose',
    'is_archive',
    'created_at'
  ];
}
