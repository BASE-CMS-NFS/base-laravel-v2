<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{url('assets')}}"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>{{Nfs::content('app')}}</title>
    <meta name="description" content="" />

    @include('template.css')

    @stack('css')

  </head>
  <body>

     <!-- Layout wrapper -->
     <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            {{-- sidebar --}}
              @include('template.sidebar')
            
            <div class="layout-page">

                {{-- header --}}
                @include('template.header')

                <div class="content-wrapper">
                
                  <div class="container-xxl flex-grow-1 container-p-y">

                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manu /</span> {{$title}}</h4>
                    
                    @include('template.alert')

                    @yield('content')

                  </div>

                    @include('template.footer')

                    <div class="content-backdrop fade"></div>

                </div>

            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>

     </div>

     <div class="buy-now">
        <a
          href="https://api.whatsapp.com/send?phone=6282132715484"
          target="_blank"
          class="btn btn-danger btn-buy-now"
          ><i class="bx bxl-whatsapp"></i></a
        >
      </div>

    @include('template.js')

    @stack('js')
  </body>
</html>