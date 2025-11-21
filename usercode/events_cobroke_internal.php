<?php
class eventclass_cobroke_internal  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'AfterDelete' => true,
	'BeforeShowList' => true,
	'OnPageLoad' => true,
	'BeforeProcessAdd' => true,
	'BeforeProcessEdit' => true 
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
		'prop_address' => array(
			'edit' => true 
		),
		'prop_postal' => array(
			'edit' => true 
		),
		'username' => array(
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
		//$xt->assign("view_column",false);


// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeProcessAdd( $pageObject ) {
		$data = $pageObject->getMasterRecord();
{
        $_SESSION["category"] = $data["category"];
        $_SESSION["prop_address"] = $data["prop_address"];
        $_SESSION["prop_name"] = $data["prop_name"];
}


		;
		
	}

	function BeforeProcessEdit( $pageObject ) {
		$data = $pageObject->getMasterRecord();
{
        $_SESSION["category"] = $data["category"];
        $_SESSION["prop_address"] = $data["prop_address"];
        $_SESSION["prop_name"] = $data["prop_name"];
}


		;
		
	}
	public function default_category_efedit(  ) {
	$defaultValue = $_SESSION["category"];
return $defaultValue;
}

public function default_prop_address_efedit(  ) {
	$defaultValue = $_SESSION["prop_address"];
return $defaultValue;
}

public function default_prop_postal_efedit(  ) {
	$defaultValue = $_SESSION["prop_postal"];
return $defaultValue;
}

public function default_username_efedit(  ) {
	$defaultValue = $_SESSION["UserID"];
return $defaultValue;
}	

}


?>