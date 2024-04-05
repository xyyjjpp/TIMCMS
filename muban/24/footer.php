<footer class="section novi-bg novi-bg-img footer-simple bg-image">
    <div class="container">
        <div class="row row-50">
            <div class="col-md-7">
                <a class="brand-name" href="{{host}}">
                    <img class="logo-default" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                    <img class="logo-inverse" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                </a>
                <p class="lead">{{z(about_text)}}</p>
            </div>
            <div class="col-md-5 col-xl-3 offset-xl-2 text-md-end">
                <ul class="list-social footer-social">
                    <li>
                        <a class="icon icon-sm icon-white icomoon-youtube" href="{{host}}"></a>
                    </li>
                    <li>
                        <a class="icon icon-sm icon-white icomoon-facebook" href="{{host}}"></a>
                    </li>
                    <li>
                        <a class="icon icon-sm icon-white icomoon-instagram" href="{{host}}"></a>
                    </li>
                    <li>
                        <a class="icon icon-sm icon-white icomoon-twitter" href="{{host}}"></a>
                    </li>
                    <li>
                        <a class="icon icon-sm icon-white icomoon-linkedin" href="{{host}}"></a>
                    </li>
                </ul>
                <ul class="list-footer-info">
                    <li>
                        <p>{{z(address)}}</p>
                    </li>
                    <li>
                        <a class="lead" href="tel:{{z(phone)}}">
                            <span class="pe-1 icon icon-xs icon-white icomoon-phone"></span>{{z(phone)}}
                        </a>
                    </li>
                </ul>
                <a class="button-link" href="{{u(6)}}">{{i(name,6)}}<span class="icon mdi mdi-arrow-right"></span>
                </a>
            </div>
        </div>
        <p class="rights">
            <span>&copy;&nbsp;</span>
            <span class="copyright-year"></span>
            <span>&nbsp;</span>- All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
        </p>
    </div>
</footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{tempdir}}assets/js/core.min.js"></script>
<script src="{{tempdir}}assets/js/script.js"></script>