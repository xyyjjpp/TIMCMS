<div data-app-id="{{z(class)|upset_class()}}" class="footer-middle">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="widget-widgets-company-info white">
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-logo">
                        <a data-app-id="{{z(class)|upset_class()}}" class="logo_img" href="{{host}}" title="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                            <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                        </a>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="company-info-desc">
                        <p>{{z(about_text)}}</p>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="company_icon">
                        <a href="{{host}}">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{host}}">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-instagram"></i>
                        </a>
                        <a href="{{host}}">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-twitter"></i>
                        </a>
                        <a href="{{host}}">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-2 col-md-6 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="widget widget-nav-menu">
                    <h4 data-app-id="{{z(class)|upset_class()}}" class="widget-title">
                        <span>导航</span>
                    </h4>
                    <div data-app-id="{{z(class)|upset_class()}}" class="menu-quick-link-content">
                        <ul data-app-id="{{z(class)|upset_class()}}" class="menu">
                            {{$channels=c(0,999,0,1)}}
                            {{loop $channels as $channel}}
                            {{if $channel['cid']!=1}}
                            <li>
                                <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                            </li>
                            {{/if}}
                            {{/loop}}
                        </ul>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="widget-footer-title">
                    <h4 data-app-id="{{z(class)|upset_class()}}" class="widget-title">
                        <span>网站地图</span>
                    </h4>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-recent-post">
                    <ul data-app-id="{{z(class)|upset_class()}}" class="menu">
                        <li>
                            <a href="/sitemap.xml">SiteMap</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6 col-sm-12">
                <div id="footer-widget-address">
                    <h4 data-app-id="{{z(class)|upset_class()}}" class="widget-title">
                        <span>{{i(name,6)}}</span>
                    </h4>
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer-inner">
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-icon">
                            <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-call"></i>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-info">
                            <p>
                                <span>{{z(phone)}}</span>
                            </p>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer-inner">
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-icon">
                            <i data-app-id="{{z(class)|upset_class()}}" class="icon flaticon-email"></i>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-info">
                            <p>{{z(email)}}</p>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer-inner">
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-icon">
                            <i data-app-id="{{z(class)|upset_class()}}" class="icon flaticon-placeholder-1"></i>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-info2">
                            <p>{{z(address)}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row footer-bottom">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-bottom-content">
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer-bottom-content-copy">
                        <p>Copyright © 2023  - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="scroll-area">
    <div data-app-id="{{z(class)|upset_class()}}" class="top-wrap">
        <div data-app-id="{{z(class)|upset_class()}}" class="go-top-btn-wraper">
            <div data-app-id="{{z(class)|upset_class()}}" class="go-top go-top-button">
                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-arrow-up"></i>
                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-arrow-up"></i>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="search-popup">
    <button data-app-id="{{z(class)|upset_class()}}" class="close-search style-two">
                <span data-app-id="{{z(class)|upset_class()}}" class="flaticon-multiply">
                    <i data-app-id="{{z(class)|upset_class()}}" class="far fa-times-circle"></i>
                </span>
    </button>
    <button data-app-id="{{z(class)|upset_class()}}" class="close-search">
        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-arrow-up"></i>
    </button>
    <form method="post" action="#">
        <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit">
                <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-search"></i>
            </button>
        </div>
    </form>
</div>
<script src="{{tempdir}}static/js/jquery-3.2.1.min.js"></script>
<script src="{{tempdir}}static/js/bootstrap.min.js"></script>
<script src="{{tempdir}}static/js/owl.carousel.min.js"></script>
<script src="{{tempdir}}static/js/jquery.counterup.min.js"></script>
<script src="{{tempdir}}static/js/waypoints.min.js"></script>
<script src="{{tempdir}}static/js/wow.js"></script>
<script src="{{tempdir}}static/js/imagesloaded.pkgd.min.js"></script>
<script src="{{tempdir}}static/js/venobox.js"></script>
<script src="{{tempdir}}static/js/ajax-mail.js"></script>
<script src="{{tempdir}}static/js/animated-text.js"></script>
<script src="{{tempdir}}static/js/venobox.min.js"></script>
<script src="{{tempdir}}static/js/isotope.pkgd.min.js"></script>
<script src="{{tempdir}}static/js/jquery.nivo.slider.pack.js"></script>
<script src="{{tempdir}}static/js/jquery.meanmenu.js"></script>
<script src="{{tempdir}}static/js/popper.min.js"></script>
<script src="{{tempdir}}static/js/jquery.scrollUp.js"></script>
<script src="{{tempdir}}static/js/theme.js"></script>
<script src="{{tempdir}}static/js/slick.js"></script>
<script src="{{tempdir}}static/js/slick.min.js"></script>
<script src="{{tempdir}}static/js/jquery.barfiller.js"></script>
<script>
    $(document).ready(function(){
        $('#bar3').barfiller({ duration: 7000 });
        $('#bar4').barfiller({ duration: 7000 });});
</script>
<script>
    (function($) {
        $('.accordion > li:eq(0) a').addClass('active').next().slideDown();
        $('.accordion a').click(function(j) {
            var dropDown = $(this).closest('li').find('p');
            $(this).closest('.accordion').find('p').not(dropDown).slideUp();
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).closest('.accordion').find('a.active').removeClass('active');
                $(this).addClass('active');
            }
            dropDown.stop(false, true).slideToggle();
            j.preventDefault();
        });
    })(jQuery);
</script>
<script>
    $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });
    $('.go-top').on('click', function () {
        $("html, body").animate({
            scrollTop: "0"
        }, 1200);
    });
</script>
<script>
    "use strict";
    jQuery(document).ready(function (o) {
        0 < o(".offset-side-bar").length &&
        o(".offset-side-bar").on("click", function (e) {
            e.preventDefault(), e.stopPropagation(), o(".cart-group").addClass("isActive");
        }),
        0 < o(".close-side-widget").length &&
        o(".close-side-widget").on("click", function (e) {
            e.preventDefault(), o(".cart-group").removeClass("isActive");
        }),
        0 < o(".navSidebar-button").length &&
        o(".navSidebar-button").on("click", function (e) {
            e.preventDefault(), e.stopPropagation(), o(".info-group").addClass("isActive");
        }),
        0 < o(".close-side-widget").length &&
        o(".close-side-widget").on("click", function (e) {
            e.preventDefault(), o(".info-group").removeClass("isActive");
        }),
            o("body").on("click", function (e) {
                o(".info-group").removeClass("isActive"), o(".cart-group").removeClass("isActive");
            }),
            o(".xs-sidebar-widget").on("click", function (e) {
                e.stopPropagation();
            }),
        0 < o(".xs-modal-popup").length &&
        o(".xs-modal-popup").magnificPopup({
            type: "inline",
            fixedContentPos: !2,
            fixedBgPos: !0,
            overflowY: "auto",
            closeBtnInside: !2,
            callbacks: {
                beforeOpen: function () {
                    this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
                },
            },
        });
    });
</script>