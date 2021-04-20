<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inventory extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_prod'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
			],
			'product_status'	=> [
				'type'			=>	'ENUM',
				'constraint'	=>	['on_progress', 'in_warehouse'],
			],
		]);

		$this->forge->createTable('inventory', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('inventory');
	}
}
