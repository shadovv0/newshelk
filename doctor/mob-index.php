<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/css/mobile-styles.css"/>
    <link rel="stylesheet" href="../files/swiper-bundle.min.css">

    <link rel="stylesheet" href="../files/air-datepicker.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
    <script src="../js/app.js"></script>
    <script defer src="../js/swiper-bundle.min.js"></script>
    <script defer src="../js/air-datepicker.js"></script>
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
                        <button class="search-btn"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="wrap">

        <div class="doctor-card">
            <div class="doctor-card-view__head">
                <div class="doctor-card__photo-doctor">
                    <img src="/images/card-doc.png">
                    <div class="doctor-card__surname-doctor">
                        <h1>Манохина</h1>
                    </div>
                    <div class="doctor-card__name-doctor">
                        <h1>Дарья Дмитриевна</h1>
                    </div>
                    <div class="doctor-card__experience-doctor">
                        Стаж 12 лет
                    </div>
                </div>
                <div class="popular-doctor__count-review">
                    <div class="popular-doctor__star">
                        <img src="/images/Star1.png">
                        <p>4,7</p>
                    </div>
                    <a href="#">14 отзывов</a>
                </div>
            </div>
            <div class="doctor-card-view__body">
                <div class="doctor-card-view__doctor-spec">
                    <p>Специальности</p>
                    <span>Гинеколог, акушер врач УЗИ, гинеколог-эндокринолог, маммолог</span>
                </div>
                <div class="doctor-card-view__doctor-category">
                    <p>Категории</p>
                    <span>Врач высшей категории</span>
                </div>
                <div class="doctor-card-view__doctor-degree">
                    <p>Степени</p>
                    <span>Кандидат медицинских наук</span>
                </div>
                <div class="doctor-card--advant">
                    <ul>
                        <li>
                            <img src="/images/ambulance.png"/>
                            <p>Выезд на дом</p>
                        </li>
                        <li>
                            <img src="/images/wifi-ico.png"/>
                            <p>Wi-fi</p>
                        </li>
                        <li>
                            <img src="/images/card-ico.png"/>
                            <p>Оплата картой</p>
                        </li>
                        <li>
                            <img src="/images/parking-ico.png"/>
                            <p>Парковка</p>
                        </li>
                        <li>
                            <img src="/images/pill-ico.png"/>
                            <p>Аптека</p>
                        </li>
                    </ul>
                </div>
                <div class="doctor-card-view__doctor-price">
                    Стоимость приема
                    <p>1520₽</p>
                    <span>1900₽</span>
                </div>
                <div class="doctor-card-view__footer">
                    <div class="record-btns">
                        <a class="search__btn">Записаться на приём</a>
                    </div>
                    <span>Обновлено 30.03.22</span>
                </div>
            </div>
        </div>
    </div>


    <div class="mobile-menu">
        <ul>
            <li><a class="site-header menu__link">
                    <div class="site-header__burger burger">
                        <span class="burger__line burger__line--cross"></span>
                        <span class="burger__line"></span>
                        <span class="burger__line burger__line--cross"></span>
                    </div>
                   Меню
                </a>
            </li>
            <li><a href="#"><img src="/images/doctor-icon.png">Врачи</a></li>
            <li><a href="#"><img src="/images/review-icon.png">Отзывы</a></li>
            <li><a href="#"><img src="/images/record-icon.png">Записаться</a></li>
        </ul>
    </div>


    <div class="site-header__panel burger">
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__item"><a href="#" class="menu__link">Клиники</a></li>
                <li class="menu__item"><a href="#" class="menu__link">Врачи</a></li>
                <li class="menu__item"><a href="#" class="menu__link">Услуги</a></li>
                <li class="menu__item"><a href="#" class="menu__link">Диагностика</a></li>
                <li class="menu__item"><a href="#" class="menu__link">Заболевания</a></li>
                <li class="menu__item"><a href="#" class="menu__link">Симптомы</a></li>
            </ul>
        </nav>
        <div class="site-header__support support">
            <a href="#" class="support__number">(499) 123-34-56</a>
            <div class="support__caption">Справочная</div>
        </div>
    </div>

    <div class="wrap">
        <div class="clinic-drop-down-container">
            <div data-fold class="price-doctor-clinic__container">
                <button data-fold-btn class="faq__btn">
                    <div class="price-doctor-clinic__title">
                        <h4>Клиника на Текстильщиках</h4>
                        <p>г. Москва<br> ул. Люблинская, д. 9 к. 1</p>
                    </div>
                </button>
                <div data-fold-content class="clinic-drop-down">
                    <div class="clinic-card__metro">
                        <div class="clinic-card__metro-near">
                            <img src="/images/Ellipse%2027.png">Текстильщики (338м)
                        </div>
                        <div class="clinic-card__metro-far">
                            <img src="/images/Ellipse%2028.png">Печатники (2,1км)
                            <img src="/images/Ellipse%2029.png">Стахановская (2,2км)
                        </div>
                    </div>
                    <div class="clinic-map">
                        <img src="/images/grey-map.png">
                        <a href="#">Посмотреть на карте</a>
                    </div>
                    <div class="record-btns">
                        <a href="#" class="record-btn"><img src="/images/white-phone.png">(499) 123-45-67</a>
                    </div>
                    <div class="price-doctor-clinic__price-card">
                        <div class="price-doctor-clinic__body">
                            <ul>
                                <li class="price__item">Акушер (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                                <li class="price__item">Гинеколог (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                                <li class="price__item">Гинеколог-эндокринолог<br> (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                                <li class="price__item">Маммолог (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="doctor-card__right-record">
                            <div class="doctor-card-record__container center-timeslot">
                                <div class="doctor-card__dates width-timeslot">
                                    <p>Сегодня</p>
                                </div>
                                <div class="doctor-card__schedule schedule">
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            09:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label"><input type="radio" value="10:00"
                                                                           name="time-appointment"
                                                                           class="radio__input"/> 10:00
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="10:30" name="time-appointment"
                                                   class="radio__input"/>
                                            10:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label"> <input type="radio" value="11:00"
                                                                            name="time-appointment"
                                                                            class="radio__input"/> 11:00
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            11:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            12:00
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            12:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            12:30
                                        </label>
                                    </div>
                                </div>
                                <a href="#" class="full-time-doctor">Посмотреть полное расписание</a>
                            </div>
                        </div>
                        <div class="price-doctor-clinic__footer">
                            <img src="/images/grey-alert.png">
                            <a href="#">Условия для посещения</a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-fold class="price-doctor-clinic__container">
                <button data-fold-btn class="faq__btn">
                    <div class="price-doctor-clinic__title">
                        <h4>Клиника на Текстильщиках</h4>
                        <p>г. Москва<br> ул. Люблинская, д. 9 к. 1</p>
                    </div>
                </button>
                <div data-fold-content class="clinic-drop-down">
                    <div class="clinic-card__metro">
                        <div class="clinic-card__metro-near">
                            <img src="/images/Ellipse%2027.png">Текстильщики (338м)
                        </div>
                        <div class="clinic-card__metro-far">
                            <img src="/images/Ellipse%2028.png">Печатники (2,1км)
                            <img src="/images/Ellipse%2029.png">Стахановская (2,2км)
                        </div>
                    </div>
                    <div class="clinic-map">
                        <img src="/images/grey-map.png">
                        <a href="#">Посмотреть на карте</a>
                    </div>
                    <div class="record-btns">
                        <a href="#" class="record-btn"><img src="/images/white-phone.png">(499) 123-45-67</a>
                    </div>
                    <div class="price-doctor-clinic__price-card">
                        <div class="price-doctor-clinic__body">
                            <ul>
                                <li class="price__item">Акушер (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                                <li class="price__item">Гинеколог (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                                <li class="price__item">Гинеколог-эндокринолог<br> (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                                <li class="price__item">Маммолог (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="doctor-card__right-record">
                            <div class="doctor-card-record__container center-timeslot">
                                <div class="doctor-card__dates width-timeslot">
                                    <p>Сегодня</p>
                                </div>
                                <div class="doctor-card__schedule schedule">
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            09:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label"><input type="radio" value="10:00"
                                                                           name="time-appointment"
                                                                           class="radio__input"/> 10:00
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="10:30" name="time-appointment"
                                                   class="radio__input"/>
                                            10:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label"> <input type="radio" value="11:00"
                                                                            name="time-appointment"
                                                                            class="radio__input"/> 11:00
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            11:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            12:00
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            12:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            12:30
                                        </label>
                                    </div>
                                </div>
                                <a href="#" class="full-time-doctor">Посмотреть полное расписание</a>
                            </div>
                        </div>
                        <div class="price-doctor-clinic__footer">
                            <img src="/images/grey-alert.png">
                            <a href="#">Условия для посещения</a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-fold class="price-doctor-clinic__container">
                <button data-fold-btn class="faq__btn">
                    <div class="price-doctor-clinic__title">
                        <h4>Клиника на Текстильщиках</h4>
                        <p>г. Москва<br> ул. Люблинская, д. 9 к. 1</p>
                    </div>
                </button>
                <div data-fold-content class="clinic-drop-down">
                    <div class="clinic-card__metro">
                        <div class="clinic-card__metro-near">
                            <img src="/images/Ellipse%2027.png">Текстильщики (338м)
                        </div>
                        <div class="clinic-card__metro-far">
                            <img src="/images/Ellipse%2028.png">Печатники (2,1км)
                            <img src="/images/Ellipse%2029.png">Стахановская (2,2км)
                        </div>
                    </div>
                    <div class="clinic-map">
                        <img src="/images/grey-map.png">
                        <a href="#">Посмотреть на карте</a>
                    </div>
                    <div class="record-btns">
                        <a href="#" class="record-btn"><img src="/images/white-phone.png">(499) 123-45-67</a>
                    </div>
                    <div class="price-doctor-clinic__price-card">
                        <div class="price-doctor-clinic__body">
                            <ul>
                                <li class="price__item">Акушер (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                                <li class="price__item">Гинеколог (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                                <li class="price__item">Гинеколог-эндокринолог<br> (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                                <li class="price__item">Маммолог (от 18 лет)
                                    <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="doctor-card__right-record">
                            <div class="doctor-card-record__container center-timeslot">
                                <div class="doctor-card__dates width-timeslot">
                                    <p>Сегодня</p>
                                </div>
                                <div class="doctor-card__schedule schedule">
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            09:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label"><input type="radio" value="10:00"
                                                                           name="time-appointment"
                                                                           class="radio__input"/> 10:00
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="10:30" name="time-appointment"
                                                   class="radio__input"/>
                                            10:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label"> <input type="radio" value="11:00"
                                                                            name="time-appointment"
                                                                            class="radio__input"/> 11:00
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            11:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            12:00
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            12:30
                                        </label>
                                    </div>
                                    <div class="schedule__item radio">
                                        <label class="radio__label">
                                            <input type="radio" value="09:30" name="time-appointment"
                                                   class="radio__input"/>
                                            12:30
                                        </label>
                                    </div>
                                </div>
                                <a href="#" class="full-time-doctor">Посмотреть полное расписание</a>
                            </div>
                        </div>
                        <div class="price-doctor-clinic__footer">
                            <img src="/images/grey-alert.png">
                            <a href="#">Условия для посещения</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="info-about-doctor">
            <div class="info-about-doctor__head">
                <h3 class="info-about-doctor__title">Информация о враче</h3>
                <span>Манохина Дарья Дмитриевна, Москва:
                  акушер, врач узи, гинеколог,
                  гинеколог-эндокринолог, маммолог,
                  14 отзывов пациентов, места работы,
                  стаж 12 лет
                </span>
            </div>
            <div class="info-about-doctor__body">
                <h4 class="info-about-doctor__body-title">Опыт работы</h4>
                <div class="information__card">
                    <div class="information__card-date">2002 — 2005</div>
                    <b class="information__card-title">Родильный дом при ГКБ № 20 Москва</b>
                    <p class="information__card-name">Врач</p>
                </div>
                <div class="information__card">
                    <div class="information__card-date">2011 — 2013</div>
                    <b class="information__card-title">РООИ «Здоровье человека» Москва</b>
                    <p class="information__card-name">Врач акушер-гинеколог</p>
                </div>
                <div class="information__card">
                    <div class="information__card-date">2013 — 2016</div>
                    <b class="information__card-title">ООО МЦ «У Доктора»</b>
                    <p class="information__card-name">Заведующая гинекологическим отделением</p>
                </div>
                <div class="information__card">
                    <div class="information__card-date">2016 — 2017</div>
                    <b class="information__card-title">ООО «МД КЛИНИК» </b>
                    <p class="information__card-name">Заведующая гинекологическим отделением</p>
                </div>
            </div>
        </div>

        <div data-fold class="review-doctor__container">
            <div class="review-doctor__head">
                <a class="search__btn">Отправить отзыв</a>
                <a href="#" class="users__side-link">Как мы проверяем отзывы?</a>
            </div>
            <div class="review-card__body">
                <h3 class="review-doctor__title">Отзывы (14)</h3>
                <div class="review-doctor__marks">
                    <ul>
                        <li class="review-doctor__mark-item"><a href="#" style="color: #FC5B5D;"><img
                                        src="/images/negative-mark.png">Отрицательные</a></li>
                        <li class="review-doctor__mark-item"><a href="#" style="color: #F1D264;"><img
                                        src="/images/neitral-mark.png">Нейтральные</a></li>
                        <li class="review-doctor__mark-item"><a href="#" style="color: #94D1A2;"><img
                                        src="/images/positive-mark.png">Положительные</a></li>
                    </ul>
                </div>
            </div>
            <div class="review-card__container">
                <div class="review-card__head-doctor">
                    <div class="review-card__left">
                        <div class="review-card__name-patient">
                            Имя +79225678902
                            <div class="review-card__date">
                                14.02.2022
                            </div>
                        </div>
                        <div class="review-card__mark">
                            <img src="/images/Star1.png">
                            5
                        </div>
                    </div>
                    <div class="review-card__right">
                        <div class="review-card__shield">
                            <img src="/images/verifyied.png">
                            Проверено
                        </div>
                        <div class="review-card__source-review">
                            ИсточникОтзыва
                        </div>
                    </div>
                    <div class="review-card__head__bottom">
                        <img src="/images/review-geo-blue.png">
                        Клиника на Текстильщиках
                        ул. Люблинская, д. 9 к. 1
                    </div>
                </div>
                <div class="review-card__comment">
                    Плюсы
                    <p>Давно знаю доктора Н. В. Рогову, обращаюсь только к ней!
                        Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в проблеме пациента!</p>
                    Минусы
                    <p>Сложно записаться.</p>
                </div>
                <div class="review-card__bottom">
                    <div class="user__answer">
                        <div class="user__avatar user__avatar--no-photo"><b>K</b></div>
                        <div class="user__answers">
                            <div class="user__answer-place">
                                <b>Клиника на Рязанском проспекте</b>
                            </div>
                            <div class="user__answer-date">
                                16 февраля 22 в 09:48
                            </div>
                            <div class="user__answer-content">
                                <p>Спасибо Вам за отзыв!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-fold-content class="review-card__container review-card__container--folded">
                <div class="review-card__head-doctor">
                    <div class="review-card__left">
                        <div class="review-card__name-patient">
                            Имя +79225678902
                            <div class="review-card__date">
                                14.02.2022
                            </div>
                        </div>
                        <div class="review-card__mark">
                            <img src="/images/Star1.png">
                            5
                        </div>
                    </div>
                    <div class="review-card__right">
                        <div class="review-card__shield">
                            <img src="/images/verifyied.png">
                            Проверено
                        </div>
                        <div class="review-card__source-review">
                            ИсточникОтзыва
                        </div>
                    </div>
                    <div class="review-card__head__bottom">
                        <img src="/images/review-geo-blue.png">
                        Клиника на Текстильщиках
                        ул. Люблинская, д. 9 к. 1
                    </div>
                </div>
                <div class="review-card__comment">
                    Плюсы
                    <p>Давно знаю доктора Н. В. Рогову, обращаюсь только к ней!
                        Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в проблеме пациента!</p>
                    Минусы
                    <p>Сложно записаться.</p>
                </div>
                <div class="review-card__bottom">
                    <div class="user__answer">
                        <div class="user__avatar user__avatar--no-photo"><b>K</b></div>
                        <div class="user__answers">
                            <div class="user__answer-place">
                                <b>Клиника на Рязанском проспекте</b>
                            </div>
                            <div class="user__answer-date">
                                16 февраля 22 в 09:48
                            </div>
                            <div class="user__answer-content">
                                <p>Спасибо Вам за отзыв!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button data-fold-btn class="services__more more">
                        <span data-open-text="Показать еще" data-close-text="Свернуть"
                              class="more__text">Показать еще</span>
                <span class="more__arrow icon-arrow-more"></span>
            </button>
        </div>

        <section class="section-with-slider">
            <div class="popular-doctor">
                <div class="section-with-slider__header">
                    <h4 class="popular-doctor__title">Популярные
                        <ins>акушеры в районе метро “Рязанский проспект”</ins>
                    </h4>
                </div>
                <div class="swiper swiper-main">
                    <div class="swiper-main__wrapper swiper-wrapper">
                        <div class="section-with-slider__navigation">
                            <div class="arrow arrow--prev"><span class="icon-arrow-more"><img
                                            src="/images/left-page.png"></span></div>
                        </div>
                        <div class="swiper-main__slide swiper-slide">
                            <div class="popular-doctor__container">
                                <div class="popular-doctor__doctor-card">
                                    <div class="popular-doctor__head">
                                        <div class="popular-doctor__photo">
                                            <img src="/images/doctor.png">
                                        </div>
                                        <div class="popular-doctor__doctor-info">
                                            <div class="popular-doctor__name">
                                                Манохина Дарья<br>
                                                Даниловна
                                            </div>
                                            <div class="popular-doctor__price">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                            <div class="popular-doctor__count-review">
                                                <div class="popular-doctor__star">
                                                    <img src="/images/Star1.png">
                                                    <p>4,7</p>
                                                </div>
                                                <a href="#">8 отзывов</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popular-doctor__body">
                                        <div class="popular-doctor__metro">
                                            Текстильщики (978м)
                                        </div>
                                        <div class="popular-doctor__address">
                                            ул. Люблинская, д. 9 к. 1
                                        </div>
                                        <div class="popular-doctor__spec">
                                            Гинеколог • акушер врач УЗИ
                                        </div>
                                        <div class="popular-doctor__category-experience">
                                            Врач высшей категории,<br>
                                            Кандидат медицинских наук.<br>
                                            Стаж 12 лет.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-main__slide swiper-slide">
                            <div class="popular-doctor__container">
                                <div class="popular-doctor__doctor-card">
                                    <div class="popular-doctor__head">
                                        <div class="popular-doctor__photo">
                                            <img src="/images/doctor.png">
                                        </div>
                                        <div class="popular-doctor__doctor-info">
                                            <div class="popular-doctor__name">
                                                Манохина Дарья<br>
                                                Даниловна
                                            </div>
                                            <div class="popular-doctor__price">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                            <div class="popular-doctor__count-review">
                                                <div class="popular-doctor__star">
                                                    <img src="/images/Star1.png">
                                                    <p>4,7</p>
                                                </div>
                                                <a href="#">8 отзывов</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popular-doctor__body">
                                        <div class="popular-doctor__metro">
                                            Текстильщики (978м)
                                        </div>
                                        <div class="popular-doctor__address">
                                            ул. Люблинская, д. 9 к. 1
                                        </div>
                                        <div class="popular-doctor__spec">
                                            Гинеколог • акушер врач УЗИ
                                        </div>
                                        <div class="popular-doctor__category-experience">
                                            Врач высшей категории,<br>
                                            Кандидат медицинских наук.<br>
                                            Стаж 12 лет.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-main__slide swiper-slide">
                            <div class="popular-doctor__container">
                                <div class="popular-doctor__doctor-card">
                                    <div class="popular-doctor__head">
                                        <div class="popular-doctor__photo">
                                            <img src="/images/doctor.png">
                                        </div>
                                        <div class="popular-doctor__doctor-info">
                                            <div class="popular-doctor__name">
                                                Манохина Дарья<br>
                                                Даниловна
                                            </div>
                                            <div class="popular-doctor__price">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                            <div class="popular-doctor__count-review">
                                                <div class="popular-doctor__star">
                                                    <img src="/images/Star1.png">
                                                    <p>4,7</p>
                                                </div>
                                                <a href="#">8 отзывов</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popular-doctor__body">
                                        <div class="popular-doctor__metro">
                                            Текстильщики (978м)
                                        </div>
                                        <div class="popular-doctor__address">
                                            ул. Люблинская, д. 9 к. 1
                                        </div>
                                        <div class="popular-doctor__spec">
                                            Гинеколог • акушер врач УЗИ
                                        </div>
                                        <div class="popular-doctor__category-experience">
                                            Врач высшей категории,<br>
                                            Кандидат медицинских наук.<br>
                                            Стаж 12 лет.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-main__slide swiper-slide">
                            <div class="popular-doctor__container">
                                <div class="popular-doctor__doctor-card">
                                    <div class="popular-doctor__head">
                                        <div class="popular-doctor__photo">
                                            <img src="/images/doctor.png">
                                        </div>
                                        <div class="popular-doctor__doctor-info">
                                            <div class="popular-doctor__name">
                                                Манохина Дарья<br>
                                                Даниловна
                                            </div>
                                            <div class="popular-doctor__price">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                            <div class="popular-doctor__count-review">
                                                <div class="popular-doctor__star">
                                                    <img src="/images/Star1.png">
                                                    <p>4,7</p>
                                                </div>
                                                <a href="#">8 отзывов</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popular-doctor__body">
                                        <div class="popular-doctor__metro">
                                            Текстильщики (978м)
                                        </div>
                                        <div class="popular-doctor__address">
                                            ул. Люблинская, д. 9 к. 1
                                        </div>
                                        <div class="popular-doctor__spec">
                                            Гинеколог • акушер врач УЗИ
                                        </div>
                                        <div class="popular-doctor__category-experience">
                                            Врач высшей категории,<br>
                                            Кандидат медицинских наук.<br>
                                            Стаж 12 лет.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-with-slider__navigation">
                            <div class="arrow arrow--next"><span class="icon-arrow-more"><img
                                            src="/images/right-page.png"></span></div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-main__pagination"></div>
                </div>
            </div>
        </section>

        <div class="doctor-card__container-background">
            <h3 class="doctor-card__title">Популярные акушеры в районе метро "Рязанский проспект"</h3>
            <div class="doctor-card__walking-metro">380м от метро “Рязанский проспект”</div>

            <div class="popular-doctor__container">
                <div class="popular-doctor__doctor-card-district">
                    <div class="popular-doctor__head-district">
                        <div class="popular-doctor__photo">
                            <img src="/images/doctor.png">
                        </div>
                        <div class="popular-doctor__doctor-info-district">
                            <div class="popular-doctor__name">
                                Манохина Дарья<br>
                                Даниловна
                            </div>
                            <div class="popular-doctor__price">
                                Стоимость приема
                                <p>1520₽</p>
                                <span>1900₽</span>
                            </div>
                            <div class="popular-doctor__count">
                                <div class="popular-doctor__star">
                                    <img src="/images/Star1.png">
                                    <p>4,7</p>
                                </div>
                                <a class="reviews-underline" href="#">8 отзывов</a>
                            </div>
                        </div>
                    </div>
                    <div class="popular-doctor__body">
                        <div class="popular-doctor__metro">
                            <img src="/images/ellipse15.png">
                            Текстильщики (978м)
                        </div>
                        <div class="popular-doctor__address">
                            ул. Люблинская, д. 9 к. 1
                        </div>
                        <div class="popular-doctor__spec">
                            Гинеколог • акушер врач УЗИ
                        </div>
                        <div class="popular-doctor__category-experience">
                            Врач высшей категории,<br>
                            Кандидат медицинских наук.<br>
                            Стаж 12 лет.
                        </div>
                    </div>
                </div>
            </div>

            <div class="popular-doctor__container">
                <div class="popular-doctor__doctor-card-district">
                    <div class="popular-doctor__head-district">
                        <div class="popular-doctor__photo">
                            <img src="/images/doctor.png">
                        </div>
                        <div class="popular-doctor__doctor-info-district">
                            <div class="popular-doctor__name">
                                Манохина Дарья<br>
                                Даниловна
                            </div>
                            <div class="popular-doctor__price">
                                Стоимость приема
                                <p>1520₽</p>
                                <span>1900₽</span>
                            </div>
                            <div class="popular-doctor__count">
                                <div class="popular-doctor__star">
                                    <img src="/images/Star1.png">
                                    <p>4,7</p>
                                </div>
                                <a class="reviews-underline" href="#">8 отзывов</a>
                            </div>
                        </div>
                    </div>
                    <div class="popular-doctor__body">
                        <div class="popular-doctor__metro">
                            <img src="/images/ellipse15.png">
                            Текстильщики (978м)
                        </div>
                        <div class="popular-doctor__address">
                            ул. Люблинская, д. 9 к. 1
                        </div>
                        <div class="popular-doctor__spec">
                            Гинеколог • акушер врач УЗИ
                        </div>
                        <div class="popular-doctor__category-experience">
                            Врач высшей категории,<br>
                            Кандидат медицинских наук.<br>
                            Стаж 12 лет.
                        </div>
                    </div>
                </div>
            </div>

            <div class="popular-doctor__container">
                <div class="popular-doctor__doctor-card-district">
                    <div class="popular-doctor__head-district">
                        <div class="popular-doctor__photo">
                            <img src="/images/doctor.png">
                        </div>
                        <div class="popular-doctor__doctor-info-district">
                            <div class="popular-doctor__name">
                                Манохина Дарья<br>
                                Даниловна
                            </div>
                            <div class="popular-doctor__price">
                                Стоимость приема
                                <p>1520₽</p>
                                <span>1900₽</span>
                            </div>
                            <div class="popular-doctor__count">
                                <div class="popular-doctor__star">
                                    <img src="/images/Star1.png">
                                    <p>4,7</p>
                                </div>
                                <a class="reviews-underline" href="#">8 отзывов</a>
                            </div>
                        </div>
                    </div>
                    <div class="popular-doctor__body">
                        <div class="popular-doctor__metro">
                            <img src="/images/ellipse15.png">
                            Текстильщики (978м)
                        </div>
                        <div class="popular-doctor__address">
                            ул. Люблинская, д. 9 к. 1
                        </div>
                        <div class="popular-doctor__spec">
                            Гинеколог • акушер врач УЗИ
                        </div>
                        <div class="popular-doctor__category-experience">
                            Врач высшей категории,<br>
                            Кандидат медицинских наук.<br>
                            Стаж 12 лет.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <a href="#">Москва</a>
            <a href="#">Врачи</a>
            <a href="#">Гинекологи</a>
            <p>Манохина Дарья Дмитриевна</p>
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
<div class="popup pp-entry-clinic-115191" data-closehint="1" >
    <a class="pp-close" href="#"></a>
    <div style="overflow-y: scroll">
        <div class="pp-title">Запись на прием в клинику</div>
        <div class="clear border-bot">
            <div class="pp-img-clinic"><img src="/images/2446b978c4aefcffe849bb27b5593f28.jpg" alt="pic">
            </div>
            <div class="pp-clinic-name">
                <div class="h4">МедЦентрСервис в Отрадном</div>
                <ul class="clinic-address">
                    <li class="address">
                        <img src="/images/review-geo.png" />
                        Москва, Пестеля д. 11
                    </li>
                    <li class="metro">
                        <img src="/images/region.png" />
                        Отрадное<span>(780 м)</span>
                    </li>
                    <li class="region">
                        <img src="/images/region.png" />
                        СВАО (Отрадное)
                    </li>
                </ul>
            </div>
        </div>
        <form method="post" class="js-form">
            <input type="hidden" name="record_type" value="clinic">
            <input type="hidden" name="clinic" value="15757">
            <ul class="input-col clear">
                <li class="left"><input required="" class="input-text" type="text" name="name" placeholder="Введите Ваше имя"></li>
                <li class="right"><input required="" class="input-text input-phone" name="phone" type="tel" placeholder="__ (___) ___-__-__"></li>
            </ul>
            <input type="text" name="comment" class="input-text" placeholder="Введите комментарий">
            <div class="pp-hint">После отправки данных с Вами свяжется оператор клиники для
                подтверждения записи.
            </div>
            <button disabled="" class="button btn-disabled js-submit-btn" data-request="/ajax/record/">Записаться
            </button>
            <div class="center">
                <p>Для записи в клинику Вы также можете позвонить по телефону</p>
                <a class="phone-link" href="tel:+74951518866">+7 (495) 151-88-66</a>
            </div>
            <div class="center">
                Нажимая «Записаться», я принимаю
                <a href="/user-agreement.pdf" class="user-agreement" target="_blank">условия пользовательского соглашения</a>
                и даю свое согласие на обработку персональных данных.
            </div>
        </form>
    </div>
</div>
</body>
</html>