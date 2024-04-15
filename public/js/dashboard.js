const profileAction = document.getElementById("profileAction");
const dropdownAction = document.getElementById("dropdownAction");

profileAction.addEventListener("click", () => {
  dropdownAction.classList.toggle("hidden");
});
