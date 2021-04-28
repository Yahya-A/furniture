<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CustomerAccount extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_account'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
			],
			'email'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
			'password'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	255,
			],
			'role'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	20,
			],
			'is_approve'	=> [
				'type'			=>	'ENUM',
				'constraint'	=>	['1', '0'],
			],
			'allow_login'	=> [
				'type'			=>	'ENUM',
				'constraint'	=>	['1', '0'],
			],
			'created_at'	=> [
				'type'			=>	'DATETIME',
			],
			'updated_at'	=> [
				'type'			=>	'DATETIME',
			],
		]);

		$this->forge->addKey('id_account', true);

		$this->forge->createTable('customer_account', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('customer_account');
	}
}
