<footer class="{{z(class)|upset_class()}} section footer-classic context-dark ">
    <div class="{{z(class)|upset_class()}} footer-classic-content">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 row-lg-0 no-gutters">
                <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
                    <div class="{{z(class)|upset_class()}} footer-classic-header">
                        <h6 class="{{z(class)|upset_class()}} footer-classic-title">导航</h6>
                    </div>
                    <div class="{{z(class)|upset_class()}} footer-classic-body">
                        <ul class="{{z(class)|upset_class()}} footer-classic-list d-inline-block d-sm-block">
                            {{$channels=c(0,999,0,1)}}
                            {{loop $channels as $channel}}
                            {{if $channel['cid']!=1}}
                            <li>
                                <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                            </li>
                            {{/if}}
                            {{/loop}}
                        </ul>
                        <ul class="{{z(class)|upset_class()}} list-inline footer-social-list">
                            <li>
                                <a class="{{z(class)|upset_class()}} icon mdi mdi-facebook" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon mdi mdi-twitter" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon mdi mdi-instagram" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon mdi mdi-google-plus" href="{{host}}"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                    <div class="{{z(class)|upset_class()}} footer-classic-header">
                        <div class="{{z(class)|upset_class()}} box-width-230">
                            <h6 class="{{z(class)|upset_class()}} footer-classic-title">联系我们</h6>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} footer-classic-body">
                        <div class="{{z(class)|upset_class()}} box-width-230">
                            <div class="{{z(class)|upset_class()}} footer-classic-contacts">
                                <div class="{{z(class)|upset_class()}} footer-classic-contacts-item">
                                    <div class="{{z(class)|upset_class()}} unit unit-spacing-sm align-items-center">
                                        <div class="{{z(class)|upset_class()}} unit-left">
                                            <span class="{{z(class)|upset_class()}} icon icon-24 mdi mdi-phone"></span>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} unit-body">
                                            <a class="{{z(class)|upset_class()}} phone" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} footer-classic-contacts-item">
                                    <div class="{{z(class)|upset_class()}} unit unit-spacing-sm align-items-center">
                                        <div class="{{z(class)|upset_class()}} unit-left">
                                            <span class="{{z(class)|upset_class()}} icon mdi mdi-email"></span>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} unit-body">
                                            <a class="{{z(class)|upset_class()}} mail" href="mailto:{{z(email)}}">{{z(email)}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{z(class)|upset_class()}} footer-classic-panel">
        <div class="{{z(class)|upset_class()}} container">
            <p class="{{z(class)|upset_class()}} rights">
                <span>&copy;&nbsp;</span>
                <span class="{{z(class)|upset_class()}} copyright-year"></span>- All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
            </p>
        </div>
    </div>
</footer>
</div>
<div class="{{z(class)|upset_class()}} snackbars" id="form-output-global"></div>
<script src="{{tempdir}}assets/js/core.min.js"></script>
<script src="{{tempdir}}assets/js/script.js"></script>