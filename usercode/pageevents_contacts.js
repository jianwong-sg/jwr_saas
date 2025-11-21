
Runner.pages.PageSettings.addPageEvent( 
	"contacts", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//validate required fields
var ctrl = Runner.getControl(pageid, 'cus_type');
var ctrlName = Runner.getControl(pageid, 'name');
var ctrlNRIC = Runner.getControl(pageid, 'nric');
var ctrlAddress = Runner.getControl(pageid, 'address');
var ctrlPostal = Runner.getControl(pageid, 'postal');
var ctrlTel = Runner.getControl(pageid, 'tel');
var ctrlEmail = Runner.getControl(pageid, 'email');
var ctrlTrade = Runner.getControl(pageid, 'trade');
var ctrlOffTel = Runner.getControl(pageid, 'office_tel');
var ctrlBizEmail = Runner.getControl(pageid, 'biz_email');
var ctrlContactPerson = Runner.getControl(pageid, 'contact_person');
var ctrlDesti = Runner.getControl(pageid, 'destination');
var ctrlContactID = Runner.getControl(pageid, 'contact_person_id');
var ctrlContactEmail = Runner.getControl(pageid, 'contact_email');
var ctrlMobile = Runner.getControl(pageid, 'mobile');
var ctrlContactPersonCell = Runner.getControl(pageid, 'contact_person_cell');

if(ctrl.getValue()=="Private")
    {
$("[data-fieldname='name']").show()
$("[data-fieldname='nric']").show()
$("[data-fieldname='address']").show()
$("[data-fieldname='postal']").show()
$("[data-fieldname='tel']").show()
$("[data-fieldname='mobile']").show()
$("[data-fieldname='email']").show()
$("[data-fieldname='trade']").hide()
$("[data-fieldname='office_tel']").hide()
$("[data-fieldname='biz_email']").hide()
$("[data-fieldname='contact_person']").hide()
$("[data-fieldname='contact_person_id']").hide()
$("[data-fieldname='destination']").hide()
$("[data-fieldname='contact_person_cell']").hide()
$("[data-fieldname='contact_email']").hide()

ctrlTel.addValidation('IsRequired');
ctrlMobile.addValidation('IsRequired');
ctrlEmail.addValidation('IsRequired');

ctrlTrade.removeValidation('IsRequired');
ctrlOffTel.removeValidation('IsRequired');
ctrlBizEmail.removeValidation('IsRequired');
ctrlContactPerson.removeValidation('IsRequired');
ctrlDesti.removeValidation('IsRequired');
ctrlContactID.removeValidation('IsRequired');
ctrlContactEmail.removeValidation('IsRequired');
ctrlContactPersonCell.removeValidation('IsRequired');

    }

if(ctrl.getValue()=="Corporate")
    {
$("[data-fieldname='name']").show()
$("[data-fieldname='nric']").show()
$("[data-fieldname='address']").show()
$("[data-fieldname='postal']").show()
$("[data-fieldname='tel']").hide()
$("[data-fieldname='mobile']").hide()
$("[data-fieldname='email']").hide()
$("[data-fieldname='trade']").show() 
$("[data-fieldname='office_tel']").show()
$("[data-fieldname='biz_email']").show()
$("[data-fieldname='contact_person']").show()
$("[data-fieldname='contact_person_id']").show()
$("[data-fieldname='destination']").show()
$("[data-fieldname='contact_person_cell']").show()
$("[data-fieldname='contact_email']").show()

ctrlTrade.addValidation('IsRequired');
ctrlOffTel.addValidation('IsRequired');
ctrlBizEmail.addValidation('IsRequired');
ctrlContactPerson.addValidation('IsRequired');
ctrlDesti.addValidation('IsRequired');
ctrlContactID.addValidation('IsRequired');
ctrlContactEmail.addValidation('IsRequired');
ctrlContactPersonCell.addValidation('IsRequired');

ctrlTel.removeValidation('IsRequired');
ctrlMobile.removeValidation('IsRequired');
ctrlEmail.removeValidation('IsRequired');
}

ctrl.on('change',function(e){
if(this.getValue()=='Corporate')
{
$("[data-fieldname='name']").show()
$("[data-fieldname='nric']").show()
$("[data-fieldname='address']").show()
$("[data-fieldname='postal']").show()
$("[data-fieldname='tel']").hide()
$("[data-fieldname='mobile']").hide()
$("[data-fieldname='email']").hide()
$("[data-fieldname='trade']").show() 
$("[data-fieldname='office_tel']").show()
$("[data-fieldname='biz_email']").show()
$("[data-fieldname='contact_person']").show()
$("[data-fieldname='contact_person_id']").show()
$("[data-fieldname='destination']").show()
$("[data-fieldname='contact_person_cell']").show()
$("[data-fieldname='contact_email']").show()

ctrlTrade.addValidation('IsRequired');
ctrlOffTel.addValidation('IsRequired');
ctrlBizEmail.addValidation('IsRequired');
ctrlContactPerson.addValidation('IsRequired');
ctrlDesti.addValidation('IsRequired');
ctrlContactID.addValidation('IsRequired');
ctrlContactEmail.addValidation('IsRequired');
ctrlContactPersonCell.addValidation('IsRequired');

ctrlTel.removeValidation('IsRequired');
ctrlMobile.removeValidation('IsRequired');
ctrlEmail.removeValidation('IsRequired');

ctrlName.setValue('');
ctrlNRIC.setValue('');
ctrlAddress.setValue('');
ctrlPostal.setValue('');
ctrlTel.setValue('');
ctrlMobile.setValue('');
ctrlEmail.setValue('');
}
if(this.getValue()=='Private')
{
$("[data-fieldname='name']").show()
$("[data-fieldname='nric']").show()
$("[data-fieldname='address']").show()
$("[data-fieldname='postal']").show()
$("[data-fieldname='tel']").show()
$("[data-fieldname='mobile']").show()
$("[data-fieldname='email']").show()
$("[data-fieldname='trade']").hide()
$("[data-fieldname='office_tel']").hide()
$("[data-fieldname='biz_email']").hide()
$("[data-fieldname='contact_person']").hide()
$("[data-fieldname='contact_person_id']").hide()
$("[data-fieldname='destination']").hide()
$("[data-fieldname='contact_person_cell']").hide()
$("[data-fieldname='contact_email']").hide()

ctrlTel.addValidation('IsRequired');
ctrlMobile.addValidation('IsRequired');
ctrlEmail.addValidation('IsRequired');

ctrlTrade.removeValidation('IsRequired');
ctrlOffTel.removeValidation('IsRequired');
ctrlBizEmail.removeValidation('IsRequired');
ctrlContactPerson.removeValidation('IsRequired');
ctrlDesti.removeValidation('IsRequired');
ctrlContactID.removeValidation('IsRequired');
ctrlContactEmail.removeValidation('IsRequired');
ctrlContactPersonCell.removeValidation('IsRequired');

ctrlName.setValue('');
ctrlNRIC.setValue('');
ctrlAddress.setValue('');
ctrlPostal.setValue('');
ctrlTrade.setValue('');
ctrlOffTel.setValue('');
ctrlBizEmail.setValue('');
ctrlContactPerson.setValue('');
ctrlDesti.setValue('');
ctrlContactID.setValue('');
ctrlContactEmail.setValue('');
ctrlContactPersonCell.setValue('');
}
});
});


Runner.pages.PageSettings.addPageEvent( 
	"contacts", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		$("[data-fieldname='name']").hide()
$("[data-fieldname='nric']").hide()
$("[data-fieldname='address']").hide()
$("[data-fieldname='postal']").hide()
$("[data-fieldname='tel']").hide()
$("[data-fieldname='mobile']").hide()
$("[data-fieldname='email']").hide()
$("[data-fieldname='trade']").hide()
$("[data-fieldname='office_tel']").hide()
$("[data-fieldname='biz_email']").hide()
$("[data-fieldname='contact_person']").hide()
$("[data-fieldname='contact_person_id']").hide()
$("[data-fieldname='destination']").hide()
$("[data-fieldname='contact_person_cell']").hide()
$("[data-fieldname='contact_email']").hide()

var ctrl = Runner.getControl(pageid, 'cus_type');
var ctrlName = Runner.getControl(pageid, 'name');
var ctrlNRIC = Runner.getControl(pageid, 'nric');
var ctrlAddress = Runner.getControl(pageid, 'address');
var ctrlPostal = Runner.getControl(pageid, 'postal');
var ctrlTel = Runner.getControl(pageid, 'tel');
var ctrlEmail = Runner.getControl(pageid, 'email');
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
if (this.getValue() == 'Corporate')
{
$("[data-fieldname='name']").show()
$("[data-fieldname='nric']").show()
$("[data-fieldname='address']").show()
$("[data-fieldname='postal']").show()
$("[data-fieldname='tel']").hide()
$("[data-fieldname='mobile']").hide()
$("[data-fieldname='email']").hide()
$("[data-fieldname='trade']").show() 
$("[data-fieldname='office_tel']").show()
$("[data-fieldname='biz_email']").show()
$("[data-fieldname='contact_person']").show()
$("[data-fieldname='contact_person_id']").show()
$("[data-fieldname='destination']").show()
$("[data-fieldname='contact_person_cell']").show()
$("[data-fieldname='contact_email']").show()


ctrlTrade.addValidation('IsRequired');
ctrlOffTel.addValidation('IsRequired');
ctrlBizEmail.addValidation('IsRequired');
ctrlContactPerson.addValidation('IsRequired');
ctrlDesti.addValidation('IsRequired');
ctrlContactID.addValidation('IsRequired');
ctrlContactEmail.addValidation('IsRequired');
ctrlContactPersonCell.addValidation('IsRequired');

ctrlTel.removeValidation('IsRequired');
ctrlEmail.removeValidation('IsRequired');
ctrlMobile.removeValidation('IsRequired'); 

ctrlName.setValue('');
ctrlNRIC.setValue('');
ctrlAddress.setValue('');
ctrlPostal.setValue('');
ctrlTel.setValue('');
ctrlMobile.setValue('');
ctrlEmail.setValue('');
} 

if (this.getValue() == 'Private')
{
$("[data-fieldname='name']").show()
$("[data-fieldname='nric']").show()
$("[data-fieldname='address']").show()
$("[data-fieldname='postal']").show()
$("[data-fieldname='tel']").show()
$("[data-fieldname='mobile']").show()
$("[data-fieldname='email']").show()
$("[data-fieldname='trade']").hide()
$("[data-fieldname='office_tel']").hide()
$("[data-fieldname='biz_email']").hide()
$("[data-fieldname='contact_person']").hide()
$("[data-fieldname='contact_person_id']").hide()
$("[data-fieldname='destination']").hide()
$("[data-fieldname='contact_person_cell']").hide()
$("[data-fieldname='contact_email']").hide()

ctrlTel.addValidation('IsRequired');
ctrlMobile.addValidation('IsRequired');
ctrlEmail.addValidation('IsRequired');

ctrlTrade.removeValidation('IsRequired');
ctrlOffTel.removeValidation('IsRequired');
ctrlBizEmail.removeValidation('IsRequired');
ctrlContactPerson.removeValidation('IsRequired');
ctrlDesti.removeValidation('IsRequired');
ctrlContactID.removeValidation('IsRequired');
ctrlContactEmail.removeValidation('IsRequired');
ctrlContactPersonCell.removeValidation('IsRequired');

ctrlName.setValue('');
ctrlNRIC.setValue('');
ctrlAddress.setValue('');
ctrlPostal.setValue('');
ctrlTrade.setValue('');
ctrlOffTel.setValue('');
ctrlBizEmail.setValue('');
ctrlContactPerson.setValue('');
ctrlDesti.setValue('');
ctrlContactID.setValue('');
ctrlContactEmail.setValue('');
ctrlContactPersonCell.setValue('');
} 

});
// Place event code here.
// Use "Add Action" button to add code snippets.
});







