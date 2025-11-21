Runner.buttonEvents['192325'] = function( pageObj, proxy, pageid ) {
	var gid = '192325';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			// Get all selected checkboxes
var selectedRecords = $('input[type="checkbox"][name="selection[]"]:checked');

// Check if any records are selected
if (selectedRecords.length === 0) {
    swal("Please check the box to delete record.");
    return false; // Prevent further action if no record is selected
}

swal({
    title: "Do you really want to delete this record?",
    text: "It will also delete any previously lodged CDD Measures and STR files for this transaction. Once deleted, you will not be able to recover this record!",
    icon: "warning",
    buttons: {
        cancel: "Cancel",
        proceed: {
            text: "Yes. Proceed to Delete",
            value: "proceed",
        }
		}
    })
.then((value) => {
    if (value === "proceed") {
        submit();
    }
});

return false;			
		}
	}

	if ( !pageObj.buttonEventAfter[ gid ] ) {
		pageObj.buttonEventAfter[ gid ] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
			parent.location.reload();
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

