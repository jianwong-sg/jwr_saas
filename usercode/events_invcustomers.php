<?php
class eventclass_invcustomers  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeAdd' => true,
	'BeforeShowAdd' => true,
	'BeforeEdit' => true,
	'BeforeShowView' => true 
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
			'edit' => true,
			'add' => true,
			'search' => true 
		),
		'mobile' => array(
			'edit' => true 
		),
		'last_updated' => array(
			'edit' => true,
			'search' => true 
		),
		'country_incorporation' => array(
			'edit' => true 
		),
		'nationality' => array(
			'edit' => true 
		),
		'date_added' => array(
			'edit' => true,
			'add' => true,
			'search' => true 
		),
		'username' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'last_updated' => array(
			'edit' => true,
			'add' => true,
			'search' => true 
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
		function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$values["name"]=strtoupper($values["name"]);
$values["destination"]=strtoupper($values["destination"]);
$values["nric"]=strtoupper($values["nric"]);
//$values["co_reg"]=strtoupper($values["co_reg"]);
$values["occupation"]=strtoupper($values["occupation"]);
$values["address"]=strtoupper($values["address"]);
$values["billing_address"]=strtoupper($values["billing_address"]);
$values["trade"]=strtoupper($values["trade"]);
$values["contact_person"]=strtoupper($values["contact_person"]);
$values["contact_person_id"]=strtoupper($values["contact_person_id"]);
$values["email"]=strtoupper($values["email"]);
//$values["email_type"]=strtoupper($values["email_type"]);
$values["biz_email"]=strtoupper($values["biz_email"]);
$values["contact_email"]=strtoupper($values["contact_email"]);
$values["nationality"]=strtoupper($values["nationality"]);
$values["agency_address"]=strtoupper($values["agency_address"]);
$values["agency_name"]=strtoupper($values["agency_name"]);
$values["license_no"]=strtoupper($values["license_no"]);
$values["registration_no"]=strtoupper($values["registration_no"]);


return true;
		;
		return true;
	}

	function BeforeShowAdd( &$xt, &$templatefile, $pageObject ) {
		$pageObject->hideItem("contact_info_section");
$pageObject->hideItem("other_info_section");
$pageObject->hideItem("entity_info_section");
$pageObject->hideItem("agency_info_section");
// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["name"]=strtoupper($values["name"]);
$values["destination"]=strtoupper($values["destination"]);
$values["nric"]=strtoupper($values["nric"]);
$values["registration_no"]=strtoupper($values["registration_no"]);
$values["occupation"]=strtoupper($values["occupation"]);
$values["address"]=strtoupper($values["address"]);
$values["billing_address"]=strtoupper($values["billing_address"]);
$values["trade"]=strtoupper($values["trade"]);
$values["contact_person"]=strtoupper($values["contact_person"]);
$values["contact_person_id"]=strtoupper($values["contact_person_id"]);
$values["email"]=strtoupper($values["email"]);
//$values["email_type"]=strtoupper($values["email_type"]);
$values["biz_email"]=strtoupper($values["biz_email"]);
$values["contact_email"]=strtoupper($values["contact_email"]);
$values["nationality"]=strtoupper($values["nationality"]);
$values["agency_address"]=strtoupper($values["agency_address"]);
$values["agency_name"]=strtoupper($values["agency_name"]);
$values["license_no"]=strtoupper($values["license_no"]);


return true;
		;
		return true;
	}

	function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
		if ($values["cus_type"]=="INDIVIDUAL")
{
$pageObject->showItem("contact_info_section");
$pageObject->showItem("other_info_section");
$pageObject->hideItem("entity_info_section");
$pageObject->hideItem("agency_info_section");
}

if ($values["cus_type"]=="ENTITY")
{
$pageObject->showItem("contact_info_section");
$pageObject->hideItem("other_info_section");
$pageObject->showItem("entity_info_section");
$pageObject->hideItem("agency_info_section");
$xt->assign("nationality_fieldblock",false);
$xt->assign("nric_fieldblock",false);
$xt->assign("id_type_fieldblock",false);
$xt->assign("race_fieldblock",false);
$xt->assign("gender_fieldblock",false);
$xt->assign("date_of_birth_fieldblock",false);
$xt->assign("occupation_fieldblock",false);
$xt->assign("mobile_fieldblock",false);
$xt->assign("email_fieldblock",false);
//$xt->assign("email_type_fieldblock",false);
}

if ($values["cus_type"]=="SALESPERSON")
{
$pageObject->showItem("contact_info_section");
$pageObject->hideItem("other_info_section");
$pageObject->hideItem("entity_info_section");
$pageObject->showItem("agency_info_section");
$pageObject->hideItem("find_address_button");
$xt->assign("nationality_fieldblock",false);
$xt->assign("date_of_birth_fieldblock",false);
$xt->assign("occupation_fieldblock",false);
$xt->assign("address_fieldblock",false);
$xt->assign("postal_fieldblock",false);
}

//if ($values["tel"]==null)
//$pageObject->hideItem("other_info_section");
		;
		
	}
	public function default_email_efedit(  ) {
	$defaultValue = "no@email.com";
return $defaultValue;
}

public function default_email_efadd(  ) {
	$defaultValue = "no@email.com";
return $defaultValue;
}

public function default_email_efsearch(  ) {
	$defaultValue = "no@email.com";
return $defaultValue;
}

public function default_mobile_efedit(  ) {
	$defaultValue = 0;
return $defaultValue;
}

public function default_last_updated_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function autoupdate_last_updated_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function autoupdate_last_updated_efadd(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_last_updated_efsearch(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function autoupdate_last_updated_efsearch(  ) {
	$defaultValue = now();
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

public function default_date_added_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_date_added_efadd(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_date_added_efsearch(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_username_efedit(  ) {
	$defaultValue = $_SESSION["UserID"];
return $defaultValue;
}	

}


?>