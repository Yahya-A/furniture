<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LogsLogin extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'email'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
			'login_date'	=> [
				'type'			=>	'TIMESTAMP',
			],
			'ip_address'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	15
			],
			'browser'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
		]);

		$this->forge->createTable('logs_login', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('logs_login');
	}
}
