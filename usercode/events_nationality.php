<?php
class eventclass_nationality  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeInsert' => true,
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
		function BeforeInsert( &$rawvalues, &$values, $pageObject, &$message ) {
		$values["nationality"]=strtoupper($values["nationality"]);
return true;
		;
		return true;
	}

	function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$values["nationality"]=strtoupper($values["nationality"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["nationality"]=strtoupper($values["nationality"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}
		

}


?>