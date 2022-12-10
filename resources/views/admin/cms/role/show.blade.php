@extends('template.content')
@section('content')

    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{$title}}</h4>
              <p class="card-description"> {{$subtitle}} </p>
              
              <div class="table-responsive">
                <table class="table table-borderless">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{{$row->name}}</td>
                    </tr>
                </table>
              </div>

              <hr>
                <div class="row mt-20">
                  <div class="col-sm-12">
                      <a class="btn btn-success" href="{{url('admin/role')}}">Back</a>
                  </div>
                </div>

            </div>
          </div>
        </div>
    </div>


@endsection