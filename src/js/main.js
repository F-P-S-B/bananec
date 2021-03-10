// Get tables cell
const lignes = document.getElementsByClassName("more-info");

//Get modal elements for toggling
const modal = document.getElementById("modal");
const mdBg = document.getElementById("md-bg");
const cancelBtn = document.getElementById("cancel");

//Get modal elements for content
const input_qtt = document.getElementById("input-qtt");
const input_prix = document.getElementById("input-prix");

//Add modal activation
mdBg.addEventListener("click", () => {
  document.body.classList.remove("main");
  modal.classList.remove("active");
  input_prix.value = "";
  input_qtt.value = "";
});
cancelBtn.addEventListener("click", () => {
  document.body.classList.remove("main");
  modal.classList.remove("active");
});

//Add modal content
input_qtt.addEventListener("change", () => {
  input_prix.value =
    Math.round(
      input_qtt.value.replace(",", ".").replace(" ", "") * 100 * prix
    ) / 100;
});
input_prix.addEventListener("change", () => {
  input_qtt.value =
    Math.round((input_prix.value.replace(",", ".") * 100) / prix) / 100;
});

for (let i = 0; i < lignes.length; i++) {
  const ligne = lignes[i];
  ligne.addEventListener("click", () => {
    document.body.classList.add("main");
    modal.classList.add("active");
    cellules = ligne.getElementsByTagName("td");
    modal.getElementsByTagName("header")[0].innerHTML = cellules[0].innerText;
    document.getElementById("prix").innerText =
      cellules[2].innerText + " / " + cellules[3].innerText;
    prix = parseInt(cellules[2].innerText.replace("€", ""));
    document.getElementById("description").innerText =
      cellules[0].dataset.description;
  });
}
