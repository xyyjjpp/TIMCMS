{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="page">
    {{file header}}
    <div class="section page-header breadcrumbs-custom-wrap bg-image bg-image-9" style="background-image: url('{{z(about_banner_img)}}')">
        <section class="breadcrumbs-custom breadcrumbs-custom-svg">
            <div class="container">
                <p class="heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </section>
    </div>
    <section class="section section-lg bg-default novi-bg novi-bg-img">
        <div class="container">
            <div class="row row-ten row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
                <div class="col-md-8 col-lg-5 col-xl-4">
                    <h3>{{i(name,2)}}</h3>
                    <p class="text-spacing-sm">{{z(about_text)}}</p>
                </div>
                <div class="col-md-8 col-lg-5">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <div class="row row-50 justify-content-lg-center">
                <div class="col-lg-10 col-xl-8">
                    <h3>常见的问题解答</h3>
                    <div class="accordion-custom-group accordion-custom-group-custom accordion-custom-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <div class="accordion-custom-item accordion-custom-corporate">
                            <h4 class="accordion-custom-heading" id="accordion1-accordion-head-blfplrqq">
                                <button class="accordion-custom-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-accordion-body-gnmavyyx" aria-controls="accordion1-accordion-body-gnmavyyx" aria-expanded="true"><?php echo explode_array('：',z('faq_text_1'),0) ?><span class="accordion-custom-arrow"></span>
                                </button>
                            </h4>
                            <div class="accordion-custom-collapse collapse show" id="accordion1-accordion-body-gnmavyyx" aria-labelledby="accordion1-accordion-head-blfplrqq" data-bs-parent="#accordion1">
                                <div class="accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-custom-item accordion-custom-corporate">
                            <h4 class="accordion-custom-heading" id="accordion1-accordion-head-kfbtxajx">
                                <button class="accordion-custom-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-accordion-body-sindthlq" aria-controls="accordion1-accordion-body-sindthlq" aria-expanded="false"><?php echo explode_array('：',z('faq_text_2'),0) ?><span class="accordion-custom-arrow"></span>
                                </button>
                            </h4>
                            <div class="accordion-custom-collapse collapse" id="accordion1-accordion-body-sindthlq" aria-labelledby="accordion1-accordion-head-kfbtxajx" data-bs-parent="#accordion1">
                                <div class="accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-custom-item accordion-custom-corporate">
                            <h4 class="accordion-custom-heading" id="accordion1-accordion-head-yhjbvjyt">
                                <button class="accordion-custom-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-accordion-body-ytjivelo" aria-controls="accordion1-accordion-body-ytjivelo" aria-expanded="false"><?php echo explode_array('：',z('faq_text_3'),0) ?><span class="accordion-custom-arrow"></span>
                                </button>
                            </h4>
                            <div class="accordion-custom-collapse collapse" id="accordion1-accordion-body-ytjivelo" aria-labelledby="accordion1-accordion-head-yhjbvjyt" data-bs-parent="#accordion1">
                                <div class="accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-custom-item accordion-custom-corporate">
                            <h4 class="accordion-custom-heading" id="accordion1-accordion-head-bajydfjh">
                                <button class="accordion-custom-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-accordion-body-frxyrvwv" aria-controls="accordion1-accordion-body-frxyrvwv" aria-expanded="false"><?php echo explode_array('：',z('faq_text_4'),0) ?><span class="accordion-custom-arrow"></span>
                                </button>
                            </h4>
                            <div class="accordion-custom-collapse collapse" id="accordion1-accordion-body-frxyrvwv" aria-labelledby="accordion1-accordion-head-bajydfjh" data-bs-parent="#accordion1">
                                <div class="accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_4'),1) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>