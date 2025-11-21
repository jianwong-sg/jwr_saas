<?php
class eventclass_rental_main  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeAdd' => true,
	'BeforeEdit' => true,
	'BeforeShowList' => true 
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
		'agent_cea' => array(
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
		$values["title"]=strtoupper($values["title"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["title"]=strtoupper($values["title"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function BeforeShowList( &$xt, &$templatefile, $pageObject ) {
		$xt->assign("agent_cea_fieldheadercolumn",false);
$xt->assign("total_fieldheader",false);
$xt->assign("agent_cea_fieldcolumn",false);

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	public function default_agent_cea_efedit(  ) {
	$defaultValue = $_SESSION["cea_reg"];
return $defaultValue;
}	

}


?>