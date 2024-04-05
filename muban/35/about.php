{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom parallax-container context-dark" data-parallax-img="{{z(about_banner_img)}}">
        <div class="{{z(class)|upset_class()}} parallax-content">
            <div class="{{z(class)|upset_class()}} container">
                <p class="{{z(class)|upset_class()}} heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container container-bigger">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-6 col-xl-5">
                    <h3>{{i(name,2)}}</h3>
                    <div class="{{z(class)|upset_class()}} divider divider-default"></div>
                    {{z(about_text)}}
                    <a class="{{z(class)|upset_class()}} button" href="{{u(2)}}">了解我们</a>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-6">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}" width="720" height="459">
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg text-center bg-gray-100">
        <div class="{{z(class)|upset_class()}} container container-bigger">
            <h3>用户评价</h3>
            <div class="{{z(class)|upset_class()}} owl-carousel owl-layout-1" data-items="1" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-autoplay="false">
                <?php for ($i=1; $i<=4; $i++) {?>
                    <article class="{{z(class)|upset_class()}} quote-boxed">
                        <div class="{{z(class)|upset_class()}} quote-boxed-aside">
                            <img class="{{z(class)|upset_class()}} quote-boxed-image" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="210" height="210">
                        </div>
                        <div class="{{z(class)|upset_class()}} quote-boxed-main">
                            <div class="{{z(class)|upset_class()}} quote-boxed-text">
                                <p><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                            </div>
                            <div class="{{z(class)|upset_class()}} quote-boxed-meta">
                                <p class="{{z(class)|upset_class()}} quote-boxed-cite"><?php echo explode_array('||',z('ask_all_'.$i),1)?></p>
                            </div>
                        </div>
                    </article>
                <?php }?>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>