var __dataVersion = "?v=1.001";
var __loadingContent = true;
var __states = {};
const setStates = () => {
  if(Object.keys(window["__states"]).length < 1) {
    fetch("/assets/states.json" + __dataVersion).then(res => res.json()).then(res => {
      __states = res;
      setStates();
    });
    return false;
  }
  let innerHTML = ``;
  Object.values(__states).map(city => {
    innerHTML += `
      <option value="${city.Code}">${city.Name}</option>
      `;
  })
  document.getElementById("ListOfCentresState").innerHTML = innerHTML;
  setCities();
}

var __cities = {};
const setCities = () => {
  if(Object.keys(window["__cities"]).length < 1) {
    fetch("/assets/cities.json" + __dataVersion).then(res => res.json()).then(res => {
      __cities = res;
      setCities();
    });
    return false;
  }
  let innerHTML = ``;
  Object.values(__cities[document.getElementById("ListOfCentresState").value]).map(city => {
    innerHTML += `
      <option value="${city.Code}">${city.Name}</option>
      `;
  })
  document.getElementById("ListOfCentresCity").innerHTML = innerHTML;
  if(window["onLoad"]) {
    window["onLoad"]  = false;
    document.getElementById("ListOfCentresCity").value = "MM";
    document.getElementById("ListOfCentresCity").dispatchEvent(new Event("change"));
  }
  setListOfCentres();
}

var __listOfCentres = {};
const setListOfCentres = () => {
  if(Object.keys(window["__listOfCentres"]).length < 1) {
    fetch("/assets/list-of-centres.json" + __dataVersion).then(res => res.json()).then(res => {
      __listOfCentres = res;
      setListOfCentres();
    });
    return false;
  }
  const currentKey = `${document.getElementById("ListOfCentresCity").value}_${document.getElementById("ListOfCentresType").value}`;
  let innerHTML = ``;
  let emptyContent = true;
  Object.values(__listOfCentres).map(centre => {
    currentKey == centre.Key && (innerHTML += `
      <div class="col-sm-6">
        <div class="box-shadow-card">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.21 19.83">
              <path class="cls-1" d="M7.19,0H8L8.7.08A7.74,7.74,0,0,1,12,1.24a6.81,6.81,0,0,1,2.87,3.48A5.33,5.33,0,0,1,15,8.2a16.73,16.73,0,0,1-1.43,3.21,62.53,62.53,0,0,1-5.75,8.28c-.16.19-.25.19-.41,0a62.08,62.08,0,0,1-5.75-8.3A15,15,0,0,1,.24,8.19C.12,7.8.08,7.4,0,7V6.74C.05,6.36.08,6,.15,5.61A6.58,6.58,0,0,1,2.26,2,7.42,7.42,0,0,1,5.74.23C6.22.13,6.71.07,7.19,0Zm.43,9.34a2.6,2.6,0,0,0,2.72-2.46A2.62,2.62,0,0,0,7.61,4.42,2.61,2.61,0,0,0,4.89,6.88,2.6,2.6,0,0,0,7.62,9.34Z">
              </path>
            </svg>
          </div>
          <div class="content">
            <h6 class="secondary-color">${centre.Name}</h6>
            <!-- <p class="mb-0">Contact: <a href="tel:${centre.Contact}">${centre.Contact}</a></p> -->
            <p class="mb-0">Contact: ${centre.Contact}</p>
            <p class="mb-0">Address: ${centre.Address}</p>
          </div>
        </div>
      </div>
    `) && (emptyContent = false);
  });
  if(emptyContent) {
    innerHTML = `<div class="d-flex justify-content-center py-5">No Centres to Display</div>`;
  }
  document.getElementById("listOfCentres").innerHTML = innerHTML;
  setMap();
}

var __mapURLs = {};
const setMap = () => {
  if(Object.keys(window["__mapURLs"]).length < 1) {
    fetch("/assets/map-urls.json" + __dataVersion).then(res => res.json()).then(res => {
      __mapURLs = res;
      setMap();
    });
    return false;
  }
  __loadingContent = false;
  const mapUrl = __mapURLs[`${document.getElementById("ListOfCentresCity").value}_${document.getElementById("ListOfCentresType").value}`];
  if(!mapUrl) {
    document.getElementById("mapIframe").style.display = "none";
    return false;
  }
  document.getElementById("mapIframe").style.display = "block";
  document.getElementById("mapIframe").src = mapUrl;
}

document.getElementById("ListOfCentresState").addEventListener("change", setCities);
document.getElementById("ListOfCentresCity").addEventListener("change", setListOfCentres);
document.getElementById("ListOfCentresType").addEventListener("change", setListOfCentres);

setStates();

let checkApiLoaded;
document.addEventListener('DOMContentLoaded', () => {
  checkApiLoaded = setInterval(() => {
    if(!__loadingContent) {
      clearInterval(checkApiLoaded);
      document.getElementById("ListOfCentresState").value = "MH";
      window["onLoad"]  = true;
      document.getElementById("ListOfCentresState").dispatchEvent(new Event("change"));
    }
  }, 500);
});