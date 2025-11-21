Runner.buttonEvents['192565'] = function( pageObj, proxy, pageid ) {
	var gid = '192565';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			// code from business-template DocManager
if ( Runner._dropzone && (!Runner._dropzone.files || !Runner._dropzone.files.length) ) {
	$('#docman-dropzone').hide();
	$('[id^=Save_]').hide();
	$('[id^=Cancel_]').hide();
	$.post("doc_files_list.php", {
	}) 
}
var checkDublicate = function(param){
	$.get("doc_files_list.php",{
		a: "checkdublicate",
		link: param
	})
	.done(function(res){
		if(res){
			out = JSON.parse(res);
			client_w=document.body.clientWidth;
			client_h=document.body.clientHeight;
			var path = out["name"];
			var p = out["name"].lastIndexOf("_");
			path = out["name"].substr(0,p)+out["name"].substr(p+9);
			$("#popupfname").html("..."+path.substr(-47));
			$("#popupnewfname").html(out["newName"]);
			$("#renamefile").css("left",(client_w/2-175)+"px");
			$("#renamefile").css("top",(client_h/2-100)+"px");
			$("#renamefile").show();
			$("#popupskip").bind("click", function(){
				checkDublicate("cancel");
				return false;
			});
			$("#popupreplace").bind("click", function(){
				checkDublicate("replace");
				return false;
			});
			$("#popupnewname").bind("click", function(){
				checkDublicate("newname");
				return false;
			});

			return false;
		}
		ajax.submit();
	});
}

checkDublicate("");

return false;

// end DocManager code

//The code was commented on October 12 2021 14:08 on applying DocManager business template

//
//	if ( Runner._dropzone && (!Runner._dropzone.files || !Runner._dropzone.files.length) ) {
//		$('#docman-dropzone').hide();
//	}
//			
		}
	}

	if ( !pageObj.buttonEventAfter[ gid ] ) {
		pageObj.buttonEventAfter[ gid ] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
			// code from business-template DocManager
var currentLocation = location.href;
if(currentLocation.indexOf("rand=")!=-1){
	var p = currentLocation.indexOf("rand=");
	currentLocation = currentLocation.substr(0,p-1);
}
if(currentLocation.indexOf("?")!=-1)
	currentLocation+="&rand="+Math.random();
else
	currentLocation+="?rand="+Math.random();

location.href = currentLocation;

// end DocManager code

//The code was commented on October 12 2021 14:08 on applying DocManager business template

//
//location.reload();
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

