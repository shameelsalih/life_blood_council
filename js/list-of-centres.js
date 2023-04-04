
const setCities = () => {
  let innerHTML = ``;
  Object.values(__cities[document.getElementById("ListOfCentresDistrict").value]).map(city => {
    innerHTML += `
      <option value="${city.Code}">${city.Name}</option>
      `;
  })
  document.getElementById("ListOfCentresCity").innerHTML = innerHTML;
}
setCities();

var __mapURLs = [];
const setMap = () => {
  document.getElementById("mapIframe").src = __mapURLs[`${document.getElementById("ListOfCentresCity").value}_${document.getElementById("ListOfCentresType").value}`];
}

fetch("/assets/map-urls.json").then(res => res.json()).then(res => {
  __mapURLs = res;
  setMap();
});

var __listOfCentres = [];

const setListOfCentres = () => {
  const currentKey = `${document.getElementById("ListOfCentresCity").value}_${document.getElementById("ListOfCentresType").value}`;
  let innerHTML = ``;
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
    `);
  })
  document.getElementById("listOfCentres").innerHTML = innerHTML;
}

fetch("/assets/list-of-centres.json").then(res => res.json()).then(res => {
  __listOfCentres = res;
  setListOfCentres();
});

document.getElementById("ListOfCentresDistrict").addEventListener("change", setCities);
document.getElementById("ListOfCentresCity").addEventListener("change", setMap);
document.getElementById("ListOfCentresCity").addEventListener("change", setListOfCentres);
document.getElementById("ListOfCentresType").addEventListener("change", setMap);
document.getElementById("ListOfCentresType").addEventListener("change", setListOfCentres);