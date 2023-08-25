<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/css/mobile-styles.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
    <script src="../js/app.js"></script>
    <script src="https://code.jquery.com/jquery-git.min.js"></script>
</head>
<body>
<header>
    <div class="head__container">
        <div class="wrap clear">
            <div class="top-menu__wrap">
                <input type="checkbox" id="nav-toggle" hidden>
                <nav class="nav">
                    <label for="nav-toggle" class="nav-toggle" onclick></label>
                    <ul class="menu__list">
                        <li class="menu__item"><a href="#" class="menu__link">Клиники</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Врачи</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Услуги</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Диагностика</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Заболевания</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Симптомы</a></li>
                    </ul>
                </nav>
            </div>
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
                        <div class="clinic-card__metro-near">
                            <img src="/images/Ellipse%2027.png">
                            Текстильщики (338м)
                        </div>
                        <div class="clinic-card__metro-far">
                            <img src="/images/Ellipse%2028.png">
                            Печатники (2,1км)
                            <img src="/images/Ellipse%2029.png">
                            Стахановская (2,2км)
                        </div>
                    </div>
                    <div class="clinic-card__footer">
                        <div class="clinic-card__phones">
                            <img src="/images/phone_24px.png">
                            <a href="#">(499) 123-45-67</a>
                        </div>
                        <a class="search__btn">
                            Запись на приём
                        </a>
                    </div>
                </div>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li><a href="#"><img src="/images/burger.png">Меню</a></li>
                    <li><a href="#"><img src="/images/doctor-icon.png">Врачи</a></li>
                    <li><a href="#"><img src="/images/review-icon.png">Отзывы</a></li>
                    <li><a href="#"><img src="/images/record-icon.png">Записаться</a></li>
                </ul>
            </div>
            <p class="mob-map">
                <img src="/images/mob-map.png">
            </p>
            <div class="clinic-additional">
                <span>Обновлено 30.03.22</span>
                <ul>
                    <li><img src="/images/grey-parking.png">
                        <p>Большая<br> парковка</p></li>
                    <li><img src="/images/grey-pay.png">
                        <p>Оплата наличными и картами</p></li>
                    <li><img src="/images/grey-child.png">
                        <p>Приём<br> детей от 7 лет</p></li>
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
                    <li>Приём <br>гинеколога от 1000₽</li>
                    <li>Приём <br>гинеколога от 1000₽</li>
                    <li>Приём <br>гинеколога от 1000₽</li>
                </ul>
            </div>
        </div>

        <div class="price-clinic__container">
            <h3 class="price-clinic__title">Цены</h3>
            <div class="price-clinic__price-card">
                <div class="price-clinic__head">
                    <span>
                    <img src="/images/phone_24px.png">
                    <a href="#" class="clinic-phone">(499) 123-45-67</a>
                    </span>
                    <a class="search__btn">
                        Записаться на приём
                    </a>
                </div>
                <div class="price-clinic__body">
                    <h4 class="price-clinic__name-service">Гинекология</h4>
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
                    <a href="#">Показать все цены</a>
                </div>
                <h4 class="price-clinic__name-service">Урология</h4>
                <h4 class="price-clinic__name-service">Венерология</h4>
                <h4 class="price-clinic__name-service">Отоларингология</h4>
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
                                <button data-fold-btn class="faq__btn">
                                    <h5>Гинекологи</h5>
                                </button>
                            </div>
                            <div data-fold-content class="doctor-card__contnet">
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
                                    <h5>Урологи</h5>
                                </button>
                            </div>
                            <div data-fold-content class="doctor-card__contnet">
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
                                </button>
                            </div>
                            <div data-fold-content class="doctor-card__contnet">
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
                                </button>
                            </div>
                            <div data-fold-content class="doctor-card__contnet">
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
            <div class="listing__container-body">
                <div class="listing-doctor-btn">
                    <a data-popup-btn="review" href="#" class="users__btn search__btn">Оставить отзыв</a>
                    <a href="#" class="users__side-link">Как мы проверяем отзывы?</a>
                </div>
                <div data-tabs-container class="users__wrapper">
                    <div class="users__side">
                        <h4>Отзывы (14)</h4>
                        <div data-tabs class="users__tabs-marks mobile-overflow">
                            <a href="#" class="disable">Все</a>
                            <a href="#" class="green"><img src="/images/Star1.png">5</a>
                            <a href="#" class="disable"><img src="/images/grey-star.png">4</a>
                            <a href="#" class="red"><img src="/images/Star1.png">3</a>
                            <a href="#" class="disable"><img src="/images/grey-star.png">2</a>
                            <a href="#" class="disable"><img src="/images/grey-star.png">1</a>
                        </div>
                    </div>
                    <div class="users__body">
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
                        <a href="#" class="more-review">Показать ещё</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="media-clinic">
            <h3 class="license-clinic-title">Лицензии клиники</h3>
            <div class="license-container">
                <a href="/images/license-clinic.png" data-fancybox="gallery">
                    <img src="/images/license-clinic.png" alt="license"/>
                </a>
            </div>
            <h3 class="photo-clinic__title">Фотографии клиники</h3>
            <div class="photo-clinic__container">
                <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                    <img src="/images/photo-clinic-1.png" alt="photo">
                </a>
            </div>
            <h3 class="video-clinic__title">Видео обзор клиники</h3>
            <div class="video-clinic__container">
                <iframe width="auto" height="auto" src="https://www.youtube.com/embed/K5LhfmEgFuM"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                </iframe>
            </div>
        </div>

        <div class="other-clinic__container">
            <h3 class="other-clinics__title-mob">Другие клиники сети</h3>
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

        <div class="other-clinic__container">
            <h3 class="other-clinics__title-mob">Похожие клиники</h3>
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
    <div class="popup pp-rev">
        <a class="pp-close" href="#"></a>
        <div>
            <div class="pp-title">Оставить отзыв о клинике</div>
            <div class="clear border-bot">
                <div class="pp-img-clinic"><img src="/images/2446b978c4aefcffe849bb27b5593f28.jpg" alt="pic"></div>
                <div class="pp-clinic-name">
                    <div class="h4">МедЦентрСервис в Отрадном</div>
                    <ul class="clinic-address">
                        <li class="address"><img src="/images/review-geo.png" />Москва, Пестеля д. 11</li>
                        <li class="region"><img src="/images/region.png" />СВАО (Отрадное)</li>
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
                                    <li class=""></li><li class=""></li><li class=""></li><li class=""></li><li class=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <button disabled class="js-submit-btn btn-disabled button" data-request="/ajax/review/">Отправить отзыв</button>
            </form>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>