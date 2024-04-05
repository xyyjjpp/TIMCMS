<footer data-app-id="{{z(class)|upset_class()}}" class="footer-area">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-5 col-sm-7 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-footer-widget pr-5">
                    <a href="{{host}}" data-app-id="{{z(class)|upset_class()}}" class="logo">
                        <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                    </a>
                    <p>{{z(about_text)}}</p>
                    <form data-app-id="{{z(class)|upset_class()}}" class="newsletter-form" data-toggle="validator">
                        <input type="email" data-app-id="{{z(class)|upset_class()}}" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                        <button type="submit">Subscribe</button>
                        <div id="validator-newsletter" data-app-id="{{z(class)|upset_class()}}" class="form-result"></div>
                    </form>
                    <ul data-app-id="{{z(class)|upset_class()}}" class="social-links">
                        <li>
                            <a href="{{host}}" target="_blank">
                                <i data-app-id="{{z(class)|upset_class()}}" class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{host}}" target="_blank">
                                <i data-app-id="{{z(class)|upset_class()}}" class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{host}}" target="_blank">
                                <i data-app-id="{{z(class)|upset_class()}}" class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{host}}" target="_blank">
                                <i data-app-id="{{z(class)|upset_class()}}" class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{host}}" target="_blank">
                                <i data-app-id="{{z(class)|upset_class()}}" class="ri-youtube-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-2 col-sm-5 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-footer-widget">
                    <h3>导航</h3>
                    <ul data-app-id="{{z(class)|upset_class()}}" class="links-list">
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
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-2 col-sm-5 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-footer-widget">
                    <h3>网站地图</h3>
                    <ul data-app-id="{{z(class)|upset_class()}}" class="links-list">
                        <li>
                            <a href="{{host}}/sitemap.xml">SiteMap</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-sm-7 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-footer-widget">
                    <h3>找到我们</h3>
                    <ul data-app-id="{{z(class)|upset_class()}}" class="footer-contact-info">
                        <li>
                            <span>地址:</span> {{z(address)}}
                        </li>
                        <li>
                            <span>邮箱:</span>
                            <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                        </li>
                        <li>
                            <span>电话:</span>
                            <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                        </li>
                    </ul>
                    <ul data-app-id="{{z(class)|upset_class()}}" class="payment-types">
                        <li>
                            <img src="{{tempdir}}assets/img/skrill.png" alt="image">
                        </li>
                        <li>
                            <img src="{{tempdir}}assets/img/visa.png" alt="image">
                        </li>
                        <li>
                            <img src="{{tempdir}}assets/img/master-card.png" alt="image">
                        </li>
                        <li>
                            <img src="{{tempdir}}assets/img/paypal.png" alt="image">
                        </li>
                        <li>
                            <img src="{{tempdir}}assets/img/discover.png" alt="image">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div data-app-id="{{z(class)|upset_class()}}" class="copyright-area">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-7 col-sm-6">
                    Copyright © <?php echo date('Y')?>  - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
                </div>
            </div>
        </div>
    </div>
    <div data-app-id="{{z(class)|upset_class()}}" class="shape1">
        <img src="{{tempdir}}assets/img/shape/shape1.png" alt="image">
    </div>
    <div data-app-id="{{z(class)|upset_class()}}" class="shape2">
        <img src="{{tempdir}}assets/img/shape/shape2.png" alt="image">
    </div>
</footer>
<div data-app-id="{{z(class)|upset_class()}}" class="go-top">
    <i data-app-id="{{z(class)|upset_class()}}" class="ri-arrow-up-s-line"></i>
</div>
<script src="{{tempdir}}assets/js/jquery.min.js"></script>
<script src="{{tempdir}}assets/js/bootstrap.bundle.min.js"></script>
<script src="{{tempdir}}assets/js/owl.carousel.min.js"></script>
<script src="{{tempdir}}assets/js/appear.min.js"></script>
<script src="{{tempdir}}assets/js/odometer.min.js"></script>
<script src="{{tempdir}}assets/js/meanmenu.min.js"></script>
<script src="{{tempdir}}assets/js/wow.min.js"></script>
<script src="{{tempdir}}assets/js/form-validator.min.js"></script>
<script src="{{tempdir}}assets/js/contact-form-script.js"></script>
<script src="{{tempdir}}assets/js/ajaxchimp.min.js"></script>
<script src="{{tempdir}}assets/js/main.js"></script>