<?php
class eventclass_form1  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeShowView' => true,
	'BeforeAdd' => true,
	'BeforeEdit' => true,
	'OnPageLoad' => true,
	'BeforeProcessEdit' => true,
	'BeforeProcessAdd' => true,
	'AfterAdd' => true,
	'AfterEdit' => true,
	'AfterDelete' => true,
	'BeforeShowAdd' => true,
	'BeforeShowEdit' => true,
	'BeforeMoveNextList' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'id' => array(
			'view' => true 
		),
		'status' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'salesperson' => array(
			'edit' => true 
		),
		'salesperson_cea' => array(
			'edit' => true 
		),
		'salesperson_contact' => array(
			'edit' => true 
		),
		'estateagent' => array(
			'edit' => true 
		),
		'estateagent_cea' => array(
			'edit' => true 
		),
		'GST' => array(
			'edit' => true 
		),
		'additional_term' => array(
			'edit' => true 
		),
		'form_name' => array(
			'edit' => true 
		),
		'estateagent_address' => array(
			'edit' => true 
		),
		'salesperson_ic' => array(
			'edit' => true 
		),
		'salesperson_address' => array(
			'edit' => true 
		),
		'estateagent_tel' => array(
			'edit' => true 
		),
		'estateagent2' => array(
			'edit' => true 
		),
		'estateagent_cea2' => array(
			'edit' => true 
		),
		'agency_or_salesperson' => array(
			'edit' => true 
		),
		'interpretation1' => array(
			'edit' => true 
		),
		'interpretation2' => array(
			'edit' => true 
		),
		'interpretation3' => array(
			'edit' => true 
		),
		'interpretation4' => array(
			'edit' => true 
		),
		'estateagent_address2' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'salesperson' => array(
			'edit' => true 
		),
		'salesperson_cea' => array(
			'edit' => true 
		),
		'salesperson_contact' => array(
			'edit' => true 
		),
		'estateagent' => array(
			'edit' => true 
		),
		'estateagent_cea' => array(
			'edit' => true 
		),
		'form_name' => array(
			'edit' => true 
		),
		'estateagent_address' => array(
			'edit' => true 
		),
		'salesperson_ic' => array(
			'edit' => true 
		),
		'salesperson_address' => array(
			'edit' => true 
		),
		'estateagent_tel' => array(
			'edit' => true 
		),
		'estateagent2' => array(
			'edit' => true 
		),
		'estateagent_cea2' => array(
			'edit' => true 
		),
		'interpretation1' => array(
			'edit' => true 
		),
		'interpretation2' => array(
			'edit' => true 
		),
		'interpretation3' => array(
			'edit' => true 
		),
		'interpretation4' => array(
			'edit' => true 
		),
		'estateagent_address2' => array(
			'edit' => true 
		) 
	),
	'uploadFolder' => array(
		 
	),
	'viewPluginInit' => array(
		 
	),
	'editPluginInit' => array(
		'sign_agent' => array(
			'edit' => true 
		),
		'sign_interpreter4' => array(
			'edit' => true 
		),
		'sign_interpreter3' => array(
			'edit' => true 
		),
		'sign_interpreter2' => array(
			'edit' => true 
		),
		'sign_interpreter1' => array(
			'edit' => true 
		),
		'sign_seller1' => array(
			'edit' => true 
		),
		'sign_seller2' => array(
			'edit' => true 
		),
		'sign_seller3' => array(
			'edit' => true 
		),
		'sign_seller4' => array(
			'edit' => true 
		),
		'sign1' => array(
			'edit' => true 
		),
		'sign2' => array(
			'edit' => true 
		),
		'sign3' => array(
			'edit' => true 
		),
		'sign4' => array(
			'edit' => true 
		),
		'sign5' => array(
			'edit' => true 
		) 
	) 
);
			}
		function BeforeShowView( &$xt, &$templatefile, &$values, $pageObject ) {
		$xt->assign("footer",false);
	
$xt->assign("editid1_value", $values['id']);

if ($values["GST"]!="Yes"){
$pageObject->hideItem("form1_gstyes");
$pageObject->hideItem("gst_include");
$pageObject->hideItem("sup1");
$pageObject->hideItem("sign2");
$pageObject->showItem("dash");
}
else {
$pageObject->showItem("form1_gstyes");
$pageObject->showItem("gst_include");
$pageObject->showItem("sup1");
$pageObject->showItem("sign2");
$pageObject->hideItem("dash");
}

if ($values["agency_or_salesperson"]=="Salesperson for and on behalf of the Estate Agent"){
$xt->assign("estateagent2_fieldblock",false);
$xt->assign("estateagent_address2_fieldblock",false);
$xt->assign("estateagent_cea2_fieldblock",false);
$xt->assign("estateagent_tel_fieldblock",false);
}
if ($values["agency_or_salesperson"]=="Estate Agent"){
$xt->assign("salesperson_fieldblock",false);
$xt->assign("salesperson_ic_fieldblock",false);
$xt->assign("salesperson_address_fieldblock",false);
$xt->assign("salesperson_cea_fieldblock",false);
$xt->assign("salesperson_contact_fieldblock",false);
}
		;
		
	}

	function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$values["status"]="1";

$str = $values["conflict_description"]; 
for ($i=0; $i<strlen($str); $i++){ 
if ($i==0) { 
$b = True; 
} 
else 
$b = (substr($str, $i-1,1) == " "); 
if ($b) 
$str = substr($str,0,$i).strtoupper(substr($str, $i,1)).substr($str, $i+1); 
} 
$values["conflict_description"] = $str; 

$str = $values["additional_term"]; 
for ($i=0; $i<strlen($str); $i++){ 
if ($i==0) { 
$b = True; 
} 
else 
$b = (substr($str, $i-1,1) == " "); 
if ($b) 
$str = substr($str,0,$i).strtoupper(substr($str, $i,1)).substr($str, $i+1); 
} 
$values["additional_term"] = $str; 

/*
if($_SESSION["id_tx"]){
	$values["id_tx"]=$_SESSION["id_tx"];
	$_SESSION["id_tx"]="";
}

if(isset($_SESSION['forms_id_form']))
$values['id_form']=$_SESSION['forms_id_form'];

if(isset($_SESSION['representing']))
$values['representing']=$_SESSION['representing'];
*/
return true;
		;
		return true;
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		$values["interpreterID1"]=strtoupper($values["interpreterID1"]);
$values["interpreterID2"]=strtoupper($values["interpreterID2"]);
$values["interpreterID3"]=strtoupper($values["interpreterID3"]);
$values["interpreterID4"]=strtoupper($values["interpreterID4"]);
$values["conflict_description"]=strtoupper($values["conflict_description"]);
$values["additional_term"]=strtoupper($values["additional_term"]);



return true;
		;
		return true;
	}

	function BeforeProcessEdit( $pageObject ) {
		global $strWhereClause,
$strTableName,$conn;
$str = "SELECT *
FROM agency WHERE agency_name='".$_SESSION["Agency"]."'";
$rs = db_query($str,$conn);
$data = db_fetch_array($rs);
if ($data["username"]==$_SESSION["UserID"])
echo "";
$_SESSION["AgencyAddress"] = $data["agency_address"];
$_SESSION["AgencyTel"] = $data["agency_tel"];
$_SESSION["AgencyEmail"] = $data["agency_email"];


		;
		
	}

	function BeforeProcessAdd( $pageObject ) {
		//fetch data from user
global $strWhereClause,
$strTableName,$conn;
$str = "SELECT *
FROM eat_users where username='".$_SESSION["UserID"]."'";
$rs = db_query($str,$conn);
$data = db_fetch_array($rs);
if ($data["UserID"]==$_SESSION["UserID"])
echo "";
$_SESSION["cea_reg"] = $data["cea_reg"];
$_SESSION["mobile"] = $data["mobile"];
$_SESSION["full_name"] = $data["full_name"];
$_SESSION["nric"] = $data["nric"];
$_SESSION["home_address"] = $data["home_address"];
$_SESSION["postal"] = $data["postal"];
$_SESSION["agency"] = $data["agency"];
$_SESSION["agency_address"] = $data["agency_address"];
$_SESSION["agency_postal"] = $data["agency_postal"];
$_SESSION["agency_cea"] = $data["agency_cea_reg"];
$_SESSION["agency_tel"] = $data["agency_tel"];
		;
		
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		if($values['conflict']!="has")
{
CustomQuery("update forms SET conflict_description='' where id='".$values['id']."'");
}
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		if($values['conflict']!="has")
{
CustomQuery("UPDATE forms SET conflict_description='' WHERE id=".$values['id']);
}

$fields = [
    'sign_seller1' => 'sign_date1',
    'sign_seller2' => 'sign_date2',
    'sign_seller3' => 'sign_date3',
    'sign_seller4' => 'sign_date4',
    'sign_interpreter1' => 'interpretdate1',
    'sign_interpreter2' => 'interpretdate2',
    'sign_interpreter3' => 'interpretdate3',
    'sign_interpreter4' => 'interpretdate4',
    'sign_agent' => 'date_sign'
];

foreach ($fields as $signField => $dateField) {
    if ($values[$signField] != $oldvalues[$signField]) {
        $statusCondition = strpos($signField, 'interpreter') !== false ? 'status = 1 AND ' : '';
        $idField = strpos($signField, 'interpreter') !== false ? 'id_form' : 'id';

        if (empty($values[$signField])) {
            $sql = "UPDATE forms SET $dateField = NULL WHERE $statusCondition $idField = " . $values[$idField];
        } else {
            $decodedString = substr($values[$signField], 1, -1);
            $obj = json_decode($decodedString);

            if ($obj->size > 1000) {
                $sql = "UPDATE forms SET $dateField = NOW() WHERE $statusCondition $idField = " . $values[$idField];
            } else {
                $sql = "UPDATE forms SET $dateField = NULL WHERE $statusCondition $idField = " . $values[$idField];
            }
        }
        CustomQuery($sql);
    }
}

// Reset seller-related fields
$sellers = ['seller2', 'seller3', 'seller4'];
foreach ($sellers as $seller) {
    if (empty($values[$seller])) {
        $index = substr($seller, -1);
        CustomQuery("UPDATE forms SET 
					sign_seller$index = NULL, 
					sign_date$index = NULL,
					sign_interpreter$index = NULL, 
					interpretdate$index = NULL,
					seller{$index}_id = NULL, 
					seller{$index}_address = NULL, 
					interpret$index = NULL, 
					interpreterID$index = NULL 
					WHERE id = " . $values['id']);
    }
}

// Reset interpreter-related fields
$interpreters = ['interpret1', 'interpret2', 'interpret3', 'interpret4'];
foreach ($interpreters as $interpreter) {
    if (empty($values[$interpreter])) {
        $index = substr($interpreter, -1);
        CustomQuery("UPDATE forms SET 
					interpreterID$index = NULL, 
					sign_interpreter$index = NULL, 
					interpretdate$index = NULL 
					WHERE id = " . $values['id']);
    }
}
		;
		
	}

	function AfterDelete( $where, &$deleted_values, &$message, $pageObject ) {
		CustomQuery("DELETE FROM forms WHERE id =".$deleted_values["id"]);

?>
<script>
parent.location.reload();
</script>
<?php
		;
		
	}

	function BeforeShowAdd( &$xt, &$templatefile, $pageObject ) {
		$pageObject->hideItem("salesperson");
$pageObject->hideItem("estateagent2");
$pageObject->hideItem("salesperson_ic");
$pageObject->hideItem("salesperson_cea");
$pageObject->hideItem("salesperson_address");
$pageObject->hideItem("salesperson_contact");
$pageObject->hideItem("estateagent_tel");
$pageObject->hideItem("estateagent_cea2");

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeShowEdit( &$xt, &$templatefile, $values, $pageObject ) {
		$xt->assign("backbutton_attrs","style='display:none'");
$xt->assign("view_page_button_attrs","style='display:none'");
$xt->assign("footer",false);

$pageObject->hideItem("id");
$pageObject->hideItem("id_form");
$pageObject->hideItem("id_tx");
$pageObject->hideItem("representing");
$pageObject->hideItem("category");
		;
		
	}

	function BeforeMoveNextList( &$data, &$row, &$record, $recordId, $pageObject ) {
		if ($data["sign_date1"]==""&&$data["date_sign"]=="") 
{ 
   $pageObject->hideItem("view_signed_form1", $recordId); 
} 

if ($data["seller1"]=="") 
{ 
   $pageObject->hideItem("esign_form1", $recordId); 
	 $pageObject->hideItem("view_unsign_form1", $recordId); 
}
		;
		
	}
	public function custom_id_vfview( $value, $data ) {
	$value = "<a href=\"form1_view.php?editid1=".$value."\">".$value."</a>";;
return $value;
}

public function default_salesperson_efedit(  ) {
	$defaultValue = $_SESSION["FullName"];
return $defaultValue;
}

public function autoupdate_salesperson_efedit(  ) {
	$defaultValue = $_SESSION["FullName"];
return $defaultValue;
}

public function default_salesperson_cea_efedit(  ) {
	$defaultValue = $_SESSION["UserID"];
return $defaultValue;
}

public function autoupdate_salesperson_cea_efedit(  ) {
	$defaultValue = $_SESSION["UserID"];
return $defaultValue;
}

public function default_salesperson_contact_efedit(  ) {
	$defaultValue = $_SESSION["AgentMobile"];
return $defaultValue;
}

public function autoupdate_salesperson_contact_efedit(  ) {
	$defaultValue = $_SESSION["AgentMobile"];
return $defaultValue;
}

public function default_estateagent_efedit(  ) {
	$defaultValue = $_SESSION["Agency"];
return $defaultValue;
}

public function autoupdate_estateagent_efedit(  ) {
	$defaultValue = $_SESSION["Agency"];
return $defaultValue;
}

public function default_estateagent_cea_efedit(  ) {
	$defaultValue = $_SESSION["AgencyCEA"];
return $defaultValue;
}

public function autoupdate_estateagent_cea_efedit(  ) {
	$defaultValue = $_SESSION["AgencyCEA"];
return $defaultValue;
}

public function default_GST_efedit(  ) {
	$defaultValue = "No";
return $defaultValue;
}

public function default_additional_term_efedit(  ) {
	$defaultValue = "NA";
return $defaultValue;
}

public function default_form_name_efedit(  ) {
	$defaultValue = "Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 1";
return $defaultValue;
}

public function autoupdate_form_name_efedit(  ) {
	$defaultValue = "Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 1";
return $defaultValue;
}

public function default_estateagent_address_efedit(  ) {
	$defaultValue = $_SESSION["AgencyAddress"];
return $defaultValue;
}

public function autoupdate_estateagent_address_efedit(  ) {
	$defaultValue = $_SESSION["AgencyAddress"];
return $defaultValue;
}

public function default_salesperson_ic_efedit(  ) {
	$defaultValue = $_SESSION["AgentNric"];
return $defaultValue;
}

public function autoupdate_salesperson_ic_efedit(  ) {
	$defaultValue = $_SESSION["AgentNric"];
return $defaultValue;
}

public function default_salesperson_address_efedit(  ) {
	$defaultValue = $_SESSION["AgentAddress"];
return $defaultValue;
}

public function autoupdate_salesperson_address_efedit(  ) {
	$defaultValue = $_SESSION["AgentAddress"];
return $defaultValue;
}

public function default_estateagent_tel_efedit(  ) {
	$defaultValue = $_SESSION["AgencyTel"];
return $defaultValue;
}

public function autoupdate_estateagent_tel_efedit(  ) {
	$defaultValue = $_SESSION["AgencyTel"];
return $defaultValue;
}

public function default_estateagent2_efedit(  ) {
	$defaultValue = $_SESSION["Agency"];
return $defaultValue;
}

public function autoupdate_estateagent2_efedit(  ) {
	$defaultValue = $_SESSION["Agency"];
return $defaultValue;
}

public function default_estateagent_cea2_efedit(  ) {
	$defaultValue = $_SESSION["AgencyCEA"];
return $defaultValue;
}

public function autoupdate_estateagent_cea2_efedit(  ) {
	$defaultValue = $_SESSION["AgencyCEA"];
return $defaultValue;
}

public function custom_status_vfview( $value, $data ) {
	$value = "Form 1";;
return $value;
}

public function default_agency_or_salesperson_efedit(  ) {
	$defaultValue = "Salesperson for and on behalf of the Estate Agent";
return $defaultValue;
}

public function plugin_sign_agent_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 100;
// signature field width
$this->settings["width"] = 200;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
// set "db" to save image to db (field type: blob), otherwise to file (field type: varchar(500))
$this->settings["target"] = "";
// "clear" link color, black by default
$this->settings["clearcolor"] = "";;
return $this->settings;
}

public function plugin_sign_interpreter4_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 100;
// signature field width
$this->settings["width"] = 200;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
// set "db" to save image to db (field type: blob), otherwise to file (field type: varchar(500))
$this->settings["target"] = "";
// "clear" link color, black by default
$this->settings["clearcolor"] = "";;
return $this->settings;
}

public function plugin_sign_interpreter3_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 100;
// signature field width
$this->settings["width"] = 200;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
// set "db" to save image to db (field type: blob), otherwise to file (field type: varchar(500))
$this->settings["target"] = "";
// "clear" link color, black by default
$this->settings["clearcolor"] = "";;
return $this->settings;
}

public function plugin_sign_interpreter2_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 100;
// signature field width
$this->settings["width"] = 200;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
// set "db" to save image to db (field type: blob), otherwise to file (field type: varchar(500))
$this->settings["target"] = "";
// "clear" link color, black by default
$this->settings["clearcolor"] = "";;
return $this->settings;
}

public function plugin_sign_interpreter1_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 100;
// signature field width
$this->settings["width"] = 200;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
// set "db" to save image to db (field type: blob), otherwise to file (field type: varchar(500))
$this->settings["target"] = "";
// "clear" link color, black by default
$this->settings["clearcolor"] = "";;
return $this->settings;
}

public function plugin_sign_seller1_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 100;
// signature field width
$this->settings["width"] = 200;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
// set "db" to save image to db (field type: blob), otherwise to file (field type: varchar(500))
$this->settings["target"] = "";
// "clear" link color, black by default
$this->settings["clearcolor"] = "";;
return $this->settings;
}

public function plugin_sign_seller2_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 100;
// signature field width
$this->settings["width"] = 200;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
// set "db" to save image to db (field type: blob), otherwise to file (field type: varchar(500))
$this->settings["target"] = "";
// "clear" link color, black by default
$this->settings["clearcolor"] = "";;
return $this->settings;
}

public function plugin_sign_seller3_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 100;
// signature field width
$this->settings["width"] = 200;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
// set "db" to save image to db (field type: blob), otherwise to file (field type: varchar(500))
$this->settings["target"] = "";
// "clear" link color, black by default
$this->settings["clearcolor"] = "";;
return $this->settings;
}

public function plugin_sign_seller4_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 100;
// signature field width
$this->settings["width"] = 200;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = true;
// set "db" to save image to db (field type: blob), otherwise to file (field type: varchar(500))
$this->settings["target"] = "";
// "clear" link color, black by default
$this->settings["clearcolor"] = "";;
return $this->settings;
}

public function default_interpretation1_efedit(  ) {
	$defaultValue = "Through the interpretation of";
return $defaultValue;
}

public function autoupdate_interpretation1_efedit(  ) {
	$defaultValue = "Through the interpretation of";
return $defaultValue;
}

public function default_interpretation2_efedit(  ) {
	$defaultValue = "Through the interpretation of";
return $defaultValue;
}

public function autoupdate_interpretation2_efedit(  ) {
	$defaultValue = "Through the interpretation of";
return $defaultValue;
}

public function default_interpretation3_efedit(  ) {
	$defaultValue = "Through the interpretation of";
return $defaultValue;
}

public function autoupdate_interpretation3_efedit(  ) {
	$defaultValue = "Through the interpretation of";
return $defaultValue;
}

public function default_interpretation4_efedit(  ) {
	$defaultValue = "Through the interpretation of";
return $defaultValue;
}

public function autoupdate_interpretation4_efedit(  ) {
	$defaultValue = "Through the interpretation of";
return $defaultValue;
}

public function plugin_sign1_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 60;
// signature field width
$this->settings["width"] = 120;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = false;;
return $this->settings;
}

public function plugin_sign2_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 60;
// signature field width
$this->settings["width"] = 120;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = false;;
return $this->settings;
}

public function plugin_sign3_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 60;
// signature field width
$this->settings["width"] = 120;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = false;;
return $this->settings;
}

public function plugin_sign4_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 60;
// signature field width
$this->settings["width"] = 120;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = false;;
return $this->settings;
}

public function plugin_sign5_efedit( $pageObject ) {
	$this->settings = array();
// signature field height
$this->settings["height"] = 60;
// signature field width
$this->settings["width"] = 120;
// signature background color
$this->settings["bgcolor"] = "#ffffff";
// set it to true to make signature field required
$this->settings["required"]=false;
// folder to store signature files
$this->settings["folder"]="forms";
// signature background image 
// $this->settings["bgimage"] = "http://website.com/images/background.png";
$this->settings["bgimage"] = "";
// signature pen color
$this->settings["color"] = "#145394";
// signature line width
$this->settings["linewidth"] = 2;
// save empty image
$this->settings["saveEmptyImage"] = false;;
return $this->settings;
}

public function default_estateagent_address2_efedit(  ) {
	$defaultValue = $_SESSION["AgencyAddress"];
return $defaultValue;
}

public function autoupdate_estateagent_address2_efedit(  ) {
	$defaultValue = $_SESSION["AgencyAddress"];
return $defaultValue;
}	

}


?>