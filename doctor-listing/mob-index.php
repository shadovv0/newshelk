<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/css/mobile-styles.css"/>
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
            <a class="menu-btn" href="#">
                <img src="/images/burger.png">
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
                        <button class="search-btn"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="wrap">
        <div class="sort__container">
            <h5>Гинекологи (378)</h5>
            <div class="sort__body">
                <span>Обновлено 30.03.22</span>
                <div class="sort__head">
                    <div data-fold class="sort__items">
                        <button data-fold-btn class="faq__btn">
                            <div class="sort__filter">Сортировать</div>
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
                        <span>Выберите клинику сети:</span>
                        <div class="doctor-card__record-clinic">
                            <select name="clinic" id="clinic-select" class="doctor-card__record-clinic-text">
                                <option class="choose-clinic" value="0">Клиника в Текстильщиках</option>
                                <option class="choose-clinic" value="0">Клиника в Марьино</option>
                                <option class="choose-clinic" value="0">Клиника на Проспекте Вернадского</option>
                                <option class="choose-clinic" value="0">Клиника в Беляево</option>
                            </select>
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
                            <div class="doctor-card__clinic-phone">
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
                            <a class="record-btn">
                                Записаться на приём
                            </a>
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
                                <li class="doctor-card__doctor-experience"> Стаж 12 лет</li>
                            </ul>
                        </div>
                    </div>
                    <div class="doctor-card__body-footer">
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
                            <div class="doctor-card__clinic-phone">
                                <img src="/images/phone_24px.png">
                                <a href="#">(499) 123-45-67</a>
                            </div>
                        </div>
                        <div class="doctor-card__time-slot">
                            <a class="record-btn">
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
                <h5>Самые популярные вопросы</h5>
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
            <h5>Отзывы</h5>
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


        <div class="relinks">
            <div class="relinks__body">
                <div data-fold class="relinks__column">
                    <b class="relinks__column-title">Врачи по районам:</b>
                    <ul class="relinks__list relinks__list--mobile-row">
                        <li class="relinks__item"><a href="#" class="relinks__link">Арбат</a></li>
                        <li class="relinks__item"><a href="#" class="relinks__link">Басманный</a></li>
                        <li class="relinks__item"><a href="#" class="relinks__link">Замоскворечье</a></li>
                        <li class="relinks__item"><a href="#" class="relinks__link">Красносельский</a></li>
                        <li class="relinks__item"><a href="#" class="relinks__link">Мещанский</a></li>
                        <li data-fold-content class="relinks__item relinks__item--folded"><a href="#"
                                                                                             class="relinks__link">Пресненский</a>
                        </li>
                        <li data-fold-content class="relinks__item relinks__item--folded"><a href="#"
                                                                                             class="relinks__link">Таганский</a>
                        </li>
                        <li data-fold-content class="relinks__item relinks__item--folded"><a href="#"
                                                                                             class="relinks__link">Таганский</a>
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
                        <li class="relinks__item"><a href="#" class="relinks__link">Авиамоторная</a></li>
                        <li class="relinks__item"><a href="#" class="relinks__link">Автозаводская</a></li>
                        <li class="relinks__item"><a href="#" class="relinks__link">Академическая</a></li>
                        <li class="relinks__item"><a href="#" class="relinks__link">Александровский сад</a></li>

                        <li data-fold-content class="relinks__item relinks__item--folded"><a href="#"
                                                                                             class="relinks__link">Алексеевская</a>
                        </li>
                        <li data-fold-content class="relinks__item relinks__item--folded"><a href="#"
                                                                                             class="relinks__link">Алексеевская</a>
                        </li>
                        <li data-fold-content class="relinks__item relinks__item--folded"><a href="#"
                                                                                             class="relinks__link">Арбат</a>
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
                        <li data-fold-content class="relinks__item relinks__item--folded">
                            <a href="" class="relinks__link">
                                <img src="/images/euromed.png">
                                «Евромед»
                            </a>
                        </li>
                        <li data-fold-content class="relinks__item relinks__item--folded">
                            <a href="" class="relinks__link">
                                <img src="/images/open-clinic.png">
                                «Открытая клиника»
                            </a>
                        </li>
                        <li data-fold-content class="relinks__item relinks__item--folded">
                            <a href="" class="relinks__link">
                                <img src="/images/moscow-clinic.png">
                                «Московская клиника»
                            </a>
                        </li>
                        <li data-fold-content class="relinks__item relinks__item--folded">
                            <a href="" class="relinks__link">
                                <img src="/images/sinay.png">
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
</body>
</html>