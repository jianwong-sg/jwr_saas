
Runner.pages.PageSettings.addPageEvent( 
	"cpd_trainings_user", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		$("select[name^='value_period']").change(function() 
{  
$("#searchButton1").click(); 
});



// Place event code here.
// Use "Add Action" button to add code snippets.
});







