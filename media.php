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
            foreach($data as $key => $row):
          ?>
          <div class="col-sm-4">
            <img class="media-image" src="<?= $row["path"] ?>" data-current-index="<?= $key ?>" alt="<?= $row["title"] ?>" />
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="media-preview" class="d-none">
      <div class="media-preview">
        <!-- <div class="media-close">
          <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
            <g id="Menu / Close_MD">
              <path id="Vector" d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
          </svg>
        </div> -->
        <div class="media-nav" data-mode="prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7071 4.29289C12.0976 4.68342 12.0976 5.31658 11.7071 5.70711L6.41421 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H6.41421L11.7071 18.2929C12.0976 18.6834 12.0976 19.3166 11.7071 19.7071C11.3166 20.0976 10.6834 20.0976 10.2929 19.7071L3.29289 12.7071C3.10536 12.5196 3 12.2652 3 12C3 11.7348 3.10536 11.4804 3.29289 11.2929L10.2929 4.29289C10.6834 3.90237 11.3166 3.90237 11.7071 4.29289Z"/>
          </svg>
        </div>
        <div class="content">
          <img id="media-preview-image" class="media-preview-image" src="" alt="Media Image">
        </div>
        <div class="media-nav" data-mode="next">
          <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z"/>
          </svg>
        </div>
      </div>
    </section>

  </main>

  <?php require_once "footer.php" ?>
  <script>
    let __currentImageIndex = 0;
    const previewParent = document.getElementById("media-preview");
    const previewImage = document.getElementById("media-preview-image");
    const mediaImages = document.querySelectorAll(".media-image");
    const setCurrentImage = () => {
      if(!mediaImages[__currentImageIndex]) {
        __currentImageIndex = __currentImageIndex < 0 ? mediaImages.length - 1 : 0;
      }
      previewImage.src = mediaImages[__currentImageIndex].src;
    }

    const hideImagePreview = () => {
      document.querySelector("body").style.overflow = "auto";
      previewParent.classList.add("d-none");
    }

    const showImagePreview = (e) => {
      __currentImageIndex = e.currentTarget.dataset.currentIndex;
      setCurrentImage();
      document.querySelector("body").style.overflow = "hidden";
      previewParent.classList.remove("d-none");
    }

    const changeImage = (e) => {
      const mode = e.currentTarget.dataset.mode;
      mode == "next" ? ++__currentImageIndex : --__currentImageIndex;
      setCurrentImage();
    }

    mediaImages.forEach(mediaImage => {
      mediaImage.addEventListener("click", showImagePreview);
    });
    document.querySelector(".media-preview .content").addEventListener("click", hideImagePreview);
    document.querySelectorAll(".media-preview .media-nav").forEach(mediaNav => {
      mediaNav.addEventListener("click", changeImage);
    });
  </script>
</body>

</html>