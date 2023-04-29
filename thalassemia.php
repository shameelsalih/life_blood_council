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
                Beta Thalassemia Major is a genetic blood disorder. It is also called "Cooley's Anemia" or or simply "Thalassemia". Beta Thalassemia Major is characterized by the inability of the body to produce appropriate hemoglobin, results in inadequate delivery of oxygen to the different cells of the body. The disorder, in most cases, is diagnosed in the first year of the life of the child.
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
              <?php require_once "thalassemia-prevention.php" ?>
            </div>
          </div>
          <div class="tab-pane fade<?= $current_tab == "care" ? " show active" : ""; ?>" id="tab-care" role="tabpanel" aria-labelledby="tab-care-tab">
            <div class="content">
              <?php require_once "thalassemia-care.php" ?>
            </div>
          </div>
          <div class="tab-pane fade<?= $current_tab == "cure" ? " show active" : ""; ?>" id="tab-cure" role="tabpanel" aria-labelledby="tab-cure-tab">
            <div class="content">
              <?php require_once "thalassemia-cure.php" ?>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php require_once "footer.php" ?>
  </script>
</body>

</html>