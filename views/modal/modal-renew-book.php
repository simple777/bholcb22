<div class="hystmodal" id="modal-renew-book" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button data-hystclose class="hystmodal__close">Закрыть</button>

            <div class="forms-wrapper">
                    <h1>Продление онлайн</h1>
                    <!-- Ваш HTML код модального окна -->
                        <form class="feedback" action="<?php echo SITEURL; ?>mail/sendmail.php" method="POST">

                            <div class="forms-wrapper-content forms">

                                    <label for="text">ФИО</label>
                                            <input type="text" name="ФИО" required placeholder="Фамилия Имя Отчество">
                                    <label for="email">E-mail</label>
                                        <input type="email" name="E-mail" required placeholder="myname@yandex.ru">
                                    <label for="author-book">Автор и книга</label>
                                        <input type="author-book" name="Автор и книга" required placeholder="Толстой Л.Н. Война и мир">

                                    <label for="depart">Отдел библиотеки</label>
                                    <select type="depart" name="Отдел библиотеки" required>
                                        <option value="Читальный зал">Читальный зал</option>
                                        <option value="Детская библиотека">Детская библиотека</option>
                                        <option value="Абонемент">Абонемент</option>
                                    </select>

                                    <input type="submit" value="Отправить">

                            </div>

                        </form>
            </div>
        </div>
    </div>
</div>