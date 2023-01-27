<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    {{-- Custom Slider Style --}}
    <link rel="stylesheet" href="{{asset('asset/css/rmnslider.css')}}">
    {{-- WOW JS Style --}}
    <link rel="stylesheet" href="{{asset('asset/library/WOW/css/libs/animate.css')}}">

    <title>AgenX Concert - Explore the Rythm, Enjoy the Melody, Follow the bass</title>
</head>
<body>
    <header>
        <span class="logo">AgenX</span>
        <button class="login-btn">
            <a href="#">Login</a>
        </button>
    </header>
    <section class="portal rmn-slider">
        <div class="slides">
            <div class="slide content-slide active" data-rmn-motion="relax" data-image-src="{{asset('asset/img/pics/Frame 1.jpg')}}"></div>
            <div class="slide content-slide" data-rmn-motion="relax" data-image-src="{{asset('asset/img/pics/Frame 2.jpg')}}"></div>
            <div class="slide content-slide" data-rmn-motion="relax" data-image-src="{{asset('asset/img/pics/Frame 3.jpg')}}"></div>
        </div>
        <div class="content">
            <div class="text">
                <div class="heading">
                    <h1 class="wow fadeInUp" data-wow-duration=1s>AgenX Concert, <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"> Perform by Angels </span> </h1>
                    <h3 class="wow fadeInDown" data-wow-duration=1s data-wow-delay=.5s>Explore the Rythm, Enjoy the Melody, Follow  the Bass</h3>
                </div>
                <div class="cta-btn wow fadeInLeft">
                    <button class="form-trigger">Order Now</button>
                </div>
            </div>
            <div class="images">
                <div class="rmn-slider">
                    <div class="slides">
                        <div class="slide content-slide active" data-rmn-motion="relax" data-image-src="{{asset('asset/img/pics/Frame 1.jpg')}}"></div>
                        <div class="slide content-slide" data-rmn-motion="relax" data-image-src="{{asset('asset/img/pics/Frame 2.jpg')}}"></div>
                        <div class="slide content-slide" data-rmn-motion="relax" data-image-src="{{asset('asset/img/pics/Frame 3.jpg')}}"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal">
        <div class="modal-overlay">
            <div class="form-group wow fadeInUp">
                <form action="">
                    <h2>Order Ticket!</h2>
                    <ul>
                        <li>
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Bill Gates">
                        </li>
                        <li>
                            <label for="phone">Phone</label>
                            <input type="phone" id="phone" name="phone" placeholder="+62x-xxx-xxx-xxxx">
                        </li>
                        <li>
                            <label for="address">Address</label>
                            <textarea name="address" id="addresss" cols="30" rows="10"></textarea>
                        </li>
                    </ul>
                    <div class="btn">
                        <button class="order-btn" type="submit" name="submit">Order</button>
                        <button class="back-btn" type="button">Back</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Wow JS --}}
    <script src="{{asset('./asset/library/WOW/dist/wow.min.js')}}"></script>
    <script>
        new WOW().init()
    </script>

    {{-- Custom Slider Animation --}}
    <script src="{{asset('./asset/js/rmnslider.js')}}"></script>
    <script>
        let bgSlides = document.querySelectorAll('.portal.rmn-slider > .slides .slide');
        let bgSlider = new RMNSlider(bgSlides);
        setInterval(()=>{bgSlider.next()}, 5000)

        let cardSlides = document.querySelectorAll('.content .images .slides .slide');
        let cardSlider = new RMNSlider(cardSlides);
        setInterval(()=>{cardSlider.next()}, 5000)
    </script>

    {{-- Modal Trigger --}}
    <script>
        let trigger = document.querySelector('button.form-trigger');
        let back = document.querySelector('button.back-btn');
        let modal = document.querySelector('div.modal');
        trigger.addEventListener('click', (e) => {
            modal.classList.add('active');
        });

        back.addEventListener('click', (e) => {
            modal.classList.remove('active');
        })
    </script>
</body>
</html>
