<?php
class eventclass_parties_involved  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeAdd' => true,
	'BeforeEdit' => true,
	'AfterAdd' => true,
	'AfterEdit' => true,
	'BeforeShowAdd' => true,
	'BeforeShowView' => true,
	'AfterDelete' => true,
	'BeforeMoveNextList' => true,
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
		'tx_no' => array(
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
		'tx_no' => array(
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
$values["email"]=strtoupper($values["email"]);
$values["tel_type"]=strtoupper($values["tel_type"]);
$values["address"]=strtoupper($values["address"]);
$values["registration_no"]=strtoupper($values["registration_no"]);
$values["country_incorporation"]=strtoupper($values["country_incorporation"]);
$values["trade"]=strtoupper($values["trade"]);
$values["biz_email"]=strtoupper($values["biz_email"]);
$values["contact_person_id"]=strtoupper($values["contact_person_id"]);
$values["contact_email"]=strtoupper($values["contact_email"]);
$values["destination"]=strtoupper($values["destination"]);

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["billing_address"]=strtoupper($values["billing_address"]);
$values["email"]=strtoupper($values["email"]);
$values["tel_type"]=strtoupper($values["tel_type"]);
$values["address"]=strtoupper($values["address"]);
$values["registration_no"]=strtoupper($values["registration_no"]);
$values["country_incorporation"]=strtoupper($values["country_incorporation"]);
$values["trade"]=strtoupper($values["trade"]);
$values["biz_email"]=strtoupper($values["biz_email"]);
$values["contact_person_id"]=strtoupper($values["contact_person_id"]);
$values["contact_email"]=strtoupper($values["contact_email"]);
$values["destination"]=strtoupper($values["destination"]);

return true;
		;
		return true;
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		$key = '$jw6857r707';
global $conn;

// Update parties_involved if ENTITY
if ($values['cus_type'] == 'ENTITY') {
    $regNo = db_prepare_string($values['registration_no']);
    $partyId = db_prepare_string($values['id']);

    $strSQLUpdate = "
        UPDATE parties_involved SET 
        nric = HEX(AES_ENCRYPT($regNo, '$key')) 
        WHERE id = $partyId
    ";
    db_exec($strSQLUpdate, $conn);
}

// Sanitize all fields
$custId = db_prepare_string($values['custid']);
$email = db_prepare_string(strtoupper($values['email']));
$mobile = db_prepare_string($values['mobile']);
$tel = db_prepare_string($values['tel']);
$contact_person_id = db_prepare_string($values['contact_person_id']);
$contact_person_cell = db_prepare_string($values['contact_person_cell']);
$biz_email = db_prepare_string(strtoupper($values['biz_email']));
$contact_email = db_prepare_string(strtoupper($values['contact_email']));
$destination = db_prepare_string(strtoupper($values["destination"]));
$tel_type = db_prepare_string(strtoupper($values["tel_type"]));
$billing_address = db_prepare_string(strtoupper($values["billing_address"]));
$remarks = db_prepare_string(strtoupper($values["remarks"]));
$contact_person = db_prepare_string(strtoupper($values["contact_person"]));

$sql = "
    UPDATE invcustomers SET 
        email = HEX(AES_ENCRYPT($email, '$key')),
        mobile = HEX(AES_ENCRYPT($mobile, '$key')),
        tel = HEX(AES_ENCRYPT($tel, '$key')),
        contact_person_id = HEX(AES_ENCRYPT($contact_person_id, '$key')),
        contact_person_contact = HEX(AES_ENCRYPT($contact_person_cell, '$key')),
        biz_email = HEX(AES_ENCRYPT($biz_email, '$key')),
        contact_email = HEX(AES_ENCRYPT($contact_email, '$key')),
        destination = $destination,
        tel_type = $tel_type,
        billing_address = $billing_address,
        remarks = $remarks,
        contact_person = $contact_person
    WHERE id = $custId
";

CustomQuery($sql);

//Update client info in transactions
global $conn;
$sql = "Update transactions SET 
client=CONCAT_WS(', ',IF(LENGTH(`client`),`client`,NULL),'".($values['name'])."'),
client_type = '".$values['cus_type']."', 
client_id = '".$values['custid']."'
WHERE representing='".$values['role']."' AND id='".$values['id_tx']."'";
CustomQuery($sql);

/*
?>
<script>
parent.location.reload();
</script>
<?php
*/
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		$key = '$jw6857r707';
global $conn;

// Update parties_involved if ENTITY
if ($values['cus_type'] == 'ENTITY') {
    $regNo = db_prepare_string($values['registration_no']);
    $partyId = db_prepare_string($values['id']);

    $strSQLUpdate = "
        UPDATE parties_involved SET 
        nric = HEX(AES_ENCRYPT($regNo, '$key')) 
        WHERE id = $partyId
    ";
    db_exec($strSQLUpdate, $conn);
}

// Sanitize all fields
$custId = db_prepare_string($values['custid']);
$email = db_prepare_string(strtoupper($values['email']));
$mobile = db_prepare_string($values['mobile']);
$tel = db_prepare_string($values['tel']);
$contact_person_id = db_prepare_string($values['contact_person_id']);
$contact_person_cell = db_prepare_string($values['contact_person_cell']);
$biz_email = db_prepare_string(strtoupper($values['biz_email']));
$contact_email = db_prepare_string(strtoupper($values['contact_email']));
$destination = db_prepare_string(strtoupper($values["destination"]));
$tel_type = db_prepare_string(strtoupper($values["tel_type"]));
$billing_address = db_prepare_string(strtoupper($values["billing_address"]));
$remarks = db_prepare_string(strtoupper($values["remarks"]));
$contact_person = db_prepare_string(strtoupper($values["contact_person"]));

$sql = "
    UPDATE invcustomers SET 
        email = HEX(AES_ENCRYPT($email, '$key')),
        mobile = HEX(AES_ENCRYPT($mobile, '$key')),
        tel = HEX(AES_ENCRYPT($tel, '$key')),
        contact_person_id = HEX(AES_ENCRYPT($contact_person_id, '$key')),
        contact_person_contact = HEX(AES_ENCRYPT($contact_person_cell, '$key')),
        biz_email = HEX(AES_ENCRYPT($biz_email, '$key')),
        contact_email = HEX(AES_ENCRYPT($contact_email, '$key')),
        destination = $destination,
        tel_type = $tel_type,
        billing_address = $billing_address,
        remarks = $remarks,
        contact_person = $contact_person
    WHERE id = $custId
";

CustomQuery($sql);

//Update client info in transactions
global $conn;
$sql = "Update transactions SET 
client=CONCAT_WS(', ',IF(LENGTH(`client`),`client`,NULL),'".($values['name'])."'),
client_type = '".$values['cus_type']."', 
client_id = '".$values['custid']."'
WHERE representing='".$values['role']."' AND id='".$values['id_tx']."'";
CustomQuery($sql);


//empty unwanted fields value
if($values['cus_type']=="INDIVIDUAL")
{
CustomQuery("UPDATE parties_involved SET 
registration_no='',
country_incorporation='',
trade='',
office_tel='',
biz_email='',
contact_person='',
contact_person_id='',
destination='',
contact_person_cell='',
contact_email='',
remarks='' 
WHERE id='".$values["id"]."'");
}

?>
<script>
parent.location.reload();
</script>
<?php
		;
		
	}

	function BeforeShowAdd( &$xt, &$templatefile, $pageObject ) {
		$pageObject->hideItem("entity_section");

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
//$pageObject->hideItem("email_type");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function AfterDelete( $where, &$deleted_values, &$message, $pageObject ) {
		CustomQuery("UPDATE transactions SET client='',cdd_result='',sls_cust='',sls_result='',pps_cust='',
pps_result='',namelist_cust='', namelist_result='',alertlist_cust='', alertlist_result='',cdd_check_result='' 
WHERE id='".$deleted_values["id_tx"]."' ");

CustomQuery("DELETE FROM cdd_checklist WHERE id_cddlist =".$deleted_values["id_tx"]);

CustomQuery("DELETE FROM cdd_measures WHERE id_cddmeasures =".$deleted_values["id_tx"]);


CustomQuery("DELETE FROM str WHERE id_tx =".$deleted_values["id_tx"]);

CustomQuery("DELETE FROM parties_involved WHERE id_tx='".$deleted_values["id_tx"]."' && role='".$deleted_values["role"]."'");



?>
<script>
parent.location.reload();
</script>
<?php
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

	function BeforeProcessAdd( $pageObject ) {
		$data = $pageObject->getMasterRecord();
{
        $_SESSION["category"] = $data["category"];
        $_SESSION["prop_address"] = $data["prop_address"];
        $_SESSION["marketing_rights"] = $data["marketing_rights"];
        $_SESSION["ID_Tx"] = $data["ID_Tx"];
        $_SESSION["representing"] = $data["representing"];
        
}


		;
		
	}

	function BeforeProcessEdit( $pageObject ) {
		$data = $pageObject->getMasterRecord();
{
        $_SESSION["category"] = $data["category"];
        $_SESSION["prop_address"] = $data["prop_address"];
        $_SESSION["marketing_rights"] = $data["marketing_rights"];
        $_SESSION["ID_Tx"] = $data["ID_Tx"];
        $_SESSION["representing"] = $data["representing"];
        
}


		;
		
	}
	public function default_tx_no_efedit(  ) {
	$defaultValue = $_SESSION["ID_Tx"];
return $defaultValue;
}

public function autoupdate_tx_no_efedit(  ) {
	$defaultValue = $_SESSION["ID_Tx"];
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
	$defaultValue = $_SESSION["marketing_rights"];
return $defaultValue;
}

public function autoupdate_marketing_rights_efedit(  ) {
	$defaultValue = $_SESSION["marketing_rights"];
return $defaultValue;
}	

}


?>