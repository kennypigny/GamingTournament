const iconDropdown = document.querySelector('.dropdown-info');
const infoGeneral = document.getElementById('info-general');

const iconDropdownGame = document.querySelector('.dropdown-game');
const infoGame = document.getElementById('info-game');

const iconDropdownStructure = document.querySelector('.dropdown-structure');
const infoStructure = document.getElementById('structure-tournament');


iconDropdown.addEventListener("click", () => {
    infoGeneral.classList.toggle("hide-info")
})
iconDropdownGame.addEventListener("click", () => {
    infoGame.classList.toggle("hide-info")
})
iconDropdownStructure.addEventListener("click", () => {
    infoStructure.classList.toggle("hide-info")
})

