<?php
namespace App\Models;
use CodeIgniter\Model;

class DatatableModel extends Model{
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
    'Province',
    'Town',
    'Barangay',
    'Sitio',
    'House_no',
    'Purpose'
  ];
}
