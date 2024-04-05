<footer class="{{z(class)|upset_class()}} section-65 page-footer bg-dark-blue section-skew context-dark">
    <div class="{{z(class)|upset_class()}} shell">
        <div class="{{z(class)|upset_class()}} range range-xs-center range-sm-top">
            <div class="{{z(class)|upset_class()}} cell-xs-10 cell-md-4 text-md-left cell-md-middle cell-md-push-2">
                <h5>最新资讯</h5>
                <div class="{{z(class)|upset_class()}} offset-top-20">
                    {{$set=array()}}
                    {{$set['cid']=0}}
                    {{$set['pagesize']=3}}
                    {{$set['column']=id,title,shijian}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <div class="{{z(class)|upset_class()}} offset-top-25">
                        <p class="{{z(class)|upset_class()}} text-bold text-primary font-accent text-line-height-125">
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </p>
                        <ul class="{{z(class)|upset_class()}} list-inline">
                            <li>
                                <span class="{{z(class)|upset_class()}} icon icon-xxs fa-calendar text-dark text-middle"></span>
                                <time class="{{z(class)|upset_class()}} text-dark inset-left-5 text-middle" datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                            </li>
                        </ul>
                    </div>
                    {{/loop}}
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} cell-xs-10 cell-md-4 offset-top-50 offset-md-top-0 text-md-left cell-md-push-3">
                <h5><?php echo explode_array("&#x2c;",z('keywords'),0) ?></h5>
                <p class="{{z(class)|upset_class()}} text-dark">{{z(description)}}</p>
            </div>
            <div class="{{z(class)|upset_class()}} cell-xs-10 cell-md-4 text-md-left cell-md-push-1 offset-top-50 offset-md-top-0">
                <a href="{{host}}">
                    <img width='165' height='76' src='{{z(logo)}}' alt='<?php echo explode_array("&#x2c;",z('keywords'),0) ?>'>
                </a>
                <div class="{{z(class)|upset_class()}} offset-top-30">
                    <ul class="{{z(class)|upset_class()}} list-inline list-inline-dark">
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xxs fa-facebook" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xxs fa-twitter" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xxs fa-pinterest" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xxs fa-vimeo" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xxs fa-google" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xxs fa-rss" href="{{host}}"></a>
                        </li>
                    </ul>
                </div>
                <div class="{{z(class)|upset_class()}} offset-md-top-145 offset-top-20">
                    <p class="{{z(class)|upset_class()}} text-dark">&copy; <span id="copyright-year"></span>- All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="{{tempdir}}assets/js/core.min.js"></script>
<script src="{{tempdir}}assets/js/script.js"> </script>