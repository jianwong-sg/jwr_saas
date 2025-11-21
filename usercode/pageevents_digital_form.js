
Runner.pages.PageSettings.addPageEvent( 
	"digital_form", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		$("a[href^='digital_form_edit']").off("click");
$("a[href^='digital_form_edit']").on("click", function()
{ 
if (confirm("WARNING!!! Edit Form WILL delete all the signatures in the Form. To proceed with Edit, click OK. Or, click Cancel to abort."))
{ id=$(this).attr("id").replace("editLink","");
var row = pageObj.inlineEdit.getRowById(id);
var clickF = pageObj.inlineEdit.pageObj.getEditLinkHandler( row, 'popup' ); 
clickF(); 
return false; 
} 
else
{ 
return false; 
} 
});


if(proxy["saved"]=="true" && window.parent.winform)
	window.parent.winform.close();


// Place event code here.
// Use "Add Action" button to add code snippets.
});


Runner.pages.PageSettings.addPageEvent( 
	"digital_form", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		this.on('afterClose', function() {
	var val = $("input[id^=radio_form]:checked").val();
	if(val){
		var res = "";
		if(val.indexOf("FORM-1")!=-1)
			res = "form1";
		if(val.indexOf("FORM-2")!=-1)
			res = "form2";
		if(val.indexOf("FORM-3")!=-1)
			res = "form3";
		if(val.indexOf("FORM-4")!=-1)
			res = "form4";
		if(val.indexOf("FORM-5")!=-1)
			res = "form5";
		if(val.indexOf("FORM-6")!=-1)
			res = "form6";
		if(val.indexOf("FORM-7")!=-1)
			res = "form7";
		if(val.indexOf("FORM-8")!=-1)
			res = "form8";
		if(res){
			window.winform = Runner.displayPopup( {
				url: res+"_add.php",
				width:950,
				height: 1000,
				afterClose: function(win){
					location.reload();
				}
			});
		}
	}
});

/*
Runner.runnerAJAX(Runner.pages.getUrl(pageObj.tName, pageObj.pageType)+"?a=return",
pageObj.ajaxBaseParams,
function(respObj){
pageObj.pageReloadHn.call(pageObj, respObj)
});
*/
});


Runner.pages.PageSettings.addPageEvent( 
	"digital_form", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		this.on('afterClose', function() {
	var val = $("input[id^=radio_form]:checked").val();
	if(val && proxy["formid"]){
		var res = "";
		if(val.indexOf("FORM-1")!=-1)
			res = "form1";
		if(val.indexOf("FORM-2")!=-1)
			res = "form2";
		if(val.indexOf("FORM-3")!=-1)
			res = "form3";
		if(val.indexOf("FORM-4")!=-1)
			res = "form4";
		if(val.indexOf("FORM-5")!=-1)
			res = "form5";
		if(val.indexOf("FORM-6")!=-1)
			res = "form6";
		if(val.indexOf("FORM-7")!=-1)
			res = "form7";
		if(val.indexOf("FORM-8")!=-1)
			res = "form8";
		if(res){
			window.winform = Runner.displayPopup( {
				url: res+"_edit.php?editid1="+proxy["formid"],
				width:950,
				height: 1000,
				afterClose: function(win){
					location.reload();
				}
			});
		}
	}
});

$("a[id^=saveButton]").click();

/*
Runner.runnerAJAX(Runner.pages.getUrl(pageObj.tName, pageObj.pageType)+"?a=return",
pageObj.ajaxBaseParams,
function(respObj){
pageObj.pageReloadHn.call(pageObj, respObj)
});
*/
});


Runner.pages.PageSettings.addPageEvent( 
	"digital_form", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		this.on('afterClose', function() {
	if(proxy["formid"]){
		window.winform = Runner.displayPopup( {
			url: "form"+proxy["formstatus"]+"_view.php?editid1="+proxy["formid"],
			width:950,
			height: 1000
		});
	}
});

$("button[id^=closeButton]").click();
});







