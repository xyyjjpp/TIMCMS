<footer class="{{z(class)|upset_class()}} section footer-corporate footer-corporate-2 bg-gray-800">
    <div class="{{z(class)|upset_class()}} footer-corporate-inset">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-40 justify-content-lg-between">
                <div class="{{z(class)|upset_class()}} col-sm-6 col-md-12 col-lg-3 col-xl-4">
                    <div class="{{z(class)|upset_class()}} oh-desktop">
                        <div class="{{z(class)|upset_class()}} wow slideInRight" data-wow-delay="0s">
                            <h6 class="{{z(class)|upset_class()}} text-spacing-100 rd-range-title">找到我们</h6>
                            <ul class="{{z(class)|upset_class()}} footer-contacts d-inline-block d-sm-block">
                                <li>
                                    <div class="{{z(class)|upset_class()}} unit">
                                        <div class="{{z(class)|upset_class()}} unit-left">
                                            <span class="{{z(class)|upset_class()}} icon fa fa-phone"></span>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} unit-body">
                                            <a class="{{z(class)|upset_class()}} link-phone" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="{{z(class)|upset_class()}} unit">
                                        <div class="{{z(class)|upset_class()}} unit-left">
                                            <span class="{{z(class)|upset_class()}} icon fa fa-envelope"></span>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} unit-body">
                                            <a class="{{z(class)|upset_class()}} link-aemail" href="mailto:{{z(email)}}">{{z(email)}}</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="{{z(class)|upset_class()}} unit">
                                        <div class="{{z(class)|upset_class()}} unit-left">
                                            <span class="{{z(class)|upset_class()}} icon fa fa-location-arrow"></span>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} unit-body">
                                            <a class="{{z(class)|upset_class()}} link-location" href="{{host}}">{{z(address)}}</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-6 col-md-5 col-lg-3 col-xl-4">
                    <div class="{{z(class)|upset_class()}} oh-desktop">
                        <div class="{{z(class)|upset_class()}} wow slideInDown" data-wow-delay="0s">
                            <h6 class="{{z(class)|upset_class()}} text-spacing-100 rd-range-title">最新资讯</h6>
                            {{$set=array()}}
                            {{$set['cid']=0}}
                            {{$set['pagesize']=2}}
                            {{$set['column']=id,title,shijian}}
                            {{$articles=alist($set)}}
                            {{loop $articles['list'] as $a}}
                            <article class="{{z(class)|upset_class()}} post post-minimal-2">
                                <p class="{{z(class)|upset_class()}} post-minimal-2-title">
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </p>
                                <div class="{{z(class)|upset_class()}} post-minimal-2-time">
                                    <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                            </article>
                            {{/loop}}
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-11 col-md-7 col-lg-5 col-xl-4">
                    <div class="{{z(class)|upset_class()}} oh-desktop">
                        <div class="{{z(class)|upset_class()}} wow slideInLeft" data-wow-delay="0s">
                            <h6 class="{{z(class)|upset_class()}} text-spacing-100 rd-range-title">导航</h6>
                            <ul class="{{z(class)|upset_class()}} row-6 list-0 list-marked list-marked-md list-custom-2 list-marked-third">
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
    <div class="{{z(class)|upset_class()}} footer-corporate-bottom-panel">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-10 align-items-md-center">
                <div class="{{z(class)|upset_class()}} col-sm-6 col-md-4 text-sm-end text-md-center">
                    <div>
                        <ul class="{{z(class)|upset_class()}} list-inline list-inline-sm footer-social-list-2">
                            <li>
                                <a class="{{z(class)|upset_class()}} icon fa fa-facebook" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon fa fa-twitter" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon fa fa-google-plus" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon fa fa-instagram" href="{{host}}"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-6 col-md-4 order-sm-first">
                    <p class="{{z(class)|upset_class()}} rights">
                        <span>&copy;&nbsp;</span>
                        <span class="{{z(class)|upset_class()}} copyright-year"></span>- All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="{{z(class)|upset_class()}} snackbars" id="form-output-global"></div>
<script src="{{tempdir}}assets/js/core.min.js"></script>
<script src="{{tempdir}}assets/js/script.js"></script>