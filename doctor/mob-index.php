<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- jquery -->
    <script src="../js/jquery.js"></script>
    <!-- маска на телефон -->
    <script src="../js/jquery.inputmask.js"></script>
    <!-- фаил стилей -->
    <link rel="stylesheet" type="text/css" href="/css/mobile-styles.css"/>
    <!-- фаил стилей к каждой карусели -->
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css"/>
    <!-- фаил общих стилей карусели -->
    <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css"/>
    <!-- бутстрап -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- бутстрап -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
    <!-- фансибокс для картинок -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
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

    <div class="doctor-menu-btn">
        <ul>
            <li><a class="menu-btn"><img src="/images/burger.png">Меню</a></li>
            <li><a href="#doctors"><img src="/images/doctor-icon.png">Врачи</a></li>
            <li><a href="#reviews"><img src="/images/review-icon.png">Отзывы</a></li>
            <li><a href="#record"><img src="/images/record-icon.png">Записаться</a></li>
        </ul>
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
                    <span>Гинеколог, акушер врач УЗИ,<br> гинеколог-эндокринолог, маммолог</span>
                    <p></p>
                </div>
                <div class="doctor-card-view__doctor-category">
                    <p>Категории</p>
                    <span>Врач высшей категории</span>
                    <p></p>
                </div>
                <div class="doctor-card-view__doctor-degree">
                    <p>Степени</p>
                    <span>Кандидат медицинских наук</span>
                    <p></p>
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
                        <li>
                            <img src="/images/child-ico.png"/>
                            <p>Работа с детьми</p>
                        </li>
                    </ul>
                </div>
                <div class="doctor-card-view__doctor-price">
                    Стоимость приема
                    <p>1520₽</p>
                    <span>1900₽</span>
                </div>
                <div class="doctor-card-view__footer">
                    <div id="record" class="record-btns">
                        <a class="search__btn js-record clinic-btn">Записаться на приём</a>
                    </div>
                    <span>Обновлено 30.03.22</span>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="clinic-drop-down-container">
            <div data-fold class="price-doctor-clinic__container">
                <button data-fold-btn class="faq__btn doctor-in-clinic">
                    <div class="price-doctor-clinic__title">
                        <h4>Клиника на Текстильщиках</h4>
                        <p>г. Москва<br> ул. Люблинская, д. 9 к. 1</p>
                    </div>
                    <a class="faq__arrow">
                        <img src="/images/right-page.png">
                    </a>
                </button>
                <div data-fold-content class="clinic-drop-down">
                    <div class="clinic-card__metro">
                        <div class="clinic-card__metro-near first-metro">
                            <span></span>
                            Текстильщики (338м)
                        </div>
                        <div class="clinic-card__metro-far second-metro">
                            <span></span>Печатники (2,1км)
                            <span></span>Стахановская (2,2км)
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
                                <div class="owl-carousel date-mob-swiper owl-theme">
                                    <div class="doctor-card-record__container">
                                        <div class="doctor-card__dates dates">
                                            <p>Сегодня</p>
                                        </div>
                                        <div class="doctor-card__schedule schedule">
                                            <div class="time-spoiler">
                                                <div class="doctor-card__time">
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio show-more-time time-spoiler-btn">
                                                        <label class="radio__label show-more-time disable js-show-more-time">
                                                            <input type="radio" name="time-appointment"
                                                                   class="radio__input"/>
                                                            <img src="/images/bot-page.png">
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-card-record__container">
                                        <div class="doctor-card__dates dates">
                                            <p>Завтра</p>
                                        </div>
                                        <div class="doctor-card__schedule schedule">
                                            <div class="time-spoiler">
                                                <div class="doctor-card__time">
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio show-more-time time-spoiler-btn">
                                                        <label class="radio__label show-more-time disable js-show-more-time">
                                                            <input type="radio" name="time-appointment"
                                                                   class="radio__input"/>
                                                            <img src="/images/bot-page.png">
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-card-record__container">
                                        <div class="doctor-card__dates dates">
                                            <p>Сегодня</p>
                                        </div>
                                        <div class="doctor-card__schedule schedule">
                                            <div class="time-spoiler">
                                                <div class="doctor-card__time">
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio show-more-time time-spoiler-btn">
                                                        <label class="radio__label show-more-time disable js-show-more-time">
                                                            <input type="radio" name="time-appointment"
                                                                   class="radio__input"/>
                                                            <img src="/images/bot-page.png">
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="full-time-doctor show-more-time time-spoiler-btn">Посмотреть полное
                                    расписание</a>
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
                <button data-fold-btn class="faq__btn doctor-in-clinic">
                    <div class="price-doctor-clinic__title">
                        <h4>Клиника на Текстильщиках</h4>
                        <p>г. Москва<br> ул. Люблинская, д. 9 к. 1</p>
                    </div>
                    <a class="faq__arrow">
                        <img src="/images/right-page.png">
                    </a>
                </button>
                <div data-fold-content class="clinic-drop-down">
                    <div class="clinic-card__metro">
                        <div class="clinic-card__metro-near first-metro">
                            <span></span>
                            Текстильщики (338м)
                        </div>
                        <div class="clinic-card__metro-far second-metro">
                            <span></span>Печатники (2,1км)
                            <span></span>Стахановская (2,2км)
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
                                <div class="owl-carousel date-mob-swiper owl-theme">
                                    <div class="doctor-card-record__container">
                                        <div class="doctor-card__dates dates">
                                            <p>Сегодня</p>
                                        </div>
                                        <div class="doctor-card__schedule schedule">
                                            <div class="time-spoiler">
                                                <div class="doctor-card__time">
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio show-more-time time-spoiler-btn">
                                                        <label class="radio__label show-more-time disable js-show-more-time">
                                                            <input type="radio" name="time-appointment"
                                                                   class="radio__input"/>
                                                            <img src="/images/bot-page.png">
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-card-record__container">
                                        <div class="doctor-card__dates dates">
                                            <p>Завтра</p>
                                        </div>
                                        <div class="doctor-card__schedule schedule">
                                            <div class="time-spoiler">
                                                <div class="doctor-card__time">
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio show-more-time time-spoiler-btn">
                                                        <label class="radio__label show-more-time disable js-show-more-time">
                                                            <input type="radio" name="time-appointment"
                                                                   class="radio__input"/>
                                                            <img src="/images/bot-page.png">
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-card-record__container">
                                        <div class="doctor-card__dates dates">
                                            <p>Сегодня</p>
                                        </div>
                                        <div class="doctor-card__schedule schedule">
                                            <div class="time-spoiler">
                                                <div class="doctor-card__time">
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio show-more-time time-spoiler-btn">
                                                        <label class="radio__label show-more-time disable js-show-more-time">
                                                            <input type="radio" name="time-appointment"
                                                                   class="radio__input"/>
                                                            <img src="/images/bot-page.png">
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                <button data-fold-btn class="faq__btn doctor-in-clinic">
                    <div class="price-doctor-clinic__title">
                        <h4>Клиника на Текстильщиках</h4>
                        <p>г. Москва<br> ул. Люблинская, д. 9 к. 1</p>
                    </div>
                    <a class="faq__arrow">
                        <img src="/images/right-page.png">
                    </a>
                </button>
                <div data-fold-content class="clinic-drop-down">
                    <div class="clinic-card__metro">
                        <div class="clinic-card__metro-near first-metro">
                            <span></span>
                            Текстильщики (338м)
                        </div>
                        <div class="clinic-card__metro-far second-metro">
                            <span></span>Печатники (2,1км)
                            <span></span>Стахановская (2,2км)
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
                                <div class="owl-carousel date-mob-swiper owl-theme">
                                    <div class="doctor-card-record__container">
                                        <div class="doctor-card__dates dates">
                                            <p>Сегодня</p>
                                        </div>
                                        <div class="doctor-card__schedule schedule">
                                            <div class="time-spoiler">
                                                <div class="doctor-card__time">
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio show-more-time time-spoiler-btn">
                                                        <label class="radio__label show-more-time disable js-show-more-time">
                                                            <input type="radio" name="time-appointment"
                                                                   class="radio__input"/>
                                                            <img src="/images/bot-page.png">
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-card-record__container">
                                        <div class="doctor-card__dates dates">
                                            <p>Завтра</p>
                                        </div>
                                        <div class="doctor-card__schedule schedule">
                                            <div class="time-spoiler">
                                                <div class="doctor-card__time">
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio show-more-time time-spoiler-btn">
                                                        <label class="radio__label show-more-time disable js-show-more-time">
                                                            <input type="radio" name="time-appointment"
                                                                   class="radio__input"/>
                                                            <img src="/images/bot-page.png">
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-card-record__container">
                                        <div class="doctor-card__dates dates">
                                            <p>Сегодня</p>
                                        </div>
                                        <div class="doctor-card__schedule schedule">
                                            <div class="time-spoiler">
                                                <div class="doctor-card__time">
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio show-more-time time-spoiler-btn">
                                                        <label class="radio__label show-more-time disable js-show-more-time">
                                                            <input type="radio" name="time-appointment"
                                                                   class="radio__input"/>
                                                            <img src="/images/bot-page.png">
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="09:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            09:30
                                                        </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label"><input type="radio"
                                                                                           value="10:00"
                                                                                           name="time-appointment"
                                                                                           class="radio__input"/>
                                                            10:00 </label>
                                                    </div>
                                                    <div class="schedule__item radio">
                                                        <label class="radio__label">
                                                            <input type="radio" value="10:30"
                                                                   name="time-appointment"
                                                                   class="radio__input"/>
                                                            10:30
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
            <div class="owl-carousel doctor-mob-swiper owl-theme">
                <div class="info-about-doctor__body">
                    <h4 class="info-about-doctor__body-title">Опыт работы</h4>
                    <div class="main-spoiler" data-id="description">
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
                    <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                </div>
                <div class="info-about-doctor__body">
                    <h4 class="info-about-doctor__body-title">Образование</h4>
                    <div class="main-spoiler" data-id="description">
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
                    <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                </div>
                <div class="info-about-doctor__body">
                    <h4 class="info-about-doctor__body-title">Повышение квалификации</h4>
                    <div class="main-spoiler" data-id="description">
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
                    <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                </div>
                <div class="info-about-doctor__body">
                    <h4 class="info-about-doctor__body-title">Документы и фотографии</h4>
                    <div class="information__photo">
                        <div class="owl-carousel photo-mob-swiper owl-theme">
                            <a class="photo-carousel" href="/images/license-clinic.png" data-fancybox="gallery">
                                <img src="/images/license-clinic.png" alt="document">
                            </a>
                            <a class="photo-carousel" href="/images/license-clinic.png" data-fancybox="gallery">
                                <img src="/images/license-clinic.png" alt="document">
                            </a>
                            <a class="photo-carousel" href="/images/license-clinic.png" data-fancybox="gallery">
                                <img src="/images/license-clinic.png" alt="document">
                            </a>
                            <a class="photo-carousel" href="/images/license-clinic.png" data-fancybox="gallery">
                                <img src="/images/license-clinic.png" alt="document">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="info-about-doctor__body">
                    <h4 class="info-about-doctor__body-title">Профиль лечения</h4>
                    <div class="main-spoiler" data-id="description">
                        <div class="information__profile">
                            <p>22%</p> Бактериальный вагиноз
                        </div>
                        <div class="information__profile">
                            <p>14%</p> Вагинит
                        </div>
                        <div class="information__profile">
                            <p>14%</p>Аменорея
                        </div>
                        <div class="information__profile">
                            <p>11%</p>Аденомиоз
                        </div>
                        <div class="information__profile">
                            <p>11%</p>Беременности невынашивание
                        </div>
                        <div class="information__profile">
                            <p>11%</p>Беременность замершая
                        </div>
                        <div class="information__profile">
                            <p>7%</p>Апоплексия яичника
                        </div>
                        <div class="information__profile">
                            <p>7%</p> Аденокарцинома матки
                        </div>
                    </div>
                    <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                </div>
            </div>
        </div>

        <div id="reviews" data-fold class="review-doctor__container">
            <div class="review-doctor__head">
                <a class="search__btn js-review">Оставить отзыв</a>
                <a class="users__side-link">Как мы проверяем отзывы?</a>
            </div>
            <div data-tabs-container class="users__wrapper">
                <div class="review-card__body">
                    <h3 class="review-doctor__title">Отзывы (14)</h3>
                    <div data-tabs class="review-doctor__marks">
                        <ul>
                            <li data-tab="negative" class="review-doctor__mark-item"><a style="color: #FC5B5D;"><img
                                            src="/images/negative-mark.png">Отрицательные</a></li>
                            <li data-tab="unverified" class="review-doctor__mark-item"><a style="color: #F1D264;"><img
                                            src="/images/neitral-mark.png">Нейтральные</a></li>
                            <li data-tab="positive" class="review-doctor__mark-item"><a style="color: #94D1A2;"><img
                                            src="/images/positive-mark.png">Положительные</a></li>
                        </ul>
                    </div>
                </div>
                <div class="users__body">
                    <div class="review-spoiler" data-id="description">
                        <div data-tabcontent="positive" class="users__tabcontent is-active">
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
                                        Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в
                                        проблеме
                                        пациента!</p>
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
                                        Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в
                                        проблеме
                                        пациента!</p>
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
                        </div>
                        <div data-tabcontent="negative" class="users__tabcontent is-active">
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
                                            3
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
                                        Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в
                                        проблеме
                                        пациента!</p>
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
                        </div>
                        <div data-tabcontent="unverified" class="users__tabcontent is-active">
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
                                            0
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
                                        Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в
                                        проблеме
                                        пациента!</p>
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
                        </div>
                    </div>
                    <a class="more-review review-spoiler-btn" data-target="description">Показать ещё отзывы</a>
                </div>
            </div>
        </div>

        <section class="section-with-slider">
            <div class="doctor-card__container-background">
                <h3 class="doctor-card__title">Популярные акушеры в районе метро "Рязанский проспект"</h3>
                <div class="doctor-card__walking-metro">380м от метро “Рязанский проспект”</div>
                <div class="owl-carousel mob-swiper owl-theme">
                    <div class="popular-doctor__doctors">
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
                                        <span>Врач высшей категории,</span>
                                        <span>Кандидат медицинских наук.</span>
                                        <span>Стаж 12 лет.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <span>Врач высшей категории,</span>
                                        <span>Кандидат медицинских наук.</span>
                                        <span>Стаж 12 лет.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <span>Врач высшей категории,</span>
                                        <span>Кандидат медицинских наук.</span>
                                        <span>Стаж 12 лет.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-doctor__doctors">
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
                                        <span>Врач высшей категории,</span>
                                        <span>Кандидат медицинских наук.</span>
                                        <span>Стаж 12 лет.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <img src="/images/bread-dot.png">
            <a href="#">Москва</a>
            <img src="/images/bread-dot.png">
            <a href="#">Врачи</a>
            <img src="/images/bread-dot.png">
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

<div class="overlay"></div>
<div class="js-record-form record-form popup" data-closehint="1">
    <a class="pp-close" href="#"></a>
    <div>
        <div class="pp-title">Запись на прием в клинику</div>
        <div class="clear border-bot">
            <div class="pp-img-clinic"><img src="/images/2446b978c4aefcffe849bb27b5593f28.jpg" alt="pic">
            </div>
            <div class="pp-clinic-name">
                <div class="h4">МедЦентрСервис в Отрадном</div>
                <ul class="clinic-address">
                    <li class="address">
                        <img src="/images/review-geo.png"/>
                        Москва, Пестеля д. 11
                    </li>
                    <li class="metro">
                        <img src="/images/region.png"/>
                        Отрадное<span>(780 м)</span>
                    </li>
                    <li class="region">
                        <img src="/images/region.png"/>
                        СВАО (Отрадное)
                    </li>
                </ul>
            </div>
        </div>
        <form method="post" class="js-form">
            <input type="hidden" name="record_type" value="clinic">
            <input type="hidden" name="clinic" value="15757">
            <ul class="input-col clear">
                <li class="left"><input required="" class="input-text" type="text" name="name"
                                        placeholder="Введите Ваше имя"></li>
                <li class="right"><input required="" class="input-text input-phone" name="phone" type="tel"
                                         placeholder="__ (___) ___-__-__"></li>
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
                <a href="/user-agreement.pdf" class="user-agreement" target="_blank">условия пользовательского
                    соглашения</a>
                и даю свое согласие на обработку персональных данных.
            </div>
        </form>
        <button class="js-close-form close-form"><img src="../images/close.png"></button>
    </div>
</div>
<div class="js-review-form review-form popup pp-rev">
    <a class="pp-close" href="#"></a>
    <div>
        <div class="pp-title">Оставить отзыв о клинике</div>
        <div class="clear border-bot">
            <div class="pp-img-clinic"><img src="/images/2446b978c4aefcffe849bb27b5593f28.jpg" alt="pic"></div>
            <div class="pp-clinic-name">
                <div class="h4">МедЦентрСервис в Отрадном</div>
                <ul class="clinic-address">
                    <li class="address"><img src="/images/review-geo.png"/>Москва, Пестеля д. 11</li>
                    <li class="region"><img src="/images/region.png"/>СВАО (Отрадное)</li>
                </ul>
            </div>
        </div>
        <form method="POST" class="js-form">
            <ul class="input-col">
                <li class="left">
                    <input class="input-text" type="text" name="name" placeholder="Введите Ваше имя">
                </li>
                <li class="right">
                    <input class="input-text input-phone" type="text" name="phone"
                           placeholder="+7 (___) ___-__-__">
                </li>
            </ul>
            <textarea class="input-text text" name="review_text"
                      placeholder="Напишите Ваш отзыв"></textarea>
            <div class="clear for-rate">
                <div class="rate-block">
                    <div>
                        <div>Ваша оценка:</div>
                        <div>
                            <ul class="rate">
                                <input type="hidden" name="rating" value="5">
                                <li class=""></li>
                                <li class=""></li>
                                <li class=""></li>
                                <li class=""></li>
                                <li class=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <button disabled class="js-submit-btn btn-disabled button" data-request="/ajax/review/">Отправить
                отзыв
            </button>
        </form>
        <button class="js-close-form close-form"><img src="../images/close.png"></button>
    </div>
</div>
<!--фансибокс -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<!--фансибокс -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!--Главный фаил со скриптами карусели -->
<script src="../js/owl.carousel.min.js"></script>
<!--Главный фаил со скриптами -->
<script src="../js/main.js"></script>
<!--Скрипт для модалок -->
<script src="../js/form.js"></script>
</body>
</html>