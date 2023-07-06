<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
    <script src="https://code.jquery.com/jquery-git.min.js"></script>
</head>
<body>
<header>
    <div class="head__container">
        <div class="wrap clear">
            <div class="logo">
                <a href="/">
                    <img src="/images/mosmedportal_logo.png">
                </a>
            </div>
            <div class="header__phone">
                (499) 123-34-56
            </div>
        </div>
        <div class="top-menu">
            <div class="top-menu__wrap">
                <nav class="top-menu-btn">
                    <div class="menu-list">
                        <a class="menu-item root-item" href="/clinic/index.php">Клиники</a>
                        <a class="menu-item root-item" href="/doctor/index.php">Врачи</a>
                        <a class="menu-item root-item" href="/uslugi/index.php">Услуги</a>
                        <a class="menu-item root-item" href="/diagnostic/index.php">Диагностика</a>
                        <a class="menu-item root-item" href="/disease/index.php">Заболевания</a>
                        <a class="menu-item root-item" href="/symptoms/index.php">Симптомы</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="wrap">
        <div class="search">
            <h3 class="search__title-service">Медицинские услуги</h3>
            <div class="search__container">
                <div class="search__clinic-doctor">
                    <form name="search__search-form" action="/search/" class="search__search-form" method="GET">
                        <input class="js-search-input" type="text"
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
                <a href="#" class="search__btn">Подобрать</a>
            </div>
        </div>
        <section class="services">
            <div data-fold class="services__block">
                <h2>Гинекология</h2>
                <ul data-services-list="3" class="services__list services__list--three">
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                </ul>
                <button data-fold-btn class="services__more more">
                        <span data-open-text="Показать еще" data-close-text="Свернуть"
                              class="more__text">Показать еще</span>
                    <span class="more__arrow icon-arrow-more"></span>
                </button>
            </div>
            <div data-fold class="services__block">
                <h2>Урология</h2>
                <ul data-services-list="3" class="services__list services__list--three">
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                </ul>
                <button data-fold-btn class="services__more more">
                        <span data-open-text="Показать еще" data-close-text="Свернуть"
                              class="more__text">Показать еще</span>
                    <span class="more__arrow icon-arrow-more"></span>
                </button>
            </div>
            <div data-fold class="services__block">
                <h2>Дерматология</h2>
                <ul data-services-list="3" class="services__list services__list--three">
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                </ul>
                <button data-fold-btn class="services__more more">
                        <span data-open-text="Показать еще" data-close-text="Свернуть"
                              class="more__text">Показать еще</span>
                    <span class="more__arrow icon-arrow-more"></span>
                </button>
            </div>
            <div data-fold class="services__block">
                <h2>Венерология</h2>
                <ul data-services-list="3" class="services__list services__list--three">
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">MAR-тест</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link"> Анализ секрета простаты</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">ЛОД-терапияи</a>
                    </li>
                    <li class="services__item">
                        <a href="#" class="services__link">Лечебный массаж простаты</a>
                    </li>
                </ul>
                <button data-fold-btn class="services__more more">
                        <span data-open-text="Показать еще" data-close-text="Свернуть"
                              class="more__text">Показать еще</span>
                    <span class="more__arrow icon-arrow-more"></span>
                </button>
            </div>
        </section>


        <div class="info-about-project__center">
            <p>
                <img src="/images/blue-alert.png">
                <span>Обратите внимание!</span>
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
                <div>Средняя оценка организаций - 4.53 на основании 3162 отзывов и 6909 оценок</div>
                <div><b>Подберем хорошую и недорогую организацию в удобном<br> для вас районе за 1 минуту</b></div>
                <div><b><a href="#">(499) 123-45-67</a></b> *Услуга бесплатная</div>
            </div>
        </div>
        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <a href="#">Заболевания</a>
            <a href="#">Отоларингология</a>
            <p>Гайморит</p>
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
                        <li><a href="#" class="linked-name">О проекте</a></li>
                        <li><a href="#" class="linked-name">Информация для пациентов</a></li>
                        <li><a href="#" class="linked-name">Отзывы</a></li>
                        <li><a href="#" class="linked-name">Контакты</a></li>
                        <li><a href="#" class="linked-name">Авторы</a></li>
                    </ul>
                </div>
                <div class="footer__for-patient">
                    <h4 class="footer__title">Пациентам</h4>
                    <ul class="linked-footer">
                        <li><a href="#" class="linked-name">Клиники</a></li>
                        <li><a href="#" class="linked-name">Врачи</a></li>
                        <li><a href="#" class="linked-name">Услуги</a></li>
                        <li><a href="#" class="linked-name">Диагностика</a></li>
                        <li><a href="#" class="linked-name">Заболевания</a></li>
                    </ul>
                </div>
                <div class="footer__technical-info">
                    <h4 class="footer__title">Техническая информация</h4>
                    <ul class="linked-footer">
                        <li><a href="#" class="linked-name">Политика конфиденциальности</a></li>
                        <li><a href="#" class="linked-name">Пользовательское соглашение</a></li>
                        <li><a href="#" class="linked-name">Политика cookies</a></li>
                        <li><a href="#" class="linked-name">Согласие на обработку персональных данных</a></li>
                        <li><a href="#" class="linked-name">Заболевания</a></li>
                        <li><a href="#" class="linked-name">Симптомы</a></li>
                    </ul>
                </div>
                <div class="footer__communication">
                    <div class="phone-footer">
                        (499)123-45-67
                    </div>
                    <div class="reference-footer">
                        <span>справочная служба</span>
                    </div>
                    <div class="footer-logo">
                        <img src="/images/mosmedportal_logo.png">
                    </div>
                    <div class="email-footer">
                        <a class="#">info@mosmedportal.ru</a>
                    </div>
                    <div class="ooo-inn">
                        <span>2022 ⓒ ООО"МосМедПортал"<br>ИНН 7777777</span>
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
            </div>
            <div class="last-in-footer">
            <span>Информация: предоставленная на сайте, не может быть использована для постановки диагноза,
                назначения лечения и не заменяет врача</span>
            </div>
        </div>
    </div>
</footer>
</body>
</html>