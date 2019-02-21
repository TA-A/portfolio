var formValid = document.getElementById("bouton_envoi");

var firstName = document.getElementById("firstName");
var missfirstName = document.getElementById("missfirstName");
var firstNameValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;

var lastName = document.getElementById("lastName");
var misslastName = document.getElementById("misslastName");
var lastNameValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;

var email = document.getElementById("email");
var missMail = document.getElementById("missMail");
var emailValid = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

var message = document.getElementById("message");
var missMess = document.getElementById("missMess");

console.log("click",validation)
formValid.addEventListener("click",validation);

function validation(event){
    //si le champ est vide
    if (firstName.validity.valueMissing){
        event.preventDefault();
        missfirstName.textContent = "Entrez votre prénom.";
        missfirstName.style.color = "white";
    //Si le format de données est incorrect
    }
    else if (firstNameValid.test(firstName.value) == false){
            event.preventDefault();
            missfirstName.textContent = 'Format incorrect';
            missfirstName.style.color = 'white';
        }else{
    }

    if (lastName.validity.valueMissing){
        event.preventDefault();
        misslastName.textContent = "Entrez votre nom.";
        misslastName.style.color = "white";
    //Si le format de données est incorrect
    }
    else if (lastNameValid.test(lastName.value) == false){
            event.preventDefault();
            misslastName.textContent = 'Format incorrect';
            misslastName.style.color = 'white';
        }else{
    }

    if (email.validity.valueMissing){
        event.preventDefault();
        missMail.textContent = "Entrez votre email.";
        missMail.style.color = "white";
        //Si le format de données est incorrect
    }else if (emailValid.test(email.value) == false){
            event.preventDefault();
            missMail.textContent = 'Format incorrect';
            missMail.style.color = 'white';
        }else{
    }

    if (message.validity.valueMissing){
        event.preventDefault();
        missMess.textContent = "Entrez votre message.";
        missMess.style.color = "white";
    }
}