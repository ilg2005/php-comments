const formElement = document.querySelector('#ajax_form');
const nameElement = formElement.querySelector('#name');
const emailElement = formElement.querySelector('#email');
const telElement = formElement.querySelector('#tel');
const commentElement = formElement.querySelector('#comment');
const responseElement = document.querySelector('#response');
const DELAY = 1000;

$('#tel').mask('9(999) 999-99-99');

formElement.addEventListener("submit", (evt) => {
    evt.preventDefault();
    let name = nameElement.value.trim();
    let email = emailElement.value.trim();

    if (!name) {
        responseElement.classList.add('error');
        responseElement.innerText = 'Заполните обязательное поле "Ваше имя" !';
    }

    if (name && email) {
        const request = new XMLHttpRequest();
        const url = 'action_ajax_form.php';

        let params = new FormData(formElement);


        request.open('POST', url, true);
        request.responseType =	"json";
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        request.addEventListener('readystatechange', () => {

            if (request.readyState === 4 && request.status === 200) {
                let serverResponse = request.response;
                console.log(serverResponse);

                if (serverResponse.success === true) {
                    responseElement.classList.add('success');
                    responseElement.innerText = serverResponse.message;
                    setTimeout(() => window.location.reload(), DELAY);
                } else {
                    responseElement.classList.add('error');
                    responseElement.innerText = serverResponse.message;
                }
            } else {
                responseElement.classList.add('error');
                responseElement.innerText = 'Что-то пошло не так... Повторите загрузку позже.';
            }
        });
        request.send(params);
        console.log(params);
    }
});
