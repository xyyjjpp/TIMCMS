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
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom-inset">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom context-dark bg-overlay-60">
            <div class="{{z(class)|upset_class()}} container">
                <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li>
                        <a href="{{i(url)}}">{{i(name)}}</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">{{$article['title']}}</li>
                </ul>
            </div>
            <div class="{{z(class)|upset_class()}} box-position" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}});"></div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm section-first bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-start align-items-xl-center">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-6 col-xl-7">
                    <div class="{{z(class)|upset_class()}} offset-right-xl-15">
                        <img src="{{$article['pic']}}" alt="{{$article['title']}}" width="655" height="496">
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-6 col-xl-5 text-start">
                    <h5 class="{{z(class)|upset_class()}} text-gray-1000">{{$article['title']}}</h5>
                    <span>{{$article['shijian']|date('Y-m-d H:i:s',this)}}</span>
                    <p class="{{z(class)|upset_class()}} text-gray-500">{{$article['content']}}</p>
                    <div class="{{z(class)|upset_class()}} divider divider-30"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm section-last bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} project-navigation">
                <div class="{{z(class)|upset_class()}} row row-30">
                    {{$prevset=array()}}
                    {{$prevset['column']=id,title,pic,shijian}}
                    {{$prevset['order']=id desc}}
                    {{$prevset['other']=`"id<".$article['id']}}
                    {{$prev=a($prevset)}}
                    {{if $prev}}
                    <div class="{{z(class)|upset_class()}} col-sm-6">
                        <div class="{{z(class)|upset_class()}} project-minimal">
                            <div class="{{z(class)|upset_class()}} unit unit-spacing-lg align-items-center flex-column flex-lg-row text-lg-left">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <a class="{{z(class)|upset_class()}} project-minimal-figure" href="{{$prev['link']}}">
                                        <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" style="width:168px;height:139px;">
                                    </a>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <p class="{{z(class)|upset_class()}} project-minimal-text">上一篇</p>
                                    <div class="{{z(class)|upset_class()}} project-minimal-title">
                                        <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{/if}}
                    {{$nextset=array()}}
                    {{$nextset['column']=id,title,pic,shijian}}
                    {{$nextset['other']=`"id>".$article['id']}}
                    {{$nextset['order']=id asc}}
                    {{$next=a($nextset)}}
                    {{if $next}}
                    <div class="{{z(class)|upset_class()}} col-sm-6">
                        <div class="{{z(class)|upset_class()}} project-minimal">
                            <div class="{{z(class)|upset_class()}} unit unit-spacing-lg align-items-center flex-column flex-lg-row text-lg-left">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <a class="{{z(class)|upset_class()}} project-minimal-figure" href="{{$next['link']}}">
                                        <img src="{{$next['pic']}}" alt="{{$next['title']}}" style="width:168px;height:139px;">
                                    </a>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <p class="{{z(class)|upset_class()}} project-minimal-text">下一篇</p>
                                    <div class="{{z(class)|upset_class()}} project-minimal-title">
                                        <a href="{{$next['link']}}">{{$next['title']}}</a>
                                    </div>
                                </div>
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