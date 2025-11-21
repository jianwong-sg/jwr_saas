<?php
class eventclass_qualifications  extends TableEventsBase {
	
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
		'agent_name' => array(
			'edit' => true 
		),
		'cea_reg' => array(
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
		$values["descriptions"]=strtoupper($values["descriptions"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["descriptions"]=strtoupper($values["descriptions"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}
	public function default_agent_name_efedit(  ) {
	$defaultValue = $_SESSION["FullName"];
return $defaultValue;
}

public function default_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION['agentcea'];
return $defaultValue;
}	

}


?>