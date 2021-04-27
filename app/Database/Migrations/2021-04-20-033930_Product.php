<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_prod'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
				'unsigned'		=> true,
				'auto_increment'=>	true,
			],
			'item_code'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	12,
			],
			'name'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'id_categories'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
			],
			'measurment'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'weight'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	5,
			],
			'width'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	5,
			],
			'depth'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	5,
			],
			'height'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	5,
			],
			'spesification'	=> [
				'type'			=>	'TEXT',
			],
			'supplier'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'picture'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	255,
			],
			'price'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	20,
			],
			'stock'	=> [
				'type'			=>	'INT',
				'constraint'	=>	5,
			],
			'created_at'	=> [
				'type'			=>	'DATETIME',
			],
			'updated_at'	=> [
				'type'			=>	'DATETIME',
			],
		]);

		$this->forge->addKey('id_prod', true);

		$this->forge->createTable('product', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('product');
	}
}
