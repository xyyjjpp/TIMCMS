{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animate.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/template-default.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.theme.default.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animated-text.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/widget.css" media="all">
    <script src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" media="all">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breadcumn-section d-flex align-items-center" style="background-image: url('{{z(news_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breadcumn-content text-left" data-app-id="{{z(class)|upset_class()}}" class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">
                    <h2>{{i(name)}}</h2>
                    <ul>
                        <li>
                            <a href="{{host}}">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-home"></i>
                            </a>
                        </li>
                        <li data-app-id="{{z(class)|upset_class()}}" class="style2">首页</li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-chevron-right"></i>
                        </li>
                        <li data-app-id="{{z(class)|upset_class()}}" class="style2">Our News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blogs-section">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8 col-md-12 col-sm-12">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['page']=page}}
                {{$set['column']=id,title,content,shijian,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div data-app-id="{{z(class)|upset_class()}}" class="single-blog-items">
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-thumb">
                        <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="single-blog-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-meta-top2">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="color">
                                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-calendar-alt"></i>
                                    </span>
                            <span>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-title">
                            <h2>{{$a['title']}}</h2>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-text">
                            <p>{{$a['content']|text(150)}}...</p>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-btn2">
                            <a href="{{$a['link']}}">阅读</a>
                        </div>
                    </div>
                </div>
                {{/loop}}
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-12 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="blog-src-bar">
                    <h2>搜索</h2>
                    <div data-app-id="{{z(class)|upset_class()}}" class="src-bar">
                        <form id="contact_form2" action="{{host}}" method="POST">
                            <input type="email" placeholder="Search Blogs" data-app-id="{{z(class)|upset_class()}}" class="blog-control" required="">
                            <button data-app-id="{{z(class)|upset_class()}}" class="blog-btn" type="submit">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="row">
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12">
                        <form id="contact_form3" action="{{host}}" method="POST">
                            <div data-app-id="{{z(class)|upset_class()}}" class="row">
                                <div data-app-id="{{z(class)|upset_class()}}" class="blog-drop-form">
                                    <h2>留言</h2>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-6">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="contact-form_2">
                                        <form action="post">
                                            <input data-app-id="{{z(class)|upset_class()}}" class="contact-style_2" type="text" name="name" placeholder="Frist Name*" required="">
                                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-user"></i>
                                        </form>
                                    </div>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-6">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="contact-form_2">
                                        <form action="post">
                                            <input data-app-id="{{z(class)|upset_class()}}" class="contact-style_2" type="text" name="name" placeholder="Enter Email*" required="">
                                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-envelope"></i>
                                        </form>
                                    </div>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="contact-form-msg-2">
                                        <form action="post">
                                            <textarea name="text" data-app-id="{{z(class)|upset_class()}}" class="contact-style-msg2" name="message" id="text" placeholder="Enter Message" cols="30" rows="10"></textarea>
                                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-comment"></i>
                                        </form>
                                    </div>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="contact-button text-right">
                                        <input data-app-id="{{z(class)|upset_class()}}" class="blog-button" type="submit" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p data-app-id="{{z(class)|upset_class()}}" class="form-message"></p>
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