// MENU DROPDOWN MOBILE
const dropDownInfo = document.querySelector(".dropdown-info-sheet-tournament");
const infoGeneral = document.querySelector(".container-info-description");

const dropDownPlayers = document.querySelector(".dropdown-players-tournament");
const players = document.querySelector(".container-players");

const dropDownRegistration = document.querySelector(
  ".dropdown-registration-tournament"
);
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

// AUTO-SELECT-RADIO auto-accept box-registration
document.getElementById("auto-accept-yes").checked = true;

// ADD JOUEUR MANUEL AU TOURNOIS
const addButton = document.getElementById("add-player");
const tbody = document.querySelector(".table-players tbody");


addButton.addEventListener("click", () => {
  const playerCount = tbody.querySelectorAll("tr").length + 1;

  const newRowTable = document.createElement("tr");

  // Ajout de la nouvelle ligne sur le tableaux
  newRowTable.innerHTML = `
        <td>
            <label for="list-player${playerCount}" aria-label="Joueur inscrit">
                <input type="checkbox" name="list-player${playerCount}" id="list-player${playerCount}" />
            </label>
        </td>
        <td>Joueur ${playerCount}</td>
        <td>
            <img src="../assets/img/General/crayon.png" alt="Icone modifier" />
        </td>
    `;

  tbody.appendChild(newRowTable);
});


// MODIFICATION DU PSEUDO DE LA LISTE DES JOUEURS INSCRIT

tbody.addEventListener("click", function modificationOfNickname(event) {
  
  if (event.target.tagName === "IMG") {
    
    const rowParent = event.target.closest("tr"); 
    const nicknameCell = rowParent.querySelector("td:nth-child(2)");

    closeEditWindows();

    const currentNickname = nicknameCell.textContent.trim();

    nicknameCell.innerHTML = `
      <input type="text" value="${currentNickname}" class="edit-nickname" />
      <button class="save-btn">Add</button>
    `;

    // Selectionne les nouveaux élements
    const inputEdit = nicknameCell.querySelector(".edit-nickname");
    const saveButton = nicknameCell.querySelector(".save-btn");
    
    const saveEdition = () => {
      const newName = inputEdit.value.trim();
      if (newName) {
        nicknameCell.textContent = newName;
      } else {
        alert("Veuillez ajoutez un pseudo !");
      }
    };

    saveButton.addEventListener("click", saveEdition);
    inputEdit.addEventListener("keypress", (push) => {
      if (push.key === "Enter") {
        saveEdition();
      }
    });
  }
});

// Fonction pour fermer les fenetres d'édition quand une autre s'ouvre
function closeEditWindows() {
  const openInputs = tbody.querySelectorAll(".edit-nickname");
  
  openInputs.forEach((input) => {
    const parentCell = input.closest("td");
    const currentName = input.value.trim();
    parentCell.textContent = currentName;
  });
}

// Supprimer des joueurs du tournoi

const deleteIcon = document.querySelector(".table-players tfoot img");

deleteIcon.addEventListener("click", function deletePlayers()  {

  const checkboxes = tbody.querySelectorAll("input[type='checkbox']:checked"); 

  checkboxes.forEach((checkbox) => {
    const playersToDelete = checkbox.closest("tr"); 
    playersToDelete.remove(); 
  });
});