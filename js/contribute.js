
var __paymentModal = new bootstrap.Modal(document.getElementById('paymentShowModal'));
const paymentSubmitModalShow = () => {
  setTimeout(() => {
    __paymentModal.show();
  }, 500);
}

const submitDonationForm = (e) => {
  e.preventDefault();
  const submitBtn = document.querySelector(`#${e.target.id} [type="submit"]`);
  submitBtn.setAttribute("disabled", true);
  document.querySelectorAll(`#${e.target.id} .form-validation-error`).forEach(elem => elem.innerHTML = "");
  __customAlertContent.innerHTML = "";
  const form = e.target;
  fetch("form-submit", {
    method: 'POST',
    body: new FormData(form)
  }).then(res => res.json()).then(res => {
    submitBtn.removeAttribute("disabled");
    if(res.status) {
      document.getElementById("PaymentId").value = res.data.payment_id;
      document.getElementById("payment-id").innerHTML = res.data.payment_id;
      new bootstrap.Modal(document.getElementById('paymentDetailsModal')).show();
      return;
    }
    if(res.message == "validation") {
      let scrolled = false;
      Object.keys(res.data).forEach(key => {
        const elem = document.getElementById(`error${key}`);
        elem && (elem.innerHTML = res.data[key]);
        if(!scrolled) {
          elem.parentElement.scrollIntoView({ behavior: 'smooth' });
          scrolled = true;
        }
      })
      return;
    }
    __customAlertContent.innerHTML = res.message;
    __customAlertModal.show();
  });
}
document.getElementById("donationForm").addEventListener("submit", submitDonationForm);


const submitPaymentSubmitForm = (e) => {
  e.preventDefault();
  const submitBtn = document.querySelector(`#${e.target.id} [type="submit"]`);
  submitBtn.setAttribute("disabled", true);
  document.querySelectorAll(`#${e.target.id} .form-validation-error`).forEach(elem => elem.innerHTML = "");
  __customAlertContent.innerHTML = "";
  const form = e.target;
  fetch("form-submit", {
    method: 'POST',
    body: new FormData(form)
  }).then(res => res.json()).then(res => {
    submitBtn.removeAttribute("disabled");
    if(res.status) {
      __paymentModal.hide();
      __customAlertContent.innerHTML = res.message;
      setTimeout(() => {
        __customAlertModal.show();
      }, 500);
      return;
    }
    if(res.message == "validation") {
      let scrolled = false;
      Object.keys(res.data).forEach(key => {
        const elem = document.getElementById(`error${key}`);
        elem && (elem.innerHTML = res.data[key]);
        if(!scrolled) {
          elem.parentElement.scrollIntoView({ behavior: 'smooth' });
          scrolled = true;
        }
      })
      return;
    }
    __paymentModal.hide();
    setTimeout(() => {
      __customAlertContent.innerHTML = res.message;
      __customAlertModal.show();
    }, 500);
    setTimeout(() => {
      __paymentModal.show();
    }, 500);
  });
}
document.getElementById("paymentSubmitForm").addEventListener("submit", submitPaymentSubmitForm);