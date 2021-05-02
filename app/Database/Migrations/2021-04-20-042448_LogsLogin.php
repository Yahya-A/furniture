<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LogsLogin extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'	=> [
				'type'			=>	'INT',
				'constraint'	=>	100,
				'unsigned'		=> true,
				'auto_increment'=>	true,
			],
			'email'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
			'login_date'	=> [
				'type'			=>	'BIGINT',
			],
			'ip_address'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	15
			],
			'browser'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
			'created_at'	=> [
				'type'			=>	'DATETIME',
			],
			'updated_at'	=> [
				'type'			=>	'DATETIME',
			],
		]);

		$this->forge->addKey('id', true);

		$this->forge->createTable('logs_login', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('logs_login');
	}
}
