jQuery(document).ready(function () {

//faq
 $(".faq-item > span").click(function(){
       $(this).next().fadeToggle();
       $(this).toggleClass('active');
    });

var data = location.search.substring(1).split('&'), s = '';
    while(d = data.shift()) {
        d = d.split('=');
        s +=  d[1];
    }
    if (s === "min"){
        $("#min > span").click();
    }
    if (s === "pay"){
        $("#pay > span").click();
    }
    if (s === "sale"){
        $("#sale > span").click();
    }

    // Link Smooth Scrool
    var params = window
        .location
        .search
        .replace('?', '')
        .split('&')
        .reduce(
            function (p, e) {
                var a = e.split('=');
                p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                return p;
            },
            {}
        );

    if (params['target']) {
        $('html,body').animate({
            scrollTop: $('#' + params['target']).offset().top
        }, 2000);
    }

$('.rs-carousel-item').swipeleft(function () {
        $('body').css('overflow', 'fixed');
    });

    $('.info-modal-box').swipeleft(function () {
        $('body').css('overflow', 'fixed');
    });

    $('.rs-carousel-item').swiperight(function () {
        $('body').css('overflow', 'fixed');
    });

    $('.rs-carousel-item').swipeend(function () {
        $('body').css('overflow', 'scroll');
    });

    $('.info-modal-box').swipeleft(function (e) {
        e.preventDefault();
        return false
    });
    $('.info-modal-box').swiperight(function (e) {
        e.preventDefault();
        return false
    });


    $('.carousel-center').swipeleft(function (e) {
        $('body').css('overflow', 'hidden');
        console.log('swipeleft');
    });

    $('.carousel-center').swiperight(function (e) {
        $('body').css('overflow', 'hidden');
        console.log('swiperight');
    });

    $('.carousel-center').swipeend(function (e) {
        console.log('swipeend');
        $('body').css('overflow', 'scroll');
    });


    /*$('.carousel-center').tapstart(function (e) {
        $('body').css('overflow', 'hidden');
        console.log('tapstart');
    });
    $('.carousel-center').tapend(function (e) {
        console.log('tapend');
        $('body').css('overflow', 'scroll');
    });
*/

    $('.thks-modal-info .modalClose').on('click', function () {
        $('.thks-modal-bg').removeClass('show');
        showHideThksModal();
        hideForm()
    })

    $('body').on('mousedown', '.carousel-center', function (e) {
        e.preventDefault();
    });


    // $(".owl-carousel").owlCarousel();

    $('.slider-slider-slick').on('swipe', function () {
        $(this).slick('slickPause');
    });

    jQuery(window).on('load resize', function () {

        //text-overflow
        if (jQuery('.translation').length > 0) {
            var translations = jQuery('.translation');

            translations.each(function () {
                var tranTitle = jQuery(this).find('.title').text(),
                    tranText = jQuery(this).find('.text').text(),
                    tranParrent;
                if (jQuery(this).parents('.main-section-elem').length > 0) {
                    tranParrent = jQuery(this).parents('.main-section-elem');
                } else if (jQuery(this).parents('.main-news-row').length > 0) {
                    tranParrent = jQuery(this).parents('.main-news-row');
                }
                tranParrent.find('.title:eq(0)').text(tranTitle);
                tranParrent.find('.text:eq(0)').text(tranText);
                tranParrent.find('.text:eq(0)').dotdotdot({wrap: 'letter'});
            });
        }
        ;

    });

    jQuery(document).click(function (e) {
        if (jQuery(e.target).closest('.header-burger').length) return;
        jQuery('.header-burger').removeClass('show');
        jQuery('.mobile-submenu').height(0);
        e.stopPropagation();
    });


    jQuery('.sprite-burger').click(function () {
        jQuery(this).parent().toggleClass('show');
        jQuery('.jivo_online').toggleClass('light-bg');
        jQuery('.mobile-submenu').height(0)
    });

    jQuery('.mobile-menu-item').click(function () {
        if (jQuery(this).children('.mobile-submenu').height() > 0) {
            jQuery('.mobile-submenu').height(0);
            return;
        }
        jQuery('.mobile-submenu').height(0);
        var elem = jQuery(this).find('.mobile-submenu-item'),
            hElem = elem.outerHeight(true),
            count = elem.length,
            h = hElem * count;
        jQuery(this).children('.mobile-submenu').height(h);
    });

    function getDarkBgInElem(thisElem) {
        if (jQuery('html').hasClass('show')) {
            jQuery('html').removeClass('show');
            jQuery('.modalBG').removeClass('show');
        } else {
            if (jQuery(thisElem).parents('.modalBG').length > 0) {
                jQuery('html').addClass('show');
                jQuery(thisElem).parents('.modalBG').addClass('show');
            } else if (jQuery(thisElem).children('.modalBG').length > 0) {
                jQuery('html').addClass('show');
                jQuery(thisElem).children('.modalBG').addClass('show');
            }
            ;
        }
        ;
    };

    jQuery('.modalClose').click(function () {
        jQuery(this).parents('.modal').removeClass('show');
        getDarkBgInElem(this);
        jQuery('html').removeClass('show');
        jQuery('.thks-modal-bg').removeClass('show');
    });

    jQuery('.modalBG')
        .click(function () {
            jQuery('.modal').removeClass('show');
            jQuery('html').removeClass('show');
            jQuery('.modalBG').removeClass('show');
        })
        .children()
        .click(function (e) {
            e.stopPropagation();
        });

    jQuery('.header-mail').click(function () {
        if (jQuery('.modal-header-mail').hasClass('show')) {
            jQuery('.modal-header-mail').removeClass('show');
            jQuery('html').removeClass('show');
            jQuery('.modalOrdBG').removeClass('show');
        } else {
            jQuery('.modal-header-mail').addClass('show');
            jQuery('html').addClass('show');
            jQuery('.modalOrdBG').addClass('show');
        }
        ;

    });

    jQuery('.main-section-elem')
        .click(function () {
            if (jQuery(this).hasClass('rs-carousel-item') && !jQuery(this).hasClass('rs-carousel-item-active')) {
                if (jQuery(this).parent().children().last().hasClass('rs-carousel-item-active')) {
                    jQuery(this).parents('.carousel-center:eq(0)').carousel('prev');
                } else {
                    jQuery(this).parents('.carousel-center:eq(0)').carousel('next');
                }
                ;
            } else {
                jQuery(this).find('.modal').addClass('show');
                getDarkBgInElem(this);
            }
        })
        .children('.modalBG')
        .click(function (e) {
            e.stopPropagation();
        });

    // jQuery('.main-section-cost-25')
    //     .click(function () {
    //         if (jQuery(this).hasClass('rs-carousel-item') && !jQuery(this).hasClass('rs-carousel-item-active')) {
    //             if (jQuery(this).parent().children().last().hasClass('rs-carousel-item-active')) {
    //                 jQuery(this).parents('.carousel-center:eq(0)').carousel('prev');
    //             } else {
    //                 jQuery(this).parents('.carousel-center:eq(0)').carousel('next');
    //             }
    //             ;
    //         }
    //     });
    //
    // jQuery('.main-section-cost-50')
    //     .click(function () {
    //         if (jQuery(this).hasClass('rs-carousel-item') && !jQuery(this).hasClass('rs-carousel-item-active')) {
    //             if (jQuery(this).parent().children().last().hasClass('rs-carousel-item-active')) {
    //                 jQuery(this).parents('.main-section-row-cost-50:eq(0)').carousel('prev');
    //             } else {
    //                 jQuery(this).parents('.main-section-row-cost-50:eq(0)').carousel('next');
    //             }
    //             ;
    //         }
    //     });

    jQuery('.main-section-50 .example-slider .slick-slide')
        .click(function () {
            if (window.innerWidth > 650) {
                jQuery(this).parents('.main-section-50').find('.modal').addClass('show');
                jQuery('html').addClass('show');
                jQuery(this).parents('.main-section-50').find('.modalBG').addClass('show');
            }
            ;
        })
        .children('.modalBG')
        .click(function (e) {
            e.stopPropagation();
        });


    jQuery('.slider-slider-btn').click(function () {
        var index = jQuery(this).parent().index() - 1;
        var modalBG = jQuery(this).parents('.slider-slider').find('.modalBG:eq(' + index + ')');
        modalBG.find('.modal').addClass('show');
        jQuery('html').addClass('show');
        modalBG.addClass('show');
    });

    jQuery('.main-news-btn').click(function () {
        jQuery(this).parents('.main-news-row').find('.modal').addClass('show');
        jQuery('html').addClass('show');
        jQuery(this).parents('.main-news-row').find('.modalBG').addClass('show');
    });


    //in product page
    if (jQuery('.printer-row').length > 0) {

        function resultPrice() {
            jQuery('.printer-row-info').each(function () {
                var onePrice = jQuery(this).find('.color-value.active').data('oneprice'),
                    count = jQuery(this).find('.count .result').text(),
                    result = onePrice * count;
                jQuery(this).find('.product-price .price').text(result);
            });
        };
        resultPrice();

        function prodInfo(t) {
            if (t) {
                t = t.parents('.printer-row-info');
            } else {
                t = jQuery('.printer-row-info');
            }
            ;

            jQuery(t).each(function () {
                var imgUrl = jQuery(this).find('.color-value.active').data('url'),
                    colorTitle = jQuery(this).find('.color-value.active').attr('title');
                jQuery(this).find('.printer-row-info-img img').attr('src', imgUrl);
                jQuery(this).find('.color-title .value').text(colorTitle);
            });
        };
        prodInfo();

        jQuery('.color-value').click(function () {
            if (!jQuery(this).hasClass('active')) {
                jQuery(this).siblings().removeClass('active');
                jQuery(this).addClass('active');
                prodInfo(jQuery(this));
                resultPrice(jQuery(this));
            }
            ;
        });

        jQuery('.count .minus').click(function () { // count product page
            var text = jQuery(this).parent('.count').children('.result').text();

            if (text > 1) {
                text--;
                jQuery(this).parent('.count').children('.result').text(text);
            }
            ;
            resultPrice();
        });

        jQuery('.count .plus').click(function () { // count product page
            var text = jQuery(this).parent('.count').children('.result').text();

            if (text < 1000) {
                text++;

                jQuery(this).parent('.count').children('.result').text(text);
            }
            ;
            resultPrice();
        });

        jQuery('.product-btn').click(function () {
            jQuery(this).next().find('.modal').addClass('show');

            jQuery('html').addClass('show');

            jQuery(this).next('.modalBG').addClass('show');

            var color = jQuery(this).parents('.printer-row-info-text').find('.color-value.active').attr('title'),
                count = jQuery(this).parents('.printer-row-info-text').find('.count .result').text(),
                price = jQuery(this).parents('.printer-row-info-text').find('.product-price .price').text();
            jQuery('#product-form-color').val(color);
            jQuery('#product-form-count').val(count);
            jQuery('#product-form-price').val(price);
        });

    }
    ;

    jQuery('#product-form-phone').mask('+7(999) 999-9999');

    if (jQuery('.mobile-accordeon').length > 0) {
        jQuery('.mobile-accordeon .main-section-50').click(function () {
            if (!jQuery(this).hasClass('accordeon-active')) {
                jQuery(this).parent().children('.main-section-50').removeClass('accordeon-active');
                jQuery(this).addClass('accordeon-active');
            }
        });
    }
    ;

    jQuery(window).on('load resize', function () {
        if ((jQuery('.carousel-center').length > 0) && (jQuery(window).width() <= 960) && (!jQuery('.carousel-center').hasClass('rs-carousel'))) {
            jQuery('.carousel-center').each(function () {
                jQuery('.carousel-center').carousel({
                    runner: '> div',
                    items: '> div',
                    pagination: false,
                    touch: true,
                    nextPrevActions: false
                });
            });
        } else if ((jQuery('.carousel-center').length > 0) && (jQuery(window).width() > 960) && (jQuery('.carousel-center').hasClass('rs-carousel'))) {
            jQuery('.carousel-center').each(function () {
                jQuery(this).carousel('destroy');
            });
        } else if ((jQuery('.carousel-center').length > 0) && (jQuery(window).width() <= 960) && (jQuery('.carousel-center').hasClass('rs-carousel'))) {
            jQuery('.carousel-center').each(function () {
                jQuery(this).carousel('refresh');
            });
        }
        ;

        if ((jQuery(window).width() <= 480) && (jQuery('.main-section-row-cost-50').length > 0)) {
            jQuery('.main-section-row-cost-50').carousel({
                runner: '> div',
                items: '> div',
                pagination: false,
                touch: true,
                nextPrevActions: false
            });
        } else if ((jQuery('.main-section-row-cost-50').hasClass('rs-carousel')) && (jQuery(window).width() <= 480)) {
            jQuery('.main-section-row-cost-50').carousel('refresh');
        } else if (jQuery('.main-section-row-cost-50').hasClass('rs-carousel')) {
            jQuery('.main-section-row-cost-50').carousel('destroy');
        }
        ;

    });

    // capcha
    function getRandom(min, max) {
        var result = Math.floor(Math.random() * max) + min;
        return result;
    };

    jQuery('.form-capcha-numb').each(function () {
        var rand = getRandom(0, 9);
        jQuery(this).html(rand);
    });


// mail
    var i, n, forms; // inputs
    forms = document.getElementsByClassName('send-form');
    for (i = 0, n = forms.length; i < n; i++) {
        forms[i].onsubmit = sendMail;
    }
    ;
});

//get file name
function getFileName() {
    var fi = document.getElementById('inputFile');
    var resStr = document.querySelector('.file-wrap').lastElementChild;

    // VALIDATE OR CHECK IF ANY FILE IS SELECTED.
    if (fi.files.length > 0) {

        var fsize = fi.files.item(0).size / 1024 / 1024;
        var fname = fi.files.item(0).name;

        resStr.textContent = fname;

        if (fsize >= 15.1) {
            alert('Файлы свыше 15Мб - отправляйте на info@3dcrafter.ru');
        }
        ;
    } else {
        resStr.textContent = 'Прикрепить файл';
    }
    ;
};

function isFileSize() {
    var fi = document.getElementById('inputFile');
    if (fi.files.length > 0) {
        var fsize = fi.files.item(0).size / 1024 / 1024;
        console.log(fsize);
    }
    ;
    if (fsize >= 15.1) {
        sendMessage('Файлы свыше 15Мб - отправляйте на info@3dcrafter.ru!', 'error');
        return false;
    } else {
        return true;
    }
    ;
};

//close thks modal
function showHideThksModal() {
    $('.thks-modal-bg').toggleClass('show');
    $('.thks-modal-info').toggleClass('show');
    $('.thks-modal-bg').toggleClass('hide-thks');
    $('.thks-modal-info').toggleClass('hide-thks');
}
function hideForm () {
    jQuery('.modal-header-mail').removeClass('show');
    jQuery('html').removeClass('show');
    jQuery('.modalOrdBG').removeClass('show');
}

var sendMessage = function (text, type) {
    var message, text;
    while (document.getElementById('modal-message')) {
        document.getElementById('modal-message').remove();
    }
    setTimeout(function () {
        message = document.createElement('div');
        message.id = 'modal-message';
        message.classList.add(type);
        // message.innerHTML = '<div class="text">' + text + '</div>';
        // setTimeout(function () {
        //     message.classList.add('visible');
        // }, 10);
        // message.onclick = function () {
        //     var th = this;
        //     this.classList.remove('visible');
        //     setTimeout(function () {
        //         th.remove();
        //     }, 500);
        // }
        // document.body.appendChild(message);
    }, 10);
};

var sendMail = function () {
    var inputs, i, n, ajax, formData, form, capcha, numbElem, numb = 0;
    formData = new FormData();
    capcha = this.querySelector('.form-capcha-answer').value;

    numbElem = this.getElementsByClassName('form-capcha-numb');
    for (var i = 0; i < numbElem.length; i++) {
        numb = numb + +numbElem[i].innerHTML;
    }
    ;

    if (capcha != numb) {
        sendMessage('Ответ неверный!', 'error');
        return false;
    }
    ;

    inputs = this.getElementsByClassName('form-input');
    for (i = 0, n = inputs.length; i < n; i++) {
        inputId = inputs[i].getAttribute('id');
        if (inputId == 'inputFile' && !isFileSize()) {
            //console.log('файл больше 15мб');
            return false;
        } else if (inputId == 'inputFile') {
            //console.log('файл меньше 15 мб');
            formData.append(inputs[i].name, inputs[i].files[0]);
        } else {
            //console.log('обычное поле');
            formData.append(inputs[i].name, inputs[i].value);
        }
        ;
    }
    ;

    ajax = new XMLHttpRequest();
    ajax.open('POST', 'php/send.php');
    form = this;
    ajax.onreadystatechange = function () {
        var obj;
        if (ajax.readyState !== 4 || ajax.status != 200) return;
        if (ajax.readyState === 4 && ajax.status != 200) {
            sendMessage('При отправке сообщения произошла ошибка', 'error');
        } else {
            showHideThksModal();
            hideForm();
            obj = JSON.parse(ajax.responseText);
            sendMessage(obj.text, obj.type);
//			if (obj.type === "success") {
//				form.reset();
//			}
        }
    };
    ajax.send(formData);
    return false;
};