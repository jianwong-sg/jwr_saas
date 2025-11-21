<?php
class eventclass_cdd_measures  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'AfterAdd' => true,
	'AfterEdit' => true,
	'BeforeAdd' => true,
	'BeforeEdit' => true,
	'AfterDelete' => true,
	'OnPageLoad' => true,
	'BeforeShowList' => true,
	'BeforeProcessAdd' => true,
	'BeforeProcessEdit' => true 
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
		'customer_type' => array(
			'edit' => true 
		),
		'representing' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'customer_type' => array(
			'edit' => true 
		),
		'representing' => array(
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
		global $conn;
 $sql = "UPDATE transactions SET cddmeasure_result = '".$values['measure_result']."' WHERE id = '".$values['id_cddmeasures']."'";
 CustomQuery($sql);


?>
<script>
parent.location.reload();
</script>
<?php
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		global $conn;
 $sql = "UPDATE transactions SET cddmeasure_result = '".$values['measure_result']."' WHERE id = '".$values['id_cddmeasures']."'";
 CustomQuery($sql);


?>
<script>
parent.location.reload(false);
</script>
<?php
		;
		
	}

	function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		//check cdd measures and post result
if($values["measure3"]!='No'||$values["measure4"]!='No'||$values["measure6"]!='No')
$values["measure_result"]="Suspicious Transaction Report Required";
else
$values["measure_result"]="Filing of STR not necessary";


return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		if($values["measure3"]!='No'||$values["measure4"]!='No'||$values["measure6"]!='No')
$values["measure_result"]="Suspicious Transaction Report Required";
else
$values["measure_result"]="Filing of STR not necessary";




return true;
		;
		return true;
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

	function BeforeShowList( &$xt, &$templatefile, $pageObject ) {
		if(isset($_SESSION[$pageObject->tName."_masterkey1"]))
{
$rs=CustomQuery("SELECT * FROM ".$pageObject->tName." WHERE id_cddmeasures=".$_SESSION[$pageObject->tName."_masterkey1"]." limit 0,1 ");
$row=db_fetch_array($rs);
if($row)
$pageObject->hideItem("add");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeProcessAdd( $pageObject ) {
		$data = $pageObject->getMasterRecord();
        $_SESSION["representing"] = $data["representing"];


		;
		
	}

	function BeforeProcessEdit( $pageObject ) {
		$data = $pageObject->getMasterRecord();
        $_SESSION["representing"] = $data["representing"];


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

public function default_customer_type_efedit(  ) {
	$defaultValue = $_SESSION["cust_type"];
return $defaultValue;
}

public function autoupdate_customer_type_efedit(  ) {
	$defaultValue = $_SESSION["cust_type"];
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

public function autoupdate_representing_efedit(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}	

}


?>