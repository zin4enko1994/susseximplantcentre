$(function() {
    function openMobilMenu() {
        $('.burger').on( "click", function() {
            $( 'body' ).toggleClass('hidden');
            $('.navigation').toggleClass( 'open');
        });

        if ($(window).width() <= '991') {
            $('.menu li a').on( "click", function() {
                $( 'body' ).toggleClass('hidden');
                $('.navigation').toggleClass( 'open');
                $('.burger .ham').toggleClass( 'active');
            });
        }
    }
    function activeMenuLink() {
        $(window).scroll(function () {
            var $sections = $('section');
            $sections.each(function (i, el) {
                var top = $(el).offset().top - 100;
                var bottom = top + $(el).height();
                var scroll = $(window).scrollTop();
                var id = $(el).attr('id');
                if (scroll > top && scroll < bottom) {
                    $('li.active').removeClass('active');
                    $('a[href="#' + id + '"]').parent().addClass('active');
                }
            })
        });
    }
    function scrollToSection() {
        $(document).ready(function () {
            // $('.menu').on("click","a", function (event) {

            $("a").on("click", function (event) {
                event.preventDefault();

                const id = $(this).attr('href'),

                    top = $(id).offset().top - 100;

                $('body,html').animate({ scrollTop: top }, 1500);
            });
        });
    }
    function sendMail() {
        const ajaxurl = '/wp-admin/admin-ajax.php';

        $('#contact_form').on('submit', function (e) {
            e.preventDefault();

            let obj = $(this);
            let form = $(this).serialize();

            $.post({
                url: ajaxurl,
                action: 'contactForm',
                data: form,
                success: function (data) {
                    var answer = JSON.parse(data);

                    try {
                        if (answer['response'] == '200') {
                            setTimeout(function () {
                                $('form').css('display', 'none');
                                $('.thank-you').css('display', 'block');
                            },1000);
                        }
                        if (answer['response'] == '400') {
                            console.log('ERROR !!!');
                        }
                    } catch (err) {
                        console.log('err', err);
                    }
                },
                error: function (error) {
                    console.log('error', error);
                }
            })
        });
    }
    function tabsNavigation() {

        $(".tab").click(function() {
            $(".tab").removeClass("active").eq($(this).index()).addClass("active");

            if ( $(window).width() > 991 )  {
                $(".tab_item").hide().eq($(this).index()).fadeIn()
            }
            else {
                $(this).after($(".tab_item").eq($(this).index()));
                $(".tab_item").hide().eq($(this).index()).fadeIn();
            }

            $(".doctor").hide().eq($(this).index()).fadeIn()
        }).eq(0).addClass("active");
    }
    function firstWorld() {
        // $( ".services-author p" ).each(function() {
        //     var html = $(this).html();
        //     html = html.replace(/^([^\s]*)(.*)/, "<span class=\"first-word\">$1</span>$2");
        //     $(this).html(html);
        //     $(this).html( (this).html().replace(/^([^\s]*)(.*)/, "<span class=\"first-word\">$1</span>$2") );
        // });

        $('.doctor').each(function(){
            var me = $(this);
            me.html(me.html().replace(/^(\w+)/, '<span class="doctor-name">$1</span>'));
        });
    }
    function openServiceInfo() {

        $('.accordion-wrapper .item').on('click', function(e) {
            e.preventDefault();
            // $('.content').removeClass('open');
            $(this).find('.content').toggleClass('open');
        });

    }

    openServiceInfo();
    tabsNavigation();
    activeMenuLink();
    openMobilMenu();
    scrollToSection();
    sendMail();
    firstWorld();

    // $(window).resize(hoverTeamBlock);
});
