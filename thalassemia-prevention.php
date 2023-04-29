
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
    "title"   =>  "What is the risk?",
    "content" =>  "Your future child can be a Beta Thalassemia Major."
  ],
  [
    "title"   =>  "What are the consequences?",
    "content" =>  "The child will need regular, life-long blood transfusions. The child will need blood transfusions on an average every 21 days."
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
    "content" =>  "There is <b>NO RISK</b> to your future child."
  ],
  [
    "title"   =>  "What if me and my partner are both Thalassemia Minor?",
    "content" =>  "It is not necessary that every child born to you will be a Beta Thalassemia Major. There is a 25% chance in each pregnancy that your child will be a Beta Thalassemia Major."
  ],
  [
    "title"   =>  "Does that mean that we can’t have children?",
    "content" =>  "That surely is the safest option. But, you could always adopt a child."
  ],
  [
    "title"   =>  "But what if we want to have our own child?",
    "content" =>  "You surely can have your own biological child. There is a 75% chance that the child born to you will not be a Beta Thalassemia Major. You can go for a <b>Pre Natal Test</b> very early in the pregnancy (after the 9th week), which will tell you whether the foetus is Beta Thalassemia Major or not. You can then choose to continue with the pregnancy or not."
  ],
  [
    "title"   =>  "This means that this a very important test for anybody who is going to have a child in the future?",
    "content" =>  "You bet!!!"
  ],
  [
    "title"   =>  "How often should I do the test?",
    "content" =>  "You need to do the test <b>ONLY ONCE</b> in your lifetime. If you are not a Thalassemia Minor you can never become a Thalassemia Minor. And, if you are a Thalassemia Minor, you will forever be a Thalassemia Minor."
  ],
  [
    "title"   =>  "At what age should I do the test?",
    "content" =>  "You can do the test at any age. Ideally before you get married you should know whether you are a Thalassemia Minor. But definitely before having a child."
  ],
  [
    "title"   =>  "What does the test involve?",
    "content" =>  "The test involves drawing 2 ml. of blood by using a sterilized, disposable syringe. This will take less than half a minute, after which you are free to leave. The result will be shared shortly."
  ],
];
?>
<section id="faqs-prevention" class="py-5">
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