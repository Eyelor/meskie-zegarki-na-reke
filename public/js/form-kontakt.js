window.addEventListener('DOMContentLoaded', event => {
    // Obsługa formularza
    let ok = false;
    let kontaktForm = document.querySelector('#kontaktForm');
    let name = document.querySelector('#name');
    let email = document.querySelector('#email');
    let phone = document.querySelector('#phone');
    let message = document.querySelector('#message');
    let submitSuccessMessage = document.querySelector('#submitSuccessMessage');
    let submitErrorMessage = document.querySelector('#submitErrorMessage');
    let submitButton = document.querySelector('#submitButton');
    const nameRegexp = /^[A-Za-z]+(?:\s[A-Za-z]+)*$/;
    const emailRegexp = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
    const phoneRegexp = /^\d{3}-\d{3}-\d{3}$/;
    const messageRegexp = /^[\s\S]{0,255}$/;

    function formatPhoneInput() {
        let phoneInput = document.querySelector('#phone');
        let inputValue = phoneInput.value.replace(/\D/g, ""); // Usuwa znaki które nie są cyframi
        let formattedValue = "";
    
        if (inputValue.length > 0) {
            formattedValue += inputValue.slice(0, 3);
        }
        if (inputValue.length > 3) {
            formattedValue += "-" + inputValue.slice(3, 6);
        }
        if (inputValue.length > 6) {
            formattedValue += "-" + inputValue.slice(6, 9);
        }
    
        phoneInput.value = formattedValue;
    }

    function isFormNotEmpty () {
        if (document.querySelector('#name').value != "" && 
        document.querySelector('#email').value != "" && 
        document.querySelector('#phone').value != "" && 
        document.querySelector('#message').value != "") {
            return true;
        }
        else {
            return false;
        }
    }

    function isInputNotEmpty(inputId) {
        if (document.querySelector('#'+inputId).value != "") {
            return true;
        }
        else {
            return false;
        }
    }

    function showError(inputId, outputElement) {
        let elementObject = document.querySelector('#'+inputId);
        let parent = elementObject.parentNode;
        let errorMessage = parent.querySelector(outputElement);
        errorMessage.classList.add('d-block');
    }

    function hideError(inputId, outputElement) {
        let elementObject = document.querySelector('#'+inputId);
        let parent = elementObject.parentNode;
        let errorMessage = parent.querySelector(outputElement);
        errorMessage.classList.remove('d-block');
    }

    function isMatchRegexp (inputId, regexpObject) {
        if (!regexpObject.test(document.querySelector('#'+inputId).value)) {
            return false;
        } else {
            return true;
        }
    }

    function inputChange(elementObject) {
        elementObject.addEventListener('blur', function () {
            if (isInputNotEmpty(elementObject.id)) {
                hideError(elementObject.id, '.empty');

                if (elementObject.id == "name") {
                    if (isMatchRegexp(elementObject.id, nameRegexp)) {
                        hideError(elementObject.id, '.invalid-feedback');
                    }
                    else {
                        showError(elementObject.id, '.invalid-feedback');
                    }
                }
                else if (elementObject.id == "email") {
                    if (isMatchRegexp(elementObject.id, emailRegexp)) {
                        hideError(elementObject.id, '.invalid-feedback');
                    }
                    else {
                        showError(elementObject.id, '.invalid-feedback');
                    }
                }
                else if (elementObject.id == "phone") {
                    if (isMatchRegexp(elementObject.id, phoneRegexp)) {
                        hideError(elementObject.id, '.invalid-feedback');
                    }
                    else {
                        showError(elementObject.id, '.invalid-feedback');
                    }
                }
                else if (elementObject.id == "message") {
                    if (isMatchRegexp(elementObject.id, messageRegexp)) {
                        hideError(elementObject.id, '.invalid-feedback');
                    }
                    else {
                        showError(elementObject.id, '.invalid-feedback');
                    }
                }
                else {
                    console.log('Nieoczekiwany element: ' + elementObject.id);
                }
                
            }
            else {
                hideError(elementObject.id, '.invalid-feedback');
                showError(elementObject.id, '.empty');
            }
        });

        elementObject.addEventListener('input', function () {
            if (elementObject.id == "phone") {
                formatPhoneInput();
            }

            if (isFormNotEmpty() && 
            isMatchRegexp('name', nameRegexp) && 
            isMatchRegexp('email', emailRegexp) && 
            isMatchRegexp('phone', phoneRegexp) && 
            isMatchRegexp('message', messageRegexp)) {
                ok = true;
            }
            else {
                ok = false;
            }

            if (ok) {
                submitButton.classList.remove('disabled');
            }
            else {
                submitButton.classList.add('disabled');
            }
        });
    }

    inputChange(name);
    inputChange(email);
    inputChange(phone);
    inputChange(message);


    kontaktForm.addEventListener('submit', function(event) {
        if (ok) {
            let data="Następujące dane zostaną wysłane:\n";
            data+="Imie: "+document.getElementById('name').value+"\n";
            data+="Email: "+document.getElementById('email').value+"\n";
            data+="Telefon: "+document.getElementById('phone').value+"\n";
            data+="Wiadomość: "+document.getElementById('message').value+"\n";
            window.confirm(data);
            submitErrorMessage.classList.add('d-none');
            submitSuccessMessage.classList.remove('d-none');
            submitSuccessMessage.classList.add('d-block');
        }
        else {
            event.preventDefault();
            submitSuccessMessage.classList.add('d-none');
            submitErrorMessage.classList.remove('d-none');
            submitErrorMessage.classList.add('d-block');
        }
    });
});
