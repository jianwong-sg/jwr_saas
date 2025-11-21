
Runner.pages.PageSettings.addPageEvent( 
	"transaction_party_involved", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlCat = Runner.getControl(pageid, 'category');
//var ctrlSubCat = Runner.getControl(pageid, 'sub_category');
var ctrlRepresnt = Runner.getControl(pageid, 'representing');
var ctrlMarketing = Runner.getControl(pageid, 'marketing_rights');
var ctrlSalePrice = Runner.getControl(pageid, 'sale_price');
var ctrlValuation = Runner.getControl(pageid, 'valuation_price');
var ctrlOption = Runner.getControl(pageid, 'option_money');
var ctrlOtpDate = Runner.getControl(pageid, 'otp_date');
var ctrlOtpExeDate = Runner.getControl(pageid, 'option_exercise_date');
var ctrlEstCompletion = Runner.getControl(pageid, 'est_completion_date');
var ctrlSpExeDate = Runner.getControl(pageid, 'sp_execution_date');
var ctrlLOI = Runner.getControl(pageid, 'loi_date');
var ctrlRental = Runner.getControl(pageid, 'rental_price');
var ctrlRentPriceType = Runner.getControl(pageid, 'rental_price_type');
var ctrlTADate = Runner.getControl(pageid, 'ta_date');
var ctrlLeaseDuration = Runner.getControl(pageid, 'lease_duration_no');
var ctrlLeaseDuUnit = Runner.getControl(pageid, 'lease_duration_unit');
var ctrlLeaseStart = Runner.getControl(pageid, 'lease_start_date');
var ctrlLeaseEnd = Runner.getControl(pageid, 'lease_expiry');
var ctrlManageFee = Runner.getControl(pageid, 'management_fee');
var ctrlAgentName = Runner.getControl(pageid, 'salesperson_name');
var ctrlAgentCea = Runner.getControl(pageid, 'cea_reg');
var ctrlAgency = Runner.getControl(pageid, 'agency');
var ctrlAgencyCea = Runner.getControl(pageid, 'agency_cea');
//var ctrlCommenceDate = Runner.getControl(pageid, 'commencement_date');
//var ctrlEndDate = Runner.getControl(pageid, 'end_date');
var ctrlConsultFee = Runner.getControl(pageid, 'consultation_fee');
var ctrlServCommence = Runner.getControl(pageid, 'service_commencement');
var ctrlServComplete = Runner.getControl(pageid, 'service_completion');
var ctrlResult = Runner.getControl(pageid, 'result');
var ctrlStatus = Runner.getControl(pageid, 'status');
var ctrlRemindAgent = Runner.getControl(pageid, 'reminder_agent');
var ctrlRemindTenant = Runner.getControl(pageid, 'reminder_tenant');
var ctrlReminderTenantEmail = Runner.getControl(pageid, 'reminder_tenant_email');


ctrlCat.on('change', function(e) {
if (this.getValue() == 'SALE') 
{
pageObj.toggleItem("tx_info_section", true );
pageObj.toggleItem("prop_info_section", true );
pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("sale_info_section", true );
pageObj.toggleItem("management_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", false );
//$(".property_info").show()
//$(".save_button").show()
pageObj.toggleItem("add_save", true );
pageObj.toggleItem("add_save1", true );
pageObj.toggleItem("add_back_list1", true );
pageObj.toggleItem("add_reset1", true );

pageObj.showField("salesperson_name");
pageObj.showField("cea_reg");
pageObj.hideField("agency");
pageObj.hideField("agency_cea");
pageObj.showField("representing");
pageObj.showField("marketing_rights");
pageObj.showField("currency");
ctrlSalePrice.addValidation('IsRequired');

ctrlRepresnt.setValue('');
//ctrlMarketing.setValue('');
ctrlSalePrice.setValue('');
ctrlValuation.setValue('');
ctrlOption.setValue('');
ctrlOtpDate.setValue('');
ctrlOtpExeDate.setValue('');
ctrlEstCompletion.setValue('');
ctrlSpExeDate.setValue('');

}
if (this.getValue() == 'RENTAL' || this.getValue() == 'ASSIGNMENT'||this.getValue() == 'ROOM RENTAL')
{
pageObj.toggleItem("tx_info_section", true );
pageObj.toggleItem("prop_info_section", true );
pageObj.toggleItem("rental_info_section", true );
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("management_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", false );
//$(".property_info").show()
//$(".save_button").show()
pageObj.toggleItem("add_save", true );
pageObj.toggleItem("add_save1", true );
pageObj.toggleItem("add_back_list1", true );
pageObj.toggleItem("add_reset1", true );

pageObj.showField("salesperson_name");
pageObj.showField("cea_reg");
pageObj.hideField("agency");
pageObj.hideField("agency_cea");
pageObj.showField("representing");
pageObj.showField("marketing_rights");
pageObj.showField("currency");

ctrlRepresnt.setValue('');
//ctrlMarketing.setValue('');
ctrlLOI.setValue('');
ctrlRental.setValue('');
ctrlRentPriceType.setValue('');
ctrlTADate.setValue('');
ctrlLeaseDuration.setValue('');
//ctrlLeaseDuUnit.setValue('');
ctrlLeaseStart.setValue('');
ctrlLeaseEnd.setValue('');
ctrlRental.addValidation('IsRequired');
ctrlRentPriceType.addValidation('IsRequired');
ctrlLeaseStart.addValidation('IsRequired');
ctrlLeaseEnd.addValidation('IsRequired');
ctrlLeaseDuration.addValidation('IsRequired');
ctrlLeaseDuUnit.addValidation('IsRequired');
}
if (this.getValue() == 'PROPERTY MANAGEMENT')
{
pageObj.toggleItem("tx_info_section", true );
pageObj.toggleItem("prop_info_section", true );
pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("management_info_section", true );
pageObj.toggleItem("jtc_lease_info_section", false );
//$(".property_info").show()
//$(".save_button").show()
pageObj.toggleItem("add_save", true );
pageObj.toggleItem("add_save1", true );
pageObj.toggleItem("add_back_list1", true );
pageObj.toggleItem("add_reset1", true );

pageObj.hideField("salesperson_name");
pageObj.hideField("cea_reg");
pageObj.showField("agency");
pageObj.showField("agency_cea");
pageObj.showField("representing");
pageObj.hideField("marketing_rights");
pageObj.showField("currency");

ctrlRepresnt.setValue('');
ctrlManageFee.setValue('');
ctrlCommenceDate.setValue('');
ctrlEndDate.setValue('');
//ctrlLeaseDuUnit.setValue('');
ctrlLeaseStart.setValue('');
ctrlLeaseEnd.setValue('');
ctrlRental.addValidation('IsRequired');	
ctrlLeaseStart.addValidation('IsRequired');		
ctrlLeaseEnd.addValidation('IsRequired');
ctrlManageFee.addValidation('IsRequired');	
}

if (this.getValue() == 'JTC LEASE MANAGEMENT')
{
pageObj.toggleItem("tx_info_section", true );
pageObj.toggleItem("prop_info_section", true );
pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("management_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", true );
//$(".property_info").show()
//$(".save_button").show()
pageObj.toggleItem("add_save", true );
pageObj.toggleItem("add_save1", true );
pageObj.toggleItem("add_back_list1", true );
pageObj.toggleItem("add_reset1", true );

pageObj.showField("salesperson_name");
pageObj.showField("cea_reg");
pageObj.hideField("agency");
pageObj.hideField("agency_cea");
pageObj.showField("representing");
pageObj.hideField("marketing_rights");
pageObj.showField("currency");

ctrlRepresnt.setValue('');
//ctrlManageFee.setValue('');
//ctrlCommenceDate.setValue('');
//ctrlEndDate.setValue('');
//ctrlLeaseDuUnit.setValue('');
ctrlLeaseStart.setValue('');
ctrlLeaseEnd.setValue('');
ctrlSubCat.setValue('');
ctrlConsultFee.setValue('');
ctrlServCommence.setValue('');
ctrlServComplete.setValue('');
ctrlResult.setValue('');

}

});

//tenant email required on condition
var ctrlReminderTenant = Runner.getControl(pageid, 'reminder_tenant');
var ctrlReminderTenantEmail = Runner.getControl(pageid, 'reminder_tenant_email');

ctrlReminderTenant.on('change', function(e) {
if (this.getValue() == "Yes") 
{
ctrlReminderTenantEmail.addValidation('IsRequired');
pageObj.showField("reminder_tenant_email");
}
if (this.getValue() == "No") 
{
ctrlReminderTenantEmail.removeValidation('IsRequired');
pageObj.hideField("reminder_tenant_email");
}
});


var ctrlPropType = Runner.getControl(pageid, 'prop_type');
var ctrlBuiltUp = Runner.getControl(pageid, 'built_up');
var ctrlBuiltUpUnit = Runner.getControl(pageid, 'built_up_unit');
var ctrlBedroom = Runner.getControl(pageid, 'no_bedrooms');
var ctrlBathroom = Runner.getControl(pageid, 'no_bathrooms');
var ctrlLand = Runner.getControl(pageid, 'land');
var ctrlLandUnit = Runner.getControl(pageid, 'land_unit');

ctrlPropType.on('change', function(e) {
if (this.getValue() == 'HDB APARTMENT' || this.getValue() == 'APARTMENT / CONDO') {
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.hideField("land");
pageObj.hideField("land_unit");

}

if (this.getValue() == 'LANDED HOUSE'){
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");

}

if (this.getValue() == 'INDUSTRIAL'){
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.hideField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");

}

if (this.getValue() == 'OFFICE'||this.getValue() == 'RETAIL'){
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.hideField("land");
pageObj.hideField("land_unit");

}

if (this.getValue() == 'LAND'){
pageObj.hideField("built_up");
pageObj.hideField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.hideField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");

}
});

// ===== Scroll to Top ==== 
$(window).scroll(function() {
if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
$('#return-to-top').fadeIn(200);    // Fade in the arrow
} else {
$('#return-to-top').fadeOut(200);   // Else fade out the arrow
}
});
$('#return-to-top').click(function() {      // When arrow is clicked
$('body,html').animate({
scrollTop : 0                       // Scroll to top of body
}, 500);
});
});


Runner.pages.PageSettings.addPageEvent( 
	"transaction_party_involved", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		if (document.activeElement instanceof HTMLElement)
    document.activeElement.blur();

//direct to anchor after page reload
window.addEventListener('load', function () {
      if (window.location.hash) {
        var elements = document.querySelectorAll(window.location.hash);
        if (elements[0]) {
          elements[0].scrollIntoView({
            behavior: 'smooth', // smooth scroll
            block: 'start'
          });
        }
      }
    })

//retain scroll position after reload
 document.addEventListener("DOMContentLoaded", function (event) {
        var scrollpos = sessionStorage.getItem('scrollpos');
        if (scrollpos) {
            window.scrollTo(0, scrollpos);
            sessionStorage.removeItem('scrollpos');
        }
    });

    window.addEventListener("beforeunload", function (e) {
        sessionStorage.setItem('scrollpos', window.scrollY);
    });


//show cdd measure details

//hide check description
var ctrlSLSCust = Runner.getControl(pageid, 'sls_cust');
//if(ctrlSLSCust.getValue()!='')
//$("#addButton3").hide();

ctrlSLSCust.on('change', function(e) {
  if (this.getValue() == '') 
//$("#addButton3").show();
pageObj.toggleItem("check_result_text", true );
pageObj.toggleItem("sls_cust", true );
pageObj.toggleItem("pps_cust", true );
pageObj.toggleItem("sls_result", true );
pageObj.toggleItem("pps_result", true );
});


//populate result if record found in sis and hyperlink to list page
var x=$('[id^=value_sls_result_]').val();
if(x=='No record found')
{
$('[id^=value_sls_result_]');                                                                                                                                                                                                                                                                                                                                                                                                                   
}
else if(x=='Record found. Click to view record')
{
$('[id^=value_sls_result_]');
$('[id^=edit1_sls_result_').contents().wrap('<a href="list_sis_list.php?q=(combined_name~contains~'+proxy['cddchecklistid']+')" target="_blank"></a>');
}

//populate result if record found pps and hyperlink to list page
var x=$('[id^=value_pps_result_]').val();
if(x=='No record found')
{
$('[id^=value_pps_result_]');
}
else if(x=='Record found. Click to view record')
{
$('[id^=value_pps_result_]');
$('[id^=edit1_pps_result_').contents().wrap('<a href="list_pps_list.php?q=(name~equals~'+proxy['cddchecklistid']+')" target="_blank"></a>');
}
/*
var cComDate = this.getField("coursecompletion-date").value;
var cDateFormat = "dd/mm/yyyy";
var nAddYears = 3;
event.vlaue = AddYears(cDateFormat, cComDate, nAddYears);
*/
//hide controls in transaction
var ctrlCat = Runner.getControl(pageid, 'category');
//var ctrlSubCat = Runner.getControl(pageid, 'sub_category');
var ctrlRepresent = Runner.getControl(pageid, 'representing');
var ctrlMarketing = Runner.getControl(pageid, 'marketing_rights');
var ctrlSalePrice = Runner.getControl(pageid, 'sale_price');
var ctrlValuation = Runner.getControl(pageid, 'valuation_price');
var ctrlOption = Runner.getControl(pageid, 'option_money');
var ctrlOtpDate = Runner.getControl(pageid, 'otp_date');
var ctrlOtpExeDate = Runner.getControl(pageid, 'option_exercise_date');
var ctrlEstCompletion = Runner.getControl(pageid, 'est_completion_date');
var ctrlSpExeDate = Runner.getControl(pageid, 'sp_execution_date');
var ctrlLOI = Runner.getControl(pageid, 'loi_date');
var ctrlRental = Runner.getControl(pageid, 'rental_price');
var ctrlRentPriceType = Runner.getControl(pageid, 'rental_price_type');
var ctrlTADate = Runner.getControl(pageid, 'ta_date');
var ctrlLeaseDuration = Runner.getControl(pageid, 'lease_duration_no');
var ctrlLeaseDuUnit = Runner.getControl(pageid, 'lease_duration_unit');
var ctrlLeaseStart = Runner.getControl(pageid, 'lease_start_date');
var ctrlLeaseEnd = Runner.getControl(pageid, 'lease_expiry');
var ctrlUnit = Runner.getControl(pageid, 'comm_unit');
var ctrlPercent = Runner.getControl(pageid, 'comm_percent');
var ctrlAmount = Runner.getControl(pageid, 'comm_amt');
var ctrlTransacted = Runner.getControl(pageid, 'transacted_price');
var ctrlEarned = Runner.getControl(pageid, 'comm_earned');
var ctrlGst = Runner.getControl(pageid, 'gst');
var ctrlGross = Runner.getControl(pageid, 'comm_gross');
var ctrlGstPayable = Runner.getControl(pageid, 'gst_payable');
var ctrlGstInclusive = Runner.getControl(pageid, 'gst_inclusive');
var ctrlCommEarnedAgency = Runner.getControl(pageid, 'comm_earned_agency');
var ctrlGstAgency = Runner.getControl(pageid, 'gst_agency');
var ctrlCommGrossAgency = Runner.getControl(pageid, 'comm_gross_agency');
var ctrlAgentName = Runner.getControl(pageid, 'salesperson_name');
var ctrlAgentCea = Runner.getControl(pageid, 'cea_reg');
var ctrlCommEarnedSalesperson = Runner.getControl(pageid, 'comm_earned_salesperson');
var ctrlCommEarnedPercentSalesperson = Runner.getControl(pageid, 'comm_earned_percent_salesperson');
var ctrlCommToAgency = Runner.getControl(pageid, 'comm_to_agency');
var ctrlCommToAgency1 = Runner.getControl(pageid, 'comm_to_agency1');
var ctrlCommNettSalesperson = Runner.getControl(pageid, 'comm_nett_salesperson');
var ctrlManageFee = Runner.getControl(pageid, 'management_fee');
var ctrlAgency = Runner.getControl(pageid, 'agency');
var ctrlAgencyCea = Runner.getControl(pageid, 'agency_cea');
//var ctrlCommenceDate = Runner.getControl(pageid, 'commencement_date');
//var ctrlEndDate = Runner.getControl(pageid, 'end_date');
var ctrlConsultFee = Runner.getControl(pageid, 'consultation_fee');
var ctrlServCommence = Runner.getControl(pageid, 'service_commencement');
var ctrlServComplete = Runner.getControl(pageid, 'service_completion');
var ctrlResult = Runner.getControl(pageid, 'result');
var ctrlRemindAgent = Runner.getControl(pageid, 'reminder_agent');
var ctrlRemindTenant = Runner.getControl(pageid, 'reminder_tenant');
var ctrlReminderTenantEmail = Runner.getControl(pageid, 'reminder_tenant_email');

if(ctrlCat.getValue()=='SALE')
{
ctrlSalePrice.addValidation('IsRequired');
/*
pageObj.showField("representing");		
pageObj.showField("marketing_rights");
pageObj.showField("salesperson_name");
pageObj.showField("cea_reg");
pageObj.hideField("agency");
pageObj.hideField("agency_cea");
pageObj.showField("sale_price");
pageObj.showField("valuation_price");
pageObj.showField("option_money");
pageObj.showField("otp_date");
pageObj.showField("option_exercise_date");
pageObj.showField("est_completion_date");
pageObj.showField("sp_execution_date");
pageObj.showField("comm_percent");
//$(".comm_percent").show()
pageObj.hideField("loi_date");
pageObj.hideField("rental_price");
pageObj.hideField("rental_price_type");
pageObj.hideField("ta_date");
pageObj.hideField("lease_duration_no");
pageObj.hideField("lease_duration_unit");
pageObj.hideField("lease_start_date");
pageObj.hideField("lease_expiry");
pageObj.hideField("management_fee");
//pageObj.hideField("commencement_date");
//pageObj.hideField("end_date");
pageObj.hideField("comm_unit");
//pageObj.hideField("sub_category");
pageObj.hideField("consultation_fee");
pageObj.hideField("service_commencement");
pageObj.hideField("service_completion");
pageObj.hideField("result");
pageObj.hideField("reminder_agent");
pageObj.hideField("reminder_tenant");
//pageObj.hideField("reminder_tenant_email");
//$(".comm_unit").hide()
*/			
} 
if (ctrlCat.getValue()== 'RENTAL'||ctrlCat.getValue()== 'ASSIGNMENT'||ctrlCat.getValue() == 'ROOM RENTAL')
{
ctrlRental.addValidation('IsRequired');
ctrlRentPriceType.addValidation('IsRequired');
ctrlLeaseStart.addValidation('IsRequired');
ctrlLeaseEnd.addValidation('IsRequired');
ctrlLeaseDuration.addValidation('IsRequired');
ctrlLeaseDuUnit.addValidation('IsRequired');
/*
pageObj.showField("representing");		
pageObj.showField("marketing_rights");
pageObj.showField("salesperson_name");
pageObj.showField("cea_reg");
pageObj.hideField("agency");
pageObj.hideField("agency_cea");
pageObj.hideField("sale_price");
pageObj.hideField("valuation_price");
pageObj.hideField("option_money");
pageObj.hideField("otp_date");
pageObj.hideField("option_exercise_date");
pageObj.hideField("est_completion_date");
pageObj.hideField("sp_execution_date");
pageObj.hideField("comm_percent");
//$(".comm_percent").hide()
				
pageObj.showField("loi_date");
pageObj.showField("rental_price");
pageObj.showField("rental_price_type");
pageObj.showField("ta_date");
pageObj.showField("lease_duration_no");
pageObj.showField("lease_duration_unit");
pageObj.showField("lease_start_date");
pageObj.showField("lease_expiry");
pageObj.hideField("management_fee");
//pageObj.hideField("commencement_date");
//pageObj.hideField("end_date");
pageObj.showField("comm_unit");
//pageObj.hideField("sub_category");
pageObj.hideField("consultation_fee");
pageObj.hideField("service_commencement");
pageObj.hideField("service_completion");
pageObj.hideField("result");
pageObj.showField("reminder_agent");
pageObj.showField("reminder_tenant");
//pageObj.showField("reminder_tenant_email");
//$(".comm_unit").show()
*/
}	
if (ctrlCat.getValue()== 'PROPERTY MANAGEMENT')
{
ctrlRental.addValidation('IsRequired');	
ctrlLeaseStart.addValidation('IsRequired');		
ctrlLeaseEnd.addValidation('IsRequired');
ctrlManageFee.addValidation('IsRequired');	
/*
pageObj.showField("representing");		
pageObj.hideField("marketing_rights");
pageObj.hideField("salesperson_name");
pageObj.hideField("cea_reg");
pageObj.showField("agency");
pageObj.showField("agency_cea");
pageObj.hideField("sale_price");
pageObj.hideField("valuation_price");
pageObj.hideField("option_money");
pageObj.hideField("otp_date");
pageObj.hideField("option_exercise_date");
pageObj.hideField("est_completion_date");
pageObj.hideField("sp_execution_date");
pageObj.hideField("comm_percent");
pageObj.hideField("transacted_price");
	
pageObj.hideField("loi_date");
pageObj.showField("rental_price");
pageObj.showField("rental_price_type");
pageObj.hideField("ta_date");
pageObj.hideField("lease_duration_no");
pageObj.hideField("lease_duration_unit");
pageObj.showField("lease_start_date");
pageObj.showField("lease_expiry");
pageObj.showField("management_fee");

pageObj.hideField("comm_unit");
//pageObj.hideField("sub_category");
pageObj.hideField("consultation_fee");
pageObj.hideField("service_commencement");
pageObj.hideField("service_completion");
pageObj.hideField("result");
pageObj.showField("reminder_agent");
pageObj.showField("reminder_tenant");
//pageObj.showField("reminder_tenant_email");
//$(".comm_unit").show()
*/
}	
if (ctrlCat.getValue()== 'JTC LEASE MANAGEMENT')
{

/*
pageObj.showField("representing");		
pageObj.hideField("marketing_rights");
pageObj.showField("salesperson_name");
pageObj.showField("cea_reg");
pageObj.hideField("agency");
pageObj.hideField("agency_cea");
pageObj.hideField("sale_price");
pageObj.hideField("valuation_price");
pageObj.hideField("option_money");
pageObj.hideField("otp_date");
pageObj.hideField("option_exercise_date");
pageObj.hideField("est_completion_date");
pageObj.hideField("sp_execution_date");
pageObj.hideField("comm_percent");
pageObj.hideField("transacted_price");
	
pageObj.hideField("loi_date");
pageObj.hideField("rental_price");
pageObj.hideField("rental_price_type");
pageObj.hideField("ta_date");
pageObj.hideField("lease_duration_no");
pageObj.hideField("lease_duration_unit");
pageObj.hideField("lease_start_date");
pageObj.hideField("lease_expiry");
pageObj.hideField("management_fee");
//pageObj.hideField("commencement_date");
//pageObj.hideField("end_date");
pageObj.hideField("comm_unit");
//pageObj.showField("sub_category");
pageObj.showField("consultation_fee");
pageObj.showField("service_commencement");
pageObj.showField("service_completion");
pageObj.showField("result");
pageObj.hideField("reminder_agent");
pageObj.hideField("reminder_tenant");
//pageObj.hideField("reminder_tenant_email");

//$(".lease-management").hide()
*/
}	


//calculate comm
ctrlUnit.on('keyup', function(e) {
var unit = ctrlUnit.getValue();
if (unit != unit * 1) {
ctrlAmount.setValue('');
return;
}
var transacted = ctrlTransacted.getValue();
var amount = Math.round(transacted * unit, 2);
ctrlAmount.setValue(amount.toFixed(2));
showTotalGrossCommission();
});

ctrlAmount.on('keyup', function(e) {
var amount = ctrlAmount.getValue();
if (amount != amount * 1) {
ctrlUnit.setValue('');
return;
}
var transacted = ctrlTransacted.getValue();
var unit = (amount/transacted);
ctrlUnit.setValue(unit.toFixed(2));
showTotalGrossCommission();
});

ctrlPercent.on('keyup', function(e) {
var percent = ctrlPercent.getValue();
if (percent != percent * 1) {
ctrlAmount.setValue('');
return;
}
var transacted = ctrlTransacted.getValue();
var amount = Math.round(transacted * percent / 100, 2);
ctrlAmount.setValue(amount.toFixed(2));
showTotalGrossCommission();
});

ctrlAmount.on('keyup', function(e) {
var amount = ctrlAmount.getValue();
if (amount != amount * 1) {
ctrlPercent.setValue('');
return;
}
var transacted = ctrlTransacted.getValue();
var percent = (amount/transacted*100);
ctrlPercent.setValue(percent.toFixed(2));
showTotalGrossCommission();
});

ctrlGstInclusive.on('change', function(e) {
if (ctrlGstInclusive.getValue() == 'on') {
ctrlGstPayable.setValue('on');
}
showTotalGrossCommission();
});

ctrlGstPayable.on('change', function(e) {
if (ctrlGstPayable.getValue() == '') {
ctrlGstInclusive.setValue('');
}
showTotalGrossCommission();
});

function showTotalGrossCommission() {
var amount = ctrlAmount.getValue() * 1;
var earned, gst, gross;
if (ctrlGstPayable.getValue() == 'on' && ctrlGstInclusive.getValue() == '') {
earned = amount;
gst = customRound(amount * 7 / 100);
gross = amount + gst;
} else if (ctrlGstPayable.getValue() == 'on' && ctrlGstInclusive.getValue() == 'on') {
earned = customRound(amount / 107 * 100);
gst = amount - earned;
gross = amount;
} else {
earned = amount;
gst = 0;
gross = amount;
}
ctrlEarned.setValue(earned);
ctrlGst.setValue(gst);
ctrlGross.setValue(gross);
$('#readonly_value_comm_earned_1').text(currencyView(earned));
$('#readonly_value_gst_1').text(currencyView(gst));
$('#readonly_value_comm_gross_1').text(currencyView(gross));
	
refreshTableData();
refreshExternalCoBroker();
refreshInternalCoBroker();
}
//end calculation


ctrlCat.on('change', function(e) {
if (this.getValue() == 'SALE') 
{

pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("sale_info_section", true );
pageObj.toggleItem("management_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", false );

pageObj.showField("salesperson_name");
pageObj.showField("cea_reg");
pageObj.hideField("agency");
pageObj.hideField("agency_cea");
pageObj.showField("representing");
pageObj.showField("marketing_rights");
pageObj.showField("currency");
pageObj.showField("comm_percent");
pageObj.hideField("comm_unit");

ctrlSalePrice.addValidation('IsRequired');

ctrlTransacted.setValue('');		
ctrlRepresent.setValue('');
//ctrlMarketing.setValue('');
ctrlSalePrice.setValue('');
ctrlValuation.setValue('');
ctrlOption.setValue('');
ctrlOtpDate.setValue('');
ctrlOtpExeDate.setValue('');
ctrlEstCompletion.setValue('');
ctrlSpExeDate.setValue('');
ctrlUnit.setValue('');
ctrlPercent.setValue('');
ctrlAmount.setValue('');
ctrlEarned.setValue('');
ctrlGross.setValue('');
ctrlCommEarnedAgency.setValue('');
ctrlCommEarnedSalesperson.setValue('');
ctrlCommEarnedPercentSalesperson.setValue('');
ctrlCommToAgency.setValue('');
ctrlCommToAgency1.setValue('');
ctrlCommNettSalesperson.setValue('');


}

if (this.getValue() == 'RENTAL'||this.getValue() == 'ASSIGNMENT'||this.getValue() == 'ROOM RENTAL')
{
pageObj.toggleItem("rental_info_section", true );
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("management_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", false );

pageObj.showField("salesperson_name");
pageObj.showField("cea_reg");
pageObj.hideField("agency");
pageObj.hideField("agency_cea");
pageObj.showField("representing");
pageObj.showField("marketing_rights");
pageObj.showField("currency");
pageObj.hideField("comm_percent");
pageObj.showField("comm_unit");
ctrlRental.addValidation('IsRequired');
ctrlRentPriceType.addValidation('IsRequired');
ctrlLeaseStart.addValidation('IsRequired');
ctrlLeaseEnd.addValidation('IsRequired');
ctrlLeaseDuration.addValidation('IsRequired');
ctrlLeaseDuUnit.addValidation('IsRequired');
	
ctrlTransacted.setValue('');	
ctrlRepresent.setValue('');	
//ctrlSalePrice.removeValidation('IsRequired');
//ctrlMarketing.setValue('');		
ctrlLOI.setValue('');
ctrlRental.setValue('');
ctrlRentPriceType.setValue('');
ctrlTADate.setValue('');
ctrlLeaseDuration.setValue('');
//ctrlLeaseDuUnit.setValue('');
ctrlLeaseStart.setValue('');
ctrlLeaseEnd.setValue('');
ctrlUnit.setValue('');
ctrlPercent.setValue('');
ctrlAmount.setValue('');
ctrlEarned.setValue('');
ctrlGross.setValue('');
ctrlCommEarnedAgency.setValue('');
ctrlCommEarnedSalesperson.setValue('');
ctrlCommEarnedPercentSalesperson.setValue('');
ctrlCommToAgency.setValue('');
ctrlCommToAgency1.setValue('');
ctrlCommNettSalesperson.setValue('');
}

if (this.getValue() == 'PROPERTY MANAGEMENT')
{
pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("management_info_section", true );
pageObj.toggleItem("jtc_lease_info_section", false );

pageObj.hideField("salesperson_name");
pageObj.hideField("cea_reg");
pageObj.showField("agency");
pageObj.showField("agency_cea");
pageObj.showField("representing");
pageObj.hideField("marketing_rights");
pageObj.showField("currency");
pageObj.hideField("comm_percent");
pageObj.hideField("comm_unit");
ctrlRental.addValidation('IsRequired');	
ctrlLeaseStart.addValidation('IsRequired');		
ctrlLeaseEnd.addValidation('IsRequired');
ctrlManageFee.addValidation('IsRequired');	

ctrlTransacted.setValue('');
ctrlRepresent.setValue('');
ctrlRental.setValue('');
ctrlManageFee.setValue('');
ctrlLeaseStart.setValue('');
ctrlLeaseEnd.setValue('');
//ctrlSalePrice.removeValidation('IsRequired');
ctrlUnit.setValue('');
ctrlPercent.setValue('');
ctrlAmount.setValue('');
ctrlEarned.setValue('');
ctrlGross.setValue('');
ctrlCommEarnedAgency.setValue('');
ctrlCommEarnedSalesperson.setValue('');
ctrlCommEarnedPercentSalesperson.setValue('');
ctrlCommToAgency.setValue('');
ctrlCommToAgency1.setValue('');
ctrlCommNettSalesperson.setValue('');
}
if (this.getValue() == 'JTC LEASE MANAGEMENT')
{
pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("management_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", true );

pageObj.showField("salesperson_name");
pageObj.showField("cea_reg");
pageObj.hideField("agency");
pageObj.hideField("agency_cea");
pageObj.showField("representing");
pageObj.hideField("marketing_rights");
pageObj.showField("currency");
pageObj.hideField("comm_percent");
pageObj.hideField("comm_unit");

ctrlTransacted.setValue('');
ctrlRepresent.setValue('');
//ctrlManageFee.setValue('');
//ctrlCommenceDate.setValue('');
//ctrlEndDate.setValue('');
//ctrlSalePrice.removeValidation('IsRequired');
ctrlUnit.setValue('');
ctrlPercent.setValue('');
ctrlAmount.setValue('');
ctrlEarned.setValue('');
ctrlGross.setValue('');
ctrlCommEarnedAgency.setValue('');
ctrlCommEarnedSalesperson.setValue('');
ctrlCommEarnedPercentSalesperson.setValue('');
ctrlCommToAgency.setValue('');
ctrlCommToAgency1.setValue('');
ctrlCommNettSalesperson.setValue('');
ctrlSubCat.setValue('');
ctrlConsultFee.setValue('');
ctrlServCommence.setValue('');
ctrlServComplete.setValue('');
ctrlResult.setValue('');
}
});

//tenant email required on condition
var ctrlReminderTenant = Runner.getControl(pageid, 'reminder_tenant');
var ctrlReminderTenantEmail = Runner.getControl(pageid, 'reminder_tenant_email');

if (ctrlReminderTenant.getValue() == "Yes") 
{
ctrlReminderTenantEmail.addValidation('IsRequired');
pageObj.showField("reminder_tenant_email");
}
if (ctrlReminderTenant.getValue() == "No") 
{
ctrlReminderTenantEmail.removeValidation('IsRequired');
pageObj.hideField("reminder_tenant_email");
}

ctrlReminderTenant.on('change', function(e) {
if (this.getValue() == "Yes")
{
ctrlReminderTenantEmail.addValidation('IsRequired');
pageObj.showField("reminder_tenant_email");
}
if (this.getValue() == "No")
{
ctrlReminderTenantEmail.removeValidation('IsRequired');
pageObj.hideField("reminder_tenant_email");
}
});

//hide controls in property info
var ctrlPropType = Runner.getControl(pageid, 'prop_type');
var ctrlBuiltUp = Runner.getControl(pageid, 'built_up');
var ctrlBuiltUpUnit = Runner.getControl(pageid, 'built_up_unit');
var ctrlBedroom = Runner.getControl(pageid, 'no_bedrooms');
var ctrlBathroom = Runner.getControl(pageid, 'no_bathrooms');
var ctrlLand = Runner.getControl(pageid, 'land');
var ctrlLandUnit = Runner.getControl(pageid, 'land_unit');

if(ctrlPropType.getValue()== 'HDB APARTMENT' || ctrlPropType.getValue() == 'APARTMENT / CONDO')
{
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.hideField("land");
pageObj.hideField("land_unit");
} 
if (ctrlPropType.getValue()== 'LANDED HOUSE')
{
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");
}	
if (ctrlPropType.getValue()== 'INDUSTRIAL')
{
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.hideField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");
}
if (ctrlPropType.getValue()== 'OFFICE'||ctrlPropType.getValue() == 'RETAIL')
{
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.hideField("land");
pageObj.hideField("land_unit");
}
if (ctrlPropType.getValue()== 'LAND')
{
pageObj.hideField("built_up");
pageObj.hideField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.hideField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");
}

ctrlPropType.on('change', function(e) {
if (this.getValue() == 'HDB APARTMENT' || this.getValue() == 'APARTMENT / CONDO') 
{
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.hideField("land");
pageObj.hideField("land_unit");
/*
ctrlLand.setValue('');
ctrlLandUnit.setValue('');
*/
ctrlUnit.setValue('');
ctrlPercent.setValue('');
ctrlAmount.setValue('');
ctrlEarned.setValue('');
ctrlGross.setValue('');
ctrlCommEarnedAgency.setValue('');
ctrlCommEarnedSalesperson.setValue('');
ctrlCommEarnedPercentSalesperson.setValue('');
ctrlCommToAgency.setValue('');
ctrlCommToAgency1.setValue('');
ctrlCommNettSalesperson.setValue('');
}

if (this.getValue() == 'LANDED HOUSE')
{
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");
ctrlUnit.setValue('');
ctrlPercent.setValue('');
ctrlAmount.setValue('');
ctrlEarned.setValue('');
ctrlGross.setValue('');
ctrlCommEarnedAgency.setValue('');
ctrlCommEarnedSalesperson.setValue('');
ctrlCommEarnedPercentSalesperson.setValue('');
ctrlCommToAgency.setValue('');
ctrlCommToAgency1.setValue('');
ctrlCommNettSalesperson.setValue('');
}

if (this.getValue() == 'INDUSTRIAL')
{
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.hideField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");
/*
ctrlBedroom.setValue('');
ctrlBathroom.setValue('');
*/
ctrlUnit.setValue('');
ctrlPercent.setValue('');
ctrlAmount.setValue('');
ctrlEarned.setValue('');
ctrlGross.setValue('');
ctrlCommEarnedAgency.setValue('');
ctrlCommEarnedSalesperson.setValue('');
ctrlCommEarnedPercentSalesperson.setValue('');
ctrlCommToAgency.setValue('');
ctrlCommToAgency1.setValue('');
ctrlCommNettSalesperson.setValue('');
}

if (this.getValue() == 'OFFICE'||this.getValue() == 'RETAIL')
{
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.hideField("land");
pageObj.hideField("land_unit");
/*
ctrlBedroom.setValue('');
ctrlLand.setValue('');
ctrlLandUnit.setValue('');
*/
ctrlUnit.setValue('');
ctrlPercent.setValue('');
ctrlAmount.setValue('');
ctrlEarned.setValue('');
ctrlGross.setValue('');
ctrlCommEarnedAgency.setValue('');
ctrlCommEarnedSalesperson.setValue('');
ctrlCommEarnedPercentSalesperson.setValue('');
ctrlCommToAgency.setValue('');
ctrlCommToAgency1.setValue('');
ctrlCommNettSalesperson.setValue('');
}

if (this.getValue() == 'LAND')
{
pageObj.hideField("built_up");
pageObj.hideField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.hideField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");
/*
ctrlBuiltUp.setValue('');
ctrlBuiltUpUnit.setValue('');
ctrlBedroom.setValue('');
ctrlBathroom.setValue('');
*/
ctrlUnit.setValue('');
ctrlPercent.setValue('');
ctrlAmount.setValue('');
ctrlEarned.setValue('');
ctrlGross.setValue('');
ctrlCommEarnedAgency.setValue('');
ctrlCommEarnedSalesperson.setValue('');
ctrlCommEarnedPercentSalesperson.setValue('');
ctrlCommToAgency.setValue('');
ctrlCommToAgency1.setValue('');
ctrlCommNettSalesperson.setValue('');
}
});

//update transacted price on change
var ctrlTransacted = Runner.getControl(pageid, 'transacted_price');
var ctrlSalePrice = Runner.getControl(pageid, 'sale_price');
var ctrlRental = Runner.getControl(pageid, 'rental_price');
var ctrlManageFee = Runner.getControl(pageid, 'management_fee');
//on input rental empty sale price and management fee
ctrlRental.on('keyup', function(e) {
var rental= ctrlRental.getValue();
if (rental != rental * 1) {
ctrlSalePrice.setValue('');
ctrlManageFee.setValue('');
return;
}
ctrlTransacted.setValue(Number(ctrlRental.getValue()));
});
//on input sale price empty rental and management fee
ctrlSalePrice.on('keyup', function(e) {
var saleprice= ctrlSalePrice.getValue();
if (saleprice != saleprice * 1) {
ctrlRental.setValue('');
ctrlManageFee.setValue('');
return;
}
ctrlTransacted.setValue(Number(ctrlSalePrice.getValue()));
});
//on input management fee empty rental and sale price
ctrlManageFee.on('keyup', function(e) {
var mfee= ctrlManageFee.getValue();
if (mfee != mfee * 1) {
ctrlRental.setValue('');
ctrlSalePrice.setValue('');
return;
}
ctrlTransacted.setValue(Number(ctrlManageFee.getValue()));
});

// ===== Scroll to Top ==== 
$(window).scroll(function() {
if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
$('#return-to-top').fadeIn(200);    // Fade in the arrow
} else {
$('#return-to-top').fadeOut(200);   // Else fade out the arrow
}
});
$('#return-to-top').click(function() {      // When arrow is clicked
$('body,html').animate({
scrollTop : 0                       // Scroll to top of body
}, 500);
});
});


Runner.pages.PageSettings.addPageEvent( 
	"transaction_party_involved", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlCat = Runner.getControl(pageid, 'category');
var ctrlRepresent = Runner.getControl(pageid, 'representing');
var ctrlRights = Runner.getControl(pageid, 'marketing_rights');
var ctrlSalePrice = Runner.getControl(pageid, 'sale_price');
var ctrlValuation = Runner.getControl(pageid, 'valuation_price');
var ctrlOption = Runner.getControl(pageid, 'option_money');
var ctrlOtpDate = Runner.getControl(pageid, 'otp_date');
var ctrlOtpExeDate = Runner.getControl(pageid, 'option_exercise_date');
var ctrlEstCompletion = Runner.getControl(pageid, 'est_completion_date');
var ctrlSpExeDate = Runner.getControl(pageid, 'sp_execution_date');
var ctrlLOI = Runner.getControl(pageid, 'loi_date');
var ctrlRental = Runner.getControl(pageid, 'rental_price');
var ctrlRentPriceType = Runner.getControl(pageid, 'rental_price_type');
var ctrlTADate = Runner.getControl(pageid, 'ta_date');
var ctrlLeaseDuration = Runner.getControl(pageid, 'lease_duration_no');
var ctrlLeaseDuUnit = Runner.getControl(pageid, 'lease_duration_unit');
var ctrlLeaseStart = Runner.getControl(pageid, 'lease_start_date');
var ctrlLeaseEnd = Runner.getControl(pageid, 'lease_expiry');
var ctrlUnit = Runner.getControl(pageid, 'comm_unit');
var ctrlPercent = Runner.getControl(pageid, 'comm_percent');
var ctrlAmount = Runner.getControl(pageid, 'comm_amt');
var ctrlTransacted = Runner.getControl(pageid, 'transacted_price');
var ctrlEarned = Runner.getControl(pageid, 'comm_earned');
var ctrlGst = Runner.getControl(pageid, 'gst');
var ctrlGross = Runner.getControl(pageid, 'comm_gross');
var ctrlGstPayable = Runner.getControl(pageid, 'gst_payable');
var ctrlGstInclusive = Runner.getControl(pageid, 'gst_inclusive');
var ctrlCommEarnedAgency = Runner.getControl(pageid, 'comm_earned_agency');
var ctrlGstAgency = Runner.getControl(pageid, 'gst_agency');
var ctrlCommGrossAgency = Runner.getControl(pageid, 'comm_gross_agency');
var ctrlSalespersonName = Runner.getControl(pageid, 'salesperson_name');
var ctrlCommEarnedSalesperson = Runner.getControl(pageid, 'comm_earned_salesperson');
var ctrlCommEarnedPercentSalesperson = Runner.getControl(pageid, 'comm_earned_percent_salesperson');
var ctrlRemarks = Runner.getControl(pageid, 'remarks');
var ctrlManageFee = Runner.getControl(pageid, 'management_fee');
var ctrlAgency = Runner.getControl(pageid, 'agency');
//var ctrlCommenceDate = Runner.getControl(pageid, 'commencement_date');
//var ctrlEndDate = Runner.getControl(pageid, 'end_date');
var ctrlConsultFee = Runner.getControl(pageid, 'consultation_fee');
var ctrlServCommence = Runner.getControl(pageid, 'service_commencement');
var ctrlServComplete = Runner.getControl(pageid, 'service_completion');
var ctrlResult = Runner.getControl(pageid, 'result');

//tenant email required on condition
var ctrlReminderTenant = Runner.getControl(pageid, 'reminder_tenant');
var ctrlReminderTenantEmail = Runner.getControl(pageid, 'reminder_tenant_email');

if (ctrlReminderTenant.getValue() == "Yes") 
{
pageObj.showField("reminder_tenant_email");
}
if (ctrlReminderTenant.getValue() == "No") 
{
pageObj.hideField("reminder_tenant_email");
}

//hide controls in property info
var ctrlPropType = Runner.getControl(pageid, 'prop_type');
var ctrlBuiltUp = Runner.getControl(pageid, 'builtup');
var ctrlBedroom = Runner.getControl(pageid, 'no_bedrooms');
var ctrlBathroom = Runner.getControl(pageid, 'no_bathrooms');
var ctrlLand = Runner.getControl(pageid, 'landland');


if(ctrlPropType.getValue()== 'HDB APARTMENT' || ctrlPropType.getValue() == 'APARTMENT / CONDO')
{
pageObj.showField("builtup");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.hideField("landland");

} 

if (ctrlBuiltUp.getValue()=='')
ctrlBuiltUp.setValue('-');
if (ctrlBedroom.getValue()=='')
ctrlBedroom.setValue('-');
if (ctrlBathroom.getValue()=='')
ctrlBathroom.setValue('-');

if (ctrlPropType.getValue()== 'LANDED HOUSE')
{
pageObj.showField("builtup");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.showField("landland");

}	

if (ctrlBuiltUp.getValue()=='')
ctrlBuiltUp.setValue('-');
if (ctrlBedroom.getValue()=='')
ctrlBedroom.setValue('-');
if (ctrlBathroom.getValue()=='')
ctrlBathroom.setValue('-');
if (ctrlLand.getValue()=='')
ctrlLand.setValue('-');

if (ctrlPropType.getValue()== 'INDUSTRIAL')
{
pageObj.showField("builtup");
pageObj.hideField("no_bedrooms");
pageObj.hideField("no_bathrooms");
pageObj.showField("landland");

}

if (ctrlBuiltUp.getValue()=='')
ctrlBuiltUp.setValue('-');
if (ctrlLand.getValue()=='')
ctrlLand.setValue('-');

if (ctrlPropType.getValue()== 'OFFICE'||ctrlPropType.getValue() == 'RETAIL')
{
pageObj.showField("builtup");
pageObj.hideField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.hideField("landland");
}

if (ctrlBuiltUp.getValue()=='')
ctrlBuiltUp.setValue('-');
if (ctrlBathroom.getValue()=='')
ctrlBathroom.setValue('-');

if (ctrlPropType.getValue()== 'LAND')
{
pageObj.hideField("builtup");
pageObj.hideField("no_bedrooms");
pageObj.hideField("no_bathrooms");
pageObj.showField("landland");

}

if (ctrlLand.getValue()=='')
ctrlLand.setValue('-');


if (ctrlRemarks.getValue()== '')
{
pageObj.hideField("remarks");	
}

// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
});







