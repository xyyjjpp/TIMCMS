{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} preloader-body">
        <div class="{{z(class)|upset_class()}} cssload-container">
            <div class="{{z(class)|upset_class()}} cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section section-page-title novi-bg novi-bg-img" style="background-image: url({{z(about_banner_img)}}); background-size: cover;">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} page-title">{{i(name)}}</h2>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">About Us</li>
            </ul>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 align-items-lg-center justify-content-xl-between">
                <div class="{{z(class)|upset_class()}} col-lg-6">
                    <div class="{{z(class)|upset_class()}} block-xs">
                        <h2 class="{{z(class)|upset_class()}} heading-decorate">
                            <span class="{{z(class)|upset_class()}} divider"></span>{{i(name,2)}}
                        </h2>
                        {{z(about_text)}}
                        <a class="{{z(class)|upset_class()}} button button-default-outline" href="{{u(2)}}">阅读更多</a>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-6">
                    <div class="{{z(class)|upset_class()}} box-images-classic">
                        <div class="{{z(class)|upset_class()}} row row-30">
                            <div class="{{z(class)|upset_class()}} col-6">
                                <div class="{{z(class)|upset_class()}} box-image-item" data-parallax-scroll="{&quot;y&quot;: 0, &quot;x&quot;: 20,  &quot;smoothness&quot;: 30 }">
                                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section parallax-container" data-parallax-img="images/parallax-5-1920x930.jpg">
        <div class="{{z(class)|upset_class()}} parallax-content section-lg text-center">
            <div class="{{z(class)|upset_class()}} container">
                <h2>用户留言</h2>
                <div class="{{z(class)|upset_class()}} divider-lg"></div>
                <p class="{{z(class)|upset_class()}} block-lg">Message</p>
            </div>
            <div class="{{z(class)|upset_class()}} container">
                <div class="{{z(class)|upset_class()}} owl-carousel carousel-arrow-circle" data-items="1" data-lg-items="2" data-dots="true" data-nav="true" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
                    <?php for ($i=1; $i<=5; $i++) {?>
                        <div class="{{z(class)|upset_class()}} quote-corporate">
                            <div class="{{z(class)|upset_class()}} quote-header">
                                <h4><?php echo explode_array('||',z('ask_all_'.$i),1)?></h4>
                            </div>
                            <div class="{{z(class)|upset_class()}} quote-body">
                                <div class="{{z(class)|upset_class()}} quote-text">
                                    <p><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                                </div>
                                <svg class="{{z(class)|upset_class()}} quote-body-mark" version="1.1" xmlns="https://www.w3.org/2000/svg" x="0px" y="0px" width="66px" height="49px" viewbox="0 0 66 49" enable-background="new 0 0 66 49" xml:space="preserve">
                                        <g></g>
                                    <path d="M36.903,49v-3.098c9.203-5.315,14.885-12.055,17.042-20.222c-2.335,1.524-4.459,2.288-6.37,2.288						c-3.186,0-5.875-1.29-8.071-3.876c-2.194-2.583-3.293-5.74-3.293-9.479c0-4.133,1.443-7.605,4.327-10.407						C43.425,1.405,46.973,0,51.185,0c4.213,0,7.735,1.784,10.566,5.352C64.585,8.919,66,13.359,66,18.669						c0,7.482-2.85,14.183-8.549,20.112C51.751,44.706,44.902,48.112,36.903,49z M0.69,49v-3.098						c9.205-5.315,14.887-12.055,17.044-20.222c-2.335,1.524-4.478,2.288-6.423,2.288c-3.152,0-5.823-1.29-8.02-3.876						C1.096,21.51,0,18.353,0,14.614c0-4.133,1.434-7.605,4.301-10.407C7.168,1.405,10.709,0,14.92,0c4.247,0,7.778,1.784,10.592,5.352						c2.814,3.567,4.223,8.007,4.223,13.317c0,7.482-2.843,14.183-8.524,20.112C15.53,44.706,8.69,48.112,0.69,49z"></path>
                                    </svg>
                            </div>
                            <div class="{{z(class)|upset_class()}} quote-image">
                                <img src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="90" height="90">
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