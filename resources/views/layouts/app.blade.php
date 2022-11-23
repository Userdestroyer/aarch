<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(91336082, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                ecommerce:"dataLayer"
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/91336082" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('other-scripts')
</head>
<body>

@include('layouts.header')

<div class="content-area">
    @yield('content')
</div>

@include('layouts.footer')
    
</body>
</html>