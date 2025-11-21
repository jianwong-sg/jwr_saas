Runner.buttonEvents['192220'] = function( pageObj, proxy, pageid ) {
	var gid = '192220';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			var eventParams = {
    tName: "invmail",
    pageType: Runner.pages.constants.PAGE_ADD,
    pageId: -1,
    destroyOnClose: true,
    parentPage: pageObj,
    modal: true,
    editType: Runner.pages.constants.ADD_POPUP,
    baseParams: {
		  hash:pageObj.proxy["invhash"],
        parId: pageObj.id,
        table: pageObj.tName,
        editType: Runner.pages.constants.ADD_POPUP
    },
    afterSave: {
        fn: function(respObj, formObj, fieldControls, addPageObj) {
            $(".close").click();
            var html = $("#view1_invoice_name").html();
            if (html.indexOf("Email sent") == -1) {
                html = "<div class='alert alert alert-success' style='font-size:14px'><strong><<< " + Runner.getCustomLabel("email_sent") + " >>></strong></div>" + html;
                $("#view1_invoice_name").html(html);
            }
        },
        scope: pageObj
    }
};

set_cookie('invoiceSend', 'send');
set_cookie('hash', pageObj.proxy["invhash"]);

//Runner.Event.prototype.stopEvent(e);
Runner.pages.PageManager.openPage(eventParams);			
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

