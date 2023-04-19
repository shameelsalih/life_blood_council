<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "head.php" ?>
</head>

<body>
  
  <?php require_once "header.php" ?>

  <main id="main-body">
    <section id="main-banner" class="animate" data-animation-name="fadeIn">
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

    <section id="blood-donation" class="pt-5">
      <div class="container">

        <div class="row justify-content-center align-items-center py-5">
          <div class="col-sm-4 d-flex align-items-center">
            <img class="w-100" src="images/what-we-do/activities.png" alt="Blood Donation">
          </div>
          <div class="col-sm-6">
            <h3 class="primary-color">Blood <span class="secondary-color">Donation</span></h3>
            <p>
              37000 persons are required to donate blood every day in our country to meet the requirement of blood and its components for patients with various medical conditions. Blood centers spread across the country have the responsibility of ensuring blood sufficiency. A large portion of blood comes into blood centers through blood donation camps. It is important to identify segments (colleges, offices, religious institutions, community centers, residential areas, public places) where camps can be organised. These camps should be scheduled in such a manner that there is a steady flow of blood into blood centers throughout the year.
            </p>
          </div>
        </div>
        
        <section id="platelet-donation">
          <div class="row justify-content-center align-items-center py-5">
            <div class="col-sm-6">
              <h3 class="primary-color">Platelet <span class="secondary-color">Donation</span></h3>
              <p>
                In cases where there is a large need for platelets, platelets obtained after component separation from blood collected during routine blood donation do not suffice. It is important to have donors who donate platelets through a process called apheresis. The apheresis procedure takes approximately 1 hour, and the platelets so obtained are called single donor platelets (SDP). Platelets have a shelf life of only 5 days, and therefore most SDP donors are required to donate blood according to specific requirements. There is a need to create awareness and build a registry of platelet donors who will respond to calls against specific requirements. Platelets are normally required by cancer patients, stem cell transplant patients, organ transplant patients, aplastic anaemia patients, and patients with malaria, dengue fever, and clotting disorders.
              </p>
            </div>
            <div class="col-sm-4 d-flex align-items-center">
              <img class="w-100" src="images/what-we-do/activities.png" alt="Platelet Donation">
            </div>
          </div>
  
          <div class="row">
            <?php
              $accordionData = [
                [
                  "title"   => "The role of Platelets",
                  "content" =>  "Platelets are cells that circulate in the blood and bind together when they recognize a ruptured blood vessel. They form a clot, thereby preventing any further loss of blood."
                ],
                [
                  "title"   => "Who requires Platelets?",
                  "content" =>  "Platelets are required by cancer patients, organ transplant patients, stem cell transplant patients, aplastic anemia patients and patients with bleeding disorders. Patients suffering from malaria and dengue may also need platelets."
                ],
                [
                  "title"   => "What is Random Donor Platelets (RDPs)?",
                  "content" =>  "Platelets can be obtained after centrifugation of blood that is collected during routine blood donation. However, the quantity of platelets that are obtained in this manner is very little - just about 50 ml from 350 ml of blood. This is normally clubbed with platelets collected in this manner from many blood donors, to meet the requirement of one patient. Hence, these are called Random Donor Platelets (RDPs)."
                ],
                [
                  "title"   => "Need for Single Donor Platelets (SDP)",
                  "content" =>  "RDPs expose the recipient to large number of donors, thereby increasing the risk of transfusion transmitted infections. Secondly, platelets have a short shelf life (just 5 days). Large blood donation camps may result in wastage of those RDPs which are not required in the next 5 days.  On the other hand, periods of inadequate blood donation could lead to a shortage of RDPs. "
                ],
                [
                  "title"   => "What is SDP?",
                  "content" =>  "Single Donor Platelets (SDPs) are obtained from platelet donors, who do not donate other components of blood. This is done by a process called “apheresis”, where blood is drawn from the vein into a sterile collecting device, platelets separated using a cell separator, and the remaining components returned back. This cycle is repeated 6-8 times, and will take between 60-90 minutes. Almost 300 ml of SDPs can be obtained from one donor. "
                ],
                [
                  "title"   => "Platelets from SDP Donor v/s. Blood Donor",
                  "content" =>  "Platelet Donation, no doubt, is more time-consuming, but is less taxing to the donor.  Platelets are normally not pressed into service in healthy persons. And, the donated platelets regenerate very quickly. Therefore, platelet donors can donate again after an interval of 3 days, as compared to 90 days for a blood donor. However, one can donate platelets not more than 24 times a year."
                ],
                [
                  "title"   => "Procedure for Donating SDPs",
                  "content" =>  "A blood sample is taken from the donor to check for Platelet Count and Transfusion Transmitted Infections. This may take 1-2 hours for a first-time donor.  The 60-90-minute process of platelet donation follows afterwards.  "
                ],
                [
                  "title"   => "Eligibility for SDP donation",
                  "content" =>  "A platelet donor should weigh more than 55 kgs, should have platelet count of more than 1,50,000, will be checked for ascertaining stability of veins, and shouldn’t have taken aspirin in the past 3 days. In any case, the platelet donor is required to satisfy all conditions that are required of a regular whole-blood donor."
                ],
              ];
            ?>
            
            <div id="platelet-faqs">
              <div class="content d-flex justify-content-center">
                <div class="accordion custom-accordion" id="knowledge-hub-faq">
                  <div class="row">
                  <?php
                    $innerHTML = '';
                    foreach($accordionData as $key => $data) {
                      $innerHTML .= '
                        <div class="col-sm-6 pb-5">
                          <div class="accordion-item animate" data-animation-name="' . ($key % 2 == 0 ? "slideFromRight" : "slideFromLeft") . '">
                            <h2 class="accordion-header" id="custom_accordion_heading_' . $key . '">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#custom_accordion_collapse_' . $key . '" aria-expanded="true" aria-controls="custom_accordion_collapse_' . $key . '">
                                ' . $data["title"] . '
                              </button>
                            </h2>
                            <div id="custom_accordion_collapse_' . $key . '" class="accordion-collapse collapse show secondary-color" aria-labelledby="custom_accordion_heading_' . $key . '" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                ' . $data["content"] . '
                              </div>
                            </div>
                          </div>
                        </div>
                      ';
                    }
                    echo $innerHTML;
                  ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>

        <section id="granulocyte-donation">

          <div class="row justify-content-center align-items-center py-5">
            <div class="col-sm-4 d-flex align-items-center">
              <img class="w-100" src="images/what-we-do/activities.png" alt="Granulocyte Donation">
            </div>
            <div class="col-sm-6">
              <h3 class="primary-color">Granulocyte <span class="secondary-color">Donation</span></h3>
              <p>
                Granulocytes (a type of White Blood Cell) make up only a small percentage of human blood.They can also be obtained from blood through apheresis, as in the case of platelets. However, because human blood is smaller in quantity, the process takes much longer (close to 4 hours). Apart from the lengthy process, the donors are required to take injections which will mobilise granulocytes from the bone marrow into the blood stream. This injection is required to be taken approximately 10 hours before the apheresis procedure. It is necessary to raise awareness and establish a registry of granulocyte donors who will respond to specific requests.Granulocytes are required by some cancer patients undergoing chemotherapy and by some stem cell transplant patients.
              </p>
            </div>
          </div>

  
          <div class="row">
            <?php
              $accordionData = [
                [
                  "title"   => "Role of Granulocytes",
                  "content" =>  "Granulocytes are a type of White Blood Cells which help the human body in the fight against infections, especially those caused by fungi and bacteria."
                ],
                [
                  "title"   => "What is the shelf-life of donated Granulocytes?",
                  "content" =>  "The shelf-life is just 24 hours. Therefore, the donated granulocytes have to be transfused to the patient within 24 hours of its collection"
                ],
                [
                  "title"   => "Who requires Granulocytes?",
                  "content" =>  "Granulocytes are required primarily by cancer patients and stem cell transplant patients, who in the course of their treatment sometimes have very low WBC counts and develop infections or are at risk of developing infections. Granulocytes are prescribed for patients with life-threatening infections."
                ],
                [
                  "title"   => "How are granulocytes obtained from a donor?",
                  "content" =>  "There are extremely small quantities of granulocytes in the blood stream. It is therefore necessary to increase their quantities by giving the donor an injection of Granulocyte Colony Stimulating Factor (G-CSF) and sometimes a corticosteroid also. This mobilizes the release of granulocytes into the blood stream from the bone marrow. 10 to 12 hours later, the donor donates granulocyte through a process called apheresis, where the donor’s blood is drawn into a sterile kit which is attached to a cell separator.  Granulocytes are harvested and collected in a separate bag, whereas most of the other components are returned to the body of the donor. The whole process of apheresis granulocyte donation can take almost 4 hours "
                ],
                [
                  "title"   => "Eligibility for Granulocyte donation",
                  "content" =>  "The donor should weigh more than 55 kgs, should have should have a normal WBC count, and will be checked for ascertaining stability of veins. In any case, the granulocyte donor is required to satisfy all conditions that are required of a regular whole-blood donor. During the process of harvesting granulocytes some quantity of Red Blood Cells (RBCs) are also collected. Therefore, the donor’s blood group has to be compatible with that of the patient."
                ],
                [
                  "title"   => "What is the procedure for donating Granulocytes",
                  "content" =>  "In the first visit, a blood sample of the patient is taken to check for WBC count and Transfusion Transmitted Infections. During this visit, a physical check is done for ascertaining stability of veins. The results of the tests done on the blood sample will be available after 3-4 hours. Then the donor will be administered the G-CSF injection and the corticosteroid. 10-12 hours after the medication, the apheresis procedure will commence and the process will take 3-4 hours"
                ],
              ];
            ?>
            
            <div id="granulocyte-faqs">
              <div class="content d-flex justify-content-center">
                <div class="accordion custom-accordion" id="knowledge-hub-faq">
                  <div class="row">
                  <?php
                    $innerHTML = '';
                    foreach($accordionData as $key => $data) {
                      $innerHTML .= '
                        <div class="col-sm-6 pb-5">
                          <div class="accordion-item animate" data-animation-name="' . ($key % 2 == 0 ? "slideFromLeft" : "slideFromRight") . '">
                            <h2 class="accordion-header" id="custom_accordion_heading_' . $key . '">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#custom_accordion_collapse_' . $key . '" aria-expanded="true" aria-controls="custom_accordion_collapse_' . $key . '">
                                ' . $data["title"] . '
                              </button>
                            </h2>
                            <div id="custom_accordion_collapse_' . $key . '" class="accordion-collapse collapse show secondary-color" aria-labelledby="custom_accordion_heading_' . $key . '" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                ' . $data["content"] . '
                              </div>
                            </div>
                          </div>
                        </div>
                      ';
                    }
                    echo $innerHTML;
                  ?>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </section>


        <section id="bombay-blood-group">
          <div class="row justify-content-center align-items-center py-5">
            <div class="col-sm-8">
              <h3 class="primary-color">"Bombay" <span class="secondary-color">Blood Group</span></h3>
              <p>
                "Bombay" blood group is extremely rare. Transfusion-dependent patients with this blood group may find it extremely difficult to find blood or donors. A registry of people with this rare blood group is required
              </p>
              <p>
                The “H” Antigen which is present in the Red Blood Cells of almost all persons in the world, is the precursor Antigen in the ABO system. This “H” Antigen may finally express itself as Antigen A or Antigen B or Antigen AB, or remains as Antigen H. The prevailing practice for many years was to look for Antigens A and B, and declare the blood group as A if Antigen A was found,  B if Antigen B was found, AB if both Antigen A and B were found, and O if neither Antigen A nor B was found. Further, the presence or absence of Antigen D decided that the blood group is Rh+ve or Rh-ve respectively. On this basis, the blood centre at KEM Hospital, Mumbai, came to the conclusion that the patient admitted to their hospital in 1952 was O Rh+ve. However, when they attempted to cross-match the patient’s sample with O  Rh+ve units available in stock, they could not find compatible units. It became obvious that the doctors were dealing with a different blood group. Since, the first case was found in Mumbai (then Bombay), the blood group came to be called as “Bombay” blood group. Dr. Bhatia, Dr. Bhende and Dr. Deshpande studied the patients blood sample and discovered that the “H” Antigen was absent in the patient’s sample but present in all the blood units available with them. “Bombay” blood group is therefore characterized by the absence of “H” Antigen, which is present in almost everyone.
              </p>
              <p>
                “Bombay” blood group with presence of Antigen D is termed as “Bombay” Rh+ve, and “Bombay” Rh-ve if Antigen D is absent. Bombay blood group is rare, with an estimated 1 in 10000 persons in India having this blood group, and 1 in 4 million in the rest of the world. Bombay Rh-ve is extremely rare and estimated to be 1 in 100000 persons even in the Indian subcontinent. While these are the estimates of prevalence, the actual number of persons with “Bombay” blood group who have been identified in India are just around 450.
              </p>
            </div>
            <div class="col-sm-4 d-flex align-items-center">
              <img class="w-100" src="images/what-we-do/activities.png" alt="Bombay Blood Group">
            </div>
          </div>
        </section>

        <section id="stem-cell-donation">
          <h3 class="primary-color text-center pb-5 pt-5">Stem Cell <span class="secondary-color">Donation</span></h3>
          <div class="row">
            <?php
              $accordionData = [
                [
                  "title"   => "Why do we need a Stem Cell Donor Registry?",
                  "content" =>  "For many of our fellow citizens who live with life-threatening blood disorders, stem cell transplantation provides the only hope. They can undergo this life-saving procedure only if they are able to find a matching stem cell donor. The Human Leukocyte Antigens (HLA) of the donor should match with that of the recipient. Human Leukocyte Antigens regulate the immune system, and fight foreign organisms. If there is a match then there will be an acceptance of the transplant. The best chances of finding a match for a patient is with a sibling. However, in the event of a no-match with a sibling, there is an outside chance of finding a match with an unrelated person. Such a donor is called a Matched-Unrelated Donor (MUD). But this can happen only if a large number of people submit their blood/saliva sample, and get their HLA analyzed (typed).<br>
                  In countries where strong registries have been built after creating awareness, there is a ray of hope for patients with life-threatening blood disorders. There is a need for every country to build a registry  of persons wishing to donate stem cells as the best chance of finding a match is with people of the same ethnic origin.
                  "
                ],
                [
                  "title"   => "How do I join the Registry?",
                  "content" =>  "The first step is to fill a Donor Questionnaire for checking eligibility. The second step is to give buccal samples using a buccal swap. After analyzing the stem cell factors (HLA), the results will be fed to Registry’s computer."
                ],
                [
                  "title"   => "How do I donate my stem cells?",
                  "content" =>  "If you are found to be an HLA-Match to a patient, you will receive a call, and will asked to submit your sample for confirmation of the HLA Typing. You can then donate your stem cells either from the Bone marrow or from Peripheral Blood.<br>
                  In the case of donation of stem cells from the Bone Marrow, the donor is hospitalized and subjected to general anesthesia. Syringes are then injected into the bones, and the bone marrow is aspirated. The donor can leave the hospital within a day of the procedure.<br>
                  In the case of stem cells from Peripheral Blood, the donor is administered a G-CSF injection for 5 consecutive days. Subsequently the donor donates stem cells through apheresis, like platelet and granulocyte donation. The donor donates blood into a sterile kit which is attached to a cell separator/apheresis machine. The device harvests the stem cells over multiple cycles spread over 4-5 hours, and returns the other components back to the body."
                ],
              ];
            ?>
            
            <div id="granulocyte-faqs">
              <div class="content d-flex justify-content-center">
                <div class="accordion custom-accordion" id="knowledge-hub-faq">
                  <div class="row">
                  <?php
                    $innerHTML = '';
                    foreach($accordionData as $key => $data) {
                      $innerHTML .= '
                        <div class="col-sm-12 pb-5">
                          <div class="accordion-item animate" data-animation-name="' . ($key % 2 == 0 ? "slideFromLeft" : "slideFromRight") . '">
                            <h2 class="accordion-header" id="custom_accordion_heading_' . $key . '">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#custom_accordion_collapse_' . $key . '" aria-expanded="true" aria-controls="custom_accordion_collapse_' . $key . '">
                                ' . $data["title"] . '
                              </button>
                            </h2>
                            <div id="custom_accordion_collapse_' . $key . '" class="accordion-collapse collapse show secondary-color" aria-labelledby="custom_accordion_heading_' . $key . '" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                ' . $data["content"] . '
                              </div>
                            </div>
                          </div>
                        </div>
                      ';
                    }
                    echo $innerHTML;
                  ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>

      </div>
    </section>


  </main>

  <?php require_once "footer.php" ?>
</body>

</html>