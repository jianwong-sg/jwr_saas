
Runner.pages.PageSettings.addPageEvent( 
	"properties_owner", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		// ===== Scroll to Top ==== 
$(window).scroll(function() {
if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
$('#return-to-top').fadeIn(200);    // Fade in the arrow
} else {
$('#return-to-top').fadeOut(200);   // Else fade out the arrow
}
});
$('#return-to-top').click(function() {      // When arrow is clicked
$('body,html').animate({
scrollTop : 0                       // Scroll to top of body
}, 500);
});

// Place event code here.
// Use "Add Action" button to add code snippets.
});


Runner.pages.PageSettings.addPageEvent( 
	"properties_owner", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//validate required fields
var ctrlOwnerType = Runner.getControl(pageid, 'owner_type');

if(ctrlOwnerType.getValue()=="INDIVIDUAL")
{
pageObj.toggleItem("section_entity", false );
pageObj.toggleItem("section_individual", true );
pageObj.toggleItem("section_tx", true );
}

if(ctrlOwnerType.getValue()=="ENTITY")
{
pageObj.toggleItem("section_individual", false );
pageObj.toggleItem("section_entity", true );
pageObj.toggleItem("section_tx", true );
}

ctrlOwnerType.on('change',function(e){
if(this.getValue()=='ENTITY')
{
pageObj.toggleItem("section_individual", false );
pageObj.toggleItem("section_entity", true );
pageObj.toggleItem("section_tx", true );
ctrlOwnerKind.setValue('');

}

if(this.getValue()=='INDIVIDUAL')
{
pageObj.toggleItem("section_entity", false );
pageObj.toggleItem("section_individual", true );
pageObj.toggleItem("section_tx", true );
ctrlOwnerKind.setValue('');

}
});



// Place event code here.
// Use "Add Action" button to add code snippets.
});


Runner.pages.PageSettings.addPageEvent( 
	"properties_owner", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlOwnerType = Runner.getControl(pageid, 'owner_type');
ctrlOwnerType.on('change', function(e) {
if (this.getValue() == 'ENTITY')
{
pageObj.toggleItem("section_entity", true );
pageObj.toggleItem("section_individual", false );

} 

if (this.getValue() == 'INDIVIDUAL')
{
pageObj.toggleItem("section_entity", false );
pageObj.toggleItem("section_individual", true );
pageObj.toggleItem("section_tx", true );

} 

});
});







