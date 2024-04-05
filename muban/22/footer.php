<section data-app-id="{{z(class)|upset_class()}}" class="pre-footer-corporate bg-gray-dark">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-10 col-md-6 col-lg-10 col-xl-3">
                <a data-app-id="{{z(class)|upset_class()}}" class="brand" href="{{host}}">
                    <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                </a>
                <p>{{z(about_text)}}</p>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-10 col-md-6 col-lg-3 col-xl-3">
                <h6>导航</h6>
                <ul data-app-id="{{z(class)|upset_class()}}" class="list-xxs list-primary">
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
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-10 col-md-6 col-lg-5 col-xl-3">
                <h6>最新咨询</h6>
                <ul data-app-id="{{z(class)|upset_class()}}" class="list-xs">
                    {{$set=array()}}
                    {{$set['cid']=0}}
                    {{$set['pagesize']=3}}
                    {{$set['column']=id,title,shijian}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <li>
                        <article data-app-id="{{z(class)|upset_class()}}" class="comment-minimal">
                            <p data-app-id="{{z(class)|upset_class()}}" class="comment-minimal__author">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</p>
                            <p data-app-id="{{z(class)|upset_class()}}" class="comment-minimal__link">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </p>
                        </article>
                    </li>
                    {{/loop}}
                </ul>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-10 col-md-6 col-lg-4 col-xl-3">
                <h6>{{i(name,6)}}</h6>
                <ul data-app-id="{{z(class)|upset_class()}}" class="list-xs">
                    <li>
                        <dl data-app-id="{{z(class)|upset_class()}}" class="list-terms-minimal">
                            <dt>地址</dt>
                            <dd>{{z(address)}}</dd>
                        </dl>
                    </li>
                    <li>
                        <dl data-app-id="{{z(class)|upset_class()}}" class="list-terms-minimal">
                            <dt>电话</dt>
                            <dd>
                                <ul data-app-id="{{z(class)|upset_class()}}" class="list-semicolon">
                                    <li>
                                        <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl data-app-id="{{z(class)|upset_class()}}" class="list-terms-minimal">
                            <dt>邮箱</dt>
                            <dd>
                                <a data-app-id="{{z(class)|upset_class()}}" class="link-primary" href="mailto:{{z(email)}}">{{z(email)}}</a>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl data-app-id="{{z(class)|upset_class()}}" class="list-terms-minimal">
                            <dt>工作时间</dt>
                            <dd>周一至周五：上午 10 点至晚上 8 点</dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<footer data-app-id="{{z(class)|upset_class()}}" class="footer-corporate bg-gray-darker">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="footer-corporate__inner">
            <p data-app-id="{{z(class)|upset_class()}}" class="rights">
                <span>Construction</span>
                <span>&nbsp;</span>
                <span data-app-id="{{z(class)|upset_class()}}" class="copyright-year"></span> - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
            </p>
            <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline-xxs">
                <li>
                    <a data-app-id="{{z(class)|upset_class()}}" class="icon icon-xxs icon-gray-darker fa fa-facebook" href="{{host}}"></a>
                </li>
                <li>
                    <a data-app-id="{{z(class)|upset_class()}}" class="icon icon-xxs icon-gray-darker fa fa-twitter" href="{{host}}"></a>
                </li>
                <li>
                    <a data-app-id="{{z(class)|upset_class()}}" class="icon icon-xxs icon-gray-darker fa fa-google-plus" href="{{host}}"></a>
                </li>
                <li>
                    <a data-app-id="{{z(class)|upset_class()}}" class="icon icon-xxs icon-gray-darker fa fa-vimeo" href="{{host}}"></a>
                </li>
                <li>
                    <a data-app-id="{{z(class)|upset_class()}}" class="icon icon-xxs icon-gray-darker fa fa-youtube" href="{{host}}"></a>
                </li>
                <li>
                    <a data-app-id="{{z(class)|upset_class()}}" class="icon icon-xxs icon-gray-darker fa fa-pinterest" href="{{host}}"></a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="snackbars" id="form-output-global"></div>
<script src="{{tempdir}}static/js/core.min.js"></script>
<script src="{{tempdir}}static/js/script.js"></script>