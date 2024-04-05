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
    <link rel="stylesheet" href="{{tempdir}}static/css/jquery-ui.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/uikit.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/nivo-slider.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animated-text.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/theme-default.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/meanmenu.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/swiper.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/jquery.animatedheadline.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css" type="text/css" media="all">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breadcumb-section d-flex align-items-center" style="background-image: url('{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breadcumb-content">
                    <h2>{{i(name)}}</h2>
                    <ul>
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-angle-right"></i>
                        </li>
                        <li>{{i(name)}}</li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-angle-right"></i>
                        </li>
                        <li>{{$article['title']}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="single-blog" data-app-id="{{z(class)|upset_class()}}" class="blog-section style-6  pt-100 pb-80">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-12 col-lg-8">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-blog-details">
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-title">
                            <h2>{{$article['title']}}</h2>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-meta-mid">
                            <span>{{$article['shijian']|date('Y-m-d H:i:s',this)}}</span>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-text">
                            {{$article['content']}}
                        </div>
                        {{$prevset=array()}}
                        {{$prevset['column']=id,title}}
                        {{$prevset['order']=id desc}}
                        {{$prevset['other']=`"id<".$article['id']}}
                        {{$prev=a($prevset)}}
                        {{if $prev}}
                        <div data-app-id="{{z(class)|upset_class()}}" data-app-id="{{z(class)|upset_class()}}" class="nav-previous">
                            <a href="{{$prev['link']}}">
                                <i data-app-id="{{z(class)|upset_class()}}" data-app-id="{{z(class)|upset_class()}}" class="fa fa-arrow-left"></i> Prev Post
                            </a>
                        </div>
                        {{/if}}
                        {{$nextset=array()}}
                        {{$nextset['column']=id,title}}
                        {{$nextset['other']=`"id>".$article['id']}}
                        {{$nextset['order']=id asc}}
                        {{$next=a($nextset)}}
                        {{if $next}}
                        <div data-app-id="{{z(class)|upset_class()}}" data-app-id="{{z(class)|upset_class()}}" class="nav-next">
                            <a href="{{$next['link']}}">Next Post <i data-app-id="{{z(class)|upset_class()}}" data-app-id="{{z(class)|upset_class()}}" class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        {{/if}}
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-12 col-lg-4">
                <div data-app-id="{{z(class)|upset_class()}}" class="widget-items mb-40">
                    <form action="{{host}}" method="GET">
                        <input type="search" data-app-id="{{z(class)|upset_class()}}" class="src-input-box" placeholder="Search Here" name="s" value="" title="src-input-box">
                        <button data-app-id="{{z(class)|upset_class()}}" class="src-icon" type="submit">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="widget-items mb-40">
                    <div data-app-id="{{z(class)|upset_class()}}" class="widget-title">
                        <h2>导航</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="catagory-item">
                        <ul>
                            {{$channels=c(0,999,0,1)}}
                            {{loop $channels as $channel}}
                            {{if $channel['cid']!=1}}
                            <li data-app-id="{{z(class)|upset_class()}}" class="hr-3">
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