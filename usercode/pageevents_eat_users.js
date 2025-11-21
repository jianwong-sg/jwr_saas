
Runner.pages.PageSettings.addPageEvent( 
	"eat_users", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlAgentShare = Runner.getControl(pageid, 'salesperson_share');
var ctrlAgencyShare = Runner.getControl(pageid, 'cut_to_agency');
function func() 
{
ctrlAgentShare.setValue(100 - parseFloat(ctrlAgencyShare.getValue()));
}
ctrlAgencyShare.on('keyup', func);
});


Runner.pages.PageSettings.addPageEvent( 
	"eat_users", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlAgentShare = Runner.getControl(pageid, 'salesperson_share');
var ctrlAgencyShare = Runner.getControl(pageid, 'cut_to_agency');
function func() 
{
ctrlAgentShare.setValue(100 - parseFloat(ctrlAgencyShare.getValue()));
}
ctrlAgencyShare.on('keyup', func);
});







