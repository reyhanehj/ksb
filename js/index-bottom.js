(function ($) {
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 500,
        margin: 15,
        loop: true,
        center: true,
        dots: true,
        nav: true,
        navText : [
            '<i class="car-handle fa-solid fa-chevron-right"></i>',
            '<i class="car-handle fa-solid fa-chevron-left"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    var dots = $('.owl-dots').css('position', 'absolute').css('bottom', '5px');
    dots.css('left', 'calc(50% - ' + dots.width()/2+'px)');

    $(".side-services-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 500,
        loop: true,
        center: true,
        dots: true,
        nav: true,
        navText : [
            '<i class="car-handle fa-solid fa-chevron-right"></i>',
            '<i class="car-handle fa-solid fa-chevron-left"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:5
            }
        }
    });

    const textDisplay = document.getElementById('text')
    const phrases = ["حسابداری کسبه، منطبق با نیازهای صنفی شما",
        "بیش از 25,000 کاربر در مشاغل گوناگون",
        "ویژه کامپیوتر، موبایل و کارتخوان اندرویدی"
    ]
    let i = 0
    let j = 0
    let currentPhrase = []
    let isDeleting = false
    let isEnd = false

    function loop () {
        isEnd = false
        textDisplay.innerHTML = currentPhrase.join('')

        if (i < phrases.length) {

            if (!isDeleting && j <= phrases[i].length) {
                currentPhrase.push(phrases[i][j])
                j++
                textDisplay.innerHTML = currentPhrase.join('')
            }

            if(isDeleting && j <= phrases[i].length) {
                currentPhrase.pop(phrases[i][j])
                j--
                textDisplay.innerHTML = currentPhrase.join('')
            }

            if (j == phrases[i].length) {
                isEnd = true
                isDeleting = true
            }

            if (isDeleting && j === 0) {
                currentPhrase = []
                isDeleting = false
                i++
                if (i === phrases.length) {
                    i = 0
                }
            }
        }
        /*
            const normalSpeed = Math.random() * (80 -50) + 50
        */
        /*
            const normalSpeed = Math.random() * (300 -200) + 200
        */
        const spedUp = Math.random() * (30 -20) + 20
        const normalSpeed   =  Math.random() * (80 -40) + 40
        const time = isEnd ? 3000 : isDeleting ? spedUp : normalSpeed
        setTimeout(loop, time)
    }

    loop()

    $('.service').on('click',function () {
        let img = $(this).find(".service-img").attr('src');
        let alt = $(this).find(".service-img").attr('alt');
        let desc = $(this).find(".data-desc").html();
        let title = $(this).find("span").html();

        $("#service-m-image").attr("src",img);
        $("#service-m-image").attr("alt",alt);
        $("#service-m-desc").html(desc);
        $("#side-serv-modal .modal-title").html(title);

        $("#side-serv-modal").modal('show');

    });
})(jQuery);

