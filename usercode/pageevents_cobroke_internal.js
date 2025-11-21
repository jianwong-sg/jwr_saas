
Runner.pages.PageSettings.addPageEvent( 
	"cobroke_internal", 
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
	"cobroke_internal", 
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
$('input#check6_' + pageid).show();
$('input#value_comm_percent_inter_' + pageid).prop('readonly', true)
.css('width', '50px');
refreshInternalCoBroker();
//$(window).scrollTop(0);
});
});







