<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_customer'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
				'unsigned'		=> true,
				'auto_increment'=>	true,
			],
			'fname'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
			'lname'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'position'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'company_name'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'st_address'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'city'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'state'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'country'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'post_code'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'phone'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	15,
			],
			'website'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
			'extension'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
			'fax'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
			'customer_group'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
			],
			'created_at'	=> [
				'type'			=>	'DATETIME',
			],
			'updated_at'	=> [
				'type'			=>	'DATETIME',
			],
		]);

		$this->forge->addKey('id_customer', true);

		$this->forge->createTable('customer', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('customer');
	}
}
