<?php
/**
 * Migration: CreateAircraftsTable
 *
 * Created by: Cli for CodeIgniter <https://github.com/kenjis/codeigniter-cli>
 * Created on: 2018/11/17 22:58:45
 */
class Migration_CreateAircraftsTable extends CI_Migration {

	public $tableName = "aircrafts";

	public function up()
	{
		// Creating a table
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'aircraft_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 45,
			),
			'vendor_id' => array(
				'type' =>'INT',
				'constraint' => 11,
			),
			'description' => array(
				'type' => 'TEXT',
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
