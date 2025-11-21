<?php
class eventclass_rental_main_detail_occupier  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeAdd' => true,
	'BeforeEdit' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'updatedate' => array(
			'edit' => true,
			'register' => true,
			'add' => true,
			'search' => true 
		) 
	),
	'autoUpdateValue' => array(
		'updatedate' => array(
			'edit' => true 
		) 
	),
	'uploadFolder' => array(
		 
	),
	'viewPluginInit' => array(
		 
	),
	'editPluginInit' => array(
		 
	) 
);
			}
		function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$values["occupier_name"]=strtoupper($values["occupier_name"]);
$values["occupier_id"]=strtoupper($values["occupier_id"]);
$values["occupier_occupation"]=strtoupper($values["occupier_occupation"]);
$values["occupier_relationship"]=strtoupper($values["occupier_relationship"]);
$values["occupier_nationality"]=strtoupper($values["occupier_nationality"]);
$values["occupier_gender"]=strtoupper($values["occupier_gender"]);
//Insert or update record in invcustomers
global $conn;
$strSQLExists = "SELECT * FROM invcustomers WHERE nric='".strtoupper($values["occupier_id"])."'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists); 
if($data)
{ 
// if record exists do something 
$sql = "Update invcustomers SET 
name='".strtoupper($values['occupier_name'])."',
occupation='".strtoupper($values['occupier_occupation'])."',
relationship='".strtoupper($values['occupier_relationship'])."',
nationality='".strtoupper($values['occupier_nationality'])."',
gender='".strtoupper($values['occupier_gender'])."',
doc_upload='".$values['file_upload']."',
updatedate='".$values['updatedate']."'
WHERE nric='".$values['occupier_id']."'";
CustomQuery($sql);
} 
else 
{ 
// if dont exist do something else 
$sql = "INSERT INTO invcustomers (name, nric, occupation, relationship,
nationality, gender, doc_upload, updatedate) values (
'".strtoupper($values["occupier_name"])."',
'".strtoupper($values["occupier_id"])."',
'".strtoupper($values["occupier_occupation"])."',
'".strtoupper($values["occupier_relationship"])."',
'".strtoupper($values["occupier_nationality"])."',
'".strtoupper($values["occupier_gender"])."',
'".$values["file_upload"]."',
'".$values["updatedate"]."'
)";
CustomQuery($sql);
} 

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["occupier_name"]=strtoupper($values["occupier_name"]);
$values["occupier_id"]=strtoupper($values["occupier_id"]);
$values["occupier_occupation"]=strtoupper($values["occupier_occupation"]);
$values["occupier_relationship"]=strtoupper($values["occupier_relationship"]);
$values["occupier_nationality"]=strtoupper($values["occupier_nationality"]);
$values["occupier_gender"]=strtoupper($values["occupier_gender"]);
//Insert or update record in invcustomers
global $conn;
$strSQLExists = "SELECT * FROM invcustomers WHERE nric='".strtoupper($values["occupier_id"])."'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists); 
if($data)
{ 
// if record exists do something 
$sql = "Update invcustomers SET 
name='".strtoupper($values['occupier_name'])."',
occupation='".strtoupper($values['occupier_occupation'])."',
relationship='".strtoupper($values['occupier_relationship'])."',
nationality='".strtoupper($values['occupier_nationality'])."',
gender='".strtoupper($values['occupier_gender'])."',
doc_upload='".$values['file_upload']."',
updatedate='".$values['updatedate']."'
WHERE nric='".$values['occupier_id']."'";
CustomQuery($sql);
} 
else 
{ 
// if dont exist do something else 
$sql = "INSERT INTO invcustomers (name, nric, occupation, relationship,
nationality, gender, doc_upload, updatedate) values (
'".strtoupper($values["occupier_name"])."',
'".strtoupper($values["occupier_id"])."',
'".strtoupper($values["occupier_occupation"])."',
'".strtoupper($values["occupier_relationship"])."',
'".strtoupper($values["occupier_nationality"])."',
'".strtoupper($values["occupier_gender"])."',
'".$values["file_upload"]."',
'".$values["updatedate"]."'
)";
CustomQuery($sql);
} 

return true;
		;
		return true;
	}
	public function default_updatedate_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function autoupdate_updatedate_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_updatedate_efregister(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_updatedate_efadd(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_updatedate_efsearch(  ) {
	$defaultValue = now();
return $defaultValue;
}	

}


?>