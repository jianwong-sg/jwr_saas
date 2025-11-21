<?php
class eventclass_contacts  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeAdd' => true,
	'BeforeEdit' => true,
	'OnPageLoad' => true 
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
		function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$values["name"]=strtoupper($values["name"]);
$values["nric"]=strtoupper($values["nric"]);
$values["address"]=strtoupper($values["address"]);
$values["trade"]=strtoupper($values["trade"]);
$values["contact_person"]=strtoupper($values["contact_person"]);
$values["destination"]=strtoupper($values["destination"]);
$values["email"]=strtoupper($values["email"]);
$values["biz_email"]=strtoupper($values["biz_email"]);
$values["contact_person_id"]=strtoupper($values["contact_person_id"]);
$values["contact_email"]=strtoupper($values["contact_email"]);

$str = $values["remarks"]; 
for ($i=0; $i<strlen($str); $i++){ 
if ($i==0) { 
$b = True; 
} 
else 
$b = (substr($str, $i-1,1) == " "); 
if ($b) 
$str = substr($str,0,$i).strtoupper(substr($str, $i,1)).substr($str, $i+1); 
} 
$values["remarks"] = $str; 

$sql=CustomQuery("SELECT count(*) as rowcount FROM prop_data WHERE address='".strtoupper($values["address"])."' OR postal='".$values["postal"]."'");
$row=db_fetch_array($sql);
if($row['rowcount'] > 0){
CustomQuery("UPDATE prop_data SET address='".strtoupper($values["address"])."',postal='".$values["postal"]."' WHERE (address='".strtoupper($values["address"])."' OR postal='".$values["postal"]."')");
} else {
CustomQuery("INSERT INTO prop_data SET address='".strtoupper($values["address"])."',postal='".$values["postal"]."'");
}
return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["name"]=strtoupper($values["name"]);
$values["nric"]=strtoupper($values["nric"]);
$values["address"]=strtoupper($values["address"]);
$values["trade"]=strtoupper($values["trade"]);
$values["contact_person"]=strtoupper($values["contact_person"]);
$values["destination"]=strtoupper($values["destination"]);
$values["email"]=strtoupper($values["email"]);
$values["biz_email"]=strtoupper($values["biz_email"]);
$values["contact_person_id"]=strtoupper($values["contact_person_id"]);
$values["contact_email"]=strtoupper($values["contact_email"]);

$str = $values["remarks"]; 
for ($i=0; $i<strlen($str); $i++){ 
if ($i==0) { 
$b = True; 
} 
else 
$b = (substr($str, $i-1,1) == " "); 
if ($b) 
$str = substr($str,0,$i).strtoupper(substr($str, $i,1)).substr($str, $i+1); 
} 
$values["remarks"] = $str; 

$sql=CustomQuery("SELECT count(*) as rowcount FROM prop_data WHERE address='".strtoupper($values["address"])."' OR postal='".$values["postal"]."'");
$row=db_fetch_array($sql);
if($row['rowcount'] > 0){
CustomQuery("UPDATE prop_data SET address='".strtoupper($values["address"])."',postal='".$values["postal"]."' WHERE (address='".strtoupper($values["address"])."' OR postal='".$values["postal"]."')");
} else {
CustomQuery("INSERT INTO prop_data SET address='".strtoupper($values["address"])."',postal='".$values["postal"]."'");
}
return true;
		;
		return true;
	}
		

}


?>