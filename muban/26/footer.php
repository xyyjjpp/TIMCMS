<section class="{{z(class)|upset_class()}} section section-md bg-gray-31 context-dark">
    <div class="{{z(class)|upset_class()}} container">
        <div class="{{z(class)|upset_class()}} row row-40 justify-content-lg-between">
            <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4 col-xl-3">
                <h3 class="{{z(class)|upset_class()}} heading-square fw-sbold" data-item=".heading-square-item">
                    <span class="{{z(class)|upset_class()}} heading-square-item"></span>最新发布
                </h3>
                {{$set=array()}}
                {{$set['cid']=0}}
                {{$set['pagesize']=2}}
                {{$set['column']=id,title,shijian,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <a class="{{z(class)|upset_class()}} post-minimal" href="{{$a['link']}}">
                    <div class="{{z(class)|upset_class()}} post-minimal-image">
                        <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="161" height="136">
                    </div>
                    <div class="{{z(class)|upset_class()}} post-minimal-body">
                        <div class="{{z(class)|upset_class()}} post-minimal-title">
                            <span>{{$a['title']}}</span>
                        </div>
                        <div class="{{z(class)|upset_class()}} post-minimal-text">
                            <span>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                        </div>
                    </div>
                </a>
                {{/loop}}
            </div>
            <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4 col-xl-3 col-bordered">
                <h3 class="{{z(class)|upset_class()}} heading-square fw-sbold" data-item=".heading-square-item">
                    <span class="{{z(class)|upset_class()}} heading-square-item"></span>{{i(name,6)}}
                </h3>
                <div class="{{z(class)|upset_class()}} link-with-icon heading-4 text-spacing-150 font-sec" data-item=".icon">
                    <span class="{{z(class)|upset_class()}} icon icon-1 mdi mdi-phone"></span>
                    <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                </div>
                <div class="{{z(class)|upset_class()}} link-with-icon text-spacing-100" data-item=".icon">
                    <span class="{{z(class)|upset_class()}} icon icon-2 mdi mdi-email-outline"></span>
                    <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                </div>
                <div class="{{z(class)|upset_class()}} link-with-icon text-spacing-100" data-item=".icon">
                    <span class="{{z(class)|upset_class()}} icon icon-3 mdi mdi-map-marker"></span>
                    <a href="{{host}}">{{z(address)}}</a>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} col-lg-4">
                <h3 class="{{z(class)|upset_class()}} heading-square fw-sbold" data-item=".heading-square-item">
                    <span class="{{z(class)|upset_class()}} heading-square-item"></span>订阅我们的邮箱
                </h3>
                <form class="{{z(class)|upset_class()}} rd-form rd-mailform rd-form-inline-1" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{host}}">
                    <div class="{{z(class)|upset_class()}} form-wrap">
                        <input class="{{z(class)|upset_class()}} form-input" id="subscribe-form--email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="{{z(class)|upset_class()}} form-label" for="subscribe-form--email">Your e-mail</label>
                    </div>
                    <div class="{{z(class)|upset_class()}} form-button">
                        <button class="{{z(class)|upset_class()}} button button-primary button-square" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer class="{{z(class)|upset_class()}} section footer-classic context-dark bg-gray-21">
    <div class="{{z(class)|upset_class()}} container">
        <div class="{{z(class)|upset_class()}} row row-10 justify-content-sm-between">
            <div class="{{z(class)|upset_class()}} col-sm-6">
                <p class="{{z(class)|upset_class()}} rights">
                    <span>Real Estate</span>
                    <span>&copy;&nbsp;</span>
                    <span class="{{z(class)|upset_class()}} copyright-year"></span>
                    <span>&nbsp;</span>
                    - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="{{z(class)|upset_class()}} snackbars" id="form-output-global"></div>
<script src="{{tempdir}}assets/js/core.min.js"></script>
<script src="{{tempdir}}assets/js/script.js"></script>