<section id="orders" class="orders">
    <div class="container">
        <h1 class="text-center mb-5">Заявки</h1>
        <div class="row">
            <section class="responses col-lg-6 order-lg-1 order-md-2 <?= count($results) ?: "d-none" ?>">
                <ul class="responses-list">
                    <?php foreach ($results as $key => $value) : ?>
                        <li>
                            <div><span class="customer-name"><?= $value['name'] ?></span><span
                                        class="time"><?= date('H:i',
                                        strtotime($value['date'])) ?>  </span><span class="date"><?= date('d.m.Y',
                                        strtotime($value['date'])) ?></span>
                            </div>
                            <div class="customer-text"><?= $value['comment'] ?></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
            <section class="response-form col-lg-6 order-lg-2 order-md-1 mb-5 <?= count($results) ?: " offset-lg-3 justify-content-center" ?>">
                <h3>Оставить заявку</h3>
                <br>
                <form id="ajax_form" action="" method="post" novalidate>
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input  id="name" type="text" name="name" class="form-control fix-rounded-right" placeholder="Ваше имя" required>
                        <div class="invalid-feedback">
                            Заполните обязательное поле "Ваше имя" !
                        </div>
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-phone"></i>
                            </span>
                        </div>
                        <input id="tel" type="tel" name="tel" class="form-control fix-rounded-right" placeholder="Телефон">
                        <div class="invalid-feedback">
                            Пользователь с таким телефоном уже существует !
                        </div>
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" class="form-control fix-rounded-right" placeholder="Ваш Email" required>
                        <div class="invalid-feedback">
                            Заполните обязательное поле "Ваш Email" !
                        </div>
                    </div>

                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                        </div>
                        <textarea id="comment" name="comment" rows="5"  class="form-control fix-rounded-right" placeholder="Ваше сообщение"></textarea>
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text p-0 m-0">
                                <img src="captcha.php" class="img-fluid" alt="Captcha image">
                            </span>
                        </div>
                        <input id="captcha" class="form-control fix-rounded-right" type="text" name="norobot" placeholder="Введите число" required>
                        <div class="invalid-feedback">
                            Заполните обязательное поле "Введите число" !
                        </div>

                    </div>

                    <input id="btn" type="submit" value="Отправить" class="btn btn-block btn-secondary btn-lg">
                </form>
                <p id="response" class="alert text-center d-none" role="alert">Результат отправки формы</p>
            </section>
        </div>
    </div>
</section>
