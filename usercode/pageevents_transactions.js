
Runner.pages.PageSettings.addPageEvent( 
	"transactions", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		// Initial page setup
pageObj.toggleItem("tx_info_section", false);
pageObj.toggleItem("prop_info_section", false);
$("[data-fieldname='status_status']").hide();

// --- 1. Control Initialization (Grouped) ---
// Group all controls into a single object for a cleaner structure.
var ctrls = {
    // Transaction/Price/Date Controls
    category: Runner.getControl(pageid, 'category'),
    representing: Runner.getControl(pageid, 'representing'),
    marketing_rights: Runner.getControl(pageid, 'marketing_rights'),
    sale_price: Runner.getControl(pageid, 'sale_price'),
    rental_price: Runner.getControl(pageid, 'rental_price'),
    rental_price_type: Runner.getControl(pageid, 'rental_price_type'),
    lease_duration_no: Runner.getControl(pageid, 'lease_duration_no'),
    lease_duration_unit: Runner.getControl(pageid, 'lease_duration_unit'),
    lease_start_date: Runner.getControl(pageid, 'lease_start_date'),
    lease_expiry: Runner.getControl(pageid, 'lease_expiry'),
    management_fee: Runner.getControl(pageid, 'management_fee'),
    agency: Runner.getControl(pageid, 'agency'),
    
    // Agent Controls
    salesperson_name: Runner.getControl(pageid, 'salesperson_name'),
    salesperson_email: Runner.getControl(pageid, 'salesperson_email'),
    cea_reg: Runner.getControl(pageid, 'cea_reg'),
    
    // Reminder Controls (grouped for the second event)
    reminder_tenant: Runner.getControl(pageid, 'reminder_tenant'),
    reminder_tenant_email: Runner.getControl(pageid, 'reminder_tenant_email'),

    // Property Type Controls (grouped for the second event)
    prop_type: Runner.getControl(pageid, 'prop_type'),
    built_up: Runner.getControl(pageid, 'built_up'),
    built_up_unit: Runner.getControl(pageid, 'built_up_unit'),
    no_bedrooms: Runner.getControl(pageid, 'no_bedrooms'),
    no_bathrooms: Runner.getControl(pageid, 'no_bathrooms'),
    land: Runner.getControl(pageid, 'land'),
    land_unit: Runner.getControl(pageid, 'land_unit'),

    // Additional Date/Field Controls
    ta_date: Runner.getControl(pageid, 'ta_date'),
    loi_date: Runner.getControl(pageid, 'loi_date'),
    // ... add any other controls you need to reference outside the main group ...
    
    // Note: If controls are only used once (like valuation_price, etc.),
    // you can choose to declare them only when needed, but grouping is generally cleaner.
};

// --- 2. Helper Functions/Constants ---

// Common actions for all transaction types
var COMMON_SHOW_FIELDS = ["salesperson_name", "salesperson_email", "cea_reg", "representing", "marketing_rights", "currency"];
var COMMON_SAVE_BUTTONS = ["add_save", "add_save1", "add_back_list1", "add_reset1"];

/**
 * Executes pageObj.toggleItem for a list of items.
 * @param {string[]} items - Array of item IDs.
 * @param {boolean} state - true (show) or false (hide).
 */
function toggleItems(items, state) {
    items.forEach(function(item) {
        pageObj.toggleItem(item, state);
    });
}

/**
 * Manages required validation for multiple controls.
 * @param {object[]} controls - Array of control objects (e.g., [ctrls.sale_price, ctrls.agency]).
 * @param {boolean} isRequired - true to add 'IsRequired', false to remove.
 */
function manageValidations(controls, isRequired) {
    var method = isRequired ? 'addValidation' : 'removeValidation';
    controls.forEach(function(ctrl) {
        // Ensure the control exists before calling the method
        if (ctrl && typeof ctrl[method] === 'function') {
            ctrl[method]('IsRequired');
        }
    });
}

// All section items for easier toggling
var ALL_SECTIONS = [
    "tx_info_section", "prop_info_section", "agency_info_section", 
    "rental_info_section", "sale_info_section", "jtc_lease_info_section", 
    "room_rental_info_section"
];

// --- 3. Category Change Event (Optimized) ---

ctrls.category.on('change', function(e) {
    var category = this.getValue();
    
    // Hide all sections by default
    toggleItems(ALL_SECTIONS, false);
    
    // Clear all common agent/price validations before applying new ones
    manageValidations([
        ctrls.sale_price, 
        ctrls.rental_price, 
        ctrls.salesperson_name, 
        ctrls.agency, 
        ctrls.rental_price_type, 
        ctrls.lease_start_date, 
        ctrls.lease_expiry, 
        ctrls.lease_duration_no, 
        ctrls.lease_duration_unit,
        ctrls.marketing_rights
    ], false);
    
    // If a category is selected, show common sections/buttons
    if (category !== '') {
        pageObj.toggleItem("tx_info_section", true);
        pageObj.toggleItem("prop_info_section", true);
        toggleItems(COMMON_SAVE_BUTTONS, true);
    }
    
    // Define the specific logic for each category
    switch (category) {
        case 'SALE':
            pageObj.toggleItem("sale_info_section", true);
            pageObj.showField("reminder_tenant"); // Show by default, then hide if needed
            pageObj.showField("reminder_tenant_email"); // Show by default, then hide if needed
            
            COMMON_SHOW_FIELDS.forEach(function(field) { pageObj.showField(field); });
            
            manageValidations([ctrls.sale_price, ctrls.salesperson_name], true);
            pageObj.hideField("reminder_tenant_email"); // Specifically hide for SALE
            break;

        case 'RENTAL':
        case 'ASSIGNMENT':
            pageObj.toggleItem("rental_info_section", true);
            
            COMMON_SHOW_FIELDS.forEach(function(field) { pageObj.showField(field); });
            pageObj.showField("reminder_tenant");
            pageObj.hideField("reminder_tenant_email"); 
            
            manageValidations([
                ctrls.rental_price, 
                ctrls.salesperson_name,
                ctrls.rental_price_type, 
                ctrls.lease_start_date, 
                ctrls.lease_expiry, 
                ctrls.lease_duration_no, 
                ctrls.lease_duration_unit
            ], true);
            break;

        case 'ROOM RENTAL':
            pageObj.toggleItem("rental_info_section", true);
            pageObj.toggleItem("room_rental_info_section", true);
            
            COMMON_SHOW_FIELDS.forEach(function(field) { pageObj.showField(field); });
            pageObj.showField("reminder_tenant");
            pageObj.hideField("reminder_tenant_email"); 

            manageValidations([
                ctrls.rental_price, 
                ctrls.rental_price_type, 
                ctrls.lease_start_date, 
                ctrls.lease_expiry, 
                ctrls.lease_duration_no, 
                ctrls.lease_duration_unit
                // Note: AgentName validation is commented out in your original logic, kept that way here.
            ], true);
            break;

        case 'PROPERTY MANAGEMENT':
            pageObj.toggleItem("agency_info_section", true);
            pageObj.toggleItem("rental_info_section", true);
            
            // Hide/Show fields for Management
            ["salesperson_name", "cea_reg", "salesperson_email", "marketing_rights", "ta_date", "loi_date", "comm_percent", "comm_unit", "transacted_price"].forEach(function(field) { pageObj.hideField(field); });
            pageObj.showField("representing");
            pageObj.showField("lease_duration_no");
            pageObj.showField("lease_duration_unit");
            pageObj.showField("reminder_tenant");
            pageObj.hideField("reminder_tenant_email"); 
            
            manageValidations([
                ctrls.agency, 
                ctrls.rental_price,	
                ctrls.lease_start_date,		
                ctrls.lease_expiry,
                ctrls.lease_duration_no,
                ctrls.lease_duration_unit,
                //ctrls.management_fee // If you uncomment IsRequired, uncomment this too
            ], true);
            ctrls.marketing_rights.removeValidation('IsRequired'); // Explicitly remove
            break;

        case 'JTC LEASE MANAGEMENT':
            pageObj.toggleItem("jtc_lease_info_section", true);

            // Show common agent fields
            ["salesperson_name", "salesperson_email", "cea_reg", "representing", "currency"].forEach(function(field) { pageObj.showField(field); });
            pageObj.hideField("marketing_rights");
            
            manageValidations([ctrls.salesperson_name], true);
            break;
            
        // default case (empty/unrecognized) handled by the initial clear and check
    }
});


// --- 4. Reminder Tenant Change Event (Simplified) ---

ctrls.reminder_tenant.on('change', function(e) {
    var isYes = this.getValue() == "Yes";
    var method = isYes ? 'addValidation' : 'removeValidation';
    var action = isYes ? 'showField' : 'hideField';

    ctrls.reminder_tenant_email[method]('IsRequired');
    pageObj[action]("reminder_tenant_email");
});


// --- 5. Property Type Change Event (Optimized) ---

// Define configurations for each property type
var PROPERTY_CONFIG = {
    'HDB APARTMENT': {
        show: ["built_up", "built_up_unit", "no_bedrooms", "no_bathrooms"],
        hide: ["land", "land_unit"]
    },
    'APARTMENT / CONDO': {
        show: ["built_up", "built_up_unit", "no_bedrooms", "no_bathrooms"],
        hide: ["land", "land_unit"]
    },
    'LANDED HOUSE': {
        show: ["built_up", "built_up_unit", "no_bedrooms", "no_bathrooms", "land", "land_unit"],
        hide: []
    },
    'INDUSTRIAL': {
        show: ["built_up", "built_up_unit", "land", "land_unit"],
        hide: ["no_bedrooms", "no_bathrooms"]
    },
    'OFFICE': {
        show: ["built_up", "built_up_unit", "no_bathrooms"],
        hide: ["no_bedrooms", "land", "land_unit"]
    },
    'RETAIL': {
        show: ["built_up", "built_up_unit", "no_bathrooms"],
        hide: ["no_bedrooms", "land", "land_unit"]
    },
    'LAND': {
        show: ["land", "land_unit"],
        hide: ["built_up", "built_up_unit", "no_bedrooms", "no_bathrooms"]
    }
};

// All property-related fields for clearing
var ALL_PROP_FIELDS = [
    "built_up", "built_up_unit", "no_bedrooms", "no_bathrooms", "land", "land_unit"
];

ctrls.prop_type.on('change', function(e) {
    var type = this.getValue();
    var config = PROPERTY_CONFIG[type];

    // Reset visibility for all property fields
    ALL_PROP_FIELDS.forEach(function(field) {
        pageObj.hideField(field);
    });

    if (config) {
        // Show fields based on the configuration
        config.show.forEach(function(field) {
            pageObj.showField(field);
        });
        // (No need for hide loop as ALL_PROP_FIELDS handles the reset)
    }
});

$(document).ready(function () {
    // ===== Scroll to Top ==== 
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 1000) { // If page is scrolled more than 1000px
            $('#return-to-top').fadeIn(200); // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200); // Else fade out the arrow
        }
    });

    $('#return-to-top').click(function () { // When arrow is clicked
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });
});

});


Runner.pages.PageSettings.addPageEvent( 
	"transactions", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		ctrlCDDResult = Runner.getControl(pageid, "cdd_result");
ctrlCheckResult = Runner.getControl(pageid, "cdd_check_result");
ctrlMeasureResult = Runner.getControl(pageid, "cddmeasure_result");

if (ctrlCheckResult.getValue() === '' && ctrlCDDResult.getValue() === 'Conduct of CDD Measures is NECESSARY' && ctrlMeasureResult.getValue() === '') {
    Swal.fire({
        title: 'CDD Measure Required!',
        text: 'You are required to perform CDD measures.',
        icon: 'warning',
        confirmButtonText: 'OK',
        confirmButtonColor: '#3085d6'
    }).then((result) => {
        if (result.isConfirmed) {
            const targetSection = document.getElementById("cdd_measure_section");
            if (targetSection) {
                // Delay to let SweetAlert fully close before scrolling
                setTimeout(() => {
                    targetSection.scrollIntoView({ behavior: "smooth", block: "start" });
                }, 300); // adjust delay if needed
            }
        }
    });
}

// Sweet alert for STR
// Check if gridRow37 exists first
if (!document.getElementById("gridRow37")) {
    // Sweet alert for STR
    if (ctrlMeasureResult.getValue() === 'Suspicious Transaction Report Required') {
        Swal.fire({
            title: 'Suspicious Transaction Report (STR) Required!',
            text: 'You are required to Lodge STR of the subject client',
            icon: 'warning',
            confirmButtonText: 'OK',
            confirmButtonColor: '#3085d6'
        }).then((result) => {
            if (result.isConfirmed) {
                const targetSection = document.getElementById("str_section");
                if (targetSection) {
                    // Delay to let SweetAlert fully close before scrolling
                    setTimeout(() => {
                        targetSection.scrollIntoView({ behavior: "smooth", block: "center" });
                    }, 300);
                }
            }
        });
    }
}


// show or hide CDD check and Delete buttons
$(document).ready(function () {
    function updateButtonVisibility() {
        // Check if the "No data yet" message is visible (either notfound_message3 or notfound_message2)
        var hasNoDataMessage3 = $("[name='notfound_message3']").length > 0 && $("[name='notfound_message3']").is(":visible");
        var hasNoDataMessage2 = $("[name='notfound_message2']").length > 0 && $("[name='notfound_message2']").is(":visible");
        // Check if the grid has records
        var hasRecords = $("#detailPreview3").find('table > tbody > tr').length > 0;

        if (hasNoDataMessage2) {
            // Hide both buttons when notfound_message2 is displayed
            $("#addButton3").hide();
            $("[id^='Delete_cdd_item_']").hide();
        } else if (hasNoDataMessage3) {
            $("#addButton3").show(); // Show the Add button
            $("[id^='Delete_cdd_item_']").hide(); // Hide Delete buttons
        } else if (hasRecords) {
            $("#addButton3").hide(); // Hide the Add button
            $("[id^='Delete_cdd_item_']").show(); // Show Delete buttons
        } else {
            // Fallback: No records and no message
            $("#addButton3").show(); 
            $("[id^='Delete_cdd_item_']").hide();
        }
    }

    // Initial visibility update on document ready
    updateButtonVisibility();
    
    // You might also want to set up an observer if the content changes dynamically
    // For example, if using PHPRunner's AJAX calls:
    $(document).ajaxComplete(function() {
        updateButtonVisibility();
    });
});


// show or hide CDD measure questionnaires
$(document).ready(function() {
    // Check if the row with id "gridRow32" exists and is visible
    if ($("#gridRow32").length > 0) {
        // Hide the button if the row exists
        $("#addButton4").hide();
    } else {
        // Show the button if the row does not exist
        $("#addButton4").show();
    }
});

// show or hide str button
$(document).ready(function() {
    // Check if the row with id "gridRow37" exists and is visible
    if ($("#gridRow37").length > 0) {
        // Hide the button if the row exists
        $("#addButton5").hide();
    } else {
        // Show the button if the row does not exist
        $("#addButton5").show();
    }
});


function showLeaseError(message) {
    var msgDiv = document.getElementById("leaseErrorMsg");
    msgDiv.innerText = message;
    msgDiv.style.display = "block";
}

function hideLeaseError() {
    var msgDiv = document.getElementById("leaseErrorMsg");
    msgDiv.innerText = "";
    msgDiv.style.display = "none";
}

function calculateLeaseDuration() {
    var startVal = Runner.getControl(pageid, 'lease_start_date').getValue();
    var endVal = Runner.getControl(pageid, 'lease_expiry').getValue();

    if (startVal && endVal) {
        var startDate = new Date(startVal);
        var endDate = new Date(endVal);

        if (endDate < startDate) {
            showLeaseError("🚫 Lease expiry date cannot be earlier than lease start date.");
            Runner.getControl(pageid, 'lease_duration_no').setValue("");
            return;
        } else {
            hideLeaseError();
        }

        var years = endDate.getFullYear() - startDate.getFullYear();
        var months = endDate.getMonth() - startDate.getMonth();
        var totalMonths = years * 12 + months;

        if (endDate.getDate() >= startDate.getDate()) {
            totalMonths += 1;
        }

        Runner.getControl(pageid, 'lease_duration_no').setValue(totalMonths.toString());
    }
}

// Get the date controls
var leaseStartCtrl = Runner.getControl(pageid, 'lease_start_date');
var leaseEndCtrl = Runner.getControl(pageid, 'lease_expiry');

// Controls (single declarations)
var ctrlCat = Runner.getControl(pageid, 'category');
var ctrlRepresent = Runner.getControl(pageid, 'representing');
var ctrlMarketing = Runner.getControl(pageid, 'marketing_rights');
var ctrlSalePrice = Runner.getControl(pageid, 'sale_price');
var ctrlValuation = Runner.getControl(pageid, 'valuation_price');
var ctrlOption = Runner.getControl(pageid, 'option_money');
var ctrlOtpDate = Runner.getControl(pageid, 'otp_date');
var ctrlOtpExeDate = Runner.getControl(pageid, 'option_exercise_date');
var ctrlEstCompletion = Runner.getControl(pageid, 'est_completion_date');
var ctrlSpExeDate = Runner.getControl(pageid, 'sp_execution_date');
var ctrlLOI = Runner.getControl(pageid, 'loi_date');
var ctrlRental = Runner.getControl(pageid, 'rental_price');
var ctrlRentPriceType = Runner.getControl(pageid, 'rental_price_type');
var ctrlTADate = Runner.getControl(pageid, 'ta_date');
var ctrlLeaseDuration = Runner.getControl(pageid, 'lease_duration_no');
var ctrlLeaseDuUnit = Runner.getControl(pageid, 'lease_duration_unit');
var ctrlLeaseStart = Runner.getControl(pageid, 'lease_start_date');
var ctrlLeaseEnd = Runner.getControl(pageid, 'lease_expiry');
var ctrlUnit = Runner.getControl(pageid, 'comm_unit');
var ctrlPercent = Runner.getControl(pageid, 'comm_percent');
var ctrlAmount = Runner.getControl(pageid, 'comm_amt');
var ctrlTransacted = Runner.getControl(pageid, 'transacted_price');
var ctrlEarned = Runner.getControl(pageid, 'comm_earned');
var ctrlGst = Runner.getControl(pageid, 'gst');
var ctrlGross = Runner.getControl(pageid, 'comm_gross');
var ctrlGstPayable = Runner.getControl(pageid, 'gst_payable');
var ctrlGstInclusive = Runner.getControl(pageid, 'gst_inclusive');
var ctrlCommEarnedAgency = Runner.getControl(pageid, 'comm_earned_agency');
var ctrlGstAgency = Runner.getControl(pageid, 'gst_agency');
var ctrlCommGrossAgency = Runner.getControl(pageid, 'comm_gross_agency');
var ctrlAgentName = Runner.getControl(pageid, 'salesperson_name');
var ctrlAgentCea = Runner.getControl(pageid, 'cea_reg');
var ctrlCommEarnedSalesperson = Runner.getControl(pageid, 'comm_earned_salesperson');
var ctrlCommEarnedPercentSalesperson = Runner.getControl(pageid, 'comm_earned_percent_salesperson');
var ctrlCommToAgency = Runner.getControl(pageid, 'comm_to_agency');
var ctrlCommToAgency1 = Runner.getControl(pageid, 'comm_to_agency1');
var ctrlCommNettSalesperson = Runner.getControl(pageid, 'comm_nett_salesperson');
var ctrlManageFee = Runner.getControl(pageid, 'management_fee');
var ctrlAgency = Runner.getControl(pageid, 'agency');
var ctrlAgencyCea = Runner.getControl(pageid, 'agency_cea');
var ctrlConsultFee = Runner.getControl(pageid, 'consultation_fee');
var ctrlServCommence = Runner.getControl(pageid, 'service_commencement');
var ctrlServComplete = Runner.getControl(pageid, 'service_completion');
var ctrlResult = Runner.getControl(pageid, 'result');
var ctrlRemindAgent = Runner.getControl(pageid, 'reminder_agent');
var ctrlRemindTenant = Runner.getControl(pageid, 'reminder_tenant');
var ctrlReminderTenantEmail = Runner.getControl(pageid, 'reminder_tenant_email');
var ctrlRmBuiltUnit = Runner.getControl(pageid, 'rm_builtup_unit');
var ctrlFormNumber = Runner.getControl(pageid, 'form_number');
var ctrlSubCat = Runner.getControl && Runner.getControl(pageid, 'sub_category'); // safe-get if exists

// Helper utilities
function applyFieldAction(list, action) {
  if (!list || !list.length) return;
  list.forEach(function(name) {
    if (action === 'show') pageObj.showField(name);
    else if (action === 'hide') pageObj.hideField(name);
    else if (action === 'reset') {
      var c = Runner.getControl(pageid, name);
      if (c && typeof c.setValue === 'function') c.setValue('');
    }
  });
}
function applyToggle(list, visible) {
  if (!list || !list.length) return;
  list.forEach(function(name) { pageObj.toggleItem(name, visible); });
}
function setValidations(validations) {
  if (!validations) return;
  validations.forEach(function(v) {
    var ctrl = Runner.getControl(pageid, v.name);
    if (!ctrl) return;
    if (v.action === 'add') ctrl.addValidation('IsRequired');
    if (v.action === 'remove') ctrl.removeValidation && ctrl.removeValidation('IsRequired');
  });
}
function resetControls(names) { applyFieldAction(names, 'reset'); }

// Data-driven category configuration
var categoryConfig = {
  'SALE': {
    toggleOn: ["tx_info_section","prop_info_section","sale_info_section","comm_to_agent_section","add_save","add_save1","add_back_list1","add_reset1","gross_comm_label"],
    toggleOff: ["agency_info_section","rental_info_section","jtc_lease_info_section","room_rental_info_section","gross_fee_label","net_mag_fee_label","comm_earned_label"],
    show: ["salesperson_name","salesperson_email","cea_reg","representing","marketing_rights","currency","comm_percent","no_bedrooms","no_bathrooms","transacted_price"],
    hide: ["comm_unit","comm_earned","management_fee"],
    validations: [{name:'sale_price', action:'add'}, {name:'salesperson_name', action:'add'}],
    reset: ['transacted_price','representing','marketing_rights','sale_price','valuation_price','option_money','otp_date','option_exercise_date','est_completion_date','sp_execution_date','comm_percent','comm_amt','comm_earned','comm_gross','comm_earned_agency','comm_earned_salesperson','comm_earned_percent_salesperson','comm_to_agency','comm_to_agency1','comm_nett_salesperson']
  },
  'RENTAL': {
    toggleOn: ["tx_info_section","prop_info_section","rental_info_section","comm_to_agent_section","gross_comm_label","add_save","add_save1","add_back_list1","add_reset1"],
    toggleOff: ["agency_info_section","sale_info_section","jtc_lease_info_section","room_rental_info_section","gross_fee_label","net_mag_fee_label","comm_earned_label"],
    show: ["salesperson_name","salesperson_email","cea_reg","representing","marketing_rights","currency","ta_date","loi_date","lease_duration_no","lease_duration_unit","reminder_tenant","comm_unit","no_bedrooms","no_bathrooms","transacted_price"],
    hide: ["reminder_tenant_email","comm_percent","comm_earned","management_fee"],
    validations: [{name:'rental_price', action:'add'}, {name:'rental_price_type', action:'add'}, {name:'lease_start_date', action:'add'}, {name:'lease_expiry', action:'add'}, {name:'lease_duration_no', action:'add'}, {name:'lease_duration_unit', action:'add'}],
    reset: ['transacted_price','representing','marketing_rights','loi_date','rental_price','ta_date','lease_duration_no','lease_start_date','lease_expiry','comm_unit','comm_percent','comm_amt','comm_earned','comm_gross','comm_earned_agency','comm_earned_salesperson','comm_earned_percent_salesperson','comm_to_agency','comm_to_agency1','comm_nett_salesperson']
  },
  'ASSIGNMENT': null,
  'ROOM RENTAL': {
    toggleOn: ["tx_info_section","prop_info_section","rental_info_section","room_rental_info_section","comm_to_agent_section","gross_comm_label"],
    toggleOff: ["agency_info_section","sale_info_section","jtc_lease_info_section","gross_fee_label","net_mag_fee_label","comm_earned_label"],
    show: ["salesperson_name","salesperson_email","cea_reg","representing","marketing_rights","currency","ta_date","loi_date","lease_duration_no","lease_duration_unit","reminder_tenant","comm_unit","no_bedrooms","no_bathrooms","rm_rental_rm_type","rm_builtup","rm_builtup_unit","transacted_price"],
    hide: ["reminder_tenant_email","comm_percent","comm_earned","management_fee"],
    validations: [{name:'rental_price', action:'add'}, {name:'rental_price_type', action:'add'}, {name:'lease_start_date', action:'add'}, {name:'lease_expiry', action:'add'}, {name:'lease_duration_no', action:'add'}, {name:'lease_duration_unit', action:'add'}, {name:'rm_builtup_unit', action:'add'}],
    reset: ['transacted_price','representing','marketing_rights','loi_date','rental_price','ta_date','lease_duration_no','lease_start_date','lease_expiry','comm_unit','comm_percent','comm_amt','comm_earned','comm_gross','comm_earned_agency','comm_earned_salesperson','comm_earned_percent_salesperson','comm_to_agency','comm_to_agency1','comm_nett_salesperson']
  },
  'PROPERTY MANAGEMENT': {
    toggleOn: ["tx_info_section","prop_info_section","agency_info_section","rental_info_section","net_mag_fee_label"],
    toggleOff: ["sale_info_section","jtc_lease_info_section","room_rental_info_section","comm_to_agent_section","details_preview2","details_preview6","details_preview3","cea_prescribed_form_section","comm_label","comm_earned_label","gross_comm_label","gross_fee_label","text10","text11"],
    show: ["representing","currency","lease_duration_no","lease_duration_unit","reminder_tenant","no_bedrooms","no_bathrooms","management_fee"],
    hide: ["salesperson_name","salesperson_email","cea_reg","marketing_rights","ta_date","loi_date","reminder_tenant_email","comm_percent","comm_unit","transacted_price","comm_earned","comm_amt","comm_earned_agency","comm_earned_salesperson"],
    validations: [{name:'agency', action:'add'}, {name:'rental_price', action:'add'}, {name:'lease_start_date', action:'add'}, {name:'lease_expiry', action:'add'}, {name:'lease_duration_no', action:'add'}, {name:'lease_duration_unit', action:'add'}, {name:'marketing_rights', action:'remove'}],
    reset: ['transacted_price','representing','rental_price','management_fee','lease_start_date','lease_expiry','comm_unit','comm_percent','comm_amt','comm_earned','comm_gross','comm_earned_agency','comm_earned_salesperson','comm_earned_percent_salesperson','comm_to_agency','comm_to_agency1','comm_nett_salesperson']
  },
  'JTC LEASE MANAGEMENT': {
    toggleOn: ["tx_info_section","prop_info_section","jtc_lease_info_section","gross_fee_label"],
    toggleOff: ["agency_info_section","rental_info_section","sale_info_section","room_rental_info_section","comm_label","comm_earned_label","gross_comm_label","net_mag_fee_label"],
    show: ["salesperson_name","salesperson_email","cea_reg","representing","currency","comm_earned"],
    hide: ["marketing_rights","comm_percent","comm_unit","transacted_price","comm_amt","comm_earned_salesperson","management_fee"],
    validations: [{name:'salesperson_name', action:'add'}, {name:'marketing_rights', action:'remove'}],
    reset: ['transacted_price','representing','comm_unit','comm_percent','comm_amt','comm_earned','comm_gross','comm_earned_agency','comm_earned_salesperson','comm_earned_percent_salesperson','comm_to_agency','comm_to_agency1','comm_nett_salesperson','sub_category','consultation_fee','service_commencement','service_completion']
  }
};
categoryConfig['ASSIGNMENT'] = categoryConfig['RENTAL'];

// track previous category so we only reset on an actual user change
var prevCategory = typeof ctrlCat.getValue === 'function' ? ctrlCat.getValue() : null;

function applyCategory(cat, options) {
  options = options || {};
  var cfg = categoryConfig[cat];
  if (!cfg) return;

  if (cfg.toggleOn) applyToggle(cfg.toggleOn, true);
  if (cfg.toggleOff) applyToggle(cfg.toggleOff, false);
  if (cfg.show) applyFieldAction(cfg.show, 'show');
  if (cfg.hide) applyFieldAction(cfg.hide, 'hide');
  if (cfg.validations) setValidations(cfg.validations);

  if (cfg.reset && (options.forceReset || (prevCategory !== null && prevCategory !== undefined && prevCategory !== '' && prevCategory !== cat))) {
    resetControls(cfg.reset);
  }

  applyTenantEmailRequirement(ctrlRemindTenant.getValue && ctrlRemindTenant.getValue());
  prevCategory = cat;
}

// Initialize by applying current category but do not reset on init
applyCategory(ctrlCat.getValue && ctrlCat.getValue(), { forceReset: false });

if (ctrlCat && typeof ctrlCat.on === 'function') {
  ctrlCat.on('change', function () {
    var newCat = this.getValue();
    applyCategory(newCat, { forceReset: true });
  });
}

// Tenant email conditional logic (integrated)
function applyTenantEmailRequirement(reminderValue) {
  if (reminderValue === 'Yes') {
    ctrlReminderTenantEmail.addValidation('IsRequired');
    pageObj.showField('reminder_tenant_email');
  } else {
    ctrlReminderTenantEmail.removeValidation && ctrlReminderTenantEmail.removeValidation('IsRequired');
    pageObj.hideField('reminder_tenant_email');
  }
}
if (ctrlRemindTenant && typeof ctrlRemindTenant.on === 'function') {
  ctrlRemindTenant.on('change', function () {
    var val = this.getValue();
    if (val === 'Yes') {
      ctrlReminderTenantEmail.addValidation('IsRequired');
      pageObj.showField('reminder_tenant_email');
      ctrlReminderTenantEmail.setValue('');
    } else {
      ctrlReminderTenantEmail.removeValidation && ctrlReminderTenantEmail.removeValidation('IsRequired');
      pageObj.hideField('reminder_tenant_email');
    }
  });
}

// Initialize by applying current category and tenant-email state
applyCategory(ctrlCat.getValue && ctrlCat.getValue());

if (ctrlCat && typeof ctrlCat.on === 'function') {
  ctrlCat.on('change', function () { applyCategory(this.getValue()); });
}

// Calculator helpers (integer-based)
function toNumber(v) {
  var n = (v === '' || v === null || typeof v === 'undefined') ? 0 : +v;
  return isFinite(n) ? n : NaN;
}

// currencyView: integer currency display (no decimals)
function currencyView(data) {
  data = (data || 0) * 1;
  if (!data) return '$0';
  return '$' + (Math.round(data)).toLocaleString('en-IN');
}

// round to nearest integer
function customRound(data) {
  return Math.round(data);
}

// round down to nearest integer
function roundDownInt(v) {
  return Math.floor(v);
}

// round up to nearest integer
function roundUpInt(v) {
  return Math.ceil(v);
}

// When consultation fee changes
if (ctrlConsultFee && typeof ctrlConsultFee.on === 'function') {
  ctrlConsultFee.on('keyup', function () {
    var consultfee = toNumber(ctrlConsultFee.getValue());
    if (isNaN(consultfee)) {
      ctrlAmount.setValue('');
      return;
    }
    var amount = Math.round(consultfee);
    ctrlAmount.setValue(amount);
    showTotalGrossCommission();
  });
}

// Unit => amount
if (ctrlUnit && typeof ctrlUnit.on === 'function') {
  ctrlUnit.on('keyup', function () {
    var unit = toNumber(ctrlUnit.getValue());
    if (isNaN(unit)) {
      ctrlAmount.setValue('');
      return;
    }
    var transacted = toNumber(ctrlTransacted.getValue());
    var amount = Math.round(transacted * unit);
    ctrlAmount.setValue(amount);
    showTotalGrossCommission();
  });
}

// Amount => unit & percent
if (ctrlAmount && typeof ctrlAmount.on === 'function') {
  ctrlAmount.on('keyup', function () {
    var amount = toNumber(ctrlAmount.getValue());
    if (isNaN(amount)) {
      ctrlUnit.setValue('');
      ctrlPercent.setValue('');
      return;
    }
    var transacted = toNumber(ctrlTransacted.getValue());
    if (transacted) {
      var unit = amount / transacted;
      ctrlUnit.setValue(unit.toFixed(2));
      var percent = (amount / transacted) * 100;
      ctrlPercent.setValue(percent.toFixed(2));
    } else {
      ctrlUnit.setValue('');
      ctrlPercent.setValue('');
    }
    showTotalGrossCommission();
  });
}

// Percent => amount
if (ctrlPercent && typeof ctrlPercent.on === 'function') {
  ctrlPercent.on('keyup', function () {
    var percent = toNumber(ctrlPercent.getValue());
    if (isNaN(percent)) {
      ctrlAmount.setValue('');
      return;
    }
    var transacted = toNumber(ctrlTransacted.getValue());
    var amount = Math.round(transacted * percent / 100);
    ctrlAmount.setValue(amount);
    showTotalGrossCommission();
  });
}

// GST controls
if (ctrlGstInclusive && typeof ctrlGstInclusive.on === 'function') {
  ctrlGstInclusive.on('change', function () {
    if (ctrlGstInclusive.getValue() == 'on') ctrlGstPayable.setValue('on');
    showTotalGrossCommission();
  });
}
if (ctrlGstPayable && typeof ctrlGstPayable.on === 'function') {
  ctrlGstPayable.on('change', function () {
    if (ctrlGstPayable.getValue() == '') ctrlGstInclusive.setValue('');
    showTotalGrossCommission();
  });
}

// Commission calculation (integer-based)
function showTotalGrossCommission() {
  var amount = toNumber(ctrlAmount.getValue());
  if (isNaN(amount)) amount = 0;
  var earned, gst, gross;

  var gstPayableOn = ctrlGstPayable.getValue() == 'on';
  var gstInclusive = ctrlGstInclusive.getValue() == 'on';

  if (gstPayableOn && !gstInclusive) {
    earned = amount;
    gst = customRound(amount * 9 / 100);
    gross = amount + gst;
  } else if (gstPayableOn && gstInclusive) {
    earned = customRound(amount / 109 * 100);
    gst = amount - earned;
    gross = amount;
  } else {
    earned = amount;
    gst = 0;
    gross = amount;
  }

  // store integer values
  earned = customRound(earned);
  gst = customRound(gst);
  gross = customRound(gross);

  ctrlEarned.setValue(earned);
  ctrlGst.setValue(gst);
  ctrlGross.setValue(gross);

  $('#readonly_value_comm_earned_1').text(currencyView(earned));
  $('#readonly_value_gst_1').text(currencyView(gst));
  $('#readonly_value_comm_gross_1').text(currencyView(gross));

  if (typeof refreshTableData === 'function') refreshTableData();
  if (typeof refreshExternalCoBroker === 'function') refreshExternalCoBroker();
  if (typeof refreshInternalCoBroker === 'function') refreshInternalCoBroker();
}

// Controls (single declarations)
var ctrlPropType = Runner.getControl(pageid, 'prop_type');
var ctrlBuiltUp = Runner.getControl(pageid, 'built_up');
var ctrlBuiltUpUnit = Runner.getControl(pageid, 'built_up_unit');
var ctrlBedroom = Runner.getControl(pageid, 'no_bedrooms');
var ctrlBathroom = Runner.getControl(pageid, 'no_bathrooms');
var ctrlLand = Runner.getControl(pageid, 'land');
var ctrlLandUnit = Runner.getControl(pageid, 'land_unit');

// Commission-related controls (used for resets)
var ctrlCommUnit = ctrlUnit;
var ctrlCommPercent = ctrlPercent;
var ctrlCommAmount = ctrlAmount;
var ctrlCommEarned = ctrlEarned;
var ctrlCommGross = ctrlGross;
var ctrlCommEarnedAgencyCtrl = ctrlCommEarnedAgency;
var ctrlCommEarnedSalespersonCtrl = ctrlCommEarnedSalesperson;
var ctrlCommEarnedPercentSalespersonCtrl = ctrlCommEarnedPercentSalesperson;
var ctrlCommToAgencyCtrl = ctrlCommToAgency;
var ctrlCommToAgency1Ctrl = ctrlCommToAgency1;
var ctrlCommNettSalespersonCtrl = ctrlCommNettSalesperson;

// Transacted / price controls
var ctrlTransacted = Runner.getControl(pageid, 'transacted_price');
var ctrlSalePrice = Runner.getControl(pageid, 'sale_price');
var ctrlRental = Runner.getControl(pageid, 'rental_price');
var ctrlManageFee = Runner.getControl(pageid, 'management_fee');

// Helper utilities
function showFields(list) { (list||[]).forEach(function(n){ pageObj.showField(n); }); }
function hideFields(list) { (list||[]).forEach(function(n){ pageObj.hideField(n); }); }
function resetCommissionFields() {
  var list = ['comm_unit','comm_percent','comm_amt','comm_earned','comm_gross','comm_earned_agency','comm_earned_salesperson','comm_earned_percent_salesperson','comm_to_agency','comm_to_agency1','comm_nett_salesperson'];
  list.forEach(function(name){
    var c = Runner.getControl(pageid, name);
    if (c && typeof c.setValue === 'function') c.setValue('');
  });
}

// Data-driven property-type rules
var propRules = {
  'HDB APARTMENT': { show: ['built_up','built_up_unit','no_bedrooms','no_bathrooms'], hide: ['land','land_unit','rm'] },
  'APARTMENT / CONDO': { show: ['built_up','built_up_unit','no_bedrooms','no_bathrooms'], hide: ['land','land_unit','rm'] },
  'LANDED HOUSE': { show: ['built_up','built_up_unit','no_bedrooms','no_bathrooms','land','land_unit'], hide: [] },
  'INDUSTRIAL': { show: ['built_up','built_up_unit','land','land_unit'], hide: ['no_bedrooms','no_bathrooms','rm'] },
  'OFFICE': { show: ['built_up','built_up_unit','no_bathrooms'], hide: ['no_bedrooms','land','land_unit','rm'] },
  'RETAIL': { show: ['built_up','built_up_unit','no_bathrooms'], hide: ['no_bedrooms','land','land_unit','rm'] },
  'LAND': { show: ['land','land_unit'], hide: ['built_up','built_up_unit','no_bedrooms','no_bathrooms','rm'] }
};

function applyPropTypeRule(type) {
  var rule = propRules[type] || { show: [], hide: ['built_up','built_up_unit','no_bedrooms','no_bathrooms','land','land_unit','rm'] };
  var allFields = ['built_up','built_up_unit','no_bedrooms','no_bathrooms','land','land_unit','rm'];
  hideFields(allFields);
  showFields(rule.show);
  hideFields(rule.hide);
}

applyPropTypeRule(ctrlPropType.getValue && ctrlPropType.getValue());

if (ctrlPropType && typeof ctrlPropType.on === 'function') {
  ctrlPropType.on('change', function () {
    var val = this.getValue();
    applyPropTypeRule(val);
    resetCommissionFields();
  });
}

// Utility: numeric-check helper used by price bindings
function isNumeric(v) {
  if (v === null || v === undefined || v === '') return false;
  return !isNaN(+v);
}

// Update transacted price on change of rental or sale
if (ctrlRental && typeof ctrlRental.on === 'function') {
  ctrlRental.on('keyup', function () {
    var rental = ctrlRental.getValue();
    if (!isNumeric(rental)) {
      if (ctrlSalePrice) ctrlSalePrice.setValue('');
      if (ctrlManageFee) ctrlManageFee.setValue('');
      return;
    }
    if (ctrlTransacted && typeof ctrlTransacted.setValue === 'function') ctrlTransacted.setValue(Number(rental));
  });
}

if (ctrlSalePrice && typeof ctrlSalePrice.on === 'function') {
  ctrlSalePrice.on('keyup', function () {
    var saleprice = ctrlSalePrice.getValue();
    if (!isNumeric(saleprice)) {
      if (ctrlRental) ctrlRental.setValue('');
      if (ctrlManageFee) ctrlManageFee.setValue('');
      return;
    }
    if (ctrlTransacted && typeof ctrlTransacted.setValue === 'function') ctrlTransacted.setValue(Number(saleprice));
  });
}

/* --------------------------
   Integrated commission helpers
   -------------------------- */

// refreshTableData triggers recalcs on detail rows
function refreshTableData() {
/*
    var externals = $("div#detailPreview15").find('tbody').find('tr').not(':first');
    for (var i = 0; i < externals.length; i++) {
        var input = externals.eq(i).find('td').eq(3).find('input').eq(1);
        if (input && input.length) input.keyup();
    }
*/

    $("a[id^=value_comm_]").each(function() {
        var input = $(this); // Co broke External
        input.keyup();
    });

/*
    var partyExternals = $("div#detailPreview17").find('tbody').find('tr').not(':first');
    for (var j = 0; j < partyExternals.length; j++) {
        var input2 = partyExternals.eq(j).find('td').eq(3).find('input').eq(1);
        if (input2 && input2.length) input2.keyup();
    }
*/

$("a[id^=value_comm_tp_]").each(function() {
        var input = $(this); // External party
        input.keyup();
    });
    
/*
    var internals = $("div#detailPreview16").find('tbody').find('tr').not(':first');	
    for (var k = 0; k < internals.length; k++) {
        var input3 = internals.eq(k).find('td').eq(3).find('input').eq(1);
        if (input3 && input3.length) input3.keyup();
    }
*/

$("a[id^=value_comm_earned_inter_]").each(function() {
        var input = $(this); // Co broke Internal
        input.keyup();
    });
}

// refreshExternalCoBroker calculates agency earned/gst/gross (integer)
function refreshExternalCoBroker() {
    var amount = ($('#value_comm_amt_1').val() || 0) * 1;
    var earned, gst, gross;

    if ($('#value_gst_payable_1').prop('checked') && !$('#value_gst_inclusive_1').prop('checked')) {
        earned = amount;
        gst = customRound(amount * 9 / 100);
        gross = amount + gst;
    } else if ($('#value_gst_payable_1').prop('checked') && $('#value_gst_inclusive_1').prop('checked')) {
        earned = customRound(amount / 109 * 100);
        gst = amount - earned;
        gross = amount;
    } else {
        earned = amount;
        gst = 0;
        gross = amount;
    }

    earned = customRound(earned);
    gst = customRound(gst);
    gross = customRound(gross);

    var externals = $("div#detailPreview15").find('tbody').find('tr').not(':first');
    var totalComm = 0;
    var totalGst = ($('#value_gst_1').val() || 0) * 1;

    for (var i = 0; i < externals.length; i++) {
        var commVal = externals.eq(i).find('td').eq(3).find('input').eq(0).val();
        totalComm += (commVal || 0) * 1;

        var gstVal = externals.eq(i).find('td').eq(5).find('input').eq(0).val();
        totalGst -= (gstVal || 0) * 1;
    }

    var partyExternals = $("div#detailPreview17").find('tbody').find('tr').not(':first');
    for (var j = 0; j < partyExternals.length; j++) {
        var commVal2 = partyExternals.eq(j).find('td').eq(3).find('input').eq(0).val();
        if (typeof commVal2 !== 'undefined') {
            totalComm += (commVal2 || 0) * 1;
            var gstVal2 = partyExternals.eq(j).find('td').eq(5).find('input').eq(0).val();
            totalGst -= (gstVal2 || 0) * 1;
        }
    }

    $('#value_comm_earned_agency_1').val(customRound(earned - totalComm));
    $('#value_gst_agency_1').val(customRound(totalGst));
    $('#value_comm_gross_agency_1').val(customRound(earned - totalComm + totalGst));
}

// refreshInternalCoBroker distributes agency to salesperson/internal shares (integer)
function refreshInternalCoBroker() {
    var amount = ($('#value_comm_amt_1').val() || 0) * 1;
    var earned;

    if ($('#value_gst_payable_1').prop('checked') && !$('#value_gst_inclusive_1').prop('checked')) {
        earned = amount;
    } else if ($('#value_gst_payable_1').prop('checked') && $('#value_gst_inclusive_1').prop('checked')) {
        earned = customRound(amount / 109 * 100);
    } else {
        earned = amount;
    }

    earned = customRound(earned);

    var totalComm = ($('#value_comm_earned_agency_1').val() || 0) * 1;
    var internals = $("div#detailPreview16").find('tbody').find('tr').not(':first');	
    var totalInternalEarned = 0;

    for (var i = 0; i < internals.length; i++) {
        var internalPercent = internals.eq(i).find('td').eq(4).find('input').eq(0).val();
        internalPercent = (internalPercent || 0) * 1;
        var internalEarned = customRound(earned * internalPercent / 100);
        totalInternalEarned += internalEarned * 1;
    }

    var agencyShare = ($('#value_agency_share_1').val() || 0) * 1;
    var salesEarned = totalComm - totalInternalEarned;
    var salesPercent = earned ? customRound((salesEarned / earned) * 100) : 0;

    // compute raw agency share then apply integer rounding rules
    var agencyCommRaw = (salesEarned * agencyShare) / 100;
    var agencyComm = roundDownInt(agencyCommRaw);
    var salesCommNett = roundUpInt(salesEarned - agencyComm);

    $('#value_comm_earned_salesperson_1').val(customRound(salesEarned));
    $('#value_comm_earned_percent_salesperson_1').val(customRound(salesPercent));
    $('#value_comm_to_agency_1').val(agencyComm);
    $('#value_comm_to_agency1_1').val(agencyComm);
    $('#value_comm_nett_salesperson_1').val(salesCommNett);
}

/* --------------------------
   End integrated commission helpers
   -------------------------- */
/*
// expose functions to global scope to maintain compatibility
window.refreshTableData = refreshTableData;
window.refreshExternalCoBroker = refreshExternalCoBroker;
window.refreshInternalCoBroker = refreshInternalCoBroker;
window.customRound = customRound;
window.currencyView = currencyView;
window.roundDownInt = roundDownInt;
window.roundUpInt = roundUpInt;
*/

$(document).ready(function () {
    // ===== Scroll to Top ==== 
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 1000) { // If page is scrolled more than 1000px
            $('#return-to-top').fadeIn(200); // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200); // Else fade out the arrow
        }
    });

    $('#return-to-top').click(function () { // When arrow is clicked
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });
});


//reload without losing scroll position
window.addEventListener('load', function () {
      if (window.location.hash) {
        var elements = document.querySelectorAll(window.location.hash);
        if (elements[0]) {
          elements[0].scrollIntoView({
            behavior: 'smooth', // smooth scroll
            block: 'start'
          });
        }
      }
    })
});


Runner.pages.PageSettings.addPageEvent( 
	"transactions", 
	"view", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		//hide buttons on Prescribed Form
$(document).ready(function () {
    function updateButtonVisibility() {
    $("[data-itemid^='edit_form']").hide();
	$("[data-itemid^='esign_form']").hide();
	$("[data-itemid^='view_unsign_form']").hide();
	$("[data-itemid^='view_signed_form']").hide();
            }

    // Initial visibility update on document ready
    updateButtonVisibility();
});


// ---------------------------------------------------------
// GET ALL CONTROLS
// ---------------------------------------------------------
const C = (n) => Runner.getControl(pageid, n);

const ctrlCat  = C('category');
const ctrlRep  = C('representing');
const ctrlMR   = C('marketing_rights');
const ctrlRT   = C('reminder_tenant');
const ctrlRTE  = C('reminder_tenant_email');

const ctrlPropType = C('prop_type');
const ctrlBuiltUp  = C('builtup');
const ctrlBed      = C('no_bedrooms');
const ctrlBath     = C('no_bathrooms');
const ctrlLand     = C('landland');

// ---------------------------------------------------------
// HELPERS
// ---------------------------------------------------------
function showFields(list)  { list.forEach(f => pageObj.showField(f)); }
function hideFields(list)  { list.forEach(f => pageObj.hideField(f)); }
function showItems(list)   { list.forEach(i => pageObj.toggleItem(i, true)); }
function hideItems(list)   { list.forEach(i => pageObj.toggleItem(i, false)); }

function setDashIfEmpty(ctrl) {
    if (ctrl && (ctrl.getValue() === null || ctrl.getValue() === "")) {
        ctrl.setValue("-");
    }
}

// ---------------------------------------------------------
// CATEGORY HANDLER
// ---------------------------------------------------------
function applyCategoryRules() {
    const cat = ctrlCat.getValue();

    // Reset all section visibility first
    hideItems([
        "sale_info_section","rental_info_section","room_rental_info_section",
        "jtc_lease_info_section","agency_info_section","comm_to_agent_section"
    ]);

    switch (cat) {

        // -------------------------------------------------
        // SALE
        // -------------------------------------------------
        case 'SALE':
            showItems(["tx_info_section", "prop_info_section", "sale_info_section", "comm_to_agent_section"]);
            hideItems(["rental_info_section", "room_rental_info_section", "jtc_lease_info_section"]);

            showFields(["salesperson_name","salesperson_email","cea_reg","representing",
                        "marketing_rights","currency","comm_percent","no_bedrooms",
                        "no_bathrooms","transacted_price"]);
            hideFields(["comm_unit","comm_earned","management_fee"]);

            showItems(["gross_comm_label"]);
            hideItems(["gross_fee_label","net_mag_fee_label","comm_earned_label"]);
            break;

        // -------------------------------------------------
        // RENTAL / ASSIGNMENT
        // -------------------------------------------------
        case 'RENTAL':
        case 'ASSIGNMENT':
            showItems(["tx_info_section","prop_info_section","rental_info_section","comm_to_agent_section"]);
            hideItems(["sale_info_section","room_rental_info_section","jtc_lease_info_section"]);

            showFields([
                "salesperson_name","salesperson_email","cea_reg","representing","marketing_rights","currency",
                "ta_date","loi_date","lease_duration_no","lease_duration_unit","no_bedrooms","no_bathrooms",
                "comm_unit","transacted_price","reminder_tenant"
            ]);
            hideFields(["reminder_tenant_email","comm_percent","comm_earned","management_fee"]);

            showItems(["gross_comm_label"]);
            hideItems(["gross_fee_label","net_mag_fee_label","comm_earned_label"]);
            break;

        // -------------------------------------------------
        // ROOM RENTAL
        // -------------------------------------------------
        case 'ROOM RENTAL':
            showItems(["tx_info_section","prop_info_section","rental_info_section",
                       "room_rental_info_section","comm_to_agent_section"]);
            hideItems(["sale_info_section","jtc_lease_info_section"]);

            showFields([
                "salesperson_name","salesperson_email","cea_reg","representing","marketing_rights","currency",
                "ta_date","loi_date","lease_duration_no","lease_duration_unit","no_bedrooms","no_bathrooms",
                "rm_rental_rm_type","rm_builtup","rm_builtup_unit","comm_unit","transacted_price",
                "reminder_tenant"
            ]);
            hideFields(["reminder_tenant_email","comm_percent","comm_earned","management_fee"]);

            showItems(["gross_comm_label"]);
            hideItems(["gross_fee_label","net_mag_fee_label","comm_earned_label"]);
            break;

        // -------------------------------------------------
        // PROPERTY MANAGEMENT
        // -------------------------------------------------
        case 'PROPERTY MANAGEMENT':
            showItems(["tx_info_section","prop_info_section","agency_info_section","rental_info_section"]);
            hideItems(["sale_info_section","jtc_lease_info_section","room_rental_info_section",
                       "comm_to_agent_section","details_preview2","details_preview6","cea_prescribed_form_section"]);

            hideFields(["salesperson_name","salesperson_email","cea_reg","marketing_rights",
                        "ta_date","loi_date","comm_percent","comm_unit","comm_amt"]);
            showFields(["representing","currency","lease_duration_no","lease_duration_unit",
                        "no_bedrooms","no_bathrooms","transacted_price","management_fee"]);

            hideItems(["comm_label","comm_earned_label","gross_comm_label","gross_fee_label"]);
            showItems(["net_mag_fee_label"]);
            break;

        // -------------------------------------------------
        // JTC LEASE MANAGEMENT
        // -------------------------------------------------
        case 'JTC LEASE MANAGEMENT':
            showItems(["tx_info_section","prop_info_section","jtc_lease_info_section"]);
            hideItems(["sale_info_section","rental_info_section","room_rental_info_section"]);

            showFields(["salesperson_name","salesperson_email","cea_reg","representing","currency","comm_earned"]);
            hideFields(["marketing_rights","comm_percent","comm_unit","transacted_price","comm_amt",
                        "management_fee","comm_earned_salesperson"]);

            hideItems(["comm_label","comm_earned_label","gross_comm_label","net_mag_fee_label"]);
            showItems(["gross_fee_label"]);
            break;
    }
}

// ---------------------------------------------------------
// PROPERTY TYPE HANDLER
// ---------------------------------------------------------
function applyPropTypeRules() {
    const pt = ctrlPropType.getValue();

    switch (pt) {
        case 'HDB APARTMENT':
        case 'APARTMENT / CONDO':
            showItems(["builtup","no_bedrooms","no_bathrooms"]);
            hideItems(["landland"]);
            break;

        case 'LANDED HOUSE':
            showItems(["builtup","no_bedrooms","no_bathrooms","landland"]);
            break;

        case 'INDUSTRIAL':
            showItems(["builtup","no_bathrooms","landland"]);
            hideItems(["no_bedrooms","rm_rental_rm_type","rm_builtup"]);
            break;

        case 'OFFICE':
        case 'RETAIL':
            showItems(["builtup","no_bathrooms"]);
            hideItems(["no_bedrooms","landland","rm_rental_rm_type","rm_builtup"]);
            break;

        case 'LAND':
            showItems(["rm_builtup"]);
            hideItems(["builtup","no_bedrooms","no_bathrooms","landland","rm_rental_rm_type"]);
            break;
    }

    setDashIfEmpty(ctrlBuiltUp);
    setDashIfEmpty(ctrlBed);
    setDashIfEmpty(ctrlBath);
    setDashIfEmpty(ctrlLand);
}

// ---------------------------------------------------------
// REMINDER EMAIL RULE
// ---------------------------------------------------------
function applyReminderRule() {
    if (ctrlRT.getValue() === "Yes") pageObj.showField("reminder_tenant_email");
    else pageObj.hideField("reminder_tenant_email");
}

// ---------------------------------------------------------
// FORM DISPLAY HANDLER
// ---------------------------------------------------------
function applyFormRules() {
    const cat  = ctrlCat.getValue();
    const rep  = ctrlRep.getValue();
    const mkt  = ctrlMR.getValue();

    // Hide all
    hideItems([
        "details_form1","details_form2","details_form3","details_form4",
        "details_form5","details_form6","details_form7","details_form8",
        "cea_f1_text","cea_f2_text","cea_f3_text","cea_f4_text",
        "cea_f5_text","cea_f6_text","cea_f7_text","cea_f8_text"
    ]);

    const showForm = (num) => {
        pageObj.toggleItem(`details_form${num}`, true);
        pageObj.toggleItem(`cea_f${num}_text`, true);
    };

    const is = (c, r, m) => cat === c && rep === r && mkt === m;

    if (is('SALE','SELLER','Non-Exclusive')) showForm(1);
    else if (is('SALE','BUYER','Non-Exclusive')) showForm(2);
    else if (is('RENTAL','LANDLORD','Non-Exclusive')) showForm(3);
    else if (is('RENTAL','TENANT','Non-Exclusive')) showForm(4);
    else if (is('SALE','SELLER','Exclusive')) showForm(5);
    else if (is('SALE','BUYER','Exclusive')) showForm(6);
    else if (is('LEASE','LANDLORD','Exclusive')) showForm(7);
    else if (is('LEASE','TENANT','Exclusive')) showForm(8);
}

// ---------------------------------------------------------
// RUN ALL LOGIC ON LOAD
// ---------------------------------------------------------
applyCategoryRules();
applyPropTypeRules();
applyReminderRule();
applyFormRules();


$(document).ready(function () {
    // ===== Scroll to Top ==== 
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 1000) { // If page is scrolled more than 1000px
            $('#return-to-top').fadeIn(200); // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200); // Else fade out the arrow
        }
    });

    $('#return-to-top').click(function () { // When arrow is clicked
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });
});

});


Runner.pages.PageSettings.addPageEvent( 
	"transactions", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		$(document).ready(function () {
    // ===== Scroll to Top ==== 
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 1000) { // If page is scrolled more than 1000px
            $('#return-to-top-form').fadeIn(200); // Fade in the arrow
        } else {
            $('#return-to-top-form').fadeOut(200); // Else fade out the arrow
        }
    });

    $('#return-to-top-form').click(function () { // When arrow is clicked
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });
});



/*
// ===== Scroll to Top ==== 
$(window).scroll(function() {
if ($(this).scrollTop() >= 300) {        // If page is scrolled more than 300px
$('#return-to-top-form').fadeIn(200);    // Fade in the arrow
} else {
$('#return-to-top-form').fadeOut(200);   // Else fade out the arrow
}
});
$('#return-to-top-form').click(function() {      // When arrow is clicked
$('body,html').animate({
scrollTop : 0                       // Scroll to top of body
}, 500);
});

//reload without losing scroll position
window.addEventListener('load', function () {
      if (window.location.hash) {
        var elements = document.querySelectorAll(window.location.hash);
        if (elements[0]) {
          elements[0].scrollIntoView({
            behavior: 'smooth', // smooth scroll
            block: 'start'
          });
        }
      }
    })
    */
});







