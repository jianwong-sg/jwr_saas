<?php
class eventclass_parties_involved_count  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeAdd' => true,
	'AfterAdd' => true,
	'AfterEdit' => true,
	'BeforeShowAdd' => true,
	'BeforeShowEdit' => true,
	'BeforeShowView' => true,
	'BeforeEdit' => true,
	'BeforeProcessAdd' => true,
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
		'category' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'category' => array(
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
		function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$values["billing_address"]=strtoupper($values["billing_address"]);

return true;
		;
		return true;
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		if($values['cus_type'] == 'ENTITY')
{
    global $conn;
    $strSQLUpdate = "UPDATE parties_involved SET nric = '".$values['registration_no']."' WHERE id = " . $values['id'];
    db_exec($strSQLUpdate, $conn);
}

global $conn;
$sql = "UPDATE invcustomers SET email='".$values['email']."' WHERE name = '".$values["name"]."'";
CustomQuery($sql);

//update tx
global $conn;
 $sql = "UPDATE transactions SET client='".$values["name"]."',client_type='".$values["cus_type"]."',client_id='".$values["custid"]."',
client_nric='".$values["custnric"]."' WHERE id='".$values["id_tx"]."' AND representing='".$values["role"]."'";
 CustomQuery($sql);


//insert form 1
if($values['category']=="SALE" && $values['role']=="SELLER")
{
$sql = "INSERT INTO forms (status,category,representing,id_form,title,interpretation1,interpretation2,interpretation3,
interpretation4) values(1,
'".$values["category"]."','".$values["role"]."','".$values["id_tx"]."',
'ESTATE AGENCY AGREEMENT FOR THE SALE OF RESIDENTIAL PROPERTY','No interpretation required','No interpretation required',
'No interpretation required','No interpretation required')";
CustomQuery($sql);
}
//insert form 2
if($values['category']=="SALE" && $values['role']=="BUYER")
{
$sql = "INSERT INTO forms (status,category,representing,id_form,title,interpretation1,interpretation2,interpretation3,
interpretation4) values(2,
'".$values["category"]."','".$values["role"]."','".$values["id_tx"]."',
'ESTATE AGENCY AGREEMENT FOR THE PURCHASE OF RESIDENTIAL PROPERTY','No interpretation required','No interpretation required',
'No interpretation required','No interpretation required')";
CustomQuery($sql);
}
//insert form 3
if($values['category']=="RENTAL" && $values['role']=="LANDLORD")
{
$sql = "INSERT INTO forms (status,category,representing,id_form,title,interpretation1,interpretation2,interpretation3,
interpretation4) values(3,
'".$values["category"]."','".$values["role"]."','".$values["id_tx"]."',
'ESTATE AGENCY AGREEMENT FOR THE LEASE OF RESIDENTIAL PROPERTY BY A LANDLORD','No interpretation required','No interpretation required',
'No interpretation required','No interpretation required')";
CustomQuery($sql);
}
//insert form 4
if($values['category']=="RENTAL" && $values['role']=="TENANT")
{
$sql = "INSERT INTO forms (status,category,representing,id_form,title,interpretation1,interpretation2,interpretation3,
interpretation4) values(4,
'".$values["category"]."','".$values["role"]."','".$values["id_tx"]."',
'ESTATE AGENCY AGREEMENT FOR THE LEASE OF RESIDENTIAL PROPERTY BY A TENANT','No interpretation required','No interpretation required',
'No interpretation required','No interpretation required')";
CustomQuery($sql);
}
//insert form 5
if($values['category']=="SALE" && $values['role']=="SELLER")
{
$sql = "INSERT INTO forms (status,category,representing,id_form,title,interpretation1,interpretation2,interpretation3,
interpretation4) values(5,
'".$values["category"]."','".$values["role"]."','".$values["id_tx"]."',
'EXCLUSIVE ESTATE AGENCY AGREEMENT FOR THE SALE OF RESIDENTIAL PROPERTY','No interpretation required','No interpretation required',
'No interpretation required','No interpretation required')";
CustomQuery($sql);
}
//insert form 6
if($values['category']=="SALE" && $values['role']=="BUYER")
{
$sql = "INSERT INTO forms (status,category,representing,id_form,title,interpretation1,interpretation2,interpretation3,
interpretation4) values(6,
'".$values["category"]."','".$values["role"]."','".$values["id_tx"]."',
'EXCLUSIVE ESTATE AGENCY AGREEMENT FOR THE PURCHASE OF RESIDENTIAL PROPERTY','No interpretation required','No interpretation required',
'No interpretation required','No interpretation required')";
CustomQuery($sql);
}
//insert form 7
if($values['category']=="LEASE" && $values['role']=="LANDLORD")
{
$sql = "INSERT INTO forms (status,category,representing,id_form,title,interpretation1,interpretation2,interpretation3,
interpretation4) values(7,
'".$values["category"]."','".$values["role"]."','".$values["id_tx"]."',
'EXCLUSIVE ESTATE AGENCY AGREEMENT FOR THE LEASE OF RESIDENTIAL PROPERTY BY A LANDLORD','No interpretation required','No interpretation required',
'No interpretation required','No interpretation required')";
CustomQuery($sql);
}
//insert form 8
if($values['category']=="LEASE" && $values['role']=="LANDLORD")
{
$sql = "INSERT INTO forms (status,category,representing,id_form,,title,interpretation1,interpretation2,interpretation3,
interpretation4) values(8,
'".$values["category"]."','".$values["role"]."','".$values["id_tx"]."',
'EXCLUSIVE ESTATE AGENCY AGREEMENT FOR THE LEASE OF RESIDENTIAL PROPERTY BY A TENANT','No interpretation required','No interpretation required',
'No interpretation required','No interpretation required')";
CustomQuery($sql);
}

/*
?>
<script>
Runner.runnerAJAX(Runner.pages.getUrl(pageObj.tName, pageObj.pageType)+"?a=return",
pageObj.ajaxBaseParams,
function(respObj){
pageObj.pageReloadHn.call(pageObj, respObj)
});
</script>
<?php
*/
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		if($values['cus_type'] == 'ENTITY')
{
    global $conn;
    $strSQLUpdate = "UPDATE parties_involved SET nric = '".$values['registration_no']."' WHERE id = " . $values['id'];
    db_exec($strSQLUpdate, $conn);
}

global $conn;
 $sql = "UPDATE invcustomers SET email='".$values['email']."' WHERE name = '".$values["name"]."'";
 CustomQuery($sql);

global $conn;
 $sql = "UPDATE transactions SET client='".$values["name"]."',client_type='".$values["cus_type"]."',client_id='".$values["custid"]."', 
client_nric='".$values["custnric"]."' WHERE id='".$values["id_tx"]."' AND representing='".$values["role"]."'";
 CustomQuery($sql);
		;
		
	}

	function BeforeShowAdd( &$xt, &$templatefile, $pageObject ) {
		$pageObject->hideItem("entity_section");
//$pageObject->hideItem("find_address_pty_involved");
//$pageObject->hideItem("checkbox_address");
// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeShowEdit( &$xt, &$templatefile, $values, $pageObject ) {
		if ($values["cus_type"]=="INDIVIDUAL")
{
//$pageObject->showItem("personal_info");
$pageObject->hideItem("entity_section");
}

if ($values["cus_type"]=="ENTITY")
{
$pageObject->showItem("entity_section");
$xt->assign("nric_fieldblock",false);
$xt->assign("id_type_fieldblock",false);
$xt->assign("tel_fieldblock",false);
$xt->assign("tel_type_fieldblock",false);
$xt->assign("mobile_fieldblock",false);
$xt->assign("email_fieldblock",false);
//$xt->assign("email_type_fieldblock",false);

}
		;
		
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
$pageObject->hideItem("email_type");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["billing_address"]=strtoupper($values["billing_address"]);

//empty unwanted fields value
if($values['cus_type']=="INDIVIDUAL")
{
CustomQuery("update parties_involved SET registration_no='',country_incorporation='',trade='',
office_tel='',biz_email='',contact_person='',contact_person_id='',destination='',contact_person_cell='',
contact_email='',remarks='' where id='".$values["id"]."'");
}

if($values['cus_type']=="ENTITY")
{
CustomQuery("update parties_involved SET nric='',id_type='',tel='',tel_type='',
mobile='',email='' where id='".$values["id"]."'");
}


return true;
		;
		return true;
	}

	function BeforeProcessAdd( $pageObject ) {
		$data = $pageObject->getMasterRecord();
        $_SESSION["category"] = $data["category"];



		;
		
	}

	function BeforeProcessEdit( $pageObject ) {
		$data = $pageObject->getMasterRecord();
        $_SESSION["category"] = $data["category"];



		;
		
	}
	public function default_category_efedit(  ) {
	$defaultValue = $_SESSION["category"];
return $defaultValue;
}

public function autoupdate_category_efedit(  ) {
	$defaultValue = $_SESSION["category"];
return $defaultValue;
}	

}


?>