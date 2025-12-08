function currencyView(data) {
    if (data == 0) {
        return '$0';
    }
    data = data * 1;
    return '$' + (data.toLocaleString('en-IN'));
}

function customRound(data) {
    return Math.round(data * 100) / 100;
}

function refreshTableData() {
    let externals = $("div#detailPreview15").find('tbody').find('tr').not(':first');
    for (let i = 0; i < externals.length; i++) {
        externals.eq(i).find('td').eq(3).find('input').eq(1).keyup();
    }

    let partyExternals = $("div#detailPreview17").find('tbody').find('tr').not(':first');
    for (let i = 0; i < partyExternals.length; i++) {
        partyExternals.eq(i).find('td').eq(3).find('input').eq(1).keyup();
    }

    let internals = $("div#detailPreview16").find('tbody').find('tr').not(':first');	
    for (let i = 0; i < internals.length; i++) {
        internals.eq(i).find('td').eq(3).find('input').eq(0).keyup();
    }
}

// Updated with dynamic GST rate
function refreshExternalCoBroker() {
    var gstrate = parseFloat($("#value_gst_rate_1").val()) || 0;
    var amount = $('#value_comm_amt_1').val() * 1 || 0;
    var earned, gst, gross;

    if ($('#value_gst_payable_1').prop('checked') && !$('#value_gst_inclusive_1').prop('checked')) {
        earned = amount;
        gst = customRound(amount * gstrate / 100);
        gross = amount + gst;
    } else if ($('#value_gst_payable_1').prop('checked') && $('#value_gst_inclusive_1').prop('checked')) {
        earned = customRound(amount * 100 / (gstrate + 100));
        gst = amount - earned;
        gross = amount;
    } else {
        earned = amount;
        gst = 0;
        gross = amount;
    }

    var externals = $("div#detailPreview15").find('tbody').find('tr').not(':first');
    var totalComm = 0;
    var totalGst = $('#value_gst_1').val() * 1 || 0;

    for (var i = 0; i < externals.length; i++) {
        var comm = externals.eq(i).find('td').eq(3).find('input').eq(0).val() * 1 || 0;
        totalComm += comm;

        var gstVal = externals.eq(i).find('td').eq(6).find('input').eq(0).val() * 1 || 0;
        totalGst -= gstVal;
    }

    let partyExternals = $("div#detailPreview17").find('tbody').find('tr').not(':first');
for (let i = 0; i < partyExternals.length; i++) {
    let comm = partyExternals.eq(i).find('td').eq(3).find('input').eq(0).val() * 1 || 0;
    totalComm += comm;

    let gstVal = partyExternals.eq(i).find('td').eq(6).find('input').eq(0).val() * 1 || 0;
    totalGst -= gstVal;
}

    $('#value_comm_earned_agency_1').val(customRound(earned - totalComm).toFixed(2));
    $('#value_gst_agency_1').val(customRound(totalGst).toFixed(2));
    $('#value_comm_gross_agency_1').val(customRound(earned - totalComm + totalGst).toFixed(2));
}

function refreshInternalCoBroker() {
    
//    var gstrate = parseFloat($("#value_gst_rate_1").val()) || 0;
    var amount = $('#value_comm_amt_1').val() * 1;
    var earned;
/*
    if ($('#value_gst_payable_1').prop('checked') && !$('#value_gst_inclusive_1').prop('checked')) {
        earned = amount;
    } else if ($('#value_gst_payable_1').prop('checked') && $('#value_gst_inclusive_1').prop('checked')) {
        earned = customRound(amount * 100 / (gstrate + 100));
    } else {
        earned = amount;
    }
*/
    var totalComm = $('#value_comm_earned_agency_1').val() * 1;
    var internals = $("div#detailPreview16").find('tbody').find('tr').not(':first');	
    var totalInternalEarned = 0;

    for (var i = 0; i < internals.length; i++) {
        /*
        var internalPercent = internals.eq(i).find('td').eq(4).find('input').eq(0).val();
        internalPercent = internalPercent * 1;
        var internalEarned = customRound(earned * internalPercent / 100);
        totalInternalEarned += internalEarned * 1;
        */
        var input = internals.eq(i).find('td').eq(3).find('input').eq(0);
/*    if (input.length) {
        var internalPercent = internalPercent * 1;
        var internalEarned = customRound(earned * internalPercent / 100);
        totalInternalEarned += internalEarned * 1;
    }
    */
    totalInternalEarned += input;
    }

    var agencyShare = $('#value_agency_share_1').val();
    var salesEarned = totalComm - totalInternalEarned;
    var salesPercent = customRound((salesEarned / earned) * 100);
    var agencyComm = customRound((salesEarned * agencyShare) / 100);
    var agencyComm1 = customRound((salesEarned * agencyShare) / 100);
    var salesCommNett = salesEarned - agencyComm;

    $('#value_comm_earned_salesperson_1').val(customRound(salesEarned));
    $('#value_comm_earned_percent_salesperson_1').val(customRound(salesPercent));
    $('#value_comm_to_agency_1').val(customRound(agencyComm));
    $('#value_comm_to_agency1_1').val(customRound(agencyComm1));
    $('#value_comm_nett_salesperson_1').val(customRound(salesCommNett));
}