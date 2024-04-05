<footer data-app-id="{{z(class)|upset_class()}}" class="main-footer">
    <div data-app-id="{{z(class)|upset_class()}}" class="widgets-section">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row clearfix">
                <div data-app-id="{{z(class)|upset_class()}}" class="column col-md-12 col-sm-12 col-xs-12">
                    <div data-app-id="{{z(class)|upset_class()}}" class="row clearfix">
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-column col-md-4 col-sm-6 col-xs-12">
                            <div data-app-id="{{z(class)|upset_class()}}" class="footer-widget logo-widget">
                                <div data-app-id="{{z(class)|upset_class()}}" class="logo">
                                    <a href="{{host}}">
                                        <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                                    </a>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="widget-content">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="text">{{z(about_text)}}</div>
                                </div>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-column col-md-5 col-sm-6 col-xs-12">
                            <div data-app-id="{{z(class)|upset_class()}}" class="footer-widget link-widget">
                                <div data-app-id="{{z(class)|upset_class()}}" class="footer-title">
                                    <h2>{{i(name,6)}}</h2>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="separator"></div>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="widget-content">
                                    <ul>
                                        <li>
                                            <span>邮箱:</span>
                                            <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                                        </li>
                                        <li>
                                            <span>电话:</span> {{z(phone)}}
                                        </li>
                                        <li>
                                            <span>地址:</span> {{z(address)}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-column col-md-3 col-sm-6 col-xs-12">
                            <div data-app-id="{{z(class)|upset_class()}}" class="footer-widget logo-widget">
                                <div data-app-id="{{z(class)|upset_class()}}" class="footer-title">
                                    <h2>找到我们</h2>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="separator"></div>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="widget-content">
                                    <ul data-app-id="{{z(class)|upset_class()}}" class="social-icon-two">
                                        <li>
                                            <a href="{{host}}">
                                                <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-instagram"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{host}}">
                                                <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{host}}">
                                                <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-linkedin"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{host}}">
                                                <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-pinterest"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{host}}">
                                                <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{host}}">
                                                <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-youtube"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-app-id="{{z(class)|upset_class()}}" class="footer-bottom">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row clearfix">
                <div data-app-id="{{z(class)|upset_class()}}" class="column col-md-6 col-sm-6 col-xs-12">
                    <div data-app-id="{{z(class)|upset_class()}}" class="copyright">Copyright &copy; 2023  - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> . </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="column col-md-6 col-sm-6 col-xs-12">
                    <ul data-app-id="{{z(class)|upset_class()}}" class="foter-nav">
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
    </div>
</footer>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="scroll-to-top scroll-to-target" data-target="html">
    <span data-app-id="{{z(class)|upset_class()}}" class="fa fa-arrow-up"></span>
</div>
<script data-cfasync="false" src="{{tempdir}}static/js/email-decode.min.js"></script>
<script src="{{tempdir}}static/js/jquery.js"></script>
<script src="{{tempdir}}static/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{tempdir}}static/js/jquery.themepunch.tools.min.js"></script>
<script src="{{tempdir}}static/js/revolution.extension.actions.min.js"></script>
<script src="{{tempdir}}static/js/revolution.extension.carousel.min.js"></script>
<script src="{{tempdir}}static/js/revolution.extension.kenburn.min.js"></script>
<script src="{{tempdir}}static/js/revolution.extension.layeranimation.min.js"></script>
<script src="{{tempdir}}static/js/revolution.extension.migration.min.js"></script>
<script src="{{tempdir}}static/js/revolution.extension.migration.min.js"></script>
<script src="{{tempdir}}static/js/revolution.extension.parallax.min.js"></script>
<script src="{{tempdir}}static/js/revolution.extension.slideanims.min.js"></script>
<script src="{{tempdir}}static/js/revolution.extension.video.min.js"></script>
<script src="{{tempdir}}static/js/main-slider-script.js"></script>
<script src="{{tempdir}}static/js/modernizr.min.js"></script>
<script src="{{tempdir}}static/js/bootstrap.min.js"></script>
<script src="{{tempdir}}static/js/jquery.fancybox.pack.js"></script>
<script src="{{tempdir}}static/js/jquery.fancybox-media.js"></script>
<script src="{{tempdir}}static/js/owl.js"></script>
<script src="{{tempdir}}static/js/mixitup.js"></script>
<script src="{{tempdir}}static/js/appear.js"></script>
<script src="{{tempdir}}static/js/script.js"></script>