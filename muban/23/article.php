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
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/animate.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/odometer.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/remixicon.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/responsive.css">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="page-title-area" style="background-image: url('{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="page-title-content">
            <h2>{{i(name)}}</h2>
            <p>{{$article['title']}}</p>
        </div>
    </div>
</div>
<section data-app-id="{{z(class)|upset_class()}}" class="blog-details-area ptb-100">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-12">
                <aside data-app-id="{{z(class)|upset_class()}}" class="widget-area left-sidebar">
                    <div data-app-id="{{z(class)|upset_class()}}" class="widget widget_search">
                        <form data-app-id="{{z(class)|upset_class()}}" class="search-form">
                            <label>
                                <input type="search" data-app-id="{{z(class)|upset_class()}}" class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit">
                                <i data-app-id="{{z(class)|upset_class()}}" class="ri-search-2-line"></i>
                            </button>
                        </form>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="widget widget_yango_posts_thumb">
                        <h3 data-app-id="{{z(class)|upset_class()}}" class="widget-title">最新资讯</h3>
                        {{$set=array()}}
                        {{$set['cid']=0}}
                        {{$set['pagesize']=4}}
                        {{$set['page']=page}}
                        {{$set['column']=id,title,shijian,pic}}
                        {{$articles=alist($set)}}
                        {{loop $articles['list'] as $a}}
                        <article data-app-id="{{z(class)|upset_class()}}" class="item">
                            <a href="{{$a['link']}}" data-app-id="{{z(class)|upset_class()}}" class="thumb">
                                <span data-app-id="{{z(class)|upset_class()}}" class="fullimage cover bg1" role="img" style="background-image: url('{{$a['pic']}}')"></span>
                            </a>
                            <div data-app-id="{{z(class)|upset_class()}}" class="info">
                                <h4 data-app-id="{{z(class)|upset_class()}}" class="title usmall">
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </h4>
                                <span data-app-id="{{z(class)|upset_class()}}" class="date">
                                            <i data-app-id="{{z(class)|upset_class()}}" class="ri-calendar-2-fill"></i> {{$a['shijian']|date('Y-m-d H:i:s',this)}}
                                        </span>
                            </div>
                        </article>
                        {{/loop}}
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="widget widget_categories">
                        <h3 data-app-id="{{z(class)|upset_class()}}" class="widget-title">导航</h3>
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
                    <div data-app-id="{{z(class)|upset_class()}}" class="widget widget_newsletter">
                        <h4>订阅我们的邮件</h4>
                        <form data-app-id="{{z(class)|upset_class()}}" class="newsletter-form" data-toggle="validator">
                            <input type="email" data-app-id="{{z(class)|upset_class()}}" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                            <button type="submit">Subscribe</button>
                            <div id="validator-newsletter" data-app-id="{{z(class)|upset_class()}}" class="form-result"></div>
                        </form>
                    </div>
                </aside>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="blog-details-desc">
                    <div data-app-id="{{z(class)|upset_class()}}" class="article-content">
                        <h3>{{$article['title']}}</h3>
                        <div data-app-id="{{z(class)|upset_class()}}" class="entry-meta">
                            <ul>
                                <li>
                                    <i data-app-id="{{z(class)|upset_class()}}" class="ri-calendar-2-line"></i>{{$article['shijian']|date('Y-m-d H:i:s',this)}}
                                </li>
                                <li>
                                    <i data-app-id="{{z(class)|upset_class()}}" class="ri-message-2-line"></i>
                                    <p>{{$article['click']}}</p>
                                </li>
                            </ul>
                        </div>
                        {{$article['content']}}
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="comments-area">
                        {{$prevset=array()}}
                        {{$prevset['column']=id,title,pic,shijian,content}}
                        {{$prevset['order']=id desc}}
                        {{$prevset['other']=`"id<".$article['id']}}
                        {{$prev=a($prevset)}}
                        {{if $prev}}
                        <ol data-app-id="{{z(class)|upset_class()}}" class="comment-list">
                            <li data-app-id="{{z(class)|upset_class()}}" class="comment">
                                <div data-app-id="{{z(class)|upset_class()}}" class="comment-body">
                                    <footer data-app-id="{{z(class)|upset_class()}}" class="comment-meta">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="comment-author vcard">
                                            <img src="{{$prev['pic']}}" data-app-id="{{z(class)|upset_class()}}" class="avatar" alt="{{$prev['title']}}">
                                            <b data-app-id="{{z(class)|upset_class()}}" class="fn">{{$prev['title']}}</b>
                                        </div>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="comment-metadata">
                                            <span>{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</span>
                                        </div>
                                    </footer>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="comment-content">
                                        <p>{{$prev['content']|text(150)}}...</p>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="reply">
                                        <a href="{{$prev['link']}}" data-app-id="{{z(class)|upset_class()}}" class="comment-reply-link">阅读</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                        {{/if}}
                        {{$nextset=array()}}
                        {{$nextset['column']=id,title,pic,shijian,content}}
                        {{$nextset['other']=`"id>".$article['id']}}
                        {{$nextset['order']=id asc}}
                        {{$next=a($nextset)}}
                        {{if $next}}
                        <ol data-app-id="{{z(class)|upset_class()}}" class="comment-list">
                            <li data-app-id="{{z(class)|upset_class()}}" class="comment">
                                <div data-app-id="{{z(class)|upset_class()}}" class="comment-body">
                                    <footer data-app-id="{{z(class)|upset_class()}}" class="comment-meta">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="comment-author vcard">
                                            <img src="{{$next['pic']}}" data-app-id="{{z(class)|upset_class()}}" class="avatar" alt="{{$next['title']}}">
                                            <b data-app-id="{{z(class)|upset_class()}}" class="fn">{{$next['title']}}</b>
                                        </div>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="comment-metadata">
                                            <span>{{$next['shijian']|date('Y-m-d H:i:s',this)}}</span>
                                        </div>
                                    </footer>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="comment-content">
                                        <p>{{$next['content']|text(150)}}...</p>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="reply">
                                        <a href="{{$next['link']}}" data-app-id="{{z(class)|upset_class()}}" class="comment-reply-link">阅读</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                        {{/if}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{file footer}}
</body>
</html>