<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_categories'	=> [
				'type'			=>	'INT',
				'constraint'	=>	11,
				'unsigned'		=> true,
				'auto_increment'=>	true,
			],
			'name'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
		]);

		$this->forge->addKey('id_categories', true);

		$this->forge->createTable('categories', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('categories');
	}
}
