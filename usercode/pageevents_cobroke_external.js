
Runner.pages.PageSettings.addPageEvent( 
	"cobroke_external", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//reload page after close
this.on('afterSave', function() {
location.reload(false);
});

// Place event code here.
// Use "Add Action" button to add code snippets.
});


Runner.pages.PageSettings.addPageEvent( 
	"cobroke_external", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		this.on('afterSave', function() {
location.reload(false);
});

// Place event code here.
// Use "Add Action" button to add code snippets.
});







