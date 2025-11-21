
Runner.pages.PageSettings.addPageEvent( 
	"str-admin", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//hide valuation or lease period
var ctrlTranType = Runner.getControl(pageid, 'transact_type');
if(ctrlTranType.getValue()=='Sale') {
pageObj.showField("valuation");
pageObj.hideField("lease_period");
}
if (ctrlTranType.getValue() == 'Lease'){
pageObj.hideField("valuation");
pageObj.showField("lease_period");
}
});







