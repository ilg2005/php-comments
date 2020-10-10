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
<header id="page-header" class="bg-dark text-white">
    <!-- NAVBAR -->
    <nav id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-4">
        <div class="container">
            <div class="row">
                <a class="navbar-brand" href="#">
                    <img src="../img/logo.png" width="150" height="150" alt="Company's Logo">
                    <h3 class="d-inline offset-1 align-middle">M-Company</h3></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mr-4 active" href="#orders">Заявки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="#contact">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <?= $mainContent ?>
</main>

<footer id="page-footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row d-flex">
            <div id="contact" class="contacts text-white col-6">
                <div class="h2 ml-3">Контакты:</div>
                <div class="card card-body border-0 bg-dark address">
                    <a class="d-block text-white mb-4" href="tel:+77777777777"><i class="fas fa-phone fa-2x mr-2"></i>
                        +7 (777) 777-77-77</a>
                    <a class="d-block  text-white mb-4" href="email:m-company@gmail.com"><i
                                class="fas fa-envelope fa-2x mr-2"></i> m-company@gmail.com</a>
                </div>
            </div>
            <div class="logo align-content-end offset-3 d-none d-lg-block">
                <a href="#">
                    <img src="../img/logo.png" width="150" height="150" alt="Логотип компании" class="img-fluid">
                </a>
            </div>
        </div>

        <div class="row">
            <p class="lead mx-auto">Copyright © <span id="year">2020</span></p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
        type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="../js/ajax.js"></script>
<script src="../js/main.js"></script>
</body>
</html>
