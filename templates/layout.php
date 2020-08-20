<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?= $pageTitle ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="../css/normalize.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<header class="page-header">
    <div class="container">
        <section class="contacts">
            <h2 class="visually-hidden">Контакты</h2>
            <div class="address">
                <p>Телефон (495) 292-42-52</p>
                <p>Email: <a href="mailto:mail_user@chimmed.ru">mail_user@chimmed.ru</a></p>
            </div>
        </section>
        <div class="logo">
            <a>
                <img src="../img/logo.png" width="163" height="172" alt="Логотип компании «Future»">
            </a>
        </div>
        <h1 class="page-title">Заявки</h1>
    </div>
</header>
<main>
    <?= $mainContent ?>
</main>
<footer class="page-footer">
    <div class="container">
        <div class="col-left">
            <div class="logo">
                <a>
                    <img src="../img/logo.png" width="82" height="86" alt="Логотип компании «Future»">
                </a>
            </div>
        </div>
        <div class="col-right">
            <section class="contacts">
                <h2 class="visually-hidden">Контакты</h2>
                <div class="address">
                    <p>Телефон (495) 292-42-52</p>
                    <p>Email: <a href="mailto:mail_user@chimmed.ru">mail_user@chimmed.ru</a></p>
                    <p>Адрес: <a href="https://yandex.ru/maps/-/CCQpaUQ91C">115230, Москва, Каширское шоссе, дом 3, корпус 2, строение 4/9</a></p>
                </div>
            </section>
            <div class="copyright">© 1991-2020 Химмед. Все права защищены</div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="/js/ajax.js"></script>
</body>
</html>
