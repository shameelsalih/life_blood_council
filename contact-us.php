<?php
$contact_us_form_data = [
  "organising-blood-donation-camp"      =>  [
    "label"   =>  "For organising a blood donation camp",
    "formId"  =>  "obdcForm",
    "content" =>  [
      "Families and friends get into a state of panic when they are told that their patient in in need of blood transfusion. They are in need of reassurance, and this can be provided by ensuring that the required units are available in a blood centre. Almost 40,000 persons need to donate blood every day to meet the requirement of blood products for various patients in India. It is the responsibility of every individual and organisation to ensure blood sufficiency. Blood Donation camps contribute significantly towards this objective.",
      "Whether you are the head of a commercial establishment or educational institution or religious organisation or residential complex or social organisation, you can easily undertake a blood donation in your premises, and make a significant contribution.  A blood donation camp is much easier than is initially imagined, and very satisfying as you will find out. This activity can become a part of your annual event calendar",
      "LifeBlood Council is equipped to assist you in organising a blood donation camp in your premises. We are in touch with Blood Centers across the country, and can identify and coordinate with the most appropriate Blood Centre for you. We will advise you about the various arrangements to be made, and coordinate every aspect of the blood donation camp. Please provide us with the following information if you wish to join hands with us in making the country blood-sufficient:",
    ],
    "data"    =>  [
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Name of organisation",
        "id"      =>  "obdc-NameOfOrganization",
        "domain"  =>  []
      ],
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Name of contact person",
        "id"      =>  "obdc-NameOfContactPerson",
        "domain"  =>  []
      ],
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Designation of contact person",
        "id"      =>  "obdc-DesignationOfContactPerson",
        "domain"  =>  []
      ],
      [
        "type"    =>  "tel",
        "col"     =>  "6",
        "label"   =>  "Telephone Number of contact person",
        "id"      =>  "obdc-TelephoneNumberOfContactPerson",
        "domain"  =>  []
      ],
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Email id of contact person",
        "id"      =>  "obdc-EmailIdOfContactPerson",
        "domain"  =>  []
      ],
      [
        "type"    =>  "date",
        "col"     =>  "6",
        "label"   =>  "Proposed date of the blood donation camp",
        "id"      =>  "obdc-ProposedDateOfTheBloodDonationCamp",
        "domain"  =>  []
      ],
      [
        "type"    =>  "number",
        "col"     =>  "6",
        "label"   =>  "Strength (number) of your members",
        "id"      =>  "obdc-StrengthOfMembers",
        "domain"  =>  []
      ],

    ]                         
  ],
  "blood-donor"                         =>  [
    "label"   =>  "Register with us as a blood donor",
    "formId"  =>  "bdForm",
    "content" =>  [
      "Blood donation is a very significant act of giving a fighting chance at survival to one of your fellow citizens. A dedicated blood donor, when eligible to donate,  has the option of going to the nearest blood centre to donate blood. Please pick the blood centre which is most convenient to you from the list of blood centers. We would request you to use this option of not waiting for our call, but going to the nearest blood centers. However, you may register with us by providing the following information :"
    ],
    "data"    =>  [
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Your Name",
        "id"      =>  "bd-Name",
        "domain"  =>  []
      ],
      [
        "type"    =>  "tel",
        "col"     =>  "6",
        "label"   =>  "Your telephone number",
        "id"      =>  "bd-TelephoneNumber",
        "domain"  =>  []
      ],
      [
        "type"    =>  "email",
        "col"     =>  "6",
        "label"   =>  "Your email id",
        "id"      =>  "bd-EmailId",
        "domain"  =>  []
      ],
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Your blood group",
        "id"      =>  "bd-BloodGroup",
        "domain"  =>  []
      ],
      [
        "type"    =>  "text",
        "col"     =>  "12",
        "label"   =>  "Your residential address",
        "id"      =>  "bd-ResidentialAddress",
        "domain"  =>  []
      ],
      [
        "type"    =>  "dropdown",
        "col"     =>  "6",
        "label"   =>  "Your desired frequency of blood donation",
        "id"      =>  "bd-DesiredFrequencyOfBloodDonation",
        "domain"  =>  ["3 Months", "6 Months", "12 Months"]
      ],
    ]                       
  ],
  "platelet-donor"                      =>  [
    "label"   =>  "Register with us as a platelet donor",
    "formId"  =>  "pdForm",
    "content" =>  [
      "Platelets are required by a large number of cancer patients and persons with problems of bleeding. Unfortunately, the quantity of platelets obtained from components separation after routine “whole blood” donation, are not sufficient to meet the requirement of most patients. Secondly due to a short shelf-life, platelets cannot be collected in large quantities before the requirement. Therefore, there is a need for persons who donate only platelets through a process called “apheresis”. Platelets so collected are called “Single Donor Platelets (SDP)” To know more about SDP donation please check our section on apheresis platelet donation.",
      "If you are willing to register as a Platelet (SDP) donor, please submit the information given below. We will communicate with you whenever there is a need. You can then respond depending on your availability. The information required from you is as follows :",
    ],
    "data"    =>  [
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Your Name",
        "id"      =>  "pd-Name",
        "domain"  =>  []
      ],
      [
        "type"    =>  "tel",
        "col"     =>  "6",
        "label"   =>  "Your telephone number",
        "id"      =>  "pd-TelephoneNumber",
        "domain"  =>  []
      ],
      [
        "type"    =>  "email",
        "col"     =>  "6",
        "label"   =>  "Your email id",
        "id"      =>  "pd-EmailId",
        "domain"  =>  []
      ],
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Your blood group",
        "id"      =>  "pd-BloodGroup",
        "domain"  =>  []
      ],
      [
        "type"    =>  "text",
        "col"     =>  "12",
        "label"   =>  "Your residential address",
        "id"      =>  "pd-ResidentialAddress",
        "domain"  =>  []
      ],
      [
        "type"    =>  "dropdown",
        "col"     =>  "6",
        "label"   =>  "Have you donated blood in the past?",
        "id"      =>  "pd-DonatedBloodInThePast",
        "domain"  =>  ["Yes", "No"]
      ],
    ]                       
  ],
  "granulocyte-donor"                   =>  [
    "label"   =>  "Register with us as a granulocyte donor",
    "formId"  =>  "gdForm",
    "content" =>  [
      "Granulocytes are a type of White Blood Cells which help the body in the fight against infections. They can be absolutely life-saving, particularly for cancer patients after chemotherapy and patients who have undergone stem cell transplants. Some patients find themselves with very low WBC count, and at the same time have an infection which is not easily controllable. The patient may be advised transfusion of granulocytes, and will have to look for an apheresis granulocyte donor. To understand more please see our section on apheresis granulocyte donation.",
      "If you are willing to register as an apheresis granulocyte donor, please submit the information given below. We will communicate with you whenever there is a need. You can then respond depending on your availability. The information required from you is as follows :",
    ],
    "data"    =>  [
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Your Name",
        "id"      =>  "gd-Name",
        "domain"  =>  []
      ],
      [
        "type"    =>  "tel",
        "col"     =>  "6",
        "label"   =>  "Your telephone number",
        "id"      =>  "gd-TelephoneNumber",
        "domain"  =>  []
      ],
      [
        "type"    =>  "email",
        "col"     =>  "6",
        "label"   =>  "Your email id",
        "id"      =>  "gd-EmailId",
        "domain"  =>  []
      ],
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Your blood group",
        "id"      =>  "gd-BloodGroup",
        "domain"  =>  []
      ],
      [
        "type"    =>  "text",
        "col"     =>  "12",
        "label"   =>  "Your residential address",
        "id"      =>  "gd-ResidentialAddress",
        "domain"  =>  []
      ],
      [
        "type"    =>  "dropdown",
        "col"     =>  "12",
        "label"   =>  "Have you donated platelets by apheresis in the past?",
        "id"      =>  "gd-DonatedPlateletsByApheresisInThePast",
        "domain"  =>  ["Yes", "No"]
      ],

    ]                       
  ],
  "organising-stem-cell-donor-registry" =>  [
    "label"   =>  "For organising a stem cell donor registry camp",
    "formId"  =>  "oscdrForm",
    "content" =>  [
      "Stem Cell Transplantation offer a permanent cure for a large number of patients with blood disorders. But this option is available for patient only if a  matching stem cell donor is found. Buccal samples or blood samples are taken from the patient and the potential donor, and the Human Leukocytes Antigens (HLA) are analyzed (typed). The stem cells can be transplanted only if the HLA of the donor match with that of the patient. ",
      "The best chance (25%)of finding an HLA match for a patient is with a sibling. Otherwise the chance of finding a match with anyone else can be as low as 1 in 5000. Such a donor is called a Matched Unrelated Donor (MUD). Since the chances of a MUD are very low, it is important to build a large Registry of intending Stem Cell Donors whose HLA has been typed. Needless to say, the chances of finding a match are higher if the said Registry has people of the same ethnic origin.",
      "Let us build a large Registry of people of India origin. An awareness camp can be organised by LifeBlood Council followed by collection of buccal/blood samples of consenting people who are interested in becoming lifesavers. Such lifesavers could be unique for a patient and the only hope. Please provide the following information if you wish to conduct a Stem Cell Donor Registry Drive in the premises of your establishment :",
    ],
    "data"    =>  [
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Name of organisation ",
        "id"      =>  "oscdr-NameOfOrganization",
        "domain"  =>  []
      ],
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Name of contact person",
        "id"      =>  "oscdr-NameOfContactPerson",
        "domain"  =>  []
      ],
      [
        "type"    =>  "text",
        "col"     =>  "6",
        "label"   =>  "Designation of contact person",
        "id"      =>  "oscdr-DesignationOfContactPerson",
        "domain"  =>  []
      ],
      [
        "type"    =>  "tel",
        "col"     =>  "6",
        "label"   =>  "Telephone Number of contact person",
        "id"      =>  "oscdr-TelephoneNumberOfContactPerson",
        "domain"  =>  []
      ],
      [
        "type"    =>  "email",
        "col"     =>  "6",
        "label"   =>  "Email id of contact person",
        "id"      =>  "oscdr-EmailIdOfContactPerson",
        "domain"  =>  []
      ],
      [
        "type"    =>  "number",
        "col"     =>  "6",
        "label"   =>  "Strength (number) of your members",
        "id"      =>  "oscdr-StrengthOfMembers",
        "domain"  =>  []
      ],
    ]                       
  ]
];
$requirement_options = "";
$contact_us_description = "";
$contact_us_form_content = "";
foreach($contact_us_form_data as $key => $value) {
  $requirement_options .=  "
  <option value=\"$key\">$value[label]</option>
  ";
  foreach($value["content"] as $content) {
    $contact_us_description .= "
    <p class=\"fw-bold contact-show-hide $key\">$content</p>
    ";
  }
  $contact_us_form_content .= "
  <div class=\"row contact-show-hide $key\">
  <input type=\"hidden\" name=\"formId\" value=\"$value[formId]\">
  ";
  foreach($value["data"] as $input) {
    $is_full = $input["col"] == "12";
    $half = $is_full ? "" : "half";
    if($is_full) {
      $contact_us_form_content .= "
  </div>
  <div class=\"row contact-show-hide $key\">
      ";
    }
    switch($input["type"]) {
      case "dropdown":
        $contact_us_form_content .= "
        <div class=\"col-sm-$input[col] $half\">
          <div class=\"form-group custom\">
            <label class=\"form-label\" for=\"$input[id]\">$input[label]</label>
            <select class=\"form-select\" name=\"$input[id]\" id=\"$input[id]\">
              <option value=\"\">- Select - </option>
              ";
        foreach($input["domain"] as $domain) {
          $contact_us_form_content .= "
            <option value=\"$domain\">$domain</option>
          ";
        }
        $contact_us_form_content .= "
            </select>
            <p id=\"error$input[id]\" class=\"form-validation-error\"></p>
          </div>
        </div>
        ";
        break;
      default:
        $contact_us_form_content .= "
        <div class=\"col-sm-$input[col] $half\">
          <div class=\"form-group custom\">
            <label class=\"form-label\" for=\"$input[id]\">$input[label]</label>
            <input type=\"$input[type]\" class=\"form-control\" placeholder=\"$input[label]\" name=\"$input[id]\" id=\"$input[id]\">
            <p id=\"error$input[id]\" class=\"form-validation-error\"></p>
          </div>
        </div>
        ";
        break;
    }
    if($is_full) {
      $contact_us_form_content .= "
  </div>
  <div class=\"row contact-show-hide $key\">
      ";
    }
  }
  $contact_us_form_content .= "
  </div>
  ";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "head.php" ?>
</head>

<body>
  
  <?php require_once "header.php" ?>

  <main id="main-body">
    <section id="main-banner" class="animate">
      <div class="container pt-3 pt-lg-5">
        <h1>
          Building<br>
          A Better Tomorrow,<br>
          <span class="primary-color">
            With Every Drop Of<br>
            Blood Donated.
          </span>
        </h1>
        <button class="btn btn-custom-secondary mt-3 mt-lg-5">Know More</button>
        <button class="btn btn-custom-primary mt-3 mt-lg-5">Support Us</button>
      </div>
    </section>

    <section id="contact-us-form" class="py-5 mb-5 animate">
      <form class="custom-half" id="contactUsForm">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="primary-color fs-6em">Contact <span class="secondary-color">Us</span></h3>
            </div>
              
            <div class="col-sm-6">
              <div class="form-group custom">
                <label class="form-label" for="ContactRequirement">Requirement</label>
                <select class="form-select" name="ContactRequirement" id="ContactRequirement">
                  <?= $requirement_options; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <?= $contact_us_description; ?>
            </div>
          </div>
          <div class="py-5 col-lg-9 mx-auto">

            <?= $contact_us_form_content; ?>

            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-custom-primary px-10vw py-2 fs-4 mt-3" type="submit">
                  Let's Connect
                </button>
              </div>
            </div>

          </div>
        </div>
      </form>
    </section>

  </main>

  <?php require_once "footer.php" ?>
  <script src="js/contact-us.js<?= $assets_version ?>" defer></script>
</body>

</html>