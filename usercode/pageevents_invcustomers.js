
Runner.pages.PageSettings.addPageEvent( 
	"invcustomers", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		// ===== Scroll to Top ==== 
$(window).scroll(function() {
if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
$('#return-to-top').fadeIn(200);    // Fade in the arrow
} else {
$('#return-to-top').fadeOut(200);   // Else fade out the arrow
}
});
$('#return-to-top').click(function() {      // When arrow is clicked
$('body,html').animate({
scrollTop : 0                       // Scroll to top of body
}, 500);
});

// Place event code here.
// Use "Add Action" button to add code snippets.
});


Runner.pages.PageSettings.addPageEvent( 
	"invcustomers", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		
var ctrl = Runner.getControl(pageid, 'cus_type');

// Field controls
var fields = {
  name: Runner.getControl(pageid, 'name'),
  salutation: Runner.getControl(pageid, 'salutation'),
  nationality: Runner.getControl(pageid, 'nationality'),
  race: Runner.getControl(pageid, 'race'),
  gender: Runner.getControl(pageid, 'gender'),
  nric: Runner.getControl(pageid, 'nric'),
  id_type: Runner.getControl(pageid, 'id_type'),
  date_of_birth: Runner.getControl(pageid, 'date_of_birth'),
  occupation: Runner.getControl(pageid, 'occupation'),
  address: Runner.getControl(pageid, 'address'),
  postal: Runner.getControl(pageid, 'postal'),
  mobile: Runner.getControl(pageid, 'mobile'),
  email: Runner.getControl(pageid, 'email'),
  doc_upload: Runner.getControl(pageid, 'doc_upload'),
  tel: Runner.getControl(pageid, 'tel'),
  tel_type: Runner.getControl(pageid, 'tel_type'),
  registration_date: Runner.getControl(pageid, 'registration_date'),
  registration_no: Runner.getControl(pageid, 'registration_no'),
  country_incorporation: Runner.getControl(pageid, 'country_incorporation'),
  trade: Runner.getControl(pageid, 'trade'),
  office_tel: Runner.getControl(pageid, 'office_tel'),
  biz_email: Runner.getControl(pageid, 'biz_email'),
  contact_person: Runner.getControl(pageid, 'contact_person'),
  contact_person_id: Runner.getControl(pageid, 'contact_person_id'),
  contact_person_contact: Runner.getControl(pageid, 'contact_person_contact'),
  contact_email: Runner.getControl(pageid, 'contact_email'),
  agency_name: Runner.getControl(pageid, 'agency_name'),
  license_no: Runner.getControl(pageid, 'license_no'),
  agency_address: Runner.getControl(pageid, 'agency_address'),
  agency_postal: Runner.getControl(pageid, 'agency_postal'),
  billing_address: Runner.getControl(pageid, 'billing_address')
};

// Utility to show/hide fields
function setFieldVisibility(fieldNames, visible) {
  fieldNames.forEach(function (name) {
    var selector = "[data-fieldname='" + name + "']";
    visible ? $(selector).show() : $(selector).hide();
  });
}

// Utility to add required validation
function addRequired(fieldsList) {
  fieldsList.forEach(function (fieldName) {
    if (fields[fieldName]) {
      fields[fieldName].addValidation('IsRequired');
    }
  });
}

ctrl.on('change', function () {
  var value = this.getValue();

  // Hide all toggleable sections first
  pageObj.toggleItem("contact_info_section", false);
  pageObj.toggleItem("other_info_section", false);
  pageObj.toggleItem("entity_info_section", false);
  pageObj.toggleItem("agency_info_section", false);
  pageObj.toggleItem("find_address_button", false);
  pageObj.toggleItem("find_agency_address_button", false);

  // Define field visibility and validations per type
  switch (value) {
    case 'ENTITY':
      pageObj.toggleItem("contact_info_section", true);
      pageObj.toggleItem("entity_info_section", true);
      pageObj.toggleItem("find_address_button", true);

      setFieldVisibility([
        'name', 'salutation', 'address', 'postal', 'doc_upload'
      ], true);

      setFieldVisibility([
        'nationality', 'nric', 'id_type', 'race', 'gender',
        'date_of_birth', 'occupation', 'mobile', 'email'
      ], false);

      addRequired([
        'name', 'address', 'registration_no', 'registration_date',
        'country_incorporation', 'trade', 'office_tel',
        'biz_email', 'contact_person', 'contact_person_contact',
        'contact_email'
      ]);
      break;

    case 'INDIVIDUAL':
      pageObj.toggleItem("contact_info_section", true);
      pageObj.toggleItem("other_info_section", true);
      pageObj.toggleItem("find_address_button", true);

      setFieldVisibility([
        'name', 'salutation', 'nationality', 'nric', 'id_type',
        'race', 'gender', 'date_of_birth', 'occupation', 'address',
        'postal', 'mobile', 'email', 'doc_upload'
      ], true);

      addRequired([
        'name', 'nationality', 'race', 'gender', 'nric',
        'id_type', 'date_of_birth', 'occupation', 'address',
        'mobile', 'email'
      ]);
      break;

    case 'SALESPERSON':
      pageObj.toggleItem("contact_info_section", true);
      pageObj.toggleItem("agency_info_section", true);
      pageObj.toggleItem("find_agency_address_button", true);

      setFieldVisibility([
        'name', 'salutation', 'nric', 'id_type', 'race',
        'gender', 'mobile', 'email', 'doc_upload'
      ], true);

      setFieldVisibility([
        'nationality', 'date_of_birth', 'occupation',
        'address', 'postal', 'billing_address'
      ], false);

      addRequired([
        'name', 'race', 'gender', 'nric', 'id_type',
        'mobile', 'email', 'agency_name', 'license_no', 'agency_address'
      ]);
      break;
  }
});

});


Runner.pages.PageSettings.addPageEvent( 
	"invcustomers", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		
// Define all controls in a single object for better organization
const controls = {
  cus_type: Runner.getControl(pageid, 'cus_type'),
  name: Runner.getControl(pageid, 'name'),
  salutation: Runner.getControl(pageid, 'salutation'),
  nationality: Runner.getControl(pageid, 'nationality'),
  race: Runner.getControl(pageid, 'race'),
  gender: Runner.getControl(pageid, 'gender'),
  nric: Runner.getControl(pageid, 'nric'),
  id_type: Runner.getControl(pageid, 'id_type'),
  date_of_birth: Runner.getControl(pageid, 'date_of_birth'),
  occupation: Runner.getControl(pageid, 'occupation'),
  address: Runner.getControl(pageid, 'address'),
  postal: Runner.getControl(pageid, 'postal'),
  mobile: Runner.getControl(pageid, 'mobile'),
  email: Runner.getControl(pageid, 'email'),
  doc_upload: Runner.getControl(pageid, 'doc_upload'),
  tel: Runner.getControl(pageid, 'tel'),
  tel_type: Runner.getControl(pageid, 'tel_type'),
  registration_date: Runner.getControl(pageid, 'registration_date'),
  registration_no: Runner.getControl(pageid, 'registration_no'),
  country_incorporation: Runner.getControl(pageid, 'country_incorporation'),
  trade: Runner.getControl(pageid, 'trade'),
  office_tel: Runner.getControl(pageid, 'office_tel'),
  biz_email: Runner.getControl(pageid, 'biz_email'),
  contact_person: Runner.getControl(pageid, 'contact_person'),
  destination: Runner.getControl(pageid, 'destination'),
  contact_person_id: Runner.getControl(pageid, 'contact_person_id'),
  contact_person_contact: Runner.getControl(pageid, 'contact_person_contact'),
  contact_email: Runner.getControl(pageid, 'contact_email'),
  agency_name: Runner.getControl(pageid, 'agency_name'),
  license_no: Runner.getControl(pageid, 'license_no'),
  agency_address: Runner.getControl(pageid, 'agency_address'),
  agency_postal: Runner.getControl(pageid, 'agency_postal'),
  billing_address: Runner.getControl(pageid, 'billing_address')
};

// Configuration for each customer type
const configs = {
  ENTITY: {
    sections: {
      contact_info_section: true,
      other_info_section: false,
      entity_info_section: true,
      agency_info_section: false,
      find_address_button: true,
      find_agency_address_button: false
    },
    fields: {
      name: true,
      salutation: true,
      nationality: false,
      nric: false,
      id_type: false,
      race: false,
      gender: false,
      date_of_birth: false,
      occupation: false,
      address: true,
      postal: true,
      mobile: false,
      email: false,
      doc_upload: true
    },
    validations: [
      'name', 'address', 'registration_no', 'registration_date',
      'country_incorporation', 'trade', 'office_tel', 'biz_email',
      'contact_person', 'contact_person_contact', 'contact_email'
    ]
  },
  INDIVIDUAL: {
    sections: {
      contact_info_section: true,
      other_info_section: true,
      entity_info_section: false,
      agency_info_section: false,
      find_address_button: true,
      find_agency_address_button: false
    },
    fields: {
      name: true,
      salutation: true,
      nationality: true,
      nric: true,
      id_type: true,
      race: true,
      gender: true,
      date_of_birth: true,
      occupation: true,
      address: true,
      postal: true,
      mobile: true,
      email: true,
      doc_upload: true
    },
    validations: [
      'name', 'nationality', 'race', 'gender', 'nric', 'id_type',
      'date_of_birth', 'occupation', 'address', 'mobile', 'email'
    ]
  },
  SALESPERSON: {
    sections: {
      contact_info_section: true,
      other_info_section: false,
      entity_info_section: false,
      agency_info_section: true,
      find_address_button: false,
      find_agency_address_button: true
    },
    fields: {
      name: true,
      salutation: true,
      nationality: false,
      nric: true,
      id_type: true,
      race: true,
      gender: true,
      date_of_birth: false,
      occupation: false,
      address: false,
      billing_address: false,
      postal: false,
      mobile: true,
      email: true,
      doc_upload: true
    },
    validations: [
      'name', 'race', 'gender', 'nric', 'id_type', 'mobile', 'email',
      'agency_name', 'license_no', 'agency_address'
    ]
  }
};

// Helper function to toggle sections
function toggleSections(sections) {
  Object.entries(sections).forEach(([section, show]) => {
    if (pageObj.toggleItem) {
      pageObj.toggleItem(section, show);
    }
  });
}

// Helper function to toggle fields
function toggleFields(fields) {
  Object.entries(fields).forEach(([field, show]) => {
    const $field = $(`[data-fieldname='${field}']`);
    if ($field.length) {
      // For edit page, we need to handle the parent container which might be a fieldset
      const $container = $field.closest('.form-group, .runner-field-container');
      if ($container.length) {
        $container.toggle(show);
      } else {
        $field.toggle(show);
      }
    }
  });
}

// Helper function to set validations
function setValidations(validationFields) {
  // First remove all validations from all controls
  Object.values(controls).forEach(control => {
    if (control && control.removeValidation) {
      control.removeValidation('IsRequired');
    }
  });
  
  // Add validations for the specified fields
  validationFields.forEach(field => {
    if (controls[field] && controls[field].addValidation) {
      controls[field].addValidation('IsRequired');
    }
  });
}

// Main function to update UI based on customer type
function updateUI(customerType) {
  const config = configs[customerType];
  
  if (!config) return;
  
  toggleSections(config.sections);
  toggleFields(config.fields);
  setValidations(config.validations);
}

// Event handler for customer type change
controls.cus_type.on('change', function(e) {
  updateUI(this.getValue());
});

// Initialize the UI based on the current value (for edit page)
// Wait for the page to fully load to ensure all elements are available
$(document).ready(function() {
  // Check if this is an edit page (has existing value)
  const initialValue = controls.cus_type.getValue();
  if (initialValue) {
    updateUI(initialValue);
  } else {
    // For add page, trigger change to set default state
    controls.cus_type.trigger('change');
  }
  
  // Additional handling for edit page to properly show/hide fields on load
  setTimeout(function() {
    const currentValue = controls.cus_type.getValue();
    if (currentValue) {
      updateUI(currentValue);
    }
  }, 100);
});
});







