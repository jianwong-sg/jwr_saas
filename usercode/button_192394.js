Runner.buttonEvents['192394'] = function( pageObj, proxy, pageid ) {
	var gid = '192394';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			var ctrpostcode = Runner.getControl(pageid, "agency_postal");
var postcode = ctrpostcode.getValue();
params["postcode"] =postcode;			
		}
	}

	if ( !pageObj.buttonEventAfter[ gid ] ) {
		pageObj.buttonEventAfter[ gid ] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
			//var ctrBuildingNumber = Runner.getControl(pageid, "mobilenumber");
//var ctrStreetName = Runner.getControl(pageid, "address_line1");
//var ctrBuildingName = Runner.getControl(pageid, "address_line2");
var ctrBuildingDescription = Runner.getControl(pageid, "agency_address");

//ctrBuildingNumber.setValue(result["BuildingNumber"]);
//ctrStreetName.setValue(result["StreetName"]);
//ctrBuildingName.setValue(result["BuildingName"]);
ctrBuildingDescription.setValue(result["BuildingDescription"]);

var message = "";
ctrl.setMessage(message);
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

