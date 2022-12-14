@extends('admin.auth.tema.content')
@section('content')

@push('css')
<link rel="stylesheet" href="{{url('assets/vendor/css/pages/page-misc.css')}}" />
@endpush

 <!-- Error -->
 <div class="container-xxl container-p-y">
    <div class="misc-wrapper">
      <h2 class="mb-2 mx-2">Page Not Found :(</h2>
      <p class="mb-4 mx-2">Oops! 😖 The requested URL was not found on this server.</p>
      @auth
        <a href="{{url('dashboard')}}" class="btn btn-primary">Back to home</a>
      @endauth
      
      @guest
        <a href="{{url('/')}}" class="btn btn-primary">Back to home</a>
      @endguest

      <div class="mt-3">
        <img
          src="{{url('assets/img/illustrations/page-misc-error-light.png')}}"
          alt="page-misc-error-light"
          width="500"
          class="img-fluid"
          data-app-dark-img="illustrations/page-misc-error-dark.png"
          data-app-light-img="illustrations/page-misc-error-light.png"
        />
      </div>
    </div>
  </div>

@endsection