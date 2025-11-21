<?php
class eventclass_cdd_checklist  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'OnPageLoad' => true,
	'BeforeEdit' => true,
	'AfterEdit' => true,
	'AfterAdd' => true,
	'BeforeAdd' => true,
	'BeforeProcessAdd' => true,
	'BeforeProcessEdit' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'results2' => array(
			'view' => true 
		) 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'checked_by' => array(
			'edit' => true 
		),
		'checked_date' => array(
			'edit' => true 
		),
		'checked_by_cea' => array(
			'edit' => true 
		),
		'representing' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'representing' => array(
			'edit' => true 
		) 
	),
	'uploadFolder' => array(
		 
	),
	'viewPluginInit' => array(
		 
	),
	'editPluginInit' => array(
		 
	) 
);
			}
		function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		// Scan cdd inputs
if($values['list14'] != "Yes" || $values['list01'] != 'No' || $values['list02'] != 'No' || 
   $values['list03'] != 'No' || $values['list04'] != 'No' || $values['list05'] != 'No' || 
   $values['list06'] != 'No' || $values['list07'] != 'No' || $values['list08'] != 'No' || 
   $values['list09'] != 'No' || $values['list10'] != 'No' || $values['list11'] != 'No' || 
   $values['list12'] != 'No' || $values['list13'] != 'No') {
    $values['results'] = "Conduct of CDD Measures is NECESSARY";
} 
else {
    $values['results'] = "CDD check on client done";
}

return true;
		;
		return true;
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		global $conn;
$customer = trim($values['cdd_checklist_customer']);

// Extract unique words from customer name (convert to lowercase for case-insensitive check)
$customerWords = array_unique(array_filter(explode(" ", strtolower(preg_replace('/\s+/', ' ', $customer)))));
$matchThreshold = 2; // Minimum words that must match in a row

// Function to check names (first_name, second_name, third_name, fourth_name)
function checkNamesMatch($customerWords, $matchThreshold) {
    global $conn;

    $sql = "SELECT first_name, second_name, third_name, fourth_name FROM aml.un_sanction";
    $rs = db_query($sql, $conn);

    while ($row = db_fetch_array($rs)) {
        $fullName = trim($row['first_name'] . " " . $row['second_name'] . " " . $row['third_name'] . " " . $row['fourth_name']);
        $fullName = preg_replace('/\s+/', ' ', $fullName); // Normalize spaces
        $fullNameWords = array_unique(array_filter(explode(" ", strtolower($fullName)))); // Convert to lowercase

        if (count(array_intersect($customerWords, $fullNameWords)) >= $matchThreshold) {
            return true; // Found a 2-word match
        }
    }
    return false; // No 2-word match found
}

// Function to check alias_name (case-insensitive & proper space handling)
function checkAliasMatch($customerWords, $matchThreshold) {
    global $conn;

    $sql = "SELECT alias_name FROM aml.un_sanction";
    $rs = db_query($sql, $conn);

    while ($row = db_fetch_array($rs)) {
        if (!empty($row['alias_name'])) {
            // Normalize spaces, clean alias_name, and convert to lowercase
            $aliasName = trim(preg_replace('/\s+/', ' ', strtolower($row['alias_name']))); 
            
            // Check if alias_name contains multiple names (handle comma-separated aliases)
            $aliasList = explode(",", $aliasName); // Split by comma
            
            foreach ($aliasList as $alias) {
                $alias = trim($alias);
                $aliasWords = array_unique(array_filter(explode(" ", $alias))); // Normalize alias words

                if (count(array_intersect($customerWords, $aliasWords)) >= $matchThreshold) {
                    return true; // Found a 2-word match
                }
            }
        }
    }
    return false; // No 2-word match found
}

// Run both checks
$isMatchNames = checkNamesMatch($customerWords, $matchThreshold);
$isMatchAlias = checkAliasMatch($customerWords, $matchThreshold);

// If either names or alias match at least 2 words, trigger a warning
if ($isMatchNames || $isMatchAlias) {
    $url = "https://jwresources.sg/aml_v11/un_sanction_list.php";
    $message = "<div style=\"color:red;\">Warning! A potential match for the customer name has been identified in the <span style=\"color:black !important;\">UN Sanction list</span>. 
                Please visit the list to manually verify and review the details.<br>
                Click <a style=\"color:red;\" href=\"$url\" target=\"_blank\"><strong>here</strong></a> to access the <span style=\"color:black !important;\">UN Sanction list.</span></div>";
} else {
    $message = "<div style=\"color:#50C878;\">The customer name was scanned against the <span style=\"color:black !important;\">UN Sanction list</span>, and no name matches were found.</div>";
}

// Get ID from cdd_checklist
$sqlcdd = "SELECT id_cddlist FROM cdd_checklist WHERE id = '" . db_addslashes($keys['id']) . "'";
$rscdd = db_query($sqlcdd, $conn);
$datacdd = db_fetch_array($rscdd);

// Update transactions table
if ($datacdd) {
    $updatemasterdata = "UPDATE transactions 
        SET client = '" . db_addslashes($values['cdd_checklist_customer']) . "', 
            sls_cust = '" . db_addslashes($values['cdd_checklist_customer']) . "', 
            sls_result = '$message' 
        WHERE id = '" . db_addslashes($datacdd['id_cddlist']) . "'";
    CustomQuery($updatemasterdata);
}


function checkCustomerInList($customerName, $listTable, $listLabel, $url, $fieldPrefix, $keys) {
    global $conn;

    // Normalize customer name: trim, lowercase, replace any whitespace sequences with a single space
    $normalizedCustomer = preg_replace('/\s+/', ' ', trim(strtolower($customerName)));
    $escapedCustomer = db_addslashes($normalizedCustomer);

    // SQL to normalize database names by trimming, lowercasing, and replacing multiple spaces (including varying numbers)
    // Chain REPLACE functions to handle multiple consecutive spaces incrementally
    $sql = "SELECT * FROM aml.$listTable 
            WHERE 
                REPLACE(REPLACE(REPLACE(LOWER(TRIM(name)), '  ', ' '), '  ', ' '), '  ', ' ') = 
                REPLACE(REPLACE(REPLACE(LOWER(TRIM('" . $escapedCustomer . "')), '  ', ' '), '  ', ' '), '  ', ' ')";
    $rs = db_query($sql, $conn);
    $data = db_fetch_array($rs);

    // Existing logic for fetching CDD checklist and updating transactions remains unchanged
    $sqlcdd = "SELECT id_cddlist FROM cdd_checklist WHERE id='" . db_addslashes($keys['id']) . "'";
    $rscdd = db_query($sqlcdd, $conn);
    $datacdd = db_fetch_array($rscdd);

    if ($data) {
        $updateMessage = "<div style=\"color:red;\">Warning! A potential match for the customer name has been identified in the <span style=\"color:black !important;\">$listLabel</span>. 
                          Please visit the list to manually verify and review the details.<br>
                          Click <a style=\"color:red;\" href=\"$url\" target=\"_blank\"><strong>here</strong></a> to access the <span style=\"color:black !important;\">$listLabel</span>.</div>";
    } else {
        $updateMessage = "<div style=\"color:#50C878;\">The customer name was scanned against the <span style=\"color:black !important;\">$listLabel</span>, and no matches were found.</div>";
    }

    if ($datacdd) {
        $updatemasterdata = "UPDATE transactions 
            SET {$fieldPrefix}_cust='" . $escapedCustomer . "', 
                {$fieldPrefix}_result='" . db_addslashes($updateMessage) . "' 
            WHERE id='" . db_addslashes($datacdd['id_cddlist']) . "'";
        CustomQuery($updatemasterdata);
    }
}

// Function calls remain the same
$customerName = preg_replace('/\s+/', ' ', trim(strtolower($values['cdd_checklist_customer'])));
checkCustomerInList($customerName, "panama_papers", "Panama Papers", "https://jwresources.sg/aml_v11/panama_papers_list.php", "pps", $keys);
checkCustomerInList($customerName, "namelist", "Local Name list", "https://jwresources.sg/aml_v11/namelist_list.php", "namelist", $keys);
checkCustomerInList($customerName, "alertlist", "Alert list", "https://jwresources.sg/aml_v11/alertlist_list.php", "alertlist", $keys);


//update result
global $conn;
$sql = "UPDATE transactions SET cdd_result = '".$values['results']."'
WHERE id = '".$values['id_cddlist']."'";
CustomQuery($sql);


?>
<script>
parent.location.reload();
</script>
<?php

		;
		
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		global $conn;
$customer = trim($values['cdd_checklist_customer']);

// Extract unique words from customer name (convert to lowercase for case-insensitive check)
$customerWords = array_unique(array_filter(explode(" ", strtolower(preg_replace('/\s+/', ' ', $customer)))));
$matchThreshold = 3; // Minimum words that must match in a row

// Function to check names (first_name, second_name, third_name, fourth_name)
function checkNamesMatch($customerWords, $matchThreshold) {
    global $conn;

    $sql = "SELECT first_name, second_name, third_name, fourth_name FROM jwresour_aml11.un_sanction";
    $rs = db_query($sql, $conn);

    while ($row = db_fetch_array($rs)) {
        $fullName = trim($row['first_name'] . " " . $row['second_name'] . " " . $row['third_name'] . " " . $row['fourth_name']);
        $fullName = preg_replace('/\s+/', ' ', $fullName); // Normalize spaces
        $fullNameWords = array_unique(array_filter(explode(" ", strtolower($fullName)))); // Convert to lowercase

        if (count(array_intersect($customerWords, $fullNameWords)) >= $matchThreshold) {
            return true; // Found a 2-word match
        }
    }
    return false; // No 3-word match found
}

// Function to check alias_name (case-insensitive & proper space handling)
function checkAliasMatch($customerWords, $matchThreshold) {
    global $conn;

    $sql = "SELECT alias_name FROM jwresour_aml11.un_sanction";
    $rs = db_query($sql, $conn);

    while ($row = db_fetch_array($rs)) {
        if (!empty($row['alias_name'])) {
            // Normalize spaces, clean alias_name, and convert to lowercase
            $aliasName = trim(preg_replace('/\s+/', ' ', strtolower($row['alias_name']))); 
            
            // Check if alias_name contains multiple names (handle comma-separated aliases)
            $aliasList = explode(",", $aliasName); // Split by comma
            
            foreach ($aliasList as $alias) {
                $alias = trim($alias);
                $aliasWords = array_unique(array_filter(explode(" ", $alias))); // Normalize alias words

                if (count(array_intersect($customerWords, $aliasWords)) >= $matchThreshold) {
                    return true; // Found a 3-word match
                }
            }
        }
    }
    return false; // No 3-word match found
}


// Run both checks
$isMatchNames = checkNamesMatch($customerWords, $matchThreshold);
$isMatchAlias = checkAliasMatch($customerWords, $matchThreshold);

// If either names or alias match at least 3 words, trigger a warning
if ($isMatchNames || $isMatchAlias) {
    $url = "https://jwresources.sg/aml_v11/un_sanction_list.php";
    $message = "<div style=\"color:red;\">Warning! A potential match for the customer name has been identified in the <span style=\"color:black !important;\">UN Sanction list</span>. 
                Please visit the list to manually verify and review the details.<br>
                Click <a style=\"color:red;\" href=\"$url\" target=\"_blank\"><strong>here</strong></a> to access the <span style=\"color:black !important;\">UN Sanction list.</span></div>";
} else {
    $message = "<div style=\"color:#50C878;\">The customer name was scanned against the <span style=\"color:black !important;\">UN Sanction list</span>, and no name matches were found.</div>";
}

// Get ID from cdd_checklist
$sqlcdd = "SELECT id_cddlist FROM cdd_checklist WHERE id = '" . db_addslashes($keys['id']) . "'";
$rscdd = db_query($sqlcdd, $conn);
$datacdd = db_fetch_array($rscdd);

// Update transactions table
if ($datacdd) {
    $updatemasterdata = "UPDATE transactions 
        SET client = '" . db_addslashes($values['cdd_checklist_customer']) . "', 
            sls_cust = '" . db_addslashes($values['cdd_checklist_customer']) . "', 
            sls_result = '$message' 
        WHERE id = '" . db_addslashes($datacdd['id_cddlist']) . "'";
    CustomQuery($updatemasterdata);
}


function checkCustomerInList($customerName, $listTable, $listLabel, $url, $fieldPrefix, $keys) {
    global $conn;

    // Normalize customer name: trim, lowercase, replace any whitespace sequences with a single space
    $normalizedCustomer = preg_replace('/\s+/', ' ', trim(strtolower($customerName)));
    $escapedCustomer = db_addslashes($normalizedCustomer);

    // SQL to normalize database names by trimming, lowercasing, and replacing multiple spaces (including varying numbers)
    // Chain REPLACE functions to handle multiple consecutive spaces incrementally
    $sql = "SELECT * FROM jwresour_aml11.$listTable 
            WHERE 
                REPLACE(REPLACE(REPLACE(LOWER(TRIM(name)), '  ', ' '), '  ', ' '), '  ', ' ') = 
                REPLACE(REPLACE(REPLACE(LOWER(TRIM('" . $escapedCustomer . "')), '  ', ' '), '  ', ' '), '  ', ' ')";
    $rs = db_query($sql, $conn);
    $data = db_fetch_array($rs);

    // Existing logic for fetching CDD checklist and updating transactions remains unchanged
    $sqlcdd = "SELECT id_cddlist FROM cdd_checklist WHERE id='" . db_addslashes($keys['id']) . "'";
    $rscdd = db_query($sqlcdd, $conn);
    $datacdd = db_fetch_array($rscdd);

    if ($data) {
        $updateMessage = "<div style=\"color:red;\">Warning! A potential match for the customer name has been identified in the <span style=\"color:black !important;\">$listLabel</span>. 
                          Please visit the list to manually verify and review the details.<br>
                          Click <a style=\"color:red;\" href=\"$url\" target=\"_blank\"><strong>here</strong></a> to access the <span style=\"color:black !important;\">$listLabel</span>.</div>";
    } else {
        $updateMessage = "<div style=\"color:#50C878;\">The customer name was scanned against the <span style=\"color:black !important;\">$listLabel</span>, and no matches were found.</div>";
    }

    if ($datacdd) {
        $updatemasterdata = "UPDATE transactions 
            SET {$fieldPrefix}_cust='" . $escapedCustomer . "', 
                {$fieldPrefix}_result='" . db_addslashes($updateMessage) . "' 
            WHERE id='" . db_addslashes($datacdd['id_cddlist']) . "'";
        CustomQuery($updatemasterdata);
    }
}

// Function calls remain the same
$customerName = preg_replace('/\s+/', ' ', trim(strtolower($values['cdd_checklist_customer'])));
checkCustomerInList($customerName, "panama_papers", "Panama Papers", "https://jwresources.sg/aml_v11/panama_papers_list.php", "pps", $keys);
checkCustomerInList($customerName, "namelist", "Local Name List", "https://jwresources.sg/aml_v11/namelist_list.php", "namelist", $keys);
checkCustomerInList($customerName, "alertlist", "Alert List", "https://jwresources.sg/aml_v11/alertlist_list.php", "alertlist", $keys);


//update result
global $conn;
$sql = "UPDATE transactions SET cdd_result = '".$values['results']."'
WHERE id = '".$values['id_cddlist']."'";
CustomQuery($sql);

?>
<script>
parent.location.reload();
</script>
<?php



		;
		
	}

	function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		// Scan cdd inputs
if($values['list14'] != "Yes" || $values['list01'] != 'No' || $values['list02'] != 'No' || 
   $values['list03'] != 'No' || $values['list04'] != 'No' || $values['list05'] != 'No' || 
   $values['list06'] != 'No' || $values['list07'] != 'No' || $values['list08'] != 'No' || 
   $values['list09'] != 'No' || $values['list10'] != 'No' || $values['list11'] != 'No' || 
   $values['list12'] != 'No' || $values['list13'] != 'No') {
    $values['results'] = "Conduct of CDD Measures is NECESSARY";
} 
else {
    $values['results'] = "CDD check on client done";
}



return true;
		;
		return true;
	}

	function BeforeProcessAdd( $pageObject ) {
		$data = $pageObject->getMasterRecord();
        $_SESSION["representing"] = $data["representing"];


		;
		
	}

	function BeforeProcessEdit( $pageObject ) {
		$data = $pageObject->getMasterRecord();
        $_SESSION["representing"] = $data["representing"];


		;
		
	}
	public function default_checked_by_efedit(  ) {
	$defaultValue = $_SESSION["FullName"];
return $defaultValue;
}

public function custom_results2_vfview( $value, $data ) {
	$color="#FF4500";
$value="<font color='$color'>$value</font>";;
return $value;
}

public function default_checked_date_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}

public function default_checked_by_cea_efedit(  ) {
	$defaultValue = $_SESSION["UserID"];
return $defaultValue;
}

public function default_representing_efedit(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}

public function autoupdate_representing_efedit(  ) {
	$defaultValue = $_SESSION["representing"];
return $defaultValue;
}	

}


?>