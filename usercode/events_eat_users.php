<?php
class eventclass_eat_users  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeAdd' => true,
	'BeforeEdit' => true,
	'AfterAdd' => true,
	'OnPageLoad' => true,
	'AfterEdit' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'cut_to_agency' => array(
			'view' => true 
		),
		'salesperson_share' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		 
	),
	'autoUpdateValue' => array(
		 
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
		$values["username"]=strtoupper($values["username"]);
$values["full_name"]=strtoupper($values["full_name"]);
$values["biz_name"]=strtoupper($values["biz_name"]);
$values["email"]=strtoupper($values["email"]);
$values["bank_name"]=strtoupper($values["bank_name"]);
$values["home_address"]=strtoupper($values["home_address"]);
$values["nric"]=strtoupper($values["nric"]);
$values["destination"]=strtoupper($values["destination"]);



return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["full_name"]=strtoupper($values["full_name"]);
$values["biz_name"]=strtoupper($values["biz_name"]);
$values["email"]=strtoupper($values["email"]);
$values["bank_name"]=strtoupper($values["bank_name"]);
$values["home_address"]=strtoupper($values["home_address"]);
$values["nric"]=strtoupper($values["nric"]);
$values["username"]=strtoupper($values["username"]);
$values["destination"]=strtoupper($values["destination"]);


return true;
		;
		return true;
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		$key = '$jw6857r707';

global $conn;
$strSQLExists = "SELECT * FROM jwresour_aml11.users WHERE `username`='".$values['username']."'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists); 
if($data)
{ 
// if record exists do something 
CustomQuery("UPDATE jwresour_aml11.users SET `password`=HEX(AES_ENCRYPT('".$values['password']."', '".$key."'))
WHERE `username` = HEX(AES_ENCRYPT('".$values['username']."', '".$key."'))");
}
else{
$sql = "INSERT INTO jwresour_aml11.users (username, password, name_user) values
(HEX(AES_ENCRYPT('".$values['username']."', '".$key."')), HEX(AES_ENCRYPT('".$values['password']."', '".$key."')), 
('".strtoupper($values["full_name"])."'))";
CustomQuery($sql); 
}
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		$key = '$jw6857r707';

global $conn;
$strSQLExists = "SELECT * FROM jwresour_aml11.users WHERE `username`='".$values['username']."'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists); 
if($data)
{ 
// if record exists do something 
CustomQuery("UPDATE jwresour_aml11.users SET `password`=HEX(AES_ENCRYPT('".$values['password']."', '".$key."'))
WHERE `username` = HEX(AES_ENCRYPT('".$values['username']."', '".$key."'))");
}
else{
$sql = "INSERT INTO jwresour_aml11.users (username, password, name_user) values
(HEX(AES_ENCRYPT('".$values['username']."', '".$key."')), HEX(AES_ENCRYPT('".$values['password']."', '".$key."')), 
('".strtoupper($values["full_name"])."'))";
CustomQuery($sql); 
}


		;
		
	}
	public function custom_cut_to_agency_vfview( $value, $data ) {
	$value=$value."%";;
return $value;
}

public function custom_salesperson_share_vfview( $value, $data ) {
	$value=$value."%";;
return $value;
}	

}


?>