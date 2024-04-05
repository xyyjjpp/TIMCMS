<footer data-app-id="{{z(class)|upset_class()}}" class="section footer-corporate context-dark">
    <div data-app-id="{{z(class)|upset_class()}}" class="footer-corporate-inset">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-40 justify-content-lg-between">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                    <div data-app-id="{{z(class)|upset_class()}}" class="oh-desktop">
                        <div data-app-id="{{z(class)|upset_class()}}" class="wow slideInRight" data-wow-delay="0s">
                            <h5 data-app-id="{{z(class)|upset_class()}}" class="text-spacing-100">{{i(name,6)}}</h5>
                            <ul data-app-id="{{z(class)|upset_class()}}" class="footer-contacts d-inline-block d-sm-block">
                                <li>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                            <span data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-phone"></span>
                                        </div>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                            <a data-app-id="{{z(class)|upset_class()}}" class="link-phone" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                            <span data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-envelope"></span>
                                        </div>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                            <a data-app-id="{{z(class)|upset_class()}}" class="link-aemail" href="mailto:{{z(email)}}">{{z(email)}}</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                            <span data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-location-arrow"></span>
                                        </div>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                            <a data-app-id="{{z(class)|upset_class()}}" class="link-location" href="{{host}}">{{z(address)}}</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                    <div data-app-id="{{z(class)|upset_class()}}" class="oh-desktop">
                        <div data-app-id="{{z(class)|upset_class()}}" class="wow slideInDown" data-wow-delay="0s">
                            <h5 data-app-id="{{z(class)|upset_class()}}" class="text-spacing-100">最新新闻</h5>
                            {{$set=array()}}
                            {{$set['cid']=4}}
                            {{$set['pagesize']=2}}
                            {{$set['column']=id,title,shijian}}
                            {{$articles=alist($set)}}
                            {{loop $articles['list'] as $a}}
                            <article data-app-id="{{z(class)|upset_class()}}" class="post post-minimal-2">
                                <p data-app-id="{{z(class)|upset_class()}}" class="post-minimal-2-title">
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </p>
                                <div data-app-id="{{z(class)|upset_class()}}" class="post-minimal-2-time">
                                    <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                            </article>
                            {{/loop}}
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                    <div data-app-id="{{z(class)|upset_class()}}" class="oh-desktop">
                        <div data-app-id="{{z(class)|upset_class()}}" class="wow slideInLeft" data-wow-delay="0s">
                            <h5 data-app-id="{{z(class)|upset_class()}}" class="text-spacing-100">导航</h5>
                            <ul data-app-id="{{z(class)|upset_class()}}" class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
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
    </div>
    <div data-app-id="{{z(class)|upset_class()}}" class="footer-corporate-bottom-panel">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-10 align-items-md-center">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-md-4 text-sm-end text-md-center">
                    <div>
                        <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline list-inline-sm footer-social-list-2">
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-facebook" href="{{host}}"></a>
                            </li>
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-twitter" href="{{host}}"></a>
                            </li>
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-google-plus" href="{{host}}"></a>
                            </li>
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-instagram" href="{{host}}"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-md-4 order-sm-first">
                    <p data-app-id="{{z(class)|upset_class()}}" class="rights">
                        <span>&copy;&nbsp;</span>
                        <span data-app-id="{{z(class)|upset_class()}}" class="copyright-year"></span> - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="snackbars" id="form-output-global"></div>
<script src="{{tempdir}}static/js/core.min.js"></script>
<script src="{{tempdir}}static/js/script.js"> </script>