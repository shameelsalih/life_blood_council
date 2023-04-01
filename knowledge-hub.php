<?php $current_tab = $_GET["tab"] ?? "";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "head.php" ?>
</head>

<body>

  <?php require_once "header.php" ?>

  <main id="main-body">

    <section id="knowledge-hub-banner" class="animate">
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

    <section id="knowledge-hub-tabs" class="py-5 my-md-5 animate">
      <div class="container">
        <ul class="nav nav-pills mb-3 nav-justified custom-nav-pills px-15vw" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link<?= $current_tab == "events" || $current_tab == "" ? " active" : ""; ?>" id="tab-events-tab" data-bs-toggle="pill" data-bs-target="#tab-events" type="button" role="tab" aria-controls="tab-events" aria-selected="true">Events</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link<?= $current_tab == "campaigns" ? " active" : ""; ?>" id="tab-campaigns-tab" data-bs-toggle="pill" data-bs-target="#tab-campaigns" type="button" role="tab" aria-controls="tab-campaigns" aria-selected="false">Campaigns</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link<?= $current_tab == "faqs" ? " active" : ""; ?>" id="tab-faqs-tab" data-bs-toggle="pill" data-bs-target="#tab-faqs" type="button" role="tab" aria-controls="tab-faqs" aria-selected="false">FAQ's</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link<?= $current_tab == "centres" ? " active" : ""; ?>" id="tab-centres-tab" data-bs-toggle="pill" data-bs-target="#tab-centres" type="button" role="tab" aria-controls="tab-centres" aria-selected="false">List of Centres</button>
          </li>
        </ul>
        <div class="tab-content animate" id="pills-tabContent">
          <div class="tab-pane fade<?= $current_tab == "events" || $current_tab == "" ? " show active" : ""; ?>" id="tab-events" role="tabpanel" aria-labelledby="tab-events-tab">
            <?php require_once "event-content.php" ?>
          </div>
          <div class="tab-pane fade<?= $current_tab == "campaigns" ? " show active" : ""; ?>" id="tab-campaigns" role="tabpanel" aria-labelledby="tab-campaigns-tab">
            <div class="content">
              <?php require_once "campaigns-content.php" ?>
            </div>
          </div>
          <div class="tab-pane fade<?= $current_tab == "faqs" ? " show active" : ""; ?>" id="tab-faqs" role="tabpanel" aria-labelledby="tab-faqs-tab">
            <div class="content">
              <?php require_once "faqs-content.php" ?>
            </div>
          </div>
          <div class="tab-pane fade<?= $current_tab == "centres" ? " show active" : ""; ?>" id="tab-centres" role="tabpanel" aria-labelledby="tab-centres-tab">
            <div class="content">
              <?php require_once "centres-content.php" ?>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php require_once "footer.php" ?>
</body>

</html>