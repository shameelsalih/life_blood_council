
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

const setMap = () => {
  document.getElementById("mapIframe").src = __mapURLs[`${document.getElementById("ListOfCentresCity").value}_${document.getElementById("ListOfCentresType").value}`];
}
setMap();

const setListOfCentres = () => {
  const currentKey = `${document.getElementById("ListOfCentresCity").value}_${document.getElementById("ListOfCentresType").value}`;
  let innerHTML = ``;
  Object.values(__listOfCentres).map(centre => {
    currentKey == centre.Key && (innerHTML += `
      <div class="box-shadow-card">
        <div class="icon"></div>
        <div class="content">
          <h6 class="secondary-color">${centre.Name}</h6>
          <p class="mb-0">Contact: <a href="tel:${centre.Contact}">${centre.Contact}</a></p>
          <p class="mb-0">Address: ${centre.Address}</p>
        </div>
      </div>
    `);
  })
  document.getElementById("listOfCentres").innerHTML = innerHTML;
}
setListOfCentres();

document.getElementById("ListOfCentresDistrict").addEventListener("change", setCities);
document.getElementById("ListOfCentresCity").addEventListener("change", setMap);
document.getElementById("ListOfCentresCity").addEventListener("change", setListOfCentres);
document.getElementById("ListOfCentresType").addEventListener("change", setMap);
document.getElementById("ListOfCentresType").addEventListener("change", setListOfCentres);