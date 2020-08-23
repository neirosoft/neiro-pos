<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblUser extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_user'            => [
				'type'              => 'INT',
				'constraint'        => 11,
				'unsigned'          => TRUE,
				'auto_increment'    => TRUE
			],
			'username'              => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'name'                  => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'email'                 => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'password'              => [
				'type'              => 'VARCHAR',
				'constraint'        => '255',
			],
			'f_status'                => [
				'type'              => 'INT',
				'constraint'        => 11,
				'default'           => 1
			],
			'f_level'                 => [
				'type'              => 'INT',
				'constraint'        => 11,
				'default'           => 1
			],
		]);
		$this->forge->addKey('id_user', TRUE);
		$this->forge->createTable('tbl_user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
