@extends('template.content')
@section('content')

    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{$title}}</h4>
              <p class="card-description"> {{$subtitle}} </p>
              <form class="forms-sample" method="POST" action="{{url('admin/settings/store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                  <label for="name">{{Helper::uc('name')}}</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                </div>

                <div class="form-group">

                    <label for="value">{{Helper::uc('value')}}</label>
                    <input type="text" class="form-control" id="value" name="value" placeholder="value" required>
                  </div>

                <div class="form-group">
                    <label for="description">{{Helper::uc('description')}}</label>
                    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                  </div>

                  <div class="form-group" style="margin-top: 10px">
                    <label for="description">{{Helper::uc('image')}}</label>
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-danger me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block"><i class='bx bx-cloud-upload'></i>&nbsp;Upload photo</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                        <input
                            type="file"
                            id="upload"
                            class="account-file-input"
                            hidden
                            accept="image/png, image/jpeg"
                            name="image"
                        />
                        </label>
                    </div>
                </div>


                <hr>
                
                <div class="form-group mt-20">
                  <a class="btn btn-success" href="{{url('admin/settings')}}"><i class="mdi mdi-arrow-left-thick"></i>&nbsp;Back</a>
                    <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-content-save"></i>&nbsp;Submit</button>
                </div>

              </form>
            </div>
          </div>
        </div>
    </div>


@endsection