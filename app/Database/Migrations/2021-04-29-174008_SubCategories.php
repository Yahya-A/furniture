<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SubCategories extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'	=> [
				'type'			=>	'INT',
				'constraint'	=>	11,
				'unsigned'		=> true,
				'auto_increment'=>	true,
			],
			'id_categories'	=> [
				'type'			=>	'INT',
				'constraint'	=>	11,
			],
			'sub_category'	=> [
				'type'			=>	'VARCHAR',
				'constraint'	=>	100,
			],
			'created_at'	=> [
				'type'			=>	'DATETIME',
			],
			'updated_at'	=> [
				'type'			=>	'DATETIME',
			],
		]);

		$this->forge->addKey('id', true);

		$this->forge->createTable('sub_categories', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('sub_categories');
	}
}
