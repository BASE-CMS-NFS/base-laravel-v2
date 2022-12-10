@extends('template.content')
@section('content')

    
<div class="mb-3">
  <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid" style="justify-content: start">
        <a class="btn btn-primary btn-sm" href="{{url('admin/emails/create')}}"><i class='bx bx-plus'></i>&nbsp;add data</a>
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
                            <th>name</th>
                            <th>slug</th>
                            <th>subject</th>
                            <th>from name</th>
                            <th>from email</th>
                            <th>cc email</th>
                            <th>image</th>
                            <th>action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($cms_emails as $key)
                          <tr>
                            <td>{{$key->name}}</td>
                            <td>{{$key->slug}}</td>
                            <td>{{$key->subject}}</td>
                            <td>{{$key->from_name}}</td>
                            <td>{{$key->from_email}}</td>
                            <td>{{$key->cc_email}}</td>
                            <td>
                              @if($key->image)
                              <a data-fslightbox="gallery" href="{{url('storage/'.$key->image)}}">
                                  <img src="{{url('storage/'.$key->image)}}" class="img-table" alt="{{$key->name}}">
                              </a>
                              @else
                                  <p>no image</p>
                              @endif
                          </td>
                            <td>
                              <a href="{{url('admin/emails/show/'.$key->id)}}" class="btn btn-sm btn-primary">detail</a>
                              <a href="{{url('admin/emails/edit/'.$key->id)}}" class="btn btn-sm btn-warning">edit</a>
                              <a href="javascript:void(0)" onclick="hapus('{{url('admin/emails/destroy/'.$key->id)}}')" class="btn btn-sm btn-danger">delete</a>
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