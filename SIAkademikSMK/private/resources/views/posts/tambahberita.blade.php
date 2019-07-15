@extends('layouts.masterklorofil')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
              {!! csrf_field() !!}
        <div class="card-body">
          <h5 class="card-title">Tambah Postingan Baru</h5>
          {!! Form::open(array('route' => 'post.store','method'=>'POST', 'enctype' => 'multipart/form-data')) !!}
          <div class="form-group">
              {!! Form::label('title', 'Title', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('title', '', ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Judul', old('title'), 'autofocus', 'required']) !!}
                   @error('title')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                    @enderror
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('content', 'Konten', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('content', '', ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Konten', old('content'), 'autofocus', 'required']) !!}
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
