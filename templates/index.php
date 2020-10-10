<section id="orders" class="orders">
    <div class="container">
        <h1 class="text-center mb-5">Заявки</h1>
        <div class="row">
            <section class="responses col-lg-6 order-lg-1 order-md-2">
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
            <sectiom class="response-form col-lg-6 order-lg-2 order-md-1 mb-5">
                <h2>Оставить заявку</h2>
                <div id="response" class=""></div>
                <form id="ajax_form" action="" method="post">
                    <p>
                        <label class="required" for="name">Ваше имя</label>
                        <input id="name" type="text" name="name" placeholder="Герасим" required>
                    </p>
                    <p>
                        <label for="tel">Телефон</label>
                        <input id="tel" type="tel" name="tel" placeholder="9(999)999-99-99">
                    </p>
                    <p>
                        <label class="required" for="email">Почта</label>
                        <input id="email" type="email" name="email" placeholder="yourmail@mail.ru" required>
                    </p>
                    <p>
                        <label for="comment">Ваш комментарий</label>
                        <textarea class="" id="comment" rows="10" cols="45" name="comment"
                                  placeholder="Введите текст комментария"></textarea>
                    </p>
                    <p>
                        <label class="required" for="captcha">Введите число</label>
                    <div><img src="captcha.php" alt="Captcha image">
                        <input id="captcha" class="captcha" type="text" name="norobot" required>
                        <button id="btn" class="button send-btn" type="submit">Отправить</button>
                    </div>
                    </p>
                </form>

            </sectiom>
        </div>
    </div>
</section>
