
Runner.pages.PageSettings.addPageEvent( 
	"parties_involved", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//validate required fields
var ctrl = Runner.getControl(pageid, 'cus_type');
var ctrlSalutation = Runner.getControl(pageid, 'salutation');
var ctrlName = Runner.getControl(pageid, 'name');
var ctrlNRIC = Runner.getControl(pageid, 'nric');
var ctrlRegNo = Runner.getControl(pageid, 'registration_no');
var ctrlRole = Runner.getControl(pageid, 'role');
var ctrlCountry = Runner.getControl(pageid, 'country_incorporation');
var ctrlIDtype = Runner.getControl(pageid, 'id_type');
//var ctrlIDtype1 = Runner.getControl(pageid, 'id_type1');
var ctrlAddress = Runner.getControl(pageid, 'address');
//var ctrlPostal = Runner.getControl(pageid, 'postal');
var ctrlBillAddress = Runner.getControl(pageid, 'billing_address');
var ctrlBillPostal = Runner.getControl(pageid, 'billing_postal');
var ctrlTel = Runner.getControl(pageid, 'tel');
var ctrlTelType = Runner.getControl(pageid, 'tel_type');
var ctrlEmail = Runner.getControl(pageid, 'email');
//var ctrlEmailType = Runner.getControl(pageid, 'email_type');
var ctrlTrade = Runner.getControl(pageid, 'trade');
var ctrlOffTel = Runner.getControl(pageid, 'office_tel');
var ctrlBizEmail = Runner.getControl(pageid, 'biz_email');
var ctrlContactPerson = Runner.getControl(pageid, 'contact_person');
var ctrlDesti = Runner.getControl(pageid, 'destination');
var ctrlContactID = Runner.getControl(pageid, 'contact_person_id');
var ctrlContactEmail = Runner.getControl(pageid, 'contact_email');
var ctrlMobile = Runner.getControl(pageid, 'mobile');
var ctrlContactPersonCell = Runner.getControl(pageid, 'contact_person_cell');

if(ctrl.getValue()=='ENTITY')
{

//pageObj.showField("cust_type");
pageObj.showField("role");
pageObj.showField("name");
pageObj.showField("salutation");
pageObj.hideField("nric");
pageObj.hideField("id_type");
pageObj.showField("address");
//pageObj.showField("postal");
pageObj.showField("billing_address");
pageObj.showField("billing_postal");

pageObj.hideField("tel");
pageObj.hideField("tel_type");
pageObj.hideField("mobile");
pageObj.hideField("email");
//pageObj.hideField("email_type");
//pageObj.toggleItem("checkbox_address", true ); 
//pageObj.toggleItem("find_address_pty_involved", true ); 
pageObj.toggleItem("entity_section", true ); 
//pageObj.toggleItem("personal_info", true );
}

if(ctrl.getValue()=='INDIVIDUAL')
{
//pageObj.showField("cust_type");
pageObj.showField("role");
pageObj.showField("name");
pageObj.showField("salutation");
pageObj.showField("nric");
pageObj.showField("id_type");
pageObj.showField("address");
//pageObj.showField("postal");
pageObj.showField("billing_address");
pageObj.showField("billing_postal");
pageObj.showField("tel");
pageObj.showField("tel_type");
pageObj.showField("mobile");
pageObj.showField("email");
//pageObj.showField("email_type");
//pageObj.toggleItem("checkbox_address", true ); 
//pageObj.toggleItem("find_address_pty_involved", true ); 
pageObj.toggleItem("entity_section", false ); 
//pageObj.toggleItem("personal_info", true );
}

ctrl.on('change',function(e){
if(this.getValue()=='ENTITY')
{

//pageObj.showField("cust_type");
pageObj.showField("role");
pageObj.showField("name");
pageObj.showField("salutation");
pageObj.hideField("nric");
pageObj.hideField("id_type");
pageObj.showField("address");
//pageObj.showField("postal");
pageObj.showField("billing_address");
pageObj.showField("billing_postal");

pageObj.hideField("tel");
pageObj.hideField("tel_type");
pageObj.hideField("mobile");
pageObj.hideField("email");
//pageObj.hideField("email_type");
//pageObj.toggleItem("checkbox_address", true ); 
//pageObj.toggleItem("find_address_pty_involved", true ); 
pageObj.toggleItem("entity_section", true ); 
//pageObj.toggleItem("personal_info", true );
}
if(this.getValue()=='INDIVIDUAL')
{
//pageObj.showField("cust_type");
pageObj.showField("role");
pageObj.showField("name");
pageObj.showField("salutation");
pageObj.showField("nric");
pageObj.showField("id_type");
pageObj.showField("address");
//pageObj.showField("postal");
pageObj.showField("billing_address");
pageObj.showField("billing_postal");
pageObj.showField("tel");
pageObj.showField("tel_type");
pageObj.showField("mobile");
pageObj.showField("email");
//pageObj.showField("email_type");
//pageObj.toggleItem("checkbox_address", true ); 
//pageObj.toggleItem("find_address_pty_involved", true ); 
pageObj.toggleItem("entity_section", false ); 
//pageObj.toggleItem("personal_info", true );
}
});

//copy address
var ctrlAdd = Runner.getControl(pageid, 'address');
var ctrlPost = Runner.getControl(pageid, 'postal');
var ctrlBillAdd = Runner.getControl(pageid, 'billing_address');
var ctrlBillPost = Runner.getControl(pageid, 'billing_postal');
$('#check').click(function() {
if($(this).is(':checked'))
{
ctrlBillAdd.setValue(ctrlAdd.getValue());
ctrlBillPost.setValue(ctrlPost.getValue());
}
else{
ctrlBillAdd.setValue('');
ctrlBillPost.setValue('');
}
});

//reload page after record save
/*
this.on('afterClose'||this.on('afterSave'), function() {
location.reload();
});


this.on('afterSave', function() {
localStorage["posStorage"] = $(window).scrollTop();
location.reload();
});
*/
});


Runner.pages.PageSettings.addPageEvent( 
	"parties_involved", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrl = Runner.getControl(pageid, 'cus_type');
var ctrlSalutation = Runner.getControl(pageid, 'salutation');
var ctrlName = Runner.getControl(pageid, 'name');
var ctrlNRIC = Runner.getControl(pageid, 'nric');
var ctrlRegNo = Runner.getControl(pageid, 'registration_no');
var ctrlRole = Runner.getControl(pageid, 'role');
var ctrlCountry = Runner.getControl(pageid, 'country_incorporation');
var ctrlIDtype = Runner.getControl(pageid, 'id_type');
var ctrlIDtype1 = Runner.getControl(pageid, 'id_type1');
var ctrlAddress = Runner.getControl(pageid, 'address');
//var ctrlPostal = Runner.getControl(pageid, 'postal');
var ctrlBillAddress = Runner.getControl(pageid, 'billing_address');
var ctrlBillPostal = Runner.getControl(pageid, 'billing_postal');
var ctrlTel = Runner.getControl(pageid, 'tel');
var ctrlTelType = Runner.getControl(pageid, 'tel_type');
var ctrlEmail = Runner.getControl(pageid, 'email');
//var ctrlEmailType = Runner.getControl(pageid, 'email_type');
var ctrlTrade = Runner.getControl(pageid, 'trade');
var ctrlOffTel = Runner.getControl(pageid, 'office_tel');
var ctrlBizEmail = Runner.getControl(pageid, 'biz_email');
var ctrlContactPerson = Runner.getControl(pageid, 'contact_person');
var ctrlDesti = Runner.getControl(pageid, 'destination');
var ctrlContactID = Runner.getControl(pageid, 'contact_person_id');
var ctrlContactEmail = Runner.getControl(pageid, 'contact_email');
var ctrlMobile = Runner.getControl(pageid, 'mobile');
var ctrlContactPersonCell = Runner.getControl(pageid, 'contact_person_cell');

ctrl.on('change', function(e) {
if (this.getValue() == 'ENTITY')
{
pageObj.hideField("nric");
pageObj.hideField("id_type");
//pageObj.showField("cus_type");
pageObj.showField("role");
pageObj.showField("salutation");
pageObj.hideField("email");
pageObj.showField("address");
//pageObj.hideField("email_type");
pageObj.showField("billing_address");
pageObj.showField("billing_postal");
pageObj.hideField("tel");
pageObj.hideField("tel_type");
pageObj.hideField("mobile");
pageObj.toggleItem("entity_section", true ); 
//pageObj.toggleItem("checkbox_address", true ); 
//pageObj.toggleItem("find_address_pty_involved", true ); 
//pageObj.toggleItem("personal_info", true );
} 

if (this.getValue() == 'INDIVIDUAL')
{
//pageObj.showField("cust_type");
pageObj.showField("role");
pageObj.showField("name");
pageObj.showField("salutation");
pageObj.showField("nric");
pageObj.showField("id_type");
pageObj.showField("address");
//pageObj.showField("postal");
pageObj.showField("billing_address");
pageObj.showField("billing_postal");
pageObj.showField("tel");
pageObj.showField("tel_type");
pageObj.showField("mobile");
pageObj.showField("email");
//pageObj.showField("email_type");
//pageObj.toggleItem("checkbox_address", true ); 
//pageObj.toggleItem("find_address_pty_involved", true ); 
//pageObj.toggleItem("personal_info", true );
pageObj.toggleItem("entity_section", false ); 

} 

});

//copy address
var ctrlAdd = Runner.getControl(pageid, 'address');
var ctrlPost = Runner.getControl(pageid, 'postal');
var ctrlBillAdd = Runner.getControl(pageid, 'billing_address');
var ctrlBillPost = Runner.getControl(pageid, 'billing_postal');
$('#check').click(function() {
if($(this).is(':checked'))
{
ctrlBillAdd.setValue(ctrlAdd.getValue());
ctrlBillPost.setValue(ctrlPost.getValue());
}
else{
ctrlBillAdd.setValue('');
ctrlBillPost.setValue('');
}
});


this.on('afterClose'||this.on('afterSave'), function() {
location.reload();
});

/*
this.on('afterSave', function() {
localStorage["posStorage"] = $(window).scrollTop();
location.reload();
});
*/
});







