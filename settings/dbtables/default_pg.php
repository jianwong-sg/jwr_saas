<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['default_pg'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'id',
			'type' => 3,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'int',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'page',
			'type' => 200,
			'size' => 1000,
			'scale' => 0,
			'typeName' => 'varchar(1000)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'default_pg' 
);
?>