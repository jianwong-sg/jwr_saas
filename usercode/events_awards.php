<?php
class eventclass_awards  extends TableEventsBase {
	
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
		'agency' => array(
			'edit' => true 
		),
		'cea_reg' => array(
			'edit' => true 
		),
		'dateadded' => array(
			'edit' => true 
		),
		'name' => array(
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
		$values["third_party"]=strtoupper($values["third_party"]);
$values["descriptions"]=strtoupper($values["descriptions"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["third_party"]=strtoupper($values["third_party"]);
$values["descriptions"]=strtoupper($values["descriptions"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}
	public function default_agency_efedit(  ) {
	$defaultValue = $_SESSION["agency"];
return $defaultValue;
}

public function default_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION['agentcea'];
return $defaultValue;
}

public function default_dateadded_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_name_efedit(  ) {
	$defaultValue = $_SESSION["FullName"];
return $defaultValue;
}	

}


?>