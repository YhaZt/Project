<?php

namespace App\Models;
use CodeIgniter\Model;

class RequestModel extends Model
{

    protected $table = 'request';
    protected $primaryKey = 'id';
    protected $allowedFields = [
      'client_name',
      'request',
      'client_files'
    ];

}
