<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pricing extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_price'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
				'unsigned'		=> true,
				'auto_increment'=>	true,
			],
			'customer_group'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	50,
			],
			'description'	=> [
				'type'			=>	'TEXT',
			],
			'rate'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	5
			],
		]);

		$this->forge->addKey('id_price', true);

		$this->forge->createTable('pricing', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('pricing');
	}
}
