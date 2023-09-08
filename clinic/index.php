<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.inputmask.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="/files/air-datepicker.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
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
                <a href="#">(499) 123-34-56</a>
            </div>
        </div>
        <div class="top-menu">
            <div class="top-menu__wrap">
                <nav class="top-menu-btn">
                    <div class="menu-list">
                        <a class="menu-item root-item" href="/clinic/index.php">Клиники</a>
                        <a class="menu-item root-item" href="/doctor/index.php">Врачи</a>
                        <a class="menu-item root-item" href="/hub/index.php">Услуги</a>
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
                    <div class="doctor-card--advant">
                        <ul>
                            <li>
                                <img src="/images/ambulance.png"/>
                                <p>Выезд на дом</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clinic-card__center">
                    <div class="clinic-card__name">
                        <h1>
                            Клиника на Текстильщиках
                        </h1>
                    </div>
                    <div class="clinic-card__type">
                        Многопрофильная медицинская клиника, г. Москва
                    </div>
                    <div class="clinic-card__address">
                        г. Москва ул. Люблинская, д. 9 к. 1
                    </div>
                    <div class="clinic-card__clinic-schedule">
                        <p>Часы приёма:</p>
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
                        <a href="#">(499) 123-34-56</a>
                    </div>
                </div>
                <div class="clinic-card__right-map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A97aa3af62620370b6ec5eaf606e8b96f6641ef1e862e53e2aa1e939fff416485&amp;width=350&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
            <div class="clinic-card__body">
                <div class="clinic-card__body-left">
                    <div class="clinic-card__clinic-data">
                        <a href="#doctors">Врачи</a>
                        <img src="/images/ellipse40.png"/>
                        <a href="#prices">Цены</a>
                        <img src="/images/ellipse40.png">
                        <a href="#reviews">Отзывы</a>
                        <img src="/images/ellipse40.png">
                        <a href="#license">Лицензии</a>
                        <img src="/images/ellipse40.png">
                        <a href="#photo-clinic">Фотографии клиники</a>
                    </div>
                    <div class="clinic-card__body-text-block">
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
                <a href="#" class="record__btn js-record">
                    Записаться на приём
                </a>
            </div>
        </div>


        <section>
            <div id="prices" class="specialisations-container">
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
                        <a href="#" class="record__btn js-record">
                            Записаться
                        </a>
                    </div>
                    <div data-tabs-container class="specialisations">
                        <div class="specialisations__body mobile-overflow">
                            <button data-tab="gynecology" class="specialisations__item is-active">
                                Гинекология
                            </button>
                            <button data-tab="otoloringolog" class="specialisations__item">
                                Отоларингология
                            </button>
                            <button data-tab="urology" class="specialisations__item">
                                Урология
                            </button>
                            <button data-tab="venerolog" class="specialisations__item">
                                Венерология
                            </button>
                        </div>
                        <div data-tabcontent="gynecology" class="specialisations__services services is-active">
                            <div class="services__block-spec services__block--in-listing">
                                <div class="main-spoiler" data-id="description">
                                    <li class="services__item">
                                        <a href="#" class="services__link">Гинеколог (от 18 лет)</a>
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
                                        <a href="#" class="services__link">Гинеколог (от 18 лет)</a>
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
                                        <a href="#" class="services__link">Гинеколог (от 18 лет)</a>
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
                                        <a href="#" class="services__link">Гинеколог (от 18 лет)</a>
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
                                        <a href="#" class="services__link">Гинеколог (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                </div>
                                <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                            </div>
                        </div>
                        <div data-tabcontent="otoloringolog" class="specialisations__services services">
                            <div class="services__block-spec services__block--in-listing">
                                <div class="main-spoiler" data-id="description">
                                    <li class="services__item">
                                        <a href="#" class="services__link">Отоларингология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Отоларингология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Отоларингология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Отоларингология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Отоларингология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Отоларингология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Отоларингология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Отоларингология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                </div>
                                <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                            </div>
                        </div>
                        <div data-tabcontent="urology" class="specialisations__services services">
                            <div class="services__block-spec services__block--in-listing">
                                <div class="main-spoiler" data-id="description">
                                    <li class="services__item">
                                        <a href="#" class="services__link">Урология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Урология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Урология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Урология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Урология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Урология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Урология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Урология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                </div>
                                <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                            </div>
                        </div>
                        <div data-tabcontent="venerolog" class="specialisations__services services">
                            <div class="services__block-spec services__block--in-listing">
                                <div class="main-spoiler" data-id="description">
                                    <li class="services__item">
                                        <a href="#" class="services__link">Венерология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Венерология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Венерология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Венерология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Венерология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Венерология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Венерология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                    <li class="services__item">
                                        <a href="#" class="services__link">Венерология (от 18 лет)</a>
                                        <div class="popular-doctor__price">
                                            <p>1520₽</p>
                                            <span>1900₽</span>
                                        </div>
                                    </li>
                                </div>
                                <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="doctors">
            <div class="listing-container">
                <div class="listing__header listing__header--clinic">
                    <h2>Врачи в клинике</h2>
                </div>
                <div class="listing__body">
                    <div class="doctor-card__listing__item">
                        <form action="#" data-appointment class="doctor-card__body">
                            <div data-fold class="doctor-card__dropdown-container">
                                <button data-fold-btn class="faq__btn">
                                    <div class="listing-doctor__title">
                                        <h5>Гинекологи<span>(4 гинеколога)</span>
                                            <a class="faq__arrow">
                                                <img src="/images/right-page.png">
                                            </a>
                                        </h5>
                                    </div>
                                </button>
                                <div data-fold-content class="clinic-card__content">
                                    <div class="doctor-card__listing">
                                        <div class="doctor-card__left">
                                            <div class="photo-doctor-clinic">
                                                <a href="#">
                                                    <img src="/images/doctor-inclinic.png">
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
                                                ул. Люблинская, д. 9 к. 1
                                            </div>
                                            <div class="doctor-card__doctor-spec-listing">
                                                Гинеколог • акушер врач УЗИ
                                            </div>
                                            <div class="doctor-card__doctor-experiences-listing">
                                                Врач высшей категории. Кандидат медицинских наук.<br>
                                                Стаж 12 лет
                                            </div>
                                            <div class="doctor-card__doctor-clinic-prices">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                        </div>
                                        <div class="doctor-card__right-record">
                                            <h4 class="doctor-card__right-record-title">Выбрать дату</h4>
                                            <div class="doctor-card-record__container">
                                                <div class="doctor-card__dates dates">
                                                    <p>Понедельник 21.03.</p>
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
                                                </div>
                                            </div>
                                            <div class="clinic-card__phone">
                                                <img src="/images/phone_24px.png">
                                                <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-card__listing">
                                        <div class="doctor-card__left">
                                            <div class="photo-doctor-clinic">
                                                <a href="#">
                                                    <img src="/images/doctor-inclinic.png">
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
                                                ул. Люблинская, д. 9 к. 1
                                            </div>
                                            <div class="doctor-card__doctor-spec-listing">
                                                Гинеколог • акушер врач УЗИ
                                            </div>
                                            <div class="doctor-card__doctor-experiences-listing">
                                                Врач высшей категории. Кандидат медицинских наук.<br>
                                                Стаж 12 лет
                                            </div>
                                            <div class="doctor-card__doctor-clinic-prices">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                        </div>
                                        <div class="doctor-card__right-record">
                                            <h4 class="doctor-card__right-record-title">Выбрать дату</h4>
                                            <div class="doctor-card-record__container">
                                                <div class="doctor-card__dates dates">
                                                    <p>Понедельник 21.03.</p>
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
                                                </div>
                                            </div>
                                            <div class="clinic-card__phone">
                                                <img src="/images/phone_24px.png">
                                                <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="#" data-appointment class="doctor-card__body">
                            <div data-fold class="doctor-card__dropdown-container">
                                <button data-fold-btn class="faq__btn">
                                    <div class="listing-doctor__title">
                                        <h5>Урологи<span>(3 Урологи)</span>
                                            <a class="faq__arrow">
                                                <img src="/images/right-page.png">
                                            </a>
                                        </h5>
                                    </div>
                                </button>
                                <div data-fold-content class="clinic-card__content">
                                    <div class="doctor-card__listing">
                                        <div class="doctor-card__left">
                                            <div class="photo-doctor-clinic">
                                                <a href="#">
                                                    <img src="/images/doctor-inclinic.png">
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
                                                ул. Люблинская, д. 9 к. 1
                                            </div>
                                            <div class="doctor-card__doctor-spec-listing">
                                                Гинеколог • акушер врач УЗИ
                                            </div>
                                            <div class="doctor-card__doctor-experiences-listing">
                                                Врач высшей категории. Кандидат медицинских наук.<br>
                                                Стаж 12 лет
                                            </div>
                                            <div class="doctor-card__doctor-clinic-prices">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                        </div>
                                        <div class="doctor-card__right-record">
                                            <h4 class="doctor-card__right-record-title">Выбрать дату</h4>
                                            <div class="doctor-card-record__container">
                                                <div class="doctor-card__dates dates">
                                                    <p>Понедельник 21.03.</p>
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
                                                </div>
                                            </div>
                                            <div class="clinic-card__phone">
                                                <img src="/images/phone_24px.png">
                                                <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-card__listing">
                                        <div class="doctor-card__left">
                                            <div class="photo-doctor-clinic">
                                                <a href="#">
                                                    <img src="/images/doctor-inclinic.png">
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
                                                ул. Люблинская, д. 9 к. 1
                                            </div>
                                            <div class="doctor-card__doctor-spec-listing">
                                                Гинеколог • акушер врач УЗИ
                                            </div>
                                            <div class="doctor-card__doctor-experiences-listing">
                                                Врач высшей категории. Кандидат медицинских наук.<br>
                                                Стаж 12 лет
                                            </div>
                                            <div class="doctor-card__doctor-clinic-prices">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                        </div>
                                        <div class="doctor-card__right-record">
                                            <h4 class="doctor-card__right-record-title">Выбрать дату</h4>
                                            <div class="doctor-card-record__container">
                                                <div class="doctor-card__dates dates">
                                                    <p>Понедельник 21.03.</p>
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
                                                </div>
                                            </div>
                                            <div class="clinic-card__phone">
                                                <img src="/images/phone_24px.png">
                                                <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="#" data-appointment class="doctor-card__body">
                            <div data-fold class="doctor-card__dropdown-container">
                                <button data-fold-btn class="faq__btn">
                                    <div class="listing-doctor__title">
                                        <h5>Отоларингологи<span>(2 отоларинголога)</span>
                                            <a class="faq__arrow">
                                                <img src="/images/right-page.png">
                                            </a>
                                        </h5>
                                    </div>
                                </button>
                                <div data-fold-content class="clinic-card__content">
                                    <div class="doctor-card__listing">
                                        <div class="doctor-card__left">
                                            <div class="photo-doctor-clinic">
                                                <a href="#">
                                                    <img src="/images/doctor-inclinic.png">
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
                                                ул. Люблинская, д. 9 к. 1
                                            </div>
                                            <div class="doctor-card__doctor-spec-listing">
                                                Гинеколог • акушер врач УЗИ
                                            </div>
                                            <div class="doctor-card__doctor-experiences-listing">
                                                Врач высшей категории. Кандидат медицинских наук.<br>
                                                Стаж 12 лет
                                            </div>
                                            <div class="doctor-card__doctor-clinic-prices">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                        </div>
                                        <div class="doctor-card__right-record">
                                            <h4 class="doctor-card__right-record-title">Выбрать дату</h4>
                                            <div class="doctor-card-record__container">
                                                <div class="doctor-card__dates dates">
                                                    <p>Понедельник 21.03.</p>
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
                                                </div>
                                            </div>
                                            <div class="clinic-card__phone">
                                                <img src="/images/phone_24px.png">
                                                <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-card__listing">
                                        <div class="doctor-card__left">
                                            <div class="photo-doctor-clinic">
                                                <a href="#">
                                                    <img src="/images/doctor-inclinic.png">
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
                                                ул. Люблинская, д. 9 к. 1
                                            </div>
                                            <div class="doctor-card__doctor-spec-listing">
                                                Гинеколог • акушер врач УЗИ
                                            </div>
                                            <div class="doctor-card__doctor-experiences-listing">
                                                Врач высшей категории. Кандидат медицинских наук.<br>
                                                Стаж 12 лет
                                            </div>
                                            <div class="doctor-card__doctor-clinic-prices">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                        </div>
                                        <div class="doctor-card__right-record">
                                            <h4 class="doctor-card__right-record-title">Выбрать дату</h4>
                                            <div class="doctor-card-record__container">
                                                <div class="doctor-card__dates dates">
                                                    <p>Понедельник 21.03.</p>
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
                                                </div>
                                            </div>
                                            <div class="clinic-card__phone">
                                                <img src="/images/phone_24px.png">
                                                <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="#" data-appointment class="doctor-card__body">
                            <div data-fold class="doctor-card__dropdown-container">
                                <button data-fold-btn class="faq__btn">
                                    <div class="listing-doctor__title">
                                        <h5>Венерологи<span>(3 венеролога)</span>
                                            <a class="faq__arrow">
                                                <img src="/images/right-page.png">
                                            </a>
                                        </h5>
                                    </div>
                                </button>
                                <div data-fold-content class="clinic-card__content">
                                    <div class="doctor-card__listing">
                                        <div class="doctor-card__left">
                                            <div class="photo-doctor-clinic">
                                                <a href="#">
                                                    <img src="/images/doctor-inclinic.png">
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
                                                ул. Люблинская, д. 9 к. 1
                                            </div>
                                            <div class="doctor-card__doctor-spec-listing">
                                                Гинеколог • акушер врач УЗИ
                                            </div>
                                            <div class="doctor-card__doctor-experiences-listing">
                                                Врач высшей категории. Кандидат медицинских наук.<br>
                                                Стаж 12 лет
                                            </div>
                                            <div class="doctor-card__doctor-clinic-prices">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                        </div>
                                        <div class="doctor-card__right-record">
                                            <h4 class="doctor-card__right-record-title">Выбрать дату</h4>
                                            <div class="doctor-card-record__container">
                                                <div class="doctor-card__dates dates">
                                                    <p>Понедельник 21.03.</p>
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
                                                </div>
                                            </div>
                                            <div class="clinic-card__phone">
                                                <img src="/images/phone_24px.png">
                                                <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-card__listing">
                                        <div class="doctor-card__left">
                                            <div class="photo-doctor-clinic">
                                                <a href="#">
                                                    <img src="/images/doctor-inclinic.png">
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
                                                ул. Люблинская, д. 9 к. 1
                                            </div>
                                            <div class="doctor-card__doctor-spec-listing">
                                                Гинеколог • акушер врач УЗИ
                                            </div>
                                            <div class="doctor-card__doctor-experiences-listing">
                                                Врач высшей категории. Кандидат медицинских наук.<br>
                                                Стаж 12 лет
                                            </div>
                                            <div class="doctor-card__doctor-clinic-prices">
                                                Стоимость приема
                                                <p>1520₽</p>
                                                <span>1900₽</span>
                                            </div>
                                        </div>
                                        <div class="doctor-card__right-record">
                                            <h4 class="doctor-card__right-record-title">Выбрать дату</h4>
                                            <div class="doctor-card-record__container">
                                                <div class="doctor-card__dates dates">
                                                    <p>Понедельник 21.03.</p>
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
                                                </div>
                                            </div>
                                            <div class="clinic-card__phone">
                                                <img src="/images/phone_24px.png">
                                                <a href="#" class="doctor-clinic-phone">(499) 123-45-67</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <a data-popup-btn="review" class="users__btn search__btn js-review">Оставить отзыв</a>
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
                        <div class="review-spoiler" data-id="description">
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
                                                <span>Плюсы</span>
                                                <p>Компетентный врач</p>
                                            </div>
                                            <div class="user__clinic-geo">
                                                <img src="/images/review-geo.png">
                                                <p>Отзыв о враче Манохина<br>
                                                    Дарья Даниловна
                                                </p>
                                            </div>
                                        </div>
                                        <div class="user__block">
                                            <span>Минусы</span>
                                            <p>Сложно записаться.</p>
                                        </div>
                                        <div class="user__block">
                                            <span>Комментарий</span>
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
                                                    <span>Клиника на Рязанском проспекте</span>
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
                                                <span>Плюсы</span>
                                                <p>Компетентный врач</p>
                                            </div>
                                            <div class="user__clinic-geo">
                                                <img src="/images/review-geo.png">
                                                <p>Отзыв о враче Манохина<br>
                                                    Дарья Даниловна
                                                </p>
                                            </div>
                                        </div>
                                        <div class="user__block">
                                            <span>Минусы</span>
                                            <p>Сложно записаться.</p>
                                        </div>
                                        <div class="user__block">
                                            <span>Комментарий</span>
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
                                                    <span>Клиника на Рязанском проспекте</span>
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
                                                <span>Плюсы</span>
                                                <p>Компетентный врач</p>
                                            </div>
                                            <div class="user__clinic-geo">
                                                <img src="/images/review-geo.png">
                                                <p>Отзыв о враче Манохина<br>
                                                    Дарья Даниловна
                                                </p>
                                            </div>
                                        </div>
                                        <div class="user__block">
                                            <span>Минусы</span>
                                            <p>Сложно записаться.</p>
                                        </div>
                                        <div class="user__block">
                                            <span>Комментарий</span>
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
                                                    <span>Клиника на Рязанском проспекте</span>
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
                                                <span>Плюсы</span>
                                                <p>Компетентный врач</p>
                                            </div>
                                            <div class="user__clinic-geo">
                                                <img src="/images/review-geo.png">
                                                <p>Отзыв о враче Манохина<br>
                                                    Дарья Даниловна
                                                </p>
                                            </div>
                                        </div>
                                        <div class="user__block">
                                            <span>Минусы</span>
                                            <p>Сложно записаться.</p>
                                        </div>
                                        <div class="user__block">
                                            <span>Комментарий</span>
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
                                                    <span>Клиника на Рязанском проспекте</span>
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
                                                <span>Плюсы</span>
                                                <p>Компетентный врач</p>
                                            </div>
                                            <div class="user__clinic-geo">
                                                <img src="/images/review-geo.png">
                                                <p>Отзыв о враче Манохина<br>
                                                    Дарья Даниловна
                                                </p>
                                            </div>
                                        </div>
                                        <div class="user__block">
                                            <span>Минусы</span>
                                            <p>Сложно записаться.</p>
                                        </div>
                                        <div class="user__block">
                                            <span>Комментарий</span>
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
                                                    <span>Клиника на Рязанском проспекте</span>
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
                        <div class="users_btn">
                            <a class="users__more-review review-spoiler-btn" data-target="description">Показать ещё отзывы</a>
                            <a class="users__record js-review">Оставить отзыв</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="media-clinic">
            <h3 id="license" class="license-clinic-title">Лицензии клиники</h3>
            <div class="license-container">
                <section class="section-with-slider">
                    <div class="owl-carousel photo-swiper owl-theme">
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                        <a class="photo-clinic" href="/images/license-clinic.png" data-fancybox="gallery">
                            <img src="/images/license-clinic.png" alt="license"/>
                        </a>
                    </div>
                </section>
            </div>
            <h3 id="photo-clinic" class="photo-clinic__title">Фотографии клиники</h3>
            <div class="photo-clinic__container">
                <section class="section-with-slider">
                    <div class="owl-carousel photo-swiper owl-theme">
                        <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                            <img src="/images/photo-clinic-1.png" alt="photo">
                        </a>
                        <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                            <img src="/images/photo-clinic-1.png" alt="photo">
                        </a>
                        <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                            <img src="/images/photo-clinic-1.png" alt="photo">
                        </a>
                        <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                            <img src="/images/photo-clinic-1.png" alt="photo">
                        </a>
                        <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                            <img src="/images/photo-clinic-1.png" alt="photo">
                        </a>
                        <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                            <img src="/images/photo-clinic-1.png" alt="photo">
                        </a>
                        <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                            <img src="/images/photo-clinic-1.png" alt="photo">
                        </a>
                        <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                            <img src="/images/photo-clinic-1.png" alt="photo">
                        </a>
                        <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                            <img src="/images/photo-clinic-1.png" alt="photo">
                        </a>
                        <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                            <img src="/images/photo-clinic-1.png" alt="photo">
                        </a>
                        <a href="/images/photo-clinic-1.png" data-fancybox="gallery2">
                            <img src="/images/photo-clinic-1.png" alt="photo">
                        </a>
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
                </section>
            </div>
            <h3 class="video-clinic__title">Видео обзор клиники</h3>
            <div class="video-clinic__container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/K5LhfmEgFuM"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                </iframe>
            </div>
        </div>

        <section class="section-with-slider">
            <h2 class="other-clinics__title">Похожие клиники</h2>

            <div class="owl-carousel main-swiper owl-theme">
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
            <h2 class="other-clinics__title">Похожие клиники</h2>
            <div class="owl-carousel main-swiper owl-theme">
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

        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <img src="/images/bread-dot.png">
            <a href="#">Москва</a>
            <img src="/images/bread-dot.png">
            <a href="#">Клиники</a>
            <img src="/images/bread-dot.png">
            <a href="#">Многопрофильные клиники</a>
            <p>Клиника на Текстильщиках</p>
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
                        <a href="#">(499) 123-34-56</a>
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

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
            <button disabled class="js-submit-btn btn-disabled button" data-request="/ajax/review/">Отправить отзыв
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
                <li class="left js-review-rule"><input required="" class="input-text" type="text" name="name"
                                                       placeholder="Введите Ваше имя"></li>
                <li class="right js-review-rule"><input required="" class="input-text input-phone" name="phone"
                                                        type="tel"
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/form.js"></script>
</body>
</html>
