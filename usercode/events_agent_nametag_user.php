<?php
class eventclass_agent_nametag_user  extends TableEventsBase {
	
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
		'revoke_date' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'agency' => array(
			'edit' => true 
		),
		'agency_cea' => array(
			'edit' => true 
		),
		'name' => array(
			'edit' => true 
		),
		'biz_name' => array(
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
		'signature' => array(
			'edit' => true 
		) 
	) 
);
			}
		function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$str = $values["remarks"]; 
for ($i=0; $i<strlen($str); $i++){ 
if ($i==0) { 
$b = True; 
} 
else 
$b = (substr($str, $i-1,1) == " "); 
if ($b) 
$str = substr($str,0,$i).strtoupper(substr($str, $i,1)).substr($str, $i+1); 
} 
$values["remarks"] = $str; 

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$str = $values["remarks"]; 
for ($i=0; $i<strlen($str); $i++){ 
if ($i==0) { 
$b = True; 
} 
else 
$b = (substr($str, $i-1,1) == " "); 
if ($b) 
$str = substr($str,0,$i).strtoupper(substr($str, $i,1)).substr($str, $i+1); 
} 
$values["remarks"] = $str; 


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

public function default_agency_cea_efedit(  ) {
	$defaultValue = $_SESSION["agency_cea"];
return $defaultValue;
}

public function default_name_efedit(  ) {
	$defaultValue = $_SESSION["full_name"];
return $defaultValue;
}

public function default_biz_name_efedit(  ) {
	$defaultValue = $_SESSION["name"];
return $defaultValue;
}

public function default_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION["username"];
return $defaultValue;
}

public function custom_revoke_date_vfview( $value, $data ) {
	$color="red";
$value="<font color='$color'>$value</font>";;
return $value;
}

public function plugin_signature_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 100;
// signature field width
$this->settings["width"] = 300;
// signature background color
$this->settings["bgcolor"] = array(0xff, 0xff, 0xff);
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="files";
// signature pen color
$this->settings["color"] = "#000000";
// signature line width
$this->settings["linewidth"] = 2;;
return $this->settings;
}	

}


?>