
Runner.pages.PageSettings.addPageEvent( 
	"my_comm", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//hide controls in transaction
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

if(ctrlCat.getValue()=='SALE')
{
pageObj.showField("representing");		
pageObj.showField("marketing_rights");
pageObj.showField("salesperson_name");
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
		pageObj.hideField("comm_unit");
			
} 
if (ctrlCat.getValue()== 'RENTAL'||ctrlCat.getValue()== 'ASSIGNMENT')
{
pageObj.showField("representing");		
pageObj.showField("marketing_rights");
pageObj.showField("salesperson_name");
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
		pageObj.showField("comm_unit");
				
}	
if (ctrlCat.getValue()== 'PROPERTY MANAGEMENT')
{
pageObj.showField("representing");		
pageObj.hideField("marketing_rights");
pageObj.showField("salesperson_name");
		pageObj.hideField("marketing_rights");
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
		pageObj.showField("comm_unit");
				
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







