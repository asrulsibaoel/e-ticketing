<?php
/**
 * Migration: CreateReservationDetailsTable
 *
 * Created by: Cli for CodeIgniter <https://github.com/kenjis/codeigniter-cli>
 * Created on: 2019/01/01 06:23:44
 */
class Migration_CreateReservationDetailsTable extends CI_Migration {

	public $tableName = "reservation_details";

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'passenger_id' => array(
				'type' => 'INT',
				'constraint' => 11,
			),
			'reservation_status_code' => array(
				'type' => 'INT',
				'constraint' => 2,
			),
			'ticket_type_code' => array(
				'type' =>'VARCHAR',
				'constraint' => '100',
				'default' => 'ekonomi',
			),
			'travel_class_code' => array(
				'type' =>'VARCHAR',
				'constraint' => '100',
				'default' => 'ekonomi',
			),
			'reservation_date' => array(
				'type' =>'DATETIME',
			),
			'flight_schedule_id' => array(
				'type' => 'INT',
				'constraint' => 25
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table($this->tableName);
	}

	public function down()
	{
//		// Dropping a table
//		$this->dbforge->drop_table('blog');

//		// Dropping a Column From a Table
//		$this->dbforge->drop_column('table_name', 'column_to_drop');
	}

}
