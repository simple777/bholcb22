<div class="hystmodal" id="modal-appeals-form" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button data-hystclose class="hystmodal__close">Закрыть</button>

            <script type="text/javascript">
                $(document).ready(function(){
                    $(function() {
                        $("#tel1").mask("+7 (999) 999-9999");
                    });
                }); //jQuery
            </script>

            <div class="forms-wrapper">
                    <h1>Форма для обращения</h1>
                    <!-- Ваш HTML код модального окна -->
                        <form class="feedback" action="<?php echo SITEURL; ?>mail/appeals.php" method="POST">

                            <div class="forms-wrapper-content forms">

                                <label for="type">Тип обращения</label>
                                <select type="type" name="Тип обращения" required>
                                    <option value="Вопрос">Вопрос</option>
                                    <option value="Жалоба">Жалоба</option>
                                    <option value="Предложение">Предложение</option>
                                    <option value="Иное">Иное</option>
                                </select><br>

                                    <label for="text">ФИО</label>
                                            <input type="text" name="ФИО" required placeholder="Фамилия Имя Отчество">
                                    <label for="tel">Контактный телефон</label>
                                        <input type="tel" name="Телефон" id="tel1" required placeholder="+7 (___) ___-____">
                                     <label for="email">E-mail</label>
                                        <input type="email" name="E-mail" required placeholder="myname@yandex.ru">
                                    <label for="full-text" style="display: block;padding-bottom: 11px">Текст обращения</label>
                                        <textarea name="Текст обращения" type="full-text" rows="3" required placeholder="Текст" style="width: 96.3%;"></textarea>

                                    <input type="submit" value="Отправить">

                            </div>

                        </form>
            </div>
        </div>
    </div>
</div>

