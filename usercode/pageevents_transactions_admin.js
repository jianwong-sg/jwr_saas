
Runner.pages.PageSettings.addPageEvent( 
	"transactions-admin", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//hide cdd section
var partyname=$("#edit22_name").val();
if(partyname!=''){
pageObj.toggleItem("cdd_section", false ); 
}



//cdd measure alert
var ctrlCddResult = Runner.getControl(pageid, 'cdd_result');
var ctrlCddResult2 = Runner.getControl(pageid, 'cdd_check_result');
if(ctrlCddResult.getValue()!='' && ctrlCddResult2.getValue()=='')
{
alert('Conduct of CDD Measures is required! Use the prescribed questionnaire to perform the check.');
pageObj.toggleItem("cdd_section", true ); 
}

//str alert
var ctrlSTR = Runner.getControl(pageid, 'str_filing_date');
if(ctrlCddResult2.getValue()=='Suspicious Transaction Report Required' && ctrlSTR.getValue()=='')
alert('Filing a Suspicious Transaction Report is required!');


if (document.activeElement instanceof HTMLElement)
    document.activeElement.blur();


//hide check description
//pageObj.toggleItem("details_preview_cdd", false );
var ctrlSLSCust = Runner.getControl(pageid, 'sls_cust');
if(ctrlSLSCust.getValue()!="")
$("#addButton3").hide();

ctrlSLSCust.on('change', function(e) {
  if (this.getValue() == '') 
$("#addButton3").show();
pageObj.toggleItem("check_result_text", true );
pageObj.toggleItem("sls_cust", true );
pageObj.toggleItem("pps_cust", true );
pageObj.toggleItem("sls_result", true );
pageObj.toggleItem("pps_result", true );
pageObj.toggleItem("name_cust", true );
pageObj.toggleItem("namelist_result", true );
pageObj.toggleItem("text16", true );
pageObj.toggleItem("text17", true );
pageObj.toggleItem("text18", true );

});

//populate result if record found in un sanction name and hyperlink to page
var x=$('[id^=value_sls_result_]').val();
if(x=='Customer name was scanned against the UN Sanction list. NO name matches.')
{
$('[id^=value_sls_result_]');                                                                                                                                                                                                                                                                                                                                                                                                                   
}
else if(x=='Alert! Customer name matches a name in the UN Sanction list. Click here to view result.')
{
$('[id^=value_sls_result_]');
$('[id^=edit1_sls_result_').contents().wrap('<a class="ex1" href="/aml/un_sanction_list.php?q=(allname~contains~'+proxy['cddchecklistid']+')" target="_blank"></a>');
}

//populate result if record found in pps and hyperlink to page
var x=$('[id^=value_pps_result_]').val();
if(x=='Customer name was scanned against the Panama Papers list. NO name matches.')
{
$('[id^=value_pps_result_]');
}
else if(x=='Alert! Customer name matches a name in the Panama Papers list. Click here to view result.')
{
$('[id^=value_pps_result_]');
$('[id^=edit1_pps_result_').contents().wrap('<a class="ex1" href="/aml/panama_papers_list.php?q=(name~contains~'+proxy['cddchecklistid']+')" target="_blank"></a>');
}

//populate result if record found in name list and hyperlink to page
var x=$('[id^=value_namelist_result_]').val();
if(x=='Customer name was scanned against the Name list. NO name matches.')
{
$('[id^=value_namelist_result_]');
}
else if(x=='Alert! Customer name matches a name in the Name list. Click here to view result.')
{
$('[id^=value_namelist_result_]');
$('[id^=edit1_namelist_result_').contents().wrap('<a class="ex1" href="/aml/namelist_list.php?q=(name~contains~'+proxy['cddchecklistid']+')" target="_blank"></a>');
}

//hide controls in transaction
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
//hide labels
pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("gross_comm_label", true ); 
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", false );
pageObj.toggleItem("comm_earned_label", false );

pageObj.toggleItem("add_save", true );
pageObj.toggleItem("add_save1", true );
pageObj.toggleItem("add_back_list1", true );
pageObj.toggleItem("add_reset1", true );

ctrlSalePrice.addValidation('IsRequired');
ctrlAgentName.addValidation('IsRequired');
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
//hide labels
pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("gross_comm_label", true );
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("comm_earned_label", false );

pageObj.toggleItem("add_save", true );
pageObj.toggleItem("add_save1", true );
pageObj.toggleItem("add_back_list1", true );
pageObj.toggleItem("add_reset1", true );

ctrlRental.addValidation('IsRequired');
ctrlAgentName.addValidation('IsRequired');
ctrlRentPriceType.addValidation('IsRequired');
ctrlLeaseStart.addValidation('IsRequired');
ctrlLeaseEnd.addValidation('IsRequired');
ctrlLeaseDuration.addValidation('IsRequired');
ctrlLeaseDuUnit.addValidation('IsRequired');
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
//hide labels
pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("gross_comm_label", true );
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("comm_earned_label", false );

ctrlRental.addValidation('IsRequired');
ctrlRentPriceType.addValidation('IsRequired');
ctrlLeaseStart.addValidation('IsRequired');
ctrlLeaseEnd.addValidation('IsRequired');
ctrlLeaseDuration.addValidation('IsRequired');
ctrlLeaseDuUnit.addValidation('IsRequired');
ctrlRmBuiltUnit.addValidation('IsRequired');

ctrlAgentName.addValidation('IsRequired');

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
pageObj.hideField("transacted_price");
pageObj.hideField("comm_earned");
//hide labels
pageObj.toggleItem("mag_fee_label", true );
pageObj.toggleItem("comm_label", false ); 
pageObj.toggleItem("comm_earned_label", false );  
pageObj.toggleItem("gross_comm_label", false );
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", true ); 

ctrlAgency.addValidation('IsRequired');
ctrlRental.addValidation('IsRequired');	
ctrlLeaseStart.addValidation('IsRequired');		
ctrlLeaseEnd.addValidation('IsRequired');
ctrlLeaseDuration.addValidation('IsRequired');
ctrlLeaseDuUnit.addValidation('IsRequired');
//ctrlManageFee.addValidation('IsRequired');	
ctrlMarketing.removeValidation('IsRequired');	

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

//hide labels
pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("comm_label", false ); 
pageObj.toggleItem("comm_earned_label", false );  
pageObj.toggleItem("gross_comm_label", false );
pageObj.toggleItem("gross_fee_label", true );
pageObj.toggleItem("net_mag_fee_label", false ); 

ctrlAgentName.addValidation('IsRequired');
ctrlMarketing.removeValidation('IsRequired');
}	

//calculate comm
ctrlConsultFee.on('keyup', function(e) {
var consultfee = ctrlConsultFee.getValue();
if (consultfee != consultfee * 1) {
ctrlAmount.setValue('');
return;
}
var transacted = ctrlTransacted.getValue();
var amount = Math.round(transacted = consultfee, 2);
ctrlAmount.setValue(amount.toFixed(2));
showTotalGrossCommission();
});

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
//hide labels
pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("gross_comm_label", true ); 
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", false );
pageObj.toggleItem("comm_earned_label", false );

pageObj.toggleItem("add_save", true );
pageObj.toggleItem("add_save1", true );
pageObj.toggleItem("add_back_list1", true );
pageObj.toggleItem("add_reset1", true );

ctrlSalePrice.addValidation('IsRequired');
ctrlAgentName.addValidation('IsRequired');

ctrlTransacted.setValue('');		
ctrlRepresent.setValue('');
ctrlMarketing.setValue('');
ctrlSalePrice.setValue('');
ctrlValuation.setValue('');
ctrlOption.setValue('');
ctrlOtpDate.setValue('');
ctrlOtpExeDate.setValue('');
ctrlEstCompletion.setValue('');
ctrlSpExeDate.setValue('');
//ctrlUnit.setValue('');
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

if (this.getValue() == 'RENTAL'||this.getValue() == 'ASSIGNMENT')
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
//hide labels
pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("gross_comm_label", true );
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("comm_earned_label", false );

ctrlRentPriceType.addValidation('IsRequired');
ctrlLeaseStart.addValidation('IsRequired');
ctrlLeaseEnd.addValidation('IsRequired');
ctrlLeaseDuration.addValidation('IsRequired');
ctrlLeaseDuUnit.addValidation('IsRequired');
//ctrlAgentName.addValidation('IsRequired');
ctrlTransacted.setValue('');	
ctrlRepresent.setValue('');	
ctrlMarketing.setValue('');
ctrlLOI.setValue('');
ctrlRental.setValue('');
//ctrlRentPriceType.setValue('');
ctrlTADate.setValue('');
ctrlLeaseDuration.setValue('');
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

if (this.getValue() == 'ROOM RENTAL')
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
//hide labels
pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("gross_comm_label", true );
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("comm_earned_label", false );

ctrlRental.addValidation('IsRequired');
ctrlRentPriceType.addValidation('IsRequired');
ctrlLeaseStart.addValidation('IsRequired');
ctrlLeaseEnd.addValidation('IsRequired');
ctrlLeaseDuration.addValidation('IsRequired');
ctrlLeaseDuUnit.addValidation('IsRequired');
ctrlRmBuiltUnit.addValidation('IsRequired');

ctrlTransacted.setValue('');	
ctrlRepresent.setValue('');	
ctrlMarketing.setValue('');	
ctrlLOI.setValue('');
ctrlRental.setValue('');
//ctrlRentPriceType.setValue('');
ctrlTADate.setValue('');
ctrlLeaseDuration.setValue('');
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
//hide sections
pageObj.toggleItem("tx_info_section", true );
pageObj.toggleItem("prop_info_section", true );
pageObj.toggleItem("agency_info_section", true );
pageObj.toggleItem("rental_info_section", true );
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", false );
pageObj.toggleItem("room_rental_info_section", false );
pageObj.toggleItem("comm_to_agent_section", false );
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
pageObj.hideField("transacted_price");
pageObj.hideField("comm_earned");
//hide labels
pageObj.toggleItem("mag_fee_label", true );
pageObj.toggleItem("comm_label", false ); 
pageObj.toggleItem("comm_earned_label", false );  
pageObj.toggleItem("gross_comm_label", false );
pageObj.toggleItem("gross_fee_label", false );
pageObj.toggleItem("net_mag_fee_label", true ); 

ctrlAgency.addValidation('IsRequired');
ctrlRental.addValidation('IsRequired');	
ctrlLeaseStart.addValidation('IsRequired');		
ctrlLeaseEnd.addValidation('IsRequired');
ctrlLeaseDuration.addValidation('IsRequired');
ctrlLeaseDuUnit.addValidation('IsRequired');
ctrlMarketing.removeValidation('IsRequired');	

ctrlTransacted.setValue('');
ctrlRepresent.setValue('');
ctrlRental.setValue('');
//ctrlManageFee.setValue('');
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
if (this.getValue() == 'JTC LEASE MANAGEMENT')
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

//hide labels
pageObj.toggleItem("mag_fee_label", false );
pageObj.toggleItem("comm_label", false ); 
pageObj.toggleItem("comm_earned_label", false );  
pageObj.toggleItem("gross_comm_label", false );
pageObj.toggleItem("gross_fee_label", true );
pageObj.toggleItem("net_mag_fee_label", false ); 

ctrlAgentName.addValidation('IsRequired');
ctrlTransacted.setValue('');
ctrlRepresent.setValue('');
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
//ctrlResult.setValue('');
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
ctrlReminderTenantEmail.setValue('');
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
pageObj.hideField("rm");
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
//var ctrlCommAtm = Runner.getControl(pageid, 'comm_amt');
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


Runner.pages.PageSettings.addPageEvent( 
	"transactions-admin", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		/*
var ctrlRmBuiltup = Runner.getControl(pageid, 'rm_builtup');
//var ctrlRmBuiltupUnit = Runner.getControl(pageid, 'rm_builtup_unit');
if(ctrlRmBuiltup.getValue()==null)
pageObj.hideField("rm_builtup_unit");
*/

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
var ctrlRentalPrice = Runner.getControl(pageid, 'rental_price');
var ctrlRentPriceType = Runner.getControl(pageid, 'rental_price_type');
var ctrlRental = Runner.getControl(pageid, 'rental');
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
/*
pageObj.toggleItem("sale_info_section", true );
pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", false ); 
pageObj.toggleItem("gross_mag_fee_label", false );
pageObj.toggleItem("mag_amt", false ); 
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("net_mag_fee", false ); 
pageObj.toggleItem("agency_info_section", false ); 
*/
pageObj.hideField("rm_rental_rm_type");
pageObj.hideField("rm_builtup");
pageObj.hideField("comm_unit");
pageObj.showField("comm_percent");
} 

if (ctrlCat.getValue()== 'RENTAL'||ctrlCat.getValue()== 'ASSIGNMENT')
{
/*
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("rental_info_section", true );
pageObj.toggleItem("jtc_lease_info_section", false ); 
pageObj.toggleItem("gross_mag_fee_label", false );
pageObj.toggleItem("mag_amt", false ); 
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("net_mag_fee", false ); 
pageObj.toggleItem("agency_info_section", false ); 
*/
//pageObj.hideField("agency");
//pageObj.hideField("agency_cea");
//pageObj.hideField("management_fee");
pageObj.hideField("comm_percent");
pageObj.toggleItem("land_size", false ); 
pageObj.toggleItem("room_size", false ); 
}	

if (ctrlCat.getValue()== 'ROOM RENTAL')
{
/*
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("rental_info_section", true );
pageObj.toggleItem("jtc_lease_info_section", false ); 
pageObj.toggleItem("gross_mag_fee_label", false );
pageObj.toggleItem("mag_amt", false ); 
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("net_mag_fee", false ); 
pageObj.toggleItem("agency_info_section", false ); 
*/
//pageObj.hideField("agency");
//pageObj.hideField("agency_cea");
//pageObj.hideField("management_fee");
pageObj.hideField("comm_percent");
pageObj.showField("rm_rental_rm_type");
pageObj.showField("rm_builtup");
pageObj.showField("rm_builtup_unit");
pageObj.toggleItem("land_size", false ); 

}	 

if (ctrlCat.getValue()== 'PROPERTY MANAGEMENT')
{
/*
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("rental_info_section", true );
pageObj.toggleItem("jtc_lease_info_section", false ); 
pageObj.toggleItem("comm_to_agent_section", false ); 
pageObj.toggleItem("comm_label", false ); 
pageObj.toggleItem("comm_amt", false ); 
pageObj.toggleItem("agency_info_section", true ); 
//pageObj.toggleItem("gross_comm_label", false ); 
*/
pageObj.hideField("salesperson_name");
pageObj.hideField("cea_reg");
pageObj.hideField("salesperson_email");
pageObj.hideField("marketing_rights");
pageObj.hideField("ta_date");
pageObj.hideField("loi_date");
pageObj.toggleItem("lease_duration", false ); 
pageObj.toggleItem("land_size", false ); 
pageObj.toggleItem("room_size", false );

pageObj.hideField("comm_percent");
pageObj.hideField("comm_unit");
pageObj.hideField("transacted_price");

}	
if (ctrlCat.getValue()== 'JTC LEASE MANAGEMENT')
{
/*
pageObj.toggleItem("sale_info_section", false );
pageObj.toggleItem("rental_info_section", false );
pageObj.toggleItem("jtc_lease_info_section", true ); 
pageObj.toggleItem("gross_mag_fee_label", false );
pageObj.toggleItem("mag_amt", false ); 
pageObj.toggleItem("net_mag_fee_label", false ); 
pageObj.toggleItem("net_mag_fee", false ); 
pageObj.toggleItem("agency_info_section", false ); 
*/
pageObj.hideField("marketing_rights");
pageObj.hideField("comm_percent");
pageObj.hideField("transacted_price");
pageObj.hideField("comm_unit");
//pageObj.toggleItem("land_size", false ); 
pageObj.toggleItem("room_size", false ); 

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

var ctrlLand = Runner.getControl(pageid, 'land');
var ctrlLandUnit = Runner.getControl(pageid, 'land_unit');
if (ctrlLand.getValue()=='')
pageObj.hideField("land_unit");
/*
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
{
if (ctrlLand.getValue()=='')
ctrlLand.setValue('-');
}
}




if (ctrlRemarks.getValue()== '')
{
pageObj.hideField("remarks");	
}
*/
//hide CDD and prescribed form section
//pageObj.toggleItem("cdd_section", false ); 
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
	"transactions-admin", 
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







