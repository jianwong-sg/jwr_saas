<?php
class eventclass_digital_form  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'AfterAdd' => true,
	'BeforeProcessEdit' => true,
	'AfterEdit' => true,
	'BeforeProcessView' => true,
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
		'date_added' => array(
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
		function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		$_SESSION["id_tx"] = $values["id"];
$_SESSION["form_page"]="transaction";
		;
		
	}

	function BeforeProcessEdit( $pageObject ) {
		$str = "SELECT id FROM forms where id_tx=".postvalue("editid1");
$rs = CustomQuery($str);
if($data = db_fetch_array($rs))
	$pageObject->setProxyValue("formid", $data["id"]);
else
	$pageObject->setProxyValue("formid", "");
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		$_SESSION["id_tx"] = $values["id"];
$_SESSION["form_page"]="transaction";
		;
		
	}

	function BeforeProcessView( $pageObject ) {
		$str = "SELECT id, status FROM forms WHERE id_tx=".postvalue("editid1");
$rs = CustomQuery($str);
if($data = db_fetch_array($rs)){
	$pageObject->setProxyValue("formid", $data["id"]);
	$pageObject->setProxyValue("formstatus", $data["status"]);
	$_SESSION["form_page"]="transaction";
}
else{
	$pageObject->setProxyValue("formid", "");
	$pageObject->setProxyValue("formstatus", "");
	$_SESSION["form_page"]="transaction";
}
		;
		
	}

	function AfterDelete( $where, &$deleted_values, &$message, $pageObject ) {
		CustomQuery("delete from forms where id_tx =".$deleted_values["id"]);

//refresh record without reloading
?>
<script>
Runner.runnerAJAX(Runner.pages.getUrl(pageObj.tName, pageObj.pageType)+"?a=return",
pageObj.ajaxBaseParams,
function(respObj){
pageObj.pageReloadHn.call(pageObj, respObj)
});
</script>
<?php

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	public function default_date_added_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}	

}


?>