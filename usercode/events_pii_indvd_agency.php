<?php
class eventclass_pii_indvd_agency  extends TableEventsBase {
	
	function init() {
		$this->events = array(
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
		function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["policy_no"]=strtoupper($values["policy_no"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}
		

}


?>