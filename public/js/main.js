$(window).on('load', () => {

    //_________PRELOADER____________
    $('.preloader__logo').css({
        opacity: '1',
    })

    $('.preloader__bu').css({
        opacity: '1',
    })


    setTimeout(() => {
        $('.preloader').fadeOut(700)
        $('body').css('overflow', 'visible')
    }, 1500)

    setTimeout(() => {
        $('.main__logo').css({
            opacity: '1',
            transform: 'none'
        })
   }, 2000)

   setTimeout(() => {
        $('.main__title').css({
            opacity: '1',
            transform: 'none'
        })
    }, 2500)
    

    //__ FEEDBACK ___

    $('.feedback-open').click(e => {
        e.preventDefault()
        $('.feedback-call').fadeIn(700)
    })
    
    $('.feedback-close').click(e => {
        e.preventDefault()
        $('.feedback').fadeOut(700)
    })
    

    $('.feedback').click(e => {
        let div = $(".feedback-content");
        if (!div.is(e.target) 
            && div.has(e.target).length === 0) { 
            $('.feedback').fadeOut(600); 
        }
    })
    

    //__ CUSTOM SELECT___

    $('.customSelect').customSelect();


    //___RANGE SLIDER______

    $('.customRange input').map((index, item) => {
        let val = ($(item).val() - $(item).attr('min')) / ($(item).attr('max') - $(item).attr('min'));
        let percent = val * 100;

        $(item).css('background-image',
            '-webkit-gradient(linear, left top, right top, ' +
            'color-stop(' + percent + '%, #DEDAD4), ' +
            'color-stop(' + percent + '%, #FFF)' +
            ')');

        $(item).css('background-image',
            '-moz-linear-gradient(left center, #DEDAD4 0%, #DEDAD4 ' + percent + '%, #fff ' + percent + '%, #fff 100%)');   
        $(item).parents('.choose-filter__item').find('.choose-filter__input span').text($(item).val()) 
    })

    let inputBg = (element, handle) => {
        $(element).on(`${handle}`, function () {

            let percent
            let val

            val = ($(element).val() - $(element).attr('min')) / ($(element).attr('max') - $(element).attr('min'));
            percent = val * 100;

            $(element).css('background-image',
                '-webkit-gradient(linear, left top, right top, ' +
                'color-stop(' + percent + '%, #DEDAD4), ' +
                'color-stop(' + percent + '%, #FFF)' +
                ')');
        
            $(element).css('background-image',
                '-moz-linear-gradient(left center, #DEDAD4 0%, #DEDAD4 ' + percent + '%, #FFF ' + percent + '%, #FFF 100%)');
            $(element).parents('.choose-filter__item').find('.choose-filter__input span').text($(element).val())
        })
    }

    $('.customRange input').on('input', function() { 
        inputBg( this, `input`)
    }) 


    // PARALLAX

    $('.jarallax').jarallax()

    $(window).on('scroll load', () => {
    
    
        let scroll = $(window).scrollTop()
        let scrollSize = $(window).height()/10

        if(scroll > scrollSize) {
            $('.header').addClass('header-fixed')
    
        } else {
            $('.header').removeClass('header-fixed')
        }

    
        
        // _____MAIN PARALLAX_____
    
        $('.main__bg').css('transform', `translateY(${scroll/100}rem)`)
     
    })

    //_______FLAT_____

    $('.choose-item').click(function() {
        $('.flat').fadeIn(600)
        let number = $(this).find('.choose-item__number').text()
        let title = $(this).find('.choose-item__name').text()
        let text = $(this).find('.choose-item__info').text()
        let rooms = $(this).find('.choose-item__rooms').html()


        $('.flat__title').text(title)
        $('.flat__text').text(text)
        $('.flat__rooms').html(rooms)

        $('.feedback-flat .feedback-wrap .feedback__text span').text(number)
        $('.feedback-flat .form__flat').val(number)
    })

    $('.flat-close').click(e => {
        e.preventDefault()
        $('.flat').fadeOut(600)
    })
    

    $('.flat').click(e => {
        let div = $(".flat-content");
        if (!div.is(e.target) 
            && div.has(e.target).length === 0) { 
            $('.flat').fadeOut(600)
        }
    })

    $('.flat-btn').click(e => {
        e.preventDefault()
        $('.flat').fadeOut(600)
        $('.feedback-flat').fadeIn(600)
    })

    //_______GENPLAN______


    function init() {
        if (document.layers) document.captureEvents(Event.MOUSEMOVE);
        document.onmousemove = mousemove;
    }

        function mousemove(event) {
        var mouse_x = mouse_y = 0;
        if (document.attachEvent != null) {
            mouse_x = window.event.clientX;
            mouse_y = window.event.clientY;
        } else if (!document.attachEvent && document.addEventListener) {
            mouse_x = event.clientX;
            mouse_y = event.clientY;
        }

        $('.genplan-popup').css('top', mouse_y+'px');
        $('.genplan-popup').css('left', mouse_x+'px');
    }

    init()

    $('.genplan svg path').mouseenter(function() {
        $('.genplan-popup').css({
            opacity: '1',
            visibility: 'visible'
        })

        console.log(1)

        $('.genplan-popup__phase span').text($(this).data('phase'))
        $('.genplan-popup__house span').text($(this).data('house'))
    })

    $('.genplan svg path').mouseleave(function() {
        $('.genplan-popup').css({
            opacity: '0',
            visibility: 'hidden'
        })
    })

    $('.genplan').scroll(() => {
        $('.genplan-popup').css({
            opacity: '0',
            visibility: 'hidden'
        })
    })


    //_______WOWJS________

    new WOW({
        offset: 50 
    }).init();




    //_______INPUTMASK_______


    $('.form__tel').inputmask("+\\9\\98 999 99 99")

})