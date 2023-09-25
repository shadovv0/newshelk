<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.inputmask.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/mobile-styles.css"/>
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="/files/air-datepicker.css"/>
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
        <div class="sort__container">
            <h1>Гинекологи (378)</h1>
            <div class="sort__body">
                <span>Обновлено 30.03.22</span>
                <div class="sort__head">
                    <div data-fold class="sort__items">
                        <button data-fold-btn class="faq__btn">
                            <div class="sort__filter">Сортировать</div>
                            <a class="faq__arrow">
                                <img src="/images/right-page.png">
                            </a>
                        </button>
                        <ul data-fold-content>
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
                                Манохина Дарья <br>Даниловна
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
                                8 отзывов
                            </a>
                        </div>
                    </div>
                </div>
                <div class="doctor-card__body">
                    <div class="doctor-card__body-head">
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
                    </div>
                    <div class="doctor-card__body-footer">
                        <h6>Выберите клинику сети:</h6>
                        <div class="doctor-card__record-clinic">
                            <div class="dropdown-clinic">
                                <div onclick="drop()" class="dropbtn">Клиника в Текстильщиках<img src="/images/right-page.png"/></div>
                                <div id="drop" class="dropdown-content">
                                    <a href="#">Клиника в Марьино</a>
                                    <a href="#">Клиника на Проспекте Вернадского</a>
                                    <a href="#">Клиника в Беляево</a>
                                </div>
                            </div>
                        </div>
                        <div class="doctor-card__geo">
                            <p>ул. Люблинская, д. 9 к. 1</p>
                            <ul>
                                <li class="doctor-card__metro first-metro">
                                    <span></span>
                                    Текстильщики (338м)
                                </li>
                                <li class="doctor-card__metro second-metro">
                                    <span></span>
                                    Печатники (2,1км)
                                </li>
                                <li class="doctor-card__metro third-metro">
                                    <span></span>
                                    Стахановская (2,2км)
                                </li>
                            </ul>
                            <div class="doctor-card__clinic-phone">
                                <img src="/images/phone_24px.png">
                                <a href="#">(499) 123-45-67</a>
                            </div>
                        </div>
                        <h6>Выберите удобное время для записи онлайн:</h6>
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
                                    <div class="time-spoiler">
                                        <div class="doctor-card__time">
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
                                            <div class="schedule__item radio show-more-time time-spoiler-btn">
                                                <label class="radio__label show-more-time">
                                                    <input type="radio" name="time-appointment"
                                                           class="radio__input"/>
                                                    <img src="/images/bot-page.png">
                                                </label>
                                            </div>
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
                                        </div>
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
                                Манохина Дарья<br>Даниловна
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
                    <div class="doctor-card__body-head">
                        <div class="doctor-card__doctor-spec">
                            Гинеколог
                        </div>
                        <div class="doctor-card__doctor-experiences">
                            <ul>
                                <li class="doctor-card__doctor-experience">Стаж 12 лет</li>
                            </ul>
                        </div>
                    </div>
                    <div class="doctor-card__body-footer">
                        <div class="doctor-card__record-clinic-other">
                            Клиника в Текстильщиках
                        </div>
                        <div class="doctor-card__geo">
                            <p>ул. Люблинская, д. 9 к. 1</p>
                            <ul>
                                <li class="doctor-card__metro first-metro">
                                    <span></span>
                                    Текстильщики (338м)
                                </li>
                                <li class="doctor-card__metro second-metro">
                                    <span></span>
                                    Печатники (2,1км)
                                </li>
                                <li class="doctor-card__metro third-metro">
                                    <span></span>
                                    Стахановская (2,2км)
                                </li>
                            </ul>
                            <div class="doctor-card__clinic-phone">
                                <img src="/images/phone_24px.png">
                                <a href="#">(499) 123-45-67</a>
                            </div>
                        </div>
                        <div class="doctor-card__time-slot">
                            <a class="record-btn js-record">
                                Записаться на приём
                            </a>
                        </div>
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


        <div class="text-banner-head">Средняя оценка организаций - 4.53 на основании 3162 отзывов и 6909<br> оценок
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

        <section>
            <div class="popular-questions">
                <h1>Самые популярные вопросы</h1>
                <div class="faq">
                    <div data-fold class="faq__item">
                        <div class="red-btn">
                            <button data-fold-btn class="faq__btn">
                                · Что такое гинекология?
                            </button>
                        </div>
                        <div data-fold-content class="faq__content">
                            <p>
                                Гинекология - это отрасль медицины, которая занимается изучением, диагностикой, лечением
                                и профилактикой заболеваний женской половой системы.<br>
                                Гинеколог это исключительно «женский» врач. Гинекология неразрывно связана с
                                акушерством.
                            </p>
                        </div>
                    </div>
                    <div data-fold class="faq__item">
                        <div class="red-btn">
                            <button data-fold-btn class="faq__btn">
                                · Где лучше лечить женские заболевания?
                            </button>
                        </div>
                        <div data-fold-content class="faq__content">
                            <p>
                                Гинекология - это отрасль медицины, которая занимается изучением, диагностикой, лечением
                                и профилактикой заболеваний женской половой системы.<br>
                                Гинеколог это исключительно «женский» врач. Гинекология неразрывно связана с
                                акушерством.
                            </p>
                        </div>
                    </div>
                    <div data-fold class="faq__item">
                        <div class="red-btn">
                            <button data-fold-btn class="faq__btn">
                                · Посоветуйте центр гинекологии
                            </button>
                        </div>
                        <div data-fold-content class="faq__content">
                            <p>
                                Гинекология - это отрасль медицины, которая занимается изучением, диагностикой, лечением
                                и профилактикой заболеваний женской половой системы.<br>
                                Гинеколог это исключительно «женский» врач. Гинекология неразрывно связана с
                                акушерством.
                            </p>
                        </div>
                    </div>
                </div>
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

        <div class="review-card">
            <h1>Отзывы</h1>
            <div class="owl-carousel  mob-review-swiper owl-theme">
                <div class="review-card__container">
                    <div class="review-card__head">
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
                    </div>
                    <div class="review-card__comment">
                        Комментарий
                        <p>Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней! Всегда внимательна,
                            ничего лишнего не назначит и тщательно разбирается в проблеме пациента!</p>
                    </div>
                    <div class="review-card__bottom-doctor">
                        <div class="review-card__photo-doctor">
                            <img src="/images/doctor.png">
                            <div class="review-card__doctor-name__review">
                                <a class="review-card__doctor-name" href="#">
                                    Манохина Д. Д.
                                </a>
                                <a class="review-card__count-review" href="#reviews">
                                    8 отзывов
                                </a>
                            </div>
                        </div>
                        <div class="reviews-count doctors__clinic">
                            <div class="doctor-review-card__star">
                                <img src="/images/Star1.png">
                                <p>4,7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-card__container">
                    <div class="review-card__head">
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
                    </div>
                    <div class="review-card__comment">
                        Комментарий
                        <p>Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней! Всегда внимательна,
                            ничего лишнего не назначит и тщательно разбирается в проблеме пациента!</p>
                    </div>
                    <div class="review-card__bottom-doctor">
                        <div class="review-card__photo-doctor">
                            <img src="/images/doctor.png">
                            <div class="review-card__doctor-name__review">
                                <a class="review-card__doctor-name" href="#">
                                    Манохина Д. Д.
                                </a>
                                <a class="review-card__count-review" href="#reviews">
                                    8 отзывов
                                </a>
                            </div>
                        </div>
                        <div class="reviews-count doctors__clinic">
                            <div class="doctor-review-card__star">
                                <img src="/images/Star1.png">
                                <p>4,7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-card__container">
                    <div class="review-card__head">
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
                    </div>
                    <div class="review-card__comment">
                        Комментарий
                        <p>Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней! Всегда внимательна,
                            ничего лишнего не назначит и тщательно разбирается в проблеме пациента!</p>
                    </div>
                    <div class="review-card__bottom-doctor">
                        <div class="review-card__photo-doctor">
                            <img src="/images/doctor.png">
                            <div class="review-card__doctor-name__review">
                                <a class="review-card__doctor-name" href="#">
                                    Манохина Д. Д.
                                </a>
                                <a class="review-card__count-review" href="#reviews">
                                    8 отзывов
                                </a>
                            </div>
                        </div>
                        <div class="reviews-count doctors__clinic">
                            <div class="doctor-review-card__star">
                                <img src="/images/Star1.png">
                                <p>4,7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="relinks">
            <div class="relinks__body">
                <div class="relinks__column">
                    <b class="relinks__column-title">Направления</b>
                    <div class="main-spoiler" data-id="description">
                        <ul class="relinks__list relinks__list--mobile-row">
                            <li class="relinks__item"><a href="#" class="relinks__link">Акушер (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Гинеколог (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Гинеколог-эндокринолог (от 18
                                    лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Акушер (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Гинеколог (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Артролог
                                    (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Аллергология
                                    (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Аллергология
                                    (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Акушер (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Гинеколог (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Гинеколог-эндокринолог (от 18
                                    лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Акушер (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Гинеколог (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Артролог
                                    (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Аллергология
                                    (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Аллергология
                                    (от 18 лет)</a></li>
                        </ul>
                    </div>
                    <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                </div>
                <div class="relinks__column">
                    <b class="relinks__column-title">Услуги</b>
                    <div class="main-spoiler" data-id="description">
                        <ul class="relinks__list relinks__list--mobile-row">
                            <li class="relinks__item"><a href="#" class="relinks__link">Акушер (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Гинеколог (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Гинеколог-эндокринолог (от 18
                                    лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Акушер (от 18 лет)</a></li>

                            <li class="relinks__item"><a href="#" class="relinks__link">Артролог
                                    (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Акушер (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Гинеколог (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Гинеколог-эндокринолог (от 18
                                    лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Акушер (от 18 лет)</a></li>

                            <li class="relinks__item"><a href="#" class="relinks__link">Артролог
                                    (от 18 лет)</a></li>
                        </ul>
                    </div>
                    <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                </div>
                <div class="relinks__column">
                    <b class="relinks__column-title">Клиники</b>
                    <div class="main-spoiler" data-id="description">
                        <ul class="relinks__list">
                            <li class="relinks__item">
                                <a href="" class="relinks__link">
                                    <img src="/images/euromed.png">
                                    «Евромед»
                                </a>
                            </li>
                            <li class="relinks__item">
                                <a href="" class="relinks__link">
                                    <img src="/images/open-clinic.png">
                                    «Открытая клиника»
                                </a>
                            </li>
                            <li class="relinks__item">
                                <a href="" class="relinks__link">
                                    <img src="/images/moscow-clinic.png">
                                    «Московская клиника»
                                </a>
                            </li>
                            <li class="relinks__item">
                                <a href="" class="relinks__link">
                                    <img src="/images/sinay.png">
                                    «Синай»
                                </a>
                            </li>
                            <li class="relinks__item">
                                <a href="" class="relinks__link">
                                    <img src="/images/euromed.png">
                                    «Евромед»
                                </a>
                            </li>
                            <li class="relinks__item">
                                <a href="" class="relinks__link">
                                    <img src="/images/open-clinic.png">
                                    «Открытая клиника»
                                </a>
                            </li>
                            <li class="relinks__item">
                                <a href="" class="relinks__link">
                                    <img src="/images/moscow-clinic.png">
                                    «Московская клиника»
                                </a>
                            </li>
                            <li class="relinks__item">
                                <a href="" class="relinks__link">
                                    <img src="/images/sinay.png">
                                    «Синай»
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="main-spoiler-btn" data-target="description">Показать ещё</div>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <img src="/images/bread-dot.png">
            <a href="#">Москва</a>
            <img src="/images/bread-dot.png">
            <a href="#">Врачи</a>
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
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/form.js"></script>
</body>
</html>