<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rasalina - Personal Portfolio HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fronend/assets/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/responsive.css') }}">
</head>

<body>

    <!-- preloader-start -->
    <div id="preloader">
        <div class="rasalina-spin-box"></div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('frontend.body.header')

    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">Contact us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>')}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__wrap__icon">
                <ul>
                    <li><img src="{{ asset('fronend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                    <li><img src="{{ asset('fronend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
                    <li><img src="{{ asset('fronend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
                    <li><img src="{{ asset('fronend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
                    <li><img src="{{ asset('fronend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
                    <li><img src="{{ asset('fronend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-map -->
        <div id="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d40.6880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd"
                allowfullscreen loading="lazy"></iframe>
        </div>
        <!-- contact-map-end -->

        <!-- contact-area -->
        <div class="contact-area">
            <div class="container">
                <form action="#" class="contact__form">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Enter your name*">
                        </div>
                        <div class="col-md-6">
                            <input type="email" placeholder="Enter your mail*">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Enter your subject*">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Your Budget*">
                        </div>
                    </div>
                    <textarea name="message" id="message" placeholder="Enter your massage*"></textarea>
                    <button type="submit" class="btn">send massage</button>
                </form>
            </div>
        </div>
        <!-- contact-area-end -->

        <!-- contact-info-area -->
        <section class="contact-info-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <img src="{{ asset('fronend/assets/img/icons/contact_icon01.png') }}" alt="">
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">address line</h4>
                                <span>Bowery St, New York, <br> NY 10013,USA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <img src="{{ asset('fronend/assets/img/icons/contact_icon02.png') }}" alt="">
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">Phone Number</h4>
                                <span>+1255 - 568 - 6523</span>
                                <span>+1255 - 568 - 6523</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <img src="{{ asset('fronend/assets/img/icons/contact_icon03.png') }}" alt="">
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">Mail Address</h4>
                                <span>email@example.com</span>
                                <span>info@yourdomain.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-area-end -->

        <!-- contact-area -->
        <section class="homeContact homeContact__style__two">
            <div class="container">
                <div class="homeContact__wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__title">
                                <span class="sub-title">07 - Say hello</span>
                                <h2 class="title">Any questions? Feel free <br> to contact</h2>
                            </div>
                            <div class="homeContact__content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form</p>
                                <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="homeContact__form">
                                <form action="#">
                                    <input type="text" placeholder="Enter name*">
                                    <input type="email" placeholder="Enter mail*">
                                    <input type="number" placeholder="Enter number*">
                                    <textarea name="message" placeholder="Enter Massage*"></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->



    <!-- Footer-area -->
    @include('frontend.body.footer')
    <!-- Footer-area-end -->




    <!-- JS here -->
    <script src="{{ asset('fronend/assets/js/vendor/jquery-3.6.0.min.js') }}')}}"></script>
    <script src="{{ asset('fronend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/element-in-view.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/main.js') }}"></script>
</body>

</html>