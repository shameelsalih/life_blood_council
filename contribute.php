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

    <section id="donation-form" class="py-5 mb-5 animate">
      <form class="custom-half">
        <div class="container">
          <div class="col-lg-9 mx-auto">
            <h3 class="primary-color text-center">Donation Form</h3>
            <h5 class="secondary-color text-center my-5">Donor Details</h5>
            <div class="row">
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="FirstName">First Name</label>
                  <input type="text" class="form-control" placeholder="Enter your First Name" name="FirstName" id="FirstName">
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="LastName">Last Name</label>
                  <input type="text" class="form-control" placeholder="Enter your Last Name" name="LastName" id="LastName">
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="Phone">Phone</label>
                  <input type="tel" class="form-control" placeholder="Enter your Phone" name="Phone" id="Phone">
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="Email">Email</label>
                  <input type="email" class="form-control" placeholder="Enter your Email" name="Email" id="Email">
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="Nationality">Nationality</label>
                  <input type="text" class="form-control" placeholder="Enter your Nationality" name="Nationality" id="Nationality">
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="PANNo">PAN No</label>
                  <input type="text" class="form-control" placeholder="Enter your PAN No" name="PANNo" id="PANNo">
                </div>
              </div>
    
              <div class="col-sm-12">
                <div class="form-group custom">
                  <label class="form-label" for="Address">Address</label>
                  <input type="text" class="form-control" placeholder="Enter your Address" name="Address" id="Address">
                </div>
              </div>
    
              <div class="col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="DonationTowards">Donation Towards</label>
                  <select class="form-select" name="DonationTowards" id="DonationTowards">
                    <option value="">- Select - </option>
                    <option value="Blood Donation">Blood Donation</option>
                  </select>
                </div>
              </div>
    
              <div class="col-lg-8 mx-auto text-center">
                <h5 class="secondary-color">Mode of Payment</h5>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group custom">
                        <input type="radio" name="PaymentMode" id="PaymentModeUPI">
                        <label class="form-label" for="PaymentModeUPI">UPI</label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group custom">
                        <input type="radio" name="PaymentMode" id="PaymentModeNetBanking">
                        <label class="form-label" for="PaymentModeNetBanking">Net Banking</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-custom-primary px-10vw">
                  Pay Now
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