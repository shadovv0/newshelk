$('.show-specs').on('click', function (e) {
    e.preventDefault();
    $('.left-sidebar').addClass('show-sidebar');
    $('.fancybox-close-small, .overlay').on('click', function (e) {
        hideForm();
    });
});
//left sidebar
$('.left-sidebar').click(function (e) {
    e.stopPropagation();
});
$('.left-sb-btn').click(function (e) {
    e.stopPropagation();
    if (!$('.left-sidebar-visible').length) {
        if ($('.top-menu-visible').length) {
            $('.menu-btn:visible').click();
        }
        $('.left-sidebar').animate({
            left: 0
        });
        $('body').addClass('left-sidebar-visible');
    } else {
        $('.left-sidebar').animate({
            left: -275
        });
        $('body').removeClass('left-sidebar-visible');
    }
    return false;
});
$('.left-sidebar .close').click(function (e) {
    $('.left-sb-btn').click();
});
$(document).on('click', '.left-sidebar-visible', function () {
    $('.left-sb-btn').click();
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

$('.left-menu-close').on('click', function (e) {
    e.preventDefault();
    $('.show-sidebar').toggleClass('show-sidebar');
});


$('.menu-btn').click(function (e) {
    e.stopPropagation();
    if (window.innerWidth < 880) {
        if (!$('.top-menu-visible').length) {
            if ($('.left-sidebar-visible').length) {
                $('.left-sb-btn').click();
            }
            $('.top-menu__wrap').animate({
                left: 0
            });
            $('body').addClass('top-menu-visible');
        } else {
            $('.top-menu__wrap').animate({
                left: -275
            });
            $('body').removeClass('top-menu-visible');
        }
    } else {
        $('body').click(function (e) {
            if ($('.top-menu').hasClass('active')) {
                $('.menu-btn').click();
            }
        });
        if (!$('.top-menu').hasClass('active')) {
            $('.top-menu').addClass('active');
            $('.top-menu .wrap').animate({
                height: 570
            }, 300);
            $('.top-menu .sub-menu').delay(100).slideDown(200);
        } else {
            $('.top-menu .sub-menu').slideUp(300);
            $('.top-menu .wrap').animate({
                height: 51
            }, 300, function () {
                $('top-menu').removeClass('active');
            });
        }
    }
    return false;
});
$('.top-menu__wrap .close').click(function (e) {
    $('.menu-btn:visible').click();
});
$(document).on('click', '.top-menu-visible', function () {
    $('.menu-btn:visible').click();
});


function showRecordForm() {
    $('body').addClass('show-record-form');
}

function hideForm() {
    $('body').removeClass('show-record-form');
}

$('.js-record').on('click', function (e) {
    e.preventDefault();

    showRecordForm();

    var clinicId = $(this).data('clinic');
    var doctorId = $(this).data('doctor');

    var params = {clinic: clinicId, doctor: doctorId};
    var hiddenInput = $('.js-record-form input[name="params"]');

    hiddenInput.val(JSON.stringify(params));

});

$('.js-record-submit').on('click', function (e) {
    e.preventDefault();

    var form = $('.js-record-form form');

    $.ajax({
        url: '/record',
        method: 'POST',
        data: form.serialize(),
        success: function (data) {
            hideForm();
            alert(data.message);
        },
    });

});


$('.js-close-form, .overlay').on('click', function (e) {
    hideForm();
});

$('.button-escape, .overlay').on('click', function (e) {
    hideForm();
});

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


$(document).ready(function () {
    $('input[name="phone"]').inputmask("+7(999)-999-99-99");
});


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

$('.mobile-spoiler-btn').on('click', function (e) {
    e.preventDefault();
    var target = $(this).data('target');

    $('.mobile-spoiler[data-id="' + target + '"]').css('height', 'auto');

    $(this).hide();
})


$('.main-spoiler-btn').on('click', function (e) {
    e.preventDefault();
    let target = $(this).data('target');

    $('.main-spoiler[data-id="' + target + '"]').css('height', 'auto').addClass('deployed');

    $(this).hide();
});


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


$('.search-form').on('submit', function (e) {
    if ($('.js-search-input').val().length == 0) {
        e.preventDefault();
    }
});