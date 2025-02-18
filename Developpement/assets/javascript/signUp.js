// VERIFICATION GENERAL
const onlyLetterRegex = /^[\p{L}]+$/u;

const buttonGeneral = document.getElementById("button-general");

const firstName = document.getElementById("firstname-user");

const secondName = document.getElementById("secondname-user");

const nickName = document.getElementById("nickname-user");

const letterErrorFirstname = document.querySelector(".letter-error-firstname");

const letterErrorSecondname = document.querySelector(
  ".letter-error-secondname"
);

const letterErrorNickname = document.querySelector(".letter-error-nickname");

function verificationOnlyLetter(inputGeneral, errorText) {
  const value = inputGeneral.value;

  if (!onlyLetterRegex.test(value)) {
    errorText.classList.add("message-error-visible");
  } else {
    errorText.classList.remove("message-error-visible");

    // alert("TEST LETTRE VALIDE !");
  }
}
buttonGeneral.addEventListener("click", () =>
  verificationOnlyLetter(firstName, letterErrorFirstname)
);
buttonGeneral.addEventListener("click", () =>
  verificationOnlyLetter(secondName, letterErrorSecondname)
);
buttonGeneral.addEventListener("click", () =>
  verificationOnlyLetter(nickName, letterErrorNickname)
);

