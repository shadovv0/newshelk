<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>
    <link rel="stylesheet" href="/files/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/files/air-datepicker.css"/>
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
                <div class="search__clinic-doctor searching">
                    <form name="search__search-form" action="/search/" class="search__search-form" method="GET">
                        <img src="/images/search-btn.png">
                        <input class="js-search-input" type="text"
                               placeholder="Врачи, клиники, услуги, заболевания, симптомы" name="q" value=""/>
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
                <div class="clinic-card__left">
                    <div class="clinic-card__photo-clinic">
                        <a href="">
                            <img src="/images/clinic-image.png">
                        </a>
                    </div>
                    <div class="clinic-card__reviews">
                        <div class="clinic-card__star">
                            <img src="/images/Star1.png">
                            <p>4,7</p>
                        </div>
                        <a href="#">14 отзывов</a>
                    </div>
                    <div class="doctor-card__ambulance-house">
                        <img src="/images/ambulance.png">
                        <p>Выезд на дом</p>
                    </div>
                </div>
                <div class="clinic-card__center">
                    <div class="clinic-card__name">
                        <a href="#">
                            Клиника на Текстильщиках
                        </a>
                    </div>
                    <div class="clinic-card__type">
                        Многопрофильная медицинская клиника, г. Москва
                    </div>
                    <div class="clinic-card__address">
                        г. Москва ул. Люблинская, д. 9 к. 1
                    </div>
                    <div class="clinic-card__clinic-schedule">
                        Часы приёма:<br>
                        Пн-Пт 10:00-20:00 Сб-Вс 10:00-18:00
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
                    <div class="clinic-card__phone">
                        <img src="/images/phone_24px.png">
                        (499) 123-45-67
                    </div>
                </div>
                <div class="clinic-card__right">
                    <img src="/images/image%2017.png">
                </div>
            </div>
            <div class="clinic-card__body">
                <div class="clinic-card__body-left">
                    <div class="clinic-card__clinic-data">
                        <a href="#">Врачи</a>
                        <img src="/images/ellipse40.png">
                        <a href="#">Цены</a>
                        <img src="/images/ellipse40.png">
                        <a href="#">Отзывы</a>
                        <img src="/images/ellipse40.png">
                        <a href="#">Лицензии</a>
                        <img src="/images/ellipse40.png">
                        <a href="#">Фотографии клиники</a>
                    </div>
                    <div class="clinic-card__text-block">
                        Многопрофильная медицинская клиника "Клиника на Текстильщиках" в Москве.
                        Наш центр предоставляет полный перечень медицинских услуг и консультации лучших специалистов.
                    </div>
                    <p>Входит в состав клиник “Название”</p>
                    <p>Руководитель Иванов И.И.</p>
                    <div class="clinic-card__email"><a href="#">kakaya-to.klinica.ru</a></div>
                    <span>Обновлено 30.03.22</span>
                </div>
                <div class="clinic-card__body-right">
                    <div class="parking">
                        <img src="/images/parking.png">
                        <span>Большая<br>
                        парковка</span>
                    </div>
                    <div class="pay"><img src="/images/pay-clinic.png">
                        <span>Оплата<br> наличными<br>
                        и картами</span></div>
                    <div class="child"><img src="/images/child-clinic.png">
                        <span>Приём<br>
                        детей от 7 лет</span></div>
                </div>
            </div>
            <div class="clinic-card__footer">
                <a href="#" class="record__btn">
                    Записаться на приём
                </a>
            </div>
        </div>


        <section>
            <div class="specialisations-container">
                <h2 class="title-specialisations">Цены</h2>
                <div class="specialisations-body">
                    <div class="specialisations__head">
                        <div class="specialisations__phone">
                            <span>
                            <img src="/images/phone_24px.png">
                                <a class="phone" href="#">(499) 123-45-67</a></span>
                            <span><img src="/images/grey-alert.png">
                                <a class="visiting-conditions" href="#">Условия для посещения</a></span>
                        </div>
                        <a href="#" class="record__btn">
                            Записаться
                        </a>
                    </div>
                    <form action="#" class="specialisations">
                        <div data-sticky class="specialisations__body mobile-overflow">
                            <div class="specialisations__item radio">
                                <input id="gynecology" type="radio" value="Гинекология" name="specialisations"
                                       class="radio__input"/>
                                <label for="gynecology" class="radio__label">Гинекология</label>
                            </div>
                            <div class="specialisations__item radio">
                                <input id="otoloringolog" type="radio" value="Отоларингология" name="specialisations"
                                       class="radio__input"/>
                                <label for="otoloringolog" class="radio__label">Отоларингология</label>
                            </div>
                            <div class="specialisations__item radio">
                                <input id="urology" type="radio" value="Урология" name="specialisations"
                                       class="radio__input"/>
                                <label for="urology" class="radio__label">Урология</label>
                            </div>
                            <div class="specialisations__item radio">
                                <input id="venerolog" type="radio" value="Венерология" name="specialisations"
                                       class="radio__input"/>
                                <label for="venerolog" class="radio__label">Венерология</label>
                            </div>
                        </div>
                        <div class="specialisations__services services">
                            <div data-fold class="services__block-spec services__block--in-listing">
                                <div class="">
                                    <li class="services__item">
                                        <a href="#" class="services__link">Акушер (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Гинеколог (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Гинеколог-эндокринолог (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Маммолог (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Акушер (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Гинеколог (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Гинеколог-эндокринолог (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Маммолог (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                </div>
                                <button data-fold-btn class="services__more more">
                                <span data-open-text="Показать все услуги" data-close-text="Показать все услуги"
                                      class="more__text">Показать все услуги </span>
                                    <span class="more__arrow icon-arrow-more"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section id="doctors" class="listing">
            <div class="listing-container">
                <div class="listing__header listing__header--clinic">
                    <h2>Врачи в клинике</h2>
                </div>
                <div class="listing__body">
                    <div class="doctor-card__listing__item">
                        <form action="#" data-appointment class="doctor-card__body">
                            <div class="doctor-card__listing">
                                <div class="doctor-card__left">
                                    <div class="photo-doctor">
                                        <a href="#">
                                            <img src="/images/card-doc.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-card__center">
                                    <div class="doctor-card__doctor-name">
                                        <a href="#">
                                            Манохина Дарья Дмитриевна
                                        </a>
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
                                    <div class="doctor-card__clinic">
                                        Клиника на Текстильщиках
                                    </div>
                                    <div class="doctor-card__clinic-address">
                                        г. Москва ул. Люблинская, д. 9 к. 1
                                    </div>
                                    <div class="doctor-card__doctor-spec-listing">
                                        Гинеколог • акушер врач УЗИ
                                    </div>
                                    <div class="doctor-card__doctor-experiences-listing">
                                        Врач высшей категории. Кандидат медицинских наук.<br>
                                        Стаж 12 лет
                                    </div>
                                    <div class="doctor-card__doctor-prices">
                                        Стоимость приема
                                        <p>1520₽</p>
                                        <span>1900₽</span>
                                    </div>
                                </div>
                                <div class="doctor-card__right">
                                    <div class="doctor-card__dates dates">
                                        <div class="dates__prev arrow arrow--prev arrow--small arrow arrow--prev arrow--small--small"><span
                                                    class="icon-arrow-more"></span></div>
                                        <div class="swiper slider-dates">
                                            <div data-radios class="swiper-wrapper slider-dates__wrapper"></div>
                                        </div>
                                        <div class="dates__next arrow arrow--next arrow--small arrow arrow--next arrow--small--small"><span
                                                    class="icon-arrow-more"></span></div>
                                    </div>
                                    <div class="doctor-card__schedule schedule">
                                        <b class="schedule__date">Выбрать дату</b>
                                        <div data-radios class="schedule__body mobile-overflow">
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
                                                                                   class="radio__input"/> 10:00 </label>
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
                                                    <input type="radio" value="11:30" name="time-appointment"
                                                           class="radio__input"/>
                                                    11:30
                                                </label>
                                            </div>
                                            <div class="schedule__item radio">
                                                <label class="radio__label">
                                                    <input type="radio" value="12:00" name="time-appointment"
                                                           class="radio__input"/>
                                                    12:00
                                                </label>
                                            </div>
                                            <div class="schedule__item radio">
                                                <label class="radio__label">
                                                    <input type="radio" value="12:30" name="time-appointment"
                                                           class="radio__input"/>
                                                    12:30
                                                </label>
                                            </div>
                                            <div class="schedule__item radio">
                                                <label class="radio__label">
                                                    <input type="radio" value="14:00" name="time-appointment"
                                                           class="radio__input"/>
                                                    14:00
                                                </label>
                                            </div>
                                            <div class="schedule__item radio">
                                                <label class="radio__label">
                                                    <input type="radio" value="14:30" name="time-appointment"
                                                           class="radio__input"/>
                                                    14:30
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="doctor-card__listing">
                                <div class="doctor-card__left">
                                    <div class="photo-doctor">
                                        <a href="#">
                                            <img src="/images/card-doc.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-card__center">
                                    <div class="doctor-card__doctor-name">
                                        <a href="#">
                                            Манохина Дарья Дмитриевна
                                        </a>
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
                                    <div class="doctor-card__clinic">
                                        Клиника на Текстильщиках
                                    </div>
                                    <div class="doctor-card__clinic-address">
                                        г. Москва ул. Люблинская, д. 9 к. 1
                                    </div>
                                    <div class="doctor-card__doctor-spec-listing">
                                        Гинеколог • акушер врач УЗИ
                                    </div>
                                    <div class="doctor-card__doctor-experiences-listing">
                                        Врач высшей категории. Кандидат медицинских наук.<br>
                                        Стаж 12 лет
                                    </div>
                                    <div class="doctor-card__doctor-prices">
                                        Стоимость приема
                                        <p>1520₽</p>
                                        <span>1900₽</span>
                                    </div>
                                </div>
                                <div class="doctor-card__right">
                                    <div class="doctor-card__dates dates">
                                        <div class="dates__prev arrow arrow--prev arrow--small arrow arrow--prev arrow--small--small"><span
                                                    class="icon-arrow-more"></span></div>
                                        <div class="swiper slider-dates">
                                            <div data-radios class="swiper-wrapper slider-dates__wrapper"></div>
                                        </div>
                                        <div class="dates__next arrow arrow--next arrow--small arrow arrow--next arrow--small--small"><span
                                                    class="icon-arrow-more"></span></div>
                                    </div>
                                    <div class="doctor-card__schedule schedule">
                                        <b class="schedule__date">Выбрать дату</b>
                                        <div data-radios class="schedule__body mobile-overflow">
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
                                                                                   class="radio__input"/> 10:00 </label>
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
                                                    <input type="radio" value="11:30" name="time-appointment"
                                                           class="radio__input"/>
                                                    11:30
                                                </label>
                                            </div>
                                            <div class="schedule__item radio">
                                                <label class="radio__label">
                                                    <input type="radio" value="12:00" name="time-appointment"
                                                           class="radio__input"/>
                                                    12:00
                                                </label>
                                            </div>
                                            <div class="schedule__item radio">
                                                <label class="radio__label">
                                                    <input type="radio" value="12:30" name="time-appointment"
                                                           class="radio__input"/>
                                                    12:30
                                                </label>
                                            </div>
                                            <div class="schedule__item radio">
                                                <label class="radio__label">
                                                    <input type="radio" value="14:00" name="time-appointment"
                                                           class="radio__input"/>
                                                    14:00
                                                </label>
                                            </div>
                                            <div class="schedule__item radio">
                                                <label class="radio__label">
                                                    <input type="radio" value="14:30" name="time-appointment"
                                                           class="radio__input"/>
                                                    14:30
                                                </label>
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


        <section id="reviews" class="users">
            <div class="users__container">
                <div class="users__title-body">
                    <div class="users__title">
                        <h2>Отзывы<span class="users__count"></span></h2>
                        <a href="#" class="users__side-link">Как мы проверяем отзывы?</a>
                    </div>
                    <a data-popup-btn="review" href="#" class="users__btn search__btn">Оставить отзыв</a>
                </div>
                <div data-tabs-container class="users__wrapper">
                    <div class="users__side">
                        <div data-tabs class="users__tabs mobile-overflow">
                            <button data-tab="all" class="users__tab is-active">
                                <b>Все</b>
                                <div class="users__tab-count"><b>14</b></div>
                            </button>
                            <button data-tab="positive" class="users__tab-text-positive">
                                <span class="users__tab-text">Положительные</span>
                                <div class="users__tab-count">10</div>
                            </button>
                            <button data-tab="negative" class="users__tab-text-negative">
                                <span class="users__tab-text">Отрицательные</span>
                                <div class="users__tab-count">3</div>
                            </button>
                            <button data-tab="unverified" class="users__tab text-unverified">
                                Неподтвержденные
                                <div class="users__tab-count">1</div>
                            </button>
                        </div>
                    </div>
                    <div class="users__body">
                        <div data-tabcontent="positive" class="users__tabcontent is-active">
                            <div class="user">
                                <div class="user__info">
                                    <div class="user__info-top">
                                        <div class="user__info-top-right">
                                            <b class="user__author-name">Имя пациента</b>
                                            <div class="review-card__marks">
                                                <div class="user__info-bottom">
                                                    <div data-rating="5" class="user__rating rating">
                                                        <div class="rating__body">
                                                            <div class="rating__active"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="/images/Star1.png">
                                                <p>5</p>
                                            </div>
                                        </div>
                                        <div class="user__social">14.02.2022</div>
                                        <div class="user__status">
                                            <img src="/images/verifyied.png">
                                            Проверено
                                        </div>
                                        <div class="review-card__source-review">
                                            ИсточникОтзыва
                                        </div>
                                        <div class="review-card__date-visit">
                                            Дата посещения<br>
                                            12.02.2022
                                        </div>
                                    </div>
                                </div>
                                <div class="user__content">
                                    <div class="user__blocks">
                                        <div class="user__positive">
                                            <b>Плюсы</b>
                                            <p>Компетентный врач</p>
                                        </div>
                                        <div class="user__clinic-geo">
                                            <img src="/images/review-geo.png">
                                            <p>Клиника на Текстильщиках<br>
                                                ул. Люблинская, д. 9 к. 1
                                            </p>
                                        </div>
                                    </div>
                                    <div class="user__block">
                                        <b>Минусы</b>
                                        <p>Сложно записаться.</p>
                                    </div>
                                    <div class="user__block">
                                        <b>Комментарий</b>
                                        <p>
                                            Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней!
                                            Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в
                                            проблеме пациента!
                                        </p>
                                    </div>
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
                            <div class="user">
                                <div class="user__info">
                                    <div class="user__info-top">
                                        <div class="user__info-top-right">
                                            <b class="user__author-name">Имя пациента</b>
                                            <div class="review-card__marks">
                                                <div class="user__info-bottom">
                                                    <div data-rating="5" class="user__rating rating">
                                                        <div class="rating__body">
                                                            <div class="rating__active"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="/images/Star1.png">
                                                <p>5</p>
                                            </div>
                                        </div>
                                        <div class="user__social">14.02.2022</div>
                                        <div class="user__status">
                                            <img src="/images/verifyied.png">
                                            Проверено
                                        </div>
                                        <div class="review-card__source-review">
                                            ИсточникОтзыва
                                        </div>
                                        <div class="review-card__date-visit">
                                            Дата посещения<br>
                                            12.02.2022
                                        </div>
                                    </div>
                                </div>
                                <div class="user__content">
                                    <div class="user__blocks">
                                        <div class="user__positive">
                                            <b>Плюсы</b>
                                            <p>Компетентный врач</p>
                                        </div>
                                        <div class="user__clinic-geo">
                                            <img src="/images/review-geo.png">
                                            <p>Клиника на Текстильщиках<br>
                                                ул. Люблинская, д. 9 к. 1
                                            </p>
                                        </div>
                                    </div>
                                    <div class="user__block">
                                        <b>Минусы</b>
                                        <p>Сложно записаться.</p>
                                    </div>
                                    <div class="user__block">
                                        <b>Комментарий</b>
                                        <p>
                                            Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней!
                                            Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в
                                            проблеме пациента!
                                        </p>
                                    </div>
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
                            <div class="user">
                                <div class="user__info">
                                    <div class="user__info-top">
                                        <div class="user__info-top-right">
                                            <b class="user__author-name">Имя пациента</b>
                                            <div class="review-card__marks">
                                                <div class="user__info-bottom">
                                                    <div data-rating="5" class="user__rating rating">
                                                        <div class="rating__body">
                                                            <div class="rating__active"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="/images/Star1.png">
                                                <p>5</p>
                                            </div>
                                        </div>
                                        <div class="user__social">14.02.2022</div>
                                        <div class="user__status">
                                            <img src="/images/verifyied.png">
                                            Проверено
                                        </div>
                                        <div class="review-card__source-review">
                                            ИсточникОтзыва
                                        </div>
                                        <div class="review-card__date-visit">
                                            Дата посещения<br>
                                            12.02.2022
                                        </div>
                                    </div>
                                </div>
                                <div class="user__content">
                                    <div class="user__blocks">
                                        <div class="user__positive">
                                            <b>Плюсы</b>
                                            <p>Компетентный врач</p>
                                        </div>
                                        <div class="user__clinic-geo">
                                            <img src="/images/review-geo.png">
                                            <p>Клиника на Текстильщиках<br>
                                                ул. Люблинская, д. 9 к. 1
                                            </p>
                                        </div>
                                    </div>
                                    <div class="user__block">
                                        <b>Минусы</b>
                                        <p>Сложно записаться.</p>
                                    </div>
                                    <div class="user__block">
                                        <b>Комментарий</b>
                                        <p>
                                            Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней!
                                            Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в
                                            проблеме пациента!
                                        </p>
                                    </div>
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
                                            <b class="user__author-name">Имя пациента</b>
                                            <div class="review-card__marks-negative review-card__marks">
                                                <div class="user__info-bottom">
                                                    <div data-rating="3" class="user__rating rating">
                                                        <div class="rating__body">
                                                            <div class="rating__active"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="/images/Star1.png">
                                                <p>3</p>
                                            </div>
                                        </div>
                                        <div class="user__social">14.02.2022</div>
                                        <div class="user__status">
                                            <img src="/images/verifyied.png">
                                            Проверено
                                        </div>
                                        <div class="review-card__source-review">
                                            ИсточникОтзыва
                                        </div>
                                        <div class="review-card__date-visit">
                                            Дата посещения<br>
                                            12.02.2022
                                        </div>
                                    </div>
                                </div>
                                <div class="user__content">
                                    <div class="user__blocks">
                                        <div class="user__positive">
                                            <b>Плюсы</b>
                                            <p>Компетентный врач</p>
                                        </div>
                                        <div class="user__clinic-geo">
                                            <img src="/images/review-geo.png">
                                            <p>Клиника на Текстильщиках<br>
                                                ул. Люблинская, д. 9 к. 1
                                            </p>
                                        </div>
                                    </div>
                                    <div class="user__block">
                                        <b>Минусы</b>
                                        <p>Сложно записаться.</p>
                                    </div>
                                    <div class="user__block">
                                        <b>Комментарий</b>
                                        <p>
                                            Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней!
                                            Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в
                                            проблеме пациента!
                                        </p>
                                    </div>
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
                            <div class="user">
                                <div class="user__info">
                                    <div class="user__info-top">
                                        <div class="user__info-top-right">
                                            <b class="user__author-name">Имя пациента</b>
                                            <div class="review-card__marks">
                                                <div class="user__info-bottom">
                                                    <div data-rating="5" class="user__rating rating">
                                                        <div class="rating__body">
                                                            <div class="rating__active"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="/images/Star1.png">
                                                <p>5</p>
                                            </div>
                                        </div>
                                        <div class="user__social">14.02.2022</div>
                                        <div class="user__status">
                                            <img src="/images/verifyied.png">
                                            Проверено
                                        </div>
                                        <div class="review-card__source-review">
                                            ИсточникОтзыва
                                        </div>
                                        <div class="review-card__date-visit">
                                            Дата посещения<br>
                                            12.02.2022
                                        </div>
                                    </div>
                                </div>
                                <div class="user__content">
                                    <div class="user__blocks">
                                        <div class="user__positive">
                                            <b>Плюсы</b>
                                            <p>Компетентный врач</p>
                                        </div>
                                        <div class="user__clinic-geo">
                                            <img src="/images/review-geo.png">
                                            <p>Клиника на Текстильщиках<br>
                                                ул. Люблинская, д. 9 к. 1
                                            </p>
                                        </div>
                                    </div>
                                    <div class="user__block">
                                        <b>Минусы</b>
                                        <p>Сложно записаться.</p>
                                    </div>
                                    <div class="user__block">
                                        <b>Комментарий</b>
                                        <p>
                                            Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней!
                                            Всегда внимательна, ничего лишнего не назначит и тщательно разбирается в
                                            проблеме пациента!
                                        </p>
                                    </div>
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
                        <div class="users_btn">
                            <button class="users__more btn-more">Показать ещё отзывы</button>
                            <button class="users__more btn-more">Оставить отзыв</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="section-with-slider__header section-with-slider__header--clinics">
                <h2 class="other-clinics__title">Другие клиники сети</h2>
                <div class="section-with-slider__navigation">
                    <div class="arrow arrow--prev"><span class="icon-arrow-more"></span></div>
                    <div class="arrow arrow--next"><span class="icon-arrow-more"></span></div>
                </div>
            </div>
            <div class="other-clinics__clinics">
                <div class="other-clinics__container">
                    <div class="other-clinics__clinic-card">
                        <div class="other-clinics__head">
                            <div class="other-clinics__photos">
                                <img src="/images/other_clinic.png">
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
                            <span>
                                <img src="/images/phone_24px.png">
                            <a class="phone" href="#">(499) 123-45-67</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="other-clinics__container">
                    <div class="other-clinics__clinic-card">
                        <div class="other-clinics__head">
                            <div class="other-clinics__photos">
                                <img src="/images/other_clinic.png">
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
                            <span>
                                <img src="/images/phone_24px.png">
                            <a class="phone" href="#">(499) 123-45-67</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="other-clinics__container">
                    <div class="other-clinics__clinic-card">
                        <div class="other-clinics__head">
                            <div class="other-clinics__photos">
                                <img src="/images/other_clinic.png">
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
                            <span>
                                <img src="/images/phone_24px.png">
                            <a class="phone" href="#">(499) 123-45-67</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-with-slider">
            <div class="container">
                <div class="section-with-slider__header section-with-slider__header--clinics">
                    <h2>Похожие клиники</h2>
                    <div class="section-with-slider__navigation">
                        <div class="arrow arrow--prev"><span class="icon-arrow-more"></span></div>
                        <div class="arrow arrow--next"><span class="icon-arrow-more"></span></div>
                    </div>
                </div>
                <div class="swiper swiper-main">
                    <div class="swiper-main__wrapper swiper-wrapper">
                        <div class="swiper-main__slide swiper-slide">
                            <div class="clinic-card">
                                <div class="clinic-card__top">
                                    <a href="#" class="clinic-card__logo">
                                        <picture>
                                            <source srcset="images/clinics/paliha-mobile.svg"
                                                    media="(max-width: 768px)"/>
                                            <img loading="lazy" src="images/clinics/paliha.svg" alt title/>
                                        </picture>
                                    </a>
                                    <div class="clinic-card__estimates">
                                        <div data-rating="4.8" class="clinic-card__rating rating">
                                            <img class="clinic-card__rating-star" loading="lazy"
                                                 src="images/icons/star-red.svg" alt title/>
                                            <div class="rating__body">
                                                <img loading="lazy" src="images/icons/stars-empty.svg" alt title/>
                                                <div class="rating__active"></div>
                                            </div>
                                            <b class="rating__value">4.8</b>
                                        </div>
                                        <a href="#" class="clinic-card__reviews link-reviews">
                                            <img loading="lazy" src="images/icons/messages-blue.svg" alt title/>
                                            <b>68 отзывов</b>
                                        </a>
                                    </div>
                                    <a href="#" class="clinic-card__name"> <b>Медицинский центр Палиха </b></a>
                                    <div class="clinic-card__category">Многопрофильный медицинский центр</div>
                                    <ul class="clinic-card__info">
                                        <li class="clinic-card__info-item">11 врачей
                                        </li>
                                        <li class="clinic-card__info-item">Оплата наличными и картами
                                        </li>
                                        <li class="clinic-card__info-item">Большая парковка
                                        </li>

                                    </ul>
                                </div>
                                <div class="clinic-card__bottom place-info">
                                    <div class="place-info__contacts">
                                        <div class="place-info__contacts-icon">
                                            <img loading="lazy" src="images/icons/location.svg" alt title/>
                                        </div>
                                        <div class="place-info__contacts-body">
                                            <address class="place-info__address">г. Москва, ул. Палиха, д. 13/1
                                            </address>
                                            <a href="tel:+74996543210" class="place-info__phone"><b>8 (499)
                                                    519-32-88</b></a>
                                        </div>
                                    </div>
                                    <div class="metros">
                                        <div href="#" class="metro--distance metro">
                                            <span class="metro__color metro__color--serpuhov"></span>Менделеевская

                                            <div class="metro__distance">570 м</div>

                                        </div>
                                        <div href="#" class="metro--distance metro">
                                            <span class="metro__color metro__color--kolcevaya"></span>Новослободская

                                            <div class="metro__distance">660 м</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-main__slide swiper-slide">
                            <div class="clinic-card">
                                <div class="clinic-card__top">
                                    <a href="#" class="clinic-card__logo">
                                        <picture>
                                            <source srcset="images/clinics/euromed-mobile.svg"
                                                    media="(max-width: 768px)"/>
                                            <img loading="lazy" src="images/clinics/euromed.svg" alt title/>
                                        </picture>
                                    </a>
                                    <div class="clinic-card__estimates">
                                        <div data-rating="4.7" class="clinic-card__rating rating">
                                            <img class="clinic-card__rating-star" loading="lazy"
                                                 src="images/icons/star-red.svg" alt title/>
                                            <div class="rating__body">
                                                <img loading="lazy" src="images/icons/stars-empty.svg" alt title/>
                                                <div class="rating__active"></div>
                                            </div>
                                            <b class="rating__value">4.7</b>
                                        </div>
                                        <a href="#" class="clinic-card__reviews link-reviews">
                                            <img loading="lazy" src="images/icons/messages-blue.svg" alt title/>
                                            <b>68 отзывов</b>
                                        </a>
                                    </div>
                                    <a href="#" class="clinic-card__name"> <b>Евромед </b></a>
                                    <div class="clinic-card__category">Многопрофильный медицинский центр</div>
                                    <ul class="clinic-card__info">
                                        <li class="clinic-card__info-item">11 врачей
                                        </li>
                                        <li class="clinic-card__info-item">Оплата наличными и картами
                                        </li>
                                        <li class="clinic-card__info-item">Большая парковка
                                        </li>

                                    </ul>
                                </div>
                                <div class="clinic-card__bottom place-info">
                                    <div class="place-info__contacts">
                                        <div class="place-info__contacts-icon">
                                            <img loading="lazy" src="images/icons/location.svg" alt title/>
                                        </div>
                                        <div class="place-info__contacts-body">
                                            <address class="place-info__address">г. Москва, ул. Красина, д. 14, стр. 2
                                            </address>
                                            <a href="tel:+74996543210" class="place-info__phone"><b>8 (499)
                                                    519-32-88</b></a>
                                        </div>
                                    </div>
                                    <div class="metros">
                                        <div href="#" class="metro--distance metro">
                                            <span class="metro__color metro__color--zamoskvoretskaya"></span>Маяковская

                                            <div class="metro__distance">870 м</div>

                                        </div>
                                        <div href="#" class="metro--distance metro">
                                            <span class="metro__color metro__color--tagansk"></span>Народное ополчение

                                            <div class="metro__distance">1,3 км</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-main__slide swiper-slide">
                            <div class="clinic-card">
                                <div class="clinic-card__top">
                                    <a href="#" class="clinic-card__logo">
                                        <picture>
                                            <source srcset="images/clinics/paliha-mobile.svg"
                                                    media="(max-width: 768px)"/>
                                            <img loading="lazy" src="images/clinics/moscow.svg" alt title/>
                                        </picture>
                                    </a>
                                    <div class="clinic-card__estimates">
                                        <div data-rating="4.9" class="clinic-card__rating rating">
                                            <img class="clinic-card__rating-star" loading="lazy"
                                                 src="images/icons/star-red.svg" alt title/>
                                            <div class="rating__body">
                                                <img loading="lazy" src="images/icons/stars-empty.svg" alt title/>
                                                <div class="rating__active"></div>
                                            </div>
                                            <b class="rating__value">4.9</b>
                                        </div>
                                        <a href="#" class="clinic-card__reviews link-reviews">
                                            <img loading="lazy" src="images/icons/messages-blue.svg" alt title/>
                                            <b>68 отзывов</b>
                                        </a>
                                    </div>
                                    <a href="#" class="clinic-card__name"> <b>Московская Клиника </b></a>
                                    <div class="clinic-card__category">Многопрофильный медицинский центр</div>
                                    <ul class="clinic-card__info">
                                        <li class="clinic-card__info-item">45 врачей
                                        </li>
                                        <li class="clinic-card__info-item">Оплата наличными и картами
                                        </li>
                                        <li class="clinic-card__info-item">Большая парковка
                                        </li>

                                    </ul>
                                </div>
                                <div class="clinic-card__bottom place-info">
                                    <div class="place-info__contacts">
                                        <div class="place-info__contacts-icon">
                                            <img loading="lazy" src="images/icons/location.svg" alt title/>
                                        </div>
                                        <div class="place-info__contacts-body">
                                            <address class="place-info__address">г. Москва, ул. Кожевническая, д.1Б,
                                                с1
                                            </address>
                                            <a href="tel:+74996543210" class="place-info__phone"><b>8 (499)
                                                    519-32-88</b></a>
                                        </div>
                                    </div>
                                    <div class="metros">
                                        <div href="#" class="metro--distance metro">
                                            <span class="metro__color metro__color--lublino"></span>Марьина Роща

                                            <div class="metro__distance">570 м</div>

                                        </div>
                                        <div href="#" class="metro--distance metro">
                                            <span class="metro__color metro__color--kahovskaya"></span>Савеловская

                                            <div class="metro__distance">660 м</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-main__pagination"></div>
                </div>
            </div>
        </section>
        <section class="section-with-slider">
            <div class="container">
                <div class="section-with-slider__header section-with-slider__header--clinics">
                    <h2>Похожие клиники</h2>
                    <div class="section-with-slider__navigation">
                        <div class="arrow arrow--prev"><span class="icon-arrow-more"></span></div>
                        <div class="arrow arrow--next"><span class="icon-arrow-more"></span></div>
                    </div>
                </div>
                <div class="swiper swiper-main">
                    <div class="swiper-main__wrapper swiper-wrapper">
                        <div class="swiper-main__slide swiper-slide">
                            <div class="other-clinics__container">
                                <div class="other-clinics__clinic-card">
                                    <div class="other-clinics__head">
                                        <div class="other-clinics__photos">
                                            <img src="/images/other_clinic.png">
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
                        <div class="swiper-main__slide swiper-slide">
                            <div class="other-clinics__container">
                                <div class="other-clinics__clinic-card">
                                    <div class="other-clinics__head">
                                        <div class="other-clinics__photos">
                                            <img src="/images/other_clinic.png">
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
                                        <span>
                                <img src="/images/phone_24px.png">
                            <a class="phone" href="#">(499) 123-45-67</a>
                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-main__slide swiper-slide">
                            <div class="other-clinics__container">
                                <div class="other-clinics__clinic-card">
                                    <div class="other-clinics__head">
                                        <div class="other-clinics__photos">
                                            <img src="/images/other_clinic.png">
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
                                        <span>
                                <img src="/images/phone_24px.png">
                            <a class="phone" href="#">(499) 123-45-67</a>
                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-main__pagination"></div>
                </div>
            </div>
        </section>


        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <a href="#">Москва</a>
            <a href="#">Клиники</a>
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

<script defer src="/js/swiper-bundle.min.js"></script>
<script defer src="/js/air-datepicker.js"></script>