
const setCities = () => {
    let innerHTML = ``;
    Object.values(__cities[document.getElementById("ListOfCentresDistrict").value]).map(city => {
        innerHTML += `<option value="${city.Code}">${city.Name}</option>`;
    })
    document.getElementById("ListOfCentresCity").innerHTML = innerHTML;
}

const setMap = () => {
    document.getElementById("mapIframe").src = __mapURLs[`${document.getElementById("ListOfCentresCity").value}_${document.getElementById("ListOfCentresType").value}`];
}

document.getElementById("ListOfCentresDistrict").addEventListener("change", setCities);
document.getElementById("ListOfCentresCity").addEventListener("change", setMap);
document.getElementById("ListOfCentresType").addEventListener("change", setMap);
