const dropDownInfo = document.querySelector(".dropdown-info-sheet-tournament");
const infoGeneral = document.querySelector(".container-info-description");

const dropDownPlayers = document.querySelector(".dropdown-players-tournament");
const players = document.querySelector(".container-players");


const dropDownRegistration = document.querySelector(".dropdown-registration-tournament");
const registration = document.querySelector(".container-registration");

dropDownInfo.addEventListener("click", () => {
  infoGeneral.classList.toggle("active-tournament-management");
});

dropDownPlayers.addEventListener("click", () => {
  players.classList.toggle("active-tournament-management");
});

dropDownRegistration.addEventListener("click", () => {
  registration.classList.toggle("active-tournament-management");
});
