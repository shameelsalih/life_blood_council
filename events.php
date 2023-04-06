<?php
  $campaign_data = [
    [
      "title"         =>  "Platelet Donation Camps",
      "date"          =>  "2023-02-11",
      "place"         =>  "Mumbai",
      "background"    =>  "images/knowledge-hub/events/e3.png"
    ],
    [
      "title"         =>  "Blood Donation Camps",
      "date"          =>  "2023-03-03",
      "place"         =>  "Pune",
      "background"    =>  "images/knowledge-hub/events/e3.png"
    ],
    [
      "title"         =>  "Granulocyte Donation Registry Camps",
      "date"          =>  "2023-03-10",
      "place"         =>  "Orissa",
      "background"    =>  "images/knowledge-hub/events/e3.png"
    ],
    [
      "title"         =>  "\"Bombay\" Blood Group Registry Camps",
      "date"          =>  "2023-04-15",
      "place"         =>  "Punjab",
      "background"    =>  "images/knowledge-hub/events/e3.png"
    ],
    [
      "title"         =>  "Platelet Donation Registry Camps",
      "date"          =>  "2023-04-15",
      "place"         =>  "Punjab",
      "background"    =>  "images/knowledge-hub/events/e3.png"
    ]
  ];
?>
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

    <section id="events" class="py-5 animate" data-animation-name="fadeIn">
      <div class="container">
        <div class="row">
          <?php foreach($campaign_data as $campaign) :?>
          <div class="col-md-6 col-lg-4 event-container pt-5 animate" data-animation-name="bounce">
            <div class="event-data campaign">
              <img class="background" src="<?= $campaign["background"]; ?>" alt="<?= $campaign["title"] ?>"/>
              <div class="overlay">
                <div class="event-content">
                  <h3 class="title"><?= $campaign["title"] ?></h3>
                </div>
                <div class="content">
                  <h6><?= date("d M Y", strtotime($campaign["date"])); ?></h6>
                  <p class="fw-normal mb-0"><?= $campaign["place"]; ?></p>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach;?>
        </div>
      </div>
      
      <div class="container pt-5 animate" data-animation-name="bounce">
        <iframe id="google-events" src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FKolkata&src=bGlmZWJsb29kY291bmNpbC5ldmVudHNAZ21haWwuY29t&color=%23039BE5" style="border:solid 1px #777" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
      </div>
    </section>

  </main>

  <?php require_once "footer.php" ?>
</body>

</html>