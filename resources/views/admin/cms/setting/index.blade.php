@extends('template.content')
@section('content')

<div class="mb-3">
  <div class="card-body">
    <div class="row">
      <!-- List group Numbered -->
      <div class="col-sm-12">
        <small class="text-light fw-semibold">Setting Cms Required</small>
        <div class="demo-inline-spacing mt-3">
          <ol class="list-group list-group-numbered">
            <li class="list-group-item">app (penamaan aplikasi atau website)</li>
            <li class="list-group-item">email (email smtp wajib di isi)</li>
            <li class="list-group-item">phone (wajib di isi)</li>
            <li class="list-group-item">domain (wajib di isi nama domain)</li>
            <li class="list-group-item">favicon (wajib di isi image / ico, max 16 kb)</li>
            <li class="list-group-item">logo (wajib di isi image logo website)</li>
            <li class="list-group-item">profile_image (wajib di isi image logo profile default)</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mb-3">
  <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid" style="justify-content: start">
        <a class="btn btn-primary btn-sm" href="{{url('admin/settings/create')}}"><i class='bx bx-plus'></i>&nbsp;add data</a>
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
                            <th>Value</th>
                            <th>description</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($cms_settings as $key)
                          <tr>
                            <td>{{$key->name}}</td>
                            <td>{{$key->value}}</td>
                            <td>{{$key->description}}</td>
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
                              <a href="{{url('admin/settings/show/'.$key->id)}}" class="btn btn-sm btn-primary">detail</a>
                              <a href="{{url('admin/settings/edit/'.$key->id)}}" class="btn btn-sm btn-warning">edit</a>
                              <a href="javascript:void(0)" onclick="hapus('{{url('admin/settings/destroy/'.$key->id)}}')" class="btn btn-sm btn-danger">delete</a>
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