
Runner.pages.PageSettings.addPageEvent( 
	"rental_main_properties", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//hide controls on page load
pageObj.hideField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.hideField("prop_name");
//pageObj.hideField("prop_address");
//pageObj.hideField("prop_postal");

pageObj.hideField("land_size");
pageObj.hideField("builtup");
pageObj.hideField("tenure");
pageObj.hideField("year_built");
pageObj.hideField("TOP");
//pageObj.hideField("agent");
//pageObj.hideField("photos");

var ctrlType = Runner.getControl(pageid, 'types');
var ctrlKind = Runner.getControl(pageid, 'kind');
var ctrlHDBscheme = Runner.getControl(pageid, 'hdb_scheme');
var ctrlHDBtown = Runner.getControl(pageid, 'hdb_town');
var ctrlPropAddress = Runner.getControl(pageid, 'prop_address');
var ctrlPropName = Runner.getControl(pageid, 'prop_name');
var ctrlPropPostal = Runner.getControl(pageid, 'prop_postal');

var ctrlBuiltup = Runner.getControl(pageid, 'builtup');
var ctrlTenure = Runner.getControl(pageid, 'tenure');
var ctrlYrBuilt = Runner.getControl(pageid, 'year_built');
var ctrlTOP = Runner.getControl(pageid, 'TOP');
var ctrlLandsize = Runner.getControl(pageid, 'land_size');

var ctrlType = Runner.getControl(pageid, 'types');
ctrlType.on('change', function(e) {
if (this.getValue() == 'HDB APARTMENT') {
pageObj.showField("kind");
pageObj.showField("hdb_town");
pageObj.showField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}

if (this.getValue() == 'APARTMENT / CONDO'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}

if (this.getValue() == 'LAND'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.hideField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.showField("land_size");
pageObj.hideField("builtup");
pageObj.showField("tenure");
pageObj.hideField("year_built");
pageObj.hideField("TOP");

}

if (this.getValue() == 'LANDED HOUSE'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.hideField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.showField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}

if (this.getValue() == 'RETAIL'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

} 

if (this.getValue() == 'OFFICE'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}

if (this.getValue() == 'INDUSTRIAL'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.hideField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.showField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}
});
});


Runner.pages.PageSettings.addPageEvent( 
	"rental_main_properties", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		var ctrlType = Runner.getControl(pageid, 'types');
var ctrlKind = Runner.getControl(pageid, 'kind');
var ctrlHDBscheme = Runner.getControl(pageid, 'hdb_scheme');
var ctrlHDBtown = Runner.getControl(pageid, 'hdb_town');
var ctrlPropAddress = Runner.getControl(pageid, 'prop_address');
var ctrlPropName = Runner.getControl(pageid, 'prop_name');
var ctrlPropPostal = Runner.getControl(pageid, 'prop_postal');

var ctrlBuiltup = Runner.getControl(pageid, 'builtup');
var ctrlTenure = Runner.getControl(pageid, 'tenure');
var ctrlYrBuilt = Runner.getControl(pageid, 'year_built');
var ctrlTOP = Runner.getControl(pageid, 'TOP');
var ctrlLandsize = Runner.getControl(pageid, 'land_size');

if(ctrlType.getValue()=='HDB APARTMENT')
{
pageObj.showField("kind");
pageObj.showField("hdb_town");
pageObj.showField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

} 
if (ctrlType.getValue()== 'APARTMENT / CONDO')
{
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}	
if (ctrlType.getValue()== 'LAND')
{
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.hideField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.showField("land_size");
pageObj.hideField("builtup");
pageObj.showField("tenure");
pageObj.hideField("year_built");
pageObj.hideField("TOP");

}	
if (ctrlType.getValue()== 'LANDED HOUSE')
{
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.hideField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.showField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}
if (ctrlType.getValue()== 'RETAIL')
{
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}
if (ctrlType.getValue()== 'OFFICE')
{
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}	
if (ctrlType.getValue()== 'INDUSTRIAL')
{
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.hideField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.showField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}	


ctrlType.on('change', function(e) {
if (this.getValue() == 'HDB APARTMENT') {
pageObj.showField("kind");
pageObj.showField("hdb_town");
pageObj.showField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

} 

if (this.getValue() == 'APARTMENT / CONDO'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}

if (this.getValue() == 'LAND'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.hideField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.showField("land_size");
pageObj.hideField("builtup");
pageObj.showField("tenure");
pageObj.hideField("year_built");
pageObj.hideField("TOP");

}

if (this.getValue() == 'LANDED HOUSE'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.hideField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.showField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}
	
if (this.getValue() == 'RETAIL'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

} 
	
if (this.getValue() == 'OFFICE'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.showField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.hideField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");
}
	
if (this.getValue() == 'INDUSTRIAL'){
pageObj.showField("kind");
pageObj.hideField("hdb_town");
pageObj.hideField("hdb_scheme");
pageObj.hideField("prop_name");
pageObj.showField("prop_address");
pageObj.showField("prop_postal");

pageObj.showField("land_size");
pageObj.showField("builtup");
pageObj.showField("tenure");
pageObj.showField("year_built");
pageObj.showField("TOP");

}
});
});







