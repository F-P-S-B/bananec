const modal = document.getElementById("modal");
const mdBg = document.getElementById("md-bg");
const cancelBtn = document.getElementById("cancel");
const toggleBtn = document.getElementById("toggleButton");
mdBg.addEventListener("click", () => modal.classList.remove("active"));
cancelBtn.addEventListener("click", () => modal.classList.remove("active"));
toggleBtn.addEventListener("click", () => modal.classList.add("active"));
input_qtt = document.getElementById("input-qtt");
input_prix = document.getElementById("input-prix");
console.log(input_prix);
console.log(input_qtt);
prix = 15;
input_qtt.addEventListener("change", () => {
  input_prix.value = prix * input_qtt.value;
});
input_prix.addEventListener("change", () => {
  input_qtt.value = Math.round((input_prix.value * 100) / prix) / 100;
});
