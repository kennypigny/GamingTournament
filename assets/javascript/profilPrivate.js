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

