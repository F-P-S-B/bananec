const cellules = document.getElementsByClassName("more-info");

for (const cellule of cellules) {
  cellule.addEventListener("click", () => console.log(cellule));
}
