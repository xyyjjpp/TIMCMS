<div data-app-id="{{z(class)|upset_class()}}" class="footer-area">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-logo">
                    <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-footer-content">
                    <p>{{z(about_text)}}</p>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-footer-social-address">
                    <ul>
                        <li>
                            <a href="{{host}}">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{host}}">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{host}}">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{host}}">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-content pt-20">
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer-title">
                        <h2>导航</h2>
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
                            <li>
                                <a href="/sitemap.xml">SiteMap</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-content pt-20">
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer-title">
                        <h2>{{i(name,6)}}</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer-adderss">
                        <p>
                            <b>地址:</b>
                            <span> {{z(address)}}</span>
                        </p>
                        <p>
                            <b>电话:</b>
                            <span>{{z(phone)}}</span>
                        </p>
                        <p>
                            <b>邮箱:</b>
                            <span>{{z(email)}}</span>
                        </p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-content pt-20 mb-30">
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer-title">
                        <h2>订阅我们的邮箱</h2>
                        <p>获取最新咨询和优惠等消息</p>
                    </div>
                    <form>
                        <div data-app-id="{{z(class)|upset_class()}}" class="subscribe-area">
                            <input data-app-id="{{z(class)|upset_class()}}" class="subscribe-mail-box" type="email" placeholder="Your Email...." required="">
                            <button type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="footer-bottom-area">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="copy-right-text">
                    <p>Copyright © <?php echo date('Y')?> - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .</p>
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
<script src="{{tempdir}}static/js/jquery-3.2.1.min.js"></script>
<script src="{{tempdir}}static/js/bootstrap.min.js"></script>
<script src="{{tempdir}}static/js/owl.carousel.min.js"></script>
<script src="{{tempdir}}static/js/jquery.counterup.min.js"></script>
<script src="{{tempdir}}static/js/waypoints.min.js"></script>
<script src="{{tempdir}}static/js/wow.js"></script>
<script src="{{tempdir}}static/js/imagesloaded.pkgd.min.js"></script>
<script src="{{tempdir}}static/js/venobox.js"></script>
<script src="{{tempdir}}static/js/animated-text.js"></script>
<script src="{{tempdir}}static/js/venobox.min.js"></script>
<script src="{{tempdir}}static/js/isotope.pkgd.min.js"></script>
<script src="{{tempdir}}static/js/jquery.nivo.slider.pack.js"></script>
<script src="{{tempdir}}static/js/jquery.meanmenu.js"></script>
<script src="{{tempdir}}static/js/popper.min.js"></script>
<script src="{{tempdir}}static/js/jquery.scrollUp.js"></script>
<script src="{{tempdir}}static/js/jquery.scrollUp.js"></script>
<script src="{{tempdir}}static/js/jquery-ui.min.js"></script>
<script src="{{tempdir}}static/js/main.js"></script>
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