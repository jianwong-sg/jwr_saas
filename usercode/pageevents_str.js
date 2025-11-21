
Runner.pages.PageSettings.addPageEvent( 
	"str", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		

setTimeout(function(){ $(window).scrollTop(localStorage["posStorage"]);}, 500);
	
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
});


Runner.pages.PageSettings.addPageEvent( 
	"str", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlTranType = Runner.getControl(pageid, 'transact_type');
var ctrlValuation = Runner.getControl(pageid, 'valuation');
var ctrlLeasePeriod = Runner.getControl(pageid, 'lease_period');
if(ctrlTranType.getValue() === "SALE"){
pageObj.showField("valuation");
pageObj.hideField("lease_period");
pageObj.hideField("lease_period_unit");
}
if(ctrlTranType.getValue() === "RENTAL"){
pageObj.hideField("valuation");
pageObj.showField("lease_period");
pageObj.showField("lease_period_unit");
}

ctrlTranType.on('change', function(e) {
if (this.getValue() === 'SALE') {
pageObj.showField("valuation");
pageObj.hideField("lease_period");
pageObj.hideField("lease_period_unit");
}
if (this.getValue() === 'RENTAL'){
pageObj.hideField("valuation");
pageObj.showField("lease_period");
pageObj.showField("lease_period_unit");
}
});

pageObj.toggleItem("entity_info_section", false ); 
pageObj.toggleItem("client_info_section", false ); 
//hide entiy or individual particulars
var ctrlCustomerType = Runner.getControl(pageid, 'customer_type');
var ctrlCustId = Runner.getControl(pageid, 'indi_id');
var ctrlRegno = Runner.getControl(pageid, 'reg_no');

if(ctrlCustomerType.getValue()==='ENTITY'){
pageObj.toggleItem("entity_info_section", true ); 
pageObj.toggleItem("client_info_section", false ); 
ctrlRegno.addValidation('IsRequired');
}
if(ctrlCustomerType.getValue()==='INDIVIDUAL'){
pageObj.toggleItem("entity_info_section", false ); 
pageObj.toggleItem("client_info_section", true ); 
ctrlCustId.addValidation('IsRequired');
}
ctrlCustomerType.on('change', function(e) {
if (this.getValue() === 'ENTITY')
{
pageObj.toggleItem("entity_info_section", true ); 
pageObj.toggleItem("client_info_section", false ); 
ctrlRegno.addValidation('IsRequired');
} 
if (this.getValue() === 'INDIVIDUAL')
{
pageObj.toggleItem("entity_info_section", false ); 
pageObj.toggleItem("client_info_section", true ); 
ctrlCustId.addValidation('IsRequired');
} 
});

this.on('afterClose'||this.on('afterSave'), function() {
location.reload();
});

setTimeout(function(){ $(window).scrollTop(localStorage["posStorage"]);}, 500);
	
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
});


Runner.pages.PageSettings.addPageEvent( 
	"str", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlTranType = Runner.getControl(pageid, 'transact_type');
var ctrlValuation = Runner.getControl(pageid, 'valuation');
var ctrlLeasePeriod = Runner.getControl(pageid, 'lease_period');
if(ctrlTranType.getValue() === "SALE"){
pageObj.showField("valuation");
pageObj.hideField("lease_period");
pageObj.hideField("lease_period_unit");
}
if(ctrlTranType.getValue() === "RENTAL"){
pageObj.hideField("valuation");
pageObj.showField("lease_period");
pageObj.showField("lease_period_unit");
}

ctrlTranType.on('change', function(e) {
if (this.getValue() === 'SALE') {
pageObj.showField("valuation");
pageObj.hideField("lease_period");
pageObj.hideField("lease_period_unit");
}
if (this.getValue() === 'RENTAL'){
pageObj.hideField("valuation");
pageObj.showField("lease_period");
pageObj.showField("lease_period_unit");
}
});


//hide entiy or individual particulars
var ctrlCustomerType = Runner.getControl(pageid, 'customer_type');
var ctrlCustId = Runner.getControl(pageid, 'indi_id');
var ctrlRegno = Runner.getControl(pageid, 'reg_no');

if(ctrlCustomerType.getValue()==='ENTITY'){
pageObj.toggleItem("entity_info_section", true ); 
pageObj.toggleItem("client_info_section", false ); 
ctrlRegno.addValidation('IsRequired');
}
if(ctrlCustomerType.getValue()==='INDIVIDUAL'){
pageObj.toggleItem("entity_info_section", false ); 
pageObj.toggleItem("client_info_section", true ); 
ctrlCustId.addValidation('IsRequired');
}
ctrlCustomerType.on('change', function(e) {
if (this.getValue() === 'ENTITY')
{
pageObj.toggleItem("entity_info_section", true ); 
pageObj.toggleItem("client_info_section", false ); 
ctrlRegno.addValidation('IsRequired');
} 
if (this.getValue() === 'INDIVIDUAL')
{
pageObj.toggleItem("entity_info_section", false ); 
pageObj.toggleItem("client_info_section", true ); 
ctrlCustId.addValidation('IsRequired');
} 
});

this.on('afterClose'||this.on('afterSave'), function() {
location.reload();
});

setTimeout(function(){ $(window).scrollTop(localStorage["posStorage"]);}, 500);
	
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
});







