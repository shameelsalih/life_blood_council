const animationNames = [
  "slideFromRight",
  "slideFromLeft",
  "slideFromTop",
  "slideFromBottom",
  "bounce",
  "fadeIn"
];
const animationOffset = 100; // px 
function checkElementVisibility() {
  const totalTime = parseFloat(getComputedStyle(document.documentElement).getPropertyValue("--custom-animation-duration")) + parseFloat(getComputedStyle(document.documentElement).getPropertyValue("--custom-animation-delay"));
  const elements = document.querySelectorAll(".animate:not(.in-view)");
  elements.forEach(element => {
    const elementPosition = element.getBoundingClientRect();
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
    const isElementInViewport = (elementPosition.top + animationOffset < windowHeight) && (elementPosition.top + elementPosition.height - animationOffset > 0);
    if (isElementInViewport) {
      console.log("inside view port", element);
      element.classList.add("in-view", "animating", animationNames[Math.floor(Math.random() * animationNames.length)]);
      setTimeout(() => {
        element.classList.remove("animate", "animating");
      }, totalTime);
    }
  })
}

window.addEventListener('scroll', checkElementVisibility);
document.addEventListener('DOMContentLoaded', () => {
  checkElementVisibility();
  document.querySelectorAll(`[data-bs-toggle="pill"]`).forEach(element => {
    element.addEventListener('click', checkElementVisibility);
  });
});