<?php
class eventclass_agency  extends TableEventsBase {
	
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
		'agency_name' => array(
			'edit' => true 
		),
		'agency_cea_reg' => array(
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
		function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$values["agency_address"]=strtoupper($values["agency_address"]);
//$values["agency_cea_reg"]=strtoupper($values["agency_cea_reg"]);
$values["url"]=strtoupper($values["url"]);
$values["agency_email"]=strtoupper($values["agency_email"]);
//$values["agency_name"]=strtoupper($values["agency_name"]);

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["agency_address"]=strtoupper($values["agency_address"]);
//$values["agency_cea_reg"]=strtoupper($values["agency_cea_reg"]);
$values["url"]=strtoupper($values["url"]);
$values["agency_email"]=strtoupper($values["agency_email"]);
//$values["agency_name"]=strtoupper($values["agency_name"]);


return true;
		;
		return true;
	}
	public function default_agency_name_efedit(  ) {
	$defaultValue = $_SESSION["Agency"];
return $defaultValue;
}

public function default_agency_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION["AgencyCEA"];
return $defaultValue;
}	

}


?>