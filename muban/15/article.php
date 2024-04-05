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
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animate.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/meanmenu.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/template-default.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.theme.default.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" media="all">
    <script src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" media="all">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breadcumb-area d-flex align-items-center" style="background-image: url('{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="brpt text-center">
                    <h2>{{i(name)}}</h2>
                    <ul>
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-chevron-right"></i>
                        </li>
                        <li>{{i(name)}}</li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-chevron-right"></i>
                        </li>
                        <li>{{$article['title']}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blog-section blog-single">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8 col-md-12 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-blog-items style-2">
                    <div data-app-id="{{z(class)|upset_class()}}" class="single-blog-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-title">
                            <h2>{{$article['title']}}</h2>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-meta-top2">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="color">
                                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-calendar-alt"></i>
                                    </span>
                            <span>{{$article['shijian']|date('Y-m-d H:i:s',this)}}</span>
                        </div><br>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-text2">
                            {{$article['content']}}
                        </div>
                        <br>
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
                <div data-app-id="{{z(class)|upset_class()}}" class="blog-src-bar">
                    <h2>搜索</h2>
                    <div data-app-id="{{z(class)|upset_class()}}" class="src-bar">
                        <form id="contact_form2" action="{{host}}" method="POST">
                            <input type="email" placeholder="Search Blogs" data-app-id="{{z(class)|upset_class()}}" class="blog-control" required>
                            <button data-app-id="{{z(class)|upset_class()}}" class="blog-btn" type="submit">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="top-catagories">
                    <h2>导航</h2>
                    {{$channels=c(0,999,0,1)}}
                    {{loop $channels as $channel}}
                    {{if $channel['cid']!=1}}
                    <span><a href="{{$channel['url']}}">{{$channel['name']}}</a></span>
                    {{/if}}
                    {{/loop}}
                </div>
            </div>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>