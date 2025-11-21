<?php
class eventclass_transactions_admin  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeEdit' => true,
	'BeforeShowEdit' => true,
	'BeforeShowView' => true,
	'AfterEdit' => true,
	'BeforeMoveNextList' => true,
	'AfterDelete' => true,
	'BeforeProcessEdit' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'cea_reg' => array(
			'view' => true 
		),
		'representing' => array(
			'view' => true 
		),
		'sls_cust' => array(
			'view' => true 
		),
		'sls_result' => array(
			'view' => true 
		),
		'pps_cust' => array(
			'view' => true 
		),
		'pps_result' => array(
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
		'agency_cea' => array(
			'view' => true 
		),
		'reminder_tenant_email' => array(
			'view' => true 
		),
		'namelist_result' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'marketing_rights' => array(
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
		'status' => array(
			'edit' => true 
		),
		'date' => array(
			'edit' => true 
		),
		'salesperson_nric' => array(
			'edit' => true,
			'register' => true,
			'add' => true,
			'search' => true 
		),
		'percent_to_agency' => array(
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
		'salesperson_nric' => array(
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
		function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		if($values['category']=="SALE")
{
$values["transacted_price"] = $values["sale_price"];
}
if($values['category']=="RENTAL"||$values['category']=="ASSIGNMENT"||
$values['category']=="ROOM RENTAL"||$values['category']=="PROPERTY MANAGEMENT")
{
$values["transacted_price"] = $values["rental_price"];
}
if($values['category']=="JTC LEASE MANAGEMENT")
{
$values["transacted_price"] = $values["consultation_fee"];
}

$values["remarks"]=strtoupper($values["remarks"]);
$values["result"]=strtoupper($values["result"]);

return true;
		;
		return true;
	}

	function BeforeShowEdit( &$xt, &$templatefile, $values, $pageObject ) {
		//hide gst reg
if(!$values['agencygst_reg'])
{
$xt->assign("agencygst_reg_fieldblock",false);
$xt->assign("gst_payable_fieldblock",false);
$xt->assign("gst_inclusive_fieldblock",false);
$xt->assign("gst_fieldblock",false);
$xt->assign("comm_gross_fieldblock",false);
$xt->assign("gst_agency_fieldblock",false);
$xt->assign("comm_gross_agency_fieldblock",false);

}

//hide sls pps tabfieldblocks
$pageObject->hideItem("text16");
$pageObject->hideItem("text17");
$pageObject->hideItem("text18");
$xt->assign("sls_cust_fieldblock",false);
$xt->assign("sls_result_fieldblock",false);
$xt->assign("pps_cust_fieldblock",false);
$xt->assign("pps_result_fieldblock",false);
$xt->assign("name_cust_fieldblock",false);
$xt->assign("namelist_result_fieldblock",false);
$pageObject->hideItem("check_result_text");
//show sis id of record from cdd checklist
if($values['sls_cust'])
{
$pageObject->setProxyValue("cddchecklistid",$values['sls_cust']);
$pageObject->showItem("text16");
$xt->assign("sls_cust_fieldblock",true);
$xt->assign("sls_result_fieldblock",true);
$pageObject->showItem("check_result_text");
}

//show pps id of record from cdd checklist
if($values['pps_cust'])
{
$pageObject->setProxyValue("cddchecklistid",$values['pps_cust']);
$pageObject->showItem("text17");
$xt->assign("pps_cust_fieldblock",true);
$xt->assign("pps_result_fieldblock",true);
$pageObject->showItem("check_result_text");
}

//show namelist id of record from cdd checklist
if($values['name_cust'])
{
$pageObject->setProxyValue("cddchecklistid",$values['name_cust']);
$pageObject->showItem("text18");
$xt->assign("name_cust_fieldblock",true);
$xt->assign("namelist_result_fieldblock",true);
$pageObject->showItem("check_result_text");
}

//hide cdd measure
$pageObject->hideItem("cdd_measure");
if($values['cdd_result']!='')
$pageObject->showItem("cdd_measure");

//hide str
if($values['cdd_check_result']!='Suspicious Transaction Report Required')
$pageObject->hideItem("str");

//write values to forms 
$_SESSION['forms_id_form']=$values['id'];
$_SESSION['prop_address']=$values['prop_address'];
		;
		
	}

	function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
		//$pageObject->hideItem("check_cdd_text");
$pageObject->AddCSSFile("custom_style.css");

//hide cdd check result
if($values['sls_result']=="")
{
$pageObject->hideItem("text1");
$pageObject->hideItem("integrated_edit_field47");
$pageObject->hideItem("integrated_edit_field48");
$pageObject->hideItem("integrated_edit_field49");
$pageObject->hideItem("integrated_edit_field50");
$pageObject->hideItem("integrated_edit_field11");
$pageObject->hideItem("integrated_edit_field23");
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

if($values["category"]=="SALE"){
//$pageObject->showItem("sale_info_section");
$pageObject->hideItem("agency_info_section");
$pageObject->hideItem("rental_info_section");
$pageObject->hideItem("jtc_lease_info_section");
$pageObject->hideItem("gross_mag_fee_label");
$pageObject->hideItem("mag_amt");
$pageObject->hideItem("net_mag_fee_label");
$pageObject->hideItem("net_mag_fee");
}

if($values["category"]=="RENTAL"){
$pageObject->hideItem("agency_info_section");
$pageObject->hideItem("sale_info_section");
$pageObject->hideItem("jtc_lease_info_section");
$pageObject->hideItem("gross_mag_fee_label");
$pageObject->hideItem("mag_amt");
$pageObject->hideItem("net_mag_fee_label");
$pageObject->hideItem("net_mag_fee");
}

if($values["category"]=="ASSIGNMENT"){
$pageObject->hideItem("agency_info_section");
$pageObject->hideItem("sale_info_section");
$pageObject->hideItem("jtc_lease_info_section");
$pageObject->hideItem("gross_mag_fee_label");
$pageObject->hideItem("mag_amt");
$pageObject->hideItem("net_mag_fee_label");
$pageObject->hideItem("net_mag_fee");
}

if($values["category"]=="ROOM RENTAL"){
$pageObject->hideItem("agency_info_section");
$pageObject->hideItem("sale_info_section");
$pageObject->hideItem("jtc_lease_info_section");
$pageObject->hideItem("gross_mag_fee_label");
$pageObject->hideItem("mag_amt");
$pageObject->hideItem("net_mag_fee_label");
$pageObject->hideItem("net_mag_fee");
}

if($values["category"]=="PROPERTY MANAGEMENT"){
$pageObject->hideItem("sale_info_section");
$pageObject->hideItem("jtc_lease_info_section");
$pageObject->hideItem("comm_to_agent_section");
$pageObject->hideItem("comm_label");
$pageObject->hideItem("comm_amt");
$pageObject->hideItem("gross_comm_label");
}

if($values["category"]=="JTC LEASE MANAGEMENT"){
$pageObject->hideItem("sale_info_section");
$pageObject->hideItem("rental_info_section");
$pageObject->hideItem("gross_mag_fee_label");
$pageObject->hideItem("mag_amt");
$pageObject->hideItem("net_mag_fee_label");
$pageObject->hideItem("net_mag_fee");
$pageObject->hideItem("agency_info_section");
}

//end hide

$xt->assign("editid1_value", $values['id']);
/*
//hide fields if empty
if (!$values["loi_date"])
$pageObject->hideField("loi_date");

if (!$values["prop_name"])
$pageObject->hideField("prop_name");

if (!$values["tenure"])
$pageObject->hideField("tenure");

if (!$values["TOP"])
$pageObject->hideField("TOP");

if (!$values["no_bathrooms"])
$pageObject->hideField("no_bathrooms");

if (!$values["no_bedrooms"])
$pageObject->hideField("no_bedrooms");

if (!$values["reminder_tenant_email"])
$pageObject->hideField("reminder_tenant_email");
*/
/*
if (!$values["landland"])
$pageObject->hideField("landland");

if (!$values["builtup"])
$pageObject->hideField("builtup");
*/
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		//delete detail records if cdd_result is null
if($values['cdd_result']=="")
{
CustomQuery("DELETE FROM cdd_measures WHERE id_cddmeasures = ".$values['id']);
}

if($values['category']=="SALE")
{
CustomQuery("UPDATE transactions SET rental_price=NULL,rental_price_type=NULL,management_fee=NULL,
loi_date=NULL,ta_date=NULL,lease_duration_no=NULL,lease_duration_unit=NULL,lease_start_date=NULL,
lease_expiry=NULL,comm_unit=NULL,service_commencement=NULL,service_completion=NULL,result=NULL,
consultation_fee=NULL WHERE id=".$values['id']);
}

if($values['category']=="RENTAL"||$values['category']=="ASSIGNMENT"||$values['category']=="ROOM RENTAL")
{
CustomQuery("UPDATE transactions SET sale_price=NULL,valuation_price=NULL,
option_money=NULL,otp_date=NULL,option_exercise_date=NULL,est_completion_date=NULL,sp_execution_date=NULL,
service_commencement=NULL,service_completion=NULL,management_fee=NULL,result=NULL,consultation_fee=NULL 
WHERE id=".$values['id']);
}

if($values['category']=="PROPERTY MANAGEMENT")
{
CustomQuery("UPDATE transactions SET marketing_rights=NULL,sale_price=NULL,
valuation_price=NULL,option_money=NULL,otp_date=NULL,option_exercise_date=NULL,est_completion_date=NULL,
sp_execution_date=NULL,loi_date=NULL,ta_date=NULL,lease_duration_no=NULL,
service_commencement=NULL,service_completion=NULL,result=NULL,
consultation_fee=NULL, management_fee='".$values['management_fee']."' WHERE id=".$values['id']);
}

if($values['category']=="JTC LEASE MANAGEMENT")
{
CustomQuery("UPDATE transactions SET marketing_rights=NULL,sale_price=NULL,
valuation_price=NULL,option_money=NULL,otp_date=NULL,option_exercise_date=NULL,est_completion_date=NULL,
sp_execution_date=NULL,loi_date=NULL,ta_date=NULL,lease_duration_no=NULL,lease_duration_unit=NULL,
rental_price=NULL,rental_price_type=NULL,management_fee=NULL,lease_start_date=NULL,
lease_expiry=NULL WHERE id=".$values['id']);
}

if($values['reminder_tenant']=="No")
{
CustomQuery("UPDATE transactions SET reminder_tenant_email=NULL WHERE id=".$values['id']);
}
		;
		
	}

	function BeforeMoveNextList( &$data, &$row, &$record, $recordId, $pageObject ) {
		if($data["status_status"]!="Pending Approval"){
$pageObject->hideItem("grid_checkbox", $recordId); 
}

if ($data["category"]!="PROPERTY MANAGEMENT") 
$pageObject->hideItem("mag_fee", $recordId); 

if ($data["category"]=="PROPERTY MANAGEMENT") 
$pageObject->hideItem("comm_nett_salesperson", $recordId);
		;
		
	}

	function AfterDelete( $where, &$deleted_values, &$message, $pageObject ) {
		CustomQuery("DELETE FROM parties_involved WHERE id_tx =".$deleted_values["id"]);
CustomQuery("DELETE FROM forms WHERE id_form =".$deleted_values["id"]);
CustomQuery("DELETE FROM cdd_checklist WHERE id_cddlist =".$deleted_values["id"]);
CustomQuery("DELETE FROM cdd_measures WHERE id_cddmeasures =".$deleted_values["id"]);
CustomQuery("DELETE FROM str WHERE id_tx =".$deleted_values["id"]);
CustomQuery("DELETE FROM doc_upload WHERE id_tx =".$deleted_values["id"]);
CustomQuery("DELETE FROM cobroke_external WHERE id_tx =".$deleted_values["id"]);
CustomQuery("DELETE FROM external_party WHERE id_extparty =".$deleted_values["id"]);
CustomQuery("DELETE FROM cobroke_internal WHERE id_tx =".$deleted_values["id"]);
		;
		
	}

	function BeforeProcessEdit( $pageObject ) {
		global $strWhereClause,
$strTableName,$conn;
$str = "SELECT *
FROM agency WHERE agency_name='".$_SESSION["agency"]."'";
$rs = db_query($str,$conn);
$data = db_fetch_array($rs);
if ($data["UserID"]==$_SESSION["UserID"])
echo "";
$_SESSION["AgencyAddress"] = $data["agency_address"];
$_SESSION["AgencyCEA"] = $data["agency_cea_reg"];
$_SESSION["AgencyTel"] = $data["agency_tel"];
$_SESSION["AgencyEmail"] = $data["agency_email"];
		;
		
	}
	public function custom_cea_reg_vfview( $value, $data ) {
	$value="CEA: ".$value;;
return $value;
}

public function custom_representing_vfview( $value, $data ) {
	if ($value=="TENANT")
$color="#16E80C";
else if ($value=="LANDLORD")
$color="blue";
else if ($value=="LESSEE")
$color="orange";
else
$color="brown";
$value="<font color='$color'>$value</font>";;
return $value;
}

public function default_marketing_rights_efedit(  ) {
	$defaultValue = "Exclusive";
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

public function custom_sls_result_vfview( $value, $data ) {
	if($value='Customer name was scanned against the UN Sanction list and NO name matches')

{
$v="<font color=#16E80C>".$value."</font>";
}else

{
$v="<font color=#FF4500>".$value."</font>";
}
$value=$v;;
return $value;
}

public function custom_pps_cust_vfview( $value, $data ) {
	$arr = explode(",",$value);
	for ($i=0;$i<count($arr);$i++)
	$arr[$i]=" ".$arr[$i];
	$value = implode(",",$arr);;
return $value;
}

public function custom_pps_result_vfview( $value, $data ) {
	if($value='Customer name was scanned against the Panama Papers list and NO name matches')

{
$v="<font color=#16E80C>".$value."</font>";
}else

{
$v="<font color=#FF4500>".$value."</font>";
}
$value=$v;;
return $value;
}

public function custom_comm_earned_percent_salesperson_vfview( $value, $data ) {
	$value=$value."%";;
return $value;
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
	if ($value!="Complete")

$color="orange";

$value="<font color='$color'>$value</font>";;
return $value;
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

public function default_salesperson_nric_efregister(  ) {
	$defaultValue = $_SESSION["nric"];
return $defaultValue;
}

public function default_salesperson_nric_efadd(  ) {
	$defaultValue = $_SESSION["nric"];
return $defaultValue;
}

public function default_salesperson_nric_efsearch(  ) {
	$defaultValue = $_SESSION["nric"];
return $defaultValue;
}

public function default_percent_to_agency_efedit(  ) {
	$defaultValue = $_SESSION["cut_to_agency"];
return $defaultValue;
}

public function custom_agency_cea_vfview( $value, $data ) {
	$value="CEA: ".$value;;
return $value;
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

public function custom_namelist_result_vfview( $value, $data ) {
	if($value='Customer name was scanned against the Name list and NO name matches')

{
$v="<font color=#16E80C>".$value."</font>";
}else

{
$v="<font color=#FF4500>".$value."</font>";
}
$value=$v;;
return $value;
}	

}


?>