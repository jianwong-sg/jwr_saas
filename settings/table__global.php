<?php
global $runnerTableSettings;
$runnerTableSettings[ GLOBAL_PAGES ] = array(
	'name' => '<global>',
	'type' => 5,
	'shortName' => '_global',
	'advancedSecurityType' => 0,
	'pagesByType' => array(
		'changepwd' => array( 
			'changepwd' 
		),
		'changepwd_success' => array( 
			'changepwd_success' 
		),
		'login' => array( 
			'login' 
		),
		'menu' => array( 
			'menu' 
		),
		'register' => array( 
			'register' 
		),
		'register_success' => array( 
			'register_success' 
		),
		'remind' => array( 
			'remind' 
		),
		'remind_success' => array( 
			'remind_success' 
		),
		'userinfo' => array( 
			'userinfo' 
		) 
	),
	'pageTypes' => array(
		'changepwd' => 'changepwd',
		'changepwd_success' => 'changepwd_success',
		'login' => 'login',
		'menu' => 'menu',
		'register' => 'register',
		'register_success' => 'register_success',
		'remind' => 'remind',
		'remind_success' => 'remind_success',
		'userinfo' => 'userinfo' 
	),
	'defaultPages' => array(
		'changepwd' => 'changepwd',
		'changepwd_success' => 'changepwd_success',
		'login' => 'login',
		'menu' => 'menu',
		'register' => 'register',
		'register_success' => 'register_success',
		'remind' => 'remind',
		'remind_success' => 'remind_success',
		'userinfo' => 'userinfo' 
	),
	'originalPagesByType' => array(
		'changepwd' => array( 
			'changepwd' 
		),
		'changepwd_success' => array( 
			'changepwd_success' 
		),
		'login' => array( 
			'login' 
		),
		'menu' => array( 
			'menu' 
		),
		'register' => array( 
			'register' 
		),
		'register_success' => array( 
			'register_success' 
		),
		'remind' => array( 
			'remind' 
		),
		'remind_success' => array( 
			'remind_success' 
		),
		'userinfo' => array( 
			'userinfo' 
		) 
	),
	'originalPageTypes' => array(
		'changepwd' => 'changepwd',
		'changepwd_success' => 'changepwd_success',
		'login' => 'login',
		'menu' => 'menu',
		'register' => 'register',
		'register_success' => 'register_success',
		'remind' => 'remind',
		'remind_success' => 'remind_success',
		'userinfo' => 'userinfo' 
	),
	'originalDefaultPages' => array(
		'changepwd' => 'changepwd',
		'changepwd_success' => 'changepwd_success',
		'login' => 'login',
		'menu' => 'menu',
		'register' => 'register',
		'register_success' => 'register_success',
		'remind' => 'remind',
		'remind_success' => 'remind_success',
		'userinfo' => 'userinfo' 
	),
	'hasJsEvents' => true 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels[ GLOBAL_PAGES ] = array(
	'pageTitles' => array(
		'register' => 'New user signup' 
	) 
);
}
?>