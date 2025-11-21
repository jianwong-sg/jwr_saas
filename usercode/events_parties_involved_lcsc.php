<?php
class eventclass_parties_involved_lcsc  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeShowView' => true,
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
		'id_tx' => array(
			'edit' => true 
		),
		'category' => array(
			'edit' => true 
		),
		'tx_address' => array(
			'edit' => true 
		),
		'representing' => array(
			'edit' => true 
		),
		'marketing_rights' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'category' => array(
			'edit' => true 
		),
		'tx_address' => array(
			'edit' => true 
		),
		'representing' => array(
			'edit' => true 
		),
		'marketing_rights' => array(
			'edit' => true 
		) 
	),
	'uploadFolder' => array(
		 
	),
	'viewPluginInit' => array(
		 
	),
	'editPluginInit' => array(
		 
	) 
);
			}
		function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
		if ($values["cus_type"]=="INDIVIDUAL")
{
//$pageObject->showItem("personal_info");
$pageObject->hideItem("entity_section");
}

if ($values["cus_type"]=="ENTITY")
{
$pageObject->showItem("entity_section");
$pageObject->hideItem("nric");
$pageObject->hideItem("id_type");
$pageObject->hideItem("tel");
$pageObject->hideItem("tel_type");
$pageObject->hideItem("mobile");
$pageObject->hideItem("email");
//$pageObject->hideItem("email_type");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeMoveNextList( &$data, &$row, &$record, $recordId, $pageObject ) {
		$rstmp = CustomQuery("SELECT representing FROM transactions WHERE id='".$data["id_tx"]."'"); 
$datatmp = db_fetch_array($rstmp); 
if ($datatmp["representing"]==$data["role"]) 
{
$record["edit_link"] = false; } 
else 
{
$record["edit_link"] = true; 
}
		;
		
	}
	public function default_id_tx_efedit(  ) {
	$defaultValue = $_SESSION["id"];
return $defaultValue;
}

public function default_category_efedit(  ) {
	$defaultValue = $_SESSION["category"];
return $defaultValue;
}

public function autoupdate_category_efedit(  ) {
	$defaultValue = $_SESSION["category"];
return $defaultValue;
}

public function default_tx_address_efedit(  ) {
	$defaultValue = $_SESSION["prop_address"];
return $defaultValue;
}

public function autoupdate_tx_address_efedit(  ) {
	$defaultValue = $_SESSION["prop_address"];
return $defaultValue;
}

public function default_representing_efedit(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}

public function autoupdate_representing_efedit(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}

public function default_marketing_rights_efedit(  ) {
	$defaultValue = $_SESSION["marketingrights"];
return $defaultValue;
}

public function autoupdate_marketing_rights_efedit(  ) {
	$defaultValue = $_SESSION["marketingrights"];
return $defaultValue;
}	

}


?>