<footer class="{{z(class)|upset_class()}} section novi-bg novi-bg-img footer-classic">
    <div class="{{z(class)|upset_class()}} footer-modern__main bg-gray-lighter">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-sm-center justify-content-md-start justify-content-lg-between">
                <div class="{{z(class)|upset_class()}} col-sm-6 col-md-4 col-lg-3">
                    <div class="{{z(class)|upset_class()}} footer-title">找到我们:</div>
                    <a class="{{z(class)|upset_class()}} footer-phone text-darker mt-5" href="tel:{{z(phone)}}">P: {{z(phone)}}</a>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-6 offset-md-2 offset-lg-3">
                    <div class="{{z(class)|upset_class()}} footer-title">地址:</div>
                    <p class="{{z(class)|upset_class()}} footer-street mt-1">{{z(address)}}</p>
                    <ul class="{{z(class)|upset_class()}} footer-list-icon mt-5">
                        <li class="{{z(class)|upset_class()}} me-3">
                            <a class="{{z(class)|upset_class()}} icon mdi mdi-youtube-play" href="{{host}}"></a>
                        </li>
                        <li class="{{z(class)|upset_class()}} me-3">
                            <a class="{{z(class)|upset_class()}} icon mdi mdi-facebook" href="{{host}}"></a>
                        </li>
                        <li class="{{z(class)|upset_class()}} me-3">
                            <a class="{{z(class)|upset_class()}} icon mdi mdi-instagram" href="{{host}}"></a>
                        </li>
                        <li class="{{z(class)|upset_class()}} me-3">
                            <a class="{{z(class)|upset_class()}} icon mdi mdi-twitter" href="{{host}}"></a>
                        </li>
                        <li class="{{z(class)|upset_class()}} me-3">
                            <a class="{{z(class)|upset_class()}} icon mdi mdi-linkedin" href="{{host}}"></a>
                        </li>
                    </ul>
                </div>
                <div class="{{z(class)|upset_class()}} col-12">
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