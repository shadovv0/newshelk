<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- jquery -->
    <script src="../js/jquery.js"></script>
    <!-- фаил стилей -->
    <link rel="stylesheet" type="text/css" href="/css/mobile-styles.css"/>
    <!-- бутстрап -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- бутстрап -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="head__container">
        <div class="wrap clear">
            <a class="menu-map" href="#">
                <img src="/images/map_24px.png">
                Карта
            </a>
            <div class="logo">
                <a href="/">
                    <img src="/images/mosmedportal_logo.png">
                </a>
            </div>
            <div class="search-form input-for-search">
                <div class="head__search">
                    <span><img src="/images/zoom.png"><a class="searching">Поиск</a></span>
                </div>
            </div>
        </div>
        <div class="window-search">
            <div class="search__clinic-doctor">
                <form name="search__search-form" action="/search/" class="search__search-form" method="GET">
                    <input class="js-search-input search__docclinic" type="text"
                           placeholder="Врачи, клиники, услуги, заболевания, симптомы" name="q" value=""/>
                    <img src="/images/search-btn.png">
                </form>
            </div>
        </div>
        <div class="close-map">
            <div class="open-map">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5dd762e7d250aab41eaecfb420f47dab93c87cfd617a6bea144834bec715484d&amp;width=400&amp;height=735&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="wrap">
        <div class="category__container">
            <div class="category__body">
                <div class="category__sort">
                    <ul>
                        <li class="category__filter-item"><a href="#">Клинике</a></li>
                        <li class="category__filter-item"><a href="#">Району</a></li>
                        <li class="category__filter-item"><a href="#">Метро</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contact__container">
            <h2>Контакты</h2>
            <div class="contact__body">
                <div class="contact__head">
                    <div class="contact__map">
                        <img src="/images/image%201.png">
                    </div>
                    <div class="contact__address">
                        г. Москва, м. Славянский бульвар, ул. Давыдковская, д. 5
                    </div>
                    <div class="contact__text-about">
                        МосМедПортал — это медицинский сервис, помогающий выбрать врача и записаться,
                        проконсультироваться онлайн 24/7 и держать свое здоровье под контролем
                    </div>
                    <div class="contact__schedule">
                        Часы работы офиса:<br>
                        <span>Пн-Пт 10:00-20:00 Сб-Вс 10:00-18:00</span>
                    </div>
                </div>
                <div class="contact__footer">
                    <div class="contact__phone">
                        Телефоны
                        <a href="#">+ 7 (999) 999-99-99</a>
                        <a href="#">+ 7 (999) 999-99-99</a>
                        <a href="#">+ 7 (999) 999-99-99</a>
                    </div>
                    <div class="contact__mail">
                        E-mail
                        <a href="#">info@mosmedportal.ru</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="feedback__container">
            <h2>Форма обратной связи</h2>
            <div class="feedback__body">
                <div class="feedback__head">
                    <div class="feedback__name-patient">
                        <input required placeholder="Ваше имя*" class="form-control name-record"
                               id="name-patient"
                               type="text"
                               maxlength="500"
                               value="">

                    </div>
                    <div class="feedback__phone-patient">
                        <input required placeholder="Ваш телефон*" class="form-control phone-record"
                               id="phone-patient"
                               type="text"
                               maxlength="500"
                               value="">
                    </div>
                </div>
                <div class="feedback__footer">
                    <div class="feedback__sms-patient">
                        <textarea required placeholder="Ваше сообщение*" class="form-control sms-write"
                                  id="sms-patient"
                                  maxlength="500">
                        </textarea>
                    </div>
                </div>
                <div class="contact-btn">
                    <a href="#" class="send__btn">Отправить</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="footer-wrap">
        <div class="footer__container">
            <div class="footer__body">
                <div class="footer__about-clinic">
                    <h4 class="footer__title">О нас</h4>
                    <ul class="linked-footer">
                        <li><a href="#" class="linked-name">О проекте · </a></li>
                        <li><a href="#" class="linked-name">Информация для пациентов · </a></li>
                        <li><a href="#" class="linked-name">Отзывы · </a></li>
                        <li><a href="#" class="linked-name">Контакты · </a></li>
                        <li><a href="#" class="linked-name">Авторы</a></li>
                    </ul>
                </div>
                <div class="footer__for-patient">
                    <h4 class="footer__title">Пациентам</h4>
                    <ul class="linked-footer">
                        <li><a href="#" class="linked-name">Клиники · </a></li>
                        <li><a href="#" class="linked-name">Врачи · </a></li>
                        <li><a href="#" class="linked-name">Услуги · </a></li>
                        <li><a href="#" class="linked-name">Диагностика · </a></li>
                        <li><a href="#" class="linked-name">Заболевания</a></li>
                    </ul>
                </div>
                <div class="footer__technical-info">
                    <h4 class="footer__title">Техническая информация</h4>
                    <ul class="linked-footer">
                        <li><a href="#" class="linked-name">Политика конфиденциальности · </a></li>
                        <li><a href="#" class="linked-name">Пользовательское соглашение · </a></li>
                        <li><a href="#" class="linked-name">Политика cookies · </a></li>
                        <li><a href="#" class="linked-name">Согласие на обработку персональных данных · </a></li>
                        <li><a href="#" class="linked-name">Заболевания · </a></li>
                        <li><a href="#" class="linked-name">Симптомы</a></li>
                    </ul>
                </div>
                <div class="footer__communication">
                    <div class="phone-footer">
                        <a href="#">(499) 123-34-56</a>
                    </div>
                    <div class="reference-footer">
                        справочная служба
                    </div>
                    <div class="footer-logo">
                        <img src="/images/mosmedportal_logo.png">
                    </div>
                    <div class="email-footer">
                        <a class="#">info@mosmedportal.ru</a>
                    </div>
                    <div class="ooo-inn">
                        2022 ⓒ ООО"МосМедПортал"<br>ИНН 7777777
                    </div>
                    <div class="social-media">
                        <div class="link-seti">
                            <a href="#">
                                <img src="/images/youtube.png">
                            </a>
                            <a href="#">
                                <img src="/images/telegram.png">
                            </a>
                            <a href="#">
                                <img src="/images/whatsapp.png">
                            </a>
                            <a href="#">
                                <img src="/images/vk.png">
                            </a>
                            <a href="#">
                                <img src="/images/ok.png">
                            </a>
                        </div>
                    </div>
                    <div class="age-img">
                        <img src="/images/18-plus.png">
                    </div>
                </div>
                <div class="last-in-footer">
                    Информация: предоставленная на сайте, не может быть использована для постановки диагноза, назначения
                    лечения и не заменяет врача
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Главный фаил со скриптами -->
<script src="../js/main.js"></script>
<!--Скрипты -->
<script src="../js/app.js"></script>
</body>
</html>