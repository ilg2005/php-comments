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
                <p>Телефон (499) 340-94-71</p>
                <p>Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></p>
            </div>
        </section>
        <div class="logo">
            <a>
                <img src="../img/logo.png" width="163" height="172" alt="Логотип компании «Future»">
            </a>
        </div>
        <h1 class="page-title">Комментарии</h1>
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
                    <p>Телефон (499) 340-94-71</p>
                    <p>Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></p>
                    <p>Адрес: <a href="https://yandex.ru/maps/-/CCQpQBdjlB">115088, Москва, ул. 2-я Машиностроения, д. 7
                            стр. 1</a></p>
                </div>
            </section>
            <div class="copyright">© 2010-2014 Future. Все права защищены</div>
        </div>
    </div>
</footer>
</body>
</html>
