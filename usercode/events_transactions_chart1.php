<?php
class eventclass_transactions_chart1  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeShowChart' => true 
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
		function BeforeShowChart( &$xt, &$templatefile, $pageObject ) {
		$xt->assign("footer",false);

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
		

}


?>