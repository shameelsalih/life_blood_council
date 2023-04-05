<?php
  $types = [
    "BC" => [
      "Name"  =>  "Blood Centres",
      "Code"  =>  "BC"
    ],
    "BA" => [
      "Name"  =>  "Blood Centres with Apheresis",
      "Code"  =>  "BA"
    ],
    "TA" => [
      "Name"  =>  "Thalassemia Assns",
      "Code"  =>  "TA"
    ]
  ];
?>

          <section id="list-of-centres" class="animate">
            <div class="container">
              <div class="row">
                  
                <div class="col-sm-4">
                  <div class="form-group custom">
                    <select class="form-select secondary-color" name="ListOfCentresType" id="ListOfCentresType">
                      <?php foreach($types as $row) echo "<option value=\"$row[Code]\">$row[Name]</option>"; ?>
                    </select>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group custom">
                    <select class="form-select secondary-color" name="ListOfCentresState" id="ListOfCentresState">
                      <?php foreach($districts as $row) echo "<option value=\"$row[Code]\">$row[Name]</option>"; ?>
                    </select>
                  </div>
                </div>
                  
                <div class="col-sm-4">
                  <div class="form-group custom">
                    <select class="form-select secondary-color" name="ListOfCentresCity" id="ListOfCentresCity">
                    </select>
                  </div>
                </div>

              </div>
            </div>
            <div class="container pt-lg-5">
              <div class="row">
                <div class="col-lg-12 pb-3">
                  <iframe id="mapIframe" src="javascript:void(0);" width="100%" height="480"></iframe>
                </div>
                <div class="col-lg-12">
                  <div class="row" id="listOfCentres">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <script>
            var __types = <?= json_encode($types); ?>;
          </script>
          <script src="js/list-of-centres.js<?= $assets_version ?>" defer></script>