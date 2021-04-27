// Set header position
const setHeaderPosition = () => {
  const size =
    (window.innerWidth - document.querySelector("section").offsetWidth) / 2;
  document
    .querySelector(":root")
    .style.setProperty("--header-position", `${size}px`);
};
window.addEventListener("load", setHeaderPosition);
window.addEventListener("resize", setHeaderPosition);

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
});
cancelBtn.addEventListener("click", () => {
  document.body.classList.remove("main");
  modal.classList.remove("active");
});

//Add modal content
for (let i = 0; i < lignes.length; i++) {
  const ligne = lignes[i];
  ligne.addEventListener("click", () => {
    cellules = ligne.getElementsByTagName("td");
    modal.getElementsByTagName("header")[0].innerHTML = cellules[0].innerText;
    document.getElementById("imageModal").src = cellules[0].dataset.img;
    document.getElementById("prix").innerText =
      cellules[3].innerText + " / " + cellules[1].innerText;
    document.getElementById("description").innerText =
      cellules[0].dataset.description;
    document.getElementById("submit").addEventListener("click", () => {
      window.location.href = cellules[0].dataset.don;
    });
    document.body.classList.add("main");
    modal.classList.add("active");
  });
}
