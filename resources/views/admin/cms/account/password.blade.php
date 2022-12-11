@extends('template.content')
@section('content')

<div class="row">
    <div class="col-md-12">
      @include('admin.cms.account.nav')
      <div class="card mb-4">
        <h5 class="card-header">{{$title}}</h5>
        <!-- Account -->
        <div class="card-body">
          <form method="POST" action="{{url('password/update')}}">
            @csrf
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password"
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="password_confirm" class="form-label">Password Confirm</label>
                <input
                  type="password"
                  id="password_confirm"
                  class="form-control"
                  name="password_confirm"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password"
                />
              </div>
     
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Save changes</button>
              <button type="reset" class="btn btn-outline-secondary">Cancel</button>
            </div>
          </form>
        </div>
        <!-- /Account -->
      </div>
    </div>
</div>
    

@endsection