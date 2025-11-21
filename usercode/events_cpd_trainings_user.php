<?php
class eventclass_cpd_trainings_user  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'AfterAdd' => true,
	'AfterEdit' => true,
	'OnPageLoad' => true,
	'BeforeShowList' => true,
	'BeforeProcessList' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'cpd_type' => array(
			'view' => true 
		),
		'period' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'cea_reg' => array(
			'edit' => true 
		),
		'name' => array(
			'edit' => true 
		),
		'period' => array(
			'edit' => true 
		),
		'dateupdated' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'period' => array(
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
		//**********  Redirect to another page  ************
header("Location: cpd_trainings_user_list.php");
exit();



// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		header("Location: cpd_trainings_user_list.php");
exit();

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeShowList( &$xt, &$templatefile, $pageObject ) {
		$xt->assign("searchbutton1", false);
$xt->assign("searchbutton2", false);


// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeProcessList( $pageObject ) {
		$_SESSION["period"]="";

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	public function default_cea_reg_efedit(  ) {
	$defaultValue = $_SESSION["UserID"];
return $defaultValue;
}

public function default_name_efedit(  ) {
	$defaultValue = $_SESSION["FullName"];
return $defaultValue;
}

public function custom_cpd_type_vfview( $value, $data ) {
	if ($value!="Core")
$color="green";
else
$color="red";
$value="<font color='$color'>$value</font>";;
return $value;
}

public function custom_period_vfview( $value, $data ) {
	if ($value==$_SESSION["period"])
$value="";
else
$_SESSION["period"]=$value;;
return $value;
}

public function default_period_efedit(  ) {
	$defaultValue = $_SESSION["period"];
return $defaultValue;
}

public function autoupdate_period_efedit(  ) {
	$defaultValue = $_SESSION["period"];
return $defaultValue;
}

public function default_dateupdated_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}	

}


?>