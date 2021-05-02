<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CustomerAccountSeeder extends Seeder
{
	public function run()
	{
		//
		$customer = [
                'id_customer'   => 1,
                'fname'         => 'super',
                'lname'         => 'admin',
                'company_name'  => '-',
                'position'      => '-',
                'st_address'    => '-',
                'city'          => '-',
                'state'         => '-',
                'country'       => '-',
                'post_code'     => 0,
                'phone'         => 0,
                'website'       => '-',
                'extension'     => '-',
                'fax'           => 0,
                'customer_group'=> 0,
                'created_at' 	=> date("Y-m-d h:i:s")
        ];
        $this->db->table('customer')->insert($customer);
		// $id = $this->db->table('customer')->getInsertID();
        $account = [
                'id_account'   => 1,
                'email'         => 'admin@furniture.com',
                'password'         => \password_hash('admin123', PASSWORD_DEFAULT),
                'role'  => 'su',
                'is_approve'      => 1,
                'allow_login'    => 1,
                'created_at' 	=> date("Y-m-d h:i:s")
        ];
        $this->db->table('customer_account')->insert($account);


	}
}
