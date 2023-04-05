const animationNames = [
  "slideFromRight",
  "slideFromLeft",
  "slideFromTop",
  "slideFromBottom",
  // "bounce",
  "fadeIn"
];
const animationOffset = 20; // px 
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

const fixNavBar = () => {
  return false;
  const mainHeaderElement = document.querySelector(".main-header");
  const mainHeaderHeight = mainHeaderElement.getBoundingClientRect().height;
  const navBarElement = document.querySelector(".navbar");
  const navBarHeight = navBarElement.getBoundingClientRect().height;
  document.querySelector("header").style.paddingBottom = `${navBarHeight + parseInt(document.defaultView.getComputedStyle(navBarElement).paddingTop) + parseInt(document.defaultView.getComputedStyle(navBarElement).paddingBottom) +  parseInt(document.defaultView.getComputedStyle(mainHeaderElement).paddingBottom)}px`;
  if(window.scrollY > mainHeaderHeight) {
    navBarElement.classList.add("fixed");
  } else {
    // navBarElement.classList.remove("fixed");
  }
}

window.addEventListener('scroll', checkElementVisibility);
window.addEventListener('scroll', fixNavBar);
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll(`[data-bs-toggle="pill"]`).forEach(element => {
    element.addEventListener('click', checkElementVisibility);
    element.addEventListener('click', changeCurrentURL);
  });
  checkElementVisibility();
});