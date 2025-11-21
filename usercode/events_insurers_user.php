<?php
class eventclass_insurers_user  extends TableEventsBase {
	
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
		$values["company_name"]=strtoupper($values["company_name"]);
$values["email"]=strtoupper($values["email"]);
$values["address"]=strtoupper($values["address"]);
$values["contact_person"]=strtoupper($values["contact_person"]);


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["company_name"]=strtoupper($values["company_name"]);
$values["email"]=strtoupper($values["email"]);
$values["address"]=strtoupper($values["address"]);
$values["contact_person"]=strtoupper($values["contact_person"]);


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}
		

}


?>