<section class="{{z(class)|upset_class()}} section pre-footer-light">
    <div class="{{z(class)|upset_class()}} container">
        <div class="{{z(class)|upset_class()}} row row-60">
            <div class="{{z(class)|upset_class()}} col-md-6 col-lg-3 cell-custom">
                <div class="{{z(class)|upset_class()}} brand-name">
                    <a href="{{host}}">
                        <img src="{{z(logo)}}" width="146" height="24" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                    </a>
                </div>
                <p>{{z(description)}}</p>
            </div>
            <div class="{{z(class)|upset_class()}} col-md-6 col-lg-3">
                <h5>最新新闻</h5>
                <ul class="{{z(class)|upset_class()}} list-marked list-marked-1">
                    {{$set=array()}}
                    {{$set['cid']=0}}
                    {{$set['pagesize']=3}}
                    {{$set['column']=id,title}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <li>
                        <a href="{{$a['link']}}">{{$a['title']}}</a>
                    </li>
                    {{/loop}}
                </ul>
            </div>
            <div class="{{z(class)|upset_class()}} col-md-6 col-lg-3">
                <h5>找到我们</h5>
                <ul class="{{z(class)|upset_class()}} list contact-box-small">
                    <li>
                        <div class="{{z(class)|upset_class()}} unit unit-spacing-xxs">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <span class="{{z(class)|upset_class()}} icon icon-xss icon-secondary mdi mdi-map-marker"></span>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <a class="{{z(class)|upset_class()}} link-default" href="{{host}}">{{z(address)}}</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="{{z(class)|upset_class()}} unit unit-spacing-xxs align-items-center">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <span class="{{z(class)|upset_class()}} icon icon-xss icon-secondary mdi mdi-phone"></span>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <a class="{{z(class)|upset_class()}} link-default" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<footer class="{{z(class)|upset_class()}} section page-footer page-footer-light bg-primary-dark">
    <div class="{{z(class)|upset_class()}} container text-center">
        <p class="{{z(class)|upset_class()}} small">&#169; <span class="{{z(class)|upset_class()}} copyright-year"></span>- All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
        </p>
    </div>
</footer>
</div>
<div class="{{z(class)|upset_class()}} snackbars" id="form-output-global"></div>
<script src="{{tempdir}}assets/js/core.min.js"></script>
<script src="{{tempdir}}assets/js/script.js"></script>