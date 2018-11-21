<?php
/**
 * Migration: CreatePassengersTable
 *
 * Created by: Cli for CodeIgniter <https://github.com/kenjis/codeigniter-cli>
 * Created on: 2018/11/17 22:59:08
 */
class Migration_CreatePassengersTable extends CI_Migration {

	public $tableName = "passengers";

	public function up()
	{
		// Creating a table
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'first_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
			),
			'last_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
			),
			'phone_number' => array(
				'type' => 'VARCHAR',
				'constraint' => 15,
			),
			'email_address' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
			),
			'address_lines' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
			),
			'city' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
			),
			'province' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
			),
			'country' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
			),
			'user_id' => array(
				'type' =>'INT',
				'constraint' => 25,
			),
			'national_id' => array(
				'type' =>'VARCHAR',
				'constraint' => 50,
			),
			'reservation_id' => array(
				'type' =>'INT',
				'constraint' => 25,
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table($this->tableName);

//		// Adding a Column to a Table
//		$fields = array(
//			'preferences' => array('type' => 'TEXT')
//		);
//		$this->dbforge->add_column('table_name', $fields);
	}

	public function down()
	{
		// Dropping a table
		// $this->dbforge->drop_table($this->tableName);

//		// Dropping a Column From a Table
//		$this->dbforge->drop_column('table_name', 'column_to_drop');
	}

}
