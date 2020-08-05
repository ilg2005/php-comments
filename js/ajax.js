const formElement = document.querySelector('#ajax_form');
const submitBtnElement = formElement.querySelector('#btn');
const nameElement = formElement.querySelector('#name');
const emailElement = formElement.querySelector('#email');
const telElement = formElement.querySelector('#tel');
const commentElement = formElement.querySelector('#comment-text');
const responseElement = document.querySelector('#response');
const DELAY = 1000;

$('#tel').mask('9(999) 999-99-99');

/*let validateEmail = () => {
    const reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (!reg.test(emailElement.value)) {
        responseElement.classList.add('error');
        responseElement.innerText = 'Введите корректный email !';
        return false;
    }
    return true;
}*/

formElement.addEventListener("submit", (evt) => {
    evt.preventDefault();
    let name = nameElement.value.trim();
    let email = emailElement.value.trim();
    let tel = telElement.value.trim();
    let comment = commentElement.value.trim();

    if (!name) {
        responseElement.classList.add('error');
        responseElement.innerText = 'Заполните обязательное поле "Ваше имя" !';
    } else if (!email) {
        responseElement.classList.add('error');
        responseElement.innerText = 'Заполните обязательное поле "Почта" !';
    }

    if (name && email /*&& validateEmail()*/) {
        const request = new XMLHttpRequest();
        const url = 'action_ajax_form.php';
        /*const params = 'name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email) + '&tel=' + encodeURIComponent(tel) + '&comment=' + encodeURIComponent(comment);*/

        let params = new FormData(formElement);


        request.open('POST', url, true);
        /*request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');*/

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
