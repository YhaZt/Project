<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\LoginModel;

class UserSeeder extends Seeder
{
	public function run()
	{
		$user_object = new LoginModel();

		$user_object->insertBatch([
			[
				"name" => "Pelita Lanto",
				"email" => "lantopelita@gmail.com",
				"phone_no" => "7899654125",
				"role" => "staff",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			],
			[
				"name" => "Toni Rose Lasic",
				"email" => "rose.lasic@gmail.com",
				"phone_no" => "8888888888",
				"role" => "staff",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			],
      [
        "name" => "Cong PA Umali",
        "email" => "alfonso.umali@house.gov.ph",
        "phone_no" => "7899654125",
        "role" => "admin",
        "password" => password_hash("12345678", PASSWORD_DEFAULT)
      ],
      [
  				"name" => "GP PARTY LIST",
  				"email" => "Test@gmail.com",
  				"phone_no" => "7899654125",
  				"role" => "admin",
  				"password" => password_hash("12345678", PASSWORD_DEFAULT)
  			]
		]);
	}
}
