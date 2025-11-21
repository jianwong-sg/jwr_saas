<?php
class eventclass_properties_owner  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeShowAdd' => true,
	'BeforeShowView' => true,
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
		'email' => array(
			'edit' => true 
		),
		'mobile' => array(
			'edit' => true 
		),
		'country_incorporation' => array(
			'edit' => true 
		),
		'nationality' => array(
			'edit' => true 
		),
		'email_type' => array(
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
		function BeforeShowAdd( &$xt, &$templatefile, $pageObject ) {
		$pageObject->hideItem("section_individual");
$pageObject->hideItem("section_entity");
$pageObject->hideItem("section_tx");
// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
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
	public function default_email_efedit(  ) {
	$defaultValue = "no@email.com";
return $defaultValue;
}

public function default_mobile_efedit(  ) {
	$defaultValue = 0;
return $defaultValue;
}

public function default_country_incorporation_efedit(  ) {
	$defaultValue = "SINGAPORE";
return $defaultValue;
}

public function default_nationality_efedit(  ) {
	$defaultValue = "SINGAPOREAN";
return $defaultValue;
}

public function default_email_type_efedit(  ) {
	$defaultValue = "NA";
return $defaultValue;
}	

}


?>