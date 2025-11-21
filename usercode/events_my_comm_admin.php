<?php
class eventclass_my_comm_admin  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeShowView' => true,
	'OnPageLoad' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'sls_result' => array(
			'view' => true 
		),
		'pps_result' => array(
			'view' => true 
		),
		'status_status' => array(
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
			'edit' => true,
			'register' => true,
			'add' => true,
			'search' => true 
		),
		'currency' => array(
			'edit' => true 
		),
		'rental_price_type' => array(
			'edit' => true 
		),
		'status_status' => array(
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
		'salesperson_email' => array(
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
		function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
		if ($values["cdd_result"]=="")
{
$xt->assign("details_cdd_measures",false);
$xt->assign("details_pps_check",false);
$xt->assign("details_un_sanction_check",false);
$xt->assign("details_str",false);
}

if ($values["category"]=="SALE")
$xt->assign("comm_unit",false);

if ($values["category"]=="RENTAL"||$values["category"]=="ASSIGNMENT")
$xt->assign("comm_percent",false);

if ($values["category"]=="PROPERTY MANAGEMENT")
{
$xt->assign("comm_unit",false);
$xt->assign("comm_percent",false);
}

$xt->assign("edit_button", true);
	$xt->assign("send_button", true);

	if( $_SESSION["UserID"] == "Guest" )
	{
			$xt->assign("back_button", false);
			$xt->assign("edit_button", false);
			$xt->assign("send_button", false);
	}

	$xt->assign("editid1_value", $values['id']);

	$pdfButtonAttrs = set_pdfButtonAttrs();
	$xt->assign("pdfbutton_attrs", $pdfButtonAttrs);

	if( !postvalue("pdf") )
		$xt->assign("buttons-container", true);

	makeAdditionalPdfPreparations($xt, $pageObject);
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

public function default_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION["cea_reg"];
return $defaultValue;
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

public function default_currency_efedit(  ) {
	$defaultValue = "SGD";
return $defaultValue;
}

public function default_rental_price_type_efedit(  ) {
	$defaultValue = "per month";
return $defaultValue;
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

public function custom_status_status_vfview( $value, $data ) {
	if ($value=="Submitted")
$color="dark grey";
else if ($value=="Approved")
$color="green";
else
$color="red";

$value="<font color='$color'>$value</font>";;
return $value;
}

public function default_status_status_efedit(  ) {
	$defaultValue = "Draft";
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

}


?>