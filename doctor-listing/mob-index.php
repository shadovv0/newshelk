<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/css/mobile-styles.css"/>
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
            <a class="menu-map" href="#">
                <img src="/images/map_24px.png">
                Карта
            </a>
            <!--<div class="top-menu">
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
        </div>-->
            <div class="logo">
                <a href="/">
                    <img src="/images/mosmedportal_logo.png">
                </a>
            </div>
            <div class="search-form">
                <div class="head__search">
                    <form name="search-form" class="search-form" action="/search/" method="GET">
                        <img src="/images/zoom.png">
                        <input class="js-search-input search__head" type="text" placeholder="Поиск" name="q" value=""/>
                        <button class="search-btn" href="#"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="wrap">
        <div class="sort__container">
            <h5>Гинекологи (114)</h5>
            <div class="sort__body">
                <span>Обновлено 30.03.22</span>
                <div class="sort__head">
                    <div class="sort__items">
                        <div class="sort__filter">Сортировать</div>
                        <ul>
                            <li class="sort__filter-item"><a href="#">По рейтингу</a></li>
                            <li class="sort__filter-item"><a href="#">По стажу</a></li>
                            <li class="sort__filter-item"><a href="#">По цене приёма</a></li>
                            <li class="sort__filter-item"><a href="#">По популярности</a></li>
                        </ul>
                    </div>
                </div>
                <div class="category__sort">
                    <ul>
                        <li class="category__filter-item"><a href="#">Клиника</a></li>
                        <li class="category__filter-item"><a href="#">Район</a></li>
                        <li class="category__filter-item"><a href="#">Опыт</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="doctors-card">
            <div class="doctor-card__container">
                <div class="doctor-card__head">
                    <div class="photo-doctor">
                        <a href="#">
                            <img src="/images/doctor.png">
                        </a>
                    </div>
                    <div class="doctor-card__doctor-head-right">
                        <div class="doctor-card__doctor-name">
                            <a href="#">
                                Манохина Дарья Дмитриевна
                            </a>
                        </div>
                        <div class="doctor-card__doctor-prices">
                            Стоимость приема
                            <p>1520₽</p>
                            <span>1900₽</span>
                        </div>
                        <div class="reviews-count doctors__clinic">
                            <div class="doctor-review-card__star">
                                <img src="/images/Star1.png">
                                <p>4,7</p>
                            </div>
                            <a href="#reviews">
                                14 отзывов
                            </a>
                        </div>
                    </div>
                </div>
                <div class="doctor-card__body">
                    <div class="doctor-card__doctor-spec">
                        Гинеколог
                    </div>
                    <div class="doctor-card__doctor-experiences">
                        <ul>
                            <li class="doctor-card__doctor-category">Врач высшей категории</li>
                            <li class="doctor-card__doctor-degree"> Кандидат медицинских наук</li>
                            <li class="doctor-card__doctor-experience"> Стаж 12 лет</li>
                        </ul>
                    </div>
                    <div class="doctor-card__right">
                        <span>Выберите клинику сети:</span>
                        <div class="doctor-card__record-clinic">
                            Клиника в Текстильщиках
                        </div>
                        <div class="doctor-card__geo">
                            <p>ул. Люблинская, д. 9 к. 1</p>
                            <ul>
                                <li class="doctor-card__metro">
                                    <img src="/images/Ellipse%2027.png">
                                    Текстильщики (338м)
                                </li>
                                <li class="doctor-card__metro"><img src="/images/Ellipse%2028.png">
                                    Печатники (2,1км)
                                </li>
                                <li class="doctor-card__metro"><img src="/images/Ellipse%2029.png">
                                    Стахановская (2,2км)
                                </li>
                            </ul>
                            <img src="/images/phone_24px.png">
                            <a href="#">(499) 123-45-67</a>
                        </div>
                        <span>Выберите удобное время для записи онлайн:</span>
                        <div class="doctor-card__time-slot">

                        </div>
                        <a class="search__btn">
                            Записаться на приём
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="doctors-card">
            <div class="doctor-card__container">
                <div class="doctor-card__head">
                    <div class="photo-doctor">
                        <a href="#">
                            <img src="/images/doctor.png">
                        </a>
                    </div>
                    <div class="doctor-card__doctor-head-right">
                        <div class="doctor-card__doctor-name">
                            <a href="#">
                                Манохина Дарья Дмитриевна
                            </a>
                        </div>
                        <div class="doctor-card__doctor-prices">
                            Стоимость приема
                            <p>1520₽</p>
                            <span>1900₽</span>
                        </div>
                        <div class="reviews-count doctors__clinic">
                            <div class="doctor-review-card__star">
                                <img src="/images/Star1.png">
                                <p>4,7</p>
                            </div>
                            <a href="#reviews">
                                14 отзывов
                            </a>
                        </div>
                    </div>
                </div>
                <div class="doctor-card__body">
                    <div class="doctor-card__doctor-spec">
                        Гинеколог
                    </div>
                    <div class="doctor-card__doctor-experiences">
                        <ul>
                            <li class="doctor-card__doctor-experience"> Стаж 12 лет</li>
                        </ul>
                    </div>
                    <div class="doctor-card__right">
                        <div class="doctor-card__record-clinic">
                            Клиника в Текстильщиках
                        </div>
                        <div class="doctor-card__geo">
                            <p>ул. Люблинская, д. 9 к. 1</p>
                            <ul>
                                <li class="doctor-card__metro">
                                    <img src="/images/Ellipse%2027.png">
                                    Текстильщики (338м)
                                </li>
                                <li class="doctor-card__metro"><img src="/images/Ellipse%2028.png">
                                    Печатники (2,1км)
                                </li>
                                <li class="doctor-card__metro"><img src="/images/Ellipse%2029.png">
                                    Стахановская (2,2км)
                                </li>
                            </ul>
                            <img src="/images/phone_24px.png">
                            <a href="#">(499) 123-45-67</a>
                        </div>
                        <a class="search__btn">
                            Записаться на приём
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="listing">
            <ul>
                <li>
                    <img src="/images/left-page.png">
                </li>
                <li>1</li>
                <li>2</li>
                <li>...</li>
                <li>9</li>
                <li>10</li>
                <li>
                    <img src="/images/right-page.png">
                </li>
            </ul>
        </div>


        <div>Средняя оценка организаций - 4.53 на основании 3162 отзывов и 6909 оценок</div>
        <div class="text-banner">
            <img src="/images/Vector%201.png">
            <img src="/images/sloi2.png">
            <div class="text-banner__text-block">
                <p>Подберем хорошую и недорогую<br> организацию в удобном для вас<br> районе за 1 минуту</p>
                <a href="#">(499) 123-45-67</a>
                <p>*Услуга бесплатная</p>
            </div>
        </div>

        <div class="popular-questions">
            <h5>Самые популярные вопросы</h5>
            <div class="first-questions">
                <p>Что такое гинекология?</p>
                <span>Гинекология - это отрасль медицины, которая занимается изучением, диагностикой,
                    лечением и профилактикой заболеваний женской половой системы.
                    Гинеколог это исключительно «женский» врач. Гинекология неразрывно связана с акушерством.
                </span>
            </div>
            <div class="second-questions"><p>Где лучше лечить женские заболевания?</p></div>
            <div class="third-questions"><p>Посоветуйте центр гинекологии</p></div>
        </div>

        <div class="info-about-project">
            <div class="info-about-project__left">
                <p>Гинекологические клиники Москвы:
                    114 лечебных учреждений,
                    2093 специалиста,
                    7195 отзывов пациентов,
                    цены на услуги от 500 до 533600 рублей,
                    номера телефонов, сайты, адреса, схемы проездаю
                    Сделайте выбор из списка лучших гинекологических клиник в Москве и запишитесь на приём к врачу в два
                    клика.</p>
            </div>
            <div class="info-about-project__right">
                <p>
                    <img src="/images/blue-alert.png">
                    <span>Обратите внимание!</span>
                </p>
                <span>Информация на странице
                представлена для ознакомления.
                Для назначения лечения
                    обратитесь к врачу.</span>
            </div>
        </div>

        <div class="review-card">
            <h5>Отзывы</h5>
            <div class="review-card__container">
                <div class="review-card__head">
                    <div class="review-card__left">
                        <div class="review-card__name-patient">
                            Имя +79225678902
                        </div>
                        <div class="review-card__date">
                            14.02.2022
                        </div>
                        <div class="review-card__shield">
                            <img src="/images/verifyied.png">
                            Проверено
                        </div>
                    </div>
                    <div class="review-card__right">
                        <div class="review-card__mark">
                            <img src="/images/Star1.png">
                            5
                        </div>
                        <div class="review-card__source-review">
                            ИсточникОтзыва
                        </div>
                    </div>
                </div>
                <div class="review-card__comment">
                    Комментарий
                    <p>Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней! Всегда внимательна,
                        ничего лишнего не назначит и тщательно разбирается в проблеме пациента!</p>
                </div>
                <div class="review-card__bottom">
                    <div class="review-card__photo-clinic">
                        <img src="/images/image%2033.png">
                        Клиника
                        АльтерМед
                    </div>
                </div>
            </div>
        </div>
        <div class="relinks">
            <div class="relinks__body">
                <div data-fold class="relinks__column">
                    <b class="relinks__column-title">Врачи по районам:</b>
                    <ul class="relinks__list relinks__list--mobile-row">
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                Арбат
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                Басманный
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                Замоскворечье
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                Красносельский
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                Мещанский
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                Пресненский
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                Таганский
                            </a>
                        </li>
                    </ul>
                    <button data-fold-btn class="relinks__more relinks__more--mobile-row more">
                        <span data-open-text="Показать еще" data-close-text="Свернуть"
                              class="more__text">Показать еще</span>
                        <span class="icon-arrow-more more__arrow"></span>
                    </button>
                </div>
                <div data-fold class="relinks__column">
                    <b class="relinks__column-title">Врачи рядом с метро:</b>
                    <ul class="relinks__list relinks__list--mobile-row">
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                               Авиамоторная
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                Автозаводская
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                Академическая
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                Александровский сад
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                Алексеевская
                            </a>
                        </li>
                    </ul>
                    <button data-fold-btn class="relinks__more relinks__more--mobile-row more">
                        <span data-open-text="Показать еще" data-close-text="Свернуть"
                              class="more__text">Показать еще</span><span class="icon-arrow-more more__arrow"></span>
                    </button>
                </div>
                <div data-fold class="relinks__column">
                    <b class="relinks__column-title">Клиники</b>
                    <ul class="relinks__list">
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                <img src="">
                                «Евромед»
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                <img src="">
                                «Открытая клиника»
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                <img src="">
                                «Московская клиника»
                            </a>
                        </li>
                        <li class="relinks__item">
                            <a href="" class="relinks__link">
                                <img src="">
                                «Синай»
                            </a>
                        </li>
                    </ul>
                    <button data-fold-btn="" class="relinks__more more">
                        <span data-open-text="Показать еще" data-close-text="Свернуть"
                              class="more__text">Показать еще</span><span class="icon-arrow-more more__arrow"></span>
                    </button>
                </div>

            </div>
        </div>

        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <a href="#">Москва</a>
            <a href="#">Клиники</a>
            <p>Многопрофильные клиники</p>
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
                        (499)123-45-67
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
</body>
</html>