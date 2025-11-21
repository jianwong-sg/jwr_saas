<?php
$runnerProjectSettings = array(
	'createRestAPI' => true,
	'restAPIReturnEncodedBinary' => true,
	'restAPIAuthType' => 'api',
	'restAPIKeyField' => 'apikey',
	'emailTemplates' => array(
		'English' => array(
			'adminregister' => array(
				'name' => 'adminregister',
				'template' => 'Notification on user signup to EAT SAAS

User registered at %url%

Email: %email_value%
Username: %username_value%
Full Name: %full_name_value%',
				'useDefault' => false,
				'useHTML' => false 
			),
			'userregister' => array(
				'name' => 'userregister',
				'template' => 'Registration on EAT

You have signed up as a User in the Estate Agency Tool (EAT)

Click the following link to avtivate your account.
%activateurl%

If you are unable to click on the link, copy and paste it into your browser window.

For further assistance, please contact jian @ 97691300.

CEA Reg: %username_value%
Name: %full_name_value%
Email: %email_value%
Agency: %agency_value%',
				'useDefault' => false,
				'useHTML' => false 
			),
			'remindpassword' => array(
				'name' => 'remindpassword',
				'template' => '',
				'useDefault' => true,
				'useHTML' => false 
			),
			'resetpassword' => array(
				'name' => 'resetpassword',
				'template' => '',
				'useDefault' => true,
				'useHTML' => false 
			) 
		) 
	),
	'landingSettings' => array(
		'type' => 1,
		'table' => '',
		'pageId' => 'login',
		'page' => 'login',
		'url' => 'login.php?page=login_DocManager' 
	),
	'rteType' => 'INNOVA',
	'richTextEnabled' => true,
	'menuIds' => array( 
		'main',
		'Tx_edit',
		'cpd',
		'cpd_window',
		'forms',
		'forms_main',
		'liststatus',
		'news',
		'secondary',
		'welcome_page' 
	),
	'tablesAdvSecurity' => array(
		'ads_record' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'full_name',
			'table' => 192579 
		),
		'pii_indvd' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 192616 
		),
		'transact_type' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 192659 
		),
		'digital_form' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 192668 
		),
		'my_profile' => array(
			'table' => 192693 
		),
		'cpd_activities' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 192704 
		),
		'transactions_chart' => array(
			'usersOwnerIdField' => 'eatuser_id',
			'table' => 192726 
		),
		'form4' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 192739 
		),
		'ownership_type' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 193014 
		),
		'form_type' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 193023 
		),
		'lease_tenure1' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 193035 
		),
		'form8' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 193044 
		),
		'prop_cust' => array(
			'usersOwnerIdField' => 'username',
			'table' => 193340 
		),
		'doc_upload_lcsc' => array(
			'usersOwnerIdField' => 'active',
			'table' => 193448 
		),
		'awards' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 193473 
		),
		'lor4_lease_due' => array(
			'usersOwnerIdField' => 'active',
			'table' => 193518 
		),
		'prop_kind' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 193542 
		),
		'transactions_rm_rental' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 193553 
		),
		'rental_main' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 193622 
		),
		'share_type' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 193645 
		),
		'cpd_types' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 193660 
		),
		'contacts' => array(
			'usersOwnerIdField' => 'id',
			'table' => 193682 
		),
		'cpd_providers' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 193744 
		),
		'transactions_rental' => array(
			'usersOwnerIdField' => 'active',
			'table' => 193756 
		),
		'cpd_trainings_details' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 193822 
		),
		'transactions-admin' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 193876 
		),
		'parties_involved' => array(
			'usersOwnerIdField' => 'username',
			'table' => 194217 
		),
		'cobroke_external_comm' => array(
			'usersOwnerIdField' => 'username',
			'table' => 194336 
		),
		'pii_agency' => array(
			'usersOwnerIdField' => 'active',
			'table' => 194406 
		),
		'cobroke_internal_comm' => array(
			'usersOwnerIdField' => 'username',
			'table' => 194448 
		),
		'gst_incl' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 194491 
		),
		'transactions_lcsc' => array(
			'usersOwnerIdField' => 'active',
			'table' => 194502 
		),
		'eat_user_subscriptions' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 194849 
		),
		'transactions_jtc_lease' => array(
			'usersOwnerIdField' => 'active',
			'table' => 194877 
		),
		'parties_involved_count' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 194946 
		),
		'parties_involved_buyer' => array(
			'usersOwnerIdField' => 'eatuser_id',
			'table' => 195054 
		),
		'parties_involved_tenant' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 195162 
		),
		'salutation' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 195270 
		),
		'country' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 195282 
		),
		'properties_owner' => array(
			'usersOwnerIdField' => 'username',
			'table' => 195294 
		),
		'str' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'full_name',
			'table' => 195438 
		),
		'rental_main_details' => array(
			'usersOwnerIdField' => 'active',
			'table' => 195613 
		),
		'form5' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 195673 
		),
		'form1' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 195943 
		),
		'awards-search' => array(
			'table' => 196207 
		),
		'eat_users_user' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 196248 
		),
		'qualifications' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 196330 
		),
		'my_comm' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 196357 
		),
		'districts' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 196590 
		),
		'transactions_sale' => array(
			'usersOwnerIdField' => 'active',
			'table' => 196598 
		),
		'hdb_scheme' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 196664 
		),
		'agent_nametag_user' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 196672 
		),
		'default_pg' => array(
			'table' => 196715 
		),
		'parties_involved_lcsc' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 196726 
		),
		'agency' => array(
			'usersOwnerIdField' => 'active',
			'table' => 196842 
		),
		'represent_type' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 196874 
		),
		'transactions_prop_mng' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 196886 
		),
		'lor4_lease_due1' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 196952 
		),
		'invcustomers1' => array(
			'usersOwnerIdField' => 'active',
			'table' => 196979 
		),
		'form_all' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 197128 
		),
		'lease_due_pub' => array(
			'usersOwnerIdField' => 'active',
			'table' => 197517 
		),
		'cobroke_internal' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 197546 
		),
		'lease_tenure2' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 197594 
		),
		'cdd_measures' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'full_name',
			'table' => 197603 
		),
		'payment_term' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 197717 
		),
		'cdd_checklist' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 197726 
		),
		'conflect_descriptions' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 197852 
		),
		'lease_due' => array(
			'usersOwnerIdField' => 'username',
			'table' => 197867 
		),
		'properties' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 198182 
		),
		'str-admin' => array(
			'usersOwnerIdField' => 'nric',
			'table' => 198250 
		),
		'nationality' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 198419 
		),
		'form3' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 198431 
		),
		'form7' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 198718 
		),
		'percentage' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 199029 
		),
		'party_type' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 199037 
		),
		'agents' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 199049 
		),
		'doc_upload' => array(
			'usersOwnerIdField' => 'active',
			'table' => 199124 
		),
		'insurers_user' => array(
			'usersOwnerIdField' => 'active',
			'table' => 199149 
		),
		'insurers' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 199178 
		),
		'pii_category' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 199209 
		),
		'default_pg_default' => array(
			'table' => 199219 
		),
		'prop_type' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 199228 
		),
		'cdd_checklist-admin' => array(
			'usersOwnerIdField' => 'active',
			'table' => 199236 
		),
		'ownership_kind' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 199363 
		),
		'pii_indvd_agency' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'agency_cea_reg',
			'table' => 199372 
		),
		'cpd_trainings_user' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 199414 
		),
		'dollars' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 199465 
		),
		'external_party_comm' => array(
			'usersOwnerIdField' => 'username',
			'table' => 199475 
		),
		'cpd_trainings' => array(
			'usersOwnerIdField' => 'username',
			'table' => 199536 
		),
		'invcustomers' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 199586 
		),
		'parties_involved_landlord' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 199746 
		),
		'hdb_towns' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 199854 
		),
		'external_party' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 199863 
		),
		'my_comm_admin' => array(
			'usersOwnerIdField' => 'active',
			'table' => 199928 
		),
		'pii_agency_user' => array(
			'usersOwnerIdField' => 'username',
			'table' => 200161 
		),
		'agent_nametag' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 200199 
		),
		'rental_main_detail_occupier' => array(
			'usersOwnerIdField' => 'active',
			'table' => 200246 
		),
		'ownership_typeid' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 200294 
		),
		'rental_main_journal' => array(
			'usersOwnerIdField' => 'username',
			'table' => 200306 
		),
		'cobroke_external' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 200333 
		),
		'cpd_records' => array(
			'usersOwnerIdField' => 'username',
			'table' => 200405 
		),
		'race' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 200427 
		),
		'loginattempts' => array(
			'table' => 200436 
		),
		'eat_users' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 200451 
		),
		'cpd_period' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 200537 
		),
		'reply_lister' => array(
			'table' => 200547 
		),
		'cdd_measures-admin' => array(
			'usersOwnerIdField' => 'full_name',
			'table' => 200576 
		),
		'gst' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 200688 
		),
		'cpd_hours' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 200696 
		),
		'fsbo' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 200715 
		),
		'parties_involved_seller' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 200738 
		),
		'rental_main_properties' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 200846 
		),
		'cdd_checklist1' => array(
			'usersOwnerIdField' => 'active',
			'table' => 200911 
		),
		'cpd_trainers' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 201043 
		),
		'transactions' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 201085 
		),
		'transact_party' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 201455 
		),
		'interpretation' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 201467 
		),
		'thanku' => array(
			'usersOwnerIdField' => 'email',
			'table' => 201476 
		),
		'lease_tenure3' => array(
			'usersOwnerIdField' => 'user_id',
			'table' => 201482 
		),
		'transaction_party_involved' => array(
			'usersOwnerIdField' => 'active',
			'table' => 201490 
		),
		'form6' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 201589 
		),
		'form2' => array(
			'advSecurity' => 1,
			'usersOwnerIdField' => 'username',
			'table' => 201852 
		),
		'forms' => array(
			'usersOwnerIdField' => 'active',
			'table' => 202110 
		),
		'transactions_chart_pub' => array(
			'usersOwnerIdField' => 'eatuser_id',
			'table' => 202565 
		) 
	),
	'styleOverrides' => array(
		'form1_print' => true,
		'cdd_checklist_admin_add' => true,
		'cdd_measures_admin_add' => true,
		'thanku_add' => true,
		'transactions_sale_list' => true,
		'transactions_rental_list' => true,
		'transactions_prop_mng_list' => true,
		'transactions_rm_rental_list' => true,
		'transactions_chart_chart' => true,
		'transactions_jtc_lease_list' => true,
		'form5_edit_sign' => true,
		'form3_edit_sign' => true 
	),
	'hasCustomCss' => true,
	'connEncryptInfo' => array(
		'Tables' => array(
			'encryptMethod' => 1,
			'encryptAlgorithm' => 128,
			'encryptKey' => '$jw6857r707',
			'symmetricKey' => '',
			'certificate' => '',
			'connId' => 'Tables' 
		),
		'jwresourjweat1091saasatjwrealt' => array(
			'encryptMethod' => 1,
			'encryptAlgorithm' => 128,
			'encryptKey' => '$jw6857r707',
			'symmetricKey' => '',
			'certificate' => '',
			'connId' => 'jwresourjweat1091saasatjwrealt' 
		) 
	),
	'userTableKeys' => array( 
		'eatuser_id' 
	),
	'phpSpreadsheet' => false,
	'ext' => 'php',
	'security' => array(
		'projectName' => 'jwr_saas1',
		'loginDataSource' => 'eat_users',
		'loginForm' => 0,
		'dynamicPermissions' => false,
		'dpTablePrefix' => '',
		'dpTableConnId' => 'Tables',
		'providers' => array( 
			array(
				'type' => '%db',
				'activationField' => 'active',
				'active' => true,
				'code' => '01',
				'codeField' => '',
				'emailField' => 'email',
				'extUserIdField' => '',
				'fullnameField' => 'full_name',
				'label' => array(
					'text' => 'Database',
					'type' => 0 
				),
				'name' => 'db',
				'passwordField' => 'password',
				'phoneField' => '',
				'resetDateField' => '˂Create new˃',
				'resetTokenField' => '˂Create new˃',
				'table' => array(
					'connId' => 'jwresourjweat1091saasatjwrealt',
					'table' => 'eat_users' 
				),
				'twoFactorField' => '',
				'userGroupField' => 'user_group',
				'usernameField' => 'username',
				'userpicField' => '' 
			) 
		),
		'enabled' => true,
		'advancedSecurityAvailable' => true,
		'userGroupsAvailable' => true,
		'hardcodedLogin' => false,
		'defaultProviderCode' => '01',
		'adOnlyLogin' => false,
		'sessionControl' => array(
			'lifeTime' => 15,
			'sessionName' => 'Y0ouWo60ANFyqp7o6a4V',
			'JWTSecret' => 'L3009586d',
			'forceExpire' => false,
			'keepAlive' => true 
		),
		'registration' => array(
			'remindMethod' => 0,
			'hashAlgorithm' => 0,
			'adminEmail' => 'jian.sg@gmail.com',
			'caseInsensitiveLogin' => true,
			'changePasswordPage' => true,
			'changePwdPage' => true,
			'hashPassword' => false,
			'notifyAdmin' => true,
			'notifyUser' => true,
			'registerPage' => true,
			'remindPage' => true,
			'remindPasswordPage' => true,
			'sendActivationLink' => true,
			'passwordValidation' => array(
				'strong' => true,
				'minimumLength' => 8,
				'uniqueCharacters' => 4,
				'digitsAndSymbols' => 2,
				'upperAndLowerCase' => false 
			) 
		),
		'captchaSettings' => array(
			'captchaType' => 0,
			'siteKey' => '',
			'secretKey' => '',
			'passesCount' => 5 
		),
		'emailSettings' => array(
			'fromEmail' => 'noreply@jwrealty.sg',
			'usePHPDefinedSMTP' => false,
			'useBuiltInMailer' => false,
			'SMTPServer' => 'mail.jwrealty.sg',
			'SMTPPort' => 465,
			'SMTPUser' => 'noreply@jwrealty.sg',
			'SMTPPassword' => 'Sjw6857r',
			'securityProtocol' => 1 
		),
		'advancedSecurity' => array(
			'allowGuestLogin' => true,
			'tables' => array(
				'ads_record' => array(
					'mainOwnerIDField' => 'full_name',
					'securityOption' => 1,
					'userOwnerIDField' => 'full_name' 
				),
				'agency' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'agent_nametag' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'agent_nametag_user' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'agents' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'awards' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'awards-search' => array(
					'mainOwnerIDField' => '',
					'securityOption' => 0,
					'userOwnerIDField' => '' 
				),
				'cdd_checklist' => array(
					'mainOwnerIDField' => 'checked_by_cea',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'cdd_checklist-admin' => array(
					'mainOwnerIDField' => 'checked_by_cea',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'cdd_checklist1' => array(
					'mainOwnerIDField' => 'checked_by_cea',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'cdd_measures' => array(
					'mainOwnerIDField' => 'checked_by',
					'securityOption' => 1,
					'userOwnerIDField' => 'full_name' 
				),
				'cdd_measures-admin' => array(
					'mainOwnerIDField' => 'checked_by',
					'securityOption' => 0,
					'userOwnerIDField' => 'full_name' 
				),
				'cobroke_external' => array(
					'mainOwnerIDField' => 'username',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'cobroke_external_comm' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'username' 
				),
				'cobroke_internal' => array(
					'mainOwnerIDField' => 'username',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'cobroke_internal_comm' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'username' 
				),
				'conflect_descriptions' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'contacts' => array(
					'mainOwnerIDField' => 'docuserid',
					'securityOption' => 0,
					'userOwnerIDField' => 'id' 
				),
				'country' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'cpd_activities' => array(
					'mainOwnerIDField' => 'cpdactivityid',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'cpd_hours' => array(
					'mainOwnerIDField' => 'cpdhourid',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'cpd_period' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'cpd_providers' => array(
					'mainOwnerIDField' => 'cpdproviderid',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'cpd_records' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'username' 
				),
				'cpd_trainers' => array(
					'mainOwnerIDField' => 'docuserid',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'cpd_trainings' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 0,
					'userOwnerIDField' => 'username' 
				),
				'cpd_trainings_details' => array(
					'mainOwnerIDField' => 'cpdtrainingid',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'cpd_trainings_user' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'cpd_types' => array(
					'mainOwnerIDField' => 'cpdtypeid',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'default_pg' => array(
					'mainOwnerIDField' => '',
					'securityOption' => 0,
					'userOwnerIDField' => '' 
				),
				'default_pg_default' => array(
					'mainOwnerIDField' => '',
					'securityOption' => 0,
					'userOwnerIDField' => '' 
				),
				'digital_form' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'districts' => array(
					'mainOwnerIDField' => 'ID',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'doc_upload' => array(
					'mainOwnerIDField' => 'date_added',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'dollars' => array(
					'mainOwnerIDField' => 'ID0',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'eat_user_subscriptions' => array(
					'mainOwnerIDField' => 'user_sub_id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'eat_users' => array(
					'mainOwnerIDField' => 'username',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'eat_users_user' => array(
					'mainOwnerIDField' => 'username',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'external_party' => array(
					'mainOwnerIDField' => 'username',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'external_party_comm' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'username' 
				),
				'form1' => array(
					'mainOwnerIDField' => 'salesperson_cea',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'form2' => array(
					'mainOwnerIDField' => 'salesperson_cea',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'form3' => array(
					'mainOwnerIDField' => 'salesperson_cea',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'form4' => array(
					'mainOwnerIDField' => 'salesperson_cea',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'form5' => array(
					'mainOwnerIDField' => 'salesperson_cea',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'form6' => array(
					'mainOwnerIDField' => 'salesperson_cea',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'form7' => array(
					'mainOwnerIDField' => 'salesperson_cea',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'form8' => array(
					'mainOwnerIDField' => 'salesperson_cea',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'form_all' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'form_type' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'forms' => array(
					'mainOwnerIDField' => 'docuserid',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'fsbo' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'gst' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'gst_incl' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'hdb_scheme' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'hdb_towns' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'insurers' => array(
					'mainOwnerIDField' => 'docuserid',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'insurers_user' => array(
					'mainOwnerIDField' => 'docuserid',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'interpretation' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'invcustomers' => array(
					'mainOwnerIDField' => 'username',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'invcustomers1' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'lease_due' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 0,
					'userOwnerIDField' => 'username' 
				),
				'lease_due_pub' => array(
					'mainOwnerIDField' => 'category',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'lease_tenure1' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'lease_tenure2' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'lease_tenure3' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'loginattempts' => array(
					'mainOwnerIDField' => '',
					'securityOption' => 0,
					'userOwnerIDField' => '' 
				),
				'lor4_lease_due' => array(
					'mainOwnerIDField' => 'ID_Tx',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'lor4_lease_due1' => array(
					'mainOwnerIDField' => 'ID_Tx',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'my_comm' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'my_comm_admin' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'nationality' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'ownership_kind' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'ownership_type' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'ownership_typeid' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'parties_involved' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'username' 
				),
				'parties_involved_buyer' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'parties_involved_count' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'parties_involved_landlord' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'parties_involved_lcsc' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'parties_involved_seller' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'parties_involved_tenant' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'party_type' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'payment_term' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'percentage' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'pii_agency' => array(
					'mainOwnerIDField' => 'category',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'pii_agency_user' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'username' 
				),
				'pii_category' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'pii_indvd' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'pii_indvd_agency' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 1,
					'userOwnerIDField' => 'agency_cea_reg' 
				),
				'prop_cust' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'username' 
				),
				'prop_kind' => array(
					'mainOwnerIDField' => 'propkindid',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'prop_type' => array(
					'mainOwnerIDField' => 'proptypeid',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'properties' => array(
					'mainOwnerIDField' => 'agentid',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'properties_owner' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'username' 
				),
				'qualifications' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'race' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'rental_main' => array(
					'mainOwnerIDField' => 'agent_cea',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'rental_main_detail_occupier' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'rental_main_details' => array(
					'mainOwnerIDField' => 'agent_email',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'rental_main_journal' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'username' 
				),
				'rental_main_properties' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'reply_lister' => array(
					'mainOwnerIDField' => '',
					'securityOption' => 0,
					'userOwnerIDField' => '' 
				),
				'represent_type' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'salutation' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'share_type' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'str' => array(
					'mainOwnerIDField' => 'salesperson_name',
					'securityOption' => 1,
					'userOwnerIDField' => 'full_name' 
				),
				'str-admin' => array(
					'mainOwnerIDField' => 'salesperson_nric',
					'securityOption' => 0,
					'userOwnerIDField' => 'nric' 
				),
				'thanku' => array(
					'mainOwnerIDField' => '',
					'securityOption' => 0,
					'userOwnerIDField' => 'email' 
				),
				'transact_party' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'transact_type' => array(
					'mainOwnerIDField' => 'id',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'transaction_party_involved' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'transactions' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 1,
					'userOwnerIDField' => 'username' 
				),
				'transactions Chart' => array(
					'mainOwnerIDField' => '',
					'securityOption' => 0,
					'userOwnerIDField' => '' 
				),
				'transactions pub' => array(
					'mainOwnerIDField' => 'Transacted Type',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'transactions-admin' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'transactions_jtc_lease' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'transactions_lcsc' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'transactions_prop_mng' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'transactions_rental' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				),
				'transactions_rm_rental' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 0,
					'userOwnerIDField' => 'user_id' 
				),
				'transactions_sale' => array(
					'mainOwnerIDField' => 'cea_reg',
					'securityOption' => 0,
					'userOwnerIDField' => 'active' 
				) 
			) 
		),
		'auditAndLocking' => array(
			'loggingMode' => 1,
			'loggingTable' => array(
				'connId' => 'Tables',
				'table' => 'jwr_saas_v11_audit' 
			),
			'loggingFile' => 'audit.log',
			'logSecurityActions' => false,
			'lockAfterUnsuccessfulLogin' => true,
			'enableLocking' => true,
			'lockingTable' => array(
				'connId' => 'Tables',
				'table' => 'jwr_saas_v11_locking' 
			),
			'tables' => array(
				'ads_record' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'pii_indvd' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'transact_type' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'digital_form' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cpd_activities' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'transactions_chart' => array(
					 
				),
				'form4' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'ownership_type' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'form_type' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'lease_tenure1' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'form8' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'prop_cust' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'doc_upload_lcsc' => array(
					 
				),
				'awards' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'lor4_lease_due' => array(
					 
				),
				'prop_kind' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'transactions_rm_rental' => array(
					'logFieldValues' => true,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'rental_main' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'share_type' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cpd_types' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'contacts' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cpd_providers' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'transactions_rental' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cpd_trainings_details' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'transactions-admin' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'parties_involved' => array(
					'logFieldValues' => true,
					'logModifications' => true,
					'recordLocking' => false 
				),
				'cobroke_external_comm' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'pii_agency' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cobroke_internal_comm' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'gst_incl' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'transactions_lcsc' => array(
					'logFieldValues' => true,
					'logModifications' => true,
					'recordLocking' => false 
				),
				'eat_user_subscriptions' => array(
					 
				),
				'transactions_jtc_lease' => array(
					'logFieldValues' => true,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'parties_involved_count' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'parties_involved_buyer' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'parties_involved_tenant' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'salutation' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'country' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'properties_owner' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'str' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'rental_main_details' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'form5' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'form1' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'awards-search' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'eat_users_user' => array(
					 
				),
				'qualifications' => array(
					 
				),
				'my_comm' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'districts' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'transactions_sale' => array(
					'logFieldValues' => true,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'hdb_scheme' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'agent_nametag_user' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'default_pg' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'parties_involved_lcsc' => array(
					'logFieldValues' => true,
					'logModifications' => true,
					'recordLocking' => false 
				),
				'agency' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'represent_type' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'transactions_prop_mng' => array(
					'logFieldValues' => true,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'lor4_lease_due1' => array(
					 
				),
				'invcustomers1' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'form_all' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'lease_due_pub' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cobroke_internal' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'lease_tenure2' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cdd_measures' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'payment_term' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cdd_checklist' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'conflect_descriptions' => array(
					 
				),
				'lease_due' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'properties' => array(
					'logFieldValues' => true,
					'logModifications' => true,
					'recordLocking' => false 
				),
				'str-admin' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'nationality' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'form3' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'form7' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'percentage' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'party_type' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'agents' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'doc_upload' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'insurers_user' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'insurers' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'pii_category' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'default_pg_default' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'prop_type' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cdd_checklist-admin' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'ownership_kind' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'pii_indvd_agency' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cpd_trainings_user' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'dollars' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'external_party_comm' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cpd_trainings' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'invcustomers' => array(
					'logFieldValues' => true,
					'logModifications' => true,
					'recordLocking' => false 
				),
				'parties_involved_landlord' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'hdb_towns' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'external_party' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'my_comm_admin' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'pii_agency_user' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'agent_nametag' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'rental_main_detail_occupier' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'ownership_typeid' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'rental_main_journal' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cobroke_external' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cpd_records' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'race' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'loginattempts' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'eat_users' => array(
					 
				),
				'cpd_period' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'reply_lister' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cdd_measures-admin' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'gst' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cpd_hours' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'fsbo' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'parties_involved_seller' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'rental_main_properties' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'cdd_checklist1' => array(
					 
				),
				'cpd_trainers' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'transactions' => array(
					'logFieldValues' => true,
					'logModifications' => true,
					'recordLocking' => false 
				),
				'transact_party' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'interpretation' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'thanku' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'lease_tenure3' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'transaction_party_involved' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'form6' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'form2' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'forms' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				),
				'transactions_chart_pub' => array(
					 
				),
				'' => array(
					'logFieldValues' => false,
					'logModifications' => false,
					'recordLocking' => false 
				) 
			) 
		),
		'twoFactorSettings' => array(
			'available' => false,
			'required' => false,
			'enable' => true,
			'remember' => true,
			'types' => array(
				 
			),
			'twoFactorField' => '',
			'emailField' => '',
			'phoneField' => '',
			'codeField' => '',
			'projectName' => '' 
		),
		'staticPermissions' => array(
			'groups' => array(
				'<Default>' => array(
					'permissions' => array(
						'<global>' => array(
							'mask' => 'S',
							'table' => '<global>',
							'restrictedPages' => array(
								'menu' => false,
								'menu_DocManager' => false,
								'menu_Invoice' => false 
							) 
						),
						'ads_record' => array(
							'mask' => '',
							'table' => 'ads_record',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'agency' => array(
							'mask' => '',
							'table' => 'agency',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'agent_nametag' => array(
							'mask' => '',
							'table' => 'agent_nametag',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'agent_nametag_user' => array(
							'mask' => '',
							'table' => 'agent_nametag_user',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'agents' => array(
							'mask' => '',
							'table' => 'agents',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'awards' => array(
							'mask' => '',
							'table' => 'awards',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'awards-search' => array(
							'mask' => '',
							'table' => 'awards-search',
							'restrictedPages' => array(
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_checklist' => array(
							'mask' => '',
							'table' => 'cdd_checklist',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'cdd_checklist-admin' => array(
							'mask' => '',
							'table' => 'cdd_checklist-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_checklist1' => array(
							'mask' => '',
							'table' => 'cdd_checklist1',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_measures' => array(
							'mask' => '',
							'table' => 'cdd_measures',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'cdd_measures-admin' => array(
							'mask' => '',
							'table' => 'cdd_measures-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cobroke_external' => array(
							'mask' => '',
							'table' => 'cobroke_external',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'cobroke_external_comm' => array(
							'mask' => '',
							'table' => 'cobroke_external_comm',
							'restrictedPages' => array(
								'add' => true,
								'cobroke_ext_comm' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cobroke_internal' => array(
							'mask' => '',
							'table' => 'cobroke_internal',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'cobroke_internal_comm' => array(
							'mask' => '',
							'table' => 'cobroke_internal_comm',
							'restrictedPages' => array(
								'add' => true,
								'cobroke_int_comm' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'conflect_descriptions' => array(
							'mask' => 'EPIS',
							'table' => 'conflect_descriptions',
							'restrictedPages' => array(
								'add' => true,
								'list' => false,
								'view' => false,
								'search' => false 
							) 
						),
						'contacts' => array(
							'mask' => '',
							'table' => 'contacts',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'country' => array(
							'mask' => '',
							'table' => 'country',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'cpd_activities' => array(
							'mask' => '',
							'table' => 'cpd_activities',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'cpd_hours' => array(
							'mask' => '',
							'table' => 'cpd_hours',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'cpd_period' => array(
							'mask' => '',
							'table' => 'cpd_period',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'cpd_providers' => array(
							'mask' => '',
							'table' => 'cpd_providers',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'cpd_records' => array(
							'mask' => '',
							'table' => 'cpd_records',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'list1' => true,
								'search' => true,
								'view' => true,
								'view1' => true 
							) 
						),
						'cpd_trainers' => array(
							'mask' => '',
							'table' => 'cpd_trainers',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'cpd_trainings' => array(
							'mask' => '',
							'table' => 'cpd_trainings',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'cpd_trainings_details' => array(
							'mask' => '',
							'table' => 'cpd_trainings_details',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cpd_trainings_user' => array(
							'mask' => '',
							'table' => 'cpd_trainings_user',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'cpd_types' => array(
							'mask' => '',
							'table' => 'cpd_types',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'default_pg' => array(
							'mask' => '',
							'table' => 'default_pg',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true 
							) 
						),
						'default_pg_default' => array(
							'mask' => '',
							'table' => 'default_pg_default',
							'restrictedPages' => array(
								'list' => true,
								'view' => true 
							) 
						),
						'digital_form' => array(
							'mask' => '',
							'table' => 'digital_form',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'districts' => array(
							'mask' => '',
							'table' => 'districts',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'doc_upload' => array(
							'mask' => '',
							'table' => 'doc_upload',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'print1' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'doc_upload_lcsc' => array(
							'mask' => '',
							'table' => 'doc_upload_lcsc',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'print1' => true,
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'dollars' => array(
							'mask' => '',
							'table' => 'dollars',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'eat_user_subscriptions' => array(
							'mask' => 'ADEPIS',
							'table' => 'eat_user_subscriptions',
							'restrictedPages' => array(
								'list' => false,
								'search' => false 
							) 
						),
						'eat_users' => array(
							'mask' => '',
							'table' => 'eat_users',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'eat_users_user' => array(
							'mask' => '',
							'table' => 'eat_users_user',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'external_party' => array(
							'mask' => '',
							'table' => 'external_party',
							'restrictedPages' => array(
								'ext_pty_comm' => true,
								'ext_pty_comm1' => true,
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'external_party_comm' => array(
							'mask' => '',
							'table' => 'external_party_comm',
							'restrictedPages' => array(
								'add' => true,
								'ext_pty_comm' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'form1' => array(
							'mask' => '',
							'table' => 'form1',
							'restrictedPages' => array(
								'list' => true,
								'view_print' => true,
								'view_signed' => true,
								'search' => true 
							) 
						),
						'form2' => array(
							'mask' => '',
							'table' => 'form2',
							'restrictedPages' => array(
								'list' => true,
								'view_print' => true,
								'view_signed' => true,
								'search' => true 
							) 
						),
						'form3' => array(
							'mask' => '',
							'table' => 'form3',
							'restrictedPages' => array(
								'list' => true,
								'view_print' => true,
								'view_signed' => true,
								'search' => true 
							) 
						),
						'form4' => array(
							'mask' => '',
							'table' => 'form4',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'view_print' => true,
								'view_signed' => true 
							) 
						),
						'form5' => array(
							'mask' => '',
							'table' => 'form5',
							'restrictedPages' => array(
								'list' => true,
								'view_print' => true,
								'view_signed' => true,
								'search' => true 
							) 
						),
						'form6' => array(
							'mask' => '',
							'table' => 'form6',
							'restrictedPages' => array(
								'list' => true,
								'view_print' => true,
								'view_signed' => true,
								'search' => true 
							) 
						),
						'form7' => array(
							'mask' => '',
							'table' => 'form7',
							'restrictedPages' => array(
								'list' => true,
								'view_print' => true,
								'view_signed' => true,
								'search' => true 
							) 
						),
						'form8' => array(
							'mask' => '',
							'table' => 'form8',
							'restrictedPages' => array(
								'list' => true,
								'view_print' => true,
								'view_signed' => true,
								'search' => true 
							) 
						),
						'form_all' => array(
							'mask' => '',
							'table' => 'form_all',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'form_type' => array(
							'mask' => '',
							'table' => 'form_type',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'forms' => array(
							'mask' => '',
							'table' => 'forms',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'fsbo' => array(
							'mask' => '',
							'table' => 'fsbo',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'gst' => array(
							'mask' => '',
							'table' => 'gst',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'gst_incl' => array(
							'mask' => '',
							'table' => 'gst_incl',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'hdb_scheme' => array(
							'mask' => '',
							'table' => 'hdb_scheme',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'hdb_towns' => array(
							'mask' => '',
							'table' => 'hdb_towns',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'insurers' => array(
							'mask' => '',
							'table' => 'insurers',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'insurers_user' => array(
							'mask' => '',
							'table' => 'insurers_user',
							'restrictedPages' => array(
								'add' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'interpretation' => array(
							'mask' => '',
							'table' => 'interpretation',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'invcustomers' => array(
							'mask' => '',
							'table' => 'invcustomers',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'list1' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'invcustomers1' => array(
							'mask' => '',
							'table' => 'invcustomers1',
							'restrictedPages' => array(
								'edit' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'lease_due' => array(
							'mask' => '',
							'table' => 'lease_due',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'lease_due_pub' => array(
							'mask' => '',
							'table' => 'lease_due_pub',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'lease_tenure1' => array(
							'mask' => '',
							'table' => 'lease_tenure1',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'lease_tenure2' => array(
							'mask' => '',
							'table' => 'lease_tenure2',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'lease_tenure3' => array(
							'mask' => '',
							'table' => 'lease_tenure3',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'loginattempts' => array(
							'mask' => '',
							'table' => 'loginattempts',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'lor4_lease_due' => array(
							'mask' => '',
							'table' => 'lor4_lease_due',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'lor4_lease_due1' => array(
							'mask' => '',
							'table' => 'lor4_lease_due1',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'my_comm' => array(
							'mask' => '',
							'table' => 'my_comm',
							'restrictedPages' => array(
								'export' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'my_comm_admin' => array(
							'mask' => '',
							'table' => 'my_comm_admin',
							'restrictedPages' => array(
								'export' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'nationality' => array(
							'mask' => '',
							'table' => 'nationality',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'ownership_kind' => array(
							'mask' => '',
							'table' => 'ownership_kind',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'ownership_type' => array(
							'mask' => '',
							'table' => 'ownership_type',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'ownership_typeid' => array(
							'mask' => '',
							'table' => 'ownership_typeid',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'parties_involved' => array(
							'mask' => '',
							'table' => 'parties_involved',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'parties_involved_buyer' => array(
							'mask' => '',
							'table' => 'parties_involved_buyer',
							'restrictedPages' => array(
								'search' => true,
								'list' => true,
								'view' => true 
							) 
						),
						'parties_involved_count' => array(
							'mask' => '',
							'table' => 'parties_involved_count',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'parties_involved_landlord' => array(
							'mask' => '',
							'table' => 'parties_involved_landlord',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'parties_involved_lcsc' => array(
							'mask' => '',
							'table' => 'parties_involved_lcsc',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'parties_involved_seller' => array(
							'mask' => '',
							'table' => 'parties_involved_seller',
							'restrictedPages' => array(
								'search' => true,
								'list' => true,
								'view' => true 
							) 
						),
						'parties_involved_tenant' => array(
							'mask' => '',
							'table' => 'parties_involved_tenant',
							'restrictedPages' => array(
								'search' => true,
								'list' => true,
								'view' => true 
							) 
						),
						'party_type' => array(
							'mask' => '',
							'table' => 'party_type',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'payment_term' => array(
							'mask' => '',
							'table' => 'payment_term',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'percentage' => array(
							'mask' => '',
							'table' => 'percentage',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'pii_agency' => array(
							'mask' => '',
							'table' => 'pii_agency',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'pii_agency_user' => array(
							'mask' => '',
							'table' => 'pii_agency_user',
							'restrictedPages' => array(
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'pii_category' => array(
							'mask' => '',
							'table' => 'pii_category',
							'restrictedPages' => array(
								'add' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'pii_indvd' => array(
							'mask' => '',
							'table' => 'pii_indvd',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'pii_indvd_agency' => array(
							'mask' => '',
							'table' => 'pii_indvd_agency',
							'restrictedPages' => array(
								'edit' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'prop_cust' => array(
							'mask' => '',
							'table' => 'prop_cust',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'prop_kind' => array(
							'mask' => '',
							'table' => 'prop_kind',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'prop_type' => array(
							'mask' => '',
							'table' => 'prop_type',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'properties' => array(
							'mask' => '',
							'table' => 'properties',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'properties_owner' => array(
							'mask' => '',
							'table' => 'properties_owner',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'qualifications' => array(
							'mask' => '',
							'table' => 'qualifications',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'race' => array(
							'mask' => '',
							'table' => 'race',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'rental_main' => array(
							'mask' => '',
							'table' => 'rental_main',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'rental_main_detail_occupier' => array(
							'mask' => '',
							'table' => 'rental_main_detail_occupier',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'rental_main_details' => array(
							'mask' => '',
							'table' => 'rental_main_details',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'rental_main_journal' => array(
							'mask' => '',
							'table' => 'rental_main_journal',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'rental_main_properties' => array(
							'mask' => '',
							'table' => 'rental_main_properties',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'reply_lister' => array(
							'mask' => '',
							'table' => 'reply_lister',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'represent_type' => array(
							'mask' => '',
							'table' => 'represent_type',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'salutation' => array(
							'mask' => '',
							'table' => 'salutation',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'share_type' => array(
							'mask' => '',
							'table' => 'share_type',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'str' => array(
							'mask' => '',
							'table' => 'str',
							'restrictedPages' => array(
								'list' => true,
								'view' => true,
								'search' => true 
							) 
						),
						'str-admin' => array(
							'mask' => '',
							'table' => 'str-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'thanku' => array(
							'mask' => '',
							'table' => 'thanku',
							'restrictedPages' => array(
								'search' => true 
							) 
						),
						'transact_party' => array(
							'mask' => '',
							'table' => 'transact_party',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'transact_type' => array(
							'mask' => '',
							'table' => 'transact_type',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'transaction_party_involved' => array(
							'mask' => '',
							'table' => 'transaction_party_involved',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'transactions' => array(
							'mask' => '',
							'table' => 'transactions',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'transactions-admin' => array(
							'mask' => '',
							'table' => 'transactions-admin',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true,
								'view1' => true 
							) 
						),
						'transactions_jtc_lease' => array(
							'mask' => 'S',
							'table' => 'transactions_jtc_lease',
							'restrictedPages' => array(
								'list' => false,
								'search' => false,
								'view' => false 
							) 
						),
						'transactions_lcsc' => array(
							'mask' => 'PS',
							'table' => 'transactions_lcsc',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'search' => false 
							) 
						),
						'transactions_prop_mng' => array(
							'mask' => 'S',
							'table' => 'transactions_prop_mng',
							'restrictedPages' => array(
								'list' => false,
								'search' => false,
								'view' => false 
							) 
						),
						'transactions_rental' => array(
							'mask' => 'S',
							'table' => 'transactions_rental',
							'restrictedPages' => array(
								'list' => false,
								'search' => false,
								'view' => false 
							) 
						),
						'transactions_rm_rental' => array(
							'mask' => 'S',
							'table' => 'transactions_rm_rental',
							'restrictedPages' => array(
								'list' => false,
								'search' => false,
								'view' => false 
							) 
						),
						'transactions_sale' => array(
							'mask' => 'S',
							'table' => 'transactions_sale',
							'restrictedPages' => array(
								'list' => false,
								'search' => false,
								'view' => false 
							) 
						),
						'transactions_chart' => array(
							'mask' => 'S',
							'table' => 'transactions_chart',
							'restrictedPages' => array(
								'chart' => false,
								'chart1' => false,
								'search' => false 
							) 
						),
						'transactions_chart_pub' => array(
							'mask' => 'S',
							'table' => 'transactions_chart_pub',
							'restrictedPages' => array(
								'chart' => false,
								'chart1' => false,
								'search' => false 
							) 
						),
						'my_profile' => array(
							'mask' => '',
							'table' => 'my_profile',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true,
								'print' => true,
								'export' => true,
								'import' => true 
							) 
						) 
					),
					'username' => '<Default>',
					'admin' => false,
					'wrAdmin' => false 
				),
				'account admin' => array(
					'permissions' => array(
						'<global>' => array(
							'mask' => 'S',
							'table' => '<global>',
							'restrictedPages' => array(
								 
							) 
						),
						'ads_record' => array(
							'mask' => '',
							'table' => 'ads_record',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'agency' => array(
							'mask' => 'ES',
							'table' => 'agency',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'agent_nametag' => array(
							'mask' => 'AEDSPI',
							'table' => 'agent_nametag',
							'restrictedPages' => array(
								 
							) 
						),
						'agent_nametag_user' => array(
							'mask' => '',
							'table' => 'agent_nametag_user',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'agents' => array(
							'mask' => 'AEDSPI',
							'table' => 'agents',
							'restrictedPages' => array(
								 
							) 
						),
						'awards' => array(
							'mask' => 'AEDSPI',
							'table' => 'awards',
							'restrictedPages' => array(
								 
							) 
						),
						'awards-search' => array(
							'mask' => 'AEDSPI',
							'table' => 'awards-search',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_checklist' => array(
							'mask' => 'AEDSPI',
							'table' => 'cdd_checklist',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_checklist-admin' => array(
							'mask' => '',
							'table' => 'cdd_checklist-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_checklist1' => array(
							'mask' => '',
							'table' => 'cdd_checklist1',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_measures' => array(
							'mask' => 'AEDSPI',
							'table' => 'cdd_measures',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_measures-admin' => array(
							'mask' => '',
							'table' => 'cdd_measures-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cobroke_external' => array(
							'mask' => 'EDSPI',
							'table' => 'cobroke_external',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_external_comm' => array(
							'mask' => 'AEDSPI',
							'table' => 'cobroke_external_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_internal' => array(
							'mask' => 'EDSPI',
							'table' => 'cobroke_internal',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_internal_comm' => array(
							'mask' => 'AEDSPI',
							'table' => 'cobroke_internal_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'conflect_descriptions' => array(
							'mask' => 'ADESPI',
							'table' => 'conflect_descriptions',
							'restrictedPages' => array(
								 
							) 
						),
						'contacts' => array(
							'mask' => '',
							'table' => 'contacts',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'country' => array(
							'mask' => 'AEDSPI',
							'table' => 'country',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_activities' => array(
							'mask' => 'AEDSPI',
							'table' => 'cpd_activities',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_hours' => array(
							'mask' => 'AEDSPI',
							'table' => 'cpd_hours',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_period' => array(
							'mask' => 'AEDSPI',
							'table' => 'cpd_period',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_providers' => array(
							'mask' => 'AEDSPI',
							'table' => 'cpd_providers',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_records' => array(
							'mask' => 'AEDSPI',
							'table' => 'cpd_records',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainers' => array(
							'mask' => 'AEDSPI',
							'table' => 'cpd_trainers',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainings' => array(
							'mask' => 'AEDSPI',
							'table' => 'cpd_trainings',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainings_details' => array(
							'mask' => 'AEDSPI',
							'table' => 'cpd_trainings_details',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainings_user' => array(
							'mask' => '',
							'table' => 'cpd_trainings_user',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cpd_types' => array(
							'mask' => 'AEDSPI',
							'table' => 'cpd_types',
							'restrictedPages' => array(
								 
							) 
						),
						'default_pg' => array(
							'mask' => '',
							'table' => 'default_pg',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true 
							) 
						),
						'default_pg_default' => array(
							'mask' => '',
							'table' => 'default_pg_default',
							'restrictedPages' => array(
								'list' => true,
								'view' => true 
							) 
						),
						'digital_form' => array(
							'mask' => 'AEDSPI',
							'table' => 'digital_form',
							'restrictedPages' => array(
								 
							) 
						),
						'districts' => array(
							'mask' => 'AEDSPI',
							'table' => 'districts',
							'restrictedPages' => array(
								 
							) 
						),
						'doc_upload' => array(
							'mask' => 'AEDSPI',
							'table' => 'doc_upload',
							'restrictedPages' => array(
								 
							) 
						),
						'doc_upload_lcsc' => array(
							'mask' => 'SPI',
							'table' => 'doc_upload_lcsc',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true 
							) 
						),
						'dollars' => array(
							'mask' => '',
							'table' => 'dollars',
							'restrictedPages' => array(
								'add' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'eat_user_subscriptions' => array(
							'mask' => 'SAEDPI',
							'table' => 'eat_user_subscriptions',
							'restrictedPages' => array(
								'search' => true 
							) 
						),
						'eat_users' => array(
							'mask' => '',
							'table' => 'eat_users',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'eat_users_user' => array(
							'mask' => 'ESPD',
							'table' => 'eat_users_user',
							'restrictedPages' => array(
								'export' => true,
								'import' => true 
							) 
						),
						'external_party' => array(
							'mask' => 'DSPIE',
							'table' => 'external_party',
							'restrictedPages' => array(
								 
							) 
						),
						'external_party_comm' => array(
							'mask' => 'AEDSPI',
							'table' => 'external_party_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'form1' => array(
							'mask' => 'AEDSPI',
							'table' => 'form1',
							'restrictedPages' => array(
								 
							) 
						),
						'form2' => array(
							'mask' => 'AEDSPI',
							'table' => 'form2',
							'restrictedPages' => array(
								 
							) 
						),
						'form3' => array(
							'mask' => 'AEDSPI',
							'table' => 'form3',
							'restrictedPages' => array(
								 
							) 
						),
						'form4' => array(
							'mask' => 'AEDSPI',
							'table' => 'form4',
							'restrictedPages' => array(
								 
							) 
						),
						'form5' => array(
							'mask' => 'AEDSPI',
							'table' => 'form5',
							'restrictedPages' => array(
								 
							) 
						),
						'form6' => array(
							'mask' => 'AEDSPI',
							'table' => 'form6',
							'restrictedPages' => array(
								 
							) 
						),
						'form7' => array(
							'mask' => 'AEDSPI',
							'table' => 'form7',
							'restrictedPages' => array(
								 
							) 
						),
						'form8' => array(
							'mask' => 'AEDSPI',
							'table' => 'form8',
							'restrictedPages' => array(
								 
							) 
						),
						'form_all' => array(
							'mask' => '',
							'table' => 'form_all',
							'restrictedPages' => array(
								'edit' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'form_type' => array(
							'mask' => 'AEDSPI',
							'table' => 'form_type',
							'restrictedPages' => array(
								 
							) 
						),
						'forms' => array(
							'mask' => '',
							'table' => 'forms',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'fsbo' => array(
							'mask' => '',
							'table' => 'fsbo',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'gst' => array(
							'mask' => 'AEDSPI',
							'table' => 'gst',
							'restrictedPages' => array(
								 
							) 
						),
						'gst_incl' => array(
							'mask' => 'AEDSPI',
							'table' => 'gst_incl',
							'restrictedPages' => array(
								 
							) 
						),
						'hdb_scheme' => array(
							'mask' => 'AEDSPI',
							'table' => 'hdb_scheme',
							'restrictedPages' => array(
								 
							) 
						),
						'hdb_towns' => array(
							'mask' => 'AEDSPI',
							'table' => 'hdb_towns',
							'restrictedPages' => array(
								 
							) 
						),
						'insurers' => array(
							'mask' => 'AEDSPI',
							'table' => 'insurers',
							'restrictedPages' => array(
								 
							) 
						),
						'insurers_user' => array(
							'mask' => '',
							'table' => 'insurers_user',
							'restrictedPages' => array(
								'add' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'interpretation' => array(
							'mask' => 'AEDSPI',
							'table' => 'interpretation',
							'restrictedPages' => array(
								 
							) 
						),
						'invcustomers' => array(
							'mask' => 'AEDSPI',
							'table' => 'invcustomers',
							'restrictedPages' => array(
								 
							) 
						),
						'invcustomers1' => array(
							'mask' => '',
							'table' => 'invcustomers1',
							'restrictedPages' => array(
								'edit' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'lease_due' => array(
							'mask' => 'SP',
							'table' => 'lease_due',
							'restrictedPages' => array(
								'import' => true 
							) 
						),
						'lease_due_pub' => array(
							'mask' => 'S',
							'table' => 'lease_due_pub',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure1' => array(
							'mask' => 'AEDSPI',
							'table' => 'lease_tenure1',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure2' => array(
							'mask' => 'AEDSPI',
							'table' => 'lease_tenure2',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure3' => array(
							'mask' => 'AEDSPI',
							'table' => 'lease_tenure3',
							'restrictedPages' => array(
								 
							) 
						),
						'loginattempts' => array(
							'mask' => '',
							'table' => 'loginattempts',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'lor4_lease_due' => array(
							'mask' => 'SP',
							'table' => 'lor4_lease_due',
							'restrictedPages' => array(
								 
							) 
						),
						'lor4_lease_due1' => array(
							'mask' => 'SP',
							'table' => 'lor4_lease_due1',
							'restrictedPages' => array(
								 
							) 
						),
						'my_comm' => array(
							'mask' => 'AEDSPI',
							'table' => 'my_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'my_comm_admin' => array(
							'mask' => '',
							'table' => 'my_comm_admin',
							'restrictedPages' => array(
								'export' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'nationality' => array(
							'mask' => 'AEDSPI',
							'table' => 'nationality',
							'restrictedPages' => array(
								 
							) 
						),
						'ownership_kind' => array(
							'mask' => 'AEDSPI',
							'table' => 'ownership_kind',
							'restrictedPages' => array(
								 
							) 
						),
						'ownership_type' => array(
							'mask' => 'AEDSPI',
							'table' => 'ownership_type',
							'restrictedPages' => array(
								 
							) 
						),
						'ownership_typeid' => array(
							'mask' => 'AEDSPI',
							'table' => 'ownership_typeid',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved' => array(
							'mask' => 'AEDSPI',
							'table' => 'parties_involved',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_buyer' => array(
							'mask' => 'S',
							'table' => 'parties_involved_buyer',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_count' => array(
							'mask' => 'S',
							'table' => 'parties_involved_count',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true 
							) 
						),
						'parties_involved_landlord' => array(
							'mask' => 'S',
							'table' => 'parties_involved_landlord',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_lcsc' => array(
							'mask' => 'S',
							'table' => 'parties_involved_lcsc',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_seller' => array(
							'mask' => 'S',
							'table' => 'parties_involved_seller',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_tenant' => array(
							'mask' => 'S',
							'table' => 'parties_involved_tenant',
							'restrictedPages' => array(
								 
							) 
						),
						'party_type' => array(
							'mask' => 'AEDSPI',
							'table' => 'party_type',
							'restrictedPages' => array(
								 
							) 
						),
						'payment_term' => array(
							'mask' => 'AEDSPI',
							'table' => 'payment_term',
							'restrictedPages' => array(
								 
							) 
						),
						'percentage' => array(
							'mask' => 'AEDSPI',
							'table' => 'percentage',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_agency' => array(
							'mask' => 'AEDSPI',
							'table' => 'pii_agency',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_agency_user' => array(
							'mask' => '',
							'table' => 'pii_agency_user',
							'restrictedPages' => array(
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'pii_category' => array(
							'mask' => 'AEDSPI',
							'table' => 'pii_category',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_indvd' => array(
							'mask' => 'AEDSPI',
							'table' => 'pii_indvd',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_indvd_agency' => array(
							'mask' => 'AEDSPI',
							'table' => 'pii_indvd_agency',
							'restrictedPages' => array(
								 
							) 
						),
						'prop_cust' => array(
							'mask' => 'AEDSPI',
							'table' => 'prop_cust',
							'restrictedPages' => array(
								 
							) 
						),
						'prop_kind' => array(
							'mask' => 'AEDSPI',
							'table' => 'prop_kind',
							'restrictedPages' => array(
								 
							) 
						),
						'prop_type' => array(
							'mask' => 'AEDSPI',
							'table' => 'prop_type',
							'restrictedPages' => array(
								 
							) 
						),
						'properties' => array(
							'mask' => 'AEDSPI',
							'table' => 'properties',
							'restrictedPages' => array(
								 
							) 
						),
						'properties_owner' => array(
							'mask' => 'AEDSPI',
							'table' => 'properties_owner',
							'restrictedPages' => array(
								 
							) 
						),
						'qualifications' => array(
							'mask' => 'AEDSPI',
							'table' => 'qualifications',
							'restrictedPages' => array(
								 
							) 
						),
						'race' => array(
							'mask' => 'AEDSPI',
							'table' => 'race',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main' => array(
							'mask' => 'AEDSPI',
							'table' => 'rental_main',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_detail_occupier' => array(
							'mask' => 'AEDSPI',
							'table' => 'rental_main_detail_occupier',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_details' => array(
							'mask' => 'AEDSPI',
							'table' => 'rental_main_details',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_journal' => array(
							'mask' => 'AEDSPI',
							'table' => 'rental_main_journal',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_properties' => array(
							'mask' => 'AEDSPI',
							'table' => 'rental_main_properties',
							'restrictedPages' => array(
								 
							) 
						),
						'reply_lister' => array(
							'mask' => '',
							'table' => 'reply_lister',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'represent_type' => array(
							'mask' => 'AEDSPI',
							'table' => 'represent_type',
							'restrictedPages' => array(
								 
							) 
						),
						'salutation' => array(
							'mask' => 'AEDSPI',
							'table' => 'salutation',
							'restrictedPages' => array(
								 
							) 
						),
						'share_type' => array(
							'mask' => '',
							'table' => 'share_type',
							'restrictedPages' => array(
								'search' => true 
							) 
						),
						'str' => array(
							'mask' => 'AEDSPI',
							'table' => 'str',
							'restrictedPages' => array(
								 
							) 
						),
						'str-admin' => array(
							'mask' => '',
							'table' => 'str-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'thanku' => array(
							'mask' => '',
							'table' => 'thanku',
							'restrictedPages' => array(
								'add' => true,
								'search' => true 
							) 
						),
						'transact_party' => array(
							'mask' => 'AEDSPI',
							'table' => 'transact_party',
							'restrictedPages' => array(
								 
							) 
						),
						'transact_type' => array(
							'mask' => 'AEDSPI',
							'table' => 'transact_type',
							'restrictedPages' => array(
								 
							) 
						),
						'transaction_party_involved' => array(
							'mask' => 'AEDSPI',
							'table' => 'transaction_party_involved',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions' => array(
							'mask' => 'AEDSPI',
							'table' => 'transactions',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions-admin' => array(
							'mask' => 'EDSPI',
							'table' => 'transactions-admin',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_jtc_lease' => array(
							'mask' => 'SPI',
							'table' => 'transactions_jtc_lease',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_lcsc' => array(
							'mask' => 'SIP',
							'table' => 'transactions_lcsc',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_prop_mng' => array(
							'mask' => 'AEDSPI',
							'table' => 'transactions_prop_mng',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_rental' => array(
							'mask' => 'AEDSPI',
							'table' => 'transactions_rental',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_rm_rental' => array(
							'mask' => 'AEDSPI',
							'table' => 'transactions_rm_rental',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_sale' => array(
							'mask' => 'AEDSPI',
							'table' => 'transactions_sale',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_chart' => array(
							'mask' => 'AEDSPI',
							'table' => 'transactions_chart',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_chart_pub' => array(
							'mask' => 'SPI',
							'table' => 'transactions_chart_pub',
							'restrictedPages' => array(
								 
							) 
						) 
					),
					'username' => 'account admin',
					'admin' => true,
					'wrAdmin' => false 
				),
				'admin' => array(
					'permissions' => array(
						'<global>' => array(
							'mask' => 'S',
							'table' => '<global>',
							'restrictedPages' => array(
								 
							) 
						),
						'ads_record' => array(
							'mask' => '',
							'table' => 'ads_record',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'agency' => array(
							'mask' => 'ADESPI',
							'table' => 'agency',
							'restrictedPages' => array(
								 
							) 
						),
						'agent_nametag' => array(
							'mask' => 'ADESPI',
							'table' => 'agent_nametag',
							'restrictedPages' => array(
								 
							) 
						),
						'agent_nametag_user' => array(
							'mask' => '',
							'table' => 'agent_nametag_user',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'agents' => array(
							'mask' => 'ADESPI',
							'table' => 'agents',
							'restrictedPages' => array(
								 
							) 
						),
						'awards' => array(
							'mask' => 'ADESPI',
							'table' => 'awards',
							'restrictedPages' => array(
								 
							) 
						),
						'awards-search' => array(
							'mask' => '',
							'table' => 'awards-search',
							'restrictedPages' => array(
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_checklist' => array(
							'mask' => 'ADESPI',
							'table' => 'cdd_checklist',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_checklist-admin' => array(
							'mask' => 'ADESPI',
							'table' => 'cdd_checklist-admin',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_checklist1' => array(
							'mask' => 'ADESPI',
							'table' => 'cdd_checklist1',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_measures' => array(
							'mask' => 'ADESPI',
							'table' => 'cdd_measures',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_measures-admin' => array(
							'mask' => 'ADESPI',
							'table' => 'cdd_measures-admin',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_external' => array(
							'mask' => 'ADESPI',
							'table' => 'cobroke_external',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_external_comm' => array(
							'mask' => 'ADESPI',
							'table' => 'cobroke_external_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_internal' => array(
							'mask' => 'ADESPI',
							'table' => 'cobroke_internal',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_internal_comm' => array(
							'mask' => 'ADESPI',
							'table' => 'cobroke_internal_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'conflect_descriptions' => array(
							'mask' => 'ADESPI',
							'table' => 'conflect_descriptions',
							'restrictedPages' => array(
								 
							) 
						),
						'contacts' => array(
							'mask' => '',
							'table' => 'contacts',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'country' => array(
							'mask' => '',
							'table' => 'country',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'cpd_activities' => array(
							'mask' => 'ADESPI',
							'table' => 'cpd_activities',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_hours' => array(
							'mask' => 'ADESPI',
							'table' => 'cpd_hours',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_period' => array(
							'mask' => 'ADESPI',
							'table' => 'cpd_period',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_providers' => array(
							'mask' => 'ADESPI',
							'table' => 'cpd_providers',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_records' => array(
							'mask' => 'ADESPI',
							'table' => 'cpd_records',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainers' => array(
							'mask' => 'ADESPI',
							'table' => 'cpd_trainers',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainings' => array(
							'mask' => 'ADESPI',
							'table' => 'cpd_trainings',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainings_details' => array(
							'mask' => 'ADESPI',
							'table' => 'cpd_trainings_details',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainings_user' => array(
							'mask' => 'ADESPI',
							'table' => 'cpd_trainings_user',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_types' => array(
							'mask' => 'ADESPI',
							'table' => 'cpd_types',
							'restrictedPages' => array(
								 
							) 
						),
						'default_pg' => array(
							'mask' => '',
							'table' => 'default_pg',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true 
							) 
						),
						'default_pg_default' => array(
							'mask' => '',
							'table' => 'default_pg_default',
							'restrictedPages' => array(
								'list' => true,
								'view' => true 
							) 
						),
						'digital_form' => array(
							'mask' => 'ADESPI',
							'table' => 'digital_form',
							'restrictedPages' => array(
								 
							) 
						),
						'districts' => array(
							'mask' => 'AEDSPI',
							'table' => 'districts',
							'restrictedPages' => array(
								 
							) 
						),
						'doc_upload' => array(
							'mask' => 'ADESPI',
							'table' => 'doc_upload',
							'restrictedPages' => array(
								 
							) 
						),
						'doc_upload_lcsc' => array(
							'mask' => 'ADESPI',
							'table' => 'doc_upload_lcsc',
							'restrictedPages' => array(
								 
							) 
						),
						'dollars' => array(
							'mask' => '',
							'table' => 'dollars',
							'restrictedPages' => array(
								'add' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'eat_user_subscriptions' => array(
							'mask' => 'ADESPI',
							'table' => 'eat_user_subscriptions',
							'restrictedPages' => array(
								 
							) 
						),
						'eat_users' => array(
							'mask' => 'ESDPI',
							'table' => 'eat_users',
							'restrictedPages' => array(
								'add' => true 
							) 
						),
						'eat_users_user' => array(
							'mask' => '',
							'table' => 'eat_users_user',
							'restrictedPages' => array(
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'external_party' => array(
							'mask' => 'ADESPI',
							'table' => 'external_party',
							'restrictedPages' => array(
								 
							) 
						),
						'external_party_comm' => array(
							'mask' => 'ADESPI',
							'table' => 'external_party_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'form1' => array(
							'mask' => 'ADESPI',
							'table' => 'form1',
							'restrictedPages' => array(
								 
							) 
						),
						'form2' => array(
							'mask' => 'ADESPI',
							'table' => 'form2',
							'restrictedPages' => array(
								 
							) 
						),
						'form3' => array(
							'mask' => 'ADESPI',
							'table' => 'form3',
							'restrictedPages' => array(
								 
							) 
						),
						'form4' => array(
							'mask' => 'ADESPI',
							'table' => 'form4',
							'restrictedPages' => array(
								 
							) 
						),
						'form5' => array(
							'mask' => 'ADESPI',
							'table' => 'form5',
							'restrictedPages' => array(
								 
							) 
						),
						'form6' => array(
							'mask' => 'ADESPI',
							'table' => 'form6',
							'restrictedPages' => array(
								 
							) 
						),
						'form7' => array(
							'mask' => 'ADESPI',
							'table' => 'form7',
							'restrictedPages' => array(
								 
							) 
						),
						'form8' => array(
							'mask' => 'ADESPI',
							'table' => 'form8',
							'restrictedPages' => array(
								 
							) 
						),
						'form_all' => array(
							'mask' => 'ADESPI',
							'table' => 'form_all',
							'restrictedPages' => array(
								 
							) 
						),
						'form_type' => array(
							'mask' => 'ADESPI',
							'table' => 'form_type',
							'restrictedPages' => array(
								 
							) 
						),
						'forms' => array(
							'mask' => 'ADESPI',
							'table' => 'forms',
							'restrictedPages' => array(
								 
							) 
						),
						'fsbo' => array(
							'mask' => '',
							'table' => 'fsbo',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'gst' => array(
							'mask' => 'ADESPI',
							'table' => 'gst',
							'restrictedPages' => array(
								 
							) 
						),
						'gst_incl' => array(
							'mask' => 'ADESPI',
							'table' => 'gst_incl',
							'restrictedPages' => array(
								 
							) 
						),
						'hdb_scheme' => array(
							'mask' => 'ADESPI',
							'table' => 'hdb_scheme',
							'restrictedPages' => array(
								 
							) 
						),
						'hdb_towns' => array(
							'mask' => 'ADESPI',
							'table' => 'hdb_towns',
							'restrictedPages' => array(
								 
							) 
						),
						'insurers' => array(
							'mask' => 'ADESPI',
							'table' => 'insurers',
							'restrictedPages' => array(
								 
							) 
						),
						'insurers_user' => array(
							'mask' => 'ADESPI',
							'table' => 'insurers_user',
							'restrictedPages' => array(
								 
							) 
						),
						'interpretation' => array(
							'mask' => 'ADESPI',
							'table' => 'interpretation',
							'restrictedPages' => array(
								 
							) 
						),
						'invcustomers' => array(
							'mask' => 'ADESPI',
							'table' => 'invcustomers',
							'restrictedPages' => array(
								 
							) 
						),
						'invcustomers1' => array(
							'mask' => 'ADESPI',
							'table' => 'invcustomers1',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_due' => array(
							'mask' => 'ADESPI',
							'table' => 'lease_due',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_due_pub' => array(
							'mask' => 'S',
							'table' => 'lease_due_pub',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure1' => array(
							'mask' => 'ADESPI',
							'table' => 'lease_tenure1',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure2' => array(
							'mask' => 'ADESPI',
							'table' => 'lease_tenure2',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure3' => array(
							'mask' => 'ADESPI',
							'table' => 'lease_tenure3',
							'restrictedPages' => array(
								 
							) 
						),
						'loginattempts' => array(
							'mask' => 'ADESPI',
							'table' => 'loginattempts',
							'restrictedPages' => array(
								 
							) 
						),
						'lor4_lease_due' => array(
							'mask' => 'ADESPI',
							'table' => 'lor4_lease_due',
							'restrictedPages' => array(
								 
							) 
						),
						'lor4_lease_due1' => array(
							'mask' => 'S',
							'table' => 'lor4_lease_due1',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'my_comm' => array(
							'mask' => 'ADESPI',
							'table' => 'my_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'my_comm_admin' => array(
							'mask' => 'ADESPI',
							'table' => 'my_comm_admin',
							'restrictedPages' => array(
								 
							) 
						),
						'nationality' => array(
							'mask' => 'ADESPI',
							'table' => 'nationality',
							'restrictedPages' => array(
								 
							) 
						),
						'ownership_kind' => array(
							'mask' => 'ADESPI',
							'table' => 'ownership_kind',
							'restrictedPages' => array(
								 
							) 
						),
						'ownership_type' => array(
							'mask' => 'ADESPI',
							'table' => 'ownership_type',
							'restrictedPages' => array(
								 
							) 
						),
						'ownership_typeid' => array(
							'mask' => 'ADESPI',
							'table' => 'ownership_typeid',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved' => array(
							'mask' => 'ADESPI',
							'table' => 'parties_involved',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_buyer' => array(
							'mask' => 'ADESPI',
							'table' => 'parties_involved_buyer',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_count' => array(
							'mask' => 'ADESPI',
							'table' => 'parties_involved_count',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_landlord' => array(
							'mask' => 'ADESPI',
							'table' => 'parties_involved_landlord',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_lcsc' => array(
							'mask' => 'AEDSPI',
							'table' => 'parties_involved_lcsc',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_seller' => array(
							'mask' => 'ADESPI',
							'table' => 'parties_involved_seller',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_tenant' => array(
							'mask' => 'ADESPI',
							'table' => 'parties_involved_tenant',
							'restrictedPages' => array(
								 
							) 
						),
						'party_type' => array(
							'mask' => 'ADESPI',
							'table' => 'party_type',
							'restrictedPages' => array(
								 
							) 
						),
						'payment_term' => array(
							'mask' => 'ADESPI',
							'table' => 'payment_term',
							'restrictedPages' => array(
								 
							) 
						),
						'percentage' => array(
							'mask' => 'ADESPI',
							'table' => 'percentage',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_agency' => array(
							'mask' => 'ADESPI',
							'table' => 'pii_agency',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_agency_user' => array(
							'mask' => 'ADESPI',
							'table' => 'pii_agency_user',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_category' => array(
							'mask' => 'ADESPI',
							'table' => 'pii_category',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_indvd' => array(
							'mask' => 'ADESPI',
							'table' => 'pii_indvd',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_indvd_agency' => array(
							'mask' => 'ADESPI',
							'table' => 'pii_indvd_agency',
							'restrictedPages' => array(
								 
							) 
						),
						'prop_cust' => array(
							'mask' => 'ADESPI',
							'table' => 'prop_cust',
							'restrictedPages' => array(
								 
							) 
						),
						'prop_kind' => array(
							'mask' => 'ADESPI',
							'table' => 'prop_kind',
							'restrictedPages' => array(
								 
							) 
						),
						'prop_type' => array(
							'mask' => 'ADESPI',
							'table' => 'prop_type',
							'restrictedPages' => array(
								 
							) 
						),
						'properties' => array(
							'mask' => 'ADESPI',
							'table' => 'properties',
							'restrictedPages' => array(
								 
							) 
						),
						'properties_owner' => array(
							'mask' => 'ADESPI',
							'table' => 'properties_owner',
							'restrictedPages' => array(
								 
							) 
						),
						'qualifications' => array(
							'mask' => 'ADESPI',
							'table' => 'qualifications',
							'restrictedPages' => array(
								 
							) 
						),
						'race' => array(
							'mask' => 'ADESPI',
							'table' => 'race',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main' => array(
							'mask' => 'ADESPI',
							'table' => 'rental_main',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_detail_occupier' => array(
							'mask' => 'ADESPI',
							'table' => 'rental_main_detail_occupier',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_details' => array(
							'mask' => 'ADESPI',
							'table' => 'rental_main_details',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_journal' => array(
							'mask' => 'ADESPI',
							'table' => 'rental_main_journal',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_properties' => array(
							'mask' => 'ADESPI',
							'table' => 'rental_main_properties',
							'restrictedPages' => array(
								 
							) 
						),
						'reply_lister' => array(
							'mask' => '',
							'table' => 'reply_lister',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'represent_type' => array(
							'mask' => 'ADESPI',
							'table' => 'represent_type',
							'restrictedPages' => array(
								 
							) 
						),
						'salutation' => array(
							'mask' => 'ADESPI',
							'table' => 'salutation',
							'restrictedPages' => array(
								 
							) 
						),
						'share_type' => array(
							'mask' => '',
							'table' => 'share_type',
							'restrictedPages' => array(
								 
							) 
						),
						'str' => array(
							'mask' => 'ADESPI',
							'table' => 'str',
							'restrictedPages' => array(
								 
							) 
						),
						'str-admin' => array(
							'mask' => 'ADESPI',
							'table' => 'str-admin',
							'restrictedPages' => array(
								 
							) 
						),
						'thanku' => array(
							'mask' => '',
							'table' => 'thanku',
							'restrictedPages' => array(
								'add' => true,
								'search' => true 
							) 
						),
						'transact_party' => array(
							'mask' => 'ADESPI',
							'table' => 'transact_party',
							'restrictedPages' => array(
								 
							) 
						),
						'transact_type' => array(
							'mask' => 'ADESPI',
							'table' => 'transact_type',
							'restrictedPages' => array(
								 
							) 
						),
						'transaction_party_involved' => array(
							'mask' => 'ADESPI',
							'table' => 'transaction_party_involved',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions' => array(
							'mask' => 'ADESPI',
							'table' => 'transactions',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions-admin' => array(
							'mask' => 'ADESPI',
							'table' => 'transactions-admin',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_jtc_lease' => array(
							'mask' => 'ADESPI',
							'table' => 'transactions_jtc_lease',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_lcsc' => array(
							'mask' => 'AEDSPI',
							'table' => 'transactions_lcsc',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_prop_mng' => array(
							'mask' => 'ADESPI',
							'table' => 'transactions_prop_mng',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_rental' => array(
							'mask' => 'ADESPI',
							'table' => 'transactions_rental',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_rm_rental' => array(
							'mask' => 'ADESPI',
							'table' => 'transactions_rm_rental',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_sale' => array(
							'mask' => 'ADESPI',
							'table' => 'transactions_sale',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_chart' => array(
							'mask' => 'S',
							'table' => 'transactions_chart',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_chart_pub' => array(
							'mask' => 'ADESPI',
							'table' => 'transactions_chart_pub',
							'restrictedPages' => array(
								 
							) 
						) 
					),
					'username' => 'admin',
					'admin' => true,
					'wrAdmin' => false 
				),
				'leasing' => array(
					'permissions' => array(
						'<global>' => array(
							'mask' => 'S',
							'table' => '<global>',
							'restrictedPages' => array(
								 
							) 
						),
						'ads_record' => array(
							'mask' => '',
							'table' => 'ads_record',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'agency' => array(
							'mask' => '',
							'table' => 'agency',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'agent_nametag' => array(
							'mask' => '',
							'table' => 'agent_nametag',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'agent_nametag_user' => array(
							'mask' => '',
							'table' => 'agent_nametag_user',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'agents' => array(
							'mask' => '',
							'table' => 'agents',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'awards' => array(
							'mask' => '',
							'table' => 'awards',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'awards-search' => array(
							'mask' => '',
							'table' => 'awards-search',
							'restrictedPages' => array(
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_checklist' => array(
							'mask' => '',
							'table' => 'cdd_checklist',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_checklist-admin' => array(
							'mask' => '',
							'table' => 'cdd_checklist-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_checklist1' => array(
							'mask' => 'S',
							'table' => 'cdd_checklist1',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'cdd_measures' => array(
							'mask' => '',
							'table' => 'cdd_measures',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_measures-admin' => array(
							'mask' => '',
							'table' => 'cdd_measures-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cobroke_external' => array(
							'mask' => '',
							'table' => 'cobroke_external',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cobroke_external_comm' => array(
							'mask' => 'SPI',
							'table' => 'cobroke_external_comm',
							'restrictedPages' => array(
								'add' => true 
							) 
						),
						'cobroke_internal' => array(
							'mask' => '',
							'table' => 'cobroke_internal',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cobroke_internal_comm' => array(
							'mask' => 'SPI',
							'table' => 'cobroke_internal_comm',
							'restrictedPages' => array(
								'add' => true 
							) 
						),
						'conflect_descriptions' => array(
							'mask' => 'ADESPI',
							'table' => 'conflect_descriptions',
							'restrictedPages' => array(
								 
							) 
						),
						'contacts' => array(
							'mask' => '',
							'table' => 'contacts',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'country' => array(
							'mask' => '',
							'table' => 'country',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'cpd_activities' => array(
							'mask' => '',
							'table' => 'cpd_activities',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'cpd_hours' => array(
							'mask' => '',
							'table' => 'cpd_hours',
							'restrictedPages' => array(
								'add' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'cpd_period' => array(
							'mask' => '',
							'table' => 'cpd_period',
							'restrictedPages' => array(
								'add' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'cpd_providers' => array(
							'mask' => '',
							'table' => 'cpd_providers',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'cpd_records' => array(
							'mask' => '',
							'table' => 'cpd_records',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'list1' => true,
								'search' => true,
								'view' => true,
								'view1' => true 
							) 
						),
						'cpd_trainers' => array(
							'mask' => '',
							'table' => 'cpd_trainers',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cpd_trainings' => array(
							'mask' => '',
							'table' => 'cpd_trainings',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cpd_trainings_details' => array(
							'mask' => '',
							'table' => 'cpd_trainings_details',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cpd_trainings_user' => array(
							'mask' => '',
							'table' => 'cpd_trainings_user',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cpd_types' => array(
							'mask' => '',
							'table' => 'cpd_types',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'default_pg' => array(
							'mask' => '',
							'table' => 'default_pg',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true 
							) 
						),
						'default_pg_default' => array(
							'mask' => '',
							'table' => 'default_pg_default',
							'restrictedPages' => array(
								'list' => true,
								'view' => true 
							) 
						),
						'digital_form' => array(
							'mask' => '',
							'table' => 'digital_form',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'districts' => array(
							'mask' => '',
							'table' => 'districts',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'doc_upload' => array(
							'mask' => 'S',
							'table' => 'doc_upload',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'print1' => true 
							) 
						),
						'doc_upload_lcsc' => array(
							'mask' => 'S',
							'table' => 'doc_upload_lcsc',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'print1' => true 
							) 
						),
						'dollars' => array(
							'mask' => '',
							'table' => 'dollars',
							'restrictedPages' => array(
								'add' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'eat_user_subscriptions' => array(
							'mask' => 'ADESPI',
							'table' => 'eat_user_subscriptions',
							'restrictedPages' => array(
								 
							) 
						),
						'eat_users' => array(
							'mask' => '',
							'table' => 'eat_users',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'eat_users_user' => array(
							'mask' => '',
							'table' => 'eat_users_user',
							'restrictedPages' => array(
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'external_party' => array(
							'mask' => '',
							'table' => 'external_party',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'external_party_comm' => array(
							'mask' => 'SPI',
							'table' => 'external_party_comm',
							'restrictedPages' => array(
								'add' => true 
							) 
						),
						'form1' => array(
							'mask' => '',
							'table' => 'form1',
							'restrictedPages' => array(
								'edit' => true,
								'edit_sign' => true,
								'list' => true,
								'search' => true,
								'view_print' => true,
								'view_signed' => true 
							) 
						),
						'form2' => array(
							'mask' => '',
							'table' => 'form2',
							'restrictedPages' => array(
								'edit' => true,
								'edit_sign' => true,
								'list' => true,
								'search' => true,
								'view_print' => true,
								'view_signed' => true 
							) 
						),
						'form3' => array(
							'mask' => '',
							'table' => 'form3',
							'restrictedPages' => array(
								'edit' => true,
								'edit_sign' => true,
								'list' => true,
								'search' => true,
								'view_print' => true,
								'view_signed' => true 
							) 
						),
						'form4' => array(
							'mask' => '',
							'table' => 'form4',
							'restrictedPages' => array(
								'edit2' => true,
								'edit_sign' => true,
								'list' => true,
								'search' => true,
								'view_print' => true,
								'view_signed' => true 
							) 
						),
						'form5' => array(
							'mask' => '',
							'table' => 'form5',
							'restrictedPages' => array(
								'edit' => true,
								'edit_sign' => true,
								'list' => true,
								'search' => true,
								'view_print' => true,
								'view_signed' => true 
							) 
						),
						'form6' => array(
							'mask' => '',
							'table' => 'form6',
							'restrictedPages' => array(
								'edit' => true,
								'edit_sign' => true,
								'list' => true,
								'search' => true,
								'view_print' => true,
								'view_signed' => true 
							) 
						),
						'form7' => array(
							'mask' => '',
							'table' => 'form7',
							'restrictedPages' => array(
								'edit' => true,
								'edit_sign' => true,
								'list' => true,
								'search' => true,
								'view_print' => true,
								'view_signed' => true 
							) 
						),
						'form8' => array(
							'mask' => '',
							'table' => 'form8',
							'restrictedPages' => array(
								'edit' => true,
								'edit_sign' => true,
								'list' => true,
								'search' => true,
								'view_print' => true,
								'view_signed' => true 
							) 
						),
						'form_all' => array(
							'mask' => '',
							'table' => 'form_all',
							'restrictedPages' => array(
								'edit' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'form_type' => array(
							'mask' => '',
							'table' => 'form_type',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'forms' => array(
							'mask' => '',
							'table' => 'forms',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'fsbo' => array(
							'mask' => '',
							'table' => 'fsbo',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'gst' => array(
							'mask' => '',
							'table' => 'gst',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'gst_incl' => array(
							'mask' => '',
							'table' => 'gst_incl',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'hdb_scheme' => array(
							'mask' => '',
							'table' => 'hdb_scheme',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'hdb_towns' => array(
							'mask' => '',
							'table' => 'hdb_towns',
							'restrictedPages' => array(
								'add' => true,
								'list' => true 
							) 
						),
						'insurers' => array(
							'mask' => '',
							'table' => 'insurers',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'insurers_user' => array(
							'mask' => '',
							'table' => 'insurers_user',
							'restrictedPages' => array(
								'add' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'interpretation' => array(
							'mask' => '',
							'table' => 'interpretation',
							'restrictedPages' => array(
								'add' => true,
								'list' => true 
							) 
						),
						'invcustomers' => array(
							'mask' => '',
							'table' => 'invcustomers',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'list1' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'invcustomers1' => array(
							'mask' => '',
							'table' => 'invcustomers1',
							'restrictedPages' => array(
								'edit' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'lease_due' => array(
							'mask' => '',
							'table' => 'lease_due',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'lease_due_pub' => array(
							'mask' => '',
							'table' => 'lease_due_pub',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'lease_tenure1' => array(
							'mask' => '',
							'table' => 'lease_tenure1',
							'restrictedPages' => array(
								'add' => true,
								'list' => true 
							) 
						),
						'lease_tenure2' => array(
							'mask' => '',
							'table' => 'lease_tenure2',
							'restrictedPages' => array(
								'add' => true,
								'list' => true 
							) 
						),
						'lease_tenure3' => array(
							'mask' => '',
							'table' => 'lease_tenure3',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'loginattempts' => array(
							'mask' => '',
							'table' => 'loginattempts',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'lor4_lease_due' => array(
							'mask' => 'S',
							'table' => 'lor4_lease_due',
							'restrictedPages' => array(
								'search' => true 
							) 
						),
						'lor4_lease_due1' => array(
							'mask' => 'S',
							'table' => 'lor4_lease_due1',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'my_comm' => array(
							'mask' => '',
							'table' => 'my_comm',
							'restrictedPages' => array(
								'export' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'my_comm_admin' => array(
							'mask' => '',
							'table' => 'my_comm_admin',
							'restrictedPages' => array(
								'export' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'nationality' => array(
							'mask' => '',
							'table' => 'nationality',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'ownership_kind' => array(
							'mask' => '',
							'table' => 'ownership_kind',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'ownership_type' => array(
							'mask' => '',
							'table' => 'ownership_type',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'ownership_typeid' => array(
							'mask' => '',
							'table' => 'ownership_typeid',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'parties_involved' => array(
							'mask' => 'S',
							'table' => 'parties_involved',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'parties_involved_buyer' => array(
							'mask' => '',
							'table' => 'parties_involved_buyer',
							'restrictedPages' => array(
								'search' => true 
							) 
						),
						'parties_involved_count' => array(
							'mask' => '',
							'table' => 'parties_involved_count',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'parties_involved_landlord' => array(
							'mask' => '',
							'table' => 'parties_involved_landlord',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'parties_involved_lcsc' => array(
							'mask' => 'S',
							'table' => 'parties_involved_lcsc',
							'restrictedPages' => array(
								'search' => true 
							) 
						),
						'parties_involved_seller' => array(
							'mask' => '',
							'table' => 'parties_involved_seller',
							'restrictedPages' => array(
								'search' => true 
							) 
						),
						'parties_involved_tenant' => array(
							'mask' => '',
							'table' => 'parties_involved_tenant',
							'restrictedPages' => array(
								'search' => true 
							) 
						),
						'party_type' => array(
							'mask' => '',
							'table' => 'party_type',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'payment_term' => array(
							'mask' => '',
							'table' => 'payment_term',
							'restrictedPages' => array(
								'add' => true,
								'list' => true 
							) 
						),
						'percentage' => array(
							'mask' => '',
							'table' => 'percentage',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'pii_agency' => array(
							'mask' => '',
							'table' => 'pii_agency',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'pii_agency_user' => array(
							'mask' => '',
							'table' => 'pii_agency_user',
							'restrictedPages' => array(
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'pii_category' => array(
							'mask' => '',
							'table' => 'pii_category',
							'restrictedPages' => array(
								'add' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'pii_indvd' => array(
							'mask' => '',
							'table' => 'pii_indvd',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'pii_indvd_agency' => array(
							'mask' => '',
							'table' => 'pii_indvd_agency',
							'restrictedPages' => array(
								'edit' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'prop_cust' => array(
							'mask' => '',
							'table' => 'prop_cust',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'prop_kind' => array(
							'mask' => '',
							'table' => 'prop_kind',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'prop_type' => array(
							'mask' => '',
							'table' => 'prop_type',
							'restrictedPages' => array(
								'list' => true 
							) 
						),
						'properties' => array(
							'mask' => '',
							'table' => 'properties',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'properties_owner' => array(
							'mask' => '',
							'table' => 'properties_owner',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'qualifications' => array(
							'mask' => '',
							'table' => 'qualifications',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'race' => array(
							'mask' => '',
							'table' => 'race',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'rental_main' => array(
							'mask' => '',
							'table' => 'rental_main',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'rental_main_detail_occupier' => array(
							'mask' => '',
							'table' => 'rental_main_detail_occupier',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'rental_main_details' => array(
							'mask' => '',
							'table' => 'rental_main_details',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'rental_main_journal' => array(
							'mask' => '',
							'table' => 'rental_main_journal',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'rental_main_properties' => array(
							'mask' => '',
							'table' => 'rental_main_properties',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'reply_lister' => array(
							'mask' => '',
							'table' => 'reply_lister',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'represent_type' => array(
							'mask' => '',
							'table' => 'represent_type',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'salutation' => array(
							'mask' => '',
							'table' => 'salutation',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'share_type' => array(
							'mask' => '',
							'table' => 'share_type',
							'restrictedPages' => array(
								'search' => true 
							) 
						),
						'str' => array(
							'mask' => '',
							'table' => 'str',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print1' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'str-admin' => array(
							'mask' => '',
							'table' => 'str-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'thanku' => array(
							'mask' => '',
							'table' => 'thanku',
							'restrictedPages' => array(
								'add' => true,
								'search' => true 
							) 
						),
						'transact_party' => array(
							'mask' => '',
							'table' => 'transact_party',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'transact_type' => array(
							'mask' => '',
							'table' => 'transact_type',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'transaction_party_involved' => array(
							'mask' => '',
							'table' => 'transaction_party_involved',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'transactions' => array(
							'mask' => '',
							'table' => 'transactions',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'transactions-admin' => array(
							'mask' => '',
							'table' => 'transactions-admin',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true,
								'view1' => true 
							) 
						),
						'transactions_jtc_lease' => array(
							'mask' => '',
							'table' => 'transactions_jtc_lease',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'transactions_lcsc' => array(
							'mask' => '',
							'table' => 'transactions_lcsc',
							'restrictedPages' => array(
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'transactions_prop_mng' => array(
							'mask' => '',
							'table' => 'transactions_prop_mng',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'transactions_rental' => array(
							'mask' => '',
							'table' => 'transactions_rental',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'transactions_rm_rental' => array(
							'mask' => '',
							'table' => 'transactions_rm_rental',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'transactions_sale' => array(
							'mask' => '',
							'table' => 'transactions_sale',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'transactions_chart' => array(
							'mask' => '',
							'table' => 'transactions_chart',
							'restrictedPages' => array(
								'chart' => true,
								'chart1' => true,
								'search' => true 
							) 
						),
						'transactions_chart_pub' => array(
							'mask' => '',
							'table' => 'transactions_chart_pub',
							'restrictedPages' => array(
								'chart' => true,
								'chart1' => true,
								'search' => true 
							) 
						) 
					),
					'username' => 'leasing',
					'admin' => false,
					'wrAdmin' => false 
				),
				'user' => array(
					'permissions' => array(
						'<global>' => array(
							'mask' => 'S',
							'table' => '<global>',
							'restrictedPages' => array(
								 
							) 
						),
						'ads_record' => array(
							'mask' => '',
							'table' => 'ads_record',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'agency' => array(
							'mask' => 'S',
							'table' => 'agency',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'agent_nametag' => array(
							'mask' => '',
							'table' => 'agent_nametag',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'agent_nametag_user' => array(
							'mask' => 'ADES',
							'table' => 'agent_nametag_user',
							'restrictedPages' => array(
								'search' => true 
							) 
						),
						'agents' => array(
							'mask' => '',
							'table' => 'agents',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'awards' => array(
							'mask' => 'AEDS',
							'table' => 'awards',
							'restrictedPages' => array(
								'edit' => true,
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'awards-search' => array(
							'mask' => '',
							'table' => 'awards-search',
							'restrictedPages' => array(
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_checklist' => array(
							'mask' => 'ADES',
							'table' => 'cdd_checklist',
							'restrictedPages' => array(
								'export' => true,
								'import' => true 
							) 
						),
						'cdd_checklist-admin' => array(
							'mask' => '',
							'table' => 'cdd_checklist-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cdd_checklist1' => array(
							'mask' => 'ADES',
							'table' => 'cdd_checklist1',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_measures' => array(
							'mask' => 'ADES',
							'table' => 'cdd_measures',
							'restrictedPages' => array(
								'export' => true,
								'import' => true 
							) 
						),
						'cdd_measures-admin' => array(
							'mask' => '',
							'table' => 'cdd_measures-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cobroke_external' => array(
							'mask' => 'S',
							'table' => 'cobroke_external',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'cobroke_external_comm' => array(
							'mask' => 'ADESPI',
							'table' => 'cobroke_external_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_internal' => array(
							'mask' => 'S',
							'table' => 'cobroke_internal',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'cobroke_internal_comm' => array(
							'mask' => 'ADESPI',
							'table' => 'cobroke_internal_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'conflect_descriptions' => array(
							'mask' => 'ADESPI',
							'table' => 'conflect_descriptions',
							'restrictedPages' => array(
								 
							) 
						),
						'contacts' => array(
							'mask' => '',
							'table' => 'contacts',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'country' => array(
							'mask' => 'S',
							'table' => 'country',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'cpd_activities' => array(
							'mask' => 'AESD',
							'table' => 'cpd_activities',
							'restrictedPages' => array(
								'export' => true,
								'import' => true 
							) 
						),
						'cpd_hours' => array(
							'mask' => 'AESD',
							'table' => 'cpd_hours',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_period' => array(
							'mask' => 'AESD',
							'table' => 'cpd_period',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_providers' => array(
							'mask' => 'AEDS',
							'table' => 'cpd_providers',
							'restrictedPages' => array(
								'export' => true,
								'import' => true 
							) 
						),
						'cpd_records' => array(
							'mask' => 'AESD',
							'table' => 'cpd_records',
							'restrictedPages' => array(
								'export' => true,
								'import' => true 
							) 
						),
						'cpd_trainers' => array(
							'mask' => 'AESD',
							'table' => 'cpd_trainers',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'cpd_trainings' => array(
							'mask' => '',
							'table' => 'cpd_trainings',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'cpd_trainings_details' => array(
							'mask' => 'AESD',
							'table' => 'cpd_trainings_details',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'cpd_trainings_user' => array(
							'mask' => 'ADES',
							'table' => 'cpd_trainings_user',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'cpd_types' => array(
							'mask' => 'AED',
							'table' => 'cpd_types',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'default_pg' => array(
							'mask' => '',
							'table' => 'default_pg',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true 
							) 
						),
						'default_pg_default' => array(
							'mask' => '',
							'table' => 'default_pg_default',
							'restrictedPages' => array(
								'list' => true,
								'view' => true 
							) 
						),
						'digital_form' => array(
							'mask' => 'ADES',
							'table' => 'digital_form',
							'restrictedPages' => array(
								'print' => true 
							) 
						),
						'districts' => array(
							'mask' => 'S',
							'table' => 'districts',
							'restrictedPages' => array(
								 
							) 
						),
						'doc_upload' => array(
							'mask' => 'ADES',
							'table' => 'doc_upload',
							'restrictedPages' => array(
								'print1' => true 
							) 
						),
						'doc_upload_lcsc' => array(
							'mask' => 'SPI',
							'table' => 'doc_upload_lcsc',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true 
							) 
						),
						'dollars' => array(
							'mask' => 'S',
							'table' => 'dollars',
							'restrictedPages' => array(
								'add' => true 
							) 
						),
						'eat_user_subscriptions' => array(
							'mask' => '',
							'table' => 'eat_user_subscriptions',
							'restrictedPages' => array(
								 
							) 
						),
						'eat_users' => array(
							'mask' => '',
							'table' => 'eat_users',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'eat_users_user' => array(
							'mask' => 'ES',
							'table' => 'eat_users_user',
							'restrictedPages' => array(
								'export' => true,
								'import' => true 
							) 
						),
						'external_party' => array(
							'mask' => 'S',
							'table' => 'external_party',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'external_party_comm' => array(
							'mask' => 'ADES',
							'table' => 'external_party_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'form1' => array(
							'mask' => 'AESD',
							'table' => 'form1',
							'restrictedPages' => array(
								 
							) 
						),
						'form2' => array(
							'mask' => 'ADES',
							'table' => 'form2',
							'restrictedPages' => array(
								 
							) 
						),
						'form3' => array(
							'mask' => 'ADES',
							'table' => 'form3',
							'restrictedPages' => array(
								 
							) 
						),
						'form4' => array(
							'mask' => 'ADES',
							'table' => 'form4',
							'restrictedPages' => array(
								 
							) 
						),
						'form5' => array(
							'mask' => 'ADES',
							'table' => 'form5',
							'restrictedPages' => array(
								 
							) 
						),
						'form6' => array(
							'mask' => 'ADES',
							'table' => 'form6',
							'restrictedPages' => array(
								 
							) 
						),
						'form7' => array(
							'mask' => 'ADES',
							'table' => 'form7',
							'restrictedPages' => array(
								 
							) 
						),
						'form8' => array(
							'mask' => 'ADES',
							'table' => 'form8',
							'restrictedPages' => array(
								 
							) 
						),
						'form_all' => array(
							'mask' => '',
							'table' => 'form_all',
							'restrictedPages' => array(
								'edit' => true,
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'form_type' => array(
							'mask' => 'S',
							'table' => 'form_type',
							'restrictedPages' => array(
								 
							) 
						),
						'forms' => array(
							'mask' => '',
							'table' => 'forms',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'fsbo' => array(
							'mask' => '',
							'table' => 'fsbo',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true 
							) 
						),
						'gst' => array(
							'mask' => 'ADES',
							'table' => 'gst',
							'restrictedPages' => array(
								 
							) 
						),
						'gst_incl' => array(
							'mask' => 'ADES',
							'table' => 'gst_incl',
							'restrictedPages' => array(
								 
							) 
						),
						'hdb_scheme' => array(
							'mask' => 'S',
							'table' => 'hdb_scheme',
							'restrictedPages' => array(
								 
							) 
						),
						'hdb_towns' => array(
							'mask' => 'S',
							'table' => 'hdb_towns',
							'restrictedPages' => array(
								'add' => true 
							) 
						),
						'insurers' => array(
							'mask' => '',
							'table' => 'insurers',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'insurers_user' => array(
							'mask' => 'AESD',
							'table' => 'insurers_user',
							'restrictedPages' => array(
								'print' => true 
							) 
						),
						'interpretation' => array(
							'mask' => 'ADES',
							'table' => 'interpretation',
							'restrictedPages' => array(
								 
							) 
						),
						'invcustomers' => array(
							'mask' => 'ADES',
							'table' => 'invcustomers',
							'restrictedPages' => array(
								'export' => true,
								'import' => true 
							) 
						),
						'invcustomers1' => array(
							'mask' => 'ADES',
							'table' => 'invcustomers1',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_due' => array(
							'mask' => 'S',
							'table' => 'lease_due',
							'restrictedPages' => array(
								'export' => true,
								'import' => true 
							) 
						),
						'lease_due_pub' => array(
							'mask' => 'S',
							'table' => 'lease_due_pub',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure1' => array(
							'mask' => 'AES',
							'table' => 'lease_tenure1',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure2' => array(
							'mask' => 'AES',
							'table' => 'lease_tenure2',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure3' => array(
							'mask' => 'AES',
							'table' => 'lease_tenure3',
							'restrictedPages' => array(
								 
							) 
						),
						'loginattempts' => array(
							'mask' => '',
							'table' => 'loginattempts',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'lor4_lease_due' => array(
							'mask' => '',
							'table' => 'lor4_lease_due',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'lor4_lease_due1' => array(
							'mask' => '',
							'table' => 'lor4_lease_due1',
							'restrictedPages' => array(
								'list' => true,
								'search' => true 
							) 
						),
						'my_comm' => array(
							'mask' => 'ADES',
							'table' => 'my_comm',
							'restrictedPages' => array(
								'export' => true,
								'print' => true 
							) 
						),
						'my_comm_admin' => array(
							'mask' => '',
							'table' => 'my_comm_admin',
							'restrictedPages' => array(
								'export' => true,
								'list' => true,
								'print' => true,
								'search' => true 
							) 
						),
						'nationality' => array(
							'mask' => 'S',
							'table' => 'nationality',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'ownership_kind' => array(
							'mask' => 'S',
							'table' => 'ownership_kind',
							'restrictedPages' => array(
								 
							) 
						),
						'ownership_type' => array(
							'mask' => 'S',
							'table' => 'ownership_type',
							'restrictedPages' => array(
								 
							) 
						),
						'ownership_typeid' => array(
							'mask' => 'S',
							'table' => 'ownership_typeid',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved' => array(
							'mask' => 'ADES',
							'table' => 'parties_involved',
							'restrictedPages' => array(
								'export' => true,
								'import' => true 
							) 
						),
						'parties_involved_buyer' => array(
							'mask' => 'S',
							'table' => 'parties_involved_buyer',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_count' => array(
							'mask' => 'S',
							'table' => 'parties_involved_count',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true 
							) 
						),
						'parties_involved_landlord' => array(
							'mask' => 'S',
							'table' => 'parties_involved_landlord',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_lcsc' => array(
							'mask' => 'S',
							'table' => 'parties_involved_lcsc',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_seller' => array(
							'mask' => 'S',
							'table' => 'parties_involved_seller',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_tenant' => array(
							'mask' => 'S',
							'table' => 'parties_involved_tenant',
							'restrictedPages' => array(
								 
							) 
						),
						'party_type' => array(
							'mask' => 'S',
							'table' => 'party_type',
							'restrictedPages' => array(
								 
							) 
						),
						'payment_term' => array(
							'mask' => '',
							'table' => 'payment_term',
							'restrictedPages' => array(
								'add' => true,
								'list' => true 
							) 
						),
						'percentage' => array(
							'mask' => 'AESD',
							'table' => 'percentage',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_agency' => array(
							'mask' => '',
							'table' => 'pii_agency',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'pii_agency_user' => array(
							'mask' => 'ADES',
							'table' => 'pii_agency_user',
							'restrictedPages' => array(
								'print' => true 
							) 
						),
						'pii_category' => array(
							'mask' => 'AESD',
							'table' => 'pii_category',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_indvd' => array(
							'mask' => 'AESD',
							'table' => 'pii_indvd',
							'restrictedPages' => array(
								'print' => true 
							) 
						),
						'pii_indvd_agency' => array(
							'mask' => 'S',
							'table' => 'pii_indvd_agency',
							'restrictedPages' => array(
								'edit' => true,
								'print' => true 
							) 
						),
						'prop_cust' => array(
							'mask' => 'S',
							'table' => 'prop_cust',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'prop_kind' => array(
							'mask' => 'S',
							'table' => 'prop_kind',
							'restrictedPages' => array(
								 
							) 
						),
						'prop_type' => array(
							'mask' => 'S',
							'table' => 'prop_type',
							'restrictedPages' => array(
								 
							) 
						),
						'properties' => array(
							'mask' => 'ADES',
							'table' => 'properties',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'properties_owner' => array(
							'mask' => 'ADES',
							'table' => 'properties_owner',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'qualifications' => array(
							'mask' => 'ADES',
							'table' => 'qualifications',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'race' => array(
							'mask' => 'S',
							'table' => 'race',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main' => array(
							'mask' => 'ADES',
							'table' => 'rental_main',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'rental_main_detail_occupier' => array(
							'mask' => 'ADES',
							'table' => 'rental_main_detail_occupier',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'rental_main_details' => array(
							'mask' => 'ADES',
							'table' => 'rental_main_details',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'rental_main_journal' => array(
							'mask' => 'ADES',
							'table' => 'rental_main_journal',
							'restrictedPages' => array(
								'export' => true,
								'import' => true 
							) 
						),
						'rental_main_properties' => array(
							'mask' => 'ADES',
							'table' => 'rental_main_properties',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print' => true 
							) 
						),
						'reply_lister' => array(
							'mask' => '',
							'table' => 'reply_lister',
							'restrictedPages' => array(
								'add' => true,
								'export' => true,
								'import' => true,
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'represent_type' => array(
							'mask' => 'S',
							'table' => 'represent_type',
							'restrictedPages' => array(
								 
							) 
						),
						'salutation' => array(
							'mask' => 'S',
							'table' => 'salutation',
							'restrictedPages' => array(
								 
							) 
						),
						'share_type' => array(
							'mask' => '',
							'table' => 'share_type',
							'restrictedPages' => array(
								 
							) 
						),
						'str' => array(
							'mask' => 'ADES',
							'table' => 'str',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'print1' => true 
							) 
						),
						'str-admin' => array(
							'mask' => '',
							'table' => 'str-admin',
							'restrictedPages' => array(
								'list' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'thanku' => array(
							'mask' => '',
							'table' => 'thanku',
							'restrictedPages' => array(
								'add' => true,
								'search' => true 
							) 
						),
						'transact_party' => array(
							'mask' => 'S',
							'table' => 'transact_party',
							'restrictedPages' => array(
								 
							) 
						),
						'transact_type' => array(
							'mask' => 'S',
							'table' => 'transact_type',
							'restrictedPages' => array(
								 
							) 
						),
						'transaction_party_involved' => array(
							'mask' => 'S',
							'table' => 'transaction_party_involved',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions' => array(
							'mask' => 'AEDSPI',
							'table' => 'transactions',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions-admin' => array(
							'mask' => '',
							'table' => 'transactions-admin',
							'restrictedPages' => array(
								'export' => true,
								'import' => true,
								'list' => true,
								'search' => true,
								'view' => true,
								'view1' => true 
							) 
						),
						'transactions_jtc_lease' => array(
							'mask' => 'S',
							'table' => 'transactions_jtc_lease',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_lcsc' => array(
							'mask' => '',
							'table' => 'transactions_lcsc',
							'restrictedPages' => array(
								'list' => true,
								'print' => true,
								'search' => true,
								'view' => true 
							) 
						),
						'transactions_prop_mng' => array(
							'mask' => 'SAED',
							'table' => 'transactions_prop_mng',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_rental' => array(
							'mask' => 'ESDA',
							'table' => 'transactions_rental',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_rm_rental' => array(
							'mask' => 'AESD',
							'table' => 'transactions_rm_rental',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_sale' => array(
							'mask' => 'AESD',
							'table' => 'transactions_sale',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_chart' => array(
							'mask' => 'S',
							'table' => 'transactions_chart',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_chart_pub' => array(
							'mask' => 'AES',
							'table' => 'transactions_chart_pub',
							'restrictedPages' => array(
								 
							) 
						) 
					),
					'username' => 'user',
					'admin' => false,
					'wrAdmin' => false 
				),
				'<Guest>' => array(
					'permissions' => array(
						'reply_lister' => array(
							'mask' => 'S',
							'table' => 'reply_lister',
							'restrictedPages' => array(
								 
							) 
						),
						'districts' => array(
							'mask' => 'S',
							'table' => 'districts',
							'restrictedPages' => array(
								 
							) 
						),
						'thanku' => array(
							'mask' => 'S',
							'table' => 'thanku',
							'restrictedPages' => array(
								 
							) 
						),
						'prop_type' => array(
							'mask' => 'S',
							'table' => 'prop_type',
							'restrictedPages' => array(
								 
							) 
						),
						'prop_kind' => array(
							'mask' => 'S',
							'table' => 'prop_kind',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainings' => array(
							'mask' => 'S',
							'table' => 'cpd_trainings',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainers' => array(
							'mask' => 'S',
							'table' => 'cpd_trainers',
							'restrictedPages' => array(
								 
							) 
						),
						'properties' => array(
							'mask' => 'S',
							'table' => 'properties',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_providers' => array(
							'mask' => 'S',
							'table' => 'cpd_providers',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_hours' => array(
							'mask' => 'S',
							'table' => 'cpd_hours',
							'restrictedPages' => array(
								 
							) 
						),
						'form1' => array(
							'mask' => 'S',
							'table' => 'form1',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_activities' => array(
							'mask' => 'S',
							'table' => 'cpd_activities',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_types' => array(
							'mask' => 'S',
							'table' => 'cpd_types',
							'restrictedPages' => array(
								 
							) 
						),
						'form2' => array(
							'mask' => 'S',
							'table' => 'form2',
							'restrictedPages' => array(
								 
							) 
						),
						'hdb_scheme' => array(
							'mask' => 'S',
							'table' => 'hdb_scheme',
							'restrictedPages' => array(
								 
							) 
						),
						'form3' => array(
							'mask' => 'S',
							'table' => 'form3',
							'restrictedPages' => array(
								 
							) 
						),
						'form4' => array(
							'mask' => 'S',
							'table' => 'form4',
							'restrictedPages' => array(
								 
							) 
						),
						'form5' => array(
							'mask' => 'S',
							'table' => 'form5',
							'restrictedPages' => array(
								 
							) 
						),
						'form6' => array(
							'mask' => 'S',
							'table' => 'form6',
							'restrictedPages' => array(
								 
							) 
						),
						'form7' => array(
							'mask' => 'S',
							'table' => 'form7',
							'restrictedPages' => array(
								 
							) 
						),
						'form8' => array(
							'mask' => 'S',
							'table' => 'form8',
							'restrictedPages' => array(
								 
							) 
						),
						'agency' => array(
							'mask' => 'S',
							'table' => 'agency',
							'restrictedPages' => array(
								 
							) 
						),
						'forms' => array(
							'mask' => 'S',
							'table' => 'forms',
							'restrictedPages' => array(
								 
							) 
						),
						'hdb_towns' => array(
							'mask' => 'S',
							'table' => 'hdb_towns',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure2' => array(
							'mask' => 'S',
							'table' => 'lease_tenure2',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure1' => array(
							'mask' => 'S',
							'table' => 'lease_tenure1',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_tenure3' => array(
							'mask' => 'S',
							'table' => 'lease_tenure3',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_period' => array(
							'mask' => 'S',
							'table' => 'cpd_period',
							'restrictedPages' => array(
								 
							) 
						),
						'gst' => array(
							'mask' => 'S',
							'table' => 'gst',
							'restrictedPages' => array(
								 
							) 
						),
						'gst_incl' => array(
							'mask' => 'S',
							'table' => 'gst_incl',
							'restrictedPages' => array(
								 
							) 
						),
						'percentage' => array(
							'mask' => 'S',
							'table' => 'percentage',
							'restrictedPages' => array(
								 
							) 
						),
						'payment_term' => array(
							'mask' => 'S',
							'table' => 'payment_term',
							'restrictedPages' => array(
								 
							) 
						),
						'ads_record' => array(
							'mask' => 'S',
							'table' => 'ads_record',
							'restrictedPages' => array(
								 
							) 
						),
						'agent_nametag' => array(
							'mask' => 'S',
							'table' => 'agent_nametag',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions' => array(
							'mask' => 'S',
							'table' => 'transactions',
							'restrictedPages' => array(
								 
							) 
						),
						'fsbo' => array(
							'mask' => 'S',
							'table' => 'fsbo',
							'restrictedPages' => array(
								 
							) 
						),
						'insurers' => array(
							'mask' => 'S',
							'table' => 'insurers',
							'restrictedPages' => array(
								 
							) 
						),
						'awards' => array(
							'mask' => 'S',
							'table' => 'awards',
							'restrictedPages' => array(
								 
							) 
						),
						'interpretation' => array(
							'mask' => 'S',
							'table' => 'interpretation',
							'restrictedPages' => array(
								 
							) 
						),
						'contacts' => array(
							'mask' => 'S',
							'table' => 'contacts',
							'restrictedPages' => array(
								 
							) 
						),
						'country' => array(
							'mask' => 'S',
							'table' => 'country',
							'restrictedPages' => array(
								 
							) 
						),
						'ownership_type' => array(
							'mask' => 'S',
							'table' => 'ownership_type',
							'restrictedPages' => array(
								 
							) 
						),
						'salutation' => array(
							'mask' => 'S',
							'table' => 'salutation',
							'restrictedPages' => array(
								 
							) 
						),
						'prop_cust' => array(
							'mask' => 'S',
							'table' => 'prop_cust',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved' => array(
							'mask' => 'S',
							'table' => 'parties_involved',
							'restrictedPages' => array(
								 
							) 
						),
						'form_all' => array(
							'mask' => 'S',
							'table' => 'form_all',
							'restrictedPages' => array(
								 
							) 
						),
						'ownership_kind' => array(
							'mask' => 'S',
							'table' => 'ownership_kind',
							'restrictedPages' => array(
								 
							) 
						),
						'digital_form' => array(
							'mask' => 'S',
							'table' => 'digital_form',
							'restrictedPages' => array(
								 
							) 
						),
						'form_type' => array(
							'mask' => 'S',
							'table' => 'form_type',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_checklist' => array(
							'mask' => 'S',
							'table' => 'cdd_checklist',
							'restrictedPages' => array(
								 
							) 
						),
						'dollars' => array(
							'mask' => 'S',
							'table' => 'dollars',
							'restrictedPages' => array(
								 
							) 
						),
						'party_type' => array(
							'mask' => 'S',
							'table' => 'party_type',
							'restrictedPages' => array(
								 
							) 
						),
						'represent_type' => array(
							'mask' => 'S',
							'table' => 'represent_type',
							'restrictedPages' => array(
								 
							) 
						),
						'transact_type' => array(
							'mask' => 'S',
							'table' => 'transact_type',
							'restrictedPages' => array(
								 
							) 
						),
						'transact_party' => array(
							'mask' => 'S',
							'table' => 'transact_party',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_measures' => array(
							'mask' => 'S',
							'table' => 'cdd_measures',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_external' => array(
							'mask' => 'S',
							'table' => 'cobroke_external',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_internal' => array(
							'mask' => 'S',
							'table' => 'cobroke_internal',
							'restrictedPages' => array(
								 
							) 
						),
						'str' => array(
							'mask' => 'S',
							'table' => 'str',
							'restrictedPages' => array(
								 
							) 
						),
						'nationality' => array(
							'mask' => 'S',
							'table' => 'nationality',
							'restrictedPages' => array(
								 
							) 
						),
						'external_party' => array(
							'mask' => 'S',
							'table' => 'external_party',
							'restrictedPages' => array(
								 
							) 
						),
						'agents' => array(
							'mask' => 'S',
							'table' => 'agents',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainings_user' => array(
							'mask' => 'S',
							'table' => 'cpd_trainings_user',
							'restrictedPages' => array(
								 
							) 
						),
						'default_pg' => array(
							'mask' => 'S',
							'table' => 'default_pg',
							'restrictedPages' => array(
								 
							) 
						),
						'agent_nametag_user' => array(
							'mask' => 'S',
							'table' => 'agent_nametag_user',
							'restrictedPages' => array(
								 
							) 
						),
						'default_pg_default' => array(
							'mask' => 'S',
							'table' => 'default_pg_default',
							'restrictedPages' => array(
								 
							) 
						),
						'awards-search' => array(
							'mask' => 'S',
							'table' => 'awards-search',
							'restrictedPages' => array(
								 
							) 
						),
						'str-admin' => array(
							'mask' => 'S',
							'table' => 'str-admin',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_measures-admin' => array(
							'mask' => 'S',
							'table' => 'cdd_measures-admin',
							'restrictedPages' => array(
								 
							) 
						),
						'insurers_user' => array(
							'mask' => 'S',
							'table' => 'insurers_user',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_agency' => array(
							'mask' => 'S',
							'table' => 'pii_agency',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_category' => array(
							'mask' => 'S',
							'table' => 'pii_category',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_indvd' => array(
							'mask' => 'S',
							'table' => 'pii_indvd',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_agency_user' => array(
							'mask' => 'S',
							'table' => 'pii_agency_user',
							'restrictedPages' => array(
								 
							) 
						),
						'pii_indvd_agency' => array(
							'mask' => 'S',
							'table' => 'pii_indvd_agency',
							'restrictedPages' => array(
								 
							) 
						),
						'ownership_typeid' => array(
							'mask' => 'S',
							'table' => 'ownership_typeid',
							'restrictedPages' => array(
								 
							) 
						),
						'my_comm' => array(
							'mask' => 'S',
							'table' => 'my_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'my_comm_admin' => array(
							'mask' => 'S',
							'table' => 'my_comm_admin',
							'restrictedPages' => array(
								 
							) 
						),
						'race' => array(
							'mask' => 'S',
							'table' => 'race',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_checklist-admin' => array(
							'mask' => 'S',
							'table' => 'cdd_checklist-admin',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main' => array(
							'mask' => 'S',
							'table' => 'rental_main',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_details' => array(
							'mask' => 'S',
							'table' => 'rental_main_details',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_journal' => array(
							'mask' => 'S',
							'table' => 'rental_main_journal',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_properties' => array(
							'mask' => 'S',
							'table' => 'rental_main_properties',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_due' => array(
							'mask' => 'S',
							'table' => 'lease_due',
							'restrictedPages' => array(
								 
							) 
						),
						'rental_main_detail_occupier' => array(
							'mask' => 'S',
							'table' => 'rental_main_detail_occupier',
							'restrictedPages' => array(
								 
							) 
						),
						'lease_due_pub' => array(
							'mask' => 'S',
							'table' => 'lease_due_pub',
							'restrictedPages' => array(
								 
							) 
						),
						'share_type' => array(
							'mask' => 'S',
							'table' => 'share_type',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions-admin' => array(
							'mask' => 'S',
							'table' => 'transactions-admin',
							'restrictedPages' => array(
								 
							) 
						),
						'doc_upload' => array(
							'mask' => 'S',
							'table' => 'doc_upload',
							'restrictedPages' => array(
								 
							) 
						),
						'transaction_party_involved' => array(
							'mask' => 'S',
							'table' => 'transaction_party_involved',
							'restrictedPages' => array(
								 
							) 
						),
						'invcustomers' => array(
							'mask' => 'S',
							'table' => 'invcustomers',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_count' => array(
							'mask' => 'S',
							'table' => 'parties_involved_count',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_rental' => array(
							'mask' => 'S',
							'table' => 'transactions_rental',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_sale' => array(
							'mask' => 'S',
							'table' => 'transactions_sale',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_jtc_lease' => array(
							'mask' => 'S',
							'table' => 'transactions_jtc_lease',
							'restrictedPages' => array(
								 
							) 
						),
						'invcustomers1' => array(
							'mask' => 'S',
							'table' => 'invcustomers1',
							'restrictedPages' => array(
								 
							) 
						),
						'properties_owner' => array(
							'mask' => 'S',
							'table' => 'properties_owner',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_rm_rental' => array(
							'mask' => 'S',
							'table' => 'transactions_rm_rental',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_chart' => array(
							'mask' => 'S',
							'table' => 'transactions_chart',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_prop_mng' => array(
							'mask' => 'S',
							'table' => 'transactions_prop_mng',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_chart_pub' => array(
							'mask' => 'S',
							'table' => 'transactions_chart_pub',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_buyer' => array(
							'mask' => 'S',
							'table' => 'parties_involved_buyer',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_landlord' => array(
							'mask' => 'S',
							'table' => 'parties_involved_landlord',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_seller' => array(
							'mask' => 'S',
							'table' => 'parties_involved_seller',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_tenant' => array(
							'mask' => 'S',
							'table' => 'parties_involved_tenant',
							'restrictedPages' => array(
								 
							) 
						),
						'loginattempts' => array(
							'mask' => 'S',
							'table' => 'loginattempts',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_records' => array(
							'mask' => 'S',
							'table' => 'cpd_records',
							'restrictedPages' => array(
								 
							) 
						),
						'cpd_trainings_details' => array(
							'mask' => 'S',
							'table' => 'cpd_trainings_details',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions_lcsc' => array(
							'mask' => 'S',
							'table' => 'transactions_lcsc',
							'restrictedPages' => array(
								 
							) 
						),
						'parties_involved_lcsc' => array(
							'mask' => 'S',
							'table' => 'parties_involved_lcsc',
							'restrictedPages' => array(
								 
							) 
						),
						'lor4_lease_due' => array(
							'mask' => 'S',
							'table' => 'lor4_lease_due',
							'restrictedPages' => array(
								 
							) 
						),
						'lor4_lease_due1' => array(
							'mask' => 'S',
							'table' => 'lor4_lease_due1',
							'restrictedPages' => array(
								 
							) 
						),
						'cdd_checklist1' => array(
							'mask' => 'S',
							'table' => 'cdd_checklist1',
							'restrictedPages' => array(
								 
							) 
						),
						'qualifications' => array(
							'mask' => 'S',
							'table' => 'qualifications',
							'restrictedPages' => array(
								 
							) 
						),
						'eat_users_user' => array(
							'mask' => 'S',
							'table' => 'eat_users_user',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_external_comm' => array(
							'mask' => 'S',
							'table' => 'cobroke_external_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'cobroke_internal_comm' => array(
							'mask' => 'S',
							'table' => 'cobroke_internal_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'external_party_comm' => array(
							'mask' => 'S',
							'table' => 'external_party_comm',
							'restrictedPages' => array(
								 
							) 
						),
						'eat_user_subscriptions' => array(
							'mask' => 'S',
							'table' => 'eat_user_subscriptions',
							'restrictedPages' => array(
								 
							) 
						),
						'conflect_descriptions' => array(
							'mask' => 'S',
							'table' => 'conflect_descriptions',
							'restrictedPages' => array(
								 
							) 
						),
						'doc_upload_lcsc' => array(
							'mask' => 'S',
							'table' => 'doc_upload_lcsc',
							'restrictedPages' => array(
								 
							) 
						),
						'<global>' => array(
							'mask' => '',
							'table' => '<global>',
							'restrictedPages' => array(
								'menu' => true,
								'menu_DocManager' => true,
								'menu_Invoice' => true 
							) 
						),
						'my_profile' => array(
							'mask' => '',
							'table' => 'my_profile',
							'restrictedPages' => array(
								'list' => true,
								'view' => true 
							) 
						) 
					) 
				) 
			) 
		),
		'dbProvider' => array(
			'type' => '%db',
			'activationField' => 'active',
			'active' => true,
			'code' => '01',
			'codeField' => '',
			'emailField' => 'email',
			'extUserIdField' => '',
			'fullnameField' => 'full_name',
			'label' => array(
				'text' => 'Database',
				'type' => 0 
			),
			'name' => 'db',
			'passwordField' => 'password',
			'phoneField' => '',
			'resetDateField' => '˂Create new˃',
			'resetTokenField' => '˂Create new˃',
			'table' => array(
				'connId' => 'jwresourjweat1091saasatjwrealt',
				'table' => 'eat_users' 
			),
			'twoFactorField' => '',
			'userGroupField' => 'user_group',
			'usernameField' => 'username',
			'userpicField' => '' 
		),
		'adAdminGroups' => array( 
			 
		),
		'showUserSource' => false,
		'dbProviderCodes' => array( 
			'01' 
		) 
	),
	'notifications' => array(
		'enabled' => false,
		'table' => array(
			'connId' => '',
			'table' => '' 
		) 
	),
	'allTables' => array(
		'ads_record' => array(
			'gid' => 192579,
			'name' => 'ads_record',
			'shortName' => 'ads_record',
			'type' => 0,
			'caption' => array(
				'English' => 'Ads Record' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'ads_record' 
		),
		'pii_indvd' => array(
			'gid' => 192616,
			'name' => 'pii_indvd',
			'shortName' => 'pii_indvd',
			'type' => 0,
			'caption' => array(
				'English' => 'PII (Individual)' 
			),
			'connId' => 'Tables',
			'color' => '8fbc8b',
			'originalTable' => 'pii_indvd' 
		),
		'transact_type' => array(
			'gid' => 192659,
			'name' => 'transact_type',
			'shortName' => 'transact_type',
			'type' => 0,
			'caption' => array(
				'English' => 'Transact Type' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'transact_type' 
		),
		'digital_form' => array(
			'gid' => 192668,
			'name' => 'digital_form',
			'shortName' => 'digital_form',
			'type' => 0,
			'caption' => array(
				'English' => 'CEA Forms' 
			),
			'connId' => 'Tables',
			'color' => 'd2af80',
			'originalTable' => 'digital_form' 
		),
		'my_profile' => array(
			'gid' => 192693,
			'name' => 'my_profile',
			'shortName' => 'my_profile',
			'type' => 0,
			'caption' => array(
				'English' => 'My Profile' 
			),
			'connId' => 'Tables',
			'color' => 'e8926f',
			'originalTable' => 'my_profile' 
		),
		'cpd_activities' => array(
			'gid' => 192704,
			'name' => 'cpd_activities',
			'shortName' => 'cpd_activities',
			'type' => 0,
			'caption' => array(
				'English' => 'CPD Activities' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'cpd_activities' 
		),
		'transactions_chart' => array(
			'gid' => 192726,
			'name' => 'transactions_chart',
			'shortName' => 'transactions_chart',
			'type' => 3,
			'caption' => array(
				'English' => 'Transactions Chart' 
			),
			'connId' => 'Tables',
			'color' => 'DB7093',
			'originalTable' => 'transactions' 
		),
		'form4' => array(
			'gid' => 192739,
			'name' => 'form4',
			'shortName' => 'form4',
			'type' => 1,
			'caption' => array(
				'English' => 'Prescribed Form 4' 
			),
			'connId' => 'Tables',
			'color' => 'dc143c',
			'originalTable' => 'forms' 
		),
		'ownership_type' => array(
			'gid' => 193014,
			'name' => 'ownership_type',
			'shortName' => 'ownership_type',
			'type' => 0,
			'caption' => array(
				'English' => 'Ownership Type' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'ownership_type' 
		),
		'form_type' => array(
			'gid' => 193023,
			'name' => 'form_type',
			'shortName' => 'form_type',
			'type' => 0,
			'caption' => array(
				'English' => 'Form Type' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'form_type' 
		),
		'lease_tenure1' => array(
			'gid' => 193035,
			'name' => 'lease_tenure1',
			'shortName' => 'lease_tenure1',
			'type' => 0,
			'caption' => array(
				'English' => 'Lease Tenure1' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'lease_tenure1' 
		),
		'form8' => array(
			'gid' => 193044,
			'name' => 'form8',
			'shortName' => 'form8',
			'type' => 1,
			'caption' => array(
				'English' => 'Prescribed Form 8' 
			),
			'connId' => 'Tables',
			'color' => '2f4f4f',
			'originalTable' => 'forms' 
		),
		'prop_cust' => array(
			'gid' => 193340,
			'name' => 'prop_cust',
			'shortName' => 'prop_cust',
			'type' => 0,
			'caption' => array(
				'English' => 'Ownership' 
			),
			'connId' => 'Tables',
			'color' => '3cb371',
			'originalTable' => 'prop_cust' 
		),
		'doc_upload_lcsc' => array(
			'gid' => 193448,
			'name' => 'doc_upload_lcsc',
			'shortName' => 'doc_upload_lcsc',
			'type' => 1,
			'caption' => array(
				'English' => 'Doc Upload Lcsc' 
			),
			'connId' => 'Tables',
			'color' => '4682b4',
			'originalTable' => 'doc_upload' 
		),
		'awards' => array(
			'gid' => 193473,
			'name' => 'awards',
			'shortName' => 'awards',
			'type' => 0,
			'caption' => array(
				'English' => 'Notes & Records' 
			),
			'connId' => 'Tables',
			'color' => '9acd32',
			'originalTable' => 'awards' 
		),
		'lor4_lease_due' => array(
			'gid' => 193518,
			'name' => 'lor4_lease_due',
			'shortName' => 'lor4_lease_due',
			'type' => 1,
			'caption' => array(
				'English' => 'Lor4 Lease Due' 
			),
			'connId' => 'Tables',
			'color' => '2F4F4F',
			'originalTable' => 'transactions' 
		),
		'prop_kind' => array(
			'gid' => 193542,
			'name' => 'prop_kind',
			'shortName' => 'prop_kind',
			'type' => 0,
			'caption' => array(
				'English' => 'Prop Kind' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'prop_kind' 
		),
		'transactions_rm_rental' => array(
			'gid' => 193553,
			'name' => 'transactions_rm_rental',
			'shortName' => 'transactions_rm_rental',
			'type' => 1,
			'caption' => array(
				'English' => 'Transactions - Rm Rental' 
			),
			'connId' => 'Tables',
			'color' => '9ACD32',
			'originalTable' => 'transactions' 
		),
		'rental_main' => array(
			'gid' => 193622,
			'name' => 'rental_main',
			'shortName' => 'rental_main',
			'type' => 0,
			'caption' => array(
				'English' => 'Property Management' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'rental_main' 
		),
		'share_type' => array(
			'gid' => 193645,
			'name' => 'share_type',
			'shortName' => 'share_type',
			'type' => 0,
			'caption' => array(
				'English' => 'Share Type' 
			),
			'connId' => 'Tables',
			'color' => '2F4F4F',
			'originalTable' => 'share_type' 
		),
		'cpd_types' => array(
			'gid' => 193660,
			'name' => 'cpd_types',
			'shortName' => 'cpd_types',
			'type' => 0,
			'caption' => array(
				'English' => 'CPD Types' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'cpd_types' 
		),
		'contacts' => array(
			'gid' => 193682,
			'name' => 'contacts',
			'shortName' => 'contacts',
			'type' => 1,
			'caption' => array(
				'English' => 'Contacts' 
			),
			'connId' => 'Tables',
			'color' => '7b68ee',
			'originalTable' => 'invcustomers' 
		),
		'cpd_providers' => array(
			'gid' => 193744,
			'name' => 'cpd_providers',
			'shortName' => 'cpd_providers',
			'type' => 0,
			'caption' => array(
				'English' => 'CPD Providers' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'cpd_providers' 
		),
		'transactions_rental' => array(
			'gid' => 193756,
			'name' => 'transactions_rental',
			'shortName' => 'transactions_rental',
			'type' => 1,
			'caption' => array(
				'English' => 'Transactions - Rental' 
			),
			'connId' => 'Tables',
			'color' => '4682B4',
			'originalTable' => 'transactions' 
		),
		'cpd_trainings_details' => array(
			'gid' => 193822,
			'name' => 'cpd_trainings_details',
			'shortName' => 'cpd_trainings_details',
			'type' => 1,
			'caption' => array(
				'English' => 'Cpd Trainings Details' 
			),
			'connId' => 'Tables',
			'color' => 'd2af80',
			'originalTable' => 'cpd_trainings' 
		),
		'transactions-admin' => array(
			'gid' => 193876,
			'name' => 'transactions-admin',
			'shortName' => 'transactions_admin',
			'type' => 1,
			'caption' => array(
				'English' => 'Transactions-admin' 
			),
			'connId' => 'Tables',
			'color' => 'B22222',
			'originalTable' => 'transactions' 
		),
		'parties_involved' => array(
			'gid' => 194217,
			'name' => 'parties_involved',
			'shortName' => 'parties_involved',
			'type' => 0,
			'caption' => array(
				'English' => 'Parties Involved' 
			),
			'connId' => 'Tables',
			'color' => 'b22222',
			'originalTable' => 'parties_involved' 
		),
		'cobroke_external_comm' => array(
			'gid' => 194336,
			'name' => 'cobroke_external_comm',
			'shortName' => 'cobroke_external_comm',
			'type' => 1,
			'caption' => array(
				'English' => 'Cobroke External Comm' 
			),
			'connId' => 'Tables',
			'color' => '9acd32',
			'originalTable' => 'cobroke_external' 
		),
		'pii_agency' => array(
			'gid' => 194406,
			'name' => 'pii_agency',
			'shortName' => 'pii_agency',
			'type' => 0,
			'caption' => array(
				'English' => 'PII (Agency)' 
			),
			'connId' => 'Tables',
			'color' => 'd2691e',
			'originalTable' => 'pii_agency' 
		),
		'cobroke_internal_comm' => array(
			'gid' => 194448,
			'name' => 'cobroke_internal_comm',
			'shortName' => 'cobroke_internal_comm',
			'type' => 1,
			'caption' => array(
				'English' => 'Cobroke Internal Comm' 
			),
			'connId' => 'Tables',
			'color' => 'e67349',
			'originalTable' => 'cobroke_internal' 
		),
		'gst_incl' => array(
			'gid' => 194491,
			'name' => 'gst_incl',
			'shortName' => 'gst_incl',
			'type' => 0,
			'caption' => array(
				'English' => 'GST Incl' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'gst_incl' 
		),
		'transactions_lcsc' => array(
			'gid' => 194502,
			'name' => 'transactions_lcsc',
			'shortName' => 'transactions_lcsc',
			'type' => 1,
			'caption' => array(
				'English' => '11 Lor 4 Geylang Leases' 
			),
			'connId' => 'Tables',
			'color' => 'B22222',
			'originalTable' => 'transactions' 
		),
		'eat_user_subscriptions' => array(
			'gid' => 194849,
			'name' => 'eat_user_subscriptions',
			'shortName' => 'eat_user_subscriptions',
			'type' => 0,
			'caption' => array(
				'English' => 'Eat User Subscriptions' 
			),
			'connId' => 'jwresourjweat1091saasatjwrealt',
			'color' => 'D2AF80',
			'originalTable' => 'eat_user_subscriptions' 
		),
		'transactions_jtc_lease' => array(
			'gid' => 194877,
			'name' => 'transactions_jtc_lease',
			'shortName' => 'transactions_jtc_lease',
			'type' => 1,
			'caption' => array(
				'English' => 'Transactions - JTC Lease' 
			),
			'connId' => 'Tables',
			'color' => '778899',
			'originalTable' => 'transactions' 
		),
		'parties_involved_count' => array(
			'gid' => 194946,
			'name' => 'parties_involved_count',
			'shortName' => 'parties_involved_count',
			'type' => 1,
			'caption' => array(
				'English' => 'Parties Involved Count' 
			),
			'connId' => 'Tables',
			'color' => 'EDCA00',
			'originalTable' => 'parties_involved' 
		),
		'parties_involved_buyer' => array(
			'gid' => 195054,
			'name' => 'parties_involved_buyer',
			'shortName' => 'parties_involved_buyer',
			'type' => 1,
			'caption' => array(
				'English' => 'Parties Involved Buyer' 
			),
			'connId' => 'Tables',
			'color' => 'B22222',
			'originalTable' => 'parties_involved' 
		),
		'parties_involved_tenant' => array(
			'gid' => 195162,
			'name' => 'parties_involved_tenant',
			'shortName' => 'parties_involved_tenant',
			'type' => 1,
			'caption' => array(
				'English' => 'Parties Involved Tenant' 
			),
			'connId' => 'Tables',
			'color' => 'B22222',
			'originalTable' => 'parties_involved' 
		),
		'salutation' => array(
			'gid' => 195270,
			'name' => 'salutation',
			'shortName' => 'salutation',
			'type' => 0,
			'caption' => array(
				'English' => 'Salutation' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'salutation' 
		),
		'country' => array(
			'gid' => 195282,
			'name' => 'country',
			'shortName' => 'country',
			'type' => 0,
			'caption' => array(
				'English' => 'Country' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'country' 
		),
		'properties_owner' => array(
			'gid' => 195294,
			'name' => 'properties_owner',
			'shortName' => 'properties_owner',
			'type' => 1,
			'caption' => array(
				'English' => 'Properties Owner' 
			),
			'connId' => 'Tables',
			'color' => '7b68ee',
			'originalTable' => 'invcustomers' 
		),
		'str' => array(
			'gid' => 195438,
			'name' => 'str',
			'shortName' => 'str',
			'type' => 0,
			'caption' => array(
				'English' => 'Suspicious Txn Report' 
			),
			'connId' => 'Tables',
			'color' => 'e67349',
			'originalTable' => 'str' 
		),
		'rental_main_details' => array(
			'gid' => 195613,
			'name' => 'rental_main_details',
			'shortName' => 'rental_main_details',
			'type' => 0,
			'caption' => array(
				'English' => 'Details' 
			),
			'connId' => 'Tables',
			'color' => '8fbc8b',
			'originalTable' => 'rental_main_details' 
		),
		'form5' => array(
			'gid' => 195673,
			'name' => 'form5',
			'shortName' => 'form5',
			'type' => 1,
			'caption' => array(
				'English' => 'Prescribed Form 5' 
			),
			'connId' => 'Tables',
			'color' => '6493ea',
			'originalTable' => 'forms' 
		),
		'form1' => array(
			'gid' => 195943,
			'name' => 'form1',
			'shortName' => 'form1',
			'type' => 1,
			'caption' => array(
				'English' => 'Prescribed Form 1' 
			),
			'connId' => 'Tables',
			'color' => 'bc8f8f',
			'originalTable' => 'forms' 
		),
		'awards-search' => array(
			'gid' => 196207,
			'name' => 'awards-search',
			'shortName' => 'awards_search',
			'type' => 1,
			'caption' => array(
				'English' => 'Awards' 
			),
			'connId' => 'Tables',
			'color' => 'E8926F',
			'originalTable' => 'awards' 
		),
		'eat_users_user' => array(
			'gid' => 196248,
			'name' => 'eat_users_user',
			'shortName' => 'eat_users_user',
			'type' => 1,
			'caption' => array(
				'English' => 'User Info' 
			),
			'connId' => 'jwresourjweat1091saasatjwrealt',
			'color' => 'DB7093',
			'originalTable' => 'eat_users' 
		),
		'qualifications' => array(
			'gid' => 196330,
			'name' => 'qualifications',
			'shortName' => 'qualifications',
			'type' => 0,
			'caption' => array(
				'English' => 'Qualifications' 
			),
			'connId' => 'Tables',
			'color' => '4169e1',
			'originalTable' => 'qualifications' 
		),
		'my_comm' => array(
			'gid' => 196357,
			'name' => 'my_comm',
			'shortName' => 'my_comm',
			'type' => 1,
			'caption' => array(
				'English' => 'My Comm' 
			),
			'connId' => 'Tables',
			'color' => '7B68EE',
			'originalTable' => 'transactions' 
		),
		'districts' => array(
			'gid' => 196590,
			'name' => 'districts',
			'shortName' => 'districts',
			'type' => 0,
			'caption' => array(
				'English' => 'Districts' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'districts' 
		),
		'transactions_sale' => array(
			'gid' => 196598,
			'name' => 'transactions_sale',
			'shortName' => 'transactions_sale',
			'type' => 1,
			'caption' => array(
				'English' => 'Transactions - Sale' 
			),
			'connId' => 'Tables',
			'color' => 'DAA520',
			'originalTable' => 'transactions' 
		),
		'hdb_scheme' => array(
			'gid' => 196664,
			'name' => 'hdb_scheme',
			'shortName' => 'hdb_scheme1',
			'type' => 0,
			'caption' => array(
				'English' => 'HDB Scheme' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'hdb_scheme' 
		),
		'agent_nametag_user' => array(
			'gid' => 196672,
			'name' => 'agent_nametag_user',
			'shortName' => 'agent_nametag_user',
			'type' => 1,
			'caption' => array(
				'English' => 'Agent Name Tag' 
			),
			'connId' => 'Tables',
			'color' => 'B22222',
			'originalTable' => 'agent_nametag' 
		),
		'default_pg' => array(
			'gid' => 196715,
			'name' => 'default_pg',
			'shortName' => 'default_pg',
			'type' => 0,
			'caption' => array(
				'English' => 'Default Pg' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'default_pg' 
		),
		'parties_involved_lcsc' => array(
			'gid' => 196726,
			'name' => 'parties_involved_lcsc',
			'shortName' => 'parties_involved_lcsc',
			'type' => 1,
			'caption' => array(
				'English' => 'Parties Involved Lcsc' 
			),
			'connId' => 'Tables',
			'color' => '6b8e23',
			'originalTable' => 'parties_involved' 
		),
		'agency' => array(
			'gid' => 196842,
			'name' => 'agency',
			'shortName' => 'agency',
			'type' => 0,
			'caption' => array(
				'English' => 'Agency' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'agency' 
		),
		'represent_type' => array(
			'gid' => 196874,
			'name' => 'represent_type',
			'shortName' => 'represent_type',
			'type' => 0,
			'caption' => array(
				'English' => 'Represent Type' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'represent_type' 
		),
		'transactions_prop_mng' => array(
			'gid' => 196886,
			'name' => 'transactions_prop_mng',
			'shortName' => 'transactions_prop_mng',
			'type' => 1,
			'caption' => array(
				'English' => 'Transactions - Prop Mng' 
			),
			'connId' => 'Tables',
			'color' => 'B22222',
			'originalTable' => 'transactions' 
		),
		'lor4_lease_due1' => array(
			'gid' => 196952,
			'name' => 'lor4_lease_due1',
			'shortName' => 'lor4_lease_due1',
			'type' => 1,
			'caption' => array(
				'English' => 'Lor4 Lease Due1' 
			),
			'connId' => 'Tables',
			'color' => 'DB7093',
			'originalTable' => 'transactions' 
		),
		'invcustomers1' => array(
			'gid' => 196979,
			'name' => 'invcustomers1',
			'shortName' => 'invcustomers1',
			'type' => 1,
			'caption' => array(
				'English' => 'Contacts' 
			),
			'connId' => 'Tables',
			'color' => 'E8926F',
			'originalTable' => 'invcustomers' 
		),
		'form_all' => array(
			'gid' => 197128,
			'name' => 'form_all',
			'shortName' => 'form_all',
			'type' => 1,
			'caption' => array(
				'English' => 'Form All' 
			),
			'connId' => 'Tables',
			'color' => 'e07878',
			'originalTable' => 'forms' 
		),
		'lease_due_pub' => array(
			'gid' => 197517,
			'name' => 'lease_due_pub',
			'shortName' => 'lease_due_pub',
			'type' => 1,
			'caption' => array(
				'English' => 'Lease Due Pub' 
			),
			'connId' => 'Tables',
			'color' => 'FFAD5B',
			'originalTable' => 'transactions' 
		),
		'cobroke_internal' => array(
			'gid' => 197546,
			'name' => 'cobroke_internal',
			'shortName' => 'cobroke_internal',
			'type' => 0,
			'caption' => array(
				'English' => 'Co-Broke Internal Salesperson' 
			),
			'connId' => 'Tables',
			'color' => '3cb371',
			'originalTable' => 'cobroke_internal' 
		),
		'lease_tenure2' => array(
			'gid' => 197594,
			'name' => 'lease_tenure2',
			'shortName' => 'lease_tenure2',
			'type' => 0,
			'caption' => array(
				'English' => 'Lease Tenure2' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'lease_tenure2' 
		),
		'cdd_measures' => array(
			'gid' => 197603,
			'name' => 'cdd_measures',
			'shortName' => 'cdd_measures',
			'type' => 0,
			'caption' => array(
				'English' => 'CDD Questionnaire' 
			),
			'connId' => 'Tables',
			'color' => 'cd853f',
			'originalTable' => 'cdd_measures' 
		),
		'payment_term' => array(
			'gid' => 197717,
			'name' => 'payment_term',
			'shortName' => 'payment_term',
			'type' => 0,
			'caption' => array(
				'English' => 'Payment Term' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'payment_term' 
		),
		'cdd_checklist' => array(
			'gid' => 197726,
			'name' => 'cdd_checklist',
			'shortName' => 'cdd_checklist',
			'type' => 0,
			'caption' => array(
				'English' => 'CDD checklist' 
			),
			'connId' => 'Tables',
			'color' => '6b8e23',
			'originalTable' => 'cdd_checklist' 
		),
		'conflect_descriptions' => array(
			'gid' => 197852,
			'name' => 'conflect_descriptions',
			'shortName' => 'conflect_descriptions',
			'type' => 0,
			'caption' => array(
				'English' => 'Conflect Descriptions' 
			),
			'connId' => 'Tables',
			'color' => 'DAA520',
			'originalTable' => 'conflect_descriptions' 
		),
		'lease_due' => array(
			'gid' => 197867,
			'name' => 'lease_due',
			'shortName' => 'lease_due',
			'type' => 1,
			'caption' => array(
				'English' => 'Lease Due' 
			),
			'connId' => 'Tables',
			'color' => 'FFAD5B',
			'originalTable' => 'transactions' 
		),
		'properties' => array(
			'gid' => 198182,
			'name' => 'properties',
			'shortName' => 'properties',
			'type' => 0,
			'caption' => array(
				'English' => 'Properties' 
			),
			'connId' => 'Tables',
			'color' => 'D2B48C',
			'originalTable' => 'properties' 
		),
		'str-admin' => array(
			'gid' => 198250,
			'name' => 'str-admin',
			'shortName' => 'str_admin',
			'type' => 1,
			'caption' => array(
				'English' => 'Str-admin' 
			),
			'connId' => 'Tables',
			'color' => '1E90FF',
			'originalTable' => 'str' 
		),
		'nationality' => array(
			'gid' => 198419,
			'name' => 'nationality',
			'shortName' => 'nationality',
			'type' => 0,
			'caption' => array(
				'English' => 'Nationality' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'nationality' 
		),
		'form3' => array(
			'gid' => 198431,
			'name' => 'form3',
			'shortName' => 'form3',
			'type' => 1,
			'caption' => array(
				'English' => 'Prescribed Form 3' 
			),
			'connId' => 'Tables',
			'color' => '4682b4',
			'originalTable' => 'forms' 
		),
		'form7' => array(
			'gid' => 198718,
			'name' => 'form7',
			'shortName' => 'form7',
			'type' => 1,
			'caption' => array(
				'English' => 'Prescribed Form 7' 
			),
			'connId' => 'Tables',
			'color' => 'e07878',
			'originalTable' => 'forms' 
		),
		'percentage' => array(
			'gid' => 199029,
			'name' => 'percentage',
			'shortName' => 'percentage',
			'type' => 0,
			'caption' => array(
				'English' => 'Percentage' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'percentage' 
		),
		'party_type' => array(
			'gid' => 199037,
			'name' => 'party_type',
			'shortName' => 'party_type',
			'type' => 0,
			'caption' => array(
				'English' => 'Party Type' 
			),
			'connId' => 'Tables',
			'color' => 'E07878',
			'originalTable' => 'party_type' 
		),
		'agents' => array(
			'gid' => 199049,
			'name' => 'agents',
			'shortName' => 'agents',
			'type' => 0,
			'caption' => array(
				'English' => 'Agents' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'agents' 
		),
		'doc_upload' => array(
			'gid' => 199124,
			'name' => 'doc_upload',
			'shortName' => 'doc_upload',
			'type' => 0,
			'caption' => array(
				'English' => 'Doc Upload' 
			),
			'connId' => 'Tables',
			'color' => '7b68ee',
			'originalTable' => 'doc_upload' 
		),
		'insurers_user' => array(
			'gid' => 199149,
			'name' => 'insurers_user',
			'shortName' => 'insurers_user',
			'type' => 1,
			'caption' => array(
				'English' => 'Insurers User' 
			),
			'connId' => 'Tables',
			'color' => 'BC8F8F',
			'originalTable' => 'insurers' 
		),
		'insurers' => array(
			'gid' => 199178,
			'name' => 'insurers',
			'shortName' => 'insurers',
			'type' => 0,
			'caption' => array(
				'English' => 'Insurers (PII)' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'insurers' 
		),
		'pii_category' => array(
			'gid' => 199209,
			'name' => 'pii_category',
			'shortName' => 'pii_category',
			'type' => 0,
			'caption' => array(
				'English' => 'PII Category' 
			),
			'connId' => 'Tables',
			'color' => '5F9EA0',
			'originalTable' => 'pii_category' 
		),
		'default_pg_default' => array(
			'gid' => 199219,
			'name' => 'default_pg_default',
			'shortName' => 'default_pg_default',
			'type' => 1,
			'caption' => array(
				'English' => 'Default Pg Default' 
			),
			'connId' => 'Tables',
			'color' => 'CD5C5C',
			'originalTable' => 'default_pg' 
		),
		'prop_type' => array(
			'gid' => 199228,
			'name' => 'prop_type',
			'shortName' => 'prop_type',
			'type' => 0,
			'caption' => array(
				'English' => 'Prop Type' 
			),
			'connId' => 'Tables',
			'color' => '4682B4',
			'originalTable' => 'prop_type' 
		),
		'cdd_checklist-admin' => array(
			'gid' => 199236,
			'name' => 'cdd_checklist-admin',
			'shortName' => 'cdd_checklist_admin',
			'type' => 1,
			'caption' => array(
				'English' => 'Cdd Checklist-admin' 
			),
			'connId' => 'Tables',
			'color' => 'CD853F',
			'originalTable' => 'cdd_checklist' 
		),
		'ownership_kind' => array(
			'gid' => 199363,
			'name' => 'ownership_kind',
			'shortName' => 'ownership_kind',
			'type' => 0,
			'caption' => array(
				'English' => 'Ownership Kind' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'ownership_kind' 
		),
		'pii_indvd_agency' => array(
			'gid' => 199372,
			'name' => 'pii_indvd_agency',
			'shortName' => 'pii_indvd_agency',
			'type' => 1,
			'caption' => array(
				'English' => 'PII (Individual)' 
			),
			'connId' => 'Tables',
			'color' => 'dc143c',
			'originalTable' => 'pii_indvd' 
		),
		'cpd_trainings_user' => array(
			'gid' => 199414,
			'name' => 'cpd_trainings_user',
			'shortName' => 'cpd_trainings_user',
			'type' => 1,
			'caption' => array(
				'English' => 'CPD Records' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'cpd_trainings' 
		),
		'dollars' => array(
			'gid' => 199465,
			'name' => 'dollars',
			'shortName' => 'dollars',
			'type' => 0,
			'caption' => array(
				'English' => 'Dollars' 
			),
			'connId' => 'Tables',
			'color' => '5F9EA0',
			'originalTable' => 'dollars' 
		),
		'external_party_comm' => array(
			'gid' => 199475,
			'name' => 'external_party_comm',
			'shortName' => 'external_party_comm',
			'type' => 1,
			'caption' => array(
				'English' => 'External Party Comm' 
			),
			'connId' => 'Tables',
			'color' => 'bc8f8f',
			'originalTable' => 'external_party' 
		),
		'cpd_trainings' => array(
			'gid' => 199536,
			'name' => 'cpd_trainings',
			'shortName' => 'cpd_trainings',
			'type' => 0,
			'caption' => array(
				'English' => 'CPD Records' 
			),
			'connId' => 'Tables',
			'color' => '000000',
			'originalTable' => 'cpd_trainings' 
		),
		'invcustomers' => array(
			'gid' => 199586,
			'name' => 'invcustomers',
			'shortName' => 'invcustomers',
			'type' => 0,
			'caption' => array(
				'English' => 'Contacts' 
			),
			'connId' => 'Tables',
			'color' => '6DA5C8',
			'originalTable' => 'invcustomers' 
		),
		'parties_involved_landlord' => array(
			'gid' => 199746,
			'name' => 'parties_involved_landlord',
			'shortName' => 'parties_involved_landlord',
			'type' => 1,
			'caption' => array(
				'English' => 'Parties Involved Landlord' 
			),
			'connId' => 'Tables',
			'color' => 'd2691e',
			'originalTable' => 'parties_involved' 
		),
		'hdb_towns' => array(
			'gid' => 199854,
			'name' => 'hdb_towns',
			'shortName' => 'hdb_towns',
			'type' => 0,
			'caption' => array(
				'English' => 'HDB Towns' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'hdb_towns' 
		),
		'external_party' => array(
			'gid' => 199863,
			'name' => 'external_party',
			'shortName' => 'external_party',
			'type' => 0,
			'caption' => array(
				'English' => 'Fees to Third Party' 
			),
			'connId' => 'Tables',
			'color' => 'b22222',
			'originalTable' => 'external_party' 
		),
		'my_comm_admin' => array(
			'gid' => 199928,
			'name' => 'my_comm_admin',
			'shortName' => 'my_comm_admin',
			'type' => 1,
			'caption' => array(
				'English' => 'Agent Comm' 
			),
			'connId' => 'Tables',
			'color' => '7B68EE',
			'originalTable' => 'transactions' 
		),
		'pii_agency_user' => array(
			'gid' => 200161,
			'name' => 'pii_agency_user',
			'shortName' => 'pii_agency_user',
			'type' => 1,
			'caption' => array(
				'English' => 'PII (Agency)' 
			),
			'connId' => 'Tables',
			'color' => 'cfae83',
			'originalTable' => 'pii_agency' 
		),
		'agent_nametag' => array(
			'gid' => 200199,
			'name' => 'agent_nametag',
			'shortName' => 'agent_nametag',
			'type' => 0,
			'caption' => array(
				'English' => 'Name Tag' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'agent_nametag' 
		),
		'rental_main_detail_occupier' => array(
			'gid' => 200246,
			'name' => 'rental_main_detail_occupier',
			'shortName' => 'rental_main_detail_occupier',
			'type' => 0,
			'caption' => array(
				'English' => 'Occupier Detail' 
			),
			'connId' => 'Tables',
			'color' => 'cd5c5c',
			'originalTable' => 'rental_main_detail_occupier' 
		),
		'ownership_typeid' => array(
			'gid' => 200294,
			'name' => 'ownership_typeid',
			'shortName' => 'ownership_typeid',
			'type' => 0,
			'caption' => array(
				'English' => 'ID Type' 
			),
			'connId' => 'Tables',
			'color' => '778899',
			'originalTable' => 'ownership_typeid' 
		),
		'rental_main_journal' => array(
			'gid' => 200306,
			'name' => 'rental_main_journal',
			'shortName' => 'rental_main_journal',
			'type' => 0,
			'caption' => array(
				'English' => 'Journal' 
			),
			'connId' => 'Tables',
			'color' => 'cd5c5c',
			'originalTable' => 'rental_main_journal' 
		),
		'cobroke_external' => array(
			'gid' => 200333,
			'name' => 'cobroke_external',
			'shortName' => 'cobroke_external',
			'type' => 0,
			'caption' => array(
				'English' => 'Co-Broke External Salesperson' 
			),
			'connId' => 'Tables',
			'color' => '4169e1',
			'originalTable' => 'cobroke_external' 
		),
		'cpd_records' => array(
			'gid' => 200405,
			'name' => 'cpd_records',
			'shortName' => 'cpd_records',
			'type' => 0,
			'caption' => array(
				'English' => 'My CPD' 
			),
			'connId' => 'Tables',
			'color' => '4169E1',
			'originalTable' => 'cpd_records' 
		),
		'race' => array(
			'gid' => 200427,
			'name' => 'race',
			'shortName' => 'race',
			'type' => 0,
			'caption' => array(
				'English' => 'Race' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'race' 
		),
		'loginattempts' => array(
			'gid' => 200436,
			'name' => 'loginattempts',
			'shortName' => 'loginattempts',
			'type' => 0,
			'caption' => array(
				'English' => 'Loginattempts' 
			),
			'connId' => 'Tables',
			'color' => 'CD853F',
			'originalTable' => 'loginattempts' 
		),
		'eat_users' => array(
			'gid' => 200451,
			'name' => 'eat_users',
			'shortName' => 'eat_users',
			'type' => 0,
			'caption' => array(
				'English' => 'Users Info' 
			),
			'connId' => 'jwresourjweat1091saasatjwrealt',
			'color' => 'DC143C',
			'originalTable' => 'eat_users' 
		),
		'cpd_period' => array(
			'gid' => 200537,
			'name' => 'cpd_period',
			'shortName' => 'cpd_period',
			'type' => 0,
			'caption' => array(
				'English' => 'CPD Windows' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'cpd_period' 
		),
		'reply_lister' => array(
			'gid' => 200547,
			'name' => 'reply_lister',
			'shortName' => 'reply_lister',
			'type' => 0,
			'caption' => array(
				'English' => 'Reply Lister' 
			),
			'connId' => 'Tables',
			'color' => 'EDCA00',
			'originalTable' => 'reply_lister' 
		),
		'cdd_measures-admin' => array(
			'gid' => 200576,
			'name' => 'cdd_measures-admin',
			'shortName' => 'cdd_measures_admin',
			'type' => 1,
			'caption' => array(
				'English' => 'Cdd Measures' 
			),
			'connId' => 'Tables',
			'color' => 'D2691E',
			'originalTable' => 'cdd_measures' 
		),
		'gst' => array(
			'gid' => 200688,
			'name' => 'gst',
			'shortName' => 'gst',
			'type' => 0,
			'caption' => array(
				'English' => 'Gst' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'gst' 
		),
		'cpd_hours' => array(
			'gid' => 200696,
			'name' => 'cpd_hours',
			'shortName' => 'cpd_hours',
			'type' => 0,
			'caption' => array(
				'English' => 'CPD Hours' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'cpd_hours' 
		),
		'fsbo' => array(
			'gid' => 200715,
			'name' => 'fsbo',
			'shortName' => 'fsbo',
			'type' => 0,
			'caption' => array(
				'English' => 'Fsbo' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'fsbo' 
		),
		'parties_involved_seller' => array(
			'gid' => 200738,
			'name' => 'parties_involved_seller',
			'shortName' => 'parties_involved_seller',
			'type' => 1,
			'caption' => array(
				'English' => 'Parties Involved Seller' 
			),
			'connId' => 'Tables',
			'color' => 'D2691E',
			'originalTable' => 'parties_involved' 
		),
		'rental_main_properties' => array(
			'gid' => 200846,
			'name' => 'rental_main_properties',
			'shortName' => 'rental_main_properties',
			'type' => 1,
			'caption' => array(
				'English' => 'Property Info' 
			),
			'connId' => 'Tables',
			'color' => '778899',
			'originalTable' => 'properties' 
		),
		'cdd_checklist1' => array(
			'gid' => 200911,
			'name' => 'cdd_checklist1',
			'shortName' => 'cdd_checklist1',
			'type' => 1,
			'caption' => array(
				'English' => 'CDD checklist' 
			),
			'connId' => 'Tables',
			'color' => '2f4f4f',
			'originalTable' => 'cdd_checklist' 
		),
		'cpd_trainers' => array(
			'gid' => 201043,
			'name' => 'cpd_trainers',
			'shortName' => 'cpd_trainers',
			'type' => 0,
			'caption' => array(
				'English' => 'CPD Trainers' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'cpd_trainers' 
		),
		'transactions' => array(
			'gid' => 201085,
			'name' => 'transactions',
			'shortName' => 'transactions',
			'type' => 0,
			'caption' => array(
				'English' => 'Transactions' 
			),
			'connId' => 'Tables',
			'color' => '3CB371',
			'originalTable' => 'transactions' 
		),
		'transact_party' => array(
			'gid' => 201455,
			'name' => 'transact_party',
			'shortName' => 'transact_party',
			'type' => 0,
			'caption' => array(
				'English' => 'Transact Party' 
			),
			'connId' => 'Tables',
			'color' => '008B8B',
			'originalTable' => 'transact_party' 
		),
		'interpretation' => array(
			'gid' => 201467,
			'name' => 'interpretation',
			'shortName' => 'interpretation',
			'type' => 0,
			'caption' => array(
				'English' => 'Interpretation' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'interpretation' 
		),
		'thanku' => array(
			'gid' => 201476,
			'name' => 'thanku',
			'shortName' => 'thanku',
			'type' => 0,
			'caption' => array(
				'English' => 'Thanku' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'thanku' 
		),
		'lease_tenure3' => array(
			'gid' => 201482,
			'name' => 'lease_tenure3',
			'shortName' => 'lease_tenure3',
			'type' => 0,
			'caption' => array(
				'English' => 'Lease Tenure3' 
			),
			'connId' => 'Tables',
			'color' => '',
			'originalTable' => 'lease_tenure3' 
		),
		'transaction_party_involved' => array(
			'gid' => 201490,
			'name' => 'transaction_party_involved',
			'shortName' => 'transaction_party_involved',
			'type' => 1,
			'caption' => array(
				'English' => 'Transaction Party Involved' 
			),
			'connId' => 'Tables',
			'color' => '4682B4',
			'originalTable' => 'transactions' 
		),
		'form6' => array(
			'gid' => 201589,
			'name' => 'form6',
			'shortName' => 'form6',
			'type' => 1,
			'caption' => array(
				'English' => 'Prescribed Form 6' 
			),
			'connId' => 'Tables',
			'color' => 'daa520',
			'originalTable' => 'forms' 
		),
		'form2' => array(
			'gid' => 201852,
			'name' => 'form2',
			'shortName' => 'form2',
			'type' => 1,
			'caption' => array(
				'English' => 'Prescribed Form 2' 
			),
			'connId' => 'Tables',
			'color' => '4169e1',
			'originalTable' => 'forms' 
		),
		'forms' => array(
			'gid' => 202110,
			'name' => 'forms',
			'shortName' => 'forms',
			'type' => 0,
			'caption' => array(
				'English' => 'Forms' 
			),
			'connId' => 'Tables',
			'color' => 'e07878',
			'originalTable' => 'forms' 
		),
		'transactions_chart_pub' => array(
			'gid' => 202565,
			'name' => 'transactions_chart_pub',
			'shortName' => 'transactions_chart1',
			'type' => 3,
			'caption' => array(
				'English' => 'Transactions Pub' 
			),
			'connId' => 'Tables',
			'color' => 'BC8F8F',
			'originalTable' => 'transactions' 
		) 
	),
	'tablesByShort' => array(
		'ads_record' => 'ads_record',
		'pii_indvd' => 'pii_indvd',
		'transact_type' => 'transact_type',
		'digital_form' => 'digital_form',
		'my_profile' => 'my_profile',
		'cpd_activities' => 'cpd_activities',
		'transactions_chart' => 'transactions_chart',
		'form4' => 'form4',
		'ownership_type' => 'ownership_type',
		'form_type' => 'form_type',
		'lease_tenure1' => 'lease_tenure1',
		'form8' => 'form8',
		'prop_cust' => 'prop_cust',
		'doc_upload_lcsc' => 'doc_upload_lcsc',
		'awards' => 'awards',
		'lor4_lease_due' => 'lor4_lease_due',
		'prop_kind' => 'prop_kind',
		'transactions_rm_rental' => 'transactions_rm_rental',
		'rental_main' => 'rental_main',
		'share_type' => 'share_type',
		'cpd_types' => 'cpd_types',
		'contacts' => 'contacts',
		'cpd_providers' => 'cpd_providers',
		'transactions_rental' => 'transactions_rental',
		'cpd_trainings_details' => 'cpd_trainings_details',
		'transactions_admin' => 'transactions-admin',
		'parties_involved' => 'parties_involved',
		'cobroke_external_comm' => 'cobroke_external_comm',
		'pii_agency' => 'pii_agency',
		'cobroke_internal_comm' => 'cobroke_internal_comm',
		'gst_incl' => 'gst_incl',
		'transactions_lcsc' => 'transactions_lcsc',
		'eat_user_subscriptions' => 'eat_user_subscriptions',
		'transactions_jtc_lease' => 'transactions_jtc_lease',
		'parties_involved_count' => 'parties_involved_count',
		'parties_involved_buyer' => 'parties_involved_buyer',
		'parties_involved_tenant' => 'parties_involved_tenant',
		'salutation' => 'salutation',
		'country' => 'country',
		'properties_owner' => 'properties_owner',
		'str' => 'str',
		'rental_main_details' => 'rental_main_details',
		'form5' => 'form5',
		'form1' => 'form1',
		'awards_search' => 'awards-search',
		'eat_users_user' => 'eat_users_user',
		'qualifications' => 'qualifications',
		'my_comm' => 'my_comm',
		'districts' => 'districts',
		'transactions_sale' => 'transactions_sale',
		'hdb_scheme1' => 'hdb_scheme',
		'agent_nametag_user' => 'agent_nametag_user',
		'default_pg' => 'default_pg',
		'parties_involved_lcsc' => 'parties_involved_lcsc',
		'agency' => 'agency',
		'represent_type' => 'represent_type',
		'transactions_prop_mng' => 'transactions_prop_mng',
		'lor4_lease_due1' => 'lor4_lease_due1',
		'invcustomers1' => 'invcustomers1',
		'form_all' => 'form_all',
		'lease_due_pub' => 'lease_due_pub',
		'cobroke_internal' => 'cobroke_internal',
		'lease_tenure2' => 'lease_tenure2',
		'cdd_measures' => 'cdd_measures',
		'payment_term' => 'payment_term',
		'cdd_checklist' => 'cdd_checklist',
		'conflect_descriptions' => 'conflect_descriptions',
		'lease_due' => 'lease_due',
		'properties' => 'properties',
		'str_admin' => 'str-admin',
		'nationality' => 'nationality',
		'form3' => 'form3',
		'form7' => 'form7',
		'percentage' => 'percentage',
		'party_type' => 'party_type',
		'agents' => 'agents',
		'doc_upload' => 'doc_upload',
		'insurers_user' => 'insurers_user',
		'insurers' => 'insurers',
		'pii_category' => 'pii_category',
		'default_pg_default' => 'default_pg_default',
		'prop_type' => 'prop_type',
		'cdd_checklist_admin' => 'cdd_checklist-admin',
		'ownership_kind' => 'ownership_kind',
		'pii_indvd_agency' => 'pii_indvd_agency',
		'cpd_trainings_user' => 'cpd_trainings_user',
		'dollars' => 'dollars',
		'external_party_comm' => 'external_party_comm',
		'cpd_trainings' => 'cpd_trainings',
		'invcustomers' => 'invcustomers',
		'parties_involved_landlord' => 'parties_involved_landlord',
		'hdb_towns' => 'hdb_towns',
		'external_party' => 'external_party',
		'my_comm_admin' => 'my_comm_admin',
		'pii_agency_user' => 'pii_agency_user',
		'agent_nametag' => 'agent_nametag',
		'rental_main_detail_occupier' => 'rental_main_detail_occupier',
		'ownership_typeid' => 'ownership_typeid',
		'rental_main_journal' => 'rental_main_journal',
		'cobroke_external' => 'cobroke_external',
		'cpd_records' => 'cpd_records',
		'race' => 'race',
		'loginattempts' => 'loginattempts',
		'eat_users' => 'eat_users',
		'cpd_period' => 'cpd_period',
		'reply_lister' => 'reply_lister',
		'cdd_measures_admin' => 'cdd_measures-admin',
		'gst' => 'gst',
		'cpd_hours' => 'cpd_hours',
		'fsbo' => 'fsbo',
		'parties_involved_seller' => 'parties_involved_seller',
		'rental_main_properties' => 'rental_main_properties',
		'cdd_checklist1' => 'cdd_checklist1',
		'cpd_trainers' => 'cpd_trainers',
		'transactions' => 'transactions',
		'transact_party' => 'transact_party',
		'interpretation' => 'interpretation',
		'thanku' => 'thanku',
		'lease_tenure3' => 'lease_tenure3',
		'transaction_party_involved' => 'transaction_party_involved',
		'form6' => 'form6',
		'form2' => 'form2',
		'forms' => 'forms',
		'transactions_chart1' => 'transactions_chart_pub' 
	),
	'tablesByGood' => array(
		'ads_record' => 'ads_record',
		'pii_indvd' => 'pii_indvd',
		'transact_type' => 'transact_type',
		'digital_form' => 'digital_form',
		'my_profile' => 'my_profile',
		'cpd_activities' => 'cpd_activities',
		'transactions_chart' => 'transactions_chart',
		'form4' => 'form4',
		'ownership_type' => 'ownership_type',
		'form_type' => 'form_type',
		'lease_tenure1' => 'lease_tenure1',
		'form8' => 'form8',
		'prop_cust' => 'prop_cust',
		'doc_upload_lcsc' => 'doc_upload_lcsc',
		'awards' => 'awards',
		'lor4_lease_due' => 'lor4_lease_due',
		'prop_kind' => 'prop_kind',
		'transactions_rm_rental' => 'transactions_rm_rental',
		'rental_main' => 'rental_main',
		'share_type' => 'share_type',
		'cpd_types' => 'cpd_types',
		'contacts' => 'contacts',
		'cpd_providers' => 'cpd_providers',
		'transactions_rental' => 'transactions_rental',
		'cpd_trainings_details' => 'cpd_trainings_details',
		'transactions_admin' => 'transactions-admin',
		'parties_involved' => 'parties_involved',
		'cobroke_external_comm' => 'cobroke_external_comm',
		'pii_agency' => 'pii_agency',
		'cobroke_internal_comm' => 'cobroke_internal_comm',
		'gst_incl' => 'gst_incl',
		'transactions_lcsc' => 'transactions_lcsc',
		'eat_user_subscriptions' => 'eat_user_subscriptions',
		'transactions_jtc_lease' => 'transactions_jtc_lease',
		'parties_involved_count' => 'parties_involved_count',
		'parties_involved_buyer' => 'parties_involved_buyer',
		'parties_involved_tenant' => 'parties_involved_tenant',
		'salutation' => 'salutation',
		'country' => 'country',
		'properties_owner' => 'properties_owner',
		'str' => 'str',
		'rental_main_details' => 'rental_main_details',
		'form5' => 'form5',
		'form1' => 'form1',
		'awards_search' => 'awards-search',
		'eat_users_user' => 'eat_users_user',
		'qualifications' => 'qualifications',
		'my_comm' => 'my_comm',
		'districts' => 'districts',
		'transactions_sale' => 'transactions_sale',
		'hdb_scheme' => 'hdb_scheme',
		'agent_nametag_user' => 'agent_nametag_user',
		'default_pg' => 'default_pg',
		'parties_involved_lcsc' => 'parties_involved_lcsc',
		'agency' => 'agency',
		'represent_type' => 'represent_type',
		'transactions_prop_mng' => 'transactions_prop_mng',
		'lor4_lease_due1' => 'lor4_lease_due1',
		'invcustomers1' => 'invcustomers1',
		'form_all' => 'form_all',
		'lease_due_pub' => 'lease_due_pub',
		'cobroke_internal' => 'cobroke_internal',
		'lease_tenure2' => 'lease_tenure2',
		'cdd_measures' => 'cdd_measures',
		'payment_term' => 'payment_term',
		'cdd_checklist' => 'cdd_checklist',
		'conflect_descriptions' => 'conflect_descriptions',
		'lease_due' => 'lease_due',
		'properties' => 'properties',
		'str_admin' => 'str-admin',
		'nationality' => 'nationality',
		'form3' => 'form3',
		'form7' => 'form7',
		'percentage' => 'percentage',
		'party_type' => 'party_type',
		'agents' => 'agents',
		'doc_upload' => 'doc_upload',
		'insurers_user' => 'insurers_user',
		'insurers' => 'insurers',
		'pii_category' => 'pii_category',
		'default_pg_default' => 'default_pg_default',
		'prop_type' => 'prop_type',
		'cdd_checklist_admin' => 'cdd_checklist-admin',
		'ownership_kind' => 'ownership_kind',
		'pii_indvd_agency' => 'pii_indvd_agency',
		'cpd_trainings_user' => 'cpd_trainings_user',
		'dollars' => 'dollars',
		'external_party_comm' => 'external_party_comm',
		'cpd_trainings' => 'cpd_trainings',
		'invcustomers' => 'invcustomers',
		'parties_involved_landlord' => 'parties_involved_landlord',
		'hdb_towns' => 'hdb_towns',
		'external_party' => 'external_party',
		'my_comm_admin' => 'my_comm_admin',
		'pii_agency_user' => 'pii_agency_user',
		'agent_nametag' => 'agent_nametag',
		'rental_main_detail_occupier' => 'rental_main_detail_occupier',
		'ownership_typeid' => 'ownership_typeid',
		'rental_main_journal' => 'rental_main_journal',
		'cobroke_external' => 'cobroke_external',
		'cpd_records' => 'cpd_records',
		'race' => 'race',
		'loginattempts' => 'loginattempts',
		'eat_users' => 'eat_users',
		'cpd_period' => 'cpd_period',
		'reply_lister' => 'reply_lister',
		'cdd_measures_admin' => 'cdd_measures-admin',
		'gst' => 'gst',
		'cpd_hours' => 'cpd_hours',
		'fsbo' => 'fsbo',
		'parties_involved_seller' => 'parties_involved_seller',
		'rental_main_properties' => 'rental_main_properties',
		'cdd_checklist1' => 'cdd_checklist1',
		'cpd_trainers' => 'cpd_trainers',
		'transactions' => 'transactions',
		'transact_party' => 'transact_party',
		'interpretation' => 'interpretation',
		'thanku' => 'thanku',
		'lease_tenure3' => 'lease_tenure3',
		'transaction_party_involved' => 'transaction_party_involved',
		'form6' => 'form6',
		'form2' => 'form2',
		'forms' => 'forms',
		'transactions_chart_pub' => 'transactions_chart_pub' 
	),
	'events' => array( 
		array(
			'gid' => 192471,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'A terms Note' 
		),
		array(
			'gid' => 192431,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'A4 pg end' 
		),
		array(
			'gid' => 192248,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'A4 pg start' 
		),
		array(
			'gid' => 192538,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Account_for__payment' 
		),
		array(
			'gid' => 192230,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'account_for_payment_snippet' 
		),
		array(
			'gid' => 192391,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Account_for_payment_view' 
		),
		array(
			'gid' => 192278,
			'type' => 'EVENT_BUTTON',
			'name' => 'Add_files' 
		),
		array(
			'gid' => 192311,
			'type' => 'EVENT_BUTTON',
			'name' => 'Add_folder' 
		),
		array(
			'gid' => 192521,
			'type' => 'EVENT_BUTTON',
			'name' => 'Add_folder1' 
		),
		array(
			'gid' => 192492,
			'type' => 'EVENT_BUTTON',
			'name' => 'Add_folder31' 
		),
		array(
			'gid' => 192548,
			'type' => 'EVENT_BUTTON',
			'name' => 'Add_item' 
		),
		array(
			'gid' => 192245,
			'type' => 'EVENT_BUTTON',
			'name' => 'Add_new_listing1' 
		),
		array(
			'gid' => 192469,
			'type' => 'EVENT_BUTTON',
			'name' => 'Add_new_listing2' 
		),
		array(
			'gid' => 192263,
			'type' => 'EVENT_BUTTON',
			'name' => 'Add_New_Listing3' 
		),
		array(
			'gid' => 192315,
			'type' => 'EVENT_BUTTON',
			'name' => 'Add_new_listing4' 
		),
		array(
			'gid' => 192231,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Additional terms' 
		),
		array(
			'gid' => 192491,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Address' 
		),
		array(
			'gid' => 192327,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'After esign save' 
		),
		array(
			'gid' => 192460,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Alert_update_agency_address' 
		),
		array(
			'gid' => 192436,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Alert_update_profile' 
		),
		array(
			'gid' => 192294,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Any dispute between the Seller' 
		),
		array(
			'gid' => 192558,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Any dispute between the Tenant' 
		),
		array(
			'gid' => 192298,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'API comment' 
		),
		array(
			'gid' => 192490,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'API Header' 
		),
		array(
			'gid' => 192466,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'apikey' 
		),
		array(
			'gid' => 192540,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Applicable Law and Dispute Resolution' 
		),
		array(
			'gid' => 192443,
			'type' => 'EVENT_BUTTON',
			'name' => 'Approve11' 
		),
		array(
			'gid' => 192246,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Arbitration' 
		),
		array(
			'gid' => 192489,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Attendance Date' 
		),
		array(
			'gid' => 192334,
			'type' => 'EVENT_BUTTON',
			'name' => 'Back_to_list' 
		),
		array(
			'gid' => 192522,
			'type' => 'EVENT_BUTTON',
			'name' => 'Back_to_list1' 
		),
		array(
			'gid' => 192306,
			'type' => 'EVENT_BUTTON',
			'name' => 'Back_to_list2' 
		),
		array(
			'gid' => 192282,
			'type' => 'EVENT_BUTTON',
			'name' => 'Back_to_list3' 
		),
		array(
			'gid' => 192437,
			'type' => 'EVENT_BUTTON',
			'name' => 'Back_to_list4' 
		),
		array(
			'gid' => 192428,
			'type' => 'EVENT_BUTTON',
			'name' => 'Back_to_list41' 
		),
		array(
			'gid' => 192326,
			'type' => 'EVENT_BUTTON',
			'name' => 'Back_to_menu' 
		),
		array(
			'gid' => 192456,
			'type' => 'EVENT_BUTTON',
			'name' => 'Back_to_tx_edit' 
		),
		array(
			'gid' => 192272,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Breadcrumbs1' 
		),
		array(
			'gid' => 192448,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Breadcrumbs2' 
		),
		array(
			'gid' => 192321,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'calc_tax' 
		),
		array(
			'gid' => 192317,
			'type' => 'EVENT_BUTTON',
			'name' => 'Cancel' 
		),
		array(
			'gid' => 192560,
			'type' => 'EVENT_BUTTON',
			'name' => 'Cancel1' 
		),
		array(
			'gid' => 192350,
			'type' => 'EVENT_BUTTON',
			'name' => 'Cancel2' 
		),
		array(
			'gid' => 192369,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'CDD checklist text' 
		),
		array(
			'gid' => 192507,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'CDD fore text' 
		),
		array(
			'gid' => 192413,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'CDD questionnaire text' 
		),
		array(
			'gid' => 192215,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_1.1' 
		),
		array(
			'gid' => 192386,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_1.2' 
		),
		array(
			'gid' => 192578,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_1.3' 
		),
		array(
			'gid' => 192223,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_2.1' 
		),
		array(
			'gid' => 192395,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_2.2' 
		),
		array(
			'gid' => 192221,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_3.1' 
		),
		array(
			'gid' => 192396,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_3.2' 
		),
		array(
			'gid' => 192228,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_4.1' 
		),
		array(
			'gid' => 192226,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_5.1' 
		),
		array(
			'gid' => 192250,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_5a' 
		),
		array(
			'gid' => 192475,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_5b' 
		),
		array(
			'gid' => 192510,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_5c' 
		),
		array(
			'gid' => 192320,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_5d' 
		),
		array(
			'gid' => 192252,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_5e' 
		),
		array(
			'gid' => 192485,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_5f' 
		),
		array(
			'gid' => 192502,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_5g' 
		),
		array(
			'gid' => 192328,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_5h' 
		),
		array(
			'gid' => 192262,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_5i' 
		),
		array(
			'gid' => 192461,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_checklist_5j' 
		),
		array(
			'gid' => 192269,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_1' 
		),
		array(
			'gid' => 192218,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_1.a' 
		),
		array(
			'gid' => 192254,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_1.a1' 
		),
		array(
			'gid' => 192479,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_1.a2' 
		),
		array(
			'gid' => 192382,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_1b' 
		),
		array(
			'gid' => 192260,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_1b.1' 
		),
		array(
			'gid' => 192450,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_2' 
		),
		array(
			'gid' => 192213,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_2a1' 
		),
		array(
			'gid' => 192419,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_2a2' 
		),
		array(
			'gid' => 192541,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_2a3' 
		),
		array(
			'gid' => 192251,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_2b1' 
		),
		array(
			'gid' => 192483,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_2b2' 
		),
		array(
			'gid' => 192535,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_3' 
		),
		array(
			'gid' => 192261,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_3a' 
		),
		array(
			'gid' => 192255,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_3b1' 
		),
		array(
			'gid' => 192480,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_3b2' 
		),
		array(
			'gid' => 192289,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_4' 
		),
		array(
			'gid' => 192210,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_4a1' 
		),
		array(
			'gid' => 192411,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_4a2' 
		),
		array(
			'gid' => 192542,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_4a3' 
		),
		array(
			'gid' => 192242,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_4b1' 
		),
		array(
			'gid' => 192473,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_4b2' 
		),
		array(
			'gid' => 192513,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_4b3' 
		),
		array(
			'gid' => 192274,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_5' 
		),
		array(
			'gid' => 192209,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_5a1' 
		),
		array(
			'gid' => 192414,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_5a2' 
		),
		array(
			'gid' => 192244,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_5b1' 
		),
		array(
			'gid' => 192467,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_5b2' 
		),
		array(
			'gid' => 192275,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_5c1' 
		),
		array(
			'gid' => 192434,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_5c2' 
		),
		array(
			'gid' => 192525,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_5c3' 
		),
		array(
			'gid' => 192300,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_5c4' 
		),
		array(
			'gid' => 192451,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_6' 
		),
		array(
			'gid' => 192206,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_6a1' 
		),
		array(
			'gid' => 192407,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_6a2' 
		),
		array(
			'gid' => 192249,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_6b1' 
		),
		array(
			'gid' => 192474,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'cdd_measures_6b2' 
		),
		array(
			'gid' => 192332,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'CEA F1 text' 
		),
		array(
			'gid' => 192531,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'CEA F2 text' 
		),
		array(
			'gid' => 192219,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'CEA F3 text' 
		),
		array(
			'gid' => 192212,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'CEA F4 text' 
		),
		array(
			'gid' => 192495,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'CEA F5 text' 
		),
		array(
			'gid' => 192290,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'CEA F6 text' 
		),
		array(
			'gid' => 192390,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'CEA F7 text' 
		),
		array(
			'gid' => 192367,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'CEA F8 text' 
		),
		array(
			'gid' => 192371,
			'type' => 'EVENT_FIELD',
			'name' => 'change_item' 
		),
		array(
			'gid' => 192338,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'class page end' 
		),
		array(
			'gid' => 192515,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Class page start' 
		),
		array(
			'gid' => 192421,
			'type' => 'EVENT_BUTTON',
			'name' => 'Clear_date1' 
		),
		array(
			'gid' => 192462,
			'type' => 'EVENT_BUTTON',
			'name' => 'Clear_sign_seller1' 
		),
		array(
			'gid' => 192417,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Click date view details' 
		),
		array(
			'gid' => 192523,
			'type' => 'EVENT_BUTTON',
			'name' => 'Close' 
		),
		array(
			'gid' => 192438,
			'type' => 'EVENT_BUTTON',
			'name' => 'Convert_to_word' 
		),
		array(
			'gid' => 192342,
			'type' => 'EVENT_BUTTON',
			'name' => 'Create_folder' 
		),
		array(
			'gid' => 192500,
			'type' => 'EVENT_BUTTON',
			'name' => 'Create_PDF' 
		),
		array(
			'gid' => 192387,
			'type' => 'EVENT_BUTTON',
			'name' => 'create_pdf_filename' 
		),
		array(
			'gid' => 192365,
			'type' => 'EVENT_BUTTON',
			'name' => 'CreatePDF1' 
		),
		array(
			'gid' => 192293,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Current_folder1' 
		),
		array(
			'gid' => 192268,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Customer Settings' 
		),
		array(
			'gid' => 192344,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Date:' 
		),
		array(
			'gid' => 192299,
			'type' => 'EVENT_BUTTON',
			'name' => 'De_activate_selected1' 
		),
		array(
			'gid' => 192325,
			'type' => 'EVENT_BUTTON',
			'name' => 'Delete_cdd_item' 
		),
		array(
			'gid' => 192455,
			'type' => 'EVENT_BUTTON',
			'name' => 'Delete_cddchecklist' 
		),
		array(
			'gid' => 192385,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'doc_files_breadcrumb' 
		),
		array(
			'gid' => 192232,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'doc_files_dropzone' 
		),
		array(
			'gid' => 192512,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'doc_files_list_path' 
		),
		array(
			'gid' => 192376,
			'type' => 'EVENT_BUTTON',
			'name' => 'Download' 
		),
		array(
			'gid' => 192316,
			'type' => 'EVENT_BUTTON',
			'name' => 'Download1' 
		),
		array(
			'gid' => 192499,
			'type' => 'EVENT_BUTTON',
			'name' => 'Download2' 
		),
		array(
			'gid' => 192271,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Dropzone' 
		),
		array(
			'gid' => 192281,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Duties of EA' 
		),
		array(
			'gid' => 192243,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit' 
		),
		array(
			'gid' => 192222,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit_form1' 
		),
		array(
			'gid' => 192503,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit_form11' 
		),
		array(
			'gid' => 192392,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit_form2' 
		),
		array(
			'gid' => 192575,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit_form3' 
		),
		array(
			'gid' => 192465,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit_form41' 
		),
		array(
			'gid' => 192225,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit_form5' 
		),
		array(
			'gid' => 192398,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit_form6' 
		),
		array(
			'gid' => 192573,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit_form7' 
		),
		array(
			'gid' => 192349,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit_form8' 
		),
		array(
			'gid' => 192488,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit1' 
		),
		array(
			'gid' => 192366,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit10' 
		),
		array(
			'gid' => 192201,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit11' 
		),
		array(
			'gid' => 192426,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit12' 
		),
		array(
			'gid' => 192557,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit13' 
		),
		array(
			'gid' => 192356,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit14' 
		),
		array(
			'gid' => 192318,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit3' 
		),
		array(
			'gid' => 192470,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit5' 
		),
		array(
			'gid' => 192444,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit6112' 
		),
		array(
			'gid' => 192514,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit61122' 
		),
		array(
			'gid' => 192295,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit612' 
		),
		array(
			'gid' => 192527,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit62' 
		),
		array(
			'gid' => 192323,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit7' 
		),
		array(
			'gid' => 192496,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit8' 
		),
		array(
			'gid' => 192457,
			'type' => 'EVENT_BUTTON',
			'name' => 'Edit9' 
		),
		array(
			'gid' => 192577,
			'type' => 'EVENT_BUTTON',
			'name' => 'esign_form5' 
		),
		array(
			'gid' => 192346,
			'type' => 'EVENT_BUTTON',
			'name' => 'esign_form6' 
		),
		array(
			'gid' => 192214,
			'type' => 'EVENT_BUTTON',
			'name' => 'esign_form7' 
		),
		array(
			'gid' => 192378,
			'type' => 'EVENT_BUTTON',
			'name' => 'esign_form8' 
		),
		array(
			'gid' => 192353,
			'type' => 'EVENT_BUTTON',
			'name' => 'esign2' 
		),
		array(
			'gid' => 192229,
			'type' => 'EVENT_BUTTON',
			'name' => 'esign3' 
		),
		array(
			'gid' => 192383,
			'type' => 'EVENT_BUTTON',
			'name' => 'esign4' 
		),
		array(
			'gid' => 192415,
			'type' => 'EVENT_BUTTON',
			'name' => 'esigned_form3' 
		),
		array(
			'gid' => 192494,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Explanatory notes' 
		),
		array(
			'gid' => 192576,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'F1 Pg5 note bottom' 
		),
		array(
			'gid' => 192211,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'F4 Pg5 note bottom' 
		),
		array(
			'gid' => 192409,
			'type' => 'EVENT_BUTTON',
			'name' => 'Find_Address' 
		),
		array(
			'gid' => 192357,
			'type' => 'EVENT_BUTTON',
			'name' => 'Find_Address_prop' 
		),
		array(
			'gid' => 192322,
			'type' => 'EVENT_BUTTON',
			'name' => 'Find_Address1' 
		),
		array(
			'gid' => 192509,
			'type' => 'EVENT_BUTTON',
			'name' => 'Find_Address2' 
		),
		array(
			'gid' => 192476,
			'type' => 'EVENT_BUTTON',
			'name' => 'Find_Address3' 
		),
		array(
			'gid' => 192256,
			'type' => 'EVENT_BUTTON',
			'name' => 'Find_Address4' 
		),
		array(
			'gid' => 192319,
			'type' => 'EVENT_BUTTON',
			'name' => 'Find_Address5' 
		),
		array(
			'gid' => 192508,
			'type' => 'EVENT_BUTTON',
			'name' => 'Find_Address6' 
		),
		array(
			'gid' => 192394,
			'type' => 'EVENT_BUTTON',
			'name' => 'Find_Address61' 
		),
		array(
			'gid' => 192481,
			'type' => 'EVENT_BUTTON',
			'name' => 'Find_Address7' 
		),
		array(
			'gid' => 192336,
			'type' => 'EVENT_BUTTON',
			'name' => 'Form_save___close' 
		),
		array(
			'gid' => 192534,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form-appointment by seller' 
		),
		array(
			'gid' => 192352,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form-appointment by tenant' 
		),
		array(
			'gid' => 192381,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Form1 name' 
		),
		array(
			'gid' => 192372,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form1_3.1' 
		),
		array(
			'gid' => 192543,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form1_3.2' 
		),
		array(
			'gid' => 192564,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form1_4-note' 
		),
		array(
			'gid' => 192240,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form1_4b' 
		),
		array(
			'gid' => 192347,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form1_4c' 
		),
		array(
			'gid' => 192468,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form1_gst if yes' 
		),
		array(
			'gid' => 192370,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form1_gst payable' 
		),
		array(
			'gid' => 192339,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form1_party_to_agree' 
		),
		array(
			'gid' => 192337,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form1-The above seller' 
		),
		array(
			'gid' => 192472,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form1.1' 
		),
		array(
			'gid' => 192241,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form1.2' 
		),
		array(
			'gid' => 192202,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Form2 name' 
		),
		array(
			'gid' => 192506,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Form3 name' 
		),
		array(
			'gid' => 192526,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Form4 name' 
		),
		array(
			'gid' => 192478,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form4_4-note' 
		),
		array(
			'gid' => 192335,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form4_4b-tenant' 
		),
		array(
			'gid' => 192330,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form4_4c' 
		),
		array(
			'gid' => 192267,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form4-The above tenant' 
		),
		array(
			'gid' => 192486,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form4.1' 
		),
		array(
			'gid' => 192257,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'form4.2' 
		),
		array(
			'gid' => 192238,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Form5 name' 
		),
		array(
			'gid' => 192427,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Form6 name' 
		),
		array(
			'gid' => 192312,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Form7 name' 
		),
		array(
			'gid' => 192435,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Form8 name' 
		),
		array(
			'gid' => 192314,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Go to top' 
		),
		array(
			'gid' => 192351,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'header' 
		),
		array(
			'gid' => 192354,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'header1' 
		),
		array(
			'gid' => 192205,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'hidden_subtotal' 
		),
		array(
			'gid' => 192237,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'hidden_total' 
		),
		array(
			'gid' => 192429,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Hr line' 
		),
		array(
			'gid' => 192358,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'If the dispute remains outstanding Seller' 
		),
		array(
			'gid' => 192348,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Interpreter id3' 
		),
		array(
			'gid' => 192324,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Interpreter ID4' 
		),
		array(
			'gid' => 192536,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Interpreter\'s NRIC3' 
		),
		array(
			'gid' => 192537,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'invcustomers_head_text' 
		),
		array(
			'gid' => 192424,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Invoice_date_for_payment' 
		),
		array(
			'gid' => 192545,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'invoicedetails_import_link' 
		),
		array(
			'gid' => 192425,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'invoices_snippet' 
		),
		array(
			'gid' => 192380,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'invoices_snippet3' 
		),
		array(
			'gid' => 192235,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'invoices_snippet4' 
		),
		array(
			'gid' => 192566,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'invoices_snippet6' 
		),
		array(
			'gid' => 192556,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Licence no' 
		),
		array(
			'gid' => 192447,
			'type' => 'EVENT_BUTTON',
			'name' => 'mark_tx_complete' 
		),
		array(
			'gid' => 192307,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Mediation First' 
		),
		array(
			'gid' => 192270,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Name estate agent' 
		),
		array(
			'gid' => 192208,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Name salesperson' 
		),
		array(
			'gid' => 192393,
			'type' => 'EVENT_BUTTON',
			'name' => 'New_Button' 
		),
		array(
			'gid' => 192302,
			'type' => 'EVENT_BUTTON',
			'name' => 'New_Button1' 
		),
		array(
			'gid' => 192432,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'NRIC No' 
		),
		array(
			'gid' => 192363,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'of GST' 
		),
		array(
			'gid' => 192286,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Other_Header' 
		),
		array(
			'gid' => 192284,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P5 sign by buyer' 
		),
		array(
			'gid' => 192552,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P5 sign by landlord' 
		),
		array(
			'gid' => 192374,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P5 sign by tenant' 
		),
		array(
			'gid' => 192405,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.1' 
		),
		array(
			'gid' => 192570,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.10' 
		),
		array(
			'gid' => 192400,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.11' 
		),
		array(
			'gid' => 192446,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.12 sale' 
		),
		array(
			'gid' => 192207,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.2' 
		),
		array(
			'gid' => 192373,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.3' 
		),
		array(
			'gid' => 192539,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.4' 
		),
		array(
			'gid' => 192422,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.5' 
		),
		array(
			'gid' => 192345,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.6 buyer' 
		),
		array(
			'gid' => 192368,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.7' 
		),
		array(
			'gid' => 192524,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.8 purchase' 
		),
		array(
			'gid' => 192247,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P6.9 seller' 
		),
		array(
			'gid' => 192547,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P7 advance the seller interest' 
		),
		array(
			'gid' => 192292,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P7 advise seller on eligibility to sell' 
		),
		array(
			'gid' => 192554,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P7 assist seller of flat to submit forms' 
		),
		array(
			'gid' => 192532,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P7 assist seller to enter agreement' 
		),
		array(
			'gid' => 192331,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P7 comply with all reasonable instructions' 
		),
		array(
			'gid' => 192529,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P7 explain and go thru checklist' 
		),
		array(
			'gid' => 192388,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P7 note' 
		),
		array(
			'gid' => 192549,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P7 promptly forward offers' 
		),
		array(
			'gid' => 192563,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P7 provide reasonable assistance' 
		),
		array(
			'gid' => 192559,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'P7 represent seller in negotiation' 
		),
		array(
			'gid' => 192399,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Page A4 end' 
		),
		array(
			'gid' => 192430,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Page A4 start' 
		),
		array(
			'gid' => 192204,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'PayCart' 
		),
		array(
			'gid' => 192340,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'PayPal Form' 
		),
		array(
			'gid' => 192550,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'PayPal Settings' 
		),
		array(
			'gid' => 192517,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Pg 5 Signed by' 
		),
		array(
			'gid' => 192458,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Pg break' 
		),
		array(
			'gid' => 192518,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'pg1' 
		),
		array(
			'gid' => 192301,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'pg2' 
		),
		array(
			'gid' => 192285,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'pg3' 
		),
		array(
			'gid' => 192433,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'pg4' 
		),
		array(
			'gid' => 192528,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'pg5' 
		),
		array(
			'gid' => 192519,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Pg5 Signed by seller' 
		),
		array(
			'gid' => 192291,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Pg5 top note' 
		),
		array(
			'gid' => 192310,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'pg6' 
		),
		array(
			'gid' => 192279,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'pg7' 
		),
		array(
			'gid' => 192364,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'popup_snippet' 
		),
		array(
			'gid' => 192553,
			'type' => 'EVENT_BUTTON',
			'name' => 'Post_selected1' 
		),
		array(
			'gid' => 192264,
			'type' => 'EVENT_BUTTON',
			'name' => 'Print_button' 
		),
		array(
			'gid' => 192403,
			'type' => 'EVENT_BUTTON',
			'name' => 'Print_page' 
		),
		array(
			'gid' => 192343,
			'type' => 'EVENT_BUTTON',
			'name' => 'Print_view' 
		),
		array(
			'gid' => 192453,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Prop_inspection_and_cobroking' 
		),
		array(
			'gid' => 192571,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Property Address' 
		),
		array(
			'gid' => 192217,
			'type' => 'EVENT_BUTTON',
			'name' => 'Re_post_selected31' 
		),
		array(
			'gid' => 192303,
			'type' => 'EVENT_BUTTON',
			'name' => 'Re_post_selected4' 
		),
		array(
			'gid' => 192416,
			'type' => 'EVENT_BUTTON',
			'name' => 'Reject21' 
		),
		array(
			'gid' => 192544,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Remark' 
		),
		array(
			'gid' => 192420,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Return to top' 
		),
		array(
			'gid' => 192313,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Return to top-form' 
		),
		array(
			'gid' => 192551,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Row full height' 
		),
		array(
			'gid' => 192565,
			'type' => 'EVENT_BUTTON',
			'name' => 'Save' 
		),
		array(
			'gid' => 192283,
			'type' => 'EVENT_BUTTON',
			'name' => 'Save___close' 
		),
		array(
			'gid' => 192296,
			'type' => 'EVENT_BUTTON',
			'name' => 'Save___post' 
		),
		array(
			'gid' => 192355,
			'type' => 'EVENT_BUTTON',
			'name' => 'Save___post11' 
		),
		array(
			'gid' => 192516,
			'type' => 'EVENT_BUTTON',
			'name' => 'Save___post3' 
		),
		array(
			'gid' => 192360,
			'type' => 'EVENT_BUTTON',
			'name' => 'Save___view_form4' 
		),
		array(
			'gid' => 192572,
			'type' => 'EVENT_BUTTON',
			'name' => 'Save_as_Draft' 
		),
		array(
			'gid' => 192379,
			'type' => 'EVENT_BUTTON',
			'name' => 'Save_as_Draft1' 
		),
		array(
			'gid' => 192482,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'SCHEDULE 1' 
		),
		array(
			'gid' => 192511,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Schedule 2' 
		),
		array(
			'gid' => 192288,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Schedule and notes' 
		),
		array(
			'gid' => 192287,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'selectall_snippet' 
		),
		array(
			'gid' => 192520,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'seller comm' 
		),
		array(
			'gid' => 192203,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Seller Name' 
		),
		array(
			'gid' => 192561,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Seller1 name' 
		),
		array(
			'gid' => 192359,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Seller2 name' 
		),
		array(
			'gid' => 192487,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Seller3 name' 
		),
		array(
			'gid' => 192439,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Seller4 name' 
		),
		array(
			'gid' => 192408,
			'type' => 'EVENT_BUTTON',
			'name' => 'Send_Invoice' 
		),
		array(
			'gid' => 192220,
			'type' => 'EVENT_BUTTON',
			'name' => 'Send_Invoice1' 
		),
		array(
			'gid' => 192239,
			'type' => 'EVENT_BUTTON',
			'name' => 'Sign_form1' 
		),
		array(
			'gid' => 192402,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Buyer (1)' 
		),
		array(
			'gid' => 192441,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Buyer (2)' 
		),
		array(
			'gid' => 192484,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Buyer (3)' 
		),
		array(
			'gid' => 192562,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Buyer (4)' 
		),
		array(
			'gid' => 192259,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by interpreter:' 
		),
		array(
			'gid' => 192477,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Landlord (1)' 
		),
		array(
			'gid' => 192406,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Landlord (2)' 
		),
		array(
			'gid' => 192389,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Landlord (3)' 
		),
		array(
			'gid' => 192497,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Landlord (4)' 
		),
		array(
			'gid' => 192442,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Seller (1)' 
		),
		array(
			'gid' => 192401,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Seller (2)' 
		),
		array(
			'gid' => 192423,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Seller (3)' 
		),
		array(
			'gid' => 192530,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Seller (4)' 
		),
		array(
			'gid' => 192377,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Tenant (1)' 
		),
		array(
			'gid' => 192449,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Tenant (2)' 
		),
		array(
			'gid' => 192459,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Tenant (3)' 
		),
		array(
			'gid' => 192574,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed by Tenant (4)' 
		),
		array(
			'gid' => 192297,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signed_agent' 
		),
		array(
			'gid' => 192412,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Signing note' 
		),
		array(
			'gid' => 192445,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Slash mark' 
		),
		array(
			'gid' => 192418,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'snippet' 
		),
		array(
			'gid' => 192454,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Stripe Label Button' 
		),
		array(
			'gid' => 192546,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Stripe Settings' 
		),
		array(
			'gid' => 192276,
			'type' => 'EVENT_BUTTON',
			'name' => 'Submit' 
		),
		array(
			'gid' => 192273,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'sum_by_taxs' 
		),
		array(
			'gid' => 192463,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'sum_by_taxs_view' 
		),
		array(
			'gid' => 192361,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Sup 1' 
		),
		array(
			'gid' => 192397,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'tax_and_pricing_settings_text' 
		),
		array(
			'gid' => 192308,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Tenant1 name' 
		),
		array(
			'gid' => 192504,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Tenant2 name' 
		),
		array(
			'gid' => 192200,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Tenant3 name' 
		),
		array(
			'gid' => 192236,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Tenant4 name' 
		),
		array(
			'gid' => 192493,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'The A terms cannot conflict' 
		),
		array(
			'gid' => 192234,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'The EA shall' 
		),
		array(
			'gid' => 192567,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'The Estate agent may ask seller' 
		),
		array(
			'gid' => 192555,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'The Estate Agent may ask seller' 
		),
		array(
			'gid' => 192266,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'The parties shall for seller' 
		),
		array(
			'gid' => 192304,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'The schedule and Notes' 
		),
		array(
			'gid' => 192498,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'This agreement shall be' 
		),
		array(
			'gid' => 192410,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Through the interpretation of' 
		),
		array(
			'gid' => 192227,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'transactions_admin_side_nav' 
		),
		array(
			'gid' => 192253,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'transactions_comm' 
		),
		array(
			'gid' => 192404,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'transactions_lcsc_snippet' 
		),
		array(
			'gid' => 192464,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'transactions_side_nav' 
		),
		array(
			'gid' => 192258,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Tx list pg description' 
		),
		array(
			'gid' => 192341,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'Update form text' 
		),
		array(
			'gid' => 192265,
			'type' => 'EVENT_ONSCREEN',
			'name' => 'View Details click row' 
		),
		array(
			'gid' => 192501,
			'type' => 'EVENT_BUTTON',
			'name' => 'View_esign_form2' 
		),
		array(
			'gid' => 192568,
			'type' => 'EVENT_BUTTON',
			'name' => 'view_esigned_form6' 
		),
		array(
			'gid' => 192375,
			'type' => 'EVENT_BUTTON',
			'name' => 'view_esigned_form7' 
		),
		array(
			'gid' => 192216,
			'type' => 'EVENT_BUTTON',
			'name' => 'view_esigned_form8' 
		),
		array(
			'gid' => 192277,
			'type' => 'EVENT_BUTTON',
			'name' => 'View_form4' 
		),
		array(
			'gid' => 192329,
			'type' => 'EVENT_BUTTON',
			'name' => 'View_JTC_Lease' 
		),
		array(
			'gid' => 192224,
			'type' => 'EVENT_BUTTON',
			'name' => 'View_Rental' 
		),
		array(
			'gid' => 192505,
			'type' => 'EVENT_BUTTON',
			'name' => 'View_Rentals' 
		),
		array(
			'gid' => 192384,
			'type' => 'EVENT_BUTTON',
			'name' => 'View_Sales' 
		),
		array(
			'gid' => 192569,
			'type' => 'EVENT_BUTTON',
			'name' => 'View_signed_form' 
		),
		array(
			'gid' => 192362,
			'type' => 'EVENT_BUTTON',
			'name' => 'View_signed_form1' 
		),
		array(
			'gid' => 192333,
			'type' => 'EVENT_BUTTON',
			'name' => 'view_signed_form5' 
		),
		array(
			'gid' => 192233,
			'type' => 'EVENT_BUTTON',
			'name' => 'View_unsign_form5' 
		),
		array(
			'gid' => 192452,
			'type' => 'EVENT_BUTTON',
			'name' => 'view_unsign_form6' 
		),
		array(
			'gid' => 192533,
			'type' => 'EVENT_BUTTON',
			'name' => 'view_unsign_form7' 
		),
		array(
			'gid' => 192305,
			'type' => 'EVENT_BUTTON',
			'name' => 'view_unsign_form8' 
		),
		array(
			'gid' => 192440,
			'type' => 'EVENT_BUTTON',
			'name' => 'view_unsigned_form1' 
		),
		array(
			'gid' => 192280,
			'type' => 'EVENT_BUTTON',
			'name' => 'view_unsigned_form2' 
		),
		array(
			'gid' => 192309,
			'type' => 'EVENT_BUTTON',
			'name' => 'view_unsigned_form3' 
		) 
	),
	'languages' => array( 
		array(
			'name' => 'English',
			'nativeName' => 'English',
			'rtl' => false,
			'filename' => 'English.lng' 
		) 
	),
	'languageNames' => array( 
		'English' 
	),
	'defaultLanguage' => 'English',
	'detectDefaultLanguage' => true,
	'charset' => 'utf-8',
	'codepage' => 65001,
	'defaultConnID' => 'Tables',
	'wrConnectionID' => '',
	'settingsTable' => array(
		'connId' => '',
		'table' => '' 
	),
	'wizardBuild' => '43917',
	'projectBuild' => '4NMiuGMTfbj5',
	'projectTheme' => 'flatly',
	'projectSize' => 'normal',
	'customErrorMsg' => array(
		'text' => 'Error occured.',
		'type' => 0 
	),
	'cloudSettings' => array(
		'cloudAmazonRegion' => '',
		'cloudAmazonBucket' => '',
		'cloudAmazonAccessKey' => '',
		'cloudAmazonSecretKey' => '',
		'cloudWasabiRegion' => '',
		'cloudWasabiBucket' => '',
		'cloudWasabiAccessKey' => '',
		'cloudWasabiSecretKey' => '',
		'cloudGDriveClientId' => '',
		'cloudGDriveClientSecret' => '',
		'cloudOneDriveClientId' => '',
		'cloudOneDriveClientSecret' => '',
		'cloudOneDriveDrive' => '',
		'cloudOneDriveAccountType' => 0,
		'cloudOneDriveDirectoryId' => '',
		'cloudDropboxClientId' => '',
		'cloudDropboxClientSecret' => '' 
	),
	'mapSettings' => array(
		'embed' => true,
		'provider' => 0,
		'apikey' => '' 
	),
	'viewPluginsWithJS' => array( 
		 
	),
	'rtlLanguages' => array(
		'English' => false 
	),
	'smsSettings' => array(
		'smsProvider' => 4,
		'iBusername' => '',
		'iBpassword' => '',
		'iBsender' => '',
		'essUsername' => '',
		'essPassword' => '',
		'essSender' => '',
		'gwApiToken' => '',
		'gwSender' => '',
		'mbAuth' => '',
		'mbSender' => '',
		'twilioSID' => '',
		'twilioAuth' => '',
		'twilioNumber' => '',
		'phoneField' => '',
		'counryCode' => '+1',
		'wauUsername' => '',
		'wauPassword' => '',
		'wauSender' => '' 
	) 
);

?>