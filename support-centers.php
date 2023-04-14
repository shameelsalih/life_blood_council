<?php $current_process = $_GET["process"] ?? "";?>
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

    <section id="list-of-centers">
      <div class="container py-5">

        <?php require_once "list-of-centers.php"  ?>


      </div>
    </section>

  </main>

  <?php require_once "footer.php" ?>
</body>

</html>