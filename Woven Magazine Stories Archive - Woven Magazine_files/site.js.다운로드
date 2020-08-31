jQuery(document).ready(function($) {


    // alt sticky
    function get_element_bottom_from_top($element) {
      var height = parseInt($element.height(), 10)
      var top = parseInt($element.offset().top, 10)

      return height + top
    }

    function apply_transform($elements, offset) {
      $elements.each(function () {
        $(this).css({
          'transform': 'translateY('+ offset +'px) translateZ(0)'
        })
      })
    }

    function reset_transforms($elements) {
      $elements.each(function () {
        $(this).removeAttr('style')
      })
    }

    var raf = window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    window.oRequestAnimationFrame;

    var $window = $(window)
    var window_height = $(window).height()
    var lastPosition = window.pageYOffset

    var $sticky_one = $('.view-single-article-alt__gallery')
    var $sticky_two = $('.view-single-article-alt__content')
    var $sticky_group_one = $('.will-transform-group-1')

    if ($sticky_one.length > 0) {

      var gallery_threshold = undefined
      var article_threshold = undefined

      var gallery_overage = undefined
      var article_overage = undefined

      $('#single-article-alt').imagesLoaded(function () {
        var gallery_position = get_element_bottom_from_top($sticky_one)
        var article_position = get_element_bottom_from_top($sticky_two)

        var gallery_taller = gallery_position > article_position

        var previous_position = 0

        function loop() {
          var position = window.pageYOffset

          if (position === lastPosition) {
            raf(loop)
            return
          } else {
            lastPosition = position
            efficient()
            raf(loop)
          }
        }

        function efficient () {
          var buffer = 25
          var position = window.pageYOffset
          gallery_threshold = gallery_position - window_height + buffer
          article_threshold = article_position - window_height + buffer

          gallery_overage = position - gallery_threshold
          article_overage = position - article_threshold

          if (gallery_taller) {
            apply_transform($sticky_two, article_overage)
          }

          if (!gallery_taller) {

            if (gallery_overage > 0 && article_overage < 0) {
              apply_transform($sticky_group_one, gallery_overage)
            }

            if (gallery_overage < 0 && article_overage < 0 && previous_position > position) {
              reset_transforms($sticky_group_one)
            }
          }

          previous_position = position
        }

        // if (raf) {
        //   loop()
        // }

        // $(window).on('scroll', efficient)

        $(window).on('resize', function () {
          reset_transforms()
        })
      })
    }


    // alt slideshow

    var $gallery;

    $('.action-open-gallery').on('click', function (event) {
      event.preventDefault();
      $('body').addClass('state-alt-popup-open')

      var index = $(this).data('index')
      var $images = $('.js-is-gallery-item')

      $gallery = $('#gallery-slides')

      if (!$gallery.hasClass('slick-initialized')) {
        $gallery.slick({
          nextArrow: $('#gallery-slides-next'),
          prevArrow: $('#gallery-slides-previous'),
          fade: true
        })

        $gallery.on('afterChange', function (event, slick, currentSlide) {
          $('#gallery-index').text(currentSlide + 1)
        })
      }

      if ($gallery.slick("getSlick").slideCount === 0) {
        for (var i = 0; i < $images.length; i++) {
          $gallery.slick('slickAdd', '<div class="component-alternative-slideshow__image">' + $images[i].outerHTML + '</div>')
        }
      }

      $gallery.slick('slickGoTo', index);
    })

    $('.action-close-gallery').on('click', function (event) {
      event.preventDefault();
      $('body').removeClass('state-alt-popup-open')
    })


    // ga for form

    $('.woocommerce-checkout input.input-text').on('focus', function(event) {
        ga('send', 'event', {
            eventCategory: 'Checkout Form Field',
            eventAction: 'focus',
            eventLabel: $(this).attr('name')
        });
    });

    $('body').on('change', '.woocommerce-checkout input.input-radio[name="payment_method"]', function(event) {
        ga('send', 'event', {
            eventCategory: 'Checkout Form Payment Method',
            eventAction: 'change',
            eventLabel: $(this).val()
        });
    });

    $('body').on('click', '.woocommerce-checkout input[type="submit"]', function(event) {
        ga('send', 'event', {
            eventCategory: 'Checkout Form Submit',
            eventAction: 'submit',
            eventLabel: $(this).val()
        });
    });

    $('[data-ga]').on('mouseenter', function(event) {
        var data = $(this).data('ga')
        ga('send', 'event', {
            eventCategory: data.category,
            eventAction: 'mouseenter',
            eventLabel: data.label
        });
    });


    $('body,html').scrollTop(0);

    $('#intro-slides').imagesLoaded(function(){

        $('body').removeClass('loading').addClass('loaded')
        frontpage();

    });

    $('.action-quick-shop').on('mouseenter', function(event) {
        if (!$('.js-menu').hasClass('active') && !$('.js-search').hasClass('active')) {
            $('.main-header .link').addClass('active')
            $('body').addClass('state-quick-shop-open');
            $('#site-overlay').addClass('active');
        }
    });

    $('.action-quick-shop').on('mouseleave', function(event) {
        if (!$('.js-menu').hasClass('active') && !$('.js-search').hasClass('active')) {
            $('.main-header .link').removeClass('active')
            $('body').removeClass('state-quick-shop-open');
            $('#site-overlay').removeClass('active');
        }
    });

    $('.block-quick-shop').on('mouseenter', function(event) {
        if (!$('.js-menu').hasClass('active') && !$('.js-search').hasClass('active')) {
            $('.main-header .link').addClass('active')
            $('body').addClass('state-quick-shop-open');
            $('#site-overlay').addClass('active');
        }
    });

    $('.block-quick-shop').on('mouseleave', function(event) {
        if (!$('.js-menu').hasClass('active') && !$('.js-search').hasClass('active')) {
            $('.main-header .link').removeClass('active')
            $('body').removeClass('state-quick-shop-open');
            $('#site-overlay').removeClass('active');
        }
    });

    $('[data-productcat-id]').on('click', function(event) {
        event.preventDefault();

        $(this).siblings('a').removeClass('is-active');

        $(this).addClass('is-active');

        var body = {
            action: 'fetch:products',
            category_id: $(this).data('productcat-id')
        }

        $.get(AJAX.url, body,function(html) {
            $('#products').html(html)
            wv_animations()
        },'html');

    });

    // animatinos
    wv_animations()

    function wv_animations() {
        $('.animation-in').waypoint(function(){

            var delay = $(this).data('delay');
            var $element = $(this);

            setTimeout(function () {
                $element.addClass('is-animated')
            }, delay);

        },{offset: '95%'});
    }


    var widthScreen = $(window).width();

    // global
    $('.fitvid').fitVids();

    $('.js-search').on('click',function(e){

      if ($('#primary-navigation').hasClass('active')) {
        closePrimaryNavigation();
      }

      e.preventDefault();

      overlay();

      $(this).toggleClass('active');

      $('#primary-search').toggleClass('active');

    });

    $('.js-menu').on('click',function(e){

      if ($('#primary-search').hasClass('active')) {
        closePrimarySearch();
      }

      e.preventDefault();

      overlay();

      $(this).toggleClass('active');

      $('#primary-navigation').toggleClass('active');

    });

    $(document).keyup(function(e) {
      if (e.keyCode == 27) {
        $('#primary-search,.js-search,.js-menu,#primary-navigation,#site-overlay').removeClass('active');
      }
    });

    $('.navigate').on('click',function(e){
      e.preventDefault();
      var $target = $($(this).attr('href'));
      scrollTo($target);
    });

    // newsletter

    $('.js-close').on('click', function(event) {
      event.preventDefault();

      var $target = $($(this).attr('href'));

      $target.removeClass('open')
      overlay();

    });

    $('body').on('click', '.js-open-newsletter', function(event) {
      event.preventDefault();

      $('#newsletter-popup').addClass('open');
      overlay();

    });

    $('#form-newsletter').on('submit', function(event) {

      event.preventDefault();

      var data = $(this).serialize();
      var rqrd = $('input.rqrd',this);

      rqrd.each(function(index, el) {

        var $t = $(this);

        if ($t.val() === '') {
          $t.addClass('error');
        }else{
          $t.removeClass('error');
        };

      });

      if ($('.rqrd.error').length === 0) {
        $.ajax({
          url: AJAX.url,
          type: 'post',
          dataType: 'json',
          data: data,
        })
        .done(function(data) {
          $('#newsletter-popup').addClass('confirmed');
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      };

    });

    // load more
    $('body').on('click', '.load-more a', function(event) {
      event.preventDefault();

      var $target = $($(this).data('more'));

      var $find = $target.find('article.hide:lt(4)');

      $find.fadeIn().removeClass('hide');

      if ($target.find('.end:visible').length > 0) {
        $(this).remove();
      };

    });

    // bar
    $('.action-show-bar').on('click', function(event) {
      event.preventDefault();
      $('#information-bar').slideDown('200');
    });

    // masonry

    $('#masonry').imagesLoaded(function() {

      $('#masonry').masonry({
            transitionDuration: 0,
            itemSelector: '.article',
            columnWidth: '.grid-sizer',
            gutter: '.gutter-sizer',
            isAnimated: false
          });

    });

    // form

    $('.filter-selectable .link > a').on('click',function(e){
      e.preventDefault();

      var value = $(this).text();

      $(this).parents('.filter-selectable').children('.action').addClass('active').text(value);
      $('#form-requested').val(value);

    });

    // stories

    var go = true;

    if (!Modernizr.touch) {

      $(window).on('scroll', function(event) {

        var top = $(window).scrollTop();
        var height = ($(document).height() - $(window).height()) - 150;

        if (top > height && go) {

          go = false;

          var $find = $('#archive-stories').find('article.hide:lt(8)');

          $find.fadeIn(500,function(){
            go = true;
            $('#masonry').masonry();
          }).removeClass('hide');

        };

      });

    }

    //  intro

    var $carousel = $('#intro-slides');

    $carousel.slick({
      speed: 1000,
      fade: true,
      draggable: true,
      prevArrow: $('#intro-previous'),
      nextArrow: $('#intro-next')
    });

    if ($carousel.length > 0) {

      var $intro = $('#intro');
      var opacity = 1;
      var winheight = $(document).height() / 1;

      $(window).on('scroll', function(event) {

        offset = 1 - (winheight / Math.min(winheight - $(window).scrollTop(),winheight));

        opacity = 1 - Math.abs(Math.min(1,offset * 6));

        $intro.css({'opacity': opacity});

      });

    };

    // products

    $('.block-product__images-primary.is-slideshow, .block-product__images-primary-alt.is-slideshow').slick({
        dots: true,
        arrows: true
    });

    // advertisement

    $('.block-advertisement__slides').slick({
      dots: true,
      arrows: true
    })


    // cart

    var minicart = $.get(AJAX.url, {action: 'fetch:mini:cart'} ,function (html) {
      $('#mini-cart-ajax').html(html)
    }, 'html')

    $('body').on('click', '.action-toggle-cart:not(.no-clicky)', function(event) {
        event.preventDefault();
        $('body').toggleClass('state-show-mini-cart');
    });

    $('body').on('click', '.action-close-cart', function(event) {
        event.preventDefault();
        $('body').removeClass('state-show-mini-cart');
    });

    $('.ajax-add-to-cart').on('submit', function(event) {
        event.preventDefault();

        var $t = $(this);
        var url = $(this).attr('action');
        var data = $(this).serialize();

        if ($t.attr('disabled')) {
            return false;
        }

        $t.attr('disabled','disabled');

        var request = $.get(url, data, function(html){

        });

        request.done(function () {
          $.get(AJAX.url, {action: 'fetch:mini:cart'} ,function (html) {
            console.log('goodbye...')
            $('#mini-cart-ajax').html(html)
            $('body').addClass('state-show-mini-cart');
            $t.removeAttr('disabled');
          }, 'html')
        })
    });

    var cartUpdating = false;

    $('body').on('click', '.component-plus-qty a', function(event) {
        event.preventDefault();

        if (!cartUpdating) {
            cartUpdating = true;

            var $t = $(this);
            var $qty = $(this).siblings('.component-plus-qty--quantity');
            var val = parseInt($qty.val());

            if ($t.hasClass('component-plus-qty--increase')) {
                $qty.val(val + 1)
            }

            if ($t.hasClass('component-plus-qty--decrease')) {
                $qty.val(val - 1)
            }

            var $form = $('#mini-cart');
            var action = $form.attr('action');

            $.post(action, $form.serialize(), function(html) {
                $('#mini-cart').html($(html).find('#mini-cart').html());

                var count = $(html).find('#cart-total-count').html();

                if (count) {
                    $('#cart-total-count').html(count)
                }else{
                    $('#cart-total-count').empty().html('Cart')
                }

                cartUpdating = false;
            });
        }



    });


    // kickstarter
    //Cookies.remove('kickstarter');

    // set the Cookie
    Cookies.set('kickstarter', 'set',{expires: 1});


    // helpers

    function overlay(){
      $('#site-overlay').toggleClass('active');
    }

    function closePrimaryNavigation(){
      $('.js-menu,#primary-navigation,#site-overlay').removeClass('active');
    }

    function closePrimarySearch(){
      $('#primary-search,.js-search,#site-overlay').removeClass('active');
    }

    function scrollTo($element){
      $('html, body').animate({scrollTop: $element.offset().top}, 1000);
    }

    function frontpage() {

        if (!Modernizr.touch) {
          $('.intro article').on('mouseenter',function(){
            $(this).find('.collapseable').stop().slideDown(400);
          });

          $('.intro article').on('mouseleave',function(){
            $(this).find('.collapseable').stop().slideUp(400);
          });
        }

        var $filmslides = $('#film-slides');

        $filmslides.slick({
          slidesToShow: 2,
          arrows: false,
          dots: false,
          responsive: [
              {
                breakpoint: 1025,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
          ]
        });

        $('#film-left').on('click',function(e){
          e.preventDefault();
          $filmslides.slickPrev();
        });

        $('#film-right').on('click',function(e){
          e.preventDefault();
          $filmslides.slickNext();
        });

        $('.fitvid').fitVids();

    }

    function lazyload(callback) {

        $('[data-lazy]').each(function(index, el) {

            var $self = $(this);

            var partial = $self.data('lazy');
            var data = {
                action: 'fetch:ajax',
                partial: partial
            }

            $.get(AJAX.url, data, function(data, textStatus, xhr) {

                $self.html(data);

                callback()

                setTimeout(function () {
                    frontpage();
                }, 50);

            },'html');

        });


    }

});
