<?php
class eventclass_lor4_lease_due  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeShowView' => true,
	'BeforeAdd' => true,
	'BeforeQueryList' => true,
	'BeforeShowList' => true 
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
		'date' => array(
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

	function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$values["transacted_price"] = $values["rental_price"]+$values["sale_price"]+$values["management_fee"]+$values["consultation_fee"];
$values["result"]=strtoupper($values["result"]);
return true;
		;
		return true;
	}

	function BeforeQueryList( &$strSQL, &$strWhereClause, &$strOrderBy, $pageObject ) {
		// Filter lease expiry in the next 2 months, 
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

	function BeforeShowList( &$xt, &$templatefile, $pageObject ) {
		/*
$xt->assign("listIcons_column",false);

$xt->assign("container_breadcrumbs",false);
$xt->assign("container_gridcontrols",false);
$xt->assign("container_tabs",false);

$xt->assign("supertop_block",false);
*/
$xt->assign("header",false);

$xt->assign("footer",false);
		;
		
	}
	public function default_date_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}	

}


?>