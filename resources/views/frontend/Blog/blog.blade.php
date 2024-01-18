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
    <!-- header-area-end -->

    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">Recent Article</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
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


        <!-- blog-area -->
        <section class="standard__blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="standard__blog__post">
                            <div class="standard__blog__thumb">
                                <a href="blog-details.html"><img
                                        src="{{ asset('fronend/assets/img/blog/blog_thumb01.jpg') }}"
                                        alt=""></a>
                                <a href="blog-details.html" class="blog__link"><i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                            <div class="standard__blog__content">
                                <div class="blog__post__avatar">
                                    <div class="thumb"><img
                                            src="{{ asset('fronend/assets/img/blog/blog_avatar.png') }}"
                                            alt=""></div>
                                    <span class="post__by">By : <a href="#">Halina Spond</a></span>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Best website traffice Booster with
                                        great tools.</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable</p>
                                <ul class="blog__post__meta">
                                    <li><i class="fal fa-calendar-alt"></i> 25 january 2021</li>
                                    <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (08)</a></li>
                                    <li class="post-share"><a href="#"><i class="fal fa-share-all"></i>
                                            (18)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="standard__blog__post">
                            <div class="standard__blog__thumb">
                                <a href="blog-details.html"><img
                                        src="{{ asset('fronend/assets/img/blog/blog_thumb02.jpg') }}"
                                        alt=""></a>
                                <a href="blog-details.html" class="blog__link"><i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                            <div class="standard__blog__content">
                                <div class="blog__post__avatar">
                                    <div class="thumb"><img
                                            src="{{ asset('fronend/assets/img/blog/blog_avatar.png') }}"
                                            alt=""></div>
                                    <span class="post__by">By : <a href="#">Rasalina D.</a></span>
                                </div>
                                <h2 class="title"><a href="blog-details.html">How you should start product design</a>
                                </h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable</p>
                                <ul class="blog__post__meta">
                                    <li><i class="fal fa-calendar-alt"></i> 28 january 2021</li>
                                    <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (12)</a></li>
                                    <li class="post-share"><a href="#"><i class="fal fa-share-all"></i>
                                            (18)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="standard__blog__post">
                            <div class="standard__blog__thumb">
                                <a href="blog-details.html"><img
                                        src="{{ asset('fronend/assets/img/blog/blog_thumb03.jpg') }}"
                                        alt=""></a>
                                <a href="blog-details.html" class="blog__link"><i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                            <div class="standard__blog__content">
                                <div class="blog__post__avatar">
                                    <div class="thumb"><img
                                            src="{{ asset('fronend/assets/img/blog/blog_avatar.png') }}"
                                            alt=""></div>
                                    <span class="post__by">By : <a href="#">Halina Spond</a></span>
                                </div>
                                <h2 class="title"><a href="blog-details.html">How to start sketch after build a
                                        website</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable</p>
                                <ul class="blog__post__meta">
                                    <li><i class="fal fa-calendar-alt"></i> 28 january 2021</li>
                                    <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (12)</a></li>
                                    <li class="post-share"><a href="#"><i class="fal fa-share-all"></i>
                                            (18)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="standard__blog__post">
                            <div class="standard__blog__thumb">
                                <a href="blog-details.html"><img
                                        src="{{ asset('fronend/assets/img/blog/blog_thumb04.jpg') }}"
                                        alt=""></a>
                                <a href="blog-details.html" class="blog__link"><i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                            <div class="standard__blog__content">
                                <div class="blog__post__avatar">
                                    <div class="thumb"><img
                                            src="{{ asset('fronend/assets/img/blog/blog_avatar.png') }}"
                                            alt=""></div>
                                    <span class="post__by">By : <a href="#">Halina Spond</a></span>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Best website traffics Booster with
                                        great tools.</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable</p>
                                <ul class="blog__post__meta">
                                    <li><i class="fal fa-calendar-alt"></i> 28 january 2021</li>
                                    <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (12)</a></li>
                                    <li class="post-share"><a href="#"><i class="fal fa-share-all"></i>
                                            (18)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pagination-wrap">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="far fa-long-arrow-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="far fa-long-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="blog__sidebar">
                            <div class="widget">
                                <form action="#" class="search-form">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Recent Blog</h4>
                                <ul class="rc__post">
                                    <li class="rc__post__item">
                                        <div class="rc__post__thumb">
                                            <a href="blog-details.html"><img
                                                    src="{{ asset('fronend/assets/img/blog/rc_thumb01.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="rc__post__content">
                                            <h5 class="title"><a href="blog-details.html">Best website traffick
                                                    booster with
                                                    great tools.</a></h5>
                                            <span class="post-date"><i class="fal fa-calendar-alt"></i> 28 january
                                                2021</span>
                                        </div>
                                    </li>
                                    <li class="rc__post__item">
                                        <div class="rc__post__thumb">
                                            <a href="blog-details.html"><img
                                                    src="{{ asset('fronend/assets/img/blog/rc_thumb02.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="rc__post__content">
                                            <h5 class="title"><a href="blog-details.html">How to become a best sale
                                                    marketer
                                                    in a year!</a></h5>
                                            <span class="post-date"><i class="fal fa-calendar-alt"></i> 28 january
                                                2021</span>
                                        </div>
                                    </li>
                                    <li class="rc__post__item">
                                        <div class="rc__post__thumb">
                                            <a href="blog-details.html"><img
                                                    src="{{ asset('fronend/assets/img/blog/rc_thumb03.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="rc__post__content">
                                            <h5 class="title"><a href="blog-details.html">Google take latest step &
                                                    catch the
                                                    black SEO</a></h5>
                                            <span class="post-date"><i class="fal fa-calendar-alt"></i> 28 january
                                                2021</span>
                                        </div>
                                    </li>
                                    <li class="rc__post__item">
                                        <div class="rc__post__thumb">
                                            <a href="blog-details.html"><img
                                                    src="{{ asset('fronend/assets/img/blog/rc_thumb04.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="rc__post__content">
                                            <h5 class="title"><a href="blog-details.html">Businesses are thriving
                                                    societies. Time for urgent change</a></h5>
                                            <span class="post-date"><i class="fal fa-calendar-alt"></i> 28 january
                                                2021</span>
                                        </div>
                                    </li>
                                    <li class="rc__post__item">
                                        <div class="rc__post__thumb">
                                            <a href="blog-details.html"><img
                                                    src="{{ asset('fronend/assets/img/blog/rc_thumb05.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="rc__post__content">
                                            <h5 class="title"><a href="blog-details.html">TikTok influencer
                                                    marketing:How to
                                                    work with influencer</a></h5>
                                            <span class="post-date"><i class="fal fa-calendar-alt"></i> 28 january
                                                2021</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Categories</h4>
                                <ul class="sidebar__cat">
                                    <li class="sidebar__cat__item"><a href="blog.html">Web Design (6)</a></li>
                                    <li class="sidebar__cat__item"><a href="blog.html">Web Development (4)</a></li>
                                    <li class="sidebar__cat__item"><a href="blog.html">Product Design (9)</a></li>
                                    <li class="sidebar__cat__item"><a href="blog.html">Animation (6)</a></li>
                                    <li class="sidebar__cat__item"><a href="blog.html">Ui/Ux Design (8)</a></li>
                                    <li class="sidebar__cat__item"><a href="blog.html">Branding Design (12)</a></li>
                                    <li class="sidebar__cat__item"><a href="blog.html">Web Design (6)</a></li>
                                    <li class="sidebar__cat__item"><a href="blog.html">Logo Design (6)</a></li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Recent Comment</h4>
                                <ul class="sidebar__comment">
                                    <li class="sidebar__comment__item">
                                        <a href="blog-details.html">Rasalina Sponde</a>
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have</p>
                                    </li>
                                    <li class="sidebar__comment__item">
                                        <a href="blog-details.html">Rasalina Sponde</a>
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have</p>
                                    </li>
                                    <li class="sidebar__comment__item">
                                        <a href="blog-details.html">Rasalina Sponde</a>
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have</p>
                                    </li>
                                    <li class="sidebar__comment__item">
                                        <a href="blog-details.html">Rasalina Sponde</a>
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Popular Tags</h4>
                                <ul class="sidebar__tags">
                                    <li><a href="blog.html">Business</a></li>
                                    <li><a href="blog.html">Design</a></li>
                                    <li><a href="blog.html">apps</a></li>
                                    <li><a href="blog.html">landing page</a></li>
                                    <li><a href="blog.html">data</a></li>
                                    <li><a href="blog.html">website</a></li>
                                    <li><a href="blog.html">book</a></li>
                                    <li><a href="blog.html">Design</a></li>
                                    <li><a href="blog.html">product design</a></li>
                                    <li><a href="blog.html">landing page</a></li>
                                    <li><a href="blog.html">data</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->


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
    <script src="{{ asset('fronend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/element-in-view.j') }}s"></script>
    <script src="{{ asset('fronend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/main.js') }}"></script>
</body>

</html>