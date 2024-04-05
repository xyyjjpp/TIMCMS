{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <div class="{{z(class)|upset_class()}} section page-header breadcrumbs-custom-wrap bg-image" style="background-image: url({{z(about_banner_img)}})">
        <section class="{{z(class)|upset_class()}} breadcrumbs-custom breadcrumbs-custom-svg">
            <div class="{{z(class)|upset_class()}} container">
                <br><br>
                <p class="{{z(class)|upset_class()}} heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">About Us</li>
                </ul>
            </div>
        </section>
    </div>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-ten row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
                <div class="{{z(class)|upset_class()}} col-md-8 col-lg-5 col-xl-4">
                    <h3>{{i(name,2)}}</h3>
                    <p class="{{z(class)|upset_class()}} text-spacing-sm">{{z(about_text)}}</p>
                    <a class="{{z(class)|upset_class()}} button button-primary button-nina" href="{{u(2)}}">关于我们</a>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-8 col-lg-5">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}" width="570" height="535">
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg novi-bg novi-bg-img bg-gray-100">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-xl-10">
                    <h6 class="{{z(class)|upset_class()}} custom-subtitle-1">合作伙伴</h6>
                    <p class="{{z(class)|upset_class()}} custom-title mt-1">Our sponsors</p>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row row-sm row-30">
                <div class="{{z(class)|upset_class()}} row">
                    <?php for ($i=1; $i<=6; $i++) {?>
                        <div class="{{z(class)|upset_class()}} col-6 col-sm-3">
                            <figure class="{{z(class)|upset_class()}} box-icon-image">
                                <img src="<?php echo z('partner_img_'.$i) ?>" width="270" height="74">
                            </figure>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-xl-10">
                    <h6 class="{{z(class)|upset_class()}} custom-subtitle-1">用户的评价</h6>
                    <p class="{{z(class)|upset_class()}} custom-title mt-1">What club members say</p>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row row-sm">
                <div class="{{z(class)|upset_class()}} owl-carousel owl-layout-6" data-items="1" data-lg-items="2" data-loop="true" data-margin="40" data-autoplay="true" data-owl='{"nav":false,"dots":true}'>
                    <?php for ($i=1; $i<=5; $i++) {?>
                        <div class="{{z(class)|upset_class()}} quote-boxed-2">
                            <div class="{{z(class)|upset_class()}} quote-boxed-2-body">
                                <div class="{{z(class)|upset_class()}} quote-boxed-2-text h5"><?php echo explode_array('||',z('ask_all_'.$i),2)?></div>
                            </div>
                            <div class="{{z(class)|upset_class()}} quote-boxed-2-media">
                                <img class="{{z(class)|upset_class()}} quote-boxed-2-img" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="60" height="60">
                                <div class="{{z(class)|upset_class()}} d-block">
                                    <div class="{{z(class)|upset_class()}} quote-boxed-2-cite"><?php echo explode_array('||',z('ask_all_'.$i),1)?></div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>