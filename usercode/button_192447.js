Runner.buttonEvents['192447'] = function( pageObj, proxy, pageid ) {
	var gid = '192447';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			var atLeastOneIsChecked = $('input[name="selection[]"]:checked').length > 0;
if(atLeastOneIsChecked)
{
var selected = new Array();

$('input[name="selection[]"]:checked').each(function()
{
selected.push($(this).val());
});
params['selected'] = selected;
}
else
{
alert('No Transaction(s) selected to proceed. Try again.')
}			
		}
	}

	if ( !pageObj.buttonEventAfter[ gid ] ) {
		pageObj.buttonEventAfter[ gid ] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
			if(result["c"])
{
var message = result["c"]+" Transaction(s) approved.";
alert(message);
localStorage["posStorage"] = $(window).scrollTop(); location.reload(true);
}
		}
	}

	$('a[data-event=' + gid + ']').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		var rowId = Runner.genId();
		var eventId = gid + "_" + rowId;
		$(this).attr( 'data-event', eventId );
		this.id = this.id + "_" + Runner.genId();
		var buttonObj = new Runner.form.Button({
			id: eventId,
			btnName: gid
		});
		buttonObj.init( {args: [ pageObj, proxy, pageid ]} );
	});

};

