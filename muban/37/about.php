{{file seo}}
    <link href="{{tempdir}}assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/styles.css" rel="stylesheet">
</head>
<body>
{{file header}}
<main id="main">
    <div class="{{z(class)|upset_class()}} breadcrumbs">
        <div class="{{z(class)|upset_class()}} page-header d-flex align-items-center" style="background-image: url({{z(about_banner_img)}});">
            <div class="{{z(class)|upset_class()}} container position-relative">
                <div class="{{z(class)|upset_class()}} row d-flex justify-content-center">
                    <div class="{{z(class)|upset_class()}} col-lg-6 text-center">
                        <h2>{{i(name)}}</h2>
                        <p>About Us</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="{{z(class)|upset_class()}} container">
                <ol>
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li>About Us</li>
                </ol>
            </div>
        </nav>
    </div>
    <section id="about" class="{{z(class)|upset_class()}} about">
        <div class="{{z(class)|upset_class()}} container" data-aos="fade-up">
            <div class="{{z(class)|upset_class()}} section-header">
                <h2>{{i(name,2)}}</h2>
                <p>About Us</p>
            </div>
            <div class="{{z(class)|upset_class()}} row gy-4">
                <div class="{{z(class)|upset_class()}} col-lg-6">
                    <img src="{{z(about_img)}}" class="{{z(class)|upset_class()}} img-fluid rounded-4 mb-4" alt="{{i(name,2)}}">
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-6">
                    <div class="{{z(class)|upset_class()}} content ps-0" data-aos="fade-right">
                        {{z(about_text)}}
                        <div class="{{z(class)|upset_class()}} d-flex" data-aos-delay="8000" data-aos="zoom-out">
                            <a href="{{u(2)}}" class="{{z(class)|upset_class()}} btn-get-started">了解我们</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="{{z(class)|upset_class()}} testimonials">
        <div class="{{z(class)|upset_class()}} container" data-aos="fade-up">
            <div class="{{z(class)|upset_class()}} section-header">
                <h2>用户对我们的评价</h2>
                <p>Message</p>
            </div>
            <div class="{{z(class)|upset_class()}} slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="{{z(class)|upset_class()}} swiper-wrapper">
                    <?php for ($i=1; $i<=5; $i++) {?>
                        <div class="{{z(class)|upset_class()}} swiper-slide">
                            <div class="{{z(class)|upset_class()}} testimonial-wrap">
                                <div class="{{z(class)|upset_class()}} testimonial-item">
                                    <div class="{{z(class)|upset_class()}} d-flex align-items-center info-box">
                                        <img src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" class="{{z(class)|upset_class()}} testimonial-img flex-shrink-0" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>">
                                        <div>
                                            <h3><?php echo explode_array('||',z('ask_all_'.$i),1)?></h3>
                                            <div class="{{z(class)|upset_class()}} stars">
                                                <i class="{{z(class)|upset_class()}} bi bi-star-fill"></i>
                                                <i class="{{z(class)|upset_class()}} bi bi-star-fill"></i>
                                                <i class="{{z(class)|upset_class()}} bi bi-star-fill"></i>
                                                <i class="{{z(class)|upset_class()}} bi bi-star-fill"></i>
                                                <i class="{{z(class)|upset_class()}} bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="{{z(class)|upset_class()}} bi bi-quote quote-icon-left"></i>
                                        <?php echo explode_array('||',z('ask_all_'.$i),2)?>
                                        <i class="{{z(class)|upset_class()}} bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div class="{{z(class)|upset_class()}} swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section id="clients" class="{{z(class)|upset_class()}} clients">
        <div class="{{z(class)|upset_class()}} container" data-aos="zoom-out">
            <div class="{{z(class)|upset_class()}} clients-slider swiper">
                <div class="{{z(class)|upset_class()}} swiper-wrapper align-items-center">
                    <?php for ($i=1; $i<=6; $i++) {?>
                        <div class="{{z(class)|upset_class()}} swiper-slide">
                            <img src="<?php echo z('partner_img_'.$i) ?>" class="{{z(class)|upset_class()}} img-fluid">
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
</main>
{{file footer}}
</body>
</html>