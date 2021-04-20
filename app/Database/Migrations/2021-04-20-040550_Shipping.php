<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Shipping extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_shipping'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
				'unsigned'		=> true,
				'auto_increment'=>	true,
			],
			'status'	=> [
				'type'			=>	'ENUM',
				'constraint'	=>	['pickup', 'ontheway', 'pending'],
			],
			'schedule'	=> [
				'type'			=>	'DATETIME',
			],
			'shipping_by'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
			'id_order'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
			],
		]);

		$this->forge->addKey('id_shipping', true);

		$this->forge->createTable('shipping');
	}

	public function down()
	{
		//
		$this->forge->dropTable('shipping');
	}
}
