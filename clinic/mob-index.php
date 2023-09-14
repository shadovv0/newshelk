<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="../js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/mobile-styles.css"/>
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="head__container">
        <div class="wrap clear">
            <a class="menu-btn">
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
    <div class="mobile-menu">
        <ul>
            <li><a class="left-sb-btn"><img src="/images/burger.png">Меню</a></li>
            <li><a href="#doctors"><img src="/images/doctor-icon.png">Врачи</a></li>
            <li><a href="#reviews"><img src="/images/review-icon.png">Отзывы</a></li>
            <li><a href="#record"><img src="/images/record-icon.png">Записаться</a></li>
        </ul>
    </div>
    <div class="bot-menu">
        <div class="bot-sidebar">
            <ul>
                <li class="clinic-menu"><a href="#price" class="clinic-menu-item">Цены</a></li>
                <li class="clinic-menu"><a href="#license" class="clinic-menu-item">Лицензии</a></li>
                <li class="clinic-menu"><a href="#photo-clinic" class="clinic-menu-item">Фотографии клиники</a></li>
                <li class="clinic-menu"><a href="#video-clinic" class="clinic-menu-item">Видео обзор клиники</a>
                </li>
                <li class="clinic-menu"><a href="#other-clinic" class="clinic-menu-item">Другие клиники сети</a>
                </li>
                <li class="clinic-menu"><a href="#similar-clinic" class="clinic-menu-item">Похожие клиники</a></li>
            </ul>
        </div>
    </div>
    <div class="wrap">
        <div class="clinic-card__container">
            <div class="clinic-card">
                <div class="clinic-card__head">
                    <div class="clinic-card__photo-clinic">
                        <a href="">
                            <img src="/images/clinic-image.png">
                        </a>
                    </div>
                    <div class="clinic-card__name">
                        <h1>
                            Клиника на Текстильщиках
                        </h1>
                    </div>
                    <div class="clinic-card__type-clinic">
                        Многопрофильная медицинская <br>клиника, г.Москва
                    </div>
                    <div class="clinic-card__reviews">
                        <div class="clinic-card__star">
                            <img src="/images/Star1.png">
                            <p>4,7</p>
                        </div>
                        <a href="#">8 отзывов</a>
                    </div>
                    <div class="clinic-card__address">
                        г. Москва ул. Люблинская, д. 9 к. 1
                    </div>
                </div>
                <div class="clinic-card__body">
                    <div class="clinic-card__clinic-schedule-view">
                        Часы приёма:
                        <p>Пн-Пт 10:00-20:00 Сб-Вс 10:00-18:00</p>
                    </div>
                    <div class="clinic-card__ambulance-house">
                        <img src="/images/ambulance.png">
                        Выезд на дом
                    </div>
                    <div class="clinic-card__metro">
                        <div class="clinic-card__metro-near first-metro">
                            <span></span>
                            Текстильщики (338м)
                        </div>
                        <div class="clinic-card__metro-far second-metro">
                            <span></span>
                            Печатники (2,1км)
                            <span></span>
                            Стахановская (2,2км)
                        </div>
                    </div>
                    <div class="clinic-card__footer">
                        <div class="clinic-card__phones">
                            <img src="/images/phone_24px.png">
                            <a href="#">(499) 123-45-67</a>
                        </div>
                        <a class="search__btn js-record">
                            Запись на приём
                        </a>
                    </div>
                </div>
            </div>
            <p class="mob-map">
                <img src="/images/mob-map.png">
            </p>
            <div class="clinic-additional">
                <span>Обновлено 30.03.22</span>
                <ul>
                    <div class="owl-carousel services-clinic-swiper owl-theme">
                        <li><img src="/images/grey-parking.png">
                            <p>Большая<br> парковка</p></li>
                        <li><img src="/images/grey-pay.png">
                            <p>Оплата наличными и картами</p></li>
                        <li><img src="/images/grey-child.png">
                            <p>Приём<br> детей от 7 лет</p></li>
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
                    </div>
                </ul>
            </div>
            <div class="clinic-card__about-clinic">
                Многопрофильная медицинская клиника "Клиника на Текстильщиках" в Москве.
                Наш центр предоставляет полный перечень медицинских услуг
                и консультации лучших специалистов.
                Клиника была открыта в 1998 году и много-много другой информации.
                <p>Входит в состав клиник “Название”</p>
                <p>Руководитель Иванов И.И.</p>
            </div>
            <div class="clinic-card__email"><a href="#">kakaya-to.klinica.ru</a></div>
            <div class="clinic-card__popular-service">
                <h3>Популярные услуги:</h3>
                <ul>
                    <div class="owl-carousel services-clinic-swiper owl-theme">
                        <li>Приём <br>гинеколога от 1000₽</li>
                        <li>Приём <br>гинеколога от 1000₽</li>
                        <li>Приём <br>гинеколога от 1000₽</li>
                        <li>Приём <br>уролога от 1000₽</li>
                        <li>Приём <br>уролога от 1000₽</li>
                        <li>Приём <br>уролога от 1000₽</li>
                        <li>Приём <br>венеролога от 1000₽</li>
                        <li>Приём <br>венеролога от 1000₽</li>
                        <li>Приём <br>венеролога от 1000₽</li>
                    </div>
                </ul>
            </div>
        </div>

        <div id="price" class="price-clinic__container">
            <h3 class="price-clinic__title">Цены</h3>
            <div class="price-clinic__price-card">
                <div class="price-clinic__head">
                    <span>
                    <img src="/images/phone_24px.png">
                    <a href="#" class="clinic-phone">(499) 123-45-67</a>
                    </span>
                    <a id="record" class="search__btn js-record">
                        Записаться на приём
                    </a>
                </div>
                <div data-fold class="price-clinic__body">
                    <button data-fold-btn class="faq__btn is-active">
                        <h4 class="price-clinic__name-service">Гинекология</h4>
                        <a class="faq__arrow">
                            <img src="/images/right-page.png">
                        </a>
                    </button>
                    <ul data-fold-content class="is-expanded" style="height: auto">
                        <div class="main-spoiler" data-id="description">
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
                        </div>
                        <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                    </ul>
                </div>
                <div data-fold class="price-clinic__body">
                    <button data-fold-btn class="faq__btn">
                        <h4 class="price-clinic__name-service">Урология</h4>
                        <a class="faq__arrow">
                            <img src="/images/right-page.png">
                        </a>
                    </button>
                    <ul data-fold-content>
                        <div class="main-spoiler" data-id="description">
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
                        </div>
                        <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                    </ul>
                </div>
                <div data-fold class="price-clinic__body">
                    <button data-fold-btn class="faq__btn">
                        <h4 class="price-clinic__name-service">Венерология</h4>
                        <a class="faq__arrow">
                            <img src="/images/right-page.png">
                        </a>
                    </button>
                    <ul data-fold-content>
                        <div class="main-spoiler" data-id="description">
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
                        </div>
                        <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                    </ul>
                </div>
                <div data-fold class="price-clinic__body">
                    <button data-fold-btn class="faq__btn">
                        <h4 class="price-clinic__name-service">Отоларингология</h4>
                        <a class="faq__arrow">
                            <img src="/images/right-page.png">
                        </a>
                    </button>
                    <ul data-fold-content>
                        <div class="main-spoiler" data-id="description">
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
                        </div>
                        <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                    </ul>
                </div>
                <div class="price-clinic__footer">
                    <img src="/images/grey-alert.png">
                    <a href="#">Условия для посещения</a>
                </div>
            </div>
        </div>

        <section id="doctors">
            <div class="listing-container">
                <div class="listing__header listing__header--clinic">
                    <h2>Врачи клиники</h2>
                </div>
                <div class="listing__body">
                    <div class="doctor-card__listing__item">
                        <form data-fold action="#" data-appointment class="doctor-card__body">
                            <div class="doctor-card__listing-title">
                                <button data-fold-btn class="faq__btn is-active">
                                    <h5>Гинекологи</h5>
                                    <a class="faq__arrow">
                                        <img src="/images/right-page.png">
                                    </a>
                                </button>
                            </div>
                            <div data-fold-content class="doctor-card__content is-expanded" style="height: auto">
                                <div class="doctor-card__listing">
                                    <div class="count-doctor-spec">126 гинекологов</div>
                                    <div class="doctor-card-clinic__head">
                                        <div class="photo-doctor-listing">
                                            <a href="#">
                                                <img src="/images/doctor.png">
                                            </a>
                                        </div>
                                        <div class="doctor-card__listing-right">
                                            <div class="doctor-card__doctor-name">
                                                <a href="#">
                                                    Манохина Дарья<br>
                                                    Даниловна
                                                </a>
                                            </div>
                                            <div class="popular-doctor__price">
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
                                                    8 отзывов
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-card-clinic__center">
                                        <div class="doctor-card-clinic__clinic-name">
                                            Клиника на Текстильщиках
                                        </div>
                                        <div class="doctor-card-clinic__clinic-address">
                                            г. Москва,<br> ул. Люблинская, д. 9 к. 1
                                        </div>
                                        <div class="doctor-card-clinic__phone">
                                            <img src="/images/phone_24px.png">
                                            <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                        </div>
                                        <div class="doctor-card-clinic__doctor-spec-listing">
                                            Гинеколог • акушер врач УЗИ
                                        </div>
                                        <div class="doctor-card-clinic__doctor-experiences-listing">
                                            Врач высшей категории.<br>
                                            Кандидат медицинских наук.<br>
                                            Стаж 12 лет
                                        </div>
                                    </div>
                                    <div class="doctor-card__right-record">
                                        <div class="owl-carousel date-mob-swiper owl-theme">
                                            <div class="doctor-card-record__container">
                                                <div class="doctor-card__dates dates">
                                                    <p>Сегодня</p>
                                                </div>
                                                <div class="doctor-card__schedule schedule">
                                                    Нет записи
                                                </div>
                                            </div>
                                            <div class="doctor-card-record__container">
                                                <div class="doctor-card__dates dates">
                                                    <p>Завтра</p>
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
                                                </div>
                                            </div>
                                            <div class="doctor-card-record__container">
                                                <div class="doctor-card__dates dates">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-appointment="btn" class="is-hidden"></button>
                        </form>
                        <form data-fold action="#" data-appointment class="doctor-card__body">
                            <div class="doctor-card__listing-title">
                                <button data-fold-btn class="faq__btn">
                                    <h5>Урологи</h5>
                                    <a class="faq__arrow">
                                        <img src="/images/right-page.png">
                                    </a>
                                </button>
                            </div>
                            <div data-fold-content class="doctor-card__content">
                                <div class="doctor-card__listing">
                                    <div class="count-doctor-spec">126 урологов</div>
                                    <div class="doctor-card-clinic__head">
                                        <div class="photo-doctor">
                                            <a href="#">
                                                <img src="/images/image%2016.png">
                                            </a>
                                        </div>
                                        <div class="doctor-card__listing-right">
                                            <div class="doctor-card__doctor-name">
                                                <a href="#">
                                                    Манохина Дарья Дмитриевна
                                                </a>
                                            </div>
                                            <div class="popular-doctor__price">
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
                                    <div class="doctor-card-clinic__center">
                                        <div class="doctor-card-clinic__clinic-name">
                                            Клиника на Текстильщиках
                                        </div>
                                        <div class="doctor-card-clinic__clinic-address">
                                            г. Москва ул. Люблинская, д. 9 к. 1
                                        </div>
                                        <div class="doctor-card-clinic__phone">
                                            <img src="/images/phone_24px.png">
                                            <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                        </div>
                                        <div class="doctor-card-clinic__doctor-spec-listing">
                                            Гинеколог • акушер врач УЗИ
                                        </div>
                                        <div class="doctor-card-clinic__doctor-experiences-listing">
                                            Врач высшей категории.<br>
                                            Кандидат медицинских наук.<br>
                                            Стаж 12 лет
                                        </div>
                                    </div>
                                    <div class="doctor-card__right-record">
                                        <div class="doctor-card-record__container">
                                            <div class="doctor-card__dates dates">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-appointment="btn" class="is-hidden"></button>
                        </form>
                        <form data-fold action="#" data-appointment class="doctor-card__body">
                            <div class="doctor-card__listing-title">
                                <button data-fold-btn class="faq__btn">
                                    <h5>Венерологи</h5>
                                    <a class="faq__arrow">
                                        <img src="/images/right-page.png">
                                    </a>
                                </button>
                            </div>
                            <div data-fold-content class="doctor-card__content">
                                <div class="count-doctor-spec">126 венерологов</div>
                                <div class="doctor-card__listing">
                                    <div class="doctor-card-clinic__head">
                                        <div class="photo-doctor">
                                            <a href="#">
                                                <img src="/images/image%2016.png">
                                            </a>
                                        </div>
                                        <div class="doctor-card__listing-right">
                                            <div class="doctor-card__doctor-name">
                                                <a href="#">
                                                    Манохина Дарья Дмитриевна
                                                </a>
                                            </div>
                                            <div class="popular-doctor__price">
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
                                    <div class="doctor-card-clinic__center">
                                        <div class="doctor-card-clinic__clinic-name">
                                            Клиника на Текстильщиках
                                        </div>
                                        <div class="doctor-card-clinic__clinic-address">
                                            г. Москва ул. Люблинская, д. 9 к. 1
                                        </div>
                                        <div class="doctor-card-clinic__phone">
                                            <img src="/images/phone_24px.png">
                                            <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                        </div>
                                        <div class="doctor-card-clinic__doctor-spec-listing">
                                            Гинеколог • акушер врач УЗИ
                                        </div>
                                        <div class="doctor-card-clinic__doctor-experiences-listing">
                                            Врач высшей категории.<br>
                                            Кандидат медицинских наук.<br>
                                            Стаж 12 лет
                                        </div>
                                    </div>
                                    <div class="doctor-card__right-record">
                                        <div class="doctor-card-record__container">
                                            <div class="doctor-card__dates dates">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-appointment="btn" class="is-hidden"></button>
                        </form>
                        <form data-fold action="#" data-appointment class="doctor-card__body">
                            <div class="doctor-card__listing-title">
                                <button data-fold-btn class="faq__btn">
                                    <h5>Отоларингологи</h5>
                                    <a class="faq__arrow">
                                        <img src="/images/right-page.png">
                                    </a>
                                </button>
                            </div>
                            <div data-fold-content class="doctor-card__content is-expanded">
                                <div class="count-doctor-spec">126 отоларингологов</div>
                                <div class="doctor-card__listing">
                                    <div class="doctor-card-clinic__head">
                                        <div class="photo-doctor">
                                            <a href="#">
                                                <img src="/images/image%2016.png">
                                            </a>
                                        </div>
                                        <div class="doctor-card__listing-right">
                                            <div class="doctor-card__doctor-name">
                                                <a href="#">
                                                    Манохина Дарья Дмитриевна
                                                </a>
                                            </div>
                                            <div class="popular-doctor__price">
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
                                    <div class="doctor-card-clinic__center">
                                        <div class="doctor-card-clinic__clinic-name">
                                            Клиника на Текстильщиках
                                        </div>
                                        <div class="doctor-card-clinic__clinic-address">
                                            г. Москва ул. Люблинская, д. 9 к. 1
                                        </div>
                                        <div class="doctor-card-clinic__phone">
                                            <img src="/images/phone_24px.png">
                                            <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                        </div>
                                        <div class="doctor-card-clinic__doctor-spec-listing">
                                            Гинеколог • акушер врач УЗИ
                                        </div>
                                        <div class="doctor-card-clinic__doctor-experiences-listing">
                                            Врач высшей категории.<br>
                                            Кандидат медицинских наук.<br>
                                            Стаж 12 лет
                                        </div>
                                    </div>
                                    <div class="doctor-card__right-record">
                                        <div class="doctor-card-record__container">
                                            <div class="doctor-card__dates dates">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-appointment="btn" class="is-hidden"></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="listing-container">
            <div class="listing__header listing__header--clinic">
                <h2>Отзывы</h2>
            </div>
            <div id="reviews" class="listing__container-body">
                <div class="listing-doctor-btn">
                    <a data-popup-btn="review" class="users__btn search__btn js-review">Оставить отзыв</a>
                    <a href="#" class="users__side-link">Как мы проверяем отзывы?</a>
                </div>
                <div data-tabs-container class="users__wrapper">
                    <div class="users__side">
                        <h4>Отзывы (14)</h4>
                        <div data-tabs class="users__tabs-marks mobile-overflow">
                            <a data-tab="all" class="disable">Все</a>
                            <a data-tab="positive" class="green"><img src="/images/Star1.png">5</a>
                            <a data-tab="positive" class="disable"><img src="/images/grey-star.png">4</a>
                            <a data-tab="negative" class="red"><img src="/images/Star1.png">3</a>
                            <a data-tab="negative" class="disable"><img src="/images/grey-star.png">2</a>
                            <a data-tab="negative" class="disable"><img src="/images/grey-star.png">1</a>
                        </div>
                    </div>
                    <div class="users__body">
                        <div class="review-spoiler" data-id="description">
                            <div data-tabcontent="positive" class="users__tabcontent is-active">
                                <div class="user">
                                    <div class="user__info">
                                        <div class="user__info-top">
                                            <div class="user__info-top-right">
                                                <div class="user__social">
                                                    <b>Имя пациента</b><br>
                                                    <span>14.02.2022</span>
                                                </div>
                                                <div class="review-card__mark">
                                                    <img src="/images/Star1.png">
                                                    5
                                                </div>
                                            </div>
                                            <div class="user__status">
                                                <p>
                                                    <img src="/images/verifyied.png">
                                                    Проверено
                                                </p>
                                                <div class="review-card__source-review">
                                                    ИсточникОтзыва
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-card__head__bottom">
                                        <img src="/images/review-geo.png">
                                        <span>
                                    <b>Клиника на Текстильщиках</b><br>
                                    ул. Люблинская, д. 9 к. 1
                                    </span>
                                    </div>
                                    <div class="review-card__head__bottom-doctor">
                                        <img src="/images/review-human.png">
                                        <span>Отзыв о враче:
                                        <br><b>Манохина Дарья Даниловная</b>
                                    </span>
                                    </div>
                                    <div class="review-card__comment">
                                        Плюсы
                                        <p>Давно знаю доктора Н. В. Рогову, обращаюсь только к ней!
                                            Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в
                                            проблеме пациента!</p>
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
                                <div class="user">
                                    <div class="user__info">
                                        <div class="user__info-top">
                                            <div class="user__info-top-right">
                                                <div class="user__social">
                                                    <b>Имя пациента</b><br>
                                                    <span>14.02.2022</span>
                                                </div>
                                                <div class="review-card__mark-red">
                                                    <img src="/images/Star1.png">
                                                    3
                                                </div>
                                            </div>
                                            <div class="user__status">
                                                <p>
                                                    <img src="/images/verifyied.png">
                                                    Проверено
                                                </p>
                                                <div class="review-card__source-review">
                                                    ИсточникОтзыва
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-card__head__bottom">
                                        <img src="/images/review-geo.png">
                                        <span>
                                    <b>Клиника на Текстильщиках</b><br>
                                    ул. Люблинская, д. 9 к. 1
                                    </span>
                                    </div>
                                    <div class="review-card__head__bottom-doctor">
                                        <img src="/images/review-human.png">
                                        <span>Отзыв о враче:
                                        <br><b>Манохина Дарья Даниловная</b>
                                    </span>
                                    </div>
                                    <div class="review-card__comment">
                                        Плюсы
                                        <p>Давно знаю доктора Н. В. Рогову, обращаюсь только к ней!
                                            Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в
                                            проблеме пациента!</p>
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
        </div>


        <div class="media-clinic">
            <h3 class="license-clinic-title">Лицензии клиники</h3>
            <div id="license" class="license-container">
                <div class="owl-carousel mob-swiper owl-theme">
                    <a href="/images/license-clinic.png" data-fancybox="gallery">
                        <img src="/images/license-clinic.png" alt="license"/>
                    </a>
                    <a href="/images/license-clinic.png" data-fancybox="gallery">
                        <img src="/images/license-clinic.png" alt="license"/>
                    </a>
                    <a href="/images/license-clinic.png" data-fancybox="gallery">
                        <img src="/images/license-clinic.png" alt="license"/>
                    </a>
                    <a href="/images/license-clinic.png" data-fancybox="gallery">
                        <img src="/images/license-clinic.png" alt="license"/>
                    </a>
                    <a href="/images/license-clinic.png" data-fancybox="gallery">
                        <img src="/images/license-clinic.png" alt="license"/>
                    </a>
                    <a href="/images/license-clinic.png" data-fancybox="gallery">
                        <img src="/images/license-clinic.png" alt="license"/>
                    </a>
                    <a href="/images/license-clinic.png" data-fancybox="gallery">
                        <img src="/images/license-clinic.png" alt="license"/>
                    </a>
                    <a href="/images/license-clinic.png" data-fancybox="gallery">
                        <img src="/images/license-clinic.png" alt="license"/>
                    </a>
                    <a href="/images/license-clinic.png" data-fancybox="gallery">
                        <img src="/images/license-clinic.png" alt="license"/>
                    </a>
                </div>
            </div>
            <h3 class="photo-clinic__title">Фотографии клиники</h3>
            <div id="photo-clinic" class="photo-clinic__container">
                <div class="owl-carousel mob-swiper owl-theme">
                    <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                        <img src="/images/photo-clinic-1.png" alt="photo">
                    </a>
                    <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                        <img src="/images/photo-clinic-1.png" alt="photo">
                    </a>
                    <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                        <img src="/images/photo-clinic-1.png" alt="photo">
                    </a>
                </div>
            </div>
            <h3 class="video-clinic__title">Видео обзор клиники</h3>
            <div id="video-clinic" class="video-clinic__container">
                <iframe width="auto" height="auto" src="https://www.youtube.com/embed/K5LhfmEgFuM"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                </iframe>
            </div>
        </div>

        <div class="other-clinic__container">
            <h3 class="other-clinics__title-mob">Другие клиники сети</h3>
            <div id="other-clinic" class="owl-carousel mob-swiper owl-theme">
                <div class="other-clinics__clinic-card">
                    <div class="other-clinics__head">
                        <div class="other-clinics__photos">
                            <img src="/images/clinic.png">
                        </div>
                        <div class="oher-clinics__clinic-info">
                            <div class="other-clinics__clinic-name">
                                Клиника “Название”
                            </div>
                            <div class="other-clinics__clinic-address">
                                ул. Люблинская, д. 9 к. 1
                            </div>
                            <div class="other-clinics__clinic-reviews">
                                <div class="other-clinics__star">
                                    <img src="/images/Star1.png">
                                    <p>4,7</p>
                                </div>
                                <a href="#">8 отзывов</a>
                            </div>
                        </div>
                    </div>
                    <div class="other-clinics__clinic-metro">
                        380м от метро “Рязанский проспект”
                    </div>
                    <div class="other-clinics__clinic-record-phone">
                        Телефон для записи
                        <span><img src="/images/phone_24px.png"><a class="phone" href="#">(499) 123-45-67</a></span>
                    </div>
                </div>
                <div class="other-clinics__clinic-card">
                    <div class="other-clinics__head">
                        <div class="other-clinics__photos">
                            <img src="/images/clinic.png">
                        </div>
                        <div class="oher-clinics__clinic-info">
                            <div class="other-clinics__clinic-name">
                                Клиника “Название”
                            </div>
                            <div class="other-clinics__clinic-address">
                                ул. Люблинская, д. 9 к. 1
                            </div>
                            <div class="other-clinics__clinic-reviews">
                                <div class="other-clinics__star">
                                    <img src="/images/Star1.png">
                                    <p>4,7</p>
                                </div>
                                <a href="#">8 отзывов</a>
                            </div>
                        </div>
                    </div>
                    <div class="other-clinics__clinic-metro">
                        380м от метро “Рязанский проспект”
                    </div>
                    <div class="other-clinics__clinic-record-phone">
                        Телефон для записи
                        <span><img src="/images/phone_24px.png"><a class="phone" href="#">(499) 123-45-67</a></span>
                    </div>
                </div>
                <div class="other-clinics__clinic-card">
                    <div class="other-clinics__head">
                        <div class="other-clinics__photos">
                            <img src="/images/clinic.png">
                        </div>
                        <div class="oher-clinics__clinic-info">
                            <div class="other-clinics__clinic-name">
                                Клиника “Название”
                            </div>
                            <div class="other-clinics__clinic-address">
                                ул. Люблинская, д. 9 к. 1
                            </div>
                            <div class="other-clinics__clinic-reviews">
                                <div class="other-clinics__star">
                                    <img src="/images/Star1.png">
                                    <p>4,7</p>
                                </div>
                                <a href="#">8 отзывов</a>
                            </div>
                        </div>
                    </div>
                    <div class="other-clinics__clinic-metro">
                        380м от метро “Рязанский проспект”
                    </div>
                    <div class="other-clinics__clinic-record-phone">
                        Телефон для записи
                        <span><img src="/images/phone_24px.png"><a class="phone" href="#">(499) 123-45-67</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="other-clinic__container">
            <h3 class="other-clinics__title-mob">Похожие клиники</h3>
            <div id="similar-clinic" class="owl-carousel mob-swiper owl-theme">
                <div class="other-clinics__clinic-card">
                    <div class="other-clinics__head">
                        <div class="other-clinics__photos">
                            <img src="/images/clinic.png">
                        </div>
                        <div class="oher-clinics__clinic-info">
                            <div class="other-clinics__clinic-name">
                                Клиника “Название”
                            </div>
                            <div class="other-clinics__clinic-address">
                                ул. Люблинская, д. 9 к. 1
                            </div>
                            <div class="other-clinics__clinic-reviews">
                                <div class="other-clinics__star">
                                    <img src="/images/Star1.png">
                                    <p>4,7</p>
                                </div>
                                <a href="#">8 отзывов</a>
                            </div>
                        </div>
                    </div>
                    <div class="other-clinics__clinic-metro">
                        380м от метро “Рязанский проспект”
                    </div>
                    <div class="other-clinics__clinic-record-phone">
                        Телефон для записи
                        <span><img src="/images/phone_24px.png"><a class="phone" href="#">(499) 123-45-67</a></span>
                    </div>
                </div>
                <div class="other-clinics__clinic-card">
                    <div class="other-clinics__head">
                        <div class="other-clinics__photos">
                            <img src="/images/clinic.png">
                        </div>
                        <div class="oher-clinics__clinic-info">
                            <div class="other-clinics__clinic-name">
                                Клиника “Название”
                            </div>
                            <div class="other-clinics__clinic-address">
                                ул. Люблинская, д. 9 к. 1
                            </div>
                            <div class="other-clinics__clinic-reviews">
                                <div class="other-clinics__star">
                                    <img src="/images/Star1.png">
                                    <p>4,7</p>
                                </div>
                                <a href="#">8 отзывов</a>
                            </div>
                        </div>
                    </div>
                    <div class="other-clinics__clinic-metro">
                        380м от метро “Рязанский проспект”
                    </div>
                    <div class="other-clinics__clinic-record-phone">
                        Телефон для записи
                        <span><img src="/images/phone_24px.png"><a class="phone" href="#">(499) 123-45-67</a></span>
                    </div>
                </div>
                <div class="other-clinics__clinic-card">
                    <div class="other-clinics__head">
                        <div class="other-clinics__photos">
                            <img src="/images/clinic.png">
                        </div>
                        <div class="oher-clinics__clinic-info">
                            <div class="other-clinics__clinic-name">
                                Клиника “Название”
                            </div>
                            <div class="other-clinics__clinic-address">
                                ул. Люблинская, д. 9 к. 1
                            </div>
                            <div class="other-clinics__clinic-reviews">
                                <div class="other-clinics__star">
                                    <img src="/images/Star1.png">
                                    <p>4,7</p>
                                </div>
                                <a href="#">8 отзывов</a>
                            </div>
                        </div>
                    </div>
                    <div class="other-clinics__clinic-metro">
                        380м от метро “Рязанский проспект”
                    </div>
                    <div class="other-clinics__clinic-record-phone">
                        Телефон для записи
                        <span><img src="/images/phone_24px.png"><a class="phone" href="#">(499) 123-45-67</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <img src="/images/bread-dot.png">
            <a href="#">Москва</a>
            <img src="/images/bread-dot.png">
            <a href="#">Клиники</a>
            <img src="/images/bread-dot.png">
            <a href="#">Многопрофильные клиники</a>
            <p>Клиника на текстильщиках</p>
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
<script src="../js/jquery.inputmask.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>