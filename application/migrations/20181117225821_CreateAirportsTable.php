<?php
/**
 * Migration: CreateAirportsTable
 *
 * Created by: Cli for CodeIgniter <https://github.com/kenjis/codeigniter-cli>
 * Created on: 2018/11/17 22:58:21
 */
class Migration_CreateAirportsTable extends CI_Migration {

	public $tableName = "airports";

	public function up()
	{
		// Creating a table
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'airport_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
			),
			'airport_address' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
			'latitude' => array(
				'type' =>'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),
			'longitude' => array(
				'type' =>'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
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
