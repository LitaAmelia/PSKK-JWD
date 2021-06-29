<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'nisn' => [
				'type' => 'INT',
				'constraint' => 10
			],
			'tempat_lahir' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'tgl_lahir' => [
				'type' => 'DATE',
				'null' => TRUE
			],
			'jenis_kelamin' => [
				'type' => 'ENUM',
				'constraint' => "'Pria','Wanita'"
			],
			'agama' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'sekolah_asal' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'nilai_mtk' => [
				'type' => 'INT',
				'constraint' => 255
			],
			'nilai_inggris' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'foto' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'status' => [
				'type' => 'ENUM',
				'constraint' => "'Diterima','Cadangan','Tidak Diterima', 'Menunggu'"
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
		$this->forge->addKey('nisn', TRUE);
		$this->forge->createTable('siswa');
	}

	public function down()
	{
		$this->forge->dropTable('siswa');
	}
}
