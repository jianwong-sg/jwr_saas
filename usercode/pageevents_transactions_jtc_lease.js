
Runner.pages.PageSettings.addPageEvent( 
	"transactions_jtc_lease", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
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

if(ctrlCat.getValue()=='SALE')
{
pageObj.toggleItem("sale_info_section", true );
pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", false ); 
pageObj.toggleItem("gross_mag_fee_label", false );
pageObj.toggleItem("mag_amt", false ); 
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("net_mag_fee", false ); 

pageObj.showField("comm_percent");
} 

if (ctrlCat.getValue()== 'RENTAL'||ctrlCat.getValue()== 'ASSIGNMENT'||ctrlCat.getValue() == 'ROOM RENTAL')
{
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("rental_info_section", true );
pageObj.toggleItem("jtc_lease_info_section", false ); 
pageObj.toggleItem("gross_mag_fee_label", false );
pageObj.toggleItem("mag_amt", false ); 
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("net_mag_fee", false ); 

pageObj.hideField("agency");
pageObj.hideField("agency_cea");
pageObj.hideField("management_fee");
pageObj.hideField("comm_percent");
}	

if (ctrlCat.getValue()== 'PROPERTY MANAGEMENT')
{
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("rental_info_section", true );
pageObj.toggleItem("jtc_lease_info_section", false ); 
pageObj.toggleItem("comm_to_agent_section", false ); 
pageObj.toggleItem("comm_label", false ); 
pageObj.toggleItem("comm_amt", false ); 
//pageObj.toggleItem("gross_comm_label", false ); 

pageObj.hideField("salesperson_name");
pageObj.hideField("cea_reg");
pageObj.hideField("salesperson_email");
pageObj.hideField("marketing_rights");
pageObj.hideField("ta_date");
pageObj.hideField("loi_date");
pageObj.toggleItem("lease_duration", false ); 
//pageObj.hideField("lease_duration_no");
//pageObj.hideField("lease_duration_unit");
pageObj.hideField("comm_percent");
pageObj.hideField("comm_unit");
pageObj.hideField("transacted_price");
}	
if (ctrlCat.getValue()== 'JTC LEASE MANAGEMENT')
{
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", true ); 
pageObj.toggleItem("gross_mag_fee_label", false );
pageObj.toggleItem("mag_amt", false ); 
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("net_mag_fee", false ); 

pageObj.hideField("comm_percent");
pageObj.hideField("transacted_price");
pageObj.hideField("comm_unit");
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
pageObj.toggleItem("landland", false );
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
pageObj.toggleItem("landland", false );
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

//hide CDD and prescribed form section
pageObj.toggleItem("cdd_section", false ); 
pageObj.toggleItem("details_form1", false ); 
pageObj.toggleItem("details_form2", false ); 
pageObj.toggleItem("details_form3", false ); 
pageObj.toggleItem("details_form4", false ); 
pageObj.toggleItem("details_form5", false ); 
pageObj.toggleItem("details_form6", false ); 
pageObj.toggleItem("details_form7", false ); 
pageObj.toggleItem("details_form8", false ); 

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
	"transactions_jtc_lease", 
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
});







