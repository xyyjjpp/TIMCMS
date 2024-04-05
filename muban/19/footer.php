<div data-app-id="{{z(class)|upset_class()}}" class="footer_area">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-12 col-sm-12 col-xs-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="coppyright">
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer_logo">
                        <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer_text">
                        <p>{{z(about_text)}}</p>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer_social_icon">
                        <a href="{{host}}">
                            <span data-app-id="{{z(class)|upset_class()}}" class="ti-facebook"></span>
                        </a>
                        <a href="{{host}}">
                            <span data-app-id="{{z(class)|upset_class()}}" class="ti-twitter-alt"></span>
                        </a>
                        <a href="{{host}}">
                            <span data-app-id="{{z(class)|upset_class()}}" class="ti-tumblr-alt"></span>
                        </a>
                        <a href="{{host}}">
                            <span data-app-id="{{z(class)|upset_class()}}" class="ti-yahoo"></span>
                        </a>
                        <a href="{{host}}">
                            <span data-app-id="{{z(class)|upset_class()}}" class="ti-linkedin"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="footer-bottom">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-sm-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="copy-right-text">
                    <p>Copyright © <?php echo date('Y') ?>  - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .</p>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-sm-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-menu">
                    <ul data-app-id="{{z(class)|upset_class()}}" class="text-right">
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
</div>
<script type="text/javascript" src="{{tempdir}}static/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery.directional-hover.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery.meanmenu.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery.scrollUp.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/slick.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery.nav.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/wow.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/headroom.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/animated-text.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/particles.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/venobox.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/waypoints.min.js"></script>
<script type="text/javascript" src="{{tempdir}}static/js/theme.js"></script>