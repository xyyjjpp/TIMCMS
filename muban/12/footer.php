<footer data-app-id="{{z(class)|upset_class()}}" class="section footer-modern footer-modern-2">
    <div data-app-id="{{z(class)|upset_class()}}" class="footer-modern-body section-xl context-dark">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-40 row-md-50 justify-content-xl-between">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-md-7 col-lg-5 wow fadeInRight" data-wow-delay=".1s">
                    <h5 data-app-id="{{z(class)|upset_class()}}" class="footer-modern-title">导航</h5>
                    <ul data-app-id="{{z(class)|upset_class()}}" class="footer-modern-list footer-modern-list-2 d-sm-inline-block d-md-block">
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
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-md-5 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
                    <h5 data-app-id="{{z(class)|upset_class()}}" class="footer-modern-title">找到我们</h5>
                    <ul data-app-id="{{z(class)|upset_class()}}" class="contacts-creative">
                        <li>
                            <div data-app-id="{{z(class)|upset_class()}}" class="unit unit-spacing-sm flex-column flex-md-row">
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon mdi mdi-map-marker"></span>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                    <a href="{{host}}">{{z(address)}}</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div data-app-id="{{z(class)|upset_class()}}" class="unit unit-spacing-sm flex-column flex-md-row">
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon mdi mdi-phone"></span>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                    <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div data-app-id="{{z(class)|upset_class()}}" class="unit unit-spacing-sm flex-column flex-md-row">
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon mdi mdi-email-outline"></span>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                    <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline list-social-3 list-inline-sm">
                        <li>
                            <a data-app-id="{{z(class)|upset_class()}}" class="icon mdi mdi-facebook icon-xxs" href="{{host}}"></a>
                        </li>
                        <li>
                            <a data-app-id="{{z(class)|upset_class()}}" class="icon mdi mdi-twitter icon-xxs" href="{{host}}"></a>
                        </li>
                        <li>
                            <a data-app-id="{{z(class)|upset_class()}}" class="icon mdi mdi-instagram icon-xxs" href="{{host}}"></a>
                        </li>
                        <li>
                            <a data-app-id="{{z(class)|upset_class()}}" class="icon mdi mdi-google-plus icon-xxs" href="{{host}}"></a>
                        </li>
                        <li>
                            <a data-app-id="{{z(class)|upset_class()}}" class="icon mdi mdi-skype icon-xxs" href="{{host}}"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div data-app-id="{{z(class)|upset_class()}}" class="footer-modern-panel text-center">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <p data-app-id="{{z(class)|upset_class()}}" class="rights">
                <span>&copy;&nbsp; </span>2023  - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
            </p>
        </div>
    </div>
</footer>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="snackbars" id="form-output-global"></div>
<script src="{{tempdir}}static/js/core.min.js"></script>
<script src="{{tempdir}}static/js/script.js"></script>