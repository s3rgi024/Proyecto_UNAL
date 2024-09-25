import { registerRequest } from "./AJAX/requestRegister.js";


const nextButton = document.querySelector('.btn-next');
const prevButton = document.querySelector('.btn-prev');
const submitButton = document.querySelector('.btn-submit');
const steps = document.querySelectorAll('.step');
const form_steps = document.querySelectorAll('.form-step');
let active = 1;

const validateCurrentStep = (specificInput = null) => {
    const currentFormStep = document.querySelector(`.form-step:nth-of-type(${active})`);
    const inputs = currentFormStep.querySelectorAll('input[required], select[required]');
    let isValid = true;

    const validateInput = (input) => {
        const errorSpan = document.getElementById(`${input.id}_error`);

        if (input.type === 'password') {
            if (!validatePassword(input)) {
                isValid = false;
                input.classList.add('error');
                if (errorSpan) {
                    errorSpan.textContent = getPasswordErrorMessage(input);
                    errorSpan.style.display = 'inline';
                }
            } else {
                input.classList.remove('error');
                if (errorSpan) {
                    errorSpan.textContent = '';
                    errorSpan.style.display = 'none';
                }
            }
        } else {
            if (!input.checkValidity()) {
                isValid = false;
                input.classList.add('error');
                if (errorSpan) {
                    errorSpan.textContent = getErrorMessage(input);
                    errorSpan.style.display = 'inline';
                }
            } else {
                input.classList.remove('error');
                if (errorSpan) {
                    errorSpan.textContent = '';
                    errorSpan.style.display = 'none';
                }
            }
        }
    };

    if (specificInput) {
        validateInput(specificInput);
    } else {
        inputs.forEach(input => {
            validateInput(input);
        });
    }

    return isValid;
};

const validatePassword = (passwordField) => {
    const password = passwordField.value;
    const confirmPasswordField = document.getElementById('password_confirm');
    const confirmPassword = confirmPasswordField ? confirmPasswordField.value : '';

    if (password.length < 8) return false;
    if (!/[A-Z]/.test(password)) return false;
    if (!/[0-9]/.test(password)) return false;
    if (password !== confirmPassword) return false;

    return true;
};

const getPasswordErrorMessage = (input) => {
    const password = input.value;
    const confirmPassword = document.getElementById('password_confirm')?.value || '';

    if (password.length < 8) {
        return 'La contraseña debe tener al menos 8 caracteres.';
    }
    if (!/[A-Z]/.test(password)) {
        return 'La contraseña debe comenzar con una letra mayúscula.';
    }
    if (!/[0-9]/.test(password)) {
        return 'La contraseña debe contener al menos un número.';
    }
    if (password !== confirmPassword) {
        return 'Las contraseñas no coinciden.';
    }
    return '';
};

const getErrorMessage = (input) => {
    if (input.validity.valueMissing) {
        return 'Este campo es obligatorio.';
    }
    if (input.validity.typeMismatch) {
        return 'Formato de entrada incorrecto.';
    }
    return 'Error de validación.';
};

const updateProgress = () => {
    steps.forEach((step, i) => {
        if (i === (active - 1)) {
            step.classList.add('active');
            form_steps[i].classList.add('active');
        } else {
            step.classList.remove('active');
            form_steps[i].classList.remove('active');
        }
    });

    if (active === 1) {
        prevButton.disabled = true;
    } else {
        prevButton.disabled = false;
    }

    if (active === steps.length) {
        nextButton.style.display = "none";
        submitButton.style.display = "block";
    } else {
        nextButton.disabled = false;
        nextButton.style.display = "block";
        submitButton.style.display = "none";
    }
};

const handleStepClick = (index) => {
    if (validateCurrentStep()) {
        active = index + 1;
        updateProgress();
    }
};

nextButton.addEventListener('click', () => {
    if (validateCurrentStep()) {
        active++;
        if (active > steps.length) {
            active = steps.length;
        }
        updateProgress();
    }
});

prevButton.addEventListener('click', () => {
    active--;
    if (active < 1) {
        active = 1;
    }
    updateProgress();
});

submitButton.addEventListener('click', (event) => {
    if (validateCurrentStep()) {
        registerRequest(event)
    }
});

updateProgress();

const setupInputListeners = () => {
    const allInputs = document.querySelectorAll('input[required], select[required]');
    
    allInputs.forEach(input => {
        input.addEventListener('input', (event) => {
            validateCurrentStep(event.target); // Validar solo el input específico
        });
    });
};

setupInputListeners();

// Add click event to each step
steps.forEach((step, index) => {
    step.addEventListener('click', () => handleStepClick(index));
});

document.querySelectorAll('.upload_file_container input[type="file"]').forEach(inputElement => {
    inputElement.addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'Ningún Archivo Seleccionado';
        const fileNameLabel = this.parentElement.querySelector('.file_name span');
        fileNameLabel.textContent = fileName;
    });
});


// Show/Hide Password Functions
function toglePasswordVisibility(input, showIcon, hideIcon) {
    let inputPassword = document.getElementById(input);
    let buttonShowPassword = document.getElementById(showIcon);
    let buttonHidePassword = document.getElementById(hideIcon);
  
    buttonShowPassword.addEventListener("click",()=>{
      inputPassword.type = "text";
    });
  
    buttonHidePassword.addEventListener("click",()=>{
      inputPassword.type = "password";
    });
}

toglePasswordVisibility("password", "showPassword", "hidePassword");
toglePasswordVisibility("password_professor", "showPasswordRegister", "hidePasswordRegister");
toglePasswordVisibility("password_confirm", "showPasswordRegisterConfirm", "hidePasswordRegisterConfirm");
