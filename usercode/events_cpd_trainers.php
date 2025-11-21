<?php
class eventclass_cpd_trainers  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeAdd' => true,
	'BeforeEdit' => true,
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
		'dateupdated' => array(
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
		$values["provider"]=strtoupper($values["provider"]);


$str = $values["activity"]; 
for ($i=0; $i<strlen($str); $i++){ 
if ($i==0) { 
$b = True; 
} 
else 
$b = (substr($str, $i-1,1) == " "); 
if ($b) 
$str = substr($str,0,$i).strtoupper(substr($str, $i,1)).substr($str, $i+1); 
} 
$values["activity"] = $str; 

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["provider"]=strtoupper($values["provider"]);


$str = $values["activity"]; 
for ($i=0; $i<strlen($str); $i++){ 
if ($i==0) { 
$b = True; 
} 
else 
$b = (substr($str, $i-1,1) == " "); 
if ($b) 
$str = substr($str,0,$i).strtoupper(substr($str, $i,1)).substr($str, $i+1); 
} 
$values["activity"] = $str; 

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		header("Location: cpd_trainers_list.php");
exit();

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		header("Location: cpd_trainers_list.php");
exit();

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	public function default_dateupdated_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}	

}


?>