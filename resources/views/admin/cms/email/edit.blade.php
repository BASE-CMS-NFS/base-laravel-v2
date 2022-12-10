@extends('template.content')
@section('content')

    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{$title}}</h4>
              <p class="card-description"> {{$subtitle}} </p>
              <form class="forms-sample" method="POST" action="{{url('admin/emails/update')}}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{$row->id}}">
                <div class="form-group">

                  <label for="template name">{{Helper::uc('template name')}}</label>
                  <input type="text" class="form-control" value="{{$row->name}}" id="name" name="name" placeholder="name" required>
                </div>

                <div class="form-group">

                    <label for="slug">{{Helper::uc('slug')}}</label>
                    <input type="text" class="form-control" id="slug" value="{{$row->slug}}" name="slug" placeholder="slug" required>
                  </div>

                <div class="form-group">
                    <label for="subject">{{Helper::uc('subject')}}</label>
                    <textarea class="form-control" name="subject" id="subject" rows="4">{{$row->subject}}</textarea>
                </div>

                <div class="form-group">
                    <label for="content">{{Helper::uc('content')}}</label>
                    <textarea class="form-control" name="content" id="content" rows="10">{{$row->content}}</textarea>
                </div>

                <div class="form-group">
                    <label for="description">{{Helper::uc('description')}}</label>
                    <textarea class="form-control" name="description" id="description" rows="4">{{$row->description}}</textarea>
                </div>

                <div class="form-group">
                    @if($row->image)
                            <img class="img-show" src="{{url('storage/'.$row->image)}}" alt="">
                    @endif
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


                <div class="form-group">

                    <label for="from_name">{{Helper::uc('from name')}}</label>
                    <input type="text" class="form-control" id="from_name" name="from_name" value="{{$row->from_name}}"  placeholder="from name" required>
                </div>

                <div class="form-group">

                    <label for="from_email">{{Helper::uc('from email')}}</label>
                    <input type="text" class="form-control" id="from_email" name="from_email" value="{{$row->from_email}}" placeholder="from email" required>

                </div>

                <div class="form-group">

                    <label for="cc_email">{{Helper::uc('cc email')}}</label>
                    <input type="text" class="form-control" id="cc_email" name="cc_email" value="{{$row->cc_email}}" placeholder="cc email">

                </div>

                <hr>
                
                <div class="row mt-20">
                    <div class="col-sm-12">
                        <a class="btn btn-success" href="{{url('admin/emails')}}">Back</a>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

              </form>
            </div>
          </div>
        </div>
    </div>

    @push('js')

    <script>
        ClassicEditor
    .create( document.querySelector( '#content' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#description' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
    </script>
        
    @endpush

@endsection