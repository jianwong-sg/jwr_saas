<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['my_profile'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'id_myprofile',
			'type' => 3,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'int',
			'nullable' => false,
			'autoinc' => true,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'id_myprofile' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'my_profile' 
);
?>