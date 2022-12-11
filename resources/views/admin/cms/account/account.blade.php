@extends('template.content')
@section('content')

<div class="row">
    <div class="col-md-12">
        @include('admin.cms.account.nav')
      <div class="card mb-4">
        <h5 class="card-header">{{$title}}</h5>
        <!-- Account -->
        <form action="{{url('account/update')}}"  method="POST" enctype="multipart/form-data">
            @csrf
 
        <hr class="my-0" />
        <div class="card-body">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Name</label>
                <input
                  class="form-control"
                  type="text"
                  id="name"
                  name="name"
                  value="{{$row->name}}"
                  autofocus
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input
                  class="form-control"
                  type="text"
                  id="email"
                  name="email"
                  value="{{$row->email}}"
                  placeholder="john.doe@example.com"
                  readonly
                />
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="phone">Phone Number</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text">(+62)</span>
                  <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="{{$row->phone}}"
                    class="form-control"
                    placeholder="202 555 0111"
                    readonly
                  />
                </div>
              </div>

            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Save changes</button>
              <button type="reset" class="btn btn-outline-secondary">Cancel</button>
            </div>
        </div>
    </form>
        <!-- /Account -->
      </div>
    </div>
</div>

@endsection