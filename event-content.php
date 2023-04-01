<?php
  $events_data = [
    [
      "title"         =>  "Thalassemia Awareness",
      "date"          =>  "2023-02-11",
      "place"         =>  "Mumbai",
      "partner_logos" =>  ["images/knowledge-hub/events/logo/tata.png", "images/knowledge-hub/events/logo/tata.png"],
      "background"    =>  "images/knowledge-hub/events/e1.png"
    ],
    [
      "title"         =>  "Rare Blood Awareness",
      "date"          =>  "2023-03-03",
      "place"         =>  "Pune",
      "partner_logos" =>  ["images/knowledge-hub/events/logo/tata.png"],
      "background"    =>  "images/knowledge-hub/events/e2.png"
    ],
    [
      "title"         =>  "Blood Donation Campaign",
      "date"          =>  "2023-03-10",
      "place"         =>  "Orissa",
      "partner_logos" =>  ["images/knowledge-hub/events/logo/tata.png", "images/knowledge-hub/events/logo/tata.png", "images/knowledge-hub/events/logo/tata.png"],
      "background"    =>  "images/knowledge-hub/events/e3.png"
    ],
    [
      "title"         =>  "Platelet Donation Camps",
      "date"          =>  "2023-04-15",
      "place"         =>  "Punjab",
      "partner_logos" =>  ["images/knowledge-hub/events/logo/tata.png"],
      "background"    =>  "images/knowledge-hub/events/e4.png"
    ]
  ];
?>
          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <?php foreach($events_data as $event) :?>
                <div class="col-md-6 col-lg-4 event-container pt-5">
                  <div class="event-data">
                    <img class="background" src="<?= $event["background"]; ?>" alt="<?= $event["title"] ?>"/>
                    <div class="overlay">
                      <div class="event-content">
                        <h3 class="title"><?= $event["title"] ?></h3>
                        <h6><?= date("d M Y", strtotime($event["date"])); ?></h6>
                        <p class="fw-normal mb-0"><?= $event["place"]; ?></p>
                      </div>
                      <button class="btn btn btn-custom-primary">Enroll Now</button>
                    </div>
                  </div>
                  <div class="partners">Partners: 
                    <?php foreach($event["partner_logos"] as $key => $logo): ?>
                      <img class="partner-logo" src="<?= $logo ?>" alt="partner-<?= $key ?>">
                    <?php endforeach; ?>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
            <div class="container pt-5 animate">
              <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FKolkata&src=bGlmZWJsb29kY291bmNpbC5ldmVudHNAZ21haWwuY29t&color=%23039BE5" style="border:solid 1px #777" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>