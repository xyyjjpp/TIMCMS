<footer class="{{z(class)|upset_class()}} section-relative section-top-66 section-bottom-34 page-footer bg-gray-base context-dark novi-background bg-cover">
    <div class="{{z(class)|upset_class()}} container">
        <div class="{{z(class)|upset_class()}} row row-fix justify-content-md-center text-xl-start">
            <div class="{{z(class)|upset_class()}} col-md-8 col-lg-12">
                <div class="{{z(class)|upset_class()}} row row-50 row-lg-60 row-fix justify-content-sm-center">
                    <div class="{{z(class)|upset_class()}} col-sm-7 text-sm-start col-lg-4 col-xl-3 order-xl-4">
                        <h6 class="{{z(class)|upset_class()}} text-uppercase text-spacing-60">最新新闻</h6>
                        <div class="{{z(class)|upset_class()}} widget-post-wrap">
                            {{$set=array()}}
                            {{$set['cid']=0}}
                            {{$set['pagesize']=3}}
                            {{$set['column']=id,title,shijian}}
                            {{$articles=alist($set)}}
                            {{loop $articles['list'] as $a}}
                            <article class="{{z(class)|upset_class()}} post widget-post text-start">
                                <a href="{{$a['link']}}">
                                    <div class="{{z(class)|upset_class()}} unit flex-row unit-spacing-xs align-items-center">
                                        <div class="{{z(class)|upset_class()}} unit-body">
                                            <div class="{{z(class)|upset_class()}} post-meta">
                                                <span class="{{z(class)|upset_class()}} icon-xxs text-primary mdi mdi-arrow-right"></span>
                                                <time class="{{z(class)|upset_class()}} text-dark" datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} post-title">
                                                <h6 class="{{z(class)|upset_class()}} text-regular">{{$a['title']}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </article>
                            {{/loop}}
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} col-sm-5 text-sm-start col-lg-3 col-xl-2 order-xl-3">
                        <h6 class="{{z(class)|upset_class()}} text-uppercase text-spacing-60">导航</h6>
                        <div class="{{z(class)|upset_class()}} d-block">
                            <div class="{{z(class)|upset_class()}} d-inline-block">
                                <ul class="{{z(class)|upset_class()}} list list-marked">
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
                    </div>
                    <div class="{{z(class)|upset_class()}} col-sm-12 col-lg-5 text-lg-start col-xl-4 order-xl-2">
                        <h6 class="{{z(class)|upset_class()}} text-uppercase text-spacing-60">订阅</h6>
                        <div class="{{z(class)|upset_class()}} offset-top-30">
                            <form class="{{z(class)|upset_class()}} rd-mailform" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="{{host}}">
                                <div class="{{z(class)|upset_class()}} form-group">
                                    <div class="{{z(class)|upset_class()}} input-group input-group-sm">
                                                    <span class="{{z(class)|upset_class()}} input-group-text input-group-icon">
                                                        <span class="{{z(class)|upset_class()}} novi-icon mdi mdi-email"></span>
                                                    </span>
                                        <div class="{{z(class)|upset_class()}} form-wrap">
                                            <label class="{{z(class)|upset_class()}} form-label" for="footer-name">Type your E-Mail</label>
                                            <input class="{{z(class)|upset_class()}} form-control" id="footer-name" type="email" name="email" data-constraints="@Required @Email">
                                        </div>
                                        <button class="{{z(class)|upset_class()}} btn btn-sm btn-primary" type="submit">提交</button>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} form-output" id="form-subscribe-footer"></div>
                            </form>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} col-sm-12 col-xl-3 order-xl-1">
                        <div class="{{z(class)|upset_class()}} footer-brand">
                            <a href="{{host}}">
                                <img width='207' height='41' src='{{z(logo)}}' alt='<?php echo explode_array("&#x2c;",z('keywords'),0) ?>'>
                            </a>
                        </div>
                        <ul class="{{z(class)|upset_class()}} list-inline offset-top-20 offset-lg-top-34">
                            <li class="{{z(class)|upset_class()}} list-inline-item">
                                <a class="{{z(class)|upset_class()}} icon novi-icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="{{host}}"></a>
                            </li>
                            <li class="{{z(class)|upset_class()}} list-inline-item">
                                <a class="{{z(class)|upset_class()}} icon novi-icon fa fa-twitter icon-xxs icon-circle icon-darkest-filled" href="{{host}}"></a>
                            </li>
                            <li class="{{z(class)|upset_class()}} list-inline-item">
                                <a class="{{z(class)|upset_class()}} icon novi-icon fa fa-google-plus icon-xxs icon-circle icon-darkest-filled" href="{{host}}"></a>
                            </li>
                            <li class="{{z(class)|upset_class()}} list-inline-item">
                                <a class="{{z(class)|upset_class()}} icon novi-icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="{{host}}"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{z(class)|upset_class()}} container offset-top-50">
        <p class="{{z(class)|upset_class()}} small text-darker">&copy; <span class="{{z(class)|upset_class()}} copyright-year"></span> - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a>
        </p>
    </div>
</footer>
</div>
<script src="{{tempdir}}assets/js/core.min.js"></script>
<script src="{{tempdir}}assets/js/script.js"></script>