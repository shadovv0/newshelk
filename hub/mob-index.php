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
            <a class="menu-btn" href="#">
                <img src="/images/burger.png">
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
        <div class="top-menu">
            <div class="burger-menu">
                <nav class="top-menu-btn">
                    <div class="menu-list">
                        <a class="menu-item root-item" href="/clinic/mob-index.php">Клиники</a>
                        <a class="menu-item root-item" href="/doctor/mob-index.php">Врачи</a>
                        <a class="menu-item root-item" href="/hub/mob-index.php">Услуги</a>
                        <a class="menu-item root-item" href="/diagnostic/index.php">Диагностика</a>
                        <a class="menu-item root-item" href="/disease/index.php">Заболевания</a>
                        <a class="menu-item root-item" href="/symptoms/index.php">Симптомы</a>
                    </div>
                    <div class="burger-phone">
                        <a href="#">(499) 123-34-56</a>
                        <span>справочная</span>
                    </div>
                </nav>
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
    </div>
</header>
<div class="content">
    <div class="wrap">
        <div class="search">
            <div class="search__container">
                <div class="search__clinic-doctor">
                    <form name="search__search-form" action="/search/" class="search__search-form" method="GET">
                        <input class="js-search-input search__docclinic" type="text"
                               placeholder="Врачи, клиники, услуги, заболевания, симптомы" name="q" value=""/>
                        <img src="/images/search-btn.png">
                    </form>
                </div>
                <div class="search__city-metro">
                    <select name="doctor" id="doctor-select" class="search__city-text">
                        <option value="0">Метро, город МО</option>
                        <option value="0">Метро, город МО</option>
                        <option value="0">Метро, город МО</option>
                        <option value="0">Метро, город МО</option>
                    </select>
                </div>
            </div>
            <h3 class="search__title-service">Медицинские услуги</h3>
        </div>
        <section class="services">
            <div class="services__block">
                <h2>Гинекология</h2>
                <div class="main-spoiler" data-id="description">
                    <ul class="relinks__list">
                        <li class="relinks__item">
                            <a href="" class="relinks__link">MAR-тест</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Анализ секрета простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">ЛОД-терапияи</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Лечебный массаж простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">MAR-тест</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Анализ секрета простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">ЛОД-терапияи</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Лечебный массаж простаты</a>
                        </li>
                    </ul>
                </div>
                <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
            </div>
            <div class="services__block">
                <h2>Урология</h2>
                <div class="main-spoiler" data-id="description">
                    <ul class="relinks__list">
                        <li class="relinks__item">
                            <a href="" class="relinks__link">MAR-тест</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Анализ секрета простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">ЛОД-терапияи</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Лечебный массаж простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">MAR-тест</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Анализ секрета простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">ЛОД-терапияи</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Лечебный массаж простаты</a>
                        </li>
                    </ul>
                </div>
                <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
            </div>
            <div class="services__block">
                <h2>Дерматология</h2>
                <div class="main-spoiler" data-id="description">
                    <ul class="relinks__list">
                        <li class="relinks__item">
                            <a href="" class="relinks__link">MAR-тест</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Анализ секрета простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">ЛОД-терапияи</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Лечебный массаж простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">MAR-тест</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Анализ секрета простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">ЛОД-терапияи</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Лечебный массаж простаты</a>
                        </li>
                    </ul>
                </div>
                <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
            </div>
            <div class="services__block">
                <h2>Венерология</h2>
                <div class="main-spoiler" data-id="description">
                    <ul class="relinks__list">
                        <li class="relinks__item">
                            <a href="" class="relinks__link">MAR-тест</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Анализ секрета простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">ЛОД-терапияи</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Лечебный массаж простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">MAR-тест</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Анализ секрета простаты</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">ЛОД-терапияи</a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">Лечебный массаж простаты</a>
                        </li>
                    </ul>
                </div>
                <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
            </div>
        </section>


        <div class="info-about-project__right">
            <p>
                <img src="/images/blue-alert.png">
                Обратите внимание!
            </p>
            <span>Информация на странице
                представлена для ознакомления.
                Для назначения лечения
                    обратитесь к врачу.</span>
        </div>


        <div class="text-banner">
            <img src="/images/Vector%201.png">
            <img src="/images/sloi2.png">
            <div class="text-banner__text-block">
                <p>Подберем хорошую и недорогую<br> организацию в удобном для вас<br> районе за 1 минуту</p>
                <a href="#">(499) 123-45-67</a>
                <p>*Услуга бесплатная</p>
            </div>
        </div>

        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <img src="/images/bread-dot.png">
            <a href="#">Медицинские услуги</a>
            <p>Направления</p>
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
</body>
</html>