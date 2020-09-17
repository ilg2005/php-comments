<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?= $pageTitle ?></title>
    <link rel="icon" href="data:;base64,=">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<!-- NAVBAR -->
<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-dark py-4">
    <div class="container">
        <div class="row">
            <a class="navbar-brand" href="#home">
                <img src="../img/logo.png" width="50" height="50" alt="Company's Logo">
                <h3 class="d-inline align-middle">M-Company</h3></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Заявки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <header class="page-header">
        <div class="row d-flex align-items-center justify-content-between">
            <section class="contacts col">
            <h2 class="invisible">Контакты</h2>
            <div class="card card-body border-0 address">
                <a class="text-dark d-block mb-4" href="tel:+77777777777"><i class="fas fa-phone fa-2x "></i> +7 (777) 777-77-77</a>
                <a class="text-dark d-block mb-4" href="email:m-company@gmail.com"><i class="fas fa-envelope fa-2x"></i>  m-company@gmail.com</a>
            </div>
            </section>
            <div class="logo col">
            <a href="#">
                <img src="../img/logo.png" width="163" height="172" alt="Логотип компании" class="img-fluid">
            </a>
        </div>
        </div>
        <div class="row">
            <h1 class="page-title">Заявки</h1>
    </div>
</header>
</div>
<!--<main>
    <?/*= $mainContent */?>
</main>
<footer class="page-footer">
    <div class="container">
        <div class="col-left">
            <div class="logo">
                <a>
                    <img src="../img/logo.png" width="82" height="86" alt="Логотип компании">
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
</footer>-->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="/js/ajax.js"></script>
</body>
</html>
