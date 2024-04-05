<div data-app-id="{{z(class)|upset_class()}}" class="footer-middle style_two pt-80 pb-3">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="widget widgets-company-info">
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-logo">
                        <a data-app-id="{{z(class)|upset_class()}}" class="logo_img" href="{{host}}" title="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                            <img src="{{z(logo)}}" alt="{{tempdir}}static/picture/logo.png">
                        </a>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="company-info-desc pr-2">
                        <p>{{z(about_text)}}</p>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="company_icon">
                        <a data-app-id="{{z(class)|upset_class()}}" class="facebook" href="{{host}}">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-facebook-f"></i>
                        </a>
                        <a data-app-id="{{z(class)|upset_class()}}" class="instagram" href="{{host}}">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-instagram"></i>
                        </a>
                        <a data-app-id="{{z(class)|upset_class()}}" class="pinterest" href="{{host}}">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-pinterest-p"></i>
                        </a>
                        <a data-app-id="{{z(class)|upset_class()}}" class="twitter" href="{{host}}">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="widget widget-nav-menu pl-2">
                    <h4 data-app-id="{{z(class)|upset_class()}}" class="widget-title">导航</h4>
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
                            <li>
                                <a href="/sitemap.xml">SiteMap</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-6 col-sm-12">
                <div id="footer-widget-address">
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer-widget-address-inner">
                        <h4 data-app-id="{{z(class)|upset_class()}}" class="widget-title">{{i(name,6)}}</h4>
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-inner pr-2">
                            <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-icon">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-home"></i>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-info">
                                <p>
                                    <span>地址:</span>
                                    <br>{{z(address)}}
                                </p>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-inner pr-2">
                            <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-icon">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-phone"></i>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-info">
                                <p>
                                    <span>电话:</span>
                                    <br>{{z(phone)}}
                                </p>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="footer-inner pr-2">
                            <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-icon">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-globe"></i>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="footer-socail-info">
                                <p>
                                    <span>邮箱:</span>
                                    <br>{{z(email)}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row footer-bottom mt-50">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="footer-bottom-content">
                    <div data-app-id="{{z(class)|upset_class()}}" class="footer-bottom-content-copy">
                        <p>Copyright © 2023  - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .</p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6">
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
        <span data-app-id="{{z(class)|upset_class()}}" class="flaticon-multiply"></span>
    </button>
    <button data-app-id="{{z(class)|upset_class()}}" class="close-search">
        <span data-app-id="{{z(class)|upset_class()}}" class="flaticon-up-arrow-1"></span>
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
<script src="{{tempdir}}static/js/rs6.min.js"></script>
<script src="{{tempdir}}static/js/rbtools.min.js"></script>
<script src="{{tempdir}}static/js/jquery.scrollUp.js"></script>
<script src="{{tempdir}}static/js/theme.js"></script>
<script src="{{tempdir}}static/js/jquery.barfiller.js"></script>
<script>
    $(document).ready(function(){
        $('#bar1').barfiller({ duration: 7000 });
        $('#bar2').barfiller({ duration: 7000 });
        $('#bar3').barfiller({ duration: 7000 });
    });
</script>