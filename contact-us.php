<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "head.php" ?>
</head>

<body>
  
  <?php require_once "header.php" ?>

  <main id="main-body">
    <section id="main-banner" class="animate">
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

    <section id="contact-us-form" class="py-5 mb-5 animate">
      <form class="custom-half">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="primary-color fs-6em">Contact <span class="secondary-color">Us</span></h3>
            </div>
              
            <div class="col-sm-6">
              <div class="form-group custom">
                <label class="form-label" for="ContactRequirement">Requirement</label>
                <select class="form-select" name="ContactRequirement" id="ContactRequirement">
                  <option value="">- Select - </option>
                  <option value="Register with us as a blood donor">Register with us as a blood donor</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="fw-bold">Blood donation is a very significant act of giving a fighting chance of survival to one of your fellow citizens. A dedicated blood donor, when eligible to donate, has the option of going to the nearest blood centre to donate blood. Please pick the blood centre which is most convenient to you from the list of blood centres. We would request you to use this option of not waiting for our call, but going to the nearest blood centres. However, you may register with us by providing the following information</p>
            </div>
          </div>
          <div class="py-5">
            <div class="row">
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="FullName">Your Name</label>
                  <input type="text" class="form-control" placeholder="Enter your Name" name="FullName" id="FullName">
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="Mobile">Your Telephone Number</label>
                  <input type="tel" class="form-control" placeholder="Enter your Telephone Number" name="Mobile" id="Mobile">
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="Email">Your Email Id</label>
                  <input type="text" class="form-control" placeholder="Enter your Email" name="Email" id="Email">
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="BloodGroup">Your Blood Group</label>
                  <input type="text" class="form-control" placeholder="Enter your Blood Group" name="BloodGroup" id="BloodGroup">
                </div>
              </div>
    
              <div class="col-sm-12">
                <div class="form-group custom">
                  <label class="form-label" for="ResidentialAddress">Your Residential Address</label>
                  <input type="text" class="form-control" placeholder="Enter your Residential Address" name="ResidentialAddress" id="ResidentialAddress">
                </div>
              </div>
    
              <div class="col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="BloodDonationFrequency">Your Desired Frequency of Blood Donation</label>
                  <select class="form-select" name="BloodDonationFrequency" id="BloodDonationFrequency">
                    <option value="">- Select - </option>
                    <option value="3 Months">3 Months</option>
                    <option value="6 Months">6 Months</option>
                    <option value="12 Months">12 Months</option>
                    <option value="24 Months">24 Months</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>

              <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-custom-primary px-10vw">
                  Let's Connect
                </button>
              </div>
    
            </div>
          </div>
        </div>
      </form>
    </section>

  </main>

  <?php require_once "footer.php" ?>
</body>

</html>