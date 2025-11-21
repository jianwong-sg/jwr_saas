
Runner.pages.PageSettings.addPageEvent( 
	"transactions_lcsc", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlCat = Runner.getControl(pageid, 'category');
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
var ctrlConsultFee = Runner.getControl(pageid, 'consultation_fee');
var ctrlServCommence = Runner.getControl(pageid, 'service_commencement');
var ctrlServComplete = Runner.getControl(pageid, 'service_completion');
var ctrlResult = Runner.getControl(pageid, 'result');
var ctrlRemindAgent = Runner.getControl(pageid, 'reminder_agent');
var ctrlRemindTenant = Runner.getControl(pageid, 'reminder_tenant');
var ctrlReminderTenantEmail = Runner.getControl(pageid, 'reminder_tenant_email');
var ctrlRmBuiltUnit = Runner.getControl(pageid, 'rm_builtup_unit');
var ctrlFormNumber = Runner.getControl(pageid, 'form_number');

if(ctrlCat.getValue()=='SALE')
{
//hide sections
pageObj.toggleItem("tx_info_section", true );
pageObj.toggleItem("prop_info_section", true );
pageObj.toggleItem("agency_info_section", false );
pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("sale_info_section", true );
pageObj.toggleItem("jtc_lease_info_section", false );
pageObj.toggleItem("room_rental_info_section", false );
pageObj.toggleItem("comm_to_agent_section", true );
//hide fields
pageObj.showField("salesperson_name");
pageObj.showField("salesperson_email");
pageObj.showField("cea_reg");
pageObj.showField("representing");
pageObj.showField("marketing_rights");
pageObj.showField("currency");
pageObj.showField("comm_percent");
pageObj.hideField("comm_unit");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.showField("transacted_price");
pageObj.hideField("comm_earned");
pageObj.hideField("management_fee");
//hide labels
//pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("gross_comm_label", true ); 
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", false );
pageObj.toggleItem("comm_earned_label", false ); 
}

if (ctrlCat.getValue()== 'RENTAL'||ctrlCat.getValue()== 'ASSIGNMENT')
{
//hide sections
pageObj.toggleItem("tx_info_section", true );
pageObj.toggleItem("prop_info_section", true );
pageObj.toggleItem("agency_info_section", false );
pageObj.toggleItem("rental_info_section", true );
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", false );
pageObj.toggleItem("room_rental_info_section", false );
pageObj.toggleItem("comm_to_agent_section", true );
//hide fields
pageObj.showField("salesperson_name");
pageObj.showField("salesperson_email");
pageObj.showField("cea_reg");
pageObj.showField("representing");
pageObj.showField("marketing_rights");
pageObj.showField("currency");
pageObj.showField("ta_date");
pageObj.showField("loi_date");
pageObj.showField("lease_duration_no");
pageObj.showField("lease_duration_unit");
pageObj.showField("reminder_tenant");
pageObj.hideField("reminder_tenant_email");
pageObj.hideField("comm_percent");
pageObj.showField("comm_unit");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.showField("transacted_price");
pageObj.hideField("comm_earned");
pageObj.hideField("management_fee");
//hide labels
//pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("gross_comm_label", true );
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("comm_earned_label", false ); 

pageObj.toggleItem("add_save", true );
pageObj.toggleItem("add_save1", true );
pageObj.toggleItem("add_back_list1", true );
pageObj.toggleItem("add_reset1", true );
}	

if (ctrlCat.getValue()=='ROOM RENTAL')
{
//hide sections
pageObj.toggleItem("tx_info_section", true );
pageObj.toggleItem("prop_info_section", true );
pageObj.toggleItem("agency_info_section", false );
pageObj.toggleItem("rental_info_section", true );
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", false );
pageObj.toggleItem("room_rental_info_section", true );
pageObj.toggleItem("comm_to_agent_section", true );
//hide fields
pageObj.showField("salesperson_name");
pageObj.showField("salesperson_email");
pageObj.showField("cea_reg");
pageObj.showField("representing");
pageObj.showField("marketing_rights");
pageObj.showField("currency");
pageObj.showField("ta_date");
pageObj.showField("loi_date");
pageObj.showField("lease_duration_no");
pageObj.showField("lease_duration_unit");
pageObj.showField("reminder_tenant");
pageObj.hideField("reminder_tenant_email");
pageObj.hideField("comm_percent");
pageObj.showField("comm_unit");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.showField("rm_rental_rm_type");
pageObj.showField("rm_builtup");
pageObj.showField("rm_builtup_unit");
pageObj.showField("transacted_price");
pageObj.hideField("comm_earned");
pageObj.hideField("management_fee");
//hide labels
//pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("gross_comm_label", true );
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("comm_earned_label", false ); 
}	 

if (ctrlCat.getValue()== 'PROPERTY MANAGEMENT')
{
//hide sections
pageObj.toggleItem("tx_info_section", true );
pageObj.toggleItem("prop_info_section", true );
pageObj.toggleItem("agency_info_section", true );
pageObj.toggleItem("rental_info_section", true );
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", false );
pageObj.toggleItem("room_rental_info_section", false );
pageObj.toggleItem("comm_to_agent_section", false );
pageObj.toggleItem("details_preview2", false ); 
pageObj.toggleItem("details_preview6", false ); 
pageObj.toggleItem("cea_prescribed_form_section", false ); 
//hide fields
pageObj.hideField("salesperson_name");
pageObj.hideField("salesperson_email");
pageObj.hideField("cea_reg");
pageObj.showField("representing");
pageObj.hideField("marketing_rights");
pageObj.showField("currency");
pageObj.hideField("ta_date");
pageObj.hideField("loi_date");
pageObj.showField("lease_duration_no");
pageObj.showField("lease_duration_unit");
pageObj.showField("reminder_tenant");
pageObj.hideField("reminder_tenant_email");
pageObj.hideField("comm_percent");
pageObj.hideField("comm_unit");
pageObj.showField("no_bedrooms");
pageObj.showField("no_bathrooms");
pageObj.showField("transacted_price");
pageObj.hideField("comm_earned");
pageObj.showField("management_fee");
pageObj.hideField("comm_amt");
//hide labels
//pageObj.toggleItem("mag_fee_label", true );
pageObj.toggleItem("comm_label", false ); 
pageObj.toggleItem("comm_earned_label", false );  
pageObj.toggleItem("gross_comm_label", false );
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", true ); 
pageObj.toggleItem("text10", false ); 
pageObj.toggleItem("text11", false ); 
}	

if (ctrlCat.getValue()== 'JTC LEASE MANAGEMENT')
{
//hide sections
pageObj.toggleItem("tx_info_section", true );
pageObj.toggleItem("prop_info_section", true );
pageObj.toggleItem("agency_info_section", false );
pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", true );
pageObj.toggleItem("room_rental_info_section", false );

//hide fields
pageObj.showField("salesperson_name");
pageObj.showField("salesperson_email");
pageObj.showField("cea_reg");
pageObj.showField("representing");
pageObj.hideField("marketing_rights");
pageObj.showField("currency");
pageObj.hideField("comm_percent");
pageObj.hideField("comm_unit");
pageObj.hideField("transacted_price");
pageObj.hideField("comm_amt");
pageObj.hideField("comm_earned_salesperson");
pageObj.showField("comm_earned");
pageObj.hideField("management_fee");

//hide labels
//pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("comm_label", false ); 
pageObj.toggleItem("comm_earned_label", false );  
pageObj.toggleItem("gross_comm_label", false );
pageObj.toggleItem("gross_fee_label", true );
pageObj.toggleItem("net_mag_fee_label", false ); 
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

/*
var ctrlLand = Runner.getControl(pageid, 'land');
var ctrlLandUnit = Runner.getControl(pageid, 'land_unit');
if (ctrlLand.getValue()=='')
pageObj.hideField("land_unit");
*/
//hide controls in property info
var ctrlPropType = Runner.getControl(pageid, 'prop_type');
var ctrlBuiltUp = Runner.getControl(pageid, 'builtup');
var ctrlBedroom = Runner.getControl(pageid, 'no_bedrooms');
var ctrlBathroom = Runner.getControl(pageid, 'no_bathrooms');
var ctrlLand = Runner.getControl(pageid, 'landland');


if(ctrlPropType.getValue()== 'HDB APARTMENT'|| ctrlPropType.getValue() == 'APARTMENT / CONDO')
{
pageObj.toggleItem("builtup", true ); 
pageObj.toggleItem("no_bedrooms", true ); 
pageObj.toggleItem("no_bathrooms", true ); 
pageObj.toggleItem("landland", false ); 
} 

if (ctrlBuiltUp.getValue()==null)
ctrlBuiltUp.setValue('-');
if (ctrlBedroom.getValue()==null)
ctrlBedroom.setValue('-');
if (ctrlBathroom.getValue()==null)
ctrlBathroom.setValue('-');

if (ctrlPropType.getValue()== 'LANDED HOUSE')
{
pageObj.toggleItem("builtup", true ); 
pageObj.toggleItem("no_bedrooms", true ); 
pageObj.toggleItem("no_bathrooms", true ); 
pageObj.toggleItem("landland", true ); 
}	
if (ctrlBuiltUp.getValue()==null)
ctrlBuiltUp.setValue('-');
if (ctrlBedroom.getValue()==null)
ctrlBedroom.setValue('-');
if (ctrlBathroom.getValue()==null)
ctrlBathroom.setValue('-');
if (ctrlLand.getValue()==null)
ctrlLand.setValue('-');

if (ctrlPropType.getValue()== 'INDUSTRIAL')
{
pageObj.toggleItem("builtup", true ); 
pageObj.toggleItem("no_bedrooms", false ); 
pageObj.toggleItem("no_bathrooms", true ); 
pageObj.toggleItem("landland", true ); 
pageObj.toggleItem("rm_rental_rm_type", false ); 
pageObj.toggleItem("rm_builtup", false ); 

}

if (ctrlBuiltUp.getValue()==null)
ctrlBuiltUp.setValue('-');
if (ctrlLand.getValue()==null)
ctrlLand.setValue('-');

if (ctrlPropType.getValue()== 'OFFICE'||ctrlPropType.getValue() == 'RETAIL')
{
pageObj.toggleItem("builtup", true ); 
pageObj.toggleItem("no_bedrooms", false ); 
pageObj.toggleItem("no_bathrooms", true ); 
pageObj.toggleItem("landland", false ); 
pageObj.toggleItem("rm_rental_rm_type", false ); 
pageObj.toggleItem("rm_builtup", false ); 
}

if (ctrlBuiltUp.getValue()==null)
ctrlBuiltUp.setValue('-');
if (ctrlBathroom.getValue()==null)
ctrlBathroom.setValue('-');

if (ctrlPropType.getValue()== 'LAND')
{
pageObj.toggleItem("builtup", false ); 
pageObj.toggleItem("no_bedrooms", false ); 
pageObj.toggleItem("no_bathrooms", false ); 
pageObj.toggleItem("landland", false ); 
pageObj.toggleItem("rm_rental_rm_type", false ); 
pageObj.toggleItem("rm_builtup", true ); 
}
if (ctrlLand.getValue()==null)
ctrlLand.setValue('-');
/*
//show prescribed forms
var ctrlCategory = Runner.getControl(pageid, 'category');
var ctrlRepresenting = Runner.getControl(pageid, 'representing');
var ctrlMarketingRights = Runner.getControl(pageid, 'marketing_rights');
//show form1
if(ctrlCategory.getValue()=='SALE'&&ctrlRepresenting.getValue()=='SELLER'&&ctrlMarketingRights.getValue()=='Non-Exclusive')
{
pageObj.toggleItem("details_form1", true ); 
pageObj.toggleItem("details_form2", false ); 
pageObj.toggleItem("details_form3", false ); 
pageObj.toggleItem("details_form4", false ); 
pageObj.toggleItem("details_form5", false ); 
pageObj.toggleItem("details_form6", false ); 
pageObj.toggleItem("details_form7", false ); 
pageObj.toggleItem("details_form8", false ); 
pageObj.toggleItem("cea_f1_text", true );
pageObj.toggleItem("cea_f2_text", false );
pageObj.toggleItem("cea_f3_text", false );
pageObj.toggleItem("cea_f4_text", false );
pageObj.toggleItem("cea_f5_text", false );
pageObj.toggleItem("cea_f6_text", false );
pageObj.toggleItem("cea_f7_text", false );
pageObj.toggleItem("cea_f8_text", false );
}
//show form2
if(ctrlCategory.getValue()=='SALE'&&ctrlRepresenting.getValue()=='BUYER'&&ctrlMarketingRights.getValue()=='Non-Exclusive')
{

pageObj.toggleItem("details_form1", false ); 
pageObj.toggleItem("details_form2", true ); 
pageObj.toggleItem("details_form3", false ); 
pageObj.toggleItem("details_form4", false ); 
pageObj.toggleItem("details_form5", false ); 
pageObj.toggleItem("details_form6", false ); 
pageObj.toggleItem("details_form7", false ); 
pageObj.toggleItem("details_form8", false );
pageObj.toggleItem("cea_f1_text", false );
pageObj.toggleItem("cea_f2_text", true );
pageObj.toggleItem("cea_f3_text", false );
pageObj.toggleItem("cea_f4_text", false );
pageObj.toggleItem("cea_f5_text", false );
pageObj.toggleItem("cea_f6_text", false );
pageObj.toggleItem("cea_f7_text", false );
pageObj.toggleItem("cea_f8_text", false );
}
//show form3
if(ctrlCategory.getValue()=='RENTAL'&&ctrlRepresenting.getValue()=='LANDLORD'&&ctrlMarketingRights.getValue()=='Non-Exclusive')
{
pageObj.toggleItem("details_form1", false ); 
pageObj.toggleItem("details_form2", false ); 
pageObj.toggleItem("details_form3", true ); 
pageObj.toggleItem("details_form4", false ); 
pageObj.toggleItem("details_form5", false ); 
pageObj.toggleItem("details_form6", false ); 
pageObj.toggleItem("details_form7", false ); 
pageObj.toggleItem("details_form8", false ); 
pageObj.toggleItem("cea_f1_text", false );
pageObj.toggleItem("cea_f2_text", false );
pageObj.toggleItem("cea_f3_text", true );
pageObj.toggleItem("cea_f4_text", false );
pageObj.toggleItem("cea_f5_text", false );
pageObj.toggleItem("cea_f6_text", false );
pageObj.toggleItem("cea_f7_text", false );
pageObj.toggleItem("cea_f8_text", false );
}
//show form4
if(ctrlCategory.getValue()=='RENTAL'&&ctrlRepresenting.getValue()=='TENANT'&&ctrlMarketingRights.getValue()=='Non-Exclusive')
{
pageObj.toggleItem("details_form1", false ); 
pageObj.toggleItem("details_form2", false ); 
pageObj.toggleItem("details_form3", false ); 
pageObj.toggleItem("details_form4", true ); 
pageObj.toggleItem("details_form5", false ); 
pageObj.toggleItem("details_form6", false ); 
pageObj.toggleItem("details_form7", false ); 
pageObj.toggleItem("details_form8", false ); 
pageObj.toggleItem("cea_f1_text", false );
pageObj.toggleItem("cea_f2_text", false );
pageObj.toggleItem("cea_f3_text", false );
pageObj.toggleItem("cea_f4_text", true );
pageObj.toggleItem("cea_f5_text", false );
pageObj.toggleItem("cea_f6_text", false );
pageObj.toggleItem("cea_f7_text", false );
pageObj.toggleItem("cea_f8_text", false );
}
//show form5
if(ctrlCategory.getValue()=='SALE'&&ctrlRepresenting.getValue()=='SELLER'&&ctrlMarketingRights.getValue()=='Exclusive')
{
pageObj.toggleItem("details_form1", false ); 
pageObj.toggleItem("details_form2", false ); 
pageObj.toggleItem("details_form3", false ); 
pageObj.toggleItem("details_form4", false ); 
pageObj.toggleItem("details_form5", true ); 
pageObj.toggleItem("details_form6", false ); 
pageObj.toggleItem("details_form7", false ); 
pageObj.toggleItem("details_form8", false ); 
pageObj.toggleItem("cea_f1_text", false );
pageObj.toggleItem("cea_f2_text", false );
pageObj.toggleItem("cea_f3_text", false );
pageObj.toggleItem("cea_f4_text", false );
pageObj.toggleItem("cea_f5_text", true );
pageObj.toggleItem("cea_f6_text", false );
pageObj.toggleItem("cea_f7_text", false );
pageObj.toggleItem("cea_f8_text", false );
}
//show form6
if(ctrlCategory.getValue()=='SALE'&&ctrlRepresenting.getValue()=='BUYER'&&ctrlMarketingRights.getValue()=='Exclusive')
{
pageObj.toggleItem("details_form1", false ); 
pageObj.toggleItem("details_form2", false ); 
pageObj.toggleItem("details_form3", false ); 
pageObj.toggleItem("details_form4", false ); 
pageObj.toggleItem("details_form5", false ); 
pageObj.toggleItem("details_form6", true ); 
pageObj.toggleItem("details_form7", false ); 
pageObj.toggleItem("details_form8", false ); 
pageObj.toggleItem("cea_f1_text", false );
pageObj.toggleItem("cea_f2_text", false );
pageObj.toggleItem("cea_f3_text", false );
pageObj.toggleItem("cea_f4_text", false );
pageObj.toggleItem("cea_f5_text", false );
pageObj.toggleItem("cea_f6_text", true );
pageObj.toggleItem("cea_f7_text", false );
pageObj.toggleItem("cea_f8_text", false );
}
//show form7
if(ctrlCategory.getValue()=='LEASE'&&ctrlRepresenting.getValue()=='LANDLORD'&&ctrlMarketingRights.getValue()=='Exclusive')
{
pageObj.toggleItem("details_form1", false ); 
pageObj.toggleItem("details_form2", false ); 
pageObj.toggleItem("details_form3", false ); 
pageObj.toggleItem("details_form4", false ); 
pageObj.toggleItem("details_form5", false ); 
pageObj.toggleItem("details_form6", false ); 
pageObj.toggleItem("details_form7", true ); 
pageObj.toggleItem("details_form8", false ); 
pageObj.toggleItem("cea_f1_text", false );
pageObj.toggleItem("cea_f2_text", false );
pageObj.toggleItem("cea_f3_text", false );
pageObj.toggleItem("cea_f4_text", false );
pageObj.toggleItem("cea_f5_text", false );
pageObj.toggleItem("cea_f6_text", false );
pageObj.toggleItem("cea_f7_text", true );
pageObj.toggleItem("cea_f8_text", false );
}
//show form8
if(ctrlCategory.getValue()=='LEASE'&&ctrlRepresenting.getValue()=='TENANT'&&ctrlMarketingRights.getValue()=='Exclusive')
{
pageObj.toggleItem("details_form1", false ); 
pageObj.toggleItem("details_form2", false ); 
pageObj.toggleItem("details_form3", false ); 
pageObj.toggleItem("details_form4", false ); 
pageObj.toggleItem("details_form5", false ); 
pageObj.toggleItem("details_form6", false ); 
pageObj.toggleItem("details_form7", false ); 
pageObj.toggleItem("details_form8", true ); 
pageObj.toggleItem("cea_f1_text", false );
pageObj.toggleItem("cea_f2_text", false );
pageObj.toggleItem("cea_f3_text", false );
pageObj.toggleItem("cea_f4_text", false );
pageObj.toggleItem("cea_f5_text", false );
pageObj.toggleItem("cea_f6_text", false );
pageObj.toggleItem("cea_f7_text", false );
pageObj.toggleItem("cea_f8_text", true );
}
*/
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
	"transactions_lcsc", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//retain scroll position after reload
/*
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
*/
// Place event code here.
// Use "Add Action" button to add code snippets.    

// ===== Scroll to Top ==== 
$(window).scroll(function() {
if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
$('#return-to-top-form').fadeIn(200);    // Fade in the arrow
} else {
$('#return-to-top-form').fadeOut(200);   // Else fade out the arrow
}
});
$('#return-to-top-form').click(function() {      // When arrow is clicked
$('body,html').animate({
scrollTop : 0                       // Scroll to top of body
}, 500);
});
//reload without losing scroll position
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

//pageObj.toggleItem("simple_search", true );
});







