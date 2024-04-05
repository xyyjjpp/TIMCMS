<div data-app-id="{{z(class)|upset_class()}}" class="footer-section">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-logo">
                    <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-text">
                    <p>{{z(about_text)}}</p>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-address">
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer-social-icon">
                        <ul>
                            <li>
                                <a href="{{host}}">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="style2" href="{{host}}">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{host}}">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="style3" href="{{host}}">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-title">
                    <h2>
                        <span>导航</span>
                    </h2>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-menu">
                    <ul>
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
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-title">
                    <h2>
                        <span>网站地图</span>
                    </h2>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-menu">
                    <ul>
                        <li>
                            <a href="/sitemap.xml">SiteMap</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-title">
                    <h2>
                        <span>{{i(name,6)}}</span>
                    </h2>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-contact">
                    <ul>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-phone-volume"></i> {{z(phone)}}
                        </li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-envelope-open-text"></i> {{z(email)}}
                        </li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-map-marker-alt"></i>
                            {{z(address)}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="footer-bottom">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="copy-right-text">
                    <p>Copyright © 2023  - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="search-popup">
    <button data-app-id="{{z(class)|upset_class()}}" class="close-search style-two">
        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-times"></i>
    </button>
    <button data-app-id="{{z(class)|upset_class()}}" class="close-search">
        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-arrow-up"></i>
    </button>
    <form method="post" action="#">
        <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit">
                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-search"></i>
            </button>
        </div>
    </form>
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
<script src="{{tempdir}}static/js/jquery-3.2.1.min.js"></script>
<script src="{{tempdir}}static/js/bootstrap.min.js"></script>
<script src="{{tempdir}}static/js/particles.min.js"></script>
<script src="{{tempdir}}static/js/jquery.scrollUp.js"></script>
<script src="{{tempdir}}static/js/owl.carousel.min.js"></script>
<script src="{{tempdir}}static/js/jquery.counterup.min.js"></script>
<script src="{{tempdir}}static/js/waypoints.min.js"></script>
<script src="{{tempdir}}static/js/jquery.counterup.min.js"></script>
<script src="{{tempdir}}static/js/imagesloaded.pkgd.min.js"></script>
<script src="{{tempdir}}static/js/isotope.pkgd.min.js"></script>
<script src="{{tempdir}}static/js/wow.min.js"></script>
<script src="{{tempdir}}static/js/jquery.meanmenu.js"></script>
<script src="{{tempdir}}static/js/venobox.js"></script>
<script src="{{tempdir}}static/js/venobox.min.js"></script>
<script src="{{tempdir}}static/js/theme.js"></script>
<script>
    "use strict";
    jQuery,
        jQuery(document).ready(function (o) {
            0 < o(".offset-side-bar").length &&
            o(".offset-side-bar").on("click", function (e) {
                e.preventDefault(), e.stopPropagation(), o(".cart-group").addClass("isActive");
            }),
            0 < o(".close").length &&
            o(".close").on("click", function (e) {
                e.preventDefault(), o(".cart-group").removeClass("isActive");
            }),
            0 < o(".navSidebar-button").length &&
            o(".navSidebar-button").on("click", function (e) {
                e.preventDefault(), e.stopPropagation(), o(".info-group").addClass("isActive");
            }),
            0 < o(".close").length &&
            o(".close").on("click", function (e) {
                e.preventDefault(), o(".info-group").removeClass("isActive");
            }),
                o("body").on("click", function (e) {
                    o(".info-group").removeClass("isActive"), o(".cart-group").removeClass("isActive");
                }),
                o(".dt-sidebar-widget").on("click", function (e) {
                    e.stopPropagation();
                }),
            0 < o(".xs-modal-popup").length &&
            o(".xs-modal-popup").magnificPopup({
                type: "inline",
                fixedContentPos: !1,
                fixedBgPos: !0,
                overflowX: "auto",
                closeBtnInside: !1,
                callbacks: {
                    beforeOpen: function () {
                        this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
                    },
                },
            });
        });
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