<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ***** title ***** -->
    <title>@yield('title', 'Best IT Consulting Company in India | Logicvine Infotech')</title>
    <!-- ***** meta dec ***** -->
    <meta name="description" content="Logicvine Infotech is the best IT consulting company in India, delivering tailored IT solutions, digital transformation, and technology support to help businesses thrive.">
    <meta name="keywords" content="it consulting firms in india , it consulting company in india, best it consulting company in india,top it consulting company in india, it consulting services in india , it consulting services , top it consulting services in india, best it consulting services in india">
    <!-- favicon -->
    <link href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" rel="icon"/>
    <link href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" rel="shortcut icon"/>
    <!-- jquery -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <!-- ***** swiper js    ***** -->
    <link rel="stylesheet" href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}" />
    <!-- ***** tailwind css cdn ***** -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ***** main style ***** -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- ***** glightbox ***** -->
    <link rel="stylesheet" href="{{asset('assets/libs/glightbox/glightbox.min.css')}}">
    <!-- ***** font awesome cdn ***** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ***** font family ***** -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- ***** tailwind css custom ***** -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'theme1': '#120B37',
                        'theme2': '#eab308',
                    },

                    animation: {
                        'appearBottom': 'appearB  linear',
                        'move1': 'move 5s linear infinite',
                        'fixed-nav': 'fixedNav 0.6s',
                        'rotate-word': 'rotateWord 18s linear infinite',
                        'move': 'move1 18s linear infinite',
                        'videoplay': 'videoplay linear',
                        'bounce-custom': 'watermarkanimate 3s linear infinite alternate-reverse',
                        'up-down2': 'updown2 2.3s linear infinite alternate',   
                        'bounceIn': "1s cubic-bezier(0.215, 0.61, 0.355, 1) both bounceIn", 
                    },

                    keyframes: {
                        move: {
                            '0%': {
                                'offset-distance': '0%'
                            },
                            '100%': {
                                'offset-distance': '100%'
                            },
                        },
                        appearB: {
                            'from': {
                                opacity: '0',
                                transform: 'translateY(100%)'
                            },
                            'to': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            }
                        },
                        fixedNav: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(-60px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0px)'
                            },
                        },
                        rotateWord: {
                            ' 0%': {
                                opacity: '0'
                            },

                            '2% ': {
                                opacity: '0',
                                transform: 'translateY(-30px)'
                            },

                            '5%': {
                                opacity: '1',
                                transform: 'translateY(0px)'
                            },

                            '17%': {
                                opacity: '1',
                                transform: 'translateY(0px)'
                            },

                            '20%': {
                                opacity: '0',
                                transform: 'translateY(30px)',
                            },

                            '80%': {
                                opacity: '0'
                            },

                            '100%': {
                                opacity: '0'
                            }
                        },
                        videoplay: {
                            'from': {
                                opacity: '0',
                                scale: '.5'
                            },
                            'to': {
                                opacity: '1',
                                scale: '1'
                            }
                        },
                        watermarkanimate: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(80px)' }, // Adjust width accordingly
                        },
                        updown2: {
                            '0%': { transform: 'translateY(30px)' },
                            '50%': { transform: 'translateY(0px)' },
                            '100%': { transform: 'translateY(30px)' },
                        },
                        bounceIn: {
                            "0%": { opacity: "0", transform: "scale3d(0.3, 0.3, 0.3)" },
                            "20%": { transform: "scale3d(1.1, 1.1, 1.1)" },
                            "40%": { transform: "scale3d(0.9, 0.9, 0.9)" },
                            "60%": { opacity: "1", transform: "scale3d(1.03, 1.03, 1.03)" },
                            "80%": { transform: "scale3d(0.97, 0.97, 0.97)" },
                            "100%": { opacity: "1", transform: "scale3d(1, 1, 1)" },
                        },
                    },

                    fontFamily: {
                    'sans': ['Inter', 'serif'],  // Use 'Inter' globally with 'serif' as fallback
                    },
                },
            }
        }
    </script>
    
</head>

<body>

    <!-- Header -->
    @include('front-layouts.header')  <!-- Make sure path is correct -->

    <!-- Main Content -->
    <main>
        @yield('content')  <!-- Content here -->
    </main>

    <!-- Footer -->
    @include('front-layouts.footer')  <!-- Make sure path is correct -->

    
    <!-- js files -->
    <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/libs/glightbox/glightbox.min.js')}}"></script>

    <!-- ***** blog slider js ***** -->
    <script>
    var swiper = new Swiper(".newsSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
        },
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        },
        breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        },
    });
    </script>

    <!-- ***** blog home slider js ***** -->
    <script>
    var swiper = new Swiper(".bloghome", {
        slidesPerView: 1,
        loop: true,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        },
        breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 18,
        },
        },
    });
    </script>

    <!-- ***** navbar add class js ***** -->
    <script>
    window.addEventListener("scroll", function () {
        var scroll = window.scrollY;
        var navbar = document.querySelector("body");
        if (scroll <= 120) {
        navbar.classList.remove("group/nav");
        } else {
        navbar.classList.add("group/nav");
        }
    });
    </script>

    <!--***** swiper for testimonial ***** -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const swiper = new Swiper('.testimonialSwiper', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true, // Set loop to false
                // autoplay: {
                //     delay: 2500,
                //     disableOnInteraction: false,
                // },
                breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 10 },
                708: { slidesPerView: 3, spaceBetween: 10 },
                868: { slidesPerView: 3, spaceBetween: 10 },
                1024: { slidesPerView: 3, spaceBetween: 10 },
            },
            });

            document.getElementById('prevButton').addEventListener('click', () => {
                swiper.slidePrev();
            });

            document.getElementById('nextButton').addEventListener('click', () => {
                swiper.slideNext();
            });
        });
    </script>

    <!--***** card hover ***** -->
    <script>
    let items = document.querySelectorAll('.animatecard');
    console.log(items);
    items.forEach(item => {
        item.addEventListener('mousemove', (e)=>{
            let positionPx = e.x - item.getBoundingClientRect().left;
            let positionX = (positionPx / item.offsetWidth) * 100;
            console.log(positionX, positionPx);

            let positionPy = event.y - item.getBoundingClientRect().top;
            let positionY = (positionPy / item.offsetHeight) * 100;

            
            item.style.setProperty('--rX', (0.5)*(50 - positionY) + 'deg');
            item.style.setProperty('--rY', -(0.5)*(50 - positionX) + 'deg');
        })
        item.addEventListener('mouseout', ()=>{
            item.style.setProperty('--rX', '0deg');
            item.style.setProperty('--rY', '0deg');
        })
    })
    </script>

    <!--***** scroll button ***** -->
    <script>
        document.getElementById("scrollbtn").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("scrollsection").scrollIntoView({ behavior: "smooth" });
        });
    </script>

    <!-- ***** offcanvas js ***** -->
    <script>
    function toggleMenu() {
        const menu = document.getElementById('offcanvas-menu');
        const body = document.body;
        menu.classList.toggle('-translate-x-full');

        if (menu.classList.contains('-translate-x-full')) {
        body.style.overflow = 'auto';  // Enable scrolling when menu is closed
        } else {
        body.style.overflow = 'hidden';  // Disable scrolling when menu is open
        }
    }

    function closeMenu() {
        const menu = document.getElementById('offcanvas-menu');
        const body = document.body;
        menu.classList.add('-translate-x-full');  // Close the menu
        body.style.overflow = 'auto';  // Enable scrolling
    }

    function closeMenuOnOverlay(event) {
        // Agar user overlay area (offcanvas-menu ka background) par click kare to menu band ho jaye
        if (event.target.id === "offcanvas-menu") {
        closeMenu();
        }
    }
    </script>

    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                e.preventDefault();
                
                // Reset previous errors & messages
                $('#nameError, #emailError, #phoneError, #cmpnameError, #messageError').text('');
                $('#successMessage').addClass('hidden').text('');
                
                // Change span text instead of button text
                $('#submitForm span').text('Loading...');
                $('#submitForm').prop('disabled', true);
                
                var formData = {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    cmpname: $('#cmpname').val(),
                    message: $('#message').val(),
                    _token: $('input[name="_token"]').val()
                };

                $('#loader').removeClass('hidden');

                $.ajax({
                    url: "",
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#loader').addClass('hidden');
                        
                        if (response.success) {
                            $('#contactForm')[0].reset();
                            $('#successMessage').removeClass('hidden').text(response.message);
                        }

                        // Reset button text after success
                        $('#submitForm span').text('Submit Now');
                        $('#submitForm').prop('disabled', false);
                    },
                    error: function(response) {
                        $('#submitForm span').text('Submit Now');
                        $('#submitForm').prop('disabled', false);

                        var errors = response.responseJSON.errors;
                        if (errors) {
                            if (errors.name) $('#nameError').text(errors.name[0]);
                            if (errors.email) $('#emailError').text(errors.email[0]);
                            if (errors.phone) $('#phoneError').text(errors.phone[0]);
                            if (errors.cmpname) $('#cmpnameError').text(errors.cmpname[0]);
                            if (errors.message) $('#messageError').text(errors.message[0]);
                        }
                    }
                });
            });
        });
    </script>

    <script>
        const glightbox = GLightbox({ selector: '.glightbox' });

        const filterButtons = document.querySelectorAll('.filter-btn');
        const tabContents = {
            all: document.getElementById('all-events'),
            birthday: document.getElementById('birthday-events'),
            diwali: document.getElementById('diwali-events'),
            holi: document.getElementById('holi-events'),
        };

        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
            // Remove active classes
            filterButtons.forEach(b => {
                b.classList.remove('bg-theme2', 'text-white');
                b.classList.add('bg-gray-300');
            });

            // Add active classes on clicked button
            btn.classList.add('bg-theme2', 'text-white');
            btn.classList.remove('bg-gray-300');

            // Hide all tab contents
            Object.values(tabContents).forEach(div => div.classList.add('hidden'));

            // Show selected category
            const cat = btn.dataset.category;
            if (tabContents[cat]) {
                tabContents[cat].classList.remove('hidden');
            }
            });
        });
    </script>
</body>
</html>
