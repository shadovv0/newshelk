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
    <link rel="stylesheet" href="../files/air-datepicker.css">
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
                        <a class="menu-item root-item" href="/uslugi/index.php">Услуги</a>
                        <a class="menu-item root-item" href="/diagnostic/index.php">Диагностика</a>
                        <a class="menu-item root-item" href="/disease/index.php">Заболевания</a>
                        <a class="menu-item root-item" href="/symptoms/index.php">Симптомы</a>
                    </div>
                </nav>
                <div class="search-doctor-view searching">
                    <form name="search__search-form" action="/search/" class="search__search-form" method="GET">
                        <img src="/images/search-btn.png">
                        <input class="js-search-input" type="text"
                               placeholder="Поиск: врач, клиника, болезнь, услуга" name="q" value=""/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="wrap">

        <div class="doctor-card">
            <div class="doctor-card__left view-doctor">
                <div class="photo-doctor card-doctor-view">
                    <a href="#">
                        <img src="/images/card-doctor.png">
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
                <span>Обновлено 20.03.22</span>
            </div>
            <div class="doctor-card__center-views">
                <div class="doctor-card__doctor-name">
                    <h1>
                        Манохина Дарья Дмитриевна
                    </h1>
                </div>
                <div class="doctor-card__doctor-experience-views">
                    Стаж - 12 лет
                </div>
                <div class="doctor-card__doctor-special">
                    <p>Специальность</p>
                    <span>Гинеколог, акушер врач УЗИ, гинеколог-эндокринолог, маммолог</span>
                </div>
                <div class="doctor-card__doctor-category-views">
                    <p>Категории</p>
                    <span>Врач высшей категории</span>
                </div>
                <div class="doctor-card__doctor-degree-views">
                    <p>Степени</p>
                    <span>Кандидат медицинских наук</span>
                </div>

                <div class="doctor-card__doctor-data">
                    <a href="#doctor-information">Информация о враче</a>
                    <img src="/images/ellipse40.png">
                    <a href="#reviews">Отзывы</a>
                    <img src="/images/ellipse40.png">
                    <a href="#">Запись на приём</a>
                </div>


            </div>
            <div class="doctor-card__right-views">
                <div class="doctor-card__doctor-prices price-btn">
                    Стоимость приема
                    <p>1520₽</p>
                    <span>1900₽</span>
                </div>
                <a class="search__btn js-record">Записаться на приём онлайн</a>
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
            </div>
        </div>

        <div class="appointment-container">
            <div data-fold class="appointment-body">
                <div class="appointment">
                    <div class="appointment__left">
                        <button data-fold-btn class="faq__btn">
                            <div class="appointment__clinic-name"><a href="#">Клиника на Текстильщиках</a>
                                <div class="appointment__clinic-address">г. Москва, ул. Люблинская, д. 9 к. 1</div>
                            </div>
                        </button>
                    </div>
                </div>
                <div data-fold-content class="clinic-card__content">
                    <div class="appointment__geo-clinic">
                        <div class="appointment__geo-left">
                            <div class="appointment__clinic-phone"><a href="#">(499) 123-34-56</a></div>
                            <div class="appointment__clinic-metro">
                                <ul>
                                    <li class="first-metro">
                                    <span></span>
                                        <b>Текстильщики (338м)</b>
                                    </li>
                                    <li class="second-metro">
                                        <span></span>
                                        Печатники (2,1км)
                                    </li>
                                    <li class="third-metro">
                                        <span></span>
                                        Стахановская (2,2км)
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="appointment__right"><img src="/images/image%2017.png"></div>
                    </div>
                    <div class="appointment__popular-clinic-procedure">
                        <ul>
                            <li> Акушер (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                            <li>Гинеколог (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                            <li>Гинеколог-эндокринолог (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                            <li>Маммолог (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                        </ul>
                    </div>

                    <div class="doctor-price-promotion">
                        <div class="doctor-promotion">
                            <p>Акция!
                                <img src="/images/grey-alert.png">
                            </p>
                            <b>1520 ₽
                                <span>-20%</span></b>
                        </div>
                        <div class="doctor-old-price">
                            <p>Цена приёма</p>
                            <b>1900 ₽</b>
                        </div>
                    </div>
                    <div class="appointment__timeslot">
                        <h4>Выбрать дату</h4>
                        <div class="appointment__timeslot-container">
                            <div class="grey-col"></div>
                            <div class="appointment-date">
                                <ul>
                                    <li><a class="relink-date">Понедельник 21.03.</a></li>
                                    <li><a class="relink-date">Вторник 22.03</a></li>
                                    <li><a class="relink-date">Среда 23.03.</a></li>
                                    <li><a class="relink-date">Четверг 24.03.</a></li>
                                </ul>
                            </div>
                            <div class="appointment-center">
                                <b>Для записи на удобное вам время заполните форму:</b>
                                <div class="appointment-record-container">
                                    <div class="appointment-record">
                                        <div class="appointment__name-patient">
                                            <input required placeholder="Имя, Фамилия" class="form-control"
                                                   id="name-patient"
                                                   type="text"
                                                   maxlength="500"
                                                   value="">

                                        </div>
                                        <div class="appointment__phone-patient">
                                            <input required placeholder="Номер телефона" class="form-control"
                                                   id="phone-patient"
                                                   type="text"
                                                   maxlength="500"
                                                   value="">
                                        </div>
                                    </div>
                                    <a href="#" class="record__btn">Записаться</a>
                                </div>
                                <span>Или позвоните по телефону<a href="#"
                                                                  class="appointment-phone">(499) 123-34-56</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-fold class="appointment-body">
                <div class="appointment">
                    <div class="appointment__left">
                        <button data-fold-btn class="faq__btn">
                            <div class="appointment__clinic-name"><a href="#">Клиника на Текстильщиках</a>
                                <div class="appointment__clinic-address">г. Москва, ул. Люблинская, д. 9 к. 1</div>
                            </div>
                        </button>
                    </div>
                </div>
                <div data-fold-content class="clinic-card__content">
                    <div class="appointment__geo-clinic">
                        <div class="appointment__geo-left">
                            <div class="appointment__clinic-phone"><a href="#">(499) 123-34-56</a></div>
                            <div class="appointment__clinic-metro">
                                <ul>
                                    <li class="first-metro">
                                        <span></span>
                                        <b>Текстильщики (338м)</b>
                                    </li>
                                    <li class="second-metro">
                                        <span></span>
                                        Печатники (2,1км)
                                    </li>
                                    <li class="third-metro">
                                        <span></span>
                                        Стахановская (2,2км)
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="appointment__right"><img src="/images/image%2017.png"></div>
                    </div>
                    <div class="appointment__popular-clinic-procedure">
                        <ul>
                            <li> Акушер (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                            <li>Гинеколог (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                            <li>Гинеколог-эндокринолог (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                            <li>Маммолог (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                        </ul>
                    </div>

                    <div class="doctor-price-promotion">
                        <div class="doctor-promotion">
                            <p>Акция!
                                <img src="/images/grey-alert.png">
                            </p>
                            <b>1520 ₽
                                <span>-20%</span></b>
                        </div>
                        <div class="doctor-old-price">
                            <p>Цена приёма</p>
                            <b>1900 ₽</b>
                        </div>
                    </div>
                    <div class="appointment__timeslot">
                        <h4>Выбрать дату</h4>
                        <div class="appointment__timeslot-container">
                            <div class="grey-col"></div>
                            <div class="appointment-date">
                                <ul>
                                    <li><a class="relink-date">Понедельник 21.03.</a></li>
                                    <li><a class="relink-date">Вторник 22.03</a></li>
                                    <li><a class="relink-date">Среда 23.03.</a></li>
                                    <li><a class="relink-date">Четверг 24.03.</a></li>
                                </ul>
                            </div>
                            <div class="appointment-center">
                                <b>Для записи на удобное вам время заполните форму:</b>
                                <div class="appointment-record-container">
                                    <div class="appointment-record">
                                        <div class="appointment__name-patient">
                                            <input required placeholder="Имя, Фамилия" class="form-control"
                                                   id="name-patient"
                                                   type="text"
                                                   maxlength="500"
                                                   value="">

                                        </div>
                                        <div class="appointment__phone-patient">
                                            <input required placeholder="Номер телефона" class="form-control"
                                                   id="phone-patient"
                                                   type="text"
                                                   maxlength="500"
                                                   value="">
                                        </div>
                                    </div>
                                    <a href="#" class="record__btn">Записаться</a>
                                </div>
                                <span>Или позвоните по телефону<a href="#"
                                                                  class="appointment-phone">(499) 123-34-56</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-fold class="appointment-body">
                <div class="appointment">
                    <div class="appointment__left">
                        <button data-fold-btn class="faq__btn">
                            <div class="appointment__clinic-name"><a href="#">Клиника на Текстильщиках</a>
                                <div class="appointment__clinic-address">г. Москва, ул. Люблинская, д. 9 к. 1</div>
                            </div>
                        </button>
                    </div>
                </div>
                <div data-fold-content class="clinic-card__content">
                    <div class="appointment__geo-clinic">
                        <div class="appointment__geo-left">
                            <div class="appointment__clinic-phone"><a href="#">(499) 123-34-56</a></div>
                            <div class="appointment__clinic-metro">
                                <ul>
                                    <li class="first-metro">
                                        <span></span>
                                        <b>Текстильщики (338м)</b>
                                    </li>
                                    <li class="second-metro">
                                        <span></span>
                                        Печатники (2,1км)
                                    </li>
                                    <li class="third-metro">
                                        <span></span>
                                        Стахановская (2,2км)
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="appointment__right"><img src="/images/image%2017.png"></div>
                    </div>
                    <div class="appointment__popular-clinic-procedure">
                        <ul>
                            <li> Акушер (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                            <li>Гинеколог (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                            <li>Гинеколог-эндокринолог (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                            <li>Маммолог (от 18 лет)
                                <div class="appointment__price"><p>1520₽</p>
                                    <span>1900₽</span></div>
                            </li>
                        </ul>
                    </div>

                    <div class="doctor-price-promotion">
                        <div class="doctor-promotion">
                            <p>Акция!
                                <img src="/images/grey-alert.png">
                            </p>
                            <b>1520 ₽
                                <span>-20%</span></b>
                        </div>
                        <div class="doctor-old-price">
                            <p>Цена приёма</p>
                            <b>1900 ₽</b>
                        </div>
                    </div>
                    <div class="appointment__timeslot">
                        <h4>Выбрать дату</h4>
                        <div class="appointment__timeslot-container">
                            <div class="grey-col"></div>
                            <div class="appointment-date">
                                <ul>
                                    <li><a class="relink-date">Понедельник 21.03.</a></li>
                                    <li><a class="relink-date">Вторник 22.03</a></li>
                                    <li><a class="relink-date">Среда 23.03.</a></li>
                                    <li><a class="relink-date">Четверг 24.03.</a></li>
                                </ul>
                            </div>
                            <div class="appointment-center">
                                <b>Для записи на удобное вам время заполните форму:</b>
                                <div class="appointment-record-container">
                                    <div class="appointment-record">
                                        <div class="appointment__name-patient">
                                            <input required placeholder="Имя, Фамилия" class="form-control"
                                                   id="name-patient"
                                                   type="text"
                                                   maxlength="500"
                                                   value="">

                                        </div>
                                        <div class="appointment__phone-patient">
                                            <input required placeholder="Номер телефона" class="form-control"
                                                   id="phone-patient"
                                                   type="text"
                                                   maxlength="500"
                                                   value="">
                                        </div>
                                    </div>
                                    <a href="#" class="record__btn">Записаться</a>
                                </div>
                                <span>Или позвоните по телефону<a href="#"
                                                                  class="appointment-phone">(499) 123-34-56</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-about-doc">
            <div class="info-about-doc__container">
                <h4>Информация о враче</h4>
                <div class="info-about-doc__text">
                    Манохина Дарья Дмитриевна, Москва: акушер, врач узи, гинеколог, гинеколог-эндокринолог,
                    маммолог, 14 отзывов пациентов, места работы, стаж 12 лет
                </div>
                <section id="doctor-information" class="information">
                    <div class="container">
                        <div data-tabs-container class="information__body">
                            <div class="information__tabs mobile-overflow">
                                <button data-tab="experience" class="information__tab is-active">
                                    Опыт работы
                                    <span class="information__tab-count">6</span>
                                </button>
                                <button data-tab="education" class="information__tab">
                                    Образование
                                    <span class="information__tab-count">5</span>
                                </button>
                                <button data-tab="level-up" class="information__tab">
                                    Повышение квалификации
                                    <span class="information__tab-count">4</span>
                                </button>
                                <button data-tab="photos" class="information__tab">
                                    Документы и фотографии
                                    <span class="information__tab-count">2</span>
                                </button>
                                <button data-tab="profiles" class="information__tab">
                                    Профиль лечения
                                    <span class="information__tab-count">8</span>
                                </button>
                            </div>
                            <div class="information__tabcontents">
                                <div data-tabcontent="experience" class="information__tabcontent is-active">
                                    <h4>Опыт работы</h4>
                                    <div class="information__tabcontent-body information__tabcontent-body--cards">
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
                                <div data-tabcontent="education" class="information__tabcontent">
                                    <h4>Образование</h4>
                                    <div class="information__tabcontent-body information__tabcontent-body--cards">
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
                                <div data-tabcontent="level-up" class="information__tabcontent">
                                    <h4>Повышение квалификации</h4>
                                    <div class="information__tabcontent-body information__tabcontent-body--cards">
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
                                <div data-tabcontent="photos"
                                     class="information__tabcontent information__tabcontent--photos">
                                    <h4>Документы и фотографии</h4>
                                    <div class="information__tabcontent-body information__tabcontent-body--photos">
                                        <div class="information__photo">
                                            <div class="owl-carousel main-swiper owl-theme">
                                                <a href="/images/license-clinic.png" data-fancybox="gallery1">
                                                    <img src="/images/license-clinic.png" alt="document">
                                                </a>
                                                <a href="/images/license-clinic.png" data-fancybox="gallery1">
                                                    <img src="/images/license-clinic.png" alt="document">
                                                </a>
                                                <a href="/images/license-clinic.png" data-fancybox="gallery1">
                                                    <img src="/images/license-clinic.png" alt="document">
                                                </a>
                                                <a href="/images/license-clinic.png" data-fancybox="gallery1">
                                                    <img src="/images/license-clinic.png" alt="document">
                                                </a>
                                                <a href="/images/license-clinic.png" data-fancybox="gallery1">
                                                    <img src="/images/license-clinic.png" alt="document">
                                                </a>
                                                <a href="/images/license-clinic.png" data-fancybox="gallery1">
                                                    <img src="/images/license-clinic.png" alt="document">
                                                </a>
                                                <a href="/images/license-clinic.png" data-fancybox="gallery1">
                                                    <img src="/images/license-clinic.png" alt="document">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-tabcontent="profiles" class="information__tabcontent">
                                    <h4>Профиль лечения</h4>
                                    <div class="information__tabcontent-body information__tabcontent-body--cards information__tabcontent-body--profiles">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <section id="reviews" class="users">
            <div class="users__container">
                <div class="users__title-body">
                    <div class="users__title">
                        <h2>Отзывы<span class="users__count"></span></h2>
                        <a href="#" class="users__side-link">Как мы проверяем отзывы?</a>
                    </div>
                    <a data-popup-btn="review" href="#" class="users__btn search__btn js-review">Оставить отзыв</a>
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
                                                <p>Клиника на Текстильщиках<br>
                                                    ул. Люблинская, д. 9 к. 1
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
                                                <p>Клиника на Текстильщиках<br>
                                                    ул. Люблинская, д. 9 к. 1
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
                                                <p>Клиника на Текстильщиках<br>
                                                    ул. Люблинская, д. 9 к. 1
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
                                                <p>Клиника на Текстильщиках<br>
                                                    ул. Люблинская, д. 9 к. 1
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
                                                <p>Клиника на Текстильщиках<br>
                                                    ул. Люблинская, д. 9 к. 1
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


        <section class="section-with-slider">
            <div class="popular-doctor">
                <h4 class="popular-doctor__title">Популярные
                    <ins> акушеры в районе метро “Рязанский проспект”</ins>
                </h4>
                <div class="owl-carousel main-swiper owl-theme">
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
            <button disabled class="js-submit-btn btn-disabled button" data-request="/ajax/review/">Отправить отзыв
            </button>
        </form>
        <button class="js-close-form close-form"><img src="../images/close.png"></button>
    </div>
</div>
<div class="popup pp-info">
    <a class="pp-close" href="#"></a>
    <div class="pp-title">Что-то пошло не так, попробуйте еще раз.</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/form.js"></script>
</body>
</html>