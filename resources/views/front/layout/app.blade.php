<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="background-100-e" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{__("messages.header.reshape global")}}</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/front/bower_components/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/front/bower_components/animate.css/animate.min.css" />
    <link rel="stylesheet" href="/front/bower_components/minicolors/jquery.minicolors.css" />
    <link rel="stylesheet" href="/front/bower_components/slick.js/slick/slick.css" />
    <link rel="stylesheet" href="/front/bower_components/slick.js/slick/slick-theme.css" />
    <link rel="stylesheet" href="/front/bootstrap/dist/css/bootstrap-custom.min.css" />
    <link rel="stylesheet" href="/front/lib/linecons/style.css" />
    <link rel="stylesheet" href="/front/styles/style.min.css" />
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono" />--}}
    <link rel="stylesheet" href="/front/theme-custom.css" />
    <link rel="shortcut icon" href="/front/logo.png" type="image/png" />
    @if(App::isLocale('fa'))
        <link rel="stylesheet" href="/front/styles/persian.css" />
    @endif
    @yield('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" type="text/css">
</head>
<body class="state1 background-100-e" dir="{{(App::isLocale('fa') ? 'rtl' : 'ltr')}}" class="{{(App::isLocale('fa') ? 'text-right' : '')}}">

@include('front.layout.header')

@yield('content')

@include('front.layout.footer')

{{--<script>
    if (typeof(atob) == "undefined")
    {
        document.write('<script src="/front/lib/stringencoders-v3.10.3/javascript/base64.js"><\/script>');
        var atob = function(x)
        {
            return base64.decode(x);
        }
    }
</script>--}}
<script src="/front/bower_components/less.js/dist/less.min.js"></script>
<script src="/front/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/front/lib/tween/tween.min.js"></script>
<script src="/front/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/front/bower_components/modernizr/modernizr.js"></script>
<script src="/front/lib/SmoothScroll-1.2.1/SmoothScroll.js"></script>
<script src="/front/bower_components/jquery-cookie/jquery.cookie.js"></script>
<script src="/front/bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js"></script>
<script src="/front/bower_components/minicolors/jquery.minicolors.min.js"></script>
<script src="/front/bower_components/slick.js/slick/slick.min.js"></script>
<script src="/front/bower_components/shufflejs/dist/jquery.shuffle.min.js"></script>
<script src="/front/bower_components/textillate/assets/jquery.lettering.js"></script>
<script src="/front/bower_components/textillate/assets/jquery.fittext.js"></script>
<script src="/front/bower_components/textillate/jquery.textillate.js"></script>
<script src="/front/lib/prism/prism.js"></script>
<script src="/front/scripts/script-bundle.js"></script>
<script>
    if (Function('/*@cc_on return document.documentMode===9@*/')())
    {
        $('html').addClass('ie9');
    }
    if (Function('/*@cc_on return document.documentMode===10@*/')())
    {
        $('html').addClass('ie10');
    }
    if (!!navigator.userAgent.match(/Trident.*rv\:11\./))
    {
        $('html').addClass('ie11');
    }
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{Session::get('alert-type','info')}}";
    switch (type) {
        case 'info':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.info("{{Session::get('message')}}");
            break;
        case 'success':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.success("{{Session::get('message')}}");
            break;
        case 'warning':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.warning("{{Session::get('message')}}");
            break;
        case 'error':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.error("{{Session::get('message')}}");
            break;
    }
    @endif
</script>
</body>
</html>
