<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME')}}</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:image" content="" />
    <!-- Styles -->


    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    {{--<link rel="manifest" href="{{ asset('favicon/manifest.json') }}">--}}
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="">
    <meta name="theme-color" content="#ffffff">

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/fonts/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/js/ajax/libs/ionicons/4.5.6/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/A.animate.css%2bflaticon.css%2btiny-slider.css%2bglightbox.min.css%2baos.css%2bstyle.css%2cMcc.HFFLwOuYCQ.css.pagespeed.cf.AZpkzFaEmU.css')}}" />
    <script>(function(w,d){!function(e,t,r,a,s){e[r]=e[r]||{},e[r].executed=[],e.zaraz={deferred:[]};var n=t.getElementsByTagName("title")[0];e[r].c=t.cookie,n&&(e[r].t=t.getElementsByTagName("title")[0].text),e[r].w=e.screen.width,e[r].h=e.screen.height,e[r].j=e.innerHeight,e[r].e=e.innerWidth,e[r].l=e.location.href,e[r].r=t.referrer,e[r].k=e.screen.colorDepth,e[r].n=t.characterSet,e[r].o=(new Date).getTimezoneOffset(),//
    e[s]=e[s]||[],e.zaraz._preTrack=[],e.zaraz.track=(t,r)=>e.zaraz._preTrack.push([t,r]),e[s].push({"zaraz.start":(new Date).getTime()});var i=t.getElementsByTagName(a)[0],o=t.createElement(a);o.defer=!0,o.src="{{asset('frontend/cdn-cgi/zaraz/sd41d.js')}}?"+new URLSearchParams(e[r]).toString(),i.parentNode.insertBefore(o,i)}(w,d,"zarazData","script","dataLayer");})(window,document);</script>
    {{-- <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet"> --}}

</head>

<body>
    {{-- Header Section --}}
    @include('sections.header-nav')

<!-- Main container -->
    @yield('content')
<!-- END Main container -->


<!-- Footer -->
@include('sections.frontend-footer')
<!-- END Footer -->



<!-- Scripts -->
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/tiny-slider.js')}}"></script>
<script src="{{asset('frontend/js/glightbox.min.js%2baos.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.CNHUYLpEWQ.js')}}"></script>
<script>eval(mod_pagespeed_7_hPlGGYt1);</script>
<script>eval(mod_pagespeed_QuG92EaMQX);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script>eval(mod_pagespeed_mTpoFW8ALW);</script>
<script>eval(mod_pagespeed_omftQ6ch3C);</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
                            </script>
                            <script
                                defer
                                src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
                                integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
                                data-cf-beacon='{"rayId":"6cc6443ce87dcb8f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
                                crossorigin="anonymous"
                            ></script>
</body>
</html>
