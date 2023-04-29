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
          <img src="images/banner/banner-2.png" class="d-block w-100" alt="Banner Image">
          <div class="carousel-caption">
            <h1 class="secondary-color">Championing</h1>
            <h1 class="primary-color">Blood Adequacy</h1>
            <h2 class="secondary-color">Delivering blood when needed</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/banner/banner-1.png" class="d-block w-100" alt="Banner Image">
          <div class="carousel-caption">
            <h1 class="secondary-color">Join Our Fight</h1>
            <h1 class="secondary-color">Against Thalassemia</h1>
            <h2 class="primary-color">Prevention through screening!</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/banner/new-banner-image.png" class="d-block w-100" alt="Banner Image">
          <div class="carousel-caption">
            <h1 class="secondary-color">Join Our Fight</h1>
            <h1 class="secondary-color">Against Thalassemia</h1>
            <h2 class="primary-color">Helping people lead fulfilling lives!</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/banner/banner-3.png" class="d-block w-100" alt="Banner Image">
          <div class="carousel-caption">
            <h1 class="secondary-color">Join Our Fight</h1>
            <h1 class="secondary-color">Against Thalassemia</h1>
            <h2 class="primary-color">Breaking the Chains of Thalassemia!</h2>
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