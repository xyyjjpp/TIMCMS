<footer class="section bg-default section-xs-type-1 footer-minimal footer-minimal-variant-2">
    <div class="container">
        <div class="row row-30 text-center">
            <div class="col-lg-12">
                <div class="footer-brand">
                    <a href="{{host}}">
                        <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="142" height="58">
                    </a>
                </div>
            </div>
            <div class="col-12">
                <p class="block-lg">{{z(description)}}</p>
            </div>
            <div class="col-lg-12">
                <div class="footer-nav">
                    <ul class="rd-navbar-nav">
                        {{$channels=c(0,999,0,1)}}
                        {{loop $channels as $channel}}
                        {{if $channel['cid']!=1}}
                        <li class="rd-nav-item">
                            <a class="rd-nav-link" href="{{$channel['url']}}">{{$channel['name']}}</a>
                        </li>
                        {{/if}}
                        {{/loop}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="bg-gray-100 section-xs text-center">
    <div class="container">
        <p class="rights">
            <span>&copy;&nbsp; </span>
            <span class="copyright-year"></span>- All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
        </p>
    </div>
</section>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{tempdir}}assets/js/core.min.js"></script>
<script src="{{tempdir}}assets/js/script.js"></script>