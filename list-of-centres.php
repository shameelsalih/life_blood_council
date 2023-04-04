<?php
  $districts = [
    "MH" => [
      "Name"  => "Maharashtra",
      "Code"  =>  "MH"
    ]
  ];

  $cities = [
    "MH"  =>  [
      [
        "Name"      =>  "Ahmed Nagar",
        "Code"      =>  "AN"
      ],
      [
        "Name"      =>  "Akola",
        "Code"      =>  "AL"
      ],
      [
        "Name"      =>  "Amravati",
        "Code"      =>  "AM"
      ],
      [
        "Name"      =>  "Aurangabad Nagar",
        "Code"      =>  "AR"
      ],
      [
        "Name"      =>  "Beed",
        "Code"      =>  "BD"
      ],
      [
        "Name"      =>  "Bhandara",
        "Code"      =>  "BR",
      ],
      [
        "Name"      =>  "Buldhana",
        "Code"      =>  "BL",
      ],
      [
        "Name"      =>  "Chandrapur",
        "Code"      =>  "CH",
      ],
      [
        "Name"      =>  "Dhule",
        "Code"      =>  "DH",
      ],
      [
        "Name"      =>  "Gadchiroli",
        "Code"      =>  "GC",
      ],
      [
        "Name"      =>  "Gondia",
        "Code"      =>  "GD",
      ],
      [
        "Name"      =>  "Hingoli",
        "Code"      =>  "HG",
      ],
      [
        "Name"      =>  "Jalgaon",
        "Code"      =>  "JG",
      ],
      [
        "Name"      =>  "Jalna",
        "Code"      =>  "JN",
      ],
      [
        "Name"      =>  "Kohlapur",
        "Code"      =>  "KP",
      ],
      [
        "Name"      =>  "Latur",
        "Code"      =>  "LT",
      ],
      [
        "Name"      =>  "Mumbai",
        "Code"      =>  "MM",
      ],
      [
        "Name"      =>  "Nagpur",
        "Code"      =>  "NG",
      ],
      [
        "Name"      =>  "Nanded",
        "Code"      =>  "ND",
      ],
      [
        "Name"      =>  "Nandurbar",
        "Code"      =>  "NB",
      ],
      [
        "Name"      =>  "Nashik",
        "Code"      =>  "NS",
      ],
      [
        "Name"      =>  "Osmanabad",
        "Code"      =>  "OB",
      ],
      [
        "Name"      =>  "Palghar",
        "Code"      =>  "PG",
      ],
      [
        "Name"      =>  "Parbhanai",
        "Code"      =>  "PB",
      ],
      [
        "Name"      =>  "Pune",
        "Code"      =>  "PN",
      ],
      [
        "Name"      =>  "Raigad",
        "Code"      =>  "RG",
      ],
      [
        "Name"      =>  "Ratnagiri",
        "Code"      =>  "RN",
      ],
      [
        "Name"      =>  "Sangli",
        "Code"      =>  "SL",
      ],
      [
        "Name"      =>  "Satara",
        "Code"      =>  "ST",
      ],
      [
        "Name"      =>  "Sindhudurg",
        "Code"      =>  "SD",
      ],
      [
        "Name"      =>  "Solapur",
        "Code"      =>  "SP",
      ],
      [
        "Name"      =>  "Wardha",
        "Code"      =>  "WR",
      ],
      [
        "Name"      =>  "Washim",
        "Code"      =>  "WS",
      ],
      [
        "Name"      =>  "Yavatmal",
        "Code"      =>  "YM",
      ],
    ]
  ];

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
                    <select class="form-select secondary-color" name="ListOfCentresDistrict" id="ListOfCentresDistrict">
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
            var __districts = <?= json_encode($districts); ?>;
            var __types = <?= json_encode($types); ?>;
            var __cities = <?= json_encode($cities); ?>;
          </script>
          <script src="js/list-of-centres.js<?= $assets_version ?>" defer></script>