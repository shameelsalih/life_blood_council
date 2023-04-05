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
          <div class="icon"></div>
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