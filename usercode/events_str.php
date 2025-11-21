<?php
class eventclass_str  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeAdd' => true,
	'BeforeEdit' => true,
	'OnPageLoad' => true,
	'AfterAdd' => true,
	'AfterEdit' => true,
	'AfterDelete' => true,
	'BeforeShowAdd' => true,
	'BeforeShowEdit' => true,
	'BeforeShowView' => true,
	'BeforeProcessAdd' => true,
	'BeforeProcessEdit' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'indi_name' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'ea_name' => array(
			'edit' => true 
		),
		'entity_name' => array(
			'edit' => true 
		),
		'indi_name' => array(
			'edit' => true 
		),
		'prop_address' => array(
			'edit' => true 
		),
		'prop_tenure' => array(
			'edit' => true 
		),
		'prop_type' => array(
			'edit' => true 
		),
		'transact_type' => array(
			'edit' => true 
		),
		'transact_price' => array(
			'edit' => true 
		),
		'valuation' => array(
			'edit' => true 
		),
		'lease_period' => array(
			'edit' => true 
		),
		'lease_period_unit' => array(
			'edit' => true 
		),
		'salesperson_name' => array(
			'edit' => true 
		),
		'salesperson_nric' => array(
			'edit' => true 
		),
		'suspicious_amount' => array(
			'edit' => true 
		),
		'suspicious_date' => array(
			'edit' => true 
		),
		'id_tx' => array(
			'edit' => true 
		),
		'customer_type' => array(
			'edit' => true 
		),
		'filing_date' => array(
			'edit' => true 
		),
		'represnting' => array(
			'edit' => true 
		),
		'party_id' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'ea_name' => array(
			'edit' => true 
		),
		'entity_name' => array(
			'edit' => true 
		),
		'indi_name' => array(
			'edit' => true 
		),
		'prop_address' => array(
			'edit' => true 
		),
		'prop_tenure' => array(
			'edit' => true 
		),
		'prop_type' => array(
			'edit' => true 
		),
		'transact_type' => array(
			'edit' => true 
		),
		'transact_price' => array(
			'edit' => true 
		),
		'valuation' => array(
			'edit' => true 
		),
		'lease_period' => array(
			'edit' => true 
		),
		'lease_period_unit' => array(
			'edit' => true 
		),
		'salesperson_name' => array(
			'edit' => true 
		),
		'salesperson_nric' => array(
			'edit' => true 
		),
		'suspicious_amount' => array(
			'edit' => true 
		),
		'suspicious_date' => array(
			'edit' => true 
		),
		'id_tx' => array(
			'edit' => true 
		),
		'customer_type' => array(
			'edit' => true 
		),
		'represnting' => array(
			'edit' => true 
		),
		'party_id' => array(
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
		$values["relationship_with_subject"]=strtoupper($values["relationship_with_subject"]);
$values["report_ref"]=strtoupper($values["report_ref"]);
$values["officer_name2"]=strtoupper($values["officer_name2"]);
$values["designation2"]=strtoupper($values["designation2"]);
$values["entity_foreign_address"]=strtoupper($values["entity_foreign_address"]);
$values["entity_director_name"]=strtoupper($values["entity_director_name"]);
$values["biz_activity"]=strtoupper($values["biz_activity"]);
$values["bo_name"]=strtoupper($values["bo_name"]);
$values["indi_address_foreign"]=strtoupper($values["indi_address_foreign"]);
$values["indi_employer"]=strtoupper($values["indi_employer"]);
$values["indi_bank_details"]=strtoupper($values["indi_bank_details"]);
$values["indi_bo_name"]=strtoupper($values["indi_bo_name"]);
$values["description"]=strtoupper($values["description"]);
$values["reason_suspicion"]=strtoupper($values["reason_suspicion"]);
$values["other_info"]=strtoupper($values["other_info"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["relationship_with_subject"]=strtoupper($values["relationship_with_subject"]);
$values["report_ref"]=strtoupper($values["report_ref"]);
$values["officer_name2"]=strtoupper($values["officer_name2"]);
$values["designation2"]=strtoupper($values["designation2"]);
$values["entity_foreign_address"]=strtoupper($values["entity_foreign_address"]);
$values["entity_director_name"]=strtoupper($values["entity_director_name"]);
$values["biz_activity"]=strtoupper($values["biz_activity"]);
$values["bo_name"]=strtoupper($values["bo_name"]);
$values["indi_address_foreign"]=strtoupper($values["indi_address_foreign"]);
$values["indi_employer"]=strtoupper($values["indi_employer"]);
$values["indi_bank_details"]=strtoupper($values["indi_bank_details"]);
$values["indi_bo_name"]=strtoupper($values["indi_bo_name"]);
$values["description"]=strtoupper($values["description"]);
$values["reason_suspicion"]=strtoupper($values["reason_suspicion"]);
$values["other_info"]=strtoupper($values["other_info"]);


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		//empty individual info
if($values['customer_type']=='ENTITY')
{
CustomQuery("UPDATE str SET indi_name='',indi_id='',
indi_dob='',indi_nationalty='',indi_address='',indi_address_foreign='',
indi_contact='',indi_occupation='',indi_employer='',indi_bank_details='',indi_bo_name='' WHERE id=".$values['id']);
}
//empty entity info
if($values['customer_type']=='INDIVIDUAL')
{
CustomQuery("UPDATE str SET entity_name='',country_reg='',
reg_no='',reg_date='',entity_address='',entity_foreign_address='',
entity_contact='',entity_director_name='',biz_activity='',bo_name='' WHERE id=".$values['id']);
}

//update filing date in tx
global $conn;
 $sql = "UPDATE transactions SET str_filing_date = '".$values['filing_date']."' WHERE id = '".$values['id_tx']."'";
 CustomQuery($sql);

/*
?>
<script>
parent.location.reload();
</script>
<?php
*/
// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		if($values['customer_type']=='ENTITY')
{
CustomQuery("UPDATE str SET indi_name='',indi_id='',
indi_dob='',indi_nationalty='',indi_address='',indi_address_foreign='',
indi_contact='',indi_occupation='',indi_employer='',indi_bank_details='',indi_bo_name='' WHERE id=".$values['id']);
}

if($values['customer_type']=='INDIVIDUAL')
{
CustomQuery("UPDATE str SET entity_name='',country_reg='',
reg_no='',reg_date='',entity_address='',entity_foreign_address='',
entity_contact='',entity_director_name='',biz_activity='',bo_name='' WHERE id=".$values['id']);
}

//update filing date in tx
global $conn;
 $sql = "UPDATE transactions SET str_filing_date = '".$values['filing_date']."' WHERE id = '".$values['id_tx']."'";
 CustomQuery($sql);

/*
?>
<script>
parent.location.reload();
</script>
<?php
*/
// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function AfterDelete( $where, &$deleted_values, &$message, $pageObject ) {
		CustomQuery("UPDATE transactions SET str_filing_date=NULL WHERE id=".$deleted_values["id_tx"]);

?>
<script>
parent.location.reload();
</script>
<?php

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeShowAdd( &$xt, &$templatefile, $pageObject ) {
		if ($values["transact_type"]=="Sale")
{
$pageObject->hideItem("lease_period");
$pageObject->hideItem("lease_period_unit");
$pageObject->showItem("valuation");
}

if ($values["transact_type"]=="Lease")
{
$pageObject->showItem("lease_period");
$pageObject->showItem("lease_period_unit");
$pageObject->hideItem("valuation");
}
		;
		
	}

	function BeforeShowEdit( &$xt, &$templatefile, $values, $pageObject ) {
		if ($values["transact_type"]=="Sale")
{
$pageObject->hideItem("lease_period");
$pageObject->hideItem("lease_period_unit");
$pageObject->showItem("valuation");
}

if ($values["transact_type"]=="Lease")
{
$pageObject->showItem("lease_period");
$pageObject->showItem("lease_period_unit");
$pageObject->hideItem("valuation");
}
		;
		
	}

	function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
		if ($values["customer_type"]=="INDIVIDUAL")
{
$pageObject->hideItem("entity_info_section");
$pageObject->showItem("client_info_section");
}

if ($values["customer_type"]=="ENTITY")
{
$pageObject->showItem("entity_info_section");
$pageObject->hideItem("client_info_section");
}


if ($values["transact_type"]=="Sale")
{
$pageObject->hideItem("lease_period");
$pageObject->hideItem("lease_period_unit");
$pageObject->showItem("valuation");
}

if ($values["transact_type"]=="Lease")
{
$pageObject->showItem("lease_period");
$pageObject->showItem("lease_period_unit");
$pageObject->hideItem("valuation");
}
		;
		
	}

	function BeforeProcessAdd( $pageObject ) {
		$data = $pageObject->getMasterRecord();
{
        $_SESSION["representing"] = $data["representing"];
        $_SESSION["cust_type"] = $data["client_type"];
        $_SESSION["custid"] = $data["client_id"];
        $_SESSION["prop_address"] = $data["prop_address"];
        $_SESSION["prop_tenure"] = $data["tenure"];
        $_SESSION["prop_type"] = $data["prop_type"];
        $_SESSION["transact_type"] = $data["category"];
        $_SESSION["transact_price"] = $data["transacted_price"];
        $_SESSION["valuation"] = $data["valuation_price"];
        $_SESSION["lease_period"] = $data["lease_duration_no"];
        $_SESSION["lease_period_unit"] = $data["lease_duration_unit"];
        $_SESSION["client_name"] = $data["client"];
        $_SESSION["client_nric"] = $data["client_nric"];
        $_SESSION["date"] = $data["date"];
}


		;
		
	}

	function BeforeProcessEdit( $pageObject ) {
		$data = $pageObject->getMasterRecord();
{
        $_SESSION["representing"] = $data["representing"];
        $_SESSION["cust_type"] = $data["client_type"];
        $_SESSION["custid"] = $data["client_id"];
        $_SESSION["prop_address"] = $data["prop_address"];
        $_SESSION["prop_tenure"] = $data["tenure"];
        $_SESSION["prop_type"] = $data["prop_type"];
        $_SESSION["transact_type"] = $data["category"];
        $_SESSION["transact_price"] = $data["transacted_price"];
        $_SESSION["valuation"] = $data["valuation_price"];
        $_SESSION["lease_period"] = $data["lease_duration_no"];
        $_SESSION["lease_period_unit"] = $data["lease_duration_unit"];
        $_SESSION["client_name"] = $data["client"];
        $_SESSION["client_nric"] = $data["client_nric"];
        $_SESSION["date"] = $data["date"];
}


		;
		
	}
	public function default_ea_name_efedit(  ) {
	$defaultValue = $_SESSION["Agency"];
return $defaultValue;
}

public function autoupdate_ea_name_efedit(  ) {
	$defaultValue = $_SESSION["Agency"];
return $defaultValue;
}

public function default_entity_name_efedit(  ) {
	$defaultValue = $_SESSION["client_name"];
return $defaultValue;
}

public function autoupdate_entity_name_efedit(  ) {
	$defaultValue = $_SESSION["client_name"];
return $defaultValue;
}

public function custom_indi_name_vfview( $value, $data ) {
	$arr = explode(",",$value);
	for ($i=0;$i<count($arr);$i++)
	$arr[$i]=" ".$arr[$i];
	$value = implode(",",$arr);;
return $value;
}

public function default_indi_name_efedit(  ) {
	$defaultValue = $_SESSION["client_name"];
return $defaultValue;
}

public function autoupdate_indi_name_efedit(  ) {
	$defaultValue = $_SESSION["client_name"];
return $defaultValue;
}

public function default_prop_address_efedit(  ) {
	$defaultValue = $_SESSION["prop_address"];
return $defaultValue;
}

public function autoupdate_prop_address_efedit(  ) {
	$defaultValue = $_SESSION["prop_address"];
return $defaultValue;
}

public function default_prop_tenure_efedit(  ) {
	$defaultValue = $_SESSION["prop_tenure"];
return $defaultValue;
}

public function autoupdate_prop_tenure_efedit(  ) {
	$defaultValue = $_SESSION["prop_tenure"];
return $defaultValue;
}

public function default_prop_type_efedit(  ) {
	$defaultValue = $_SESSION["prop_type"];
return $defaultValue;
}

public function autoupdate_prop_type_efedit(  ) {
	$defaultValue = $_SESSION["prop_type"];
return $defaultValue;
}

public function default_transact_type_efedit(  ) {
	$defaultValue = $_SESSION["transact_type"];
return $defaultValue;
}

public function autoupdate_transact_type_efedit(  ) {
	$defaultValue = $_SESSION["transact_type"];
return $defaultValue;
}

public function default_transact_price_efedit(  ) {
	$defaultValue = $_SESSION["transact_price"];
return $defaultValue;
}

public function autoupdate_transact_price_efedit(  ) {
	$defaultValue = $_SESSION["transact_price"];
return $defaultValue;
}

public function default_valuation_efedit(  ) {
	$defaultValue = $_SESSION["valuation"];
return $defaultValue;
}

public function autoupdate_valuation_efedit(  ) {
	$defaultValue = $_SESSION["valuation"];
return $defaultValue;
}

public function default_lease_period_efedit(  ) {
	$defaultValue = $_SESSION["lease_period"];
return $defaultValue;
}

public function autoupdate_lease_period_efedit(  ) {
	$defaultValue = $_SESSION["lease_period"];
return $defaultValue;
}

public function default_lease_period_unit_efedit(  ) {
	$defaultValue = $_SESSION["lease_period_unit"];
return $defaultValue;
}

public function autoupdate_lease_period_unit_efedit(  ) {
	$defaultValue = $_SESSION["lease_period_unit"];
return $defaultValue;
}

public function default_salesperson_name_efedit(  ) {
	$defaultValue = $_SESSION["FullName"];
return $defaultValue;
}

public function autoupdate_salesperson_name_efedit(  ) {
	$defaultValue = $_SESSION["FullName"];
return $defaultValue;
}

public function default_salesperson_nric_efedit(  ) {
	$defaultValue = $_SESSION["AgentNric"];
return $defaultValue;
}

public function autoupdate_salesperson_nric_efedit(  ) {
	$defaultValue = $_SESSION["AgentNric"];
return $defaultValue;
}

public function default_suspicious_amount_efedit(  ) {
	$defaultValue = $_SESSION["transact_price"];
return $defaultValue;
}

public function autoupdate_suspicious_amount_efedit(  ) {
	$defaultValue = $_SESSION["transact_price"];
return $defaultValue;
}

public function default_suspicious_date_efedit(  ) {
	$defaultValue = $_SESSION["date"];
return $defaultValue;
}

public function autoupdate_suspicious_date_efedit(  ) {
	$defaultValue = $_SESSION["date"];
return $defaultValue;
}

public function default_id_tx_efedit(  ) {
	$defaultValue = $_SESSION["id"];
return $defaultValue;
}

public function autoupdate_id_tx_efedit(  ) {
	$defaultValue = $_SESSION["id"];
return $defaultValue;
}

public function default_customer_type_efedit(  ) {
	$defaultValue = $_SESSION["cust_type"];
return $defaultValue;
}

public function autoupdate_customer_type_efedit(  ) {
	$defaultValue = $_SESSION["cust_type"];
return $defaultValue;
}

public function default_filing_date_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_represnting_efedit(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}

public function autoupdate_represnting_efedit(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}

public function default_party_id_efedit(  ) {
	$defaultValue = $_SESSION["custid"];
return $defaultValue;
}

public function autoupdate_party_id_efedit(  ) {
	$defaultValue = $_SESSION["custid"];
return $defaultValue;
}	

}


?>