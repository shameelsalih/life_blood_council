<?php
  $districts = [
    "MH" => [
      "Name"  => "Maharashtra",
      "Code"  =>  "MH"
    ],
    "DL" => [
      "Name"  => "Delhi",
      "Code"  =>  "DL"
    ]
  ];

  $cities = [
    "MH"  =>  [
      [
        "Name"      =>  "Navi Mumbai",
        "Code"      =>  "NM",
      ],
      [
        "Name"      =>  "Mumbai",
        "Code"      =>  "MM",
      ]
    ],
    "DL"  =>  [
      [
        "Name"      =>  "Agra",
        "Code"      =>  "AG",

      ]
    ]
  ];

  $types = [
    "DC" => [
      "Name"  =>  "Care Centres",
      "Code"  =>  "DC"
    ],
    "BD" => [
      "Name"  =>  "Blood Donation Camps",
      "Code"  =>  "BD"
    ]
  ];


  $list_of_centres = [
    [
      "Name"    =>  "Life Blood Foundation (Ghansoli)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Ghansoli",
      "Key"     =>  "NM_BD"
    ],
    [
      "Name"    =>  "Life Blood Foundation (Vashi)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Vashi",
      "Key"     =>  "NM_BD"
    ],
    [
      "Name"    =>  "Life Blood Foundation (Panvel)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Panvel",
      "Key"     =>  "NM_DC"
    ],
    [
      "Name"    =>  "Life Blood Foundation (Santacruz)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Santacruz",
      "Key"     =>  "MM_BD"
    ],
    [
      "Name"    =>  "Life Blood Foundation (Andheri)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Andheri",
      "Key"     =>  "MM_DC"
    ],
    [
      "Name"    =>  "Life Blood Foundation (Agra)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Agra",
      "Key"     =>  "AG_DC"
    ],
    [
      "Name"    =>  "Life Blood Foundation Donation Camp (Agra)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Agra",
      "Key"     =>  "AG_BD"
    ]
  ];

  $map_urls = [
    "NM_DC" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
    "NM_BD" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
    "MM_DC" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
    "MM_BD" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
    "AG_DC" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
    "AG_BD" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
  ];
?>

          <section id="list-of-centres" class="py-5 animate">
            <div class="container">
              <div class="row">

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
                  
                <div class="col-sm-4">
                  <div class="form-group custom">
                    <select class="form-select secondary-color" name="ListOfCentresType" id="ListOfCentresType">
                      <?php foreach($types as $row) echo "<option value=\"$row[Code]\">$row[Name]</option>"; ?>
                    </select>
                  </div>
                </div>

              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <iframe id="mapIframe" src="javascript:void(0);" width="100%" height="480"></iframe>
                </div>
                <div class="col-lg-6">
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
            var __listOfCentres = <?= json_encode($list_of_centres); ?>;
            var __mapURLs = <?= json_encode($map_urls); ?>;
          </script>
          <script src="js/list-of-centres.js<?= $assets_version ?>" defer></script>