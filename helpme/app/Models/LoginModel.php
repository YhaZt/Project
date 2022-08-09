<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
	protected $table                = 'tbl_users';
	protected $primaryKey           = 'id';
	protected $allowedFields        = [
		"name",
		"email",
		"phone_no",
		"password",
		"role",
		"status",
		"token",
		"created_at"
	];

}
