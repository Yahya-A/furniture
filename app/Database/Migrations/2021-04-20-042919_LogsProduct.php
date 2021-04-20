<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LogsProduct extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_prod'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
			],
			'id_customer'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
			],
			'date_viewed'	=> [
				'type'			=>	'TIMESTAMP',
			],
			'ip_address'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	15,
			],
			'browser'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
		]);

		$this->forge->createTable('logs_product', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('logs_product');
	}
}
