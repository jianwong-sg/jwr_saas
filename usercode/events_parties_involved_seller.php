<?php
class eventclass_parties_involved_seller  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeShowView' => true,
	'AfterDelete' => true 
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
		'category' => array(
			'edit' => true 
		),
		'tx_address' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'category' => array(
			'edit' => true 
		),
		'tx_address' => array(
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
$pageObject->hideItem("email_type");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function AfterDelete( $where, &$deleted_values, &$message, $pageObject ) {
		CustomQuery("update transactions set client='',cdd_result='',sls_cust='',sls_result='',pps_cust='',
pps_result='',cdd_check_result='' where id='".$deleted_values["id_tx"]."' ");

CustomQuery("delete from cdd_checklist where id_cddlist =".$deleted_values["id_tx"]);

CustomQuery("delete from parties_involved where id_tx='".$deleted_values["id_tx"]."' && role='".$deleted_values["role"]."'");



?>
<script>
parent.location.reload();
</script>
<?php
		;
		
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

}


?>