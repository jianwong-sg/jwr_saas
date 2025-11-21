
Runner.pages.PageSettings.addPageEvent( 
	"prop_cust", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlOwnerType = Runner.getControl(pageid, 'owner_type');
var ctrlOwnerKind = Runner.getControl(pageid, 'ownership_kind');
var ctrlName = Runner.getControl(pageid, 'name');
var ctrlNationality = Runner.getControl(pageid, 'nationality');
var ctrlGender = Runner.getControl(pageid, 'gender');
var ctrlDOB = Runner.getControl(pageid, 'dob');
var ctrlOccupation = Runner.getControl(pageid, 'occupation');
var ctrlNRIC = Runner.getControl(pageid, 'nric');
var ctrlIDType = Runner.getControl(pageid, 'id_type');
var ctrlAddress = Runner.getControl(pageid, 'address');
var ctrlPostal = Runner.getControl(pageid, 'postal');
var ctrlMobile = Runner.getControl(pageid, 'mobile');
var ctrlTel = Runner.getControl(pageid, 'tel');
var ctrlEmail = Runner.getControl(pageid, 'email');
var ctrlCountryIncorporate = Runner.getControl(pageid, 'country_incorporation');
var ctrlReg = Runner.getControl(pageid, 'registration');
var ctrlRegDate = Runner.getControl(pageid, 'reg_date');
var ctrlTrade = Runner.getControl(pageid, 'trade');
var ctrlOffTel = Runner.getControl(pageid, 'office_tel');
var ctrlBizEmail = Runner.getControl(pageid, 'biz_email');
var ctrlContactPerson = Runner.getControl(pageid, 'contact_person');
var ctrlContactID = Runner.getControl(pageid, 'contact_person_id');
var ctrlDesti = Runner.getControl(pageid, 'destination');
var ctrlContactPersonCell = Runner.getControl(pageid, 'contact_person_cell');
var ctrlContactEmail = Runner.getControl(pageid, 'contact_email');
var ctrlRemark = Runner.getControl(pageid, 'remarks');


ctrlOwnerType.on('change', function(e) {
if (this.getValue() == 'ENTITY')
{
pageObj.toggleItem("section_entity", true );
pageObj.toggleItem("section_individual", false );
pageObj.toggleItem("section_tx", false );

} 

if (this.getValue() == 'INDIVIDUAL')
{
pageObj.toggleItem("section_entity", false );
pageObj.toggleItem("section_individual", true );
pageObj.toggleItem("section_tx", true );

} 

});
});


Runner.pages.PageSettings.addPageEvent( 
	"prop_cust", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//validate required fields
var ctrlOwnerType = Runner.getControl(pageid, 'owner_type');
var ctrlOwnerKind = Runner.getControl(pageid, 'ownership_kind');
var ctrlName = Runner.getControl(pageid, 'name');
var ctrlNationality = Runner.getControl(pageid, 'nationality');
var ctrlGender = Runner.getControl(pageid, 'gender');
var ctrlDOB = Runner.getControl(pageid, 'dob');
var ctrlOccupation = Runner.getControl(pageid, 'occupation');
var ctrlNRIC = Runner.getControl(pageid, 'nric');
var ctrlIDType = Runner.getControl(pageid, 'id_type');
var ctrlAddress = Runner.getControl(pageid, 'address');
var ctrlPostal = Runner.getControl(pageid, 'postal');
var ctrlMobile = Runner.getControl(pageid, 'mobile');
var ctrlTel = Runner.getControl(pageid, 'tel');
var ctrlEmail = Runner.getControl(pageid, 'email');
var ctrlCountryIncorporate = Runner.getControl(pageid, 'country_incorporation');
var ctrlReg = Runner.getControl(pageid, 'registration');
var ctrlRegDate = Runner.getControl(pageid, 'reg_date');
var ctrlTrade = Runner.getControl(pageid, 'trade');
var ctrlOffTel = Runner.getControl(pageid, 'office_tel');
var ctrlBizEmail = Runner.getControl(pageid, 'biz_email');
var ctrlContactPerson = Runner.getControl(pageid, 'contact_person');
var ctrlContactID = Runner.getControl(pageid, 'contact_person_id');
var ctrlDesti = Runner.getControl(pageid, 'destination');
var ctrlContactPersonCell = Runner.getControl(pageid, 'contact_person_cell');
var ctrlContactEmail = Runner.getControl(pageid, 'contact_email');
var ctrlRemark = Runner.getControl(pageid, 'remarks');

if(ctrlOwnerType.getValue()=="INDIVIDUAL")
{
pageObj.toggleItem("section_entity", false );
pageObj.toggleItem("section_individual", true );
pageObj.toggleItem("section_tx", true );
}

if(ctrlOwnerType.getValue()=="ENTITY")
{
pageObj.toggleItem("section_individual", false );
pageObj.toggleItem("section_entity", true );
pageObj.toggleItem("section_tx", true );
}

ctrlOwnerType.on('change',function(e){
if(this.getValue()=='ENTITY')
{
pageObj.toggleItem("section_individual", false );
pageObj.toggleItem("section_entity", true );
pageObj.toggleItem("section_tx", true );
ctrlOwnerKind.setValue('');

}

if(this.getValue()=='INDIVIDUAL')
{
pageObj.toggleItem("section_entity", false );
pageObj.toggleItem("section_individual", true );
pageObj.toggleItem("section_tx", true );
ctrlOwnerKind.setValue('');

}
});



// Place event code here.
// Use "Add Action" button to add code snippets.
});







