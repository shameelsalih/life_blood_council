<?php
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
            "regex"         =>  "/^[a-zA-Z ,#-+]{20,}$/",
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
    $mail = str_replace("{MAIL_BODY}", $mail_body, $mail);
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
    $mail = str_replace("{MAIL_BODY}", $mail_body, $mail);
    $response = sendEmailWithAttachment(NULL, "Payment - " . $_POST["PaymentId"], $mail, [
        $_FILES["Screenshot"]['tmp_name'] => [
            "path" => $_FILES["Screenshot"]['tmp_name'],
            "type"  => $_FILES["Screenshot"]['type']
        ]
    ]);
    if(!$response["status"]) exit(json_encode(["status" => FALSE, "message" => "Failed to Submit Payment Details, Please try again later", "try" => $response["currentTry"]]));
    exit(json_encode(["status" => TRUE, "message" => "Successfully submitted the details, we will connect you soon, Thanks"]));
}

function sendMail($to, $subject, $message, $headers, $max_retry = 4) {
    $currentTry = 0;
    $res = @mail($to, $subject, $message, $headers);
    ++$currentTry;
    while(!$res) {
        $res = @mail($to, $subject, $message, $headers);
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
    $headers .= 'X-Mailer: PHP/' . phpversion();
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