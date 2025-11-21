<?php
class eventclass_prop_cust  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeShowView' => true,
	'BeforeShowPrint' => true,
	'AfterEdit' => true,
	'BeforeShowAdd' => true 
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
		function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
		if ($values["owner_type"]=="INDIVIDUAL")
{
$pageObject->hideItem("section_entity");
}
if ($values["owner_type"]=="ENTITY")
{
$pageObject->hideItem("section_individual");

}

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeShowPrint( &$xt, &$templatefile, $pageObject ) {
		/*
if ($values["owner_type"]=="INDIVIDUAL")
{
$xt->assign("country_incorporation_fieldblock",false);
$xt->assign("registration_fieldblock",false);
$xt->assign("reg_date_fieldblock",false);
$xt->assign("trade_fieldblock",false);
$xt->assign("office_tel_fieldblock",false);
$xt->assign("biz_email_fieldblock",false);
$xt->assign("contact_person_fieldblock",false);
$xt->assign("contact_person_id_fieldblock",false);
$xt->assign("destination_fieldblock",false);
$xt->assign("contact_person_cell_fieldblock",false);
$xt->assign("contact_email_fieldblock",false);
}
if ($values["owner_type"]=="ENTITY")
{
$xt->assign("nationality_fieldblock",false);
$xt->assign("gender_fieldblock",false);
$xt->assign("dob_fieldblock",false);
$xt->assign("occupation_fieldblock",false);
$xt->assign("nric_fieldblock",false);
$xt->assign("id_type_fieldblock",false);
$xt->assign("mobile_fieldblock",false);
}
*/
// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		if($values['owner_type']=="INDIVIDUAL")
{
CustomQuery("UPDATE prop_cust SET country_incorporation='',reg_date='',trade='',
office_tel='',biz_email='',contact_person='',contact_person_id='',destination='',
contact_person_cell='',contact_email='',remarks='' WHERE id='".$values["id"]."'");
}

if($values['owner_type']=="ENTITY")
{
CustomQuery("UPDATE prop_cust SET nationality='',gender='',dob='',
occupation='',tel='',mobile='',email='' WHERE id='".$values["id"]."'");
}


// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeShowAdd( &$xt, &$templatefile, $pageObject ) {
		$pageObject->hideItem("section_individual");
$pageObject->hideItem("section_entity");
$pageObject->hideItem("section_tx");
// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
		

}


?>