<footer id="footer" class="{{z(class)|upset_class()}} footer-section">
    <div class="{{z(class)|upset_class()}} container">
        <div class="{{z(class)|upset_class()}} footer-content pt-5 pb-5">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-xl-4 col-lg-4 mb-50">
                    <div class="{{z(class)|upset_class()}} footer-widget">
                        <div class="{{z(class)|upset_class()}} footer-logo">
                            <a href="{{host}}" class="{{z(class)|upset_class()}} logo d-flex align-items-center">
                                <h1><?php echo explode_array("&#x2c;",z('keywords'),0) ?><span>.</span></h1>
                            </a>
                        </div>
                        <div class="{{z(class)|upset_class()}} footer-text">
                            <p>{{z(description)}}</p>
                        </div>
                        <div class="{{z(class)|upset_class()}} footer-social-icon">
                            <span>社交平台</span>
                            <a href="{{host}}">
                                <i class="{{z(class)|upset_class()}} fa fa-facebook facebook-bg"></i>
                            </a>
                            <a href="{{host}}">
                                <i class="{{z(class)|upset_class()}} fa fa-twitter twitter-bg"></i>
                            </a>
                            <a href="{{host}}">
                                <i class="{{z(class)|upset_class()}} fa fa-google google-bg"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="{{z(class)|upset_class()}} footer-widget">
                        <div class="{{z(class)|upset_class()}} footer-widget-heading">
                            <h3>导航</h3>
                        </div>
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
                <div class="{{z(class)|upset_class()}} col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="{{z(class)|upset_class()}} footer-widget">
                        <div class="{{z(class)|upset_class()}} footer-widget-heading">
                            <h3>订阅</h3>
                        </div>
                        <div class="{{z(class)|upset_class()}} footer-text mb-25">
                            <p>订阅我们的邮箱地址以获取最大的活动优惠力度哦!</p>
                        </div>
                        <div class="{{z(class)|upset_class()}} subscribe-form">
                            <form action="{{host}}">
                                <input type="text" placeholder="Email Address">
                                <button>
                                    <i class="{{z(class)|upset_class()}} fa fa-telegram"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{z(class)|upset_class()}} copyright-area">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-xl-6 col-lg-6 text-left text-lg-left">
                    <div class="{{z(class)|upset_class()}} copyright-text">
                        <p>© <?php echo date('Y') ?> - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="{{z(class)|upset_class()}} scroll-top d-flex align-items-center justify-content-center">
    <i class="{{z(class)|upset_class()}} bi bi-arrow-up-short"></i>
</a>
<script src="{{tempdir}}assets/js/jquery.min.js"></script>
<script src="{{tempdir}}assets/js/glightbox.min.js"></script>
<script src="{{tempdir}}assets/js/bootstrap.bundle.min.js"></script>
<script src="{{tempdir}}assets/js/swiper-bundle.min.js"></script>
<script src="{{tempdir}}assets/js/plugins.js"></script>
<script src="{{tempdir}}assets/js/validator.min.js"></script>
<script src="{{tempdir}}assets/js/contactform.js"></script>
<script src="{{tempdir}}assets/js/main.js"></script>