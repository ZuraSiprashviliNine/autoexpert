
$(document).ready(() => {

    $('body').addClass('fadeIn');
    
    AOS.init();
    
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
            window.location.hash = hash;
            });
        } 
    });
    
    
    let work = new Swiper('.work-swiper', {
        slidesPerSlide: 1,
        autoplay: {
            delay: 2000
        },
        atuoHeight: true,
        loop: true,
        pagination: {
            el: '.work-pagination',
            type: 'bullets'
        }
    });
    let service = new Swiper('.service-swiper', {
        slidesPerSlide: 1,
        autoplay: {
            delay: 2000
        },
        atuoHeight: true,
        loop: true,
        pagination: {
            el: '.service-pagination',
            type: 'bullets'
        }
    });

    // $('.service-parallax').parallax({imageSrc: './static/bg-service.jpg'});
    

    $('.bars').click(function(){
        $('#sidebar').addClass('active');
        $('body').addClass('translate');
    })
    $('.sidebar-close').click(function(){
        $('#sidebar').removeClass('active')
        $('body').removeClass('translate');
    })
    
    let scrolled = false;

    let scroll = () => {
        if($(window).scrollTop() > 0){
            if(!scrolled){
                scrolled = true;
            }
        }else{
            if(scrolled){
                scrolled = false;
            }
        }

        if(scrolled){
            $('nav').addClass('scrolled');
        }else{
            $('nav').removeClass('scrolled');
        }
    };


    scroll();
    
    $(window).scroll(() => {
        scroll();
    })
})