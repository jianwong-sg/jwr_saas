<?php
class eventclass_transactions  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeEdit' => true,
	'BeforeShowEdit' => true,
	'BeforeShowView' => true,
	'AfterEdit' => true,
	'AfterDelete' => true,
	'BeforeAdd' => true,
	'BeforeShowAdd' => true,
	'AfterAdd' => true,
	'ProcessValuesAdd' => true,
	'BeforeProcessAdd' => true 
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
		'namelist_cust' => array(
			'view' => true 
		),
		'alertlist_cust' => array(
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
		'client' => array(
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
		'salesperson_email' => array(
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
		'agency_cea' => array(
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
		'comm_earned_percent_salesperson' => array(
			'edit' => true 
		),
		'salesperson_nric' => array(
			'edit' => true 
		),
		'agency_share' => array(
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
$values["result"]=strtoupper($values["result"]);
$values["remarks"]=strtoupper($values["remarks"]);
$values["prop_name"]=strtoupper($values["prop_name"]);

return true;
		;
		return true;
	}

	function BeforeShowEdit( &$xt, &$templatefile, $values, $pageObject ) {
		// Get the field values
$category = $values["category"];
$representing = $values["representing"];
$marketing_rights = $values["marketing_rights"];

// Initialize all forms as hidden by default
$pageObject->hideItem("details_form1");
$pageObject->hideItem("details_form2");
$pageObject->hideItem("details_form3");
$pageObject->hideItem("details_form4");
$pageObject->hideItem("details_form5");
$pageObject->hideItem("details_form6");
$pageObject->hideItem("details_form7");
$pageObject->hideItem("details_form8");

// Determine which form to show based on conditions
if($category == 'SALE' && $representing == 'SELLER' && $marketing_rights == 'Non-Exclusive') {
    $pageObject->showItem("details_form1");
} 
elseif($category == 'SALE' && $representing == 'BUYER' && $marketing_rights == 'Non-Exclusive') {
    $pageObject->showItem("details_form2");
}
elseif($category == 'RENTAL' && $representing == 'LANDLORD' && $marketing_rights == 'Non-Exclusive') {
    $pageObject->showItem("details_form3");
}
elseif($category == 'RENTAL' && $representing == 'TENANT' && $marketing_rights == 'Non-Exclusive') {
    $pageObject->showItem("details_form4");
}
elseif($category == 'SALE' && $representing == 'SELLER' && $marketing_rights == 'Exclusive') {
    $pageObject->showItem("details_form5");
}
elseif($category == 'SALE' && $representing == 'BUYER' && $marketing_rights == 'Exclusive') {
    $pageObject->showItem("details_form6");
}
elseif($category == 'RENTAL' && $representing == 'LANDLORD' && $marketing_rights == 'Exclusive') {
    $pageObject->showItem("details_form7");
}
elseif($category == 'RENTAL' && $representing == 'TENANT' && $marketing_rights == 'Exclusive') {
    $pageObject->showItem("details_form8");
}

// Define valid property types
$residentialTypes = array("APARTMENT / CONDO", "HDB APARTMENT", "LANDED HOUSE");

// Check if property type is valid
if (!in_array($values['prop_type'], $residentialTypes)) {
    $pageObject->hideItem("cea_prescribed_form_section");
}

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
$pageObject->hideItem("text13");
$xt->assign("sls_cust_fieldblock",false);
$xt->assign("sls_result_fieldblock",false);
$xt->assign("pps_cust_fieldblock",false);
$xt->assign("pps_result_fieldblock",false);
$xt->assign("namelist_cust_fieldblock",false);
$xt->assign("namelist_result_fieldblock",false);
$xt->assign("alertlist_cust_fieldblock",false);
$xt->assign("alertlist_result_fieldblock",false);
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
if($values['namelist_cust'])
{
$pageObject->setProxyValue("cddchecklistid",$values['namelist_cust']);
$pageObject->showItem("text18");
$xt->assign("namelist_cust_fieldblock",true);
$xt->assign("namelist_result_fieldblock",true);
$pageObject->showItem("check_result_text");
}

//show alertlist id of record from cdd checklist
if($values['alertlist_cust'])
{
$pageObject->setProxyValue("cddchecklistid",$values['alertlist_cust']);
$pageObject->showItem("text13");
$xt->assign("alertlist_cust_fieldblock",true);
$xt->assign("alertlist_result_fieldblock",true);
$pageObject->showItem("check_result_text");
}

// Show or hide based on cdd_result value and presence of 'Warning' in other fields
$shouldShow = true;

// Check if cdd_result is empty or equals the specific string
if (empty($values['cdd_result']) || $values['cdd_result'] === 'CDD check on client done') {
    $shouldShow = false;
}

// Check for 'Warning' in other specified fields
$warningFields = ['sls_result', 'pps_result', 'alertlist_result', 'namelist_result'];
$containsWarning = false;

foreach ($warningFields as $field) {
    if (!empty($values[$field]) && stripos($values[$field], 'Warning') !== false) {
        $containsWarning = true;
        break;
    }
}

// Final decision to show or hide
if ($shouldShow || $containsWarning) {
    $pageObject->showItem("cdd_measure");
} else {
    $pageObject->hideItem("cdd_measure");
}

//hide str
// Show or hide 'str' item based on cdd_check_result value
if ($values['cddmeasure_result'] == 'Suspicious Transaction Report Required') {
    $pageObject->showItem("str");
} else {
    $pageObject->hideItem("str");
}

		;
		
	}

	function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
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
$pageObject->hideItem("edit_field_label12");
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
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		//update properties
global $conn;
// Sanitize all fields
$propId = db_prepare_string($values['prop_id']);
$propname = db_prepare_string(strtoupper($values['prop_name']));
$landsize = db_prepare_string($values['land']);
$builtup = db_prepare_string($values['built_up']);
$top = db_prepare_string($values['TOP']);

$sql = "UPDATE properties SET 
prop_name = $propname,
land_size = $landsize,
builtup = $builtup,
`TOP` = $top
WHERE id = $propId
";

CustomQuery($sql);

//delete detail records if cdd_result is null
if($values['cdd_result']=="")
{
CustomQuery("delete FROM cdd_measures WHERE id_cddmeasures = ".$values['id']);
}

if($values['category']=="SALE")
{
CustomQuery("UPDATE transactions SET rental_price=NULL,rental_price_type=NULL,
loi_date=NULL,ta_date=NULL,lease_duration_no=NULL,lease_duration_unit=NULL,lease_start_date=NULL,
lease_expiry=NULL,comm_unit=NULL,service_commencement=NULL,service_completion=NULL,result=NULL,
consultation_fee=NULL,management_fee=NULL WHERE	 id=".$values['id']);
}

if($values['category']=="RENTAL"||$values['category']=="ASSIGNMENT"||$values['category']=="ROOM RENTAL")
{
CustomQuery("UPDATE transactions SET sale_price=NULL,valuation_price=NULL,
option_money=NULL,otp_date=NULL,option_exercise_date=NULL,est_completion_date=NULL,sp_execution_date=NULL,
service_commencement=NULL,service_completion=NULL,result=NULL,consultation_fee=NULL,management_fee=NULL
WHERE id=".$values['id']);
}

if($values['category']=="PROPERTY MANAGEMENT")
{
CustomQuery("UPDATE transactions SET marketing_rights=NULL,sale_price=NULL,
valuation_price=NULL,option_money=NULL,otp_date=NULL,option_exercise_date=NULL,est_completion_date=NULL,
sp_execution_date=NULL,loi_date=NULL,ta_date=NULL,service_commencement=NULL,service_completion=NULL,result=NULL,
consultation_fee=NULL WHERE id=".$values['id']);
}

if($values['category']=="JTC LEASE MANAGEMENT")
{
CustomQuery("UPDATE transactions SET marketing_rights=NULL,sale_price=NULL,
valuation_price=NULL,option_money=NULL,otp_date=NULL,option_exercise_date=NULL,est_completion_date=NULL,
sp_execution_date=NULL,loi_date=NULL,ta_date=NULL,lease_duration_no=NULL,lease_duration_unit=NULL,
rental_price=NULL,rental_price_type=NULL,lease_start_date=NULL,management_fee=NULL,
lease_expiry=NULL WHERE id=".$values['id']);
}

if($values['reminder_tenant']=="No")
{
CustomQuery("UPDATE transactions SET reminder_tenant_email=NULL WHERE id=".$values['id']);
}



?>
<script>
parent.location.reload();
</script>
<?php
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
//$values["result"]=strtoupper($values["result"]);
}
//$values["result"]=strtoupper($values["result"]);
$values["prop_name"]=strtoupper($values["prop_name"]);


return true;
		;
		return true;
	}

	function BeforeShowAdd( &$xt, &$templatefile, $pageObject ) {
		$pageObject->hideItem("add_save");
$pageObject->hideItem("add_save1");
$pageObject->hideItem("add_back_list1");
$pageObject->hideItem("add_reset1");
//$pageObject->hideItem("tx_info_section");
//$pageObject->hideItem("prop_info_section");

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		//update properties
global $conn;
// Sanitize all fields
$propId = db_prepare_string($values['prop_id']);
$propname = db_prepare_string(strtoupper($values['prop_name']));
$landsize = db_prepare_string($values['land_size']);
$builtup = db_prepare_string($values['builtup']);
$yearbuilt = db_prepare_string($values['year_built']);
$top = db_prepare_string($values['TOP']);

$sql = "UPDATE properties SET 
prop_name = $propname,
land_size = $landsize,
builtup = $builtup,
year_built = $yearbuilt,
TOP = $top
WHERE id = $propId
";

CustomQuery($sql);


// Define valid property types
$residentialTypes = array("APARTMENT / CONDO", "HDB APARTMENT", "LANDED HOUSE");

// Check if property type is valid
if (!in_array($values['prop_type'], $residentialTypes)) {
    return; // Exit if not a residential property type
}

// Define form configurations in an array
$formConfigs = array(
    // Non-Exclusive forms
    array(
        'conditions' => array(
            'category' => 'SALE',
            'representing' => 'SELLER',
            'marketing_rights' => 'Non-Exclusive'
        ),
        'status' => 1,
        'title' => 'ESTATE AGENCY AGREEMENT FOR THE SALE OF RESIDENTIAL PROPERTY'
    ),
    array(
        'conditions' => array(
            'category' => 'SALE',
            'representing' => 'BUYER',
            'marketing_rights' => 'Non-Exclusive'
        ),
        'status' => 2,
        'title' => 'ESTATE AGENCY AGREEMENT FOR THE PURCHASE OF RESIDENTIAL PROPERTY'
    ),
    array(
        'conditions' => array(
            'category' => 'RENTAL',
            'representing' => 'LANDLORD',
            'marketing_rights' => 'Non-Exclusive'
        ),
        'status' => 3,
        'title' => 'ESTATE AGENCY AGREEMENT FOR THE LEASE OF RESIDENTIAL PROPERTY BY A LANDLORD'
    ),
    array(
        'conditions' => array(
            'category' => 'RENTAL',
            'representing' => 'TENANT',
            'marketing_rights' => 'Non-Exclusive'
        ),
        'status' => 4,
        'title' => 'ESTATE AGENCY AGREEMENT FOR THE LEASE OF RESIDENTIAL PROPERTY BY A TENANT'
    ),
    // Exclusive forms
    array(
        'conditions' => array(
            'category' => 'SALE',
            'representing' => 'SELLER',
            'marketing_rights' => 'Exclusive'
        ),
        'status' => 5,
        'title' => 'EXCLUSIVE ESTATE AGENCY AGREEMENT FOR THE SALE OF RESIDENTIAL PROPERTY'
    ),
    array(
        'conditions' => array(
            'category' => 'SALE',
            'representing' => 'BUYER',
            'marketing_rights' => 'Exclusive'
        ),
        'status' => 6,
        'title' => 'EXCLUSIVE ESTATE AGENCY AGREEMENT FOR THE PURCHASE OF RESIDENTIAL PROPERTY'
    ),
    array(
        'conditions' => array(
            'category' => 'RENTAL',
            'representing' => 'LANDLORD',
            'marketing_rights' => 'Exclusive'
        ),
        'status' => 7,
        'title' => 'EXCLUSIVE ESTATE AGENCY AGREEMENT FOR THE LEASE OF RESIDENTIAL PROPERTY BY A LANDLORD'
    ),
    array(
        'conditions' => array(
            'category' => 'RENTAL',
            'representing' => 'TENANT',
            'marketing_rights' => 'Exclusive'
        ),
        'status' => 8,
        'title' => 'EXCLUSIVE ESTATE AGENCY AGREEMENT FOR THE LEASE OF RESIDENTIAL PROPERTY BY A TENANT'
    )
);

// Check each configuration
foreach ($formConfigs as $config) {
    $conditionsMet = true;
    
    // Verify all conditions are met
    foreach ($config['conditions'] as $field => $expectedValue) {
        if (!isset($values[$field]) || $values[$field] !== $expectedValue) {
            $conditionsMet = false;
            break;
        }
    }
    
    // If conditions are met, insert the record
    if ($conditionsMet) {
        // PHPRUNNER-compatible SQL query
        $sql = "INSERT INTO forms 
        (status, category, representing, id_form, id_tx, title, property_address) 
        VALUES (
            ".$config['status'].",
            '".addslashes($values['category'])."',
            '".addslashes($values['representing'])."',
            '".addslashes($values['id'])."',
            '".addslashes($values['ID_Tx'])."',
            '".addslashes($config['title'])."',
            '".addslashes($values['prop_address'])."'
        )";

        
        CustomQuery($sql);
        break; // Exit loop after first match
    }
}

		;
		
	}

	function ProcessValuesAdd( &$values, $pageObject ) {
		$rs = CustomQuery("select max(".AddFieldWrappers("ID_Tx").") as max_number from ".AddTableWrappers("transactions"));
	$data = db_fetch_array($rs);
	if ($data)
	$values['ID_Tx'] = $data['max_number'] + 1;
		;
		
	}

	function BeforeProcessAdd( $pageObject ) {
		$key='$jw6857r707';

global $strWhereClause,
$strTableName,$conn;
$str = "SELECT cast(AES_DECRYPT(unhex(agency_cea_reg), '".$key."') as char) AS agency_cea_reg 
FROM agency WHERE agency_name='".$_SESSION["Agency"]."'";
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
	public function default_salesperson_name_efedit(  ) {
	$defaultValue = $_SESSION["FullName"];
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
	$value = implode(",",$arr);
$value = strtoupper($value);;
return $value;
}

public function custom_namelist_cust_vfview( $value, $data ) {
	$arr = explode(",",$value);
	for ($i=0;$i<count($arr);$i++)
	$arr[$i]=" ".$arr[$i];
	$value = implode(",",$arr);
$value = strtoupper($value);;
return $value;
}

public function custom_alertlist_cust_vfview( $value, $data ) {
	$arr = explode(",",$value);
	for ($i=0;$i<count($arr);$i++)
	$arr[$i]=" ".$arr[$i];
	$value = implode(",",$arr);
$value = strtoupper($value);;
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

public function default_salesperson_email_efedit(  ) {
	$defaultValue = $_SESSION["Email"];
return $defaultValue;
}

public function default_agency_share_efedit(  ) {
	$defaultValue = $_SESSION["AgencyShare"];
return $defaultValue;
}

public function autoupdate_agency_share_efedit(  ) {
	$defaultValue = $_SESSION["AgencyShare"];
return $defaultValue;
}

public function default_percent_to_agency_efedit(  ) {
	$defaultValue = $_SESSION["cut_to_agency"];
return $defaultValue;
}

public function custom_client_vfview( $value, $data ) {
	$value = trim($value,",");

$arr = explode(",", $value);
for ($i=0;$i<count($arr);$i++)
$arr[$i]=" ".$arr[$i];
$value = implode(",", $arr);;
return $value;
}

public function default_agency_efedit(  ) {
	$defaultValue = $_SESSION["Agency"];
return $defaultValue;
}

public function default_agency_cea_efedit(  ) {
	$defaultValue = $_SESSION["AgencyCEA"];
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