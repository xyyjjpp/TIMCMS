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
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page text-center">
{{file header}}
    <div class="{{z(class)|upset_class()}} parallax-container">
        <div class="{{z(class)|upset_class()}} material-parallax">
            <img src="{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}" width="1920" height="400" alt="{{i(name)}}">
        </div>
        <div class="{{z(class)|upset_class()}} parallax-content red">
            <section class="{{z(class)|upset_class()}} breadcrumb-classic context-dark">
                <div class="{{z(class)|upset_class()}} shell section-35 section-lg-top-85 text-sm-left">
                    <h2 class="{{z(class)|upset_class()}} veil reveal-sm-block">{{i(name)}}</h2>
                    <div class="{{z(class)|upset_class()}} offset-lg-top-75 offset-sm-top-40">
                        <ul class="{{z(class)|upset_class()}} list-inline list-inline-lg list-inline-dashed p">
                            <li>
                                <a class="{{z(class)|upset_class()}} text-light" href="{{host}}">首页</a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} text-light" href="{{i(url)}}">{{i(name)}}</a>
                            </li>
                            <li class="{{z(class)|upset_class()}} text-light">{{$article['title']}}</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <main class="{{z(class)|upset_class()}} page-content">
        <section class="{{z(class)|upset_class()}} section-70 section-md-90">
            <div class="{{z(class)|upset_class()}} shell">
                <div class="{{z(class)|upset_class()}} range text-sm-left range-xs-center">
                    <div class="{{z(class)|upset_class()}} cell-xs-10 cell-md-8">
                        <article class="{{z(class)|upset_class()}} post-default">
                            <div>
                                <h2 class="{{z(class)|upset_class()}} text-uppercase text-bold">{{$article['title']}}</h2>
                            </div>
                            <div class="{{z(class)|upset_class()}} offset-top-10">
                                <hr class="{{z(class)|upset_class()}} divider divider-lg bg-primary hr-sm-left-0">
                            </div>
                            <div class="{{z(class)|upset_class()}} offset-top-25">
                                <div class="{{z(class)|upset_class()}} post-meta">
                                    <ul class="{{z(class)|upset_class()}} list-inline">
                                        <li>
                                            <span class="{{z(class)|upset_class()}} icon icon-xxs fa-calendar text-gray text-middle"></span>
                                            <time class="{{z(class)|upset_class()}} text-gray inset-left-5 text-middle" datetime="{{$article['shijian']|date('Y-m-d',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{$article['content']}}
                        </article>
                        <div class="{{z(class)|upset_class()}} offset-top-70 offset-md-top-90">
                            <div class="{{z(class)|upset_class()}} range range-xs-center offset-top-50">
                                {{$prevset=array()}}
                                {{$prevset['column']=id,title,pic,shijian,content}}
                                {{$prevset['order']=id desc}}
                                {{$prevset['other']=`"id<".$article['id']}}
                                {{$prev=a($prevset)}}
                                {{if $prev}}
                                <div class="{{z(class)|upset_class()}} cell-sm-6">
                                    <article class="{{z(class)|upset_class()}} post-default">
                                        <a class="{{z(class)|upset_class()}} thumbnail-default" href="{{$prev['link']}}" target="_self">
                                            <figure>
                                                <img class="{{z(class)|upset_class()}} img-responsive" width="770" height="520" src="{{$prev['pic']}}" alt="{{$prev['title']}}">
                                            </figure>
                                            <span class="{{z(class)|upset_class()}} icon icon-xxs fa-link"></span>
                                        </a>
                                        <div class="{{z(class)|upset_class()}} offset-top-10">
                                            <h5 class="{{z(class)|upset_class()}} text-primary text-bold post-default-title">
                                                <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                                            </h5>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} offset-top-15">
                                            <div class="{{z(class)|upset_class()}} post-meta">
                                                <ul class="{{z(class)|upset_class()}} list-inline">
                                                    <li>
                                                        <span class="{{z(class)|upset_class()}} icon icon-xxs fa-calendar text-gray text-middle"></span>
                                                        <time class="{{z(class)|upset_class()}} text-gray inset-left-5 text-middle" datetime="{{$prev['shijian']|date('Y-m-d',this)}}">{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                                    </li>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>{{$prev['content']|text(100)}}...</p>
                                    </article>
                                </div>
                                {{/if}}
                                {{$nextset=array()}}
                                {{$nextset['column']=id,title,pic,shijian,content}}
                                {{$nextset['other']=`"id>".$article['id']}}
                                {{$nextset['order']=id asc}}
                                {{$next=a($nextset)}}
                                {{if $next}}
                                <div class="{{z(class)|upset_class()}} cell-sm-6">
                                    <article class="{{z(class)|upset_class()}} post-default">
                                        <a class="{{z(class)|upset_class()}} thumbnail-default" href="{{$next['link']}}" target="_self">
                                            <figure>
                                                <img class="{{z(class)|upset_class()}} img-responsive" width="770" height="520" src="{{$next['pic']}}" alt="{{$next['title']}}">
                                            </figure>
                                            <span class="{{z(class)|upset_class()}} icon icon-xxs fa-link"></span>
                                        </a>
                                        <div class="{{z(class)|upset_class()}} offset-top-10">
                                            <h5 class="{{z(class)|upset_class()}} text-primary text-bold post-default-title">
                                                <a href="{{$next['link']}}">{{$next['title']}}</a>
                                            </h5>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} offset-top-15">
                                            <div class="{{z(class)|upset_class()}} post-meta">
                                                <ul class="{{z(class)|upset_class()}} list-inline">
                                                    <li>
                                                        <span class="{{z(class)|upset_class()}} icon icon-xxs fa-calendar text-gray text-middle"></span>
                                                        <time class="{{z(class)|upset_class()}} text-gray inset-left-5 text-middle" datetime="{{$next['shijian']|date('Y-m-d',this)}}">{{$next['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                                    </li>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>{{$next['content']|text(100)}}...</p>
                                    </article>
                                </div>
                                {{/if}}
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} cell-xs-10 cell-sm-8 cell-md-4 offset-top-90 offset-md-top-0">
                        <div class="{{z(class)|upset_class()}} inset-lg-left-30 inset-md-left-15">
                            <div class="{{z(class)|upset_class()}} range">
                                <aside class="{{z(class)|upset_class()}} text-left">
                                    <div class="{{z(class)|upset_class()}} offset-top-60 cell-xs-push-2 cell-xs-6 cell-md-push-1 cell-md-12">
                                        <h5>导航</h5>
                                        <div class="{{z(class)|upset_class()}} text-subline"></div>
                                        <ul class="{{z(class)|upset_class()}} list list-marked list-marked-primary offset-top-30">
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
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
{{file footer}}
</body>
</html>