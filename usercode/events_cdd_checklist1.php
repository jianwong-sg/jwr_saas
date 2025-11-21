<?php
class eventclass_cdd_checklist1  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true 
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
			'edit' => true,
			'register' => true,
			'add' => true 
		),
		'checked_date' => array(
			'edit' => true 
		),
		'checked_by_cea' => array(
			'edit' => true 
		),
		'representing' => array(
			'edit' => true,
			'register' => true,
			'add' => true 
		),
		'cdd_checklist_custype' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'id_cddlist' => array(
			'edit' => true 
		),
		'representing' => array(
			'edit' => true 
		),
		'cdd_checklist_custype' => array(
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

public function autoupdate_id_cddlist_efedit(  ) {
	$defaultValue = $_SESSION["id"];
return $defaultValue;
}

public function default_id_cddlist_efregister(  ) {
	$defaultValue = $_SESSION["id"];
return $defaultValue;
}

public function default_id_cddlist_efadd(  ) {
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

public function autoupdate_representing_efedit(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}

public function default_representing_efregister(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}

public function default_representing_efadd(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}

public function default_cdd_checklist_custype_efedit(  ) {
	$defaultValue = $_SESSION["cust_type"];
return $defaultValue;
}

public function autoupdate_cdd_checklist_custype_efedit(  ) {
	$defaultValue = $_SESSION["cust_type"];
return $defaultValue;
}	

}


?>