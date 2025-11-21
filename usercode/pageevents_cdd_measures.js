
Runner.pages.PageSettings.addPageEvent( 
	"cdd_measures", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlMeasure1 = Runner.getControl(pageid, 'measure1');
var ctrlMeasure2 = Runner.getControl(pageid, 'measure2');
var ctrlRemark2 = Runner.getControl(pageid, 'remark2');
var ctrlMeasure3 = Runner.getControl(pageid, 'measure3');
var ctrlMeasure4 = Runner.getControl(pageid, 'measure4');
var ctrlMeasure5 = Runner.getControl(pageid, 'measure5');
var ctrlMeasure6 = Runner.getControl(pageid, 'measure6');
var ctrlMeasure7 = Runner.getControl(pageid, 'measure7');
var ctrlMeasure8 = Runner.getControl(pageid, 'measure8');
var ctrlRemark8 = Runner.getControl(pageid, 'remark8');
var ctrlMeasure9 = Runner.getControl(pageid, 'measure9');
var ctrlMeasure10 = Runner.getControl(pageid, 'measure10');
var ctrlMeasure11 = Runner.getControl(pageid, 'measure11');
var ctrlMeasure12 = Runner.getControl(pageid, 'measure12');
var ctrlRemark12 = Runner.getControl(pageid, 'remark12');
var ctrlMeasure13 = Runner.getControl(pageid, 'measure13');
var ctrlRemark13 = Runner.getControl(pageid, 'remark13');

ctrlMeasure1.addValidation('IsRequired');
ctrlMeasure2.addValidation('IsRequired');
ctrlMeasure3.addValidation('IsRequired');
ctrlMeasure4.addValidation('IsRequired');
ctrlMeasure5.addValidation('IsRequired');
ctrlMeasure6.addValidation('IsRequired');
ctrlMeasure7.addValidation('IsRequired');
ctrlMeasure8.addValidation('IsRequired');
ctrlMeasure9.addValidation('IsRequired');
ctrlMeasure10.addValidation('IsRequired');
ctrlMeasure11.addValidation('IsRequired');
ctrlMeasure12.addValidation('IsRequired');
ctrlMeasure13.addValidation('IsRequired');

ctrlMeasure1.on('change', function(e) {
if (this.getValue() == 'No') 
ctrlMeasure2.setValue('NA');
});

ctrlMeasure1.on('change', function(e) {
if (this.getValue() != 'No')
ctrlMeasure2.setValue('');
});

ctrlMeasure2.on('change', function(e) {
if (this.getValue() != 'Yes') {
ctrlRemark2.removeValidation('IsRequired'); 
}
else  {
ctrlRemark2.addValidation('IsRequired'); 
}
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
if (this.getValue() != 'Yes') {
ctrlRemark8.removeValidation('IsRequired');
}
else {
ctrlRemark8.addValidation('IsRequired');
}
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
if (this.getValue() != 'Yes') {
ctrlRemark12.removeValidation('IsRequired');   
}
else {
ctrlRemark12.addValidation('IsRequired'); 
}
});    

ctrlMeasure13.on('change', function(e) {
if (this.getValue() != 'Yes') {
ctrlRemark13.removeValidation('IsRequired');  
}
else {
ctrlRemark13.addValidation('IsRequired');
} 
});    



});


Runner.pages.PageSettings.addPageEvent( 
	"cdd_measures", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlMeasure1 = Runner.getControl(pageid, 'measure1');
var ctrlMeasure2 = Runner.getControl(pageid, 'measure2');
var ctrlRemark2 = Runner.getControl(pageid, 'remark2');
var ctrlMeasure3 = Runner.getControl(pageid, 'measure3');
var ctrlMeasure4 = Runner.getControl(pageid, 'measure4');
var ctrlMeasure5 = Runner.getControl(pageid, 'measure5');
var ctrlMeasure6 = Runner.getControl(pageid, 'measure6');
var ctrlMeasure7 = Runner.getControl(pageid, 'measure7');
var ctrlMeasure8 = Runner.getControl(pageid, 'measure8');
var ctrlRemark8 = Runner.getControl(pageid, 'remark8');
var ctrlMeasure9 = Runner.getControl(pageid, 'measure9');
var ctrlMeasure10 = Runner.getControl(pageid, 'measure10');
var ctrlMeasure11 = Runner.getControl(pageid, 'measure11');
var ctrlMeasure12 = Runner.getControl(pageid, 'measure12');
var ctrlRemark12 = Runner.getControl(pageid, 'remark12');
var ctrlMeasure13 = Runner.getControl(pageid, 'measure13');
var ctrlRemark13 = Runner.getControl(pageid, 'remark13');

ctrlMeasure1.addValidation('IsRequired');
ctrlMeasure2.addValidation('IsRequired');
ctrlMeasure3.addValidation('IsRequired');
ctrlMeasure4.addValidation('IsRequired');
ctrlMeasure5.addValidation('IsRequired');
ctrlMeasure6.addValidation('IsRequired');
ctrlMeasure7.addValidation('IsRequired');
ctrlMeasure8.addValidation('IsRequired');
ctrlMeasure9.addValidation('IsRequired');
ctrlMeasure10.addValidation('IsRequired');
ctrlMeasure11.addValidation('IsRequired');
ctrlMeasure12.addValidation('IsRequired');
ctrlMeasure13.addValidation('IsRequired');

ctrlMeasure1.on('change', function(e) {
if (this.getValue() == 'No') 
ctrlMeasure2.setValue('NA');
});

ctrlMeasure1.on('change', function(e) {
if (this.getValue() != 'No')
ctrlMeasure2.setValue('');
});

ctrlMeasure2.on('change', function(e) {
if (this.getValue() != 'Yes') {
ctrlRemark2.removeValidation('IsRequired'); 
}
else  {
ctrlRemark2.addValidation('IsRequired'); 
}
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
if (this.getValue() != 'Yes') {
ctrlRemark8.removeValidation('IsRequired');
}
else {
ctrlRemark8.addValidation('IsRequired');
}
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
if (this.getValue() != 'Yes') {
ctrlRemark12.removeValidation('IsRequired');   
}
else {
ctrlRemark12.addValidation('IsRequired'); 
}
});    

ctrlMeasure13.on('change', function(e) {
if (this.getValue() != 'Yes') {
ctrlRemark13.removeValidation('IsRequired');  
}
else {
ctrlRemark13.addValidation('IsRequired');
} 
});    



});


Runner.pages.PageSettings.addPageEvent( 
	"cdd_measures", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top-form').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top-form').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top-form').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

// Place event code here.
// Use "Add Action" button to add code snippets.
});







