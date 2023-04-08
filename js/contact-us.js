
const contactSwitcher = document.querySelector("#ContactRequirement");

const setContactForm = () => {
  document.querySelectorAll(".contact-show-hide").forEach(element => element.classList.add("d-none"));
  document.querySelectorAll(".contact-show-hide input, .contact-show-hide select").forEach(element => element.setAttribute("disabled", true));
  document.querySelectorAll(`.${contactSwitcher.value}`).forEach(element => element.classList.remove("d-none"));
  document.querySelectorAll(`.${contactSwitcher.value} input, .${contactSwitcher.value} select`).forEach(element => element.removeAttribute("disabled"));
}
contactSwitcher.addEventListener("change", setContactForm);
contactSwitcher.dispatchEvent(new Event("change"));
const submitContactUsForm = (e) => {
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
      contactSwitcher.form.reset();
      __customAlertContent.innerHTML = res.message;
      __customAlertModal.show();
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
document.getElementById("contactUsForm").addEventListener("submit", submitContactUsForm);