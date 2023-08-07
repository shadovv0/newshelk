"use strict";

const MEDIA_QUERY_768 = window.matchMedia('(max-width: 768px)');
const MEDIA_QUERY_992 = window.matchMedia('(max-width: 992px)');

function heightToggleElement(toggler, blocks) {
    toggler.addEventListener("click", (e) => {
        e.preventDefault();
        if (blocks instanceof NodeList) {
            blocks.forEach(function (block) {
                addFunctionality(toggler, block);
            });
        } else {
            addFunctionality(toggler, blocks);
        }
    });

    function addFunctionality(toggler, block) {
        if (block.style.height === "0px" || !block.style.height) {
            block.style.height = `${block.scrollHeight}px`;
            toggler.classList.add("is-active");
            block.classList.add("is-expanded");
        } else {
            block.style.height = `${block.scrollHeight}px`;
            window.getComputedStyle(block, null).getPropertyValue("height");
            block.style.height = "0";
            toggler.classList.remove("is-active");
            block.classList.remove("is-expanded");
        }
        block.addEventListener("transitionend", () => {
            if (block.style.height !== "0px") {
                block.style.height = "auto";
            }
        });
    }
}

function contains(array, element) {
    return array.includes(element);
}

function addDay(date) {
    return new Date(date.getTime() + 24 * 60 * 60 * 1000);
}

function getWeekDay(date, full = false, capitalise = false) {
    let days;

    if (!full) {
        if (!capitalise) {
            days = ['Вc', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб']
        } else {
            days = ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ']
        }
    } else {
        days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота']
    }

    return days[date.getDay()];
}

function formatDate(date) {
    let dateDay = date.getDate(),
        dateMonth = date.getMonth(),
        dateYear = date.getFullYear();

    const formatedDate = [dateDay, ++dateMonth, dateYear].map(item => addZero(item));

    return formatedDate.join('.');
}

function getFullDateStr(dateStr, inclYear = true, short = false, end = '.') {
    let MONTHS;

    if (!short) {
        MONTHS = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
    } else {
        MONTHS = ['янв', 'фев', 'мар', 'апр', 'мая', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];
    }

    let dc = dateStr.match(/(\d{1,2}).(\d{1,2}).(\d{4})/);
    if (dc) {
        dc.splice(0, 1);
        dc[0] = +dc[0];
        dc[1] = MONTHS[+dc[1] - 1];
        return inclYear ? `${dc.join(' ')} г${end}` : `${dc[0]} ${dc[1]}`;
    }
}

function addZero(number) {
    return number > 9 ? number : `0${number}`;
}

function createPlacemark(map, markerId, coords, markerImage, name, addr) {
    markerId = new ymaps.GeoObject({
        geometry: {
            type: "Point",
            coordinates: coords
        },
        properties: {
            hintContent: name,
            balloonContent: addr
        }
    }, {
        // Опции.
        // Необходимо указать данный тип макета.
        iconLayout: 'default#image',
        // Своё изображение иконки метки.
        iconImageHref: markerImage,
        // Размеры метки.
        iconImageSize: [48, 48],
        // Смещение левого верхнего угла иконки относительно
        // её "ножки" (точки привязки).
        iconImageOffset: [-5, -38]
    });

    map.geoObjects.add(markerId);
};

function checkDynamicElements() {
    const burgers = document.querySelectorAll('.burger');
    const popups = document.querySelectorAll('.popup');

    if (burgers) {
        for (const burger of burgers) {
            if (burger.classList.contains('burger--open')) return false;
        }
    }

    if (popups) {
        for (const popup of popups) {
            if (!popup.classList.contains('is-hidden')) return false;
        }
    }

    return true;
}


window.addEventListener("DOMContentLoaded", () => {

    //?==============<Limit doctor card specialities>==============

    function limitDoctorCardSpecialities() {
        const doctorsCardsSpecialities = document.querySelectorAll('.doctor-card__specialties');

        if (!doctorsCardsSpecialities || !MEDIA_QUERY_768.matches) return;

        for (const specialities of doctorsCardsSpecialities) {
            const specialitiesItems = specialities.querySelectorAll('.doctor-card__speciality:not(.doctor-card__speciality--in-dropdown)');

            if (specialitiesItems.length <= 2) continue;
            
            appendDropdown();
            fillDropdown();

            function appendDropdown() {
                const specialitiesDropdown = specialities.querySelector('.doctor-card__specialities-more');

                if(specialitiesDropdown) return;

                specialities.innerHTML += `
                <li data-dropdown class="doctor-card__specialities-more">
                    <ul data-dropdown-list class="doctor-card__specialities-fold">
                    </ul>
                    <button data-dropdown-btn class="more">
                        <span class="more__text">Еще</span>
                        <span class="more__arrow icon-arrow-more"></span>
                    </button>
                </li>`
            }

            function fillDropdown(){
                const specialitiesFold = specialities.querySelector('.doctor-card__specialities-fold');

                for (let i = 2; i < specialitiesItems.length; i++) {
                    specialitiesFold.append(specialitiesItems[i]);
                }
            }
        }
    }

    limitDoctorCardSpecialities();

    //?==============</Limit doctor card specialities>=============

    //?==============<Init appointment change clinic>============== 

    function initAppointmentChangeclinic() {
        const placesInfo = document.querySelectorAll('.place-info');
        const popupChangeClinic = document.querySelector('[data-popup="appointment-clinics"]');

        if (!placesInfo || !popupChangeClinic) return;

        const popupChangeClinicForm = popupChangeClinic.querySelector('[data-form]');

        if (popupChangeClinicForm) changeClinic();

        for (const place of placesInfo) {
            const placeMore = place.querySelector('.place-info__more');

            if (!placeMore) continue;

            placeMore.addEventListener('click', (e) => {
                e.preventDefault();

                openPopupChangeClinic();
            })
        }

        function changeClinic() {
            popupChangeClinicForm.addEventListener('submit', (e) => {
                e.preventDefault();

                //! Here you can make a change in the clinic
                const formData = new FormData(popupChangeClinicForm);
            })
        }

        function openPopupChangeClinic() {
            popupChangeClinic.classList.remove('is-hidden');
            document.querySelector('.overlay').classList.add('is-visible');
            document.body.classList.add('lock');
        }
    }

    initAppointmentChangeclinic();

    //?==============</Init appointment change clinic>=============

    //?==============<Appointment clinics map>==============

    function initConnectAppintmentMap() {
        const popupChangeClinics = document.querySelector('[data-popup="appointment-clinics"]');

        if (!popupChangeClinics) return;

        const popupChangeClinicsMap = popupChangeClinics.querySelector('.appointment-clinics__map');
        const clinicsRadios = popupChangeClinics.querySelectorAll('.radio-clinic__label');

        if (!popupChangeClinicsMap || !clinicsRadios) return;

        let map;

        initpPopupChangeClinicsMap();

        function initpPopupChangeClinicsMap() {
            ymaps.ready(function () {
                map = new ymaps.Map(popupChangeClinicsMap, {
                    center: [55.755864, 37.617698],
                    zoom: 12
                }, {
                    searchControlProvider: 'yandex#search'
                });

                createPlacemark(map, 'clinic-1', [55.751016, 37.677813], '../images/icons/placemark-blue.svg', '', '', '');
                createPlacemark(map, 'clinic-2', [55.711681, 37.730733], '../images/icons/placemark-blue.svg', '', '', '');
                createPlacemark(map, 'clinic-3', [55.731592, 37.633446], '../images/icons/placemark-blue.svg', '', '', '');
                createPlacemark(map, 'clinic-4', [55.753524, 37.588431], '../images/icons/placemark-blue.svg', '', '', '');
                createPlacemark(map, 'clinic-5', [55.743629, 37.403953], '../images/icons/placemark-blue.svg', '', '', '');

                clickOnPlacemark();
                chooseClinic();

                map.controls.remove("trafficControl");
                map.controls.remove("typeSelector");
                map.controls.remove("fullscreenControl");
                map.controls.remove("rulerControl");
                map.controls.remove("geolocationControl");
            });

            function clickOnPlacemark() {
                map.geoObjects.events.add('click', function (e) {
                    const placemark = e.get('target');
                    const placemarkCoords = placemark.geometry.getCoordinates();

                    addActivePlacemark(placemark);

                    clinicsRadios.forEach(radio => {
                        if (radio.dataset.coords === placemarkCoords.join(', ')) {
                            radio.click();
                        }
                    })
                });
            }

            function chooseClinic() {
                clinicsRadios.forEach(radio => {
                    radio.addEventListener('click', (e) => {
                        const radioCoords = radio.dataset.coords;

                        map.geoObjects.each(function (placemark) {
                            const placemarkCoords = placemark.geometry.getCoordinates();

                            if (radioCoords === placemarkCoords.join(', ')) {
                                addActivePlacemark(placemark);
                            }
                        })
                    })
                })
            }

            function addActivePlacemark(placemark) {
                map.geoObjects.each(function (placemark) {
                    placemark.options.set("iconImageHref", '../images/icons/placemark-blue.svg');
                })

                placemark.options.set("iconImageHref", '../images/icons/placemark-red.svg');
            }
        }
    }

    initConnectAppintmentMap();

    //?==============</Appointment clinics map>=============

    //?==============<Init change date>==============

    function initChangeDate() {
        const dateAppointment = document.querySelector('#date-appointment');
        const formChangeDate = document.querySelector('#appointment-date');

        if (!formChangeDate || !dateAppointment) return;

        const popupAppointment = document.querySelector('[data-popup="appointment"]');
        const formChangeDatePopup = formChangeDate.closest('.popup');

        const formatedDateBtn = formChangeDate.querySelector('.form__btn');

        submitChangeDate();
        submitFormForClickTime();
        submitFormForClickDate();

        dateAppointment.addEventListener('focus', (e) => {
            document.querySelector('.air-datepicker-global-container').style.opacity = 0;
        })
        
        dateAppointment.addEventListener('blur', (e) => {
            setTimeout(() => {
                document.querySelector('.air-datepicker-global-container').style.opacity = 1;
            }, 300);
        })

        function submitChangeDate(e) {
            formChangeDate.addEventListener('submit', (e) => {
                e.preventDefault();

                const formData = new FormData(formChangeDate);

                let date;

                if (formData.has('date-appointment') && formData.has('time-appointment')) {
                    const time = formData.get('time-appointment').split(':');

                    date = new Date(+formData.get('date-appointment'));
                    date.setHours(parseInt(time[0]), parseInt(time[1]));

                    dateAppointment.setAttribute('data-date', date);
                    const dateAppointmentPicker = new AirDatepicker(dateAppointment, {
                        classes: 'calendar',
                        timepicker: true,
                        dateFormat: 'dd MMM.,',
                    });

                    dateAppointmentPicker.selectDate(date, true);
                    returnToAppointment();
                }
            });

        }

        function returnToAppointment(){
            popupAppointment.classList.remove('is-hidden');
            formChangeDatePopup.classList.add('is-hidden');
        }

        function submitFormForClickDate() {
            const sliderDate = formChangeDate.querySelector('.slider-dates');

            if (!sliderDate) return;

            sliderDate.addEventListener('click', (e) => {
                const { target } = e;

                if (target.getAttribute('name') === 'date-appointment') {
                    formatedDateBtn.click()
                }
            })
        }

        function submitFormForClickTime() {
            const sliderDate = formChangeDate.querySelector('.schedule__body');

            if (!sliderDate) return;

            sliderDate.addEventListener('click', (e) => {
                const { target } = e;

                if (target.getAttribute('name') === 'time-appointment') {
                    formatedDateBtn.click()
                }
            })
        }
    }

    initChangeDate();

    //?==============</Init change date>=============

    //?==============<Make emty appointment>==============

    function makeEmptyAppointment() {
        const popupEmptyAppointment = document.querySelector('[data-popup="appointment-empty"]');
        const popupEmptyAppointmentSuccess = document.querySelector('[data-popup="appointment-empty-success"]');

        if (!popupEmptyAppointment || !popupEmptyAppointmentSuccess) return;

        const popupEmptyAppointmentForm = popupEmptyAppointment.querySelector('[data-form]');

        if (!popupEmptyAppointmentForm) return;

        popupEmptyAppointmentForm.addEventListener('submit', sendAppointment);

        function sendAppointment() {
            const formData = new FormData(popupEmptyAppointmentForm);

            const appointmentFields = {
                'doctorSpeciality': formData.get('speciality'),
                'clinic': formData.get('clinic'),
                'address': popupEmptyAppointment.querySelector('[data-popup-appointment="address"]').textContent,
                'patientName': formData.get('name'),
                'patientPhone': formData.get('phone'),
            }

            fillAppointmentSuccess(appointmentFields);
        }

        function fillAppointmentSuccess(fields) {
            const appointmentSuccessFields = {
                'doctorSpeciality': popupEmptyAppointmentSuccess.querySelector('[data-appointment-speciality]'),
                'clinic': popupEmptyAppointmentSuccess.querySelector('[data-popup-appointment="clinic"]'),
                'address': popupEmptyAppointmentSuccess.querySelector('[data-popup-appointment="address"]'),
                'patientName': popupEmptyAppointmentSuccess.querySelector('[data-appointment-name]'),
                'patientPhone': popupEmptyAppointmentSuccess.querySelector('[data-appointment-phone]'),
            }

            for (const field in fields) {
                if (!appointmentSuccessFields[field]) continue;

                appointmentSuccessFields[field].textContent = fields[field];
            }
        }

    }

    makeEmptyAppointment();

    //?==============</Make emty appointment>=============

    //?==============<Make appointment>==============

    function makeAppointment() {
        const popupAppointment = document.querySelector('[data-popup="appointment"]');
        const popupAppointmentSuccess = document.querySelector('[data-popup="appointment-success"]');

        if (!popupAppointment || !popupAppointmentSuccess) return;

        const popupAppointmentForm = popupAppointment.querySelector('[data-form]');

        if (!popupAppointmentForm) return;

        popupAppointmentForm.addEventListener('submit', sendAppointment);

        function sendAppointment() {
            const formData = new FormData(popupAppointmentForm);

            const appointmentFields = {
                'doctorSpeciality': formData.get('speciality'),
                'date': popupAppointment.querySelector('#date-appointment').dataset.date,
                'patientName': formData.get('name'),
                'patientSurname': formData.get('surname'),
                'patientBirthDay': formData.get('date-birthday'),
                'patientPhone': formData.get('phone'),
            }

            fillAppointmentSuccess(appointmentFields);
        }

        function fillAppointmentSuccess(fields) {
            const appointmentSuccessFields = {
                'doctorSpeciality': popupAppointmentSuccess.querySelector('[data-appointment-speciality]'),
                'date': popupAppointmentSuccess.querySelector('[data-appointment-date]'),
                'patientName': popupAppointmentSuccess.querySelector('[data-appointment-name]'),
                'patientSurname': popupAppointmentSuccess.querySelector('[data-appointment-surname]'),
                'patientBirthDay': popupAppointmentSuccess.querySelector('[data-appointment-birthday]'),
                'patientPhone': popupAppointmentSuccess.querySelector('[data-appointment-phone]'),
            }

            for (const field in fields) {
                if (field === 'date') {
                    const dateAppointment = new Date(fields[field]);
                    const dateAppointmentHours = addZero(dateAppointment.getHours());
                    const dateAppointmentMinutes = addZero(dateAppointment.getMinutes());

                    appointmentSuccessFields[field].textContent = getFullDateStr((dateAppointment).toLocaleDateString('ru-RU'), true, false, ',');
                    appointmentSuccessFields[field].textContent += ' ' + `${dateAppointmentHours}:${dateAppointmentMinutes}`;
                    continue;
                }

                appointmentSuccessFields[field].textContent = fields[field];
            }
        }

    }

    makeAppointment();

    //?==============</Make appointment>=============

    //?==============<Init appointments>============== 

    function initAppointments() {
        const appointments = document.querySelectorAll('[data-appointment]');

        if (!appointments) return;

        const popupAppointmentEmpty = document.querySelector('[data-popup="appointment-empty"]');

        let clinicDropdown;

        if (popupAppointmentEmpty) {
            clinicDropdown = popupAppointmentEmpty.querySelector('#clinic');

            if (clinicDropdown) connectClinicDropdown();
        };

        for (const appointment of appointments) {
            const typeAppointment = appointment.dataset.appointment;

            let popupAppointment;

            if (typeAppointment) {
                popupAppointment = document.querySelector(`[data-popup="appointment-${typeAppointment}"]`);
            } else {
                popupAppointment = document.querySelector('[data-popup="appointment"]')
            }

            initAppointment(appointment, popupAppointment);
        }

        function connectClinicDropdown() {
            const popupEmptyAppointmentClinic = popupAppointmentEmpty.querySelector('[data-popup-appointment="clinic"]');
            const popupEmptyAppointmentClinicAddress = popupAppointmentEmpty.querySelector('[data-popup-appointment="address"]');
            const clinicDropdownList = clinicDropdown.previousElementSibling;

            clinicDropdownList.addEventListener('click', (e) => {
                const { target } = e;

                if (target.classList.contains('dropdown__item')) {
                    const clinicAddress = target.querySelector('.form__clinic-address');

                    popupEmptyAppointmentClinic.innerHTML = clinicDropdown.value;
                    popupEmptyAppointmentClinicAddress.textContent = clinicAddress.textContent;
                }
            })
        };

        function initAppointment(appointment, popupAppointment) {
            const appointmentBtn = appointment.querySelector('[data-appointment="btn"]');

            let appointmentFields;

            submitFormForClickTime();
            submitAppointment();

            function submitAppointment() {
                appointment.addEventListener('submit', (e) => {
                    e.preventDefault();
                    const appointmentData = new FormData(appointment);

                    appointmentFields = {
                        'date': '',
                        'name': appointment.querySelector('[data-appointment="name"]'),
                        'address': appointment.querySelector('[data-appointment="address"]'),
                        'clinic': appointment.querySelector('[data-appointment="clinic"]'),
                        'clinic-dropdown': appointment.querySelector('[data-appointment="clinic"]'),
                        'clinic-input': appointment.querySelector('[data-appointment="clinic"]'),
                        'icon': appointment.querySelector('[data-appointment="img"]'),
                        'metros': appointment.querySelector('[data-appointment="metros"]'),
                        'rating': appointment.querySelector('[data-rating]')
                    }

                    if (appointmentData.has('date-appointment') && appointmentData.has('time-appointment')) {
                        const time = appointmentData.get('time-appointment').split(':');

                        appointmentFields.date = new Date(+appointmentData.get('date-appointment'));
                        appointmentFields.date.setHours(parseInt(time[0]), parseInt(time[1]));
                    }

                    setDataForPopups();
                    openPopupAppointment();
                })
            }

            function setDataForPopups() {
                const popupsAppointmentRatings = popupAppointment.querySelectorAll('.popup .rating');

                if (popupsAppointmentRatings) {
                    popupsAppointmentRatings.forEach(rating => rating.setAttribute('data-rating', appointmentFields.rating));
                }

                const popupAppointmentFields = {
                    'date': popupAppointment.querySelector('#date-appointment'),
                    'name': document.querySelectorAll('[data-popup-appointment="name"]'),
                    'address': document.querySelectorAll('[data-popup-appointment="address"]'),
                    'clinic': document.querySelectorAll('[data-popup-appointment="clinic"]'),
                    'clinic-dropdown': document.querySelectorAll('[data-popup="appointment-empty"] [data-dropdown-content] .form__clinic-name'),
                    'clinic-input': document.querySelector('[data-popup="appointment-empty"] #clinic'),
                    'icon': document.querySelectorAll('[data-popup-appointment="img"]'),
                    'metros': document.querySelectorAll('[data-popup-appointment="metros"]'),
                    'rating': document.querySelectorAll('[data-popup-appointment="rating"]')
                }

                for (const key in popupAppointmentFields) {
                    if (!popupAppointmentFields[key]) continue;
                    if (!appointmentFields[key]) continue;

                    if (key === 'date') {
                        if (appointmentFields.date) {
                            popupAppointmentFields.date.value = '';
                            popupAppointmentFields.date.setAttribute('data-date', appointmentFields.date);
                            popupAppointmentFields.date = new AirDatepicker(popupAppointmentFields.date, {
                                classes: 'calendar',
                                timepicker: true,
                                dateFormat: 'dd MMM.,',
                            });
                            popupAppointmentFields.date.selectDate(appointmentFields.date, true);
                        }
                        continue;
                    }

                    if (key === 'clinic-input') {
                        popupAppointmentFields[key].value = appointmentFields[key].textContent;
                        continue;
                    }

                    if (key === 'rating') {
                        popupAppointmentFields[key].forEach(item => {
                            item.innerHTML = appointmentFields[key].dataset.rating;
                        })
                        continue;
                    }

                    popupAppointmentFields[key].forEach(item => {
                        item.innerHTML = appointmentFields[key].innerHTML;
                    })
                }

                initRatings();
            }

            function openPopupAppointment() {
                popupAppointment.classList.remove('is-hidden');
                document.querySelector('.overlay').classList.add('is-visible');
                document.body.classList.add('lock');
            }

            function submitFormForClickTime() {
                const appointmentTimes = appointment.querySelectorAll('[name="time-appointment"]');

                if (!appointmentTimes) return;

                appointmentTimes.forEach(appointmentTime => appointmentTime.addEventListener('click', (e) => appointmentBtn.click()));
            }
        }
    }

    initAppointments();

    //?==============</Init appointments>=============

    //?==============<Content>==============

    function initContent() {
        const content = document.querySelector('[data-content]');

        if (!content) return;

        const contentLinks = content.querySelectorAll('.scroll-to');

        contentLinks.forEach(link => {
            const linkTarget = document.querySelector(link.getAttribute('href'));

            if (linkTarget) {
                const linkTargetOffsetTop = linkTarget.offsetTop;

                window.addEventListener('scroll', (e) => {
                    const scrollTop = document.documentElement.scrollTop;

                    if (scrollTop > linkTargetOffsetTop) {
                        contentLinks.forEach(link => link.classList.remove('is-active'))

                        link.classList.add('is-active')
                    } else {
                        link.classList.remove('is-active');
                    }
                })
            }
        });
    }

    initContent();

    //?==============</Content>=============

    //?==============<Validate forms>============== 

    function initValidableForms() {
        const forms = document.querySelectorAll('[data-form]');

        if (!forms) return;

        forms.forEach(form => {
            form.addEventListener('submit', formSend);

            async function formSend(e) {
                e.preventDefault();
                let error = formValidate(form);
                let formData = new FormData(form);

                if (error === 0) {
                    // Отправка формы
                }
            }

            function formValidate(form) {
                let error = 0;
                let formReq = form.querySelectorAll('._req');
                formReq.forEach(input => {
                    formRemoveError(input);

                    if (input.value === '') {
                        formAddError(input);
                        error++;
                    }
                })
            }

            function formAddError(input, text = 'Это поле обязательно для заполнения') {
                input.closest('.form__item').append(createError(text));
                input.classList.add('_error');
            }

            function formRemoveError(input) {
                const inputErorLabel = input.closest('.form__item').querySelector('.form__item-error');
                input.classList.remove('_error');

                if (inputErorLabel) {
                    inputErorLabel.remove();
                }
            }

            function createError(text) {
                const errorHtml = document.createElement('div');
                errorHtml.classList.add('form__item-error');
                errorHtml.textContent = text;
                return errorHtml;
            }
        })
    }

    initValidableForms();

    //?==============</Validate forms>=============

    //?==============<Init radios>==============

    function initRadios() {
        const radiosContainers = document.querySelectorAll('[data-radios]');

        if (!radiosContainers) return;

        radiosContainers.forEach(radioContainer => {

            radioContainer.addEventListener('click', (e) => {
                const { target } = e;

                if (target.nodeName === 'LABEL') {
                    const radios = radioContainer.querySelectorAll('label');

                    radios.forEach(radio => radio.classList.remove('is-checked'));
                    target.classList.add('is-checked');
                }
            })
        })
    }

    initRadios();

    //?==============</Init radios>=============

    //?==============<Init show search reset>============== 

    function initShowSearchReset() {
        const searches = document.querySelectorAll('.search');

        if (!searches) return;

        searches.forEach(search => {
            const searchReset = search.querySelector('.search__reset');
            const searchInput = search.querySelector('input');

            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    searchReset.classList.add('is-visible');

                    if (searchInput.value === '') {
                        searchReset.classList.remove('is-visible');
                    }
                })
            }

            if (searchReset) {
                searchReset.addEventListener('click', (e) => {
                    searchReset.classList.remove('is-visible');
                })
            }
        })
    }

    initShowSearchReset();

    //?==============</Init show search reset>=============

    //?==============<Scroll breadcrumbs>==============

    function scrollBreadcrumbs() {
        const breadcrumbs = document.querySelector('.breadcrumbs__list');

        if (!breadcrumbs) return;

        breadcrumbs.scrollLeft = breadcrumbs.scrollWidth;
    }

    scrollBreadcrumbs();

    //?==============</Scroll breadcrumbs>=============

    //?==============<Map>============== 

    function initMap() {
        const maps = document.querySelectorAll('[data-map]');

        if (!maps) return;

        maps.forEach(map => {
            let center = map.dataset.map.split(',');

            ymaps.ready(function () {
                var myMap = new ymaps.Map(map, {
                    center: center,
                    zoom: 12
                }, {
                    searchControlProvider: 'yandex#search'
                });

                createPlacemark(myMap, 'myPlacemark_1', center, '../images/icons/placemark-red.svg', '', '', '');

                myMap.controls.remove("trafficControl");
                myMap.controls.remove("typeSelector");
                myMap.controls.remove("fullscreenControl");
                myMap.controls.remove("rulerControl");
                myMap.controls.remove("searchControl");
                myMap.controls.remove("geolocationControl");

            });
        })



    }

    initMap();

    //?==============</Map>=============

    //?==============<Popup map>============== 

    function initMapInPopup() {
        const map = document.querySelector('.popup__map');

        if (!map) return;

        ymaps.ready(function () {
            var myMap = new ymaps.Map(map, {
                center: [55.755820, 37.617633],
                zoom: 10
            }, {
                searchControlProvider: 'yandex#search'
            });

            createPlacemark(myMap, 'myPlacemark_1', [55.751016, 37.677813], '../images/icons/placemark-blue.svg', '', '', '');
            createPlacemark(myMap, 'myPlacemark_2', [55.743629, 37.403953], '../images/icons/placemark-blue.svg', '', '', '');
            createPlacemark(myMap, 'myPlacemark_3', [55.711681, 37.730733], '../images/icons/placemark-red.svg', '', '', '');

            myMap.controls.remove("trafficControl");
            myMap.controls.remove("typeSelector");
            myMap.controls.remove("fullscreenControl");
            myMap.controls.remove("rulerControl");
            myMap.controls.remove("geolocationControl");

            if (MEDIA_QUERY_768.matches) {
                myMap.setZoom(11);
            }
        });


    }

    initMapInPopup();

    //?==============</Popup map>=============

    //?==============<Dates slider>============== 

    function initDatesSlider() {
        const datesSlidersHtml = document.querySelectorAll('.slider-dates');

        if (!datesSlidersHtml) return;

        datesSlidersHtml.forEach(datesSliderHtml => {
            const datesSliderWrapper = datesSliderHtml.querySelector('.slider-dates__wrapper');
            const datesSliderPrev = datesSliderHtml.closest('.dates').querySelector('.dates__prev');
            const datesSliderNext = datesSliderHtml.closest('.dates').querySelector('.dates__next');

            fillDatesSlider(datesSliderWrapper);

            const datesSlider = new Swiper(datesSliderHtml, {
                loop: false,
                slidesPerView: 'auto',
                spaceBetween: 8,
                observer: true,

                navigation: {
                    nextEl: datesSliderNext,
                    prevEl: datesSliderPrev,
                },
            });
        });

    }

    function fillDatesSlider(container) {
        const datesRange = 14;
        let date = new Date();

        container.append(createDate(date));

        for (let i = 1; i <= datesRange; i++) {
            date = addDay(date);

            const dateHtml = createDate(date);

            container.append(dateHtml);
        }
    }

    function createDate(date) {
        const dateDay = date.getDate();
        let dateDayName = getWeekDay(date);
        const dateSlide = document.createElement('div');
        const dateHtml = document.createElement('div');
        dateSlide.classList.add('swiper-slide', 'slider-dates__slide');
        dateHtml.classList.add('date');

        if (formatDate(date) === formatDate(new Date())) {
            dateHtml.classList.add('is-current');
        }

        if (MEDIA_QUERY_768.matches) {
            dateDayName = getWeekDay(date, false);
        }

        dateHtml.innerHTML = `
            <label class="date__label">
                <input type="radio" value="${date.getTime()}" name="date-appointment" class="date__input" />
                <div class="date__day-name">${dateDayName}</div>
                <div class="date__number">${dateDay}</div>
            </label>
        `;

        dateSlide.append(dateHtml);
        return dateSlide;
    }

    initDatesSlider();

    //?==============</Dates slider>=============

    //?==============<Smooth scroll>==============

    function initSmoothScroll() {
        const anchors = document.querySelectorAll('.scroll-to')

        if (!anchors) return;

        anchors.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                let href = this.getAttribute('href').substring(1);

                const scrollTarget = document.getElementById(href);

                const topOffset = document.querySelector('.site-header').scrollHeight;

                const elementPosition = scrollTarget.getBoundingClientRect().top;
                const offsetPosition = elementPosition - topOffset;

                window.scrollBy({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            });
        });
    }

    initSmoothScroll();

    //?==============</Smooth scroll>=============

    //?==============<Init popups>==============

    function initPopups() {
        const overlay = document.querySelector('.overlay');

        if (!overlay) return;

        // initCloseModalsOnClickOverlay();

        const popups = document.querySelectorAll('[data-popup]');
        const popupBtns = document.querySelectorAll('[data-popup-btn]');

        if (!popupBtns) return;

        popupBtns.forEach(btn => {
            const popup = overlay.querySelector(`[data-popup=${btn.dataset.popupBtn}]`);

            btn.addEventListener('click', (e) => {
                e.preventDefault();
                openModal(popup);
            })
        })

        popups.forEach(popup => {
            const popupCloses = popup.querySelectorAll('[data-popup-close]');
            const popupSendCode = popup.querySelector('[data-popup-send]');
            const popupBtnClose = popup.querySelector('button[type="reset"]');
            const popupCode = popup.querySelector('.popup__code');
            const popupBtn = popup.querySelector('.popup__btn--confirm');
            const formResend = popup.querySelector('.form__resend');
            const popupSuccess = document.querySelector(`[data-popup="${popup.dataset.popup}-success"]`);

            if (popupSendCode) {
                popupSendCode.addEventListener('click', (e) => {
                    e.preventDefault();
                    sendCode();
                })
            }

            if (popupCloses) {
                popupCloses.forEach(close => {
                    close.addEventListener('click', (e) => {
                        closeModal(popup);
                        refreshModal(popup);
                    })
                });
            }

            if (popupBtn) {
                popupBtn.addEventListener('click', (e) => {
                    openModal(popupSuccess);
                    refreshModal(popup);
                })
            }

            function sendCode() {
                popupCode.classList.remove('is-hidden');
                popupBtn.classList.remove('is-hidden');
                formResend.classList.remove('is-hidden');
                popupSendCode.classList.add('is-hidden');
                popupBtnClose.classList.add('is-hidden');
            }
        })

        function refreshModal(popup) {
            const popupSendCode = popup.querySelector('[data-popup-send]');
            const popupBtnClose = popup.querySelector('button[type="reset"]');
            const popupCode = popup.querySelector('.popup__code');
            const popupBtn = popup.querySelector('.popup__btn--confirm');
            const formResend = popup.querySelector('.form__resend');

            if (!popupSendCode) return;

            popupCode.classList.add('is-hidden');
            popupBtn.classList.add('is-hidden');
            formResend.classList.add('is-hidden');
            popupSendCode.classList.remove('is-hidden');
            popupBtnClose.classList.remove('is-hidden');

        }

        function openModal(popup) {

            if (popups) {
                popups.forEach(popup => {
                    closeModal(popup);
                    refreshModal(popup);
                })
            }

            overlay.classList.add('is-visible');
            popup.classList.remove('is-hidden');
            document.body.classList.add('lock');
        };

        function closeModal(popup) {
            overlay.classList.remove('is-visible');
            popup.classList.add('is-hidden');
            document.body.classList.remove('lock');
        };

        // function initCloseModalsOnClickOverlay() {
        //     const overlayChilds = Array.from(overlay.querySelectorAll('*'));

        //     overlay.addEventListener('click', (e) => {
        //         const { target } = e;

        //         if (!contains(overlayChilds, target)) {
        //             if (popups) {
        //                 popups.forEach(popup => {
        //                     closeModal(popup);
        //                     refreshModal(popup);
        //                 })
        //             }
        //             document.body.classList.remove('lock');
        //             overlay.classList.remove('is-visible');
        //         }
        //     })


        // }
    }

    initPopups();

    //?==============</Init popups>=============

    //*<More>==================================================================================================

    //?==============<Init More>============== 

    function initMore() {
        const moreContainers = document.querySelectorAll('[data-more]');

        if (!moreContainers) return;

        moreContainers.forEach(more => {
            const moreItems = more.querySelectorAll('[data-more-item]');
            const moreBtn = more.querySelector('[data-more-btn]');

            let currentItems = more.dataset.moreCurrent;
            let additionalItems = more.dataset.moreOpen;

            if (moreBtn) {
                moreBtn.addEventListener('click', (e) => {
                    currentItems += additionalItems;

                    const arrayMoreItems = Array.from(moreItems);
                    const visibleItems = arrayMoreItems.slice(0, currentItems);

                    visibleItems.forEach(item => {
                        item.classList.add('is-visible');
                    })

                    if (visibleItems.length === arrayMoreItems.length) {
                        moreBtn.classList.add('is-hidden');
                    }
                })
            }

        })

    }

    initMore()

    //?==============</Init More>=============

    //?==============<Init comments more>============== 

    function initUsersMore() {
        const usersMore = document.querySelector('.users__more');

        if (!usersMore) return;

        const allUsers = usersMore.closest('.users__body').querySelectorAll('.user');
        const tabcontents = usersMore.closest('.users__body').querySelectorAll('.users__tabcontent');

        let items = 4;

        usersMore.addEventListener('click', (e) => {
            tabcontents.forEach(tabcontent => {
                if (tabcontent.classList.contains('is-active')) {
                    items += 2;

                    const users = tabcontent.querySelectorAll('.user');
                    const arrayUsers = Array.from(users);
                    const visibleItems = arrayUsers.slice(0, items);

                    visibleItems.forEach(item => {
                        item.classList.add('is-visible');
                    })
                }
            })

            if (items > allUsers.length) {
                usersMore.classList.add('is-hidden');
            }
        })
    }

    initUsersMore()

    //?==============</Init comments more>=============

    //?==============<Init listing show more>============== 

    function initListingShowMore() {
        const listingShowMore = document.querySelector('.listing__more');

        if (!listingShowMore) return;

        const listingItems = document.querySelectorAll('.listing__item');
        let items = 5;

        listingShowMore.addEventListener('click', (e) => {
            items += 5;
            const arraylistingItems = Array.from(listingItems);
            const visibleItems = arraylistingItems.slice(0, items);

            visibleItems.forEach(item => {
                item.classList.add('is-visible');
            })

            if (visibleItems.length === listingItems.length) {
                listingShowMore.classList.add('is-hidden');
            }
        })
    }

    initListingShowMore();

    //?==============</Init listing show more>=============

    //*</More>=================================================================================================

    //*<Sliders>================================================================================================

    //?==============<Selected filters>==============

    function initSelectedFiltersSlider() {
        const blocksSelectedFilters = document.querySelectorAll('.selected-filters');

        if (!blocksSelectedFilters) return;

        blocksSelectedFilters.forEach(blockSelectedFilters => {
            const selectedFiltersSlider = new Swiper(blockSelectedFilters, {
                loop: false,
                slidesPerView: 'auto',
                spaceBetween: 6,
                observer: true,

                breakpoints: {
                    768: {
                        spaceBetween: 9,
                    }
                },
            });
        })

    }

    initSelectedFiltersSlider();

    //?==============</Selected filters>=============

    //?==============<Doctors slider>==============

    function initSimpleSlider() {
        let simpleSliders = document.querySelectorAll('.swiper-simple');

        if (!simpleSliders || !MEDIA_QUERY_992.matches) return;

        simpleSliders.forEach(slider => {

            const simpleSlider = new Swiper(slider, {
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 16,

                pagination: {
                    el: '.swiper-simple__pagination',
                    type: 'bullets',
                    clickable: true,
                    dynamicBullets: true,
                },
            });

            if (slider.classList.contains('swiper-simple--tabs')) {
                simpleSlider.params.spaceBetween = 8;
            }

        })
    }

    initSimpleSlider();

    //?==============</Doctors slider>=============

    //?==============<Section sliders>============== 

    function initSectionSliders() {
        let mainSliders = document.querySelectorAll('.swiper-main');

        if (!mainSliders) return;

        mainSliders.forEach(slider => {
            const mainSliderPrev = slider.closest('.section-with-slider').querySelector('.arrow--prev');
            const mainSliderNext = slider.closest('.section-with-slider').querySelector('.arrow--next');

            const sliderSwiper = new Swiper(slider, {
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 24,

                navigation: {
                    nextEl: mainSliderNext,
                    prevEl: mainSliderPrev,
                },

                pagination: {
                    el: '.swiper-main__pagination',
                    type: 'bullets',
                    clickable: true,
                    dynamicBullets: true,
                },

                breakpoints: {
                    320: {
                        spaceBetween: 16,
                    },
                    768: {
                        spaceBetween: 20,
                    },
                },
            });

            if (slider.classList.contains('swiper-main--clinics-reviews')) {
                sliderSwiper.params.spaceBetween = 32;

                if (MEDIA_QUERY_992.matches) {
                    sliderSwiper.params.spaceBetween = 16;
                }
            }

        })

    }

    initSectionSliders();

    //?==============</Section sliders>=============

    //*</Sliders>=================================================================================================

    //?==============<Tabs>==============

    function initTabs() {
        const tabsContainer = document.querySelectorAll('[data-tabs-container]');

        if (!tabsContainer) return;

        tabsContainer.forEach(tabContainer => {
            const tabs = tabContainer.querySelectorAll('[data-tab]');
            const tabsContents = tabContainer.querySelectorAll('[data-tabcontent]');

            tabs.forEach(tab => {
                tab.addEventListener('click', (e) => {
                    tabs.forEach(tab => tab.classList.remove('is-active'));
                    tabsContents.forEach(tabcontent => tabcontent.classList.remove('is-active'));
                    tab.classList.add('is-active');
                    changeTabContent(tab);
                })
            })

            function changeTabContent(tab) {

                for (const tabcontent of tabsContents) {

                    if (tab.dataset.tab === 'all') {
                        tabsContents.forEach(tabcontent => tabcontent.classList.add('is-active'));
                        return;
                    }

                    if (tabcontent.dataset.tabcontent === tab.dataset.tab) {
                        tabcontent.classList.add('is-active')
                    }
                }
            }

        })

    }

    initTabs();

    //?==============</Tabs>=============

    //?==============<Filters>==============

    function initFilters() {
        const filters = document.querySelector('[data-filters]');

        if (!filters) return;

        const filtersAllChilds = filters.querySelectorAll('*');
        const filtersBody = filters.querySelector('[data-filters-body]');
        const blocksSelectedFilters = document.querySelectorAll('.selected-filters');
        let filtersOpenBtns, filtersCancel;

        let selectedFilters = [
            'Рейтинг от 4',
            'Врач высшей категории',
            'до 2000 ₽',
            'м. Текстильщики',
        ];

        initBtnOpenFilters();
        initFiltersCancel();
        initFiltersReset();
        initFiltersClose();
        initRemovesSelectedFilters();
        closeFiltersClickOutside();
        processSubmitFilters(filtersBody);

        function updateSelectedFilters() {
            blocksSelectedFilters.forEach(blockSelectedFilters => {
                const selectedFiltersWrapper = blockSelectedFilters.querySelector('.swiper-wrapper');
                selectedFiltersWrapper.innerHTML = '';

                selectedFilters.forEach(filter => {
                    if (filter) selectedFiltersWrapper.append(createSelectedFilter(filter));
                })
            })
        }

        function initBtnOpenFilters() {
            filtersOpenBtns = document.querySelectorAll('[data-filters-btn]');

            if (!filtersOpenBtns) return;

            filtersOpenBtns.forEach(filtersOpenBtn => {
                filtersOpenBtn.addEventListener('click', (e) => {
                    filtersBody.classList.toggle('is-open');
                    filtersOpenBtn.classList.toggle('is-open');

                    if (MEDIA_QUERY_768.matches) {
                        document.body.classList.add('lock');
                    }
                });
            })
        }

        function initFiltersClose() {
            const filtersClose = filters.querySelector('.filters__close');

            if (!filtersClose) return;

            filtersClose.addEventListener('click', closeFilters)
        }

        function processSubmitFilters(filters) {
            filters.addEventListener('submit', (e) => {
                selectedFilters = [];

                e.preventDefault();
                closeFilters();

                const formData = formatFilters(new FormData(filters));

                formData.forEach(filter => {
                    filter = filter.trim();
                    if (filter) selectedFilters.push(filter);
                })

                updateSelectedFilters();

                blocksSelectedFilters.forEach(blockSelectedFilters => {
                    blockSelectedFilters.classList.add('is-filled');
                })

            })
        }

        function formatFilters(formData) {
            const filterMinCost = formData.get('min');
            const filterMaxCost = formData.get('max');

            if (formData.has('min') && filterMinCost) formData.set('min', `От ${filterMinCost} ₽`)
            if (formData.has('max') && filterMaxCost) formData.set('max', `До ${filterMaxCost} ₽`)

            return formData;
        }

        function initFiltersCancel() {
            filtersCancel = filters.querySelector('.filters__btn--cancel');

            if (!filtersCancel);

            filtersCancel.addEventListener('click', (e) => {
                e.preventDefault();
                closeFilters();
            })
        }

        function initFiltersReset() {
            const filtersReset = filters.querySelector('.filters__reset');

            if (!filtersReset) return;

            filtersReset.addEventListener('click', (e) => {
                closeFilters();

                blocksSelectedFilters.forEach(blockSelectedFilters => {
                    blockSelectedFilters.classList.remove('is-filled');
                })
            })
        }

        function closeFilters() {
            const isAllow = checkDynamicElements();

            filtersBody.classList.remove('is-open');

            filtersOpenBtns.forEach(filtersOpenBtn => {
                filtersOpenBtn.classList.remove('is-open');
            })

            if (isAllow) document.body.classList.remove('lock');
        }

        function initRemovesSelectedFilters() {
            blocksSelectedFilters.forEach(blockSelectedFilters => {
                blockSelectedFilters.addEventListener('click', (e) => {
                    const { target } = e;

                    if (target.classList.contains('cross')) {
                        const selectedFilter = target.closest('.swiper-slide');
                        const selectedFilterText = selectedFilter.textContent.trim();
                        const selectedFilterIndex = selectedFilters.findIndex(filter => filter === selectedFilterText);
                        selectedFilter.remove();
                        selectedFilters.splice(selectedFilterIndex, 1)

                        updateSelectedFilters();

                        if (selectedFilters.length === 0) {
                            blockSelectedFilters.classList.remove('is-filled')
                        }
                    }
                })
            })
        }


        function createSelectedFilter(filter) {
            const selectedFilter = document.createElement('div');
            selectedFilter.classList.add('swiper-slide');
            selectedFilter.innerHTML = `
                <div class="selected-filters__item">
                    ${filter}
                    <span class="cross"></span>
                </div>`

            return selectedFilter;
        }

        function closeFiltersClickOutside() {
            window.addEventListener('click', (e) => {
                const { target } = e;

                if (!contains(Array.from(filtersAllChilds), target) && !target.hasAttribute('data-filters-btn')) closeFilters();

            });
        }
    }

    initFilters();

    //?==============</Filters>=============

    //?==============<Dropdowns>==============

    function initDropdowns() {
        const dropdowns = document.querySelectorAll('[data-dropdown]');

        if (!dropdowns) return;

        dropdowns.forEach(dropdown => {
            const dropdownBtn = dropdown.querySelector('[data-dropdown-btn]');
            const dropdownContent = dropdown.querySelector('[data-dropdown-content]');
            const dropdownList = dropdown.querySelector('[data-dropdown-list]');
            const dropdownListItems = dropdownList.querySelectorAll('li');
            const dropdownInput = dropdown.querySelector('[data-dropdown-input]');

            dropdownBtn.addEventListener('click', (e) => {
                e.preventDefault();
                dropdownBtn.classList.toggle('is-open');
                dropdownList.classList.toggle('is-open');
            })


            dropdownListItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    dropdownContent.innerHTML = item.querySelector('[data-dropdown-item-content]').innerHTML;

                    if (dropdownInput) dropdownInput.value = item.dataset.value;

                    closeDropdown();
                })
            })

            window.addEventListener('click', (e) => {
                const { target } = e;

                const dropdownChilds = Array.from(dropdown.querySelectorAll('*'));

                if (!contains(dropdownChilds, target)) closeDropdown();

            });

            function closeDropdown() {
                dropdownBtn.classList.remove('is-open');
                dropdownList.classList.remove('is-open');
            }
        })
    }

    initDropdowns();

    //?==============</Dropdowns>=============

    //?==============<Sorting>==============

    function initSort() {
        const sortItems = document.querySelectorAll('.sorting__item');

        if (!sortItems) return;

        sortItems.forEach((item, i) => {
            const itemDirection = item.querySelector('.sorting__direction');

            item.addEventListener('click', (e) => {
                sortItems.forEach((item, j) => {
                    if (i !== j) item.classList.remove('selected');
                })

                if (itemDirection && item.classList.contains('selected')) changeDirection()
                item.classList.add('selected');
            })

            function changeDirection() {
                itemDirection.classList.toggle('sorting__direction--reverse');
            }
        })
    }

    function initMobileSortDirection() {
        const sortDirection = document.querySelector('.sorting__dropdown .sorting__direction');

        if (!sortDirection) return;

        sortDirection.addEventListener('click', (e) => {
            sortDirection.classList.toggle('sorting__direction--reverse');
        })

    }

    initSort();
    initMobileSortDirection();

    //?==============</Sortig>==============



    //?==============<Change text on main page>==============

    function initChangeTextOnMainPage() {
        const heroChangingText = document.querySelector('.main-hero__changing-text');

        if (!heroChangingText) return;

        let heroChangingTextId = undefined; // Интервал фразы

        let heroChangingTextIndex = 0; // Номер фразы

        let canUpdateHeroText = false;

        let heroChangingTextWords = [
            {
                text: 'эндокринолога',
                color: '#9158EB',
            },
            {
                text: 'гинеколога',
                color: '#17B389',
            },
            {
                text: 'клинику',
                color: '#FF9F1C',
            },
            {
                text: 'стоматолога',
                color: '#D04CD2',
            }
        ];

        // Вызываем первый раз отрисовку предложения чтотобы избежать зарержки

        writeTextFelt(heroChangingTextWords[heroChangingTextIndex].text, heroChangingText); // Запуск функции отрисовки 
        heroChangingText.style.background = heroChangingTextWords[heroChangingTextIndex].color;

        // Cмена текста

        heroChangingTextId = setInterval(() => {

            heroChangingTextIndex++; // Переход на новую фразу

            if (heroChangingTextIndex >= heroChangingTextWords.length) {
                heroChangingTextIndex = 0; // Начать сначала
            }

            if (canUpdateHeroText) {
                canUpdateHeroText = writeTextFelt(heroChangingTextWords[heroChangingTextIndex].text, heroChangingText); // запуск функции отрисовки 
                heroChangingText.style.background = heroChangingTextWords[heroChangingTextIndex].color;
                canUpdateHeroText = false;
            }

        }, 5000);

        // Функция посимвольной отрисовки элементов

        function writeTextFelt(text, element) {
            // Отрисовка посимвольно текста
            element.textContent = text;
            const elementHeight = element.clientHeight;
            element.textContent = '';
            let letter_count = 0; // Сколько символов отрисовать
            text = text.toString();
            let letter_count_max = text.length;

            let timerRunTextAdvantage_Letter_Id = setInterval((e) => {

                element.style.height = `${elementHeight}px`;
                let cut_run_str = text.substring(0, letter_count); // Для вывода 
                element.innerText = cut_run_str;

                letter_count++;

                if (letter_count > letter_count_max) {
                    // Завершить отрисовку предложения
                    clearInterval(timerRunTextAdvantage_Letter_Id);
                    canUpdateHeroText = true;
                }

            }, 100);


        }

    }


    initChangeTextOnMainPage();

    //?==============</Change text on main page>=============

    //?==============<Calendars>============== 

    function initCalendars() {

        const calendars = document.querySelectorAll('[data-calendar]');

        if (!calendars) return;

        calendars.forEach(calendar => {

            const calendarDatepicker = new AirDatepicker(calendar, {
                classes: 'calendar',
                position: 'bottom right',
                navTitles: {
                    days: 'MMMM yyyy'
                },

                minDate: new Date(),
                startDate: new Date(),
                prevHtml: '<span class="icon-arrow-more"></span>',
                nextHtml: '<span class="icon-arrow-more"></span>',

                onSelect(date) {
                    const currentDate = formatDate(new Date()),
                        selectedDate = date.formattedDate;

                    if (currentDate === selectedDate) {
                        const inputDatepicker = date.datepicker.$el;
                        const dateString = getFullDateStr((new Date()).toLocaleDateString('ru-RU'), false);

                        inputDatepicker.value = `Сегодня, ${dateString}`;
                    };
                }
            });

            function createCalendarHeader() {
                const calendarHeader = document.createElement('div');
                calendarHeader.classList.add('calendar__header');
                calendarHeader.innerHTML = `<div class="arrow arrow--gray arrow--prev"><span class="icon-arrow-more"></span></div>  Выберите дату`;
                return calendarHeader;
            }


            if (calendar.dataset.calendar !== 'empty') calendarDatepicker.selectDate(new Date());

            if (calendar.hasAttribute('data-calendar-all')) {
                calendarDatepicker.update({
                    minDate: '',
                })
            }

            if (MEDIA_QUERY_992.matches) {
                calendarDatepicker.update({
                    position: 'bottom center',
                })
            }

            if (window.matchMedia('(max-width: 576px)').matches) {
                const buttonAccept = {
                    content: 'Применить',
                    className: 'btn calendar__btn calendar__btn--accept',
                    onClick: (datepicker) => {
                        datepicker.hide();
                    }
                }

                const buttonCansel = {
                    content: 'Отмена',
                    className: 'btn calendar__btn calendar__btn--cansel',
                    onClick: (datepicker) => {
                        datepicker.selectDate(new Date());
                        datepicker.hide();
                    }
                }

                calendarDatepicker.update({
                    isMobile: true,
                    buttons: [buttonCansel, buttonAccept],
                    onShow(isFinished) {
                        if (!isFinished) {
                            const calendarHeader = createCalendarHeader();
                            const calendarHeaderArrow = calendarHeader.querySelector('.arrow');
                            calendarDatepicker.$datepicker.prepend(calendarHeader)

                            calendarHeaderArrow.addEventListener('click', () => calendarDatepicker.hide())
                        };

                        document.body.classList.add('lock');
                    },

                    onHide() {
                        document.body.classList.remove('lock');
                    }
                })
            }
        })

    }

    initCalendars();

    //?==============</Calendars>=============


    //?==============<Burger>==============

    function initBurger() {
        const burgers = document.querySelectorAll('.burger');

        if (!burgers) return;

        burgers.forEach(burger => {
            const headerPanel = document.querySelector('.site-header__panel');

            burger.addEventListener('click', (e) => {
                initHeaderPanel(burger);
                burger.classList.toggle('burger--open');
                headerPanel.classList.toggle('site-header__panel--open');
                document.body.classList.toggle('lock');
            })
        })
    }

    function initHeaderPanel(burger) {
        const header = document.querySelector('.site-header'),
            headerPanel = document.querySelector('.site-header__panel'),
            headerMobile = document.querySelector('.header-mobile');

        if (headerMobile && burger.classList.contains('header-mobile__burger')) {
            headerPanel.style.height = `${document.documentElement.clientHeight + 1 - headerMobile.offsetHeight}px`;
            headerPanel.style.top = `${headerMobile.clientHeight - 1}px`;
        } else {
            headerPanel.style.height = `${document.documentElement.clientHeight - header.offsetHeight}px`;
            headerPanel.style.top = `${header.clientHeight - 1}px`;
        }
    }

    initBurger();

    //?==============</Burger>=============


    //?==============<Ratings>==============

    function initRatings() {
        const ratings = document.querySelectorAll(".rating");

        if (!ratings) return;

        let ratingActive, ratingValue;

        ratings.forEach((item, i) => {
            const rating = item;
            initRating(rating);
        });

        function initRating(rating) {
            iniRatingVars(rating);
            setRatingActiveWidth(formatRatingValue(ratingValue));

            if (rating.classList.contains('rating--set')) {
                setRating(rating);
            }
        }

        function iniRatingVars(rating) {
            ratingActive = rating.querySelector(".rating__active");
            ratingValue = rating.dataset.rating;
        }

        function formatRatingValue(value) {
            value = value.split('');

            if (value[2] > 8) return `${++value[0]}`;
            if (value[2] > 3) return `${value[0]}.5`;

            return value[0];
        }

        function setRatingActiveWidth(index = ratingValue) {
            const ratingActiveWidth = (index * 10) / 0.5;
            ratingActive.style.width = `${ratingActiveWidth}%`;
        }

        function setRating(rating) {
            const ratingItems = rating.querySelectorAll('.rating__item');

            ratingItems.forEach(item => {
                item.addEventListener('mouseover', (e) => {
                    iniRatingVars(rating);
                    setRatingActiveWidth(item.value);
                })

                item.addEventListener('mouseleave', (e) => {
                    setRatingActiveWidth();
                })

                item.addEventListener('click', (e) => {
                    rating.setAttribute('data-rating', item.value)
                    iniRatingVars(rating);
                    setRatingActiveWidth(item.value); 2
                })
            })
        }
    }

    initRatings();

    //?==============</Ratings>=============

    //?==============<Set margin top for page>===============

    function setMarginForPage() {
        const header = document.querySelector('.site-header');
        const page = document.querySelector('.page');

        if (!header || !page) return;

        page.style.paddingTop = `${header.clientHeight}px`;
    }

    setMarginForPage();

    //?==============</Set margin top for page>============== 

    //?==============<Set animation for header on scroll>============== 

    function setAnimationForHeader() {
        const header = document.querySelector('.site-header');

        if (!header) return;

        let lastScrollTop = 0;

        window.addEventListener("scroll", (e) => {
            let scrollTop = document.documentElement.scrollTop;

            if (scrollTop > 50) {
                if (scrollTop >= lastScrollTop) {
                    header.classList.add("scroll-down");
                } else {
                    header.classList.remove("scroll-down");
                }
            }

            lastScrollTop = scrollTop <= 50 ? 50 : scrollTop;
        });
    }

    setAnimationForHeader();

    //?==============</Set animation for header on scroll>=============

    //?==============<Init animations for fixed elements>==============

    function intiAnimationForScroll() {
        const animatedElements = document.querySelectorAll('[data-scroll-animation]');

        if (!animatedElements) return;

        animatedElements.forEach(element => {
            let startAnimation = 0;
            let lastScrollTop = 0;

            if (element.classList.contains('header-mobile') && document.querySelector('.filters-panel')) {
                startAnimation = document.querySelector('.filters-panel').offsetTop + document.querySelector('.filters-panel').clientHeight;
            }

            window.addEventListener("scroll", (e) => {
                let scrollTop = document.documentElement.scrollTop;

                if (scrollTop > startAnimation) {
                    if (scrollTop >= lastScrollTop) {
                        element.classList.add("scroll-down");
                        element.classList.remove("scroll-up");
                    } else {
                        element.classList.add("scroll-up");
                        element.classList.remove("scroll-down");
                    }
                } else {
                    element.classList.remove("scroll-up");
                    element.classList.remove("scroll-down");
                }

                lastScrollTop = scrollTop;
            })
        })
    }

    intiAnimationForScroll()

    //?==============</Init animations for fixed elements>=============

    //?==============<Init sticky elements>============== 

    function initStickyElements() {
        const stickyElements = document.querySelectorAll('[data-sticky]');

        if (!stickyElements || MEDIA_QUERY_992.matches) return;

        const header = document.querySelector('.site-header');

        stickyElements.forEach(element => {
            element.classList.add('is-sticky');

            window.addEventListener('scroll', (e) => {
                if (header.classList.contains('scroll-down')) {
                    element.style.top = `0px`;
                } else {
                    element.style.top = `${header.clientHeight}px`;
                }
            })
        })

    }

    initStickyElements();

    //?==============</Init sticky elements>=============

    function initPhoneMask() {
        [].forEach.call(document.querySelectorAll('[name="phone"]'), function (input) {
            var keyCode;

            function mask(event) {
                event.keyCode && (keyCode = event.keyCode);

                var pos = this.selectionStart;

                if (pos < 3) event.preventDefault();

                var matrix = "+7 (___) ___-__-__",
                    i = 0,
                    def = matrix.replace(/\D/g, ""),
                    val = this.value.replace(/\D/g, ""),
                    new_value = matrix.replace(/[_\d]/g, function (a) {
                        return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                    });
                i = new_value.indexOf("_");
                if (i != -1) {
                    i < 5 && (i = 3);
                    new_value = new_value.slice(0, i)
                }
                var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                    function (a) {
                        return "\\d{1," + a.length + "}"
                    }).replace(/[+()]/g, "\\$&");
                reg = new RegExp("^" + reg + "$");
                if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
                if (event.type == "blur" && this.value.length < 5) this.value = ""
            }

            input.addEventListener("input", mask, false);
            input.addEventListener("focus", mask, false);
            input.addEventListener("blur", mask, false);
            input.addEventListener("keydown", mask, false)

        });
    }

    initPhoneMask();

    //?==============<Scroll on other page>==============

    function scrollOnOtherPage() {
        var pageHash = location.hash;

        if (!pageHash) return;

        location.hash = '';
        console.log(pageHash);
        const scrollTarget = document.querySelector(pageHash);

        const topOffset = 0;

        const elementPosition = scrollTarget.getBoundingClientRect().top;
        const offsetPosition = elementPosition - topOffset;

        window.scrollBy({
            top: offsetPosition,
            behavior: 'smooth'
        });
    }


    scrollOnOtherPage();
    //?==============</Scroll on other page>=============

    //?==============<Limit services>==============
    
    function limitServices(){
        const servicesLists = document.querySelectorAll('[data-services-list]');

        if(!servicesLists) return;

        servicesLists.forEach(servicesList => {
            const servicesListColumns = servicesList.dataset.servicesList;
            const servicesListItems = servicesList.querySelectorAll('.services-hub__item');
            
            if(!MEDIA_QUERY_768.matches){
                servicesListItems.forEach((item, i) => {
                    if(i > 5 * servicesListColumns - 1){
                        item.setAttribute('data-fold-content', '')
                        item.classList.add('is-folded');
                    }
                })
            } else{
                servicesListItems.forEach((item, i) => {
                    if(i > 2){
                        item.setAttribute('data-fold-content', '')
                        item.classList.add('is-folded');
                    }
                })
            }
        })
    }

    limitServices();
    
    //?==============</Limit services>=============

    //?==============<Fold elements>============== 

    function initFoldElements() {
        const spoilers = document.querySelectorAll('[data-fold]');

        if (!spoilers) return;

        spoilers.forEach(spoiler => {
            const spoilerBtn = spoiler.querySelector('[data-fold-btn]');
            const spoilerBtnText = spoilerBtn.querySelector('.more__text');
            const spoilerContent = spoiler.querySelectorAll('[data-fold-content]');
            
            spoilerContent.forEach(content => {
                heightToggleElement(spoilerBtn, content);
            })

            if (spoilerBtnText) {
                spoilerBtn.addEventListener('click', (e) => {
                    if (spoilerBtn.classList.contains('is-active')) {
                        spoilerBtnText.textContent = spoilerBtnText.dataset.closeText;
                    } else {
                        spoilerBtnText.textContent = spoilerBtnText.dataset.openText
                    }
                })
            }
        })

    }

    initFoldElements();

    //?==============</Fold elements>=============

    //?==============<Rerender hero clinic>==============

    function rerenderHeroClinic(){
        const heroClinicBody = document.querySelector('.hero-clinic__body');

        if(!heroClinicBody || !MEDIA_QUERY_992.matches) return;

        const heroClinicEstimates = heroClinicBody.querySelector('.hero-clinic__estimates');
        const heroClinicSpecialities = heroClinicBody.querySelector('.hero-clinic__specialties');
        const heroClinicReload = heroClinicBody.querySelector('.hero-clinic__reload');
        const heroClinicBtn = heroClinicBody.querySelector('.hero-clinic__left .hero-clinic__btn');
        const heroClinicPlace = heroClinicBody.querySelector('.hero-clinic__place-info');
        const heroClinicContent = heroClinicBody.querySelector('.hero-clinic__content');
        const heroClinicRight = heroClinicBody.querySelector('.hero-clinic__right');

        heroClinicSpecialities.insertAdjacentElement('afterend', heroClinicEstimates);
        heroClinicEstimates.insertAdjacentElement('afterend', heroClinicReload);
        heroClinicPlace.insertAdjacentElement('afterend', heroClinicBtn);
        heroClinicRight.append(heroClinicContent);
    }

    rerenderHeroClinic();

    //?==============</Rerender hero clinic>=============

    //?==============<Rerender clinic card>============== 

    function rerenderClinicCard(){
        const clinicCards = document.querySelectorAll('.clinic__body');

        if(!clinicCards || !window.matchMedia('(max-width: 1200px)').matches) return;

        clinicCards.forEach(clinic => {
            const clinicPlace = clinic.querySelector('.clinic__info');
            const clinicContent = clinic.querySelector('.clinic__content');

            clinicPlace.insertAdjacentElement('afterend', clinicContent);
        })
    }

    rerenderClinicCard();

    //?==============</Rerender clinic card>=============

    //?==============<Init zoom image>==============

    function initZoomImage(){
        const zoomsElements = document.querySelectorAll('[data-popup-btn="image"]');
        const popupImage = document.querySelector('.popup__image');

        if(!zoomsElements || !popupImage) return;

        zoomsElements.forEach(zoomElement => {
            zoomElement.addEventListener('click', (e) => {
                popupImage.innerHTML = zoomElement.innerHTML;
            });
        })
    }

    initZoomImage();

    //?==============</Init zoom image>=============
});




