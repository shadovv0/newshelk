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
                        <a href="">
                            Клиника на Текстильщиках
                        </a>
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
                    <div class="clinic-card__clinic-schedule">
                        Часы приёма:<br>
                        Пн-Пт 10:00-20:00 Сб-Вс 10:00-18:00
                    </div>
                    <div class="clinic-card__ambulance-house">
                        <img src="/images/ambulance.png">
                        Выезд на дом
                    </div>
                    <div class="clinic-card__metro">
                        <div class="clinic-card__metro-near">
                            Текстильщики (338м)
                        </div>
                        <div class="clinic-card__metro-far">
                            Печатники (2,1км)
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
            <span>Обновлено 30.03.22</span>
            <div class="clinic-additional">
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
                        Запись на приём
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
                    <h4 class="price-clinic__name-service">Урология</h4>
                    <h4 class="price-clinic__name-service">Венерология</h4>
                    <h4 class="price-clinic__name-service">Отоларингология</h4>
                </div>
                <div class="price-clinic__footer">
                    <img src="/images/grey-alert.png">
                    <a href="#">Условия для посещения</a>
                </div>
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
            <a href="#">Москва</a>
            <a href="#">Клиники</a>
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