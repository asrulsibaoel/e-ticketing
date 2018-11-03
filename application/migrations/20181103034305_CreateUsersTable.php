<?php
/**
 * Migration: CreateUsersTable
 *
 * Created by: Cli for CodeIgniter <https://github.com/kenjis/codeigniter-cli>
 * Created on: 2018/11/03 03:43:05
 */
class Migration_CreateUsersTable extends CI_Migration {

	public static $tableName = "users";

	public function up()
	{
		// Creating a table
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
			),
			'name' => array(
				'type' =>'VARCHAR',
				'constraint' => 100,
				'null' => TRUE,
			),
			'email' => array(
				'type' => 'TEXT',
			),
			'password' => array(
				'type' => 'TEXT',
			),
			'address' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
			'phone_number' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table("users");

		// // Adding a Column to a Table
		// $fields = array(
		// 	'preferences' => array('type' => 'TEXT')
		// );
		// $this->dbforge->add_column('table_name', $fields);
	}

	public function down()
	{
		// Dropping a table
		$this->dbforge->drop_table('users');

		// // Dropping a Column From a Table
		// $this->dbforge->drop_column('table_name', 'column_to_drop');
	}

}
