<?php
class eventclass_form_all  extends TableEventsBase {
	
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
		'id' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		 
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
	
	public function custom_id_vfview( $value, $data ) {
	$value = "<a href=\"forms_view.php?editid1=".$value."\">".$value."</a>";;
return $value;
}	

}


?>