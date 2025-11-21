<?php
class class_GlobalEvents extends GlobalEventsBase
{
	function init() {
		$this->events = array(
	'pageEvents' => array(
		'AfterAppInit' => true,
		'AfterSuccessfulLogin' => true,
		'BeforeRegister' => true,
		'BeforeShowLogin' => true,
		'BeforeEditUserinfo' => true,
		'AfterSuccessfulRegistration' => true,
		'OnPageLoad' => true,
		'BeforeShowChangePwd' => true,
		'BeforeProcessMenu' => true,
		'ModifyMenuItem' => true,
		'AfterEditUserinfo' => true,
		'BeforeShowMenu' => true,
		'AfterLogout' => true,
		'AfterChangePassword' => true 
	),
	'onScreenEvents' => array(
		'192200' => true,
		'192202' => true,
		'192203' => true,
		'192204' => true,
		'192205' => true,
		'192206' => true,
		'192207' => true,
		'192208' => true,
		'192209' => true,
		'192210' => true,
		'192211' => true,
		'192212' => true,
		'192213' => true,
		'192215' => true,
		'192218' => true,
		'192219' => true,
		'192221' => true,
		'192223' => true,
		'192226' => true,
		'192227' => true,
		'192228' => true,
		'192230' => true,
		'192231' => true,
		'192232' => true,
		'192234' => true,
		'192235' => true,
		'192236' => true,
		'192237' => true,
		'192238' => true,
		'192240' => true,
		'192241' => true,
		'192242' => true,
		'192244' => true,
		'192246' => true,
		'192247' => true,
		'192248' => true,
		'192249' => true,
		'192250' => true,
		'192251' => true,
		'192252' => true,
		'192253' => true,
		'192254' => true,
		'192255' => true,
		'192257' => true,
		'192258' => true,
		'192259' => true,
		'192260' => true,
		'192261' => true,
		'192262' => true,
		'192265' => true,
		'192266' => true,
		'192267' => true,
		'192268' => true,
		'192269' => true,
		'192270' => true,
		'192271' => true,
		'192272' => true,
		'192273' => true,
		'192274' => true,
		'192275' => true,
		'192279' => true,
		'192281' => true,
		'192284' => true,
		'192285' => true,
		'192286' => true,
		'192287' => true,
		'192288' => true,
		'192289' => true,
		'192290' => true,
		'192291' => true,
		'192292' => true,
		'192293' => true,
		'192294' => true,
		'192297' => true,
		'192298' => true,
		'192300' => true,
		'192301' => true,
		'192304' => true,
		'192307' => true,
		'192308' => true,
		'192310' => true,
		'192312' => true,
		'192313' => true,
		'192314' => true,
		'192320' => true,
		'192321' => true,
		'192324' => true,
		'192327' => true,
		'192328' => true,
		'192330' => true,
		'192331' => true,
		'192332' => true,
		'192335' => true,
		'192337' => true,
		'192338' => true,
		'192339' => true,
		'192340' => true,
		'192341' => true,
		'192344' => true,
		'192345' => true,
		'192347' => true,
		'192348' => true,
		'192351' => true,
		'192352' => true,
		'192354' => true,
		'192358' => true,
		'192359' => true,
		'192361' => true,
		'192363' => true,
		'192364' => true,
		'192367' => true,
		'192368' => true,
		'192369' => true,
		'192370' => true,
		'192372' => true,
		'192373' => true,
		'192374' => true,
		'192377' => true,
		'192380' => true,
		'192381' => true,
		'192382' => true,
		'192385' => true,
		'192386' => true,
		'192388' => true,
		'192389' => true,
		'192390' => true,
		'192391' => true,
		'192395' => true,
		'192396' => true,
		'192397' => true,
		'192399' => true,
		'192400' => true,
		'192401' => true,
		'192402' => true,
		'192404' => true,
		'192405' => true,
		'192406' => true,
		'192407' => true,
		'192410' => true,
		'192411' => true,
		'192412' => true,
		'192413' => true,
		'192414' => true,
		'192417' => true,
		'192418' => true,
		'192419' => true,
		'192420' => true,
		'192422' => true,
		'192423' => true,
		'192424' => true,
		'192425' => true,
		'192427' => true,
		'192429' => true,
		'192430' => true,
		'192431' => true,
		'192432' => true,
		'192433' => true,
		'192434' => true,
		'192435' => true,
		'192436' => true,
		'192439' => true,
		'192441' => true,
		'192442' => true,
		'192445' => true,
		'192446' => true,
		'192448' => true,
		'192449' => true,
		'192450' => true,
		'192451' => true,
		'192453' => true,
		'192454' => true,
		'192458' => true,
		'192459' => true,
		'192460' => true,
		'192461' => true,
		'192463' => true,
		'192464' => true,
		'192466' => true,
		'192467' => true,
		'192468' => true,
		'192471' => true,
		'192472' => true,
		'192473' => true,
		'192474' => true,
		'192475' => true,
		'192477' => true,
		'192478' => true,
		'192479' => true,
		'192480' => true,
		'192482' => true,
		'192483' => true,
		'192484' => true,
		'192485' => true,
		'192486' => true,
		'192487' => true,
		'192489' => true,
		'192490' => true,
		'192491' => true,
		'192493' => true,
		'192494' => true,
		'192495' => true,
		'192497' => true,
		'192498' => true,
		'192502' => true,
		'192504' => true,
		'192506' => true,
		'192507' => true,
		'192510' => true,
		'192511' => true,
		'192512' => true,
		'192513' => true,
		'192515' => true,
		'192517' => true,
		'192518' => true,
		'192519' => true,
		'192520' => true,
		'192524' => true,
		'192525' => true,
		'192526' => true,
		'192528' => true,
		'192529' => true,
		'192530' => true,
		'192531' => true,
		'192532' => true,
		'192534' => true,
		'192535' => true,
		'192536' => true,
		'192537' => true,
		'192538' => true,
		'192539' => true,
		'192540' => true,
		'192541' => true,
		'192542' => true,
		'192543' => true,
		'192544' => true,
		'192545' => true,
		'192546' => true,
		'192547' => true,
		'192549' => true,
		'192550' => true,
		'192551' => true,
		'192552' => true,
		'192554' => true,
		'192555' => true,
		'192556' => true,
		'192558' => true,
		'192559' => true,
		'192561' => true,
		'192562' => true,
		'192563' => true,
		'192564' => true,
		'192566' => true,
		'192567' => true,
		'192570' => true,
		'192571' => true,
		'192574' => true,
		'192576' => true,
		'192578' => true 
	),
	'dashboardEvents' => array(
		 
	),
	'buttons' => array(
		'192201' => true,
		'192214' => true,
		'192216' => true,
		'192217' => true,
		'192220' => true,
		'192222' => true,
		'192224' => true,
		'192225' => true,
		'192229' => true,
		'192233' => true,
		'192239' => true,
		'192243' => true,
		'192245' => true,
		'192256' => true,
		'192263' => true,
		'192264' => true,
		'192276' => true,
		'192277' => true,
		'192278' => true,
		'192280' => true,
		'192282' => true,
		'192283' => true,
		'192295' => true,
		'192296' => true,
		'192299' => true,
		'192302' => true,
		'192303' => true,
		'192305' => true,
		'192306' => true,
		'192309' => true,
		'192311' => true,
		'192315' => true,
		'192316' => true,
		'192317' => true,
		'192318' => true,
		'192319' => true,
		'192322' => true,
		'192323' => true,
		'192325' => true,
		'192326' => true,
		'192329' => true,
		'192333' => true,
		'192334' => true,
		'192336' => true,
		'192342' => true,
		'192343' => true,
		'192346' => true,
		'192349' => true,
		'192350' => true,
		'192353' => true,
		'192355' => true,
		'192356' => true,
		'192357' => true,
		'192360' => true,
		'192362' => true,
		'192365' => true,
		'192366' => true,
		'192375' => true,
		'192376' => true,
		'192378' => true,
		'192379' => true,
		'192383' => true,
		'192384' => true,
		'192387' => true,
		'192392' => true,
		'192393' => true,
		'192394' => true,
		'192398' => true,
		'192403' => true,
		'192408' => true,
		'192409' => true,
		'192415' => true,
		'192416' => true,
		'192421' => true,
		'192426' => true,
		'192428' => true,
		'192437' => true,
		'192438' => true,
		'192440' => true,
		'192443' => true,
		'192444' => true,
		'192447' => true,
		'192452' => true,
		'192455' => true,
		'192456' => true,
		'192457' => true,
		'192462' => true,
		'192465' => true,
		'192469' => true,
		'192470' => true,
		'192476' => true,
		'192481' => true,
		'192488' => true,
		'192492' => true,
		'192496' => true,
		'192499' => true,
		'192500' => true,
		'192501' => true,
		'192503' => true,
		'192505' => true,
		'192508' => true,
		'192509' => true,
		'192514' => true,
		'192516' => true,
		'192521' => true,
		'192522' => true,
		'192523' => true,
		'192527' => true,
		'192533' => true,
		'192548' => true,
		'192553' => true,
		'192557' => true,
		'192560' => true,
		'192565' => true,
		'192568' => true,
		'192569' => true,
		'192572' => true,
		'192573' => true,
		'192575' => true,
		'192577' => true 
	),
	'maps' => array(
		 
	),
	'tablePermissions' => array(
		 
	),
	'recordEditable' => array(
		 
	) 
);
	}

		function AfterSuccessfulLogin( $username, $password, &$data, $pageObject ) {
		// Set session variables after login
$_SESSION['companyloggedin'] = $data['agency'];
//$_SESSION['user_id'] = $data['eatuser_id'];
$_SESSION['UserName'] = $data['biz_name'];

// Fetch the company-specific database name
$sql = "SELECT `company_dbname` FROM jwresour_jwr_saas.eat_users WHERE `agency` = '".$data['agency']."'";
$rs = CustomQuery($sql); 
$row = db_fetch_array($rs);
$dbcompany = $row['company_dbname'];

if ($dbcompany) {
    // Store the database name in the session
    $_SESSION['newcompanydb'] = $dbcompany;

    // Switch the active database connection to the user's database
    db_exec("USE " . $_SESSION['newcompanydb']);
} else {
    // Handle case where the company database is not found
    echo "Error: Company database not found.";
    exit;
}


$_SESSION["pic"] = $data["user_photo"];
$_SESSION["UserID"] = $data["username"];
$_SESSION["Email"] = $data["email"];
$_SESSION["FullName"] = $data["full_name"];
$_SESSION["AgentNric"] = $data["nric"];
$_SESSION["AgentMobile"] = $data["mobile"];
$_SESSION["AgentAddress"] = $data["home_address"];

$_SESSION["Agency"] = $data["agency"];
$_SESSION["AgencyShare"] = $data["cut_to_agency"];
$_SESSION["AgencyCEA"] = $data["agency_cea_reg"];

//Remind incomplete user info
if ($data["mobile"]=="") {
$_SESSION["show_message"]=true;
$_SESSION["user_id"]=$data["id"];
}

global $conn;
$rs = db_query("select expiry_date
FROM jwresour_jwr_saas.eat_user_subscriptions where agency = '".$_SESSION['companyloggedin']."'", $conn);
$data = db_fetch_array($rs);
$agency=$row['agency'];
$diff = (strtotime($data["expiry_date"])-strtotime(date("Y-m-d")))/86400;
if($diff < 0 ){
session_unset();
session_destroy(); // Also destroy the session for added security
echo "<div style=\"font-size:22px;color:orange;padding:20px 0;text-align:center;\">Your subscription has expired!</div>";
die();

}
		;
		
	}

	function BeforeRegister( &$userdata, &$sqlValues, &$message, $pageObject ) {
		// Convert agency and username to uppercase
$userdata["agency"] = strtoupper($userdata["agency"]);
$userdata["agency_cea_reg"] = strtoupper($userdata["agency_cea_reg"]);
$userdata["username"] = strtoupper($userdata["username"]);
$userdata["full_name"] = strtoupper($userdata["full_name"]);

// Remove unwanted characters and create a database name
$rplc = array(" ", "`", "'");
$dbcompany = str_replace($rplc, "", 'jwresour_jwr_saas_db_' . $userdata['agency']);
$dbcompany = strtolower($dbcompany);

// Encryption key
$key = '$jw6857r707';

$sql = "SELECT agency, company_dbname,agency_cea_reg FROM jwresour_jwr_saas.eat_users   
WHERE `agency_cea_reg` = HEX(AES_ENCRYPT('" . $userdata['agency_cea_reg'] . "', '" . $key . "'))"; 
$rs= CustomQuery($sql ); 
$row=db_fetch_array($rs);


if($row)
{
	if($row['agency']== $userdata["agency"] )
	{
	$dbcompany=$row['company_dbname'];
	$_SESSION['agency_cea_reg']=$row['agency_cea_reg'];
	$userdata['company_dbname']=$dbcompany;
	return true;
	}else
	{
	 
	$pageObject->setProxyValue('regstatus',0);
	$pageObject->setProxyValue('regfalsemsg','The name of EA and the EA CEA Reg. number do not match. Please try again.');
	return false;
	}

}

$sql = "SELECT agency, company_dbname,agency_cea_reg FROM jwresour_jwr_saas.eat_users   
WHERE `agency` = '".strtoupper($userdata["agency"])."' ";
$rs= CustomQuery($sql ); 
$row=db_fetch_array($rs);

if($row)
{
	if($row['agency_cea_reg']== $userdata["agency_cea_reg"] )
	{
	$dbcompany=$row['company_dbname'];
	$_SESSION['agency_cea_reg']=$row['agency_cea_reg'];
	$userdata['company_dbname']=$dbcompany;
	return true;
	}else
	{
	 
	$pageObject->setProxyValue('regstatus',0);
	$pageObject->setProxyValue('regfalsemsg','The name of EA and the EA CEA Reg. number do not match. Please try again.');
	return false;
	}

}

$sql = "SELECT `agency`, `company_dbname`,`agency_cea_reg` FROM jwresour_jwr_saas.eat_users   
WHERE `agency` = '".strtoupper($userdata["agency"])."' &&  `agency_cea_reg` = '".$userdata["agency_cea_reg"]."'";
$rs= CustomQuery($sql ); 
$row=db_fetch_array($rs);

if(!$row)
{
$userdata['company_dbname']=$dbcompany;
 return true;
}
		;
		return true;
	}

	function BeforeShowLogin( &$xt, &$templatefile, $pageObject ) {
		$xt->assign("guestlink_block",false);

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeEditUserinfo( &$values, $where, &$oldvalues, &$message, $pageObject ) {
		$values["biz_name"]=strtoupper($values["biz_name"]);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
		;
		return true;
	}

	function AfterSuccessfulRegistration( &$userdata, $pageObject ) {
		// Set session variable after the database check
$_SESSION['companyloggedin'] = $agency;

$sql = "SELECT `company_dbname` FROM jwresour_jwr_saas.eat_users WHERE `agency` = '".$userdata["agency"]."'";
$rs= CustomQuery($sql ); 
$row=db_fetch_array($rs);
$dbcompany=$row['company_dbname'];

$_SESSION['newcompanydb']=$dbcompany;

// if no co_reg exists 
	if (!isset($_SESSION['agency_cea_reg']))
	{
$sql = "CREATE DATABASE  ". $dbcompany;
db_exec($sql,$conn);

$sourceDbName = 'jwresour_jwr_saas_db';
$destinationDbName = $_SESSION['newcompanydb'];
$connection = new PDO('mysql:host=localhost;dbname=' . $sourceDbName, 'jian57', 'Jian57+97691300');

$tables = $connection->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
$connection->exec("USE {$destinationDbName}");

foreach ($tables as $tableName) {
    $createCommand = $connection->query("SHOW CREATE TABLE `{$sourceDbName}`.`{$tableName}`")->fetchColumn(1);
    $carefulCreateCommand = str_replace("CREATE TABLE", "CREATE TABLE IF NOT EXISTS", $createCommand);
    
    $connection->exec($carefulCreateCommand);
//    echo "Table `{$tableName}` created" . PHP_EOL;
  
    $connection->exec("INSERT INTO `{$destinationDbName}`.`{$tableName}` SELECT * FROM `{$sourceDbName}`.`{$tableName}`");
//    echo "Data for table `{$tableName}` copied" . PHP_EOL;
}
}
else
	{
	unset($_SESSION['agency_cea_reg']);
	}


$signupDate = date('Y-m-d');
$expiryDate = date('Y-m-d', strtotime('+1 month', strtotime($signupDate)));
$key = '$jw6857r707';

$sql=CustomQuery("SELECT count(*) as rowcount FROM jwresour_jwr_saas.eat_users
WHERE agency='".strtoupper($userdata["agency"])."'");
$row=db_fetch_array($sql);
if($row['rowcount'] > 1){
CustomQuery("UPDATE jwresour_jwr_saas.eat_users SET `user_group`='user',
`user_status`='Active'
WHERE `full_name` = '" . strtoupper($userdata["full_name"]) . "'");
} 
else {
CustomQuery("UPDATE jwresour_jwr_saas.eat_users SET `user_group`='account admin',
`user_status`='Active'  
WHERE `full_name` = '" . strtoupper($userdata["full_name"]) . "'");
}

// Check if user subscriptions of the same agency exists
$sql = CustomQuery("SELECT count(*) as rowcount 
FROM jwresour_jwr_saas.eat_user_subscriptions 
WHERE agency = '".strtoupper($userdata["agency"])."'");
$row = db_fetch_array($sql);

if ($row['rowcount'] > 0) {
//do nothing    
} else {
$sql = "INSERT INTO jwresour_jwr_saas.eat_user_subscriptions (agency, agency_cea_reg, company_dbname, 
signup_date, expiry_date) values (
('".strtoupper($userdata["agency"])."'), HEX(AES_ENCRYPT('".strtoupper($userdata['agency_cea_reg'])."', '".$key."')),
'".$_SESSION['newcompanydb']."', '$signupDate', '$expiryDate'
)";
CustomQuery($sql);
}

// Ensure the login database name is set
if (!isset($_SESSION['newcompanydb']) || empty($_SESSION['newcompanydb'])) {
    die("Error: User's database is not set.");
}

$loginDatabase = $_SESSION['newcompanydb']; // Get the login database name

// Connect to the user's specific database
$useDatabaseSQL = "USE " . $loginDatabase;
if (!CustomQuery($useDatabaseSQL)) {
    die("Error: Unable to switch to the user's database: " . db_error());
}

// Check if agency exists in the user's specific database
$sql = "SELECT COUNT(*) as rowcount 
        FROM agency 
        WHERE agency_name = '".strtoupper($userdata["agency"])."'";
$result = CustomQuery($sql);

if (!$result) {
    die("Error executing SELECT query: " . db_error());
}

$row = db_fetch_array($result);

// If agency exists, do nothing; otherwise, insert a new record
if ($row['rowcount'] > 0) {
    // Agency already exists, no action required
} else {
    // Insert new agency record into the user's database
    $sql = "INSERT INTO agency (agency_name, agency_cea_reg) 
            VALUES (
                '".strtoupper($userdata["agency"])."', 
                HEX(AES_ENCRYPT('".strtoupper($userdata['agency_cea_reg'])."', '".$key."'))
            )";
    $insertResult = CustomQuery($sql);
    if (!$insertResult) {
        die("Error executing INSERT query: " . db_error());
    }
}


//update or insert user to aml db
global $conn;
$strSQLExists = "SELECT * FROM jwresour_aml11.users WHERE `name_user` = '".$userdata['full_name']."'"; 
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists); 
if($data)
{ 
// if record exists do something 
CustomQuery("UPDATE jwresour_aml11.users SET `password`=HEX(AES_ENCRYPT('".$userdata['password']."', '".$key."'))
WHERE `name_user` = '".$userdata['full_name']."'"); 
}
else{
$sql = "INSERT INTO jwresour_aml11.users (username, password, name_user) values
(HEX(AES_ENCRYPT('".$userdata['username']."', '".$key."')), HEX(AES_ENCRYPT('".$userdata['password']."', '".$key."')), 
('".strtoupper($userdata["full_name"])."'))";
CustomQuery($sql); 
}
		;
		
	}

	function BeforeShowChangePwd( &$xt, &$templatefile, $pageObject ) {
		$xt->assign('logo',$_SESSION['companyloggedin']);

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function BeforeProcessMenu( $pageObject ) {
		global $conn;

// Check subscription expiry date
$rs = db_query("SELECT `expiry_date` FROM jwresour_jwr_saas.eat_user_subscriptions WHERE `agency` = '" . $_SESSION['companyloggedin'] . "'", $conn);
$data = db_fetch_array($rs);
$expirydate = $data["expiry_date"];
$current_date = date("Y-m-d");

// Calculate days to expiry
$days_to_expiry = (strtotime($expirydate) - strtotime($current_date)) / (24 * 60 * 60);

// Check if current date is within 60 days before expiry
if ($days_to_expiry <= 60 && $days_to_expiry >= 0) {
    $_SESSION["expiry_date"] = (int)$days_to_expiry; // Store the remaining days dynamically
} else {
    $_SESSION["expiry_date"] = ""; // No alert
}

// Check company address
$rs = db_query("SELECT `agency_address` FROM agency WHERE `agency_name` = '" . $_SESSION['companyloggedin'] . "'", $conn);
$data = db_fetch_array($rs);
$address = $data["agency_address"];
$_SESSION["agency_address_alert"] = ($address == "") ? true : "";

// Check user mobiles
$rs = db_query("SELECT `full_name`, `mobile` FROM jwresour_jwr_saas.eat_users WHERE `agency` = '" . $_SESSION['companyloggedin'] . "'", $conn);
$mobile_alert = false;
$users_with_no_mobile = [];

while ($data = db_fetch_array($rs)) {
    if (empty($data["mobile"])) {
        $mobile_alert = true;
        $users_with_no_mobile[] = $data["full_name"]; // Collect user names with missing mobile numbers
    }
}

// Set mobile alert if any user has an empty mobile
if ($mobile_alert) {
    $_SESSION["mobile_alert"] = true;
    $_SESSION["users_with_no_mobile"] = implode(", ", $users_with_no_mobile); // Combine user names into a string
} else {
    $_SESSION["mobile_alert"] = "";
    $_SESSION["users_with_no_mobile"] = "";
}
		;
		
	}

	function ModifyMenuItem( &$menuItem ) {
		/*
if ($_SESSION["GroupID"]==="user"||$_SESSION["GroupID"]==="account admin"||$_SESSION["GroupID"]==="leasing")
{
$title = $menuItem->getTitle();
  if ($title=="Admin Settings")
     return false;

}

if ($_SESSION["GroupID"]==="admin"||$_SESSION["GroupID"]==="leasing")
{
$title = $menuItem->getTitle();
  if ($title=="Settings")
     return false;

}
// Place event code here.
// Use "Add Action" button to add code snippets.
*/

// Define which menu items should be hidden for each group
$hiddenItems = [
    'user' => ['Admin Settings'],
    'account admin' => ['Admin Settings'],
    'leasing' => ['Admin Settings', 'Settings'],
    'admin' => ['Settings']
];

// Get current user's group and menu title
$group = $_SESSION["GroupID"] ?? '';
$title = $menuItem->getTitle();

// Check if the current group has any hidden items and if current title is in that list
if (isset($hiddenItems[$group]) && in_array($title, $hiddenItems[$group])) {
    return false;
}

return true;
		;
		return true;
	}

	function AfterEditUserinfo( &$values, $where, &$oldvalues, $pageObject ) {
		//Update user in aml project

$key = '$jw6857r707';

global $conn;
$strSQLExists = "SELECT * FROM jwresour_aml1091.users WHERE `username`='".$values['username']."'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists); 
if($data)
{ 
// if record exists do something 
CustomQuery("UPDATE jwresour_aml1091.users SET `password`=HEX(AES_ENCRYPT('".$values['password']."', '".$key."'))
WHERE `username` = HEX(AES_ENCRYPT('".$values['username']."', '".$key."'))");
}
else{
$sql = "INSERT INTO jwresour_aml1091.users (username, password, name_user) values
(HEX(AES_ENCRYPT('".$values['username']."', '".$key."')), HEX(AES_ENCRYPT('".$values['password']."', '".$key."')), 
('".strtoupper($values["full_name"])."'))";
CustomQuery($sql); 
} 

/*
global $conn;
$strSQLExists = "SELECT * FROM jwresour_aml1091.users WHERE `username`=HEX(AES_ENCRYPT('".$values['username']."', '".$key."'))";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists); 
if($data)
{ 
// if record exists do something 
CustomQuery("UPDATE jwresour_aml1091.users SET `password`=HEX(AES_ENCRYPT('".$values['password']."', '".$key."'))
WHERE `username` = HEX(AES_ENCRYPT('".$values['username']."', '".$key."'))");
}
else{
$sql = "INSERT INTO jwresour_aml1091.users (username, password, name_user) values
(HEX(AES_ENCRYPT('".$values['username']."', '".$key."')), HEX(AES_ENCRYPT('".$values['password']."', '".$key."')), 
('".strtoupper($values["full_name"])."'))";
CustomQuery($sql); 
} 
*/
		;
		
	}

	function BeforeShowMenu( &$xt, &$templatefile, $pageObject ) {
		$rstmp = CustomQuery("SELECT * FROM jwresour_jwr_saas.eat_users WHERE username='".$_SESSION["UserID"]."'");
$datatmp = db_fetch_array($rstmp);
if ($datatmp["user_group"]='leasing')

{
//$pageObject->hideItem("welcome_item1");
$pageObject->hideItem("welcome_item7");
$pageObject->hideItem("snippet");
}

$xt->assign('logo',$_SESSION['companyloggedin']);

// Trigger SweetAlert for subscription expiry
if ($_SESSION["expiry_date"] !== "") { // Check for non-empty value
    $pageObject->setProxyValue("expiry", $_SESSION["expiry_date"]);
    $_SESSION["expiry_date"] = ""; // Reset to avoid redundant alerts
}

// Trigger SweetAlert for agency address
if ($_SESSION["agency_address_alert"]) {
    $pageObject->setProxyValue("address", $_SESSION["agency_address_alert"]);
    $_SESSION["agency_address_alert"] = "";
}

// Trigger SweetAlert for user mobile
if ($_SESSION["mobile_alert"]) {
    $pageObject->setProxyValue("mobile", $_SESSION["mobile_alert"]);
    $_SESSION["mobile_alert"] = "";
}

// Hide plans & pricing for Account Manager group
if ($_SESSION["GroupID"] == "Account Manager") {
    $pageObject->hideItem("commissions_group");
}
		;
		
	}

	function AfterLogout( $username ) {
		
header("Location: login.php");
exit();

// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}

	function AfterChangePassword( $oldpassword, $newpassword, $pageObject ) {
		?>
<script>
parent.location.reload();
</script>
<?php


// Place event code here.
// Use "Add Action" button to add code snippets.
		;
		
	}
	
	// custom buttons 
		// custom button - esign_form7
	function buttonHandler_192214( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - view_esigned_form8
	function buttonHandler_192216( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - View_Rental
	function buttonHandler_192224( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Edit_form5
	function buttonHandler_192225( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// 1. Get the primary key value (ID) of the current record.
// This value comes directly from the grid row, making it safe for use in the WHERE clause.
$record = $button->getCurrentRecord();
$recordId = $record["id"];

// 2. Build the SQL UPDATE statement.
// We use simple concatenation for the WHERE clause, relying on $recordId being safe.
$sql = "UPDATE forms SET 
    sign_landlord1=NULL, 
    sign_landlord2=NULL, 
    sign_landlord3=NULL, 
    sign_landlord4=NULL, 
    sign_tenant1=NULL, 
    sign_tenant2=NULL, 
    sign_tenant3=NULL, 
    sign_tenant4=NULL, 
    sign_seller1=NULL, 
    sign_seller2=NULL, 
    sign_seller3=NULL, 
    sign_seller4=NULL, 
    sign_buyer1=NULL, 
    sign_buyer2=NULL, 
    sign_buyer3=NULL, 
    sign_buyer4=NULL, 
    sign1=NULL, 
    sign2=NULL, 
    sign3=NULL, 
    sign4=NULL, 
    sign5=NULL, 
    sign6=NULL, 
    sign7=NULL, 
    sign8=NULL, 
    sign9=NULL,
    sign_date1=NULL, 
    sign_date2=NULL, 
    sign_date3=NULL, 
    sign_date4=NULL, 
    sign_interpreter1=NULL, 
    sign_interpreter2=NULL, 
    sign_interpreter3=NULL, 
    sign_interpreter4=NULL, 
    interpretdate1=NULL, 
    interpretdate2=NULL, 
    interpretdate3=NULL, 
    interpretdate4=NULL, 
    sign_agent=NULL, 
    date_sign=NULL
    WHERE id=" . $recordId; 

// 3. Execute the query using the global CustomQuery function.
// This function is accessible in this scope and requires only the raw SQL string.
CustomQuery($sql); 

// Pass the ID to the client (optional)
$result["id"] = $recordId;;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - esign3
	function buttonHandler_192229( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - View_unsign_form5
	function buttonHandler_192233( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Sign_form1
	function buttonHandler_192239( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Submit
	function buttonHandler_192276( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		//update transactions
if($params['selected'])
{
$result["selected"] = $params['selected'];
$c=0;
foreach($result["selected"] as $v)
{
$sql = "UPDATE `transactions` SET `status_status`='Pending Approval' WHERE `id`='".$v."'";
CustomQuery($sql);

$sql = "UPDATE `transactions` SET `datesubmit`='".now()."' WHERE `id`='".$v."'";
CustomQuery($sql);

$c++;
}
$result["c"] =$c;
}

//email record

$body = "The following
transaction(s) submitted for approval.\n-----------\n\n";

while( $data = $button->getNextSelectedRecord() ) 
{
	$body .= "Tx ID: " . $data['id'] . "\n";
	$body .= "Tx Date: " . $data['date'] . "\n";
  $body .= "Property Address: " . $data['prop_address'] . "\n";
  $body .= "Salesperson: " . $data['salesperson_name'] . "\n-----------\n\n";
}

// send the email
$email = "jian.sg@gmail.com";
$subject = "Transaction pending approval";
$arr = runner_mail(array('to' => $email, 'bcc'=>'jianwong@ymail.com', 'subject' => $subject,'body' => $body));;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - View_form4
	function buttonHandler_192277( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - view_unsigned_form2
	function buttonHandler_192280( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - New_Button1
	function buttonHandler_192302( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - view_unsign_form8
	function buttonHandler_192305( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - view_unsigned_form3
	function buttonHandler_192309( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Find_Address1
	function buttonHandler_192322( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		$postal = trim($params["postal"]);
$url = "https://www.onemap.gov.sg/api/common/elastic/search?searchVal=" . urlencode($postal) . "&returnGeom=n&getAddrDetails=Y&pageNum=1";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // add this in case of SSL verify issues
$output = curl_exec($ch);

if (curl_errno($ch)) {
    $result["error"] = 'Curl error: ' . curl_error($ch);
    curl_close($ch);
    return $result;
}

$r = json_decode($output, true);
curl_close($ch);

if (!empty($r['results']) && count($r['results']) > 0) {
    $addr = $r['results'][0];
    $result["BuildingDescription"] = $addr['ADDRESS'];
} else {
    $result["BuildingDescription"] = "No result found for postal: $postal";
};

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Delete_cdd_item
	function buttonHandler_192325( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		global $dal;
 
while ( $data = $button->getNextSelectedRecord() ) {

// Update and clear fields in the master `transactions` table
$sql = "UPDATE transactions SET client='',client_id='',client_type='',cdd_result='',sls_cust='',sls_result='',pps_cust='', 
pps_result='',cdd_check_result='',namelist_cust='',namelist_result='',alertlist_cust='',alertlist_result='' WHERE id = ".$data["id_cddlist"];
CustomQuery($sql);

// Delete related records in `cdd_measures` and `str` tables using `id_cddlist`
$sql = "DELETE FROM cdd_checklist WHERE id = ".$data["id"];
CustomQuery($sql);  

$sql = "DELETE FROM cdd_measures WHERE id_cddmeasures = ".$data["id_cddlist"];
CustomQuery($sql);    

$sql = "DELETE FROM str WHERE id_tx = ".$data["id_cddlist"];
CustomQuery($sql);
}

// Optionally, return a success message or perform additional actions if needed;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - View_JTC_Lease
	function buttonHandler_192329( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - view_signed_form5
	function buttonHandler_192333( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Back_to_list
	function buttonHandler_192334( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Form_save___close
	function buttonHandler_192336( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - esign_form6
	function buttonHandler_192346( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Edit_form8
	function buttonHandler_192349( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// 1. Get the primary key value (ID) of the current record.
// This value comes directly from the grid row, making it safe for use in the WHERE clause.
$record = $button->getCurrentRecord();
$recordId = $record["id"];

// 2. Build the SQL UPDATE statement.
// We use simple concatenation for the WHERE clause, relying on $recordId being safe.
$sql = "UPDATE forms SET 
    sign_landlord1=NULL, 
    sign_landlord2=NULL, 
    sign_landlord3=NULL, 
    sign_landlord4=NULL, 
    sign_tenant1=NULL, 
    sign_tenant2=NULL, 
    sign_tenant3=NULL, 
    sign_tenant4=NULL, 
    sign_seller1=NULL, 
    sign_seller2=NULL, 
    sign_seller3=NULL, 
    sign_seller4=NULL, 
    sign_buyer1=NULL, 
    sign_buyer2=NULL, 
    sign_buyer3=NULL, 
    sign_buyer4=NULL, 
    sign1=NULL, 
    sign2=NULL, 
    sign3=NULL, 
    sign4=NULL, 
    sign5=NULL, 
    sign6=NULL, 
    sign7=NULL, 
    sign8=NULL, 
    sign9=NULL,
    sign_date1=NULL, 
    sign_date2=NULL, 
    sign_date3=NULL, 
    sign_date4=NULL, 
    sign_interpreter1=NULL, 
    sign_interpreter2=NULL, 
    sign_interpreter3=NULL, 
    sign_interpreter4=NULL, 
    interpretdate1=NULL, 
    interpretdate2=NULL, 
    interpretdate3=NULL, 
    interpretdate4=NULL, 
    sign_agent=NULL, 
    date_sign=NULL
    WHERE id=" . $recordId; 

// 3. Execute the query using the global CustomQuery function.
// This function is accessible in this scope and requires only the raw SQL string.
CustomQuery($sql); 

// Pass the ID to the client (optional)
$result["id"] = $recordId;;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - esign2
	function buttonHandler_192353( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// Put your code here.;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Find_Address_prop
	function buttonHandler_192357( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		$postal = trim($params["postcode"]);
$url = "https://www.onemap.gov.sg/api/common/elastic/search?searchVal=" . urlencode($postal) . "&returnGeom=n&getAddrDetails=Y&pageNum=1";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // add this in case of SSL verify issues
$output = curl_exec($ch);

if (curl_errno($ch)) {
    $result["error"] = 'Curl error: ' . curl_error($ch);
    curl_close($ch);
    return $result;
}

$r = json_decode($output, true);
curl_close($ch);

if (!empty($r['results']) && count($r['results']) > 0) {
    $addr = $r['results'][0];
    $result["BuildingDescription"] = $addr['ADDRESS'];
} else {
    $result["BuildingDescription"] = "No result found for postal: $postal";
};

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - View_signed_form1
	function buttonHandler_192362( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - view_esigned_form7
	function buttonHandler_192375( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - esign_form8
	function buttonHandler_192378( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - esign4
	function buttonHandler_192383( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - View_Sales
	function buttonHandler_192384( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Edit_form2
	function buttonHandler_192392( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// 1. Get the primary key value (ID) of the current record.
// This value comes directly from the grid row, making it safe for use in the WHERE clause.
$record = $button->getCurrentRecord();
$recordId = $record["id"];

// 2. Build the SQL UPDATE statement.
// We use simple concatenation for the WHERE clause, relying on $recordId being safe.
$sql = "UPDATE forms SET 
    sign_landlord1=NULL, 
    sign_landlord2=NULL, 
    sign_landlord3=NULL, 
    sign_landlord4=NULL, 
    sign_tenant1=NULL, 
    sign_tenant2=NULL, 
    sign_tenant3=NULL, 
    sign_tenant4=NULL, 
    sign_seller1=NULL, 
    sign_seller2=NULL, 
    sign_seller3=NULL, 
    sign_seller4=NULL, 
    sign_buyer1=NULL, 
    sign_buyer2=NULL, 
    sign_buyer3=NULL, 
    sign_buyer4=NULL, 
    sign1=NULL, 
    sign2=NULL, 
    sign3=NULL, 
    sign4=NULL, 
    sign5=NULL, 
    sign6=NULL, 
    sign7=NULL, 
    sign8=NULL, 
    sign9=NULL,
    sign_date1=NULL, 
    sign_date2=NULL, 
    sign_date3=NULL, 
    sign_date4=NULL, 
    sign_interpreter1=NULL, 
    sign_interpreter2=NULL, 
    sign_interpreter3=NULL, 
    sign_interpreter4=NULL, 
    interpretdate1=NULL, 
    interpretdate2=NULL, 
    interpretdate3=NULL, 
    interpretdate4=NULL, 
    sign_agent=NULL, 
    date_sign=NULL
    WHERE id=" . $recordId; 

// 3. Execute the query using the global CustomQuery function.
// This function is accessible in this scope and requires only the raw SQL string.
CustomQuery($sql); 

// Pass the ID to the client (optional)
$result["id"] = $recordId;;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Find_Address61
	function buttonHandler_192394( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		$postal = trim($params["postcode"]);
$url = "https://www.onemap.gov.sg/api/common/elastic/search?searchVal=" . urlencode($postal) . "&returnGeom=n&getAddrDetails=Y&pageNum=1";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // add this in case of SSL verify issues
$output = curl_exec($ch);

if (curl_errno($ch)) {
    $result["error"] = 'Curl error: ' . curl_error($ch);
    curl_close($ch);
    return $result;
}

$r = json_decode($output, true);
curl_close($ch);

if (!empty($r['results']) && count($r['results']) > 0) {
    $addr = $r['results'][0];
    $result["BuildingDescription"] = $addr['ADDRESS'];
} else {
    $result["BuildingDescription"] = "No result found for postal: $postal";
};

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Edit_form6
	function buttonHandler_192398( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// 1. Get the primary key value (ID) of the current record.
// This value comes directly from the grid row, making it safe for use in the WHERE clause.
$record = $button->getCurrentRecord();
$recordId = $record["id"];

// 2. Build the SQL UPDATE statement.
// We use simple concatenation for the WHERE clause, relying on $recordId being safe.
$sql = "UPDATE forms SET 
    sign_landlord1=NULL, 
    sign_landlord2=NULL, 
    sign_landlord3=NULL, 
    sign_landlord4=NULL, 
    sign_tenant1=NULL, 
    sign_tenant2=NULL, 
    sign_tenant3=NULL, 
    sign_tenant4=NULL, 
    sign_seller1=NULL, 
    sign_seller2=NULL, 
    sign_seller3=NULL, 
    sign_seller4=NULL, 
    sign_buyer1=NULL, 
    sign_buyer2=NULL, 
    sign_buyer3=NULL, 
    sign_buyer4=NULL, 
    sign1=NULL, 
    sign2=NULL, 
    sign3=NULL, 
    sign4=NULL, 
    sign5=NULL, 
    sign6=NULL, 
    sign7=NULL, 
    sign8=NULL, 
    sign9=NULL,
    sign_date1=NULL, 
    sign_date2=NULL, 
    sign_date3=NULL, 
    sign_date4=NULL, 
    sign_interpreter1=NULL, 
    sign_interpreter2=NULL, 
    sign_interpreter3=NULL, 
    sign_interpreter4=NULL, 
    interpretdate1=NULL, 
    interpretdate2=NULL, 
    interpretdate3=NULL, 
    interpretdate4=NULL, 
    sign_agent=NULL, 
    date_sign=NULL
    WHERE id=" . $recordId; 

// 3. Execute the query using the global CustomQuery function.
// This function is accessible in this scope and requires only the raw SQL string.
CustomQuery($sql); 

// Pass the ID to the client (optional)
$result["id"] = $recordId;;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Print_page
	function buttonHandler_192403( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - esigned_form3
	function buttonHandler_192415( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - view_unsigned_form1
	function buttonHandler_192440( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - mark_tx_complete
	function buttonHandler_192447( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		if($params['selected'])
{
$result["selected"] = $params['selected'];
$c=0;
foreach($result["selected"] as $v)
{
$sql = "UPDATE `transactions` SET `status_status`='Complete' WHERE `id`='".$v."'";
CustomQuery($sql);

$sql = "UPDATE `transactions` SET `dateapprove`='".now()."' WHERE `id`='".$v."'";
CustomQuery($sql);

$c++;
}
$result["c"] =$c;
}

//email record
$emails = array();
$body = "The following transaction(s) submitted by you is marked complete.\n-----------\n\n";
while( $data = $button->getNextSelectedRecord() ) 
{
if( $data["salesperson_email"] )
  $emails[] = $data["salesperson_email"];
  $body .= "Tx ID: " . $data['id'] . "\n";
	$body .= "Tx Date: " . $data['date'] . "\n";
  $body .= "Property Address: " . $data['prop_address'] . "\n";
  $body .= "Salesperson: " . $data['salesperson_name'] . "\n-----------\n\n";
}

// send the email
$subject = "Transaction Complete";
$arr = runner_mail(array('to' => $email, 'bcc'=>'jianwong@live.com', 'subject' => $subject,'body' => $body));;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - view_unsign_form6
	function buttonHandler_192452( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Edit_form41
	function buttonHandler_192465( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// 1. Get the primary key value (ID) of the current record.
// This value comes directly from the grid row, making it safe for use in the WHERE clause.
$record = $button->getCurrentRecord();
$recordId = $record["id"];

// 2. Build the SQL UPDATE statement.
// We use simple concatenation for the WHERE clause, relying on $recordId being safe.
$sql = "UPDATE forms SET 
    sign_landlord1=NULL, 
    sign_landlord2=NULL, 
    sign_landlord3=NULL, 
    sign_landlord4=NULL, 
    sign_tenant1=NULL, 
    sign_tenant2=NULL, 
    sign_tenant3=NULL, 
    sign_tenant4=NULL, 
    sign_seller1=NULL, 
    sign_seller2=NULL, 
    sign_seller3=NULL, 
    sign_seller4=NULL, 
    sign_buyer1=NULL, 
    sign_buyer2=NULL, 
    sign_buyer3=NULL, 
    sign_buyer4=NULL, 
    sign1=NULL, 
    sign2=NULL, 
    sign3=NULL, 
    sign4=NULL, 
    sign5=NULL, 
    sign6=NULL, 
    sign7=NULL, 
    sign8=NULL, 
    sign9=NULL,
    sign_date1=NULL, 
    sign_date2=NULL, 
    sign_date3=NULL, 
    sign_date4=NULL, 
    sign_interpreter1=NULL, 
    sign_interpreter2=NULL, 
    sign_interpreter3=NULL, 
    sign_interpreter4=NULL, 
    interpretdate1=NULL, 
    interpretdate2=NULL, 
    interpretdate3=NULL, 
    interpretdate4=NULL, 
    sign_agent=NULL, 
    date_sign=NULL
    WHERE id=" . $recordId; 

// 3. Execute the query using the global CustomQuery function.
// This function is accessible in this scope and requires only the raw SQL string.
CustomQuery($sql); 

// Pass the ID to the client (optional)
$result["id"] = $recordId;;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Find_Address3
	function buttonHandler_192476( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		$postal = trim($params["postcode"]);
$url = "https://www.onemap.gov.sg/api/common/elastic/search?searchVal=" . urlencode($postal) . "&returnGeom=n&getAddrDetails=Y&pageNum=1";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // add this in case of SSL verify issues
$output = curl_exec($ch);

if (curl_errno($ch)) {
    $result["error"] = 'Curl error: ' . curl_error($ch);
    curl_close($ch);
    return $result;
}

$r = json_decode($output, true);
curl_close($ch);

if (!empty($r['results']) && count($r['results']) > 0) {
    $addr = $r['results'][0];
    $result["BuildingDescription"] = $addr['ADDRESS'];
} else {
    $result["BuildingDescription"] = "No result found for postal: $postal";
};

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - View_esign_form2
	function buttonHandler_192501( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Edit_form11
	function buttonHandler_192503( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// 1. Get the primary key value (ID) of the current record.
// This value comes directly from the grid row, making it safe for use in the WHERE clause.
$record = $button->getCurrentRecord();
$recordId = $record["id"];

// 2. Build the SQL UPDATE statement.
// We use simple concatenation for the WHERE clause, relying on $recordId being safe.
$sql = "UPDATE forms SET 
    sign_landlord1=NULL, 
    sign_landlord2=NULL, 
    sign_landlord3=NULL, 
    sign_landlord4=NULL, 
    sign_tenant1=NULL, 
    sign_tenant2=NULL, 
    sign_tenant3=NULL, 
    sign_tenant4=NULL, 
    sign_seller1=NULL, 
    sign_seller2=NULL, 
    sign_seller3=NULL, 
    sign_seller4=NULL, 
    sign_buyer1=NULL, 
    sign_buyer2=NULL, 
    sign_buyer3=NULL, 
    sign_buyer4=NULL, 
    sign1=NULL, 
    sign2=NULL, 
    sign3=NULL, 
    sign4=NULL, 
    sign5=NULL, 
    sign6=NULL, 
    sign7=NULL, 
    sign8=NULL, 
    sign9=NULL,
    sign_date1=NULL, 
    sign_date2=NULL, 
    sign_date3=NULL, 
    sign_date4=NULL, 
    sign_interpreter1=NULL, 
    sign_interpreter2=NULL, 
    sign_interpreter3=NULL, 
    sign_interpreter4=NULL, 
    interpretdate1=NULL, 
    interpretdate2=NULL, 
    interpretdate3=NULL, 
    interpretdate4=NULL, 
    sign_agent=NULL, 
    date_sign=NULL
    WHERE id=" . $recordId; 

// 3. Execute the query using the global CustomQuery function.
// This function is accessible in this scope and requires only the raw SQL string.
CustomQuery($sql); 

// Pass the ID to the client (optional)
$result["id"] = $recordId;;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - View_Rentals
	function buttonHandler_192505( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Close
	function buttonHandler_192523( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - view_unsign_form7
	function buttonHandler_192533( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - view_esigned_form6
	function buttonHandler_192568( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - View_signed_form
	function buttonHandler_192569( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Edit_form7
	function buttonHandler_192573( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// 1. Get the primary key value (ID) of the current record.
// This value comes directly from the grid row, making it safe for use in the WHERE clause.
$record = $button->getCurrentRecord();
$recordId = $record["id"];

// 2. Build the SQL UPDATE statement.
// We use simple concatenation for the WHERE clause, relying on $recordId being safe.
$sql = "UPDATE forms SET 
    sign_landlord1=NULL, 
    sign_landlord2=NULL, 
    sign_landlord3=NULL, 
    sign_landlord4=NULL, 
    sign_tenant1=NULL, 
    sign_tenant2=NULL, 
    sign_tenant3=NULL, 
    sign_tenant4=NULL, 
    sign_seller1=NULL, 
    sign_seller2=NULL, 
    sign_seller3=NULL, 
    sign_seller4=NULL, 
    sign_buyer1=NULL, 
    sign_buyer2=NULL, 
    sign_buyer3=NULL, 
    sign_buyer4=NULL, 
    sign1=NULL, 
    sign2=NULL, 
    sign3=NULL, 
    sign4=NULL, 
    sign5=NULL, 
    sign6=NULL, 
    sign7=NULL, 
    sign8=NULL, 
    sign9=NULL,
    sign_date1=NULL, 
    sign_date2=NULL, 
    sign_date3=NULL, 
    sign_date4=NULL, 
    sign_interpreter1=NULL, 
    sign_interpreter2=NULL, 
    sign_interpreter3=NULL, 
    sign_interpreter4=NULL, 
    interpretdate1=NULL, 
    interpretdate2=NULL, 
    interpretdate3=NULL, 
    interpretdate4=NULL, 
    sign_agent=NULL, 
    date_sign=NULL
    WHERE id=" . $recordId; 

// 3. Execute the query using the global CustomQuery function.
// This function is accessible in this scope and requires only the raw SQL string.
CustomQuery($sql); 

// Pass the ID to the client (optional)
$result["id"] = $recordId;;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - Edit_form3
	function buttonHandler_192575( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// 1. Get the primary key value (ID) of the current record.
// This value comes directly from the grid row, making it safe for use in the WHERE clause.
$record = $button->getCurrentRecord();
$recordId = $record["id"];

// 2. Build the SQL UPDATE statement.
// We use simple concatenation for the WHERE clause, relying on $recordId being safe.
$sql = "UPDATE forms SET 
    sign_landlord1=NULL, 
    sign_landlord2=NULL, 
    sign_landlord3=NULL, 
    sign_landlord4=NULL, 
    sign_tenant1=NULL, 
    sign_tenant2=NULL, 
    sign_tenant3=NULL, 
    sign_tenant4=NULL, 
    sign_seller1=NULL, 
    sign_seller2=NULL, 
    sign_seller3=NULL, 
    sign_seller4=NULL, 
    sign_buyer1=NULL, 
    sign_buyer2=NULL, 
    sign_buyer3=NULL, 
    sign_buyer4=NULL, 
    sign1=NULL, 
    sign2=NULL, 
    sign3=NULL, 
    sign4=NULL, 
    sign5=NULL, 
    sign6=NULL, 
    sign7=NULL, 
    sign8=NULL, 
    sign9=NULL,
    sign_date1=NULL, 
    sign_date2=NULL, 
    sign_date3=NULL, 
    sign_date4=NULL, 
    sign_interpreter1=NULL, 
    sign_interpreter2=NULL, 
    sign_interpreter3=NULL, 
    sign_interpreter4=NULL, 
    interpretdate1=NULL, 
    interpretdate2=NULL, 
    interpretdate3=NULL, 
    interpretdate4=NULL, 
    sign_agent=NULL, 
    date_sign=NULL
    WHERE id=" . $recordId; 

// 3. Execute the query using the global CustomQuery function.
// This function is accessible in this scope and requires only the raw SQL string.
CustomQuery($sql); 

// Pass the ID to the client (optional)
$result["id"] = $recordId;;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

		// custom button - esign_form5
	function buttonHandler_192577( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();

		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}

	
	// ajax code snippets
	
	
	// field events
		// field event - change_item
	function fieldEvent_192371( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();
		
		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		$rs = DB::Query("select * from invitems where title='".str_replace("'","''",$params["value"])."'");
$data = $rs->fetchAssoc();
$result["price"] = $data["price"];
$result["rate"] = $data["rate"];
$result["item_tax"] = 0;
if( $params["invoice_type"] === GetCustomLabel("option_tax_percentage_standard_and_reduced")){
	if($result["rate"] === GetCustomLabel("standard") || $result["rate"] === "" || is_null($result["rate"]) ) {
		$result["item_tax"] = $params["standard_tax_percentage"];
	}
	if($result["rate"] === GetCustomLabel("reduced")) {
		$result["item_tax"] = $params["reduced_tax_percentage"];
	}
}
if( $params["invoice_type"] === GetCustomLabel("option_standard_tax_percentage")){
	$result["item_tax"] = $params["standard_tax_percentage"];
}
if( $params["invoice_type"] === GetCustomLabel("option_reduced_tax_percentage")){
	$result["item_tax"] = $params["reduced_tax_percentage"];
}


global $locale_info;
$currency = array();
$currency["SCURRENCY"] =  $locale_info["LOCALE_SCURRENCY"];
$currency["INEGCURR"] = $locale_info["LOCALE_INEGCURR"];
$currency["ICURRENCY"] = $locale_info["LOCALE_ICURRENCY"];
$result["currency"] = $currency;;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}


	

	// code snippets
	

	// code snippet - Form2 name
	function event_192202(  ) {
		
		// Put your code here.
echo "<span style='border:1px solid #b7b7b7; border-radius:5px; text-align:center; padding:3px 40px 3px 40px;'>Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 2</span>";
		;
		
	}




	// code snippet - cdd_measures_6a1
	function event_192206(  ) {
		
		// Put your code here.
echo "If the property transaction is of higher risk, have you conducted enhanced CDD measures by asking the following information from the client or BO, i.e. occupation, source of funds/wealth and purpose of the transaction.";
		;
		
	}

	// code snippet - P6.2
	function event_192207(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>This form of agreement is only applicable if all or part of the property to be sold 
      comprises residential property in Singapore.</p> 
      ";
		;
		
	}


	// code snippet - cdd_measures_5a1
	function event_192209(  ) {
		
		// Put your code here.
echo "Is the property transaction complex*, or unusually large*?";
		;
		
	}

	// code snippet - cdd_measures_4a1
	function event_192210(  ) {
		
		// Put your code here.
echo "Do you have reasons to believe that the client or BO is a PEP *?";
		;
		
	}

	// code snippet - F4 Pg5 note bottom
	function event_192211(  ) {
		
		// Put your code here.
echo "<i><u>Note</U></i>:&emsp;
      The Estate Agent must provide the original or a copy of this Agreement to 
      the Tenant immediately upon signing.";
		;
		
	}

	// code snippet - CEA F4 text
	function event_192212(  ) {
		
		echo '<div class="form-text">This prescribed Form by the Council for Estate Agencies ("CEA") is for use when an estate agent is authorised or engaged by a prospective Tenant to
introduce a Landlord of residential property in Singapore.</div>';
		;
		
	}

	// code snippet - cdd_measures_2a1
	function event_192213(  ) {
		
		// Put your code here.
echo "In the screening of the client or BO against the UN Sanction Lists, is there any full name match or partial name match where the nationality and age range matched*?";
		;
		
	}


	// code snippet - cdd_checklist_1.1
	function event_192215(  ) {
		
		// Put your code here.
echo "Are you able to complete the <b>Customer's Particulars Form</b>? It is mandatory to do so. If it is not done, please state the reasons in the Remarks column.";
		;
		
	}



	// code snippet - cdd_measures_1.a
	function event_192218(  ) {
		
		// Put your code here.
echo "Do you suspect that the client is not the BO* of this property transaction?";
		;
		
	}

	// code snippet - CEA F3 text
	function event_192219(  ) {
		
		echo '<div class="form-text">This prescribed Form by the Council for Estate Agencies ("CEA") is for use when an estate agent is authorised or engaged by a prospective Landlord
to introduce a Tenant of residential property in Singapore.</div>';
		;
		
	}


	// code snippet - cdd_checklist_3.1
	function event_192221(  ) {
		
		// Put your code here.
echo "Is physical cash* used for the property purchase in this property transaction?";
		;
		
	}


	// code snippet - cdd_checklist_2.1
	function event_192223(  ) {
		
		// Put your code here.
echo "Is the client a foreigner* purchasing a property for this property transaction?";
		;
		
	}



	// code snippet - cdd_checklist_5.1
	function event_192226(  ) {
		
		// Put your code here.
echo "Determine if 
      there is suspicion of ML/FT activity for this property transaction by 
      answering the list of suspicious ML/FT indicators 
      below.";
		;
		
	}


	// code snippet - cdd_checklist_4.1
	function event_192228(  ) {
		
		// Put your code here.
echo "Are there doubts about the client's particulars provided to you for this property transaction?";
		;
		
	}



	// code snippet - Additional terms
	function event_192231(  ) {
		
		// Put your code here.
echo "Additional Terms";
		;
		
	}



	// code snippet - The EA shall
	function event_192234(  ) {
		
		// Put your code here.
echo "The Estate Agent shall:";
		;
		
	}




	// code snippet - Form5 name
	function event_192238(  ) {
		
		// Put your code here.
echo "<span style='border:1px solid #b7b7b7; border-radius:5px; text-align:center; padding:3px 40px 3px 40px;'>Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 5</span>";
		;
		
	}




	// code snippet - cdd_measures_4b1
	function event_192242(  ) {
		
		// Put your code here.
echo "If the client or BO is a PEP, is the client or BO a foreign PEP, a family member* or close associate* of a foreign PEP?";
		;
		
	}


	// code snippet - cdd_measures_5b1
	function event_192244(  ) {
		
		// Put your code here.
echo "Does the property transaction have no apparent economic* or lawful purpose*?";
		;
		
	}


	// code snippet - Arbitration
	function event_192246(  ) {
		
		// Put your code here.
echo "Arbitration";
		;
		
	}

	// code snippet - P6.9 seller
	function event_192247(  ) {
		
		// Put your code here.
echo "The amount or rate of commission is negotiable between the Seller and the Estate Agent. 
      ";
		;
		
	}


	// code snippet - cdd_measures_6b1
	function event_192249(  ) {
		
		// Put your code here.
echo "Have you sought approval from your estate agent to continue with the property transaction?";
		;
		
	}

	// code snippet - cdd_checklist_5a
	function event_192250(  ) {
		
		// Put your code here.
echo "There is adverse news concerning the client in the media or newspapers.";
		;
		
	}

	// code snippet - cdd_measures_2b1
	function event_192251(  ) {
		
		// Put your code here.
echo "Is the client or BO known to be involved in FT, or proliferation financing?";
		;
		
	}

	// code snippet - cdd_checklist_5e
	function event_192252(  ) {
		
		// Put your code here.
echo "Client is unconcerned about the value of the property, and is willing to pay for the property or rent it at a much higher price than the market price; or sell the property or let it out much lower than the market price.";
		;
		
	}


	// code snippet - cdd_measures_1.a1
	function event_192254(  ) {
		
		// Put your code here.
echo "* BO is the 
      person who has ultimate interest in the property transaction, and who has 
      control over the client. If the BO is a company, take reasonable measures 
      to understand the ownership and control structure of the company to 
      identify the individual behind the company.
      ";
		;
		
	}

	// code snippet - cdd_measures_3b1
	function event_192255(  ) {
		
		// Put your code here.
echo "In the screening of the client or BO against the Panama Papers, is there any name match?";
		;
		
	}



	// code snippet - Tx list pg description
	function event_192258(  ) {
		
		// Put your code here.
echo "<span style='font-size:110%;'><i>To view Transaction details, mouse over the Transaction and click on it.
</i></span>";
		;
		
	}

	// code snippet - Signed by interpreter:
	function event_192259(  ) {
		
		// Put your code here.
echo "Signed by interpreter:";
		;
		
	}

	// code snippet - cdd_measures_1b.1
	function event_192260(  ) {
		
		// Put your code here.
echo "If 
      your answer is “Yes” to the above question, please indicate the 
      particulars of the BO in the “Remarks” column.
      ";
		;
		
	}

	// code snippet - cdd_measures_3a
	function event_192261(  ) {
		
		// Put your code here.
echo "Have you screened the client or BO against the list of entities identified in the Panama Papers?";
		;
		
	}

	// code snippet - cdd_checklist_5i
	function event_192262(  ) {
		
		// Put your code here.
echo "Client's known business activity and purpose does not match the property transaction, e.g. the client is a non-profit organisation but the property is purchased for investment and the client intends to take a large loan.";
		;
		
	}



	// code snippet - View Details click row
	function event_192265(  ) {
		
		// Put your code here.
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">';
echo '<p>To search for a lease or tenant, enter the unit number or tenant\'s name in the search box above. Select from the suggested list and click &ensp;<i class="fas fa-search"></i></p>'
		;
		
	}

	// code snippet - The parties shall for seller
	function event_192266(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>The parties shall proceed to mediation under the mediation scheme prescribed by 
the CEA unless the Seller elects in writing not to mediate.</p>";
		;
		
	}

	// code snippet - form4-The above tenant
	function event_192267(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>The above tenant(s) (collectively called ‘‘Tenant'') hereby authorises and 
engages the Estate Agent <sup>(5)</sup> subject to and in accordance with the terms 
of this Agreement, to introduce to him a Landlord <sup>(6)</sup> of the following 
Property <sup>(7)</sup>:</p>";
		;
		
	}


	// code snippet - cdd_measures_1
	function event_192269(  ) {
		
		// Put your code here.
echo "Beneficial Owner 
      (BO)";
		;
		
	}





	// code snippet - cdd_measures_5
	function event_192274(  ) {
		
		// Put your code here.
echo "Higher Risk 
      Areas";
		;
		
	}

	// code snippet - cdd_measures_5c1
	function event_192275(  ) {
		
		// Put your code here.
echo "Is the client or BO from higher risk countries*?";
		;
		
	}






	// code snippet - Duties of EA
	function event_192281(  ) {
		
		// Put your code here.
echo "<span style='font-family:Times New Roman;font-weight:bold'>DUTIES OF ESTATE AGENT</span>";
		;
		
	}



	// code snippet - P5 sign by buyer
	function event_192284(  ) {
		
		// Put your code here.
echo "Signed by the Buyer(s) and the Estate Agent";
		;
		
	}




	// code snippet - Schedule and notes
	function event_192288(  ) {
		
		// Put your code here.
echo "Schedule and notes";
		;
		
	}

	// code snippet - cdd_measures_4
	function event_192289(  ) {
		
		// Put your code here.
echo "Politically Exposed 
      Person (PEP)";
		;
		
	}

	// code snippet - CEA F6 text
	function event_192290(  ) {
		
		echo '<div class="form-text">This prescribed Form by the Council for Estate Agencies ("CEA") is for use when an estate agent is exclusively authorised or engaged by a prospective Buyer to introduce a Seller of residential property in Singapore.</div>';
		;
		
	}

	// code snippet - Pg5 top note
	function event_192291(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'><i><u>Note</U></i>:&emsp;The parties are to initial every page of this Agreement 
      including the Schedules and any attachments.</p>";
		;
		
	}

	// code snippet - P7 advise seller on eligibility to sell
	function event_192292(  ) {
		
		// Put your code here.
echo "advise the Seller on the eligibility of the Seller to sell his HDB flat.";
		;
		
	}


	// code snippet - Any dispute between the Seller
	function event_192294(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>Any dispute between the Seller and the Estate Agent arising out of or in 
connection with this Agreement (including any question regarding its existence, 
validity or termination) shall first be resolved in the following manner:</p>";
		;
		
	}



	// code snippet - Signed_agent
	function event_192297(  ) {
		
		// Put your code here.
echo "Sign Agent";
		;
		
	}



	// code snippet - cdd_measures_5c4
	function event_192300(  ) {
		
		// Put your code here.
echo "If your 
      answers are “No” to all of the above questions 5, please select “NA” for 
      the questions in 6 below.";
		;
		
	}




	// code snippet - The schedule and Notes
	function event_192304(  ) {
		
		// Put your code here.
echo "The Schedules and Notes to or in this Agreement form part of this Agreement.";
		;
		
	}



	// code snippet - Mediation First
	function event_192307(  ) {
		
		// Put your code here.
echo "Mediation First";
		;
		
	}





	// code snippet - Form7 name
	function event_192312(  ) {
		
		// Put your code here.
echo "<span style='border:1px solid #b7b7b7; border-radius:5px; text-align:center; padding:3px 40px 3px 40px;'>Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 7</span>";
		;
		
	}

	// code snippet - Return to top-form
	function event_192313(  ) {
		
		// Put your code here.
echo '<a href="javascript:" id="return-to-top-form">
        <I class="icon-chevron-up">
        </i>
      </a>';
echo  '<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">';
		;
		
	}







	// code snippet - cdd_checklist_5d
	function event_192320(  ) {
		
		// Put your code here.
echo "Client pays substantial down payment in cash, and the balance is financed by an offshore bank.";
		;
		
	}




	// code snippet - Interpreter ID4
	function event_192324(  ) {
		
		// Put your code here.
echo "Interpreter's NRIC No.<sup>(4)</sup>:";
		;
		
	}



	// code snippet - After esign save
	function event_192327(  ) {
		
		// Put your code here.
echo "<script>$(document).on('afterSave')||this.on('afterClose'), function() {
location.reload();
});</script>";
		;
		
	}

	// code snippet - cdd_checklist_5h
	function event_192328(  ) {
		
		// Put your code here.
echo "Client pays rent for a long duration of lease in advance.";
		;
		
	}


	// code snippet - form4_4c
	function event_192330(  ) {
		
		// Put your code here.
echo "<p style='text-aligh:justify'>In the case of HDB property, if the lease of the Property falls through by reason 
of the Tenant’s ineligibility to lease under HDB rules or regulations, the Tenant shall 
have no obligation to pay any commission to the Estate Agent.</p>";
		;
		
	}

	// code snippet - P7 comply with all reasonable instructions
	function event_192331(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>comply with all 
      reasonable instructions and requests of the Seller in relation to the 
      transaction.</p>";
		;
		
	}

	// code snippet - CEA F1 text
	function event_192332(  ) {
		
		echo '<div class="form-text">This prescribed Form by the Council for Estate Agencies ("CEA") is for use when an estate agent is authorised or engaged by a prospective Seller to
introduce a Buyer of residential property in Singapore.</div>';
		;
		
	}



	// code snippet - form4_4b-tenant
	function event_192335(  ) {
		
		// Put your code here.
echo "<p style='text-aligh:justify'>The Tenant shall have no obligation to pay any commission to the Estate Agent 
if the lease of the Property falls through without fault on the part of the Tenant.</p>";
		;
		
	}




	// code snippet - form1_party_to_agree
	function event_192339(  ) {
		
		// Put your code here.
echo "Parties to Agreement";
		;
		
	}





	// code snippet - Date:
	function event_192344(  ) {
		
		// Put your code here.
echo "Date:";
		;
		
	}

	// code snippet - P6.6 buyer
	function event_192345(  ) {
		
		// Put your code here.
echo "Buyer includes a potential Buyer.";
		;
		
	}



	// code snippet - Interpreter id3
	function event_192348(  ) {
		
		// Put your code here.
echo "Interpreter's NRIC No.<sup>(3)</sup>:";
		;
		
	}










	// code snippet - If the dispute remains outstanding Seller
	function event_192358(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>If the dispute remains 
      outstanding (i.e. the Seller has elected not to mediate or the dispute is 
      not resolved by mediation), the dispute shall be referred to and finally 
      resolved by arbitration in Singapore under the arbitration scheme 
      prescribed by the CEA, in accordance with such rules as may be prescribed, 
      unless the Seller elects in writing not to arbitrate.</p>
      ";
		;
		
	}



	// code snippet - Sup 1
	function event_192361(  ) {
		
		// Put your code here.
echo "<sup>(1)</sup>&nbsp;";
		;
		
	}






	// code snippet - CEA F8 text
	function event_192367(  ) {
		
		echo '<div class="form-text">This prescribed Form by the Council for Estate Agencies ("CEA") is for use when an estate agent is exclusively authorised or engaged by a
prospective Tenant to introduce a Landlord of residential property in Singapore.</div>';
		;
		
	}

	// code snippet - P6.7
	function event_192368(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>If there is more than one Property, the relevant addresses may be recorded on 
      a separate sheet and attached to this Agreement. Alternatively, a separate 
      agreement may be used for each Property.</p>";
		;
		
	}

	// code snippet - CDD checklist text
	function event_192369(  ) {
		
		// Put your code here.
echo "<span style='font-size:18px;' class='form-text-grey'>The Client's name should appear in the selection list. If the Client's name is not listed, cancel the check, return to Transaction, and add the client in 'Parties Involved.'.
<br>To include multiple Client's name in the check, holding on the Ctrl key while selecting the name.</span>";
		;
		
	}

	// code snippet - form1_gst payable
	function event_192370(  ) {
		
		// Put your code here.
echo "GST is payable upon the commission:";
		;
		
	}


	// code snippet - form1_3.1
	function event_192372(  ) {
		
		// Put your code here.
echo "Scope of Agency and Duties of Estate Agent";
		;
		
	}

	// code snippet - P6.3
	function event_192373(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>If there is no NRIC No., please write another number such as FIN, passport or 
      company incorporation/registration No., as the case may be.</p>
      ";
		;
		
	}

	// code snippet - P5 sign by tenant
	function event_192374(  ) {
		
		// Put your code here.
echo "Signed by the Tenant(s) and the Estate Agent";
		;
		
	}



	// code snippet - Signed by Tenant (1)
	function event_192377(  ) {
		
		// Put your code here.
echo "Signed by Tenant (1)";
		;
		
	}




	// code snippet - Form1 name
	function event_192381(  ) {
		
		// Put your code here.
echo "<span style='border:1px solid #b7b7b7; border-radius:5px; text-align:center; padding:3px 40px 3px 40px;'>Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 1</span>";
		;
		
	}

	// code snippet - cdd_measures_1b
	function event_192382(  ) {
		
		// Put your code here.
echo "If the client is not the BO, are you able to verify the identify of the BO?";
		;
		
	}




	// code snippet - cdd_checklist_1.2
	function event_192386(  ) {
		
		// Put your code here.
echo '<div style="color:red;">The customer’s particulars obtained and your encounters with your client will 
      help you assess if there is suspicion of money laundering (ML) or 
      terrorist financing (TF) activity.</div>';
		;
		
	}


	// code snippet - P7 note
	function event_192388(  ) {
		
		// Put your code here.
echo "<u><i>Note:</i> The following are also applicable in the case of HDB property</u>";
		;
		
	}

	// code snippet - Signed by Landlord (3)
	function event_192389(  ) {
		
		// Put your code here.
echo "Signed by Landlord (3)";
		;
		
	}

	// code snippet - CEA F7 text
	function event_192390(  ) {
		
		echo '<div class="form-text">This prescribed Form by the Council for Estate Agencies ("CEA") is for use when an estate agent is exclusively authorised or engaged by a
prospective Landlord to introduce a Tenant of residential property in Singapore.</div>';
		;
		
	}





	// code snippet - cdd_checklist_2.2
	function event_192395(  ) {
		
		// Put your code here.
echo '<div style="color:red;">* Foreigner 
      includes Singapore Permanent Residents.</div> 
      ';
		;
		
	}

	// code snippet - cdd_checklist_3.2
	function event_192396(  ) {
		
		// Put your code here.
echo '<div style="color:red;">* Physical 
      cash exclude cheques and cashier orders.</div> 
      ';
		;
		
	}




	// code snippet - P6.11
	function event_192400(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>Where the parties have made any choice above, they may subsequently vary such 
      choice in writing but such variation must be dated and initialed by the 
      parties. The parties may also vary the non-prescribed Additional Terms but 
      such variation must be in writing, dated and initialed by the parties.</p>";
		;
		
	}

	// code snippet - Signed by Seller (2)
	function event_192401(  ) {
		
		// Put your code here.
echo "Signed by Seller (2)";
		;
		
	}

	// code snippet - Signed by Buyer (1)
	function event_192402(  ) {
		
		// Put your code here.
echo "Signed by Buyer (1)";
		;
		
	}




	// code snippet - Signed by Landlord (2)
	function event_192406(  ) {
		
		// Put your code here.
echo "Signed by Landlord (2)";
		;
		
	}

	// code snippet - cdd_measures_6a2
	function event_192407(  ) {
		
		// Put your code here.
echo "If your 
      answer is “Yes” to the above question, please indicate the findings in the 
      “Remarks” column.";
		;
		
	}



	// code snippet - Through the interpretation of
	function event_192410(  ) {
		
		// Put your code here.
echo "Through the interpretation of";
		;
		
	}

	// code snippet - cdd_measures_4a2
	function event_192411(  ) {
		
		// Put your code here.
echo "* PEP refers 
      to a person, whether domestic, foreign or international organisation, who 
      is or has been entrusted with prominent public functions, e.g. government 
      ministers, senior civil servants, senior executive of state owned 
      corporations or senior management of international organisations, etc. Use 
      an internet-based search engine, e.g. Google and Yahoo, to obtain news or 
      information if you suspect the client or BO is a PEP.";
		;
		
	}


	// code snippet - CDD questionnaire text
	function event_192413(  ) {
		
		// Put your code here.
echo "<span style='font-size:18px;' class='form-text-grey'>If there are multiple clients that you want to include in the check, holding on to the Ctrl key while selecting the Client's name.</span>";
		;
		
	}

	// code snippet - cdd_measures_5a2
	function event_192414(  ) {
		
		// Put your code here.
echo "* Complex 
      transactions could include attempts to disguise the BO involved in the 
      transaction, or unnecessarily complex transaction structure possibly 
      designed to obscure the true nature of the transaction, or multiple 
      intermediaries used for the transaction. Unusually large transactions 
      could include transaction priced at more than the usual or expected amount 
      for a similar typical transaction.";
		;
		
	}



	// code snippet - Click date view details
	function event_192417(  ) {
		
		// Put your code here.
echo "<span style='font-size:120%;'><i>To view detail of Transaction, click on the Transaction.<i></span>";
		;
		
	}


	// code snippet - cdd_measures_2a2
	function event_192419(  ) {
		
		// Put your code here.
echo "* If there 
      is a partial name match, salesperson should find out whether the 
      nationality and age range of the client match the information provided in 
      the UN Sanction Lists. If there is a nationality and age range match, 
      answer “Yes” to this question.
      ";
		;
		
	}

	// code snippet - Return to top
	function event_192420(  ) {
		
		// Put your code here.
echo '<a href="javascript:" id="return-to-top">
        <I class="icon-chevron-up">
        </i>
      </a>';
echo  '<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">';
		;
		
	}


	// code snippet - P6.5
	function event_192422(  ) {
		
		// Put your code here.
echo "The Estate 
      Agent is not an exclusive agent and the Seller may also sell the Property 
      himself or through another agent. 
      ";
		;
		
	}

	// code snippet - Signed by Seller (3)
	function event_192423(  ) {
		
		// Put your code here.
echo "Signed by Seller (3)";
		;
		
	}




	// code snippet - Form6 name
	function event_192427(  ) {
		
		// Put your code here.
echo "<span style='border:1px solid #b7b7b7; border-radius:5px; text-align:center; padding:3px 40px 3px 40px;'>Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 6</span>";
		;
		
	}


	// code snippet - Hr line
	function event_192429(  ) {
		
		// Put your code here.
echo '<hr style="border:1px solid #f00">';
		;
		
	}





	// code snippet - cdd_measures_5c2
	function event_192434(  ) {
		
		// Put your code here.
echo '* The links 
      to the list of higher risk countries can be found at the Financial Action 
      Task Force’s (FATF) webpage <A href="http://www.fatf-gafi.org/publications/high-riskandnon-cooperativejurisdictions/?hf=10&amp;b=0&amp;s=desc(fatf_releasedate)" target="_blank"> here 
      </a>';
		;
		
	}

	// code snippet - Form8 name
	function event_192435(  ) {
		
		// Put your code here.
echo "<span style='border:1px solid #b7b7b7; border-radius:5px; text-align:center; padding:3px 40px 3px 40px;'>Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 8</span>";
		;
		
	}






	// code snippet - Signed by Buyer (2)
	function event_192441(  ) {
		
		// Put your code here.
echo "Signed by Buyer (2)";
		;
		
	}

	// code snippet - Signed by Seller (1)
	function event_192442(  ) {
		
		// Put your code here.
echo "Signed by Seller (1)";
		;
		
	}



	// code snippet - Slash mark
	function event_192445(  ) {
		
		// Put your code here.
echo "/";
		;
		
	}

	// code snippet - P6.12 sale
	function event_192446(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>If there is a Salesperson representing the Estate Agent in the proposed sale 
      of the Property, the Salesperson shall sign and fill in his particulars. 
      Otherwise, if the Estate Agent acting in the proposed sale of the Property 
      is a natural person, he shall sign and fill in his particulars. If there 
      is more than one such Salesperson or Estate Agent who is a natural person 
      acting in the proposed sale of the Property, their name(s) and 
      particular(s) shall also be written, if necessary, on a separate sheet and 
      attached to this Agreement.</p>";
		;
		
	}



	// code snippet - Signed by Tenant (2)
	function event_192449(  ) {
		
		// Put your code here.
echo "Signed by Tenant (2)";
		;
		
	}

	// code snippet - cdd_measures_2
	function event_192450(  ) {
		
		// Put your code here.
echo "United Nations (UN) 
      Sanction Lists";
		;
		
	}

	// code snippet - cdd_measures_6
	function event_192451(  ) {
		
		// Put your code here.
echo "Enhanced 
      CDD";
		;
		
	}








	// code snippet - Signed by Tenant (3)
	function event_192459(  ) {
		
		// Put your code here.
echo "Signed by Tenant (3)";
		;
		
	}


	// code snippet - cdd_checklist_5j
	function event_192461(  ) {
		
		// Put your code here.
echo "There is other suspicion (please specify):";
		;
		
	}



	// code snippet - transactions_side_nav
	function event_192464(  ) {
		
		global $conn;

// Retrieve the transaction ID from the query parameter
$transaction_id = intval($_GET['editid1']); // Sanitize input

// Fetch the unique transaction number (ID_Tx) based on the transaction ID
$sql = CustomQuery("SELECT ID_Tx FROM transactions WHERE id = $transaction_id");
$row = db_fetch_array($sql);

// Store the transaction ID and ID_Tx in the session
$_SESSION['ID_Tx'] = $row['ID_Tx'];
$_SESSION['id'] = $transaction_id;

echo '<div class="sidenav">
    <a href="./transactions_edit.php?editid1=' . $_SESSION['id'] . '&#transaction_info">
        <i class="fa fa-info-circle right-space"></i> Transaction Info
    </a>
    <a href="./transactions_edit.php?editid1=' . $_SESSION['id'] . '&#property_info">
        <i class="fa fa-home right-space"></i> Property Info
    </a>
    <a href="./transactions_edit.php?editid1=' . $_SESSION['id'] . '&#party_involved">
        <i class="fa fa-male right-space"></i> Parties Involved
    </a>
    <a href="./transactions_edit.php?editid1=' . $_SESSION['id'] . '&#cdd">
        <i class="fa fa-exclamation-triangle right-space"></i>&nbsp;Customer Due Diligence
    </a>
    <a href="./transactions_edit.php?editid1=' . $_SESSION['id'] . '&#cea_forms">
        <i class="fa fa-pencil-square-o right-space"></i> Prescribed Forms
    </a>
    <a href="./transactions_edit.php?editid1=' . $_SESSION['id'] . '&#docs_upload">
        <i class="fa fa-upload right-space"></i> Docs Upload
    </a>
    <a href="./transactions_edit.php?editid1=' . $_SESSION['id'] . '&#comm">
        <i class="fa fa-usd right-space"></i> Commission
    </a>
</div>';
		;
		
	}



	// code snippet - cdd_measures_5b2
	function event_192467(  ) {
		
		// Put your code here.
echo "* 
      Transactions with no apparent economic or lawful purpose could include 
      using trust and company service providers to set up a number of corporate 
      structures in multiple countries for the transaction without any apparent 
      purpose.";
		;
		
	}

	// code snippet - form1_gst if yes
	function event_192468(  ) {
		
		// Put your code here.
echo "If Yes, the commission specified is";
		;
		
	}



	// code snippet - A terms Note
	function event_192471(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'><i>Note:</i>&ensp;
      The printed terms prescribed in this form of Agreement cannot be deleted 
      or varied. If the parties wish at any time to agree to or add on any other 
      terms, they must be in writing, dated, inserted as Additional Terms below 
      and initialed by the parties. If the space below is insufficient, the 
      Additional Terms are to be written/printed in black ink on a separate 
      sheet of paper which must be <strong>pink</strong> in color and in a font <strong>not smaller</strong> than 
      the font of the above terms.</p>
      ";
		;
		
	}


	// code snippet - cdd_measures_4b2
	function event_192473(  ) {
		
		// Put your code here.
echo "* A foreign 
      PEP refers to a person who is or has been entrusted with prominent public 
      functions by a foreign country. Family member means a parent, step-parent, 
      child, step-child, adopted child, spouse, sibling, step-sibling and 
      adopted sibling of the PEP. Close associate means an individual who is 
      closely connected to a PEP, either socially or professionally.";
		;
		
	}

	// code snippet - cdd_measures_6b2
	function event_192474(  ) {
		
		// Put your code here.
echo "If your 
      answer is “Yes” to the above question, please indicate the decision of 
      your estate agent in the “Remarks” column.";
		;
		
	}

	// code snippet - cdd_checklist_5b
	function event_192475(  ) {
		
		// Put your code here.
echo "Client appears hesitant or declines to put his/her name on any document that would connect him/her with the property.";
		;
		
	}


	// code snippet - Signed by Landlord (1)
	function event_192477(  ) {
		
		// Put your code here.
echo "Signed by Landlord (1)";
		;
		
	}

	// code snippet - form4_4-note
	function event_192478(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'><i>Note:</i>&emsp;If a Landlord introduced by the Estate Agent into a binding lease with 
the Tenant in respect of the Property, the name and address of the Landlord and the 
date of the lease may be recorded as follows:</p>";
		;
		
	}

	// code snippet - cdd_measures_1.a2
	function event_192479(  ) {
		
		// Put your code here.
echo "If 
      your answer is “No” to the above question, please select “NA” for the 
      following question.
      ";
		;
		
	}

	// code snippet - cdd_measures_3b2
	function event_192480(  ) {
		
		// Put your code here.
echo "If your 
      answer is “Yes” to the above question, please review your client’s 
      activities for criminal conduct and lodge an STR where warranted. Refer to 
      GC 04-16 for guidance on submission of STRs related to the Panama 
      Papers.";
		;
		
	}


	// code snippet - SCHEDULE 1
	function event_192482(  ) {
		
		// Put your code here.
echo "<span style='font-family:Times New Roman;font-weight:bold'>SCHEDULE 1</span>";
		;
		
	}

	// code snippet - cdd_measures_2b2
	function event_192483(  ) {
		
		// Put your code here.
echo "If your 
      answer is “Yes” to the above question, please proceed to lodge an STR and 
      cease dealing with the client or BO.";
		;
		
	}

	// code snippet - Signed by Buyer (3)
	function event_192484(  ) {
		
		// Put your code here.
echo "Signed by Buyer (3)";
		;
		
	}

	// code snippet - cdd_checklist_5f
	function event_192485(  ) {
		
		// Put your code here.
echo "Client is planning to purchase or rent multiple properties in a short period of time.";
		;
		
	}




	// code snippet - Attendance Date
	function event_192489(  ) {
		
		// Put your code here.
echo "Attendance Date";
		;
		
	}




	// code snippet - The A terms cannot conflict
	function event_192493(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>The Additional Terms cannot conflict with, vary or otherwise limit the prescribed terms 
      <SUP>(11)</SUP> of this Agreement.</p>";
		;
		
	}

	// code snippet - Explanatory notes
	function event_192494(  ) {
		
		// Put your code here.
echo "<span style='font-family:Times New Roman;font-weight:bold'>EXPLANATORY NOTES</span>";
		;
		
	}

	// code snippet - CEA F5 text
	function event_192495(  ) {
		
		echo '<div class="form-text">This prescribed Form by the Council for Estate Agencies ("CEA") is for use when an estate agent is exclusively authorised or engaged by a
prospective Seller to introduce a Buyer of residential property in Singapore.</div>';
		;
		
	}


	// code snippet - Signed by Landlord (4)
	function event_192497(  ) {
		
		// Put your code here.
echo "Signed by Landlord (4)";
		;
		
	}

	// code snippet - This agreement shall be
	function event_192498(  ) {
		
		// Put your code here.
echo "This Agreement shall be governed by the laws of Singapore.";
		;
		
	}




	// code snippet - cdd_checklist_5g
	function event_192502(  ) {
		
		// Put your code here.
echo "Client is willing to purchase or rent the property without inspecting it.";
		;
		
	}




	// code snippet - Form3 name
	function event_192506(  ) {
		
		// Put your code here.
echo "<span style='border:1px solid #b7b7b7; border-radius:5px; text-align:center; padding:3px 40px 3px 40px;'>Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 3</span>";
		;
		
	}

	// code snippet - CDD fore text
	function event_192507(  ) {
		
		// Put your code here.
echo "<div class='form-text'>Customer Due Diligence (CDD) is mandatory for every 
property transaction. Please answer all questions in the checklist to determine 
if further action is required. Once the checklist is completed, the system will 
automatically scan the customer's name against the UN Sanction list, Panama 
Papers, local Name list and Alert list. The results of these checks will be 
displayed below.</div>";
		;
		
	}



	// code snippet - cdd_checklist_5c
	function event_192510(  ) {
		
		// Put your code here.
echo "Client attempts to hide the identity of the true client or requests that the transaction be structured to hide the identity of the true client.";
		;
		
	}

	// code snippet - Schedule 2
	function event_192511(  ) {
		
		// Put your code here.
echo "<span style='font-family:Times New Roman;font-weight:bold'>SCHEDULE 2</span>";
		;
		
	}


	// code snippet - cdd_measures_4b3
	function event_192513(  ) {
		
		// Put your code here.
echo "If your 
      answer is “Yes” to the above question, ask for the source of the PEP’s 
      funds/wealth and to seek approval from your estate agent whether to 
      continue with the property transaction. Indicate the source of 
      funds/wealth and the decision of your estate agent in the “Remarks” 
      column.";
		;
		
	}




	// code snippet - Pg 5 Signed by
	function event_192517(  ) {
		
		// Put your code here.
echo "Signed by";
		;
		
	}


	// code snippet - Pg5 Signed by seller
	function event_192519(  ) {
		
		// Put your code here.
echo "Signed by the Seller(s) and the Estate Agent";
		;
		
	}





	// code snippet - P6.8 purchase
	function event_192524(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>An agreement for sale and purchase may take the form of an executed sale and 
      purchase agreement or an option to purchase which has been exercised by 
      the Buyer.</p>";
		;
		
	}

	// code snippet - cdd_measures_5c3
	function event_192525(  ) {
		
		// Put your code here.
echo "If your 
      answer is “Yes” to one or more of the above questions 5, please proceed to 
      complete question 6.";
		;
		
	}

	// code snippet - Form4 name
	function event_192526(  ) {
		
		// Put your code here.
echo "<span style='border:1px solid #b7b7b7; border-radius:5px; text-align:center; padding:3px 40px 3px 40px;'>Council for Estate Agencies, Singapore | Prescribed Estate Agency Agreement: Form 4</span>";
		;
		
	}



	// code snippet - P7 explain and go thru checklist
	function event_192529(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>explain and go through the resale checklist with the Seller of the HDB flat and check 
      with the Seller on whether the renovations made were duly authorised.</p>";
		;
		
	}

	// code snippet - Signed by Seller (4)
	function event_192530(  ) {
		
		// Put your code here.
echo "Signed by Seller (4)";
		;
		
	}

	// code snippet - CEA F2 text
	function event_192531(  ) {
		
		echo '<div class="form-text">This prescribed Form by the Council for Estate Agencies ("CEA") is for use when an estate agent is authorised or engaged by a prospective <b>Buyer</b> to introduce a <b>Seller</b> of residential property in Singapore.</div>';
		;
		
	}

	// code snippet - P7 assist seller to enter agreement
	function event_192532(  ) {
		
		// Put your code here.
echo "assist 
      the Seller to enter into a binding agreement for sale and purchase with 
      the Buyer and reasonably explain to the Seller all relevant forms and 
      documents. However, if the Estate Agent is in doubt on any matter, he 
      shall state his doubt and advise the Seller to seek advice from 
      appropriate professionals.";
		;
		
	}


	// code snippet - form-appointment by seller
	function event_192534(  ) {
		
		// Put your code here.
echo "Appointment of Estate Agent by Seller";
		;
		
	}

	// code snippet - cdd_measures_3
	function event_192535(  ) {
		
		// Put your code here.
echo "Panama Papers";
		;
		
	}

	// code snippet - Interpreter's NRIC3
	function event_192536(  ) {
		
		// Put your code here.
echo "Interpreter’s NRIC No.<SUP>(3)</SUP>:";
		;
		
	}

	// code snippet - invcustomers_head_text
	function event_192537(  ) {
		
		// Put your code here.
echo '<div style="color:orange;font-size:18px;text-align:justify;">On prevention of Money Laundering (AML) and countering the Financing of Terrorism (CFT), as part of Customer Due Diligence (CDD) measures, Salesperson shall check and keep in record the particulars and profile of client 
and all parties involved. Record of which shall as accurate and up to date as possible. This information of client is confidential.</div>';
		;
		
	}


	// code snippet - P6.4
	function event_192539(  ) {
		
		// Put your code here.
echo "To insert full name of the Estate Agent.";
		;
		
	}

	// code snippet - Applicable Law and Dispute Resolution
	function event_192540(  ) {
		
		// Put your code here.
echo "Applicable Law and Dispute Resolution";
		;
		
	}

	// code snippet - cdd_measures_2a3
	function event_192541(  ) {
		
		// Put your code here.
echo "If your 
      answer is “Yes” to the above question, please proceed to lodge an 
      STR.";
		;
		
	}

	// code snippet - cdd_measures_4a3
	function event_192542(  ) {
		
		// Put your code here.
echo "If your 
      answer is “No” to the above question, please select “NA” for the following 
      question.";
		;
		
	}

	// code snippet - form1_3.2
	function event_192543(  ) {
		
		// Put your code here.
echo "<p style='text-align: justify'>The Estate Agent’s duties shall be as set out in Schedule 2 to this 
      Agreement, in addition to the duties placed on the Estate Agent by 
      the other terms in this Agreement and any written law.</p> 
      ";
		;
		
	}




	// code snippet - P7 advance the seller interest
	function event_192547(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>advance the 
      Seller’s interest unaffected by any interest of the Estate Agent, 
      Salesperson or any other person.</p>";
		;
		
	}


	// code snippet - P7 promptly forward offers
	function event_192549(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>promptly 
      forward to the Seller all offers, proposals or expressions of interest 
      from potential Buyers or their agents.</p> 
      ";
		;
		
	}





	// code snippet - P7 assist seller of flat to submit forms
	function event_192554(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>assist the Seller of the HDB flat to submit such forms, documents and/or 
      information as may be required by HDB to process the application for sale.</p>";
		;
		
	}

	// code snippet - The Estate Agent may ask seller
	function event_192555(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>The Estate Agent may ask the Tenant in writing whether he elects to mediate or 
not. If the Tenant does not reply or make any election within three weeks of receipt 
of such enquiry, he shall be deemed to have elected in writing not to proceed to 
mediation.</p>";
		;
		
	}




	// code snippet - P7 represent seller in negotiation
	function event_192559(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>represent the 
      Seller in negotiations with any prospective Buyer in accordance with his 
      instructions.</p>";
		;
		
	}



	// code snippet - Signed by Buyer (4)
	function event_192562(  ) {
		
		// Put your code here.
echo "Signed by Buyer (4)";
		;
		
	}

	// code snippet - P7 provide reasonable assistance
	function event_192563(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>provide reasonable assistance and advice to the Seller throughout the process of 
      sale of the Property.</p>";
		;
		
	}

	// code snippet - form1_4-note
	function event_192564(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'><i>Note:</i>&emsp;If a Buyer introduced by the Estate Agent has entered into a sale 
      and purchase agreement with the Seller in respect of the Property, 
      the name and address of the Buyer and the date of the sale and 
      purchase agreement may be recorded as follows:</p>
      ";
		;
		
	}



	// code snippet - The Estate agent may ask seller
	function event_192567(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>The Estate Agent may ask the Seller in writing whether he elects to mediate or not. If the Seller does not reply or make any election within three weeks of receipt of such enquiry, he shall be deemed to have elected in writing not to proceed to mediation.</p>
      ";
		;
		
	}



	// code snippet - P6.10
	function event_192570(  ) {
		
		// Put your code here.
echo "<p style='text-align:justify'>The Code of Ethics and Professional Client Care prescribes the Estate Agent’s 
      and Salesperson’s duty to disclose and avoid any potential or actual 
      conflict of interest.</p>";
		;
		
	}




	// code snippet - Signed by Tenant (4)
	function event_192574(  ) {
		
		// Put your code here.
echo "Signed by Tenant (4)";
		;
		
	}





}
?>
