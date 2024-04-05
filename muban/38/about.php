{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css-Montserrat4007007CLato400700.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page text-center">
    {{file header}}
    <section class="{{z(class)|upset_class()}} context-dark">
        <div class="{{z(class)|upset_class()}} parallax-container" data-parallax-img="{{z(about_banner_img)}}">
            <div class="{{z(class)|upset_class()}} parallax-content">
                <div class="{{z(class)|upset_class()}} container section-top-34 section-lg-top-98 section-bottom-34">
                    <div>
                        <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name)}}</h2>
                    </div>
                    <ul class="{{z(class)|upset_class()}} list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-lg-top-66">
                        <li class="{{z(class)|upset_class()}} list-inline-item active">
                            <a href="{{host}}">首页</a>
                        </li>
                        <li class="{{z(class)|upset_class()}} list-inline-item">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-66 section-lg-110 novi-background bg-cover bg-lighter">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name,2)}}</h2>
            <hr class="{{z(class)|upset_class()}} divider bg-saffron">
            <div class="{{z(class)|upset_class()}} row row-fix row-30">
                <div class="{{z(class)|upset_class()}} col-lg-5">
                    <div class="{{z(class)|upset_class()}} ratio ratio-16x9">
                        <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-7 text-lg-start">
                    <div class="{{z(class)|upset_class()}} inset-lg-left-40">
                        {{z(about_text)}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-66 section-lg-110 bg-lighter novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} fw-bold">用户评价</h2>
            <hr class="{{z(class)|upset_class()}} divider bg-saffron">
            <div class="{{z(class)|upset_class()}} offset-top-41 offset-lg-top-66">
                <div class="{{z(class)|upset_class()}} owl-carousel owl-carousel-classic owl-carousel-class-light owl-carousel-testimonials-3" data-items="1" data-md-items="2" data-xl-items="3" data-nav="false" data-dots="true" data-margin="50px">
                    <?php for ($i=1; $i<=5; $i++) {?>
                        <div>
                            <blockquote class="{{z(class)|upset_class()}} quote quote-slider-4 unit unit-spacing-sm flex-md-row text-md-start">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <img class="{{z(class)|upset_class()}} quote-img rounded-circle" width="80" height="80" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>">
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <div>
                                        <p>
                                            <q><?php echo explode_array('||',z('ask_all_'.$i),2)?></q>
                                        </p>
                                    </div>
                                    <p class="{{z(class)|upset_class()}} fw-bold quote-author offset-top-10 offset-md-top-4">
                                        <cite class="{{z(class)|upset_class()}} text-normal"><?php echo explode_array('||',z('ask_all_'.$i),1)?></cite>
                                    </p>
                                </div>
                            </blockquote>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>