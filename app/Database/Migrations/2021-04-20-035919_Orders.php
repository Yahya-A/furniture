<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_order'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
				'unsigned'		=> true,
				'auto_increment'=>	true,
			],
			'no_order'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	20,
			],
			'id_prod'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
			],
			'qty'	=> [
				'type'			=>	'INT',
				'constraint'	=>	5,
			],
			'total_price'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	20,
			],
			'order_type'	=> [
				'type'			=>	'ENUM',
				'constraint'	=>	['neworder', 'showroom'],
			],
			'date_order'	=> [
				'type'			=>	'DATETIME',
			],
			'date_accepted'	=> [
				'type'			=>	'DATETIME',
			],
			'status'	=> [
				'type'			=>	'ENUM',
				'constraint'	=>	['accept', 'cancel', 'pending'],
			],
			'id_customer'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
			],
		]);

		$this->forge->addKey('id_order', true);

		$this->forge->createTable('orders', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('orders');
	}
}
