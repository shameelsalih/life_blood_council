<?php $request_uri = $_SERVER["REQUEST_URI"] ?? "" ?>
  <header class="container-fluid p-0 animate"  data-animation-name="fadeIn">
    <!-- Main Header -->
    <div class="main-header">
      <div class="row">
        <div class="col-sm-4">
          <a href="index.html" class="nav-brand">
            <img src="images/logo.png" alt="Logo">
          </a>
        </div>
        <div class="col-sm-8 d-flex align-items-center">
          <div class="right-content d-flex justify-content-end gap-sm-3 gap-1 gap-sm-2 align-items-center w-100">
            <a href="tel:+919820146448" class="header-right-links">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.73 18.64">
                <path class="cls-1"
                  d="M4.35,0l.12,0a.52.52,0,0,1,.46.28C5.61,1.48,6.3,2.64,7,3.81l.13.2a1.14,1.14,0,0,1,0,1.44,7.53,7.53,0,0,1-.87.82c-.18.16-.4.28-.58.44a2.73,2.73,0,0,0-.43.47.5.5,0,0,0,0,.55A13.6,13.6,0,0,0,11,13.52a.51.51,0,0,0,.64-.06,6,6,0,0,0,.55-.58c.26-.3.5-.62.76-.91a2.41,2.41,0,0,1,.46-.37,1.19,1.19,0,0,1,1.28,0L18,13.49a1.58,1.58,0,0,1,.72,1.66A3.65,3.65,0,0,1,16,18.25a7.36,7.36,0,0,1-5.51-.32,19.57,19.57,0,0,1-9-8.12A11.06,11.06,0,0,1,.09,6L0,5.27v-1l0-.17a10.91,10.91,0,0,1,.31-1.4A3.63,3.63,0,0,1,3,.13c.24-.06.5-.09.75-.13Z">
                </path>
              </svg>
              +91 98201 46448
            </a>
            <span class="divider"></span>
            <a href="javascript:void()" class="header-right-links">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.21 19.83">
                <path class="cls-1"
                  d="M7.19,0H8L8.7.08A7.74,7.74,0,0,1,12,1.24a6.81,6.81,0,0,1,2.87,3.48A5.33,5.33,0,0,1,15,8.2a16.73,16.73,0,0,1-1.43,3.21,62.53,62.53,0,0,1-5.75,8.28c-.16.19-.25.19-.41,0a62.08,62.08,0,0,1-5.75-8.3A15,15,0,0,1,.24,8.19C.12,7.8.08,7.4,0,7V6.74C.05,6.36.08,6,.15,5.61A6.58,6.58,0,0,1,2.26,2,7.42,7.42,0,0,1,5.74.23C6.22.13,6.71.07,7.19,0Zm.43,9.34a2.6,2.6,0,0,0,2.72-2.46A2.62,2.62,0,0,0,7.61,4.42,2.61,2.61,0,0,0,4.89,6.88,2.6,2.6,0,0,0,7.62,9.34Z">
                </path>
              </svg>
              Santacruz, Mumbai
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- ./Main Header -->
  </header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-xl navbar-dark sticky animate" data-animation-name="fadeIn">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0 py-0 py-lg-1">
          <li class="nav-item">
            <a class="nav-link<?= preg_match("/^(\/$)|(\/\?.*)/", $request_uri) ? " active" : "" ?>" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?= preg_match("/^\/about-us.*/", $request_uri) ? " active" : "" ?>" href="about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?= preg_match("/^\/what-we-do.*/", $request_uri) ? " active" : "" ?>" href="what-we-do">What we do</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle<?= preg_match("/^\/(thalassemia(.*))|(blood-donation)|(faqs)/", $request_uri) ? " active" : "" ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Knowledge Hub
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="blood-donation">Blood Donation</a></li>
              <li><a class="dropdown-item" href="blood-donation#granulocyte-donation">Granulocyte Donation</a></li>
              <li><a class="dropdown-item" href="blood-donation#bombay-blood-group">Bombay Blood Group</a></li>
              <li><a class="dropdown-item" href="blood-donation#stem-cell-donation">Stem Cell Registry</a></li>
              <li><a class="dropdown-item" href="thalassemia?tab=prevention">Thalassemia Prevention</a></li>
              <li><a class="dropdown-item" href="thalassemia?tab=care">Thalassemia Care</a></li>
              <li><a class="dropdown-item" href="thalassemia?tab=cure">Thalassemia Cure</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link<?= preg_match("/^\/events.*/", $request_uri) ? " active" : "" ?>" href="events">Event Calendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?= preg_match("/^\/support-centers.*/", $request_uri) ? " active" : "" ?>" href="support-centers">Support Centers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?= preg_match("/^\/alliances.*/", $request_uri) ? " active" : "" ?>" href="alliances">Our Alliances</a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?= preg_match("/^\/contribute.*/", $request_uri) ? " active" : "" ?>" href="contribute">Contribute</a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?= preg_match("/^\/contact-us.*/", $request_uri) ? " active" : "" ?>" href="contact-us">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?= preg_match("/^\/media.*/", $request_uri) ? " active" : "" ?>" href="media">Media</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- ./Navbar -->
  