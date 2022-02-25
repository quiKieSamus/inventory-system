let mail = document.getElementById("mail");
let password = document.getElementById("password");
let sPassword = document.getElementById("c-password");

const validations = () => {
    if(password.value != sPassword.value){
        alert("TERRIBLE - Las contraseñas no concuerdan");
        return false;
    }
    if(password.value == sPassword.value){
        alert("BIEN - Las contraseñas son iguales");
        if(password.value.length < 12) {
            alert("La contraseña debe tener un valor superior al de 12 caracteres");
            return false;
        } else {
            alert("Todo bien");
            return true;
        }
    } else {
        return true;
    }
}

