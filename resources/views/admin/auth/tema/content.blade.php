<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{{Nfs::app()}}</title>

    <meta name="description" content="" />

    @include('template.css')

    <link rel="stylesheet" href="{{url('assets/vendor/css/pages/page-auth.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/loading.css')}}" />
    @stack('css')

  </head>

  <body>

    @yield('content')

    {{-- loading --}}
    <div class="overlay"></div>
    <div class="spanner">
      <div class="loader"></div>
      <p>Waiting moment</p>
    </div>

    {{-- whatsapp --}}
    <div class="buy-now">
      <a
        href="https://api.whatsapp.com/send?phone=6282132715484"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        ><i class="bx bxl-whatsapp"></i></a
      >
    </div>

   {{-- javascript --}}
   
   @include('template.js')
   <script>
    $("#submit").click(function(){
      $("div.spanner").addClass("show");
      $("div.overlay").addClass("show");
    });
   </script>
  </body>
</html>