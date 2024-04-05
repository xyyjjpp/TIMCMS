<script src="/myyjjpp.js"></script>
<section id="topbar" class="{{z(class)|upset_class()}} topbar d-flex align-items-center">
    <div class="{{z(class)|upset_class()}} container d-flex justify-content-end">
        <div class="{{z(class)|upset_class()}} social-links d-none d-md-flex align-items-center">
            <div class="{{z(class)|upset_class()}} contact-info d-flex align-items-center">
                <i class="{{z(class)|upset_class()}} bi bi-envelope d-flex align-items-center">
                    <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                </i>
                <i class="{{z(class)|upset_class()}} bi bi-phone d-flex align-items-center ms-4">
                    <span>{{z(phone)}}</span>
                </i>
            </div>
            <span class="{{z(class)|upset_class()}} seprator"> | </span>
            <a href="{{host}}" class="{{z(class)|upset_class()}} twitter">
                <i class="{{z(class)|upset_class()}} bi bi-twitter"></i>
            </a>
            <a href="{{host}}" class="{{z(class)|upset_class()}} facebook">
                <i class="{{z(class)|upset_class()}} bi bi-facebook"></i>
            </a>
            <a href="{{host}}" class="{{z(class)|upset_class()}} instagram">
                <i class="{{z(class)|upset_class()}} bi bi-instagram"></i>
            </a>
            <a href="{{host}}" class="{{z(class)|upset_class()}} linkedin">
                <i class="{{z(class)|upset_class()}} bi bi-linkedin"></i>
            </a>
        </div>
    </div>
</section>
<header id="header" class="{{z(class)|upset_class()}} header d-flex align-items-center">
    <div class="{{z(class)|upset_class()}} container container-xl d-flex align-items-center justify-content-between">
        <a href="{{host}}" class="{{z(class)|upset_class()}} logo d-flex align-items-center">
            <h1><?php echo explode_array("&#x2c;",z('keywords'),0) ?><span>.</span></h1>
        </a>
        <nav id="navbar" class="{{z(class)|upset_class()}} navbar">
            <ul>
                {{$channels=c(0,999,0,1)}}
                {{loop $channels as $channel}}
                <li>
                    <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                </li>
                {{/loop}}
            </ul>
        </nav>
        <i class="{{z(class)|upset_class()}} mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="{{z(class)|upset_class()}} mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>