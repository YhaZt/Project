<?php
namespace App\Models;
use CodeIgniter\Model;

class AddModel extends Model{
  protected $table = 'add';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'name',
    'age'
  ];
}
