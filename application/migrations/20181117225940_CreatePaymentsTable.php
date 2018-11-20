<?php
/**
 * Migration: CreatePaymentsTable
 *
 * Created by: Cli for CodeIgniter <https://github.com/kenjis/codeigniter-cli>
 * Created on: 2018/11/17 22:59:40
 */
class Migration_CreatePaymentsTable extends CI_Migration {

	public $tableName = "payments";

	public function up()
	{
		// Creating a table
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'payment_status_code' => array(
				'type' => 'VARCHAR',
				'constraint' => 15,
			),
			'payment_date' => array(
				'type' =>'DATETIME',
			),
			'payment_amount' => array(
				'type' => 'DOUBLE',
			),
			'reservation_id' => array(
				'type' => 'INT',
				'constraint' => 11
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
