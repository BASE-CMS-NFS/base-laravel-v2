@extends('template.content')
@section('content')

    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{$title}}</h4>
              <p class="card-description"> {{$subtitle}} </p>
              <form class="forms-sample" method="POST" action="{{url('admin/role/store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="name">
                </div>

                <hr>
                <div class="row mt-20">
                  <div class="col-sm-12">
                      <a class="btn btn-success" href="{{url('admin/role')}}">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
    </div>


@endsection