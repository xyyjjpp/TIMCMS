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
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css-Montserrat4007007CLato400700.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page text-center">
{{file header}}
    <section class="{{z(class)|upset_class()}} context-dark">
        <div class="{{z(class)|upset_class()}} parallax-container" data-parallax-img="{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}">
            <div class="{{z(class)|upset_class()}} parallax-content">
                <div class="{{z(class)|upset_class()}} container section-top-34 section-lg-top-98 section-bottom-34">
                    <div>
                        <h2 class="{{z(class)|upset_class()}} fw-bold">{{$article['title']}}</h2>
                    </div>
                    <ul class="{{z(class)|upset_class()}} list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-lg-top-66">
                        <li class="{{z(class)|upset_class()}} list-inline-item active">
                            <a href="{{host}}">首页</a>
                        </li>
                        <li class="{{z(class)|upset_class()}} list-inline-item">
                            <a href="{{i(url)}}">{{i(name)}}</a>
                        </li>
                        <li class="{{z(class)|upset_class()}} list-inline-item">{{$article['title']}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-66 section-lg-110 novi-background bg-cover bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} fw-bold">{{$article['title']}}</h2>
            <hr class="{{z(class)|upset_class()}} divider bg-saffron">
            <div class="{{z(class)|upset_class()}} offset-top-41 offset-lg-top-66">
                <div class="{{z(class)|upset_class()}} row row-fix">
                    <div class="{{z(class)|upset_class()}} col-lg-7 col-xl-8">
                        <div class="{{z(class)|upset_class()}} text-md-start offset-top-30 offset-lg-top-50">
                            {{$article['content']}}
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} col-lg-5 col-xl-4 text-lg-start inset-lg-left-30 offset-lg-top-0">
                        <div class="{{z(class)|upset_class()}} row row-40 row-fix">
                            <div class="{{z(class)|upset_class()}} col-sm-12 order-lg-1">
                                <p>
                                    <span class="{{z(class)|upset_class()}} align-middle mdi-calendar-today mdi text-light icon icon-xxs"></span>
                                    <span>{{$article['shijian']|date('Y-m-d H:i:s',this)}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-98 section-md-110 novi-background bg-cover bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} offset-top-41 offset-lg-top-66">
                <div class="{{z(class)|upset_class()}} row row-60 justify-content-sm-center">
                    {{$prevset=array()}}
                    {{$prevset['column']=id,title,pic,shijian,content}}
                    {{$prevset['order']=id desc}}
                    {{$prevset['other']=`"id<".$article['id']}}
                    {{$prev=a($prevset)}}
                    {{if $prev}}
                    <div class="{{z(class)|upset_class()}} col-md-4">
                        <img class="{{z(class)|upset_class()}} img-fluid d-inline-block" src="{{$prev['pic']}}" width="370" height="250" alt="{{$prev['title']}}">
                        <div class="{{z(class)|upset_class()}} text-md-start offset-top-24">
                            <div>
                                <h5 class="{{z(class)|upset_class()}} fw-bold text-primary">
                                    <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                                </h5>
                            </div>
                            <ul class="{{z(class)|upset_class()}} list-inline list-inline-dotted text-dark">
                                <li class="{{z(class)|upset_class()}} list-inline-item">{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</li>
                            </ul>
                            <div>
                                <p>{{$prev['content']|text(100)}}...</p>
                            </div>
                        </div>
                    </div>
                    {{/if}}
                    {{$nextset=array()}}
                    {{$nextset['column']=id,title,pic,shijian,content}}
                    {{$nextset['other']=`"id>".$article['id']}}
                    {{$nextset['order']=id asc}}
                    {{$next=a($nextset)}}
                    {{if $next}}
                    <div class="{{z(class)|upset_class()}} col-md-4">
                        <img class="{{z(class)|upset_class()}} img-fluid d-inline-block" src="{{$next['pic']}}" width="370" height="250" alt="{{$next['title']}}">
                        <div class="{{z(class)|upset_class()}} text-md-start offset-top-24">
                            <div>
                                <h5 class="{{z(class)|upset_class()}} fw-bold text-primary">
                                    <a href="{{$next['link']}}">{{$next['title']}}</a>
                                </h5>
                            </div>
                            <ul class="{{z(class)|upset_class()}} list-inline list-inline-dotted text-dark">
                                <li class="{{z(class)|upset_class()}} list-inline-item">{{$next['shijian']|date('Y-m-d H:i:s',this)}}</li>
                            </ul>
                            <div>
                                <p>{{$next['content']|text(100)}}...</p>
                            </div>
                        </div>
                    </div>
                    {{/if}}
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>