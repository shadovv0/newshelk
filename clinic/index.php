<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Щелковская/Главная</title>
    <meta name="description" content="Описание страницы"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>
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
        </div>


        <section>
            <div class="container">
                <h2>Специализация и цены</h2>
                <form action="#" class="specialisations">
                    <div data-sticky class="specialisations__body mobile-overflow">
                        <div class="specialisations__item radio">
                            <input checked id="all" type="radio" value="Все специализации" name="specialisations"
                                   class="radio__input"/>
                            <label for="all" class="radio__label">Все специализации</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="andrology" type="radio" value="Андрология" name="specialisations"
                                   class="radio__input"/>
                            <label for="andrology" class="radio__label">Андрология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="arthrology" type="radio" value="Артрология" name="specialisations"
                                   class="radio__input"/>
                            <label for="arthrology" class="radio__label">Артрология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="arrhythmology" type="radio" value="Аритмология" name="specialisations"
                                   class="radio__input"/>
                            <label for="arrhythmology" class="radio__label">Аритмология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="gynecology" type="radio" value="Гинекология" name="specialisations"
                                   class="radio__input"/>
                            <label for="gynecology" class="radio__label">Гинекология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="gynecology-and-Endocrinology" type="radio" value="Гинекология-эндокринология"
                                   name="specialisations" class="radio__input"/>
                            <label for="gynecology-and-Endocrinology"
                                   class="radio__label">Гинекология-эндокринология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="gastroenterology" type="radio" value="Гастроэнтерология" name="specialisations"
                                   class="radio__input"/>
                            <label for="gastroenterology" class="radio__label">Гастроэнтерология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="cardiology" type="radio" value="Кардиология" name="specialisations"
                                   class="radio__input"/>
                            <label for="cardiology" class="radio__label">Кардиология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="kinesiology" type="radio" value="Кинезиология" name="specialisations"
                                   class="radio__input"/>
                            <label for="kinesiology" class="radio__label">Кинезиология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="otoneurology" type="radio" value="Отоневрология" name="specialisations"
                                   class="radio__input"/>
                            <label for="otoneurology" class="radio__label">Отоневрология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="pediatric" type="radio" value="Педиатрия" name="specialisations"
                                   class="radio__input"/>
                            <label for="pediatric" class="radio__label">Педиатрия</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="psychology" type="radio" value="Психология" name="specialisations"
                                   class="radio__input"/>
                            <label for="psychology" class="radio__label">Психология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="plastic-surgery" type="radio" value="Пластическая хирургия"
                                   name="specialisations" class="radio__input"/>
                            <label for="plastic-surgery" class="radio__label">Пластическая хирургия</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="sexology" type="radio" value="Сексология" name="specialisations"
                                   class="radio__input"/>
                            <label for="sexology" class="radio__label">Сексология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="therapy" type="radio" value="Терапия" name="specialisations"
                                   class="radio__input"/>
                            <label for="therapy" class="radio__label">Терапия</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="traumatology" type="radio" value="Травматология" name="specialisations"
                                   class="radio__input"/>
                            <label for="traumatology" class="radio__label">Травматология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="phlebology" type="radio" value="Флебология" name="specialisations"
                                   class="radio__input"/>
                            <label for="phlebology" class="radio__label">Флебология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="surgery" type="radio" value="Хирургия" name="specialisations"
                                   class="radio__input"/>
                            <label for="surgery" class="radio__label">Хирургия</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="epileptiology" type="radio" value="Эпилептология" name="specialisations"
                                   class="radio__input"/>
                            <label for="epileptiology" class="radio__label">Эпилептология</label>
                        </div>
                        <div class="specialisations__item radio">
                            <input id="endocrinology" type="radio" value="Эндокринология" name="specialisations"
                                   class="radio__input"/>
                            <label for="endocrinology" class="radio__label">Эндокринология</label>
                        </div>
                    </div>
                    <div class="specialisations__services services">
                        <div data-fold class="services__block services__block--in-listing">
                            <div class="services__search search">
                                <div class="input">
                                    <div class="input__icon">
                                        <img src="images/icons/loop.svg" alt title/>
                                    </div>
                                    <input class="input__element input__element--icon" type="search" name="search"
                                           placeholder="Поиск по ценам на услуги"/>
                                </div>
                                <button class="search__btn search__btn--desktop btn">Найти</button>
                                <button type="reset" class="search__reset cross"></button>
                                <button class="search__btn search__btn--mobile">
                                    <img loading="lazy" src="images/icons/loop.svg" alt title/>
                                </button>
                            </div>
                            <div data-services-list="2" class="services__list">
                                <li class="services__item">
                                    <a href="#" class="services__link">MAR-тест</a>
                                    <div class="services__price">от 4200 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Анализ секрета простаты</a>
                                    <div class="services__price">от 800 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Введение тампона с лекарственным
                                        препаратом,аппликация лекарственных веществ (без стоимости лекарства)</a>
                                    <div class="services__price">от 1500 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Лечебный массаж простаты</a>
                                    <div class="services__price">от 2290 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Перевязка маточных труб</a>
                                    <div class="services__price">от 6000 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Противозачаточное кольцо</a>
                                    <div class="services__price">от 500 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Лапароскопия миомы матки</a>
                                    <div class="services__price">от 11000 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Биопсия шейки матки</a>
                                    <div class="services__price">от 450 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Лапароскопия диагностическая</a>
                                    <div class="services__price">от 9000 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Конизация шейки матки</a>
                                    <div class="services__price">от 1100 ₽</div>
                                </li>

                                <li class="services__item">
                                    <a href="#" class="services__link">Ведение беременности</a>
                                    <div class="services__price">от 1600 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Видеокольпоскопия</a>
                                    <div class="services__price">от 1700 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Вскрытие абсцесса бартолиновой железы</a>
                                    <div class="services__price">от 1000 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Мазок на флору</a>
                                    <div class="services__price">от 100 ₽</div>
                                </li>
                                <li class="services__item">
                                    <a href="#" class="services__link">Удаление полипа матки</a>
                                    <div class="services__price">от 1050 ₽</div>
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
        </section>

        <section id="doctors" class="listing">
            <div class="container">
                <div class="listing__header listing__header--clinic">
                    <h2>Врачи<span class="listing__count">68</span></h2>
                </div>
                <div class="listing__filters-panel filters-panel">
                    <div data-filters class="filters-panel__wrapper">
                        <button data-filters-btn class="filters-panel__btn">
                            <span class="filters-panel__btn-settings icon-settings"></span>
                            Фильтры
                            <span class="filters-panel__btn-arrow icon-arrow-more"></span>
                        </button>
                        <form data-filters-body action="#" class="filters filters--full">
                            <div class="filters__header">
                                <b class="filters__title">Фильтры</b>
                                <div class="filters__close cross cross--background"></div>
                            </div>
                            <div class="filters__top">
                                <div class="filters__body">
                                    <div class="filters__column">
                                        <div class="filters__block">
                                            <b class="filters__block-caption">Рейтинг</b>
                                            <div class="filters__block-body">
                                                <div class="radio">
                                                    <input checked id="something" type="radio" value="Любой рейтинг"
                                                           name="rating" class="radio__input"/>
                                                    <label for="something" class="radio__label">Любой</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="5" type="radio" value="Рейтинг от 5" name="rating"
                                                           class="radio__input"/>
                                                    <label for="5" class="radio__label">5</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="4+" type="radio" value="Рейтинг от 4" name="rating"
                                                           class="radio__input"/>
                                                    <label for="4+" class="radio__label">4+</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="3+" type="radio" value="Рейтинг от 3" name="rating"
                                                           class="radio__input"/>
                                                    <label for="3+" class="radio__label">3+</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="2+" type="radio" value="Рейтинг от 2" name="rating"
                                                           class="radio__input"/>
                                                    <label for="2+" class="radio__label">2+</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filters__block filters__block--row">
                                            <b class="filters__block-caption">Большой стаж (10+ лет)</b>
                                            <label class="toggler">
                                                <input type="checkbox" name="internship" value="Больше 10 лет"
                                                       class="toggler__input"/>
                                                <span class="toggler__switcher"></span>
                                            </label>
                                        </div>
                                        <div class="filters__block filters__block--row">
                                            <b class="filters__block-caption">Врач высшей категории</b>
                                            <label class="toggler">
                                                <input type="checkbox" name="category" value="Высшая категория"
                                                       class="toggler__input"/>
                                                <span class="toggler__switcher"></span>
                                            </label>
                                        </div>
                                        <div class="filters__block filters__block--row">
                                            <b class="filters__block-caption">Ученая степень</b>
                                            <label class="toggler">
                                                <input type="checkbox" name="scientist" value="Ученая степень"
                                                       class="toggler__input"/>
                                                <span class="toggler__switcher"></span>
                                            </label>
                                        </div>
                                        <div class="filters__block filters__block--row">
                                            <b class="filters__block-caption">Онлайн-консультация</b>
                                            <label class="toggler">
                                                <input type="checkbox" name="online" value="Онлайн"
                                                       class="toggler__input"/>
                                                <span class="toggler__switcher"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="filters__column">
                                        <div class="filters__block">
                                            <b class="filters__block-caption">Стоимость приема</b>
                                            <div class="range-costs">
                                                <div class="range-costs__input input">
                                                    <input type="number" name="min"/>
                                                </div>
                                                <div class="range-costs__separate">—</div>
                                                <div class="range-costs__input range-costs__input--max input">
                                                    <input type="number" name="max"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filters__block filters__block--row">
                                            <b class="filters__block-caption">Скидка</b>
                                            <label class="toggler">
                                                <input type="checkbox" name="discount" value="Скидка"
                                                       class="toggler__input"/>
                                                <span class="toggler__switcher"></span>
                                            </label>
                                        </div>
                                        <div class="filters__block">
                                            <b class="filters__block-caption">Дата приема</b>
                                            <div class="input">
                                                <div class="input__icon">
                                                    <img src="images/icons/calendar.svg" alt="calendar"
                                                         title="calendar"/>
                                                </div>
                                                <input
                                                        data-calendar="empty"
                                                        class="input__element input__element--calendar input__element--icon _req"
                                                        placeholder="Выберите дату"
                                                        type="text"
                                                        readonly
                                                        name="date-birthday"
                                                        id="date-birthday"
                                                />
                                            </div>
                                        </div>
                                        <div class="filters__block">
                                            <b class="filters__block-caption">Метро</b>
                                            <div data-dropdown class="dropdown">
                                                <div data-dropdown-btn class="dropdown__btn">
                                            <span data-dropdown-content class="dropdown__btn-content">
                                                <span class="metro">
                                                    <div class="metro__color metro__color--tagansk"></div>
                                                    Текстильщики
                                                </span>
                                            </span>
                                                    <span class="dropdown__arrow icon-arrow-more"></span>
                                                </div>
                                                <ul data-dropdown-list class="dropdown__list">
                                                    <li data-value="м. Новослободская" class="dropdown__item">
                                                <span data-dropdown-item-content>
                                                    <span class="metro">
                                                        <div class="metro__color metro__color--zamoskvoretskaya"></div>
                                                        Новослободская
                                                    </span>
                                                </span>
                                                    </li>
                                                    <li data-value="м. Текстильщики" class="dropdown__item">
                                                <span data-dropdown-item-content>
                                                    <span class="metro">
                                                        <div class="metro__color metro__color--tagansk"></div>
                                                        Текстильщики
                                                    </span>
                                                </span>
                                                    </li>
                                                </ul>
                                                <input data-dropdown-input name="metro" type="text"
                                                       value="м. Текстильщики" class="dropdown__input"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filters__bottom">
                                <button type="reset" class="filters__reset">
                                    <span class="cross"></span>
                                    Сбросить
                                </button>
                                <div class="filters__btns">
                                    <button class="filters__btn filters__btn--cancel btn btn--border">Отмена</button>
                                    <button type="submit" class="filters__btn filters__btn--accept btn">Применить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div data-dropdown class="sorting">
                        <div class="sorting__caption">Сортировать:</div>
                        <div class="sorting__dropdown">
                            <span data-dropdown-btn data-dropdown-content>По популярности</span>
                            <span class="sorting__direction">
                        <img loading="lazy" src="images/icons/sort-top-bottom.svg" alt title/>
                    </span>
                        </div>
                        <ul data-dropdown-list class="sorting__list">
                            <li class="sorting__item selected">
                                <span data-dropdown-item-content>По популярности</span>
                                <span class="sorting__check">
                            <img loading="lazy" src="images/icons/check.svg" alt title/>
                        </span>
                                <span class="sorting__direction">
                            <img loading="lazy" src="images/icons/sort-top-bottom.svg" alt title/>
                        </span>
                            </li>
                            <li class="sorting__item">
                                <span data-dropdown-item-content>По рейтингу</span>
                                <span class="sorting__check">
                            <img loading="lazy" src="images/icons/check.svg" alt title/>
                        </span>
                                <span class="sorting__direction">
                            <img loading="lazy" src="images/icons/sort-top-bottom.svg" alt title/>
                        </span>
                            </li>
                            <li class="sorting__item">
                                <span data-dropdown-item-content>По отзывам</span>
                                <span class="sorting__check">
                            <img loading="lazy" src="images/icons/check.svg" alt title/>
                        </span>
                                <span class="sorting__direction">
                            <img loading="lazy" src="images/icons/sort-top-bottom.svg" alt title/>
                        </span>
                            </li>
                            <li class="sorting__item">
                                <span data-dropdown-item-content>По цене приема</span>
                                <span class="sorting__check">
                            <img loading="lazy" src="images/icons/check.svg" alt title/>
                        </span>
                                <span class="sorting__direction">
                            <img loading="lazy" src="images/icons/sort-top-bottom.svg" alt title/>
                        </span>
                            </li>
                        </ul>
                    </div>
                    <div class="filters-panel__selected is-filled selected-filters swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="selected-filters__item">
                                    Гинекологи
                                    <span class="cross"></span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="selected-filters__item">
                                    Рейтинг от 4
                                    <span class="cross"></span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="selected-filters__item">
                                    Врач высшей категории
                                    <span class="cross"></span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="selected-filters__item">
                                    до 2000 ₽
                                    <span class="cross"></span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="selected-filters__item">
                                    м. Текстильщики
                                    <span class="cross"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listing__body">
                    <div class="doctor-card listing__item">
                        <form action="#" data-appointment class="doctor-card__body">
                            <div class="doctor-card__info">
                                <div data-appointment="img" class="doctor-card__icon">
                                    <img loading="lazy" src="images/doctors/1.jpg" alt title/>
                                </div>
                                <ul class="doctor-card__specialties">
                                    <li class="doctor-card__speciality">Гинеколог</li>
                                    <li class="doctor-card__speciality">Акушер врач УЗИ</li>
                                    <li class="doctor-card__speciality">Акушер врач УЗИ</li>
                                </ul>
                                <p data-appointment="name" class="doctor-card__name">Манохина Дарья Дмитриевна</p>
                                <div class="doctor-card__estimates">
                                    <div data-rating="4.8" class="doctor-card__rating rating">
                                        <div class="rating__body">
                                            <img loading="lazy" src="images/icons/stars-empty.svg" alt title/>
                                            <div class="rating__active"></div>
                                        </div>
                                        <b class="rating__value"> 4.8 </b>
                                    </div>
                                    <p class="doctor-card__recommend">92% пациентов рекомендуют врача</p>
                                    <a href="#" class="doctor-card__reviews link-reviews">
                                        <img loading="lazy" src="images/icons/messages-blue.svg" alt title/>
                                        <b>68 отзывов</b>
                                    </a>
                                </div>
                                <ul class="doctor-card__features features">
                                    <li class="feature">
                                        <div class="feature__icon">
                                            <img loading="lazy" src="images/icons/features/clock.svg" alt title/>
                                        </div>
                                        <div class="feature__text">Стаж 23 года</div>
                                    </li>
                                    <li class="feature feature--orange">
                                        <div class="feature__icon">
                                            <img loading="lazy" src="images/icons/features/star.svg" alt title/>
                                        </div>
                                        <div class="feature__text">Врач высшей категории</div>
                                    </li>
                                    <li class="feature feature--green">
                                        <div class="feature__icon"><img loading="lazy"
                                                                        src="images/icons/features/hat.svg" alt title/>
                                        </div>
                                        <div class="feature__text">Кандидат медицинских наук</div>
                                    </li>
                                </ul>
                                <div data-radios class="doctor-card__radios">
                                    <div class="doctor-card__radio radio radio-appointment">
                                        <label class="radio-appointment__label radio__label">
                                            <input type="radio" value="В клинике" name="place-appointment"
                                                   class="radio__input"/>
                                            <div class="radio-appointment__type">
                                                <span class="radio-appointment__icon icon-hospital"></span>
                                                В клинике
                                            </div>
                                            <div class="radio-appointment__prices"><b class="radio-appointment__price">
                                                    1520 ₽</b><b
                                                        class="radio-appointment__old-price">1900 ₽</b></div>
                                        </label>
                                    </div>
                                    <div class="doctor-card__radio radio radio-appointment">
                                        <label class="radio-appointment__label radio__label">
                                            <input type="radio" value="Онлайн" name="place-appointment"
                                                   class="radio__input"/>
                                            <div class="radio-appointment__type">
                                                <span class="radio-appointment__icon icon-media"></span>
                                                Онлайн
                                            </div>
                                            <div class="radio-appointment__prices">
                                                <b class="radio-appointment__price"> 990 ₽</b>
                                                <b class="radio-appointment__old-price">1200 ₽</b>
                                            </div>
                                        </label>
                                    </div>
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
                                    <b class="schedule__date"> Пятница, 14 октября: </b>
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
                                                                                class="radio__input"/> 11:00 </label>
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
                                        <div class="schedule__item radio">
                                            <label class="radio__label">
                                                <input type="radio" value="15:00" name="time-appointment"
                                                       class="radio__input"/>
                                                15:00
                                            </label>
                                        </div>
                                        <div class="schedule__item radio">
                                            <label class="radio__label">
                                                <input type="radio" value="15:30" name="time-appointment"
                                                       class="radio__input"/>
                                                15:30
                                            </label>
                                        </div>
                                        <div class="schedule__item radio">
                                            <label class="radio__label">
                                                <input type="radio" value="16:00" name="time-appointment"
                                                       class="radio__input"/>
                                                16:00
                                            </label>
                                        </div>
                                        <div class="schedule__item radio">
                                            <label class="radio__label"> <input type="radio" value=17:00"
                                                                                name="time-appointment"
                                                                                class="radio__input"/> 17:00 </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-appointment="btn" class="is-hidden"></button>
                        </form>
                    </div>
                    <div class="doctor-card listing__item">
                        <form action="#" data-appointment class="doctor-card__body">
                            <div class="doctor-card__info">
                                <div data-appointment="img" class="doctor-card__icon">
                                    <img loading="lazy" src="images/doctors/5.jpg" alt title/>
                                </div>
                                <ul class="doctor-card__specialties">
                                    <li class="doctor-card__speciality">Гинеколог</li>
                                </ul>
                                <p data-appointment="name" class="doctor-card__name">Сазонова Юлия Михайловна</p>
                                <div class="doctor-card__estimates">
                                    <div data-rating="4.8" class="doctor-card__rating rating">
                                        <div class="rating__body">
                                            <img loading="lazy" src="images/icons/stars-empty.svg" alt title/>
                                            <div class="rating__active"></div>
                                        </div>
                                        <b class="rating__value"> 4.8 </b>
                                    </div>
                                    <p class="doctor-card__recommend">74% пациентов рекомендуют врача</p>
                                    <a href="#" class="doctor-card__reviews link-reviews">
                                        <img loading="lazy" src="images/icons/messages-blue.svg" alt title/>
                                        <b>29 отзывов</b>
                                    </a>

                                </div>
                                <ul class="doctor-card__features features">
                                    <li class="feature">
                                        <div class="feature__icon">
                                            <img loading="lazy" src="images/icons/features/clock.svg" alt title/>
                                        </div>
                                        <div class="feature__text">Стаж 19 лет</div>
                                    </li>
                                </ul>
                                <div data-radios class="doctor-card__radios">
                                    <div class="doctor-card__radio radio radio-appointment">
                                        <label class="radio-appointment__label radio__label">
                                            <input type="radio" value="В клинике" name="place-appointment"
                                                   class="radio__input"/>
                                            <div class="radio-appointment__type">
                                                <span class="radio-appointment__icon icon-hospital"></span>
                                                В клинике
                                            </div>
                                            <div class="radio-appointment__prices">
                                                <b class="radio-appointment__price"> <span>от</span> 2300 ₽</b>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="doctor-card__radio radio radio-appointment">
                                        <label class="radio-appointment__label radio__label">
                                            <input type="radio" value="Онлайн" name="place-appointment"
                                                   class="radio__input"/>
                                            <div class="radio-appointment__type">
                                                <span class="radio-appointment__icon icon-media"></span>
                                                Онлайн
                                            </div>
                                            <div class="radio-appointment__prices">
                                                <b class="radio-appointment__price"><span>от</span> 1990 ₽</b>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="doctor-card__right">
                                <div class="doctor-card__empty empty-schedule">
                                    <b class="empty-schedule__caption">У врача все занято в ближайшие дни</b>
                                    <button class="empty-schedule__btn">Расписание с 20 октября</button>
                                </div>
                            </div>
                            <button data-appointment="btn" class="is-hidden"></button>
                        </form>
                    </div>
                    <div class="doctor-card listing__item">
                        <form action="#" data-appointment class="doctor-card__body">
                            <div class="doctor-card__info">
                                <div data-appointment="img" class="doctor-card__icon">
                                    <img loading="lazy" src="images/doctors/2.jpg" alt title/>
                                </div>
                                <ul class="doctor-card__specialties">
                                    <li class="doctor-card__speciality">Акушер</li>
                                    <li class="doctor-card__speciality">Гинеколог</li>
                                    <li class="doctor-card__speciality">Гинеколог-эндокринолог</li>
                                </ul>
                                <p data-appointment="name" class="doctor-card__name">Хангельдова Карина Григорьевна</p>
                                <div class="doctor-card__estimates">
                                    <div data-rating="4.8" class="doctor-card__rating rating">
                                        <div class="rating__body">
                                            <img loading="lazy" src="images/icons/stars-empty.svg" alt title/>
                                            <div class="rating__active"></div>
                                        </div>
                                        <b class="rating__value"> 4.8 </b>
                                    </div>
                                    <p class="doctor-card__recommend">92% пациентов рекомендуют врача</p>
                                    <a href="#" class="doctor-card__reviews link-reviews">
                                        <img loading="lazy" src="images/icons/messages-blue.svg" alt title/>
                                        <b>68 отзывов</b>
                                    </a>

                                </div>
                                <ul class="doctor-card__features features">
                                    <li class="feature">
                                        <div class="feature__icon">
                                            <img loading="lazy" src="images/icons/features/clock.svg" alt title/>
                                        </div>
                                        <div class="feature__text">Стаж 30 лет</div>
                                    </li>
                                    <li class="feature feature--orange">
                                        <div class="feature__icon">
                                            <img loading="lazy" src="images/icons/features/star.svg" alt title/>
                                        </div>
                                        <div class="feature__text">Врач высшей категории</div>
                                    </li>
                                    <li class="feature feature--green">
                                        <div class="feature__icon"><img loading="lazy"
                                                                        src="images/icons/features/hat.svg" alt title/>
                                        </div>
                                        <div class="feature__text">Кандидат медицинских наук</div>
                                    </li>
                                </ul>
                                <div data-radios class="doctor-card__radios">
                                    <div class="doctor-card__radio radio radio-appointment">
                                        <label class="radio-appointment__label radio__label">
                                            <input type="radio" value="В клинике" name="place-appointment"
                                                   class="radio__input"/>
                                            <div class="radio-appointment__type">
                                                <span class="radio-appointment__icon icon-hospital"></span>
                                                В клинике
                                            </div>
                                            <div class="radio-appointment__prices"><b class="radio-appointment__price">
                                                    900 ₽</b><b
                                                        class="radio-appointment__old-price">1500 ₽</b></div>
                                        </label>
                                    </div>
                                    <div class="doctor-card__radio radio radio-appointment">
                                        <label class="radio-appointment__label radio__label">
                                            <input type="radio" value="Онлайн" name="place-appointment"
                                                   class="radio__input"/>
                                            <div class="radio-appointment__type">
                                                <span class="radio-appointment__icon icon-media"></span>
                                                Онлайн
                                            </div>
                                            <div class="radio-appointment__prices">
                                                <b class="radio-appointment__price"> 790 ₽</b>
                                            </div>
                                        </label>
                                    </div>
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
                                    <b class="schedule__date">Понедельник, 10 октября: </b>
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
                                                                                class="radio__input"/> 11:00 </label>
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
                                        <div class="schedule__item radio">
                                            <label class="radio__label">
                                                <input type="radio" value="15:00" name="time-appointment"
                                                       class="radio__input"/>
                                                15:00
                                            </label>
                                        </div>
                                        <div class="schedule__item radio">
                                            <label class="radio__label">
                                                <input type="radio" value="15:30" name="time-appointment"
                                                       class="radio__input"/>
                                                15:30
                                            </label>
                                        </div>
                                        <div class="schedule__item radio">
                                            <label class="radio__label">
                                                <input type="radio" value="16:00" name="time-appointment"
                                                       class="radio__input"/>
                                                16:00
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-appointment="btn" class="is-hidden"></button>
                        </form>
                    </div>
                    <div class="doctor-card listing__item">
                        <form action="#" data-appointment="empty" class="doctor-card__body">
                            <div class="doctor-card__info">
                                <div data-appointment="img" class="doctor-card__icon">
                                    <img loading="lazy" src="images/doctors/3.jpg" alt title/>
                                </div>
                                <ul class="doctor-card__specialties">
                                    <li class="doctor-card__speciality">Гинеколог</li>
                                    <li class="doctor-card__speciality">Акушер врач УЗИ</li>
                                </ul>
                                <p data-appointment="name" class="doctor-card__name">Сулейманова Зулейха Абакаровна</p>
                                <div class="doctor-card__estimates">
                                    <div data-rating="4.8" class="doctor-card__rating rating">
                                        <div class="rating__body">
                                            <img loading="lazy" src="images/icons/stars-empty.svg" alt title/>
                                            <div class="rating__active"></div>
                                        </div>
                                        <b class="rating__value"> 4.8 </b>
                                    </div>
                                    <p class="doctor-card__recommend">92% пациентов рекомендуют врача</p>
                                    <a href="#" class="doctor-card__reviews link-reviews">
                                        <img loading="lazy" src="images/icons/messages-blue.svg" alt title/>
                                        <b>114 отзывов</b>
                                    </a>

                                </div>
                                <ul class="doctor-card__features features">
                                    <li class="feature">
                                        <div class="feature__icon">
                                            <img loading="lazy" src="images/icons/features/clock.svg" alt="" title="">
                                        </div>
                                        <div class="feature__text">Стаж 23 года</div>
                                    </li>
                                    <li class="feature feature--orange">
                                        <div class="feature__icon">
                                            <img loading="lazy" src="images/icons/features/star.svg" alt="" title="">
                                        </div>
                                        <div class="feature__text">Врач высшей категории</div>
                                    </li>
                                    <li class="feature feature--green">
                                        <div class="feature__icon"><img loading="lazy"
                                                                        src="images/icons/features/hat.svg" alt=""
                                                                        title="">
                                        </div>
                                        <div class="feature__text">Кандидат медицинских наук</div>
                                    </li>
                                </ul>
                                <div data-radios class="doctor-card__radios">
                                    <div class="doctor-card__radio radio radio-appointment">
                                        <label class="radio-appointment__label radio__label">
                                            <input type="radio" value="В клинике" name="place-appointment"
                                                   class="radio__input">
                                            <div class="radio-appointment__type">
                                                <span class="radio-appointment__icon icon-hospital"></span>
                                                В клинике
                                            </div>
                                            <div class="radio-appointment__prices">
                                                <b class="radio-appointment__price"> 2409 ₽</b>
                                                <b class="radio-appointment__old-price"> 3300 ₽</b>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="doctor-card__right">
                                <button href="#" class="doctor-card__btn btn">Записаться на прием</button>
                            </div>
                            <button data-appointment="btn" class="is-hidden"></button>
                        </form>
                    </div>
                    <div class="doctor-card listing__item">
                        <form action="#" data-appointment class="doctor-card__body">
                            <div class="doctor-card__info">
                                <div data-appointment="img" class="doctor-card__icon">
                                    <img loading="lazy" src="images/doctors/4.jpg" alt title/>
                                </div>
                                <ul class="doctor-card__specialties">
                                    <li class="doctor-card__speciality">Гинеколог-хирург</li>
                                    <li class="doctor-card__speciality">Гинеколог</li>
                                    <li class="doctor-card__speciality">Малоинвазивный хирург</li>
                                    <li class="doctor-card__speciality">Акушер</li>
                                    <li class="doctor-card__speciality">Врач УЗИ</li>
                                    <li class="doctor-card__speciality">Пластический хирург</li>
                                    <li data-dropdown class="doctor-card__specialities-more">
                                        <ul data-dropdown-list class="doctor-card__specialities-fold">
                                            <li class="doctor-card__speciality doctor-card__speciality--in-dropdown">
                                                Гинеколог-хирург
                                            </li>
                                            <li class="doctor-card__speciality doctor-card__speciality--in-dropdown">
                                                Гинеколог
                                            </li>
                                            <li class="doctor-card__speciality doctor-card__speciality--in-dropdown">
                                                Малоинвазивный
                                                хирург
                                            </li>
                                            <li class="doctor-card__speciality doctor-card__speciality--in-dropdown">
                                                Акушер
                                            </li>
                                            <li class="doctor-card__speciality doctor-card__speciality--in-dropdown">
                                                Врач УЗИ
                                            </li>
                                            <li class="doctor-card__speciality doctor-card__speciality--in-dropdown">
                                                Пластический хирург
                                            </li>
                                            <li class="doctor-card__speciality doctor-card__speciality--in-dropdown">
                                                Детский гинеколог
                                            </li>
                                            <li class="doctor-card__speciality doctor-card__speciality--in-dropdown">
                                                Гинеколог-эндокринолог
                                            </li>
                                            <li class="doctor-card__speciality doctor-card__speciality--in-dropdown">
                                                Маммолог
                                            </li>
                                            <li class="doctor-card__speciality doctor-card__speciality--in-dropdown">
                                                Детский гинеколог
                                            </li>
                                        </ul>
                                        <button data-dropdown-btn class="more">
                                            <span class="more__text">Еще</span>
                                            <span class="more__arrow icon-arrow-more"></span>
                                        </button>
                                    </li>
                                </ul>
                                <p data-appointment="name" class="doctor-card__name">Корнеева Елена Александровна</p>
                                <div class="doctor-card__estimates">
                                    <div data-rating="4.8" class="doctor-card__rating rating">
                                        <div class="rating__body">
                                            <img loading="lazy" src="images/icons/stars-empty.svg" alt title/>
                                            <div class="rating__active"></div>
                                        </div>
                                        <b class="rating__value"> 4.8 </b>
                                    </div>
                                    <p class="doctor-card__recommend">92% пациентов рекомендуют врача</p>
                                    <a href="#" class="doctor-card__reviews link-reviews">
                                        <img loading="lazy" src="images/icons/messages-blue.svg" alt title/>
                                        <b>68 отзывов</b>
                                    </a>
                                </div>
                                <ul class="doctor-card__features features">
                                    <li class="feature">
                                        <div class="feature__icon">
                                            <img loading="lazy" src="images/icons/features/clock.svg" alt title/>
                                        </div>
                                        <div class="feature__text">Стаж 27 лет</div>
                                    </li>
                                    <li class="feature feature--green">
                                        <div class="feature__icon"><img loading="lazy"
                                                                        src="images/icons/features/hat.svg" alt title/>
                                        </div>
                                        <div class="feature__text">Кандидат медицинских наук</div>
                                    </li>
                                </ul>
                                <div data-radios class="doctor-card__radios">
                                    <div class="doctor-card__radio radio radio-appointment">
                                        <label class="radio-appointment__label radio__label">
                                            <input type="radio" value="В клинике" name="place-appointment"
                                                   class="radio__input"/>
                                            <div class="radio-appointment__type">
                                                <span class="radio-appointment__icon icon-hospital"></span>
                                                В клинике
                                            </div>
                                            <div class="radio-appointment__prices">
                                                <b class="radio-appointment__price"><span>от</span> 2400 ₽</b>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="doctor-card__radio radio radio-appointment">
                                        <label class="radio-appointment__label radio__label">
                                            <input type="radio" value="Онлайн" name="place-appointment"
                                                   class="radio__input"/>
                                            <div class="radio-appointment__type">
                                                <span class="radio-appointment__icon icon-media"></span>
                                                Онлайн
                                            </div>
                                            <div class="radio-appointment__prices">
                                                <b class="radio-appointment__price"><span>от</span> 990 ₽</b>
                                                <b class="radio-appointment__old-price">1200 ₽</b>
                                            </div>
                                        </label>
                                    </div>
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
                                    <b class="schedule__date"> Суббота, 15 октября: </b>
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
                                                                                class="radio__input"/> 11:00 </label>
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
                                        <div class="schedule__item radio">
                                            <label class="radio__label">
                                                <input type="radio" value="15:00" name="time-appointment"
                                                       class="radio__input"/>
                                                15:00
                                            </label>
                                        </div>
                                        <div class="schedule__item radio">
                                            <label class="radio__label">
                                                <input type="radio" value="15:30" name="time-appointment"
                                                       class="radio__input"/>
                                                15:30
                                            </label>
                                        </div>
                                        <div class="schedule__item radio">
                                            <label class="radio__label">
                                                <input type="radio" value="16:00" name="time-appointment"
                                                       class="radio__input"/>
                                                16:00
                                            </label>
                                        </div>
                                        <div class="schedule__item radio">
                                            <label class="radio__label"> <input type="radio" value=17:00"
                                                                                name="time-appointment"
                                                                                class="radio__input"/> 17:00 </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-appointment="btn" class="is-hidden"></button>
                        </form>
                    </div>
                </div>
                <div class="listing__bottom">
                    <ul class="pagination listing__pagination">
                        <li class="pagination__item">
                            <a href="#" class="pagination__link">1</a>
                        </li>
                        <li class="pagination__item pagination__item--points">. . .</li>
                        <li class="pagination__item">
                            <a href="#" class="pagination__link">8</a>
                        </li>
                        <li class="pagination__item pagination__item--active">9</li>
                        <li class="pagination__item">
                            <a href="#" class="pagination__link">10</a>
                        </li>
                    </ul>

                    <button class="listing__more btn-more">Показать еще</button>
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
            <div class="container">
                <h2>Другие клиники сети</h2>
                <div class="other-clinics">
                    <div class="other-clinics__item place-info">
                        <div class="place-info__contacts">
                            <div class="place-info__contacts-icon">
                                <img loading="lazy" src="images/icons/location.svg" alt title/>
                            </div>
                            <div class="place-info__contacts-body">
                                <a href="#" class="place-info__clinic"><b>Клиника в Текстильщиках</b></a>
                                <address class="place-info__address">г. Москва, ул. Волочаевская, д. 15 стр. 1</address>
                                <a href="tel:+74996543210" class="place-info__phone"><b>8 (499) 322-17-33</b></a>
                            </div>
                        </div>
                        <div class="metros">
                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--tagansk"></div>
                                Текстильщики
                                <div class="metro__distance">338 м</div>
                            </div>

                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--lublino"></div>
                                Печатники
                                <div class="metro__distance">2,1 км</div>
                            </div>
                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--nekrasovskaya"></div>
                                Стахановская
                                <div class="metro__distance">2,2 км</div>
                            </div>
                        </div>
                    </div>
                    <div class="other-clinics__item place-info">
                        <div class="place-info__contacts">
                            <div class="place-info__contacts-icon">
                                <img loading="lazy" src="images/icons/location.svg" alt title/>
                            </div>
                            <div class="place-info__contacts-body">
                                <a href="#" class="place-info__clinic"><b>Клинический госпиталь на Яузе</b></a>
                                <address class="place-info__address">г. Москва, ул. Люблинская, д. 9, к. 1</address>
                                <a href="tel:+74996543210" class="place-info__phone"><b>8 (499) 123-34-56</b></a>
                            </div>
                        </div>
                        <div class="metros">
                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--kalininskaya"></div>
                                Площадь Ильича
                                <div class="metro__distance">481 м</div>
                            </div>

                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--lublino"></div>
                                Римская
                                <div class="metro__distance">574 м</div>
                            </div>
                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--lublino"></div>
                                Чкаловская
                                <div class="metro__distance">1,4 км</div>
                            </div>
                        </div>
                    </div>
                    <div class="other-clinics__item place-info">
                        <div class="place-info__contacts">
                            <div class="place-info__contacts-icon">
                                <img loading="lazy" src="images/icons/location.svg" alt title/>
                            </div>
                            <div class="place-info__contacts-body">
                                <a href="#" class="place-info__clinic"><b>Медицина и Красота на Павелецкой</b></a>
                                <address class="place-info__address">г. Москва, 6-й Монетчиковский пер., д. 19</address>
                                <a href="tel:+74996543210" class="place-info__phone"><b>8 (499) 322-17-33</b></a>
                            </div>
                        </div>
                        <div class="metros">
                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--kolcevaya"></div>
                                Павелецкая
                                <div class="metro__distance">310 м</div>
                            </div>

                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--zamoskvoretskaya"></div>
                                Павелецкая
                                <div class="metro__distance">640 км</div>
                            </div>
                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--kolcevaya"></div>
                                Добрынинская
                                <div class="metro__distance">820 км</div>
                            </div>
                        </div>
                    </div>
                    <div class="other-clinics__item place-info">
                        <div class="place-info__contacts">
                            <div class="place-info__contacts-icon">
                                <img loading="lazy" src="images/icons/location.svg" alt title/>
                            </div>
                            <div class="place-info__contacts-body">
                                <a href="#" class="place-info__clinic"><b>Медцентр ОН КЛИНИК на Новом Арбате</b></a>
                                <address class="place-info__address">г. Москва, ул. Оршанская, д. 16, стр. 1</address>
                                <a href="tel:+74996543210" class="place-info__phone"><b>8 (499) 123-34-56</b></a>
                            </div>
                        </div>
                        <div class="metros">
                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--filevskaya"></div>
                                Смоленская
                                <div class="metro__distance">900 м</div>
                            </div>

                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--arbat"></div>
                                Арбатская
                                <div class="metro__distance">1 км</div>
                            </div>
                            <div class="metro metro--distance">
                                <div class="metro__color metro__color--filevskaya"></div>
                                Арбатская
                                <div class="metro__distance">1 км</div>
                            </div>
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