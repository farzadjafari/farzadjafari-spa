@if (config('app.env') === 'production')
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151186016-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-151186016-1');
    </script>
@endif
