
Runner.pages.PageSettings.addPageEvent( 
	"cdd_measures-admin", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlMeasure1 = Runner.getControl(pageid, 'measure1');
var ctrlMeasure2 = Runner.getControl(pageid, 'measure2');
var ctrlRemark2 = Runner.getControl(pageid, 'remark2');
var ctrlMeasure7 = Runner.getControl(pageid, 'measure7');
var ctrlMeasure8 = Runner.getControl(pageid, 'measure8');
var ctrlRemark8 = Runner.getControl(pageid, 'remark8');
var ctrlMeasure11 = Runner.getControl(pageid, 'measure11');
var ctrlMeasure12 = Runner.getControl(pageid, 'measure12');
var ctrlRemark12 = Runner.getControl(pageid, 'remark12');
var ctrlMeasure13 = Runner.getControl(pageid, 'measure13');
var ctrlRemark13 = Runner.getControl(pageid, 'remark13');

ctrlMeasure1.on('change', function(e) {
if (this.getValue() == 'No') 
ctrlMeasure2.setValue('NA');
});

ctrlMeasure1.on('change', function(e) {
if (this.getValue() != 'No')
ctrlMeasure2.setValue('');
});

ctrlMeasure2.on('change', function(e) {
if (this.getValue() == 'Yes') 
ctrlRemark2.addValidation('IsRequired');   
});    

ctrlMeasure7.on('change', function(e) {
if (this.getValue() == 'No') 
ctrlMeasure8.setValue('NA');  
});

ctrlMeasure7.on('change', function(e) {
if (this.getValue() != 'No') 
ctrlMeasure8.setValue('');  
});

ctrlMeasure8.on('change', function(e) {
if (this.getValue() == 'Yes') 
ctrlRemark8.addValidation('IsRequired');
});    

ctrlMeasure11.on('change', function(e) {
if (this.getValue() == 'No') 
ctrlMeasure12.setValue('NA');
});    

ctrlMeasure11.on('change', function(e) {
if (this.getValue() != 'No') 
ctrlMeasure12.setValue('');
});    

ctrlMeasure12.on('change', function(e) {
if (this.getValue() == 'Yes') 
ctrlRemark12.addValidation('IsRequired');   
});    

ctrlMeasure13.on('change', function(e) {
if (this.getValue() == 'Yes') 
ctrlRemark13.addValidation('IsRequired');   
});    

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
});


Runner.pages.PageSettings.addPageEvent( 
	"cdd_measures-admin", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlMeasure1 = Runner.getControl(pageid, 'measure1');
var ctrlMeasure2 = Runner.getControl(pageid, 'measure2');
var ctrlRemark2 = Runner.getControl(pageid, 'remark2');
var ctrlMeasure7 = Runner.getControl(pageid, 'measure7');
var ctrlMeasure8 = Runner.getControl(pageid, 'measure8');
var ctrlRemark8 = Runner.getControl(pageid, 'remark8');
var ctrlMeasure11 = Runner.getControl(pageid, 'measure11');
var ctrlMeasure12 = Runner.getControl(pageid, 'measure12');
var ctrlRemark12 = Runner.getControl(pageid, 'remark12');
var ctrlMeasure13 = Runner.getControl(pageid, 'measure13');
var ctrlRemark13 = Runner.getControl(pageid, 'remark13');

ctrlMeasure1.on('change', function(e) {
if (this.getValue() == 'No') 
ctrlMeasure2.setValue('NA');
});

ctrlMeasure1.on('change', function(e) {
if (this.getValue() != 'No')
ctrlMeasure2.setValue('');
});

ctrlMeasure2.on('change', function(e) {
if (this.getValue() == 'Yes') 
ctrlRemark2.addValidation('IsRequired');   
});    

ctrlMeasure7.on('change', function(e) {
if (this.getValue() == 'No') 
ctrlMeasure8.setValue('NA');  
});

ctrlMeasure7.on('change', function(e) {
if (this.getValue() != 'No') 
ctrlMeasure8.setValue('');  
});

ctrlMeasure8.on('change', function(e) {
if (this.getValue() == 'Yes') 
ctrlRemark8.addValidation('IsRequired');
});    

ctrlMeasure11.on('change', function(e) {
if (this.getValue() == 'No') 
ctrlMeasure12.setValue('NA');
});    

ctrlMeasure11.on('change', function(e) {
if (this.getValue() != 'No') 
ctrlMeasure12.setValue('');
});    

ctrlMeasure12.on('change', function(e) {
if (this.getValue() == 'Yes') 
ctrlRemark12.addValidation('IsRequired');   
});    

ctrlMeasure13.on('change', function(e) {
if (this.getValue() == 'Yes') 
ctrlRemark13.addValidation('IsRequired');   
});    

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
});


Runner.pages.PageSettings.addPageEvent( 
	"cdd_measures-admin", 
	"view", 
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







