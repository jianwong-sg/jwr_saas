<?php
class eventclass_lease_due  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeEdit' => true,
	'BeforeProcessEdit' => true,
	'BeforeShowEdit' => true,
	'BeforeShowView' => true,
	'AfterEdit' => true,
	'BeforeAdd' => true,
	'BeforeQueryList' => true 
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
			'view' => true,
			'list' => true,
			'print' => true,
			'export' => true 
		),
		'agency_share' => array(
			'view' => true 
		),
		'client' => array(
			'view' => true 
		),
		'agency_cea' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'salesperson_name' => array(
			'edit' => true,
			'register' => true,
			'add' => true,
			'search' => true 
		),
		'cea_reg' => array(
			'register' => true,
			'add' => true,
			'search' => true 
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
		'status_status' => array(
			'edit' => true,
			'register' => true,
			'add' => true,
			'search' => true 
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
		'salesperson_email' => array(
			'edit' => true 
		),
		'agency_share' => array(
			'edit' => true,
			'register' => true,
			'add' => true,
			'search' => true 
		),
		'percent_to_agency' => array(
			'edit' => true 
		),
		'agency' => array(
			'edit' => true,
			'register' => true,
			'add' => true,
			'search' => true 
		),
		'agency_cea' => array(
			'edit' => true,
			'register' => true,
			'add' => true,
			'search' => true 
		),
		'reminder_tenant' => array(
			'edit' => true 
		),
		'reminder_agent' => array(
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
		'status_status' => array(
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
		),
		'agency_cea' => array(
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
		$values["transacted_price"] = $values["rental_price"]+$values["sale_price"]+$values["management_fee"]+$values["consultation_fee"];

$values["remarks"]=strtoupper($values["remarks"]);
$values["result"]=strtoupper($values["result"]);

return true;
		;
		return true;
	}

	function BeforeProcessEdit( $pageObject ) {
		
//delete digital form
$str = "select * from digital_form where id_tx=".postvalue("editid1");
$rs = CustomQuery($str);
while($data = db_fetch_array($rs)){
	$rs2 = CustomQuery("select count(*) as c from forms where id_tx=".$data["id"]);
	$data2 = db_fetch_array($rs2);
	if($data2["c"] == 0)
		CustomQuery("delete from digital_form where id=".$data["id"]);
}
		;
		
	}

	function BeforeShowEdit( &$xt, &$templatefile, $values, $pageObject ) {
		//hide sls pps tabfieldblocks
$xt->assign("sls_cust_tabfieldblock",false);
$xt->assign("sls_result_tabfieldblock",false);
$xt->assign("pps_cust_tabfieldblock",false);
$xt->assign("pps_result_tabfieldblock",false);

//show sis id of record from cdd checklist
if($values['sls_cust'])
{
$pageObject->setProxyValue("cddchecklistid",$values['sls_cust']);
$xt->assign("sls_cust_tabfieldblock",true);
$xt->assign("sls_result_tabfieldblock",true);
}

//hide na fields
$xt->assign("gst_payable_tabfieldblock",false);
$xt->assign("gst_inclusive_tabfieldblock",false);
$xt->assign("gst_tabfieldblock",false);
$xt->assign("comm_gross_tabfieldblock",false);
$xt->assign("gst_agency_tabfieldblock",false);
$xt->assign("comm_gross_agency_tabfieldblock",false);
$xt->assign("details_cobroke_internal_comm",false);
$xt->assign("details_edit_cobroke_external_comm_link",false);
$xt->assign("details_edit_external_party_comm_link",false);
$xt->assign("saveall_cobroke_external_comm_link",false);
$xt->assign("cancelall_cobroke_external_comm_link",false);
$xt->assign("saveall_external_party_comm_link",false);
$xt->assign("cancelall_external_party_comm_link",false);



//show pps id of record from cdd checklist
if($values['pps_cust'])
{
$pageObject->setProxyValue("cddchecklistid",$values['pps_cust']);
$xt->assign("pps_cust_tabfieldblock",true);
$xt->assign("pps_result_tabfieldblock",true);
}

//hide cdd measure
$xt->assign("details_cdd_measures",false);
if($values['cdd_result']!=''||$values['sls_result']!='No record found'||$values['pps_result']!='No record found')
$xt->assign("details_cdd_measures",true);

if($values['sls_result']==''&&$values['pps_result']=='')
$xt->assign("details_cdd_measures",false);


//hide str row

if($values['cdd_check_result']!='Suspicious Transaction Report Required')
$xt->assign("details_str",false);


//hide measure add button
if($values['cdd_check_result']!='')
$xt->assign("details_add_cdd_measures_link",false);


//hide str add button
if($values['str_filing_date']!='')
$xt->assign("details_add_str_link",false);

//write values to forms 
$_SESSION['forms_id_form']=$values['id'];
$_SESSION['representing']=$values['representing'];
$_SESSION['prop_address']=$values['prop_address'];
$_SESSION['prop_postal']=$values['prop_postal'];
		;
		
	}

	function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
		//hide na fields
$xt->assign("gst_payable_tabfieldblock",false);
$xt->assign("gst_inclusive_tabfieldblock",false);
$xt->assign("gst_tabfieldblock",false);
$xt->assign("comm_gross_tabfieldblock",false);
$xt->assign("gst_agency_tabfieldblock",false);
$xt->assign("comm_gross_agency_tabfieldblock",false);
$xt->assign("details_cobroke_internal_comm",false);
$xt->assign("details_edit_cobroke_external_comm_link",false);
$xt->assign("details_edit_external_party_comm_link",false);
$xt->assign("saveall_cobroke_external_comm_link",false);
$xt->assign("cancelall_cobroke_external_comm_link",false);
$xt->assign("saveall_external_party_comm_link",false);
$xt->assign("cancelall_external_party_comm_link",false);

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
if($values["status_status"]=="Close")
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
service_commencement='',service_completion='',result='',
consultation_fee='' where id=".$values['id']);
}

if($values['category']=="PROPERTY MANAGEMENT")
{
CustomQuery("update transactions SET marketing_rights='',sale_price='',
valuation_price='',option_money='',otp_date='',option_exercise_date='',est_completion_date='',
sp_execution_date='',loi_date='',ta_date='',lease_duration_no='',lease_duration_unit='',
rental_price='',rental_price_type='',service_commencement='',service_completion='',result='',
consultation_fee='' where id=".$values['id']);
}

if($values['category']=="JTC LEASE MANAGEMENT")
{
CustomQuery("update transactions SET marketing_rights='',sale_price='',
valuation_price='',option_money='',otp_date='',option_exercise_date='',est_completion_date='',
sp_execution_date='',loi_date='',ta_date='',lease_duration_no='',lease_duration_unit='',
rental_price='',rental_price_type='' where id=".$values['id']);
}
		;
		
	}

	function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$values["transacted_price"] = $values["rental_price"]+$values["sale_price"]+$values["management_fee"]+$values["consultation_fee"];
$values["result"]=strtoupper($values["result"]);
return true;
		;
		return true;
	}

	function BeforeQueryList( &$strSQL, &$strWhereClause, &$strOrderBy, $pageObject ) {
		// Filter lease expiry in the next 2 months
// and exclude records that have been renewed with a new expiry date at least 6 months from the current expiry date.
if ($_REQUEST["a"] != "search" && $_REQUEST["a"] != "advsearch") {
    $strWhereClause = whereAdd(
        $strWhereClause,
        "lease_expiry BETWEEN DATE_ADD(NOW(), INTERVAL 0 DAY) 
        AND DATE_ADD(NOW(), INTERVAL 60 DAY)
        AND NOT EXISTS (
            SELECT 1 
            FROM transactions AS sub
            WHERE sub.prop_address = transactions.prop_address
            AND sub.lease_expiry >= DATE_ADD(transactions.lease_expiry, INTERVAL 6 MONTH)
        )"
    );
}
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

public function default_salesperson_name_efregister(  ) {
	$defaultValue = $_SESSION["full_name"];
return $defaultValue;
}

public function default_salesperson_name_efadd(  ) {
	$defaultValue = $_SESSION["full_name"];
return $defaultValue;
}

public function default_salesperson_name_efsearch(  ) {
	$defaultValue = $_SESSION["full_name"];
return $defaultValue;
}

public function custom_cea_reg_vfview( $value, $data ) {
	$value="CEA: ".$value;;
return $value;
}

public function autoupdate_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION["cea_reg"];
return $defaultValue;
}

public function default_cea_reg_efregister(  ) {
	$defaultValue = $_SESSION["cea_reg"];
return $defaultValue;
}

public function default_cea_reg_efadd(  ) {
	$defaultValue = $_SESSION["cea_reg"];
return $defaultValue;
}

public function default_cea_reg_efsearch(  ) {
	$defaultValue = $_SESSION["cea_reg"];
return $defaultValue;
}

public function custom_representing_vfview( $value, $data ) {
	$color="#16E80C";
$value="<font color='$color'>$value</font>";;
return $value;
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
	if($value=='No record found')
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
	if($value=='No record found')
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
	if ($value!="Close")

$color="orange";

$value="<font color='$color'>$value</font>";;
return $value;
}

public function custom_status_status_vflist( $value, $data ) {
	if ($value!="Close")

$color="orange";

$value="<font color='$color'>$value</font>";;
return $value;
}

public function custom_status_status_vfprint( $value, $data ) {
	if ($value!="Close")

$color="orange";

$value="<font color='$color'>$value</font>";;
return $value;
}

public function custom_status_status_vfexport( $value, $data ) {
	if ($value!="Close")

$color="orange";

$value="<font color='$color'>$value</font>";;
return $value;
}

public function default_status_status_efedit(  ) {
	$defaultValue = "Open";
return $defaultValue;
}

public function autoupdate_status_status_efedit(  ) {
	$defaultValue = "Open";
return $defaultValue;
}

public function default_status_status_efregister(  ) {
	$defaultValue = "Open";
return $defaultValue;
}

public function default_status_status_efadd(  ) {
	$defaultValue = "Open";
return $defaultValue;
}

public function default_status_status_efsearch(  ) {
	$defaultValue = "Open";
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

public function default_salesperson_email_efedit(  ) {
	$defaultValue = $_SESSION["email"];
return $defaultValue;
}

public function custom_agency_share_vfview( $value, $data ) {
	$value=$value."%";;
return $value;
}

public function default_agency_share_efedit(  ) {
	$defaultValue = 5;
return $defaultValue;
}

public function autoupdate_agency_share_efedit(  ) {
	$defaultValue = $_SESSION["cut_to_agency"];
return $defaultValue;
}

public function default_agency_share_efregister(  ) {
	$defaultValue = 5;
return $defaultValue;
}

public function default_agency_share_efadd(  ) {
	$defaultValue = $_SESSION["cut_to_agency"];
return $defaultValue;
}

public function default_agency_share_efsearch(  ) {
	$defaultValue = 5;
return $defaultValue;
}

public function default_percent_to_agency_efedit(  ) {
	$defaultValue = $_SESSION["cut_to_agency"];
return $defaultValue;
}

public function custom_client_vfview( $value, $data ) {
	$arr = explode(",",$value);
for ($i=0;$i<count($arr);$i++)
$arr[$i]=" ".$arr[$i];
$value = implode(",",$arr);;
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

public function default_agency_efregister(  ) {
	$defaultValue = $_SESSION["agency"];
return $defaultValue;
}

public function default_agency_efadd(  ) {
	$defaultValue = $_SESSION["agency"];
return $defaultValue;
}

public function default_agency_efsearch(  ) {
	$defaultValue = $_SESSION["agency"];
return $defaultValue;
}

public function custom_agency_cea_vfview( $value, $data ) {
	$value="CEA: ".$value;;
return $value;
}

public function default_agency_cea_efedit(  ) {
	$defaultValue = $_SESSION["agency_cea"];
return $defaultValue;
}

public function autoupdate_agency_cea_efedit(  ) {
	$defaultValue = $_SESSION["agency_cea"];
return $defaultValue;
}

public function default_agency_cea_efregister(  ) {
	$defaultValue = $_SESSION["agency_cea"];
return $defaultValue;
}

public function default_agency_cea_efadd(  ) {
	$defaultValue = $_SESSION["agency_cea"];
return $defaultValue;
}

public function default_agency_cea_efsearch(  ) {
	$defaultValue = $_SESSION["agency_cea"];
return $defaultValue;
}

public function default_reminder_tenant_efedit(  ) {
	$defaultValue = "No";
return $defaultValue;
}

public function default_reminder_agent_efedit(  ) {
	$defaultValue = "No";
return $defaultValue;
}	

}


?>