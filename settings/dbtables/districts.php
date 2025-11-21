<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['districts'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'ID',
			'type' => 3,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'int',
			'nullable' => false,
			'autoinc' => true,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'districts',
			'type' => 200,
			'size' => 300,
			'scale' => 0,
			'typeName' => 'varchar(300)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'ID' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'districts' 
);
?>