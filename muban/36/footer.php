<footer class="{{z(class)|upset_class()}} page-footer footer-widget text-center">
    <div class="{{z(class)|upset_class()}} footer-content text-center text-md-start">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-30">
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-3">
                    <div class="{{z(class)|upset_class()}} navbar-brand">
                        <a class="{{z(class)|upset_class()}} brand" href="{{host}}">
                            <img class="{{z(class)|upset_class()}} brand-logo-dark" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="155" height="35">
                            <img class="{{z(class)|upset_class()}} brand-logo-light" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="155" height="35">
                        </a>
                    </div>
                    <p>{{z(description)}}</p>
                    <address>
                        <p class="{{z(class)|upset_class()}} text-light-clr">地址:</p>{{z(address)}}
                    </address>
                    <div class="{{z(class)|upset_class()}} contact-info">
                        <dl>
                            <dt>电话</dt>
                            <dd>
                                <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                            </dd>
                            <dt>Email</dt>
                            <dd>
                                <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-2">
                    <div class="{{z(class)|upset_class()}} pt-5">
                        <h6>导航</h6>
                        <ul class="{{z(class)|upset_class()}} marked-list text-primary">
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
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-4">
                    <div class="{{z(class)|upset_class()}} pt-5">
                        <p>邮箱订阅</p>
                        <form class="{{z(class)|upset_class()}} rd-mailform margin-1" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{host}}">
                            <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                <input class="{{z(class)|upset_class()}} form-input" id="forms-foot-email" type="email" name="email" placeholder="Enter your e-mail" data-constraints="@Required">
                            </div>
                            <button class="{{z(class)|upset_class()}} button button-primary round-xl button-sm" type="submit">提交</button>
                        </form>
                        <div class="{{z(class)|upset_class()}} socials">
                            <a class="{{z(class)|upset_class()}} fa-facebook" href="{{host}}"></a>
                            <a class="{{z(class)|upset_class()}} fa-rss" href="{{host}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{z(class)|upset_class()}} copyright text-center">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} d-flex justify-content-center justify-content-md-between align-items-center flex-wrap flex-md-nowrap flex-md-row-reverse">
                <ul class="{{z(class)|upset_class()}} list-inline">
                    <li>
                        <a class="{{z(class)|upset_class()}} fa-facebook" href="{{host}}"></a>
                    </li>
                    <li>
                        <a class="{{z(class)|upset_class()}} fa-pinterest-p" href="{{host}}"></a>
                    </li>
                    <li>
                        <a class="{{z(class)|upset_class()}} fa-twitter" href="{{host}}"></a>
                    </li>
                    <li>
                        <a class="{{z(class)|upset_class()}} fa-google-plus" href="{{host}}"></a>
                    </li>
                    <li>
                        <a class="{{z(class)|upset_class()}} fa-instagram" href="{{host}}"></a>
                    </li>
                </ul>
                <p class="{{z(class)|upset_class()}} rights">
                    <span>&copy;&nbsp;</span>
                    <span class="{{z(class)|upset_class()}} copyright-year"></span>- All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="{{z(class)|upset_class()}} snackbars" id="form-output-global"></div>
<script src="{{tempdir}}assets/js/core.min.js"></script>
<script src="{{tempdir}}assets/js/script.js"></script>