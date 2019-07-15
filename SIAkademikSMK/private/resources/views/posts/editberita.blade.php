@extends('layouts.masterklorofil')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Berita</h5>
          {!! Form::open(array('route' =>['post.update',$post],'method'=>'PUT', 'enctype' => 'multipart/form-data')) !!}
          <div class="form-group">
              {!! Form::label('title', 'Title', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('title', old('title', $post->title), ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Title', 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('content', 'Content', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('content', old('content', $post->content), ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Content', 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-3">
                  {{ Form::submit('Simpan',['class' => 'btn btn-primary'])}}
              </div>
          </div>

          {{ Form::close()}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script type="text/javascript">

    function readURL(input){
        if (input.files && input.files[0]){
            var reader = new FileReader();

            reader.onload = function (e){
                $('$showgambar').attr('src', e.target.result);
            }

            reader.readAsDataUrl(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });
</script>
