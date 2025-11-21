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
    const externals = $("div#detailPreview15").find('tbody').find('tr').not(':first');
    for (let i = 0; i < externals.length; i++) {
        externals.eq(i).find('td').eq(3).find('input').eq(1).keyup();
    }

    const partyExternals = $("div#detailPreview17").find('tbody').find('tr').not(':first');
    for (let i = 0; i < partyExternals.length; i++) {
        partyExternals.eq(i).find('td').eq(3).find('input').eq(1).keyup();
    }

    const internals = $("div#detailPreview16").find('tbody').find('tr').not(':first');	
    for (let i = 0; i < internals.length; i++) {
        internals.eq(i).find('td').eq(3).find('input').eq(1).keyup();
    }
}

function refreshExternalCoBroker() {
    const amount = $('#value_comm_amt_1').val() * 1;
    let earned, gst, gross;

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

    const externals = $("div#detailPreview15").find('tbody').find('tr').not(':first');
    let totalComm = 0;
    let totalGst = $('#value_gst_1').val() * 1;

    for (let i = 0; i < externals.length; i++) {
        let commVal = externals.eq(i).find('td').eq(3).find('input').eq(0).val();
        totalComm += commVal * 1;

        let gstVal = externals.eq(i).find('td').eq(5).find('input').eq(0).val();
        totalGst -= gstVal * 1;
    }

    const partyExternals = $("div#detailPreview17").find('tbody').find('tr').not(':first');
    for (let i = 0; i < partyExternals.length; i++) {
        let commVal = partyExternals.eq(i).find('td').eq(3).find('input').eq(0).val();
        if (commVal !== undefined) {
            totalComm += commVal * 1;

            let gstVal = partyExternals.eq(i).find('td').eq(5).find('input').eq(0).val();
            totalGst -= gstVal * 1;
        }
    }

    $('#value_comm_earned_agency_1').val(customRound(earned - totalComm));
    $('#value_gst_agency_1').val(customRound(totalGst));
    $('#value_comm_gross_agency_1').val(customRound(earned - totalComm + totalGst));
}

function refreshInternalCoBroker() {
    var amount = $('#value_comm_amt_1').val() * 1;
    var earned;

    if ($('#value_gst_payable_1').prop('checked') && !$('#value_gst_inclusive_1').prop('checked')) {
        earned = amount;
    } else if ($('#value_gst_payable_1').prop('checked') && $('#value_gst_inclusive_1').prop('checked')) {
        earned = customRound(amount / 109 * 100);
    } else {
        earned = amount;
    }

    var totalComm = $('#value_comm_earned_agency_1').val() * 1;
    var internals = $("div#detailPreview16").find('tbody').find('tr').not(':first');
    var totalInternalEarned = 0;

    for (var i = 0; i < internals.length; i++) {
        var internalPercent = internals.eq(i).find('td').eq(4).find('input').eq(0).val();
        internalPercent = internalPercent * 1;
        var internalEarned = customRound(earned * internalPercent / 100);
        totalInternalEarned += internalEarned * 1;
    }

    var agencyShare = $('#value_agency_share_1').val() * 1;
    var salesEarned = totalComm - totalInternalEarned;
    var salesPercent = (earned ? customRound((salesEarned / earned) * 100) : 0);
    var agencyComm = customRound((salesEarned * agencyShare) / 100);
    var salesCommNett = salesEarned - agencyComm;

    $('#value_comm_earned_salesperson_1').val(customRound(salesEarned));
    $('#value_comm_earned_percent_salesperson_1').val(customRound(salesPercent));
    $('#value_comm_to_agency_1').val(customRound(agencyComm));
    $('#value_comm_to_agency1_1').val(customRound(agencyComm));
    $('#value_comm_nett_salesperson_1').val(customRound(salesCommNett));
}