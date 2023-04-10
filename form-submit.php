<?php
error_reporting(-1);
ini_set('display_errors', 1);
$mailTo = "support@lifebloodcouncil.org";
$mailTo = "lifebloodcouncil.events@gmail.com";
$mailFrom = "lifebloodcouncil.events@gmail.com";
$formId = $_POST["formId"] ?? FALSE;
if(!$formId || !function_exists($formId)) exit(json_encode(["status" => FALSE, "message" => "Unknown Call"]));
$formId();

function validate($object) {
    $error_messages = [];
    foreach($object as $field => $row) {
        $currentValue = $_POST[$field] ?? FALSE;
        $_POST[$field] = $currentValue;
        if(!empty($row["required"]) && empty($currentValue)) {
            $error_messages[$field] = $row["required_message"] ?? "$field is required";
        }
        if(!empty($row["regex"]) && !empty($currentValue) && !preg_match($row["regex"], $currentValue)) {
            $error_messages[$field] = $row["regex_message"] ?? "$field is invalid";
        }
    }
    return $error_messages;
}

function donationForm () {
    $validationObject = [
        "FirstName"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "First Name is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid First Name"
        ],
        "LastName"          =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Last Name is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Last Name"
        ],
        "Phone"             =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Phone Number is Required",
            "regex"         =>  "/^\+?[0-9]{10,20}$/",
            "regex_message" =>  "Please enter a valid Phone Number"
        ],
        "Email"             =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Email Id is Required",
            "regex"         =>  "/^[\w.%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/",
            "regex_message" =>  "Please enter a valid Email Id"
        ],
        "Nationality"       =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Nationality is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Nationality"
        ],
        "PANNo"             =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "PAN Number is Required",
            "regex"         =>  "/^[A-Z]{5}[0-9]{4}[A-Z]$/",
            "regex_message" =>  "Please enter a valid PAN Number"
        ],
        "Address"           =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Address is Required",
            "regex"         =>  "/^[a-zA-Z ,#\-+0-9]{20,}$/",
            "regex_message" =>  "Please enter a valid Address, at least 20 chars"
        ],
        "DonationTowards"   =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Please select Donation Towards",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid DonationTowards"
        ],
        "PaymentMode"       =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Please select Payment Mode",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Payment Mode"
        ]
    ];
    $error_messages = validate($validationObject);
    if(!empty($error_messages)) exit(json_encode(["status" => FALSE, "message" => "validation", "data" => $error_messages]));
    $payment_id = date("YmdHis") . rand(1000, 9999);
    $validationObject["PaymentId"] = $payment_id;
    $_POST["PaymentId"] = $payment_id;
    $mail = buildMailBody($validationObject);
    $response = sendEmail(NULL, "Payment - $payment_id", $mail);
    if(!$response["status"]) exit(json_encode(["status" => FALSE, "message" => "Failed to Generate Payment, Please try again later", "try" => $response["currentTry"]]));
    exit(json_encode(["status" => TRUE, "message" => "Success", "data" => ["payment_id" => $payment_id]]));
}

function paymentSubmitForm () {
    $validationObject = [
        "PaymentId"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Payment Id is Required",
            "regex"         =>  "/^[0-9]{18}$/",
            "regex_message" =>  "Please enter a valid Payment Id"
        ],
        "BankReferenceNumber"          =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Bank Reference Number is Required",
            "regex"         =>  "/^[\w]{3,}$/",
            "regex_message" =>  "Please enter a valid Bank Reference Number"
        ]
    ];
    $error_messages = validate($validationObject);
    if(empty($_FILES["Screenshot"]['tmp_name'])) {
        $error_messages["Screenshot"] = "Uploaded screenshot file is corrupted";
    }
    if(!empty($error_messages)) exit(json_encode(["status" => FALSE, "message" => "validation", "data" => $error_messages]));
    $mail = buildMailBody($validationObject);
    $response = sendEmailWithAttachment(NULL, "Payment - " . $_POST["PaymentId"], $mail, [
        $_FILES["Screenshot"]['tmp_name'] => [
            "path" => $_FILES["Screenshot"]['tmp_name'],
            "type"  => $_FILES["Screenshot"]['type']
        ]
    ]);
    if(!$response["status"]) exit(json_encode(["status" => FALSE, "message" => "Failed to Submit Payment Details, Please try again later", "try" => $response["currentTry"]]));
    exit(json_encode(["status" => TRUE, "message" => "Successfully submitted the details, we will connect you soon, Thanks"]));
}

function contactForm($validationObject, $subject) {
    $error_messages = validate($validationObject);
    if(!empty($error_messages)) exit(json_encode(["status" => FALSE, "message" => "validation", "data" => $error_messages]));
    $mail = buildMailBody($validationObject);
    $response = sendEmail(NULL, $subject, $mail);
    if(!$response["status"]) exit(json_encode(["status" => FALSE, "message" => "Failed to Generate Connection, Please try again later", "try" => $response["currentTry"]]));
    exit(json_encode(["status" => TRUE, "message" => "Successfully made a connection, we will contact you soon."]));
}

function obdcForm() {
    $validationObject = [
        "obdc-NameOfOrganization"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Name of Organization is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Organization Name"
        ],
        "obdc-NameOfContactPerson"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Name of Contact Person is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Contact Person Name"
        ],
        "obdc-DesignationOfContactPerson"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Designation of Contact Person is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Designation"
        ],
        "obdc-TelephoneNumberOfContactPerson"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Telephone Number of Contact Person is Required",
            "regex"         =>  "/^\+?[0-9]{10,20}$/",
            "regex_message" =>  "Please enter a valid Telephone Number"
        ],
        "obdc-EmailIdOfContactPerson"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Email Id of Contact Person is Required",
            "regex"         =>  "/^[\w.%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/",
            "regex_message" =>  "Please enter a valid Email Id"
        ],
        "obdc-ProposedDateOfTheBloodDonationCamp"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Proposed Date of The Blood Donation Camp is Required",
            "regex"         =>  "/^[0-9\-]{6,}$/",
            "regex_message" =>  "Please enter a valid Date"
        ],
        "obdc-StrengthOfMembers"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Strength of Members Required",
            "regex"         =>  "/^[0-9]{1,}$/",
            "regex_message" =>  "Please enter a valid Number"
        ],
    ];
    return contactForm($validationObject, "Contact - For Organizing a Blood Donation Camp");
}

function bdForm() {
    $validationObject = [
        "bd-Name"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Name is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Name"
        ],
        "bd-TelephoneNumber"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Telephone Number is Required",
            "regex"         =>  "/^\+?[0-9]{10,20}$/",
            "regex_message" =>  "Please enter a valid Telephone Number"
        ],
        "bd-EmailId"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Email Id is Required",
            "regex"         =>  "/^[\w.%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/",
            "regex_message" =>  "Please enter a valid Email Id"
        ],
        "bd-BloodGroup"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Blood Group is Required",
            "regex"         =>  "/^[a-zA-Z +\-]{2,}$/",
            "regex_message" =>  "Please enter a valid Blood Group"
        ],
        "bd-ResidentialAddress"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Address is Required",
            "regex"         =>  "/^[a-zA-Z ,#\-+0-9]{20,}$/",
            "regex_message" =>  "Please enter a valid Address, at least 20 chars"
        ],
        "bd-DesiredFrequencyOfBloodDonation"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Blood Donation Frequency is Required",
            "regex"         =>  "/^[\w. ]{3,}$/",
            "regex_message" =>  "Please enter a valid Frequency"
        ],
    ];
    return contactForm($validationObject, "Contact - Register with Us as a Blood Donor");
}

function pdForm() {
    $validationObject = [
        "pd-Name"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Name is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Name"
        ],
        "pd-TelephoneNumber"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Telephone is Required",
            "regex"         =>  "/^\+?[0-9]{10,20}$/",
            "regex_message" =>  "Please enter a valid Telephone Number"
        ],
        "pd-EmailId"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Email Id is Required",
            "regex"         =>  "/^[\w.%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/",
            "regex_message" =>  "Please enter a valid Email Id"
        ],
        "pd-BloodGroup"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Blood Group is Required",
            "regex"         =>  "/^[a-zA-Z +\-]{2,}$/",
            "regex_message" =>  "Please enter a valid Blood Group"
        ],
        "pd-ResidentialAddress"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Address is Required",
            "regex"         =>  "/^[a-zA-Z ,#\-+0-9]{20,}$/",
            "regex_message" =>  "Please enter a valid Address, at least 20 chars"
        ],
        "pd-DonatedBloodInThePast"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Donated blood in the past is Required",
            "regex"         =>  "/^(Yes)|(No)$/",
            "regex_message" =>  "Please enter a valid Answer Yer or No"
        ],
    ];
    return contactForm($validationObject, "Contact - Register with Us as a Platelet Donor");
}

function gdForm() {
    $validationObject = [
        "gd-Name"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Name is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Name"
        ],
        "gd-TelephoneNumber"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Telephone is Required",
            "regex"         =>  "/^\+?[0-9]{10,20}$/",
            "regex_message" =>  "Please enter a valid Telephone Number"
        ],
        "gd-EmailId"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Email Id is Required",
            "regex"         =>  "/^[\w.%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/",
            "regex_message" =>  "Please enter a valid Email Id"
        ],
        "gd-BloodGroup"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Blood Group is Required",
            "regex"         =>  "/^[a-zA-Z +\-]{2,}$/",
            "regex_message" =>  "Please enter a valid Blood Group"
        ],
        "gd-ResidentialAddress"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Address is Required",
            "regex"         =>  "/^[a-zA-Z ,#\-+0-9]{20,}$/",
            "regex_message" =>  "Please enter a valid Address, at least 20 chars"
        ],
        "gd-DonatedPlateletsByApheresisInThePast"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Donated platelets by apheresis in the past is Required",
            "regex"         =>  "/^(Yes)|(No)$/",
            "regex_message" =>  "Please enter a valid Answer Yer or No"
        ],
    ];
    return contactForm($validationObject, "Contact - Register with Us as a Granulocyte Donor");
}

function oscdrForm() {
    $validationObject = [
        "oscdr-NameOfOrganization"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Name of Organization is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Organization Name"
        ],
        "oscdr-NameOfContactPerson"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Name of Contact Person is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Contact Person Name"
        ],
        "oscdr-DesignationOfContactPerson"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Designation of Contact Person is Required",
            "regex"         =>  "/^[a-zA-Z ]{3,}$/",
            "regex_message" =>  "Please enter a valid Designation"
        ],
        "oscdr-TelephoneNumberOfContactPerson"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Telephone Number of Contact Person is Required",
            "regex"         =>  "/^\+?[0-9]{10,20}$/",
            "regex_message" =>  "Please enter a valid Telephone Number"
        ],
        "oscdr-EmailIdOfContactPerson"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Email Id of Contact Person is Required",
            "regex"         =>  "/^[\w.%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/",
            "regex_message" =>  "Please enter a valid Email Id"
        ],
        "oscdr-StrengthOfMembers"         =>  [
            "required"          =>  TRUE,
            "required_message"  =>  "Strength of Members Required",
            "regex"         =>  "/^[0-9]{1,}$/",
            "regex_message" =>  "Please enter a valid Number"
        ],
    ];
    $error_messages = validate($validationObject);
    if(!empty($error_messages)) exit(json_encode(["status" => FALSE, "message" => "validation", "data" => $error_messages]));
    $mail = buildMailBody($validationObject);
    $response = sendEmail(NULL, "Contact - For Organizing a Stem Cell Donor Registry Camp", $mail);
    if(!$response["status"]) exit(json_encode(["status" => FALSE, "message" => "Failed to Generate Connection, Please try again later", "try" => $response["currentTry"]]));
    exit(json_encode(["status" => TRUE, "message" => "Successfully made a connection, we will contact you soon."]));
}

function buildMailBody($validationObject) {
    $mail = file_get_contents("templates/mail.html");
    $mail_body = "
    <table>";
    foreach(array_keys($validationObject) as $key) {
        $mail_body .= "
        <tr>
            <td>
                $key
            </td>
            <th>
                $_POST[$key]
            </th>
        </tr>
        ";
    }
    $mail_body .="
    </table>";
    return str_replace("{MAIL_BODY}", $mail_body, $mail);
}

function sendMail($to, $subject, $message, $headers, $max_retry = 4) {
    $currentTry = 0;
    $res = mail($to, $subject, $message, $headers);
    ++$currentTry;
    while(!$res) {
        $res = mail($to, $subject, $message, $headers);
        ++$currentTry;
        if($res || $max_retry < $currentTry) break;
    }
    return ["status" => $res, "currentTry" => $currentTry];
}

function sendEmail($mail_to, $subject, $mail, $max_retry = 4) {
    
    global $mailTo, $mailFrom;
    $to = $mail_to ?? $mailTo;
    $message = $mail;
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: ' . $mailFrom . "\r\n";
    $headers .= 'Reply-To: ' . $mailFrom . "\r\n";
    // $headers .= 'X-Mailer: PHP/' . phpversion();
    return sendMail($to, $subject, $message, $headers, $max_retry);
}

function sendEmailWithAttachment($mail_to, $subject, $mail, $attachment, $max_retry = 4) {
    global $mailTo;
    $to = $mail_to ?? $mailTo;
    $message = $mail;
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: multipart/mixed; boundary=boundary123' . "\r\n";
    $headers .= 'From: sender@example.com' . "\r\n";
    $headers .= 'Reply-To: sender@example.com' . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    // Create the message body with the image attachment
    $body = "--boundary123\r\n";
    $body .= "Content-Type: text/html; charset='iso-8859-1'\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= "$message\r\n";
    $body .= "--boundary123\r\n";

    foreach($attachment as $name => $file) {
        // Read the image file
        $attachment = file_get_contents($file['path']);
    
        // Encode the attachment in base64
        $encodedAttachment = chunk_split(base64_encode($attachment));
    
        $body .= "Content-Type: $file[type]; name='$name'\r\n";
        $body .= "Content-Disposition: attachment; filename='$name'\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= "$encodedAttachment\r\n";
        $body .= "--boundary123--\r\n";
    }
    return sendMail($to, $subject, $message, $headers, $max_retry);
}