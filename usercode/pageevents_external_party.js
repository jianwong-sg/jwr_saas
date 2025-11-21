
Runner.pages.PageSettings.addPageEvent( 
	"external_party", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		/*
if ($("#value_comm_earned_1").val() != undefined) {
	pageObj.inlineEdit.editAllRecs();
	$('#saveall_edited8').hide();
	$('#revertall_edited8').hide();
}

$(document).ready(function() {
	if ($("#detailPreview7").find('table > tbody > tr').length == 1) {
		refreshExternalCoBroker();
		refreshInternalCoBroker();
	}
});


// invoke inlineEdit for all detail records on the master edit page
if ( pageObj.baseParams.masterpagetype === "edit" ) {
pageObj.inlineEdit.editAllRecs(); 
}
*/
// to add new details records to the end of the details list
//pageObj.addNewRecordsToBottom = true;
});


Runner.pages.PageSettings.addPageEvent( 
	"external_party", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		this.on('afterSave', function() {
location.reload();
});

// Place event code here.
// Use "Add Action" button to add code snippets.
});


Runner.pages.PageSettings.addPageEvent( 
	"external_party", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		/*
$("#value_comm_percent_tp_"+pageid).keyup(function(){
var earned = $("#value_comm_earned_1").val();
if (earned == undefined) {
return;
}
var percent = $(this).val();
var comm = customRound(earned * percent / 100);
var gst = 0;
if ($("#value_gst_include_" + pageid).is(':checked')) {
gst = customRound(comm * 9 / 100);
}
var gross = customRound(comm + gst);

$("#value_comm_tp_" + pageid).val(comm.toFixed(2)); 
$("#value_gst_" + pageid).val(gst.toFixed(2)); 
$("#value_gross_tp_" + pageid).val(gross.toFixed(2)); 
refreshExternalCoBroker();
refreshInternalCoBroker();
});

$("#value_comm_tp_"+pageid).keyup(function(){
var earned = $("#value_comm_earned_1").val();
if (earned == undefined) {
return;
}
var comm = $(this).val() * 1;
var percent = customRound(comm * 100 / earned);
var gst = 0;
if ($("#value_gst_include_" + pageid).is(':checked')) {
gst = customRound(comm * 9 / 100);
}
var gross = comm + gst;

$("#value_comm_percent_tp_" + pageid).val(percent);
$("#value_gst_" + pageid).val(gst.toFixed(2)); 
$("#value_gross_tp_" + pageid).val(gross.toFixed(2));
refreshExternalCoBroker();
refreshInternalCoBroker();
});

$("#value_gross_tp_" + pageid).keyup(function() {
var earned = $("#value_comm_earned_1").val();
if (earned == undefined) {
return;
}
var gross = $(this).val();
var comm, percent, gst;
if ($("#value_gst_include_" + pageid).is(':checked')) {
comm = customRound(gross * 100 / 109);
gst = customRound(gross - comm);
percent = customRound(comm / earned * 100);
} else {
comm = gross;
gst = 0;
percent = customRound(comm / earned * 100);
}
$("#value_comm_tp_" + pageid).val(comm);
$("#value_comm_percent_tp_" + pageid).val(percent); 
$("#value_gst_" + pageid).val(gst);	
refreshExternalCoBroker();
refreshInternalCoBroker();
});

$("#value_gst_include_"+pageid).click(function() {
var earned = $("#value_comm_earned_1").val();
if (earned == undefined) {
return;
}
var comm = $("#value_comm_tp_"+pageid).val() * 1;
var gross = comm;
if ($("#value_gst_include_" + pageid).is(':checked')) {
gst = customRound(comm * 9 / 100);
gross = customRound(gross + gst);
$("#value_gst_" + pageid).val(gst); 
} else {
$("#value_gst_" + pageid).val(0); 
}
$("#value_gross_tp_" + pageid).val(gross.toFixed(2));
refreshExternalCoBroker();
refreshInternalCoBroker();
});

$(document).ready(function(){
$('a#saveLink' + pageid).remove();
$('a#revertLink' + pageid).remove();
$('input#check8_' + pageid).show();
$('input#value_gst_'+pageid).prop('readonly', true);
$('input#value_comm_percent_tp_'+pageid).prop('readonly', true);
$('select#value_name_'+pageid).css('width', '150px');
refreshExternalCoBroker();
refreshInternalCoBroker();
//	$(window).scrollTop(0);
	
});

*/
// Place event code here.
// Use "Add Action" button to add code snippets.
});







