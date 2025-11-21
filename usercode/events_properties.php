<?php
class eventclass_properties  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeAdd' => true,
	'BeforeEdit' => true,
	'BeforeShowView' => true,
	'BeforeShowPrint' => true 
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
		'agentid' => array(
			'edit' => true 
		),
		'land_size_unit' => array(
			'edit' => true 
		),
		'builtup_unit' => array(
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
		$values["prop_address"]=strtoupper($values["prop_address"]);
$values["prop_name"]=strtoupper($values["prop_name"]);

//empty unwanted fields value
if($values['types']=="HDB APARTMENT")
{
CustomQuery("UPDATE properties SET land_size='',land_size_unit='' WHERE id='".$values["id"]."'");
}

if($values['types']=="APARTMENT / CONDO")
{
CustomQuery("UPDATE properties SET land_size='',land_size_unit='',hdb_town='',hdb_scheme='' 
WHERE id='".$values["id"]."'");
}

if($values['types']=="LAND")
{
CustomQuery("UPDATE properties SET hdb_town='',hdb_scheme='',prop_name='',builtup='',
builtup_unit='',year_built='',TOP='' WHERE id='".$values["id"]."'");
}

if($values['types']=="LANDED HOUSE")
{
CustomQuery("UPDATE properties SET hdb_town='',hdb_scheme='',prop_name='' 
WHERE id='".$values["id"]."'");
}

if($values['types']=="RETAIL")
{
CustomQuery("UPDATE properties SET hdb_town='',hdb_scheme='',land_size='',land_size_unit='' 
WHERE id='".$values["id"]."'");
}

if($values['types']=="OFFICE")
{
CustomQuery("UPDATE properties SET hdb_town='',hdb_scheme='',land_size='',land_size_unit='' 
WHERE id='".$values["id"]."'");
}

if($values['types']=="INDUSTRIAL")
{
CustomQuery("UPDATE properties SET hdb_town='',hdb_scheme='',prop_name='' 
WHERE id='".$values["id"]."'");
}

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["prop_address"]=strtoupper($values["prop_address"]);
$values["prop_name"]=strtoupper($values["prop_name"]);

//empty unwanted fields value
if($values['types']=="HDB APARTMENT")
{
CustomQuery("UPDATE properties SET land_size='',land_size_unit='' WHERE id='".$values["id"]."'");
}

if($values['types']=="APARTMENT / CONDO")
{
CustomQuery("UPDATE properties SET land_size='',land_size_unit='',hdb_town='',hdb_scheme='' 
WHERE id='".$values["id"]."'");
}

if($values['types']=="LAND")
{
CustomQuery("UPDATE properties SET hdb_town='',hdb_scheme='',prop_name='',builtup='',
builtup_unit='',year_built='',TOP='' WHERE id='".$values["id"]."'");
}

if($values['types']=="LANDED HOUSE")
{
CustomQuery("UPDATE properties SET hdb_town='',hdb_scheme='',prop_name='' 
WHERE id='".$values["id"]."'");
}

if($values['types']=="RETAIL")
{
CustomQuery("UPDATE properties SET hdb_town='',hdb_scheme='',land_size='',land_size_unit='' 
WHERE id='".$values["id"]."'");
}

if($values['types']=="OFFICE")
{
CustomQuery("UPDATE properties SET hdb_town='',hdb_scheme='',land_size='',land_size_unit='' 
WHERE id='".$values["id"]."'");
}

if($values['types']=="INDUSTRIAL")
{
CustomQuery("UPDATE properties SET hdb_town='',hdb_scheme='',prop_name='' WHERE id='".$values["id"]."'");
}

return true;
		;
		return true;
	}

	function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
		if ($values["types"]=="HDB APARTMENT")
{
$xt->assign("land_size",false);
$pageObject->hideItem("land_size_unit");

}

if ($values["types"]=="APARTMENT / CONDO")
{
$xt->assign("land_size",false);
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);
$pageObject->hideItem("land_size_unit"); 

}

if ($values["types"]=="LAND")
{
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);
$xt->assign("prop_name",false);
$xt->assign("builtup",false);
$xt->assign("year_built",false);
$xt->assign("TOP",false);
$pageObject->hideItem("builtup_unit");
}

if ($values["types"]=="LANDED HOUSE")
{
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);
}

if ($values["types"]=="RETAIL")
{
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);
$xt->assign("land_size",false);
$pageObject->hideItem("land_size_unit");

}

if ($values["types"]=="OFFICE")
{
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);
$xt->assign("land_size",false);
$pageObject->hideItem("land_size_unit");
 
}

if ($values["types"]=="INDUSTRIAL")
{
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);

}

if ($values["types"]=="ROOM")
{
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);
$xt->assign("prop_name",false);
//$xt->assign("builtup",false);
$xt->assign("year_built",false);
$xt->assign("TOP",false);
$xt->assign("photos",false);
//$pageObject->hideItem("builtup_unit");
}
// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeShowPrint( &$xt, &$templatefile, $pageObject ) {
		if ($values["types"]=="HDB APARTMENT")
{
$xt->assign("land_size",false);
}

if ($values["types"]=="APARTMENT / CONDO")
{
$xt->assign("land_size",false);
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);
}

if ($values["types"]=="LAND")
{
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);
$xt->assign("prop_name",false);
$xt->assign("builtup",false);
$xt->assign("year_built",false);
$xt->assign("TOP",false);
}

if ($values["types"]=="LANDED HOUSE")
{
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);
}

if ($values["types"]=="RETAIL")
{
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);
$xt->assign("land_size",false);
}

if ($values["types"]=="OFFICE")
{
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);
$xt->assign("land_size",false);
}

if ($values["types"]=="INDUSTRIAL")
{
$xt->assign("hdb_town",false);
$xt->assign("hdb_scheme",false);

}

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	public function default_agentid_efedit(  ) {
	$defaultValue = $_SESSION["UserID"];
return $defaultValue;
}

public function default_land_size_unit_efedit(  ) {
	$defaultValue = "Sqf";
return $defaultValue;
}

public function default_builtup_unit_efedit(  ) {
	$defaultValue = "Sqf";
return $defaultValue;
}	

}


?>