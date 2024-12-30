const dropDownInfo = document.querySelector(".dropdown-info-sheet-tournament");
const infoGeneral = document.querySelector(".container-info-description")



dropDownInfo.addEventListener('click', () => {
    infoGeneral.classList.toggle('active-sheet-tournament')
    
})
