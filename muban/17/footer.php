<footer data-app-id="{{z(class)|upset_class()}}" class="footer pt-80 pb-80">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="row">
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-logo text-center mb-55">
                            <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-address text-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="row">
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-4 col-lg-4">
                            <div data-app-id="{{z(class)|upset_class()}}" class="single-footer-address">
                                <div data-app-id="{{z(class)|upset_class()}}" class="address-icon">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-map-marker-alt"></i>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="address-content">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="address-title">
                                        <h5>地址</h5>
                                    </div>
                                    <p data-app-id="{{z(class)|upset_class()}}" class="location">{{z(address)}}</p>
                                </div>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-4 col-lg-4">
                            <div data-app-id="{{z(class)|upset_class()}}" class="single-footer-address">
                                <div data-app-id="{{z(class)|upset_class()}}" class="address-icon">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-envelope"></i>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="address-content">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="address-title">
                                        <h5>邮箱</h5>
                                    </div>
                                    <p data-app-id="{{z(class)|upset_class()}}" class="email">{{z(email)}}</p>
                                </div>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-4 col-lg-4">
                            <div data-app-id="{{z(class)|upset_class()}}" class="single-footer-address">
                                <div data-app-id="{{z(class)|upset_class()}}" class="address-icon">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-phone"></i>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="address-content">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="address-title">
                                        <h5>电话</h5>
                                    </div>
                                    <p data-app-id="{{z(class)|upset_class()}}" class="phone">{{z(phone)}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-menu  text-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="row">
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                            <ul data-app-id="{{z(class)|upset_class()}}" class="footer-menu-list">
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
                <div data-app-id="{{z(class)|upset_class()}}" class="copyright-text text-center">
                    <p>Copyright &copy; 2023  - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .</p>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-social-icon text-center">
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
                                <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{host}}">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<button id="to-top">
    <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-angle-up"></i>
</button>
<script type="text/javascript" src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/circle-progress.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/waypoints.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery.appear.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/wow.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/venobox.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/ajax-mail.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/animated-text.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/venobox.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery.meanmenu.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery.scrollUp.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/uikit.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/swiper.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery.animatedheadline.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/theme.js"></script>