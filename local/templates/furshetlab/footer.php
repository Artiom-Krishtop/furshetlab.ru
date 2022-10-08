<?php

use Bitrix\Main\Page\Asset;

?>
     
</main>
        <!-- /.main -->

        <section class="modal-callback modal">

            <button class="modal__close-btn">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/close-black.svg" alt="">
            </button>

            <h1 class="modal__title">
                Обратный звонок
            </h1>

            <p class="modal__description">
                Заполните поля и мы с вами свяжемся
            </p>

            <form class="modal__form" action="">

                <input class="modal__form-input" type="text" placeholder="Введите имя">
                <input class="modal__form-input" type="text" placeholder="Номер телефона">

                <button class="modal__form-btn btn">Заказать звонок</button>

                <div class="modal__form-bottom">
                    <input class="modal__form-bottom_checkbox" type="checkbox" id="modalCheckbox" name="modalCheckbox">
                    <label class="modal__form-bottom_text" for="modalCheckbox">
                        Нажимая кнопку "Зарегистрироваться", я даю своё согласие на обработку персональных данных. 
                        <a href="">Политика конфиденциальности</a> и 
                        <a href="">публичная оферта</a>
                    </label>
                </div>
            </form>

        </section>
    <!-- /.modal -->

    <section class="mobMenu">
        <div class="mobMenu__container">

            <div class="mobMenu__btn-box">
                <button class="mobMenu__btn">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/close.svg" alt="Закрыть">
                </button>
            </div>

            <form class="mobMenu__search">
                <input type="text" name="text" placeholder="Поиск">
            </form>

            <nav class="mobMenu__top-nav">
                <ul class="mobMenu__top-list">
                    <li class="mobMenu__top-item">
                        <a class="mobMenu__top-link" href="">О компании</a>
                    </li>
                    <li class="mobMenu__top-item">
                        <a class="mobMenu__top-link" href="">Отзывы</a>
                    </li>
                    <li class="mobMenu__top-item">
                        <a class="mobMenu__top-link" href="">Как заказть</a>
                    </li>
                    <li class="mobMenu__top-item">
                        <a class="mobMenu__top-link" href="">Оплата и доставка</a>
                    </li>
                    <li class="mobMenu__top-item">
                        <a class="mobMenu__top-link" href="">Контакты</a>
                    </li>
                    <li class="mobMenu__top-item">
                        <a class="mobMenu__top-link" href="">Избранное</a>
                    </li>
                </ul>
            </nav>

            <nav class="mobMenu__center-nav">
                <ul class="mobMenu__center-list">
                    <li class="mobMenu__center-item">
                        <a class="mobMenu__center-link" href="">
                            Все меню
                        </a>
                    </li>
                    <li class="mobMenu__center-item">
                        <a class="mobMenu__center-link" href="">
                            Скидки
                        </a>
                    </li>
                    <li class="mobMenu__center-item">
                        <a class="mobMenu__center-link" href="">
                            Новинки
                        </a>
                    </li>
                    <li class="mobMenu__center-item">
                        <a class="mobMenu__center-link" href="">
                            Акции
                        </a>
                    </li>
                    <li class="mobMenu__center-item">
                        <a class="mobMenu__center-link" href="">
                            Кейтеринг
                        </a>
                    </li>
                    <li class="mobMenu__center-item">
                        <a class="mobMenu__center-link" href="">
                            Корпоративные обеды
                        </a>
                    </li>
                    <li class="mobMenu__center-item">
                        <a class="mobMenu__center-link" href="">
                            Площадки
                        </a>
                    </li>
                    <li class="mobMenu__center-item">
                        <a class="mobMenu__center-link" href="">
                            Для корпоративных клиентов
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="mobMenu__bottom">
                <div class="mobMenu__bottom-info">
                    <p class="mobMenu__bottom-info_text">
                        Пн-Пт 08:00-21:00
                    </p>
                    <p class="mobMenu__bottom-info_text">
                        Сб-Вс 10:00-21:00
                    </p>
                </div>

                <div class="mobMenu__bottom-info">
                    <p class="mobMenu__bottom-info_text">
                        г. Москва, ул. Прянишникова, <br>
                        д. 19А, стр. 1, этаж 2, пом. 1, ком. 8-15
                    </p>
                </div>

                <div class="footer__top-contacts">
                    <div class="footer__top-contacts_number">
                        <a class="number-tel number-tel--footer item-hover" href="tel:+74995216610">+7 (499) 521-66-10</a>
                        <button class="number-order">Заказать звонок</button>
                    </div>

                    <div class="footer__top-contacts_social">
                        <a class="social__link" href="">
                            <img class="social__link-icon" src="<?= SITE_TEMPLATE_PATH?>/images/social/1.svg" alt="Связаться в телеграм">
                        </a>
                        <a class="social__link" href="">
                            <img class="social__link-icon" src="<?= SITE_TEMPLATE_PATH?>/images/social/2.svg" alt="Связаться в инстаграм">
                        </a>
                        <a class="social__link" href="">
                            <img class="social__link-icon" src="<?= SITE_TEMPLATE_PATH?>/images/social/3.svg" alt="Связаться в фейсбук">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.mobMenu -->

    <footer class="footer">
        <div class="container">
            <div class="footer__inner">

                <div class="footer__top">
                    <a class="footer__logo" href="<?= $APPLICATION->GetCurPage() == '/' ? 'javascript:void(0)': '/' ?>">
                        <img class="footer__logo-img" src="<?= SITE_TEMPLATE_PATH?>/images/footer-logo.svg" alt="Logo">
                    </a>

                    <nav class="footer__top-nav">
                        <div class="footer__top-column">
                            <ul class="footer__top-list">
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">О компании</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Отзывы</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Как заказть</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Оплата и доставка</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Контакты</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Скидки</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Акции</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Дипломы и сертификаты</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Вакансии</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Mobile</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Новости</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Бонусная программа</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="footer__top-nav_column">
                            <ul class="footer__top-list">
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Еда на праздник</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Свадебный банкет</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Банкет на корпоратив</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Кейтеринг на Новый год</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Фуршет на Хэллоуин</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Фуршет на День рождения</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Фуршет на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Фуршет на дом</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Детский фуршет</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Закуски на выставку</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Банкет на поминки</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="footer__top-nav_column">
                            <ul class="footer__top-list">
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Все закуски</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Наборы для фуршета</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">
                                        Горячие закуски
                                    </a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Завтраки с доставкой</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Ужины с доставкой</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Обеды с доставкой</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Вегетарианские блюда</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Постная еда</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Еда в офис</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Кофе-брейк</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__top-nav_column">
                            <ul class="footer__top-list">
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Канапе на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Тарталетки на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Пироги на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Осетинские пироги на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Бургеры на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Мини-бургеры на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Салаты на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Сэндвичи на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Брускетты на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Десерты на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Пирожные на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Круассаны на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Куличи на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Пирожки на заказ</a>
                                </li>
                                <li class="footer__top-item item-hover">
                                    <a class="footer__top-link" href="">Блины на заказ</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="footer__top-contacts">
                        <div class="footer__top-contacts_number">
                            <a class="number-tel number-tel--footer item-hover" href="tel:+74995216610">+7 (499) 521-66-10</a>
                            <button class="number-order">Заказать звонок</button>
                        </div>

                        <div class="footer__top-contacts_social">
                            <a class="social__link" href="">
                                <img class="social__link-icon" src="<?= SITE_TEMPLATE_PATH?>/images/social/1.svg" alt="Связаться в телеграм">
                            </a>
                            <a class="social__link" href="">
                                <img class="social__link-icon" src="<?= SITE_TEMPLATE_PATH?>/images/social/2.svg" alt="Связаться в инстаграм">
                            </a>
                            <a class="social__link" href="">
                                <img class="social__link-icon" src="<?= SITE_TEMPLATE_PATH?>/images/social/3.svg" alt="Связаться в фейсбук">
                            </a>
                        </div>
                    </div>

                </div>

                <div class="footer__center">
                    <p class="footer__center-info">
                        <? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include/adress.php', [], ['NAME' => 'Адрес', 'MODE' => 'html'])?>
                    </p>

                    <p class="footer__center-info">
                        <? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include/work-time-weekdays.php', [], ['NAME' => 'Режим работы (будни)', 'MODE' => 'text'])?>
                        <br>
                        <? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include/work-time-weekend.php', [], ['NAME' => 'Режим работы (выходные)', 'MODE' => 'text'])?>
                    </p>

                    <div class="footer__center-payment">
                        <img class="footer__center-payment_img" src="<?= SITE_TEMPLATE_PATH?>/images/payment/1.svg" alt="Платежная система Мастеркард">
                        <img class="footer__center-payment_img" src="<?= SITE_TEMPLATE_PATH?>/images/payment/2.svg" alt="Платежная система Виза">
                        <img class="footer__center-payment_img" src="<?= SITE_TEMPLATE_PATH?>/images/payment/3.svg" alt="Платежная система Мир">
                    </div>
                </div>

                <div class="footer__bottom">
                    <div class="footer__bottom-links">
                        <a class="footer__bottom-link" href="">
                            Политика конфиндециальности
                        </a>
                        <a class="footer__bottom-link" href="">
                            Договор оферта
                        </a>
                    </div>
                    <a class="footer__bottom-email item-hover" href="mailto:info@kostis.ru">
                        info@kostis.ru
                    </a>
                </div>

            </div>
        </div>
    </footer>
            <!-- /.footer -->

        </div>
        <!-- /.wrapper -->

        <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.6.1.min.js") ?>
        <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/slick.min.js") ?>
        <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.min.js") ?>
    </body>

    </html>