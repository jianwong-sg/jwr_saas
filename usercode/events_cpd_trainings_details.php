<?php
class eventclass_cpd_trainings_details  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'AfterAdd' => true,
	'AfterEdit' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'cpd_type' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'dateupdated' => array(
			'edit' => true 
		),
		'cea_reg' => array(
			'edit' => true 
		),
		'name' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'cea_reg' => array(
			'edit' => true 
		),
		'name' => array(
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
		function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		/*
global $strTableName;
if ($_SESSION[$strTableName."_masterkey1"])
{
$str = "select total_cpd_hour from cpd_trainings where cpd_recordid=".$_SESSION[$strTableName."_masterkey1"];
$rstmp = CustomQuery($str);
$datatmp = db_fetch_numarray($rstmp);
$strUpdate = "update cpd_records set cpd_hour=".$values["total_cpd_hour"]." where id=".$_SESSION[$strTableName."_masterkey1"];
CustomQuery($strUpdate);  
}    

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
		/*
global $strTableName;
if ($_SESSION[$strTableName."_masterkey1"])
{
$str = "select total_cpd_hour from cpd_trainings where cpd_recordid=".$_SESSION[$strTableName."_masterkey1"];
$rstmp = CustomQuery($str);
$datatmp = db_fetch_numarray($rstmp);
$strUpdate = "update cpd_records set cpd_hour=".$values["total_cpd_hour"]." where id=".$_SESSION[$strTableName."_masterkey1"];
CustomQuery($strUpdate);  
}    

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
	public function custom_cpd_type_vfview( $value, $data ) {
	if ($value!="Core")
$color="green";
else
$color="red";
$value="<font color='$color'>$value</font>";;
return $value;
}

public function default_dateupdated_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION['cea_reg'];
return $defaultValue;
}

public function autoupdate_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION['cea_reg'];
return $defaultValue;
}

public function default_name_efedit(  ) {
	$defaultValue = $_SESSION['name'];
return $defaultValue;
}

public function autoupdate_name_efedit(  ) {
	$defaultValue = $_SESSION['name'];
return $defaultValue;
}	

}


?>