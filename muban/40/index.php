{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} preloader-body">
        <div class="{{z(class)|upset_class()}} cssload-container">
            <div class="{{z(class)|upset_class()}} cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section swiper-container swiper-slider swiper-slider-1 slider-pagination-vertical slider-scale-effect" data-swiper='{"autoplay":{"delay":5500},"effect":"fade","simulateTouch":false,"loop":false}'>
        <div class="{{z(class)|upset_class()}} swiper-wrapper">
            <div class="{{z(class)|upset_class()}} swiper-slide">
                <div class="{{z(class)|upset_class()}} slide-bg swiper-white-filter" style="background-image: url(<?php echo explode_array('||',z('home_banner_all_1'),0)?>)"></div>
                <div class="{{z(class)|upset_class()}} swiper-slide-caption section-md">
                    <div class="{{z(class)|upset_class()}} container">
                        <div class="{{z(class)|upset_class()}} row justify-content-end">
                            <div class="{{z(class)|upset_class()}} col-sm-8 col-lg-7 col-xl-6">
                                <h2 class="{{z(class)|upset_class()}} heading-decorate" data-caption-animate="fadeInUp" data-caption-delay="100"><?php echo explode_array("&#x2c;",z('keywords'),0) ?></h2>
                                <p class="{{z(class)|upset_class()}} lead" data-caption-animate="fadeInUp" data-caption-delay="250"><?php echo explode_array('||',z('home_banner_all_1'),1)?></p>
                                <a class="{{z(class)|upset_class()}} button button-default-outline" href="{{u(6)}}" data-caption-animate="fadeInUp" data-caption-delay="450">联系我们</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} swiper-slide">
                <div class="{{z(class)|upset_class()}} slide-bg swiper-white-filter" style="background-image: url(<?php echo explode_array('||',z('home_banner_all_2'),0)?>)"></div>
                <div class="{{z(class)|upset_class()}} swiper-slide-caption section-md">
                    <div class="{{z(class)|upset_class()}} container">
                        <div class="{{z(class)|upset_class()}} row justify-content-end">
                            <div class="{{z(class)|upset_class()}} col-sm-8 col-lg-7 col-xl-6">
                                <h2 class="{{z(class)|upset_class()}} heading-decorate" data-caption-animate="fadeInUp" data-caption-delay="100"><?php echo explode_array("&#x2c;",z('keywords'),1) ?></h2>
                                <p class="{{z(class)|upset_class()}} lead" data-caption-animate="fadeInUp" data-caption-delay="250"><?php echo explode_array('||',z('home_banner_all_2'),1)?></p>
                                <a class="{{z(class)|upset_class()}} button button-default-outline" href="{{u(5)}}" data-caption-animate="fadeInUp" data-caption-delay="450">我们的服务</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} swiper-slide">
                <div class="{{z(class)|upset_class()}} slide-bg swiper-white-filter" style="background-image: url(<?php echo explode_array('||',z('home_banner_all_3'),0)?>)"></div>
                <div class="{{z(class)|upset_class()}} swiper-slide-caption section-md">
                    <div class="{{z(class)|upset_class()}} container">
                        <div class="{{z(class)|upset_class()}} row justify-content-end">
                            <div class="{{z(class)|upset_class()}} col-sm-8 col-lg-7 col-xl-6">
                                <h2 class="{{z(class)|upset_class()}} heading-decorate" data-caption-animate="fadeInUp" data-caption-delay="100"><?php echo explode_array("&#x2c;",z('keywords'),2) ?></h2>
                                <p class="{{z(class)|upset_class()}} lead" data-caption-animate="fadeInUp" data-caption-delay="250"><?php echo explode_array('||',z('home_banner_all_3'),1)?></p>
                                <a class="{{z(class)|upset_class()}} button button-default-outline" href="{{u(2)}}" data-caption-animate="fadeInUp" data-caption-delay="450">认识我们</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="{{z(class)|upset_class()}} swiper-pagination"></div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 align-items-lg-center justify-content-xl-between">
                <div class="{{z(class)|upset_class()}} col-lg-6">
                    <div class="{{z(class)|upset_class()}} block-xs">
                        <h2 class="{{z(class)|upset_class()}} heading-decorate">
                            <span class="{{z(class)|upset_class()}} divider"></span>{{i(name,2)}}
                        </h2>
                        {{z(about_text)}}
                        <a class="{{z(class)|upset_class()}} button button-default-outline" href="{{u(2)}}">阅读更多</a>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-6">
                    <div class="{{z(class)|upset_class()}} box-images-classic">
                        <div class="{{z(class)|upset_class()}} row row-30">
                            <div class="{{z(class)|upset_class()}} col-6">
                                <div class="{{z(class)|upset_class()}} box-image-item" data-parallax-scroll="{&quot;y&quot;: 0, &quot;x&quot;: 20,  &quot;smoothness&quot;: 30 }">
                                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-gray-100 text-center">
        <div class="{{z(class)|upset_class()}} container">
            <h2>{{i(name,5)}}</h2>
            <div class="{{z(class)|upset_class()}} divider-lg"></div>
            <div class="{{z(class)|upset_class()}} row justify-content-center">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-9">
                    <p>Our Services</p>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row g-0 box-icon-classic-list justify-content-center">
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6">
                    <div class="{{z(class)|upset_class()}} box-icon-classic flex-lg-row-reverse">
                        <div class="{{z(class)|upset_class()}} icon-classic-aside">
                            <div class="{{z(class)|upset_class()}} icon-classic">
                                <svg version="1.1" xmlns="https://www.w3.org/2000/svg" x="0px" y="0px" width="49px" height="75px" viewbox="0 0 49 75" enable-background="new 0 0 49 75" xml:space="preserve">
                                            <g>
                                                <path d="M43.15,65.273c2.868-1.339,4.842-4.063,5.561-7.67c0.693-3.479,0.129-7.389-1.588-11.009    c-1.718-3.621-4.395-6.541-7.538-8.225c-3.257-1.746-6.632-1.966-9.498-0.623c-2.394,1.121-4.185,3.278-5.118,6.045l-3.191-6.717    c0.371-0.711,0.583-1.515,0.583-2.369c0-2.48-1.766-4.556-4.113-5.057l-6.94-14.628C6.385,4.636,2.141,0.494,1.962,0.323    C1.616-0.01,1.1-0.093,0.665,0.109C0.23,0.312-0.034,0.761,0.003,1.238c0.019,0.253,0.534,6.318,5.385,16.548l7.018,14.796    c-0.296,0.649-0.464,1.367-0.464,2.124c0,2.383,1.632,4.39,3.843,4.988l3.213,6.769c-2.704-1.009-5.436-0.98-7.821,0.141    c-2.319,1.082-4.057,3.069-5.028,5.746c-1.398,3.858-1.014,8.572,1.055,12.933c1.718,3.62,4.396,6.541,7.54,8.224    C16.597,74.5,18.487,75,20.297,75c1.376,0,2.707-0.288,3.942-0.868c4.15-1.944,6.241-6.8,5.767-12.189    c1.112,1.091,2.338,2.005,3.646,2.706C36.912,66.394,40.285,66.615,43.15,65.273z M3.23,5.554C4.83,7.817,6.951,11.228,9.213,16    l6.515,13.732c-0.627,0.177-1.204,0.469-1.71,0.85L7.483,16.805C5.237,12.069,3.956,8.246,3.23,5.554z M14.257,34.706    c0-1.585,1.299-2.875,2.894-2.875c1.595,0,2.894,1.29,2.894,2.875c0,1.585-1.299,2.875-2.894,2.875    C15.556,37.581,14.257,36.291,14.257,34.706z M28.21,55.444c-0.272-0.575-0.962-0.822-1.541-0.55    c-0.419,0.196-0.665,0.61-0.664,1.042c0,0.164,0.035,0.331,0.11,0.489c3.058,6.444,1.773,13.455-2.864,15.627    c-2.179,1.023-4.812,0.822-7.408-0.568c-2.712-1.452-5.037-4.002-6.545-7.18c-1.782-3.757-2.145-7.934-0.97-11.174    c0.757-2.091,2.083-3.627,3.836-4.445c2.572-1.207,5.742-0.708,8.702,1.363c0.431,0.3,1.009,0.276,1.411-0.06    c0.403-0.336,0.527-0.899,0.303-1.371l-4.216-8.884c0.636-0.151,1.226-0.415,1.748-0.775l4.273,8.993    c0.226,0.474,0.746,0.737,1.264,0.639c0.519-0.098,0.905-0.533,0.938-1.057c0.234-3.672,1.87-6.482,4.488-7.708    c2.187-1.024,4.819-0.822,7.412,0.568c2.711,1.452,5.034,4.002,6.542,7.181c1.508,3.179,2.01,6.582,1.412,9.582    c-0.572,2.872-2.09,5.015-4.276,6.036c-2.185,1.023-4.818,0.821-7.412-0.568C32.041,61.173,29.718,58.623,28.21,55.444z"></path>
                                                <path d="M18.724,51.488c-2.221-1.221-4.442-1.369-6.254-0.416c-1.81,0.953-2.934,2.861-3.165,5.373    c-0.216,2.346,0.379,4.976,1.676,7.407c2.182,4.089,5.721,6.579,8.898,6.579c0.904,0,1.779-0.202,2.585-0.626    c3.637-1.915,4.291-7.529,1.49-12.78C22.656,54.594,20.799,52.627,18.724,51.488z M21.459,67.921    c-2.485,1.309-6.416-1.01-8.581-5.067c-1.103-2.069-1.614-4.277-1.435-6.215c0.163-1.771,0.884-3.079,2.033-3.683    c0.468-0.247,0.995-0.369,1.561-0.369c0.819,0,1.722,0.257,2.649,0.767c1.715,0.942,3.267,2.6,4.37,4.67    C24.22,62.079,23.946,66.612,21.459,67.921z"></path>
                                                <path d="M39.044,61.509c0.91,0,1.775-0.206,2.563-0.621c1.811-0.953,2.935-2.861,3.166-5.373    c0.216-2.345-0.38-4.976-1.676-7.407c-1.297-2.431-3.154-4.398-5.229-5.537c-2.223-1.221-4.443-1.368-6.254-0.415    c-3.637,1.914-4.291,7.528-1.49,12.78c1.297,2.431,3.154,4.398,5.229,5.537C36.609,61.162,37.863,61.509,39.044,61.509z    M32.022,53.937c-2.164-4.056-1.89-8.589,0.598-9.898c0.469-0.247,0.995-0.369,1.56-0.369c0.82,0,1.722,0.257,2.649,0.767    c1.715,0.942,3.267,2.6,4.37,4.67c1.104,2.07,1.614,4.277,1.436,6.215c-0.164,1.771-0.885,3.079-2.034,3.683    c-1.149,0.604-2.643,0.463-4.209-0.398C34.678,57.665,33.126,56.007,32.022,53.937z"></path>
                                            </g>
                                        </svg>
                            </div>
                            <h4 class="{{z(class)|upset_class()}} icon-classic-title">
                                <p><?php echo explode_array('：',z('service_text_1'),0) ?></p>
                            </h4>
                        </div>
                        <div class="{{z(class)|upset_class()}} icon-classic-body text-lg-end">
                            <p><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6">
                    <div class="{{z(class)|upset_class()}} box-icon-classic">
                        <div class="{{z(class)|upset_class()}} icon-classic-aside">
                            <div class="{{z(class)|upset_class()}} icon-classic">
                                <svg version="1.1" xmlns="https://www.w3.org/2000/svg" x="0px" y="0px" width="77px" height="56px" viewbox="0 0 77 56" enable-background="new 0 0 77 56" xml:space="preserve">
                                            <g>
                                                <path d="M40.992,44.002c-0.25-0.073-0.509-0.111-0.77-0.111H29.736c-0.237,0-0.47,0.031-0.696,0.09    c-0.149,0.018-0.29,0.07-0.416,0.147c-0.962,0.434-1.595,1.401-1.595,2.465v6.578c0,1.491,1.215,2.703,2.708,2.703h10.486    c1.494,0,2.708-1.213,2.708-2.703v-6.578c0-1.171-0.749-2.203-1.862-2.568C41.043,44.018,41.004,44.006,40.992,44.002z    M40.841,53.173c0,0.34-0.278,0.617-0.619,0.617H29.736c-0.34,0-0.618-0.277-0.618-0.617v-6.578c0-0.258,0.162-0.491,0.404-0.58    c0.002,0,0.002,0,0.003-0.001c0.006-0.002,0.012-0.004,0.018-0.006c0.061-0.02,0.126-0.03,0.193-0.03h10.486    c0.06,0,0.118,0.008,0.184,0.028c0.003,0.001,0.007,0.002,0.011,0.003c0.253,0.083,0.424,0.319,0.424,0.586V53.173z"></path>
                                                <path d="M45.16,0.339C44.962,0.123,44.682,0,44.389,0H25.351c-0.294,0-0.574,0.124-0.772,0.34    c-0.198,0.217-0.295,0.507-0.269,0.799l3.722,40.27c0.05,0.537,0.501,0.947,1.041,0.947h11.703c0.541,0,0.993-0.412,1.041-0.95    l3.19-35.561c0.011-0.063,0.038-0.121,0.038-0.187c0-0.026-0.013-0.047-0.015-0.072l0.399-4.45    C45.456,0.845,45.358,0.555,45.16,0.339z M43.246,2.086l-0.227,2.528H26.731l-0.233-2.528H43.246z M39.821,40.27h-9.795    L26.924,6.701h15.908L39.821,40.27z"></path>
                                                <path d="M13.891,45.891c-0.194,0.052-0.376,0.133-0.545,0.242c-0.13,0.067-0.245,0.163-0.336,0.277    c-0.567,0.581-0.779,1.497-0.539,2.388l1.443,5.335c0.185,0.685,0.615,1.264,1.182,1.589C15.416,55.906,15.764,56,16.11,56    c0.167,0,0.332-0.022,0.495-0.065l6.586-1.775c0.589-0.159,1.073-0.596,1.325-1.199c0.217-0.519,0.25-1.126,0.093-1.708    l-1.443-5.335c-0.269-0.997-1.026-1.723-2.001-1.857c-0.228-0.022-0.463-0.005-0.689,0.055L13.891,45.891z M20.959,46.148    c0.051,0.037,0.142,0.138,0.189,0.312v0.001l1.443,5.335c0.047,0.175,0.02,0.308-0.006,0.366l-6.464,1.742    c-0.051-0.037-0.142-0.139-0.189-0.313l-1.443-5.335c-0.048-0.179-0.018-0.314,0.002-0.366L20.959,46.148z"></path>
                                                <path d="M11.227,43.824c0.149,0.428,0.552,0.7,0.986,0.7c0.091,0,0.182-0.011,0.274-0.036l7.352-1.981    c0.53-0.143,0.859-0.671,0.753-1.209L14.027,8.024c-0.056-0.284-0.228-0.531-0.473-0.684c-0.247-0.153-0.545-0.197-0.825-0.121    L0.772,10.441c-0.28,0.076-0.516,0.264-0.651,0.52c-0.135,0.256-0.158,0.557-0.063,0.83L11.227,43.824z M12.881,42.221    L3.652,15.749l9.262-2.572l5.438,27.569L12.881,42.221z M12.193,9.524l0.316,1.6l-9.546,2.65l-0.562-1.611L12.193,9.524z"></path>
                                                <path d="M47.369,44.077L45.618,48.6c-0.458,1.186,0.278,2.537,1.675,3.075l9.576,3.695    c0.379,0.146,0.761,0.215,1.126,0.215c0.986,0,1.851-0.503,2.185-1.367l1.75-4.522c0.368-0.95-0.033-2.042-0.998-2.717    c-0.007-0.005-0.056-0.038-0.064-0.043c-0.194-0.128-0.402-0.235-0.614-0.316l-9.573-3.694c-0.201-0.078-0.409-0.135-0.62-0.171    c-0.124-0.038-0.256-0.051-0.381-0.04C48.608,42.668,47.707,43.205,47.369,44.077z M49.565,44.799c0.027,0,0.056,0.001,0.086,0.005    c0.006-0.002,0.017,0.002,0.025,0.003c0.085,0.011,0.169,0.032,0.252,0.064l9.578,3.696c0.073,0.028,0.142,0.064,0.195,0.098    c0.002,0.001,0.024,0.016,0.038,0.026c0.169,0.119,0.233,0.247,0.243,0.253l-1.731,4.491c-0.051,0.048-0.304,0.114-0.629-0.011    l-9.576-3.695c-0.321-0.124-0.465-0.343-0.478-0.378l1.732-4.491C49.323,44.838,49.418,44.799,49.565,44.799z"></path>
                                                <path d="M58.091,10.566c-0.266,0.137-0.46,0.382-0.533,0.672l-7.319,28.995c-0.129,0.511,0.144,1.038,0.637,1.228    l10.687,4.123c0.123,0.048,0.251,0.07,0.376,0.07c0.377,0,0.737-0.205,0.923-0.555l14.016-26.411    c0.14-0.263,0.16-0.574,0.056-0.853c-0.104-0.279-0.323-0.5-0.602-0.608l-17.384-6.707C58.67,10.411,58.357,10.429,58.091,10.566z    M61.45,43.304l-8.959-3.456l5.935-23.508l14.468,5.4L61.45,43.304z M74.481,18.749l-0.6,1.131l-14.942-5.576l0.357-1.413    L74.481,18.749z"></path>
                                            </g>
                                        </svg>
                            </div>
                            <h4 class="{{z(class)|upset_class()}} icon-classic-title">
                                <p><?php echo explode_array('：',z('service_text_2'),0) ?></p>
                            </h4>
                        </div>
                        <div class="{{z(class)|upset_class()}} icon-classic-body">
                            <p><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6">
                    <div class="{{z(class)|upset_class()}} box-icon-classic flex-lg-row-reverse">
                        <div class="{{z(class)|upset_class()}} icon-classic-aside">
                            <div class="{{z(class)|upset_class()}} icon-classic">
                                <svg version="1.1" xmlns="https://www.w3.org/2000/svg" x="0px" y="0px" width="53px" height="74px" viewbox="0 0 53 74" enable-background="new 0 0 53 74" xml:space="preserve">
                                            <g>
                                                <path d="M0,21.172v46.656C0,71.231,2.795,74,6.23,74h10.371c3.435,0,6.23-2.769,6.23-6.172V21.172    c0-3.403-2.795-6.172-6.23-6.172h-0.799v-0.402c0-0.572-0.468-1.035-1.044-1.035H8.074c-0.577,0-1.044,0.463-1.044,1.035V15h-0.8    C2.795,15,0,17.769,0,21.172z M2.089,21.172c0-2.262,1.858-4.103,4.141-4.103h1.844c0.577,0,1.044-0.463,1.044-1.035v-0.402h4.595    v0.402c0,0.572,0.468,1.035,1.044,1.035h1.843c2.283,0,4.141,1.84,4.141,4.103v46.656c0,2.262-1.858,4.102-4.141,4.102H6.23    c-2.283,0-4.141-1.84-4.141-4.102V21.172z"></path>
                                                <path d="M7.76,12.276c0.051,0.016,0.104,0.028,0.158,0.036l0.518,0.078c0.051,0.008,0.104,0.012,0.156,0.012h5.647    c0.052,0,0.104-0.004,0.156-0.012l0.519-0.078c0.054-0.008,0.107-0.02,0.159-0.036c1.16-0.363,1.939-1.416,1.939-2.622V2.747    C17.012,1.232,15.768,0,14.239,0H8.592C7.063,0,5.82,1.232,5.82,2.747v6.907C5.82,10.859,6.6,11.913,7.76,12.276z M7.909,2.747    c0-0.374,0.307-0.677,0.684-0.677h5.647c0.377,0,0.684,0.304,0.684,0.677v6.907c0,0.277-0.167,0.521-0.419,0.626l-0.343,0.051    h-5.49l-0.342-0.051c-0.254-0.105-0.42-0.35-0.42-0.626V2.747z"></path>
                                            </g>
                                    <g>
                                        <path d="M25.954,46.742c0,8.837,8.853,26.068,9.23,26.797C35.33,73.822,35.624,74,35.945,74h8.153    c0.332,0,0.634-0.19,0.774-0.488C45.204,72.811,53,56.212,53,46.742c0-12.14-5.683-16.001-9.071-17.223    c-0.094-0.034-0.193-0.051-0.292-0.051h-8.318c-0.095,0-0.19,0.016-0.28,0.047C29.18,31.53,25.954,37.649,25.954,46.742z    M35.466,31.162h8.017c5.037,1.897,7.807,7.422,7.807,15.579c0,8.219-6.444,22.727-7.741,25.564h-7.076    c-1.42-2.826-8.808-17.904-8.808-25.564C27.664,38.498,30.434,32.973,35.466,31.162z"></path>
                                        <path d="M43.637,28.024c0.472,0,0.855-0.379,0.855-0.847v-7.983c0-1.373-1.472-2.448-3.351-2.448h-3.326    c-1.878,0-3.35,1.075-3.35,2.448v7.983c0,0.468,0.383,0.847,0.855,0.847H43.637z M36.174,19.194c0-0.266,0.623-0.754,1.64-0.754    h3.326c1.018,0,1.641,0.488,1.641,0.754v7.136h-6.608V19.194z"></path>
                                    </g>
                                        </svg>
                            </div>
                            <h4 class="{{z(class)|upset_class()}} icon-classic-title">
                                <p><?php echo explode_array('：',z('service_text_3'),0) ?></p>
                            </h4>
                        </div>
                        <div class="{{z(class)|upset_class()}} icon-classic-body text-lg-end">
                            <p><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6">
                    <div class="{{z(class)|upset_class()}} box-icon-classic">
                        <div class="{{z(class)|upset_class()}} icon-classic-aside">
                            <div class="{{z(class)|upset_class()}} icon-classic">
                                <svg version="1.1" xmlns="https://www.w3.org/2000/svg" x="0px" y="0px" width="65px" height="65px" viewbox="0 0 65 65" enable-background="new 0 0 65 65" xml:space="preserve">
                                            <g>
                                                <path d="M51.076,38.677c-0.839-0.666-1.686-1.324-2.533-1.984c-3.869-3.009-7.869-6.12-10.982-9.902    c-2.298-2.791-4.21-6.072-6.058-9.245c-3.519-6.04-7.158-12.286-13.746-15.89C13.626-0.602,9.108-0.55,5.034,1.804    C1.048,4.106-0.73,7.326,0.276,10.417c0.178,0.546,0.767,0.846,1.318,0.669c0.55-0.177,0.851-0.763,0.673-1.31    C1.258,6.677,4.934,4.267,6.085,3.602c3.414-1.972,7.201-2.016,10.662-0.123c6.079,3.325,9.414,9.049,12.945,15.11    c1.89,3.244,3.844,6.598,6.249,9.52c3.26,3.96,7.354,7.144,11.312,10.222c0.842,0.655,1.684,1.309,2.517,1.971    c4.591,3.645,9.202,7.752,11.826,13.081c0.907,1.842,1.323,3.362,1.311,4.785c-0.015,1.645-0.708,3.168-1.81,3.973    c-1.912,1.397-4.737,0.721-6.743-0.378c-3.789-2.076-6.933-5.985-9.342-11.619c-0.339-0.794-0.666-1.618-0.982-2.415    c-0.824-2.077-1.675-4.224-2.883-6.198c-2.443-3.991-5.936-6.246-9.833-6.35c-0.573-0.012-1.059,0.438-1.074,1.012    c-0.015,0.574,0.441,1.052,1.018,1.067c4.268,0.113,6.908,3.402,8.102,5.352c1.115,1.821,1.896,3.792,2.724,5.879    c0.321,0.81,0.653,1.647,1.003,2.466c2.597,6.072,6.048,10.321,10.258,12.627C54.818,64.392,56.666,65,58.485,65    c1.356,0,2.696-0.338,3.852-1.183c1.647-1.204,2.642-3.309,2.662-5.631c0.015-1.758-0.469-3.575-1.523-5.717    C60.67,46.771,55.858,42.473,51.076,38.677z"></path>
                                                <path d="M13.648,5.884c-0.365-0.446-1.024-0.514-1.472-0.151l-8.371,6.76c-0.449,0.362-0.517,1.017-0.152,1.463    c0.207,0.253,0.509,0.384,0.813,0.384c0.232,0,0.465-0.076,0.659-0.233l8.371-6.76C13.944,6.985,14.012,6.33,13.648,5.884z"></path>
                                                <path d="M18.1,11.33c-0.365-0.446-1.024-0.513-1.472-0.151l-8.371,6.76c-0.449,0.362-0.517,1.017-0.152,1.463    c0.207,0.253,0.509,0.384,0.813,0.384c0.232,0,0.465-0.076,0.659-0.233l8.371-6.76C18.396,12.431,18.464,11.775,18.1,11.33z"></path>
                                                <path d="M21.08,16.624l-8.371,6.76c-0.449,0.362-0.517,1.017-0.152,1.463c0.207,0.253,0.508,0.384,0.813,0.384    c0.232,0,0.465-0.076,0.659-0.233l8.371-6.76c0.449-0.362,0.517-1.017,0.152-1.463C22.188,16.33,21.528,16.262,21.08,16.624z"></path>
                                                <path d="M25.532,22.07l-8.371,6.76c-0.449,0.362-0.517,1.017-0.152,1.463c0.207,0.253,0.509,0.384,0.813,0.384    c0.232,0,0.465-0.076,0.659-0.233l8.371-6.76c0.449-0.362,0.517-1.017,0.152-1.463C26.639,21.775,25.98,21.708,25.532,22.07z"></path>
                                                <path d="M31.456,27.667c-0.365-0.446-1.024-0.514-1.472-0.151l-8.371,6.76c-0.449,0.362-0.517,1.017-0.152,1.463    c0.207,0.253,0.509,0.384,0.813,0.384c0.232,0,0.465-0.076,0.659-0.233l8.371-6.76C31.752,28.768,31.82,28.113,31.456,27.667z"></path>
                                            </g>
                                        </svg>
                            </div>
                            <h4 class="{{z(class)|upset_class()}} icon-classic-title">
                                <p><?php echo explode_array('：',z('service_text_4'),0) ?></p>
                            </h4>
                        </div>
                        <div class="{{z(class)|upset_class()}} icon-classic-body">
                            <p><?php echo explode_array('：',z('service_text_4'),1) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section parallax-container" style="background-color: #1c86d1">
        <div class="{{z(class)|upset_class()}} parallax-content section-lg context-dark text-center section-filter-white">
            <div class="{{z(class)|upset_class()}} container">
                <div class="{{z(class)|upset_class()}} owl-carousel carousel-creative" data-items="1" data-sm-items="2" data-lg-items="4" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
                    <?php for ($i=1; $i<=6; $i++) {?>
                    <img src="<?php echo z('partner_img_'.$i) ?>" width="131" height="87">
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default text-center">
        <div class="{{z(class)|upset_class()}} container">
            <h2>{{i(name,3)}}</h2>
            <div class="{{z(class)|upset_class()}} divider-lg"></div>
            <p class="{{z(class)|upset_class()}} block-lg">Our Products</p>
            <div class="{{z(class)|upset_class()}} row row-30">
                <div class="{{z(class)|upset_class()}} col-lg-12">
                    <div class="{{z(class)|upset_class()}} isotope row" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group" data-column-class=".col-sm-6.col-lg-4">
                        {{$set=array()}}
                        {{$set['cid']=3}}
                        {{$set['pagesize']=6}}
                        {{$set['column']=id,title,pic}}
                        {{$articles=alist($set)}}
                        {{loop $articles['list'] as $a}}
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-4 isotope-item" data-filter="other">
                            <a class="{{z(class)|upset_class()}} gallery-item" data-lightgallery="item" href="{{$a['link']}}">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="570" height="570">
                                <span class="{{z(class)|upset_class()}} gallery-item-title">{{$a['title']}}</span>
                                <span class="{{z(class)|upset_class()}} gallery-item-button"></span>
                            </a>
                        </div>
                        {{/loop}}
                    </div>
                </div>
            </div>
            <a class="{{z(class)|upset_class()}} button button-default-outline" href="{{u(3)}}">更多项目</a>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section parallax-container">
        <div class="{{z(class)|upset_class()}} parallax-content section-lg text-center">
            <div class="{{z(class)|upset_class()}} container">
                <h2>用户留言</h2>
                <div class="{{z(class)|upset_class()}} divider-lg"></div>
                <p class="{{z(class)|upset_class()}} block-lg">Message</p>
            </div>
            <div class="{{z(class)|upset_class()}} container">
                <div class="{{z(class)|upset_class()}} owl-carousel carousel-arrow-circle" data-items="1" data-lg-items="2" data-dots="true" data-nav="true" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
                    <?php for ($i=1; $i<=5; $i++) {?>
                    <div class="{{z(class)|upset_class()}} quote-corporate">
                        <div class="{{z(class)|upset_class()}} quote-header">
                            <h4><?php echo explode_array('||',z('ask_all_'.$i),1)?></h4>
                        </div>
                        <div class="{{z(class)|upset_class()}} quote-body">
                            <div class="{{z(class)|upset_class()}} quote-text">
                                <p><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                            </div>
                            <svg class="{{z(class)|upset_class()}} quote-body-mark" version="1.1" xmlns="https://www.w3.org/2000/svg" x="0px" y="0px" width="66px" height="49px" viewbox="0 0 66 49" enable-background="new 0 0 66 49" xml:space="preserve">
                                        <g></g>
                                <path d="M36.903,49v-3.098c9.203-5.315,14.885-12.055,17.042-20.222c-2.335,1.524-4.459,2.288-6.37,2.288						c-3.186,0-5.875-1.29-8.071-3.876c-2.194-2.583-3.293-5.74-3.293-9.479c0-4.133,1.443-7.605,4.327-10.407						C43.425,1.405,46.973,0,51.185,0c4.213,0,7.735,1.784,10.566,5.352C64.585,8.919,66,13.359,66,18.669						c0,7.482-2.85,14.183-8.549,20.112C51.751,44.706,44.902,48.112,36.903,49z M0.69,49v-3.098						c9.205-5.315,14.887-12.055,17.044-20.222c-2.335,1.524-4.478,2.288-6.423,2.288c-3.152,0-5.823-1.29-8.02-3.876						C1.096,21.51,0,18.353,0,14.614c0-4.133,1.434-7.605,4.301-10.407C7.168,1.405,10.709,0,14.92,0c4.247,0,7.778,1.784,10.592,5.352						c2.814,3.567,4.223,8.007,4.223,13.317c0,7.482-2.843,14.183-8.524,20.112C15.53,44.706,8.69,48.112,0.69,49z"></path>
                                    </svg>
                        </div>
                        <div class="{{z(class)|upset_class()}} quote-image">
                            <img src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="90" height="90">
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default text-center">
        <div class="{{z(class)|upset_class()}} container">
            <h2>{{i(name,4)}}</h2>
            <div class="{{z(class)|upset_class()}} divider-lg"></div>
            <p class="{{z(class)|upset_class()}} block-lg">Our News</p>
        </div>
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-center">
                {{$set=array()}}
                {{$set['cid']=4}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <div class="{{z(class)|upset_class()}} post-classic">
                        <figure class="{{z(class)|upset_class()}} post-classic-img">
                            <a href="{{$a['link']}}">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="370" height="300">
                            </a>
                        </figure>
                        <div class="{{z(class)|upset_class()}} post-classic-caption">
                            <h4 class="{{z(class)|upset_class()}} post-classic-title">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h4>
                            <ul class="{{z(class)|upset_class()}} post-classic-meta-list">
                                <li class="{{z(class)|upset_class()}} time">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{/loop}}
                <div class="{{z(class)|upset_class()}} col-12">
                    <a class="{{z(class)|upset_class()}} button button-default-outline" href="{{u(4)}}">更多新闻</a>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default novi-bg novi-bg-img text-center">
        <div class="{{z(class)|upset_class()}} container">
            <h2>常见的问题解答</h2>
            <div class="{{z(class)|upset_class()}} divider-lg"></div>
            <p class="{{z(class)|upset_class()}} block-lg">Your`s FAQ</p>
        </div>
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} block-sm">
                <div class="{{z(class)|upset_class()}} card-group-custom card-group-corporate card-group-gray" id="accordion1" role="tablist" aria-multiselectable="false">
                    <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                        <div class="{{z(class)|upset_class()}} card-header" id="accordion1Heading1" role="tab">
                            <div class="{{z(class)|upset_class()}} card-title">
                                <a role="button" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#accordion1Collapse1" aria-controls="accordion1Collapse1" aria-expanded="true"><?php echo explode_array('：',z('faq_text_1'),0) ?>
                                    <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                </a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} collapse show" id="accordion1Collapse1" role="tabpanel" data-bs-parent="#accordion1" aria-labelledby="accordion1Heading1">
                            <div class="{{z(class)|upset_class()}} card-body">
                                <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                            </div>
                        </div>
                    </article>
                    <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                        <div class="{{z(class)|upset_class()}} card-header" id="accordion1Heading2" role="tab">
                            <div class="{{z(class)|upset_class()}} card-title">
                                <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#accordion1Collapse2" aria-controls="accordion1Collapse2"><?php echo explode_array('：',z('faq_text_2'),0) ?>
                                    <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                </a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} collapse" id="accordion1Collapse2" role="tabpanel" data-bs-parent="#accordion1" aria-labelledby="accordion1Heading2">
                            <div class="{{z(class)|upset_class()}} card-body">
                                <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                            </div>
                        </div>
                    </article>
                    <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                        <div class="{{z(class)|upset_class()}} card-header" id="accordion1Heading3" role="tab">
                            <div class="{{z(class)|upset_class()}} card-title">
                                <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#accordion1Collapse3" aria-controls="accordion1Collapse3"><?php echo explode_array('：',z('faq_text_3'),0) ?>
                                    <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                </a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} collapse" id="accordion1Collapse3" role="tabpanel" data-bs-parent="#accordion1" aria-labelledby="accordion1Heading3">
                            <div class="{{z(class)|upset_class()}} card-body">
                                <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                            </div>
                        </div>
                    </article>
                    <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                        <div class="{{z(class)|upset_class()}} card-header" id="accordion1Heading4" role="tab">
                            <div class="{{z(class)|upset_class()}} card-title">
                                <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#accordion1Collapse4" aria-controls="accordion1Collapse4"><?php echo explode_array('：',z('faq_text_4'),0) ?>
                                    <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                </a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} collapse" id="accordion1Collapse4" role="tabpanel" data-bs-parent="#accordion1" aria-labelledby="accordion1Heading4">
                            <div class="{{z(class)|upset_class()}} card-body">
                                <p><?php echo explode_array('：',z('faq_text_4'),1) ?></p>
                            </div>
                        </div>
                    </article>
                    <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                        <div class="{{z(class)|upset_class()}} card-header" id="accordion1Heading5" role="tab">
                            <div class="{{z(class)|upset_class()}} card-title">
                                <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#accordion1Collapse5" aria-controls="accordion1Collapse5"><?php echo explode_array('：',z('faq_text_5'),0) ?>
                                    <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                </a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} collapse" id="accordion1Collapse5" role="tabpanel" data-bs-parent="#accordion1" aria-labelledby="accordion1Heading5">
                            <div class="{{z(class)|upset_class()}} card-body">
                                <p><?php echo explode_array('：',z('faq_text_5'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>