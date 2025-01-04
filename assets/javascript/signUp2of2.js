// VERIFICATION MDP

const buttonSubmit = document.getElementById("button-submit-signUp");

function verificationContentSpecialCharacter() {
  const password = document.getElementById("passwordSignUp").value;

  const passwordError = document.querySelector(".password-error");

  const verifyIfSpecialCharacterRegex =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

  if (!verifyIfSpecialCharacterRegex.test(password)) {
    passwordError.classList.add("message-error-visible");
  } else {
    passwordError.classList.remove("message-error-visible");

    // alert("TEST MDP VALIDE !");
  }
}

function verifySamePassword() {
  const password = document.getElementById("passwordSignUp").value;

  const confirmPassword = document.getElementById("confirmPasswordSignUp").value;

  const passwordErrorConfirm = document.querySelector(
    ".password-error-confirm"
  );

  if (password !== confirmPassword) {
    passwordErrorConfirm.classList.add("message-error-visible");
  } else {
    passwordErrorConfirm.classList.remove("message-error-visible");

    // alert("TEST C'EST LE MEME MDP");
  }
}

buttonSubmit.addEventListener(
  "click",
  verificationContentSpecialCharacter
);

buttonSubmit.addEventListener("click", verifySamePassword);

//VERIFICATION EMAIL


function verifyNewEmail() {
  const verificationEmailRegex =
    /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const newEmail = document.getElementById("mailSignUp").value;
  const NewEmailError = document.querySelector(".email-error");

  if (!verificationEmailRegex.test(newEmail)) {
    NewEmailError.classList.add("message-error-visible");
  } else {
    NewEmailError.classList.remove("message-error-visible");

    // alert("EMAIL VALIDE !");
  }
}

buttonSubmit.addEventListener("click", verifyNewEmail);