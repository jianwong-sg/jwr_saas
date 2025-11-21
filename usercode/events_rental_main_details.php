<?php
class eventclass_rental_main_details  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeProcessAdd' => true,
	'AfterAdd' => true,
	'AfterEdit' => true 
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
		'agent_email' => array(
			'edit' => true 
		),
		'lease_no' => array(
			'edit' => true 
		),
		'reminder' => array(
			'edit' => true 
		) 
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
		function BeforeProcessAdd( $pageObject ) {
		global $strTableName;
if ($_SESSION[$strTableName."_masterkey1"]){
$rstmp = CustomQuery("SELECT max(lease_no) as `m` FROM rental_main_details WHERE id_prop_info=".$_SESSION[$strTableName."_masterkey1"]);
$datatmp = db_fetch_array($rstmp);
if (!$datatmp["m"])
$datatmp["m"] = 0;
$_SESSION["lease_no"] = $datatmp["m"]+1;
}
// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		global $conn;
 $sql = "UPDATE invcustomers SET email='".strtoupper($values['send_reminder_email'])."' WHERE name = '".$values['tenant']."'";
 CustomQuery($sql);
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		global $conn;
 $sql = "UPDATE invcustomers SET email='".strtoupper($values['send_reminder_email'])."' WHERE name = '".$values['tenant']."'";
 CustomQuery($sql);
		;
		
	}
	public function default_agent_email_efedit(  ) {
	$defaultValue = $_SESSION["email"];
return $defaultValue;
}

public function default_lease_no_efedit(  ) {
	$defaultValue = $_SESSION["lease_no"];
return $defaultValue;
}

public function default_reminder_efedit(  ) {
	$defaultValue = "Yes";
return $defaultValue;
}	

}


?>