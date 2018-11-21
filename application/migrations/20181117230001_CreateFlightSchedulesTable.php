<?php
/**
 * Migration: CreateFlightSchedulesTable
 *
 * Created by: Cli for CodeIgniter <https://github.com/kenjis/codeigniter-cli>
 * Created on: 2018/11/17 23:00:01
 */
class Migration_CreateFlightSchedulesTable extends CI_Migration {

	public $tableName = "flight_schedules";

	public function up()
	{
		// Creating a table
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'airport_id' => array(
				'type' => 'INT',
				'constraint' => 11,
			),
			'aircraft_id' => array(
				'type' => 'INT',
				'constraint' => 11,
			),
			'airport_destination_id' => array(
				'type' => 'INT',
				'constraint' => 11,
			),
			'depature_date_time' => array(
				'type' =>'DATETIME',
			),
			'arrival_date_time' => array(
				'type' =>'DATETIME',
			),
			'price' => array(
				'type' => 'DOUBLE',
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
