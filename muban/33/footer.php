<footer class="{{z(class)|upset_class()}} section footer-creative">
    <div class="{{z(class)|upset_class()}} footer-top">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-40">
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-3 wow fadeInUpSmall" data-wow-delay=".2s">
                    <h4><?php echo explode_array("&#x2c;",z('keywords'),0) ?></h4>
                    <p>{{z(description)}}</p>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-3 wow fadeInUpSmall" data-wow-delay=".3s">
                    <h4>找到我们</h4>
                    <ul class="{{z(class)|upset_class()}} contact-box list-lg">
                        <li>
                            <div class="{{z(class)|upset_class()}} unit flex-row unit-spacing-xxs">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} icon icon-gray-lightest mdi mdi-map-marker"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <a class="{{z(class)|upset_class()}} hover-text" href="{{host}}">{{z(address)}}</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="{{z(class)|upset_class()}} unit flex-row unit-spacing-xxs align-items-center">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} icon icon-gray-lightest mdi mdi-phone"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <a class="{{z(class)|upset_class()}} hover-text" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="{{z(class)|upset_class()}} unit flex-row unit-spacing-xxs align-items-center">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} icon icon-gray-lightest mdi mdi-email-outline"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <a class="{{z(class)|upset_class()}} hover-text" href="mailto:{{z(email)}}">{{z(email)}}</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="{{z(class)|upset_class()}} list-inline-2">
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-facebook" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-twitter" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-instagram" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-google" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-pinterest" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-linkedin" href="{{host}}"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="{{z(class)|upset_class()}} footer-bottom">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-md-12">
                    <p class="{{z(class)|upset_class()}} copyright">&#169; <span class="{{z(class)|upset_class()}} copyright-year"></span> - All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
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