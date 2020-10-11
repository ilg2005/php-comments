const formElement = document.querySelector('#ajax_form');
const nameElement = formElement.querySelector('#name');
const emailElement = formElement.querySelector('#email');
const responseElement = document.querySelector('#response');
const captchaElement = document.querySelector('#captcha');
const DELAY = 2000;

$('#tel').mask('9(999) 999-99-99');

formElement.addEventListener("submit", (evt) => {
    evt.preventDefault();
    let name = nameElement.value.trim();
    let email = emailElement.value.trim();
    let captcha = captchaElement.value.trim();

    if (formElement.checkValidity() === false) {
        evt.stopPropagation();
    }
    formElement.classList.add('was-validated');

    if (name && email && captcha) {
        const request = new XMLHttpRequest();
        const url = 'action_ajax_form.php';

        let params = new FormData(formElement);

        request.open('POST', url, true);
        request.responseType =	"json";

        request.addEventListener('readystatechange', () => {

            if (request.readyState === 4 && request.status === 200) {
                let serverResponse = request.response;

                if (serverResponse.success === true) {
                    $('form :submit').attr('disabled', 'disabled');
                    $(responseElement).removeClass('d-none error').addClass('success').text('Спасибо, ' + name + ' ! ' + serverResponse.message);
                    setTimeout(() => window.location.reload(), DELAY);
                } else {
                    formElement.classList.remove('was-validated');
                    $('.is-invalid').removeClass('is-invalid');
                    let errorField = formElement.querySelector('#' + serverResponse.field);
                    $(errorField).addClass('is-invalid');
                    $('.is-invalid + .invalid-feedback').text(serverResponse.message);

                    $(responseElement).removeClass('d-none success').addClass('error').text('Форма не отправлена: исправьте ошибки!');
                }

            } else {
                responseElement.classList.remove('d-none');
                responseElement.classList.add('error');
                responseElement.innerText = 'Что-то пошло не так... Повторите загрузку позже.';
            }
        });
        request.send(params);
    }
});
