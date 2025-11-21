<?php
class eventclass_rental_main_properties  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeShowView' => true,
	'BeforeProcessEdit' => true 
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
		'agent' => array(
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
		function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
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

	function BeforeProcessEdit( $pageObject ) {
		global $strWhereClause,
$strTableName,$conn;
$str = "SELECT *
FROM eat_users WHERE username='".$_SESSION["UserID"]."'";
$rs = db_query($str,$conn);
$data = db_fetch_array($rs);
if ($data["UserID"]==$_SESSION["UserID"])
echo "";
$_SESSION["full_name"] = $data["full_name"];
$_SESSION["cea_reg"] = $data["username"];
$_SESSION["nric"] = $data["nric"];
$_SESSION["email"] = $data["email"];
$_SESSION["agency"] = $data["agency"];

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	public function default_agent_efedit(  ) {
	$defaultValue = $_SESSION["FullName"];
return $defaultValue;
}	

}


?>