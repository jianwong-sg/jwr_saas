<?php
class eventclass_eat_users_user  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeAdd' => true,
	'BeforeEdit' => true,
	'OnPageLoad' => true,
	'BeforeShowEdit' => true,
	'BeforeShowView' => true 
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
		$values["full_name"]=strtoupper($values["full_name"]);
$values["biz_name"]=strtoupper($values["biz_name"]);
$values["email"]=strtoupper($values["email"]);
$values["bank_name"]=strtoupper($values["bank_name"]);
$values["home_address"]=strtoupper($values["home_address"]);
$values["nric"]=strtoupper($values["nric"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

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

	function BeforeShowEdit( &$xt, &$templatefile, $values, $pageObject ) {
		if($_SESSION["GroupID"]!="account admin") {
$pageObject->hideItem("user_group");
$pageObject->hideItem("user_status");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
		if($_SESSION["GroupID"]!="account admin") {
$pageObject->hideItem("user_group");
$pageObject->hideItem("user_status");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
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