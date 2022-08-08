<?php
namespace App\Models;
use CodeIgniter\Model;

class FileUploadModel extends Model{
  protected $table = 'client_files';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'clientID',
    'files'
  ];
}
