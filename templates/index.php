<div class="container">
    <h2 class="visually-hidden">Заявки пользователей</h2>
    <section class="comments"> <!--Переименовать классы-->
        <ul class="comments-list">
            <?php foreach ($results as $key => $value) : ?>
            <li>
                <div><span class="customer-name"><?= $value['name'] ?></span><span class="time"><?= date('H:i', strtotime($value['date'])) ?>  </span><span class="date"><?= date('d.m.Y', strtotime($value['date'])) ?></span>
                </div>
                <div class="customer-text"><?= $value['comment'] ?></div>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="comments-form">
        <h2>Оставить заявку</h2>
        <div id="response" class=""></div>
        <form id="ajax_form" action="" method="post">
            <p>
                <label class="required" for="name">Ваше имя</label>
                <input id="name" type="text" name="name" placeholder="Герасим" autofocus required>
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
                <label for="comment-text">Ваш комментарий</label>
                <textarea class="" id="comment" rows="10" cols="45" name="comment" placeholder="Введите текст комментария"></textarea>
            </p>
            <button id="btn" class="button send-btn" type="submit">Отправить</button>
        </form>

    </section>
</div>
