<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "head.php" ?>
</head>

<body>

  <?php require_once "header.php" ?>

  <main id="main-body">

    <section id="thalassemia-banner" class="animate" data-animation-name="fadeIn">
      <div class="container pt-3 pt-lg-5">
        <div class="pt-5"></div>
        <h1>
          Building<br>
          A Better Tomorrow,<br>
          <span class="primary-color">
            With Every Drop Of<br>
            Blood Donated.
          </span>
        </h1>
        <button class="btn btn-custom-secondary mt-3">Know More</button>
        <button class="btn btn-custom-primary mt-3">Support Us</button>
      </div>
    </section>

    <?php /*
    <section id="what-is-thalassemia" class="animate">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-md-6">
            <h4 class="mt-3 secondary-color">
              What is
              <span class="primary-color">Thalassemia</span>
            </h4>
            <p class="pt-3">Thalassemia is a group of inherited blood disorders characterized by abnormal hemoglobin production. Hemoglobin is a protein in red blood cells that carries oxygen throughout the body.</p>
            <p class="pt-3">People with thalassemia have reduced or absent hemoglobin production, which results in anemia (a shortage of red blood cells).</p>
          </div>
          <div class="offset-xl-1 col-xl-6 col-md-6 d-flex align-items-center">
            <img src="images/thalassemia/thalassemia.png" alt="What is Thalassemia" class="w-100" />
          </div>
        </div>
      </div>
    </section>

    <section id="thalassemia-classification" class="py-5 mt-md-5 animate">
      <div class="container">
        <h3 class="secondary-color text-center">Thalassemia is classified into two main types</h3>
        <img src="images/thalassemia/dividers.png" alt="Divider" class="w-50 mx-auto d-sm-block d-none">
        <div class="row">

          <div class="col-sm-6">
            <h3 class="secondary-color text-center mt-2"><span class="primary-color">Alpha</span>-Thalassemia</h3>
            <div class="icon-card bg-custom-tertiary">
              <p class="content text-start quaternary-color p-3 fw-normal">
                Alpha-thalassemia occurs when there is a problem with the production of the alpha globin chain of hemoglobin. There are four genes that control the production of alpha globin, if one or more of these genes are missing or not functioning properly, it can cause alpha-thalassemia.
              </p>
            </div>
          </div>

          <div class="col-sm-6">
            <h3 class="secondary-color text-center mt-sm-2 mt-5"><span class="primary-color">Beta</span>-Thalassemia</h3>
            <div class="icon-card bg-custom-tertiary">
              <p class="content text-start quaternary-color p-3 fw-normal">
                Thalassemia Major is a genetic blood disorder. It is also called "Cooley's Anemia" or or simply "Thalassemia". Thalassemia Major is characterized by the inability of the body to produce appropriate hemoglobin, results in inadequate delivery of oxygen to the different cells of the body. The disorder, in most cases, is diagnosed in the first year of the life of the child.
              </p>
            </div>
          </div>

          <div class="col-sm-12 mt-5">
            <div class="icon-card bg-custom-tertiary">
              <p class="content text-start quaternary-color p-3 fw-normal">
                Symptoms of thalassemia can vary depending on the type and severity of the disorder. Common symptoms include fatigue, weakness, paleness, slow growth, and bone deformities.<br /><br />
                Thalassemia is diagnosed by a combination of blood tests, including complete blood count (CBC), hemoglobin electrophoresis, and genetic testing.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    */ ?>
    <section id="knowledge-hub-tabs">
      <?php $current_tab = $_GET["tab"] ?? "" ?>
      <div class="container py-5 my-md-5 animate">
        <ul class="nav nav-pills mb-3 nav-justified custom-nav-pills px-5vw" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link<?= $current_tab == "prevention" || $current_tab == "" ? " active" : ""; ?>" id="tab-prevention-tab" data-bs-toggle="pill" data-bs-target="#tab-prevention" type="button" role="tab" aria-controls="tab-prevention" aria-selected="false">Thalassemia Prevention</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link<?= $current_tab == "care" ? " active" : ""; ?>" id="tab-care-tab" data-bs-toggle="pill" data-bs-target="#tab-care" type="button" role="tab" aria-controls="tab-care" aria-selected="false">Thalassemia Care</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link<?= $current_tab == "cure" ? " active" : ""; ?>" id="tab-cure-tab" data-bs-toggle="pill" data-bs-target="#tab-cure" type="button" role="tab" aria-controls="tab-cure" aria-selected="false">Thalassemia Cure</button>
          </li>
        </ul>
        <div class="tab-content animate" id="pills-tabContent">
          <div class="tab-pane fade<?= $current_tab == "prevention" || $current_tab == "" ? " show active" : ""; ?>" id="tab-prevention" role="tabpanel" aria-labelledby="tab-prevention-tab">
            <div class="content">
              Thalassemia Prevention Content Will Come Here
            </div>
          </div>
          <div class="tab-pane fade<?= $current_tab == "care" ? " show active" : ""; ?>" id="tab-care" role="tabpanel" aria-labelledby="tab-care-tab">
            <div class="content">
              <?php require_once "thalassemia-care.php" ?>
            </div>
          </div>
          <div class="tab-pane fade<?= $current_tab == "cure" ? " show active" : ""; ?>" id="tab-cure" role="tabpanel" aria-labelledby="tab-cure-tab">
            <div class="content">
              <section id="thalassemia-treatment" class="py-5 animate">
                <div class="container">
                  <h3 class="text-center secondary-color"><span class="primary-color">Management (Care)</span> for Thalassemia</h3>

                  <div class="row pt-sm-5 pt-3 justify-content-center">
                    <div class="col-sm-7">
                      <h3 class="primary-color"><span class="secondary-color">Regular</span> Blood Transfusions</h3>
                      <p>
                        Blood transfusions are medical procedures in which blood or blood components are transferred from one person (donor) into the bloodstream of another person (recipient).<br /><br />
                        The goal of blood transfusions is to replace lost blood, correct anemia, or treat certain medical conditions by providing essential components such as red blood cells, platelets, or plasma. The blood must be compatible with the recipient's blood type to avoid adverse reactions.
                      </p>
                    </div>
                    <div class="col-sm-2 d-flex align-items-center">
                      <img class="w-100" src="images/thalassemia/regular-blood-transfusions.png" alt="Regular Blood Transfusions">
                    </div>
                  </div>

                  <div class="row pt-5 justify-content-center">
                    <div class="col-sm-3 d-flex align-items-center order-2 order-sm-2">
                      <img class="w-100" src="images/thalassemia/chelation-therapy.png" alt="Regular Blood Transfusions">
                    </div>
                    <div class="col-sm-7 order-1">
                      <h3 class="primary-color"><span class="secondary-color">Chelation</span> Therapy</h3>
                      <p>
                        Chelation therapy is a medical treatment in which a synthetic solution (chelating agent) is administered to a patient intravenously to remove heavy metals, minerals, and other toxic substances from the body.<br /><br />
                        It is commonly used for individuals with high levels of lead or other heavy metals in the bloodstream and for individuals with metal toxicity due to occupational or environmental exposure.
                      </p>
                    </div>
                  </div>


                  <div class="row pt-5 justify-content-center">
                    <div class="col-sm-7 pt-5">
                      <h3 class="primary-color">Bone Marrow <span class="secondary-color">Transplant</span></h3>
                      <p>
                        Bone Marrow Transplant can help cure the disease and prevent serious complications, such as anemia and organ damage.<br /><br />
                        The success of BMT depends on various factors, such as the patient's age, overall health, and the availability of a suitable donor.
                      </p>
                    </div>
                    <div class="col-sm-4 d-flex align-items-center">
                      <img class="w-100" src="images/thalassemia/bone-arrow-transplant.png" alt="Regular Blood Transfusions">
                    </div>
                  </div>

                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
      $accordionData = [
        [
          "title"   =>  "Is the subject of Thalassemia important for me?",
          "content" =>  "Yes, you should know whether you are a Thalassemia Minor"
        ],
        [
          "title"   =>  "Why?",
          "content" =>  "Because if you are a Thalassemia Minor, and your partner/future partner in marriage is also a Thalassemia Minor, you pose a huge risk to your future child."
        ],
        [
          "title"   =>  "What risk?",
          "content" =>  "Your future child can be a Thalassemia Major."
        ],
        [
          "title"   =>  "So what?",
          "content" =>  "The child will need regular, life-long blood transfusions."
        ],
        [
          "title"   =>  "That is serious!",
          "content" =>  "Yes, the child will need blood transfusions on an average every 21 days."
        ],
        [
          "title"   =>  "But, I am a normal healthy person. How can I be a Thalassemia Minor?",
          "content" =>  "Thalassemia Minors are normal healthy people. They therefore do not know of it. There are an estimated 50 million Indians who are Thalassemia Minor. You could easily be one of them."
        ],
        [
          "title"   =>  "So, what must I do?",
          "content" =>  "You must get a blood test done for Thalassemia Minor."
        ],
        [
          "title"   =>  "And, if I am not a Thalassemia Minor?",
          "content" =>  "Your future child is safe. The risk is there only if both partners in a marriage are Thalassemia Minor."
        ],
        [
          "title"   =>  "What do I do if I turn out to be a Thalassemia Minor?",
          "content" =>  "You must get your partner/future partner in marriage also tested for Thalassemia Minor.  "
        ],
        [
          "title"   =>  "If I am a Thalassemia Minor, and my partner is not?",
          "content" =>  "There is no risk to your future child."
        ],
        [
          "title"   =>  "What if me and my partner are both Thalassemia Minor?",
          "content" =>  "It is not necessary that every child born to you will be a Thalassemia Major. There is a 25% chance in each pregnancy that your child will be a Thalassemia Major."
        ],
        [
          "title"   =>  "Does that mean that we can’t have children?",
          "content" =>  "That surely is the safest option. But, you could always adopt a child."
        ],
        [
          "title"   =>  "But what if we want to have our own child?",
          "content" =>  "You surely can have your own biological child. There is a 75% chance that the child born to you will not be a Thalassemia Major. You can go for a Pre Natal Test very early in the pregnancy (after the 9th week), which will tell you whether the foetus is Thalassemia Major or not. You can then choose to continue with the pregnancy or not."
        ],
        [
          "title"   =>  "This means that this a very important test for anybody who is going to have a child in the future?",
          "content" =>  "You bet!!!"
        ],
        [
          "title"   =>  "How often should I do the test?",
          "content" =>  "You need to do the test only once in your lifetime. If you are not a Thalassemia Minor you can never become a Thalassemia Minor. And, if you are a Thalassemia Minor, you will forever be a Thalassemia Minor."
        ],
        [
          "title"   =>  "At what age should I do the test?",
          "content" =>  "You can do the test at any age. Ideally before you get married you should know whether you a Thalassemia Minor. But definitely before having a child."
        ],
        [
          "title"   =>  "What does the test involve?",
          "content" =>  "The test involves drawing 2 ml. of blood by using a sterilized, disposable syringe. This will take less than half a minute, after which you are free to leave. "
        ],
        [
          "title"   =>  "What is Thalassemia Major?",
          "content" =>  "Beta-thalassemia major is a genetic blood disorder that is also called \"Cooley’s anaemia\",  \"Mediterranean anaemia\" or simply \"Thalassemia\". Beta-thalassemia major is characterised by the inability of the body to produce appropriate haemoglobin, resulting in inadequate delivery of oxygen to the different cells of the body. The disorder, in most cases, is diagnosed in the first year of the life of the child."
        ],
        [
          "title"   =>  "Who is responsible for a thalassemic child?",
          "content" =>  "A thalassemic child is born only if both parents have thalassemia minor (also called thalassemia trait or carrier of thalassemia). Most thalassemia minors are unaware of this status and go through life normally. But if both partners in a marriage are thalassemia minor, they run the risk (25%) of having a thalassemia major child in each pregnancy. Therefore, two healthy youngsters (the parents), who did not know that they had thalassemia minor, were responsible for a child with beta-thalassemia major.<br>
          An estimated 50 million Indians have thalassemia minor, and most of them do not know of it. You could be one of them.
          "
        ],
        [
          "title"   =>  "How does one come to know if one is a Thalassemia Minor?",
          "content" =>  "One must ask the laboratory for a specific blood test for thalassemia minor. You may also refer to it as a test for abnormal haemoglobinss. The test for Thalassemia Minor is required to be done only once in a person’s lifetime. This one test can save your future child from a lifetime of misery."
        ],
        [
          "title"   =>  "What is a cure for Thalassemia Major?",
          "content" =>  "A stem cell transplant is the only cure available for beta-thalassemia major.<br>
          The first step in this exercise is to locate a matching stem cell donor. The best chance of finding a match is with a sibling. The donor is then referred to as a \"sibling donor\". If a sibling is not found to be a match, the patient can check with a Stem Cell Registry. There may be an outside-chance of finding a match from a registry.  If a match is found from a registry, the donor is called a \"Matched Unrelated Donor\" also referred to as \"MUD\". The third option is to find a parent who is a close match. The donor in such an event is called a \"haplo donor\".<br>
          The second step in the transplant process is to manage the patient well before transplant so that the process is as low-risk as possible.<br>
          The third step is to find the most appropriate hospital, which is equipped with the right facilities and has trained transplant physicians and nursing staff.
          "
        ]
      ];
    ?>
    <section id="faqs" class="py-5">
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

  </main>

  <?php require_once "footer.php" ?>
  </script>
</body>

</html>