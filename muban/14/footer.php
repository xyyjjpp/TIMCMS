<div data-app-id="{{z(class)|upset_class()}}" class="footer-section">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-title">
                    <h2><?php echo explode_array("&#x2c;",z('keywords'),0) ?></h2>
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
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6">
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
                    </ul>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-title">
                    <h2>网站地图</h2>
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
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-logo">
                    <img src="{{z(logo)}}" alt="">
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-right-side">
                            <span>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-map-marker-alt"></i> {{z(address)}}
                            </span>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-btn">
                    <form id="contact_form2" action="{{host}}" method="POST">
                        <input type="email" placeholder="Enter email address" data-app-id="{{z(class)|upset_class()}}" class="footer-email" required="">
                        <button type="submit" data-app-id="{{z(class)|upset_class()}}" class="btn-control">Subscribe</button>
                    </form>
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
                    <p>© 2023  - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .</p>
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
    <form method="post" action="{{host}}">
        <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit">
                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-search"></i>
            </button>
        </div>
    </form>
</div>
<script src="{{tempdir}}static/js/jquery-3.2.1.min.js"></script>
<script src="{{tempdir}}static/js/bootstrap.min.js"></script>
<script src="{{tempdir}}static/js/particles.min.js"></script>
<script src="{{tempdir}}static/js/stats.js"></script>
<script src="{{tempdir}}static/js/ajax-mail.js"></script>
<script src="{{tempdir}}static/js/owl.carousel.min.js"></script>
<script src="{{tempdir}}static/js/jquery.counterup.min.js"></script>
<script src="{{tempdir}}static/js/waypoints.min.js"></script>
<script src="{{tempdir}}static/js/jquery.counterup.min.js"></script>
<script src="{{tempdir}}static/js/circle-progress.js"></script>
<script src="{{tempdir}}static/js/imagesloaded.pkgd.min.js"></script>
<script src="{{tempdir}}static/js/isotope.pkgd.min.js"></script>
<script src="{{tempdir}}static/js/animated-text.js"></script>
<script src="{{tempdir}}static/js/wow.min.js"></script>
<script src="{{tempdir}}static/js/venobox.js"></script>
<script src="{{tempdir}}static/js/venobox.min.js"></script>
<script src="{{tempdir}}static/js/jquery.meanmenu.js"></script>
<script src="{{tempdir}}static/js/jquery.nav.js"></script>
<script src="{{tempdir}}static/js/jquery.scrollUp.js"></script>
<script src="{{tempdir}}static/js/theme.js"></script>