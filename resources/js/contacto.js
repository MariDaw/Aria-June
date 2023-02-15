/*----FORMULARIO CONTACTO-----*/
if (document.getElementById("btnenviar")) {
    let btnenviar = document.getElementById("btnenviar");
    let nombre = document.querySelector('#nombre');
    let email = document.getElementById("email");
    btnenviar.addEventListener('click', validar);
    nombre.addEventListener('input', validarNombre);
    email.addEventListener('blur', validar);
}
/* Limpiar formulario */
function limpiarCustomvaliditi() {
    let formulario = document.querySelector('.form');
    for (const elemento of formulario.elements) {
        elemento.setCustomValidity("");
    }
}

function validarEmail() {
    limpiarCustomvaliditi();
    //Si no contiene datos validos
    if (!email.checkValidity()) {
        if (email.validity.patternMismatch) {
            email.setCustomValidity("Debes introducir un email valido");
        }
        //Si el campo email es vacio devuelve true
        if (email.validity.valueMissing) {
            email.setCustomValidity("Rellena el campo email");
        }
        //Para mandar el mensaje creado
        email.reportValidity();
        return false;
    }
    return true;
}

function validarNombre() {
    limpiarCustomvaliditi();
    if (!nombre.checkValidity()) {
        if (nombre.validity.valueMissing) {
            nombre.setCustomValidity("Rellena el campo nombre");
            nombre.reportValidity();
            return false;
        }
    }
    return true;
}



function validar(e) {
    limpiarCustomvaliditi();
    if (validarNombre()  && validarEmail()) {
        document.getElementById('mensaje').disabled = false;
    } else {
        e.preventDefault();
    }
}
