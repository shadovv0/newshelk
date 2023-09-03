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
        <div class="search">
            <h3 class="search__title">Категория поиска</h3>
            <div class="search__container">
                <div class="search__clinic-doctor">
                    <form name="search__search-form" action="/search/" class="search__search-form" method="GET">
                        <input class="js-search-input" type="text"
                               placeholder="Врачи, клиники, услуги, заболевания, симптомы" name="q" value=""/>
                        <img src="/images/search-btn.png">
                    </form>
                </div>
                <div class="search__city-metro">
                    <select name="doctor" id="doctor-select" class="search__city-text">
                        <option value="0">Метро, город МО</option>
                        <option value="0">Метро, город МО</option>
                        <option value="0">Метро, город МО</option>
                        <option value="0">Метро, город МО</option>
                    </select>
                </div>
                <a href="#" class="search__btn">Подобрать</a>
            </div>
        </div>
        <div class="actions__container">
            <div class="actions__items">
                <div class="actions__top">
                    <div class="actions__doctors">
                        <div class="actions__doctors-text">
                            <h5>Прием врача в клинике</h5>
                            <p>Врачи с проверенными отзывами в любом районе города и быстрая запись
                                на нужное время</p>
                            <a href="#" class="search__btn">Выбрать врача</a>
                        </div>
                        <div class="actions__doctors-image">
                            <img src="/images/action-doctor.png">
                        </div>
                    </div>
                    <div class="actions__doctors-house">
                        <div class="actions__doctors-image">
                            <img src="/images/action-dochouse.jpg">
                        </div>
                        <div class="actions__doctors-house-text">
                            <h5>Выезд врача на дом</h5>
                            <p>Врачи с проверенными отзывами в любом районе города и быстрый выезд</p>
                            <a href="#" class="search__btn">Вызвать врача</a>
                        </div>
                    </div>
                </div>
                <div class="actions__mid">
                    <div class="actions__services">
                        <div class="actions__services-image">
                            <img src="/images/action-service.png">
                        </div>
                        <div class="actions__services-text">
                            <h5>Медицинские услуги</h5>
                            <p>Медицинские
                                и косметологические услуги
                                в клинике и на дому</p>
                            <a href="#" class="search__btn">Выбрать услугу</a>
                        </div>
                    </div>
                    <div class="actions__symptoms">
                        <div class="actions__symptoms-text">
                            <h5>База данных всех симптомов</h5>
                            <p>Поиск по самой полной базе симптомов</p>
                            <a href="#" class="search__btn">Найти симптом</a>
                        </div>
                        <div class="actions__symptoms-image">
                            <img src="/images/action-symptom.png">
                        </div>
                    </div>
                    <div class="actions__disease">
                        <div class="actions__disease-text">
                            <h5>Справочник заболеваний</h5>
                            <p>Единый список различных заболеваний</p>
                            <a href="#" class="search__btn">Найти заболевание</a>
                        </div>
                        <div class="actions__disease-image">
                            <img src="/images/action-disease.png">
                        </div>
                    </div>
                </div>
                <div class="actions__bot">
                    <div class="actions__all-count">
                        <span>1 000 000</span>
                        <p>специалистов на портале</p>
                        <span>180 000</span>
                        <p>медицинских и косметологических услуг</p>
                        <span>1000</span>
                        <p>проверенных клиник</p>
                        <span>6 400 000</span>
                        <p>отзывов реальных пациентов</p>
                    </div>
                    <div class="actions__brand">
                        <h5>20 лет делаем вид что заботимся о вашем здоровье</h5>
                        <p>Сервис начал свою работу в 2000 году под брендом Sharaga. Мы помогли миллионам людей получить
                            помощь и продолжаем повышать качество медицинских услуг</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="popular-doctor">
            <div class="popular-doctor-main__title">
                <h4>Популярные специалисты</h4>
            </div>
            <div class="popular-doctor__doctors">
                <div class="owl-carousel owl-theme">
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
        </div>
        <div class="other-clinics">
            <div class="other-clinics-main__title">
                <h4>Другие клиники сети</h4>
            </div>
            <div class="other-clinics__clinics">
                <div class="owl-carousel owl-theme">
                    <div class="other-clinics__container">
                        <div class="other-clinics__clinic-card">
                            <div class="other-clinics__head">
                                <div class="other-clinics__photo">
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
                        </div>
                    </div>
                    <div class="other-clinics__container">
                        <div class="other-clinics__clinic-card">
                            <div class="other-clinics__head">
                                <div class="other-clinics__photo">
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
                        </div>
                    </div>
                    <div class="other-clinics__container">
                        <div class="other-clinics__clinic-card">
                            <div class="other-clinics__head">
                                <div class="other-clinics__photo">
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
                        </div>
                    </div>
                    <div class="other-clinics__container">
                        <div class="other-clinics__clinic-card">
                            <div class="other-clinics__head">
                                <div class="other-clinics__photo">
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
                        </div>
                    </div>
                    <div class="other-clinics__container">
                        <div class="other-clinics__clinic-card">
                            <div class="other-clinics__head">
                                <div class="other-clinics__photo">
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
                        </div>
                    </div>
                    <div class="other-clinics__container">
                        <div class="other-clinics__clinic-card">
                            <div class="other-clinics__head">
                                <div class="other-clinics__photo">
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
                        </div>
                    </div>
                </div>
            </div>
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
</body>
</html>