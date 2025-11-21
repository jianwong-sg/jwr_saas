
Runner.pages.PageSettings.addPageEvent( 
	"cobroke_internal_comm", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		/*
if ($("#value_comm_earned_1").val() != undefined) {
	pageObj.inlineEdit.editAllRecs();
	$('#saveall_edited16').hide();
	$('#revertall_edited16').hide();
}
*/
// invoke inlineEdit for all detail records on the master edit page
if ( pageObj.baseParams.masterpagetype === "edit" ) {
pageObj.inlineEdit.editAllRecs(); 
}


// to add new details records to the end of the details list
pageObj.addNewRecordsToBottom = true;

$(document).ready(function() {
	if ($("#detailPreview16").find('table > tbody > tr').length == 1) {
		refreshExternalCoBroker();
		refreshInternalCoBroker();
	}
});
});


Runner.pages.PageSettings.addPageEvent( 
	"cobroke_internal_comm", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		/*
this.on('afterSave', function() {
location.reload();
});
*/
// Place event code here.
// Use "Add Action" button to add code snippets.
});


Runner.pages.PageSettings.addPageEvent( 
	"cobroke_internal_comm", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		$("#value_comm_earned_inter_"+pageid).keyup(function(){
var earned = $("#value_comm_earned_1").val();
if (earned == undefined) {
return;
}
var comm = $(this).val() * 1;
var percent = customRound(comm * 100 / earned);

$("#value_comm_percent_inter_" + pageid).val(customRound(percent));

refreshInternalCoBroker();
});

$("#value_comm_percent_inter_"+pageid).keyup(function(){
var earned = $("#value_comm_earned_1").val();
// var earned = $("#value_transacted_price_1").val();
if (earned == undefined) {
return;
}
var percent = $(this).val();
var comm = customRound(earned * percent / 100);

$("#value_comm_earned_inter_" + pageid).val(customRound(comm)); 
refreshInternalCoBroker();
});

$(document).ready(function(){
$('a#saveLink' + pageid).remove();
$('a#revertLink' + pageid).remove();
$('input#check16_' + pageid).show();
$('input#value_comm_percent_inter_' + pageid).prop('readonly', true)
.css('width', '80px');
refreshInternalCoBroker();
//$(window).scrollTop(0);
});
});







