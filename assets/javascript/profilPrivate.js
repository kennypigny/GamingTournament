// SCRIPT CHANGEMENT DE PHOTO ET BANNIERE PROFIL

const photoProfil = document.getElementById("photo-profil");
const bannerProfil = document.getElementById("banner-profil");
const uploadPhoto = document.getElementById("upload-photo");
const uploadBanner = document.getElementById("upload-banner");

photoProfil.addEventListener("click", () => {
  uploadPhoto.click();
});

uploadPhoto.addEventListener("change", (event) => {
  const file = event.target.files[0];

  if (file) {
    const newPhoto = new FileReader();

    newPhoto.onload = (e) => (photoProfil.src = e.target.result);

    newPhoto.readAsDataURL(file);
  }
});

bannerProfil.addEventListener("click", () => {
  uploadBanner.click();
});

uploadBanner.addEventListener("change", (event) => {
  const file = event.target.files[0];

  if (file) {
    const newPhoto = new FileReader();

    newPhoto.onload = (e) => (bannerProfil.src = e.target.result);

    newPhoto.readAsDataURL(file);
  }
});

// DROPDOWN DES BOX DE LA PAGE
const iconDropdownProfil = document.querySelector(".dropdown-general-profil");
const boxGeneral = document.querySelector(".box-general");

const iconChangePassword = document.querySelector(".dropdown-change-password");
const boxChangePassword = document.querySelector(".box-change-password");

const iconChangeMail = document.querySelector(".dropdown-change-mail");
const boxChangeMail = document.querySelector(".box-change-mail");

const iconDelete = document.querySelector(".dropdown-delete-account");
const boxDelete = document.querySelector(".box-delete");

const iconHistoryProfil = document.querySelector(".dropdown-history-profil");
const boxHistoryProfil = document.querySelector(".box-history-profil");

iconDropdownProfil.addEventListener("click", () => {
  boxGeneral.classList.toggle("hide-box");
});
iconChangePassword.addEventListener("click", () => {
  boxChangePassword.classList.toggle("hide-box");
});
iconChangeMail.addEventListener("click", () => {
  boxChangeMail.classList.toggle("hide-box");
});
iconDelete.addEventListener("click", () => {
  boxDelete.classList.toggle("hide-box");
});
iconHistoryProfil.addEventListener("click", () => {
  boxHistoryProfil.classList.toggle("hide-box");
});
