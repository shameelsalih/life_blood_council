<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "head.php" ?>
</head>

<body>
  
  <?php require_once "header.php" ?>

  <main id="main-body">
    <section id="main-banner" class="carousel slide carousel-fade no-bg animate" data-animation-name="fadeIn" data-bs-ride="carousel" data-bs-pause="false" data-bs-interval="8000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/banner/new-banner-image.png" class="d-block w-100" alt="Banner Image">
          <div class="carousel-caption">
            <h1 class="secondary-color">Championing</h1>
            <h1 class="primary-color">Blood Adequacy</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/banner/new-banner-image-2.png" class="d-block w-100" alt="Banner Image">
          <div class="carousel-caption">
            <h1 class="secondary-color">Join Our Fight Against Thalassemia</h1>
            <h1 class="primary-color">Preventing Inherited Blood Disorders Through Awareness and Screening</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/banner/new-banner-image.png" class="d-block w-100" alt="Banner Image">
          <div class="carousel-caption">
            <h1 class="secondary-color">Join Our Fight Against Thalassemia</h1>
            <h1 class="primary-color">Helping People Lead Fulfilling Life</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/banner/new-banner-image-2.png" class="d-block w-100" alt="Banner Image">
          <div class="carousel-caption">
            <h1 class="secondary-color">Join Our Fight Against Thalassemia</h1>
            <h1 class="primary-color">Breaking The Chains of Thalassemia</h1>
          </div>
        </div>
      </div>
    </section>
  
    <section id="home-about" class="animate">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img class="w-100 custom-align-center" src="images/logo.png" alt="LifeBlood Logo">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <div class="content">
              <h2 class="primary-color">Our Vision</h2>
              <p>We will endeavour to building a future where blood and its components will be always available to those in need of blood transfusions</p>
              <p>We will strive to bring fulfillment and happiness in the lives of persons with Thalassemia Major</p>
              <p>We will work to build a future where there are no children with Thalassemia Major</p>
            </div>
            <div class="content">
              <h2 class="primary-color">Our Mission</h2>
              <p>To create a comprehensive ecosystem with the involvement of Government authorities, NGOs, medical fraternity, society at large and to build structures, establish systems and conceive and execute programs to achieve our vision</p>
            </div>
          </div>  
        </div>
      </div>
    </section>
  </main>


  <?php require_once "footer.php" ?>
  <script>
    const slideShowElements = document.querySelectorAll(".slide-show .slide-show-element");
    window['shameel'] = slideShowElements[0];
    // // setInterval(() => {
    //   slideShowElements.forEach(slideShowElement => {
    //     window['shameel'] = slideShowElement;
    //   });
    // // }, 5000);
  </script>
</body>

</html>