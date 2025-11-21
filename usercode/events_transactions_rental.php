<?php
class eventclass_transactions_rental  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeShowView' => true,
	'OnPageLoad' => true,
	'BeforeQueryList' => true 
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
		'cea_reg' => array(
			'edit' => true 
		),
		'date' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'cea_reg' => array(
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
		//hide cdd check result
if($values['sls_result']=="")
{
$pageObject->hideItem("text1");
$pageObject->hideItem("integrated_edit_field47");
$pageObject->hideItem("integrated_edit_field48");
$pageObject->hideItem("integrated_edit_field49");
$pageObject->hideItem("integrated_edit_field50");
}

//hide details based on cdd results
if ($values["cdd_result"]=="")
{
$xt->assign("details_cdd_measures",false);
$xt->assign("details_pps_check",false);
$xt->assign("details_un_sanction_check",false);
$xt->assign("details_str",false);
}
//end hide

$xt->assign("edit_button", true);
$xt->assign("send_button", true);
$xt->assign("buttons-container1", true);

if( $_SESSION["UserID"] == "Guest")
{
$xt->assign("back_button", false);
$xt->assign("edit_button", false);
$xt->assign("send_button", false);
}
//hide edit if status close
if($values["status_status"]=="Complete")
$xt->assign("edit_button", false);
//end hide

$xt->assign("editid1_value", $values['id']);



if (!$values["land"])
$pageObject->hideField("land_unit");

if (!$values["built_up"])
$pageObject->hideField("built_up_unit");
		;
		
	}

	function BeforeQueryList( &$strSQL, &$strWhereClause, &$strOrderBy, $pageObject ) {
		if (@$_REQUEST["a"]!="search" && @$_REQUEST["a"]!="advsearch" && @$_REQUEST["a"]!="showall")
$strWhereClause = whereAdd($strWhereClause,"category='RENTAL'");

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	public function default_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION["cea_reg"];
return $defaultValue;
}

public function autoupdate_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION["cea_reg"];
return $defaultValue;
}

public function default_date_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}	

}


?>