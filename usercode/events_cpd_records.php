<?php
class eventclass_cpd_records  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeMoveNextList' => true 
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
		function BeforeMoveNextList( &$data, &$row, &$record, $recordId, $pageObject ) {
		$rstmp = CustomQuery("SELECT sum(cpd_hour) FROM cpd_trainings WHERE cpd_recordid='".$data["id"]."'"); 
$datatmp = db_fetch_array($rstmp); 
$data["cpd_hour"] = $data["cpd_hour"];


// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
		

}


?>