<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CustomerAccountSeeder extends Seeder
{
	public function run()
	{
		//
		$data = [
            [
                'id_customer'   => '1',
                'fname'         => 'super',
                'lname'         => 'admin',
                'company_name'  => '-',
                'position'      => '-',
                'st_address'    => '-',
                'city'          => '',
                'state'         => '',
                'country'       => '',
                'post_code'     => '-',
                'phone'         => '-',
                'website'       => '-',
                'extension'     => '-',
                'fax'           => '-',
                'customer_group'=> '',
                'created_at' 	=> date('Y-m-d h:i:s')
            ],
        ];
        $this->db->table('customer')->insert($data);
	}
}
