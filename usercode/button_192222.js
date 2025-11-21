Runner.buttonEvents['192222'] = function( pageObj, proxy, pageid ) {
	var gid = '192222';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			swal("Edit form will delete all signatures in the form. Proceed to edit?", {
 buttons: {
   cancel: "Nope",
   proceed: {
     text: "Yes, proceed",
     value: "proceed",
		
   }
 },
})
.then((value) => {
switch (value) {
 
  case "proceed":
     swal("Form is loading...");
     $("#editLink56").click();
    break;
 
  default:
     swal("");
    break;
  }
});
return false;			
		}
	}

	if ( !pageObj.buttonEventAfter[ gid ] ) {
		pageObj.buttonEventAfter[ gid ] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
			// Put your code here.
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

