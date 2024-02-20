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
})

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

$('.js-form .rate-block li').on('click', function () {
    $(this).removeClass('empty');
    $(this).prevAll('li').removeClass('empty');
    $(this).nextAll('li').addClass('empty');

    $(this).siblings('input').val($(this).prevAll('li').length + 1);
});


function popupInfo(message) {
    message = message || null;
    $('.popup:visible').fadeOut(200);
    var popup = $('.popup.pp-info');
    popup.appendTo("body");
    if (message) {
        popup.find('.pp-title').html(message);
    }
    var top = $(window).scrollTop() - 30;
    if ($(window).width() <= popup.outerWidth()) {
        popup.css({"width": $(window).width() - 50, "height": $(window).height() - 20});
    }
    popup.css({
        left: ($(window).width() - popup.outerWidth()) / 2,
        top: $(window).scrollTop() + 30
    });
    popup.fadeIn(200);
}*/
