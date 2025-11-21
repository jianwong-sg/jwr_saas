<?php
class eventclass_cdd_measures_admin  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'AfterDelete' => true,
	'OnPageLoad' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'cdd_measure_customer' => array(
			'view' => true 
		),
		'customer_nric' => array(
			'view' => true 
		),
		'measure_result' => array(
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
		'checked_date' => array(
			'edit' => true 
		),
		'id_cddmeasures' => array(
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
		CustomQuery("UPDATE transactions SET cdd_check_result='' WHERE id=".$deleted_values["id_cddmeasures"]);

CustomQuery("DELETE FROM str WHERE id_tx=".$deleted_values["id_cddmeasures"]);


?>
<script>
parent.location.reload();
</script>
<?php
// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	public function custom_cdd_measure_customer_vfview( $value, $data ) {
	$arr = explode(",",$value);
for ($i=0;$i<count($arr);$i++)
$arr[$i]=" ".$arr[$i];
$value = implode(",",$arr);;
return $value;
}

public function default_checked_by_efedit(  ) {
	$defaultValue = $_SESSION["full_name"];
return $defaultValue;
}

public function default_checked_date_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function custom_customer_nric_vfview( $value, $data ) {
	$arr = explode(",",$value);
	for ($i=0;$i<count($arr);$i++)
	$arr[$i]=" ".$arr[$i];
	$value = implode(",",$arr);;
return $value;
}

public function default_id_cddmeasures_efedit(  ) {
	$defaultValue = $_SESSION["id"];
return $defaultValue;
}

public function custom_measure_result_vfview( $value, $data ) {
	if($value=='Filing of STR not necessary')
{
$v="<font color=#16E80C>".$value."</font>";
}else
{
$v="<font color=#FF4500>".$value."</font>";
}

$value=$v;;
return $value;
}

public function default_representing_efedit(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}	

}


?>