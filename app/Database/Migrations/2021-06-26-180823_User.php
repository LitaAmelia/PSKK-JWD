<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'username' => [
				'type' => 'INT',
				'constraint' => 255
			],
			'password' => [
				'type' => 'INT',
				'constraint' => 255
			],
			'role' => [
				'type' => 'ENUM',
				'constraint' => "'Admin','User'"
			],
			'status' => [
				'type' => 'ENUM',
				'constraint' => "'Active','Inactive'"
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => TRUE
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => TRUE
			]
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
