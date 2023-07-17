<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/css/mobile-styles.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
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

        <div class="doctor-card">
            <div class="doctor-card-view__head">
                <div class="doctor-card__photo-doctor">
                    <img src="/images/card-doc.png">
                    <div class="doctor-card__surname-doctor">
                        Манохина
                    </div>
                    <div class="doctor-card__name-doctor">
                        Дарья Дмитриевна
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
                    <a href="#">8 отзывов</a>
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
                <div class="doctor-card-view__ambulance-house">
                    <img src="/images/ambulance.png">
                    Выезд на дом
                </div>
                <div class="doctor-card-view__doctor-price">
                    Стоимость приема
                    <p>1520₽</p>
                    <span>1900₽</span>
                </div>
                <div class="doctor-card-view__footer">
                    <a class="search__btn">Записаться на приём</a>
                    <span>Обновлено 30.03.22</span>
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
        </div>

        <div class="price-doctor-clinic__container">
            <div class="price-doctor-clinic__title">
                Клиника на Текстильщиках
                <p>г. Москва<br> ул. Люблинская, д. 9 к. 1</p>
                <div class="clinic-card__metro">
                    <div class="clinic-card__metro-near">
                        <img src="/images/Ellipse%2027.png">Текстильщики (338м)
                    </div>
                    <div class="clinic-card__metro-far">
                        <img src="/images/Ellipse%2028.png">Печатники (2,1км)
                        <img src="/images/Ellipse%2029.png">Стахановская (2,2км)
                    </div>
                </div>
                <img src="/images/grey-map.png">
                <a href="#">Посмотреть на карте</a>
            </div>
            <a href="#" class="search__btn"><img src="/images/white-phone.png">(499) 123-45-67</a>
            <div class="price-doctor-clinic__price-card">
                <div class="price-doctor-clinic__body">
                    <ul>
                        <li class="price-doctor__item">Акушер (от 18 лет)
                            <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                        </li>
                        <li class="price-doctor__item">Гинеколог (от 18 лет)
                            <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                        </li>
                        <li class="price-doctor__item">Гинеколог-эндокринолог<br> (от 18 лет)
                            <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                        </li>
                        <li class="price-doctor__item">Маммолог (от 18 лет)
                            <div class="prices"><p>1520₽</p><span>1900₽</span></div>
                        </li>
                    </ul>
                </div>
                <div class="price-doctor-clinic__footer">
                    <img src="/images/grey-alert.png">
                    <a href="#">Условия для посещения</a>
                </div>
            </div>
            <div class="price-doctor-clinic__title">
                Клиника на Текстильщиках
                <p>г. Москва<br> ул. Люблинская, д. 9 к. 1</p>
            </div>
            <div class="price-doctor-clinic__title">
                Клиника на Текстильщиках
                <p>г. Москва<br>ул. Люблинская, д. 9 к. 1</p>
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

        <div class="review-doctor__container">
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
                <div class="review-card__head">
                    <div class="review-card__left">
                        <div class="review-card__name-patient">
                            Имя +79225678902
                        </div>
                        <div class="review-card__date">
                            14.02.2022
                        </div>
                        <div class="review-card__shield">
                            <img src="/images/verifyied.png">
                            Проверено
                        </div>
                    </div>
                    <div class="review-card__right">
                        <div class="review-card__mark">
                            <img src="/images/Star1.png">
                            5
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
                <button data-fold-btn class="services__more more">
                        <span data-open-text="Показать еще" data-close-text="Свернуть"
                              class="more__text">Показать еще</span>
                    <span class="more__arrow icon-arrow-more"></span>
                </button>
            </div>
        </div>

        <div class="doctor-card__container-background">
            <h3 class="doctor-card__title">Популярные акушеры в районе метро "Рязанский проспект"</h3>
            <div class="doctor-card__walking-metro">380м от метро “Рязанский проспект”</div>
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
                                    Манохина Д.Д.
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
                        <div class="doctor-card__geo">
                            <p>ул. Люблинская, д. 9 к. 1</p>
                            <ul>
                                <li class="doctor-card__metro">
                                    <img src="/images/Ellipse%2027.png">
                                    Текстильщики (338м)
                                </li>
                            </ul>
                        </div>
                        <div class="doctor-card__doctor-spec">
                            Гинеколог • акушер врач УЗИ
                        </div>
                        <div class="doctor-card__doctor-experiences">
                            <ul>
                                <li class="doctor-card__category">Врач высшей категории</li>
                                <li class="doctor-card__degree"> Кандидат медицинских наук</li>
                                <li class="doctor-card__experience"> Стаж 12 лет</li>
                            </ul>
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
                                    Манохина Д.Д.
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
                        <div class="doctor-card__geo">
                            <p>ул. Люблинская, д. 9 к. 1</p>
                            <ul>
                                <li class="doctor-card__metro">
                                    <img src="/images/Ellipse%2027.png">
                                    Текстильщики (338м)
                                </li>
                            </ul>
                        </div>
                        <div class="doctor-card__doctor-spec">
                            Гинеколог • акушер врач УЗИ
                        </div>
                        <div class="doctor-card__doctor-experiences">
                            <ul>
                                <li class="doctor-card__category">Врач высшей категории</li>
                                <li class="doctor-card__degree"> Кандидат медицинских наук</li>
                                <li class="doctor-card__experience"> Стаж 12 лет</li>
                            </ul>
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
                                    Манохина Д.Д.
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
                        <div class="doctor-card__geo">
                            <p>ул. Люблинская, д. 9 к. 1</p>
                            <ul>
                                <li class="doctor-card__metro">
                                    <img src="/images/Ellipse%2027.png">
                                    Текстильщики (338м)
                                </li>
                            </ul>
                        </div>
                        <div class="doctor-card__doctor-spec">
                            Гинеколог • акушер врач УЗИ
                        </div>
                        <div class="doctor-card__doctor-experiences">
                            <ul>
                                <li class="doctor-card__category">Врач высшей категории</li>
                                <li class="doctor-card__degree"> Кандидат медицинских наук</li>
                                <li class="doctor-card__experience"> Стаж 12 лет</li>
                            </ul>
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
                        (499)123-45-67
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