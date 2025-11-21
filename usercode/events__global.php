<?php
class eventclass__global  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'cut_to_agency' => array(
			'view' => true 
		),
		'salesperson_share' => array(
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
	
	public function custom_cut_to_agency_vfview( $value, $data ) {
	$value=$value."%";;
return $value;
}

public function custom_salesperson_share_vfview( $value, $data ) {
	$value=$value."%";;
return $value;
}	

}


?>