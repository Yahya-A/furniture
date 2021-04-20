<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MessageBoard extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_message'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
				'unsigned'		=> true,
				'auto_increment'=>	true,
			],
			'id_order'	=> [
				'type'			=>	'INT',
				'constraint'	=>	12,
			],
			'message'	=> [
				'type'			=>	'TEXT',
			],
			'reply'	=> [
				'type'			=>	'TEXT',
			],
		]);

		$this->forge->addKey('id_message', true);

		$this->forge->createTable('message_board');
	}

	public function down()
	{
		//
		$this->forge->dropTable('message_board');
	}
}
