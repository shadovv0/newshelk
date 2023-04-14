<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <link rel="stylesheet" type="text/css" href="/css/doctor/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
<header>
    <div class="header">
        <div class="wrap clear">
            <div class="logo">
                ЛОГО/Название сайта
            </div>
            <div class="header__phone">
                (499) 123-34-56
            </div>
        </div>
        <div class="top-menu">
            <div class="top-menu__wrap">
                <nav class="top-menu-btn">
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="" class="root-item">Клиники</a>
                        </li>
                        <li class="menu-item_active">
                            <a href="" class="root-item_active">Врачи</a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="root-item">Услуги</a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="root-item">Диагностика</a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="root-item">Заболевания</a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="root-item">Симптомы</a>
                        </li>
                    </ul>
                </nav>
                <div class="search-form">
                    <form name="search-form" action="/search/" method="GET">
                        <input class="js-search-input" type="text" placeholder="Поиск" name="q" value=""/>
                        <button class="search-btn" href="#"></button>
                    </form>
                </div>
            </div>
        </div>
</header>
<div class="content">
    <div class="wrap clear">
        <div class="items">
            <div class="sort">
                <a href="" class="sorting">Популярность ↑ ↓</a>
                <a href="" class="sorting">Рейтинг ↑ ↓</a>
                <a href="" class="sorting">Количество отзывов ↑ ↓</a>
            </div>
        </div>
        <div class="doctor-card">
            <div class="doctor-info-left">
                <div class="photo-doctor">
                    <img src="../img/doctor.png">
                </div>
            </div>
            <div class="doctor-info-center">
                <div class="doctor-name">
                    <p>Сергеева Анастасия Андреевна</p>
                </div>
                <div class="doctor-category">
                    <p>Врач высшей категории.<br>
                        Кандидат медицинских наук.</p>
                </div>
                <div class="doctor-spec">
                    <p>Акушер, гинеколог, гинеколог-эндокринолог</p>
                </div>
                <div class="doctor-experience">
                    <p>Стаж - 15 лет.</p>
                </div>
                <div class="doctor-clinics_active">
                    <div class="doctor_clinic-name">
                        <span>Клиника на Текстильщиках</span>
                    </div>
                    <div class="doctor_clinic-items">
                        <div class="clinic-schedule">
                            <p>Часы приёма:<br>
                                Пн-Пт 10:00-20:00 Сб-Вс 10:00-18:00
                            </p>
                        </div>
                        <div class="clinic-metro">
                            <div class="clinic-metro-near">Текстильщики (338м)</div>
                            <div class="clinic-metro-further">
                                Печатники (2,1км) Стахановская (2,2км)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="doctor-clinics">
                    <span>Клиника на Петровско-Разумовской</span>
                    <span>˅</span>
                </div>
            </div>
            <div class="clinic-info-right">
                <div class="doctor-date">
                    <span><</span>
                    <span>Понедельник 21.03</span>
                    <span>></span>
                </div>
                <div class="clinic-active">
                    <img>
                    <span>Клиника на Текстильщиках</span>
                    <span>˅</span>
                </div>
                <div class="clinic-free-time-container">
                    <div class="free-time">13:00</div>
                    <div class="free-time">13:00</div>
                    <div class="free-time">13:00</div>
                    <div class="free-time">13:00</div>
                    <div class="free-time">13:00</div>
                    <div class="free-time">˅</div>
                </div>
                <div class="clinic-phone">
                    <img src="../img/phone.png" style="max-width: 100px">
                    (499)123-45-67
                </div>
            </div>
        </div>
        <div class="doctor-card">
            <div class="doctor-info-left">
                <div class="photo-doctor">
                    <img src="../img/doctor.png">
                </div>
                <div class="doctor-reviews">
                    <img src="../img/star.png">
                    <a class="percent-review">4,7</a>
                </div>
                <div class="reviews-count">
                    14 отзывов
                </div>
            </div>
            <div class="doctor-info-center">
                <div class="doctor-name">
                    <p>Сергеева Анастасия Андреевна</p>
                </div>
                <div class="doctor-category">
                    <p>Врач высшей категории.<br>
                        Кандидат медицинских наук.</p>
                </div>
                <div class="doctor-spec">
                    <p>Акушер, гинеколог, гинеколог-эндокринолог</p>
                </div>
                <div class="doctor-experience">
                    <p>Стаж - 15 лет.</p>
                </div>
                <div class="doctor-clinics">
                    <span>Клиника на Текстильщиках</span>
                    <span>˅</span>
                </div>
                <div class="doctor-clinics">
                    <span>Клиника на Петровско-Разумовской</span>
                    <span>˅</span>
                </div>
            </div>
            <div class="clinic-info-right">
                <div class="doctor-date">
                </div>
                <div class="clinic-active">
                    <img>
                    <span>Клиника на Текстильщиках</span>
                    <span>˅</span>
                </div>
                <div class="doctor-registration">
                    <div class="btn_records">
                        <a class="button-record">Запись на приём</a>
                    </div>
                </div>
                <div class="clinic-phone">
                    <img src="../img/phone.png" style="max-width: 100px">
                    (499)123-45-67
                </div>
            </div>
        </div>
        <div class="listing_bottom">
            <ul class="pagination_listing">
                <li class="pagination_item"><a class="pagination_link-back"><</a></li>
                <li class="pagination_item"><a class="pagination_link-active">1</a></li>
                <li class="pagination_item"><a class="pagination_link">2</a></li>
                <li class="pagination_item"><a class="pagination_link">3</a></li>
                <li class="pagination_item"><a class="pagination_link">...</a></li>
                <li class="pagination_item"><a class="pagination_link">32</a></li>
                <li class="pagination_item"><a class="pagination_link-back">></a></li>
            </ul>
        </div>
        <div class="clinic-services">
            <h1 class="clinic-service-text">Услуги клиники</h1>
            <div class="clinic-service-items">
                <div class="first">
                    <div class="service-name">
                        <a>Гинекология</a>
                    </div>
                    <div class="service-name">
                        <a>Урология</a>
                    </div>
                    <div class="service-name">
                        <a>Венерология</a>
                    </div>
                    <div class="service-name">
                        <a>Дерматология</a>
                    </div>
                    <div class="service-name">
                        <a>Эндокринология</a>
                    </div>
                    <div class="service-name">
                        <a>Терапия</a>
                    </div>
                    <div class="service-name">
                        <a>Маммология</a>
                    </div>
                </div>
                <div class="second">
                    <div class="service-name">
                        <a>Гинекология</a>
                    </div>
                    <div class="service-name">
                        <a>Урология</a>
                    </div>
                    <div class="service-name">
                        <a>Венерология</a>
                    </div>
                    <div class="service-name">
                        <a>Дерматология</a>
                    </div>
                    <div class="service-name">
                        <a>Эндокринология</a>
                    </div>
                    <div class="service-name">
                        <a>Терапия</a>
                    </div>
                    <div class="service-name">
                        <a>Маммология</a>
                    </div>
                </div>
                <div class="third">
                    <div class="service-name">
                        <a>Гинекология</a>
                    </div>
                    <div class="service-name">
                        <a>Урология</a>
                    </div>
                    <div class="service-name">
                        <a>Венерология</a>
                    </div>
                    <div class="service-name">
                        <a>Дерматология</a>
                    </div>
                    <div class="service-name">
                        <a>Эндокринология</a>
                    </div>
                    <div class="service-name">
                        <a>Терапия</a>
                    </div>
                    <div class="service-name">
                        <a>Маммология</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clinic-under-services">
            <div class="clinic-phone-visit">
                <div class="under-services-phone">
                    (499)123-45-67
                </div>
                <div class="condition-visit">
                    Условия для посещения
                </div>
            </div>
            <div class="btn_records under-service-record">
                <span class="button-record">Запись на приём</span>
            </div>
        </div>
    </div>
    <div class="last-review-clinic">
        <div class="last-review-clinic_wrap">
            <div class="">
                <h1 class="clinic-service-text">Последние отзывы на врачей</h1>
            </div>
            <div class="review__clinics">
                <div class="last-review-clinic__card-clinic">
                    <div class="clinic-card-container">
                        <div class="clinic-card-main">
                            <div class="last-review-clinic__card-clinic__photo">
                                <img src="../img/doctor.png">
                            </div>
                            <div class="last-review-clinic-count">
                                <span class="counts-reviews">8 отзывов</span>
                                <img src="../img/star.png">
                                <span>4,9</span>
                                <div class="review-clinic-name">
                                    Сергеева
                                </div>
                                <div class="review-clinic-address">
                                    Анастасия Андреевна
                                </div>
                                <div class="review-doctor-spec">
                                    Гинеколог
                                </div>
                            </div>
                        </div>
                        <div class="author-review-info">
                            <div class="author-review">Мария +79213746292</div>
                            <div class="comment-head">Комментарий</div>
                            <div class="comment">Очень понравился доктор. Ответила на все вопросы.Была внимательна.
                                Назанчила анализы...
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-review-clinic__card-clinic">
                    <div class="clinic-card-container">
                        <div class="clinic-card-main">
                            <div class="last-review-clinic__card-clinic__photo">
                                <img src="../img/doctor.png">
                            </div>
                            <div class="last-review-clinic-count">
                                <span class="counts-reviews">8 отзывов</span>
                                <img src="../img/star.png">
                                <span>4,9</span>
                                <div class="review-clinic-name">
                                    Сергеева
                                </div>
                                <div class="review-clinic-address">
                                    Анастасия Андреевна
                                </div>
                                <div class="review-doctor-spec">
                                    Гинеколог
                                </div>
                            </div>
                        </div>
                        <div class="author-review-info">
                            <div class="author-review">Мария +79213746292</div>
                            <div class="comment-head">Комментарий</div>
                            <div class="comment">Очень понравился доктор. Ответила на все вопросы.Была внимательна.
                                Назанчила анализы...
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-review-clinic__card-clinic">
                    <div class="clinic-card-container">
                        <div class="clinic-card-main">
                            <div class="last-review-clinic__card-clinic__photo">
                                <img src="../img/doctor.png">
                            </div>
                            <div class="last-review-clinic-count">
                                <span class="counts-reviews">8 отзывов</span>
                                <img src="../img/star.png">
                                <span>4,9</span>
                                <div class="review-clinic-name">
                                    Сергеева
                                </div>
                                <div class="review-clinic-address">
                                    Анастасия Андреевна
                                </div>
                                <div class="review-doctor-spec">
                                    Гинеколог
                                </div>
                            </div>
                        </div>
                        <div class="author-review-info">
                            <div class="author-review">Мария +79213746292</div>
                            <div class="comment-head">Комментарий</div>
                            <div class="comment">Очень понравился доктор. Ответила на все вопросы.Была внимательна.
                                Назанчила анализы...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap clear">
        <h1 class="info-docspec">Информация о врачебной специальности</h1>
        <div class="text-block">
            <p>Чем занимается?</p>
            <p>Самый первый человек, которого мы видим в своей жизни – акушер-гинеколог. В простонародье этого врача
                называют «женский доктор». Именно этот врач несёт ответственность за здоровье будущей мамы и ещё не
                рождённого ребёнка, находясь рядом всю беременность. Он принимает роды и наблюдает за женщиной после
                них. Гинеколог занимается диагностикой и лечением воспалительных процессов женских половых органов,
                даёт
                советы при выборе контрацептивов и помогает при проблемах с зачатием. Врач проводит профилактические
                осмотры женщин для раннего выявления гинекологических заболеваний, так как большая их часть
                протекает
                длительное время бессимптомно.
            </p>
            <p>Когда нужно посетить?</p>
            <p>Обращаться к доктору следует в таких случаях:</p>
            <li>при наступлении беременности, чтобы гинеколог мог контролировать её течение для предупреждения и
                своевременного выявления возможных осложнений
            </li>
            <li>подозрение на беременность – для подтверждения диагноза;</li>
            <li>если женщина планирует стать мамой - для подготовки к этому ответственному событию;</li>
            <li>при нарушениях менструального цикла и изменении характера месячных – когда они становятся
                длительными,
            <li> обильными или, наоборот, скудными;</li>
            <li> при полном прекращении месячных;</li>
            <li>появление болей в нижней части живота
            <li>наличие белей, сопровождающихся неприятным запахом;</li>
            <li>когда беспокоит болезненность при половом акте;</li>
            <li>в случае бесплодия;</li>
            <li> появление новообразований на наружных половых органах.</li>
            <p> Даже если женщину ничего не тревожит, посещать гинеколога нужно минимум 1 раз в год для профилактики
                и
                ранней диагностики скрытых болезней.
            </p>
            <p>
                Как стать гинекологом?</p>
            <p>«Чтобы стать гинекологом, нужно в первую очередь получить высшее медицинское образование на лечебном
                факультете медицинского вуза. Их в городе на Неве несколько, но самый известный, славящийся сильной
                школой – Санкт – Петербургский медицинский университет им. академика И.П. Павлова. С 5-го курса
                студенты
                приступают к освоению специальности гинекологии. После окончания университета образование по
                специальности продолжается в течение года в интернатуре. Но даже приступив к самостоятельной
                практике,
                нужно быть готовым к постоянному, в течение всей жизни, повышению квалификации и совершенствованию
                мастерства.»
                (Фёдоров Михаил Сергеевич, Заведующий кафедрой медицинского университета им. академика И.П. Павлова)
            </p>
            <p>
                Корифеи Санкт-Петербургской гинекологии</p>
            <p> Уровень медицины на Руси в средние века был достаточно низок - роды у женщин принимали «повивальные
                бабки», не отличавшиеся глубокими знаниями, а единственным средством помощи при патологических родах
                были «заговоры». Только в 1754 г. был принят «Закон об упорядочении деятельности бабок-повитух» и в
                Санкт-Петербурге открыта первая повивальная школа, организатором которой был П.З. Кондоиди.</p>
            <p>Отцом русского акушерства считается знаменитый врач Н.М. Амбодик, написавший в 1808 г. первое в
                России
                руководство «Искусство повивания». Вместе с ним в Санкт-Петербургской клинике врачей-гинекологов
                работали С.А. Громов, Н.Н. Феноменов. Известными докторами были А.Я. Крассовский, основатель
                Петербургского общества акушеров, и Д.О. Отт, чьё имя теперь носит современный институт.</p>
            <p>В 20 веке большой вклад в развитие оперативной гинекологии сделали К.К. Скробанский и Л.Л. Окинчиц,
                знаменитыми врачами - гинекологами были К.Н. Рабинович, М.А. Петров-Маслаков.
            </p>
        </div>
        <div class="attention-for-patient">
            <div class="attention-container">
                <div class="alert-for-view">
                    <img src="../img/alerting.png">
                    <span>Обратите внимание!</span>
                </div>
                <div class="alert-info">
                    <span>Информация на странице прелставоена для ознакомления. Для назначения лечения обратитесь к врачу.</span>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div>
                <a class="breadcrumbs-item">Главная </a> >
                <a class="breadcrumbs-item">Москва </a> >
                <a class="breadcrumbs-item">Клиники </a>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="footer">
        <div class="footer-main">
            <div class="name-clinics-footer">
                <h3>Клиника</h3>
            </div>
            <div class="clinic-about">
                <div class="first-block">
                    <div class="about-clinic">
                        <h4 class="head-block">О нас</h4>
                        <ul class="linked-footer">
                            <li><a class="linked-name">О проекте</a></li>
                            <li><a class="linked-name">Информация для<br>пациентов</a></li>
                            <li><a class="linked-name">Отзывы</a></li>
                            <li><a class="linked-name">Контакты</a></li>
                            <li><a class="linked-name">Авторы</a></li>
                        </ul>
                    </div>
                </div>
                <div class="second-block">
                    <div class="for-patient">
                        <h4 class="head-block">Пациентам</h4>
                        <ul class="linked-footer">
                            <li><a class="linked-name">Клиники</a></li>
                            <li><a class="linked-name">Врачи</a></li>
                            <li><a class="linked-name">Услуги</a></li>
                            <li><a class="linked-name">Диагностика</a></li>
                            <li><a class="linked-name">Заболевания</a></li>
                            <li><a class="linked-name">Симптомы</a></li>
                        </ul>
                    </div>
                </div>
                <div class="third-block">
                    <div class="reference">
                        <h4 class="head-block">Справка</h4>
                        <ul class="linked-footer">
                            <li><a class="linked-name">Помощь</a></li>
                            <li><a class="linked-name">Пациенту</a></li>
                            <li><a class="linked-name">Врачу</a></li>
                            <li><a class="linked-name">Клинике</a></li>
                        </ul>
                    </div>
                </div>
                <div class="fourth-block">
                    <div class="technical-info">
                        <h4 class="head-block">Техническая информация</h4>
                        <ul class="linked-footer">
                            <li><a class="linked-name">Политика конфиденциальности</a></li>
                            <li><a class="linked-name">Пользовательское соглашение</a></li>
                            <li><a class="linked-name">Политика cookies</a></li>
                            <li><a class="linked-name">Согласие на обработку<br>персональных данных</a></li>
                            <li><a class="linked-name">Заболевания</a></li>
                            <li><a class="linked-name">Симптомы</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="under-clinic-about">
                <div class="left-content-footer">
                    <div class="phone-footer">
                        (499)123-45-67
                    </div>
                    <div class="reference-footer">
                        <span>справочная служба</span>
                    </div>
                    <div class="ooo-inn">
                        <span>2022 ⓒ ООО"МосМедПортал"<br>ИНН 7777777</span>
                    </div>
                </div>
                <div class="social-media">
                    <div class="age-img">
                        <a class="">
                            <img src="../img/18-plus.png">
                        </a>
                    </div>
                    <div class="email">
                        <div class="email-footer">
                            <a class="">info@mosmedportal.ru</a>
                        </div>
                        <div class="link-seti">
                            <a class="">
                                <img src="../img/youtube.png">
                            </a>
                            <a class="">
                                <img src="../img/telegram.png">
                            </a>
                            <a class="">
                                <img src="../img/whatsapp.png">
                            </a>
                            <a class="">
                                <img src="../img/vk.png">
                            </a>
                            <a class="">
                                <img src="../img/OK.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="last-in-footer">
                <span>Информация: предоставленная на сайте, не может быть использована для постановки диагноза, назначения лечения и не заменяет врача</span>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
