const animationNames = [
  "slideFromRight",
  "slideFromLeft",
  "slideFromTop",
  "slideFromBottom",
  // "bounce",
  "fadeIn"
];
const animationOffset = 100; // px 
const checkElementVisibility = () => {
  const totalTime = parseFloat(getComputedStyle(document.documentElement).getPropertyValue("--custom-animation-duration")) + parseFloat(getComputedStyle(document.documentElement).getPropertyValue("--custom-animation-delay"));
  const elements = document.querySelectorAll(".animate:not(.in-view)");
  elements.forEach(element => {
    const elementPosition = element.getBoundingClientRect();
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
    const isElementInViewport = (elementPosition.top + animationOffset < windowHeight) && (elementPosition.top + elementPosition.height - animationOffset > 0);
    if (isElementInViewport) {
      element.classList.add("in-view", "animating", element.dataset.animationName ? element.dataset.animationName : animationNames[Math.floor(Math.random() * animationNames.length)]);
      setTimeout(() => {
        element.classList.remove("animate", "animating");
      }, totalTime);
    }
  })
}

const changeCurrentURL = (e) => {
  const tabTarget = e.target.dataset.bsTarget.substr(1).split("-");
  const params = new URLSearchParams(window.location.search);
  params.set(tabTarget[0], tabTarget.slice(1).join('-'));
  history.pushState(null, null, window.location.pathname + '?' + params.toString());
}

window.addEventListener('scroll', checkElementVisibility);
document.addEventListener('DOMContentLoaded', () => {
  checkElementVisibility();
  document.querySelectorAll(`[data-bs-toggle="pill"]`).forEach(element => {
    element.addEventListener('click', checkElementVisibility);
    element.addEventListener('click', changeCurrentURL);
  });
});