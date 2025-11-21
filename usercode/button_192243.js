Runner.buttonEvents['192243'] = function( pageObj, proxy, pageid ) {
	var gid = '192243';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			// code from business-template Invoice
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
// end Invoice code

//The code was commented on September 15 2022 20:42 on applying Invoice business template

//if (confirm("WARNING!!! Edit Form will DELETE all the signatures in the Form. To proceed with Edit, click OK. Or, click Cancel to abort."))
//{return true;}
//else
//{return false;}			
		}
	}

	if ( !pageObj.buttonEventAfter[ gid ] ) {
		pageObj.buttonEventAfter[ gid ] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
			// code from business-template Invoice
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

// end Invoice code

//The code was commented on September 15 2022 20:42 on applying Invoice business template

//location.href="form1_edit.php?editid1="+result["id"];
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

