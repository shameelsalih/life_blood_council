<?php $current_tab = $_GET["tab"] ?? "";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "head.php" ?>
</head>

<body>

  <?php require_once "header.php" ?>

  <main id="main-body">

    <section id="knowledge-hub-banner" class="animate" data-animation-name="fadeIn">
      <div class="container pt-3 pt-lg-5">
        <div class="pt-5"></div>
        <h6>Our Mission is to raise awareness about</h6>
        <h1>
          <span class="primary-color">
            Thalassemia
          </span>
          & Support<br>
          those who are affected
        </h1>
        <button class="btn btn-custom-secondary mt-3">Know More</button>
        <button class="btn btn-custom-primary mt-3">Support Us</button>
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
          "title"   =>  "What is Beta-Thalassemia Major?",
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
</body>

</html>