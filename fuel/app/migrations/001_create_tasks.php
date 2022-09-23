<?php

namespace Fuel\Migrations;

class Create_tasks
{
	public function up()
	{
		\DBUtil::create_table('tasks', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'title' => array('constraint' => 50, 'null' => false, 'type' => 'varchar'),
			'body' => array('null' => false, 'type' => 'text'),
			'created_at' => array('null' => true, 'type' => 'timestamp'),
			'updated_at' => array('null' => true, 'type' => 'timestamp'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('tasks');
	}
}