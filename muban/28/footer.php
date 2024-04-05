<section class="{{z(class)|upset_class()}} pre-footer-corporate bg-image-7 bg-overlay-darkest">
    <div class="{{z(class)|upset_class()}} container">
        <div class="{{z(class)|upset_class()}} row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
            <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-lg-10 col-xl-3">
                <h6><?php echo explode_array("&#x2c;",z('keywords'),0) ?></h6>
                <p>{{z(description)}}</p>
            </div>
            <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-lg-3 col-xl-3">
                <h6>导航</h6>
                <ul class="{{z(class)|upset_class()}} list-xxs">
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
            <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-lg-5 col-xl-3">
                <h6>最新发布</h6>
                <ul class="{{z(class)|upset_class()}} list-xs">
                    {{$set=array()}}
                    {{$set['cid']=0}}
                    {{$set['pagesize']=3}}
                    {{$set['column']=id,title}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <li>
                        <article class="{{z(class)|upset_class()}} comment-minimal">
                            <p class="{{z(class)|upset_class()}} comment-minimal__link">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </p>
                        </article>
                    </li>
                    {{/loop}}
                </ul>
            </div>
            <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-lg-4 col-xl-3">
                <h6>联系方式</h6>
                <ul class="{{z(class)|upset_class()}} list-xs">
                    <li>
                        <dl class="{{z(class)|upset_class()}} list-terms-minimal">
                            <dt>地址</dt>
                            <dd>{{z(address)}}</dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="{{z(class)|upset_class()}} list-terms-minimal">
                            <dt>电话</dt>
                            <dd>
                                <ul class="{{z(class)|upset_class()}} list-semicolon">
                                    <li>
                                        <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="{{z(class)|upset_class()}} list-terms-minimal">
                            <dt>邮箱</dt>
                            <dd>
                                <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<footer class="{{z(class)|upset_class()}} footer-corporate bg-gray-darkest">
    <div class="{{z(class)|upset_class()}} container">
        <div class="{{z(class)|upset_class()}} footer-corporate__inner">
            <p class="{{z(class)|upset_class()}} rights">
                            <span>theFuture<span>&nbsp;&copy;&nbsp;</span>
                                <span class="{{z(class)|upset_class()}} copyright-year"></span>- All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
                            </span>
            </p>
        </div>
    </div>
</footer>
</div>
<div class="{{z(class)|upset_class()}} snackbars" id="form-output-global"></div>
<script src="{{tempdir}}assets/js/core.min.js"></script>
<script src="{{tempdir}}assets/js/script.js"></script>