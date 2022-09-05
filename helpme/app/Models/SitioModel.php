<?php

namespace App\Models;
use CodeIgniter\Model;

class SitioModel extends Model
{

    protected $table = 'sitio';
    protected $primaryKey = 'id';
    protected $allowedFields = [
      'province',
      'town',
      'barangay',
      'sitio'
    ];

}
