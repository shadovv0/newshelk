$('.show-specs').on('click', function (e) {
    e.preventDefault();
    $('.left-sidebar').addClass('show-sidebar');
    $('.fancybox-close-small, .overlay').on('click', function (e) {
        hideForm();
    });
});

$('.show-services').on('click', function (e) {
    e.preventDefault();
    $('.services-spoiler').toggleClass('expanded');
    if ($(this).text() == 'Показать все услуги') {
        $('.show-services').text('Скрыть все услуги');
    } else {
        $('.show-services').text('Показать все услуги');
    }
    $('.show-services-top').toggleClass('hide');
});

$('.menu-btn').on('click', function (e) {
    e.preventDefault();

    if (!$('.top-menu-visible').length) {
        $('body').addClass('top-menu-visible');
        $('html').addClass('no-scroll');
    }
    return false;
});

$(document).on('click', function (e) {
    if (!$(e.target).closest('.burger-menu').length) {
        $('body').removeClass('top-menu-visible');
        $('html').removeClass('no-scroll');
    }
});


$('.top-menu__wrap .close').click(function (e) {
    $('.menu-btn:visible').click();
});
$(document).on('click', '.top-menu-visible', function () {
    $('.menu-btn:visible').click();
});


$('.bot-menu-card').click(function (e) {
    e.preventDefault();
    if (window.innerWidth < 880) {
        if (!$('.bot-menu-visible').length) {
            $('body').addClass('bot-menu-visible');
            $('html').addClass('no-scroll');
            $('.bot-menu-card').addClass('disable-bot-menu');
        } else {
            $('body').removeClass('bot-menu-visible');
            $('html').removeClass('no-scroll');
            $('.bot-menu-card').removeClass('disable-bot-menu');
        }
    } else {
        $('body').click(function (e) {
            if ($('.bot-menu').hasClass('active')) {
                $('.bot-menu-card').click();
            }
        });
        if (!$('.bot-menu').hasClass('active')) {
            $('.bot-menu').addClass('active');
            $('.bot-menu .wrap').animate({
                height: 570
            }, 300);
            $('.bot-menu .bottom-menu').delay(100).slideDown(200);
        } else {
            $('.bot-menu .bottom-menu').slideUp(300);
            $('.bot-menu .wrap').animate({
                height: 51
            }, 300, function () {
                $('bot-menu-menu').removeClass('active');
            });
        }
    }
    return false;
});


$('.bot-menu__wrap .close').click(function (e) {
    $('.bot-menu-card:visible').click();
});
$(document).on('click', '.bot-menu-visible', function () {
    $('.bot-menu-card:visible').click();
});

$(document).on('click', function (e) {
    if (!$(e.target).closest('.open-window-search').length && !$(e.target).closest('.input-for-search').length) {
        $('.head__container').removeClass('open-window-search');
        $('.window-search').hide();
        $('.content').removeClass('content-raltive');
    }
});

$('.input-for-search').on('click', function (e) {
    e.preventDefault();
    if (!$('.open-window-search').length) {
        $('.head__container').addClass('open-window-search');
        $('.window-search').show();
        $('.content').addClass('content-raltive');
    } else {
        $('.head__container').removeClass('open-window-search');
        $('.window-search').hide();
        $('.content').removeClass('content-raltive');
    }
});

$('.menu-map').on('click', function (e) {
    e.preventDefault();
    if (!$('.open-menu-map').length) {
        $('.head__container').addClass('open-menu-map');
        $('.close-map')[0].style.display = 'block';
        $('html').addClass('no-scroll');
    } else {
        $('.head__container').removeClass('open-menu-map');
        $('.close-map')[0].style.display = 'none';
        $('html').removeClass('no-scroll');
    }
});


$(document).on('click', function(e) {
    if (!$(e.target).closest('.clinic-card__popup-map').length && $('.open-clinic-map').length) {
        $('.clinics-map').removeClass('open-clinic-map');
        $('.close-clinic-map').css('display', 'none');
        $('html').removeClass('no-scroll');
    }
});

$('.clinic-card__popup-map').on('click', function(e) {
    e.stopPropagation();
    if (!$('.open-clinic-map').length) {
        $('.clinics-map').addClass('open-clinic-map');
        $('.close-clinic-map').css('display', 'block');
        $('html').addClass('no-scroll');
    } else {
        $('.clinics-map').removeClass('open-clinic-map');
        $('.close-clinic-map').css('display', 'none');
        $('html').removeClass('no-scroll');
    }
});


function showRecordForm() {
    $('body').addClass('show-record-form');
    document.getElementsByTagName("body")[0].style.overflow = 'hidden';
}

function hideForm() {
    $('body').removeClass('show-record-form');
    document.getElementsByTagName("body")[0].style.overflow = 'scroll';
}

$('.js-close-form').on('click', function (e) {
    e.preventDefault();
    $('body').addClass('show-close-form').removeClass('show-record-form');
    document.getElementsByTagName("body")[0].style.overflow = 'hidden';
});

$('.js-close-hint, .btn-emo').on('click', function (e) {
    e.preventDefault();
    $('body').removeClass('show-close-form show-record-form');
    document.getElementsByTagName("body")[0].style.overflow = 'scroll';
});

$('.js-pp-get-back').on('click', function() {
    showRecordForm();
    $('body').removeClass('show-close-form');
});

function showReviewForm() {
    $('body').addClass('show-review-form');
    document.getElementsByTagName("body")[0].style.overflow = 'hidden';
}

function hideReviewForm() {
    $('body').removeClass('show-review-form');
    document.getElementsByTagName("body")[0].style.overflow = 'scroll';
}

$('.js-close-review-form, .overlay').on('click', function (e) {
    hideReviewForm();
});


$('.js-record').on('click', function (e) {
    e.preventDefault();

    showRecordForm();

   /* var clinicId = $(this).data('clinic');
    var doctorId = $(this).data('doctor');

    var params = {clinic: clinicId, doctor: doctorId};
    var hiddenInput = $('.js-record-form input[name="params"]');

    hiddenInput.val(JSON.stringify(params));*/

});

$('.js-record-submit').on('click', function (e) {
    e.preventDefault();

    var form = $('.js-record-form form');

    $.ajax({
        url: '/record.php',
        method: 'POST',
        data: form.serialize(),
        success: function (data) {
            hideForm();
            alert(data.message);
        },
    });

});

/*
$(document).on('click', '.js-submit-btn', function (e) {
    e.preventDefault(e);
    var form = $(this).parent('.js-form');
    var url = '';
    if ($(this).data('request')) {
        url = $(this).data('request');
    }

    var success;
    if (url == '') {
        success = function (data) {
            popupInfo('Ваш отзыв принят к рассмотрению');
        };
    } else {
        success = function (data) {
            data = JSON.parse(data);

            if(typeof data.action !="undefined")
            {
                if(data.action == "preOrder")
                {
                    //открыть поле для смс
                    $(".sms-validate").css("display","block");
                    //заполнить поле requestId
                    $("[name='requestId']").val( data.requestId );

                }
                if(data.action == "smsNotValid")
                {
                    //открыть поле для смс
                    $(".sms-validate").val("");
                    $(".sms-validate-error").css("display","block");
                    //заполнить поле requestId
                    //$("[name='requestId']").val( data.requestId );

                }
                if(data.action == "orderDone"){
                    popupInfo(data.message);
                }
            }
            else{
                popupInfo(data.message);
            }
        }
    }

    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function (data) {
            success(data);
        },
    });
})

$('.js-submit-btn').on('click', function (e) {
    e.preventDefault(e);
    var form = $(this).parent('.js-form');
    var url = '';
    if ($(this).data('request')) {
        url = $(this).data('request');
    }

    var success;
    if (url == '') {
        success = function (data) {
            popupInfo('Ваш отзыв принят к рассмотрению');
        };
    } else {
        success = function (data) {
            data = JSON.parse(data);
            popupInfo(data.message);
        }
    }

    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function (data) {
            success(data);
        },
    });
})*/

$('body').on('input', '.js-form input', function (e) {

    var form = $(this).parents('.js-form');

    var name = form.find('input[name=name]').val().length;
    var phone = form.find('input[name=phone]').val().length;

    if (name && phone) {
        form.find('.js-submit-btn').removeClass('btn-disabled');
        form.find('.js-submit-btn').attr('disabled', false);
    } else {
        form.find('.js-submit-btn').addClass('btn-disabled');
        form.find('.js-submit-btn').attr('disabled', true);
    }
})

$('.js-more-reviews').on('click', function (e) {
    e.preventDefault();

    if ($(this).hasClass('disabled')) {
        return;
    }

    var self = this;
    $(self).addClass('disabled');
    $(self).prop('disabled', true);

    var count = $(this).data('count');

    var data = {
        clinicId: $(this).data('clinic'),
        doctorId: $(this).data('doctor'),
        offset: $(this).data('offset')
    };


    $.ajax({
        url: '/more-reviews',
        method: 'POST',
        data: data,
        success: function (data) {
            $(self).data('offset', data.offset);

            if (data.offset >= count) {
                $(self).remove();
            }

            var reviews = $(data.reviews).find('.review__doctors');
            var items = $('.api-items');

            reviews.each(function (index, item) {
                items.append(item);
            })

            $(self).removeClass('disabled');
            $(self).prop('disabled', false);
        }
    });

});

/*$(document).ready(function () {
    $('input[name="phone"]').inputmask("+7(999)-999-99-99");
});*/

$('.js-show-more-doctors').on('click', function (e) {
    e.preventDefault();

    $('.scateg-item.hide').each(function (index, value) {
        if (index <= 4) {
            $(value).removeClass('hide');
        }
    });

    if ($('.scateg-item.hide').length == 0) {
        $(this).remove();
    }

    var self = this;
    $(self).addClass('disabled');
    $(self).prop('disabled', true);
    if ($('.scateg-item.hide').length > 5) {
        $(this).text('Показать ещё 5');

    } else {
        $(this).text('Показать ещё ' + $('.scateg-item.hide').length);
    }
    $(self).removeClass('disabled');
    $(self).prop('disabled', false);
});


$('.js-show-block').click(function () {

    let target = $(this).data('target');
    let targetClass = $(this).data('class');

    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $("#" + target).fadeOut(300);
    } else {
        $(this).parent().find('.js-show-block').removeClass('active');
        $(this).addClass('active');

        $('.' + targetClass).fadeOut(50);
        $("#" + target).fadeIn(300);
    }
})


$('.js-show-serv').on('change', function () {
    let targetClass = $(this).data('class');
    let target = targetClass + '-' + $(this).val();

    $('.' + targetClass).fadeOut(50);
    $("#" + target).fadeIn(300);
})


$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

});

const onClickReview = function ({target: {dataset: {index}}}) {
    this[index].classList.toggle('deployed');
}.bind(document.querySelectorAll('.review-spoiler'));

document.querySelectorAll('.review-spoiler-btn').forEach((n, i) => {
    n.dataset.index = i;
    n.addEventListener('click', onClickReview);
});


const btnReview = document.querySelectorAll('.review-spoiler-btn');
for (let i = 0; i < btnReview.length; i++) {
    btnReview[i].addEventListener('click', function () {
        this.innerHTML =
            (this.innerHTML === 'Показать ещё отзывы') ? this.innerHTML = 'Свернуть' : this.innerHTML = 'Показать ещё отзывы';
    })

}


const onClick = function ({target: {dataset: {index}}}) {
    this[index].classList.toggle('deployed');
}.bind(document.querySelectorAll('.main-spoiler'));

document.querySelectorAll('.main-spoiler-btn').forEach((n, i) => {
    n.dataset.index = i;
    n.addEventListener('click', onClick);
});


const btn = document.querySelectorAll('.main-spoiler-btn');
for (let i = 0; i < btn.length; i++) {

    btn[i].addEventListener('click', function () {
        this.innerHTML =
            (this.innerHTML === 'Показать ещё') ? this.innerHTML = 'Свернуть' : this.innerHTML = 'Показать ещё';
    })

}

$('.js-review-rule input').on('change', function (e) {
    var disabled = false;

    $('.js-review-rule input').each(function (index, item) {
        if (!$(item).is(':checked')) {
            disabled = true;
        }
    });


    if (disabled) {
        if (!$('.js-send-review').hasClass('disabled')) {
            $('.js-send-review').addClass('disabled');
        }
    } else {
        $('.js-send-review').removeClass('disabled');
    }
});

$('.js-send-review').on('click', function (e) {
    e.preventDefault();
    if ($(this).hasClass('disabled')) {
        alert('Необходимо согласиться с правилами!');
    } else {

        var form = $('form.api_form');

        $.ajax({
            url: '/review',
            method: 'POST',
            data: form.serialize(),
            success: function (data) {
                if (data.result == 'success') {
                    $('.api_modal_close').trigger('click');
                }
                alert(data.message);
            },
        });


    }
});

$(".review-swiper").owlCarousel({
    items: 1,
    dots: true,
    nav: true,
    navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
});


$(".doctor-mob-swiper").owlCarousel({
    margin: 30,
    items: 1,
    dots: true,
    nav: true,
    navText: ["<div class='doctor-mob-arrow doctor-mob-arrow-left'></div>", "<div class='doctor-mob-arrow doctor-mob-arrow-right'></div>"],
});


$(".main-swiper").owlCarousel({
    items: 3,
    dots: true,
    nav: true,
    navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
});

$(".photo-swiper").owlCarousel({
    startPosition: 1,
    center: true,
    stagePadding: 10,
    dots: true,
    nav: true,
    navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
    items:2,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }
});

$(".photo-mob-swiper").owlCarousel({
    margin: 30,
    items: 1,
    nav: true,
    navText: ["<div class='photo-mob-arrow photo-mob-arrow-left'></div>", "<div class='photo-mob-arrow photo-mob-arrow-right'></div>"],
});

$(".mob-review-swiper").owlCarousel({
    margin: 30,
    items: 1,
    dots: true,
});

$(".license-clinic-swiper").owlCarousel({
    margin: 30,
    dots: true,
    startPosition: 1,
    center: true,
    items: 3,
});

$(".photo-clinic-swiper").owlCarousel({
    startPosition: 1,
    center: true,
    items: 3,
    stagePadding: 70,
    loop:true,
    margin:10,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

$(".mob-swiper").owlCarousel({
    center: true,
    items: 1,
    loop: false,
    margin: 10,
    autoHeight: true,
});

$(".date-swiper").owlCarousel({
    margin: 30,
    items: 1,
    nav: true,
    navText: ["<div class='date-desk-arrow date-desk-arrow-left'></div>", "<div class='date-desk-arrow date-desk-arrow-right'></div>"],
});

$(".date-clinic-swiper").owlCarousel({
    margin: 30,
    items: 1,
    dots: false,
    nav: true,
    navText: ["<div class='date-clinic-arrow date-clinic-arrow-left'></div>", "<div class='date-clinic-arrow date-clinic-arrow-right'></div>"],
});

$(".date-mob-swiper").owlCarousel({
    margin: 30,
    items: 1,
    dots: true,
    nav: true,
    navText: ["<div class='date-arrow date-arrow-left'></div>", "<div class='date-arrow date-arrow-right'></div>"],
});

/*карточка клиники популярные услуги*/
$(".services-clinic-swiper").owlCarousel({
    items: 3,
    nav: true,
    dots: false,
    navText: ["<div class='service-arrow service-arrow-left'></div>", "<div class='service-arrow service-arrow-right'></div>"],
});

/*карточка клиники */
$(".clinic-additional-swiper").owlCarousel({
    items: 3,
    nav: true,
    dots: false,
    navText: ["<div class='clinic-additional-arrow clinic-additional-arrow-left'></div>", "<div class='clinic-additional-arrow clinic-additional-arrow-right'></div>"],
});


$('.time-spoiler-btn').on('click', function (e) {
    e.preventDefault();

    let parent = $(this).parents('.time-spoiler');
    parent.toggleClass('deployed');

    let btn = $(this).children('.js-show-more-time');
    btn.toggleClass('active-time');
});

$('.js-drop-btn').on('click', function (e) {
    var parent = $(this).parent('.js-dropdown-clinic');
    var content = parent.find('.js-dropdown-items');

    content.toggleClass('show');
    $(this).toggleClass('reverse-arrow');
});


$('.js-dropdown-item').on('click', function (e) {
    e.preventDefault();
    var text = $(this).text();
    var parent = $(this).parents('.js-doctor-right');
    parent.find('.js-drop-btn span').text(text);


    var btn = parent.find('.js-drop-btn');
    btn.toggleClass('reverse-arrow');

    var content = parent.find('.js-dropdown-items');
    content.toggleClass('show');

    parent.find('.js-dropdown-content').hide();

    var target = parent.find(".js-dropdown-content[data-target='" + $(this).data('target') + "']");
    target.show();
});

$(".appointment-date").each(function () {
    var scrollup = $(this).find(".js-scrollup");
    var scrolldown = $(this).find(".js-scrolldown");
    var scrollable = $(this).find(".js-scrollable");

    scrollup.on('click', function () {
        scrollable.animate({ scrollTop: scrollable.scrollTop() - 50 }, 'slow');
    });
    scrolldown.on('click', function () {
        scrollable.animate({ scrollTop: scrollable.scrollTop() + 50 }, 'slow');
    });


});

const dateRelink = document.querySelectorAll('.js-date-relink');
const appointmentSchedules = document.querySelectorAll('.js-appointment-schedule');

dateRelink.forEach(item => {
    item.addEventListener('click', (e) => {
        dateRelink.forEach(el => {
            el.classList.remove('active-date');
        });
        item.classList.add('active-date');

        const selectedDay = item.getAttribute('data-day');
        appointmentSchedules.forEach(schedule => {
            if (schedule.getAttribute('data-day') === selectedDay) {
                schedule.style.display = 'block';
            } else {
                schedule.style.display = 'none';
            }
        });
    });
});


$('.search-form').on('submit', function (e) {
    if ($('.js-search-input').val().length == 0) {
        e.preventDefault();
    }
});

/*$('.button-escape, .overlay').on('click', function (e) {
    hideForm();
    hideReviewForm();
});*/

/*$('.js-close-form, .overlay').on('click', function (e) {
    hideForm();
});

$('.button-escape, .overlay').on('click', function (e) {
    hideForm();
});*/

$('.js-review').on('click', function (e) {
    e.preventDefault();

    showReviewForm();

    var clinicId = $(this).data('clinic');
    var doctorId = $(this).data('doctor');

    var params = {clinic: clinicId, doctor: doctorId};
    var hiddenInput = $('.js-review-form input[name="params"]');

    hiddenInput.val(JSON.stringify(params));

});


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

//?==============<Limit services>==============

function limitServices() {
    const servicesLists = document.querySelectorAll('[data-services-list]');

    if (!servicesLists) return;

    servicesLists.forEach(servicesList => {
        const servicesListColumns = servicesList.dataset.servicesList;
        const servicesListItems = servicesList.querySelectorAll('.services__fold');

        if (!MEDIA_QUERY_768.matches) {
            servicesListItems.forEach((item, i) => {
                if (i > 5 * servicesListColumns - 1) {
                    item.setAttribute('data-fold-content', '')
                    item.classList.add('is-folded');
                }
            })
        } else {
            servicesListItems.forEach((item, i) => {
                if (i > 2) {
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
        const spoilerContent = spoiler.querySelectorAll('[data-fold-content]');

        spoilerContent.forEach(content => {
            heightToggleElement(spoilerBtn, content);
        })

    })

}

initFoldElements();

//?==============</Fold elements>=============

const doctorsWorkSchedulesTimeContainers = document.querySelectorAll('.js-schedule-time-container');

if (doctorsWorkSchedulesTimeContainers.length > 0) {
    doctorsWorkSchedulesTimeContainers.forEach(container =>{
        const elems = container.querySelectorAll('.schedule__item');
        if (elems.length > 8) {
            elems.forEach((t, index) => {
                if (index < 7) {
                    t.classList.add('schedule__item_active');
                }
            });
            container.insertAdjacentHTML('beforeend', `<div class="col"><button class="schedule__time-btn schedule__time-btn_add"><i class="arrow-down-blue-ico"></i></button></div>`);
        } else {
            elems.forEach((t) => {
                t.classList.add('schedule__item_active');
            });
        }

        container.classList.add('schedule__time-container_active');
    });

    const timeBtnsAdd = document.querySelectorAll('.schedule__time-btn_add');
    if (timeBtnsAdd) {
        timeBtnsAdd.forEach(btn=>{
            let scheduleTimes = btn.closest('.schedule__time-container').querySelectorAll('.schedule__item');

            btn.addEventListener('click',()=>{
                if(btn.classList.contains('schedule__time-btn_add_open')) {
                    scheduleTimes.forEach((t,index)=>{
                        if(index > 6) {
                            t.classList.remove('schedule__item_active');
                        }
                    });
                    btn.classList.remove('schedule__time-btn_add_open');
                } else {
                    scheduleTimes.forEach(t=>{
                        t.classList.add('schedule__item_active');
                    });
                    btn.classList.add('schedule__time-btn_add_open');
                }
            });
        });
    }
}