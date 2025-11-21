<?php
class eventclass_cdd_checklist_admin  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'AfterDelete' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'cdd_checklist_customer' => array(
			'view' => true 
		),
		'results2' => array(
			'view' => true 
		),
		'cdd_checklist_customer_nric' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'checked_by' => array(
			'edit' => true 
		),
		'id_cddlist' => array(
			'edit' => true 
		),
		'checked_date' => array(
			'edit' => true 
		),
		'checked_by_cea' => array(
			'edit' => true 
		),
		'representing' => array(
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
		CustomQuery("update transactions set client='',client_id='',client_type='',cdd_result='',sls_cust='',sls_result='',pps_cust='',
pps_result='',cdd_check_result='',name_cust='',namelist_result='' where id=".$deleted_values["id_cddlist"]);

CustomQuery("delete from cdd_measures where id_cddmeasures =".$deleted_values["id_cddlist"]);
CustomQuery("delete from str where id_tx =".$deleted_values["id_cddlist"]);
?>
<script>
parent.location.reload();
</script>
<?php

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	public function default_checked_by_efedit(  ) {
	$defaultValue = $_SESSION["FullName"];
return $defaultValue;
}

public function custom_cdd_checklist_customer_vfview( $value, $data ) {
	$arr = explode(",",$value);
for ($i=0;$i<count($arr);$i++)
$arr[$i]=" ".$arr[$i];
$value = implode(",",$arr);;
return $value;
}

public function default_id_cddlist_efedit(  ) {
	$defaultValue = $_SESSION["id"];
return $defaultValue;
}

public function custom_results2_vfview( $value, $data ) {
	$color="#FF4500";
$value="<font color='$color'>$value</font>";;
return $value;
}

public function default_checked_date_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_checked_by_cea_efedit(  ) {
	$defaultValue = $_SESSION["UserID"];
return $defaultValue;
}

public function default_representing_efedit(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}

public function custom_cdd_checklist_customer_nric_vfview( $value, $data ) {
	$arr = explode(",",$value);
	for ($i=0;$i<count($arr);$i++)
	$arr[$i]=" ".$arr[$i];
	$value = implode(",",$arr);;
return $value;
}	

}


?>