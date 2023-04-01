<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "head.php" ?>
</head>

<body>
  
  <?php require_once "header.php" ?>

  <main id="main-body">
    <section id="main-banner">
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

    <section id="media" class="py-5 mb-5 animate">
      <div class="container">
        <h3 class="primary-color text-center">Media</h3>
        <div class="row">
          <?php
            $data = [
              [
                "path"  =>  "images/what-we-do/activities.png",
                "title" =>  "Activities"
              ],
              [
                "path"  =>  "images/what-we-do/beta-thalassemia-prevention.png",
                "title" =>  "THalassemia Prevention"
              ],
              [
                "path"  =>  "images/what-we-do/blood-donation.png",
                "title" =>  "Blood Donation"
              ],
              [
                "path"  =>  "images/what-we-do/blood-adequecy.png",
                "title" =>  "Blood Adequacy"
              ],
              [
                "path"  =>  "images/what-we-do/beta-thalassemia.png",
                "title" =>  "Beta Thalassemia"
              ]
            ];
            foreach($data as $row):
          ?>
          <div class="col-sm-4">
            <img class="media-image" src="<?= $row["path"] ?>" alt="<?= $row["title"] ?>" />
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

  </main>

  <?php require_once "footer.php" ?>
</body>

</html>