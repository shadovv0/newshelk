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
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="wrap">
        <div class="sort__container">
            <h1>Гинекологи (114)</h1>
            <div class="sort__body">
                <span>Обновлено 30.03.22</span>
                <div class="sort__head">
                    <div class="sort__items">
                        <div class="sort__filter">Сортировать список по:</div>
                        <ul>
                            <li class="sort__filter-item"><a href="#">Рейтингу</a></li>
                            <li class="sort__filter-item"><a href="#">Стажу</a></li>
                            <li class="sort__filter-item"><a href="#">Цене приёма</a></li>
                            <li class="sort__filter-item"><a href="#">Популярности</a></li>
                        </ul>
                    </div>
                    <a href="#">Сбросить фильтр</a>
                </div>
            </div>
        </div>

        <div class="doctor-card__container">
            <div class="doctor-card">
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
                    <div class="doctor-card__doctor-spec">
                        Гинеколог • акушер врач УЗИ
                    </div>
                    <div class="doctor-card__doctor-experiences">
                        <ul>
                            <li class="doctor-card__doctor-category">Врач высшей категории</li>
                            <li class="doctor-card__doctor-degree"> Кандидат медицинских наук</li>
                            <li class="doctor-card__doctor-experience"> Стаж 12 лет</li>
                        </ul>

                    </div>
                    <div class="doctor-card__doctor-prices">
                        Стоимость приема
                        <p>1520₽</p>
                        <span>1900₽</span>
                    </div>

                </div>
                <div class="doctor-card__right">
                    <span>Выберите клинику сети:</span>
                    <div class="doctor-card__record-clinic-fold">
                        <!--<button data-fold-btn class="faq__btn">-->
                        <div class="doctor-card__record-clinic">
                            <select name="clinic" id="clinic-select" class="doctor-card__record-clinic-text">
                                <option class="choose-clinic" value="0">Клиника в Текстильщиках</option>
                                <option class="choose-clinic" value="0">Клиника в Марьино</option>
                                <option class="choose-clinic" value="0">Клиника на Проспекте Вернадского</option>
                                <option class="choose-clinic" value="0">Клиника в Беляево</option>
                            </select>
                        </div>
                        <!-- </button>-->
                        <div class="doctor-card__geo-disabled">
                            <p>ул. Люблинская, д. 9 к. 1</p>
                            <ul>
                                <li class="doctor-card__metro-disabled">
                                    <img src="/images/Ellipse%2027.png">
                                    Текстильщики (338м)
                                </li>
                                <li class="doctor-card__metro-disabled"><img src="/images/Ellipse%2028.png">
                                    Печатники (2,1км)
                                </li>
                                <li class="doctor-card__metro-disabled"><img src="/images/Ellipse%2029.png">
                                    Стахановская (2,2км)
                                </li>
                            </ul>
                            <img src="/images/phone_24px.png">
                            <a href="#">(499) 123-45-67</a>
                        </div>
                    </div>
                    <span>Выберите удобное время для записи онлайн:</span>
                    <div class="doctor-card__time-slot">
                        <div class="doctor-card__date">
                            <p>Сегодня</p>
                        </div>
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
                            <div class="schedule__item radio">
                                <label class="radio__label">
                                    <input type="radio" name="time-appointment"
                                           class="radio__input"/>
                                    <img src="/images/bot-page.png">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="doctor-card">
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
                    <div class="doctor-card__doctor-spec">
                        Гинеколог • акушер врач УЗИ
                    </div>
                    <div class="doctor-card__doctor-experiences">
                        <ul>
                            <li class="doctor-card__doctor-category">Врач высшей категории</li>
                            <li class="doctor-card__doctor-experience"> Стаж 12 лет</li>
                        </ul>

                    </div>
                    <div class="doctor-card__doctor-prices">
                        Стоимость приема
                        <p>1520₽</p>
                        <span>1900₽</span>
                    </div>

                </div>
                <div class="doctor-card__right">
                    <div class="doctor-card__record-clinic">
                        Клиника в Текстильщиках
                    </div>
                    <div class="doctor-card__geo-disabled">
                        <p>ул. Люблинская, д. 9 к. 1</p>
                        <ul>
                            <li class="doctor-card__metro-disabled">
                                <img src="/images/Ellipse%2027.png">
                                Текстильщики (338м)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="doctor-card">
                <div class="doctor-card__left">
                    <div class="photo-doctor">
                        <a href="#">
                            <img src="/images/doctor-full.png">
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
                    <div class="doctor-card__doctor-spec">
                        Гинеколог • акушер врач УЗИ
                    </div>
                    <div class="doctor-card__doctor-prices">
                        Стоимость приема
                        <p>1520₽</p>
                        <span>1900₽</span>
                    </div>
                    <div class="doctor-card__doctor-experiences">
                        <ul>
                            <li class="doctor-card__doctor-experience"> Стаж 12 лет</li>
                        </ul>
                    </div>
                </div>
                <div class="doctor-card__right">
                    <div data-fold class="doctor-card__record-clinic-fold">
                        <button data-fold-btn class="faq__btn">
                            <div class="doctor-card__record-clinic">
                                Клиника в Текстильщиках
                            </div>
                        </button>
                        <div data-fold-content class="doctor-card__geo">
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
                    </div>
                    <div class="doctor-card__time-slot">
                        <div class="doctor-card__date">
                            <p>Сегодня</p>
                        </div>
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
                            <div class="schedule__item radio">
                                <label class="radio__label">
                                    <input type="radio" name="time-appointment"
                                           class="radio__input"/>
                                    <img src="/images/bot-page.png">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="listing">
            <ul>
                <li><a href="#">
                        <img src="/images/flat_right.png"></a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">
                        <img src="/images/flat_left.png"></a>
                </li>
            </ul>
        </div>

        <div class="text-banner">
            <img src="/images/img.png" style="width: 434px;height: 280px;">
            <img src="/images/sloi3.png" style="width: 400px;left: 85px;height: 250px;bottom: 0;">
            <div class="text-banner__text-block">
                <div class="text-banner__top-text">Средняя оценка организаций - 4.53 на основании 3162 отзывов и 6909
                    оценок
                </div>
                <div class="text-banner__mid-text">Подберем хорошую и недорогую организацию в удобном<br> для вас районе
                    за 1 минуту
                </div>
                <div class="text-banner__phone"><a href="#">(499) 123-45-67</a> *Услуга бесплатная</div>
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
            <h1>Отзывы</h1>
            <div class="owl-carousel review-swiper owl-theme">
                <div class="doctor-review-card__container">
                    <div class="doctor-review-card__photo-name">
                        <img src="/images/doctor.png">
                        <div class="doctor-review-card__name">
                            Манохина<br>
                            Дарья Даниловна
                        </div>
                        <div class="reviews-count doctors__clinic">
                            <div class="doctor-review-card__star">
                                <img src="/images/Star1.png">
                                <p>4,7</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-card__left">
                        <div class="review-card__name-patient">
                            Имя пациента
                        </div>
                        <div class="review-card__date">
                            14.02.2022
                        </div>
                        <div class="review-card__shield">
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
                    <div class="review-card__center">
                        <div class="review-card__comment">
                            Комментарий
                            <p>Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней! Всегда внимательна,
                                ничего лишнего не назначит и тщательно разбирается в проблеме пациента!</p>
                        </div>
                    </div>
                    <div class="review-card__marks">
                        <img src="/images/Star1.png">
                        <p>5</p>
                    </div>
                </div>
                <div class="doctor-review-card__container">
                    <div class="doctor-review-card__photo-name">
                        <img src="/images/doctor.png">
                        <div class="doctor-review-card__name">
                            Манохина<br>
                            Дарья Даниловна
                        </div>
                        <div class="reviews-count doctors__clinic">
                            <div class="doctor-review-card__star">
                                <img src="/images/Star1.png">
                                <p>4,7</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-card__left">
                        <div class="review-card__name-patient">
                            Имя пациента
                        </div>
                        <div class="review-card__date">
                            14.02.2022
                        </div>
                        <div class="review-card__shield">
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
                    <div class="review-card__center">
                        <div class="review-card__comment">
                            Комментарий
                            <p>Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней! Всегда внимательна,
                                ничего лишнего не назначит и тщательно разбирается в проблеме пациента!</p>
                        </div>
                    </div>
                    <div class="review-card__marks">
                        <img src="/images/Star1.png">
                        <p>5</p>
                    </div>
                </div>
                <div class="doctor-review-card__container">
                    <div class="doctor-review-card__photo-name">
                        <img src="/images/doctor.png">
                        <div class="doctor-review-card__name">
                            Манохина<br>
                            Дарья Даниловна
                        </div>
                        <div class="reviews-count doctors__clinic">
                            <div class="doctor-review-card__star">
                                <img src="/images/Star1.png">
                                <p>4,7</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-card__left">
                        <div class="review-card__name-patient">
                            Имя пациента
                        </div>
                        <div class="review-card__date">
                            14.02.2022
                        </div>
                        <div class="review-card__shield">
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
                    <div class="review-card__center">
                        <div class="review-card__comment">
                            Комментарий
                            <p>Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней! Всегда внимательна,
                                ничего лишнего не назначит и тщательно разбирается в проблеме пациента!</p>
                        </div>
                    </div>
                    <div class="review-card__marks">
                        <img src="/images/Star1.png">
                        <p>5</p>
                    </div>
                </div>
                <div class="doctor-review-card__container">
                    <div class="doctor-review-card__photo-name">
                        <img src="/images/doctor.png">
                        <div class="doctor-review-card__name">
                            Манохина<br>
                            Дарья Даниловна
                        </div>
                        <div class="reviews-count doctors__clinic">
                            <div class="doctor-review-card__star">
                                <img src="/images/Star1.png">
                                <p>4,7</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-card__left">
                        <div class="review-card__name-patient">
                            Имя пациента
                        </div>
                        <div class="review-card__date">
                            14.02.2022
                        </div>
                        <div class="review-card__shield">
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
                    <div class="review-card__center">
                        <div class="review-card__comment">
                            Комментарий
                            <p>Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней! Всегда внимательна,
                                ничего лишнего не назначит и тщательно разбирается в проблеме пациента!</p>
                        </div>
                    </div>
                    <div class="review-card__marks">
                        <img src="/images/Star1.png">
                        <p>5</p>
                    </div>
                </div>
                <div class="doctor-review-card__container">
                    <div class="doctor-review-card__photo-name">
                        <img src="/images/doctor.png">
                        <div class="doctor-review-card__name">
                            Манохина<br>
                            Дарья Даниловна
                        </div>
                        <div class="reviews-count doctors__clinic">
                            <div class="doctor-review-card__star">
                                <img src="/images/Star1.png">
                                <p>4,7</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-card__left">
                        <div class="review-card__name-patient">
                            Имя пациента
                        </div>
                        <div class="review-card__date">
                            14.02.2022
                        </div>
                        <div class="review-card__shield">
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
                    <div class="review-card__center">
                        <div class="review-card__comment">
                            Комментарий
                            <p>Давно знаю доктора Д.Д.Манохину, обращаюсь только к ней! Всегда внимательна,
                                ничего лишнего не назначит и тщательно разбирается в проблеме пациента!</p>
                        </div>
                    </div>
                    <div class="review-card__marks">
                        <img src="/images/Star1.png">
                        <p>5</p>
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
                            <li class="relinks__item"><a href="#" class="relinks__link">Аллергология
                                    (от 18 лет)</a></li>
                            <li class="relinks__item"><a href="#" class="relinks__link">Аллергология
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
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/app.js"></script>
</body>
</html>