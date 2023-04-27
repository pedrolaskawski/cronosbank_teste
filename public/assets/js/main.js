document.addEventListener("DOMContentLoaded", function () {
    const nameInput = document.getElementById("name");
    nameInput.addEventListener("invalid", (event) => {
        if (nameInput.validity.valueMissing) {
            nameInput.setCustomValidity("Digite o nome");
        } else if (nameInput.validity.tooShort) {
            nameInput.setCustomValidity("Nome muito curto, digite o sobrenome");
        } else {
            nameInput.setCustomValidity("");
        }
    });

    const mobileInput = document.getElementById("mobile");
    mobileInput.addEventListener("invalid", (event) => {
        if (mobileInput.validity.valueMissing) {
            mobileInput.setCustomValidity("Digite um número de celular");
        }else{
            mobileInput.setCustomValidity("");
        }
    });

    var maskOptions = {
        mask: "(00) 00000-0000",
    };
    var mask = IMask(mobileInput, maskOptions);

    const cityInput = document.getElementById("city");
    cityInput.addEventListener("invalid", (event) => {
        if (cityInput.validity.valueMissing) {
            cityInput.setCustomValidity("Insira uma cidade");
        }else if (cityInput.validity.patternMismatch) {
            cityInput.setCustomValidity("Insira um nome de cidade válido");
        }else{
            cityInput.setCustomValidity("");
        }
    });
    const stateInput = document.getElementById("state");
    stateInput.addEventListener("invalid", (event) => {
        if (stateInput.validity.valueMissing) {
            stateInput.setCustomValidity("Selecione um estado");
        }else{
            stateInput.setCustomValidity("");
        }
    });
});
