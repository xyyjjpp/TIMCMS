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
    <link href="{{tempdir}}assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/styles.css" rel="stylesheet">
</head>
<body>
{{file header}}
<main id="main">
    <div class="{{z(class)|upset_class()}} breadcrumbs">
        <div class="{{z(class)|upset_class()}} page-header d-flex align-items-center" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}});">
            <div class="{{z(class)|upset_class()}} container position-relative">
                <h2 class="{{z(class)|upset_class()}} text-center">{{i(name)}}</h2>
                <div class="{{z(class)|upset_class()}} row d-flex justify-content-center">
                    <div class="{{z(class)|upset_class()}} col-lg-6 text-center">
                        <p>{{$article['title']}}</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="{{z(class)|upset_class()}} container">
                <ol>
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li>{{$article['title']}}</li>
                </ol>
            </div>
        </nav>
    </div>
    <section class="{{z(class)|upset_class()}} single-page">
        <div class="{{z(class)|upset_class()}} container" data-aos="fade-up">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-lg-8">
                    <h2 class="{{z(class)|upset_class()}} title">{{$article['title']}}</h2>
                    <div class="{{z(class)|upset_class()}} d-flex align-items-center details-post-data">
                        <div class="{{z(class)|upset_class()}} post-meta d-flex">
                            <p class="{{z(class)|upset_class()}} post-date">
                                <time datetime="{{$article['shijian']|date('Y-m-d',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                            </p>
                        </div>
                    </div>
                    <hr>
                    {{$article['content']}}
                    <div class="{{z(class)|upset_class()}} d-flex justify-content-between mt-20">
                        {{$prevset=array()}}
                        {{$prevset['column']=id,title}}
                        {{$prevset['order']=id desc}}
                        {{$prevset['other']=`"id<".$article['id']}}
                        {{$prev=a($prevset)}}
                        {{if $prev}}
                        <button type="submit" data-text="Send Message" class="{{z(class)|upset_class()}} fill-btn"><a href="{{$prev['link']}}">{{$prev['title']}}</a></button>
                        {{/if}}
                        {{$nextset=array()}}
                        {{$nextset['column']=id,title}}
                        {{$nextset['other']=`"id>".$article['id']}}
                        {{$nextset['order']=id asc}}
                        {{$next=a($nextset)}}
                        {{if $next}}
                        <button type="submit" data-text="Send Message" class="{{z(class)|upset_class()}} fill-btn"><a href="{{$next['link']}}">{{$next['title']}}</a></button>
                        {{/if}}
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <div class="{{z(class)|upset_class()}} blog-sidbar">
                        <div class="{{z(class)|upset_class()}} search-form">
                            <form action="{{host}}">
                                <input type="text" placeholder="搜索...">
                                <button>
                                    <i class="{{z(class)|upset_class()}} fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <hr>
                        <h3>导航</h3>
                        <ul>
                            {{$channels=c(0,999,0,1)}}
                            {{loop $channels as $channel}}
                            {{if $channel['cid']!=1}}
                            <li>
                                <a href="{{$channel['url']}}">
                                    <i class="{{z(class)|upset_class()}} bi bi-arrow-right-circle-fill"></i>{{$channel['name']}}
                                </a>
                            </li>
                            {{/if}}
                            {{/loop}}
                        </ul>
                        <hr>
                        <h3>最新资讯</h3>
                        <ul>
                            {{$set=array()}}
                            {{$set['cid']=0}}
                            {{$set['pagesize']=6}}
                            {{$set['column']=id,title}}
                            {{$articles=alist($set)}}
                            {{loop $articles['list'] as $a}}
                            <li>
                                <a href="{{$a['link']}}">
                                    <i class="{{z(class)|upset_class()}} bi bi-arrow-right-circle-fill"></i> {{$a['title']}}
                                </a>
                            </li>
                            {{/loop}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
{{file footer}}
</body>
</html>