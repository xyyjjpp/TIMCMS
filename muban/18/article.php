{{$set=array()}}
{{$set['where']['id']=intval($_GET['id'])}}
{{$article=a($set)}}
{{if !$article}}
{{notfound()}}
{{/if}}
{{$editinfo=array()}}
{{$editinfo['id']=$article['id']}}
{{$editinfo['click']=$article['click']+1}}
{{$return=aedit($editinfo)}}
{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/nivo-slider.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animated-text.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/theme-default.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/meanmenu.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/widget.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/jquery-ui.min.css" type="text/css" media="all">
    <script src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breatcome-area d-flex align-items-center" style="background-image: url('{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breatcome-content text-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcome-content-title">
                        <h2>{{i(name)}}</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcome-content-text">
                        <ul>
                            <li>
                                <a href="{{host}}">首页 </a>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-chevron-right"></i>
                                <span>{{i(name}}</span>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-chevron-right"></i>
                                <span>{{$article['title']}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blog-area style-eight upper pt-80 pb-100">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row pt-4">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-blog-details-box">
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-details-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-details-title">
                            <h2>{{$article['title']}}</h2>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-details-meta">
                            <i data-app-id="{{z(class)|upset_class()}}" class="far fa-calendar-alt"></i>
                            <span>{{$article['shijian']|date('Y-m-d H:i:s',this)}}</span>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-details-content-text-inner">
                            {{$article['content']}}
                        </div>
                    </div>
                    {{$prevset=array()}}
                    {{$prevset['column']=id,title}}
                    {{$prevset['order']=id desc}}
                    {{$prevset['other']=`"id<".$article['id']}}
                    {{$prev=a($prevset)}}
                    {{if $prev}}
                    <div data-app-id="{{z(class)|upset_class()}}" class="nav-previous">
                        <a href="{{$prev['link']}}">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-arrow-left"></i> Prev Post
                        </a>
                    </div>
                    {{/if}}
                    {{$nextset=array()}}
                    {{$nextset['column']=id,title}}
                    {{$nextset['other']=`"id>".$article['id']}}
                    {{$nextset['order']=id asc}}
                    {{$next=a($nextset)}}
                    {{if $next}}
                    <div data-app-id="{{z(class)|upset_class()}}" class="nav-next">
                        <a href="{{$next['link']}}">Next Post <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    {{/if}}
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-search">
                    <input type="text" name="search" placeholder="Search Here">
                    <button type="submit">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-search"></i>
                    </button>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-box">
                    <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-title">
                        <h2>导航</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-bar mb-20"></div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-categories pt-30">
                        <ul>
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
            </div>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>