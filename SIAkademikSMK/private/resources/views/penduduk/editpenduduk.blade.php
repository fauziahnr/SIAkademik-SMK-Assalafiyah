@extends('layouts.masterklorofil')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Siswa</h5>
          {!! Form::open(array('route' =>['penduduk.update',$penduduk],'method'=>'PUT', 'enctype' => 'multipart/form-data')) !!}
          <div class="form-group">
              {!! Form::label('nama_depan', 'Nama Depan', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('nama_depan', old('nama_depan', $penduduk->nama_depan), ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Nama', 'autofocus', 'required']) !!}
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
                  {!! Form::text('nama_belakang', old('nama_belakang', $penduduk->nama_belakang), ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Nama Belakang', 'autofocus', 'required']) !!}
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
                "placeholder" => "Pilih Kategori",'required', old('category',$penduduk->jenis_kelamin) == 'Laki-Laki' ? 'selected' : ''
             ])
            }}
            </div>
          </div>

          <div class="form-group">
              {!! Form::label('tempat_lahir', 'Tempat Lahir', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('tempat_lahir', old('tempat_lahir', $penduduk->tempat_lahir), ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Tanggal Lahir', 'autofocus', 'required']) !!}
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
                  {!! Form::date('tanggal_lahir', old('tanggal_lahir', $penduduk->tanggal_lahir), ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Tanggal Lahir', 'autofocus', 'required']) !!}
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
                  {!! Form::textarea('alamat', old('alamat', $penduduk->alamat), ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Alamat', 'autofocus', 'required']) !!}
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
                  {!! Form::text('kelurahan', old('kelurahan', $penduduk->kelurahan), ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masuakan Kelurahanr', 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('pekerjaan', 'Pekerjaan', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('pekerjaan', old('pekerjaan', $penduduk->pekerjaan), ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Pekerjaan', 'autofocus', 'required']) !!}
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
                  {!! Form::text('agama', old('agama', $penduduk->agama), ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Agama', 'autofocus', 'required']) !!}
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('status_kawin', 'Status Kawin', ['class' => 'control-label col-md-3']) !!}
              <div class="col-md-12">
                  {!! Form::text('status_kawin', old('status_kawin', $penduduk->status_kawin), ['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' ),
                   'placeholder' => 'Masukan Status Kawinr', 'autofocus', 'required']) !!}
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
                      {!! Form::file('gambar', old($penduduk->gambar),  ['id'=>'inputgambar', 'class' => 'form-control']) !!}
                  <img src="{{asset('private/storage/app/public/gambar/'.$penduduk->gambar)}}" width="80" id="showgambar">
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
