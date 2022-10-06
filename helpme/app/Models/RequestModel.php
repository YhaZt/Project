<?php

namespace App\Models;
use CodeIgniter\Model;

class RequestModel extends Model
{

    protected $table = 'request';
    protected $primaryKey = 'id';
    protected $allowedFields = [
      'client_id',
      'client_name',
      'email',
      'phone_no',
      'request',
      'client_files',
      'amount',
      'status',
      'reason',
    ];

}
