@extends('admin.auth.tema.content')
@section('content')

@push('css')
<link rel="stylesheet" href="{{url('assets/vendor/css/pages/page-misc.css')}}" />
@endpush

 <!-- Error -->
 <div class="container-xxl container-p-y">
    <div class="misc-wrapper">
      <h2 class="mb-2 mx-2">Sukses Registrasi</h2>
      <p class="mb-4 mx-2">Link confirmasi sudah di kirim ke email, silahkan check email :)</p>

     <a href="{{url('login')}}" class="btn btn-primary">Login</a>


      <div class="mt-3">
        <img
          src="{{url('assets/img/email.jpg')}}"
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