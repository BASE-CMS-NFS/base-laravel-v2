@extends('admin.auth.tema.content')
@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register Card -->
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
                <h4 class="mb-2">Adventure starts here 🚀</h4>
                <p class="mb-4">Make your app management easy and fun!</p>
  
                <form id="formAuthentication" class="mb-3" action="{{url('sign-up')}}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="username" class="form-label">Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      name="name"
                      placeholder="Enter your name"
                      autofocus
                    />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"/>
                  </div>

                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter your phone"/>
                  </div>

                  <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Password</label>
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

                  <button type="submit" id="submit" class="btn btn-primary d-grid w-100">Buat Akun</button>
                </form>
  
                <p class="text-center">
                  <span>Sudah mempunyai account?</span>
                  <a href="{{url('login')}}">
                    <span>Login disini</span>
                  </a>
                </p>
              </div>
            </div>
            <!-- Register Card -->
          </div>
        </div>
      </div>
  
      <!-- / Content -->
@endsection
