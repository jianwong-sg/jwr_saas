<?php
class eventclass_transactions_lcsc  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeShowView' => true,
	'OnPageLoad' => true,
	'BeforeQueryList' => true,
	'BeforeShowList' => true,
	'BeforeProcessPrint' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'sls_cust' => array(
			'view' => true 
		),
		'pps_cust' => array(
			'view' => true 
		),
		'comm_earned_percent_salesperson' => array(
			'view' => true 
		),
		'comm_percent' => array(
			'view' => true 
		),
		'status' => array(
			'view' => true 
		),
		'status_status' => array(
			'view' => true 
		),
		'reminder_tenant_email' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'salesperson_name' => array(
			'edit' => true 
		),
		'cea_reg' => array(
			'edit' => true 
		),
		'currency' => array(
			'edit' => true 
		),
		'lease_duration_unit' => array(
			'edit' => true 
		),
		'rental_price_type' => array(
			'edit' => true 
		),
		'comm_amt' => array(
			'edit' => true 
		),
		'comm_earned_percent_salesperson' => array(
			'edit' => true 
		),
		'status' => array(
			'edit' => true 
		),
		'status_status' => array(
			'edit' => true 
		),
		'date' => array(
			'edit' => true 
		),
		'salesperson_nric' => array(
			'edit' => true 
		),
		'agency_share' => array(
			'edit' => true 
		),
		'percent_to_agency' => array(
			'edit' => true 
		),
		'agency' => array(
			'edit' => true 
		),
		'reminder_agent' => array(
			'edit' => true 
		),
		'reminder_tenant' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'salesperson_name' => array(
			'edit' => true 
		),
		'cea_reg' => array(
			'edit' => true 
		),
		'comm_earned_percent_salesperson' => array(
			'edit' => true 
		),
		'salesperson_nric' => array(
			'edit' => true 
		),
		'agency_share' => array(
			'edit' => true 
		),
		'agency' => array(
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
		/*
//hide gst reg
if(!$values['agencygst_reg'])
{
$pageObject->hideField("agencygst_reg");
$pageObject->hideField("gst");
$pageObject->hideField("gst_payable");
$pageObject->hideField("gst_inclusive");

$xt->assign("gst_agency_fieldblock",false);
$xt->assign("comm_gross_agency_fieldblock",false);
}

//hide cdd check result
if($values['sls_cust']=="")
{
$pageObject->hideItem("text1");
$pageObject->hideItem("integrated_edit_field47");
$pageObject->hideItem("integrated_edit_field48");
$pageObject->hideItem("integrated_edit_field49");
$pageObject->hideItem("integrated_edit_field50");
$pageObject->hideItem("integrated_edit_field11");
$pageObject->hideItem("integrated_edit_field23");
$pageObject->hideItem("integrated_edit_field38");
$pageObject->hideItem("integrated_edit_field40");
$pageObject->hideItem("text6");
$pageObject->hideItem("text7");
$pageObject->hideItem("text8");
$pageObject->hideItem("text3");
$pageObject->hideItem("edit_field_label7");
$pageObject->hideItem("edit_field_label8");
$pageObject->hideItem("edit_field_label9");
$pageObject->hideItem("edit_field_label2");
}

//hide details based on cdd results
if (!$values["cdd_result"])
$pageObject->hideField("cdd_result");

if (!$values["cdd_check_result"])
$pageObject->hideField("cdd_check_result");

if ($values["cdd_result"]=="")
{
$xt->assign("details_cdd_measures",false);
//$xt->assign("details_pps_check",false);
//$xt->assign("details_un_sanction_check",false);
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
if($values["status_status"]!="Incomplete"){
$pageObject->hideItem("view_edit");
$pageObject->hideItem("view_edit1");
}

$xt->assign("editid1_value", $values['id']);
*/
		;
		
	}

	function BeforeQueryList( &$strSQL, &$strWhereClause, &$strOrderBy, $pageObject ) {
		if (@$_REQUEST["a"]!="search" && @$_REQUEST["a"]!="advsearch" && @$_REQUEST["a"]!="showall")
$strWhereClause = whereAdd($strWhereClause,"client='LIM CHIN SAN CONTRACTORS PTE LTD'");


CustomQuery("UPDATE transactions t
JOIN (
    SELECT id_tx, GROUP_CONCAT(name SEPARATOR ', ') as concatenated_names
    FROM parties_involved
    WHERE name != 'LIM CHIN SAN CONTRACTORS PTE LTD'
    GROUP BY id_tx
) pi ON t.id = pi.id_tx
SET t.tenants = pi.concatenated_names");




/*
CustomQuery("
    UPDATE jwresour_jwr_saas_db_jwrealty.transactions t
    JOIN (
        SELECT id_tx, GROUP_CONCAT(name SEPARATOR ', ') AS concatenated_names
        FROM jwresour_jwr_saas_db_jwrealty.parties_involved
        WHERE name != 'LIM CHIN SAN CONTRACTORS PTE LTD'
        GROUP BY id_tx
    ) pi ON t.id = pi.id_tx
    SET t.tenants = pi.concatenated_names
");
*/
		;
		
	}

	function BeforeShowList( &$xt, &$templatefile, $pageObject ) {
		$xt->assign("header",false);
$xt->assign("footer",false);

$xt->assign("supertop_block",false);
		;
		
	}

	function BeforeProcessPrint( $pageObject ) {
		$pageObject->hideItem("doc_upload_section");

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	public function default_salesperson_name_efedit(  ) {
	$defaultValue = $_SESSION["full_name"];
return $defaultValue;
}

public function autoupdate_salesperson_name_efedit(  ) {
	$defaultValue = $_SESSION["full_name"];
return $defaultValue;
}

public function default_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION["cea_reg"];
return $defaultValue;
}

public function autoupdate_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION["cea_reg"];
return $defaultValue;
}

public function default_currency_efedit(  ) {
	$defaultValue = "SGD";
return $defaultValue;
}

public function default_lease_duration_unit_efedit(  ) {
	$defaultValue = "Months";
return $defaultValue;
}

public function default_rental_price_type_efedit(  ) {
	$defaultValue = "Per Month";
return $defaultValue;
}

public function custom_sls_cust_vfview( $value, $data ) {
	$arr = explode(",",$value);
	for ($i=0;$i<count($arr);$i++)
	$arr[$i]=" ".$arr[$i];
	$value = implode(",",$arr);;
return $value;
}

public function custom_pps_cust_vfview( $value, $data ) {
	$arr = explode(",",$value);
	for ($i=0;$i<count($arr);$i++)
	$arr[$i]=" ".$arr[$i];
	$value = implode(",",$arr);;
return $value;
}

public function default_comm_amt_efedit(  ) {
	$defaultValue = $_SESSION["management_fee"];
return $defaultValue;
}

public function custom_comm_earned_percent_salesperson_vfview( $value, $data ) {
	$value=$value."%";;
return $value;
}

public function default_comm_earned_percent_salesperson_efedit(  ) {
	$defaultValue = $_SESSION["salesperson_share"];
return $defaultValue;
}

public function autoupdate_comm_earned_percent_salesperson_efedit(  ) {
	$defaultValue = $_SESSION["salesperson_share"];
return $defaultValue;
}

public function custom_comm_percent_vfview( $value, $data ) {
	$value=$value."%";;
return $value;
}

public function custom_status_vfview( $value, $data ) {
	if ($value="Open")
	$color="orange";
$value="<font color='$color'>$value</font>";;
return $value;
}

public function default_status_efedit(  ) {
	$defaultValue = "Open";
return $defaultValue;
}

public function custom_status_status_vfview( $value, $data ) {
	if ($value=="Incomplete")
$color="red";

if ($value=="Pending Approval")
$color="orange";

$value="<font color='$color'>$value</font>";;
return $value;
}

public function default_status_status_efedit(  ) {
	$defaultValue = "Incomplete";
return $defaultValue;
}

public function default_date_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_salesperson_nric_efedit(  ) {
	$defaultValue = $_SESSION["nric"];
return $defaultValue;
}

public function autoupdate_salesperson_nric_efedit(  ) {
	$defaultValue = $_SESSION["nric"];
return $defaultValue;
}

public function default_agency_share_efedit(  ) {
	$defaultValue = $_SESSION["cut_to_agency"];
return $defaultValue;
}

public function autoupdate_agency_share_efedit(  ) {
	$defaultValue = $_SESSION["cut_to_agency"];
return $defaultValue;
}

public function default_percent_to_agency_efedit(  ) {
	$defaultValue = $_SESSION["cut_to_agency"];
return $defaultValue;
}

public function default_agency_efedit(  ) {
	$defaultValue = $_SESSION["agency"];
return $defaultValue;
}

public function autoupdate_agency_efedit(  ) {
	$defaultValue = $_SESSION["agency"];
return $defaultValue;
}

public function default_reminder_agent_efedit(  ) {
	$defaultValue = "Yes";
return $defaultValue;
}

public function default_reminder_tenant_efedit(  ) {
	$defaultValue = "No";
return $defaultValue;
}

public function custom_reminder_tenant_email_vfview( $value, $data ) {
	$arr = explode(",",$value);
	for ($i=0;$i<count($arr);$i++)
	$arr[$i]=" ".$arr[$i];
	$value = implode(",",$arr);;
return $value;
}	

}


?>