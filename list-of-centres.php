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
      "Address" =>  "Here comes the address of Ghansoli"
    ],
    [
      "Name"    =>  "Life Blood Foundation (Vashi)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Vashi"
    ],
    [
      "Name"    =>  "Life Blood Foundation (Panvel)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Panvel"
    ],
    [
      "Name"    =>  "Life Blood Foundation (Santacruz)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Santacruz"
    ],
    [
      "Name"    =>  "Life Blood Foundation (Andheri)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Andheri"
    ],
    [
      "Name"    =>  "Life Blood Foundation (Agra)",
      "Contact" =>  "+91 9876543210",
      "Address" =>  "Here comes the address of Agra"
    ]
  ];

  $map_urls = [
    "NM_DC" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
    "NM_BD" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
    "MM_DC" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
    "MM_BD" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
    "AG_DC" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
    "AG_BD" =>  "https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F",
  ]
?>

          <section id="list-of-centres" class="py-5">
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
                      <?php foreach($cities[array_key_first($districts)] as $row) echo "<option value=\"$row[Code]\">$row[Name]</option>"; ?>
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
              <iframe src="https://www.google.com/maps/d/embed?mid=18PwLoD-_5w3qOa1jzTu3DYBWxJI_rlg&ehbc=2E312F" width="100%" height="480"></iframe>
            </div>
          </section>