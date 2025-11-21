Runner.buttonEvents['192317'] = function( pageObj, proxy, pageid ) {
	var gid = '192317';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			// code from business-template DocManager

if ( Dropzone && Dropzone.isBrowserSupported() ) {
	Runner._dropzone.removeAllFiles();
	$('#docman-dropzone').hide();
	$('[id^=Save_]').hide();
	$('[id^=Cancel_]').hide();
}
// end DocManager code

//The code was commented on October 12 2021 14:08 on applying DocManager business template

//
//if ( Dropzone && Dropzone.isBrowserSupported() ) {
//	Runner._dropzone.removeAllFiles();
//	$('#docman-dropzone').hide();
//}
//			
		}
	}

	if ( !pageObj.buttonEventAfter[ gid ] ) {
		pageObj.buttonEventAfter[ gid ] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
			
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

