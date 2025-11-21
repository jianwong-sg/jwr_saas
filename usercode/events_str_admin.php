<?php
class eventclass_str_admin  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'AfterDelete' => true,
	'BeforeShowList' => true,
	'BeforeShowView' => true 
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
		'ea_name' => array(
			'edit' => true 
		),
		'ea_address' => array(
			'edit' => true 
		),
		'ea_contact' => array(
			'edit' => true 
		),
		'ea_email' => array(
			'edit' => true 
		),
		'officer_name1' => array(
			'edit' => true 
		),
		'designation1' => array(
			'edit' => true 
		),
		'entity_name' => array(
			'edit' => true 
		),
		'country_reg' => array(
			'edit' => true 
		),
		'reg_no' => array(
			'edit' => true 
		),
		'reg_date' => array(
			'edit' => true 
		),
		'entity_address' => array(
			'edit' => true 
		),
		'entity_contact' => array(
			'edit' => true 
		),
		'entity_director_name' => array(
			'edit' => true 
		),
		'biz_activity' => array(
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
		'salesperson_name' => array(
			'edit' => true 
		),
		'salesperson_nric' => array(
			'edit' => true 
		),
		'id_tx' => array(
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
		 
	),
	'uploadFolder' => array(
		 
	),
	'viewPluginInit' => array(
		 
	),
	'editPluginInit' => array(
		 
	) 
);
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

	function BeforeShowList( &$xt, &$templatefile, $pageObject ) {
		if(isset($_SESSION[$pageObject->tName."_masterkey1"]))
{
$rs=CustomQuery("SELECT * FROM ".$pageObject->tName." WHERE id_tx=".$_SESSION[$pageObject->tName."_masterkey1"]." limit 0,1 ");
$row=db_fetch_array($rs);
if($row)
$pageObject->hideItem("add");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
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

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	public function default_ea_name_efedit(  ) {
	$defaultValue = $_SESSION["agency"];
return $defaultValue;
}

public function default_ea_address_efedit(  ) {
	$defaultValue = $_SESSION["agency_address"];
return $defaultValue;
}

public function default_ea_contact_efedit(  ) {
	$defaultValue = $_SESSION["agency_tel"];
return $defaultValue;
}

public function default_ea_email_efedit(  ) {
	$defaultValue = $_SESSION["agency_email"];
return $defaultValue;
}

public function default_officer_name1_efedit(  ) {
	$defaultValue = $_SESSION["full_name"];
return $defaultValue;
}

public function default_designation1_efedit(  ) {
	$defaultValue = $_SESSION["designation"];
return $defaultValue;
}

public function default_entity_name_efedit(  ) {
	$defaultValue = $_SESSION["name"];
return $defaultValue;
}

public function default_country_reg_efedit(  ) {
	$defaultValue = $_SESSION["country_incorporation"];
return $defaultValue;
}

public function default_reg_no_efedit(  ) {
	$defaultValue = $_SESSION["nric"];
return $defaultValue;
}

public function default_reg_date_efedit(  ) {
	$defaultValue = $_SESSION["reg_date"];
return $defaultValue;
}

public function default_entity_address_efedit(  ) {
	$defaultValue = $_SESSION["address"];
return $defaultValue;
}

public function default_entity_contact_efedit(  ) {
	$defaultValue = $_SESSION["office_tel"];
return $defaultValue;
}

public function default_entity_director_name_efedit(  ) {
	$defaultValue = $_SESSION["contact_person"];
return $defaultValue;
}

public function default_biz_activity_efedit(  ) {
	$defaultValue = $_SESSION["trade"];
return $defaultValue;
}

public function default_indi_name_efedit(  ) {
	$defaultValue = $_SESSION["indiv_name"];
return $defaultValue;
}

public function default_prop_address_efedit(  ) {
	$defaultValue = $_SESSION["prop_address"];
return $defaultValue;
}

public function default_prop_tenure_efedit(  ) {
	$defaultValue = $_SESSION["tenure"];
return $defaultValue;
}

public function default_prop_type_efedit(  ) {
	$defaultValue = $_SESSION["prop_type"];
return $defaultValue;
}

public function default_transact_type_efedit(  ) {
	$defaultValue = $_SESSION["category"];
return $defaultValue;
}

public function default_transact_price_efedit(  ) {
	$defaultValue = $_SESSION["transacted_price"];
return $defaultValue;
}

public function default_valuation_efedit(  ) {
	$defaultValue = $_SESSION["valuation_price"];
return $defaultValue;
}

public function default_lease_period_efedit(  ) {
	$defaultValue = $_SESSION["lease_period"];
return $defaultValue;
}

public function default_salesperson_name_efedit(  ) {
	$defaultValue = $_SESSION["salesperson_name"];
return $defaultValue;
}

public function default_salesperson_nric_efedit(  ) {
	$defaultValue = $_SESSION["salesperson_nric"];
return $defaultValue;
}

public function default_id_tx_efedit(  ) {
	$defaultValue = $_SESSION["id"];
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

public function default_party_id_efedit(  ) {
	$defaultValue = $_SESSION[party_id];
return $defaultValue;
}	

}


?>