let form = document.querySelector('.form-register');
let progressOptions = document.querySelectorAll('.progressbar__option');
// Inputs del formulario que se van a validar
let date = form.querySelector('#fecha');
let hour = form.querySelector('#hour');
let terreno = form.querySelector('#terreno');
let numarb = form.querySelector('#numarb');
let logistico = form.querySelector('#logistico');
// Aquí agregar todos los inputs que se desean validar

form.addEventListener('click', function(e) {
    let element = e.target;
    let isButtonNext = element.classList.contains('step__button--next');
    let isButtonBack = element.classList.contains('step__button--back');
    if (isButtonNext || isButtonBack) {
        let currentStep = document.getElementById('step-' + element.dataset.step);
        let jumpStep = document.getElementById('step-' + element.dataset.to_step);
        if (isButtonNext && !validate(element.dataset.step)) {
            // La validación falló, no avanzar al siguiente paso
            return;
        }
        currentStep.addEventListener('animationend', function callback() {
            currentStep.classList.remove('active');
            jumpStep.classList.add('active');
            if (isButtonNext) {
                currentStep.classList.add('to-left');
                progressOptions[element.dataset.to_step - 1].classList.add('active');
            } else {
                jumpStep.classList.remove('to-left');
                progressOptions[element.dataset.step - 1].classList.remove('active');
            }
            currentStep.removeEventListener('animationend', callback);
        });
        currentStep.classList.add('inactive');
        jumpStep.classList.remove('inactive');
    }
});
                            
// Escuchar el evento de cuando el formuario va enviar los datos
form.addEventListener('submit', function(e) {
    // Validar los datos antes de enviarlos
    // Pasar el último paso, en este ejemplo el último paso es el 3
    if (!validate(3)) {
        // Los datos son incorrectos por lo tanto no se deben de enviar
        e.preventDefault();
        return;
    }
    location.href ="route('eventos.store')";
    // Los datos se envian
});
                                            
function validate(currentStep) {

    if (date.value === '') {
        /*const campo = querySelector('error_date');
        campo.style.display = "";*/
        alert('El campo fecha es obligatorio');
        getElementById('error_date').style.display = "block";
        date.focus();
        return false;
    }

    if (hour.value === '') {
        alert('El campo hora es obligatorio');
        hour.focus();
        return false;
    }
    
    // Validar campos del paso 2
    if (parseInt(currentStep) >= 2) {
        if (terreno.value === '') {
            alert('El campo terreno es requerido');
            terreno.focus();
            return false;
        }
        
        if (numarb.value === '') {
            alert('El número de arboles es obligatorio');
            numarb.focus();
            return false;
        }
    }
    // Validar los datos del paso 3 si es necesario
    if (parseInt(currentStep) >= 3) {
        if (logistico.value === '') {
            alert('El campo de encargado de logistica es obligatorio');
            logistico.focus();
            return false;
        }
    }
    return true;
}
