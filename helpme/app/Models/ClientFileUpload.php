<?php
namespace App\Models;
use CodeIgniter\Model;

class ClientFileUpload extends Model{
  protected $table = 'client_files';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'client_id',
    'files'
  ];
}
