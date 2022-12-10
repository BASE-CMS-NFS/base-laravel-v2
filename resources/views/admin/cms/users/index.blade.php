@extends('template.content')
@section('content')


<div class="mb-3">
  <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid" style="justify-content: start">
        <a class="btn btn-primary btn-sm" href="{{url('admin/users/create')}}"><i class='bx bx-plus'></i>&nbsp;add data</a>
        </div>
    </nav>
  </div>

    <div class="row">
        <div class="col-sm-12">
            
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{$title}}</h4>
                    <div class="table-responsive">
                      <table class="table table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $key)
                          <tr>
                            <td>{{$key->name}}</td>
                            <td>{{$key->cms_role_name}}</td>
                            <td>{{$key->email}}</td>
                            <td>{{$key->phone}}</td>
                            <td>{{$key->status}}</td>
                            <td>
                              <a href="{{url('admin/users/show/'.Nfs::Encrypt($key->id))}}" class="btn btn-sm btn-primary">detail</a>
                              <a href="{{url('admin/users/edit/'.Nfs::Encrypt($key->id))}}" class="btn btn-sm btn-warning">edit</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
        </div>
    </div>

@endsection