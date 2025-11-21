
Runner.pages.PageSettings.addPageEvent( 
	"form3", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		$("[data-fieldname^='gst_include']").hide();
// dropdown control
var ctrlGST = Runner.getControl(pageid, 'GST');
// target field to appear/disappear
var ctrlgst_include = Runner.getControl(pageid, 'gst_include');

ctrlGST.on('change', function(){
if (this.getValue() == "Yes")
{
ctrlgst_include.show();
ctrlgst_include.addValidation('IsRequired');
$("[data-fieldname^='gst_include']").show();
}
if (this.getValue() == "No")
{
ctrlgst_include.hide();
ctrlgst_include.removeValidation('IsRequired');
$("[data-fieldname^='gst_include']").hide();
}
}); 


//hide conflict
$("[data-fieldname^='conflict_des']").hide();
// dropdown control
var ctrlConflict = Runner.getControl(pageid, 'conflict');
var ctrlConflict_des = Runner.getControl(pageid, 'conflict_description');

ctrlConflict.on('change', function(){
if (this.getValue() == "has")
{
ctrlConflict_des.show();
ctrlConflict_des.addValidation('IsRequired');
$("[data-fieldname^='conflict_des']").show();
}
if (this.getValue() == "does not have")
{ 
ctrlConflict_des.hide();
ctrlConflict_des.removeValidation('IsRequired');
$("[data-fieldname^='conflict_des']").hide();

}
}); 

//hide sign by info
$("[data-fieldname^='salesperson']").hide();
$("[data-fieldname^='estateagent2']").hide();
$("[data-fieldname^='salesperson_ic']").hide();
$("[data-fieldname^='salesperson_cea']").hide();
$("[data-fieldname^='estateagent_cea2']").hide();
$("[data-fieldname^='salesperson_address']").hide();
$("[data-fieldname^='salesperson_contact']").hide();
$("[data-fieldname^='estateagent_tel']").hide();
//hide features fittings and facilities
var ctrl = Runner.getControl(pageid, 'agency_or_salesperson');
var ctrlsalesperson = Runner.getControl(pageid, 'salesperson');
var ctrlsalespersonic = Runner.getControl(pageid, 'salesperson_ic');
var ctrlsalespersoncea = Runner.getControl(pageid, 'salesperson_cea');
var ctrlsalespersonaddress = Runner.getControl(pageid, 'salesperson_address');
var ctrlsalespersoncontact = Runner.getControl(pageid, 'salesperson_contact');
var ctrlestategent2 = Runner.getControl(pageid, 'estateagent2');
var ctrlestategentcea2 = Runner.getControl(pageid, 'estateagent_cea2');
var ctrlestategenttel = Runner.getControl(pageid, 'estateagent_tel');

ctrl.on('change',function(e){
if(this.getValue() == 'Salesperson for and on behalf of the Estate Agent')
{
$("tr[data-fieldname='estateagent2']").hide();
ctrlestategent2.removeValidation('IsRequired');
$("tr[data-fieldname='estateagent_cea2']").hide();
ctrlestategentcea2.removeValidation('IsRequired');
$("tr[data-fieldname='estateagent_tel']").hide();
ctrlestategenttel.removeValidation('IsRequired');
$("tr[data-fieldname='salesperson']").show();
ctrlsalesperson.addValidation('IsRequired');
$("tr[data-fieldname='salesperson_ic']").show();
ctrlsalespersonic.addValidation('IsRequired');
$("tr[data-fieldname='salesperson_cea']").show();
ctrlsalespersoncea.addValidation('IsRequired');
$("tr[data-fieldname='salesperson_address']").show();
ctrlsalespersonaddress.addValidation('IsRequired');
$("tr[data-fieldname='salesperson_contact']").show();
ctrlsalespersoncontact.addValidation('IsRequired');
}

else if(this.getValue() == 'Estate Agent')
{
$("tr[data-fieldname='estateagent2']").show();
ctrlestategent2.addValidation('IsRequired');
$("tr[data-fieldname='estateagent_cea2']").show();
ctrlestategentcea2.addValidation('IsRequired');
$("tr[data-fieldname='estateagent_tel']").show();
ctrlestategenttel.addValidation('IsRequired');
$("tr[data-fieldname='salesperson']").hide();
ctrlsalesperson.removeValidation('IsRequired');
$("tr[data-fieldname='salesperson_ic']").hide();
ctrlsalespersonic.removeValidation('IsRequired');
$("tr[data-fieldname='salesperson_cea']").hide();
ctrlsalespersoncea.removeValidation('IsRequired');
$("tr[data-fieldname='salesperson_address']").hide();
ctrlsalespersonaddress.removeValidation('IsRequired');
$("tr[data-fieldname='salesperson_contact']").hide();
ctrlsalespersoncontact.removeValidation('IsRequired');
}
else
{
$("tr[data-fieldname='estateagent2']").hide();
ctrlestategent2.removeValidation('IsRequired');
$("tr[data-fieldname='estateagent_cea2']").hide();
ctrlestategentcea2.removeValidation('IsRequired');
$("tr[data-fieldname='estateagent_tel']").hide();
ctrlestategenttel.removeValidation('IsRequired');
$("tr[data-fieldname='salesperson']").hide();
ctrlsalesperson.removeValidation('IsRequired');
$("tr[data-fieldname='salesperson_ic']").hide();
ctrlsalespersonic.removeValidation('IsRequired');
$("tr[data-fieldname='salesperson_cea']").hide();
ctrlsalespersoncea.removeValidation('IsRequired');
$("tr[data-fieldname='salesperson_address']").hide();
ctrlsalespersonaddress.removeValidation('IsRequired');
$("tr[data-fieldname='salesperson_contact']").hide();
ctrlsalespersoncontact.removeValidation('IsRequired');
}
});

//hide interpretation
$("[data-fieldname^='interpret1']").hide();
var ctrlInter1 = Runner.getControl(pageid, 'interpretation1');
var ctrlinterpret1 = Runner.getControl(pageid, 'interpret1');
var ctrlpreterid1 = Runner.getControl(pageid, 'interpreterID1');

ctrlInter1.on('change',function(e){
if(this.getValue() == 'Through the interpretation of')
{
$("[data-fieldname^='interpret1']").show();
ctrlinterpret1.addValidation('IsRequired');
ctrlpreterid1.addValidation('IsRequired');
}
else
{
$("[data-fieldname^='interpret1']").hide();
ctrlinterpret1.removeValidation('IsRequired');
ctrlpreterid1.removeValidation('IsRequired');
}
});

//hide interpretation
$("[data-fieldname^='interpret2']").hide();
var ctrlInter2 = Runner.getControl(pageid, 'interpretation2');
var ctrlinterpret2 = Runner.getControl(pageid, 'interpret2');
var ctrlpreterid2 = Runner.getControl(pageid, 'interpreterID2');

ctrlInter2.on('change',function(e){
if(this.getValue() == 'Through the interpretation of')
{
$("[data-fieldname^='interpret2']").show();
ctrlinterpret2.addValidation('IsRequired');
ctrlpreterid2.addValidation('IsRequired');
}
else
{
$("[data-fieldname^='interpret2']").hide();
ctrlinterpret2.removeValidation('IsRequired');
ctrlpreterid2.removeValidation('IsRequired');
}
});

//hide interpretation
$("[data-fieldname^='interpret3']").hide();
var ctrlInter3 = Runner.getControl(pageid, 'interpretation3');
var ctrlinterpret3 = Runner.getControl(pageid, 'interpret3');
var ctrlpreterid3 = Runner.getControl(pageid, 'interpreterID3');

ctrlInter3.on('change',function(e){
if(this.getValue() == 'Through the interpretation of')
{
$("[data-fieldname^='interpret3']").show();
ctrlinterpret3.addValidation('IsRequired');
ctrlpreterid3.addValidation('IsRequired');
}
else
{
$("[data-fieldname^='interpret3']").hide();
ctrlinterpret3.removeValidation('IsRequired');
ctrlpreterid3.removeValidation('IsRequired');
}
});

//hide interpretation
$("[data-fieldname^='interpret4']").hide();
var ctrlInter4 = Runner.getControl(pageid, 'interpretation4');
var ctrlinterpret4 = Runner.getControl(pageid, 'interpret4');
var ctrlpreterid4 = Runner.getControl(pageid, 'interpreterID4');

ctrlInter4.on('change',function(e){
if(this.getValue() == 'Through the interpretation of')
{
$("[data-fieldname^='interpret4']").show();
ctrlinterpret4.addValidation('IsRequired');
ctrlpreterid4.addValidation('IsRequired');
}
else
{
$("[data-fieldname^='interpret4']").hide();
ctrlinterpret4.removeValidation('IsRequired');
ctrlpreterid4.removeValidation('IsRequired');
}
});
});


Runner.pages.PageSettings.addPageEvent( 
	"form3", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//hide interpreter id
var ctrlInterpret1 = Runner.getControl(pageid, 'interpret1');
var ctrlInterpret2 = Runner.getControl(pageid, 'interpret2');
var ctrlInterpret3 = Runner.getControl(pageid, 'interpret3');
var ctrlInterpret4 = Runner.getControl(pageid, 'interpret4');
if(ctrlInterpret1.getValue()==""){
pageObj.toggleItem("sign_interpreter1", false );
pageObj.toggleItem("interpreterid1", false ); 
pageObj.toggleItem("interpretdate1", false ); 
}
else{
pageObj.toggleItem("sign_interpreter1", true );
pageObj.toggleItem("interpreterid1", true ); 
pageObj.toggleItem("interpretdate1", true ); 
}

ctrlInterpret1.on('change', function()
{
if (this.getValue() != '')
{
pageObj.toggleItem("sign_interpreter1", true );
pageObj.toggleItem("interpreterid1", true ); 
pageObj.toggleItem("interpretdate1", true ); 
}
else{
pageObj.toggleItem("sign_interpreter1", false );
pageObj.toggleItem("interpreterid1", false ); 
pageObj.toggleItem("interpretdate1", false ); 
}
});

if(ctrlInterpret2.getValue()==""){
pageObj.toggleItem("sign_interpreter2", false );
pageObj.toggleItem("interpreterid2", false ); 
pageObj.toggleItem("interpretdate2", false ); 
}
else{
pageObj.toggleItem("sign_interpreter2", true );
pageObj.toggleItem("interpreterid2", true ); 
pageObj.toggleItem("interpretdate2", true ); 
}

ctrlInterpret2.on('change', function()
{
if (this.getValue() != '')
{
pageObj.toggleItem("sign_interpreter2", true );
pageObj.toggleItem("interpreterid2", true ); 
pageObj.toggleItem("interpretdate2", true ); 
}
else{
pageObj.toggleItem("sign_interpreter2", false );
pageObj.toggleItem("interpreterid2", false ); 
pageObj.toggleItem("interpretdate2", false ); 
}
});

if(ctrlInterpret3.getValue()==""){
pageObj.toggleItem("sign_interpreter3", false );
pageObj.toggleItem("interpreterid3", false ); 
pageObj.toggleItem("interpretdate3", false ); 
}
else{
pageObj.toggleItem("sign_interpreter3", true );
pageObj.toggleItem("interpreterid3", true ); 
pageObj.toggleItem("interpretdate3", true ); 
}

ctrlInterpret3.on('change', function()
{
if (this.getValue() != '')
{
pageObj.toggleItem("sign_interpreter3", true );
pageObj.toggleItem("interpreterid3", true ); 
pageObj.toggleItem("interpretdate3", true ); 
}
else{
pageObj.toggleItem("sign_interpreter3", false );
pageObj.toggleItem("interpreterid3", false ); 
pageObj.toggleItem("interpretdate3", false ); 
}
});

if(ctrlInterpret4.getValue()==""){
pageObj.toggleItem("sign_interpreter4", false );
pageObj.toggleItem("interpreterid4", false ); 
pageObj.toggleItem("interpretdate4", false ); 
}
else{
pageObj.toggleItem("sign_interpreter4", true );
pageObj.toggleItem("interpreterid4", true ); 
pageObj.toggleItem("interpretdate4", true ); 
}

ctrlInterpret4.on('change', function()
{
if (this.getValue() != '')
{
pageObj.toggleItem("sign_interpreter4", true );
pageObj.toggleItem("interpreterid4", true ); 
pageObj.toggleItem("interpretdate4", true ); 
}
else{
pageObj.toggleItem("sign_interpreter4", false );
pageObj.toggleItem("interpreterid4", false ); 
pageObj.toggleItem("interpretdate4", false ); 
}
});


//disable signatures conditionally
var ctrlLandlord1 = Runner.getControl(pageid, 'landlord1');
var ctrlLandlord2 = Runner.getControl(pageid, 'landlord2');
var ctrlLandlord3 = Runner.getControl(pageid, 'landlord3');
var ctrlLandlord4 = Runner.getControl(pageid, 'landlord4');
if(ctrlLandlord2.getValue()==""){
pageObj.toggleItem("sign_landlord2", false );
pageObj.toggleItem("sign_date2", false );
pageObj.toggleItem("interpret2", false ); 
pageObj.toggleItem("interpret_label2", false ); 
}
else {
pageObj.toggleItem("sign_landlord2", true );
pageObj.toggleItem("sign_date2", true );
pageObj.toggleItem("interpret2", true ); 
pageObj.toggleItem("interpret_label2", true ); 
}
ctrlLandlord2.on('change', function(){
if (this.getValue() == ''){
pageObj.toggleItem("sign_landlord2", false );
pageObj.toggleItem("sign_date2", false );
pageObj.toggleItem("interpret2", false ); 
pageObj.toggleItem("interpret_label2", false ); 
}
else {
pageObj.toggleItem("sign_landlord2", true );
pageObj.toggleItem("sign_date2", true );
pageObj.toggleItem("interpret2", true ); 
pageObj.toggleItem("interpret_label2", true ); 
}
});

if(ctrlLandlord3.getValue()==""){
pageObj.toggleItem("sign_landlord3", false );
pageObj.toggleItem("sign_date3", false );
pageObj.toggleItem("interpret3", false ); 
pageObj.toggleItem("interpret_label3", false ); 
}
else {
pageObj.toggleItem("sign_landlord3", true );
pageObj.toggleItem("sign_date3", true );
pageObj.toggleItem("interpret3", true ); 
pageObj.toggleItem("interpret_label3", true ); 
}
ctrlLandlord3.on('change', function(){
if (this.getValue() == ''){
pageObj.toggleItem("sign_landlord3", false );
pageObj.toggleItem("sign_date3", false );
pageObj.toggleItem("interpret3", false ); 
pageObj.toggleItem("interpret_label3", false ); 
}
else {
pageObj.toggleItem("sign_landlord3", true );
pageObj.toggleItem("sign_date3", true );
pageObj.toggleItem("interpret3", true ); 
pageObj.toggleItem("interpret_label3", true ); 
}
});

if(ctrlLandlord4.getValue()==""){
pageObj.toggleItem("sign_landlord4", false );
pageObj.toggleItem("sign_date4", false );
pageObj.toggleItem("interpret4", false ); 
pageObj.toggleItem("interpret_label4", false ); 
}
else {
pageObj.toggleItem("sign_landlord4", true );
pageObj.toggleItem("sign_date4", true );
pageObj.toggleItem("interpret4", true ); 
pageObj.toggleItem("interpret_label4", true ); 
}
ctrlLandlord4.on('change', function(){
if (this.getValue() == ''){
pageObj.toggleItem("sign_landlord4", false );
pageObj.toggleItem("sign_date4", false );
pageObj.toggleItem("interpret4", false ); 
pageObj.toggleItem("interpret_label4", false ); 
}
else {
pageObj.toggleItem("sign_landlord4", true );
pageObj.toggleItem("sign_date4", true );
pageObj.toggleItem("interpret4", true ); 
pageObj.toggleItem("interpret_label4", true ); 
}
});

// GST dropdown control
pageObj.toggleItem("form1_gstyes", false ); 
pageObj.toggleItem("gst_include", false ); 
pageObj.toggleItem("sup1", false ); 
pageObj.toggleItem("sign2", false ); 
var ctrlGST = Runner.getControl(pageid, 'GST');
// target field to appear/disappear
var ctrlgst_include = Runner.getControl(pageid, 'gst_include');

if(ctrlGST.getValue()=="Yes")
{
pageObj.toggleItem("form1_gstyes", true ); 
pageObj.toggleItem("gst_include", true ); 
pageObj.toggleItem("sign2", true ); 
pageObj.toggleItem("sup1", true );  
ctrlgst_include.addValidation('IsRequired');
}
if(ctrlGST.getValue()=="No")
{
pageObj.toggleItem("form1_gstyes", false ); 
pageObj.toggleItem("gst_include", false ); 
pageObj.toggleItem("sup1", false ); 
pageObj.toggleItem("sign2", false ); 
ctrlgst_include.removeValidation('IsRequired');
}

ctrlGST.on('change', function()
{
if (this.getValue() == 'No')
{
pageObj.toggleItem("form1_gstyes", false ); 
pageObj.toggleItem("gst_include", false ); 
pageObj.toggleItem("sup1", false ); 
pageObj.toggleItem("sign2", false ); 
ctrlgst_include.removeValidation('IsRequired');
}
if (this.getValue() == 'Yes')
{ 
pageObj.toggleItem("form1_gstyes", true ); 
pageObj.toggleItem("gst_include", true ); 
pageObj.toggleItem("sup1", true ); 
pageObj.toggleItem("sign2", true ); 
ctrlgst_include.addValidation('IsRequired');
}
}); 

//hide conflict
pageObj.toggleItem("conflict_des", false ); 
var ctrlConflict = Runner.getControl(pageid, 'conflict');
var ctrlConflict_des = Runner.getControl(pageid, 'conflict_description');

if(ctrlConflict.getValue()=="has")
{
ctrlConflict_des.addValidation('IsRequired');
pageObj.toggleItem("conflict_des", true ); 
}
if(ctrlConflict.getValue()=="does not have")
{
ctrlConflict_des.removeValidation('IsRequired');
pageObj.toggleItem("conflict_des", false ); 
}

ctrlConflict.on('change', function(){
if (this.getValue() == 'has')
{
ctrlConflict_des.addValidation('IsRequired');
pageObj.toggleItem("conflict_des", true ); 
}
if (this.getValue() == 'does not have')
{ 
ctrlConflict_des.removeValidation('IsRequired');
pageObj.toggleItem("conflict_des", false ); 
}
}); 

//hide sign by info

pageObj.hideField("salesperson"); 
pageObj.hideField("salesperson_ic"); 
pageObj.hideField("salesperson_cea"); 
pageObj.hideField("salesperson_address"); 
pageObj.hideField("salesperson_contact"); 
pageObj.hideField("estateagent2"); 
pageObj.hideField("estateagent_cea2"); 
pageObj.hideField("estateagent_address2"); 
pageObj.hideField("estateagent_tel"); 
var ctrl = Runner.getControl(pageid, 'agency_or_salesperson');

if(ctrl.getValue()=="Salesperson for and on behalf of the Estate Agent")
{
pageObj.showField("salesperson"); 
pageObj.showField("salesperson_ic"); 
pageObj.showField("salesperson_cea"); 
pageObj.showField("salesperson_address"); 
pageObj.showField("salesperson_contact"); 

}
if(ctrl.getValue() == "Estate Agent")
{
pageObj.showField("estateagent2"); 
pageObj.showField("estateagent_cea2"); 
pageObj.showField("estateagent_address2"); 
pageObj.showField("estateagent_tel"); 
}

ctrl.on('change',function(e){
if(this.getValue() == 'Salesperson for and on behalf of the Estate Agent')
{
pageObj.showField("salesperson"); 
pageObj.showField("salesperson_ic"); 
pageObj.showField("salesperson_cea"); 
pageObj.showField("salesperson_address"); 
pageObj.showField("salesperson_contact"); 
pageObj.hideField("estateagent2"); 
pageObj.hideField("estateagent_cea2"); 
pageObj.hideField("estateagent_address2"); 
pageObj.hideField("estateagent_tel"); 
}

else if(this.getValue() == 'Estate Agent')
{
pageObj.hideField("salesperson"); 
pageObj.hideField("salesperson_ic"); 
pageObj.hideField("salesperson_cea"); 
pageObj.hideField("salesperson_address"); 
pageObj.hideField("salesperson_contact"); 
pageObj.showField("estateagent2"); 
pageObj.showField("estateagent_cea2"); 
pageObj.showField("estateagent_address2"); 
pageObj.showField("estateagent_tel"); 
}
});
/*
setTimeout(function(){ $(window).scrollTop(localStorage["posStorage"]);}, 500);
*/	
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

this.on('afterClose'||this.on('afterSave'), function() {
location.reload();
});
});


Runner.pages.PageSettings.addPageEvent( 
	"form3", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		if(proxy["topbutton"])
$("a[id^='backButton']").hide();

$("#view1_tenant1").css('text-decoration','underline');
$("#view1_tenant1_address").css('text-decoration','underline');
$("#view1_date_ta").css('text-decoration','underline');
$("#view1_salesperson").css('text-decoration','underline');
$("#view1_salesperson_ic").css('text-decoration','underline');
$("#view1_salesperson_address").css('text-decoration','underline');
$("#view1_salesperson_cea").css('text-decoration','underline');
$("#view1_salesperson_contact").css('text-decoration','underline');
$("#view1_estateagent2").css('text-decoration','underline');
$("#view1_estateagent_address2").css('text-decoration','underline');
$("#view1_estateagent_cea2").css('text-decoration','underline');
$("#view1_estateagent_tel").css('text-decoration','underline');
//$("#view1_date_sign").css('text-decoration','underline');

//setTimeout(function(){ $(window).scrollTop(localStorage["posStorage"]);}, 500);
	
window.onload = function() {
    window.scrollTo(0, 0);
};
/*
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
*/

$(document).ready(function () {
    // ===== Scroll to Top ==== 
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 1000) { // If page is scrolled more than 1000px
            $('#return-to-top-form').fadeIn(200); // Fade in the arrow
        } else {
            $('#return-to-top-form').fadeOut(200); // Else fade out the arrow
        }
    });

    $('#return-to-top-form').click(function () { // When arrow is clicked
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });
});

});







