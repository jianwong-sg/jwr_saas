<?php
class DatabaseEvents {
	public static $customConnections = array( 
	'Tables' 
);

	
	public function db_Tables() {
 if(!isset($_SESSION['newcompanydb']))
{
$companydb='jwresour_jwr_saas_db';
}
else
{
	$pdo = new PDO(
		'mysql:host=localhost;dbname=INFORMATION_SCHEMA',
		'jian57',
		'Jian57+97691300'
		);
	 
$nRows = $pdo->query("SELECT SCHEMA_NAME
FROM INFORMATION_SCHEMA.SCHEMATA
WHERE SCHEMA_NAME = '".$_SESSION['newcompanydb']."'")->fetchColumn(); 

if($nRows)
{
$companydb=$_SESSION['newcompanydb'];
}
else
{
$companydb='jwresour_jwr_saas_db';
}
}

$host="localhost";
$user="jian57";
$pwd="Jian57+97691300";
$port="";
$sys_dbname=$companydb;

return array( "connInfo" => array( $host, $user, $pwd, $port, $sys_dbname ) );
}	
	}
?>