@extends('admin.auth.tema.content')
@section('content')
    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner py-4">
            <!-- Forgot Password -->
            <div class="card">
              <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                  <a href="{{url('/')}}" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                      <img src="{{url('assets/img/logo.png')}}" alt="" width="60px">
                    </span>
                    <span class="app-brand-text demo text-body fw-bolder">{{Nfs::app()}}</span>
                  </a>
                </div>

                {{-- error --}}

              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                  </div>
              @endif

              @if(session()->has('error'))

              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session('error')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              @endif

              @if(session()->has('success'))

              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              @endif

          {{-- error --}}
                <!-- /Logo -->
                <h4 class="mb-2">Lupa Password? 🔒</h4>
                <p class="mb-4">Masukan e-mail untuk mengirimkan password baru ke e-mail anda</p>
                <form id="formAuthentication" class="mb-3" action="{{url('forget-password')}}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="email"
                      placeholder="Enter your email"
                      autofocus
                    />
                  </div>
                  <button type="submit" id="submit" class="btn btn-primary d-grid w-100">Send Reset Password</button>
                </form>
                <div class="text-center">
                  <a href="{{url('login')}}" class="d-flex align-items-center justify-content-center">
                    <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                    Back to login
                  </a>
                </div>
              </div>
            </div>
            <!-- /Forgot Password -->
          </div>
        </div>
      </div>
    <!-- / Content -->

@endsection
