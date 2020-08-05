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

        request.addEventListener('readystatechange', () => {

            if (request.readyState === 4 && request.status === 200) {
                let serverResponse = request.responseText;

                switch (serverResponse) {
                    case 'ok':
                        responseElement.classList.add('success');
                        responseElement.innerText = 'Заявка успешно отправлена!';
                        setTimeout(() => window.location.reload(), DELAY);
                        break;
                    case 'email exists':
                        responseElement.classList.add('error');
                        responseElement.innerText = 'Пользователь с таким email уже существует !';
                        break;
                    case 'telephone exists':
                        responseElement.classList.add('error');
                        responseElement.innerText = 'Пользователь с таким телефоном уже существует !';
                        break;
                }
            } else {
                responseElement.classList.add('error');
                responseElement.innerText = 'Что-то пошло не так... Повторите загрузку позже.';
            }
        });
        request.send(params);
    }
});
