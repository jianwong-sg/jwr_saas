
Runner.pages.PageSettings.addPageEvent( 
	"lor4_lease_due1", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlCat = Runner.getControl(pageid, 'category');
var ctrlSubCat = Runner.getControl(pageid, 'sub_category');
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
var ctrlCommenceDate = Runner.getControl(pageid, 'commencement_date');
var ctrlEndDate = Runner.getControl(pageid, 'end_date');
var ctrlConsultFee = Runner.getControl(pageid, 'consultation_fee');
var ctrlServCommence = Runner.getControl(pageid, 'service_commencement');
var ctrlServComplete = Runner.getControl(pageid, 'service_completion');
var ctrlResult = Runner.getControl(pageid, 'result');

if(ctrlCat.getValue()=='SALE')
{
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

pageObj.hideField("loi_date");
pageObj.hideField("rental_price");
pageObj.hideField("rental_price_type");
pageObj.hideField("ta_date");
pageObj.hideField("lease_duration_no");
pageObj.hideField("lease_duration_unit");
pageObj.hideField("lease_start_date");
pageObj.hideField("lease_expiry");
pageObj.hideField("management_fee");
pageObj.hideField("commencement_date");
pageObj.hideField("end_date");
pageObj.hideField("comm_unit");
pageObj.hideField("sub_category");
pageObj.hideField("consultation_fee");
pageObj.hideField("service_commencement");
pageObj.hideField("service_completion");
pageObj.hideField("result");
pageObj.hideField("reminder_agent");
pageObj.hideField("reminder_tenant");
pageObj.hideField("reminder_tenant_email");
} 
/*
if (ctrlValuation.getValue()=='')
ctrlValuation.setValue('-');
if (ctrlOption.getValue()=='')
ctrlOption.setValue('-');
if (ctrlOtpDate.getValue()=='')
ctrlOtpDate.setValue('-');
if (ctrlOtpExeDate.getValue()=='')
ctrlOtpExeDate.setValue('-');
if (ctrlEstCompletion.getValue()=='')
ctrlEstCompletion.setValue('-');
if (ctrlSpExeDate.getValue()=='')
ctrlSpExeDate.setValue('-');
*/
if (ctrlCat.getValue()== 'RENTAL'||ctrlCat.getValue()== 'ASSIGNMENT'||ctrlCat.getValue()== 'ROOM RENTAL')
{
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
				
pageObj.showField("loi_date");
pageObj.showField("rental_price");
pageObj.showField("rental_price_type");
pageObj.showField("ta_date");
pageObj.showField("lease_duration_no");
pageObj.showField("lease_duration_unit");
pageObj.showField("lease_start_date");
pageObj.showField("lease_expiry");
pageObj.hideField("management_fee");
pageObj.hideField("commencement_date");
pageObj.hideField("end_date");
pageObj.showField("comm_unit");
pageObj.hideField("sub_category");
pageObj.hideField("consultation_fee");
pageObj.hideField("service_commencement");
pageObj.hideField("service_completion");
pageObj.hideField("result");
pageObj.showField("reminder_agent");
pageObj.showField("reminder_tenant");
pageObj.showField("reminder_tenant_email");
}	
/*
if (ctrlLOI.getValue()=='')
ctrlLOI.setValue('');
if (ctrlTADate.getValue()=='')
ctrlTADate.setValue('');
if (ctrlLeaseDuration.getValue()=='')
ctrlLeaseDuration.setValue('-');
if (ctrlLeaseStart.getValue()=='')
ctrlLeaseStart.setValue('-');
if (ctrlLeaseEnd.getValue()=='')
ctrlLeaseEnd.setValue('-');
*/
if (ctrlCat.getValue()== 'PROPERTY MANAGEMENT')
{
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
pageObj.hideField("lease_start_date");
pageObj.hideField("lease_expiry");
pageObj.showField("management_fee");
pageObj.showField("commencement_date");
pageObj.showField("end_date");
pageObj.hideField("comm_unit");
pageObj.hideField("sub_category");
pageObj.hideField("consultation_fee");
pageObj.hideField("service_commencement");
pageObj.hideField("service_completion");
pageObj.hideField("result");
pageObj.showField("reminder_agent");
pageObj.showField("reminder_tenant");
pageObj.showField("reminder_tenant_email");
}	

if (ctrlCat.getValue()== 'JTC LEASE MANAGEMENT')
{
pageObj.showField("representing");		
pageObj.hideField("marketing_rights");
pageObj.showField("salesperson_name");
pageObj.hideField("cea_reg");
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
pageObj.hideField("commencement_date");
pageObj.hideField("end_date");
pageObj.hideField("comm_unit");
pageObj.showField("sub_category");
pageObj.showField("consultation_fee");
pageObj.showField("service_commencement");
pageObj.showField("service_completion");
pageObj.showField("result");
pageObj.hideField("reminder_agent");
pageObj.hideField("reminder_tenant");
pageObj.hideField("reminder_tenant_email");
}	

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

if (ctrlBuiltUp.getValue()=='')
ctrlBuiltUp.setValue('-');
if (ctrlBedroom.getValue()=='')
ctrlBedroom.setValue('-');
if (ctrlBathroom.getValue()=='')
ctrlBathroom.setValue('-');

if (ctrlPropType.getValue()== 'LANDED HOUSE')
{
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");
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
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.hideField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");
}

if (ctrlBuiltUp.getValue()=='')
ctrlBuiltUp.setValue('-');
if (ctrlLand.getValue()=='')
ctrlLand.setValue('-');

if (ctrlPropType.getValue()== 'OFFICE'||ctrlPropType.getValue() == 'RETAIL')
{
pageObj.showField("built_up");
pageObj.showField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.hideField("land");
pageObj.hideField("land_unit");
}

if (ctrlBuiltUp.getValue()=='')
ctrlBuiltUp.setValue('-');
if (ctrlBathroom.getValue()=='')
ctrlBathroom.setValue('-');

if (ctrlPropType.getValue()== 'LAND')
{
pageObj.hideField("built_up");
pageObj.hideField("built_up_unit");
pageObj.hideField("no_bedrooms");
pageObj.hideField("no_bathrooms");
pageObj.showField("land");
pageObj.showField("land_unit");
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







