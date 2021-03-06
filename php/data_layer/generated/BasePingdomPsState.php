<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePingdomPsState extends Doctrine_Record
{

  public function setTableDefinition()
  {
    $this->setTableName('pingdom_ps_state');
    $this->hasColumn('id', 'integer', 4, array('alltypes' =>  array(  0 => 'integer', ), 'ntype' => 'int(10) unsigned', 'unsigned' => 1, 'values' =>  array(), 'primary' => true, 'notnull' => true, 'autoincrement' => true));
    $this->hasColumn('sensor_id', 'integer', 4, array('alltypes' =>  array(  0 => 'integer', ), 'ntype' => 'int(10) unsigned', 'unsigned' => 1, 'values' =>  array(), 'primary' => false, 'notnull' => true, 'autoincrement' => false));
    $this->hasColumn('state_type_id', 'integer', 4, array('alltypes' =>  array(  0 => 'integer', ), 'ntype' => 'int(10) unsigned', 'unsigned' => 1, 'values' =>  array(), 'primary' => false, 'notnull' => true, 'autoincrement' => false));
    $this->hasColumn('time_from', 'timestamp', null, array('alltypes' =>  array(  0 => 'timestamp', ), 'ntype' => 'datetime', 'values' =>  array(), 'primary' => false, 'notnull' => true, 'autoincrement' => false));
    $this->hasColumn('time_to', 'timestamp', null, array('alltypes' =>  array(  0 => 'timestamp', ), 'ntype' => 'datetime', 'values' =>  array(), 'primary' => false, 'notnull' => true, 'autoincrement' => false));
  }
  
	public function setUp(){		
		$this->hasOne('PingdomPsSensor as Sensor', array('local'=>'sensor_id', 'foreign'=>'id'));
		
		$this->hasMany('PingdomPsStatePost as StatePosts', array('local'=>'id',
												'foreign' => 'state_id'));		
	}


}