@extends('layouts.masterklorofil')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
              {!! csrf_field() !!}
        <div class="card-body">
          <h5 class="card-title">Tambah Data Siswa</h5>
          {!! Form::open(array('route' => 'penduduk.store','method'=>'POST', 'enctype' => 'multipart/form-data')) !!}
          <div class="form-group">
              {!! Form::label('nama_depan', 'Nama Depan', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('nama_depan', '', ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Nama Depan', old('nama_depan'), 'autofocus', 'required']) !!}
                   @error('title')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                    @enderror
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('nama_belakang', 'Nama Belakang', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('nama_belakang', '', ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Nama Belakang', old('nama_belakang'), 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>


          <div class="form-group">
            {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'control-label col-md-3']) !!}
            <div class="col-md-12">
              {{Form::select('jenis_kelamin',['Laki-Laki' => 'Laki-Laki',
               'Perempuan' => 'Perempuan'

               ], null,
             [
                "class" => "form-control",
                "placeholder" => "Pilih Kategori",'required', old('category') == 'Laki-Laki' ? 'selected' : ''
             ])
            }}
            </div>
          </div>

          <div class="form-group">
              {!! Form::label('tempat_lahir', 'Tempat Lahir', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('tempat_lahir', '', ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Tempat Lahir', old('tempat_lahir'), 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::date('tanggal_lahir', '', ['class' => 'form-control datepicker' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Tanggal Lahir', old('tanggal_lahir'), 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>
          <div class="form-group">
              {!! Form::label('alamat', 'Alamat', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::textarea('alamat', '', ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masuakan Alamat', old('alamat'), 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>
          <div class="form-group">
              {!! Form::label('kelurahan', 'Kelurahan', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('kelurahan', '', ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Kelurahan', old('kelurahan'), 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>
          <div class="form-group">
              {!! Form::label('pekerjaan', 'No Telepon', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('pekerjaan', '', ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan No Telepon', old('pekerjaan'), 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>
          <div class="form-group">
              {!! Form::label('agama', 'Agama', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('agama', '', ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Agama', old('agama'), 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>
          <div class="form-group">
              {!! Form::label('status_kawin', 'Status Siswa', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('status_kawin', '', ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Status Siswa', old('status_kawin'), 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>

          <div class="form-group">
            {!! Form::label('gambar','Foto' , ['class' => 'control-label col-md-3']) !!}
            <div class="col-md-9">
              {!! Form::file('gambar', ['class' => 'form-control']) !!}
              @error('title')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>kawin      @enderror
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
