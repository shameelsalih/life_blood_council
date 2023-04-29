
              <section id="thalassemia-treatment" class="py-5 animate">
                <div class="container">

                  <div class="row justify-content-center">
                    <div class="col-sm-7 pt-5">
                      <h3 class="primary-color">Stem Cell <span class="secondary-color">Transplant</span></h3>
                      <p>
                        Stem Cell (Bone Marrow) Transplant can help cure the disease and prevent serious complications, such as anemia and organ damage.<br /><br />
                        The success of BMT depends on various factors, such as the patient's age, overall health, and the availability of a suitable donor.
                      </p>
                    </div>
                    <div class="col-sm-4 d-flex align-items-center">
                      <img class="w-100" src="images/thalassemia/bone-arrow-transplant.png" alt="Regular Blood Transfusions">
                    </div>
                  </div>

                </div>
              </section>
<?php
$accordionData = [
  [
    "title"   =>  "What is a cure for Beta Thalassemia Major?",
    "content" =>  "A stem cell transplant is the only cure available for beta-thalassemia major.<br>
    The first step in this exercise is to locate a matching stem cell donor. The best chance of finding a match is with a sibling. The donor is then referred to as a \"sibling donor\". If a sibling is not found to be a match, the patient can check with a Stem Cell Registry. There may be an outside-chance of finding a match from a registry.  If a match is found from a registry, the donor is called a \"Matched Unrelated Donor\" also referred to as \"MUD\". The third option is to find a parent who is a close match. The donor in such an event is called a \"haplo donor\".<br>
    The second step in the transplant process is to manage the patient well before transplant so that the process is as low-risk as possible.<br>
    The third step is to find the most appropriate hospital, which is equipped with the right facilities and has trained transplant physicians and nursing staff.
    "
  ]
];
?>
<section id="faqs-cure" class="py-5">
<h4 class="primary-color text-center pb-5">You ask, We answer</h4>
<div class="content d-flex justify-content-center">
  <div class="col-lg-10 col-xl-9 col-sm-11 accordion custom-accordion" id="knowledge-hub-faq">
  <?php
    $innerHTML = '';
    foreach($accordionData as $key => $data) {
      $innerHTML .= '
        
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

      ';
    }
    echo $innerHTML;
  ?>
  </div>
</div>

</section>