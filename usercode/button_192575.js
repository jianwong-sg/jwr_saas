Runner.buttonEvents['192575'] = function( pageObj, proxy, pageid ) {
	var gid = '192575';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			swal("Editing this form will remove all existing electronic signatures. If you edit the form after it has been eSigned, everyone will need to eSign it again.\n\nDo you wish to proceed?", {
  icon: 'warning',
  buttons: {
    cancel: "Cancel",
    proceed: {
      text: "Yes, proceed to Update",
      value: "proceed",
    }
  },
})
.then((value) => {
  switch (value) {
    case "proceed":
      swal("Are you sure you want to confirm this action?", {
        icon: 'warning',
        buttons: {
          cancel: "No, go back",
          confirm: {
            text: "Yes, confirm",
            value: "confirm",
          }
        },
      })
      .then((confirmValue) => {
        if (confirmValue === "confirm") {
          submit(); // Call your submit function here
        }
      });
      break;
  }
});
return false;
			
		}
	}

	if ( !pageObj.buttonEventAfter[ gid ] ) {
		pageObj.buttonEventAfter[ gid ] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
			// Select the button with id starting with 'editLink' and having the specified attributes
var button = $("[data-itemtype='grid_edit'][data-itemid='edit_form'] a[id^='editLink']");

// Check if the button exists
if (button.length > 0) {
    // Trigger the click event
    button.click();
} else {
    console.log("Button not found.");
}

// Prevent default action and stop further processing
return false;
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

