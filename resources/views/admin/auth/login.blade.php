@extends('admin.auth.tema.content')
@section('content')
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
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
              <h4 class="mb-2">Selamat Datang di {{Nfs::app()}}! 👋</h4>
              <p class="mb-4">Silahkan login</p>

              <form id="formAuthentication" class="mb-3" action="{{url('sign-in')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="{{url('forget')}}">
                      <small>Lupa Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit" id="submit">Sign in</button>
                </div>
              </form>

              <p class="text-center">
                <small>
                  <span>Registrasi Account?</span>
                  <a href="{{url('register')}}">
                    <span>Buat account</span>
                  </a>
                </small>
              </p>
              
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

@endsection
