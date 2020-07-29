<div class="container">
    <h2 class="visually-hidden">Комментарии пользователей</h2>
    <section class="comments">
        <ul class="comments-list">
            <?php foreach ($results as $key => $value) : ?>
            <li>
                <p><span class="customer-name"><?= $value['name'] ?></span><span class="time"><?= date('H:i', strtotime($value['date'])) ?>  </span><span class="date"><?= date('d.m.Y', strtotime($value['date'])) ?></span>
                </p>
                <p class="customer-text"><?= $value['comment'] ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="comments-form">
        <h2>Оставить комментарий</h2>

        <form action="/" method="post">
            <p>
                <label for="name">Ваше имя</label>
                <input id="name" type="text" name="name" placeholder="Герасим" autofocus required>
            </p>
            <p>
                <label for="comment-text">Ваш комментарий</label>
                <textarea class="" id="comment-text" rows="10" cols="45" name="comment-text" placeholder="" required></textarea>
            </p>
            <button class="button send-btn" type="submit">Отправить</button>
        </form>

    </section>
</div>
