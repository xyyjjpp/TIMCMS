{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    <header class="{{z(class)|upset_class()}} page-header subpage_header">
        {{file header}}
        <section>
            <div class="{{z(class)|upset_class()}} swiper-container swiper-slider" data-loop="true" data-slide-effect="fade" data-autoplay="5000">
                <div class="{{z(class)|upset_class()}} jumbotron text-center">
                    <h2>{{i(name)}}</h2>
                    <p class="{{z(class)|upset_class()}} big"></p>
                </div>
                <div class="{{z(class)|upset_class()}} swiper-wrapper">
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="{{z(about_banner_img)}}">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption"></div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <section class="{{z(class)|upset_class()}} section section-border">
        <ol class="{{z(class)|upset_class()}} breadcrumb">
            <li>
                <a href="{{host}}">首页</a>
            </li>
            <li class="{{z(class)|upset_class()}} active">About Us</li>
        </ol>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm text-center">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row justify-content-center">
                <div class="{{z(class)|upset_class()}} col-xl-10">
                    <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name,2)}}</h2>
                    <p class="{{z(class)|upset_class()}} lead big">{{z(about_text)}}</p>
                    <img class="{{z(class)|upset_class()}} box-shadow margin-2 margin-negative" src="{{z(about_img)}}" alt="{{i(name,2)}}"><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section bg-dark-var1 text-center">
        <div class="{{z(class)|upset_class()}} container counter-panel">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-6 col-md-6 col-lg-3">
                    <div class="{{z(class)|upset_class()}} counter">197</div>
                    <p class="{{z(class)|upset_class()}} text-opacity font-secondary text-uppercase">伙伴</p>
                </div>
                <div class="{{z(class)|upset_class()}} col-6 col-md-6 col-lg-3">
                    <div class="{{z(class)|upset_class()}} counter">23</div>
                    <p class="{{z(class)|upset_class()}} text-opacity font-secondary text-uppercase">经验</p>
                </div>
                <div class="{{z(class)|upset_class()}} col-6 col-md-6 col-lg-3">
                    <div class="{{z(class)|upset_class()}} counter">98</div>
                    <p class="{{z(class)|upset_class()}} text-opacity font-secondary text-uppercase">奖项</p>
                </div>
                <div class="{{z(class)|upset_class()}} col-6 col-md-6 col-lg-3">
                    <div class="{{z(class)|upset_class()}} counter">7230</div>
                    <p class="{{z(class)|upset_class()}} text-opacity font-secondary text-uppercase">案例</p>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm text-center section-border">
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} flex-list">
                <?php for ($i=1; $i<=6; $i++) {?>
                    <li>
                        <img src="<?php echo z('partner_img_'.$i) ?>">
                    </li>
                <?php }?>
            </ul>
        </div>
    </section>
    {{file footer}}
</body>
</html>