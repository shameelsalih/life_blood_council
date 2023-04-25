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
        <a class="btn btn-custom-secondary mt-3 mt-lg-5" href="blood-donation#blood-donation">Know More</a>
        <a class="btn btn-custom-primary mt-3 mt-lg-5" href="#donation-form">Support Us</a>
      </div>
    </section>

    <section id="donation-form" class="py-5 mb-5 animate">
      <form id="donationForm" class="custom-half">
        <div class="container">
          <div class="col-lg-9 mx-auto">
            <h3 class="primary-color text-center">Donation Form</h3>
            <h5 class="secondary-color text-center my-sm-5">Donor Details</h5>
            <div class="row">
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="FirstName">First Name</label>
                  <input type="text" class="form-control" placeholder="Enter your First Name" name="FirstName" id="FirstName" required>
                  <p id="errorFirstName" class="form-validation-error"></p>
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="LastName">Last Name</label>
                  <input type="text" class="form-control" placeholder="Enter your Last Name" name="LastName" id="LastName" required>
                  <p id="errorLastName" class="form-validation-error"></p>
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="Phone">Phone</label>
                  <input type="tel" class="form-control" placeholder="Enter your Phone" name="Phone" id="Phone" required>
                  <p id="errorPhone" class="form-validation-error"></p>
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="Email">Email</label>
                  <input type="email" class="form-control" placeholder="Enter your Email" name="Email" id="Email" required>
                  <p id="errorEmail" class="form-validation-error"></p>
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="Nationality">Nationality</label>
                  <input type="text" class="form-control" placeholder="Enter your Nationality" name="Nationality" id="Nationality" required>
                  <p id="errorNationality" class="form-validation-error"></p>
                </div>
              </div>
    
              <div class="half col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="PANNo">PAN No</label>
                  <input type="text" class="form-control" placeholder="Enter your PAN No" name="PANNo" id="PANNo" required>
                  <p id="errorPANNo" class="form-validation-error"></p>
                </div>
              </div>
    
              <div class="col-sm-12">
                <div class="form-group custom">
                  <label class="form-label" for="Address">Address</label>
                  <input type="text" class="form-control" placeholder="Enter your Address" name="Address" id="Address" required>
                  <p id="errorAddress" class="form-validation-error"></p>
                </div>
              </div>
    
              <div class="col-sm-6">
                <div class="form-group custom">
                  <label class="form-label" for="DonationTowards">Donation Towards</label>
                  <select class="form-select" name="DonationTowards" id="DonationTowards" required>
                    <option value="">- Select - </option>
                    <option value="Blood Donation">Blood Donation</option>
                  </select>
                  <p id="errorDonationTowards" class="form-validation-error"></p>
                </div>
              </div>
    
              <div class="col-lg-8 mx-auto text-center">
                <h5 class="secondary-color">Mode of Payment</h5>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group custom">
                        <input type="radio" name="PaymentMode" id="PaymentModeUPI" value="UPI" required>
                        <label class="form-label" for="PaymentModeUPI">UPI</label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group custom">
                        <input type="radio" name="PaymentMode" id="PaymentModeNetBanking" value="Net Banking" required>
                        <label class="form-label" for="PaymentModeNetBanking">Net Banking</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <p id="errorPaymentMode" class="form-validation-error"></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 d-flex justify-content-center">
                <div class="content">
                  <input type="hidden" name="formId" value="donationForm">
                  <button type="submit" class="btn btn-custom-primary px-10vw d-block">
                    Pay Now
                  </button>
                  <a href="javascript:paymentSubmitModalShow()" class="d-block pt-3">Already Paid? Click here to submit receipt.</a>
                </div>
              </div>
    
            </div>
          </div>
        </div>
      </form>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="paymentShowModal" tabindex="-1" aria-labelledby="paymentShowModalLabel" aria-hidden="true"  data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog custom-align-center modal-lg">
        <form id="paymentSubmitForm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="paymentShowModalLabel">Payment Screenshot Submission</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">

              <div class="col-sm-12">
                <div class="form-group custom">
                  <label class="form-label" for="PaymentId">Payment Id</label>
                  <input type="text" class="form-control" placeholder="Enter your Payment Id generated by our system" name="PaymentId" id="PaymentId" required>
                  <p class="form-validation-error" id="errorPaymentId"></p>
                </div>
              </div>
    
              <div class="col-sm-12">
                <div class="form-group custom">
                  <label class="form-label" for="BankReferenceNumber">Bank Reference Number</label>
                  <input type="text" class="form-control" placeholder="Enter your Bank Reference Number" name="BankReferenceNumber" id="BankReferenceNumber" required>
                  <p class="form-validation-error" id="errorBankReferenceNumber"></p>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group custom">
                  <label class="form-label" for="Screenshot">Screenshot of Payment</label>
                  <input type="file" class="form-control" placeholder="Upload your payment screenshot" name="Screenshot" id="Screenshot" accept=".jpg,.jpeg,.png" required>
                  <p class="form-validation-error" id="errorScreenshot"></p>
                </div>
              </div>

              
              <div class="col-sm-12">
                <div class="form-group custom">
                  <label class="form-label" for="AnyMessage">Any Message?</label>
                  <input type="text" class="form-control" placeholder="Enter if you have any message" name="AnyMessage" id="AnyMessage">
                  <p class="form-validation-error" id="errorAnyMessage"></p>
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <input type="hidden" name="formId" value="paymentSubmitForm">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="paymentDetailsModal" tabindex="-1" aria-labelledby="paymentDetailsModalLabel" aria-hidden="true"  data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog custom-align-center modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="paymentDetailsModalLabel">BANK DETAILS FOR REMITTANCE</h5>
          </div>
          <div class="modal-body">
            <p>
              LifeBlood Council is a registered Section 8 Company championing Blood Adequacy and Thalassemia Prevention, Cure & Care. All Donations to LifeBlood Council will get tax exemption under Section 80G of Income Tax Act.
            </p>
            <p>
              Bank : <b>HDFC Bank</b><br>
              Account Name : <b>LifeBlood Council</b><br>
              Account Type : <b>Savings</b><br>
              Account No : <b>99900019012023</b><br>
              Bank Address : <b>Prudential Building, Ground Floor, Hiranandani Business Park, Powai, Mumbai 400 076, Maharashtra</b><br>
              IFSC Code : <b>HDFC0000239</b>
            </p>
            <p class="primary-color">
              NOTE : All Donations need to be from INDIAN RESIDENT ACCOUNTS and Remittances from any NRE/NRO Account cannot be accepted at present
            </p>
            <p>
              Your Payment Id : <span id="payment-id"></span>
            </p>
            <p>
              Please use this for future references.
            </p>
            <p class="text-center">
              THANK YOU FOR YOUR KIND SUPPORT FOR THIS NOBLE CAUSE
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="paymentSubmitModalShow()" data-bs-dismiss="modal" aria-label="Close">I noted all the details</button>
          </div>
        </div>
      </div>
    </div>

  </main>

  <?php require_once "footer.php" ?>
  <script src="js/contribute.js<?= $assets_version ?>" defer></script>

</body>

</html>