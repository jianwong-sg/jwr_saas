<?php
class eventclass_transaction_party_involved  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeEdit' => true,
	'BeforeProcessEdit' => true,
	'BeforeShowEdit' => true,
	'BeforeShowView' => true,
	'AfterEdit' => true,
	'BeforeMoveNextList' => true,
	'BeforeProcessAdd' => true,
	'AfterDelete' => true,
	'BeforeAdd' => true,
	'BeforeShowAdd' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'representing' => array(
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
		'agency' => array(
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

	function BeforeProcessEdit( $pageObject ) {
		global $strWhereClause,
$strTableName,$conn;
$str = "SELECT
id,
email,
password,
usertype,
active,
cea_reg,
mobile,
name,
full_name,
nric,
home_address,
home_phone,
user_photo,
dob,
yearin,
datejoined,
dateleft,
agency,
agency_address,
agency_tel,
agency_cea_reg,
designation,
agency_email,
status,
bank_info,
bank_ac_no,
comm_structure_date,
downline_agent,
downline_agent_date,
downline_agent_cea,
downline_agent_photo,
salesperson_share,
cut_to_agency
FROM doc_users where cea_reg='".$_SESSION["UserID"]."'";
$rs = db_query($str,$conn);
$data = db_fetch_array($rs);
if ($data["UserID"]==$_SESSION["UserID"])
echo "";
$_SESSION["full_name"] = $data["full_name"];
$_SESSION["cea_reg"] = $data["cea_reg"];
$_SESSION["nric"] = $data["nric"];
$_SESSION["email"] = $data["email"];
$_SESSION["name"] = $data["name"];
$_SESSION["cut_to_agency"] = $data["cut_to_agency"];
$_SESSION["agency"] = $data["agency"];
$_SESSION["agency_cea"] = $data["agency_cea_reg"];
$_SESSION["salesperson_share"] = $data["salesperson_share"];

//delete digital form
$str = "select * from digital_form where id_tx=".postvalue("editid1");
$rs = CustomQuery($str);
while($data = db_fetch_array($rs)){
	$rs2 = CustomQuery("select count(*) as c from forms where id_tx=".$data["id"]);
	$data2 = db_fetch_array($rs2);
	if($data2["c"] == 0)
		CustomQuery("delete from digital_form where id=".$data["id"]);
}

global $strWhereClause,
$strTableName,$conn;
$str = "SELECT
id,
cea_reg
FROM transactions where id=".postvalue("editid1");
$rs = db_query($str,$conn);
$data = db_fetch_array($rs);
if ($data["cea_reg"]==$_SESSION["UserID"])
echo "";
$_SESSION["id"] = $data["id"];
		;
		
	}

	function BeforeShowEdit( &$xt, &$templatefile, $values, $pageObject ) {
		if($values['category']=='SALE')
{
$pageObject->hideItem("rental_info_section");
$pageObject->hideItem("management_info_section");
$pageObject->hideItem("jtc_lease_info_section");
$xt->assign("comm_unit_fieldblock",false);
}

if($values['category']=='RENTAL' || $values['category']=='ASSIGNMENT' || $values['category']=='ROOM RENTAL')
{
$pageObject->hideItem("sale_info_section");
$pageObject->hideItem("management_info_section");
$pageObject->hideItem("jtc_lease_info_section");
$xt->assign("agency_fieldblock",false);
$xt->assign("agency_cea_fieldblock",false);
$xt->assign("comm_percent_fieldblock",false);
}

if($values['category']=='PROPERTY MANAGEMENT')
{
$pageObject->hideItem("rental_info_section");
$pageObject->hideItem("sale_info_section");
$pageObject->hideItem("jtc_lease_info_section");
$xt->assign("comm_percent_fieldblock",false);
$xt->assign("comm_unit_fieldblock",false);
}

if($values['category']=='JTC LEASE MANAGEMENT')
{
$pageObject->hideItem("rental_info_section");
$pageObject->hideItem("management_info_section");
$pageObject->hideItem("sale_info_section");
$xt->assign("comm_percent_fieldblock",false);
$xt->assign("comm_unit_fieldblock",false);
}

//hide check description
//if($values['sls_cust']!='')
//$pageObject->hideItem("check_cdd_text");

//hide sls pps tabfieldblocks
$xt->assign("sls_cust_fieldblock",false);
$xt->assign("sls_result_fieldblock",false);
$xt->assign("pps_cust_fieldblock",false);
$xt->assign("pps_result_fieldblock",false);
$pageObject->hideItem("check_result_text");
//show sis id of record from cdd checklist
if($values['sls_cust'])
{
$pageObject->setProxyValue("cddchecklistid",$values['sls_cust']);
$xt->assign("sls_cust_fieldblock",true);
$xt->assign("sls_result_fieldblock",true);
$pageObject->showItem("check_result_text");
}

//hide na fields
//$xt->assign("gst_payable_tabfieldblock",false);
//$xt->assign("gst_inclusive_tabfieldblock",false);
//$xt->assign("gst_tabfieldblock",false);
//$xt->assign("comm_gross_tabfieldblock",false);
//$xt->assign("gst_agency_tabfieldblock",false);
//$xt->assign("comm_gross_agency_tabfieldblock",false);
//$xt->assign("details_cobroke_internal_comm",false);
//$xt->assign("details_edit_cobroke_external_comm_link",false);
//$xt->assign("details_edit_external_party_comm_link",false);
//$xt->assign("saveall_cobroke_external_comm_link",false);
//$xt->assign("cancelall_cobroke_external_comm_link",false);
//$xt->assign("saveall_external_party_comm_link",false);
//$xt->assign("cancelall_external_party_comm_link",false);



//show pps id of record from cdd checklist
if($values['pps_cust'])
{
$pageObject->setProxyValue("cddchecklistid",$values['pps_cust']);
$xt->assign("pps_cust_fieldblock",true);
$xt->assign("pps_result_fieldblock",true);
$pageObject->showItem("check_result_text");
}

//hide cdd measure
$pageObject->hideItem("cdd_measure");
//$xt->assign("details_cdd_measures",false);
if($values['cdd_result']!=''||$values['sls_result']!='No record found'||$values['pps_result']!='No record found')
//$xt->assign("details_cdd_measures",true);
$pageObject->showItem("cdd_measure");

//if($values['sls_result']==''&&$values['pps_result']=='')
//$xt->assign("details_cdd_measures",false);
if(!$values['sls_result']&&!$values['pps_result'])
$pageObject->hideItem("cdd_measure");

//hide str
if($values['cdd_check_result']!='Suspicious Transaction Report Required')
//$xt->assign("details_str",false);
$pageObject->hideItem("str");

//hide measure add button
//if($values['cdd_check_result']!='')
//$xt->assign("details_add_cdd_measures_link",false);


//hide str add button
//if($values['str_filing_date']!='')
//$xt->assign("details_add_str_link",false);

//write values to forms 
$_SESSION['forms_id_form']=$values['id'];
$_SESSION['representing']=$values['representing'];
$_SESSION['prop_address']=$values['prop_address'];
$_SESSION['prop_postal']=$values['prop_postal'];
		;
		
	}

	function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
		if($values['category']=='SALE')
{

$pageObject->hideItem("rental_info_section");
$pageObject->hideItem("management_info_section");
$pageObject->hideItem("jtc_lease_info_section");
$xt->assign("comm_unit_fieldblock",false);
}

if($values['category']=='RENTAL' || $values['category']=='ASSIGNMENT' || $values['category']=='ROOM RENTAL')
{
$pageObject->hideItem("sale_info_section");
$pageObject->hideItem("management_info_section");
$pageObject->hideItem("jtc_lease_info_section");
$xt->assign("agency_fieldblock",false);
$xt->assign("agency_cea_fieldblock",false);
$xt->assign("comm_percent_fieldblock",false);
}

if($values['category']=='PROPERTY MANAGEMENT')
{
$pageObject->hideItem("rental_info_section");
$pageObject->hideItem("sale_info_section");
$pageObject->hideItem("jtc_lease_info_section");
$xt->assign("comm_percent_fieldblock",false);
$xt->assign("comm_unit_fieldblock",false);
}

if($values['category']=='JTC LEASE MANAGEMENT')
{
$pageObject->hideItem("rental_info_section");
$pageObject->hideItem("management_info_section");
$pageObject->hideItem("sale_info_section");
$xt->assign("comm_percent_fieldblock",false);
$xt->assign("comm_unit_fieldblock",false);
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

if (!$values["landland"])
$pageObject->hideField("landland");

if (!$values["builtup"])
$pageObject->hideField("builtup");
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		//delete detail records if cdd_result is null
if($values['cdd_result']=="")
{
CustomQuery("delete from cdd_measures where id_cddmeasures = ".$values['id']);
}

if($values['category']=="SALE")
{
CustomQuery("update transactions SET rental_price='',rental_price_type='',management_fee='',
loi_date='',ta_date='',lease_duration_no='',lease_duration_unit='',lease_start_date='',
lease_expiry='',comm_unit='',service_commencement='',service_completion='',result='',
consultation_fee='' where id=".$values['id']);
}

if($values['category']=="RENTAL"||$values['category']=="ASSIGNMENT"||$values['category']=="ROOM RENTAL")
{
CustomQuery("update transactions SET sale_price='',valuation_price='',
option_money='',otp_date='',option_exercise_date='',est_completion_date='',sp_execution_date='',
service_commencement='',service_completion='',management_fee='',result='',consultation_fee='' 
where id=".$values['id']);
}

if($values['category']=="PROPERTY MANAGEMENT")
{
CustomQuery("update transactions SET marketing_rights='',sale_price='',
valuation_price='',option_money='',otp_date='',option_exercise_date='',est_completion_date='',
sp_execution_date='',loi_date='',ta_date='',lease_duration_no='',
service_commencement='',service_completion='',result='',
consultation_fee='' where id=".$values['id']);
}

if($values['category']=="JTC LEASE MANAGEMENT")
{
CustomQuery("update transactions SET marketing_rights='',sale_price='',
valuation_price='',option_money='',otp_date='',option_exercise_date='',est_completion_date='',
sp_execution_date='',loi_date='',ta_date='',lease_duration_no='',lease_duration_unit='',
rental_price='',rental_price_type='',management_fee='',lease_start_date='',
lease_expiry='' where id=".$values['id']);
}

if($values['reminder_tenant']=="No")
{
CustomQuery("update transactions SET reminder_tenant_email='' where id=".$values['id']);
}
		;
		
	}

	function BeforeMoveNextList( &$data, &$row, &$record, $recordId, $pageObject ) {
		if ($data["status_status"]=="Complete") 
{
$record["edit_link"]=false; 
$record["checkbox"]=false; 
}

if ($data["client"]=="") 
{
$record["checkbox"]=false; 
}

if ($data["status_status"]=="Pending") 
{
$record["edit_link"]=true; 
$record["checkbox"]=true; 
}
		;
		
	}

	function BeforeProcessAdd( $pageObject ) {
		global $strWhereClause,
$strTableName,$conn;
$str = "SELECT
id,
email,
password,
usertype,
active,
cea_reg,
mobile,
name,
full_name,
nric,
home_address,
home_phone,
user_photo,
dob,
yearin,
datejoined,
dateleft,
agency,
agency_address,
agency_tel,
agency_cea_reg,
designation,
agency_email,
status,
bank_info,
bank_ac_no,
comm_structure_date,
downline_agent,
downline_agent_date,
downline_agent_cea,
downline_agent_photo,
salesperson_share,
cut_to_agency
FROM doc_users where cea_reg='".$_SESSION["UserID"]."'";
$rs = db_query($str,$conn);
$data = db_fetch_array($rs);
if ($data["UserID"]==$_SESSION["UserID"])
echo "";
$_SESSION["full_name"] = $data["full_name"];
$_SESSION["cea_reg"] = $data["cea_reg"];
$_SESSION["nric"] = $data["nric"];
$_SESSION["email"] = $data["email"];
$_SESSION["agency"] = $data["agency"];
$_SESSION["agency_cea"] = $data["agency_cea_reg"];
		;
		
	}

	function AfterDelete( $where, &$deleted_values, &$message, $pageObject ) {
		CustomQuery("DELETE FROM parties_involved WHERE id_tx =".$deleted_values["id"]);
CustomQuery("DELETE FROM digital_form WHERE id_tx =".$deleted_values["id"]);
CustomQuery("DELETE FROM cdd_checklist WHERE id_cddlist =".$deleted_values["id"]);
CustomQuery("DELETE FROM cdd_measures WHERE id_cddmeasures =".$deleted_values["id"]);
CustomQuery("DELETE FROM str WHERE id_tx =".$deleted_values["id"]);
CustomQuery("DELETE FROM doc_upload WHERE id_tx =".$deleted_values["id"]);
CustomQuery("DELETE FROM cobroke_external WHERE id_tx =".$deleted_values["id"]);
CustomQuery("DELETE FROM external_party WHERE id_extparty =".$deleted_values["id"]);
CustomQuery("DELETE FROM cobroke_internal WHERE id_tx =".$deleted_values["id"]);
		;
		
	}

	function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
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

$values["result"]=strtoupper($values["result"]);
return true;
		;
		return true;
	}

	function BeforeShowAdd( &$xt, &$templatefile, $pageObject ) {
		$pageObject->hideItem("add_save");
$pageObject->hideItem("add_save1");
$pageObject->hideItem("add_back_list1");
$pageObject->hideItem("add_reset1");
$pageObject->hideItem("tx_info_section");
$pageObject->hideItem("prop_info_section");

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

public function default_agency_efedit(  ) {
	$defaultValue = $_SESSION["agency"];
return $defaultValue;
}

public function autoupdate_agency_efedit(  ) {
	$defaultValue = $_SESSION["agency"];
return $defaultValue;
}	

}


?>