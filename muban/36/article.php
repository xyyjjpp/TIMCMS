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
    <header class="{{z(class)|upset_class()}} page-header subpage_header">
        {{file header}}
        <section>
            <div class="{{z(class)|upset_class()}} swiper-container swiper-slider" data-loop="true" data-slide-effect="fade" data-autoplay="5000">
                <div class="{{z(class)|upset_class()}} jumbotron text-center">
                    <h2>{{i(name)}}</h2>
                    <p class="{{z(class)|upset_class()}} big"></p>
                </div>
                <div class="{{z(class)|upset_class()}} swiper-wrapper">
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption"></div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <section class="{{z(class)|upset_class()}} section section-border">
        <ol class="{{z(class)|upset_class()}} breadcrumb">
            <li>
                <a href="{{host}}">首页</a>
            </li>
            <li class="{{z(class)|upset_class()}} active">{{$article['title']}}</li>
        </ol>
    </section>
    <section class="{{z(class)|upset_class()}} section text-center text-lg-start margin-1">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-12 section-border">
                    <article class="{{z(class)|upset_class()}} section-custom">
                        <h2>{{$article['title']}}</h2>
                        <div class="{{z(class)|upset_class()}} blog-info">
                            <div class="{{z(class)|upset_class()}} pull-md-left">
                                <time class="{{z(class)|upset_class()}} meta fa-calendar" datetime="{{$article['shijian']|date('Y-m-d',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                            </div>
                        </div>
                        {{$article['content']}}
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-12 text-center text-lg-start post-links margin-5">
                    <div class="{{z(class)|upset_class()}} d-flex align-items-center justify-content-center justify-content-md-between flex-wrap group">
                        {{$prevset=array()}}
                        {{$prevset['column']=id,title}}
                        {{$prevset['order']=id desc}}
                        {{$prevset['other']=`"id<".$article['id']}}
                        {{$prev=a($prevset)}}
                        {{if $prev}}
                        <a class="{{z(class)|upset_class()}} button-link pull-md-left fa-angle-left" href="{{$prev['link']}}">{{$prev['title']}}</a>
                        {{/if}}
                        {{$nextset=array()}}
                        {{$nextset['column']=id,title}}
                        {{$nextset['other']=`"id>".$article['id']}}
                        {{$nextset['order']=id asc}}
                        {{$next=a($nextset)}}
                        {{if $next}}
                        <a class="{{z(class)|upset_class()}} button-link pull-md-right fa-angle-right" href="{{$next['link']}}">{{$next['title']}}</a>
                        {{/if}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm inset-bottom-2">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-12">
                    <h5 class="{{z(class)|upset_class()}} fw-bold text-center text-lg-start">给我们留言</h5>
                    <form class="{{z(class)|upset_class()}} rd-mailform text-start" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                        <div class="{{z(class)|upset_class()}} row row-20">
                            <div class="{{z(class)|upset_class()}} col-md-4">
                                <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation validation-with-outside-label">
                                    <label class="{{z(class)|upset_class()}} form-label-outside" for="forms-name">First name</label>
                                    <input class="{{z(class)|upset_class()}} form-input" id="forms-name" type="text" name="name" placeholder="Your First Name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-4">
                                <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation validation-with-outside-label">
                                    <label class="{{z(class)|upset_class()}} form-label-outside" for="forms-email">E-mail</label>
                                    <input class="{{z(class)|upset_class()}} form-input" id="forms-email" type="email" name="email" placeholder="example@domain.com" data-constraints="@Email @Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-4">
                                <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation validation-with-outside-label">
                                    <label class="{{z(class)|upset_class()}} form-label-outside" for="forms-website">Website</label>
                                    <input class="{{z(class)|upset_class()}} form-input" id="forms-website" type="text" name="website" placeholder="Your Website" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-12">
                                <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation validation-with-outside-label">
                                    <label class="{{z(class)|upset_class()}} form-label-outside" for="forms-message">Your message</label>
                                    <textarea class="{{z(class)|upset_class()}} form-input" id="forms-message" name="message" placeholder="Write your message here" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-12 text-center button-wrap">
                                <button class="{{z(class)|upset_class()}} button button-primary button-xs round-xl form-el-offset-1" type="submit">Submit comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>