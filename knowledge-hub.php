<!DOCTYPE html>
<html lang="en">

<?php require_once "head.php" ?>

<body>

  <?php require_once "header.php" ?>

  <main id="main-body">

    <section id="knowledge-hub-banner">
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

    <section id="knowledge-hub-tabs" class="py-5 my-md-5">
      <div class="container">
        <ul class="nav nav-pills mb-3 nav-justified custom-nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-events-tab" data-bs-toggle="pill" data-bs-target="#pills-events" type="button" role="tab" aria-controls="pills-events" aria-selected="true">Events</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-faqs-tab" data-bs-toggle="pill" data-bs-target="#pills-faqs" type="button" role="tab" aria-controls="pills-faqs" aria-selected="false">FAQ's</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-centres-tab" data-bs-toggle="pill" data-bs-target="#pills-centres" type="button" role="tab" aria-controls="pills-centres" aria-selected="false">List of Centres</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-events" role="tabpanel" aria-labelledby="pills-events-tab">
            <?php require_once "event-content.php" ?>
          </div>
          <div class="tab-pane fade" id="pills-faqs" role="tabpanel" aria-labelledby="pills-faqs-tab">
            <div class="content">
              Here will come FAQ
            </div>
          </div>
          <div class="tab-pane fade" id="pills-centres" role="tabpanel" aria-labelledby="pills-centres-tab">
            <div class="content">
              Here will come Centres
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php require_once "footer.php" ?>
</body>

</html>